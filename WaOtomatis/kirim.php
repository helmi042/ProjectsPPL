<?php

$number = $_POST['notelp'];
$text = $_POST['pesan'];
$text = str_replace(" ", "%20", $text);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://panel.rapiwha.com/send_message.php?apikey=G3EFE3002ZKNK2XI5L4S&number=". $number ."&text=" . $text,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
  header('location: index.php?success');
}