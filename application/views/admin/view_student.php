<?php 
 // print_r($students);die();
?>

            <div class="content-wrapper">
                <div class="container">
                    <!-- main content -->
                    <div class="content">
                        <!-- Content Header (Page header) -->
                        <div class="content-header">
                            <div class="header-icon">
                                <i class="pe-7s-note2"></i>
                            </div>
                            <div class="header-title">
                                <h1>View Students</h1>
                                <small></small>
                                <ol class="breadcrumb">
                                    <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="#">Students</a></li>
                                    <li class="active">View Student</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form>
                                            <div class="form-group row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Select Shift</label>
                                                <select class="form-control select shift newt " name="course_shift" type="text" id="example-text-input">
                                                    <option value="">Select Shift</option>
                                                    <option value="Morning">Morning</option>
                                                    <option value="Evening">Evening</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Select Shift</label>
                                                <select class="form-control select coursedataID" name="courseID" type="text" id="courseID">
                                                    <option value="">Select Course</option>
                                                    <option value="" class="myselect"></option>
                                                    <!--  <?php foreach ($courses as $course): ?>
                                                   <option  value="<?php echo $course['courseID'] ?>" id="<?php echo $course['courseID']; ?>"><?php echo $course['course_title'] ?></option>
                                               <?php endforeach ?> -->
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Select Time</label>
                                               <select class="form-control select ddl" name="gym_timing" id="ddl" >
                                                    <option value="" class="myselect"></option>

                                                </select>
                                            </div>
                                        </div>   
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                </br>
                                                <button style="margin-top: 6px;" type="submit" class="form-control btn btn-primary pull-left" name="filter" value="filter">Search</button>
                                            </div>
                                        </div>    
                                        
                                            </div>
                                         

                                        
                                        
                                        
                                    
                                        </form>
                                    </div>
                                    <?php if ($_SESSION['role'] == 'main') {

                                     ?>
            <div class="panel-body">
                <form>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Select Campus</label>
                        <div class="col-sm-8">
                            <select class="form-control" name="campus" id="" required="">
                            <option value="">Please select</option>
                            <?php foreach ($campuses as $campus): ?>
                                <option value="<?php echo $campus['id'] ?>"><?php echo $campus['name'] ?></option>
                            <?php endforeach ?>


                            </select>
                             
                        </div>
                        <div class="col-sm-2">
                            
                            <button type="submit" class="btn btn-primary pull-left">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
                                <?php }?>
                                    <div class="panel-body">

                                        <div class="table-responsive">
                                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>W.Number</th>
                                                        <th>Phone</th>
                                                        <th>Course Enrolled</th>
                                                        <th>Trainer</th>
                                                        <th>Status</th>
                                                        <th>Shift</th>
                                                        <th>Campus</th>
                                                        <th>Actions?</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                <?php foreach ($students as $student): ?>

                                                    <tr>
                                                        <td><?php echo $student['studentID'] ?></td>
                                                        <td><?php echo $student['student_name'] ?></td>
                                                        <td><?php echo $student['student_email'] ?></td>
                                                        <td><?php echo $student['home_phone'] ?></td>
                                                        <td><?php echo $student['student_contact'] ?></td>

                                                        <td><?php echo $student['course_title'] ?></td>
                                                        <td><?php echo $student['trainer'] ?></td>
                                                        <td><?php echo $student['status'] ?></td>
                                                        <td><?php echo $student['course_shift'] ?></td>
                                                         <td><?php echo $student['campus'] ?></td>
    <td><a href="<?php echo base_url() ?>admin/edit_student/<?php echo $student['studentID'] ?>"><i class="fa fa-edit fa-2x"></i></a>

            <a href="<?php echo base_url() ?>admin/pdf_student/<?php echo $student['studentID'] ?>"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
            <a href="<?php echo base_url() ?>admin/view_fees/<?php echo $student['studentID'] ?>" target="_blank"><i class="fa fa-money fa-2x" aria-hidden="true"></i></a>

                                                        
                                                     <!-- <a href="<?php echo base_url() ?>admin/view_one_student/<?php echo $student['studentID'] ?>"><i class="fa fa-print fa-2x" aria-hidden="true"></i></a> --> 

    <?php if($student['status'] == 'active'){ ?>
      <a href="<?php echo base_url() ?>admin/student_deactivate/<?php echo $student['studentID'] ?>"><i class="fa fa-power-off fa-2x" aria-hidden="true"></i></a>
     <?php } ?>

                                                        </td>

                                                    </tr>
                                                  <?php endforeach ?>

                                                </tbody>

                                            </table>
                                            <br>
