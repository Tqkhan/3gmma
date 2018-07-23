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
                    <h1>Create Studenst</h1>
                    <br>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                        <li><a href="#">Students</a></li>
                        <li class="active">Create Student</li>
                    </ol>
                </div>
            </div>
            <!-- /. Content Header (Page header) -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">

                        </div>
                        <div class="panel-body">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4 style="margin-left: 435px" ;>Student/Member Information</h4>
                                </div>
                            </div>
                            <hr>
                            <form action="<?php echo base_url() ?>admin/insert_student" method="post" enctype="multipart/form-data">

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="student_name" placeholder="Student Name " type="text" id="example-text-input">
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Date of Birth</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="dob" placeholder="Date of Birth" type="text" id="bday">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Past Experience</label>
                                    <input type="radio" name="past_experience" value="yes">
                                    <span> Yes </span>
                                    <input type="radio" name="past_experience" style="margin-left: 100px;" value="no" checked>
                                    <span> No </span>
                                    <input type="radio" name="past_experience" style="margin-left: 100px;" value="other">
                                    <span> Other </span>
                                </div>

                                <div class="form-group row" id="remarksbox" style="display: none;">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Remarks</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="remarks" placeholder="Remarks" type="text" id=""></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Contact Number</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="student_contact" placeholder="Contact Number " type="text" id="example-text-input" />
                                    </div>
                                </div>

                                <!-- hidden active field  -->
                                <input class="form-control" name="status" placeholder="" type="hidden" id="" value="active" />
                                <!-- hidden active field  -->

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Email </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="student_email" placeholder="Email  " type="email" id="example-text-input">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Gender<span class="required">*</span></label>

                                    <input type="radio" name="gender" value="male" style="margin-left: 100px;" checked>
                                    <span> Male </span>
                                    <input type="radio" name="gender" style="margin-left: 100px;" value="female">
                                    <span> Female </span>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Address</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="student_address" placeholder="Address " type="text" id="example-text-input"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Student C.N.I.C</label>
                                    <div class="col-sm-9">
                                        <input class="form-control cnic" name="student_cnic" placeholder="Student CNIC" type="text" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Education</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="education" placeholder="Student Education" type="text" id="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Whatsapp Number</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="home_phone" placeholder="Whatsapp number" type="text" id="example-text-input">
                                    </div>
                                </div>
                                 <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Select Campus</label>
                                            <div class="col-sm-9">
                                                <select class="form-control select ddl2" name="campusID" id="" >
                                                    <option value="Select Campus">Select Campus</option>
                                                     <?php foreach ($campus as $camp): ?>
                                                   <option  value="<?php echo $camp['id'] ?>"><?php echo $camp['name'] ?></option>
                                               <?php endforeach ?> 

                                                </select>
                                            </div>

                                        </div>
                                <div class=" after-add-more">
                                    <div class="form-group row">
                                        <div class="form-group row">
                                            <span class="pull-right">
                                  <div class="col-sm-12 change">
                                  <a class="btn btn-success add-more pull-right">+ Add Course</a>
                                  </div></span>
                                        </div>
                                      </div>
                                     
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Select Shift </label>
                                            <div class="col-sm-9">
                                                <select class="form-control select shift newt" name="course_shift" type="text" id="example-text-input">
                                                    <option value="">Select Shift</option>
                                                    <option value="Morning">Morning</option>
                                                    <option value="Evening">Evening</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Select Course </label>
                                            <div class="col-sm-9">
                                                <select class="form-control select coursedataID" name="courseID[]" type="text" id="courseID">
                                                    <option value="">Select Course</option>
                                                    <option value="" class="myselect"></option>
                                                    <!--  <?php foreach ($courses as $course): ?>
                                                   <option  value="<?php echo $course['courseID'] ?>" id="<?php echo $course['courseID']; ?>"><?php echo $course['course_title'] ?></option>
                                               <?php endforeach ?> -->
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Select Trainer </label>
                                            <div class="col-sm-9">
                                                <select class="form-control select ddltrainer" name="trainerID[]" type="text" id="ddltrainer">
                                                    <option value="" class="myselect"></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">

                                            <label for="example-text-input" class="col-sm-3 col-form-label">Select Timing</label>
                                            <div class="col-sm-9">
                                                <select class="form-control select ddl" name="gym_timing[]" id="ddl" required>
                                                    <option value="" class="myselect"></option>

                                                </select>
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Fee</label>
                                            <div class="col-sm-9">
                                                <select class="form-control select ddl2" name="fee[]" id="ddl2" required>
                                                    <option value="" class="myselect sum"></option>

                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                

                                <hr>
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4 style="margin-left: 435px;">Medical Information</h4>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-6 col-form-label">Do You Have any history of heart trouble?<span class="required">*</span></label>

                                    <input type="radio" name="heart_trouble" value="male" style="margin-left: 100px;">
                                    <span> Yes </span>
                                    <input type="radio" name="heart_trouble" style="margin-left: 100px;" value="female" checked>
                                    <span> No </span>

                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-6 col-form-label">Have you ever experienced pain ot tightness in your chest?<span class="required">*</span></label>

                                    <input type="radio" name="chest_pain" value="yes" style="margin-left: 100px;">
                                    <span> Yes </span>
                                    <input type="radio" name="chest_pain" style="margin-left: 100px;" value="no" checked>
                                    <span> No </span>

                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-6 col-form-label">Do You often suffer from severe dizziness?<span class="required">*</span></label>

                                    <input type="radio" name="dizziness" value="yes" style="margin-left: 100px;">
                                    <span> Yes </span>
                                    <input type="radio" name="dizziness" style="margin-left: 100px;" value="no" checked>
                                    <span> No </span>

                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-6 col-form-label">Do You have high or low blood pressure?<span class="required">*</span></label>

                                    <input type="radio" name="blood_pressure" value="yes" style="margin-left: 100px;">
                                    <span> Yes </span>
                                    <input type="radio" name="blood_pressure" style="margin-left: 100px;" value="no" checked>
                                    <span> No </span>

                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-6 col-form-label">Do You have diabetes?<span class="required">*</span></label>

                                    <input type="radio" name="diabetes" value="yes" style="margin-left: 100px;">
                                    <span> Yes </span>
                                    <input type="radio" name="diabetes" style="margin-left: 100px;" value="no" checked>
                                    <span> No </span>

                                </div>
                                <hr>
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4 style="margin-left: 435px;">Emergency Contact</h4>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="emergency_name" placeholder="Emergency person Name " type="text" id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Home Phone</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="emergency_home" placeholder="Emergency person Phone" type="text" id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Relationship</label>
                                       <div class="col-sm-9">
                                        <input class="form-control" name="emergency_relation" placeholder="Emergency person in relation" type="text" id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Cell no</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="emergency_mobile" placeholder="Emergency person cell number" type="text" id="example-text-input">
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
                                        <input class="form-control" name="father_name" placeholder="Enter Guardian name" type="text" id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Mobile number</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="father_mobile" placeholder="Enter Guardian number" type="text" id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">C.N.I.C</label>
                                    <div class="col-sm-9">
                                        <input class="form-control cnic" name="father_cnic" placeholder="" type="text" id="">
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
                                        <input class="form-control" name="joindate" value="" placeholder="Enter Your Joining Date" type="date" id="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Admission Fee</label>
                                    <div class="col-sm-9">
                                        <input class="form-control sum" name="admission_fee" value="" placeholder="" type="number" min="0" id="admi_fee">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Membership Fee</label>
                                    <div class="col-sm-9">
                                        <input class="form-control sum" name="membership_fee" value="" placeholder="" type="number" id="member_fee">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Other</label>
                                    <div class="col-sm-9">
                                        <input class="form-control sum" name="other_fee" placeholder="Other" type="number" id="other_charges">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Monthly Fee</label>
                                    <div class="col-sm-9">
                                        <input class="form-control sum" name="monthly_fee" placeholder="Enter Your Monthly Fee" type="number" id="month_fee" readonly>
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Discount Fee</label>
                                    <div class="col-sm-9">
                                        <input class="form-control minus" name="discountfee" placeholder="Enter Fee Discount" type="number" id="discountfee">
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Total</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="Total" placeholder="Total" type="text" id="result" readonly>
                                    </div>
                                    <br>
                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Profile Image</label>
                                    <div class="col-sm-9">

                                        <img class="profile-pic" src="" />
                                        <br>
                                        <div class="upload-button">Upload Image</div>
                                        <input class="file-upload" type="file" name="profile_image" accept="image/*" />
                                    </div>
                                    <br>
                                </div>

                                <div class="form-group row col-md-12">
                                    <input type="submit" value="Create Student" class="btn btn-primary pull-right">
                                </div>
                            </form>
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
              
              
            <script>
            </script>

            <script>
                $(document).ready(function() {

                    $('input[name=past_experience]').click(function() {
                        if ($(this).val() == "no") {
                            $('#remarksbox').hide();
                        } else {
                            $('#remarksbox').show();
                        }
                    });
                });
            </script>

            <script>
                $(document).ready(function() {
                    $("#bday").datepicker({
                        maxDate: "-1"
                    });

                    // masking
                    $(".cnic").mask("99999-9999999-9");
                    // masking
                    function remove_cal() {
                        $('.remove').click(function() {
                            setTimeout(function() {
                                count_fee()
                            }, 500)

                        })
                        count_fee()
                    }
                    remove_cal()
                    dataworkfee()

                    function remove_value() {
                        $('.add-more').click(function() {
                            setTimeout(function() {
                                remove_value()
                                    //count_fee()
                                remove_cal()
                                change_course()
                                $('.after-add-more').last().find('input').val('')
                                $('.after-add-more').last().find('select').val('')
                                    /*$('.after-add-more').last().find('select').not('select.coursedataID').empty()*/

                            }, 500)

                        })
                    }
                    remove_value()

                    function count_fee() {
                        var total_value = 0;
                        $(".ddl2").each(function() {
                            var dataget = $(this).val();
                            if ($(this).val() != null && $(this).val() != '') {
                                total_value = total_value + parseInt($(this).val())
                            } else {
                                total_value = total_value + 0
                            }
                            console.log(total_value);
                            $("#month_fee").val(total_value);

                        });
                        dataworkfee()
                        $(".ddl2").change(function() {
                            var total_value = 0;
                            $(".ddl2").each(function() {
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

                    function dataworkfee() {
                        $('.sum').each(function() {
                            if ($(this).val() != null && $(this).val() != '') {
                                total = total + parseInt($(this).val())
                            } else {
                                total = total + 0
                            }
                        })
                        if ($('.minus').val() != null && $('.minus').val() != '') {
                            total = total - parseInt($('.minus').val())
                        }
                        $('#result').val(total);
                        total = 0;

                    }
                    dataworkfee()
                    $('.sum,.minus').keyup(function() {
                        var total = 0;
                        $('.sum').each(function() {
                            if ($(this).val() != null && $(this).val() != '') {
                                total = total + parseInt($(this).val())
                            } else {
                                total = total + 0
                            }
                        })

                        if ($('.minus').val() != null && $('.minus').val() != '') {
                            total = total - parseInt($('.minus').val())
                        }
                        $('#result').val(total);
                    })
                    total = 0;

                    function change_course() {
                        $(".shift").change(function() {
                            var shift = $(this).val();
                            var th = $(this)
                            var select = th.parent().parent().parent()
                            $.ajax({
                                url: "<?php echo base_url(); ?>admin/get_coarse_selectbox",
                                data: {
                                    id: shift
                                },
                                type: 'POST',
                                dataType: 'json', // added data type
                                success: function(res) {
                                    select.find('.coursedataID').empty()
                                    select.find('.coursedataID').append('<option value="">Select Course</option>')
                                    for (var i = 0; i < res.length; i++) {
                                        select.find('.coursedataID').append('<option value="' + res[i].courseID + '">' + res[i].course_title + '</option>')
                                    }

                                }
                            });
                        });
                        $(".coursedataID").change(function() {
                            var dataget = $(this).val();
                            var th = $(this)
                            var select = th.parent().parent().parent()
                            $.ajax({
                                url: "<?php echo base_url(); ?>admin/get_fee_selectbox",
                                data: {
                                    id: dataget
                                },
                                type: 'POST',
                                dataType: 'json', // added data type
                                success: function(res) {
                                    console.log(res)
                                    select.find('.ddl2').empty()
                                    select.find('.ddl2').append('<option value="">Select Fee</option>')
                                    for (var i = 0; i < res.length; i++) {
                                        select.find('.ddl2').append('<option value="' + res[i]['course_price'] + '">' + res[i]['course_price'] + '</option>')
                                    }

                                }
                            });
                            $.ajax({
                                url: "<?php echo base_url(); ?>admin/get_trainer_selectbox",
                                data: {
                                    id: dataget
                                },
                                type: 'POST',
                                dataType: 'json', // added data type
                                success: function(res) {
                                    console.log(res)
                                    select.find('.ddltrainer').empty()
                                    select.find('.ddltrainer').append('<option value="">Select Trainer</option>')
                                    for (var i = 0; i < res.length; i++) {
                                        select.find('.ddltrainer').append('<option value="' + res[i]['trainerID'] + '">' + res[i]['trainer_name'] + '</option>')
                                    }

                                }
                            });
                            $.ajax({
                                url: "<?php echo base_url(); ?>admin/getdata_selectbox",
                                data: {
                                    id: dataget
                                },
                                type: 'POST',
                                dataType: 'json', // added data type
                                success: function(res) {
                                    console.log(res)
                                    select.find('.ddl').empty()
                                    select.find('.ddl').append('<option value="">Select Timing</option>')
                                    for (var i = 0; i < res.length; i++) {
                                        select.find('.ddl').append('<option value="' + res[i] + '">' + res[i] + '</option>')
                                    }

                                }
                            });
                        });
                    }
                    change_course()
                        // function remove_value() {
                        //     $('.add-more').click(function() {
                        //         setTimeout(function() {
                        //             remove_value()
                        //             change_course()
                        //             count_fee()
                        //             $('.after-add-more').last().find('input').val('')
                        //             $('.after-add-more').last().find('select').val('')    
                        //         }, 500)

                    //     })
                    // }
                    // remove_value()
                });
            </script>

            <script>
                var readURL = function(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            $('.profile-pic').attr('src', e.target.result);
                        }

                        reader.readAsDataURL(input.files[0]);
                    }
                }

                $(".file-upload").on('change', function() {
                    readURL(this);
                });

                $(".upload-button").on('click', function() {
                    $(".file-upload").click();
                });
            </script>
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