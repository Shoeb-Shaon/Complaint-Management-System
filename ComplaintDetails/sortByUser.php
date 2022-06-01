
<?php
// session_start();
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Statistics</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>
<?php include('header.php');?>

	<div class="wrapper">
		<div class="container">
			<div class="row">
      <?php include('sidebar.php');?>				
			<div class="span9">
					<div class="content">
	          <div class="module">
							<div class="module-head">
                <?php 
                  $param = $_GET['param']; 
                  $user = $_GET['user'];
                ?>
								<h2>Showing result for <?php echo "'".$param."'"; ?></h2>
              </div>
              <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>complaintNumber</th>
											<th>userId</th>
											<th>category</th>
											<th>complaintDetails</th>
											<th>status</th>
											<th>userName</th>
											<th>userEmail</th>
											<th>userPhone</th>
											<th>date</th>
										</tr>
									</thead>
									<tbody>

                    <?php 
                      $query=mysqli_query($bd, "select * from tblcomplaints where userName='$user' ");
                      while($row=mysqli_fetch_array($query))
                      {
                    ?>									
										<tr>
											<td><?php echo htmlentities($row['complaintNumber']);?></td>
                      <td><?php echo htmlentities($row['userId']);?></td>
                      <td><?php echo htmlentities($row['category']);?></td>
                      <td><?php echo htmlentities($row['complaintDetails']);?></td>
                      <td><?php echo htmlentities($row['status']);?></td>
                      <td><?php echo htmlentities($row['userName']);?></td>
                      <td><?php echo htmlentities($row['userEmail']);?></td>
                      <td><?php echo htmlentities($row['userPhone']);?></td>
                      <td><?php echo htmlentities($row['date']);?></td>
                      </tr>
										<?php } ?>	
                </table>
							</div>
						</div>						

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="scripts/datatables/jquery.dataTables.js"></script>
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>
</body>