
 <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>





<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>



        <link rel="shortcut icon" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css" type="image/x-icon">
    

        <link rel="shortcut icon" href="<?php echo base_url() ?>assets/assets/dist/img/ico/favicon.png" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="<?php echo base_url() ?>assets/assets/dist/img/ico/apple-touch-icon-57-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?php echo base_url() ?>assets/assets/dist/img/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?php echo base_url() ?>assets/assets/dist/img/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?php echo base_url() ?>assets/assets/dist/img/ico/apple-touch-icon-144-precomposed.png">





<style>
    
.jGrowl-message > span,p
{
color: white !important;
margin: 0;
    padding: 0;
}

</style>

        <!-- Start Global Mandatory Style
        =====================================================================-->
        <link href="<?php echo base_url() ?>assets/assets/dist/css/base.css" rel="stylesheet" type="text/css"/>
        <!-- End Global Mandatory Style
        =====================================================================-->
        <!-- Start page Label Plugins
        =====================================================================-->
        <!-- Toastr css -->
        <link href="<?php echo base_url() ?>assets/assets/plugins/toastr/toastr.min.css" rel="stylesheet" type="text/css"/>
        <!-- Emojionearea -->
        <link href="<?php echo base_url() ?>assets/assets/plugins/emojionearea/emojionearea.min.css" rel="stylesheet" type="text/css" />
        <!-- Monthly css -->
        <link href="<?php echo base_url() ?>assets/assets/plugins/monthly/monthly.min.css" rel="stylesheet" type="text/css"/>
        <!-- amchat css -->
        <link href="<?php echo base_url() ?>assets/assets/plugins/amcharts/export.css" rel="stylesheet" type="text/css" />
        <!-- End page Label Plugins
        =====================================================================-->
        <!-- Start Theme Layout Style
        =====================================================================-->
        <!-- Theme style -->
        <link href="<?php echo base_url() ?>assets/assets/dist/css/component_ui.min.css" rel="stylesheet" type="text/css"/>
        <!-- Theme style rtl -->
        <!--<link href="<?php echo base_url() ?>assets/assets/dist/css/component_ui_rtl.css" rel="stylesheet" type="text/css"/>-->
        <!-- Custom css -->
        <link href="<?php echo base_url() ?>assets/assets/dist/css/custom.css" rel="stylesheet" type="text/css"/>
        <!-- End Theme Layout Style
        =====================================================================-->
           <link href="<?php echo base_url() ?>assets/assets/plugins/datatables/dataTables.min.css" rel="stylesheet" type="text/css"/>

<?php $data = $data[0] ?>

<div class="content-wrapper">
    <div class="container">
        <!-- main content -->
        <div class="content">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="header-icon">
                    <i class="pe-7s-note2"></i>
                </div>

<?php $course_title['course_data_data'] = explode(",",$student[0]['course_title']);?>
<?php $course_title['course_time'] = explode(",",$student[0]['course_timing']);?>
<?php $course_title['trainer'] = explode(",",$student[0]['trainer']);?>
<?php $course_title['fee'] = explode(",",$student[0]['course_fee']);?>
<?php $count_loop_fee = count($course_title['fee']); ?>
<?php $total_fee_value = $student[0]['monthly_fee'] + $student[0]['membership_fee'] + $student[0]['admission_fee'] + $student[0]['other_fee'] - $student[0]['discountfee'] ; ?>


<?php 
// $total_fee = 0;
// for ( $i=0; $i<$count_loop_fee; $i++ ) { 
// $total_fee = $course_title['fee'][$i] + $total_fee;
// }

// $total_fee + $student[0]['admission_fee'] + $student[0]['membership_fee'] +


    ?>


<?php $count_loop = count($course_title['course_data_data']); ?>


                <div class="header-title">
                    <h1>View Student</h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>

                        <li class="active">View Student</li>
                    </ol>
                </div>
            </div>
            <!-- /. Content Header (Page header) -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>View Student</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel-body print-div">
                                        <div class="row">
                                            <div class="col-lg-7 col-md-6 col-sm-6 col-xs-6">
                                                <div class="row">
                                                    <br>
                                                    <div class="col-lg-12">
                                                        <address>
                                                            <strong style="font-weight: 600;">Student Name </strong> :
                                                            <e class="full_name_value"><?php echo $data['student_name'] ?></e><br>
                                                        </address>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <address>
                                                            <strong style="font-weight: 600;">Date of Birth </strong> :
                                                            <e class="father_name_value"><?php echo $data['dob'] ?></e><br>
                                                        </address>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <address>
                                                            <strong style="font-weight: 600;">Past Experience </strong> :
                                                            <e class="dob_value"><?php echo $data['past_experience'] ?></e><br>
                                                        </address>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <address>
                                                            <strong style="font-weight: 600;">Remarks </strong> :
                                                            <e class="m_surname_value"><?php echo $data[''] ?></e><br>
                                                        </address>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-sm-4 col-xs-4 text-left">
                                                <img src="<?php echo base_url(); ?><?php echo $data['user_image'] ?>" class="img-responsive pull-left img-src" alt="" style="height: 115px;">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <address>
                                                            <strong style="font-weight: 600;">Contact Number </strong> :
                                                            <e class="aks_value"><?php echo $data['student_contact'] ?></e><br>
                                                        </address>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin-top: -39px;">
                                                        <address>
                                                            <strong style="font-weight: 600;">Email </strong> :
                                                            <e class="p_l_n_value"><?php echo $data['student_email'] ?></e><br>
                                                        </address>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <address>
                                                                         <strong style="font-weight: 600;">Address </strong> :
                                                                   <e class="gender_value">Male<?php echo $data['student_address'] ?></e><br>
                                                                </address>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <address>
                                                                         <strong style="font-weight: 600;">Student C.N.I.C </strong> :
                                                                   <e class="mother_name_value"><?php echo $data['student_cnic'] ?></e><br>
                                                                </address>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <address>
                                                                         <strong style="font-weight: 600;">WhatsApp Number </strong> :
                                                                   <e class="pob_value"><?php echo $data['home_phone'] ?></e><br>
                                                                </address>
                                                    </div>
                                                </div>

                                               <hr>
                                                
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
                                                                
                       <td><?php echo $course_title['course_data_data'][$i]; ?></td>

                    <td><?php  echo $course_title['trainer'][$i]; ?></td>
                    
                     <td><?php echo $course_title['course_time'][$i]; ?></td> 
                <td><?php echo $course_title['fee'][$i]; ?></td> 

                                                            </tr>
