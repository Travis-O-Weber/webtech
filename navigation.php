<?php
 
echo '<div class="collapse navbar-collapse">';
echo '<ul class="nav navbar-nav navbar-nav-first">';

if (!isset($_GET['page']))
    $page="home";
else
    $page=$_GET['page'];


if ($page == "home")
    echo '<li class="active"><a href="index.php" class="smoothScroll">Home</a></li>';
else
    echo '<li ><a href="index.php" class="smoothScroll">Home</a></li>';

if ($page == "Career") 
    echo '<li class="active"><a href="index.php?page=career" class="smoothScroll">Career</a></li>';
else 
    echo '<li><a href="index.php?page=career" class="smoothScroll">Career</a></li>';

if ($page == "education")
    echo '<li class="active"><a href="index.php?page=education" class="smoothScroll">Education</a></li>';
else
    echo '<li><a href="index.php?page=education" class="smoothScroll">Education</a></li>';

if ($page == "gaming")
    echo '<li class="active"><a href="index.php?page=gaming" class="smoothScroll">Gaming</a></li>';
else
    echo '<li><a href="index.php?page=gaming" class="smoothScroll">Gaming</a></li>';

if ($page == "movies")
    echo '<li class="active"><a href="index.php?page=movies" class="smoothScroll">Movies</a></li>';
else
    echo '<li><a href="index.php?page=movies" class="smoothScroll">Movies</a></li>';

if ($page == "contact")
    echo '<li class="active"><a href="index.php?page=contact" class="smoothScroll">Contact</a></li>';
else
	echo '<li><a href="index.php?page=contact" class="smoothScroll">Contact</a></li>';
echo '</ul>';
echo '</div>';
?>