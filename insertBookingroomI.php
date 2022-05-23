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

    // check room
    // $room= mysqli_query($connectDB, "SELECT numperson, bookname, statusroome, COUNT(statusroome) 
    //                                  FROM roome 
    //                                  GROUP BY statusroome ");
    // $room= mysqli_query($connectDB, "SELECT * FROM roomi
    //                                 INNER JOIN statusroom
    //                                  ON roomi.statusroomi = statusroom.statusID");
    // while($row = mysqli_fetch_array($room)) {
    //     if($statusroom == $row['statusroomi']){
    //         echo "<script> alert('ไม่สามารถจองห้องประชุมได้ เนื่องจากห้องไม่ว่าง')</script>";
    //         Header("Location: insertBookingroomI.php");
    //     }else{
    //         $sql = "INSERT INTO roomi (numperson, bookname	, statusroomi)
    //         VALUES ('$person', '$bookname', '$statusroom')";
    //         mysqli_query($connectDB,$sql);
    //         Header("Location: roomI.php");
    //     }
    // }

    $sql = "INSERT INTO bookingroom (roomname, numperson, bookname	, statusroom)
                   VALUES ('$person', '$bookname', '$statusroom')";
    $sql = "INSERT INTO roomi (numperson, bookname	, statusroomi)
            VALUES ('$person', '$bookname', '$statusroom')";
    mysqli_query($connectDB,$sql);
    // // // Header("Location: roomP.php");

    if(mysqli_affected_rows($connectDB) > 0) {
        // echo "susseccfully";
        Header("Location: roomI.php");
    }else{
            echo mysqli_error(($connectDB));
    }
?>