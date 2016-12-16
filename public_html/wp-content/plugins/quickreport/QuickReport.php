<?php
/*
Plugin Name: QuickReport
Plugin URI: http://hartmanprogramming.com
Description: Allows easy reporting and management of site errors
Version: 1.0
Author: Jacob Hartman
Author URI: http://jacobhartman.hartmanprogramming.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl.html
*/

add_action( 'admin_menu', 'qr_menu' );

function qr_menu()
{
	add_menu_page( 'QuickReport', 'QuickReport', 'manage_options', 'qr_menu', 'qr_options' );
}

function qr_options()
{
	if ( !current_user_can( 'manage_options' ) )  {
      wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
    }
	
	include( __DIR__ . '/QROptionsPage.php' );
}

register_activation_hook( __FILE__, QuickReport_Activate );

$data_prefix = 'qr_';

function QuickReport_Activate(){
	global $data_prefix;
	$data_prefix = 'qr_';
	CreateTables();
}

function CreateTables(){
	createErrorTable();
	createTypeTable();
	createErrorTypeTable();
}

function createErrorTable(){
	global $data_prefix;
    $schema = "id int NOT NULL AUTO_INCREMENT,
               user tinytext NOT NULL,
               description text,
               PRIMARY KEY (id)";
    CreateTable($data_prefix.'Errors', $schema);
}

function createTypeTable(){
	global $data_prefix;
    $schema = "id int NOT NULL AUTO_INCREMENT,
               name tinytext NOT NULL,
               description text,
               PRIMARY KEY (id)";
    CreateTable($data_prefix.'Types', $schema);
}

function createErrorTypeTable(){
	global $data_prefix;
    $schema = "id int NOT NULL AUTO_INCREMENT,
               error int NOT NULL,
               type int NOT NULL,
               PRIMARY KEY (id)";
    CreateTable($data_prefix.'Errortypes', $schema);
}

function CreateTable($table_name, $schema){
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();
    $sql = "CREATE TABLE $table_name (" . $schema . ") $charset_collate;";
    $wpdb->query($sql);
}

?>