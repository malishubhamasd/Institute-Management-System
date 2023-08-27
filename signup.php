<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">      
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

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
<div class= "container-fluid bg-fluid">
	<a class="navbar-brand " href="#"><span class="text-info"><i class="fa-solid fa-graduation-cap" style="color: #a8b5cc;"></i> Grey Hat</span>&nbsp;Institute</a>
	
	
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="toggle navigation" >
       <span class="navbar-toggler-icon"></span>
         </button>
	
	<div class="collapse navbar-collapse" id="navbarContent">

     <ul class="navbar-nav  ms-auto p-2 mb-4 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-uppercase fs-5" aria-current="page" href="Home_Page_01.php">Home</a>
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
	<div class="container-fluid" >
		<div class="row ">
			
            <div class="col-lg-6 col-md-6 d-none d-md-block infinity-image-container"></div>

			<div class="col-lg-6 col-md-4 infinity-form-container" style="background: #31335d;">					
				<div class="col-lg-9 col-md-12 col-sm-8 col-xs-12 infinity-form">
				
					<div class="text-center mb-3 mt-5">
						<h1>Sign-up Here</h1>
					</div>
					<div class="text-center mb-4">
				    <h4>Create an account</h4>
				  </div>
					
					<form class="px-3" method="post" action="signup.php">
						
						<div class="form-input">
							<span><i class="fa fa-user-o"></i></span>
							<input type="fullname" name="fname"  id="fname" placeholder="Full Name"  >
						</div>

						<div class="form-input">
							<span><i class="fa fa-envelope-o"></i></span>
							<input type="text" name="email" id="email" placeholder="abcd@mail.com" >
						</div>

						<div class="form-input">
							<span><i class="fa fa-user-o"></i></span>
							<input type="username" name="uname" id="uname" placeholder="username" >
						</div>

						<div class="form-input" class="mb-20">
							<span class="mt-0.5"><i class="fa fa-lock"></i></span>
							<input type="password" name="password" id="password" placeholder="New Password">
							<span id="show-password" class="fa fa-eye show-password" onclick="togglePassword()"></span>
							</div>
							<style>
							.show-password {
							position: absolute;
							top: 85%;
							right: 4px;
							cursor: pointer;
							}
							</style>
						<div class="form-input">
							<span><i class="fa fa-phone"></i></span>
							<input type="mobnumber" name="mnumber" id="mnumber" placeholder="Mobileno.">
						</div>
					
				    <div class="mb-3"> 
							<button type="submit" name="submit" onclick="run()" class="btn btn-block" id="signup-button">signup</button>
						</div>
						<div class="text-center mb-2">
		         	<div class="text-center mb-2 text-white">or register with</div>
		          
		          <a href="" class="btn btn-social btn-facebook">facebook</a>

		         	<a href="" class="btn btn-social btn-google">google</a>

							<a href="" class="btn btn-social btn-twitter">twitter</a>
						</div>
						<div class="text-center mb-5 text-white">Already have an account?
							<a class="login-link" href="login.php">Login here</a>
		       	</div>
					</form>
				</div>
			</div>
			
		</div>
	</div>	
	   <?php

		$serverName = "localhost";
		$userName = "root";
		$password = "";
		$database = "ims";

		
		if(isset($_POST["submit"]))
		 {
		
			$connection = mysqli_connect($serverName,$userName,$password,$database);
			$fname = $_POST['fname'];
		 	 $email = $_POST['email'];
		 	 $uname = $_POST['uname'];
		 	 $password = $_POST['password'];
			 $mnumber = $_POST['mnumber'];
		 
		 
		 try{
             $query = "INSERT INTO `signup` (`fname`, `email`, `uname`, `password`, `mobnumber`) VALUES ('$fname','$email','$uname','$password', '$mnumber')";
			 //$query= "INSERT INTO `signup`(`fname`, `email`, `uname`, `password`, `mnumber`) VALUES ('tushar','tushar@gmail.com','tushar@6565','dsfud@3344', '5463242332')";
			 
			 $result = mysqli_query($connection,$query);

			 
			 echo "<script type='text/javascript'>
			 alert('Successfully Sign-up');
                location = 'login.php';
               </script>";
   		    }
	
   			catch(Exception $e)
			{
					echo "<script>alert('Username already exist Please select another one.');
								  event.preventDefault();
					   </script>";

   			 }

			
}
?>   

<script type="text/javascript">
	function run(){
	var namestring = /(^[A-Za-z' ]{1,25})$/; 
    var name = document.getElementById("fname").value;
                   if(name == "")
                   {
					   alert("Enter Name") 
                       event.preventDefault()
                       return false;
                   }
				   else if(!name.match(namestring)){
					  
					   alert("Name contains only characters") 
                       event.preventDefault()
                       return false;
					}
	var email = document.getElementById("email").value
                   if(email == "")
                   {
                       alert("Enter Email");
                       event.preventDefault()
                       return false;
                   }
				   else if(!email.includes("@") || !email.includes("gmail.com"))
				   {
                       alert("Email must contains '@' symbol & 'gmail.com' ");
                       event.preventDefault()
                       return false;
                   }
	var usname = document.getElementById("uname").value
                   if(usname == "")
                   {
                       alert("Enter username");
                       event.preventDefault()
                       return false;
	               }
	var pass = document.getElementById("password").value
                   if(pass == "")
                   {
                       alert("Enter password");
                       event.preventDefault()
                       return false;
	               }
				   if(pass.includes('@') || pass.includes('*') || pass.includes('#'))
                   {

                   }
                   else
                   {
                       alert("Please Insert Atleast One Symbol In Your Password = @ , * , #")
                       event.preventDefault()
                       return false
                   }

				   var mobilePattern = /(^[6-9]{1}[0-9]{9})$/
                   var monumber = document.getElementById("mnumber").value;
                   if( monumber == "")
                   {
           	           alert("Enter Mobile Number")
                       event.preventDefault()
           	           return false;
                   }
                   else if(!monumber.match(mobilePattern))
                   {
                       alert("Only 10 Digit Number & Mobile Number Must start From 6 to 9")
                       event.preventDefault()
           	           return false;
                   }			   
	}		      		   
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
</body>
</html>
