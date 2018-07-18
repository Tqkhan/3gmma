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








                <div class="header-title">
                    <h1>Expense Voucher</h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>

                        <li class="active">Expense Voucher</li>
                    </ol>
                </div>
            </div>
            <!-- /. Content Header (Page header) -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Expense Voucher</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel-body print-div">
                                        
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-sm-12 col-xs-12">
                                            
                                                <?php foreach($expense_data as $data){ ?>
                                                <div class="table-responsive m-b-20">

                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Expense Title</th>
                                                                <th>Expense Description</th>
                                                                <th>Expense Amount</th>
                                                                <th>Submission Date</th>
                                                                <th>Current Date Time</th>


                                                            </tr>
</thead>
<tbody class="append-education">
                                                            <tr>
    <td><?php echo $data['expense_title']; ?></td>
    <td><?php echo $data['expense_description']; ?></td>
    <td><?php echo $data['expense_amount']; ?></td>
    <td><?php echo $data['submission_date']; ?></td>
    <td><?php echo $data['date_time']; ?></td>

                                                            </tr>

</tbody>

                                                        
                                                        
                                                    </table>
                                                </div>
                                                <?php } ?>
                                      
                                
                                                
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