<?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                
                                                <div class="">
                                                    <hr>

                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <address>
                                                                         <strong style="font-weight: 600;">Emergency Name </strong> :
                                                                   <e class="army_service_value"><?php echo $data['emergency_name'] ?></e><br>
                                                                </address>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <address>
                                                                         <strong style="font-weight: 600;">Emergency number </strong> :
                                                                   <e class="army_service_value"><?php echo $data['emergency_home'] ?></e><br>
                                                                </address>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <address>
                                                                         <strong style="font-weight: 600;">Emergency mobile </strong> :
                                                                   <e class="army_service_value"><?php echo $data['emergency_mobile'] ?></e><br>
                                                                </address>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <address>
                                                                         <strong style="font-weight: 600;">Emergency relation </strong> :
                                                                   <e class="d_d_y_value"><?php echo $data['emergency_relation'] ?></e><br>
                                                                </address>
                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="">


<hr>

                                                    <!-- <div class="panel-heading" style="background-color: #827d7d;border-radius: 3px;margin-bottom: 17px;">
                                                        <div class="panel-title">
                                                            <h4>Guardian Information</h4>
                                                        </div>
                                                    </div> -->

                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <address>
                                                                         <strong style="font-weight: 600;">Father Name </strong> :
                                                                   <e class="army_service_value"><?php echo $data['father_name'] ?></e><br>
                                                                </address>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <address>
                                                                         <strong style="font-weight: 600;">Mobile number </strong> :
                                                                   <e class="d_d_y_value"><?php echo $data['father_mobile'] ?></e><br>
                                                                </address>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <address>
                                                                         <strong style="font-weight: 600;">C.N.I.C </strong> :
                                                                   <e class="army_service_value"><?php echo $data['father_cnic'] ?></e><br>
                                                                </address>
                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="">
<hr>
                                                    <!-- <div class="panel-heading" style="background-color: #827d7d;border-radius: 3px;margin-bottom: 17px;">
                                                        <div class="panel-title">
                                                            <h4>Fee Structure</h4>
                                                        </div>
                                                    </div> -->

                                                    <div class="row">

                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <address>
                                                                         <strong style="font-weight: 600;">Joining Date </strong> :
                                                                   <e class="m_o_t_value"><?php echo $data['joindate'] ?></e><br>
                                                                </address>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <address>
                                                                         <strong style="font-weight: 600;">Admission Fee </strong> :
         <e class="d_l_n_value"><?php echo $data['admission_fee'] ?></e><br>
                                                                </address>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <address>
        <strong style="font-weight: 600;">Membership Fee </strong> :
              <e class="exp_date_value"><?php echo $data['membership_fee'] ?></e><br>
                                                                </address>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <address>
                                                                         <strong style="font-weight: 600;">Other </strong> :
                                                                   <e class="stae_issue_value"><?php echo $data['other_fee'] ?></e><br>
                                                                </address>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <address>
        <strong style="font-weight: 600;">Monthly Fee </strong> :
        <e class="crime_value"><?php echo $student[0]['monthly_fee']; ?></e><br>
                                                                </address>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <address>
                                                                         <strong style="font-weight: 600;">Discount Fee </strong> :
                                                                   <e class="e_detail_value"><?php echo $data['discountfee'] ?></e><br>
                                                                </address>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <address>
                                                                         <strong style="font-weight: 600;">Total </strong> :
            


            <e class="crime_value"><?php echo $total_fee_value; ?></e>

                                                                </address>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <address>
                                                                         <strong style="font-weight: 600;">Status </strong> :
                                                                   <e class="e_detail_value"><?php echo $data['student_name'] ?></e><br>
                                                                </address>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

  <button id="btn" class="print-btn btn btn-info pull-right" role="button">Generate Print</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </div>

</div>
    
    <script type="text/javascript">
        $('.print-btn').click(function() {
            w = window.open();
            var ht = $('.print-div').html()
            var head = $('head').html()
            w.document.write('<html>');
            w.document.write('<head>');
            w.document.write(head);
            // w.document.write('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
            // w.document.write('<link rel="stylesheet" type="text/css" href="' + url + '/assets/css/bootstrap.min.css">');
            // w.document.write('<link rel="stylesheet" type="text/css" href="' + url + '/assets/css/bootstrap-responsive.min.css">');
            // w.document.write('<link rel="stylesheet" type="text/css" href="' + url + '/assets/css/font-awesome.min.css">');
            // w.document.write('<link rel="stylesheet" type="text/css" href="' + url + '/assets/css/style.css">');
            // w.document.write('<link rel="stylesheet" type="text/css" href="' + url + '/assets/css/responsive.css">');
            // w.document.write('<style>h3.product-totle{padding-top:20px}</style>')
            w.document.write('</head>');
            w.document.write('<body>');
            w.document.write(ht);
            w.document.write('<body>');
            w.document.write('</html>');
            setTimeout(function() {
                w.print();
                w.close();
            }, 300);
        })
    </script>

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