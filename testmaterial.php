<!DOCTYPE HTML>
<HTML>

<HEAD>
    <title>Submit Application</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styletable.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
        <H3><u>APPLICATION FORM</u></H3>
    </CENTER><BR><BR>

    <form id="mainForm" method="POST" action="process_form.php">
        <LABEL FOR="NAME"> NAME </LABEL><BR>
        <INPUT TYPE="TEXT" ID="NAME" NAME="name" VALUE="" required><BR><br>
        <LABEL FOR="EMAIL"> EMAIL ID </LABEL><BR>
        <INPUT TYPE="email" ID="email" NAME="email" VALUE="" required><BR><br>
        <LABEL FOR="CONTACT"> CONTACT </LABEL><BR>
        <INPUT TYPE="tel" ID="CONTACT" NAME="contact" VALUE="" required><BR><br>
        <LABEL FOR="CITY"> CITY </LABEL><BR>
        <INPUT TYPE="TEXT" ID="CITY" NAME="city" VALUE="" required><BR><br>
        <LABEL FOR="COLLEGE"> INSTITUTE </LABEL><BR>
        <INPUT TYPE="TEXT" ID="COLLEGE" NAME="college" VALUE="" required><BR><br>
        <LABEL FOR="GENDER"> GENDER </LABEL><BR>
        <INPUT TYPE="RADIO" ID="MALE" NAME="gender" VALUE="MALE" REQUIRED>
        <LABEL FOR="MALE">MALE</LABEL><BR>
        <INPUT TYPE="RADIO" ID="FEMALE" NAME="gender" VALUE="FEMALE" REQUIRED>
        <LABEL FOR="FEMALE">FEMALE</LABEL><BR>
        <INPUT TYPE="RADIO" ID="OTHER" NAME="gender" VALUE="OTHER" REQUIRED>
        <LABEL FOR="OTHER">OTHER</LABEL><BR><BR>

        <LABEL FOR="needed">DO YOU WANT</label><br>
        <input type="radio" id="CourseRadio" name="selection" value="Course" onchange="toggleForm('course')"> Course
        <input type="radio" id="PackRadio" name="selection" value="Pack" onchange="toggleForm('pack')"> Pack
        <input type="radio" id="BothRadio" name="selection" value="Both" onchange="toggleForm('both')"> Both
    </form>

    <div id="course" style="display: none;">
        <h3>Course Form (Every Course is priced at Rs 2000)</h3>
        <form id="courseForm" method="GET">
            <LABEL FOR="COURSE_FIELD"> Course  </LABEL><BR>
            <br>
            <input type="checkbox" name="course_domain[]" value="FSD">Full Stack Development
            <input type="checkbox" name="course_domain[]" value="AI">Artificial Intelligence
            <input type="checkbox" name="course_domain[]" value="PP">Python Programming
            <input type="checkbox" name="course_domain[]" value="Advertising">Advertising
            <input type="checkbox" name="course_domain[]" value="DM">Digital Marketing
            <input type="checkbox" name="course_domain[]" value="Blogging">Blogging
            <input type="checkbox" name="course_domain[]" value="SMCC">Social Media Content Creation
            <input type="checkbox" name="course_domain[]" value="GD">Graphic Designing
            <br><br>
        </form>
    </div>

    <div id="pack" style="display: none;">
        <h3>Pack Form(Every Pack is priced at Rs 4000)</h3>
        <form id="packForm" method="GET">
            <label for="pack_domain" required>Select Pack:</label><br>
            <input type="checkbox" name="pack_domain[]" value="Technology">Technology
            <input type="checkbox" name="pack_domain[]" value="Creation">Creation
            <input type="checkbox" name="pack_domain[]" value="Marketing">Marketing
            <br><br>
        </form>
    </div>

    <div id="both" style="display: none;">
        <h3>Selection Form(Every Course is priced at Rs 2000 and Pack at Rs.4000)</h3>
        <form id="bothForm" method="GET">
            <label for="both_domain" required>Select: </label><br>
            <input type="checkbox" name="both_domain[]" value="FSD">Full Stack Development<br>
            <input type="checkbox" name="both_domain[]" value="AI">Artificial Intelligence<br>
            <input type="checkbox" name="both_domain[]" value="PP">Python Programming<br>
            <input type="checkbox" name="both_domain[]" value="Advertising">Advertising<br>
            <input type="checkbox" name="both_domain[]" value="DM">Digital Marketing<br>
            <input type="checkbox" name="both_domain[]" value="Blogging">Blogging<br>
            <input type="checkbox" name="both_domain[]" value="SMCC">Social Media Content Creation<br>
            <input type="checkbox" name="both_domain[]" value="GD">Graphic Designing<br>
            <input type="checkbox" name="both_domain[]" value="Technology">Technology Pack<br>
            <input type="checkbox" name="both_domain[]" value="Creation">Creation Pack<br>
            <input type="checkbox" name="both_domain[]" value="Marketing">Marketing Pack<br>
            <br><br>
        </form>
    </div>

    <button id="calculateBill" onclick="calculateBill()">Calculate Bill</button>
