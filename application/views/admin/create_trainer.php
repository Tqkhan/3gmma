
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
                                <h1>Create Trainer</h1>
                                <ol class="breadcrumb">
                                    <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="#">Trainers</a></li>
                                    <li class="active">Create Trainer</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd ">
                                    <div class="panel-heading">

                                    </div>
                                    <div class="panel-body">

                                        <form action="<?php echo base_url() ?>admin/insert_trainer" method="post">
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Trainer Name</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" name="trainer_name" placeholder="Trainer Name " type="text" required="" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Contact Number</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" name="trainer_contact" placeholder="Contact Number " type="text" required="" id="example-text-input" />
                                            </div>
                                        </div>




<!-- hidden active field  -->
<input class="form-control" name="status" placeholder="" type="hidden" id="" value="active" />
<!-- hidden active field  -->                  


                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Email  </label>
                                            <div class="col-sm-9">
                                                <input class="form-control" name="trainer_email"  required="" placeholder="Email  " type="email" id="example-text-input">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Trainer Salary</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" name="trainer_salary"  required="" placeholder="Salary" type="number" id="example-text-input">
                                            </div>
                                        </div>



                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Address</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" name="trainer_address" placeholder="Address " type="text" required="" id="example-text-input" ></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Training Catagory</label>
                                            <div class="col-sm-9">
 <select class="form-control" name="courseID[]"  id=""  multiple>
                                                	<option value="">Please select</option>
                                 <?php foreach ($courses as $course): ?>
         						<option value="<?php echo $course['courseID']; ?>">
									<?php echo $course['course_title']; ?>
          						</option>
                                                    <?php endforeach ?>

                                                </select>

                                            </div>

                                        </div>





<div class="form-group row">
<label for="example-text-input" class="col-sm-3 col-form-label">Trainer Training Type</label>
<div class="col-sm-9">
<select class="form-control" name="trainer_training_type"  id="" required >
<option value="">Please select</option>
<option value="Head Coach">Head Coach</option>
<option value="Coach">Coach</option>
<option value="Instructor">Instructor</option>
<option value="Trainer">Trainer</option>
<option value="Assistant Trainer">Assistant Trainer</option>
<option value="Intern">Intern</option>

</select>

</div>

</div>




                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Trainer Joining Date</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" name="trainer_Joining_date"  required="" placeholder="Trainer Joining Date" type="Date" id="">
                                            </div>
                                        </div>

                                        <div class="form-group row col-md-12">
                                           <input type="submit" value="Create Trainer" class="btn btn-primary pull-right">
                                        </div>

                                       </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        </div>
                    </div> <!-- /.main content -->
                </div> <!-- /.container -->
            <!-- start footer -->

