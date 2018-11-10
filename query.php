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
	<title>QUERIES</title>
	<style type="text/css">
	html,body{
	margin:0px;
	padding: 0px;
	}
	.left{
	background-color: #2F4050;
	width: 100%;
	height: 100vh;
	padding:50px 0px;
	}
	.left h1{
		font-family: Roboto;
		font-size: 30px;
	}
	.left ul{
		display: block;
	}
	.left ul li{
		padding: 10px;
	}
	.left ul li a{
		color: #9FB1C2;
		font-size: 16px;
		font-family: Poppins;
	}
	.left ul li a:hover{
		color: #FFFFFF;
		background-color: #1AB394;
		font-weight: bold;
		display: block;
		transform: scale(1.2);
	}
	.left ul .active a{
		color: #FFFFFF;
		background-color: #27AAE1;
		font-weight: bolder;
	}
	.card-footer button{
		background-color: #2BBBAD;
	}
	.center{
		padding: 20px;
		background-color: #D7D7DF;
	}
	.right{
		padding: 20px 10px;
	}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-2 col-md-2 left">
				<h1 class="text-uppercase font-weight-bold text-white">Dashboard</h1>
				<hr class="white">
				<ul class="nav nav-pills nav-stacked md-pills" id="main">
					<li class="list-item"><a href="signup.html" class="text-uppercase font-weight-bold"><span><i class="fas fa-sign-in-alt">&nbsp;</span></i>Applicants</a>
					</li>
					<li class="list-item"><a href="agenda.html" class="text-uppercase font-weight-bold"><spam><i class="fas fa-edit"></i>&nbsp;</span>Agenda</a>
					</li>
					<li class="list-item"><a href="judges.html" class="text-uppercase font-weight-bold"><span><i class="fas fa-layer-group"></i>&nbsp;</span>Judges</a>
					</li>
					<li class="list-item"><a href="prizes.html" class="text-uppercase font-weight-bold"><span><i class="fas fa-award"></i>&nbsp;</span>Prizes</a>
					</li>
					<li class="list-item"><a href="rules.html" class="text-uppercase font-weight-bold"><span><i class="fas fa-star"></i>&nbsp;</span> Rules</a>
					</li>
					<li class="list-item active"><a href="query.html" class="text-uppercase font-weight-bold"><span><i class="fas fa-question-circle"></i>&nbsp;</span>Queries</a>
					</li>
					<li class="list-item"><a href="sponsors.html" class="text-uppercase font-weight-bold"><span><i class="fas fa-user-tie"></i>&nbsp;</span>Sponsors</a>
					</li>
					<li class="list-item"><a href="problem.html" class="text-uppercase font-weight-bold"><span><i class="fas fa-code"></i>&nbsp;</span> Problem Statement</a>
					</li>
				</ul>
			</div>

			<div class="col-sm-7 col-md-7 right">
				<table class="table table-hover table-striped table-bordered table-responsive table-dark" id="makeEditable">
					<thead class="font-weight-bold text-center">
						<tr>
						<th><b>#Serial Number</th>
						<th><b>Query From</th>
						<th><b>Subject</th>
						<th><b>Question</th>
            <th><b>Answer</th>
            <th><b>Update Answer</th>
            <th><b>Enable FAQ</th>
						</tr>
					</thead>
					<tbody>
						<tr>
						<td>1</td>
						<td>Random</td>
						<td>Random</td>
						<td>Random</td>
            <td>Random</td>
            
            <td><a href="#"  class= "btn btn-sm text-center btn-success text-upppercase">UPDATE</a></td>
            <td><a href="#"  class= "btn btn-sm btn-danger text-center text-upppercase">FAQ</a></td>
						</tr>
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
	<!-- Bootstable JS --->
	<script type="text/javascript" src="JS/bootstable.js"></script>

</body>
</html>
