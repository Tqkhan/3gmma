
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
                                <h1>Edit Trainer</h1>
                                <ol class="breadcrumb">
                                    <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="#">Trainers</a></li>
                                    <li class="active">Edit Trainer</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->


<?php $course_selected = explode(",",$trainers_data[0]['courseID']);?>
<?php $count_loop = count($courses); ?>




                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd ">
                                    <div class="panel-heading">

                                    </div>
                                    <div class="panel-body">

                                        <form action="<?php echo base_url() ?>admin/update_trainer/<?php echo $trainer['trainerID'] ?>" method="post">

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Trainer Name</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" value="<?php echo $trainer['trainer_name'] ?>" name="trainer_name" placeholder="Trainer Name " type="text" required="" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Contact Number</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" value="<?php echo $trainer['trainer_contact'] ?>" name="trainer_contact" placeholder="Contact Number " type="text" required="" id="example-text-input" />
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Email  </label>
                                            <div class="col-sm-9">
                                                <input class="form-control" value="<?php echo $trainer['trainer_email'] ?>" name="trainer_email"  required="" placeholder="Email  " type="email" id="example-text-input">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Trainer Salary</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" name="trainer_salary"  required="" placeholder="Salary" type="number" id="example-text-input" value="<?php echo $trainer['trainer_salary'];  ?>">
                                            </div>
                                        </div>



  <!-- hidden active field  -->
<input class="form-control" name="status" placeholder="" type="hidden" id="" value="active" />
<input class="form-control" name="trainerID" placeholder="" type="hidden" id="trainerIDdata" value="<?php echo $trainer['trainerID'] ?>" />
<!-- hidden active field  -->                                       

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Address</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control"  name="trainer_address" placeholder="Address " type="text" required="" id="example-text-input" ><?php echo $trainer['trainer_address'] ?></textarea>
                                            </div>
                                        </div>



                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Training Catagory</label>
                                            <div class="col-sm-9">
                                                <select class="form-control gettrainer" name="courseID[]"  id=""  multiple>
                                                	<option value="">Please select</option>
                                 <?php for( $i=0;$i<$count_loop;$i++ ){ ?> 
                                <option value="<?php echo $courses[$i]['courseID']; ?>" <?php $key = array_search($courses[$i]['courseID'], $course_selected); if(array_key_exists($key,$course_selected))echo 'selected' ?> >
                                    <?php echo $courses[$i]['course_title']; ?>
                                </option>
                                                    <?php } ?>

                                                </select>

                                            </div>

                                        </div>





