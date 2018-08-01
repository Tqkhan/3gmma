  <footer class="main-footer">
                <div class="container">
                    <strong>Copyright &copy; 2016-2017 <a href="<?php echo base_url() ?>admin/">3GMM</a>.</strong> All rights reserved.
                </div>
            </footer> <!-- /. footer -->
        </div> <!-- ./wrapper -->
        <!-- jQuery -->
        <script src="<?php echo base_url() ?>assets/assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/assets/plugins/mask.js"></script>

        <!-- jquery-ui -->
        <script src="<?php echo base_url() ?>assets/assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
        <!-- Bootstrap js -->
        <script src="<?php echo base_url() ?>assets/assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- bootsnav js -->
        <script src="<?php echo base_url() ?>assets/assets/plugins/bootsnav/js/bootsnav.min.js" type="text/javascript"></script>
        <!-- lobipanel js -->
        <script src="<?php echo base_url() ?>assets/assets/plugins/lobipanel/lobipanel.min.js" type="text/javascript"></script>
        <!-- animsition js -->
        <script src="<?php echo base_url() ?>assets/assets/plugins/animsition/js/animsition.min.js" type="text/javascript"></script>
        <!-- SlimScroll js -->
        <script src="<?php echo base_url() ?>assets/assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <!-- FastClick js-->
        <script src="<?php echo base_url() ?>assets/assets/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
        <!-- End Core Plugins
        =====================================================================-->
        <!-- Start Page Lavel Plugins
        =====================================================================-->
        <!-- Toastr js -->
        <script src="<?php echo base_url() ?>assets/assets/plugins/toastr/toastr.min.js" type="text/javascript"></script>
        <!-- Sparkline js -->
        <script src="<?php echo base_url() ?>assets/assets/plugins/sparkline/sparkline.min.js" type="text/javascript"></script>
        <!-- Counterup js -->
        <script src="<?php echo base_url() ?>assets/assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/assets/plugins/counterup/waypoints.js" type="text/javascript"></script>
        <!-- Emojionearea -->
        <script src="<?php echo base_url() ?>assets/assets/plugins/emojionearea/emojionearea.min.js" type="text/javascript"></script>
        <!-- Monthly js -->
        <script src="<?php echo base_url() ?>assets/assets/plugins/monthly/monthly.min.js" type="text/javascript"></script>
        <!-- amchat js -->
        <script src="<?php echo base_url() ?>assets/assets/plugins/amcharts/amcharts.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/assets/plugins/amcharts/ammap.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/assets/plugins/amcharts/worldLow.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/assets/plugins/amcharts/serial.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/assets/plugins/amcharts/export.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/assets/plugins/amcharts/dark.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/assets/plugins/amcharts/pie.js" type="text/javascript"></script>
        <!-- Start Theme label Script
        =====================================================================-->
        <!-- Dashboard js -->
        <script src="<?php echo base_url() ?>assets/assets/dist/js/dashboard.js" type="text/javascript"></script>
        <!-- End Theme label Script
        =====================================================================-->
        <script src="<?php echo base_url() ?>assets/assets/plugins/datatables/dataTables.min.js" type="text/javascript"></script>
        <script type="text/javascript">
 $(document).ready(function() {
    $("body").on("click",".add-more",function(){
        var html = $(".after-add-more").first().clone();

          $(html).find(".change").html("<a class='btn btn-danger remove'><i class='fa fa-trash-o' aria-hidden='true'></i> </a> "+' <a class="btn btn-success add-more"><strong> + </strong> </a>');
        $(".after-add-more").last().after(html);
    });
    $("body").on("click",".remove",function(){
        $(this).parents(".after-add-more").remove();
    });
});
</script>
               <script>
            $(document).ready(function () {

                "use strict"; // Start of use strict

                $('#dataTableExample1').DataTable({
                    "dom": "<'row'<'col-sm-6'l><'col-sm-6'f>>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
                    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                    "iDisplayLength": 10
                });

                $("#dataTableExample2").DataTable({
                    dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
                    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                    "order": [[ 0, "desc" ]],
                    buttons: [
                        {extend: 'copy', className: 'btn-sm'},
                        {extend: 'csv', title: 'ExampleFile', className: 'btn-sm'},
                        {extend: 'excel', title: 'ExampleFile', className: 'btn-sm'},
                        {extend: 'pdf', title: 'ExampleFile', className: 'btn-sm'},
                        {extend: 'print', className: 'btn-sm'}
                    ]
                });

            });

        </script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.6/jquery.jgrowl.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.6/jquery.jgrowl.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.6/jquery.jgrowl.min.css" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.6/jquery.jgrowl.min.js"></script>

