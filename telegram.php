<?php

$formName = $_POST['form-name'];
$name = $_POST['name'];
$email = $_POST['email'];
// $msg = $_POST['msg'];
$token = "5496993998:AAE2ZHHMi_3aqY3hp1nrF-ae9yLcsxsWqAE";
$chat_id = "-1001569814825";
$arr = array(
  'Form name: ' => $formName,
  'User name: ' => $name,
  'User email' => $email,
  // 'Сообщение:' => $msg
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram && $sendToTelegram2) {
  header('Location: thanks.html');
} else {
  echo "Error";
}
?>