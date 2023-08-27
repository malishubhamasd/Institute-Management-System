<!doctype html>
<html lang="en">
  <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Bootstrap demo</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
           
            <script type="text/javascript">

             function course()
                    {
                       if (confirm("Are You Administrator") == false) 
                       {
                          alert("Only Administrator Can Add The Courses\nThank You");
                          event.preventDefault()
                       } 
                       else 
                       {
                         alert("Only Administrator Can Add The Courses");
                         var owner = "greyhatowner12345@owner";
                         var owner_password = "iamtheowner";


                         var inputid = prompt("Enter ID")
                         var inputpassword =prompt("Enter Password")

                         if(owner == inputid)
                         {
                             if(owner_password == inputpassword)
                             {
                                 alert("Welcome Sir")
                                 window.open('courses_insert.php');
                                 event.preventDefault()
                             
                             }
                             else
                             {
                                 alert("Wrong Password")
                                 event.preventDefault();
                             }
                         }
                         else
                         {
                             alert("Wrong ID")
                             event.preventDefault();
                         }
                        

                       }
                    }
            </script>

              <style type="text/css">

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
  <body class="p-1 mb-2 bg- text-black" style="background: 	#ebebe0;">
            
            

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
          <a class="nav-link text-uppercase fs-5" href="about.php">About Us</a>
        </li>
		   <li class="nav-item">
          <a class="nav-link text-uppercase fs-5" href="admission.php">Admission</a>
        </li>
		  
		   <li class="nav-item">
          <a class="nav-link text-uppercase fs-5 " >Courses</a>
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
             <br>



             <div class="container-fluid">

                    <div class="card text-center bg-secondary text-white">
                          <div class="card-header">
                            <h2>Course</h2>
                          </div>
                          <div class="card-body bg-secondary">
                            <h5 class="card-title">Gray Hat Institute</h5>
                            <p class="card-text">We Will Help You To Leverage Your Authentic Self.</p>
                            <a href="admission.php" class="btn btn-primary">Get Admission</a>
                          </div>
                          <div class="card-footer text-body-secondary text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-bar-down text-white" viewBox="0 0 16 16">
                                  <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
                             </svg>
                          </div>
                     </div>
                     <br>


                     <?php
                            
                                $serverName = "localhost";
                                $id = "root";
                                $password = "";
                                $database = "ims";

                                $conn = mysqli_connect($serverName, $id, $password, $database);

                                $query = "SELECT * FROM `courses`";

                                $result = mysqli_query($conn,$query);

                                while($fetch = mysqli_fetch_array($result))
                                {
                                    $title = $fetch['title']; 
                                    $desc = $fetch['desc'];
                                    $h1 = $fetch['h1'];
                                    $h2 = $fetch['h2'];
                                    $h3 = $fetch['h3'];
                                    $h4 = $fetch['h4'];
                                    $fees = $fetch['fees'];
                                    $duration = $fetch['duration'];
                                    $lupdate = $fetch['lupdate'];
                                    echo '<div class="card mb-3">
                                              <img src="https://source.unsplash.com/1600x300/?'. $title . ',coding" class="card-img-top" alt="...">
                                               <div class="card-img-overlay">
                                                        <h3 class="card-title text-white  text-end">'. $title .'</h3>
                                               </div>
                                              <div class="card-body">
                                                        <h5 class="card-title">'. $title .'</h5>
                                                        <p class="card-text">'. $desc .'</p>
                                                       <ul>
                                                           <li>'. $h1 .'</li>
                                                           <li>'. $h2 .'</li>
                                                           <li>'. $h3 .'</li>
                                                           <li>'. $h4 .'</li>
                                                       </ul>
                                                       <ul class="list-group list-group-flush">
                                                            <li class="list-group-item">Fees &nbsp; &#10148; '. $fees .' Rs.</li>
                                                            <li class="list-group-item">Duration &nbsp; &#10148; '. $duration .'</li>
                                                            <li class="list-group-item"></li>
                                                       </ul>

                                                       <div class="card">
                                                            <a href="admission.php" id="fees" class="btn btn-primary" name="Ins" value="Software Testing">Interested</a>
                                                        </div>
                                                        <p class="card-text"><small class="text-body-secondary">Last updated '. $lupdate .'  ago</small></p>
                                              </div>

                                         </div>';
                                }
                                // echo '<option value="'.$value.'" '.(($value=='United States')?'selected="selected"':"").'>'.$value.'</option>';
                     ?>
                     
             </div>


    
            <script src="https://cdn.jsdelivr.net/npm/bootstCard title
                         rap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
                         integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" 
                         crossorigin="anonymous">
             </script>
  </body>
</html>