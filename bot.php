<?php
include "modules/include.php";
if ((strpos($message, "") === 0)||(strpos($message, "!start") === 0)||(strpos($message, "") === 0)||(strpos($message, "") === 0)||(strpos($message, "") === 0)||(strpos($message, "") === 0)||(strpos($message, "/start") === 0)){
  sendaction($chatId, typing);
  sendMessage($chatId, "<b>HECKER CHK ⚡ - Status - $sat%0A━━━━━━━━━━━━━%0AHey $firstname.%0AI'm still in development and some of my gates are not available for public.%0APlease use /cmds for available commands.%0AThis Chat ID is : $chatId%0AYour Telegram ID is: $userId%0AAnd Your Status is: $statz</b>", $message_id);
}

if (strpos($message, "/pre") === 0){
if ($userId == '766109755'){
$uid = substr($message, 5);
if(empty($uid)){
sendMessage($chatId, "<b>HECKER CHK ⚡️ - Status - $sat%0A━━━━━━━━━━━━━%0AYou need to provide a userid.</b>", $message_id);
}
  else{
  fwrite(fopen('pre.txt', 'a'), $uid."\r\n");
sendMessage($chatId, "<b>HECKER CHK ⚡️ - Status - $sat%0A━━━━━━━━━━━━━%0A[ϟ] $uid is now a premium user.</b>", $message_id);

}
  }
  }
  
       if ((strpos($message, "") === 0)||(strpos($message, "") === 0)||(strpos($message, "") === 0)||(strpos($message, "") === 0)||(strpos($message, "") === 0)||(strpos($message, "") === 0)||(strpos($message, "/status") === 0)){
     sendaction($chatId, typing);
sendMessage($chatId, "<b>HECKER CHK ⚡️ - Status - $sat%0A━━━━━━━━━━━━━%0A[ϟ] Full Name: $firstname $lastname%0A[ϟ] Username: @$username%0A[ϟ] Telegram ID: <code>$userId</code>%0A[ϟ] Chat ID: <code>$chatId</code>%0A[ϟ] Premium Activated: $stat</b>", $message_id);

}
   
     if ((strpos($message, "") === 0)||(strpos($message, "") === 0)||(strpos($message, "") === 0)||(strpos($message, "") === 0)||(strpos($message, "") === 0)||(strpos($message, "") === 0)||(strpos($message, "/cmds") === 0)){
     sendaction($chatId, typing);
sendMessage($chatId, "<b>HECKER CHK ⚡️ - Status - $sat%0A[ϟ] TOTAL CHECKER COMMANDS - 6%0A━━━━━━━━━━━━━%0A[ϟ] Stripe Sk Charge - /ch%0A[ϟ] Stripe Charge €4 - /spp [Site Based]%0A[ϟ] Stripe Killer $750 [Site Based] - /sch%0A[ϟ] Stripe Auth [Site Based] - /au%0A[ϟ] Mass Stripe Sk Charge - /mch%0A[ϟ] Sk Checker - /sk%0A━━━━━━━━━━━━━%0AHit /tools for list of available tools.</b>", $message_id);

}

       if ((strpos($message, "") === 0)||(strpos($message, "") === 0)||(strpos($message, "") === 0)||(strpos($message, "") === 0)||(strpos($message, "") === 0)||(strpos($message, "") === 0)||(strpos($message, "/tools") === 0)){
     sendaction($chatId, typing);
sendMessage($chatId, "<b>HECKER CHK ⚡️ - Status - $sat%0A[ϟ] TOTAL TOOLS COMMANDS - 4%0A━━━━━━━━━━━━━%0A[ϟ] Bin Lookup - /bin%0A[ϟ] Iban Lookup - /iban %0A[ϟ] Check Account Status - /status%0A[ϟ] IP Details Lookup - /ip%0A━━━━━━━━━━━━━%0AHit /cmds for list of available checker gates.</b>", $message_id);

}
?>
