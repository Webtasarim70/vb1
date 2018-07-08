<?php
/**
 * Created by PhpStorm.
 * User: Win7
 * Date: 07.07.2018
 * Time: 10:53
 */

@session_start();
@ob_start();
try {
    #veritabanı bağlantısı yapıyoruz.
$db = new  PDO("mysql:host=localhost; dbname=videoscripti;charset=utf8", "root", "12345678");
#garantiye alma
    $db->query("SET CHARACTER SET UTF8");
    $db->query("SET NAMES UTF8");

} catch (PDOException $hata){

    print_r($hata->getMessage());

}
    #ayarlar
    $ayarlar=$db->prepare("SELECT * FROM ayarlar");
    $ayarlar->execute();
    $arow=$ayarlar->fetch(PDO::FETCH_OBJ);

    $site= $arow->site_url;
    ?>