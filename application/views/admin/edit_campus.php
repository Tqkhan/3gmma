
           
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
                                <h1>Edit Campus</h1>
                                <ol class="breadcrumb">
                                    <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="#">Campus</a></li>
                                    <li class="active">Edit Campus</li>
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
                                        <form action="<?php echo base_url() ?>admin/update_campus" method="post">
                                            <input type="hidden" name="id" value="<?php echo $campus['id'] ?>">
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Name</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" name="name"  value="<?php echo $campus['name'] ?>" placeholder="Name" type="text" required="" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Address</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" name="address" value="<?php echo $campus['address'] ?>" placeholder="Address" type="text" required="" id="example-text-input" />
                                            </div>
                                        </div>
                                        <div class="form-group row col-md-12">
                                           <input type="submit" value="Update Campus" class="btn btn-primary pull-right">
                                        </div>
                                      </form>
                                    </div>
                                </div>
                            </div>
                        </div>
