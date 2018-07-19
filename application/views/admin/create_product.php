
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
                                <h1>Create Product</h1>
                                <br>
                                <ol class="breadcrumb">
                                    <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="#">Products</a></li>
                                    <li class="active">Create Product</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd ">
                                    <div class="panel-heading">

                                    </div>
                                    <div class="panel-body">

                                        <form action="<?php echo base_url() ?>admin/insert_product" enctype="multipart/form-data" method="post">
                                            <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Product Name</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" placeholder="Product Name" name="productName" id="example-text-input">
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Category</label>
                                            <div class="col-sm-9">
                                                <select class="form-control categoryID" name="categoryID" placeholder="Subcategory Description " required="" id="example-text-input" >
                                                    <option value="">Select Category</option>
                                                    <?php foreach ($categories as $category): ?>
                                                        <option value="<?php echo $category['categoryID'] ?>"><?php echo $category['categoryName'] ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </div>

                                         <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Sub Category</label>
                                            <div class="col-sm-9">
                                                <select class="form-control subCategoryID" name="subCategoryID" placeholder="Subcategory Description " required="" id="example-text-input" >
                                                    <option value="">Select Category First</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Quantity</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" placeholder="Product Name" name="qty" id="example-text-input">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Product Description</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" placeholder="Product Name" name="productDesc" id="example-text-input"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Price</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" placeholder="Price" name="price" id="example-text-input">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Product Image</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="file"  name="productImage" id="example-text-input">
                                            </div>
                                        </div>


                                        <div class="form-group row col-md-12">
                                           <input type="submit" value="Create Product" class="btn btn-primary pull-right">
                                        </div>

                                       </form>
                                    </div>
                                </div>
                            </div>
                        </div>


