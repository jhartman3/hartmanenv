<?php
if (file_exists('../../../wp-config.php' ))
  {
  include_once('../../../wp-config.php' );
  }
else if (file_exists('./wp-config.php'))
  {
    include_once('./wp-config.php');
  }

function insertReport($user, $description)
{
    global $wpdb;
    $insert = "insert into " . 'qr_Errors' . "(user, description)" .
            "values ( " .
                "'" . $user . "'," .
                "'" . $description . "'," .
                ")" .
                ";";
    $wpdb->query($insert);    
}
  
function insertType($name, $description)
{
    global $wpdb;
    $insert = "insert into " . 'qr_Types' . "(name, description)" .
            "values ( " .
                "'" . $name . "'," .
                "'" . $description . "'," .
                ")" .
                ";";
    $wpdb->query($insert);    
}

function insertErrorType($error, $type)
{
    global $wpdb;
    $insert = "insert into " . 'qr_Errortypes' . "(error, type)" .
            "values ( " .
                "'" . $error . "'," .
                "'" . $type . "'," .
                ")" .
                ";";
    $wpdb->query($insert);    
}

function delete($table_name, $id)
{
    global $wpdb;
    $delete = "delete from " . $table_name . " " .
              "where id=" . $id.
               ";";
    echo $delete;
    $wpdb->query($delete);
}

function entryList($table_name)
{
	global $wpdb;
	
	$select = "select * from " . $table_name . ";";
	$result_list = $wpdb->get_results($select);
	foreach ($result_list as $entry)
	{
		echo "<p>" . $entry . "</p>";
	}
}

?>