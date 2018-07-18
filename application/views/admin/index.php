
            <div class="content-wrapper">
                <div class="container">
                    <!-- main content -->
                    <div class="content">
                        <!-- Content Header (Page header) -->
                        <div class="content-header">
                            <div class="header-icon">
                                <i class="pe-7s-tools"></i>
                            </div>
                            <div class="header-title">
                                <h1>3GMMA</h1>
                                <small>Admin Panel</small>
                                <ol class="breadcrumb">
                                    <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                                    <li class="active">Dashboard</li>
                                </ol>
                            </div>
                        </div>  <!-- /.Content Header (Page header) -->
                        <div class="row">
                        	<a href="<?php echo base_url()?>admin/view_student" style="height: 86px;">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-1">
                                    <!-- <h2><span class="count-number">696</span>K <span class="slight"><i class="fa fa-play fa-rotate-270 text-warning"> </i> +28%</span></h2> -->
                                    <div class="small"><h3>View Students</h3></div>
                                    <i class="ti-server statistic_icon"></i>
                                    <div class="sparkline1 text-center"></div>
                                </div> <!-- /. statistic box -->
                            </div>
                        </a>
                        <a href="<?php echo base_url()?>admin/view_trainer" style="height: 86px;">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-2">
                                    <!-- <h2><span class="count-number">321</span>M <span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> +10%</span> </h2> -->
                                    <div class="small"><h3>View Trainers</h3></div>
                                    <i class="ti-user statistic_icon"></i>
                                    <div class="sparkline2 text-center"></div>
                                </div>  <!-- /.statistic box -->
                            </div>
                        </a>
                        <a href="<?php echo base_url() ?>admin/view_expense">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-3">
                                   <!--  <h2><span class="count-number">789</span>K <span class="slight"><i class="fa fa-play fa-rotate-270 text-warning"> </i> +29%</span></h2> -->
                                    <div class="small"><h3>Expenses</h3></div>
                                    <i class="ti-world statistic_icon"></i>
                                    <div class="sparkline3 text-center"></div>
                                </div> <!-- /.statistic box -->
                            </div>
                        </a>
                        <a href="<?php echo base_url()?>admin/sold_product">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-4">
                                    <!-- <h2><span class="count-number">5489</span>$ <span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> +24%</span></h2> -->
                                    <div class="small"><h3>View Sales</h3></div>
                                    <i class="ti-bag statistic_icon"></i>
                                    <div class="sparkline4 text-center"></div>
                                </div> <!--/. statistic box -->
                            </div>
                        </a>
                        <a href="<?php echo base_url()?>admin/view_fees">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3" style="border-color: #EF6C00 !important;">
                                <!-- statistic box -->
                                <div class="statistic-box ">
                                    <!-- <h2><span class="count-number">5489</span>$ <span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> +24%</span></h2> -->
                                    <div class="small"><h3>View Fees</h3></div>
                                    <i class="pe-7s-cash statistic_icon"></i>
                                    <div class="sparkline4 text-center"></div>
                                </div> <!--/. statistic box -->
                            </div>
                        </a>
                        </div>
                        <div class="row">
                        	<div class="col-sm-12 col-md-12">
							<!-- <div class="panel panel-bd lobidisable">
								<div class="panel-heading">
									<div class="panel-title">
										<h4>Bar chart</h4>
									</div>
								</div>
								<div class="panel-body">
									<canvas id="barChart" height="200"></canvas>
								</div>
							</div> -->
						</div>
                        	<!-- <div class="col-sm-12 col-md-12">
                        								<div class="panel panel-bd lobidrag">
                        									<div class="panel-heading">
                        										<div class="panel-title">
                        											<h4>Line chart</h4>
                        										</div>
                        									</div>
                        									<div class="panel-body">
                        										<canvas id="lineChart" height="140"></canvas>
                        									</div>
                        								</div>
                        							</div> -->
						<!-- Polar Chart -->
						<!-- <div class="col-sm-5 col-md-5">
							<div class="panel panel-bd lobidisable">
								<div class="panel-heading">
									<div class="panel-title">
										<h4>Polar chart</h4>
									</div>
								</div>
								<div class="panel-body">
									<canvas id="polarChart" height="310"></canvas>
								</div>
							</div>
						</div> -->
                            <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                                <div class="panel panel-bd ">
                                    <div class="panel-body">
                                        amcharts
                                        <div id="barChart"></div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div class="row">
                           <!--  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 ">
                               <div class="panel panel-bd lobidrag">
                                   <div class="panel-heading">
                                       <div class="panel-title">
                                           <i class="ti-panel"></i>
                                           <h4>CSS animations Chart</h4>
                                       </div>
                                   </div>
                                   <div class="panel-body">
                                       <div class="flotChart" style="height: 340px;">
                                                                                       <div class="flotChart-demo" id="flot-line-chart"></div>
                                                                                   </div>
                                       amcharts
                                       <div id="chartdiv2"></div>
                                   </div>
                               </div>
                           </div> -->
                            <!-- Activities -->
                            <!-- <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                <div class="panel panel-bd lobidisable">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <i class="ti-stats-up"></i>
                                            <h4>Recent Activities</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <ul class="activity-list list-unstyled">
                                            <li class="activity-purple">
                                                <small class="text-muted">9 minutes ago</small>
                                                <p>You <span class="label label-success label-pill">recommended</span> Karen Ortega</p>
                                            </li>
                                            <li class="activity-danger">
                                                <small class="text-muted">15 minutes ago</small>
                                                <p>You followed Olivia Williamson</p>
                                            </li>
                                            <li class="activity-warning">
                                                <small class="text-muted">22 minutes ago</small>
                                                <p>You <span class="text-danger">subscribed</span> to Harold Fuller</p>
                                            </li>
                                            <li class="activity-primary">
                                                <small class="text-muted">30 minutes ago</small>
                                                <p>You updated your profile picture</p>
                                            </li>
                                            <li>
                                                <small class="text-muted">35 minutes ago</small>
                                                <p>You deleted homepage.psd</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div> -->
                           <!--  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                               <div class="panel panel-bd lobidisable">
                                   <div class="panel-heading">
                                       <div class="panel-title">
                                           <i class="ti-email"></i>
                                           <h4>Messages</h4>
                                       </div>
                                   </div>
                                   <div class="panel-body">
                                       <div class="message_inner">
                                           <div class="message_widgets">
                                               <a href="#">
                                                   <div class="inbox-item">
                                                       <div class="inbox-item-img"><img src="assets/dist/img/avatar.png" class="img-circle" alt=""></div>
                                                       <strong class="inbox-item-author">Naeem Khan</strong>
                                                       <span class="inbox-item-date">-13:40 PM</span>
                                                       <p class="inbox-item-text">Hey! there I'm available...</p>
                                                       <span class="profile-status available pull-right"></span>
                                                   </div>
                                               </a>
                                               <a href="#">
                                                   <div class="inbox-item">
                                                       <div class="inbox-item-img"><img src="assets/dist/img/avatar2.png" class="img-circle" alt=""></div>
                                                       <strong class="inbox-item-author">Sala Uddin</strong>
                                                       <span class="inbox-item-date">-13:40 PM</span>
                                                       <p class="inbox-item-text">Hey! there I'm available...</p>
                                                       <span class="profile-status away pull-right"></span>
                                                   </div>
                                               </a>
                                               <a href="#">
                                                   <div class="inbox-item">
                                                       <div class="inbox-item-img"><img src="assets/dist/img/avatar3.png" class="img-circle" alt=""></div>
                                                       <strong class="inbox-item-author">Mozammel Hoque</strong>
                                                       <span class="inbox-item-date">-13:40 PM</span>
                                                       <p class="inbox-item-text">Hey! there I'm available...</p>
                                                       <span class="profile-status busy pull-right"></span>
                                                   </div>
                                               </a>
                                               <a href="#">
                                                   <div class="inbox-item">
                                                       <div class="inbox-item-img"><img src="assets/dist/img/avatar4.png" class="img-circle" alt=""></div>
                                                       <strong class="inbox-item-author">Tanzil Ahmed</strong>
                                                       <span class="inbox-item-date">-13:40 PM</span>
                                                       <p class="inbox-item-text">Hey! there I'm available...</p>
                                                       <span class="profile-status offline pull-right"></span>
                                                   </div>
                                               </a>
                                               <a href="#">
                                                   <div class="inbox-item">
                                                       <div class="inbox-item-img"><img src="assets/dist/img/avatar5.png" class="img-circle" alt=""></div>
                                                       <strong class="inbox-item-author">Amir Khan</strong>
                                                       <span class="inbox-item-date">-13:40 PM</span>
                                                       <p class="inbox-item-text">Hey! there I'm available...</p>
                                                       <span class="profile-status available pull-right"></span>
                                                   </div>
                                               </a>
                                               <a href="#">
                                                   <div class="inbox-item">
                                                       <div class="inbox-item-img"><img src="assets/dist/img/avatar.png" class="img-circle" alt=""></div>
                                                       <strong class="inbox-item-author">Salman Khan</strong>
                                                       <span class="inbox-item-date">-13:40 PM</span>
                                                       <p class="inbox-item-text">Hey! there I'm available...</p>
                                                       <span class="profile-status available pull-right"></span>
                                                   </div>
                                               </a>
                                               <a href="#">
                                                   <div class="inbox-item">
                                                       <div class="inbox-item-img"><img src="assets/dist/img/avatar.png" class="img-circle" alt=""></div>
                                                       <strong class="inbox-item-author">Naeem Khan</strong>
                                                       <span class="inbox-item-date">-13:40 PM</span>
                                                       <p class="inbox-item-text">Hey! there I'm available...</p>
                                                       <span class="profile-status available pull-right"></span>
                                                   </div>
                                               </a>
                                               <a href="#">
                                                   <div class="inbox-item">
                                                       <div class="inbox-item-img"><img src="assets/dist/img/avatar4.png" class="img-circle" alt=""></div>
                                                       <strong class="inbox-item-author">Tanzil Ahmed</strong>
                                                       <span class="inbox-item-date">-13:40 PM</span>
                                                       <p class="inbox-item-text">Hey! there I'm available...</p>
                                                       <span class="profile-status offline pull-right"></span>
                                                   </div>
                                               </a>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div> -->
                            <!-- Chat -->
                            <!-- <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                <div class="panel panel-bd lobidisable">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <i class="ti-user"></i>
                                            <h4>Chat</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <ul class="chat_list">
                                            <li class="clearfix">
                                                <div class="chat-avatar">
                                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Hooray!"></a>
                                                    <img src="assets/dist/img/avatar4.png" alt="male">
                                                    <i>10:00</i>
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <i>John Deo</i>
                                                        <p>Hello! ✋</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix odd">
                                                <div class="chat-avatar">
                                                    <img src="assets/dist/img/avatar5.png" alt="Female">
                                                    <i>10:01</i>
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <i>Marco Lopes</i>
                                                        <p>Hi, How are you?☺ What about our next meeting?😼</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="chat-avatar">
                                                    <img src="assets/dist/img/avatar4.png" alt="male">
                                                    <i>10:01</i>
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <i>John Deo</i>
                                                        <p>Yeah everything is fine 👍</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix odd">
                                                <div class="chat-avatar">
                                                    <img src="assets/dist/img/avatar5.png" alt="male">
                                                    <i>10:02</i>
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <i>Marco Lopes</i>
                                                        <p>Wow that's great 👏</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="chat-avatar">
                                                    <img src="assets/dist/img/avatar4.png" alt="male">
                                                    <i>10:03</i>
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <i>John Deo</i>
                                                        <p>What can you do with HTML VIEWER ?</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix odd">
                                                <div class="chat-avatar">
                                                    <img src="assets/dist/img/avatar5.png" alt="male">
                                                    <i>10:04</i>
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <i>Marco Lopes</i>
                                                        <p>It helps to beautify/format your HTML.</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix odd">
                                                <div class="chat-avatar">
                                                    <img src="assets/dist/img/avatar5.png" alt="male">
                                                    <i>10:04</i>
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <i>Marco Lopes</i>
                                                        <p>It helps to save and share HTML content and show the HTML output</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="chat-avatar">
                                                    <img src="assets/dist/img/avatar4.png" alt="male">
                                                    <i>10:05</i>
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <img src="assets/dist/img/1f600.png" alt="">
                                                        <img src="assets/dist/img/1f60e.png" alt="">
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="panel-footer">
                                        <div class="input-group">
                                            <input type="text" class="form-control emojionearea" placeholder="Your Message. . . ">
                                            <span class="input-group-btn">
                                                <button class="btn btn-success" type="button">Send</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </d -->
                            <!-- Calender -->
                           <!--     <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                               <div class="panel panel-bd lobidisable">
                                   <div class="panel-heading">
                                       <div class="panel-title">
                                           <i class="ti-archive"></i>
                                           <h4>Calender</h4>
                                       </div>
                                   </div>
                                   <div class="panel-body">
                                       monthly calender
                                       <div class="monthly_calender">
                                           <div class="monthly" id="m_calendar"></div>
                                       </div>
                                   </div>
                                   <div class="panel-footer">
                                       This is panel footer
                                   </div>
                               </div>
                           </d -->
                            <!--    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                <div class="panel panel-bd lobidisable">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <i class="ti-pie-chart"></i>
                                            <h4>Colors Pie Chart</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        amcharts
                                        <div id="chartPie"></div>
                                        <div class="chart-legend">
                                            <div class="chart-legend-item">
                                                <div class="chart-legend-color red"></div>
                                                <p>From Google</p>
                                                <p class="percentage">63.259 %</p>
                                            </div>
                                            /.chart legend item
                                            <div class="chart-legend-item">
                                                <div class="chart-legend-color blue"></div>
                                                <p>Your Website</p>
                                                <p class="percentage">25.321 %</p>
                                            </div>
                                            /.chart legend item
                                            <div class="chart-legend-item">
                                                <div class="chart-legend-color green"></div>
                                                <p>Other Search Engines</p>
                                                <p class="percentage">11.42 %</p>
                                            </div>
                                            /.chart legend item
                                        </div>
                                    </div>
                                </div>
                            </d -->
                            <!--    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-9">
                                <div class="panel panel-bd">
                                    <div class="panel-body">
                                        amcharts
                                        <div id="chartMap"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <i class="ti-truck"></i>
                                            <h4>Contacts</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Image</th>
                                                        <th>Name</th>
                                                        <th>Phone</th>
                                                        <th>Street Address</th>
                                                        <th>% Share</th>
                                                        <th>City</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <figure class="user-avatar small">
                                                                <img src="assets/dist/img/avatar.png" class="img-responsive" alt="user-image">
                                                            </figure>
                                                        </td>
                                                        <td>Naeem Khan</td>
                                                        <td>123 456 7890</td>
                                                        <td>294-318 Duis Ave</td>
                                                        <td>
                                                            <div class="sparkline5"></div>
                                                        </td>
                                                        <td>Noakhali</td>
                                                        <td><a href="#" class="btn btn-success btn-xs">View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <figure class="user-avatar small">
                                                                <img src="assets/dist/img/avatar2.png" class="img-responsive" alt="user-image">
                                                            </figure>
                                                        </td>
                                                        <td>Tuhin Sarkar</td>
                                                        <td>123 456 7890</td>
                                                        <td>680-1097 Mi Rd.</td>
                                                        <td>
                                                            <div class="sparkline6"></div>
                                                        </td>
                                                        <td>Lavoir</td>
                                                        <td><a href="#" class="btn btn-success btn-xs active">View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <figure class="user-avatar small">
                                                                <img src="assets/dist/img/avatar6.png" class="img-responsive" alt="user-image">
                                                            </figure>
                                                        </td>
                                                        <td>Tanjil Ahmed</td>
                                                        <td>456 789 1230</td>
                                                        <td>Ap #289-8161 In Avenue</td>
                                                        <td>
                                                            <div class="sparkline7"></div>
                                                        </td>
                                                        <td>Dhaka</td>
                                                        <td><a href="#" class="btn btn-success btn-xs">View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <figure class="user-avatar small">
                                                                <img src="assets/dist/img/avatar3.png" class="img-responsive" alt="user-image">
                                                            </figure>
                                                        </td>
                                                        <td>Sourav</td>
                                                        <td>789 123 4560</td>
                                                        <td>226-4861 Augue. St.</td>
                                                        <td>
                                                            <div class="sparkline5"></div>
                                                        </td>
                                                        <td>Rongpur</td>
                                                        <td><a href="#" class="btn btn-success btn-xs">View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <figure class="user-avatar small">
                                                                <img src="assets/dist/img/avatar7.png" class="img-responsive" alt="user-image">
                                                            </figure>
                                                        </td>
                                                        <td>Jahangir Alam</td>
                                                        <td>(01662) 59083</td>
                                                        <td>3219 Elit Avenue</td>
                                                        <td>
                                                            <div class="sparkline6"></div>
                                                        </td>
                                                        <td>Chittagong</td>
                                                        <td><a href="#" class="btn btn-success btn-xs">View</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </d -->
                            <div class="col-xs-12 col-md-6 col-lg-3 hidden-sm hidden-md">
                                <div class="social-widget">
                                    <ul>
                                        <li>
                                            <div class="fb_inner">
                                                <i class="fa fa-facebook"></i>
                                                <span class="sc-num"></span>
                                                <small>3GMMA Fans</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="twitter_inner">
                                                <i class="fa fa-twitter"></i>
                                                <span class="sc-num"></span>
                                                <small>3GMMA Followers</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="g_plus_inner">
                                                <i class="fa fa-google-plus"></i>
                                                <span class="sc-num"></span>
                                                <small>3GMMA Mail</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dribble_inner">
                                                <i class="fa fa-dribbble"></i>
                                                <span class="sc-num"></span>
                                                <small>3GMMA Follow us</small>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- /.row -->
                    </div> <!-- /.main content -->
                </div> <!-- /.container -->
            </div> <!-- /.content-wrapper -->
            <!-- start footer -->

