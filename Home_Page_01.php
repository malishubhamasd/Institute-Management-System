<?php 

                                      $serverName = "localhost";
                                      $id = "root";
                                      $password = "";
                                      $dataBase = "ims";

                                      $conn = mysqli_connect($serverName,$id,$password,$dataBase);

                                      $query = "SELECT title, hstitle FROM courses";

                                      $result = mysqli_query($conn,$query);
                                      $tp = "";
                                   ?>



<html>
<head>
		<title>Homepage</title>
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
	
	<!---bootstrap/css-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	


		<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
    
	
		       <!-- font -->
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/solid.min.css" integrity="sha512-yDUXOUWwbHH4ggxueDnC5vJv4tmfySpVdIcN1LksGZi8W8EVZv4uKGrQc0pVf66zS7LDhFJM7Zdeow1sw1/8Jw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    



</head>
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
  
  <!--gallery-->
    
.container{
      display:flex;
      flex-direction:column;
      justify-content: center;
      align-items: center;
      text-align: center;
      margin: 40px 20px 0 20px;
}
.container .heading{
  
  padding-bottom: 50px;
}
.container .heading h3 {

font-size:3rem;
font-weight: bolder;
padding-bottom: 10px;

}
.container .heading h3 span{
          font-weight: 500;
          
}
.container .box{
  display:flex;
  flex-direction: row;
  justify-content: space-between;
}
.container .box .dream{
  display:flex;
  flex-direction:column;
  width:32%;
}
.container .box .dream img{
  
  width:100%;
  padding-bottom:15px ;
  border-radius: 5px;
}
@media only screen and (max-width:769px){
  .container .box{

  flex-direction: column;
  }
  .container.box .dream{
    width:100%;
  }
}





    <!----feedbackpage---->
   
   
	.card-title h5{
		color:black;
	}
	.bi{
    color:blue;
  }
	
	<!-- aboutus -->
  
    
  </style>
	
<body>
	
	
	
<!-- header part -->
<nav class="navbar navbar-expand-lg  fixed-top navbar-light bg-light" >
<div class= "container-fluid">
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
          <a class="nav-link text-uppercase fs-5" href="about.php">About Us</a>
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
	<!-- silder -->
<div class="container-fluid section-padding" style="margin-top:100px;">
    
  <div id="carouselExampleCaptions" class="carousel slide">
                              <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                              </div>

                                           <?php 
                                                 while($fetch = mysqli_fetch_array($result))
                                                 {
                                                        $title = $fetch['title'];
                                                        $hstitle = $fetch['hstitle'];
                                     
                                            ?> 

                              <div class="carousel-inner">
                                <div class="carousel-item active">
                                  <img src="https://source.unsplash.com/1600x500/?technologies" class="d-block w-100" alt="...">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5> <?php echo $title; ?> </h5>
                                    <p> <?php echo $hstitle; ?> </p>
                                  </div>
                                </div>

                                            <?php
                                                 break;
                                                 }
                                                 $count = 0;
                                                 while($fetch = mysqli_fetch_array($result))
                                                 {
                                                     $count++;
                                                        $title = $fetch['title'];
                                                        $hstitle = $fetch['hstitle'];
                                                       
                                                        if($count == 3)
                                                        {
                                                            break;
                                                        }
                                            ?>

                                <div class="carousel-item">
                                  <img src="https://source.unsplash.com/1600x500/? <?php echo $title; ?>" class="d-block w-100" alt="...">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5> <?php echo $title; ?> </h5>
                                    <p> <?php echo $hstitle; ?> </p>
                                  </div>
                                </div>
                                            <?php 
                                                 }
                                            ?>
                                
                              </div>
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                              </button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                              </button>
               </div>
    
    

    </div>
   
   	<!----time-->
	<div id="clock" class="time section-padding" style="margin-top:20px;background-color:#ebebe0 ;">
	  
    <div class="row ">
         <marquee scrollamount="10" behaviour="alternate" direction="right" style="font-size:20px;color:#00cc88"><strong> <i class="fa-solid fa-bell fa-xl" style="color: #285fbd;"></i> opening-time:9AM </strong></marquee>
         <marquee scrollamount="10"  behaviour="alternate" direction="left"style="font-size:20px;color:#b3003b; margin-bottom:20px"><strong><i class="fa-solid fa-bell fa-xl" style="color: #285fbd;"></i> closing-time:9PM  </strong></marquee>
       </div>
         </div>
 
        

    
    <!-- sildersection end -->
    
    
        
	
	          <!-- feedback -->
	
