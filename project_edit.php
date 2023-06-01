<!DOCTYPE html>
<html lang="en">
<?php $menu = "project"; ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INO | Edit Project</title>


    <!----------------------------- start header ------------------------------->
    <?php include("../ino/templated/head.php"); ?>
    <!----------------------------- end header --------------------------------->

    <!----------------------------- start menu ------------------------------->
    <?php include("../ino/templated/menu.php"); ?>
    <!----------------------------- end menu --------------------------------->

    <!----------------------------- start Time ------------------------------->
    <?php
    date_default_timezone_set('asia/bangkok');
    $date = date('d/m/Y');
    $time = date("H:i:s", "1359780799");
    ?>
    <!----------------------------- start Time ------------------------------->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Open Project</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Open Project</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>



        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

<!-- เพิ่มข้อมูล -->
<?php

  /* แสดงข้อมูล */

  $rs = $conn->query("SELECT * FROM tb_project WHERE project_id=" . $_GET['id']);
  /* ประกาศตัวแปลเก็บค่า เชื่อมต่อฐานข้อมูล อ่าน/เขียนค่าข้อมูล เรียกตารางออกมา โดยมีเงื่อนไข = การรับค่า Get ID มาจาก Form ที่มีการเขึยน form_edit-a.php?id_p=<?=$sr->id_p;?> */
   $r = $rs->fetch_object();

  /* แสดงข้อมูล */