<p id="billAmount"></p>
<div id="reg"></div>
                <button type="submit" id="submitButton" onclick="submitForm()" name="Pay" style="display: none;">Pay Now</button>
    <script>
	function submitForm() {
    // You can choose to submit the mainForm here or create a new form to send data to your desired URL.
    document.getElementById('mainForm').submit();
}

        function toggleForm(formId) {
    const forms = ['course', 'pack', 'both'];
    forms.forEach((form) => {
        const element = document.getElementById(form);
        if (form === formId) {
            element.style.display = 'block';
        } else {
            element.style.display = 'none';
            // Clear the form fields
            clearFormFields(form);
        }
    });
}

function clearFormFields(formId) {
    const form = document.getElementById(formId);
    const checkboxes = form.querySelectorAll('input[type="checkbox"]');
    checkboxes.forEach((checkbox) => {
        checkbox.checked = false;
    });
}

function calculateBill() {
    const courseChecked = document.querySelectorAll('#courseForm input[type="checkbox"]:checked').length;
    const packChecked = document.querySelectorAll('#packForm input[type="checkbox"]:checked').length;
    const bothChecked = document.querySelectorAll('#bothForm input[type="checkbox"]:checked');

    let totalAmount = 0;
    bothChecked.forEach((item) => {
        const value = item.value;
        const prices = {
            'FSD': 2000,
            'AI': 2000,
            'PP': 2000,
            'Advertising': 2000,
            'DM': 2000,
            'Blogging': 2000,
            'SMCC': 2000,
            'GD': 2000,
            'Technology': 4000,
            'Creation': 4000,
            'Marketing': 4000
        };

        totalAmount += prices[value];
    });

    const coursePrice = 2000; // Price per course
    const packPrice = 4000; // Price per pack
    const calculatedAmount = (courseChecked * coursePrice) + (packChecked * packPrice) + totalAmount;

    document.getElementById('billAmount').textContent = 'Bill Amount: Rs' + calculatedAmount;

document.getElementById('submitButton').style.display = 'block';
}

function submitForm() {
    
    document.getElementById('mainForm').submit();
}

document.getElementById('submitButton').addEventListener('click', function() {
    document.getElementById('mainForm').submit();
});


// Initialize the form based on the initial selection
document.querySelector('input[name="selection"]:checked').click();



    </script>

    <CENTER><A HREF="HTML.HTML"> MAIN PAGE </A></CENTER>
    <a href="#" class="fa fa-facebook"></a>
    <a href="#" class="fa fa-twitter"></a>
    <a href="#" class="fa fa-instagram"></a>
    <a href="#" class="fa fa-linkedin"></a>
    <br><br>
    <a href="#">TOP</a>
</body>

</html>
