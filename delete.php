<?php
session_start();
if (isset($_GET['id']) && isset($_GET['id']) > 0) {
  $url = "internal-APPTIE-Elast-ByibDmQwu2GY-1089661228.ap-southeast-1.elb.amazonaws.com/live/delete.php?token=ABDSC144DSD";
  $ch = curl_init();
  $arr['id'] = $_GET['id'];
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $arr);
  $result = curl_exec($ch);
  curl_close($ch);

  $result = json_decode($result, true);

  //   echo "<pre>";

  // print_r($result);

  if (isset($result['status']) && isset($result['code'])  && $result['code'] == 10) {
    header('location:index.php');
    $_SESSION['success_mg'] = $result['data'];
    die();
  } else {
    echo $result['data'];
  }
} else {
  header('location:index.php');
}