<script>
<?php 
if ($this->session->flashdata('is_popup')) {
?>
$.jGrowl("<?php echo $this->session->flashdata('message'); ?>", {
sticky: false,
position: 'top-right',
theme: 'bg-green'
});
<?php 
}
?>
//success massage when form submit

//success massage when form submit
</script>


<?php
          $months=["January", "February", "March", "April", "May", "June", "July","August","September","October","November","December"];

         foreach ($months as $month) {
            $response_process[]=$this->db->get_where('sell_product',['month'=>$month])->num_rows();
                 }
?>

			   <script>
			$(document).ready(function () {
				"use strict"; // Start of use strict
				//bar chart
				var ctx = document.getElementById("barChart");
				var myChart = new Chart(ctx, {
					type: 'bar',
					data: {
						labels: <?= json_encode($months);?>,
						datasets: [
							{
								label: "Sales",
								data: <?= json_encode($response_process); ?>,
								borderColor: "rgba(85, 139, 47, 0.9)",
								borderWidth: "0",
								backgroundColor: "rgba(85, 139, 47, 0.5)"
							}
						]
					},
					options: {
						scales: {
							yAxes: [{
									ticks: {
										beginAtZero: true
									}
								}]
						}
					}
				});
				//line chart
				var ctx = document.getElementById("lineChart");
				var myChart = new Chart(ctx, {
					type: 'line',
					data: {
						labels: <?= json_encode($months); ?>,
						datasets: [
							{
								label: "Sales",
								borderColor: "rgba(0,0,0,.09)",
								borderWidth: "1",
								backgroundColor: "rgba(0,0,0,.07)",
								data: <?= json_encode($response_process); ?>
							}
						]
					},
					options: {
						responsive: true,
						tooltips: {
							mode: 'index',
							intersect: false
						},
						hover: {
							mode: 'nearest',
							intersect: true
						}

					}
				});

			
<?php
$months=["January", "February", "March", "April", "May", "June", "July","August","September","October","November","December"];

		 foreach ($months as $month) {
            $response_process[]=$this->db->get_where('sell_product',['month'=>$month])->num_rows();
                 }

?>
				var ctx = document.getElementById("polarChart");
				var myChart = new Chart(ctx, {
					type: 'polarArea',
					data: {
						datasets: [{
								data: [<?= $response_process ?>],
								backgroundColor: [
									"rgba(0,0,0,.07)",
									"rgba(0,0,0,.15)",
									"rgba(85, 139, 47, 0.7)"
								]

							}],
						labels: [
							"Sales",

						]
					},
					options: {
						responsive: true
					}
				});

				


			});
		</script>
       

<script type="text/javascript">

  $('.fa.fa-trash').click(function() {
      return confirm("Are you sure ?");
  });

  $('.categoryID').change(function(){
           var categoryID=$(this).val();
           $.ajax({
            url:"<?php echo base_url() ?>admin/get_subcategories",
            type:"post",
            data:{categoryID:categoryID},
            success:function(resp) {
               $('.subCategoryID').html(resp);
            }
           });
  });
        </script>
       

 
<script type="text/javascript">
// $(document).on('keyup', '.sum,.minus', function() { 
//     var total = 0;
//     $('.sum').each(function() {
//         if($(this).val() != null && $(this).val() != ''){
//             total = total + parseInt($(this).val())
//         }
//         else{
//             total = total + 0
//         }
//     })
//     if($('.minus').val() != null && $('.minus').val() != ''){
//         total = total - parseInt($('.minus').val())
//     }
//     $('#result').val(total);
// })


          
</script>




<script>

$('[name="past_experience"]').change(function() {
   var id = $(this).val()
   $('.change-type').hide()
   $('.type-'+id).show()
  })


</script>




    </body>

<!-- Mirrored from adminpage.thememinister.com/preview_page/theme/AdminPage_black_v1.0/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jul 2017 06:37:12 GMT -->
</html>