<div class="form-group row">
<label for="example-text-input" class="col-sm-3 col-form-label">Trainer Training Type</label>
<div class="col-sm-9">
<select class="form-control" name="trainer_training_type"  id="" required >
<option value="<?php echo $trainer['trainer_training_type']; ?>"><?php echo $trainer['trainer_training_type']; ?></option>
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
<input class="form-control" name="trainer_Joining_date" value="<?php echo $trainer['trainer_Joining_date'] ?>"  required="" placeholder="Trainer Joining Date" type="Date" id="">
</div>
</div>



                                        <div class="form-group row col-md-12">
                                           <input type="submit" value="Update Trainer" class="btn btn-primary pull-right">
                                        </div>

                                       </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Checkboxes & Radios -->
                     <!--    <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Checkboxes & Radios</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <h4>Checkboxes</h4>
                                        <form>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <fieldset>
                                                        <legend> Basic </legend>
                                                        <p>Supports bootstrap brand colors: <code>.checkbox-primary</code>, <code>.checkbox-info</code> etc. </p>
                                                        <div class="checkbox">
                                                            <input id="checkbox1" type="checkbox">
                                                            <label for="checkbox1">Default</label>
                                                        </div>
                                                        <div class="checkbox checkbox-primary">
                                                            <input id="checkbox2" type="checkbox" checked="">
                                                            <label for="checkbox2">Primary</label>
                                                        </div>
                                                        <div class="checkbox checkbox-success">
                                                            <input id="checkbox3" type="checkbox">
                                                            <label for="checkbox3">Success</label>
                                                        </div>
                                                        <div class="checkbox checkbox-info">
                                                            <input id="checkbox4" type="checkbox">
                                                            <label for="checkbox4">Info</label>
                                                        </div>
                                                        <div class="checkbox checkbox-warning">
                                                            <input id="checkbox5" type="checkbox" checked="">
                                                            <label for="checkbox5">Warning</label>
                                                        </div>
                                                        <div class="checkbox checkbox-danger">
                                                            <input id="checkbox6" type="checkbox" checked="">
                                                            <label for="checkbox6">Check me out</label>
                                                        </div>
                                                        <p>Inline checkboxes</p>
                                                        <div class="checkbox checkbox-inline">
                                                            <input type="checkbox" id="inlineCheckbox1" value="option1">
                                                            <label for="inlineCheckbox1"> Inline One </label>
                                                        </div>
                                                        <div class="checkbox checkbox-success checkbox-inline">
                                                            <input type="checkbox" id="inlineCheckbox2" value="option1" checked="">
                                                            <label for="inlineCheckbox2"> Inline Two </label>
                                                        </div>
                                                        <div class="checkbox checkbox-inline">
                                                            <input type="checkbox" id="inlineCheckbox3" value="option1">
                                                            <label for="inlineCheckbox3"> Inline Three </label>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-4">
                                                    <fieldset>
                                                        <legend>Circled</legend>
                                                        <p><code>.checkbox-circle</code> for roundness.</p>
                                                        <div class="checkbox checkbox-circle">
                                                            <input id="checkbox7" type="checkbox">
                                                            <label for="checkbox7">Simply Rounded</label>
                                                        </div>
                                                        <div class="checkbox checkbox-info checkbox-circle">
                                                            <input id="checkbox8" type="checkbox" checked="">
                                                            <label for="checkbox8">Me too</label>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-4">
                                                    <fieldset>
                                                        <legend>Disabled</legend>
                                                        <p>Disabled state also supported.</p>
                                                        <div class="checkbox">
                                                            <input id="checkbox9" type="checkbox" disabled="">
                                                            <label for="checkbox9">Can't check this</label>
                                                        </div>
                                                        <div class="checkbox checkbox-success">
                                                            <input id="checkbox10" type="checkbox" disabled="" checked="">
                                                            <label for="checkbox10">This too</label>
                                                        </div>
                                                        <div class="checkbox checkbox-warning checkbox-circle">
                                                            <input id="checkbox11" type="checkbox" disabled="" checked="">
                                                            <label for="checkbox11">And this</label>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </form>
                                        <h4>Radios</h4>
                                        <form>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <fieldset>
                                                        <legend>Basic</legend>
                                                        <p>Supports bootstrap brand colors: <code>.radio-primary</code>, <code>.radio-danger</code> etc. </p>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="radio">
                                                                    <input type="radio" name="radio1" id="radio1" value="option1" checked="">
                                                                    <label for="radio1">Small</label>
                                                                </div>
                                                                <div class="radio">
                                                                    <input type="radio" name="radio1" id="radio2" value="option2">
                                                                    <label for="radio2">Big</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="radio radio-danger">
                                                                    <input type="radio" name="radio2" id="radio3" value="option1">
                                                                    <label for="radio3">Next</label>
                                                                </div>
                                                                <div class="radio radio-danger">
                                                                    <input type="radio" name="radio2" id="radio4" value="option2" checked="">
                                                                    <label for="radio4">One</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p>Inline radios</p>
                                                        <div class="radio radio-info radio-inline">
                                                            <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                                                            <label for="inlineRadio1"> Inline One </label>
                                                        </div>
                                                        <div class="radio radio-inline">
                                                            <input type="radio" id="inlineRadio2" value="option1" name="radioInline">
                                                            <label for="inlineRadio2"> Inline Two </label>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-4">
                                                    <fieldset>
                                                        <legend>Disabled</legend>
                                                        <p>Disabled state also supported.</p>
                                                        <div class="radio radio-danger">
                                                            <input type="radio" name="radio3" id="radio5" value="option1" disabled="">
                                                            <label for="radio5">Next</label>
                                                        </div>
                                                        <div class="radio">
                                                            <input type="radio" name="radio3" id="radio6" value="option2" checked="" disabled="">
                                                            <label for="radio6"> One</label>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="row">
                       <!--      <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Validation</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="bd-content">
                                                    <h3>How it works</h3>
                                                    <p>Here’s a rundown of how they work:</p>
                                                    <ul>
                                                        <li>To use, add <code>.has-warning</code>, <code>.has-danger</code>, or <code>.has-success</code> to the parent element. Any <code>.col-form-label</code>, <code>.form-control</code>, or custom form element will receive the validation styles.</li>
                                                        <li>Contextual validation text, in addition to your usual form field help text, can be added with the use of <code>.form-feedback</code>. This text will adapt to the parent <code>.has-*</code> class. By default it only includes a bit of <code>margin</code> for spacing and a modified <code>color</code> for each state.</li>
                                                        <li>Validation icons are <code>url()</code>s configured via Sass variables that are applied to <code>background-image</code> declarations for each state.</li>
                                                        <li>You may use your own base64 PNGs or SVGs by updating the Sass variables and recompiling.</li>
                                                        <li>Icons can also be disabled entirely by setting the variables to <code>none</code> or commenting out the source Sass.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <form>
                                                    <div class="form-group has-success">
                                                        <label class="form-control-label" for="inputSuccess1">Input with success</label>
                                                        <input type="text" class="form-control form-control-success" id="inputSuccess1">
                                                        <div class="form-feedback">Success! You've done it.</div>
                                                        <small class="text-muted">Example help text that remains unchanged.</small>
                                                    </div>
                                                    <div class="form-group has-warning">
                                                        <label class="form-control-label" for="inputWarning1">Input with warning</label>
                                                        <input type="text" class="form-control form-control-warning" id="inputWarning1">
                                                        <div class="form-feedback">Shucks, check the formatting of that and try again.</div>
                                                        <small class="text-muted">Example help text that remains unchanged.</small>
                                                    </div>
                                                    <div class="form-group has-danger">
                                                        <label class="form-control-label" for="inputDanger1">Input with danger</label>
                                                        <input type="text" class="form-control form-control-danger" id="inputDanger1">
                                                        <div class="form-feedback">Sorry, that username's taken. Try another?</div>
                                                        <small class="text-muted">Example help text that remains unchanged.</small>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                           <!--  <div class="col-sm-6">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Horizontal Form Validation</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form>
                                            <div class="form-group row has-success">
                                                <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control form-control-success" id="inputHorizontalSuccess" placeholder="name@example.com">
                                                    <div class="form-feedback">Success! You've done it.</div>
                                                    <small class="text-muted">Example help text that remains unchanged.</small>
                                                </div>
                                            </div>
                                            <div class="form-group row has-warning">
                                                <label for="inputHorizontalWarning" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control form-control-warning" id="inputHorizontalWarning" placeholder="name@example.com">
                                                    <div class="form-feedback">Shucks, check the formatting of that and try again.</div>
                                                    <small class="text-muted">Example help text that remains unchanged.</small>
                                                </div>
                                            </div>
                                            <div class="form-group row has-danger">
                                                <label for="inputHorizontalDnger" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control form-control-danger" id="inputHorizontalDnger" placeholder="name@example.com">
                                                    <div class="form-feedback">Sorry, that username's taken. Try another?</div>
                                                    <small class="text-muted">Example help text that remains unchanged.</small>
                                                </div>
                                            </div>
                                   -->          <!-- checkbox -->
                                           <!--  <div class="has-success">
                                                <label class="form-check-label">
                                                    <input type="checkbox" id="checkboxSuccess" value="option1">
                                                    Checkbox with success
                                                </label>
                                            </div>
                                            <div class="has-warning">
                                                <label class="form-check-label">
                                                    <input type="checkbox" id="checkboxWarning" value="option1">
                                                    Checkbox with warning
                                                </label>
                                            </div>
                                            <div class="has-danger">
                                                <label class="form-check-label">
                                                    <input type="checkbox" id="checkboxDanger" value="option1">
                                                    Checkbox with danger
                                                </label>
                                            </div> -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Disabled state -->
                     <!--        <div class="col-sm-6">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Disabled state</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <p>Add the <code>disabled</code> boolean attribute on an input to prevent user interactions. Disabled inputs appear lighter and add a <code>not-allowed</code> cursor.</p>
                                        <form>
                                            <input class="form-control" id="disabledInput" placeholder="Disabled input here..." disabled="" type="text">
                                        </form>
                                    </div>
                                </div>
                            </div> -->
                            <!-- Control sizing -->
                      <!--       <div class="col-sm-6">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Control sizing</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <p>Set heights using classes like <code>.input-lg</code>, and set widths using grid column classes like <code>.col-lg-*</code>.</p>
                                        <form>
                                            <div class="form-group">
                                                <input class="form-control input-lg" placeholder=".input-lg" type="text">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Default input" type="text">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control input-sm" placeholder=".input-sm" type="text">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div> <!-- /.main content -->
                </div> <!-- /.container -->
            </div> <!-- /.content-wrapper -->
            <!-- start footer -->





