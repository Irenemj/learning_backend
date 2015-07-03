<?php
if(isset($_POST['submit'])){
   $item=$_POST['item'];
   $cost=$_POST['cost'];
}
setcookie('item' , $item, time()+3600);
echo $_COOKIE['item'];
  if($item=="shoe" || "hh" &&$cost=="6000" ||  "hh"){
     echo"{$item}was successfully bought";
    }else{
  $message="errors.";
   }
?>
<!DOCTYPEhtml PUBLIC"-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
   <head>
  <title>Form</title>
 </head>
 <body>
 <?php echo $message ;?><br />

  <form action="shopping.php"method="post">
  Item: <input type="item"name="item"value="<?php echo htmlspecialchars($item); ?>"/><br />
  Cost: <input type="cost"name="cost"value=""/><br />
<br/>
 <input type="submit"name="submit"value="Submit"/>
 </form>
</body>
</html>


