
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
                                <h1>View Trainer</h1>
                                <small></small>
                                <ol class="breadcrumb">
                                    <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="#">Trainer</a></li>
                                    <li class="active">View Trainer</li>
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
                                                        <th>Trainer ID</th>
                                                        <th>Trainer Name</th>
                                                        <th>Trainer Email</th>
                                                        <th>Trainer Phone</th>
                                                        <th>Trainer Address</th>
                                                        <th>Training Courses</th>
                                                        <th>Trainer Status</th>
                                                        <th>Actions?</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                <?php foreach ($trainers as $trainer): ?>

                                                    <tr>
                                                        <td><?php echo $trainer['trainerID'] ?></td>
                                                        <td><?php echo $trainer['trainer_name'] ?></td>
                                                        <td><?php echo $trainer['trainer_email'] ?></td>
                                                        <td><?php echo $trainer['trainer_contact'] ?></td>
                                                        <td><?php echo $trainer['trainer_address'] ?></td>
                                                        <td><?php echo $trainer['course_title'] ?></td>
                                                        <td><?php echo $trainer['status'] ?></td>
                                                        <td><a href="<?php echo base_url() ?>admin/edit_trainer/<?php echo $trainer['trainerID'] ?>"><i class="fa fa-edit fa-2x"></i></a>  <a href="<?php echo base_url() ?>admin/trainer_deactivate/<?php echo $trainer['trainerID'] ?>"><i class="fa fa-trash fa-2x"></i></a></td>

                                                    </tr>
                                                  <?php endforeach ?>

                                                </tbody>
                                            </table>

                                            <a href="<?php echo base_url() ?>admin/view_trainer_active" class="btn btn-info" role="button">View Active Trainer</a>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.main content -->
                </div> <!-- /.container -->
            </div> <!-- /.content-wrapper -->
            <!-- start footer -->

