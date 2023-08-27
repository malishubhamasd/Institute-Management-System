<?php
                                $serverName = "localhost";
                                $id = "root";
                                $password = "";
                                $database = "ims";

                                $conn = mysqli_connect($serverName, $id, $password, $database);

                                if(isset($_GET["delete"]))
                                 {
                                    $number = $_GET["sr"];

                                     $delete_data = "DELETE FROM courses WHERE sr = $number";
   
                                     $result = mysqli_query($conn,$delete_data);

                                     if($result)
                                     {
                                         echo "Row Deleted Successesfully Inserted...";
                                     }
                                     else 
                                     {
 	                                     echo "Row Not Deleted....!!!";
                                     }
                                 }
?>
<!doctype html>
<html lang="en">
  <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Bootstrap demo</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
           

           <script type="text/javascript">

        function Logout()
        {
            alert("Successfully Log Out...")
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
  <body class="p-1 mb-2 bg- text-black " style="background: 	#f0ffff;">
            
           

             <nav class="navbar navbar-expand-lg   navbar-light bg-light" >
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
                          <a class="nav-link text-uppercase fs-5" href="admission2.php">Admission</a>
                        </li>

                         <li class="nav-item">
                          <a class="nav-link text-uppercase fs-5 " href="courses_insert.php">Add Courses</a>
                        </li>
		  
		                   <li class="nav-item">
                          <a class="nav-link text-uppercase fs-5 " >Courses</a>
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



             <div class="container-fluid">

                    <div class="card text-center bg-secondary text-white">
                          <div class="card-header">
                            <h2>Course</h2>
                          </div>
                          <div class="card-body bg-secondary">
                            <h5 class="card-title">Gray Hat Institute</h5>
                            <p class="card-text">We Will Help You To Leverage Your Authentic Self.</p>
                            <a href="admission2.php" class="btn btn-primary">Get Admission</a>
                          </div>
                          <div class="card-footer text-body-secondary text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-bar-down text-white" viewBox="0 0 16 16">
                                  <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
                             </svg>
                          </div>
                     </div>
                     <br>
                     <form method="post" action="courses2_operation.php">

                     <?php
                            
                               

                                $query = "SELECT * FROM `courses`";

                                $result = mysqli_query($conn,$query);
                                
                                while($fetch = mysqli_fetch_array($result))
                                {
                                                              
                                    $sr = $fetch['sr'];                       
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
                                                            <a href="admission2.php" id="fees" class="btn btn-primary" name="Ins" value="Software Testing">Interested</a>
                                                        </div>
                                                        <p class="card-text"><small class="text-body-secondary">Last updated '. $lupdate .'  ago</small></p>
                                                        <div class="card">
                                                            <a align="center" href="courses_insert2.php?edit=&sr='.$sr.'">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                                      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                                    </svg>
                                                            </a>
									                        <a align="center" href="courses2.php?delete=&sr='.$sr.' ">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                                      <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                                                    </svg>
                                                            </a>
                                                        </div>
                                              </div>
                                         </div>';


                                                             
                                }

                            
                    ?>
                     </form>

                    
                     


                      
                     
             </div>
            
            
    
            <script src="https://cdn.jsdelivr.net/npm/bootstCard title
                         rap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
                         integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" 
                         crossorigin="anonymous">
             </script>
  </body>
</html>