<button type="button" style="display: none;" class="btn btn-danger m-r-2 m-b-5" data-toggle="modal" data-target="#modal-danger" id="model_trainer_change">Danger</button>
 <!-- Modal denger -->
                                <div class="modal fade modal-danger" id="modal-danger" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h1 class="modal-title">Triner Details</h1>
                                            </div>
                                            <div class="modal-body">
                                               

                                            <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Select Course </label>
                                            <div class="col-sm-9">
                                                <select class="form-control select c_data" name="courseID[]"  type="text" id="c_data" required="">
                                               <option value=""></option>
                                                 </select>
                                            </div>
                                            </div>
<input type="hidden" name="id_hidden" id="id_hidden">

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-danger data_save_trainer" id="data_save_trainer">Save changes</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->







<button type="button" style="display: none;" class="btn btn-danger m-r-2 m-b-5" data-toggle="modal" data-target="#modal-danger2" id="model_box2">Danger2</button>
 <!-- Modal denger -->
                                <div class="modal fade model_box2" id="modal-danger2" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h1 class="modal-title">Trainer Details Box 2</h1>
                                            </div>
                                            <div class="modal-body">


                                                <div class="row select-type select_select_radio">
                                                    <div class="col-sm-6">
                                                        <div class="">
                                                            
                                                            <input type="radio" id="single_inline" name="select_trainer" value="single">
                                                            <label for="inlineRadio1"> Single Trainer </label>
   
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="">
                                                            <input type="radio" id="multi_inline" value="multiple" name="select_trainer">
                                                            <label for="inlineRadio2"> Multiple Trainer </label>
                                                        </div>
                                                    </div>
                                                </div>                                  
                                                <div class="row type1" style="display:none">
                                                    <div class="form-group row">
                                                        <label for="example-text-input" class="col-sm-3 col-form-label">Select Course </label>
                                                        <div class="col-sm-9">
                                                            <select class="form-control select trainer_id" name="trainer_id"  type="text" id="trainer_id" required="">
                                                           <option value=""></option>
                                                             </select>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="ids_stu" id="ids_stu">
                                                </div>
                                                <div class="row type2" style="display:none">
                                                    <table class="table">
                                                        <thead>
                                                          <tr>
                                                            <th>S.no</th>
                                                            <th>Student Name</th>
                                                            <th>Course</th>
                                                            <th>Trainer</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody></tbody>
                                                    </table>
                                                </div>


                                                


                                                
                                            </div><!-- /.modal-body -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-danger single_trainer_check" id="single_trainer_check">Save changes</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->


