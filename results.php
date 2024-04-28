<?php
    include("src/functions.php");
    $guests = $_GET['guests'];
    $roomType = $_GET['roomType'];
    $neighborhood = $_GET['neighborhood'];

    $db = dbConnect();
    $listings = getListings($db, $guests, $neighborhood, $roomType);
?>

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

            <h1>Results (<?php echo count($listings)?>)</h1>

            <?php
                $neighborhood = $_GET['neighborhood'];
                $roomType = $_GET['roomType'];
                $guests = $_GET['guests'];
                echo "
                <p><strong>Neighborhood: </strong>$neighborhood</p>
                <p><strong>Room Type: </strong>$roomType</p>
                <p><strong>Accommodates: </strong>$guests or more</p>";
                if (empty($listings)) {
                    echo "<h3>Sorry, no results - <a href='index.php' class='text-primary text-decoration-underline'>search again</a></h3>";
                }
                ?>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
<?php foreach ($listings as $listing): ?>
    <div class="col">
        <div class="card shadow-sm">
            <img src=<?php echo($listing['pictureURL']);?>>

            <div class="card-body">
                <h5 class="card-title"><?php echo($listing['neighborhood']);?></h5>
                <p class="card-text"><?php echo($listing['name']);?><br><?php echo($listing['type']);?></p>
                <p class="card-text">Accommodates <?php echo($listing['accommodates']);?></p>

                <p class="card-text align-bottom">
                <i class="bi bi-star-fill"></i> <?php echo($listing['rating']);?>
                </p>

                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" id="<?php echo($listing['id']);?>" class="btn btn-sm btn-outline-secondary viewListing" data-bs-toggle="modal" data-bs-target="#fakeAirbnbnModal">View</button>
        
                    </div>
                    <small class="text-muted">$<?php echo($listing['price']);?></small>

                </div>
            </div>
        </div><!--.card-->
    </div><!--.col-->
<?php endforeach; ?>






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
                    <h5 class="modal-title" id="modal-title"></h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modal-image">
                    <img src="" class="img-fluid">
                </div>
                <div class="modal-footer">
                    <p></p><p></p><p></p><p></p><p></p><p></p><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
        
    <script src="js/script.js"></script>

  </body>
</html>