if (isset($_POST['submit'])) { /* ถ้า POST มีการกด Submit ให้ทำส่วนล่าง */

    $project_date  = $_POST['project_date']; /* ประกาศตัวแปลเก็บค่า  POST ที่รับมาจาก INPUT  */
    $project_line = $_POST['project_line'];
    $project_cate = $_POST['project_cate'];
    $project_sub = $_POST['project_sub'];
    $project_name = $_POST['project_name'];
    $project_detail = $_POST['project_detail'];
    $project_cost = $_POST['project_cost'];
    $project_staff = $_POST['project_staff'];
    $project_link = $_POST['project_link'];

    $project_start = $_POST['project_start'];
    $project_end = $_POST['project_end'];
    $project_pay = $_POST['project_pay'];
    $project_status = $_POST['project_status'];
    $project_in = $_POST['project_in'];
    $project_team = $_POST['project_team'];

    $contact_name = $_POST['contact_name'];
    $contact_company = $_POST['contact_company'];
    $contact_position = $_POST['contact_position'];
    $contact_email = $_POST['contact_email'];
    $contact_phone = $_POST['contact_phone'];
    $contact_detail = $_POST['contact_detail'];

    $sale_name = $_POST['sale_name'];
    $sale_company = $_POST['sale_company'];
    $sale_position = $_POST['sale_position'];
    $sale_email = $_POST['sale_email'];
    $sale_phone = $_POST['sale_phone'];
    $sale_detail = $_POST['sale_detail'];


    //  print_r($_POST);

    
    $sql =  "UPDATE `tb_project` SET `project_date` = '$project_date', `project_line` = '$project_line', `project_cate` = '$project_cate', `project_sub` = '$project_sub', `project_name` = '$project_name', `project_detail` = '$project_detail', `project_cost` = '$project_cost', `project_staff` = '$project_staff', `project_link` = '$project_link', 
    `contact_name` = '$contact_name', `contact_company` = '$contact_company', `contact_position` = '$contact_position', `contact_email` = '$contact_email', `contact_phone` = '$contact_phone', `contact_detail` = '$contact_detail', `sale_name` = '$sale_name', `sale_company` = '$sale_company', `sale_position` = '$sale_position',
     `sale_email` = '$sale_email', `sale_phone` = '$sale_phone', `sale_detail` = '$sale_detail', `project_start` = '$project_start', `project_end` = '$project_end', `project_pay` = '$project_pay', `project_status` = '$project_status', `project_in` = '$project_in', `project_team` = '$project_team' WHERE project_id=" . $_GET['id'];

    $result = $conn->query($sql);

    // //  print_r($sql);
     if ($result) {
    //     // <!-- sweetalert -->
        echo '<script>
                setTimeout(function(){
                    swal({
                        title: "Save Successfully!",
                        text: "Thank You . ",
                        type:"success"
                    }, function(){
                        window.location = "project.php";
                    })
                },1000);
            </script>';
    //     // echo "<script>alert('ยินดีตอนรับ Admin เข้าสู่ระบบ'); window.location='../index.php'</script>";
    } else {
    //     // <!-- sweetalert -->
        echo '<script>
                setTimeout(function(){
                    swal({
                        title: "Can Not Save Successfully!",
                        text: "Checking Your Data",
                        type:"warning"
                    }, function(){
                        window.location = "project_edit.php";
                    })
                },1000);
            </script>';
    //     // echo "<script>alert('ยินดีตอนรับ Admin เข้าสู่ระบบ'); window.location='../index.php'</script>";
    }
}

   
// echo '<pre>';
// print_r($_POST);
// print_r($_FILES);
// echo '</pre>';
?>
                        <!-- เพิ่มข้อมูล -->
                        <div class="row">
                            <!-- /.col (left) -->
                            <div class="col-md-6">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Project descriptions</h3>
                                    </div>

                                    <form action="#" method="POST" enctype="multipart/form-data">

                                        <div class="card-body">

                                             <!-- วันเริ่มต้นโครงการ -->
                                             <div class="form-group">
                                                <label>วันที่เริ่มโครงการ </label>
                                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                                        <input type="text" name="project_start" value="<?= $r->project_start; ?>" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- วันสิ้นสุดโครงการ และวันบันทึกข้อมูล -->
                                            <div class="form-group">
                                                <label>วันสิ้นสุดโครงการ</label>
                                                <div class="input-group date" id="reservationdate1" data-target-input="nearest">
                                                        <input type="text" name="project_end" value="<?= $r->project_end; ?>" class="form-control datetimepicker-input" data-target="#reservationdate1"/>
                                                        <input type="hidden" name="project_date" value="<?= $r->project_date; ?>" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                                                        <div class="input-group-append" data-target="#reservationdate1" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                    </div>
                                                </div>

                                            <div class="form-group">
                                                <label>สถานะโครงการ</label>
                                                <select class="form-control select2" name="project_status" 
                                                    style="width: 100%;">
                                                    <option selected="selected"><?= $r->project_status; ?></option>
                                                    <option>เสร็จสิ้นโครงการ</option>
                                                    <option>ระหว่างรอพิจารณา</option>
                                                    <option>อยู่ในแผนการดำเนินงาน</option>
                                                </select>
                                            </div>
                                            <!-- /.form-group -->

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">ตั้งชื่องาน</label>
                                                <input type="text" name="project_line" class="form-control" value="<?= $r->project_line; ?>"
                                                    id="exampleInputEmail1" placeholder="" >
                                            </div>
                                            <!-- /.form-group -->

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">ตั้งชื่อชิ้นงาน</label>
                                                <input type="text" name="project_cate" class="form-control" value="<?= $r->project_cate; ?>"
                                                    id="exampleInputEmail1" placeholder="" >
                                            </div>
                                            <!-- /.form-group -->

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">จังหวัด</label>
                                                <input type="text" name="project_sub" class="form-control" value="<?= $r->project_sub; ?>"
                                                    id="exampleInputEmail1" placeholder="จังหวัดหรือหน่วยงานลูกค้า"
                                                    >
                                            </div>
                                            <!-- /.form-group -->
                                            <!-- // ฟังก์ชั่นคอมมา OnChange="JavaScript:chkNum(this) // -->
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">งบประมาณ</label>
                                                <input type="int" name="project_cost" class="form-control" value="<?php echo number_format( $r->project_cost, 0 ) ; ?>" 
                                                    id="exampleInputEmail1"  OnChange="JavaScript:chkNum(this)" 
                                                    placeholder="ระบุจำนวนตัวเลข **ไม่ต้องใส่ Comma (,) อาทิเช่น 1500000">
                                            </div>
                                            <!-- /.form-group -->

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">เลขที่สัญญา</label>
                                                <input type="int" name="project_in" class="form-control" value="<?= $r->project_in; ?>"
                                                    id="exampleInputEmail1" placeholder="">
                                            </div>
                                            <!-- /.form-group -->


                                            <div class="form-group">
                                                <label for="exampleInputEmail1">ตั้งชื่อโครงการ</label>
                                                <input type="text" name="project_name" class="form-control" value="<?= $r->project_name; ?>"
                                                    id="exampleInputEmail1" placeholder="ชื่อโครงการ" >
                                            </div>
                                            <!-- /.form-group -->

                                            <div class="form-group">
                                                <label>เงื่อนไขการชำระเงิน</label>
                                                <select class="form-control select2" name="project_pay"  value="<?= $r->project_pay; ?>"
                                                    style="width: 100%;">
                                                    <option selected="selected"><?= $r->project_pay; ?></option>
                                                    <option>1 งวด</option>
                                                    <option>2 งวด</option>
                                                    <option>3 งวด</option>
                                                    <option>4 งวด</option>
                                                    <option>30 วัน</option>
                                                    <option>45 วัน</option>
                                                    <option>60 วัน</option>
                                                    <option>ไม่ระบุ</option>
                                                    
                                                </select>
                                            </div>
                                            <!-- /.form-group -->

                                            <!-- textarea -->
                                            <div class="form-group">
                                                <label>รายละเอียดของโครงการ</label>
                                                <textarea class="form-control" name="project_detail" id="project_detail" 
                                                    rows="19" placeholder="อธิบายโครงการ (ถ้ามี)....."><?= $r->project_detail; ?></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Link Form Drive</label>
                                                <input type="int" name="project_link" class="form-control" value="<?= $r->project_link; ?>"
                                                    id="exampleInputEmail1" placeholder="Link Google Drive (ถ้ามี)">
                                            </div>
                                            <!-- /.form-group -->

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">ผู้ดูแลโครงการ<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="project_staff" class="form-control" value="<?= $r->project_staff; ?>"
                                                    id="exampleInputEmail1" placeholder="ชื่อผู้ดูแลโครงการ" >
                                            </div>
                                            <!-- /.form-group -->

                                            
                                            <div class="form-group">
                                                <label>ทีม</label>
                                                <select class="form-control select2" name="project_team" 
                                                    style="width: 100%;" >
                                                    <option selected="selected"><?= $r->project_team; ?></option>
                                                    <option>Services</option>
                                                    <option>Innovation</option>
                                                    <option>Sale Maketing</option>
                                                    <option>Infrastructure</option>
                                                </select>
                                            </div>
                                            <!-- /.form-group -->

                                        </div>



                                        <div class="card-footer">
                                            Visit <a href="https://getdatepicker.com/5-4/">tempusdominus </a> for more
                                            examples and information about
                                            the plugin.
                                        </div>
                                        <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                                <!-- /.card -->
                            </div>
                            <!-- /.col (right) -->

                            <!-- /.col (left) -->
                            <div class="col-md-6">
                                <div class="card card-success">
                                    <div class="card-header">
                                        <h3 class="card-title">Customer descriptions</h3>
                                    </div>
                                    <div class="card-body">

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">ชื่อลูกค้า<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="contact_name" class="form-control" value="<?= $r->contact_name; ?>"
                                                id="exampleInputEmail1" placeholder="ชื่อลูกค้า" required>
                                        </div>
                                        <!-- /.form-group -->

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">บริษัท</label>
                                            <input type="text" name="contact_company" class="form-control" value="<?= $r->contact_company; ?>"
                                                id="exampleInputEmail1" placeholder="บริษัท">
                                        </div>
                                        <!-- /.form-group -->

                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>ที่อยู่</label>
                                            <textarea class="form-control" name="contact_detail" id="contact_detail"
                                                rows="5" placeholder="รายละเอีดยที่อยู่บริษัท(ถ้ามี)....."><?= $r->contact_detail; ?></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">ตำแหน่ง</label>
                                            <input type="text" name="contact_position" class="form-control" value="<?= $r->contact_position; ?>"
                                                id="exampleInputEmail1" placeholder="ตำแหน่ง">
                                        </div>
                                        <!-- /.form-group -->


                                        <div class="form-group">
                                            <label for="exampleInputEmail1">เบอร์โทรศัทพ์</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                </div>
                                                <input type="text" class="form-control" name="contact_phone" value="<?= $r->contact_phone; ?>"
                                                    data-inputmask='"mask": "(999) 999-9999"' data-mask >
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                        <p>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="fas fa-envelope"></i></span>
                                                </div>
                                                <input type="email" class="form-control" name="contact_email" value="<?= $r->contact_email; ?>"
                                                    id="contact_email" placeholder="Email">
                                            </div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="card-footer">
                                        Visit <a href="https://getdatepicker.com/5-4/">tempusdominus </a> for more
                                        examples and information about
                                        the plugin.
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->


                                <!-- /.col (left) -->

                                <div class="card card-warning">
                                    <div class="card-header">
                                        <h3 class="card-title">Sale descriptions</h3>
                                    </div>
                                    <div class="card-body">

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">ชื่อผู้ประสานงาน (Sale)<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="sale_name" class="form-control" value="<?= $r->sale_name; ?>"
                                                id="exampleInputEmail1" placeholder="ชื่อลูกค้า">
                                        </div>
                                        <!-- /.form-group -->

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">บริษัท</label>
                                            <input type="text" name="sale_company" class="form-control" value="<?= $r->sale_company; ?>"
                                                id="exampleInputEmail1" placeholder="บริษัท"> 
                                        </div>
                                        <!-- /.form-group -->

                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>ที่อยู่</label>
                                            <textarea class="form-control" name="sale_detail" id="sale_detail" rows="5"
                                                placeholder="รายละเอีดยที่อยู่บริษัท(ถ้ามี)....."><?= $r->sale_detail; ?></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">ตำแหน่ง</label>
                                            <input type="text" name="sale_position" class="form-control" value="<?= $r->sale_position; ?>"
                                                id="exampleInputEmail1" placeholder="ตำแหน่ง">
                                        </div>
                                        <!-- /.form-group -->


                                        <div class="form-group">
                                            <label for="exampleInputEmail1">เบอร์โทรศัทพ์</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                </div>
                                                <input type="text" class="form-control" name="sale_phone" value="<?= $r->sale_phone; ?>"
                                                    data-inputmask='"mask": "(999) 999-9999"' data-mask >
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                        <p>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="fas fa-envelope"></i></span>
                                                </div>
                                                <input type="email" class="form-control" name="sale_email" value="<?= $r->sale_email; ?>"
                                                    id="sale_email" placeholder="Email">
                                            </div>
                                        </div>
                                        <!-- /.form-group -->

                                        <!-- Date range -->
                                        <div class="form-group mt-5">
                                            <button type="submit" name="submit" value="submit"
                                                class="btn btn-success">Save</button>
                                        </div>
                                        <!-- /.form group -->

                                        </form>

                                    </div>
                                    <div class="card-footer">
                                        Visit <a href="https://getdatepicker.com/5-4/">tempusdominus </a> for more
                                        examples and information about
                                        the plugin.
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col (right) -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
        </section>
        <!-- /.content -->


    </div>
    <!-- /.content-wrapper -->


    <!----------------------------- start menu ------------------------------->
    <?php include("../ino/templated/footer.php"); ?>
    <!----------------------------- end menu --------------------------------->

    <!-- highlight -->
    <script src="code/dist/js/highlight.js"></script>

    <script>
    $("#myTable tr").highlight();
    </script>
    <!-- highlight -->