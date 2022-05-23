<!DOCTYPE html>
<html>
    <?php include "header.php" ?>

    <body>
        <div class="container mt-5">
            <h5 class="mb-5">จองห้องประชุม Room P</h5>
            <!-- <div>
            <a href="roomP.php" type="button" class="btn btn-primary">ย้อนกลับ</a>
            </div> -->
            <div class="mt-2">
            <form action="insertBookingroomP.php" method="post" onSubmit="JavaScript:return checkSubmit();">
                <div class="mb-3 row">
                    <label for="date" class="col-sm-2 col-form-label">Room</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="room" name="room" value="P" readonly>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="num_person" class="col-sm-2 col-form-label">จำนวนผู้ประชุม</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="num_person" name="num_person" max="8">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="namebooking" class="col-sm-2 col-form-label">ชื่อผู้จองห้อง</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="namebooking" name="namebooking">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="statusroom" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-6">
                        <input type="hidden" class="form-control" id="statusroom" name="statusroom" value="1">
                    </div>
                </div>
                
                <div class="mt-5">
                    <a href="roomP.php" type="button" class="btn btn-primary">ย้อนกลับ</a>
                    <input type="submit" class="btn btn-primary me-2" value="Save">
                    <input type="reset" class="btn btn-success me-2" value="Reset">
                    <input type="button" class="btn btn-danger" value="Cancel">
                </div>
            </form>
            </div>

       </div>

    </body>
    <script type="text/javascript">
        function checkSubmit(){
            if(document.getElementById('num_person').value == "" || document.getElementById('namebooking').value == "") 
            {
                alert('กรอกข้อมูลการจองห้องประชุมให้ครบ');
                return false;
            }
            else if(document.getElementById('num_person').value != "" || document.getElementById('namebooking').value != "") 
            {
                alert('บันทึกข้อมูลเสร็จสิ้น');
                return true;
            }

            // else {
                
            //     return true;
            // }
        }
    </script>

   
</html>


<style>
    
</style>