<!DOCTYPE HTML>
<html>

<head>
    <title>Feedback Form with Star Rating</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        .star-rating {
            unicode-bidi: bidi-override;
            direction: rtl;
            text-align: center;
            display: inline-block;
        }

        .star-rating input[type="radio"] {
            display: none;
        }

        .star-rating label {
            color: #ccc;
            font-size: 30px;
            padding: 5px;
            cursor: pointer;
        }

        .star-rating label:before {
            content: "\2605";
        }

        .star-rating input[type="radio"]:checked~label {
            color: gold;
        }

        .feedback-text {
            margin: 20px 0;
        }
    </style>
</head>

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
        <H3><u>FEEDBACK FORM</u></H3>
    </CENTER><BR><BR>
    <h1>Feedback Form</h1>

    <form id="feedbackForm" method="GET" action = "thankyou.php">
        <p>Rate your experience:</p>
        <div class="star-rating">
            <input type="radio" id="star5" name="rating" value="5" />
            <label for="star5"></label>
            <input type="radio" id="star4" name="rating" value="4" />
            <label for="star4"></label>
            <input type="radio" id="star3" name="rating" value="3" />
            <label for="star3"></label>
            <input type="radio" id="star2" name="rating" value="2" />
            <label for="star2"></label>
            <input type="radio" id="star1" name="rating" value="1" />
            <label for="star1"></label>
        </div>

        <div class="feedback-text">
            <label for="feedback">Your feedback:</label><br>
            <textarea id="feedback" name="feedback" rows="4" maxlength ="250" required></textarea><BR><BR>
        </div>
<DIV class="details">
<label for="name">Name:</label>
        <input type="text" id="name" name="name" ><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" ><br><br>
<p> Is this your first feedback? </p>
<label for="yes"> Yes </label>
<input type = "radio" id ="yes" name="question" value="yes" />
<label for="yes"> No </label>
<input type = "radio" id ="no" name="question" value="no" />
</div>

        <input type="submit" name = "Submit" value="Submit">
    </form>

    <script>
        document.getElementById("feedbackForm").addEventListener("submit", function (e) {
           
            const rating = document.querySelector('input[name="rating"]:checked').value;

            // Get the feedback text
            const feedbackText = document.getElementById("feedback").value;
        });
    </script>
</body>

</html>
