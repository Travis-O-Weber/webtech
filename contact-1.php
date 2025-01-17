<!DOCTYPE html>
<html>
<head>
    <title>Travis Weber's Career Aspirations</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- Your main custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- Templatemo Style that overrides the main.css -->
    <link rel="stylesheet" href="assets/css/templatemo-style.css">
</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
    <!-- MENU -->
    <section class="sign-up-form">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- PHP Code Starts Here -->
                    <?php
                    // Initialize variables to hold form data and error messages
                    $firstName = $lastName = $email = $phoneNumber = $username = $password = $comments = "";
                    $firstNameErr = $lastNameErr = $emailErr = $phoneNumberErr = $usernameErr = $passwordErr = $commentsErr = "";

                    // Process form when submitted
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $isValid = true;

                        // Validate First Name
                        if (empty($_POST["firstname"])) {
                            $firstNameErr = "First name is required";
                            $isValid = false;
                        } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $_POST["firstname"])) {
                            $firstNameErr = "Only letters, hyphens, apostrophes, and spaces allowed";
                            $isValid = false;
                        } else {
                            $firstName = test_input($_POST["firstname"]);
                        }

                        // Validate Last Name
                        if (empty($_POST["lastname"])) {
                            $lastNameErr = "Last name is required";
                            $isValid = false;
                        } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $_POST["lastname"])) {
                            $lastNameErr = "Only letters, hyphens, apostrophes, and spaces allowed";
                            $isValid = false;
                        } else {
                            $lastName = test_input($_POST["lastname"]);
                        }

                        // Validate Email
                        if (empty($_POST["email"])) {
                            $emailErr = "Email is required";
                            $isValid = false;
                        } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                            $emailErr = "Invalid email format";
                            $isValid = false;
                        } else {
                            $email = test_input($_POST["email"]);
                        }

                        // Validate Phone Number
                        if (empty($_POST["phonenumber"])) {
                            $phoneNumberErr = "Phone number is required";
                            $isValid = false;
                        } elseif (!preg_match("/^[0-9]*$/", $_POST["phonenumber"])) {
                            $phoneNumberErr = "Only digits allowed";
                            $isValid = false;
                        } else {
                            $phoneNumber = test_input($_POST["phonenumber"]);
                        }

                        // Validate Username
                        if (empty($_POST["username"])) {
                            $usernameErr = "Username is required";
                            $isValid = false;
                        } else {
                            $username = test_input($_POST["username"]);
                        }

                        // Password and comments can contain any characters so just check if they are set
                        if (empty($_POST["password"])) {
                            $passwordErr = "Password is required";
                            $isValid = false;
                        } else {
                            $password = test_input($_POST["password"]);
                        }

                        if (empty($_POST["comments"])) {
                            $commentsErr = "Comments are required";
                            $isValid = false;
                        } else {
                            $comments = test_input($_POST["comments"]);
                        }
						
						
						 if ($isValid) {
                            // Displaying submitted information (valid scenario)
                            echo "<h2>Hello from results</h2>";
                            echo '<p>First Name: ' . htmlspecialchars($_POST['firstname']) . '</p>';
                            echo '<p>Last Name: ' . htmlspecialchars($_POST['lastname']) . '</p>';
                            echo '<p>Email: ' . htmlspecialchars($_POST['email']) . '</p>';
                            echo '<p>Phone: ' . htmlspecialchars($_POST['phonenumber']) . '</p>';
                            echo '<p>Username: ' . htmlspecialchars($_POST['username']) . '</p>';
                            echo '<p>Password: ' . htmlspecialchars($_POST['password']) . '</p>';
                            echo '<p>Comments: ' . htmlspecialchars($_POST['comments']) . '</p>';
                            
                            if ($_POST['email'] == "admin@utsa.edu") {
                                echo '<h2>Welcome to the admin dashboard</h2>';
                            }
                            exit; // Stop script execution after displaying the results
                        }
                    }

                        function test_input($data) {
                            $data = trim($data);
                            $data = stripslashes($data);
                            $data = htmlspecialchars($data);
                            return $data;
                        }
						
						
                    
                    ?>
                    <!-- Sign Up Form -->
                    <form id="signupForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" style="padding:20px;margin=20px">
                        <div class="form-group">
                            <label for="firstName">First Name:</label>
                            <input type="text" class="form-control" id="firstName" name="firstname" value="<?php echo $firstName; ?>"/>
                            <span class="error"><?php echo $firstNameErr; ?></span>
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name:</label>
                            <input type="text" class="form-control" id="lastName" name="lastname" value="<?php echo $lastName; ?>"/>
                            <span class="error"><?php echo $lastNameErr; ?></span>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>"/>
                            <span class="error"><?php echo $emailErr; ?></span>
                        </div>
                        <div class="form-group">
                            <label for="phoneNumber">Phone Number:</label>
                            <input type="tel" class="form-control" id="phoneNumber" name="phonenumber" value="<?php echo $phoneNumber; ?>"/>
                            <span class="error"><?php echo $phoneNumberErr; ?></span>
                        </div>
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" id="username" name="username" value="<?php echo $username; ?>"/>
                            <span class="error"><?php echo $usernameErr; ?></span>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" value="<?php echo $password; ?>"/>
                            <span class="error"><?php echo $passwordErr; ?></span>
                        </div>
                        <div class="form-group">
                            <label for="comments">Comments:</label>
                            <textarea class="form-control" id="comments" name="comments"><?php echo $comments; ?></textarea>
                            <span class="error"><?php echo $commentsErr; ?></span>
                        </div>
                        <input type="submit" name="submit" value="Submit">
                    </form>
                    <!-- End of Sign Up Form -->
                </div>
            </div>
        </div>
    </section>
    <script src="assets/js/event-listener.js"></script>
</body>
</html>

<script src= "assets/js/event-listener.js"></script>