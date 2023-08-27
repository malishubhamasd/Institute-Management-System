                                   <?php 

                                      $serverName = "localhost";
                                      $id = "root";
                                      $password = "";
                                      $dataBase = "ims";

                                      $conn = mysqli_connect($serverName,$id,$password,$dataBase);

                                      $query = "SELECT title, fees FROM courses";

                                      $result = mysqli_query($conn,$query);
                                      $tp = "";
                                   ?>
<!doctype html>
        <html lang="en">
          <head>

            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Bootstrap demo</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
           
            <style type="text/css">
            body{
                 
            }
             #f{
		 	   background: 	#f5f5dc;
		 	   
               padding-left: 20px;
               padding-right: 20px;
               padding-bottom: 20px;
               padding-top: 20px;
            }

             .nav-item{
            color:black;
            font-size:15px;
            text-transform: uppercase;
            
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
            
            </style> 
            </head>
          <body class="p-1 mb-2 text-black" style="	background-color:#ebebe0;">

            <nav class="navbar navbar-expand-lg navbar-light bg-light" >
                <div class= "container-fluid">
	                <a class="navbar-brand " href="#"><span class="text-info"><i class="fa-solid fa-graduation-cap" style="color: #a8b5cc;"></i> Grey Hat</span>&nbsp;Institute</a>
	
                     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="toggle navigation" >
                       <span class="navbar-toggler-icon"></span>
                         </button>
	
	                <div class="collapse navbar-collapse" id="navbarContent">

                     <ul class="navbar-nav  ms-auto p-2 mb-4 mb-lg-0">
                        <li class="nav-item">
                          <a class="nav-link active text-uppercase fs-5" aria-curr    ent="page" href="Home_Page_02.php">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-uppercase fs-5" href="about2.php">About Us</a>
                        </li>
		                   <li class="nav-item">
                          <a class="nav-link text-uppercase fs-5" href="">Admission</a>
                        </li>
		  
		                   <li class="nav-item">
                          <a class="nav-link text-uppercase fs-5 " href="courses2.php">Courses</a>
                        </li>
		                   <li class="nav-item">
                              <a class="nav-link text-uppercase fs-5" onclick="Logout()" href="Home_Page_01.php">Log Out</a>
                            </li>
		                    <li class="nav-item">
                          <a class="nav-link text-uppercase fs-5" href="contact2.php">Contact us</a>
                        </li>
		                   <li class="nav-item">
                          <a class="nav-link text-uppercase fs-5" href="feedback-2.php">Feedback</a>
                        </li>   
	                </ul>
	                </div>
	                </div>
		</nav>
             <br>
            


                <div class="container" style="background-color:#ebebe0">
                            <form id="f" class="form-control form-control-sm shadow-lg" style="margin-top:20px;background:#c3e8cb;" method="post" action="admission2.php">
                                 

                                      <P align="center"><b>Thank You... For Your Interest 
		                              <br>
		                                    To Reserve Your Seat, Please Fill Out The Information Below</b>
		                                    <hr style="color: black;">
	                                  </P>
                                      <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Full Name</label>
                                                <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                <div id="emailHelp" class="form-text"></div>
                                      </div>

                                      <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Email ID</label>
                                                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                      </div>

                                      <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Mobile Number</label>
                                                <input type="number" class="form-control" name="number" id="exampleInputPassword1">
                                                <div id="emailHelp" class="form-text">Number Should be Start Between 6 to 9</div>
                                      </div>

                                      <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Class</label>
                                                <input type="text" class="form-control" name="class" id="exampleInputPassword1">
                                                 <div id="emailHelp" class="form-text">Your High Qualification</div>
                                      </div>

                                      <div class="mb-3">
                                           <label for="exampleInputPassword1" class="form-label">Course Name</label>
                                           <select class="form-select"  name="cname" onclick="runrun()" id="sele" aria-label="Default select example">
                                                     <option value="">Please Select the Courses</option>
                                                         <?php 
                                                             while($fetch = mysqli_fetch_array($result))
                                                             {
                                                                  $title = $fetch['title'];
                                                                 
                                                                  echo '<option name="title1" value="'.$title.'" id="Software Testing">'. $title . '</option>';
                                                             }
                                                          ?>                 
                                           </select>
                                           <div id="emailHelp" class="form-text"></div>
                                      </div>
                                      <?php
                                        
                                      ?>

                                     

                                        <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Address</label>
                                                <div class="form-floating">
                                                     <textarea class="form-control" placeholder="Leave a comment here" name="address" id="floatingTextarea2" style="height: 100px"></textarea>
                                                     <label for="floatingTextarea2">Permanent Adress</label>
                                                </div>
                                               <div id="emailHelp" class="form-text">Only Contain 250 Character</div>
                                      </div>
                                      
                                       <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Payment Mode</label>
                                                        <div class="form-check">
                                                              <input class="form-check-input" type="radio" value="CARD" name="flexRadioDefault" id="flexRadioDefault1">
                                                              <label class="form-check-label" for="flexRadioDefault1">
                                                                CARD
                                                              </label>
                                                        </div>
                                                         <div class="form-check">
                                                              <input class="form-check-input" type="radio" value="CASH" name="flexRadioDefault" id="flexRadioDefault2">
                                                              <label class="form-check-label" for="flexRadioDefault1">
                                                                CASH
                                                              </label>
                                                        </div>
                                                        <div class="form-check">
                                                              <input class="form-check-input" type="radio" value="UPI" name="flexRadioDefault" id="flexRadioDefault3" >
                                                              <label class="form-check-label" for="flexRadioDefault2">
                                                                UPI
                                                              </label>
                                                         </div>
                                                 <div id="emailHelp" class="form-text"></div>
                                      </div>

                                     
                     
                                      <button type="submit" onclick="parameter()" name="submit" class="btn btn-primary" >Submit</button>
                            </form>
                </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
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

                    if(name.length <= 4)
                   {
                       alert("Name Should Contain Atleast 5 Character") 
                       event.preventDefault()
                       return false;
                   }

                   // Email

                   var email = document.getElementById("email").value
                   if(email == "" || !email.includes("@") || !email.includes("gmail.com"))
                   {
                       alert("Enter Email");
                       event.preventDefault()
                       return false;
                   }

                   // Mobile number

                   var mobilePattern = /(^[6-9]{1}[0-9]{9})$/
                   var mobile = document.getElementById("exampleInputPassword1").value;
                   if( mobile == "")
                   {
           	           alert("Enter Mobile Number")
                       event.preventDefault()
           	           return false;
                   }
                   else if(!mobile.match(mobilePattern))
                   {
                       alert("Only 10 Digit Number & Mobile Number Must start From 6 to 9")
                       event.preventDefault()
           	           return false;
                   }

                   // Class
                   
                   // Course 

                   let sele = document.getElementById("sele");
                   if(sele.value == "")
                   {
                          alert("Please Select Course");
                          event.preventDefault()
                          return false
                   }
                   
                   // Address Contain Only 250 Character 
                 
                  var add = document.getElementById("floatingTextarea2").value
                  if(add == "")
                  {
                      alert("Please Enter Your Address")
                      event.preventDefault()
                      return false
                  }
                  if(add.length >= 250)
                  {
                      alert("Address Can Contain Only 250 Character ")
                      event.preventDefault()
                      return false
                  }

                  // Select The Payment Method

                  var f = document.getElementById("flexRadioDefault1").checked;
                  var m = document.getElementById("flexRadioDefault2").checked;
                  var o = document.getElementById("flexRadioDefault3").checked;
                  if(f == false && m == false && o == false)
                  {
            	       alert("Select The Payment Method")
                       event.preventDefault()
            	       return false;
                  }

                  
                   
                   
                  
              }
            </script>
            <?php

		$serverName = "localhost";
		$userName = "root";
		$password = "";
		$database = "ims";

		$connection = mysqli_connect($serverName,$userName,$password,$database);

		if(isset($_POST["submit"]))
		{
		     $name = $_POST['name'];
			 $email = $_POST['email'];
			 $mnumber = $_POST['number'];
			 $class = $_POST['class'];
             $cname = $_POST['cname'];
             $adress = $_POST['address'];
             $pmode = $_POST['flexRadioDefault'];


			// $query = "INSERT INTO `signup` (`fname`, `email`, `uname`, `password`, `mobnumber`) VALUES ('$name', '$email', '$uname', '$password', '$mnumber')";
			

			 $query = "INSERT INTO `admission` (`name`, `email`, `mnumber`, `class`, `cname`, `adress`, `pmode`) VALUES ('$name', '$email', '$mnumber', '$class', '$cname', '$adress','$pmode')";
			 
			 $result = mysqli_query($connection,$query);

			 if($result)
			 {
				  echo "<script type='text/javascript'>
                                                alert('Admission Successfull.........');

                                                location = 'Home_Page_02.php';

                                              </script>";
			 }
			 else
			 {
				 echo "<script type='text/javascript'>
                                                alert('Error.........');

                                                location = 'admission.php';

                                              </script>";
			 }

  }


		
?>
            </body>
</html>