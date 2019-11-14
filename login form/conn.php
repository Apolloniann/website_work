<?php
$db = pg_connect("host=localhost port=5432 dbname=login user=postgres password=123");
if($db)
{
    echo"success";
}
?>