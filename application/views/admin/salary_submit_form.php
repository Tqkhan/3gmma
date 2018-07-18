
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
								<h1>Submit Salary Form</h1>
								<ol class="breadcrumb">
									<li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
									<li><a href="#">Salary</a></li>
									<li class="active">Submit Salary</li>
								</ol>
							</div>
						</div> <!-- /. Content Header (Page header) -->
						<div class="row">
							<div class="col-sm-12">
								<div class="panel panel-bd ">
									<div class="panel-heading">
									   <!-- <?php
									   print_r($student['courseID']); ?> -->
									</div>
									<div class="panel-body">

										<form action="<?php echo base_url() ?>admin/salary_submission" enctype="multipart/form-data" method="post">
											<div class="form-group row">
											<label for="example-text-input" class="col-sm-3 col-form-label">Trainer ID</label>
											<div class="col-sm-9">
												<input class="form-control" value="<?php echo $trainer['trainerID'] ?>" name="trainerID" placeholder="Trainer Name " type="text"  id="example-text-input" readonly>
											</div>
										</div>



<input class="form-control" value="<?php echo $trainer_salary['id'] ?>" name="trainer_salaryID" placehol r="Contact Number " type="hidden"  id="example-text-input" readonly>






										<div class="form-group row">
											<label for="example-text-input" class="col-sm-3 col-form-label">Trainer Name</label>
											<div class="col-sm-9">
												<input class="form-control" value="<?php echo $trainer['trainer_name'] ?>" name="trainer_name" placeholder="Student Name " type="text"  id="example-text-input" readonly>
											</div>
										</div>

										<div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Month Of Fee</label>
                                            <div class="col-sm-9">
                   							<?php 
                            $result = explode('-', $trainer_salary['submission_date']);
                            $monthNum = $result[1];
                            $monthName = date("F", mktime(0, 0, 0, $monthNum, 10));
                             
                                                       

                   							 ?>
                                                 <input class="form-control" name="submission_date" placeholder="Salary Month" type="text" required="" id="example-text-input" value="<?php echo $monthName; ?>" readonly>
                                            </div>
                                        </div>

                                            <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Date Of Submission</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" name="submission_date" placeholder="Select date" type="date" required="" id="example-text-input">
                                            </div>
                                        </div>

					<div class="form-group row">
					<label for="example-text-input" class="col-sm-3 col-form-label">Salary</label>
					<div class="col-sm-9">
					<input class="form-control" name="salary" placeholder="Salary" type="number" value="<?php echo $trainer['trainer_salary']; ?>" required="" id="example-text-input" readonly>
					</div>
					</div>


<input class="form-control" name="submission_month" placeholder="Salary Month" type="hidden" required="" id="example-text-input" value="<?php echo $monthName; ?>">

					<div class="form-group row">
					<label for="example-text-input" class="col-sm-3 col-form-label">Status</label>
					<div class="col-sm-9">
					<select class="form-control" name="status" placeholder="status" required="" id="example-text-input" >
                      <option value="1">Complete</option>
                                                        
            
                     </select>
					</div>
					</div>




										<div class="form-group row col-md-12">
										   <input type="submit" value="Submit Salary" id="feeform_register" class="btn btn-primary pull-right">
										</div>

									   </form>
									</div>
								</div>
							</div>
						</div>




