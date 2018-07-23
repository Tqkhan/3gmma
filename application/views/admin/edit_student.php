
<?php $con=0; ?>


<?php foreach($student as $students ){ ?>

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
                                <h1>Edit Student</h1>
                                <br>
                                <ol class="breadcrumb">
                                    <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="#">Student</a></li>
                                    <li class="active">Create Student</li>
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

                                        <form action="<?php echo base_url() ?>admin/update_student/<?php echo $students['studentID'] ?>" method="post" id="submit-form" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Student Name</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" value="<?php echo $students['student_name'] ?>" name="student_name" placeholder="Student Name " type="text"  id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Date of Birth</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" value="<?php echo $students['dob'] ?>" name="dob" placeholder="Student Name " type="text"  id="bday">
                                            </div>
                                        </div>




<div class="form-group row">
<label for="example-text-input" class="col-sm-3 col-form-label">Past Experience</label>
<input type="radio" name="past_experience" value="yes" <?php if($students['past_experience'] == 'yes'){echo 'checked';} ?>>
<span> Yes </span>
<input type="radio" name="past_experience" style="margin-left: 100px;" value="no" <?php if($students['past_experience'] == 'no'){echo 'checked';} ?>>
<span> No </span>
<input type="radio" name="past_experience" style="margin-left: 100px;" value="other" <?php if($students['past_experience'] == 'other'){echo 'checked';} ?>>
<span> Other </span>
</div>


<div class="form-group row change-type type-yes" style="<?php if($students['past_experience'] != 'yes'){echo 'display: none';} ?>">
<label for="example-text-input" class="col-sm-3 col-form-label">Remarks</label>
<div class="col-sm-9">
    <textarea class="form-control" name="remarks" placeholder="Remarks" type="text" id="example-text-input"><?php if($students['past_experience'] == 'other' || $students['past_experience'] == 'yes'){echo $students['remarks'];}else{echo '';} ?></textarea>
</div>
</div>


<div class="form-group row change-type type-other" style="<?php if($students['past_experience'] != 'other'){echo 'display: none';} ?>">
<label for="example-text-input" class="col-sm-3 col-form-label">Remarks</label>
<div class="col-sm-9">
    <textarea class="form-control" name="remarks" placeholder="Remarks" type="text"  id="example-text-input"><?php if($students['past_experience'] == 'other' || $students['past_experience'] == 'yes'){echo $students['remarks'];}else{echo '';} ?></textarea>
</div>
</div>






                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Contact Number</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" value="<?php echo $students['student_contact'] ?>" name="student_contact" placeholder="Contact Number " type="text"  id="example-text-input" />
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Email  </label>
                                            <div class="col-sm-9">
                                                <input class="form-control" value="<?php echo $students['student_email'] ?>" name="student_email"   placeholder="Email  " type="email" id="example-text-input">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Address</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" name="student_address" placeholder="Address " type="text"  id="example-text-input" ><?php echo $students['student_address'] ?></textarea>
                                            </div>
                                        </div>

<div class="form-group row">
<label for="example-text-input" class="col-sm-3 col-form-label">Student C.N.I.C</label>
<div class="col-sm-9">
<input class="form-control cnic" name="student_cnic" placeholder="Student CNIC" type="text"  id="" value="<?php echo $students['student_cnic']; ?>" >
</div>
</div>
<div class="form-group row">
<label for="example-text-input" class="col-sm-3 col-form-label">Student Education</label>
<div class="col-sm-9">
<input class="form-control" name="education" placeholder="Student Education" type="text"  id="" value="<?php echo $students['education']; ?>" >
</div>
</div>


                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">WhatsApp Number</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" name="home_phone" placeholder="number" type="text"  id="example-text-input" ><?php echo $students['home_phone'] ?></textarea>
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Select Campus</label>
                                            <div class="col-sm-9">
                                                <select class="form-control select ddl2" name="campusID" id="" >
                                                    <option value="Select Campus">Select Campus</option>
                                                     <?php foreach ($campus as $camp): ?>
                                                   <option  value="<?php echo $camp['id'] ?>"<?php if($camp['id']== $students['campusID']) echo 'selected' ?>><?php echo $camp['name'] ?></option>
                                               <?php endforeach ?> 



                                                </select>
                                            </div>

                                        </div>


<?php $course_title['TrinerID_edit_ID'] = explode(",",$students['TrinerID_data_ID']);?>
<?php $course_title['course_data_data'] = explode(",",$students['course_title']);?>
<?php $course_title['trainer'] = explode(",",$students['trainer']);?>
<?php $course_title['course_timing'] = explode(",",$students['course_timing']);?>
<?php $course_title['course_ID'] = explode(",",$students['course_ID']);?>
<?php $course_title['trainerID_data'] = explode(",",$students['trainer_ID']);?>
<?php $course_title['fee'] = explode(",",$students['course_fee']);?>
<?php $course_title['coursedata_id'] = explode(",",$students['course_data_ID']);?>
<?php $count_loop = count($course_title['course_data_data']); ?>





<?php for ( $i=0; $i<$count_loop; $i++ ) { ?>


<div class=" after-add-more">
<div class="form-group row">
<input class="form-control" name="scid[]" value="<?php echo $course_title['coursedata_id'][$i]; ?>" placeholder="" type="hidden"  id="example-text-input">
<?php if ($con == 0) { ?>
<div class="form-group row">
<span class="pull-right">
<div class="col-sm-12 change">
<a class="btn btn-success add-more pull-right">+ Add More</a>
</div></span>
</div>
<?php } else { ?>
<div class="form-group row">
<span class="pull-right">
<div class="col-sm-12 change"><a class="btn btn-danger remove"><i class="fa fa-trash-o" aria-hidden="true"></i> </a>  <a class="btn btn-success add-more"><strong> + </strong> </a></div>
</span>
</div>
<?php } $con++ ?>


<div class="form-group row">
    <label for="example-text-input" class="col-sm-3 col-form-label">Shift </label>
    <div class="col-sm-9">
        <select class="form-control select" name="course_shift"   type="text" id="example-text-input">
       <option value="">Select Shift</option>
       <option value="Morning" <?php if($course['course_shift']=="Morning") echo "selected" ?>>Morning</option>
       <option value="Evening" <?php if($course['course_shift']=="Evening") echo "selected" ?>>Evening</option>
         </select>
    </div>
</div>
<div class="form-group row">
<label for="example-text-input" class="col-sm-3 col-form-label">Select Course </label>
<div class="col-sm-9 dataclass">
<select class="form-control select coursedataID" name="courseID[]"  type="text" id="clearclass1" >
<option value="">Select Courses</option>
<?php foreach($courses as $all_courses){ ?>
<option value="<?php echo $all_courses['courseID']; ?>" <?php if($course_title['course_ID'][$i] == $all_courses['courseID']) echo 'selected' ?>><?php echo $all_courses['course_title']; ?></option>
<?php } ?>
</select>
</div>
</div>


<div class="form-group row">
<label for="example-text-input" class="col-sm-3 col-form-label">Select Trainer </label>
<div class="col-sm-9">
<!-- <select class="form-control select" name="trainerID[]"  type="text" id="example-text-input" >
<option value="">Select Courses</option>                                                                                      
<?php foreach($trainers as $all_trainer){ ?>
<option value="<?php echo $all_trainer['trainerID']; ?>" <?php if($course_title['trainerID_data'][$i] == $all_trainer['trainerID'] ) echo 'selected' ?>><?php echo $all_trainer['trainer_name']; ?></option>
<?php } ?>
</select> -->

<select class="form-control select ddltrainer"  name="trainerID[]"  type="text" id="ddltrainer" >
<option value="<?php echo $all_trainer['trainerID']; ?>"   class="myselect" ><?php echo $course_title['trainer'][$i]; ?></option>
</select>

</div>
</div>
<div class="form-group row">

<label for="example-text-input" class="col-sm-3 col-form-label">Select Timing</label>
<div class="col-sm-9">
<select class="form-control select ddl" name="gym_timing[]"  id="ddl"  >
<option value="<?php echo $course_title['course_timing'][$i]; ?>" class="myselect" ><?php echo $course_title['course_timing'][$i]; ?></option>
</select>
</div>

</div>
<div class="form-group row">
<label class="col-sm-3 col-form-label">Fee</label>
<div class="col-sm-9">
<!-- <select class="form-control select dd2" name="fee[]" id="ddl2">
<option value="">Select Fee</option>
<option value="<?php echo $course_title['fee'][$i]; ?>" class="myselect" ><?php echo $course_title['fee'][$i]; ?></option>
</select> -->

<select class="form-control select ddl2" name="fee[]" id="ddl2" >
<option value="<?php echo $course_title['fee'][$i]; ?>" class="myselect"><?php echo $course_title['fee'][$i]; ?></option>
</select>


</div>

</div>
 <hr>
</div>
</div> 
<?php } ?>
                                           
 <div class="panel-heading">
 <div class="panel-title">
 <h4 style="margin-left: 435px;">Emergency Contact</h4>
 </div>
 </div>
 <hr>
 <div class="form-group row">
 <label for="example-text-input" class="col-sm-3 col-form-label">Name</label>
 <div class="col-sm-9">
 <input class="form-control" name="emergency_name" value="<?php echo $students['emergency_name'] ?> " placeholder="" type="text"  id="example-text-input">
 </div>
 </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Emergency number</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" name="emergency_home" value="<?php echo $students['emergency_home'] ?>" placeholder=" " type="text"  id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Emergency relation</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" name="emergency_relation" value="<?php echo $students['emergency_relation'] ?> " placeholder="" type="text"  id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Emergency mobile</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" name="emergency_mobile" value="<?php echo $students['emergency_mobile'] ?>" placeholder=" " type="text"  id="example-text-input">
                                            </div>
                                        </div>
                                        	<hr>
            						 <div class="panel-heading">
                                    	<div class="panel-title">
                                        <h4 style="margin-left: 435px;">Guardian Information</h4>
                                    	</div>
                                		</div>
                                		<hr>
                                		<div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Father Name</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" name="father_name" value="<?php echo $students['father_name'] ?>" placeholder="" type="text"  id="example-text-input">
                                            </div>
                                        </div>
											<div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Mobile number</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" name="father_mobile" value="<?php echo $students['father_mobile'] ?>" placeholder="" type="text"  id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">C.N.I.C</label>
                                            <div class="col-sm-9">
                                                <input class="form-control cnic" value="<?php echo $students['father_cnic'] ?>" name="father_cnic" placeholder="" type="text"  id="example-text-input">
                                            </div>
                                        </div>
                                        	<hr>
            						 <div class="panel-heading">
                                    	<div class="panel-title">
                                        <h4 style="margin-left: 435px;">Fee Structure</h4>
                                    	</div>
                                		</div>
                                		<hr>
											
<div class="form-group row">
<label for="example-text-input" class="col-sm-3 col-form-label">Joining Date</label>
<div class="col-sm-9">
<input class="form-control" name="joindate" value="<?php echo $students['joindate'];  ?>" placeholder="Enter Your Joining Date" type="Date"  id="">
</div>
</div>

                                            <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Admission Fee</label>
                                            <div class="col-sm-9">
                                            <input class="form-control sum" name="admission_fee" value="<?php echo $students['admission_fee'] ?>" placeholder="" type="number"  id="admi_fee">
                                            </div>
                                            </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Membership Fee</label>
                                            <div class="col-sm-9">
                                                <input class="form-control sum" name="membership_fee" value="<?php echo $students['membership_fee'] ?>" placeholder="" type="number"  id="member_fee" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Other</label>
                                            <div class="col-sm-9">
                                                <input class="form-control sum" name="other_fee" value="<?php echo $students['other_fee'] ?>" placeholder="" type="number"  id="other_charges">
                                            </div>
                                        </div>

<div class="form-group row">
<label for="example-text-input" class="col-sm-3 col-form-label">Monthly Fee</label>
<div class="col-sm-9">
    <input class="form-control sum" name="monthly_fee" placeholder="Enter Your Monthly Fee" type="number"  id="month_fee" value="" readonly>
</div>
</div>


<div class="form-group row">
<label for="example-text-input" class="col-sm-3 col-form-label min">Discount Fee</label>
<div class="col-sm-9">
    <input class="form-control minus" name="discountfee" placeholder="Enter Fee Discount" type="number"  id="discountfee" value="<?php echo $students['discountfee'] ?>">
</div>

</div>

   <div class="form-group row">
     <label for="example-text-input" class="col-sm-3 col-form-label">Total</label>
    <div class="col-sm-9">
   <input class="form-control" name="Total" value="" placeholder="" type="text"  id="result" readonly>
 </div>
 <br>
 </div>





<div class="form-group row">
<label for="example-text-input" class="col-sm-3 col-form-label">Status</label>
<div class="col-sm-9">
<select class="form-control select" name="status"  type="text" id="courseID" >
<option value="">Change Status</option>
<option  value="active" id="active">active</option>
<option  value="in_active" id="in_active">in_active</option>
</select>
</div>
<br>
</div>




<div class="form-group row">
<label for="example-text-input" class="col-sm-3 col-form-label">Profile Image</label>
<div class="col-sm-9">

<img class="profile-pic" src="<?php echo base_url(); ?><?php echo $students['user_image'];?>" />
<br>
<div class="upload-button">Upload Image</div>
<input class="file-upload" type="file" name="profile_image" accept="image/*"/>
</div>
<br>
</div>


<div class="form-group row col-md-12">
<input type="submit" value="Update Student" class="btn btn-primary pull-right" id="edit_submit">
</div>

</form>
<a href="<?php echo base_url() ?>admin/view_student" class="btn btn-info" role="button">Cancel</a>
</div>
</div>
</div>
</div>
                        
                        <div class="row">
                       
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div> <!-- /.main content -->
                </div> <!-- /.container -->
            </div> <!-- /.content-wrapper -->
            <!-- start footer -->


<?php } ?>










