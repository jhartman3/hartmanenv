<div class="wrap">
  <p>QuickReport Database Table Prefix</p>
  <span>qr_</span>
  <hr>
  <h3>Error Report:</h3>
  <form action="../wp-content/plugins/quickreport/ReportError.php" method="post">
  <div>
  <h3>Username:</h3>
  <input type='text' name='User'>
  <h3>Error Description:</h3>
  <?php
  $content = 'Original Content.';
  $editor_id = 'Description';
  $settings = array( 'editor_height' => 200, "drag_drop_upload" => true);
  wp_editor( $content, $editor_id, $settings );
  ?>
  <input type="submit" value="Report Error">
  </div>
</form>
<hr>
<form action="../wp-content/plugins/quickreport/DeleteError.php" method="post">
  <h3>Delete Error by ID</h3>
  <input type='text' name='id'>
  <input type="submit" value="Delete Error">
</form>
<form action="../wp-content/plugins/quickreport/ListErrors.php" method="post">
  <h3>See Error List</h3>
  <input type="submit" value="List Errors">
</form>
<hr>
</div>