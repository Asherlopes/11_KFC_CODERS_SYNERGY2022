<?php
// $SERVERNAME="sql104.epizy.com";
// $USERNAME="epiz_32626788";
// $PASSWORD="TFfiMRSNZPbuf";
// $DATABASE="epiz_32626788_forums";
//http://doubtsolver.epizy.com/

$SERVERNAME="localhost";
$USERNAME="root";
$PASSWORD="";
$DATABASE="kfc_coders";
$conn = mysqli_connect($SERVERNAME,$USERNAME,$PASSWORD,$DATABASE);

if(!$conn)
{
    die("sorry not connected".mysqli_connect_error());
}



//echo "connected <br>";








?>