<style type="text/css">
  .upload-button {
    padding: 4px;
    border: 1px solid black;
    border-radius: 5px;
    display: block;
    float: left;
}

.profile-pic {
    max-width: 200px;
    max-height: 200px;
    display: block;
}

.file-upload {
    display: none !important;
}
</style>

<script>
$(document).ready(function(){

    $("#bday").datepicker({
    maxDate: "-1"
    });
    // masking
    $(".cnic").mask("9999-99999999-9");
    // masking



    $( "#submit-form" ).submit(function(e) {
        var form = this;
        e.preventDefault();
        swal({
            title: "Are you sure?",
            text: "",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, Update it!",
            closeOnConfirm: false
        },
        function() {
        form.submit();
        });
    });
    function remove_cal() {
        $('.remove').click(function() {
            setTimeout(function() {
                count_fee()
            }, 500)
            
        })
        count_fee()
    }
    remove_cal()
    function remove_value() {
        $('.add-more').click(function() {
            setTimeout(function() {
                remove_value()
                change_course()
                remove_cal()
                $('.after-add-more').last().find('input').val('')
                $('.after-add-more').last().find('select').val('')
                /*$('.after-add-more').last().find('select').not('select.coursedataID').empty()*/
            }, 500)
            
        })
    }
    remove_value()
    function count_fee() {
        var total_value = 0;      
        $(".ddl2").each(function(){
            var dataget = $(this).val();
            if($(this).val() != null && $(this).val() != ''){
              total_value = total_value + parseInt($(this).val())
            }
            else{
              total_value = total_value + 0
            }
            //total_value = total_value + parseInt($(this).val())
            console.log(total_value);
            $("#month_fee").val(total_value);
            

        });
        dataworkfee()
        $(".ddl2").change(function(){
            var total_value = 0;      
            $(".ddl2").each(function(){
                var dataget = $(this).val();
                total_value = total_value + parseInt($(this).val())
                console.log(total_value);
                $("#month_fee").val(total_value);
                dataworkfee()
                

            });
        });

    }
    count_fee()

    var total = 0;
    function dataworkfee()
    {
        $('.sum').each(function() {
            if($(this).val() != null && $(this).val() != ''){
                total = total + parseInt($(this).val())
            }
            else{
                total = total + 0
            } 
        })
        if($('.minus').val() != null && $('.minus').val() != ''){
            total = total - parseInt($('.minus').val())
        }
        $('#result').val(total);
        total = 0;

    }
    dataworkfee()

    $('.sum,.minus').keyup(function() {
        var total = 0;
        $('.sum').each(function() {
            if($(this).val() != null && $(this).val() != ''){
                total = total + parseInt($(this).val())
            }
            else{
                total = total + 0
            }
        })

        if($('.minus').val() != null && $('.minus').val() != ''){
            total = total - parseInt($('.minus').val())
        }
        $('#result').val(total);

    })
    total = 0;

    function change_course() {
        $(".shift").change(function () {
        var shift = $(this).val();
            var th = $(this)
            var select = th.parent().parent().parent()
          $.ajax({
                url: "<?php echo base_url(); ?>admin/get_coarse_selectbox",
                data: {id: shift},
                type: 'POST',
                dataType: 'json', // added data type
                success: function(res) {
                  select.find('.coursedataID').empty()
                  select.find('.coursedataID').append('<option value="">Select Course</option>')
                  for (var i = 0; i < res.length; i++) {
                    select.find('.coursedataID').append('<option value="'+res[i].courseID+'">'+res[i].course_title+'</option>')
                  }
                    
                }
            });
      });
        $(".coursedataID").change(function(){
            var dataget = $(this).val();
            var th = $(this)
            var select = th.parent().parent().parent()
            $.ajax({
                url: "<?php echo base_url(); ?>admin/get_fee_selectbox",
                data: {id: dataget},
                type: 'POST',
                dataType: 'json', // added data type
                success: function(res) {
                  console.log(res)
                  select.find('.ddl2').empty()
                  select.find('.ddl2').append('<option value="">Select Fee</option>')
                  for (var i = 0; i < res.length; i++) {
                    select.find('.ddl2').append('<option value="'+res[i]['course_price']+'">'+res[i]['course_price']+'</option>')
                  }
                    
                }
            });
            $.ajax({
                url: "<?php echo base_url(); ?>admin/get_trainer_selectbox",
                data: {id: dataget},
                type: 'POST',
                dataType: 'json', // added data type
                success: function(res) {
                  console.log(res)
                  select.find('.ddltrainer').empty()
                  select.find('.ddltrainer').append('<option value="">Select Trainer</option>')
                  for (var i = 0; i < res.length; i++) {
                    select.find('.ddltrainer').append('<option value="'+res[i]['trainerID']+'">'+res[i]['trainer_name']+'</option>')
                  }
                    
                }
            });
            $.ajax({
                url: "<?php echo base_url(); ?>admin/getdata_selectbox",
                data: {id: dataget},
                type: 'POST',
                dataType: 'json', // added data type
                success: function(res) {
                  console.log(res)
                  select.find('.ddl').empty()
                  select.find('.ddl').append('<option value="">Select Timing</option>')
                  for (var i = 0; i < res.length; i++) {
                    select.find('.ddl').append('<option value="'+res[i]+'">'+res[i]+'</option>')
                  }
                    
                }
            });
        });
    }
    change_course()
});
</script>



<script>
     var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

             reader.onload = function (e) {
                $('.profile-pic').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $(".file-upload").on('change', function(){
        readURL(this);
    });
    
    $(".upload-button").on('click', function() {
       $(".file-upload").click();
    });

</script>

