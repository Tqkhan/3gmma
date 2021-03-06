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
                                <h1>View Submitted Fees</h1>
                                <small></small>
                                <ol class="breadcrumb">
                                    <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="#">Fee</a></li>
                                    <li class="active">View submitted Fees</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
         <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>View Student Fees</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <p class="m-b-15"></p>
                                        <div class="table-responsive">
                                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>S No.</th>
                                                        
                                                        <th>StudentID</th>
                                                        <th>Name</th>
                                                        <th>Fees</th>
                                                        <th>Month of Fees</th>
                                                        <th>Submission Date</th>
                                                        <th>Remaining Fee</th>
                                                        <th>Submitted Fee</th>
                                                        <th>Discount</th>
                                                        <th>Total</th>
                                                        <th>Action</th>

                                                    </tr>
                                                </thead>
            <tbody>
			<?php 
             $submit_total=0;
              $i=1;
            foreach ($fees as $fee): ?>

						<tr>
                    <td><?php echo $fee['feeID'] ?></td>

                    <td><?php echo $fee['studentID'] ?></td>
                    <td><?php echo $fee['student_name'] ?></td>
                    <td><?php echo $fee['student_fee'] ?></td>
                    <td><?php echo $fee['fee_month'] ?></td>
                    <td><?php echo $fee['submission_date'] ?></td>
                    <td><?php echo $fee['installment'] ?></td>
                    <td><?php echo $fee['submit_amount'] ?></td>
                    <td><?php echo $fee['discount_current'] ?></td>
                    <td><?php echo $fee['total']+$fee['previous_installment'] ?></td>
                    <td> <a href="<?php echo base_url() ?>admin/create_fee_voucher/<?php echo $fee['feeID'] ?>" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                    <a href="<?php echo base_url() ?>admin/delete/student_fee/feeID/<?php echo $fee['feeID'] ?>"><img src="<?php echo base_url() ?>assets/assets/dist/img/d-icon.png" title="Delete" alt="Delete" width="35" height="35"></a></td>
                     
                 

                </tr>
				<?php
                 $submit_total+=$fee['submit_amount'];
                  $i++;
                 endforeach ?>
                   <tfoot>
                       <tr>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td>Grand Total :</td>
                           <td><strong></td>
                           <td><strong><?php echo number_format($submit_total); ?></strong></td>
                           <td></td>
                           <td></td>
                           <td></td>
                       </tr>
                   </tfoot>
                                                   
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

