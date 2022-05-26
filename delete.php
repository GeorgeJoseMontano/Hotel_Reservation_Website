<?php
// delete row from table in database where family_name and email match

$email = $_POST['id_to_delete'];

$host = "sql105.epizy.com";
$dbUsername = "epiz_31776346";
$dbPassword = "O3MpsispyCf";
$dbname = "epiz_31776346_website";
//create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
if (mysqli_connect_error()) {
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
} else {
    // ask user for confirmation
    $sql = "DELETE FROM reservations WHERE email = '$email'";
    if ($conn->query($sql)) {
        echo "<script type='text/javascript'>alert('Reservation Cancelled');</script>";
        
    } else {
        echo "Error" . $conn->error;
    }
    header("refresh:0; url=index.php");
    $conn->close();
}
?>