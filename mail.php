<?php
$name    = $_POST['name'];
$email   = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];
header('Content-Type: application/json');
if ($name === ''){
 print json_encode(array('message' => 'Name cannot be empty', 'code' => 0));
 exit();
}else if(is_numeric($name)){
print json_encode(array('message' => 'Name: Only number is not allowed', 'code' => 0));
exit();
}else if(!preg_match("/^[a-zA-Z ]*$/",$name)){
print json_encode(array('message' => 'Name: Only letter and whitespace are allowed', 'code' => 0));
exit();
 }else if(strlen($name) > 30){
print json_encode(array('message' => 'Name must have less than 30 characters', 'code' => 0));
exit();
 }else if(strlen($name) < 5){
print json_encode(array('message' => 'Name must be 4 characters long', 'code' => 0));
exit();
}
if ($email === ''){
  print json_encode(array('message' => 'Email cannot be empty', 'code' => 0));
  exit();
} else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
  print json_encode(array('message' => 'Email format invalid.', 'code' => 0));
  exit();
  }else if(!preg_match('/^([a-z0-9_\.-]+)@([a-z\.-]+)\.([a-z\.]{2,6})$/',$email)){
 print json_encode(array('message' => 'Not good formatted email. Ex:abc@abc.com/abc_123@abc.se', 'code' => 0));
 exit();     
}else if(preg_match('/^([0-9]+)@([a-z\.-]+)\.([a-z\.]{2,6})$/',$email)){
print json_encode(array('message' => 'Only number is not allowed', 'code' => 0));
 exit();    
}
if ($subject === ''){
  print json_encode(array('message' => 'Subject cannot be empty', 'code' => 0));
  exit();
}else if(is_numeric($subject)){
print json_encode(array('message' => 'Subject: Only number is not allowed', 'code' => 0));
exit();
}else if(!preg_match("/^[a-zA-Z ]*$/",$subject)){
print json_encode(array('message' => 'Subject: Only letter and whitespace are allowed', 'code' => 0));
exit();
 }else if(strlen($subject) > 30){
print json_encode(array('message' => 'Subject must have less than 30 characters', 'code' => 0));
exit();
 }else if(strlen($subject) < 5){
print json_encode(array('message' => 'Subject must be 4 characters long', 'code' => 0));
exit();
}
$firstWord=explode(' ',trim($_POST['message']));
if ($message === ''){
  print json_encode(array('message' => 'Message cannot be empty', 'code' => 0));
  exit();
}else if(is_numeric($message)){
    print json_encode(array('message' => 'Message: number is not allowed', 'code' => 0));
  exit();
  }else if(!preg_match("/^[a-zA-Z]$/",$message[0])){
      print json_encode(array('message' => 'Message: start with letter', 'code' => 0));
  exit();
  }else if(!preg_match("/^[,a-zA-Z ]*$/", substr($message, 0, 5))){
      print json_encode(array('message' => 'Message: First 5 character should have letter', 'code' => 0));
  exit();
  }else if(strlen($message) < 20){
      print json_encode(array('message' => 'Message should have at least 20 character', 'code' => 0));
  exit();
  }else if(strlen($firstWord[0]) > 10){
print json_encode(array('message' => 'Message: First word is too long. *Use space to make it short', 'code' => 0));
  exit();
  }

$mailto = "eyahyakhan@gmail.com";
$txt = "MESSAGE: ".$message;
$sender = "SEND BY: ".$name." USING: ".$email;
mail($mailto,$subject,$txt,$sender);
print json_encode(array('message' => 'Email successfully sent!', 'code' => 1));
exit();

?>