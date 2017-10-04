<?php
/**
 * Created by PhpStorm.
 * User: virk04
 * Date: 04-10-2017
 * Time: 10:59
 */

$cookie_name = "user";
$cookie_value = "Noah Juaquin";

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>



<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "The cookie named ". $cookie_name . " has not been set!";
} else {
    echo "The Cookie named  " . $cookie_name . " has been set!<br>";
    echo "The Cookies value is: " . $_COOKIE[$cookie_name];
}

?>

<?php
// set the expiration date to one hour ago
setcookie("user", "", time() - 3600);
?>


<?php
echo "Cookie 'user' is deleted.";
?>


</body>
</html>







