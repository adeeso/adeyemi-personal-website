<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width= device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="I am a software developer based in Lagos, Nigeria">
	<meta name="keywords" content="software developer, web developer, developer, app, software, website, freelance, php developer, backend, frontend, lagos developer, html, css, responsive, dynamic, ajax, php software developer, Adeeso Adeyemi">
	<meta name="author" content="Adeeso Adeyemi  2020">
	<title>My Blog</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">

	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="popper.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	


<style type="text/css">
	ul,li{
		display: inline; 
		 color: white;
		
}
	/*#header{background-co: url("pic/landscape.jpg"); 
	background-size:cover;
	background-repeat: no-repeat;
	 height: 640px; 
	 background-attachment:fixed;}*/
	 #header{background-color: black;}
	/*.wrapper{
		background-color: rgba(0,0,0,0.8);
		 height: 640px}*/
	h2{
		color: white;}
	h4{
		text-align:center;
		 color: white;
		  word-spacing: 10px; 
		  font-family: sans-serif;
		   font-size: 30px}
	h3{color: white;
	 text-align:center;
	  font-family: verdana;}

	  
a{ 
	font-size: 20px; padding:7px;
  }

a:hover{
	text-decoration-color: orange;
}

/*#vert{border-left: 2px solid orange;
	height: 370px;
  position: absolute;
  left: 50%;
  margin-left: -3px;
  top: 50;

}
*/	#num3{
		height: 350px
	}
	#num4{
		height: 350px
	}
	

/*p{text-align:center; line-height:100px;}*/
#blue{
	box-shadow:5px 5px 6px orange;
     }
#pink{
	box-shadow:5px 5px 6px orange;
     }
#green{
	box-shadow:5px 5px 6px orange;
     }

     #footer{
     	color: white;
     }
     .green{
     	color: white
     }
     .head{
     	border-bottom: 2px solid orange;
     }

     .middle{
     	border: 1px solid orange;
     }
</style>


</head>
<body onload="traffic()">
<?php
include('adeyemi.php');

if ($_SERVER['REQUEST_METHOD']=='POST'  &&  $_POST['submit']=='Send Message') {
	
	$errors=array();

	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	//to validate name

          if (empty($_POST['name'])) {
            $errors ['name']= "<div class='text-danger'>Fullname field is required!</div>";
             }

               // to validate email
            if(empty($email)){
    $errors['email'] = "<div class='text-danger'>Email address field is required!</div>";
  }
  else if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email']= "<div class='text-danger'>Invalid email address field </div>";
  }
          

if (empty($_POST['message'])) {
	$errors['message']="<div class='text-danger'>Message field is rerquired!</div>";

}

	if (count($errors)==0) {
		echo "successfully";

		$contact=new Contact("www.adeyemiadeeso.com", "adeyemi3_adeyemi1", "dantealighieri", "adeyemi3_adeyemi");
         


       
   $contact->register($_POST['name'], $_POST['email'], $_POST['message']);

            header('Location:http://www.adeyemiadeeso.com?msg=successfully sent');

 




	}
}







?>




	<div class="container-fluid" id="header">
<div class="row">
	<div class="col-md-7 mt-4 pl-5 head">
		<h2 style="font-family:Brush Script MT; font-size: 60px ">Adeyemi.A</h2>
	</div>
	<div class="col-md-5 mt-5 head" >
		<ul>
			
			<a href="#about"><li>About</li></a>
			<a href="#skills"><li>Skills</li></a>
			<a href="#services"><li>Services</li></a>
			<a href="#project"><li>Projects</li></a>
			<a href="#contact"><li>Contact</li></a>
			<li>
      	<a href="login.php" style="text-decoration: none!important;" class="text-dark">login</a>
      </li>

		</ul>
	</div>
</div>

<div class="row" style="height: 150px">
	<div class="col"></div>
</div>


