<?php
	include("../server/connection.php");
	include '../set.php';
?>
<!DOCTYPE html>
<html>
<head>
	<?php include('../templates/head1.php');?>

</head>
<body>
	<div class="contain h-100">
		<?php 
			include('../sales/base.php');
		?>
		<div class="pr-1">
			<div>
				<h1 class="ml-4 pt-2" align="left">Sales Records</h1>
			</div>
			<div class="form-group row pl-5" id="input-daterange">
				<div class="col-md-4">
					<input type="text" name="start_date" id="start_date" class="form-control pr-5" placeholder="From Date" />
				</div>
				<div class="col-md-4 pr-5">
					<input type="text" name="end_date" id="end_date" class="form-control" placeholder="To Date" />
				</div>
				<input class="btn btn-info" type="button" id="filter" value="Filter"/>
			</div>
			<div class="table-responsive pl-5 pr-5">
			<table class="table table-bordered table-striped" id="sales_table" style="margin-top: -22px;">
				<thead>
					<tr>
						<th scope="col" class="column-text">Receipt No.</th>
						<th scope="col" class="column-text">Username</th>
						<th scope="col" class="column-text">Customer Name</th>
						<th scope="col" class="column-text">Quantity</th>
						<th scope="col" class="column-text">Value</th>
						<th scope="col" class="column-text">Date</th>

					</tr>
				</thead>
				<tbody>
					
				</tbody>				
			</table>
			</div>
		</div>
	</div>
	<script src="../bootstrap4/jquery/jquery.min.js"></script>
	<script src="../bootstrap4/jquery/datepicker.js"></script>
	<script src="../bootstrap4/js/jquery.dataTables.js"></script>
	<script src="../bootstrap4/js/dataTables.bootstrap4.min.js"></script>
	<script src="../bootstrap4/js/bootstrap.bundle.min.js"></script>
	<script src="../sales/javascript.js"></script>
</body>
</html>