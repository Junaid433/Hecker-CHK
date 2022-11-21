<?php
$time_start = microtime(true);
if ((strpos($message, "/iban") === 0)||(strpos($message, "!iban") === 0)||(strpos($message, ".iban") === 0)){
  sendaction($chatId, typing);
$iban = substr($message, 6);
  
     $result2 = file_get_contents('https://openiban.com/validate/'.$iban.'?getBIC=true&validateBankCode=true');
            $bankcode1 = capture($result2, '"bankCode": "', '"');
            $bankname = capture($result2, '"name": "', '"');
            $zip = capture($result2, '"zip": "', '"');
            $city = capture($result2, '"city": "', '"');
            $bic = capture($result2, '"bic": "', '"');

if(strpos($result2, 'valid": true')){
  $ib = 'VALID IBAN ✅';
}
if(strpos($result2, 'valid": false')) {
  $ib = 'INVALID IBAN ❌';
}
$msg = trim(strip_tags(getStr($result2,'{
  "valid": false,
  "messages": [
    "','".],')));
  
  $time_end = microtime(true);
  $execution_time = ($time_end - $time_start);
  
sendMessage($chatId, "<b>HECKER CHK ⚡️ - Status - $sat%0A━━━━━━━━━━━━━%0A[ϟ] TOOL: IBAN CHK%0A[ϟ] IBAN: <code>$iban</code>%0A[ϟ] STATUS: $ib%0A[ϟ] MSG: $msg%0A[ϟ] BANK: $bankname%0A[ϟ]BANK CODE: $bankcode1%0A[ϟ]BIC: $bic[ϟ]CITY: $city%0A[ϟ]ZIP CODE: $zip%0A━━━━━━━━━━━━━%0A[ϟ] TIME TAKEN: $execution_time's%0A[ϟ] Checked By: @$username%0A[ϟ] UserID: $userId%0A[ϟ] Premium Activated: $stat%0A</b>", $message_id);
}