<section id="feedback" class="feedback section-padding" style="padding-bottom:2rem;margin-bottom:20px;" >
<div class="container" style=" box-shadow: 0 0 15px #a2a276 ; background-color: #f0f5f5; padding-bottom:30px">
 
    <h2 class="text-center  col-sm-auto pt-4" style="color:#000;font-size: 40px;cursor:auto;font-style:Serif"> Our Scholar Students</h2>
   
   
		<div class="row mx-5">
	      <div class="col-sm-auto col-lg-4" style="margin-top:3rem;">
	     <div class="card" style="width: 18rem;">
             <img src="std14.jpg" class="card-img-top" alt="image unavailable">
        <div class="card-body">
          <h5 class="card-title">Avantika Raut</h5>
           <p class="card-text">I was not sure what to expect because the class was taught remotely,but I was quite impressed with the entire process.The facility was very professional and there were no problems with connectivity.Our instructor was an expert and was very clear in his method of teaching.I am thankful for recieving support from  I would take another course with <u>Grey Hat Institude</u>and faculties.</p>
	    </div>
      </div>
   </div>
	<div class="col-sm-auto col-lg-4  " style="margin-top:3rem">
       <div class="card" style="width: 18rem;">
         <img src="std11.jpg" class="card-img-top" alt="image unavailable">
           <div class="card-body">
          <h5 class="card-title ">Sham Patil</h5>
           <p class="card-text ">I am thankful to <strong> Grey Hat Institude</strong> 
			  for providing me detialed clarification on foundation courses.it helped me gain strong knowledge about languages such as c,c++,Mysql,web development and technologies along with interview tips given by sir.I would take another course with Grey Hat Institude.I am thankful for recieving support from <u>Grey Hat Institude</u> and faculties</p>
    
      </div>
   </div>
  </div>
	<div class="col-sm-auto col-lg-4" style="margin-top:3rem">
       <div class="card" style="width: 18rem;">
         <img src="std13.jpg" class="card-img-top" alt="image unavailable">
           <div class="card-body">
          <h5 class="card-title">Rajnandini Pande</h5>
           <p class="card-text">I am thankful to <strong> Grey Hat Institude</strong> 
			  for providing me detialed clarification on foundation courses.it helped me gain strong knowledge about languages such as c,c++,Mysql,web development and technologies along with interview tips given by sir.I would take another course with Grey Hat Institude.I am thankful for recieving support from <u>Grey Hat Institude</u> and faculties</p>
    
      </div>
   </div>
  </div>
			<div class="col-sm-auto col-lg-4 " style="margin-top:3rem">
              <div class="card" style="width: 18rem;">
               <img src="std18.jpg" class="card-img-top" alt="image unavailable">
                  <div class="card-body">
                   <h5 class="card-title">Kaustubh Kulkarni</h5>
                     <p class="card-text">I am thankful to <strong> Grey Hat Institude</strong> 
			  for providing me detialed clarification on foundation courses.it helped me gain strong knowledge about languages such as c,c++,Mysql,web development and technologies along with interview tips given by sir.I would take another course with Grey Hat Institude.I am thankful for recieving support from <u>Grey Hat Institude</u> and faculties</p>
      
            </div>
           </div>
         </div>
			<div class="col-sm-auto col-lg-4" style="margin-top:3rem">
             <div class="card" style="width: 18rem;">
              <img src="std12.jpg" class="card-img-top" alt="image unavailable">
               <div class="card-body">
                <h5 class="card-title">Anushka Wankade</h5>
                  <p class="card-text">I am thankful to <strong> Grey Hat Institude</strong> 
			  for providing me detialed clarification on foundation courses.it helped me gain strong knowledge about languages such as c,c++,Mysql,web development and technologies along with interview tips given by sir.I would take another course with Grey Hat Institude.I am thankful for recieving support from <u>Grey Hat Institude</u> and faculties</p>
    
      </div>
   </div>
  </div>
		
  
  <div class="col-sm-auto col-lg-4" style="margin-top:3rem">
             <div class="card" style="width: 18rem;">
               <img src="std20.jpg" class="card-img-top" alt="image unavailable">
                <div class="card-body">
                <h5 class="card-title">Deepak mali</h5>
                 <p class="card-text">I am thankful to <strong> Grey Hat Institute</strong> 
			  for providing me detialed clarification on foundation courses.it helped me gain strong knowledge about languages such as c,c++,Mysql,web development and technologies along with interview tips given by sir.I would take another course with Grey Hat Institude.I am thankful for recieving support from <u>Grey Hat Institude</u> and faculties</p>
      </div>
   </div>
  </div>
