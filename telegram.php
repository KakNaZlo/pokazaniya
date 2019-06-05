<?php

/* https://api.telegram.org/bot872492130:AAEmqTyH4wiKwISaDWBLCIjeYsL2ObsTq9M/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['name'];
$phone = $_POST['phone'];
$token = "872492130:AAEmqTyH4wiKwISaDWBLCIjeYsL2ObsTq9M";
$chat_id = "-424919058";
$arr = array(
  'Улица: ' => $name,
  'Свет: ' => light,
  'Вода холодная: ' => coldWater,
  'Вода горячяя: ' => hotWater,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thanks.html');
} else {
  echo "Error";
}
?>