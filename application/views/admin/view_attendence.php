
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
                                <h1>View Attendence</h1>
                                <small></small>
                                <ol class="breadcrumb">
                                    <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="#">Forms</a></li>
                                    <li class="active">View ateendence</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
         <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Student's Attendence </h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">

                                        <div class="table-responsive">
                                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr>

                                                        <th>Student ID</th>
                                                        <th>Student Name</th>
                                                        <th>Date_Time</th>
                                                        <th>Student Email</th>
                                                        <th>Gender</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($attendences as $attendence): ?>

                                                    <tr>

                                                        <td><?php echo $attendence['studentID'] ?></td>
                                                        <td><?php echo $attendence['student_name'] ?></td>
                                                        <td><?php echo $attendence['time_of_attendence'] ?></td>
                                                        <td><?php echo $attendence['student_email'] ?></td>
                                                        <td><?php echo $attendence['gender'] ?></td>

                                                       <!--  <td><a href="<?php echo base_url() ?>admin/edit_expense/<?php echo $expense['expenseID'] ?>"><i class="fa fa-edit fa-2x"></i></a> <a href="<?php echo base_url() ?>admin/delete/expense/expenseID/<?php echo $expense['expenseID'] ?>"><i class="fa fa-trash fa-2x"></i></a> </td> -->

                                                    </tr>
                                                  <?php endforeach ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.main content -->
                </div> <!-- /.container -->
            </div> <!-- /.content-wrapper -->
            <!-- start footer -->