<div class="row">
	<div class="col-md-6" id="mid" style="padding-top: 60px">
		<h3 id="num1" style="line-height:30px; font-size: 35px"></h3>
		<h3 id="num2" style="color: white;font-size:35px;line-height: 30px"></h3>
	</div>

	<div class="col-md-6">
		<div >
		<img src="" alt="" id="num3" class="img-fluid" alt="image">
		<!-- <img src="" alt="" id="num4" class="img-fluid-rounded-circle" width="300px" height="300px"> -->
	</div>
	</div>
</div>


<div class="row" style="height:120px">
	<div class="col"></div>
</div>

<div class="row" id="about">
	<div class="col-md-6" style="padding: 100px; border-right-color: black">
		<img src="pic/adeyemi3.jpg" alt="imgage" class="img-fluid">
	</div>
	<div class="col-md-6" style="padding-top: 100px">
		<h1 style="color: white; font-size: 50px">About Me</h1>
		<p style="color: white; font-size:28px ">I am a programmer living in Lagos, Nigeria with good knowledge of front-end and back-end techniques. I love solving problems using various technologies tools, working on new projects and building web apps.</p> <br><br>

		<a href="https://drive.google.com/file/d/1fEpsx7oqF8Foa7Sw0ParbEiVmzS7PVqi/view?usp=sharing"><button class="btn btn-outline-warning">DOWNLOAD CV</button></a>
	</div>
</div>
 <!-- section end for about me -->

<div class="row" style="height: 120px">
	<div class="col"></div>
</div>



<div class="row" id="skills">
	<div class="col" style="text-align: center;">
		<h1 style="font-size: 50px; color: white">Skills</h1>
		<hr color='orange' width="120px" style="padding-top: 1px">
	</div>
</div>


<div class="row py-4">
	<div class="col-md-6" id="none" style="color: white; font-size: 25px ">
		<h4>Front-end Technologies</h4>
               <ul class="fa-ul" style="display: block;">
  <li  style="display: block;"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color: orange">
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg> Building responsive design with Bootstrap classes</li>
  <li style="display: block;"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color: orange">
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg> Proficient in HTML, CSS including Flex and the use of media query</li>
  <li style="display: block;"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color: orange">
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg> Good use of JavaScript (ES5 and ES6) and JavaScript library like Jquery.</li>
  <li style="display: block;"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color: orange">
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg> Using React Js in building different component for the user interface</li>
</ul>

			</div>

	<div class="col-md-6">
		<h4>Back-end Technologies</h4>
		      <ul class="fa-ul" style="display: block; color: white; font-size: 25px ">
  <li  style="display: block;"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color: orange">
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg> Use of MySQL workbench in modeling relational database and handling MySQL database management system</li>
  <li style="display: block;"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color: orange">
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg> Programming with PHP / Object-Oriented Programming (OOP), with good understanding of MVC design pattern demonstrated with Laravel Framework.</li>
  <li style="display: block;"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color: orange">
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg> Use of Ajax technology to interact with the database.</li>
  
</ul>

	</div>
</div>
<div class="row">
	<div class="col">
		<p style="font-size: 25px; padding-left:70px;color: white "> Others:Version control with Github </p>
	</div>
</div>

<!-- section end for skills -->

<div class="row" style="height: 120px">
	<div class="col"></div>
</div>


<div class="row" id="services">
	<div class="col" style="text-align: center;">
		<h1 style="font-size: 50px; color: white">Services</h1>
		<hr color='orange' width="200px" style="padding-top: 1px">
	</div>
</div>

<div class="row">
	<div class="col-md-3 middle" style="background-color:rgb(83,83,83); margin-left:70px;margin-right: 40px; height: 140px" id="blue" >
		<p style="text-align: center; line-height: 130px; color: orange; font-size: 25px">Web design</p>
	</div>
	<div class="col-md-3 middle" style="background-color:rgb(83,83,83);margin-right: 40px; margin-left: 70px; height: 140px" id="green">
		<p style="text-align: center; line-height: 130px; color:white; font-size: 25px">Web App developing</p>
	</div>
	<div class="col-md-3 middle" style="background-color:rgb(83,83,83);margin-right: 40px ; margin-left:70px;height: 140px" id="pink">
		<p style="text-align: center; line-height: 130px; color: orange; font-size: 25px">Debugging</p>

	</div>
