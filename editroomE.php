<!DOCTYPE html>
<html>
    <?php include "header.php" ?>

    <body>


        <!-- Modal -->
        <div class="modal fade" id="editroomE" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="updateroomE.php" method="post">
                    <div class="modal-body">
                            <div class="mb-1 row">
                                <div class="col-sm-6">
                                    <input type="hidden" class="form-control" id="id" name="id" value="">
                                </div>
                            </div>
                        <div class="mb-3 row">
                            <label for="num_person" class="col-sm-4 col-form-label">จำนวนผู้ประชุม</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="num_person" name="num_person" max="30">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="namebooking" class="col-sm-4 col-form-label">ผู้จองห้อง</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="namebooking" name="namebooking">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="statusroom" class="col-sm-4 col-form-label">สถานะการใช้งาน</label>
                            <div class="col-sm-8">
                                <!-- <input type="text" class="form-control" id="statusroom" name="statusroom"> -->
                                <select class="form-select" id="statusroom" name="statusroom">
                                <option value="1" selected>ยังไม่เสร็จสิ้น</option>
                                <option value="2">เสร็จสิ้น</option>
                                </select>
                            </div>
                        </div>

                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="sumit" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

    </body>
</html>

<style>
    
</style>