<script>
var traner_save;
var course_selected =  <?php echo json_encode($course_selected); ?>;
var delete_id = '';

$( ".gettrainer" ).change(function() { 
var values = $(this).val() 



for (var i = 0; i < course_selected.length; i++) {
    if(values == null){
        var a = -1
    }
    else{
     
        var a = values.indexOf(course_selected[i]);
    }
    
    if(a >= 0){

    }
    else{
        delete_id = course_selected[i];
    }
}
if(delete_id != ''){
    var trainerID= $('#trainerIDdata').val();
    
    $.ajax({
        url: "<?php echo base_url(); ?>admin/gettrainer",
        data: {id: delete_id,trainerid:trainerID},
        type: 'POST',
        dataType: 'json', // added data type
        success: function(res) {
            if(res != null && res != '' )
            { 
                traner_save = res.all_trainer
                if(res.datatrainer.length == 1)
                {
                    $('.c_data').empty()
                    $('.c_data').append('<option value="">Select Trainer</option>')
                    for (var i = 0; i < res.all_trainer.length; i++) {
                        $('.c_data').append('<option value="'+res.all_trainer[i]['trainerID']+'">'+res.all_trainer[i]['trainer_name']+'</option>')
                        var dataid = res.datatrainer[i]['id'];
                        $('#id_hidden').val(dataid)
                    }
                    jQuery('#model_trainer_change').click();
                }
                else if(res.datatrainer.length > 1)
                {
                    jQuery('#model_box2').click();
                    if(res.all_trainer.length == 1){
                        var ids = '';
                        $('.type1').show()
                        $('.select_select_radio').hide()
                        $('.trainer_id').empty()
                        $('.trainer_id').append('<option value=""></option>')
                        for (var i = 0; i < res.all_trainer.length; i++) {
                            $('.trainer_id').append('<option value="'+res.all_trainer[i]['trainerID']+'">'+res.all_trainer[i]['trainer_name']+'</option>')
                        }
                        for (var i = 0; i < res.datatrainer.length; i++) {
                            ids += res.datatrainer[i]['id']+',';
                        }
                        $('#ids_stu').val(ids)
                        $('#single_inline[value="single"]').attr('checked', true)
                    }
                    else if(res.all_trainer.length > 1){
                        var ids = '';
                        $('.trainer_id').empty()
                        $('.trainer_id').append('<option value=""></option>')
                        for (var i = 0; i < res.all_trainer.length; i++) {
                            $('.trainer_id').append('<option value="'+res.all_trainer[i]['trainerID']+'">'+res.all_trainer[i]['trainer_name']+'</option>')
                        }
                        for (var i = 0; i < res.datatrainer.length; i++) {
                            ids += res.datatrainer[i]['id']+',';
                        }
                        $('#ids_stu').val(ids)
                        var tb = $('.type2 table tbody')
                        tb.empty()
                        for (var i = 0; i < res.datatrainer.length; i++) {
                            var ia = res.datatrainer[i]
                            tb.append('<tr>');
                            var f = tb.find('tr').last()
                            f.append('<td>'+(i + 1)+'</td>')
                            f.append('<td><input type="hidden" name="student_id" value="'+ia.id+'">'+ia.student_name+'</td>')
                            f.append('<td>'+ia.course_title+'</td>')
                            f.append('<td><select name="student_trainer"><option>Select Trainer</option></select></td>')
                            for (var a = 0; a < res.all_trainer.length; a++) {
                                f.find('select').append('<option value="'+res.all_trainer[a]['trainerID']+'">'+res.all_trainer[a]['trainer_name']+'</option>')
                            }
                            tb.append('</tr>');
                        }
                    }    
                }
            }
   
        }
    });
}


$('[name="select_trainer"]').change(function(){
    if($('#single_inline').is(':checked')){
        $('.type2').hide()
        $('.type1').show()
    }
    else if($('#multi_inline').is(':checked')){
        $('.type1').hide()
        $('.type2').show()
    }
})

// var idvalue= parseInt($(this).val());


// for (i = 0; i < $course_selected.length; i++) { 
    
//     if($course_selected[i] == idvalue)
//     {
//         console.log(1);
//     }

// }


// var trainerID= $('#trainerIDdata').val();

//         $.ajax({
//         url: "<?php echo base_url(); ?>admin/gettrainer",
//         data: {id: idvalue,trainerid:trainerID},
//         type: 'POST',
//         dataType: 'json', // added data type
//         success: function(res) {
//           console.log(res)
                
//         }

//         });

});



