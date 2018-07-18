
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
                                <h1>View pending Salaries</h1>
                                <small>For pending Salaries</small>
                                <ol class="breadcrumb">
                                    <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="#">Trainer Salaries</a></li>
                                    <li class="active">Fee pending Salaries</li>
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









<!--
            <div class="content-wrapper">
                <div class="container">
                    main content
                    <div class="content">
                        Content Header (Page header)
                        <div class="content-header">
                            <div class="header-icon">
                                <i class="pe-7s-note2"></i>
                            </div>
                            <div class="header-title">
                                <h1>Create Category</h1>
                                <ol class="breadcrumb">
                                    <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="#">Categories</a></li>
                                    <li class="active">Create Category</li>
                                </ol>
                            </div>
                        </div> /. Content Header (Page header)
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd ">
                                    <div class="panel-heading">

                                    </div>
                                    <div class="panel-body">

                                        <form action="<?php echo base_url() ?>admin/insert_fee" enctype="multipart/form-data" method="post">
                                            <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Student Id</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="studentID" placeholder="Student ID" required="" id="example-text-input" >
                                                    <option value="">Select ID</option>
                                                    <?php foreach ($students as $student): ?>
                                                        <option value="<?php echo $student['studentID'] ?>"><?php echo $student['studentID'] ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Month Of Fee</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="fee_month" placeholder="Fee Month" required="" id="example-text-input" >
                                                    <option value="">Select Month</option>
                                                        <option value="January">January</option>
                                                        <option value="February">February</option>
                                                        <option value="March">March</option>
                                                        <option value="April">April</option>
                                                        <option value="May">May</option>
                                                        <option value="June">June</option>
                                                        <option value="July">July</option>
                                                        <option value="August">August</option>
                                                        <option value="September">September</option>
                                                        <option value="October">October</option>
                                                        <option value="November">November</option>
                                                        <option value="December">December</option>
                                                </select>
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Enter Fee</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" name="student_fee" placeholder="Enter Fee Amount Here" type="number" required="" id="example-text-input">
                                        </div>
                                            </div>



                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Date Of Submission</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" name="submission_date" placeholder="Select date" type="date" required="" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Penality or Extra Charges</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" name="extra_charges" placeholder="charges if any" type="text" required="" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row col-md-12">
                                           <input type="submit" value="Submit Fees" class="btn btn-primary pull-right">
                                        </div>

                                       </form>
                                    </div>
                                </div>
                            </div>
                        </div>


 -->



