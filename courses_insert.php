<!doctype html>
<html lang="en">
  <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Bootstrap demo</title>
             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
           
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
            <script type="text/javascript">


                function Logout()
                {
                    alert("Successfully Log Out...")
                }
      
           function run()
           {
                
                var title = document.getElementById("inputEmail4").value
                if(title.length > 0)
                {
                    var desc = document.getElementById("inputAddress").value
                    if(desc.length > 0)
                    {
                        var fee = document.getElementById("inputPassword4").value
                        if(fee > 0)
                        {
                            var dcourse = document.getElementById("inputZip0").value
                            if(dcourse.length > 0)
                            {
                                var h1 = document.getElementById("inputZip1").value
                                if(h1.length > 0)
                                {
                                    var h2 = document.getElementById("inputZip2").value
                                    if(h2.length > 0)
                                    {
                                        var h3 = document.getElementById("inputZip3").value
                                        if(h3.length > 0)
                                        {
                                             var h4 = document.getElementById("inputZip4").value
                                             if(h4.length > 0)
                                             {
                                                  var lupdate = document.getElementById("inputZip5").value
                                                  if(lupdate.length > 0)
                                                  {
                                                      var hptitle = document.getElementById("inputAddress1").value
                                                      if(hptitle.length > 0)
                                                      {

                                                      }
                                                      else
                                                      {
                                                          alert("Please Feel Some Brief Description For Home Page")
                                                          event.preventDefault()
                                                      }
                                                  }
                                                  else
                                                  {
                                                      alert("Please Mention Last Update")
                                                      event.preventDefault()
                                                  }
                                             }
                                             else
                                             {
                                                 alert("Please Provide Some Highlight Related Course")
                                                 event.preventDefault()
                                             }
                                        }
                                        else
                                        {
                                            alert("Please Provide Some Highlight Related Course")
                                            event.preventDefault()
                                        }
                                    }
                                    else
                                    {
                                        alert("Please Provide Some Highlight Related Course")
                                        event.preventDefault()
                                    }
                                }
                                else
                                {
                                    alert("Please Provide Some Highlight Related Course")
                                    event.preventDefault()
                                }
                            }
                            else
                            {
                                alert("Please Mention The Approximately Duration For The Course")
                                event.preventDefault()
                            }
                        }
                        else
                        {
                            alert("Please Allocate Same Fees For Course")
                            event.preventDefault()
                        }
                    }
                    else
                    {
                        alert("Please Fill Some Description For Course")
                        event.preventDefault()
                    }
                }
                else
                {
                    alert("Please Fill the Title Of Course")
                    event.preventDefault()
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
  <body class="p-1 mb-2 bg-light text-black">
            
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
             <div class="container-fluid">

                    <div class="card text-center bg-secondary text-white">
                          <div class="card-header">
                            <h2>Include Course One By One</h2>
                          </div>
                          <div class="card-body bg-secondary">
                            <h5 class="card-title">Gray Hat Institute</h5>
                            <p class="card-text">We Will Help You To Leverage Your Authentic Self.</p>
                            <a href="courses2.php" class="btn btn-primary">Courses Page</a>
                          </div>
                          <div class="card-footer text-body-secondary text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-bar-down text-white" viewBox="0 0 16 16">
                                  <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
                             </svg>
                          </div>
                     </div>
                     <br>

                     <form class="row g-3" method="post" action="courses_insert.php">
                              <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Title Of Course</label>
                                <input type="text" class="form-control" id="inputEmail4" name="tcourse" placeholder="Software Testing">
                              </div>

                              <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Fees Of Course</label>
                                <input type="number" class="form-control" id="inputPassword4" name="fees" placeholder="3000">
                              </div>

                               <div class="col-12">
                                <label for="inputAddress" class="form-label">Brief Description For Home Page</label>
                                <input type="text" class="form-control" id="inputAddress1" name="bcourse" placeholder="Brief Discription">
                              </div>

                              <div class="col-12">
                                <label for="inputAddress" class="form-label">Description Of Course</label>
                                <input type="text" class="form-control" id="inputAddress" name="dcourse" placeholder="Brief Discription">
                              </div>

                              <div class="col-md-2">
                                <label for="inputZip" class="form-label">Duration Of Course</label>
                                <input type="text" class="form-control" id="inputZip0" name="ducourse" placeholder="3 Month or 3 Year">
                              </div>
                              
                              <div class="col-md-2">
                                <label for="inputZip" class="form-label">Highlight Point</label>
                                <input type="text" class="form-control" id="inputZip1" name="hcourse1" placeholder="abc">
                              </div>
 
                              <div class="col-md-2">
                                <label for="inputZip" class="form-label">Highlight Point</label>
                                <input type="text" class="form-control" id="inputZip2" name="hcourse2" placeholder="abc">
                              </div>

                              <div class="col-md-2">
                                <label for="inputZip" class="form-label">Highlight Point</label>
                                <input type="text" class="form-control" id="inputZip3" name="hcourse3" placeholder="abc">
                              </div>

                               <div class="col-md-2">
                                <label for="inputZip" class="form-label">Highlight Point</label>
                                <input type="text" class="form-control" id="inputZip4" name="hcourse4" placeholder="abc">
                              </div>

                              <div class="col-md-2">
                                <label for="inputZip" class="form-label">Last Update</label>
                                <input type="text" class="form-control" id="inputZip5" name="lupdate" placeholder="3 month, 3 mins">
                              </div>

                              <div class="col-12">
                                <button type="submit" name="add" onclick="run()" class="btn btn-primary">Add Course</button>
                              </div>
                     </form>

                     <?php

                         if(isset($_POST['add']))
                         {
                            $serverName = "localhost";
                            $id = "root";
                            $password = "";
                            $database = "ims";

                            $conn = mysqli_connect($serverName,$id,$password,$database);

                            
                            $title = $_POST['tcourse'];
                            $hmdesc = $_POST['bcourse'];
                            $desc = $_POST['dcourse'];
                            $fee = $_POST['fees'];
                            $h1 = $_POST['hcourse1'];
                            $h2 = $_POST['hcourse2'];
                            $h3 = $_POST['hcourse3'];
                            $h4 = $_POST['hcourse4'];
                            $duration = $_POST['ducourse'];
                            $lupdate = $_POST['lupdate'];

                            try
                            {
                                $query = "INSERT INTO `courses` (`title`, `hstitle`, `desc`, `h1`, `h2`, `h3`, `h4`, `fees`, `duration`, `lupdate`) VALUES ('$title', '$hmdesc', '$desc', '$h1', '$h2', '$h3', '$h4', '$fee', '$duration', '$lupdate')";
                                $result = mysqli_query($conn,$query);
                                echo "<script type='text/javascript'>
                                             alert('Course Is Successfully Inserted...........');
                                             location = 'courses2.php';
                                      </script>";

                            }
                            catch(Exception $e)
                            {
                                  echo "<script type='text/javascript'>
                                                alert('Please Not Mention Any Single Or Double Quote');
                                                event.preventDefault();
                                        </script>";
                                  
              
                            }
                        
                         } 

                     ?>

                     
                    
            </div>


    
            <script src="https://cdn.jsdelivr.net/npm/bootstCard title
rap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>