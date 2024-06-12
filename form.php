<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Oman Form</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://www.google.com/recaptcha/enterprise.js?render=6LfAa_YpAAAAAHLQVMblPcplDrdy8HdfLfmyD7ek"></script>
    <style>@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap');</style>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            background: linear-gradient(45deg, #f4524d, #5543ca);
            background-size: cover;
            position: relative;
        }
        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: inherit;
            filter: blur(10px);
            z-index: -1;
        }
        .get-in-touch {
            max-width: 800px;
            width: 100%;
            margin: 50px auto;
            background: rgb(176 176 176 / 66%);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .get-in-touch .title {
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 3px;
            font-size: 3.2em;
            line-height: 48px;
            padding-bottom: 48px;
            color: #5543ca;
            background: #5543ca;
            background: -moz-linear-gradient(left, #f4524d 0%, #5543ca 100%) !important;
            background: -webkit-linear-gradient(left, #f4524d 0%, #5543ca 100%) !important;
            background: linear-gradient(to right, #f4524d 0%, #5543ca 100%) !important;
            -webkit-background-clip: text !important;
            -webkit-text-fill-color: transparent !important;
        }
        .contact-form .form-field {
            position: relative;
            margin: 32px 0;
        }
        .contact-form .input-text {
            display: block;
            width: 100%;
            height: 36px;
            border-width: 0 0 2px 0;
            border-color: #ca4343;
            font-size: 18px;
            line-height: 26px;
            font-weight: 400;
        }
        .contact-form .input-text:focus {
            outline: none;
        }
        .contact-form .label {
            position: absolute;
            left: 20px;
            bottom: 30px;
            font-size: 18px;
            line-height: 26px;
            font-weight: 400;
            color: #111111;
            cursor: text;
        }
        .contact-form .submit-btn {
            display: inline-block;
            background-color: #000;
            background-image: linear-gradient(125deg, #000000, #ff0000b9);
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 16px;
            padding: 8px 16px;
            border: none;
            width: 200px;
            cursor: pointer;
        }
        .logo {
            display: block;
            margin: 0 auto 50px;
            max-width: 200px;
        }
        .intro-text {
            margin: 20px 19px;
            text-align: left;
            font-size: 1.2em;
            line-height: 1.5em;
            font-family: "Josefin Sans", sans-serif;
  font-optical-sizing: auto;
  font-weight: 300;
  font-style: normal;
        }
        legend {
            display: inline-block;
            background-color: #000;
            background-image: linear-gradient(125deg, #000000, #ff0000b9);
            color: #fff;
            text-transform: uppercase;
            padding: 10px;
            margin-top: 5px;
            cursor: pointer;
        }
        .hidden-content {
            display: none;
        }
        .full-width {
            width: 100%;
        }
    </style>
</head>
<body>
    <section class="get-in-touch">
        <img src="/logo.jpg" alt="Tech Oman Logo" class="logo">
        <div class="intro-text" style="margin: 20px 0;">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in nulla et lacus suscipit interdum a et lectus. Sed vehicula justo non urna aliquet, in scelerisque sapien convallis. Integer non lectus ut nulla commodo pharetra. Nam fermentum eros sit amet ex vulputate, in interdum ligula dictum.
        </div>
        <form class="contact-form row" action="" method="post" onsubmit="return validateForm()">
            <fieldset class="col-lg-12">
                <legend class="toggle-legend">IT Events/Forums</legend>
                <div class="hidden-content">
                    <p>What type of IT events or forums would you be most interested in attending?</p>
                    <label><input type="checkbox" name="it_events[]" value="The Future of Work in the Digital Age"> The Future of Work in the Digital Age</label><br>
                    <label><input type="checkbox" name="it_events[]" value="Cybersecurity and Digital Resilience in a Connected World"> Cybersecurity and Digital Resilience in a Connected World</label><br>
                    <label><input type="checkbox" name="it_events[]" value="Bridging the Digital Divide: Ensuring Equitable Access to Technology for All"> Bridging the Digital Divide: Ensuring Equitable Access to Technology for All</label><br>
                    <label><input type="checkbox" name="it_events[]" value="E-Government and Digital Transformation for Public Service Delivery"> E-Government and Digital Transformation for Public Service Delivery</label><br>
                    <label><input type="checkbox" name="it_events[]" value="Start-up Pitch Competitions and Funding Opportunities"> Start-up Pitch Competitions and Funding Opportunities</label><br>
                    <label class="full-width"><input type="text" name="it_events_suggestion" placeholder="Suggest if you have something you think should be arranged" class="input-text"></label>
                </div>
            </fieldset>
            <div class="intro-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in nulla et lacus suscipit interdum a et lectus. Sed vehicula justo non urna aliquet, in scelerisque sapien convallis. Integer non lectus ut nulla commodo pharetra. Nam fermentum eros sit amet ex vulputate, in interdum ligula dictum.
            </div>
            <fieldset class="col-lg-12">
                <legend class="toggle-legend">Online Incubation Center</legend>
                <div class="hidden-content">
                    <p>What kind of support or resources would be most valuable to you as a startup or new graduate?</p>
                    <label><input type="checkbox" name="incubation_support[]" value="Mentorship and Guidance"> Mentorship and Guidance</label><br>
                    <label><input type="checkbox" name="incubation_support[]" value="Access to Funding and Investment"> Access to Funding and Investment</label><br>
                    <label><input type="checkbox" name="incubation_support[]" value="Business Planning and Strategy"> Business Planning and Strategy</label><br>
                    <label><input type="checkbox" name="incubation_support[]" value="Marketing and Sales Support"> Marketing and Sales Support</label><br>
                    <label><input type="checkbox" name="incubation_support[]" value="Technical Development and Product Prototyping"> Technical Development and Product Prototyping</label><br>
                    <label class="full-width"><input type="text" name="incubation_suggestion" placeholder="Suggest if you have something you think should be arranged" class="input-text"></label>
                </div>
            </fieldset>
            <div class="intro-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in nulla et lacus suscipit interdum a et lectus. Sed vehicula justo non urna aliquet, in scelerisque sapien convallis. Integer non lectus ut nulla commodo pharetra. Nam fermentum eros sit amet ex vulputate, in interdum ligula dictum.
            </div>
            <fieldset class="col-lg-12">
                <legend class="toggle-legend">Learning Management System (LMS)</legend>
                <div class="hidden-content">
                    <p>Which skills or knowledge areas are you most interested in learning to enhance your freelancing or entrepreneurial journey?</p>
                    <label><input type="checkbox" name="lms_skills[]" value="Freelancing"> Freelancing</label><br>
                    <label><input type="checkbox" name="lms_skills[]" value="Graphics Design"> Graphics Design</label><br>
                    <label><input type="checkbox" name="lms_skills[]" value="Entrepreneurship Curriculum"> Entrepreneurship Curriculum</label><br>
                    <label><input type="checkbox" name="lms_skills[]" value="E-Commerce Management"> E-Commerce Management</label><br>
                    <label><input type="checkbox" name="lms_skills[]" value="AI for Everyone"> AI for Everyone</label><br>
                    <label><input type="checkbox" name="lms_skills[]" value="Cybersecurity Foundation"> Cybersecurity Foundation</label><br>
                    <label><input type="checkbox" name="lms_skills[]" value="Data Analytics & Business Intelligence"> Data Analytics & Business Intelligence</label><br>
                    <label><input type="checkbox" name="lms_skills[]" value="Digital Content Creation"> Digital Content Creation</label><br>
                    <label><input type="checkbox" name="lms_skills[]" value="Business Management and Financial Planning"> Business Management and Financial Planning</label><br>
                    <label><input type="checkbox" name="lms_skills[]" value="Customer Service and Client Management"> Customer Service and Client Management</label><br>
                    <label class="full-width"><input type="text" name="lms_suggestion" placeholder="Suggest if you have something you think should be arranged" class="input-text"></label>
                </div>
            </fieldset>

            <div class="form-field col-lg-6">
                <input id="name" class="input-text js-input" type="text" name="name" required>
                <label class="label" for="name">Name</label>
            </div>
            <div class="form-field col-lg-6 ">
                <input id="email" class="input-text js-input" type="email" name="email" required>
                <label class="label" for="email">E-mail</label>
            </div>
            <div class="form-field col-lg-6 ">
                <input id="phone" class="input-text js-input" type="text" name="phone" required>
                <label class="label" for="phone">Contact Number</label>
            </div>
            <div class="form-field col-lg-6">
                <input id="message" class="input-text js-input" type="text" name="message" required>
                <label class="label" for="message">Message</label>
            </div>
            <div class="form-field col-lg-12">
                <div class="g-recaptcha" data-sitekey="6LfhbvYpAAAAAJdg49dY975b3ui5JTOp-6GXDt07"></div>
            </div>
            <div class="form-field col-lg-12">
                <input class="submit-btn" type="submit" value="Submit">
            </div>
        </form>
    </section>

    <script>
        function validateForm() {
            var name = document.getElementById('name').value.trim();
            var email = document.getElementById('email').value.trim();
            var phone = document.getElementById('phone').value.trim();

            if (name === '' || email === '' || phone === '') {
                alert('Please fill all required fields.');
                return false;
            }

            return true;
        }

        function onClick(e) {
          e.preventDefault();
          grecaptcha.enterprise.ready(async () => {
            const token = await grecaptcha.enterprise.execute('6LfAa_YpAAAAAHLQVMblPcplDrdy8HdfLfmyD7ek', {action: 'LOGIN'});
          });
        }

        document.addEventListener("DOMContentLoaded", function() {
            const legends = document.querySelectorAll('.toggle-legend');
            legends.forEach(legend => {
                legend.addEventListener('click', function() {
                    const hiddenContent = this.nextElementSibling;
                    if (hiddenContent.style.display === "none" || hiddenContent.style.display === "") {
                        hiddenContent.style.display = "block";
                    } else {
                        hiddenContent.style.display = "none";
                    }
                });
            });
        });
    </script>
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // Database configuration
    $servername = "localhost";
    $username = "root"; // Replace with your database username
    $password = ""; // Replace with your database password
    $dbname = "tech_oman";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Sanitize and validate input
    function sanitize_input($data) {
        return htmlspecialchars(stripslashes(trim($data)));
    }

    $name = sanitize_input($_POST['name']);
    $email = sanitize_input($_POST['email']);
    $phone = sanitize_input($_POST['phone']);
    $message = sanitize_input($_POST['message']);
    $it_events = isset($_POST['it_events']) ? implode(", ", $_POST['it_events']) : '';
    $incubation_support = isset($_POST['incubation_support']) ? implode(", ", $_POST['incubation_support']) : '';
    $lms_skills = isset($_POST['lms_skills']) ? implode(", ", $_POST['lms_skills']) : '';
    $it_events_suggestion = sanitize_input($_POST['it_events_suggestion']);
    $incubation_suggestion = sanitize_input($_POST['incubation_suggestion']);
    $lms_suggestion = sanitize_input($_POST['lms_suggestion']);

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO form_submissions (name, email, phone, message, it_events, incubation_support, lms_skills, it_events_suggestion, incubation_suggestion, lms_suggestion) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }
    $stmt->bind_param("ssssssssss", $name, $email, $phone, $message, $it_events, $incubation_support, $lms_skills, $it_events_suggestion, $incubation_suggestion, $lms_suggestion);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error executing statement: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
