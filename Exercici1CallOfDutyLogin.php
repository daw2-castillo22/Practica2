<?php
session_unset();
?>
<html>
 <head>
  <title>Log In Soldier!</title>
 </head>
 <body>
  <form method="post" action="Exercici1CallOfDutyLink.php">
   <p>Enter your nickname: 
    <input type="text" name="name"/>
   </p>
   <p>Enter your password: 
    <input type="password" name="pass"/>
   </p>
   <p>
    <input type="submit" name="submit" value="Submit"/>
   </p>
  </form>
 </body>
</html>