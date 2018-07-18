
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
								<h1>Sold Product Information</h1>
								<small></small>
								<ol class="breadcrumb">
									<li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
									<li><a href="#">Products</a></li>
									<li class="active">Sold Product</li>
								</ol>
							</div>
						</div> <!-- /. Content Header (Page header) -->
		 <div class="row">
							<div class="col-sm-12">
								<div class="panel panel-bd lobidrag">
									<div class="panel-heading">
										<div class="panel-title">
											<h4>Sold Products </h4>
										</div>
									</div>
									<div class="panel-body">
										<p class="m-b-15"></p>
										<div class="table-responsive">
											<table id="dataTableExample2" class="table table-bordered table-striped table-hover">
												<thead>
													 <tr>
						<th>Student ID</th>
						<th>Student Name</th>
						<th>Student Email</th>
						<th>Student Address</th>
						<th>Product Name</th>
						<th>Quantity</th>
						<th>Price</th>
					</tr>
												</thead>
												<tbody>
												 <?php foreach ($solds as $sold): ?>
						  <tr class="gradeX">
						<td><?php echo $sold['studentID'] ?></td>
						<td><?php echo $sold['student_name']?></td>
						<td><?php echo $sold['student_email']?></td>
						<td><?php echo $sold['student_address']?></td>
						<td><?php echo $sold['productName'] ?></td>
						<td><?php echo $sold['quantity'] ?></td>
						<td><?php echo $sold['price'] ?></td>


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

