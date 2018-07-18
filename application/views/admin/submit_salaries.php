
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
                                <h1>View Submit Salaries</h1>
                                <small>For Submit Salaries</small>
                                <ol class="breadcrumb">
                                    <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="#">Trainer Salaries</a></li>
                                    <li class="active">Fee Submit Salaries</li>
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
                                                        <th>Trainers Name</th>
                                                        <th>Month</th>
                                                        <th>Trainers Fee</th>
                                                        <th>Actions?</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                <?php foreach ($trainer as $trainerdata): ?>

                                                    <tr>
                                                        <td><?php echo $trainerdata['trainerID'] ?></td>
                                                        <td><?php echo $trainerdata['trainer_name']; ?></td>
                                                        <td>

                                                        <?php
                                                        $result_date =$trainerdata['submission_date'];
                                                            $datestring=$result_date.' first day of last month';
                                                            $dt=date_create($datestring);
                                                            echo $dt->format('F');
                                                        ?>
                                                            
                                                        </td>
                                                        <td><?php echo $trainerdata['trainer_salary'] ?></td>

                                                        <td><a href="<?php echo base_url() ?>admin/salary_submit_form/<?php echo $trainerdata['trainerID'] ?>/<?php echo $trainerdata['id'] ?>"><i class="fa fa-edit fa-2x"></i></a> 
                                                        <!-- <a href="<?php echo base_url() ?>admin/in_active_fee/<?php echo $trainerdata['id'];?>"><i class="fa fa-trash fa-2x"></i></a> --></td>

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





