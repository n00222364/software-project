<?php

namespace Tests\Feature;

use App\Models\Beach;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BeachTest extends TestCase
{
   use RefreshDatabase;

    // general testing
    //    test beaches may be viewed by anyone
    public function test_beach_can_be_viewed(): void
    {
        $response = $this->get('/beaches');
        $response->assertStatus(200);
    }

    // test that anyone can view a single beach
    public function test_beach_details(): void
    {
        $beach = Beach::factory()->create();
        $response = $this->get('/beaches/' . $beach->id);
        $response->assertStatus(200);
    }

    // admin testing
    // test admin can view the create beach page
    public function test_admin_can_view_create_beach_page(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);
        $this->actingAs($admin);

        $response = $this->get('/beaches/create');

        $response->assertStatus(200);
    }

    // test admins can create a beach
    public function test_admin_can_create_beach(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);
        $this->actingAs($admin);

        $response = $this->post('/beaches', [
            'name' => 'Test Beach',
            'description' => 'A test beach description',
            'latitude' => 53.256338,
            'longitude' => -6.112193,
            'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/TEST1234',
        ]);

        $this->assertDatabaseHas('beaches', ['name' => 'Test Beach']);
        $response->assertRedirect(route('beaches.index'));
    }

    // test an admin can update a beach
    public function test_admin_can_update_beach(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);
        $beach = Beach::factory()->create();

        $this->actingAs($admin);

        $response = $this->put('/beaches/' . $beach->id, [
            'name' => 'Updated Beach',
            'description' => 'Updated description',
            'latitude' => 53.123456,
            'longitude' => -6.123456,
            'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/UPDATED1234',
        ]);

        $response->assertRedirect(route('beaches.index'));
        $this->assertDatabaseHas('beaches', [
            'id' => $beach->id,
            'name' => 'Updated Beach',
        ]);
    }

    // test admins can delete beaches
    public function test_admin_can_delete_beach(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);
        $this->actingAs($admin);

        // make beaches to delete for test
        $beach = Beach::factory()->create();

        $response = $this->delete('/beaches/' . $beach->id);

        $this->assertDatabaseMissing('beaches', ['id' => $beach->id]);
        $response->assertRedirect(route('beaches.index'));
    }

    // test for creating a beach with bad data
    public function test_admin_cannot_create_beach_with_bad_data(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);
        $this->actingAs($admin);

        $response = $this->from('/beaches/create')->post('/beaches', [
            'name' => '',
            'description' => '',
            'latitude' => 'not-a-number',
            'longitude' => '',
            'quality_results' => 'not-a-url',
        ]);

        $response->assertSessionHasErrors([
            'name',
            'description',
            'latitude',
            'longitude',
            'quality_results',
        ]);
    }

    // test that admins cant put bad data in when editing
    public function test_admin_cannot_update_beach_with_bad_data(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);
        $beach = Beach::factory()->create();

        $this->actingAs($admin);

        $response = $this->from('/beaches/' . $beach->id . '/edit')->put('/beaches/' . $beach->id, [
            'name' => '',
            'description' => '',
            'latitude' => 'NAN',
            'longitude' => '',
            'quality_results' => 'NAN',
        ]);

        $response->assertSessionHasErrors([
            'name',
            'description',
            'latitude',
            'longitude',
            'quality_results',
        ]);
    }



    // User testing
    // test users cant create beaches
    public function test_user_cant_create_beach(): void
    {
        $user = User::factory()->create(['role' => 'user']);
        $this->actingAs($user);

        $response = $this->post('/beaches', [
            'name' => 'Illegal Beach',
            'description' => 'This should not be here',
            'latitude' => 53.256338,
            'longitude' => -6.112193,
            'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/TEST1234',
        ]);

        $this->assertDatabaseMissing('beaches', ['name' => 'Illegal Beach']);
        $response->assertStatus(403);
    }

    // test users cant delete beaches
    public function test_users_cant_delete_beach(): void
    {
        $user = User::factory()->create(['role' => 'user']);
        $this->actingAs($user);

        // make beaches to delete for test
        $beach = Beach::factory()->create();

        $response = $this->delete('/beaches/' . $beach->id);

        $this->assertDatabaseHas('beaches', ['id' => $beach->id]);
        $response->assertStatus(403);
    }

    // test users cannot get to the create beach page
    public function test_user_cannot_view_create_beach_page(): void
    {
        $user = User::factory()->create(['role' => 'user']);
        $this->actingAs($user);

        $response = $this->get('/beaches/create');

        $response->assertStatus(403);
    }

    // test users cannot update a beach
    public function test_user_cannot_update_beach(): void
    {
        $user = User::factory()->create(['role' => 'user']);
        $beach = Beach::factory()->create();

        $this->actingAs($user);

        $response = $this->put('/beaches/' . $beach->id, [
            'name' => 'Invalid Beach',
            'description' => 'This should not update',
            'latitude' => 53.123456,
            'longitude' => -6.123456,
            'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/invalid1234',
        ]);

        $response->assertStatus(403);
        $this->assertDatabaseMissing('beaches', [
            'id' => $beach->id,
            'name' => 'Invalid Beach',
        ]);
    }

    // test if users can favourite
    public function test_users_can_favourite(): void
    {
        $user = User::factory()->create();
        $beach = Beach::factory()->create();

        $this->actingAs($user);

        $response = $this->post('/beaches/' . $beach->id . '/favourite');

        $response->assertRedirect();
        $this->assertDatabaseHas('favourites', [
            'user_id' => $user->id,
            'beach_id' => $beach->id
        ]);
    }

    // test that users may unfavourite beaches
    public function test_users_can_unfavourite(): void
    {
        $user = User::factory()->create();
        $beach = Beach::factory()->create();

        $user->favouriteBeaches()->attach($beach->id);

        $this->actingAs($user);

        $response = $this->delete('/beaches/' . $beach->id . '/unfavourite');

        $response->assertRedirect();
        $this->assertDatabaseMissing('favourites', [
            'user_id' => $user->id,
            'beach_id' => $beach->id,
        ]);
    }

    // test that the favourites page actually displays
    public function test_favourites_page_displays(): void
    {
        $user = User::factory()->create();
        $beach = Beach::factory()->create([
            'name' => 'Favourite Beach',
        ]);

        $user->favouriteBeaches()->attach($beach->id);

        $this->actingAs($user);

        $response = $this->get('/favourites');

        $response->assertStatus(200);
        $response->assertSee('Favourite Beach');
    }


    // guest testing
    // test that non logged in users cannot see favourites page
    public function test_favourites_page_requires_login(): void
    {
        $response = $this->get('/favourites');

        $response->assertRedirect('/login');
    }

    // test non logged in users/guests cant favourite
    public function test_guest_cannot_favourite_a_beach(): void
    {
        $beach = Beach::factory()->create();

        $response = $this->post('/beaches/' . $beach->id . '/favourite');

        $response->assertRedirect('/login');
    }
}