</div>
</div>
	</section >

  <hr>
  <!-- collapse -->
<h3 style=" text-align:center;font-size:50px;font-weight: bolder;"><span style="color:#e62e00; font-weight:600">Short</span> Info</h3>
<div class="container text-center mt-4">
  <p>
    <button class="btn btn-outline-info m-1" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample2">Description</button>
    <a class="btn btn-outline-info m-1" data-bs-toggle="collapse" href="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2" aria-controls="multiCollapseExample1">Curriculum</a>
    <a class="btn btn-outline-info m-1" data-bs-toggle="collapse" href="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3">Key Features</a>
    <a class="btn btn-outline-info m-1" data-bs-toggle="collapse" href="#multiCollapseExample4" aria-expanded="false" aria-controls="multiCollapseExample4">Reviews</a>
  </p>


  <div class="row">
    <div class="col">
      <div class="collapse multi-collapse" id="multiCollapseExample1">
        <div class="card card-body border border-info">
          <div class="vc_tta-panel vc_active" id="1657959663345-e5b289db-9f09" data-vc-content=".vc_tta-panel-body"><div class="vc_tta-panel-heading">
            <div class="wpb_text_column wpb_content_element ">
              <div class="wpb_wrapper">
                <p><strong>Full stack Java Developer course in Pune with 100% Placement Assistance</strong></p>
                <p><strong>Best Java Training institute in Pune&nbsp;</strong></p>
                <p><strong>Best Java Course Details :-</strong></p>
                <p>Full stack java development and Java is the highest demand job in the Software Industry.</p>
                <p>Full-stack java developers develop both the front-end and the server-side of the application, deploy, debug and maintain their databases and servers</p>
                <p>If you wish to be a full stack java developer one must be proficient in</p>
                <p>Basic Technology – C programming</p>
                <p>Databases – SQL and No SQL</p>
                <p>Front End Technology – HTML, CSS, Bootstrap, Javascript</p>
                <p>Server Side Programming – Java</p>
                <p>Frameworks – Hibernate, Spring, Spring Boot, Angular</p>
                <hr>
                <p><a href="https://en.wikipedia.org/wiki/Full_stack">https://en.wikipedia.org/wiki/Full_stack</a></p>
                <p><a href="https://www.seedinfotech.com/should-i-learn-java-or-c/">Should I Learn Java or C</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body border border-info">
        <div class="vc_tta-panel vc_active" id="1657959663345-e5b289db-9f09" data-vc-content=".vc_tta-panel-body"><div class="vc_tta-panel-heading">
          <div class="wpb_text_column wpb_content_element ">
            <div class="wpb_wrapper">
              <p><strong>Courses</strong></p>

              <p>C Programming Language</p>
              <p>SQL</p>
              <p>HTML5</p>
              <p>Core Java</p>
              <p>Manual Testing</p>
              <p>Automation Testing</p>
              <p>.NET</p>
              <p>Python</p>
              <hr>
              <p><a href="https://en.wikipedia.org/wiki/Full_stack">https://en.wikipedia.org/wiki/Full_stack</a></p>
              <p><a href="https://www.seedinfotech.com/should-i-learn-java-or-c/">Should I Learn Java or C</a></p>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div><div class="row">
