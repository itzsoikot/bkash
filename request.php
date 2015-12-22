<?php
//This is the file where device will submit the SMS and this file will analyse and parse the  SMS to extract information and then store it to the  database.

//variables
$from = $_POST['from'];
$message = $_POST['message'];
$message_id = $_POST['message_id'];
$sent_to = $_POST['sent_to'];
$secret = $_POST['secret'];
$device_id = $_POST['device_id'];
$sent_timestamp = $_POST['sent_timestamp'];
$error = 'null';
$time=strtotime($sent_timestamp);

//poor coding starts
if(isset($from) && isset($message) && isset($secret) && isset($sent_timestamp)){

if ($secret == 1234) {
        $response = json_encode(
            ["payload"=>[
                "success"=>"true",
                "error"=>"null"
                )
  header('Content-Type: application/json');
  echo $response;
  
//This codes are for testing purposes.  
  $file = 'test.txt';
  $handle = fopen($file, 'w');
  $data = 'From:'.$from.'\nMessage:'.$message.'\nTime:'.$time.'\n';
  fwrite($handle,$data);
}
}
?>
