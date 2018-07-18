
           
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
                                <h1>View Attendence</h1>
                                <small></small>
                                <ol class="breadcrumb">
                                    <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="#">Attendences</a></li>
                                    <li class="active">View Attendences</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
         <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                        </div>
                                    </div>
                                    <div class="panel-body">
<div class="row">
<div class="col-md-2">
<form method="post" action="<?php echo base_url(); ?>admin/view_attendence_students">
<span></span><select name="filter_course" class="form-control input-sm">
<option value="">Filter By Course</option>
<?php foreach($courses as $data){ ?>
  <option value="<?php echo $data['courseID']; ?>"><?php echo $data['course_title']; ?></option>
  <?php } ?>
</select>
</div>



<div class="col-md-2">
<span></span><select name="filter_month" class="form-control input-sm">
<option value="">Filter By Month</option>
<?php for ($m=1; $m<=12; $m++) { ?>

<option value="<?php echo $m; ?>">
<?php echo $month = date('F', mktime(0,0,0,$m, 1, date('Y'))); ?>
</option>

<?php } ?>
</select>
</div>




<div class="col-md-8">
    <input type="submit" name="btn_filter" value="Filter" class="btn btn-primary pull-right">
</div>
</form>
</div><br>
                                        <div class="table-responsive">
                                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Student ID</th>
                                                        <th>Student Name</th>
                                                        <th>Checkin Date/Time</th>
                                                        <th>Checkout Date/Time</th>
                                                        <th>Today's Total Hour</th>
                                                        <!-- <th>Status</th> -->
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                <?php foreach ($data_attendence as $data): ?>

                                                    <tr>


<?php 
$formated_date1 = str_replace("/","-",$data['checkin_date']);
$formated_date2 = str_replace("/","-",$data['checkout_date']); ?>

    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['student_name']; ?></td>
    <td><?php echo $date_one = $formated_date1 .' '. $data['checkin_time']; ?></td>
    <td><?php echo $date_two = $formated_date2 .' '. $data['checkout_time']; ?></td>
    <td>
   <?php 

 // $seconds = strtotime($date_two) - strtotime($date_one);
 // echo $hour  = $seconds / 60 /  60;


$datetime1 = new DateTime($date_one);
$datetime2 = new DateTime($date_two);
$interval = $datetime1->diff($datetime2);
echo $interval->format('%h')." hr / ".$interval->format('%i')." min / ".$interval->format('%s')." sec ";


    ?>


  <!--   </td>
    <td><?php

    $x = $data['status'];
    if($x == '1'){

        echo 'active';
    }
    else
    {
        echo 'in_active';
    }

     ?></td> -->
                                                       </tr>
                                                  <?php endforeach ?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.main content -->
                </div> <!-- /.container -->
            </div> <!-- /.content-wrapper -->
            <!-- start footer -->

