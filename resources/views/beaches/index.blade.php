<!-- view all beaches -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
 </head>



 <body>
    
 </body>

 <!-- loop through all the beaches -->
@foreach($beaches as $beach)

<a href="{{ route('beaches.show', $beach) }}>

<div class="card mb-3">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">$beach->name</h5>
    <p class="card-text">$beach->description</p>
    <p class="card-text"><small class="text-body-secondary">$beach->quality_results</small></p>
  </div>
</div>

</a>
@endforeach


<!-- bootstrap script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- icons -->
<script src="https://unpkg.com/lucide@latest"></script>
<script>lucide.createIcons();</script>

 </html>