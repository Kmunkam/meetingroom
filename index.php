<?php include "connectDB.php" ?>
<!DOCTYPE html>
<html>
    <?php include "header.php" ?>

    <body>
        <div class="container">
            <div class="mt-5">
                <h2 class=""> จองห้องประชุม </h2>
            </div>
            <div class="row mt-5">
                <div class="col-sm-4">
                    <a href="roomP.php">
                        <div class="card border-dark">
                            <div class="card-body">
                                <h5 class="card-title">Room P</h5>
                                <p>รายละเอียด : รองรับผู้เข้าประชุมได้จำนวน 6-8 คน</p>
                                <?php
                                    $room= mysqli_query($connectDB, "SELECT numperson, bookname, statusroomp, COUNT(statusroomp) 
                                                                      FROM roomp
                                                                      GROUP BY statusroomp");
                                    while($row = mysqli_fetch_array($room)) {
                                        // echo 'จำนวน'.$row['COUNT(statusroomp)'].'<br>';
                                            // if($row['statusroomp'] == "1" && $row['COUNT(statusroomp)'] == 0) {
                                            if($row['statusroomp'] == "1" && $row['COUNT(statusroomp)'] == 1) {
                                                // echo 'สถานะ'.$row['statusroomp'].'<br>';
                                                
                                                // echo 'จำนวน'.$row['COUNT(statusroomp)'].'<br>';
                                                echo '<P><strong>สถานะการใช้งาน :</strong> ไม่ว่าง <i class="fa-solid fa-xmark"></i></P>';
                                            }
                                            elseif($row['statusroomp'] == "2" && $row['COUNT(statusroomp)'] != 1){
                                                // echo 'จำนวน'.$row['COUNT(statusroomp)'].'<br>';
                                                echo '<P><strong>สถานะการใช้งาน :</strong> ว่าง <i class="fa-solid fa-check"></i></P>';
                                                
                                            }
                                            // elseif($row['statusroomp'] == NULL && $row['COUNT(statusroomp)'] == NULL){
                                            //     // echo 'จำนวน'.$row['COUNT(statusroomp)'].'<br>';
                                            //     echo '<P><strong>สถานะการใช้งาน :</strong> ว่าง</P>';
                                                
                                            // }
                                            // elseif($row['statusroomp'] == "1" && $row['COUNT(statusroomp)'] == NULL){
                                            //     // echo 'จำนวน'.$row['COUNT(statusroomp)'].'<br>';
                                            //     echo '<P><strong>สถานะการใช้งาน :</strong> ว่าง</P>';
                                                
                                            // }
                                            // else{
                                            //     echo '<P><strong>สถานะการใช้งาน :</strong> ว่าง</P>';
                                            // }
                                        
                                    }
                                ?>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="roomI.php">
                        <div class="card border-dark">
                            <div class="card-body">
                                <h5 class="card-title">Room I</h5>
                                <p>รายละเอียด : รองรับผู้เข้าประชุมได้จำนวน 4-6 คน</p>
                                <?php 
                                    $room= mysqli_query($connectDB, "SELECT numperson, bookname, statusroomi, COUNT(statusroomi) 
                                                                     FROM roomi 
                                                                     GROUP BY statusroomi ");
                                    while($row = mysqli_fetch_array($room)) {
                                        if($row['statusroomi'] == "1" && $row['COUNT(statusroomi)'] == 1) {
                                            // echo 'สถานะ'.$row['statusroomi'].'<br>';
                                            
                                            // echo 'จำนวน'.$row['COUNT(statusroomi)'].'<br>';
                                            echo '<P><strong>สถานะการใช้งาน :</strong> ไม่ว่าง <i class="fa-solid fa-xmark"></i></P>';
                                        }
                                        // elseif($row['statusroomi'] == "1" && $row['COUNT(statusroomi)'] == NULL){
                                        //     echo '<P><strong>สถานะการใช้งาน :</strong> ว่าง</P>';
                                            
                                        // } 
                                        elseif($row['statusroomi'] == "2" && $row['COUNT(statusroomi)'] != 1 ){
                                            // echo 'จำนวน'.$row['COUNT(statusroomp)'].'<br>';
                                            echo '<P><strong>สถานะการใช้งาน :</strong> ว่าง <i class="fa-solid fa-check"></i></P>';
                                            
                                        }
                                        elseif($row['statusroomi'] == NULL && $row['COUNT(statusroomi)'] == NULL){
                                            // echo 'จำนวน'.$row['COUNT(statusroomp)'].'<br>';
                                            echo '<P><strong>สถานะการใช้งาน :</strong> ว่าง <i class="fa-solid fa-check"></i></P>';
                                            
                                        }
                                       
                                    }
                                ?>
                            </div>
                        </div>
                    </a>
                </div><div class="col-sm-4">
                    <a href="roomE.php">
                        <div class="card border-dark">
                            <div class="card-body">
                                <h5 class="card-title ">Room E</h5>
                                <p>รายละเอียด : รองรับผู้เข้าประชุมได้จำนวน 20-30 คน</p>
                                <?php 
                                    $room= mysqli_query($connectDB, "SELECT numperson, bookname, statusroome, COUNT(statusroome) 
                                                                     FROM roome 
                                                                     GROUP BY statusroome ");
                                while($row = mysqli_fetch_array($room)) {
                                // echo $row['COUNT(statusroome)'].'<br>';
                                
                                    if($row['statusroome'] == "1" && $row['COUNT(statusroome)'] == 1) {
                                        
                                        // mysqli_error(($room));
                                        // echo 'สถานะ'.$row['statusroome'].'<br>';
                                        
                                        // echo 'จำนวน'.$row['COUNT(statusroome)'].'<br>';
                                        echo '<P><strong>สถานะการใช้งาน :</strong> ไม่ว่าง <i class="fa-solid fa-xmark"></i></P>';
                                    }
                                    elseif($row['statusroome'] == "2" && $row['COUNT(statusroome)'] != 1){
                                        echo '<P><strong>สถานะการใช้งาน :</strong> ว่าง <i class="fa-solid fa-check"></i></P>';
                                    }
                                
                                }
                                ?>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

   
    </body>
</html>

<style>
a{
    text-decoration: none;
    color: black;
}
</style>