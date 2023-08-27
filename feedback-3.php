<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Feedback</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
           
    <script type="text/javascript">


     function Logout()
        {
            alert("Successfully Log Out...")
        }


              function parameter()
              {
                   var namestring = /(^[A-Za-z' ]{1,25})$/; 
                   var name = document.getElementById("exampleInputEmail1").value;
                   if(name == "")
                   {
                       alert("Enter Name") 
                       event.preventDefault()
                       return false;
                   }
                   else if(!name.match(namestring))
                   {
                   	   alert("Enter Only Character Data")
                       event.preventDefault()
                       return false;
                   }

                 
                   // Mobile number

                   var mobilePattern = /(^[6-9]{1}[0-9]{9})$/
                   var mnumber = document.getElementById("exampleInputPassword1").value;
                   if( mnumber == "")
                   {
           	           alert("Enter Mobile Number")
                       event.preventDefault()
           	           return false;
                   }
                   else if(!mnumber.match(mobilePattern))
                   {
                       alert("Only 10 Digit Number & Mobile Number Must start From 6 to 9")
                       event.preventDefault()
           	           return false;
                   }

                   //city

                   var city = document.getElementById("exampleInputCity1").value;
                   if(city == "")
                   {
                       alert("Enter City") 
                       event.preventDefault()
                       return false;
                   }
                   else if(!city.match(namestring))
                   {
                   	   alert("Enter Only Character Data")
                       event.preventDefault()
                       return false;
                   }


                   // Feedback Contain Only 250 Character 
                 
                  var message = document.getElementById("floatingTextarea2").value
                  if(message.length>0)
                  {
                      if(message.length>15){
                        if(message.length<250){

                        }else{
                            alert("Message can contain only 250 characters.")
                            event.preventDefault()
                      return false;
                        }

                      }else{
                        alert("Message should contain 15+ characters.")
                        event.preventDefault()
                      return false;
                      }
                  }else{
                    alert("Please fill the Message.")
                      event.preventDefault()
                      return false;
                  }

                  
                  
                   
                  
              }
            </script>

	<style type="text/css">
        body{
        
        
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

.col-md-6 {
    margin: 2%;
}
</style>
</head>

<body style="background-color: #ebebe0;">
<nav class="navbar navbar-expand-lg   navbar-light bg-light" >
<div class= "container-fluid">
	<a class="navbar-brand " href="#"><span class="text-info"><i class="fa-solid fa-graduation-cap" style="color: #a8b5cc;"></i> Grey Hat</span>&nbsp;Institute</a>
	
	
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="toggle navigation" >
       <span class="navbar-toggler-icon"></span>
         </button>
	
	<div class="collapse navbar-collapse" id="navbarContent">

     <ul class="navbar-nav  ms-auto p-2 mb-4 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-uppercase fs-5" aria-curr    ent="page" href="Home_Page_03._log_out.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-uppercase fs-5" href="#about">About Us</a>
        </li>
		   <li class="nav-item">
          <a class="nav-link text-uppercase fs-5" href="admission3.php">Admission</a>
        </li>
		  
		   <li class="nav-item">
          <a class="nav-link text-uppercase fs-5 " href="courses3.php">Courses</a>
        </li>
		   <li class="nav-item">
          <a class="nav-link text-uppercase fs-5" onclick="Logout()" href="Home_Page_01.php">Log Out</a>
        </li>
		    <li class="nav-item">
          <a class="nav-link text-uppercase fs-5" href="contact3.php">Contact us</a>
        </li>
		   <li class="nav-item">
          <a class="nav-link text-uppercase fs-5" href="">Feedback</a>
        </li>   
	</ul>
	</div>
	</div>
		</nav>


	<div class="container  shadow-lg rounded-3" style="margin-top: 50px;">
		<div class="row">
			<div class="col-md-6" style=" background-image: url(feedleft.jpg); background-size:cover; background-repeat: no-repeat; background-position: center; ">

            </div>
			<div class="col-md-5">
				<h2 class="h2">Feedback Form</h2>
				<p class="p1">We would love to hear your thoughts, concerns or problem with anything so we can improve !</p>
				<hr>
				<form id="f" method="post" action="feedback-3.php">
					

					<div class="form-group mt-3 mb-3">
						<label class="form-label" for="exampleInputEmail1">Full Name</label>
						<input type="text" class="form-control"  name="name" id="exampleInputEmail1">
					</div>

					<div class="form-group mb-2">
						<label class="form-label" for="exampleInputPassword1">Phone Number</label>
						<input type="number" class="form-control"  name="number" id="exampleInputPassword1">
					</div>

					<div class="form-group mb-2">
						<label class="form-label" for="exampleInputCity1">City</label>
						<input type="text" class="form-control" id="exampleInputCity1" name="city">
					</div>

					<div class="form-group mb-2">
						<label class="form-label" for="floatingTextarea2">Describe Feedback : </label>
						<textarea rows="3" class="form-control"  name="message" id="floatingTextarea2"></textarea>
					</div>
					<button type="submit" class="btn btn-primary " style=" margin-top: 4px; margin-bottom: 18px;" onclick="parameter()" name="submit">Submit Feedback</button>
				</form>
			</div>
		</div>
	</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<!-- php -->
<?php

        $serverName = "localhost";
        $userName = "root";
        $password = "";
        $database = "ims";

        $connection = mysqli_connect($serverName,$userName,$password,$database);

        if(isset($_POST['submit']))
        {
            $name = $_POST['name'];
             $message = $_POST['message'];
             $number = $_POST['number'];
             $city = $_POST['city'];
            
            

             $query ="INSERT INTO `feedback` ( `name`, `message`, `mnumber`, `city`) VALUES ('$name', '$message', '$number', '$city')";
             
             $result = mysqli_query($connection,$query);

             if($result)
             {
                  echo "<script type='text/javascript'>
                         alert('Thanks, Feedback Submitted Successfully...!');
                         location = 'Home_Page_03._log_out.php';
                        </script>";
             }
             else
             {
              
             }

         }


        //header("Location: feedback.php");
?>
</body>
</html>