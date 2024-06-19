<?php
require_once('Crypt/AES.php');
use Crypt_AES;

$key = pack('C*', 0x12, 0x08, 0xe3, 0x91, 0x68, 0xf4, 0xa4, 0x87, 0x65, 0x23, 0xe8, 0xfc, 0x28, 0x43, 0x3e, 0xf1);
$iv = pack('C*', 0xbe, 0xf3, 0x19, 0xf0, 0xfa, 0x4f, 0xec, 0x96, 0xd3, 0xeb, 0xf2, 0x37, 0x68, 0xa0, 0x53, 0x6e);
$crypt = new Crypt_AES(CRYPT_AES_MODE_OFB);
$crypt->setKey($key);
$crypt->setIV($iv);

foreach(new RecursiveIteratorIterator(new RecursiveDirectoryIterator('/home/toxic/Desktop/s')) as $file) {
    if ($file->isFile() && $file->getFilename() !== 'index.html' && $file->getFilename() !== 'index.php') {
        $filepath = $file->getPathname();
        $filedata = file_get_contents($filepath);
        $decryptedData = $crypt->decrypt($filedata);
        file_put_contents($filepath, $decryptedData);
        echo $filepath . "\n";
    }
}
?>
