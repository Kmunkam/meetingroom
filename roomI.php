<?php include "connectDB.php"; ?>
<!DOCTYPE html>
<html>
    <?php include "header.php" ?>

    <body>
        <div class="container">
            <div class="mt-5">
                <a type="button" href="index.php" class="btn btn-primary btnbookroom">ย้อนกลับ</a>
                <a type="button" href="bookingroomI.php" class="btn btn-primary btnbookroom">จองห้องประชุม</a>
            </div>

            <?php 
            
           
                // $room= mysqli_query($connectDB, "SELECT * FROM bookingroom
                //                                  INNER JOIN statusroom
                //                                  ON bookingroom.statusroom = statusroom.statusID");
                $room= mysqli_query($connectDB, "SELECT * FROM roomi
                                                 INNER JOIN statusroom
                                                 ON roomi.statusroomi = statusroom.statusID");
                while($row = mysqli_fetch_array($room)) {
                    // if($row['roomname'] == 'I') {

            ?>
            <div class="card mt-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-8 ">
                            <?php echo "จองห้องประชุม : จำนวนผู้ประชุม ".$row["numperson"] . " คน , " .$row["bookname"].
                            "&nbsp;&nbsp;&nbsp;สถานะการใช้งาน : ".$row["statusname"] ; ?>
                        </div>
                        <div class="col-sm-4 padding ">
                            <a class="btn btn-primary editroomI" href="#editroomI"
                                data-id="<?php echo $row['id'];?>"
                                data-numperson="<?php echo $row['numperson'];?>"
                                data-namebook="<?php echo $row['bookname'];?>"
                                data-statusroom="<?php echo $row['statusname'];?>"
                                ><i class="fa-solid fa-pen-to-square"></i>&nbsp;แก้ไข</a>
                                
                            <a type="button" href="deleteroomI.php?delete_id=<?php echo $row['id'];?>" class="btn btn-danger"
                                onclick="return confirm('ยกเลิกการจอง <?php echo $row['bookname'] ; ?>')">
                            <i class="fa-solid fa-trash"></i>&nbsp;ยกเลิกการจอง</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
                // }
                } ?>
        </div>
    </body>

    <?php include 'editroomI.php'; ?>
    <script>
            $(document).ready(function(){
                $('.editroomI').click(function(){
                    var id = $(this).attr('data-id');
                    var numperson = $(this).attr('data-numperson');
                    var namebook = $(this).attr('data-namebook');
                    var statusroom = $(this).attr('data-statusroom');
                    
                    $('#id').val(id);
                    $('#num_person').val(numperson);
                    $('#namebooking').val(namebook);
                    $('#statusroom').val(statusroom);
                   
                    //show modal
                    $('#editroomI').modal('show');
                });
            });
 
        </script>

</html>

<style>
    .padding{
        padding-left: 0px;
        padding-right: 0px;
    }
</style>