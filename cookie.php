<?php

setcookie("username", "moca");
//setcookie("username", "moca", time()+60+60);
//setcookie("username", "moca", time()-60+60);

echo $_COOKIE['username'];