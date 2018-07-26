
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
								<h1>Submit Fee Form</h1>
								<ol class="breadcrumb">
									<li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
									<li><a href="#">Fee</a></li>
									<li class="active">Submit Fee</li>
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

										<form action="<?php echo base_url() ?>admin/insert_fee" enctype="multipart/form-data" method="post">
											<div class="form-group row">
											<label for="example-text-input" class="col-sm-3 col-form-label">Student ID</label>
											<div class="col-sm-9">
												<input class="form-control" value="<?php echo $student['studentID'] ?>" name="studentID" placeholder="Student Name " type="text"  id="example-text-input" readonly>
											</div>
										</div>



<input class="form-control" value="<?php echo $fee_detail['id'] ?>" name="pendingID" placehol r="Contact Number " type="hidden"  id="example-text-input" readonly>






										<div class="form-group row">
											<label for="example-text-input" class="col-sm-3 col-form-label">Student Name</label>
											<div class="col-sm-9">
												<input class="form-control" value="<?php echo $student['student_name'] ?>" name="student_name" placeholder="Student Name " type="text"  id="example-text-input" readonly>
											</div>
										</div>
										<div class="form-group row">
											<label for="example-text-input" class="col-sm-3 col-form-label">Contact Number</label>
											<div class="col-sm-9">
												<input class="form-control" value="<?php echo $student['student_contact'] ?>" name="student_contact" placeholder="Contact Number " type="text"  id="example-text-input" readonly>
											</div>
										</div>

										<div class="form-group row">
											<label for="example-text-input" class="col-sm-3 col-form-label">Email  </label>
											<div class="col-sm-9">
												<input class="form-control" value="<?php echo $student['student_email'] ?>" name="student_email"   placeholder="Email  " type="email" id="example-text-input" readonly>
											</div>
										</div>

										<div class="form-group row">
											<label for="example-text-input" class="col-sm-3 col-form-label">Address</label>
											<div class="col-sm-9">
												<textarea class="form-control" name="student_address" placeholder="Address " type="text"  id="example-text-input" readonly ><?php echo $student['student_address'] ?></textarea>
											</div>
										</div>

										 <div class="form-group row">


										 	
											<label for="example-text-input" class="col-sm-3 col-form-label">Enrolled Course </label>
											<div class="col-sm-9">
												<select class="form-control select" name="courseID"  type="text" id="example-text-input" multiple="" readonly>
											   <option value="">Select Course</option>
											   <?php

                                           $enrolled_courses= explode(',', $student['course_id']);
											    foreach ($courses as $course): ?>
												   <option value="<?php echo $course['courseID'] ?>" <?php if(in_array($course['courseID'],$enrolled_courses)) echo "selected";  ?>><?php echo $course['course_title'] ?></option>
											   <?php endforeach ?>
												 </select>
											</div>
										</div>
										 <div class="form-group row">
											<label for="example-text-input" class="col-sm-3 col-form-label">Trainer </label>
											<div class="col-sm-9">
												<select class="form-control select" name="trainerID"  type="text" id="example-text-input" readonly multiple="">
											   <option value="">Select Trainer</option>
											   <?php

                                           $courses_trainer= explode(',', $student['trainerID']);
											    foreach ($trainers as $trainer): ?>
												   <option value="<?php echo $trainer['trainerID'] ?>" <?php if(in_array($trainer['trainerID'],$courses_trainer)) echo "selected";  ?>><?php echo $trainer['trainer_name'] ?></option>
											   <?php endforeach ?>
												 </select>
											</div>
										</div>
										<div class="form-group row">
											<label for="example-text-input" class="col-sm-3 col-form-label">Admission Fee  </label>
											<div class="col-sm-9">
												<input class="form-control" value="<?php echo $student['admission_fee'] ?>" name="admission_fee"   placeholder="Admission Fee  " type="Admission Fee" id="example-text-input" readonly>
											</div>
										</div>
										<div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Month Of Fee</label>
                                            <div class="col-sm-9">
                   							<?php 
                            $result = explode('-', $fee_detail['date']);
                            $monthNum = $result[1];
                            $monthName = date("F", mktime(0, 0, 0, $monthNum, 10));
                             
                                                       

                   							 ?>
                                                 <input class="form-control" name="fee_month" placeholder="Fee Month" type="text" required="" id="example-text-input" value="<?php echo $monthName; ?>" readonly>
                                            </div>
                                        </div>

											<div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Enter Fee</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" name="student_fee" placeholder="Enter Fee Amount Here" type="number" required="" id="example-text-input" value="<?php  echo $student['monthly_fee']; ?>" readonly>
                                                <input style="display: none;" class="form-control" name="admission_fee" placeholder="Enter Fee Amount Here" type="number" required="" id="example-text-input" value="<?php  echo $student['admission_fee']; ?>" readonly>
                                                <input style="display: none;" class="form-control" name="membership_fee" placeholder="Enter Fee Amount Here" type="number" required="" id="example-text-input" value="<?php  echo $student['membership_fee']; ?>" readonly>
                                                <input style="display: none;" class="form-control" name="other_fee" placeholder="Enter Fee Amount Here" type="number" required="" id="example-text-input" value="<?php  echo $student['other_fee']; ?>" readonly>
                                                <input style="display: none;" class="form-control" name="discountfee" placeholder="Enter Fee Amount Here" type="number" required="" id="example-text-input" value="<?php  echo $student['discountfee']; ?>" readonly>
                                                <input style="display: none;" class="form-control" name="total" placeholder="Enter Fee Amount Here" type="number" required="" id="example-text-input" value="<?php  echo $student['total']; ?>" readonly>
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
										   <input type="submit" value="Submit Fees" id="feeform_register" class="btn btn-primary pull-right">
										</div>

									   </form>
									</div>
								</div>
							</div>
							</div>
							</div>
							</div>
						</div>




