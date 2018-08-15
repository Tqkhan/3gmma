<style media="print" type="text/css">
    .card-content-languages{
list-style-image: url('<?php echo base_url(); ?>assets/assets/dist/img/back_logo2.png');
background-repeat: no-repeat; background-size: cover;     color: #060606;font-weight: 700;
list-style-position: inside;
display: inherit;
}
</style>
<style type="text/css">
@media print {
        .col-sm-4{
            width: 380px;
            height: 556px;
        }
    
    .card-content-languages{
list-style-image: url('<?php echo base_url(); ?>assets/assets/dist/img/back_logo2.png');
background-repeat: no-repeat; background-size: cover;     color: #060606;font-weight: 700;
list-style-position: inside;
display: inherit;
}
footer{display: none;
}
.btn{
    display: none;
}
body {
  -webkit-print-color-adjust: exact !important;
}
}
    .card-content-languages{
list-style-image: url('<?php echo base_url(); ?>assets/assets/dist/img/back_logo2.png');
background-repeat: no-repeat; background-size: cover;     color: #060606;font-weight: 700;
list-style-position: inside;
display: inherit;
}
</style>
<?php $data = $data[0] ?>
<?php $course_title['course_data_data'] = explode(",",$student[0]['course_title']);?>
<?php $course_title['course_time'] = explode(",",$student[0]['course_timing']);?>
<?php $course_title['trainer'] = explode(",",$student[0]['trainer']);?>
<?php $course_title['fee'] = explode(",",$student[0]['course_fee']);?>
<?php $count_loop_fee = count($course_title['fee']); ?>
<?php $total_fee_value = $student[0]['monthly_fee'] + $student[0]['membership_fee'] + $student[0]['admission_fee'] + $student[0]['other_fee'] - $student[0]['discountfee'] ; ?>

<?php ?>
<?php $count_loop = count($course_title['course_data_data']); ?>
<div class="content-wrapper">
    <div class="container">
        <!-- main content -->
        <div class="content">
            <!-- Content Header (Page header) -->
            
            <div class="row">
                <div class="col-sm-4 col-md-4">
                    <div class="card" style=" border: 1px solid; ">

                        <div class="card-content">

                            <div class="card-content-languages back" style="background-image: url('<?php echo base_url(); ?>assets/assets/dist/img/back_logo2.png'); background-repeat: no-repeat; background-size: cover;     color: #060606;font-weight: 700;">

                                <div class="card-content-languages-group" >
                                    
                                    <div>
                                        <img src="<?php echo base_url(); ?><?php echo $data['user_image'] ?>" class="img-responsive" style="height: 71px;" alt="" >
                                    </div>
                                    <div>
                                        <ul>
                                            
                                            <strong>
                                                <h4><?php echo $data['student_name'] ?>
                                                <div class="fluency fluency-4"></div>
                                            </h4>
                                            </strong>

                                           
                                        </ul>
                                    </div>
                                </div>
                                <hr>
                                <div class="card-content-languages-group">
                                    <div>
                                        <h4>Course:</h4>
                                    </div>
                                    <div>
                                        <ul>
                                            <?php for ( $i=0; $i<$count_loop; $i++ ) { ?>
                                            <li><?php echo $course_title['course_data_data'][$i]; ?>
                                                <div class="fluency fluency-4"></div>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content-languages-group">
                                    <div>
                                        <h4>Timing:</h4>
                                    </div>
                                    <div>
                                        <ul>
                                            <?php for ( $i=0; $i<$count_loop; $i++ ) { ?>
                                            <li><?php echo $course_title['course_time'][$i]; ?>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <!-- <div class="card-footer">
                            <div class="card-footer-stats">
                                <div>
                                    <p>PROJECTS:</p><i class="fa fa-users"></i><span>241</span>
                                </div>
                                <div>
                                    <p>MESSAGES:</p><i class="fa fa-coffee"></i><span>350</span>
                                </div>
                                <div>
                                    <p>Last online</p><span class="stats-small">3 days ago</span>
                                </div>
                            </div>
                            <div class="card-footer-message">
                                <h4><i class="fa fa-comments"></i> Message me</h4>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="card" style=" border: 1px solid;">

                        <div class="card-content">

                            <div class="card-content-languages">
                                <div class="card-content-languages-group back" style="background-image: url('<?php echo base_url(); ?>assets/assets/dist/img/back_logo2.png'); background-repeat: no-repeat; background-size: cover;     color: #060606;font-weight: 700;">
                                    <div>
                                        <img src="http://chart.apis.google.com/chart?cht=qr&chl=<?php echo $data['qrcode'] ?>&chs=60" class="img-responsive" style="height: 71px;" alt="" >
                                    </div>
                                    <div>
                                        <ul>
                                            
                                            <strong>
                                                <h4><?php echo $data['student_name'] ?>
                                                <div class="fluency fluency-4"></div>
                                            </h4>
                                            </strong>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <hr>
                                <div class="card-content-languages-group">
                                    <div>
                                        <h4>Join Date:</h4>
                                    </div>
                                    <div>
                                        <ul>
                                            
                                            <li><?php echo $data['joindate'] ?>
                                                <div class="fluency fluency-4"></div>
                                            </li>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content-languages-group">
                                    <div>
                                        <h4>Address:</h4>
                                    </div>
                                    <div>
                                        <ul>
                                            
                                            <span style="font-size: 8px;"><?php echo $data['student_address'] ?>
                                                <div class="fluency fluency-4"></div>
                                            </span>
                                           
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
                <button onclick="myFunction()" class="btn btn-primary ">Print this page</button>
                <br>
                <br>
                <br>
        </div>
    </div>
</div>
<script>
    function myFunction() {
        window.print();
    }
</script>
                       
