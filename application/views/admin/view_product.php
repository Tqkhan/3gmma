
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
                                <h1>View Product</h1>
                                <small></small>
                                <ol class="breadcrumb">
                                    <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="#">Forms</a></li>
                                    <li class="active">View Product</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
         <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>View Product</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <p class="m-b-15"> </p>
                                        <div class="table-responsive">
                                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                     <tr>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Category Name</th>
                        <th>Sub Category Name</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Product Image</th>
                        <th>Actions</th>

                    </tr>
                                                </thead>
                                                <tbody>
                                                 <?php foreach ($products as $product): ?>
                          <tr class="gradeX">
                        <td><?php echo $product['productID'] ?></td>
                        <td><?php echo $product['productName'] ?></td>
                        <td><?php echo $product['categoryName'] ?></td>
                        <td><?php echo $product['subCategoryName'] ?></td>
                        <td><?php echo $product['productDesc'] ?></td>
                        <td><?php echo $product['qty'] ?></td>
                        <td><?php echo $product['price'] ?></td>
                                    <td>
<?php if ($product['productImage']!=""): ?>
<img src="<?php echo base_url()?>uploads/product/<?php echo $product['productImage'] ?>" width="120">
<?php endif ?>
</td>
<td>
<a href="<?php echo base_url() ?>admin/edit_product/<?php echo $product['productID'] ?>" class="fa fa-edit fa-2x"></a>
<a href="<?php echo base_url() ?>admin/delete/products/productID/<?php echo $product['productID'] ?>" class="fa fa-trash-o fa-2x" onclick="return confirm('Are you sure?')"></a>

                        </td>
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

