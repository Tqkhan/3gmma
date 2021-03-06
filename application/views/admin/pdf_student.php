<link rel="shortcut icon" href="<?php echo base_url() ?>assets/assets/dist/img/ico/favicon.png" type="image/x-icon">
<link rel="apple-touch-icon" type="image/x-icon" href="<?php echo base_url() ?>assets/assets/dist/img/ico/apple-touch-icon-57-precomposed.png">
<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?php echo base_url() ?>assets/assets/dist/img/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?php echo base_url() ?>assets/assets/dist/img/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?php echo base_url() ?>assets/assets/dist/img/ico/apple-touch-icon-144-precomposed.png">

<link href="<?php echo base_url() ?>assets/assets/dist/css/base.css" rel="stylesheet" type="text/css" />

<?php $data = $data[0] ?>

    <div class="content-wrapper">
        <div class="container">
            <!-- main content -->
            <div class="content">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="header-icon">
                        <i class=""></i>
                    </div>

                    <?php $course_title['course_data_data'] = explode(",",$student[0]['course_title']);?>
                        <?php $course_title['course_time'] = explode(",",$student[0]['course_timing']);?>
                            <?php $course_title['trainer'] = explode(",",$student[0]['trainer']);?>
                                <?php $course_title['fee'] = explode(",",$student[0]['course_fee']);?>
                                    <?php $count_loop_fee = count($course_title['fee']); ?>
                                        <?php $total_fee_value = $student[0]['monthly_fee'] + $student[0]['membership_fee'] + $student[0]['admission_fee'] + $student[0]['other_fee'] - $student[0]['discountfee'] ; ?>

                                            <?php ?>

                                                <?php $count_loop = count($course_title['course_data_data']); ?>

                </div>
                <!-- /. Content Header (Page header) -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-bd ">

                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="panel-body print-div">
                                            <div class="row">
                                                
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="row">
                                                        
                                                        <div class="col-lg-12">
                <img src="<?php base_url();?>assets/assets/dist/img/header.png">
               
                                                        </div>

                                                    </div>
                                                   
                                                </div>

                                                
                                                <div class="col-sm-4 col-md-4 col-sm-4 col-xs-4 text-left">

                                                </div>
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-7 col-md-6 col-sm-6 col-xs-6">
                                                    <br><div class="row">
                                                        
                                                        <div class="col-lg-12">
                                                        

                                                            <address>
                                                            <strong style="font-weight: 600;">Student Name </strong> :
                                                            <e class="full_name_value"><?php echo $data['student_name'] ?></e>
                                                        </address>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <address>
                                                            <strong style="font-weight: 600;">Date of Birth </strong> :
                                                            <e class="father_name_value"><?php echo $data['dob'] ?></e>
                                                        </address>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <address>
                                                            <strong style="font-weight: 600;">Past Experience </strong> :
                                                            <e class="dob_value"><?php echo $data['past_experience'] ?></e>
                                                        </address>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-md-4 col-sm-4 col-xs-4 text-left">
                                                
                                                    <img src="<?php echo base_url(); ?><?php echo $data['user_image'] ?>" class="img-responsive pull-left img-src" alt="" style="height: 115px;">
                                                    <img class="pull-right" style=" margin-top: 10px;" src="http://chart.apis.google.com/chart?cht=qr&chl=<?php echo $data['qr'] ?>&chs=60">
                                                </div>
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">
                                                    <div class="row">

                                                        <div class="col-lg-12">
                                                            <address>
                                                            <strong style="font-weight: 600;">Contact Number </strong> :
                                                            <e class="aks_value"><?php echo $data['student_contact'] ?></e>
                                                        </address>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <address>
                                                            <strong style="font-weight: 600;">Email </strong> :
                                                            <e class="p_l_n_value"><?php echo $data['student_email'] ?></e>
                                                        </address>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <address>
                                                                         <strong style="font-weight: 600;">Address </strong> :
                                                                   <e class="gender_value"><?php echo $data['student_address'] ?></e>
                                                                </address>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-sm-5 col-md-6 col-sm-5 col-xs-5 ">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <address>
                                                                         <strong style="font-weight: 600;">Student C.N.I.C </strong> :
                                                                   <e class="mother_name_value"><?php echo $data['student_cnic'] ?></e>
                                                                </address>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <address>
                                                                         <strong style="font-weight: 600;">WhatsApp Number </strong> :
                                                                   <e class="pob_value"><?php echo $data['home_phone'] ?></e>
                                                                </address>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                       <div class="col-lg-6">
                                                            <address>
                                                                         <strong style="font-weight: 600;">Gender </strong> :
                                                                   <e class="gender_value"><?php echo $data['gender'] ?></e>
                                                                </address>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="row">

                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">

                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">

                                                </div>
                                            </div>

                                            <hr style="margin-top: -10px; ">

                                            <div class="table-responsive m-b-20">

                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Course</th>
                                                            <th>Trainer</th>
                                                            <th>Timing</th>
                                                            <th>Fee</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody class="append-education">
                                                        <?php for ( $i=0; $i<$count_loop; $i++ ) { ?>
                                                            <tr>

                                                                <td>
                                                                    <?php echo $course_title['course_data_data'][$i]; ?>
                                                                </td>

                                                                <td>
                                                                    <?php  echo $course_title['trainer'][$i]; ?>
                                                                </td>

                                                                <td>
                                                                    <?php echo $course_title['course_time'][$i]; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $course_title['fee'][$i]; ?>
                                                                </td>

                                                            </tr>
                                                            <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <hr style="margin-top: -10px; ">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">
                                                    <div class="row">

                                                        <div class="col-lg-12">
                                                            <address>
                         <strong style="font-weight: 600;">Emergency Name </strong> :
                   <e class="army_service_value"><?php echo $data['emergency_name'] ?></e>
                </address>
                                                            <address>
                 <strong style="font-weight: 600;">Email </strong> :
                <e class="p_l_n_value"><?php echo $data['student_email'] ?></e>
                </address>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <address>
                                                                         <strong style="font-weight: 600;">Emergency number </strong> :
                                                                   <e class="army_service_value"><?php echo $data['emergency_home'] ?></e>
                                                                </address>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5 col-md-6 col-sm-5 col-xs-5 ">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <address>
                                                                         <strong style="font-weight: 600;">Emergency mobile </strong> :
                                                                   <e class="army_service_value"><?php echo $data['emergency_mobile'] ?></e>
                                                                </address>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <address>
                                                                         <strong style="font-weight: 600;">Emergency relation </strong> :
                                                                   <e class="d_d_y_value"><?php echo $data['emergency_relation'] ?></e>
                                                                </address>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <hr style="margin-top: -10px; ">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">
                                                    <div class="row">

                                                        <div class="col-lg-12">
                                                            <address>
                                                                         <strong style="font-weight: 600;">Joining Date </strong> :
                                                                   <e class="m_o_t_value"><?php echo $data['joindate'] ?></e>
                                                                </address>

                                                            <address>
                                                                         <strong style="font-weight: 600;">Admission Fee </strong> :
         <e class="d_l_n_value"><?php echo $data['admission_fee'] ?></e>
                                                                </address>

                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5 col-md-6 col-sm-5 col-xs-5 ">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <address>
        <strong style="font-weight: 600;">Membership Fee </strong> :
              <e class="exp_date_value"><?php echo $data['membership_fee'] ?></e>
                                                                </address>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <address>
        <strong style="font-weight: 600;">Monthly Fee </strong> :
        <e class="crime_value"><?php echo $student[0]['monthly_fee']; ?></e>
                                                                </address>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">
                                                    <div class="row">

                                                        <div class="col-lg-12">
                                                            <address>
                                                                         <strong style="font-weight: 600;">Other </strong> :
                                                                   <e class="stae_issue_value"><?php echo $data['other_fee'] ?></e>
                                                                </address>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <address>
                                                                         <strong style="font-weight: 600;">Status </strong> :
                                                                   <e class="e_detail_value"><?php echo $data['status'] ?></e>
                                                                </address>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-sm-5 col-md-6 col-sm-5 col-xs-5 ">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <address>
                                                                         <strong style="font-weight: 600;">Discount Fee </strong> :
                                                                   <e class="e_detail_value"><?php echo $data['discountfee'] ?></e>
                                                                </address>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <address>
                                                                         <strong style="font-weight: 600;">Total </strong> :

            <e class="crime_value"><?php echo $total_fee_value; ?></e>

                                                                </address>
                                                        </div>
                                                    </div>

                                                </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="row">
                                                        
                                                        <div class="col-lg-12">
                <img src="<?php base_url();?>assets/assets/dist/img/footer.png">
                                                        </div>

                                                    </div>
                                                   
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {

            $("#bday").datepicker({
                maxDate: "-1"
            });
            // masking
            $(".cnic").mask("9999-99999999-9");
            // masking

            $("#submit-form").submit(function(e) {
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
                        $('.after-add-more').last().find('select').not('select.coursedataID').empty()
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
                    //total_value = total_value + parseInt($(this).val())
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
        });
    </script>
      <script type="text/javascript">
    $("#generate").click(function() {
    var data = $("#codeData").val();
    var size = $("#codeSize").val();
    if(data == "") {
        alert('please enter a url or text');
        return false;
    } else {
        if( $("#image").is(':empty')) {
            $("#image").append("<img src='http://chart.apis.google.com/chart?cht=qr&chl=" + data + "&chs=" + size + "' alt='qr' />");
            return false;
        } else {
            $("#image").html("");
            $("#image").append("<img src='http://chart.apis.google.com/chart?cht=qr&chl=" + data + "&chs=" + size + "' alt='qr' />");
            $("#link").append("<a href='http://chart.apis.google.com/chart?cht=qr&chl=" + data + "&chs=" + size + "'>Permalink</a>");
            return false;
        }
    }
});
</script>