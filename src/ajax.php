<?php
/* PHP code for AJAX interaction goes here */
require("functions.php");

if (isset($_POST['id'])) {
    $listingId = $_POST['id'];

    $db = dbConnect();
    $listing = getSingleListing($db, $listingId);

    echo json_encode($listing);
}
?>