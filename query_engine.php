<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'sitejmrb');

class DB_con
{
 function __construct()
 {
  $conn = mysql_connect(DB_SERVER,DB_USER,DB_PASS) or die('localhost connection problem'.mysql_error());
  mysql_select_db(DB_NAME, $conn);
 }
 
 public function select()
 {
  $res=mysql_query("SELECT * FROM users");
  return $res;
 }
 
 public function delete($table,$id)
 {
  $res = mysql_query("DELETE FROM $table WHERE user_id=".$id);
  return $res;
 }
 
 public function update($table,$id,$fblink,$tlink,$instalink,$skylink,$maillink,$gmaillink,$linkinlink,$pinlink,$mobile)
 {
  $res = mysql_query("UPDATE $table SET `fblink`='$fblink',`twlink`='$tlink',`inslink`='$instalink',`skylink`='$skylink',`maillink`='$maillink',`gluslink`='$gmaillink',`lnlink`='$linkinlink',`pinlink`='$pinlink',`mobile`='$mobile' WHERE id=".$id);
  return $res;
 }
}

?>