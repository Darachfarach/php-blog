<?php 
	require_once("config/db.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
</head>
<body>
	<?php require_once("includes/header.php") ?>
	<div class="cover">
		
	</div>

	<!-- toopcats -->
	<div class="container">
		<div class="row justify-content-sm-between topcats">
			<div class="col-md-3  w-100  bg-dark text-light" style="background-image: url(images/allaboutlinux.png)">
				<div class="topcat" >
					<div class="topcat-title text-light">all about linux</div>
				</div>
			</div>
			<div class="col-md-3  w-100  bg-dark text-light" style="background-image: url(images/allaboutlinux.png)">
				<div class="topcat">
					<div class="topcat-title text-light">all about linux</div>
				</div>
			</div>
			<div class="col-md-3   w-100  bg-dark text-light" style="background-image: url(images/allaboutlinux.png)">
				<div class="topcat">
					<div class="topcat-title text-light">all about linux</div>
				</div>
			</div>
		</div>
		

		<div class="row mt-2 justify-content-center">
			<div class="col-md-9 ">
				<h1 class="text-dark">Popular News</h1>
				<div class="d-flex flex-column mt-4">
					<div class="row justify-content-sm-between">
						<div class="col-md-3">
							<img src="images/kali.png" width="100%">
						</div>
						<div class="news-texts col-md-9 pl-4">
							<h4><b>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</b>
							</h4>
							<div class="d-flex justify-content-between">
								<div class="text-secondary">
									<small>
										30 May
									</small>
								</div>
								<div class="text-secondary">
									<small>
										Darach
									</small>
								</div>
								<div class="text-secondary">
									<small>
										500 comment
									</small>
								</div>
							</div>
							<p>
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 ">
				<form class=" ">
					<div class="row w-100">
						
							
			      			<input class="form-control col-md-7" type="search" placeholder="Search" aria-label="Search">
						
			      			<button class="btn btn-outline-success col-md-5" type="submit">Search</button>
					</div>
			    </form>
							<div class="d-flex flex-column mt-4">
					<div class="row justify-content-sm-between">
						<div class="col-md-3">
							<img src="images/kali.png" width="100%">
						</div>
						<div class="side-texts col-md-9 pl-4">
							<h6><b>
								Lorem ipsum dolor sit amet, consectetur </b>
							</h6>
							<div class="d-flex justify-content-between">
								<div class="text-secondary">
									<small>
										30 May
									</small>
								</div>
								<div class="text-secondary">
									<small>
										Darach
									</small>
								</div>
								<div class="text-secondary">
									<small>
										500 comment
									</small>
								</div>
							</div>
							<p>
								tempor incididunt ut labore et dolore magna aliqua.
								
							</p>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<footer class="page-footer font-small bg-secondary mt-4 pt-4 ">
	  <div class="container text-center text-md-left">
	    <div class="row  justify-content-center">
	      <div class="col-md-6 mt-md-0 mt-3">
	        <h5 class="text-uppercase">Footer Content</h5>
	        <p>Here you can use rows and columns to organize your footer content.</p>
	      </div>
	      <hr class="clearfix w-100 d-md-none pb-3">
	      <div class="col-md-3 mb-md-0 mb-3">
	        <h5 class="text-uppercase">Links</h5>
	        <ul class="list-unstyled">
	          <li>
	            <a href="#!">Link 1</a>
	          </li>
	          <li>
	            <a href="#!">Link 2</a>
	          </li>
	          <li>
	            <a href="#!">Link 3</a>
	          </li>
	          <li>
	            <a href="#!">Link 4</a>
	          </li>
	        </ul>

	      </div>
	      <div class="col-md-3 mb-md-0 mb-3">
	        <h5 class="text-uppercase">Links</h5>
	        <ul class="list-unstyled">
	          <li>
	            <a href="#!">Link 1</a>
	          </li>
	          <li>
	            <a href="#!">Link 2</a>
	          </li>
	          <li>
	            <a href="#!">Link 3</a>
	          </li>
	          <li>
	            <a href="#!">Link 4</a>
	          </li>
	        </ul>
	      </div>
	    </div>
	  </div>
	  <div class="footer-copyright text-center py-3">© 2020 Copyright:
	    <a href="https://mdbootstrap.com/" class="text-light"> Darach</a>
	  </div>
	</footer>


	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>