
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
    <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>
                <!-- LOGO TEXT HERE -->
                <a href="#" class="navbar-brand">Travis Weber's Career Aspirations</a>
            </div>
            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-nav-first">
                    <li><a href="index-new.html" class="smoothScroll">Home</a></li>
                    <li><a href="career.html" class="smoothScroll">Career</a></li>
                    <li><a href="contact.html" class="smoothScroll">Contact</a></li>
                    <li><a href="education.html" class="smoothScroll">Education</a></li>
                    <li><a href="gaming.html" class="smoothScroll">Gaming</a></li>
                    <li><a href="movies.html" class="smoothScroll">Movies</a></li>
                </ul>
            </div>
        </div>
    </section>
    
    <!-- CAREER ASPIRATIONS AND CONTACT INFO -->
    <section class="content-section">
        <div class="container">
            
            <h2>Contact Info</h2>
            <ul>
                <li>travis.weber@my.utsa.edu</li>
            </ul>
        </div>
    </section>
	
<!-- SIGN UP FORM SECTION -->
<section class="sign-up-form">
	
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Sign Up Form -->
                <form id="signupForm" method="get" action="" style="padding:20px;margin=20px">
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
				if(isset($_GET['firstname'])) {
					echo "<h2>hello from results</h2>";
					echo '<p>First Name: ' . $_POST['firstname'] . '</p>';
					echo '<p>Last Name: ' . $_POST['lastname'] . '</p>';
					echo '<p>Email: ' . $_POST['email'] . '</p>';
					echo '<p>Phone: ' . $_POST['phone'] . '</p>';
					echo '<p>Username: ' . $_POST['username'] . '</p>';
					echo '<p>Password: ' . $_POST['password'] . '</p>';
					echo '<p>Comments: ' . $_POST['comments'] . '</p>';
					if ($_POST['email'] == "admin@utsa.edu")
					{
						echo '<h2>Welcome to the admin dashboard</h2>';
					}
				}
				else
				{
					header('Location: https://www.google.com');
				}
				?>
            </div>
        </div>
    </div>
</section>
	
</body>
</html>

<script src= "assets/js/event-listener.js"></script>