</div><br><br>
<a href="https://drive.google.com/file/d/1fEpsx7oqF8Foa7Sw0ParbEiVmzS7PVqi/view?usp=sharing"><button class="btn btn-outline-warning">DOWNLOAD CV</button></a>
<!-- section end for services -->




<div class="row" style="height:120px">
	<div class="col"></div>
</div>


<div class="row" style="text-align: center; color: white" id="projects">
	<div class="col">
		<h1 style="font-size: 50px">Projects</h1>
	<hr color='orange' width="200px" style="padding-top: 1px">
	</div>
</div>


<div class="row">
	<div class="col-md-4" style="margin-left: 50px">
<p style="font-size: 20px; color: white"> Recently developed a static website for deric projects and service limited</p>
<p style="font-size: 15px; color: white">View project on my github below:</p>
<a href="https://github.com/adeeso/deric-project" class="btn btn-outline-warning" target="_blank">GitHub</a>
	</div>

	<div class="col-md-6" style="margin-left: 50px">
		
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="pic/adeyemi5.png" class="d-block w-100 img-fluid" alt="image">
    </div>
    <div class="carousel-item">
      <img src="pic/adeyemi6.png" class="d-block w-100 img-fluid" alt="image">
    </div>
    <div class="carousel-item">
      <img src="pic/adeyemi7.png" class="d-block w-100" alt="image">
    </div>
    <div class="carousel-item">
      <img src="pic/adeyemi8.png" class="d-block w-100 img-fluid" alt="image">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	</div>
</div>
 
<br><br>


<div class="row">
	<div class="col-md-4" style="margin-left: 50px">
<p style="font-size: 20px; color: white">Recently developed a web app -Gsprojects, where final year students can search and get materials to assist in writing their projects. Donor can upload a project materials and researcher(students) can view and download. It is an end-to-end platform from viewing projects topics and material to payment, with PayStack payment API integration.
				Languages used - PHP/OOP, JavaScript (js), Ajax, JQuery and SQL.
				</p>
<p style="font-size: 15px; color: white">View project on my github below:</p>
<a href="https://github.com/adeeso/gsproject" class="btn btn-outline-warning" target="_blank">GitHub</a>
	</div>

	<div class="col-md-6" style="margin-left: 50px">
		
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="pic/adeyemi9.png" class="d-block w-100 img-fluid" alt="image">
    </div>
    <div class="carousel-item">
      <img src="pic/adeyemi10.png" class="d-block w-100 img-fluid" alt="image">
    </div>
    <div class="carousel-item">
      <img src="pic/adeyemi11.png" class="d-block w-100" alt="image">
    </div>
    <div class="carousel-item">
      <img src="pic/adeyemi12.png" class="d-block w-100 img-fluid" alt="image">
    </div>
    <div class="carousel-item">
      <img src="pic/adeyemi13.png" class="d-block w-100 img-fluid" alt="image">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	</div>
</div>



<div class="row" style="height:120px">
	<div class="col"></div>
</div>


<div class="row" style="text-align: center; color: white" id="contact">
	<div class="col">
		<h1 style="font-size: 50px">Contact</h1>
	<hr color='orange' width="200px" style="padding-top: 1px">
	</div>
</div>


