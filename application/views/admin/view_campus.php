
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
                                <h1>View Campus</h1>
                                <small></small>
                                <ol class="breadcrumb">
                                    <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="#">Campus</a></li>
                                    <li class="active">View Campus</li>
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
                                                        <th>Campus ID</th>
                                                        <th>Campus Name</th>
                                                        <th>Campus Address</th>
                                                        <th>Actions?</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                <?php foreach ($campus as $cum): ?>

                                                    <tr>
                                                        <td><?php echo $cum['id'] ?></td>
                                                        <td><?php echo $cum['name'] ?></td>
                                                        <td><?php echo $cum['address'] ?></td>
                                                        <td>
                                                            <a href="<?php echo base_url() ?>admin/edit_campus/<?php echo $cum['id'] ?>"><i class="fa fa-edit fa-2x"></i>
                                                            </a>
                                                            <a href="<?php echo base_url() ?>admin/delete/campus/id/<?php echo $cum['id'] ?>" > <i class="fa fa-trash fa-2x"></i>
                                                            </a>
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

