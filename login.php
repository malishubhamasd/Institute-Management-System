<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=">
	<link href="style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">        
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script>
		
	function run(){ 
	
	var username = document.getElementById("uname").value
                   if(username == "")
                   {
                       alert("Enter Username");
                       event.preventDefault()
                       return false;
	               }
	var password = document.getElementById("password").value
                   if(password == "")
                   {
                       alert("Enter password");
                       event.preventDefault()
                       return false;
	               }
				   
        
}
</script>
<script>
	function togglePassword() {
		var password = document.getElementById("password");
		var icon = document.getElementById("show-password");
		
		if (password.type === "password") {
			password.type = "text";
			icon.classList.remove("fa-eye");
			icon.classList.add("fa-eye-slash");
		} else {
			password.type = "password";
			icon.classList.remove("fa-eye-slash");
			icon.classList.add("fa-eye");
		}
	}
</script>

<style>
      .show-password {
        position: absolute;
        top: 85%;
        right: 4px;
        cursor: pointer;
       }                    
 </style>
<style>
	*{
		padding:0;
        margin:0;
        box-sizing: border-box;
    }
	body{
        
		background-color:#ebebe0;
	}
      <!-- navbarsection -->  

     .nav-item{
            color:black;
		    font-size:15px;
		    text-transform: uppercase;
		    font-weight:500;
	}
	.navbar-light .navbar-brand:focus,
	.navbar-light .navbar-brand:hover{

		color:#000;	
	}
	
	.navbar-light .navbar-nav .navbar-link{
   
		   color:#000;
		
	}

  
	.navbar-light .navbar-brand{
    text-transform: uppercase;
		  color: #000;
      font-size: 25px;
      font-weight:700;
      
		
	}
  
  <!----slider--->
    

  

    <!----feedbackpage---->
   
   
	.card-title h5{
		color:black;
	}
	.img-fluid{
		padding-top: 2rem;
	}
	
	
</style>
</head>
<body>

<nav class="navbar navbar-expand-lg   navbar-light bg-light" >
<div class= "container-fluid ">
	<a class="navbar-brand " href="#"><span class="text-info"><i class="fa-solid fa-graduation-cap" style="color: #a8b5cc;"></i> Grey Hat</span>&nbsp;Institute</a>
	
	
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="toggle navigation" >
       <span class="navbar-toggler-icon"></span>
         </button>
	
	<div class="collapse navbar-collapse" id="navbarContent">

     <ul class="navbar-nav  ms-auto p-2 mb-4 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-uppercase fs-5" aria-curr ent="page" href="Home_Page_01.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-uppercase fs-5" href="#about">About Us</a>
        </li>
		   <li class="nav-item">
          <a class="nav-link text-uppercase fs-5" href="admission.php">Admission</a>
        </li>
		  
		   <li class="nav-item">
          <a class="nav-link text-uppercase fs-5 " href="courses1.php">Courses</a>
        </li>
		   <li class="nav-item">
          <a class="nav-link text-uppercase fs-5" href="login.php">Login</a>
        </li>
		    <li class="nav-item">
          <a class="nav-link text-uppercase fs-5" href="contact.php">Contact us</a>
        </li>
		   <li class="nav-item">
          <a class="nav-link text-uppercase fs-5" href="feedback-1.php">Feedback</a>
        </li>   
	</ul>
	</div>
	</div>
		</nav>
   
	<div class="container-fluid">
		<div class="row ">
	
			<div class="col-lg-6 col-md-4 d-none d-md-block infinity-image-container"></div>
			<div class="col-lg-6 col-md-6 infinity-form-container" style="background: #31335d;">				
				<div class="col-lg-9 col-md-12 col-sm-9 col-xs-12 infinity-form">
					
					<div class="text-center mb-3 mt-2">
				      <h1>Login Here</h1>
					</div>
					<div class="text-center mb-4">
			      <h4>Courage is like a muscle. We strengthen it by use. Please Sign-up Your-self</h4>
			    </div>
			    
					<form class="px-3" method="post" action="login.php" >
						
						<div class="form-input">
							<span><i class="fa fa-user-o"></i></span>
							<input type="text" name="uname" id="uname" placeholder="username">
						</div>

            <div class="form-input" class="mb-20">
              <span class="mt-0.5"><i class="fa fa-lock"></i></span>
              <input type="password" name="password" id="password" placeholder=" Password">
              <span id="show-password" class="fa fa-eye show-password" onclick="togglePassword()"></span>
            </div>
           
						 
						<div class="row mb-3">
				
			        <div class="col-auto d-flex align-items-center">
			          <div class="custom-control custom-checkbox">
			            <input type="checkbox" class="custom-control-input" id="cb1">
			           	<label class="custom-control-label text-white" for="cb1">Remember me</label>
			          </div>
			        </div>
			 	    </div>
			 	
			      <div class="mb-3"> 
							<button type="submit" class="btn btn-block" onclick="run()" name="login" id="login-button">Login</button>
						</div>
						<div class="text-right ">
			        <a href="forgot.php" class="forget-link">Forgot password?</a>
			      </div>
						<div class="text-center mb-2">
		         	<div class="text-center mb-2 text-white">or login with</div>
		                    
		         	<a href="https://www.facebook.com/login/" class="btn btn-social btn-facebook">facebook</a>

							<a href="https://google/login" class="btn btn-social btn-google">google</a>

							<a href="https://twitter.com/" class="btn btn-social btn-twitter">twitter</a>
						</div>
						<div class="text-center mb-5 text-white">Don't have an account? 
							<a class="register-link" href="signup.php">Register here</a>
			     	</div>
					</form>
				</div>					
			</div>
			
		</div>
	</div>	

	<?php

                             $serverName = 'localhost';
                             $userName = 'root';
                             $password = '';
                             $database = 'ims';

                             $connection = mysqli_connect($serverName,$userName,$password,$database);

   	                        if(isset($_POST["login"]))
		                        {
		                             $name = $_POST['uname'];
			                         $email = $_POST['password'];
                                     $id = false;

                                     $query =  "SELECT sr, uname, password FROM signup"; 

                                     $result = mysqli_query($connection,$query);

                                     while($fetch = mysqli_fetch_assoc($result))
                                     {
                                         if($name == $fetch['uname'])
                                         {
                                             if($email == $fetch['password'])
                                             {
                                                $id = true;
                                                break;
                                             }
                                             else
                                             {
                                                  $id = false;
                                             }
                                         }
                                        else
                                        {
                                            $id = false;
                                        }
                                     }
            
                                     if($id)
                                     {
                                         if($fetch['sr'] == 13)
                                         {
                                              echo "<script type='text/javascript'>
                                                alert('Welcome Sir');
                                                alert('Successfully Login');

                                                location = 'Home_Page_02.php';

                                              </script>";
                                         }
                                         else
                                         {
                                          echo "<script type='text/javascript'>
                                                alert('Successfully Login');

                                                location = 'Home_Page_03._log_out.php';

                                              </script>";
                                            
                                         }
                                     }
           
                                     else
                                     {
                                         echo "<script type='text/javascript'>
                                                alert('Invalid Data');

                                                location = 'login.php';
                        
                                              </script>";
                                     }

                            }
  
                        ?>
</body>
</html>
