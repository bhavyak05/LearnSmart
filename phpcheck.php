<!DOCTYPE HTML>
<HTML><TITLE> LearnSmart </title>
<HEAD><meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="C:\Users\bhavy\OneDrive\Documents\college\WEB DEV\styletable.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>HTML {
          
padding-top: 20px;
padding-left: 100px;
padding-right: 100px;
padding-bottom: 100px;
     }

    body{
      background-image: url("https://img.freepik.com/free-vector/simple-blue-gradient-background-vector-business_53876-143439.jpg");
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }
table{
border : 1px solid black;
width : 100% ;
height : 70px;
border-radius: 10px;

}
table, th, td {
  border : 1px solid black;
font-size:20px;
font-family:Georgia, Garamond, Serif;
border-collapse:collapse;

border-radius: 10px;
}
th{
padding:25px;
text-align:center;
}
td{
padding:20px;
text-align :left;
}

td:hover{

background-color: powderblue;
}
tr:hover{
background-color: powderblue;
}
ul.duties{
list-style-type: disc;
}
ol.eligib{
list-style-type: lower-roman;
}
header {
            background-color: black;
            color: white;
            padding: 10px 0;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        header h1 {
            margin: 0;
            font-weight: bold;
            font-size: 24px;

        }
        nav {
            font-size: 18px;

        }
        nav a {
            color: white;
            font-weight: bold;
            text-decoration: none;
            margin: 0 10px;
        }
nav a:hover{
text-decoration:underline;
background-color:white;}


/* Style all font awesome icons */
.fa {
  padding: 40px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  
color:white;
}

/* Add a hover effect if you want */
.fa:hover {
  opacity: 0.7;
background-color:black;
}

/* Set a specific color for each brand */

/* Facebook */
.fa-facebook {
  background: dodgerblue;
  color: white;
}

/* Twitter */
.fa-twitter {
  background: dodgerblue;
  color: white;
}
.fa-instagram {
  background: dodgerblue;
  color: white;
}
.fa-linkedin {
  background: dodgerblue;
  color: white;
}
   
a:link {
  color: firebrick;
}
a:visited {
  color: purple;
}
a:hover{
color:red;
}
li{
color:blue;
font-size:18px;
}

.id:link{
color:white;
}
.id:visited{
color:white;
}
.id:hover{
color:red;
}
    
</style></head>
<body>
    <header class = "head">
            <h1>LearnSmart</h1>
            <nav>
    <a href="HTML.html" class= "id" >HOME</A>
            <a href="career.html" class= "id">COURSES</a>
            <a href="finance.html" class= "id">PARTNERS</a>
<a href = "quiz .html" class= "id">APTITUDE QUIZ</A>
            <a href="testmaterial.php" class= "id">APPLY</a>
            <a href="help.html" class="id">HELP</a>
    
                
            </nav>
        </header>
    <h1> <strong><i><big><CENTER> LearnSmart </CENTER></BIG></I></strong></h1>
    <h2><I><STRONG><CENTER> Path To Success </CENTER></strong></i></h2>
    <br>

<?php
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST['phone'];
$inst = $_POST["institute"];

if($name==TRUE && $email==TRUE && $inst==TRUE && $phone==TRUE){
    echo "<h3>Your request has been successfully submitted!</h3>";
    echo "<br>";
    echo "<h3>Applicant details are: </h3>";
    $str = array($name,$email);
    foreach($str as $word){
        echo "<br>";
        echo "<h3>$word</h3>";
        sleep(0.5);
    }
    echo "<br>";

    echo "<h3>You will be contacted on $phone within 24hours</h3>";
}
else{
    echo "<h3>Form fields are empty!</h3>";
    echo "<h3>Try Again!</h3>";
}

?></body></html>