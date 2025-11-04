<!DOCTYPE html>
    
<html lang=”en”>
   <head>
      <title>Greeting</title>
   </head>
   <body>
      <?php
      #Write an HTML form to ask for a person’s name and mail and send them to this script. Then add the var_dump function to read the content of the $_POST variable.
       echo "<p>Welcome, ", $_POST["name"], "(", $_POST["mail"], ").</p>";
         var_dump($_POST);
       ?>
   </body>
</html>