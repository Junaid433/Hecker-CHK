<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://bot-api.junaid433.repl.co");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$msk = curl_exec($ch);
curl_close($ch);
?>