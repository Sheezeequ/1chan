<html>
<head>
<title>phpBB Admin Account Recovery (by Xpert@www.phpbbguru.net)</title>
<style type="text/css">
<!--
body {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 8pt;}
h1 {font-size: 10pt;}
input,textarea {color : #000000; font: normal 11px Verdana, Arial, Helvetica,
sans-serif; border-color : #cccccc; border-width:1px;}
-->
</style>
</head>

<body>
<h1 align=center>phpBB Admin Account Recovery (by Xpert@www.phpbbguru.net)</h1>

<?php
define('IN_PHPBB', true);
$phpbb_root_path = './';
include($phpbb_root_path . 'extension.inc');
include($phpbb_root_path . 'common.'.$phpEx);

if (isset($_POST['submit']))
// let's do the job
{
$user_info = $_POST['user_info'];
$user_pass = $_POST['user_pass'];
$where_sql = (is_numeric($user_info)) ? "user_id='$user_info'" : "username='$user_info'";

$sql = 'UPDATE ' . $table_prefix . 'users SET user_level=1, user_password=MD5(' .
$user_pass . ') WHERE ' . $where_sql;
if (!$db->sql_query($sql))
{
$res = $db->sql_error();
echo "Failed: $res[message]";
exit;
}
echo "Completed succesfully! Click <a href='$SCRIPT_NAME'>here</a> to recover one more admin account. ";
exit;
}
?>

<form action=<?=$SCRIPT_NAME?> method=post>
User info (login or id) <input type=text name='user_info'><br>
New Password <input type=text name='user_pass'><br><br>
<input type=submit name=submit value='Go!'>

</body>
</html>