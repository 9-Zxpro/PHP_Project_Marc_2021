<?php
    $title="Dashboard";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'assets/includes/headerlink.php'; ?>
</head>
<body>
    <?php include 'assets/includes/header.php'; ?>
    <?php  include 'assets/includes/aisdebar.php'; ?>

    
  <main id="main" class="main">

                <div class="pagetitle">
                <h1>Dashboard</h1>
                <nav>
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </nav>
                </div><!-- End Page Title -->


                <!--   =========================== Content Start from here =====================  -->



<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				View Salary
			</div>
			<div class="card-body">
				<form method="post">
				<label class="form-label">Select Month And Year</label>
				<input type="month" class="form-control" name="month" required />
				<input type="submit" class="btn btn-primary mt-3" name="btnsal"/>
				</form>
			</div>
			<div class="card-footer">
			<?php
				if(isset($_POST['btnsal']))
				{
					$m=$_POST['month'];
					$mss=$m."-01";
					$mse=$m."-31";
					
					$q="select * from tbl_attendance where dtime>='$mss' and dtime<='$mse' and empid='$empid'";
					//echo $q;
					$rescal=mysqli_query($con,$q);
					$rowp=mysqli_num_rows($rescal);  // Present Days
					//echo $rowp;
					$qdep="select dep_id from tbl_employee where emp_id='$empid'";
					$resdep=mysqli_query($con,$qdep);
					$rowdep=mysqli_fetch_array($resdep);
					$depid=$rowdep['dep_id']; // department id 
					$qsal="select * from tbl_salary where dep_id='$depid'";
					$resqsal=mysqli_query($con,$qsal);
					$rowqsal=mysqli_fetch_array($resqsal);
					//echo $rowqsal['paygrade'];
					
						//echo $total_salary;
					
					
					$hra=($rowqsal['paygrade']*15)/100;
					//echo $hra;
					$da=($rowqsal['paygrade']*10)/100;
					
					
					$total_salary= ($rowqsal['paygrade']*$rowp)+$hra+$da;
					
					
					
					
					
			?>
			<div class="row container">
			<div class="col-md-6">
			
				<table class="table table-strip table-border" border="1">
					<thead>
						<tr class="text-center">
							<th colspan="2">Logo</th>
						</tr>
						<tr class="text-center">
							<th class="text-danger">Pay-Slip</th>
							<th><?php  echo $m; ?></th>
					
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>Working Days</th>
							<td><?php echo $rowp;  ?></td>
						</tr>
						<tr>
							<th>Pay-Grade</th>
							<td> &#x20B9; <?php  echo $rowqsal['paygrade']; ?></td>

						</tr>
						<tr>
							<th>HRA (15%)</th>
							<td> &#x20B9; <?php  echo $hra; ?></td>
						</tr>
						<tr>
							<th>DA (10%)</th>
							<td> &#x20B9; <?php  echo $da; ?></td>
						</tr>
						<tr>
							<th>Total Salary </th>
							<td>&#x20B9; <?php  echo $total_salary; ?></td>
						</tr>
					</tbody>
					
				</table>
			</div>
			</div>
			
			<?php
				}
			?>
			
			<button class="btn btn-danger" onclick="print()">Print Pay-Slip</button>
			</div>
		</div>
	</div>
</div>
























                















                <!--  =============================Content End here   ==========================    -->



                <?php include 'assets/includes/footer.php'; ?>
                <?php   include 'assets/includes/footerlink.php';  ?>
  </main>
</body>