<div class="row">
          <div class="col order-md-last d-flex">
          	<div style="width: 50%; background-color:rgba(255,255,255,0.1); margin:0px auto">
          		<?php 
             //to successfully sent
              if (!empty($_GET['msg'])) {
 	          echo "<div class='alert alert-warning'>".$_GET['msg']."</div>";
                  }
                  ?>
                  <br>
                  <h5 class="text-warning" style="text-align: center;">Contact me now</h5>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="p-4 p-md-5 contact-form">

              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Your Name" value="" required>

                  <?php
        if (isset($errors['name'])) {
        echo $errors['name'];
      }
    ?>
              </div>
              <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Your Email" value="" required>

                  <?php
        if (isset($errors['email'])) {
        echo $errors['email'];
      }
    ?>
              </div>
              
              <div class="form-group">
                <textarea name="message" cols="30" rows="7" class="form-control" placeholder="Message"  required></textarea>
                      <?php
        if (isset($errors['message'])) {
        echo $errors['message'];
      }
    ?>
              </div>
          
              <div class="form-group">
                <input type="submit" value="Send Message" name="submit" class="btn btn-outline-warning">
              </div>
            </form>
          </div>
          </div>
        </div>


<div class="row" style="height:120px">
	<div class="col"></div>
</div>



<div class="row">
			<div class="col-md-4" id="noflex">
	
				<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color: orange; margin-left: 120px">
  <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
</svg>	<span class="green">adeesoadeyemi2000@yahoo.com</span>
		</div>
				<div class="col-md-4">	
					<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color: orange; margin-left: 120px">
  <path fill-rule="evenodd" d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg><span  class="green"> +2349028196095</span>
				
				</div>


         <div class="col-md-4">
					<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color: orange; margin-left: 125px">
  <path fill-rule="evenodd" d="M12.166 8.94C12.696 7.867 13 6.862 13 6A5 5 0 0 0 3 6c0 .862.305 1.867.834 2.94.524 1.062 1.234 2.12 1.96 3.07A31.481 31.481 0 0 0 8 14.58l.208-.22a31.493 31.493 0 0 0 1.998-2.35c.726-.95 1.436-2.008 1.96-3.07zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
  <path fill-rule="evenodd" d="M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg><span  class="green"> Lagos, Nigeria</span>
				
			</div>
		</div>
		


<div class="row">
	<div class="col mt-5" style="text-align: center; word-spacing: 10px">
		<a href="https://facebook.com/adeeso.adeyemi1"><img src="pic/fab.png" alt="facebook logo" height="20px"></a>
		<a href="https://twitte.com/gentlesoul826/"><img src="pic/twitter.png" alt="twitter logo" height="20px"></a>
		<a href="https://instagram.com/gentlesoul826/"><img src="pic/instagram.png" alt="instagram logo" height="20px"></a>
		

	</div>
</div>

		<div class="row">
			<div class="col py-3">
				<hr>
				<h5 class=" text-center" id="footer">Copyright &copy <span class="text-warning">Adeeso Adeyemi <?php echo date('Y');?></span></h5>
			</div>
		</div>
	</div>















		
	
</div>
<script type="text/javascript">

	resp=1;
	function traffic(){
		if (resp==1) {document.getElementById('num1').innerHTML="<p style='color:orange'>HELLO! I'M <span style='color:white'> ADEYEMI.</span></p><p style='color:white'> I'm a software developer.</p><p style='color:orange'>I love working on new projects</p> <p> and developing web apps</p>" ;

		               document.getElementById('num3').src='pic/adeyemi.jpg';

		return resp++;
	}else if (resp==2) {document.getElementById('num2').innerHTML="";
	                   document.getElementById('num1').innerHTML="<p style='color:white'>HELLO!</p><p>I'm a software developer</p><p style=color:orange> I love solving <span style='color:white'>problems</span> using <p style='color:white'>various technologies <span style='color:orange'>tools</span></p>";
	                   document.getElementById('num3').src='pic/adeyemi3.jpg';
                return resp=1;
}//else if (resp==3) {document.getElementById('num1').innerHTML="";
//                      document.getElementById('num2').innerHTML="";
//                      document.getElementById('num4').src='';

//                      resp=1;
//                  }
	

	}
	
setInterval(traffic,3000)

</script>

</body>
</html>