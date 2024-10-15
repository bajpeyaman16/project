<?php
session_start();

$_session['name'] = "Aman";

$_session['live']= "lahar";

echo 'Hello this is'. $_session['name'] . 'from'.$_session['live'];


?>