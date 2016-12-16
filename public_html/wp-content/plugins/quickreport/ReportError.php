<?php
if (file_exists('../../../wp-config.php' ))
  {
  include_once('../../../wp-config.php' );
  }
else if (file_exists('./wp-config.php'))
  {
    include_once('./wp-config.php');
  }
foreach(array_keys($_POST) as $key)
{
  echo "<p>" . $key . " => " . $_POST[$key] . "</p>";
}
global $wpdb;
$wpdb->insert( 'qr_Errors', $_POST);
?>