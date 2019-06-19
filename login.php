<?php
include('config/init.php');

if(isset($_REQUEST['attemptLogin'])){
  $_SESSION['userId'] = attemptLogin($_REQUEST['email'], $_REQUEST['password']);
  echo "
    You are logged in.
    <a href='user_profile.php'>Go to your profile</a>
  ";
  exit;
}
?>

<form action=''>
  Email: <input type='text' name='email' /><br/ >
  Password: <input type='password' name='password' /><br/ >
  <input type='submit' name='attemptLogin' />
</form>