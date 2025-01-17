

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
               <form id="signupForm" method="post" action="">
                    <!-- Form Fields Here -->
                    <input type="submit" name="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</section>
	
<!-- SIGN UP FORM SECTION -->
<section class="sign-up-form">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Sign Up Form -->
					<form id="signupForm" method="post" action="" style="padding:20px;margin=20px">
                    <!-- First Name Field -->
                    <div class="form-group">
                        <label for="firstName">First Name:</label>
						<input type="text" class="form-control" id="firstName" required name="firstname" />
                        <div id="firstNameFeedback"></div>
                    </div>
                    <!-- Last Name Field -->
                    <div class="form-group">
                        <label for="lastName">Last Name:</label>
                        <input type="text" class="form-control" id="lastName" required name="lastname" />
                        <div id="lastNameFeedback"></div>
                    </div>
                    <!-- Email Field -->
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" required name="email" />
                        <div id="emailFeedback"></div>
                    </div>
                    <!-- Phone Number Field -->
                    <div class="form-group">
                        <label for="phoneNumber">Phone Number:</label>
                        <input type="tel" class="form-control" id="phoneNumber" required name="phonenumber" />
                        <div id="phoneFeedback"></div>
                    </div>
                    <!-- Username Field -->
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" required name="username"/>
                        <div id="usernameFeedback"></div>
                    </div>
                    <!-- Password Field -->
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" required name="password"/>
                        <div id="passwordFeedback"></div>
                    </div>
                    <!-- Comments Field -->
                    <div class="form-group">
                        <label for="comments">Comments:</label>
                        <textarea class="form-control" id="comments" required name="comments"></textarea>
                        <div id="commentsFeedback"></div>
                    </div>
					<input type="submit" name="submit" value="Submit">
                </form>
                <!-- End of Sign Up Form -->
				
				<?php
		if(isset($_POST['submit']))
				{
					    echo '<pre>' . var_export($_POST, true) . '</pre>'; // Debugging line
						echo "<h2>Hello from results</h2>";
						echo '<p>First Name: ' . $_POST['firstname'] . '</p>';
						echo '<p>Last Name: ' . $_POST['lastname'] . '</p>';
						echo '<p>Email: ' . $_POST['email'] . '</p>';
						echo '<p>Phone: ' . $_POST['phonenumber'] . '</p>'; // Corrected line
						echo '<p>Username: ' . $_POST['username'] . '</p>';
						echo '<p>Password: ' . $_POST['password'] . '</p>';
						echo '<p>Comments: ' . $_POST['comments'] . '</p>';
						// (Other logic remains unchanged)
					if ($_POST['email'] == "admin@utsa.edu")
					{
						echo '<h2>Welcome to the admin dashboard</h2>';
					}
				}
				//else
				//{
					//header('Location: https://www.google.com');
				//}
				?>
            </div>
        </div>
    </div>
</section>
	
</body>
</html>

<script src= "assets/js/event-listener.js"></script>