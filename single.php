<?php
if (isset($POST['submit'])) {
         //form was submitted
         $username =$_POST["username"];
         $password =$_POST["password"];
         
         if ($username == "jacob" && $password == "secret") {
            echo "user {$username} was successfully logged in";
         } else {

                $message = "There were some errors.";
         }
} else {
       $username ="";
       $message ="Please log in.";
}
?>

<!DOCTYPE html PUBLIC "-//3WC//DTD HTML 4.01 Transition//EN"
  "http://www.w3.org/TR/html14/loose.dtd">
    
<html lang="en">
    <head>
         <title>Form</title>
    </head>
    <body>
  <?php echo $message; ?><br />
       <form action="single.php" method="post">
    Username: <input type="text" name="username" value="" /><br />
    Password: <input type="password" name="password" value="" /><br />
      <br />
    <input type="submit" name="submit" value="Submit" />
        </form>

    </body>
</html>
    
