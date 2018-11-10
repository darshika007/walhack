<!DOCTYPE html>
<html>
<head>
	<!--Meta Tags -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
	<!-- Material Design Bootstrap -->
	<link rel="stylesheet" type="text/css" href="CSS/mdb.min.css">
	<title>SignUp</title>
	<style type="text/css">
	html,body{
	margin:0px;
	padding: 0px;
	}
	.col-sm-2{
	background-color: #2F4050;
	width: 100%;
	height: 100vh;
	padding:50px 0px;
	}
	.col-sm-2 h1{
		font-family: Roboto;
		font-size: 30px;
	}
	.col-sm-2 ul{
		display: block;
	}
	.col-sm-2 ul li{
		padding: 10px;
	}
	.col-sm-2 ul li a{
		color: #9FB1C2;
		font-size: 16px;
		font-family: Poppins;
	}
	.col-sm-2 ul li a:hover{
		color: #FFFFFF;
		background-color: #1AB394;
		font-weight: bold;
		display: block;
		transform: scale(1.2);
	}
	.col-sm-2 ul .active a{
		color: #FFFFFF;
		background-color: #27AAE1;
		font-weight: bolder;
	}
	.col-sm-10{
		padding: 50px;
		background-color: #D7D7DF;
	}
	#but_add{
		transform: translateX(250px);
	}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-2 col-md-2">
				<h1 class="text-uppercase font-weight-bold text-white">Dashboard</h1>
				<hr class="white">
				<ul class="nav nav-pills nav-stacked md-pills" id="main">
					<li class="list-item"><a href="ad_dashboard.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-home"></span></i>DASHBOARD</a>
					</li>
					<li class="list-item active"><a href="rsvp.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-sign-in-alt">&nbsp;</span></i>Applicants</a>
					</li>
					<li class="list-item"><a href="agenda.php" class="text-uppercase font-weight-bold"><spam><i class="fas fa-edit"></i>&nbsp;</span>Agenda</a>
					</li>
					<li class="list-item"><a href="judges.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-layer-group"></i>&nbsp;</span>Judges</a>
					</li>
					<li class="list-item"><a href="prize.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-award"></i>&nbsp;</span>Prizes</a>
					</li>
					<li class="list-item"><a href="rules.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-star"></i>&nbsp;</span> Rules</a>
					</li>
					<li class="list-item"><a href="query.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-question-circle"></i>&nbsp;</span>Queries</a>
					</li>
					<li class="list-item"><a href="sponsors.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-user-tie"></i>&nbsp;</span>Sponsors</a>
					</li>
					<li class="list-item"><a href="problem.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-code"></i>&nbsp;</span> Problem Statement</a>
					</li>
					<li class="list-item"><a href="mentors.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-code"></i>&nbsp;</span>Mentors and Speakers</a>
					</li>
					<li class="list-item"><a href="logout.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-sign-out-alt"></i>&nbsp;</span> Logout</a>
					</li>
				</ul>
			</div>
				<div class="col-sm-10">
	    			<table class="table table-hover table-responsive table-striped table-bordered table-dark" id="makeEditable">
	     				<thead class="font-weight-bold text-center">
	      					<tr>
	        				<th>ID</th>
	        				<th>Name</th>
	        				<th>Contact No</th>
	        				<th>Email id</th>
	        				<th>Age</th>
	        				<th>Gender</th>
	        				<th>Date</th>
	        				<th>Address</th>
									<th>EDIT</th>
									<th>DELETE</th>
	      					</tr>
	    				</thead>
	    				<tbody>
	      					<tr>
	        				<td>1</td>
	        				<td>Sahil</td>
	        				<td>7756022308</td>
	        				<td>abc@gmail.com</td>
	        				<td>22</td>
	        				<td>Male</td>
	        				<td>5th November</td>
	        				<td>Bangalore</td>
									<td><a href="#" class="btn btn-success btn-sm font-weight-bold text-uppercase">Edit</a></td>
									<td><a href="#" class="btn btn-danger btn-sm font-weight-bold text-uppercase">Delete</a></td>
	      					</tr>
	    				</tbody>
	  				</table>
	  			</div>
		</div>
	</div>
	<!-- jQuery --->
	<script type="text/javascript" src="JS/jquery-3.3.1.min.js"></script>
	<!-- Popper JS --->
	<script type="text/javascript" src="JS/popper.min.js"></script>
	<!-- Bootstrap Core JS --->
	<script type="text/javascript" src="JS/bootstrap.min.js"></script>
	<!-- MDB Core JS --->
	<script type="text/javascript" src="JS/mdb.min.js"></script>

</body>
</html>
