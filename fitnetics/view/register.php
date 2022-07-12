<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="../css/font-awesome.min.css" rel="stylesheet"/>
	<title>Fitnetics Register</title>
</head>
<body>
	<div class="split-screen">

		<div class = "left">

			<section class = "copy">            
			</section>
		</div>  

		<hr>
		<div class ="right">
			<div class="col-md-12 sign-up">
				<p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

				<form method="POST" class="mx-1 mx-md-4" name="register_customer" action="../login/register-process.php">

					<div class="d-flex flex-row align-items-center mb-4">
						<i class="fa fa-user fa-lg me-3 fa-fw"></i>
						<div class="form-outline flex-fill mb-0">
							<label class="form-label" for="customer_name">Your Name</label>
							<input type="text" class="form-control" name="customer_name" placeholder="Enter your Fullname"/>
							
						</div>
					</div>

					<div class="d-flex flex-row align-items-center mb-4">
						<i class="fa fa-envelope fa-lg me-3 fa-fw"></i>
						<div class="form-outline flex-fill mb-0">
							<label class="form-label" for="customer_email">Your Email</label>
							<input type="email" class="form-control" name="customer_email" placeholder="Enter your Email"/>
							
						</div>
					</div>

					<div class="d-flex flex-row align-items-center mb-4">
						<i class="fa fa-lock fa-lg me-3 fa-fw"></i>
						<div class="form-outline flex-fill mb-0">
							<label class="form-label" for="customer_password">Password</label>
							<input type="password" class="form-control" name="customer_password" placeholder="Enter your Password"/>
							
						</div>
					</div>

					<div class="d-flex flex-row align-items-center mb-4">
						<i class="fa fa-phone fa-lg me-3 fa-fw"></i>
						<div class="form-outline flex-fill mb-0">
							<label class="form-label" for="customer_no">Enter your number</label>
							<input type="text" class="form-control" name="customer_no" placeholder="Enter your Phone Number"/>
							
						</div>
					</div>

					<div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
						<button type="submit" value="Register New Customer" name="regis" class="btn btn-primary btn-lg">Register</button>
					</div>

					<p class="text-center text-muted mt-5 mb-0">Already? Have an account? <a href="login.php"
						class="fw-bold text-body"><u>Login here</u></a></p>

						<p class="text-center text-muted mt-5 mb-0">Go home <a href="../index.php"
							class="fw-bold text-body"><u>Homepage</u></a></p>

						</form>
					</div>

				</div>
			</div>


		</body>
		</html>


		<style>
			h1{
				font-size: 2.25rem;
				font-weight: 700;
				color: black;
			}

			h2{
				font-size: 2.25rem;
				font-weight: 700;
			}

			.split-screen{
				display: flex;
			}

			.left{
				height: 200px;
			}
			.left, .right{
				display: flex;
				justify-content: center;
				align-items: center;
			}
			.left{
				background: url(../images/bg-01.jpg);
				background-size: cover;        
			}

		}
		.left .copy{
			color: white;
			text-align: center;
		}
		.left p {
			font-weight: 400;
		}

		@media screen and (min-width: 900px){
			.split-screen {
				flex-direction: row;
				height: 100vh;
			}
			.left,
			.right{
				display: flex;
				width: 50%;
				height: auto;
			}
		}



	</style>
