<?php
if(isset($_POST['submit']))
{
   $error = '';
  if(array_key_exists('phoneNumber', $_POST))
  {
    if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phoneNumber']))
    {
      $error = 'Invalid Number!';
    }
    else
    {
      $error='aaaa';
    }
  }

}
 

?>
<div class="phone_fieldWrapper">
  <form method="post" action="#">
<label for="phoneNumber">Phone Number: <span class="warning"> <?php echo $error; ?></span></label>
  <input name="phoneNumber" type="text" class="phoneNumber_inputControl" id="phoneNumber" />
  <input type="submit" name="submit" value="Submit" />
</form>