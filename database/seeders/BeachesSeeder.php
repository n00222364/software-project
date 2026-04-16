<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeachesSeeder extends Seeder
{
    public function run()
    {
        $beaches = [
            //1
            [
                'name' => 'Ballycuggeran',
                'latitude' => 52.837195,
                'longitude' => -8.464185,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IESHBWL25_191a_0300',
                'description' => 'Ballycuggeran bathing area is sandy and extends approximately 80m along the shoreline of Lough Derg Special Protection Area.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //2
            [
                'name' => 'Fanore',
                'latitude' => 53.11793,
                'longitude' => -9.2896,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IESHBWC070_0000_0100',
                'description' => 'Fanore is a sandy beach underlain by gently sloping stepped limestone, which is exposed in parts at low tide.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //3
            [
                'name' => 'Kilkee',
                'latitude' => 52.678599,
                'longitude' => -9.650793,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IESHBWC070_0000_0400',
                'description' => 'Kilkee is a crescent shaped beach of brown coloured, poorly sorted sand and it is fairly flat over most of its width.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //4
            [
                'name' => 'Lahinch',
                'latitude' => 52.931777,
                'longitude' => -9.354074,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IESHBWC100_0000_0100',
                'description' => 'Lahinch is a sandy beach, subject to strong waves and strong currents.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //5
            [
                'name' => 'Mountshannon, Lough Derg',
                'latitude' => 52.929476,
                'longitude' => -8.428323,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IESHBWL25_191a_0200',
                'description' => 'Mountshannon is situated around a series of three small piers to the east and adjacent to the main south-facing harbour.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //6
            [
                'name' => 'Spanish Point',
                'latitude' => 52.842599,
                'longitude' => -9.433672,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IESHBWC070_0000_0300',
                'description' => 'Spanish Point lies to the west of Milltown Malbay on the road from Quilty to Lahinch.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //7
            [
                'name' => 'White Strand Doonbeg',
                'latitude' => 52.747861,
                'longitude' => -9.548333,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IESHBWC080_0000_0100',
                'description' => 'White Strand is a sandy beach, located in a rural area along the south-west coast of County Clare.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //8
            [
                'name' => 'White Strand Miltown Malbay',
                'latitude' => 52.868253,
                'longitude' => -9.428481,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IESHBWC070_0000_0200',
                'description' => 'White Strand beach is a relatively small sandy beach at the end of a narrow rock-flanked bay.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //9
            [
                'name' => 'Barley Cove',
                'latitude' => 51.46182,
                'longitude' => -9.761821,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IESWBWC150_0000_0200',
                'description' => 'Barley Cove Beach is a south facing sandy beach backing onto extensive sand dunes.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //10
            [
                'name' => 'Fountainstown',
                'latitude' => 51.773345,
                'longitude' => -8.312564,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IESWBWC050_0000_0100',
                'description' => 'Fountainstown Beach is an east-facing, gently sloping, sandy/shingle beach.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //11
            [
                'name' => 'Garretstown',
                'latitude' => 51.643541,
                'longitude' => -8.579908,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IESWBWC090_0000_0200',
                'description' => 'Garrettstown Beach is a south facing, gently sloping, sandy beach which is flanked on both sides by rocky cliffs.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //12
            [
                'name' => 'Garrylucas, White Strand',
                'latitude' => 51.640046,
                'longitude' => -8.567513,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IESWBWC090_0000_0200',
                'description' => 'Garrettstown Beach is a south facing, gently sloping, sandy beach which is flanked on both sides by rocky cliffs.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //13
            [
                'name' => 'Inchydoney East Beach',
                'latitude' => 51.598952,
                'longitude' => -8.855551,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IESWBWC230_0000_0200',
                'description' => 'Inch Strand is an exposed sandy beach, facing due west into Dingle Bay and to the Atlantic Ocean beyond.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //14
            [
                'name' => 'Inchydoney West Beach',
                'latitude' => 51.596908,
                'longitude' => -8.8648,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IESWBWC100_0000_0100',
                'description' => 'Inchydoney West Beach is a relatively gently sloping, sandy, south facing beach located at the north east of Clonakilty Bay.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //15
            [
                'name' => 'Owenahincha, Little Island Strand',
                'latitude' => 51.565142,
                'longitude' => -8.997528,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IESWBWC110_0000_0200',
                'description' => 'Owenahincha is a relatively gently sloping, sandy beach and has sand dunes to the rear which extend between 70m & 100m.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //16
            [
                'name' => 'Redbarn Beach',
                'latitude' => 51.924348,
                'longitude' => -7.873439,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IESWBWC020_0000_0100',
                'description' => 'Redbarn beach is a south facing, gently sloping, sandy/pebble beach. It is located on an approx. 5km long stretch of sandy coastline and is quite open to rough weather and rough seas.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //17
            [
                'name' => 'Tragumna',
                'latitude' => 51.500814,
                'longitude' => -9.266764,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IESWBWC010_0000_0100',
                'description' => 'Tragumna beach is a relatively gently sloping, sandy, south/south-west facing beach located at the north east of Tragumna Bay.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //18
            [
                'name' => 'Youghal Front Strand',
                'latitude' => 51.937871,
                'longitude' => -7.850995,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IESWBWC020_0000_0300',
                'description' => 'Youghal Front Strand is a gently sloping sandy beach with a concrete promenade area to the rear for most of the length of the beach.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //19
            [
                'name' => 'Youghal, Claycastle',
                'latitude' => 51.934108,
                'longitude' => -7.859104,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IESWBWC020_0000_0200',
                'description' => 'Claycastle Beach is a gently sloping sandy beach with a narrow area of marsh/dunes.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //20
            [
                'name' => 'Bundoran',
                'latitude' => 54.477559,
                'longitude' => -8.28144,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IENWBWC020_0000_0100',
                'description' => 'Bundoran beach consists of a sandy beach in a sheltered bay facing Donegal Bay and the Atlantic.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //21
            [
                'name' => 'Carrickfinn',
                'latitude' => 55.037781,
                'longitude' => -8.347017,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IENWBWC160_0000_0200',
                'description' => 'Carrickfinn is an extensive sandy beach with a good dune system.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //22
            [
                'name' => 'Culdaff',
                'latitude' => 55.294015,
                'longitude' => -7.151162,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IENWBWC230_0000_0200',
                'description' => 'Culdaff beach consists of a sandy beach with two rock outcrops at the south-east of the beach.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //23
            [
                'name' => 'Downings',
                'latitude' => 55.192771,
                'longitude' => -7.83581,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IENWBWC190_0000_0100',
                'description' => 'Downings beach consists of a sandy beach in Sheephaven Bay that is confined by Downings pier to the west and a small headland called Maslack to the South.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //24
            [
                'name' => 'Fintra',
                'latitude' => 54.633539,
                'longitude' => -8.484683,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IENWBWC070_0000_0100',
                'description' => 'Fintra beach consists of a long sandy beach; confined in a small inlet to the West of Killybegs Harbour, with hills and small cliffs to the west and the estuary of the Fintragh River to the East.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //25
            [
                'name' => 'Killahoey',
                'latitude' => 55.182782,
                'longitude' => -7.925132,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IENWBWC190_0000_0400',
                'description' => 'Killahoey beach consists of a sandy beach with a large inflowing estuary including a large mud flat at the east of the beach.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //26
            [
                'name' => 'Marble Hill',
                'latitude' => 55.174671,
                'longitude' => -7.898197,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IENWBWC190_0000_0200',
                'description' => 'Marble Hill beach consists of a sandy beach with two rock outcrops at the east of the beach.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //27
            [
                'name' => 'Murvagh',
                'latitude' => 54.616674,
                'longitude' => -8.166505,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IENWBWC010_0000_0100',
                'description' => 'Murvagh Beach is a long shallow, sandy beach containing sand dunes. Murvagh beach is situated within Donegal Bay which consists of intertidal habitats, notably mud and sand flats, sea inlets and bays, tidal rivers, estuarine channels and sandy beaches.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //28
            [
                'name' => 'Naran',
                'latitude' => 54.840084,
                'longitude' => -8.446593,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IENWBWC120_0000_0100',
                'description' => 'Naran beach is a sheltered cove beach approximately 2km long on the Atlantic coast of Ireland.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //29
            [
                'name' => 'Portsalon',
                'latitude' => 55.185429,
                'longitude' => -7.597644,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IENWBWC220_0000_0300',
                'description' => 'Portsalon beach consists of a sandy beach along the Swilly Estuary, sheltered to the south by the high rocky headland of Knockalla and contained to the north by flat land.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //30
            [
                'name' => 'Rossnowlagh',
                'latitude' => 54.552961,
                'longitude' => -8.210805,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IENWBWC010_0000_0200',
                'description' => 'Rossnowlagh is west facing consisting of a long sandy beach confined by the Coolmore cliffs to the South and extends up to Inishfad at Durnesh Lake to the North.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //31
            [
                'name' => 'Stroove',
                'latitude' => 55.227218,
                'longitude' => -6.928064,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IENWBWC230_0000_0100',
                'description' => 'Stroove beach consists of a small sandy beach. The beach is exposed at times during the tidal phase during the day.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //32
            [
                'name' => 'Killiney',
                'latitude' => 53.256338,
                'longitude' => -6.112193,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IEEABWC100_0000_0400',
                'description' => 'Killiney Beach is a long stony beach with stunning views of Bray Head, Dalkey Island and Sorrento Terrace.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //33
            [
                'name' => 'Seapoint',
                'latitude' => 53.297319,
                'longitude' => -6.159701,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IEEABWC090_0000_0100',
                'description' => 'Seapoint beach is a gently sloping sandy beach with areas of rocks along the coastline.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //34
            [
                'name' => 'Portmarnock, Velvet Strand Beach',
                'latitude' => 53.422197,
                'longitude' => -6.12079,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IEEABWC070_0000_0200',
                'description' => 'Velvet Strand Beach is a long, open, gently sloping beach facing east. Dunes are located to the back of the beach.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //35
            [
                'name' => 'Salthill Beach',
                'latitude' => 53.256417,
                'longitude' => -9.088779,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IEWEBWC170_0000_0200',
                'description' => 'The beach at Salthill is actually several small beaches separated by outcrops. Some of the beaches are sandy and some pebbly, with the main bathing areas located at Blackrock and Ladies Beach.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //36
            [
                'name' => 'Silverstrand Beach',
                'latitude' => 53.24969,
                'longitude' => -9.126527,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IEWEBWC170_0000_0100',
                'description' => 'Silverstrand Beach is a popular shallow, sandy beach bounded on one side by a cliff and the other by rocks.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //37
            [
                'name' => 'An Trá Mór',
                'latitude' => 53.228495,
                'longitude' => -9.457885,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IEWEBWC010_0000_0300',
                'description' => 'An Trá Mór is a sandy beach located along the Connemara coastline. The strand itself is located between areas of rocky shore and is surrounded by farmland.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //38
            [
                'name' => 'Bathing Place at Portumna',
                'latitude' => 53.0822,
                'longitude' => -8.2104,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IESHBWL25_191a_0100',
                'description' => 'Portumna bathing water is a pleasant well maintained facility used throughout the year.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //39
            [
                'name' => 'Loughrea Lake',
                'latitude' => 53.192926,
                'longitude' => -8.565331,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IEWEBWL29_194_0100',
                'description' => 'Loughrea Lake Bathing area is pleasantly situated in a shallow relatively sandy area of the lake between a man made pier on the west and a small beach on the eastern end.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //40
            [
                'name' => 'Trá an Dóilín, An Ceathrú Rua',
                'latitude' => 53.249078,
                'longitude' => -9.629908,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IEWEBWC200_0000_0100',
                'description' => 'Trá an Dóilín is an unusual beach formed from a plethora of dead fragments of "maerl", a twig-like calcareous seaweed.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //41
            [
                'name' => 'Trá Inis Oírr',
                'latitude' => 53.066038,
                'longitude' => -9.520407,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IEWEBWC010_0000_0250',
                'description' => 'Inis Oírr is situated 17km off the Galway coast and 9km off the Clare coast. The beach is on the northern coast of the island and is known as Trá Inis Oírr.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //42
            [
                'name' => 'Traught, Kinvara',
                'latitude' => 53.172143,
                'longitude' => -8.98628,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IEWEBWC160_0000_0100',
                'description' => 'Traught beach is a long, sandy, gently sloping beach consisting of a lower sand/mud shore with shingle on the upper shore.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //43
            [
                'name' => 'Baile an Sceilg (Ballinskelligs)',
                'latitude' => 51.821627,
                'longitude' => -10.272688,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IESWBWC200_0000_0100',
                'description' => 'Baile an Sceilg is a sandy beach backing onto Baile an Sceilg village. The beach is sheltered from Atlantic wave action by Horse island.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //44
            [
                'name' => 'Ballybunion North',
                'latitude' => 52.511562,
                'longitude' => -9.67864,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IESHBWC060_0000_0200',
                'description' => 'Ballybunnion North is an exposed sandy beach facing due west onto the Atlantic ocean, thus the beach can be rough at times.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //45
            [
                'name' => 'Ballybunion South',
                'latitude' => 52.505607,
                'longitude' => -9.681472,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IESHBWC060_0000_0300',
                'description' => 'Ballybunnion South is an exposed sandy beach facing due west onto the Atlantic ocean, thus the beach can be rough at times.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //46
            [
                'name' => 'Ballyheigue',
                'latitude' => 52.383047,
                'longitude' => -9.834241,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IESHBWC040_0000_0100',
                'description' => 'Ballyheigue is an exposed sandy beach facing due west onto the Atlantic ocean, thus the beach can be rough at times. There is no vegetation of note at the rear of the majority of the bathing water.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //47
            [
                'name' => 'Banna Strand',
                'latitude' => 52.35083,
                'longitude' => -9.835861,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IESHBWC040_0000_0200',
                'description' => 'Banna bathing water is located in a rural area. There are no buildings located in the sand dune system or on the promenade to the back of the bathing waters.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //48
            [
                'name' => 'Doire Fhíonáin (Derrynane)',
                'latitude' => 51.759764,
                'longitude' => -10.138573,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IESWBWC150_0000_0100',
                'description' => 'Doire Fhíonáin (Derrynane) is a south westerly facing sandy beach backing onto sand dunes. It is exposed to Atlantic wave action and westerly winds.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //49
            [
                'name' => 'Fenit',
                'latitude' => 52.27539,
                'longitude' => -9.866256,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IESHBWC040_0000_0250',
                'description' => 'Fenit beach is a relatively sheltered sandy beach facing due south into Tralee Bay. Fenit beach has no vegetation of note due to a concrete promenade at the rear of the beach which spans the length of the bathing water.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //50
            [
                'name' => 'Fenit Marina',
                'latitude' => 52.275259,
                'longitude' => -9.86407,
                'quality_results' => 'N/A',
                'description' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //51
            [
                'name' => 'Fionntrá (Ventry)',
                'latitude' => 52.132062,
                'longitude' => -10.364145,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IESWBWC230_0000_0100',
                'description' => 'Fionntrá is a relatively sheltered sandy beach facing due east/southeast onto Cuan Fionntrá. Cuan Fionntrá is a sheltered inlet of Dingle Bay.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //52
            [
                'name' => 'Inch',
                'latitude' => 52.142441,
                'longitude' => -9.985369,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IESWBWC230_0000_0200',
                'description' => 'Inch Strand is an exposed sandy beach, facing due west into Dingle Bay and to the Atlantic Ocean beyond.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //53
            [
                'name' => 'Kells',
                'latitude' => 52.024796,
                'longitude' => -10.104666,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IESWBWC230_0000_0400',
                'description' => 'Kells Beach is a small sandy cove located in a little inlet in a predominantly rocky shoreline. The beach is largely sheltered from Atlantic wave action.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //54
            [
                'name' => 'Maharabeg',
                'latitude' => 52.278633,
                'longitude' => -10.023386,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IESHBWC040_0000_0400',
                'description' => 'Maharabeg Beach is a sandy beach, with a shingle ridge, and faces east/south-east into Tralee Bay.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //55
            [
                'name' => 'Rossbeigh, White Strand',
                'latitude' => 52.058163,
                'longitude' => -9.975198,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IESWBWC230_0000_0300',
                'description' => 'Rossbeigh Beach is an exposed sandy beach, with a shingle ridge, facing due west into Dingle Bay and to the Atlantic Ocean beyond.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //56
            [
                'name' => 'White Strand, Caherciveen',
                'latitude' => 51.942921,
                'longitude' => -10.274142,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IESWBWC220_0000_0100',
                'description' => 'White Strand is a small west facing sandy cove (~ 450m in length) exposed to prevailing winds. The beach is sheltered from Atlantic wave action by Beginish Island.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //57
            [
                'name' => 'Kilrush Marina',
                'latitude' => 52.634959,
                'longitude' => -9.494903,
                'quality_results' => 'N/A',
                'description' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //58
            [
                'name' => 'Portmagee Seasonal Visitors Pontoons',
                'latitude' => 51.939722,
                'longitude' => -10.375556,
                'quality_results' => 'N/A',
                'description' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //59
            [
                'name' => 'Kinsale Yacht Club',
                'latitude' => 51.70605,
                'longitude' => -8.522501,
                'quality_results' => 'N/A',
                'description' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //60
            [
                'name' => 'Clogherhead',
                'latitude' => 53.784704,
                'longitude' => -6.235165,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IENBBWC025_0000_0200',
                'description' => 'The beach is mainly sandy with a small area of rocks consisting of sand dunes. There are mature sand dunes located on the beach which support a variety of plant species.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //61
            [
                'name' => 'Port, Lurganboy',
                'latitude' => 53.837533,
                'longitude' => -6.252463,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IENBBWC025_0000_0300',
                'description' => 'The beach is mainly sandy with a small area of rocks consisting of sand dunes. There are mature sand dunes located on the beach which support a variety of plant species.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //62
            [
                'name' => 'Shelling Hill/Templetown',
                'latitude' => 53.979802,
                'longitude' => -6.152872,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IENBBWC040_0000_0100',
                'description' => 'Templetown beach is a large open gently sloping beach consisting of sand and shingle and facing to the south. The bathing water is located in an area that is backing onto sandy dunes.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //63
            [
                'name' => 'Bertra Beach, Murrisk',
                'latitude' => 53.789162,
                'longitude' => -9.658626,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IEWEBWC350_0000_0100',
                'description' => 'Bertra beach consists of a sandy dune area with the centre of the designated bathing area enclosed by caged stone. Bertra Beach is an exposed beach and can be subject to rip tides/strong currents.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //64
            [
                'name' => 'Clare Island, Louisburgh',
                'latitude' => 53.79994,
                'longitude' => -9.951119,
                'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IEWEBWC340_0000_0100',
                'description' => 'Clare Island Beach extends from the old pier on the south side of the beach to the stony shoreline on the northern end adjacent to the Community Centre. There are submerged rocks at the northern end of the beach.',
                'created_at' => now(),
                'updated_at' => now(),  ],          //65
                [
                    'name' => 'Dooega Beach, Achill Island',
                    'latitude' => 53.921291,
                    'longitude' => -10.025211,
                    'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IEWEBWC250_0000_0300',
                    'description' => 'Dooega beach is a small crescent shaped cove, which is sheltered from most directions but open to the south and as a result large swells can occur at the rocky outcrop towards the eastern end of the beach.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                //66
                [
                    'name' => 'Dugort Beach, Achill Island',
                    'latitude' => 54.012273,
                    'longitude' => -10.017743,
                    'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IEWEBWC360_0000_0400',
                    'description' => 'This beach is located approx. 3 Km east of Doogort village in Achill Island. The Designated Bathing Area of Silver Strand is small, 150m long, set at the western end of a north facing medium sized beach approximately 500m long bordered at it\'s western end by a road leading to Seal Caves further around the headland and a low headland to the east.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                //67
                [
                    'name' => 'Elly Bay, Belmullet',
                    'latitude' => 54.161161,
                    'longitude' => -10.08376,
                    'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IEWEBWC360_0000_0200',
                    'description' => 'Elly Bay is a fine sandy beach consisting of sand dunes backing on to sand dunes. Elly Bay consists of a sandy dune system, extensive areas of dune grassland and machair. These marine habitats support a variety of wildlife and plant species.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                //68
                [
                    'name' => 'Keel Beach, Achill Island',
                    'latitude' => 53.97186,
                    'longitude' => -10.073618,
                    'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IEWEBWC250_0000_0200',
                    'description' => 'Keel Beach is a predominately sandy beach with scatterings of shingle. It is an exposed beach open to the south, and can be subject to rip tides/strong currents.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                //69
                [
                    'name' => 'Keem Beach, Achill Island',
                    'latitude' => 53.9666,
                    'longitude' => -10.1936,
                    'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IEWEBWC250_0000_0100',
                    'description' => 'Keem Beach is a sheltered sandy beach facing southeast with a steep gradient. Two freshwater streams flow into the sea from the surrounding land at Keem beach. Keem Beach has a variety of habitats including large shallow bays and inlets, reefs and mudflats and sandflats which support a variety of plant, animal and bird species.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                //70
                [
                    'name' => 'Mullaghroe Beach, Belmullet',
                    'latitude' => 54.143094,
                    'longitude' => -10.070077,
                    'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IEWEBWC360_0000_0100',
                    'description' => 'Mullaghroe Beach is a fine sandy beach with an exposed shore, located on the Mullett Peninsula. Mullaghroe Beach has a variety of marine habitats including an extensive sand dune system, dune grassland and machair.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                //71
                [
                    'name' => 'Mulranny Beach',
                    'latitude' => 53.899984,
                    'longitude' => -9.775962,
                    'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IEWEBWC340_0000_0200',
                    'description' => 'Mulranny Beach is a popular sandy beach located south-west of Mulranny village. The area has an important strand of Mediterranean heath and also machair sand plains and saltmarsh are located within the site.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                //72
                [
                    'name' => 'Old Head Beach, Louisburgh',
                    'latitude' => 53.77671,
                    'longitude' => -9.77069,
                    'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IEWEBWC340_0000_0300',
                    'description' => 'Old Head Beach is a sheltered beach with a sandy substrate. The length of the beach at Old Head is backed by rocky cliffs.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                //73
                [
                    'name' => 'Ross Beach, Killala',
                    'latitude' => 54.232649,
                    'longitude' => -9.198028,
                    'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IEWEBWC420_0000_0200',
                    'description' => 'Ross strand is a sandy beach located along the shoreline of Killala Bay. It has an extensive triangular estuary with mudflats lining the sides of the channel. Habitats include an extensive triangular estuary with mudflats, saltmarshes and sand dunes. These habitats support a wide variety of vegetation and wildlife species.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                //74
                [
                    'name' => 'Killinure Point',
                    'latitude' => 53.470726,
                    'longitude' => -7.917376,
                    'quality_results' => 'N/A',
                    'description' => '',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                //75
                [
                    'name' => 'The Royal Cork Yacht Club',
                    'latitude' => 51.804775,
                    'longitude' => -8.294052,
                    'quality_results' => 'N/A',
                    'description' => '',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                //76
                [
                    'name' => 'Enniscrone Beach',
                    'latitude' => 54.213748,
                    'longitude' => -9.098242,
                    'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IEWEBWC420_0000_0100',
                    'description' => 'Enniscrone Beach is an exposed sandy beach, backed by sand dunes, caravan park and golf course.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                //77
                [
                    'name' => 'Rosses Point Beach',
                    'latitude' => 54.32703,
                    'longitude' => -8.564311,
                    'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IEWEBWC450_0000_0100',
                    'description' => 'Rosses Point Beach is a sheltered sandy beach, backed by sand dunes.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                //78
                [
                    'name' => 'Ardmore Beach',
                    'latitude' => 51.9521,
                    'longitude' => -7.7208,
                    'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IESEBWC050_0000_0100',
                    'description' => 'Ardmore is a sandy beach with a gentle slope down to the low water mark and beyond.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                //79
                [
                    'name' => 'Clonea Beach',
                    'latitude' => 52.0966,
                    'longitude' => -7.5411,
                    'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IESEBWC140_0000_0100',
                    'description' => 'Clonea is a sandy beach with a gentle slope down to the low water mark and beyond.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                //80
                [
                    'name' => 'Ballinesker Beach',
                    'latitude' => 52.399407,
                    'longitude' => -6.357997,
                    'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IESEBWC010_0000_0250',
                    'description' => 'Ballinesker is a rural peaceful fine-sand beach with a relatively gentle slope. The sand type is soft and windblown and often covers the wooden walkway.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                //81
                [
                    'name' => 'Carne',
                    'latitude' => 52.19936,
                    'longitude' => -6.350915,
                    'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IESEBWC050_0000_0300',
                    'description' => 'Carne is a level sandy beach adjacent to Carne pier that faces east towards the Irish Sea. There is a dune system to the west of the beach.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                //82
                [
                    'name' => 'Curracloe',
                    'latitude' => 52.387024,
                    'longitude' => -6.358957,
                    'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IESEBWC010_0000_0200',
                    'description' => 'Curracloe is a rural peaceful fine-sand beach with a relatively gentle slope. The sand type is soft and windblown and often covers the wooden walkways. The sand dunes extend between 100m and 300m to the rear (west) of the beach.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                //83
                [
                    'name' => 'Morriscastle',
                    'latitude' => 52.509022,
                    'longitude' => -6.241205,
                    'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IESEBWC010_0000_0300',
                    'description' => 'Morriscastle beach is a rural peaceful fine-sand beach with a relatively gentle slope. The sand type is soft and wind blown.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                //84
                [
                    'name' => 'New Ross Marina',
                    'latitude' => 52.391219,
                    'longitude' => -6.951489,
                    'quality_results' => 'N/A',
                    'description' => '',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                //85
                [
                    'name' => 'Rosslare Strand',
                    'latitude' => 52.273103,
                    'longitude' => -6.385789,
                    'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IESEBWC010_0000_0100',
                    'description' => 'The beach at Rosslare Strand is an urban fine-sand beach with a relatively gentle slope. The sand type is soft and windblown.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                //86
                [
                    'name' => 'Brittas Bay North Beach',
                    'latitude' => 52.887604,
                    'longitude' => -6.054456,
                    'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IEEABWC140_0000_0200',
                    'description' => 'Brittas Bay North Beach is a long, gently sloping, sandy beach. It has hilly sand dunes which support two protected plant species. The beach gradually falls away with sand bars common.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                //87
                [
                    'name' => 'Brittas Bay South Beach',
                    'latitude' => 52.872583,
                    'longitude' => -6.063554,
                    'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IEEABWC140_0000_0200',
                    'description' => 'Brittas Bay South Beach is a long, gently sloping, sandy beach backing onto hilly sand dune area.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                //88
                [
                    'name' => 'Greystones South Beach',
                    'latitude' => 53.140529,
                    'longitude' => -6.057855,
                    'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IEEABWC100_0000_0200',
                    'description' => 'Greystones South Beach is a shingle, steeply sloping beach. The beach has some sudden declines into the water and is boarded by a railway line to the rear.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                //89
                [
                    'name' => 'Bettystown',
                    'latitude' => 53.700287,
                    'longitude' => -6.243886,
                    'quality_results' => 'https://www.beaches.ie/find-a-beach/#/beach/IEEABWC020_0000_0700',
                    'description' => 'Laytown/Bettystown is a fine sand beach backing onto sand dunes. There is a links golf course located in the sand dunes.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Ballycastle',
                    'latitude' => 55.204722,
                    'longitude' => -6.236111,
                    'quality_results' => 'https://britishbeaches.uk/ballycastle-beach-antrim-northern-ireland',
                    'description' => 'Ballycastle is a popular seaside beach on the Causeway Coast Route, with a sandy stretch running from the marina towards Pans Rocks and views towards Rathlin and the Glens of Antrim.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Portstewart Strand',
                    'latitude' => 55.168000,
                    'longitude' => -6.745000,
                    'quality_results' => 'https://www.nationaltrust.org.uk/visit/northern-ireland/portstewart-strand',
                    'description' => 'Portstewart Strand is a two-mile stretch of golden sand backed by impressive dunes and the Bann Estuary, and is one of Northern Ireland’s best-known beaches.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Tyrella',
                    'latitude' => 54.256966,
                    'longitude' => -5.779459,
                    'quality_results' => 'https://en.wikipedia.org/wiki/Tyrella',
                    'description' => 'Tyrella Beach is a long sandy beach in Dundrum Bay with mature dunes behind it and wide views towards the Mourne Mountains.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Crawfordsburn',
                    'latitude' => 54.667500,
                    'longitude' => -5.721944,
                    'quality_results' => 'https://britishbeaches.uk/crawfordsburn-beach-down-northern-ireland',
                    'description' => 'Crawfordsburn Beach is a small sandy beach on Belfast Lough backed by Crawfordsburn Country Park, with rockpools and walking trails nearby.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Helen\'s Bay',
                    'latitude' => 54.673333,
                    'longitude' => -5.737500,
                    'quality_results' => 'https://britishbeaches.uk/helens-bay-beach-down-northern-ireland',
                    'description' => 'Helen’s Bay is a sandy beach close to Belfast and Bangor, known for gentle bathing waters, coastal walks and views across Belfast Lough.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Ballyholme',
                    'latitude' => 54.666389,
                    'longitude' => -5.640833,
                    'quality_results' => 'https://britishbeaches.uk/ballyholme-beach-down-northern-ireland',
                    'description' => 'Ballyholme is a mile-long sandy bay in Bangor with a promenade, rockpools and strong links to sailing and other watersports.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Murlough',
                    'latitude' => 54.238056,
                    'longitude' => -5.836111,
                    'quality_results' => 'https://britishbeaches.uk/murlough-beach-down-northern-ireland',
                    'description' => 'Murlough is a wide natural beach backed by a famous dune system and nature reserve, stretching along Dundrum Bay near Newcastle.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Warrenpoint',
                    'latitude' => 54.097778,
                    'longitude' => -6.248611,
                    'quality_results' => 'https://britishbeaches.uk/warrenpoint-beach-down-northern-ireland',
                    'description' => 'Warrenpoint lies on Carlingford Lough and has a gently sloping shingle beach with promenade views towards the Mourne Mountains.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Magilligan Benone Strand',
                    'latitude' => 55.168056,
                    'longitude' => -6.873333,
                    'quality_results' => 'https://britishbeaches.uk/magilligan-benone-strand-beach-londonderry-northern-ireland',
                    'description' => 'Magilligan Benone Strand is a long sandy beach backed by one of the largest dune systems in the UK and Ireland and is popular for walking and swimming.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Castlerock',
                    'latitude' => 55.168230,
                    'longitude' => -6.794510,
                    'quality_results' => 'https://britishbeaches.uk/castlerock-beach-londonderry-northern-ireland',
                    'description' => 'Castlerock Beach is a sandy north coast beach backed by dunes and close to the River Bann estuary, with scenic views and easy access from the village promenade.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                
            ];
          
            // list of possible quality ratings
            $statuses = ['Excellent', 'Good', 'Sufficient', 'Poor'];

            // loop through each beach in the $beaches array instead of manually adding this to each one
            // saves my sanity
            $beaches = array_map(function ($beach) use ($statuses) {
                // give each beach a random quality status, e_coli and enterococci value
                $beach['water_quality_status'] = $statuses[array_rand($statuses)];
                $beach['e_coli'] = rand(10, 180);
                $beach['intestinal_enterococci'] = rand(5, 130);

                // send the updated beaches to the db
                return $beach;
            }, $beaches);

            DB::table('beaches')->insert($beaches);
        }
    }