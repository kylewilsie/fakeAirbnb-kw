<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">


    <title>Fake Airbnb Results</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" href="images/house-heart-fill.svg">
    <link rel="mask-icon" href="images/house-heart-fill.svg" color="#000000">   
  </head>
  <body>
    
    <header>
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                <h4 class="text-white">About</h4>
                <p class="text-muted">Fake Airbnb. Data c/o http://insideairbnb.com/get-the-data/</p>
                </div>
            </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
            <a href="index.php" class="navbar-brand d-flex align-items-center">
                <i class="bi bi-house-heart-fill my-2"></i>    
                <strong> Fake Airbnb</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            </div>
        </div>
    </header>

    <main>



        <div class="container">

            <h1>Some Text</h1>



            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

<div class="col">
    <div class="card shadow-sm">
        <img src="https://a0.muscache.com/pictures/miso/Hosting-595680673819411804/original/a6e6fda5-2935-4e2e-ba34-2fc50bba5cf3.jpeg">

        <div class="card-body">
            <h5 class="card-title">Kerns</h5>
            <p class="card-text">1922 Craftsman Compound in Laurelhurst ~ Sleeps 12<br>Entire home/apt</p>
            <p class="card-text">Accommodates 16</p>

            <p class="card-text align-bottom">
            <i class="bi bi-star-fill"></i><span class=""> 5.00</span>
            </p>

            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <button type="button" id="3301" class="btn btn-sm btn-outline-secondary viewListing" data-bs-toggle="modal" data-bs-target="#fakeAirbnbnModal">View</button>
    
                </div>
                <small class="text-muted">$960.00</small>

            </div>
        </div>
    </div><!--.card-->
</div><!--.col-->






        </div><!-- .container-->


    </main>

    <footer class="text-muted py-5">
        <div class="container">

            <p class="mb-1">CS 293, Spring 2024</p>
            <p class="mb-1">Lewis & Clark College</p>
        </div>
    </footer>
    <!-- modal-->
    <div class="modal fade modal-lg" id="fakeAirbnbnModal" tabindex="-1" aria-labelledby="fakeAirbnbnModalLabel" aria-modal="true" role="dialog" >
      <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title">Private Rooftop Flat~ 14 Guests ~ 94 WalkScore</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modal-image">
                    <img src="https://a0.muscache.com/pictures/miso/Hosting-816145492959772426/original/0dc00636-64de-4101-a65e-0ea83b974d83.jpeg" class="img-fluid">
                </div>
                <div class="modal-footer">
                    <p>Hosford-Abernethy</p><p>$731.00 / night</p><p>Accommodates 14</p><p><i class="bi bi-star-fill"></i> 5.00</p><p>Hosted by Bob</p><p>Amenities: Air conditioning, Bathtub, Bed linens, Body soap, Carbon monoxide alarm, Cleaning products, Clothing storage, Coffee, Coffee maker: Keurig coffee machine, Conditioner, Cooking basics, Dedicated workspace, Dishes and silverware, Dishwasher, Dryer, Essentials, Fire extinguisher, First aid kit, Free street parking, Freezer, Hair dryer, Hangers, Heating, Hot water, Hot water kettle, Iron, Kitchen, Laundromat nearby, Long term stays allowed, Luggage dropoff allowed, Microwave, Outdoor dining area, Outdoor furniture, Oven, Pack ’n play/Travel crib, Private entrance, Private patio or balcony, Refrigerator, Room-darkening shades, Self check-in, Shampoo, Shower gel, Smart lock, Smoke alarm, Stove, TV, Toaster, Washer, Wifi, Wine glasses</p><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
        
    <script src="js/script.js"></script>

  </body>
</html>



