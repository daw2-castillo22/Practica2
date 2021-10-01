<?php
session_start();

if ($_SESSION['authuser'] != 1){
    echo "Sorry, but you don't have the rank to see this classified information soldier!";
    exit();     
}
?>
<html>
 <head>
  <title>Enter the war! <?php echo $_GET['gamemode'];?></title>
 </head>
 <body>
<?php
echo "Welcome to the war soldier: ";
echo $_SESSION["username"];
echo " We've missed your combat abilities!";

echo " Select a game mode to continue!";
$multiplayer = urlencode("CallOfDuty");
echo "<a href='Exercici1variables.php?gamemode=$multiplayer'>";
echo "<br>";
echo "Teamfight"; 
echo "</a>";
?>
 </body>
</html>