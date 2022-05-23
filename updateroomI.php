<?php

    include 'connectDB.php';

    print_r($_POST);

    $id = $_POST['id'];
    // $date = $_POST['date'];
    // $time = $_POST['time'];
    $num_person = $_POST['num_person'];
    $namebooking = $_POST['namebooking'];
    $statusroom = $_POST['statusroom'];

       
        $updateroom = "UPDATE roomi
        set numperson = '$num_person',
            bookname = '$namebooking',
            statusroomi = '$statusroom'
        WHERE id = '$id' ";
        // mysqli_query($connectDB,$updateroom);
            

        // Header("Location: roomP.php");

        if(mysqli_query($connectDB,$updateroom)) {
            // echo "susseccfully";
            Header("Location: roomI.php");
        }else{
                echo mysqli_error(($connectDB));
            }

?>
