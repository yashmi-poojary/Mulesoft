<?php

include 'connection.php';
if (isset($_POST['MN'])) {
    $actname = $_POST['MN'];
   echo "$actname";

} else {
    $message = "dead.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    die();
}
//$q = mysqli_query(mysqli_connect("localhost", "root", "", "movie"), "SELECT * FROM movies WHERE lower(actor_name) LIKE '%{$actname}%'");

//mysqli_query(mysqli_connect("localhost", "root", "", "movie"), $q);

/*for ($i = 0; $i < 6; $i++) {
    $sql = "INSERT into " . $facno . " VALUES()";
    mysqli_query(mysqli_connect("localhost", "root", "", "movie"), $sql);
}*/
if ($q) {
    $message = "Movie added.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location:actorsval.php");
} else {
    $message = "movie not added\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";


}

?>