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
								<h1>Mark Attendence</h1>
								<br>
								<ol class="breadcrumb">
									<li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
									<li><a href="#">Attendence</a></li>
									<li class="active">Mark Attendence</li>
								</ol>
							</div>
						</div> <!-- /. Content Header (Page header) -->
						<div class="row">
							<div class="col-sm-12">
								<div class="panel panel-bd ">
									<div class="panel-heading">
									</div>
									<div class="panel-body">
 <form id="generator">
        <label for="codeData">Data</label>
        <input type="text" id="codeData" name="codeData" size="50" placeholder="Enter a url or text" />
        <label for="codeSize"></label>
        <select id="codeSize"  type="hidden" name="codeSize">
            <option value="60" type="hidden" selected="selected"></option>
        </select>
        <button id="generate">generate</button>
    </form>
    <div id="image"></div>
	<div id="image"></div>
	</div>
								</div>
							</div>
						</div>
	<script type="text/javascript">
	$("#generate").click(function() {
    var data = $("#codeData").val();
    var size = $("#codeSize").val();
    if(data == "") {
        alert('please enter a url or text');
        return false;
    } else {
        if( $("#image").is(':empty')) {
            $("#image").append("<img src='http://chart.apis.google.com/chart?cht=qr&chl=" + data + "&chs=" + size + "' alt='qr' />");
            return false;
        } else {
            $("#image").html("");
            $("#image").append("<img src='http://chart.apis.google.com/chart?cht=qr&chl=" + data + "&chs=" + size + "' alt='qr' />");
            $("#link").append("<a href='http://chart.apis.google.com/chart?cht=qr&chl=" + data + "&chs=" + size + "'>Permalink</a>");
            return false;
        }
    }
});
</script>


