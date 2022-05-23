<?php
include "connectDB.php";

print_r($_POST);

    // $room  = $_POST['room'];
    // $bookdate = $_POST['date'];
    // $starttime = $_POST['start_time'];
    // $endtime = $_POST['end_time'];
    $person = $_POST['num_person'];
    $bookname = $_POST['namebooking'];
    $statusroom = $_POST['statusroom'];

    // $sql = "INSERT INTO bookingroom (roomname, numperson, bookname	, statusroom)
    //                VALUES ('$room', '$person', '$bookname', '$statusroom')";
    $sql = "INSERT INTO roomp (numperson, bookname	, statusroomp)
            VALUES ('$person', '$bookname', '$statusroom')";
    mysqli_query($connectDB,$sql);
    // // Header("Location: roomP.php");

    if(mysqli_affected_rows($connectDB) > 0) {
        // echo "susseccfully";
        Header("Location: roomP.php");
    }else{
            echo mysqli_error(($connectDB));
    }
?>