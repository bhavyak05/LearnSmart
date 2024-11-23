<!DOCTYPE HTML>
<html>

<head>
    <title>Form Submission Result</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styletable.css"> <!-- Include your CSS file if needed -->
</head>
<style>
        HTML {
            padding-top: 20px;
            padding-left: 100px;
            padding-right: 100px;
            padding-bottom: 100px;
        }

        body {
            background-image: url("https://img.freepik.com/free-vector/simple-blue-gradient-background-vector-business_53876-143439.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        table {
            border: 1px solid black;
            width: 100%;
            height: 70px;
            border-radius: 10px;
        }

        table,
        th,
        td {
            border: 1px solid black;
            font-size: 20px;
            font-family: Georgia, Garamond, Serif;
            border-collapse: collapse;
            border-radius: 10px;
        }

        th {
            padding: 25px;
            text-align: center;
        }

        td {
            padding: 20px;
            text-align: left;
        }

        td:hover {
            background-color: powderblue;
        }

        tr:hover {
            background-color: powderblue;
        }

        ul.duties {
            list-style-type: disc;
        }

        ol.eligib {
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

        nav a:hover {
            text-decoration: underline;
            background-color: white;
        }

        /* Style all font awesome icons */
        .fa {
            padding: 40px;
            font-size: 30px;
            width: 50px;
            text-align: center;
            color: white;
        }

        /* Add a hover effect if you want */
        .fa:hover {
            opacity: 0.7;
            background-color: black;
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

        a:hover {
            color: red;
        }

        .id:link {
            color: white;
        }

        .id:visited {
            color: white;
        }

        .id:hover {
            color: red;
        }
    </style>
</HEAD>

<body>
    <header class="head">
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
    <CENTER>
        <h1> <strong><i><B><big> EXPERTALK </BIG></B></I></strong></h1>
        <h2><I><STRONG> Path To Success </strong></i></h2>
        <br>
        <h2> <strong>WELCOME</strong></h2>
        <H2> Take A Step Towards Your Professional Growth </H2>
        <br>
        <br>
        <h1>Form Submission Result</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") { // Check if the form was submitted using POST method
        $name = $_POST["name"];
        $email = $_POST["email"];
        $contact = $_POST["contact"];
        $city = $_POST["city"];
        $college = $_POST["college"];
        $gender = $_POST["gender"];
        $selection = $_POST["selection"];

 

        echo "<h2>Personal Information</h2>";
        echo "<p ><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Contact:</strong> $contact</p>";
        echo "<p><strong>City:</strong> $city</p>";
        echo "<p><strong>Institute:</strong> $college</p>";
        echo "<p><strong>Gender:</strong> $gender</p>";

        echo "<p>You have been registered for your selections";}
    ?>
<p> your feedback is valuable.<a href="feedback.php"> CLICK HERE for feedback<a><p>
    <a href="HTML.html">HOME</a>

</body>

</html>
