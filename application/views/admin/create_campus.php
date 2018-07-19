
           
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
                                <h1>Create Campus</h1>
                                <br>
                                <ol class="breadcrumb">
                                    <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="#">Campus</a></li>
                                    <li class="active">Create Campus</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd ">
                                    <div class="panel-heading">

                                    </div>
                                    <div class="panel-body">
                                    <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4 style="margin-left: 435px";>Campus Information</h4>
                                    </div>
                                </div>
                                <hr>
                                        <form action="<?php echo base_url() ?>admin/insert_campus" method="post">
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Name</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" name="name" placeholder="Name" type="text" required="" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Address</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" name="address" placeholder="Address" type="text" required="" id="example-text-input" />
                                            </div>
                                        </div>
                                        <div class="form-group row col-md-12">
                                           <input type="submit" value="Create Campus" class="btn btn-primary pull-right">
                                        </div>
                                      </form>
                                    </div>
                                </div>
                            </div>
                        </div>
