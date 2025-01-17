<?php

function db_connect($db)
{
	$dbusername="webuser";
	$dbpassword="1BE4vO@le30BL8!w"; 
	$host="localhost";
	$dblink = new mysqli($host,$dbusername,$dbpassword,$db);
	return $dblink;
}
function redirect($uri)
{
    ?>
    <script type="text/javascript">
    document.location.href="<?php echo $uri; ?>";
    </script>
    <?php
    die;
}

?>