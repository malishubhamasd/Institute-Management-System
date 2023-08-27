<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact Us</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/solid.min.css" integrity="sha512-yDUXOUWwbHH4ggxueDnC5vJv4tmfySpVdIcN1LksGZi8W8EVZv4uKGrQc0pVf66zS7LDhFJM7Zdeow1sw1/8Jw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

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

                   //email

         var email = document.getElementById("exampleInputemail1").value
         if(email == "")
         {
             alert("Enter Email");
             event.preventDefault()
             return false;
         }

         if(!email.includes("@") || !email.includes("gmail.com"))
         {
             alert("Enter Valid Email");
             event.preventDefault()
             return false;
         }

                   //  Contain Only 250 Character 

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
    #f placeholder{
        color: white;
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
                      <a class="nav-link text-uppercase fs-5" href="about3.php">About Us</a>
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
                      <a class="nav-link text-uppercase fs-5" >Contact us</a>
                    </li>
		               <li class="nav-item">
                      <a class="nav-link text-uppercase fs-5" href="feedback-3.php">Feedback</a>
                    </li>   
	            </ul>
	            </div>
	            </div>
		</nav>




<div class="container-fluid" style="margin-top: 30px;">
    <div class="container">
      <div class="row">
        <div class="col-md-6 shadow rounded p-5 m-3";  style=" background: white" ;>
          <form id="f" method="post" action="contact.php" style="color:black;">
              <div class="row" >
                <div class="col mb-3" >
                    <h2 class="text-center" style="color:black; background-color: transparent;">Contact Us</h2>
                    <label class="form-label" for="exampleInputEmail1" style="color: black;">Full Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Full Name" id="exampleInputEmail1" style="background : transparent; color: black;">
                </div>
                
                <div class="mb-3">
                    <label class="form-label" for="exampleInputPassword1">Phone</label>
                    <input type="number" name="mnumber" class="form-control" placeholder="+91-9999999999" id="exampleInputPassword1" style="background : transparent; color: black;">
                </div>

            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleInputemail1">Email</label>
                <input type="email" name="email" class="form-control" placeholder="name@email.com" id="exampleInputemail1" style="background : transparent; color: black;">
            </div>

            <div class="mb-3">
                <label class="form-label" for="floatingTextarea2">Message: </label>
                <textarea name="message" class="form-control" rows="3" placeholder="Write your message here." id="floatingTextarea2" style="background : transparent; color: black;"></textarea>
            </div>

            <!-- Button trigger modal -->
            <button type="submit" class="btn btn-primary" onclick="parameter()" name="submit">Send</button>
        </form>
    </div>


    
    <div class="col-md-5 shadow rounded m-4" style="background-color:white;">
      <div class=" text-center text-light p-2">

        <ul class="list-unstyled " style=" font-size: 18px; color: black;">
            <li><i class="bi bi-whatsapp" style="font-size: 1.5rem; color: #5499C7;"></i>
                <div class="topic" >Whatsapp</div>
                <div class="text-one">9865632563</div>
            </li><hr>
            <li><i class="bi bi-telephone" style="font-size: 1.5rem; color: #5499C7;"></i>
                <div class="topic">Call</div>
                <div class="text-one">02382-652154</div>
                <div class="text-two">02382-652452</div>
            </li><hr>
            <li><i class="bi bi-envelope" style="font-size: 1.5rem; color: #5499C7;"></i>
                <div class="topic">Mail</div>
                <div class="text-one">grayhat@gmail.com</div>
            </li><hr>
            <li><i class="bi bi-geo-alt" style="font-size: 1.5rem; color: #5499C7;"></i>
                <div class="topic">Location</div>
                <div class="text-one"> ‘Nalanda’, Near ICICI Bank, Pune-411004, Maharashtra (INDIA)</div>
            </li>
        </ul>   
    </div>
</div>
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
    $email = $_POST['email'];
    $message = $_POST['message'];
    $mnumber = $_POST['mnumber'];



    $query ="INSERT INTO `contactus` ( `name`, `email`, `message`, `mnumber`) VALUES ('$name', '$email', '$message', '$mnumber')";

    $result = mysqli_query($connection,$query);

    if($result)
    {
       echo "<script type='text/javascript'>
       alert('Thanks for contacting us, we will reach you soon...!');
       location = 'Home_Page_03._log_out.php';
       </script>";
   }
   else
   {
       echo "Error....";
   }

}


       // header("Location: contact.php");
?>
</body>
</html>