<span class="pull-right"><p><b style="color:darkolivegreen;font-weight:bold">Total Students : <?php echo $length_of_rows; ?></b></p></span>
 <a href="<?php echo base_url() ?>admin/view_active_students" class="btn btn-info" role="button">View Active Students</a>
 <a href="<?php echo base_url() ?>admin/view_inactive_students" class="btn btn-info" role="button">View In Active Students</a>


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div> <!-- /.main content -->
                </div> <!-- /.container -->
            </div> <!-- /.content-wrapper -->
            <!-- start footer -->
<script type="text/javascript">

                    $(document).ready(function () {
                        function change_course() {
                            $(".shift").change(function() {
                                var shift = $(this).val();
                                var th = $(this)
                                var select = th.parent().parent().parent()
                                $.ajax({
                                    url: "<?php echo base_url(); ?>admin/get_coarse_selectbox",
                                    data: {
                                        id: shift
                                    },
                                    type: 'POST',
                                    dataType: 'json', // added data type
                                    success: function(res) {
                                        select.find('.coursedataID').empty()
                                        select.find('.coursedataID').append('<option value="">Select Course</option>')
                                        for (var i = 0; i < res.length; i++) {
                                            select.find('.coursedataID').append('<option value="' + res[i].courseID + '">' + res[i].course_title + '</option>')
                                        }

                                    }
                                });
                            });
                            $(".coursedataID").change(function() {
                                var dataget = $(this).val();
                                var th = $(this)
                                var select = th.parent().parent().parent()
                                $.ajax({
                                    url: "<?php echo base_url(); ?>admin/get_fee_selectbox",
                                    data: {
                                        id: dataget
                                    },
                                    type: 'POST',
                                    dataType: 'json', // added data type
                                    success: function(res) {
                                        console.log(res)
                                        select.find('.ddl2').empty()
                                        select.find('.ddl2').append('<option value="">Select Fee</option>')
                                        for (var i = 0; i < res.length; i++) {
                                            select.find('.ddl2').append('<option value="' + res[i]['course_price'] + '">' + res[i]['course_price'] + '</option>')
                                        }

                                    }
                                });
                                $.ajax({
                                    url: "<?php echo base_url(); ?>admin/get_trainer_selectbox",
                                    data: {
                                        id: dataget
                                    },
                                    type: 'POST',
                                    dataType: 'json', // added data type
                                    success: function(res) {
                                        console.log(res)
                                        select.find('.ddltrainer').empty()
                                        select.find('.ddltrainer').append('<option value="">Select Trainer</option>')
                                        for (var i = 0; i < res.length; i++) {
                                            select.find('.ddltrainer').append('<option value="' + res[i]['trainerID'] + '">' + res[i]['trainer_name'] + '</option>')
                                        }

                                    }
                                });
                                $.ajax({
                                    url: "<?php echo base_url(); ?>admin/getdata_selectbox",
                                    data: {
                                        id: dataget
                                    },
                                    type: 'POST',
                                    dataType: 'json', // added data type
                                    success: function(res) {
                                        console.log(res)
                                        select.find('.ddl').empty()
                                        select.find('.ddl').append('<option value="">Select Timing</option>')
                                        for (var i = 0; i < res.length; i++) {
                                            select.find('.ddl').append('<option value="' + res[i] + '">' + res[i] + '</option>')
                                        }

                                    }
                                });
                            });
                        }
                        change_course() 
                    });
            </script>