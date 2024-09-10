<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
ob_clean();
header("Content-Type: application/xml");
echo file_get_contents("https://1chan.ca/news/all/rss.xml");
?>
