<?php
/**
 * Created by PhpStorm.
 * User: virk04
 * Date: 04-10-2017
 * Time: 11:15
 */

session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
$_SESSION["Favorite Color"] = "Yellow";
$_SESSION["Favorite Animal"] = "Polar Bear";

echo "Session variables are now set.<br>";
?>

<?php
// Echo session variables that were set on previous page
echo "Favorite color is: " . $_SESSION["Favorite Color"] . ".<br>";
echo "Favorite animal is: " . $_SESSION["Favorite Animal"] . ".<br>";
?>

<?php
print_r($_SESSION);
?>

<?php
// to change a session variable, just overwrite it
$_SESSION["Favorite Animal"] = "Blue";
print_r($_SESSION);
?>


<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>

</body>
</html>
