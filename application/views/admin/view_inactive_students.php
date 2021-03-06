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
                                <small>Tabs styles and versions</small>
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

                                        <div class="table-responsive">
                                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Student ID</th>
                                                        <th>Student Name</th>
                                                        <!-- <th>Student Email</th> -->
                                                        <th>Student Phone</th>

                                                        <th>Course Enrolled</th>
                                                        <th>Trainer</th>
                                                        <th>Status</th>
                                                         <th>Campus</th>
                                                        <th>Actions?</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                <?php foreach ($students as $student): ?>

                                                    <tr>
                                                        <td><?php echo $student['studentID'] ?></td>
                                                        <td><?php echo $student['student_name'] ?></td>
                                                        <!-- <td><?php echo $student['student_email'] ?></td> -->
                                                        <td><?php echo $student['student_contact'] ?></td>

                                                        <td><?php echo $student['course_title'] ?></td>
                                                        <td><?php echo $student['trainer'] ?></td>
                                                         <td><?php echo $student['status'] ?></td>
                                                         <td><?php echo $student['campus'] ?></td>
                                                        <td><a href="<?php echo base_url() ?>admin/edit_student/<?php echo $student['studentID'] ?>"><i class="fa fa-edit fa-2x"></i></a> <a href="<?php echo base_url() ?>admin/student_deactivate/<?php echo $student['studentID'] ?>"></a></td>

                                                    </tr>
                                                  <?php endforeach ?>

                                                </tbody>
                                            </table>
<span class="pull-right"><p><b>Total Students</b> : <?php echo $length_of_rows; ?></p></span>
<a href="<?php echo base_url() ?>admin/view_student" class="btn btn-info" role="button">Back To All Students</a>


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div> <!-- /.main content -->
                </div> <!-- /.container -->
            </div> <!-- /.content-wrapper -->
            <!-- start footer -->