<div class="col">
<div class="collapse multi-collapse" id="multiCollapseExample3">
<div class="card card-body border border-info">
<div class="vc_tta-panel vc_active" id="1657959663345-e5b289db-9f09" data-vc-content=".vc_tta-panel-body"><div class="vc_tta-panel-heading">
<div class="wpb_text_column wpb_content_element ">
<div class="wpb_wrapper">

  <p><i class="bi bi-balloon"></i> Content Endorsed by NSDC</p>
  <p><i class="bi bi-balloon"></i> Latest Full stack Java technology</p>
  <p><i class="bi bi-balloon"></i> Advance technology of Java Web App , Spring, Hibernate and Spring Boot</p>
  <p><i class="bi bi-balloon"></i> Entire 360 degrees approach</p>
  <p><i class="bi bi-balloon"></i> Front end technology along with Server</p>
  <p><i class="bi bi-balloon"></i> Side programming, database, Frameworks</p>
  <p><i class="bi bi-balloon"></i> Expert-led Sessions related full stack java</p>
  <p><i class="bi bi-balloon"></i> Hands-on Labs on Full stack java and Java</p>

  <p><i class="bi bi-balloon"></i> 50% theory and 50% labs on every topic and module</p>
              <p><i class="bi bi-balloon"></i> Exclusively dedicated weeks for intense labs</p>
              <hr>
              <p><a href="https://en.wikipedia.org/wiki/Full_stack">https://en.wikipedia.org/wiki/Full_stack</a></p>
              <p><a href="https://www.seedinfotech.com/should-i-learn-java-or-c/">Should I Learn Java or C</a></p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample4">
      <div class="card card-body border border-info">
        <div class="vc_tta-panel vc_active" id="1657959663345-e5b289db-9f09" data-vc-content=".vc_tta-panel-body"><div class="vc_tta-panel-heading">
          <div class="wpb_text_column wpb_content_element ">
            <div class="wpb_wrapper">
             1 <i class="bi bi-stars"></i>
             <div class="progress" role="progressbar" aria-label="Default striped example" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar progress-bar-striped" style="width: 5%"></div><br>
            </div>
            2 <i class="bi bi-stars"></i>
            <div class="progress" role="progressbar" aria-label="Success striped example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar progress-bar-striped bg-success" style="width: 25%"></div><br>
            </div>
            3 <i class="bi bi-stars"></i>
            <div class="progress" role="progressbar" aria-label="Info striped example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar progress-bar-striped bg-info" style="width: 70%"></div><br>
            </div>
            4 <i class="bi bi-stars"></i>
            <div class="progress" role="progressbar" aria-label="Warning striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar progress-bar-striped bg-warning" style="width: 85%"></div><br>
            </div>
            5 <i class="bi bi-stars"></i>
            <div class="progress" role="progressbar" aria-label="Danger striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar progress-bar-striped bg-danger" style="width: 90%"></div><br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
<hr>









<!--gallery-->
<section class="image" style="padding-bottom:50px">
<div class="container">
<div class="heading" >
  <h3 style="text-align: center;" >Our <span style="color:#e62e00" >Achievements</span><h3>
</div>
<div class="box" >
  <div class="dream">
    <img src="g2.jpg">   
    <img src="pic1.jpg"> 
    <img src="g3.jpg">
    <img src="g4.jpg">
    <img src="dream1.JPG">
  </div>
  <div class="dream" >
    <img src="g5.jpg">
    <img src="g6.jpg">   
    <img src="g7.jpg"> 
    <img src="g14.jpg">
   
  </div>
  <div class="dream" >
    <img src="g8.jpg">
    <img src="g9.jpg">   
    <img src="g10.jpg"> 
    <img src="g11.jpg">
    <img src="g12.jpg">
  </div>
</div>
</section>



	
	

                  <!-- social_icons -->
 <div class="container">
  <footer class="py-3">
    <div class="row">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
        <li class="nav-item"><a  class="nav-link px-2 text-body-secondary" href="admission.php">Admission</a></li>
        <li class="nav-item"><a  class="nav-link px-2 text-body-secondary" href="courses1.php">Courses</a></li>
        <li class="nav-item"><a href="feedback-1.php" class="nav-link px-2 text-body-secondary">Feedback</a></li>
        <li class="nav-item"><a href="contact.php" class="nav-link px-2 text-body-secondary">Contact Us</a></li>
      </ul>

      <div class="d-flex flex-column flex-sm-row justify-content-between  my-3">
        <p>© 2023 grayHAT, Inc. All rights reserved.</p>
        <ul class="list-unstyled d-flex">
          <li class="ms-3"><i class="bi bi-twitter"></i></li>
          <li class="ms-3"><i class="bi bi-facebook"></i></li>
          <li class="ms-3"><i class="bi bi-instagram"></i></li>
          <li class="ms-3"><i class="bi bi-envelope"></i></li>
          <li class="ms-3"><i class="bi bi-linkedin"></i></li>
          <li class="ms-3"><i class="bi bi-whatsapp"></i></li>
        </ul>
      </div>
    </footer>
  </div>



  <!-- https://burst.shopify.com/coding -->



 </body>
 </html>