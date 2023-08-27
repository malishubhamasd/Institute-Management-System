<!DOCTYPE html>
<html>
<head>
	<title>Reset</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- <link href="style1.css" rel="stylesheet" type="text/css"> -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">     
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	
  
<script>
	function run(){ 
		
	var namestring = /(^[A-Za-z' ]{1,25})$/; 
    var fullname = document.getElementById("fname").value;
                   if(fullname == "")
                   {
					   alert("Name field is Mandatory here...\nPlease Enter your Full Name") 
                       event.preventDefault()
                       return false;
                   }
				   else if(!fullname.match(namestring)){
					  
					   alert("Name contains only characters") 
                       event.preventDefault()
                       return false;
                     }
		
	
                  
    var pass = document.getElementById('password').value
               if(pass == "")
               {
                   alert("Please Enter New Password")
                   event.preventDefault()
                   return false
               }
               else
               {
                   if(pass.includes('@') || pass.includes('*') || pass.includes('#'))
                   {

                   }
                   else
                   {
                       alert("Please Insert Atleast One Symbol In Your Password = @ , * , #")
                       event.preventDefault()
                       return false
                   }
			
				   
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
	
	.container-fluid{
    background-color: white;
}

.infinity-image-container{
    background:url("s12.jpg");
    background-repeat: no-repeat;
    background-size:cover;
    opacity: 0.9;
    height: 100vh;
    width:30px;
}
h2{
    
    color:rgb(53, 90, 202);
}

.infinity-form-container{
    background:white;
    display:flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.infinity-form{
    display: flex;
    flex-direction: column;
    justify-content: center;
    min-height: 100vh;
}

.infinity-form h4 {
    font-weight: bold;
    color: white;
}

.infinity-form .form-input {
    position: relative;
}

#pass{
    margin-top:px;
   
}
.infinity-form .form-input input {
    width: 100%;
    margin-top: 16px;
    height: 40px;
    border: none;
    border-radius: 5px;
    outline: none;
    background:white;
    padding-left: 45px;
}

.infinity-form .form-input span {
    position:absolute;
    top: 8px;
    padding-left: 20px;
    color: #777;
}


.password-toggle-icon {
    position: absolute;
    top: 85%;
    right: 10px;
    transform: translateY(-15%);
    cursor: pointer;
  }
  
  .password-toggle-icon i {
    font-size: 16px;
  }
  
.infinity-form .form-input input:focus,
.infinity-form .form-input input:valid {
    border: 2px solid #4285f4;   
}

.infinity-form input[type="checkbox"]:not(:checked) + label:before{
    background: transparent;
    border:2px solid white;
    width: 15px;
    height: 15px;
}

.infinity-form .custom-checkbox .custom-control-input:checked ~ .custom-control-label::before {
  background-color: #4285f4 !important;
  border:0px;
}

.infinity-form button[type="submit"] {
    margin-top: 10px;
    border: none;
    cursor: pointer;
    border-radius: 20px;
    background: linear-gradient(45deg, #4285f4, #709de8);   
    color: #fff;
    font-weight: bold;
    transition: 0.5s;
}

.infinity-form button[type="submit"]:hover {
    background: linear-gradient(45deg, #709de8, #4285f4);  
}

.forget-link , .login-link , .register-link {
    color: #fff;
    font-weight: bold;
}

.forget-link:hover , .login-link:hover , .register-link:hover {
    color: #4285f4;
    text-decoration: none;
}

.infinity-form .btn-social {
    color: white;
    border: 0;
    display: inline-block;
    margin: 0px;
    margin-right: 10px;
    font-weight: bold;
    padding: 0px;
    margin-bottom: 10px;
}

	
</style>

</head>
<body>

<nav class="navbar navbar-expand-lg  navbar-light bg-light" >
            <div class= "container-fluid">
	            <a class="navbar-brand " href="#"><span class="text-info"><i class="fa-solid fa-graduation-cap" style="color: #a8b5cc;"></i> Grey Hat</span>&nbsp;Institute</a>
              
                 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="toggle navigation" >
                   <span class="navbar-toggler-icon"></span>
                     </button>
	
	            <div class="collapse navbar-collapse" id="navbarContent">

                 <ul class="navbar-nav  ms-auto p-2 mb-4 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active text-uppercase fs-5" aria-curr    ent="page" href="Home_Page_01.php">Home</a>
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
		<div class="row">
			
			<div class="col-lg-6 col-md-6 d-none d-md-block infinity-image-container"></div>

			<div class="col-lg-6 col-md-6 col-sm-auto infinity-form-container">
				<div class="col-lg-8 col-md-12 col-sm-auto col-xs-12 infinity-form">
					<div class="text-center col-sm-auto">
						<h2 align="left">Forgot password</h2>
					</div>
        	<div class="reset-form d-block">

				    <form class="reset-password-form px-3" method="post" action="forgot.php">
				      <h4 class="mb-3">Reset Your password</h4>
				  		<p class="mb-3 text-black">
				        Please enter your Fullname and we will send you a password reset link.
				      </p>

					  <div class="form-input">
								<span class="mt-3"><i class="fa fa-user-o"></i></span>
								<input type="fullname" name="name" id="fname" placeholder="Full Name" >
							</div><br>

							<div class="form-input" id="user">
							<span><i class="fa fa-user-o"></i></span>
							<input type="username" class="form-control" name="userN" id="uname" placeholder="User Name" >
							<p style = "font-size:12px; margin-top:2px;" class="text-black">
							If you know your Username leave above box Empty.</p>
						     </div>

				
							<div class="form-input" class="mb-20">
								<span class="mt-3"><i class="fa fa-lock"></i></span>
								<input type="password" name="pass" id="password" placeholder=" New Password">
                <span id="show-password" class="fa fa-eye show-password mt-3" onclick="togglePassword()"></span>
								<p style = "font-size:12px; margin-top:1px;" class="text-black" width="10px">If you know your password leave above box Empty.</p>
						</div>
            <style>
              .show-password {
              position: absolute;
              top: 2px;
              right: 4px;
              cursor: pointer;
            }
            </style>
				

				      <div class="mb-3"> 
								<button type="submit" onclick="run()" name="click" class="btn">Submit</button>
							</div>
				    </form>
				  </div>
			</div>
	</div>

	<?php
          if(isset($_POST['click']))
          {
              $server = "localhost";
              $id = "root";
              $password = "";
              $database = "ims";

              $conn = mysqli_connect($server,$id,$password,$database);

              $name = $_POST['name'];
              $userN = $_POST['userN'];
              $pass = $_POST['pass'];

              $query = "SELECT fname,uname,password FROM signup";

              $result = mysqli_query($conn,$query);

              $tushar = false;

              

              while($fetch = mysqli_fetch_assoc($result))
              {
                  
                  $db_fname = $fetch['fname'];
                  $db_uname = $fetch['uname'];
                  $db_pass = $fetch['password'];
                  
                  if($name == $db_fname)
                  {
                      $tushar = true;
                      break;
                  }
              }
              
             
                      if($tushar)
                      {
                          if($userN == "")
                          {

                          }
                          try
                          {
                                  if(strlen($userN) > 0 )
                                  {
                                      $query1 = "UPDATE signup SET uname = '$userN' WHERE  fname = '$name'";
                                      $conn = mysqli_connect($server,$id,$password,$database);
                                      $result1 = mysqli_query($conn,$query1);
                                      if($result1)
                                      {
                                            echo "<script type='text/javascript'>
                                                  alert('User Name Is Updated Successfully...');
                                                  </script>";
                                      }
                                  }
                  
                                  $query2 = "UPDATE signup SET password = '$pass' WHERE  fname = '$name'";
                                  $conn = mysqli_connect($server,$id,$password,$database);
                                  $result2 = mysqli_query($conn,$query2);
                                  if($result2)
                                  {
                                       echo "<script type='text/javascript'>
                                              alert('Password Is Updated Successfully...');
                                              location = 'login.php';
                                             </script>";
                                  }
                          }
                          catch(Exception $e)
                          {
                                echo "<script>alert('Given User Name Is Already Exist Please Choose Any Other One');
                                      location = 'forgot.php';
                                     </script>";
                          }
                      }
                      else
                      {
                           echo "<script type='text/javascript'>
                                 alert('Your Name Is Not Exist');
                                 location = 'forgot.php';
                                 </script>";
                      }
              
          } 
                     
?>
</body>
</html>