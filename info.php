<?php

function getInfo()
{
    echo "Datum/klockslag:" . date("l")  . ", " . date("Y/m/d") . ", " . date("H:i:s") . "<br />". "<br />";
    echo "<b>Din IP-adress: </b>". $_SERVER['SERVER_ADDR'] . "<br />". "<br />";
    echo "<b>Sökväg/filnamn: </b>". $_SERVER['SCRIPT_FILENAME'] . "<br />". "<br />";
    echo "<b>User agent-sträng: </b>". $_SERVER['HTTP_USER_AGENT'] . "<br />". "<br />";
}
getInfo();
?>

