<?php
if (file_exists('../../../wp-config.php' ))
  {
  include_once('../../../wp-config.php' );
  }
else if (file_exists('./wp-config.php'))
  {
    include_once('./wp-config.php');
  }
global $wpdb;
$delete = "delete from " . "'qr_Errors'" . " " .
        "where id=" . $_POST['id'].
            ";";
    echo $delete;
    $wpdb->delete( 'qr_Errors', array( 'ID' => $_POST['id'] ) );
?>