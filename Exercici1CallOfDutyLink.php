<?php
session_start();
$_SESSION['username'] = $_POST['name'];
$_SESSION['userpass'] = $_POST['pass'];
setcookie("username","thebest69",time()+60);
$_SESSION['authuser'] = 0;

if (($_SESSION['username'] == 'thebest69') and
    ($_SESSION['userpass'] == '6969')) {
    $_SESSION['authuser'] = 1;
} else {
    echo 'Are you sure this is your name comrade?';
    exit();     
}
?>
<html>
 <head>
  <title>Enter the war!</title>
 </head>
 <body>
<?php
$multiplayer = urlencode("CallOfDuty");
echo "<a href='Exercici1CallOfDutySite.php?gamemode=$multiplayer'>";
echo "Click here, and enter into the war soldier!"; 
echo "</a>";
?>
 </body>
</html>