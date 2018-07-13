
<?php

$url = file_get_contents('https://raw.githubusercontent.com/bedjan/web_home/master/obsah_bednar.html');
echo $url; 

?>

<?php
/* PASSWORD ZMENIT*/
session_start();

if(isset($_POST['submit_pass']) && $_POST['pass'])
{
 $pass=$_POST['pass'];
 if($pass=="PASSWORD")
 {
  $_SESSION['password']=$pass;
 }
 else
 {
  $error="Incorrect Pssword";
 }
}

if(isset($_POST['page_logout']))
{
 unset($_SESSION['password']);
}
?>



<?php
if($_SESSION['password']=="PASSWORD")
{
 ?>
 <p>Pro zobrazeni dalsiho obsahu se prihlas</p>


<p>Toto se zobrazi po zadani hesla</p>
<br>

 <form method="post" action="" id="logout_form">
  <input type="submit" name="page_logout" value="ODHLASIT">
 </form>
 <?php
}
else
{
 ?>
 <form method="post" action="" id="login_form">
  <p>Pro zobrazeni obsahu se prihlas</p>
  <input type="password" name="pass" placeholder="*******">
  <input type="submit" name="submit_pass" value="PRIHLASIT">
  <p><font style="color:red;"><?php echo $error;?></font></p>
 </form>
 <?php	
}
?>

