<?php
  require_once('../private/initialize.php');
  require_once('../private/functions.php');
  require_once('../private/validation_functions.php');


// function is_post_request() {
//   return $_SERVER['REQUEST_METHOD'] == 'POST';
// }

$error_list = array();
if(is_post_request()) {
  // is a POST request
  $firstname = isset($_POST['first_name']) ? $_POST['first_name'] : '';
  $lastname = isset($_POST['last_name']) ? $_POST['last_name'] : '';
  $e_mail = isset($_POST['email']) ? $_POST['email'] : '';
  $user_name = isset($_POST['username']) ? $_POST['username'] : '';
  $today = date("Y-m-d H:i:s");
  $name_len_arr = array("2", "255");
  $username_len_arr = array("8", "255");

   if(is_blank($firstname) || !has_length($firstname, $name_len_arr)){
     $error_list[]= "First name cannot be blank.";
     //array_push($error_list, 'First name cannot be blank.');
      // $error_list[] = "Last name must be between 2 and 255 characters.";
      // $error_list[] = "Email format is incorrect.";
      // $error_list[] = "Username is not valid it should be at least 8 characters long.";

   }
   //if(strlen($lastname)<2 ){
   if(!has_length($lastname, $name_len_arr)){
      $error_list[] = "Last name must be between 2 and 255 characters.";
      //array_push($error_list, 'Last name must be between 2 and 255 characters.');

  }
  //if (!filter_var($e_mail, FILTER_VALIDATE_EMAIL)) {
  if (!has_valid_email_format($e_mail)) {

      $error_list[] = "Email format is incorrect.";
      //array_push($error_list, 'Email format is incorrect.');


  } 
  //if(strlen($user_name)<8 ){
  if(!has_length($user_name, $username_len_arr)){
      $error_list[] = "Username is not valid it should be at least 8 characters long.";
      //array_push($error_list, 'Username is not valid it should be at least 8 characters long.');

  }

  //if(!is_blank($firstname) && strlen($lastname)>=2 && filter_var($e_mail, FILTER_VALIDATE_EMAIL) && strlen($user_name)>=8){
  if(!is_blank($firstname) && has_length($lastname, $name_len_arr) && has_valid_email_format($e_mail) && has_length($user_name, $username_len_arr)){
 
    $sql = "INSERT INTO users (first_name, last_name, email, username, created_at) VALUES ('$firstname','$lastname','$e_mail', '$user_name', '$today')";
    $result = db_query($db, $sql);

      if($result){
        db_close($db);
        redirect_to("registration_success.php");
      }else{
        echo db_error($db);
        db_close($db);
        exit;
      }
  }


//display_errors($error_list);
  //echo $last_name;

}





  // Set default values for all variables the page needs.

  // if this is a POST request, process the form
  // Hint: private/functions.php can help

    // Confirm that POST values are present before accessing them.

    // Perform Validations
    // Hint: Write these in private/validation_functions.php

    // if there were no errors, submit data to database

      // Write SQL INSERT statement
      // $sql = "";

      // For INSERT statments, $result is just true/false
      // $result = db_query($db, $sql);
      // if($result) {
      //   db_close($db);

      //   TODO redirect user to success page

      // } else {
      //   // The SQL INSERT statement failed.
      //   // Just show the error, not the form
      //   echo db_error($db);
      //   db_close($db);
      //   exit;
      // }

?>

<?php $page_title = 'Register'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="main-content">
  <h1>Register</h1>
  <p>Register to become a Globitek Partner.</p>

  <?php
    // TODO: display any form errors here
    // Hint: private/functions.php can help
  //require_once('../private/functions.php');
  echo display_errors($error_list);
  // foreach($error_list as  $error){
  //   echo "<ul>";
  //   echo "<li>{$error}</li>";
  //   echo "</ul>";
  // }

  ?>

  <!-- TODO: HTML form goes here -->
  <form action="register.php" method="post">

  First name: <br />
  <input type="text" name="first_name" value="<?php echo $firstname; ?>" /><br />
  Last name:<br />
  <input type="text" name="last_name" value="<?php echo $lastname; ?>" /><br />
  Email:<br />
  <input type="text" name="email" value="<?php echo $e_mail; ?>" /><br />
  UserName:<br />
  <input type="text" name="username" value="<?php echo $user_name; ?>" /><br />

  <input type="submit" name="submit" value="Submit" />
</form>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
