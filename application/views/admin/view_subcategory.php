
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
                                <h1>View SubCategory</h1>
                                <small></small>
                                <ol class="breadcrumb">
                                    <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="#">Category</a></li>
                                    <li class="active">View Subcategory</li>
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

                                        <div class="table-responsive">
                                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Subcategory ID</th>
                                                        <th>Category Name</th>
                                                        <th>Subcategory Name</th>
                                                        <th>Subcategory DESC</th>
                                                        <th>Subcategory Image</th>
                                                        <th>Actions?</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                <?php foreach ($subcategories as $subcategory): ?>

                                                    <tr>
                                                        <td><?php echo $subcategory['subCategoryID'] ?></td>
                                                        <td><?php echo $subcategory['categoryName'] ?></td>
                                                        <td><?php echo $subcategory['subCategoryName'] ?></td>
                                                        <td><?php echo $subcategory['subCategoryDesc'] ?></td>
                                                        <td>
                                                        <?php
                                                         if ($subcategory['subCategoryImage']) {
                                                            ?>
                                                            <img src="<?php echo base_url() ?>uploads/subcategory/<?php echo $subcategory['subCategoryImage'] ?>" width="120">


                                                            <?php
                                                         }
                                                        ?>

                                                        </td>
                                                        <td><a href="<?php echo base_url() ?>admin/edit_subcategory/<?php echo $subcategory['subCategoryID'] ?>"><i class="fa fa-edit fa-2x"></i></a> <a href="<?php echo base_url() ?>admin/delete/subcategory/subCategoryID/<?php echo $subcategory['subCategoryID'] ?>"><i class="fa fa-trash fa-2x"></i></a></td>

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

