<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Managment System</title>
    <link rel="icon" type="image" href="img/logosss.png">
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap" rel="stylesheet">
    <link href='https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
    <link href='https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css' rel='stylesheet' type='text/css'>

    <style type="text/css">
        .dt-buttons{
         width: 100%;
         }
    </style>

    <!-- jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        
    <!-- Datatable JS -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&family=Cinzel:wght@500&family=Metal+Mania&family=UnifrakturCook&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/index-login.css">
</head>
<body>
	<div class="container-fluid login">
		<div class="row">
			<div class="col-12 title">
				<h2><span class="fas fa-school" style="color: #FF1E1E;"></span> <span class="pl-2">All Panel In University of Calcutta</span></h2>
			</div>
		</div>
		<div class="container">
			<div class="row mt-3">
				<div class="col-12 col-md-4">
					<div class="admin">
						<div class="admin-left">
							<h4 class="text-center">University Of Calcutta</h4>
							<img src="img/collage.png" alt="..." height="140px" width="190px">
						</div>
						<div class="admin-right">
							<h5>SIGN IN</h5>
							<h3>Admin Panel</h3>
							<a href="admin-login.php.">Continue</a>
						</div>
					</div>
				</div>

				<div class="col-12 col-md-4">
					<div class="admin">
						<div class="admin-left" style="background: #47B5FF;">
							<h4 class="text-center">University Of Calcutta</h4>
							<img src="img/collage.png" alt="..." height="140px" width="190px">
						</div>
						<div class="admin-right">
							<h5>SIGN IN</h5>
							<h3>Student Panel</h3>
							<a href="student-login.php" style="background:#47B5FF;">Continue</a>
						</div>
					</div>
				</div>

				<div class="col-12 col-md-4">
					<div class="admin">
						<div class="admin-left" style="background: #3CCF4E;">
							<h4 class="text-center">University Of Calcutta</h4>
							<img src="img/collage.png" alt="..." height="140px" width="190px">
						</div>
						<div class="admin-right">
							<h5>SIGN IN</h5>
							<h3>Teacher Panel</h3>
							<a href="teacher-login.php" style="background:#3CCF4E;">Continue</a>
						</div>
					</div>
				</div>				
			</div>

			<div class="row mt-4">
				<div class="col-12 col-md-4">
					<div class="admin">
						<div class="admin-left" style="background: #F49D1A;">
							<h4 class="text-center">University Of Calcutta</h4>
							<img src="img/collage.png" alt="..." height="140px" width="190px">
						</div>
						<div class="admin-right">
							<h5>SIGN IN</h5>
							<h3>Staff Panel</h3>
							<a href="staff-login.php" style="background:#F49D1A;">Continue</a>
						</div>
					</div>
				</div>

				<div class="col-12 col-md-4">
					<div class="admin">
						<div class="admin-left" style="background: #21E1E1;">
							<h4 class="text-center">University Of Calcutta</h4>
							<img src="img/collage.png" alt="..." height="140px" width="190px">
						</div>
						<div class="admin-right">
							<h5>SIGN IN</h5>
							<h3>Course Panel</h3>
							<a href="course-login.php" style="background:#21E1E1;">Continue</a>
						</div>
					</div>
				</div>

				<div class="col-12 col-md-4">
					<div class="admin">
						<div class="admin-left" style="background: #8D72E1;">
							<h4 class="text-center">University Of Calcutta</h4>
							<img src="img/collage.png" alt="..." height="140px" width="190px">
						</div>
						<div class="admin-right">
							<h5>SIGN IN</h5>
							<h3>Syllabus Panel</h3>
							<a href="syllabus-login.php" style="background:#8D72E1;">Continue</a>
						</div>
					</div>
				</div>						
			</div>

			<div class="row mt-4">
				<div class="col-12 col-md-4">
					<div class="admin">
						<div class="admin-left" style="background: #00FFAB;">
							<h4 class="text-center">University Of Calcutta</h4>
							<img src="img/collage.png" alt="..." height="140px" width="190px">
						</div>
						<div class="admin-right">
							<h5>SIGN IN</h5>
							<h3>Library Panel</h3>
							<a href="library-login.php" style="background:#00FFAB;">Continue</a>
						</div>
					</div>
				</div>

				<div class="col-12 col-md-4">
					<div class="admin">
						<div class="admin-left" style="background: #EAE509;">
							<h4 class="text-center">University Of Calcutta</h4>
							<img src="img/collage.png" alt="..." height="140px" width="190px">
						</div>
						<div class="admin-right">
							<h5>SIGN IN</h5>
							<h3>Hostel Panel</h3>
							<a href="hostel-login.php" style="background:#EAE509;">Continue</a>
						</div>
					</div>
				</div>

				<div class="col-12 col-md-4">
					<div class="admin">
						<div class="admin-left" style="background: #92A9BD;">
							<h4 class="text-center">University Of Calcutta</h4>
							<img src="img/collage.png" alt="..." height="140px" width="190px">
						</div>
						<div class="admin-right">
							<h5>SIGN IN</h5>
							<h3>Transport Panel</h3>
							<a href="transport-login.php" style="background:#92A9BD;">Continue</a>
						</div>
					</div>
				</div>					
			</div>

			<div class="row mt-4">
				<div class="col-12 col-md-4">
					<div class="admin">
						<div class="admin-left" style="background: #FF0063;">
							<h4 class="text-center">University Of Calcutta</h4>
							<img src="img/collage.png" alt="..." height="140px" width="190px">
						</div>
						<div class="admin-right">
							<h5>SIGN IN</h5>
							<h3>Account Panel</h3>
							<a href="account-login.php" style="background:#FF0063;">Continue</a>
						</div>
					</div>
				</div>				
			</div>
		</div>
	</div>
</body>
</html>