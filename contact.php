<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>contact us</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="icon" type="image/png" href="favicon1.png" />
	      <link href="https://fonts.googleapis.com/css2?family=Vollkorn+SC&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="contactus.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    html,body{
        background-color: #2C3134;
      
    }
    *{
		              margin: 0;
		              padding: 0;
		             
		             
		              
		          }
		          .all{
		              background-color: #2C3134;
		          }
         .logotxt {
	font-size: 35px;
	font-weight:;
	color: white;
	font-family: 'Vollkorn SC', serif;
}
		          .ab{
		              margin-top: 50px;
		          }
		           .logopng{
		              
		              height: 60px;
		              width: 240px;
		          }
		          .navcolor{
		              background-color:#003542;
		          }
		          .heading{
		              
		              margin-top: 40px;
		          }
		          .logoimgg{
		              margin-top: 50px;
		             
		              
		
		          }
		         
		          .nav-item {
	transition:1s;
}
ul:hover li:not(:hover) {
    opacity: 0.1;
}
.nav-item:hover {
	background-color: ;
	letter-spacing: 3px;
	

}

         
		          .navcolor{
		              background-color: #003542;
		          }
		           
		       
		          
		           .nav-link{
		            
		            font-size: 16px;
		        }
		      .foot {
   
  position: absolute;
  right: 0;
  margin-top:0;
  bottom: ;
  left: 0;
  padding: 1rem;
  background-color: #282C34;
  text-align: center;
   font-family: 'Vollkorn SC', serif;
}
	
	
         .container-fluid {
    padding-right:2px;
    padding-left:2px;
    margin-right:auto;
    margin-left:auto;
            
 }
 @media (max-width:768px)
{
    .logotxt{
      font-size:28px;
      text-align:center;
    }
    
}
.spanup{
    color:cyan;
}
.navbar{
    padding-top:0 !important;
    padding-bottom:0 !important;
 
}
.contact{
    font-size:30px;
    color:white;
}
p{
    color:white;
    font-size:18px;
}
nav .navbar-nav li a{
	color: white !important;
	}
	input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  background-color:#EEEEEE;
}
	input[type=email]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
   background-color:#EEEEEE;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
   background-color:#EEEEEE;
}

input[type=submit]:hover {
  background-color: ;
}
input[type=submit]{
    background-color:#003542;
    border:1px solid cyan;
}

.container {
   
  border-radius: 5px;
  background-color:#2C3134;
  padding: 20px;
  margin-top:45px;
  color:white;
  border:1px solid cyan;
  margin-bottom:20px;
}

 @media (max-width:768px)
{
.wrappercontacts{
    
    
}
}

        

    </style>
	
</head>

<body>
	  <div class="container-fluid all">
         <div class="container-fluid">
            <div class="logotxt">HtmlEditOnline<span class="spanup">.tech</span></div>
            <nav class="navbar navbar-expand-sm  navbar-dark navcolor ">
               <a href="#" class="navbar-brand logo"></a>
               <button class="navbar-toggler" data-toggle="collapse" data-target="#items"> <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="items">
                  <ul class="navbar-nav">
                     <li class="nav-item "><a href="index.html" class="nav-link"><i class="fa fa-fw fa-home"></i> HTML-EDITOR</a>
                     </li>
                     <li class="nav-item "><a href="java_compiler.html" class="nav-link">JAVA-COMPILER</a>
                     </li>
                     <li class="nav-item"><a href="web_content_composer.html" class="nav-link"> HTML-GENERATOR</a>
                     </li>
                     <li class="nav-item"><a href="all_html_tags.html" class="nav-link"></i > ALL HTML TAGS</a>
                     </li>
                     <li class="nav-item"><a href="aboutus.html" class="nav-link"></i> ABOUT</a>
                     </li>
                     <li class="nav-item"><a href="contact.php" class="nav-link"></i> CONTACT US</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
         <div class='wrappercontacts'>
          <div class="container">
  <form action="contact.php" method="POST">
    <label for="fname">Name</label>
    <input type="text" id="fname" name="name" placeholder="Your name..">

    <label for="email">Last Name</label>
    <input type="email" id="email" name="email" placeholder="Enter your email..">


    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit" name="submit"  >
  </form>
</div>
</div>

<div class="container-fluid foot">
		<div class="row">
			<div class="col-xl-12 col-md-12 col-sm-12 col-12">
				<p style="color: cyan;padding-top: 8px;font-size: 20px;">powered by- HtmlEditOnline</p>
			</div>
		</div>
	</div>
	</div>
	</div>
	
	


<?php

$servername = "shareddb-x.hosting.stackcp.net";
$username = "313537f3c9";
$password = "Columbus@abhi123";
$dbname = "contactus_details-313537f3c9";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


if(isset($_POST['submit'])){
   
    $name = $_POST["name"];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
   
    $insert = "insert into contactusdetails(name,email,subject) values('$name','$email','$subject')";
    
    if(mysqli_query($conn, $insert)){
        
   echo "New record created successfully";
       
    }else{
        echo "Error: " . $insert . "<br>" . mysqli_error($conn);
       
    }
}
mysqli_close($conn);



?>

	
	
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>