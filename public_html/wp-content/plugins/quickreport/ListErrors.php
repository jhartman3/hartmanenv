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
$select = "SELECT * FROM qr_Errors;";
$results = $wpdb->get_results($select, ARRAY_A);
foreach($results as $entry)
{
	echo "<p>" . $entry['id'] . " - " . $entry['user'] . ": " . $entry['description'] . "</p>";
}
?>