// $("#single_inline").change(function(){


// var selected = $(".select_select_radio").find("input[name='select_trainer']:checked").val();

// if( selected == 'single')
// {
// $('#show_data_trainer').empty();
//     for (var i = 0; i < traner_save.length; i++) {
//     $('#show_data_trainer').append('<td>'+traner_save[i]['trainer_name']+'</td>') 
// }
// }




    
// });


$('.single_trainer_check').click(function() {
    if($('#single_inline').is(':checked')){
        var data = new FormData();
        data.append("trainerid", $('[name="trainer_id"]').val());
        data.append("ids", $('[name="ids_stu"]').val());
        jQuery.ajax({
            url: '<?php echo base_url(); ?>admin/updateTrainersdata',
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            method: 'POST',
            type: 'POST', // For jQuery < 1.9
            success: function(res) {
                if(res == '1'){
                   var a = course_selected.indexOf(delete_id);
                   delete course_selected[a] 
                   delete_id = '';
                   jQuery('.closebtn').click();
                }
            }
        });
    }
    else if($('#multi_inline').is(':checked')){
        var data = new FormData();
        $('[name="student_id"]').each(function() {
            data.append("student_id[]", $(this).val());
        })
        $('[name="student_trainer"]').each(function() {
            data.append("trainer_id[]", $(this).val());
        })
        jQuery.ajax({
            url: '<?php echo base_url(); ?>admin/updatemultitrainer',
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            method: 'POST',
            type: 'POST', // For jQuery < 1.9
            success: function(res) {
                if(res == '1'){
                   var a = course_selected.indexOf(delete_id);
                   delete course_selected[a] 
                   delete_id = '';
                   jQuery('.closebtn').click();
                }
            }
        });
    }
    else{
        var data = new FormData();
        data.append("trainerid", $('[name="trainer_id"]').val());
        data.append("ids", $('[name="ids_stu"]').val());
        jQuery.ajax({
            url: '<?php echo base_url(); ?>admin/updateTrainersdata',
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            method: 'POST',
            type: 'POST', // For jQuery < 1.9
            success: function(res) {
                if(res == '1'){
                   var a = course_selected.indexOf(delete_id);
                   delete course_selected[a] 
                   delete_id = '';
                   jQuery('.closebtn').click();
                }
            }
        });
    }
})






// data_save_trainer

$( ".data_save_trainer" ).click(function() {
var trainerdataID = $('.c_data').val() 
var rowID = $('#id_hidden').val() 
$.ajax({
        url: "<?php echo base_url(); ?>admin/updateTrainerData",
        data: {trainid: trainerdataID,rowid:rowID},
        type: 'POST',
        dataType: 'json', // added data type
        success: function(res) {
            if(res == '1'){
               var a = course_selected.indexOf(delete_id);
               delete course_selected[a] 
               delete_id = '';
               jQuery('.closebtn').click();
            }
        }
    });

});









</script>