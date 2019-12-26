<?php
$hostdir = dirname(dirname(dirname(dirname(dirname(__FILE__))))).'PythonWorks\xx\\';
echo $hostdir . "<br>";
$url = dirname(dirname(dirname(dirname(dirname(__FILE__))))).'PythonWorks\xx\\';//图片所在的目录
//echo $url;
$www = 'D:/PythonWorks/xx/';
$filenames = scandir($hostdir);
$aurl = "<img width='400' height='100' src='https://www.baidu.com/img/bd_logo1.png?where=super' alt = ''>";
echo $aurl . "<br/>";
foreach ($filenames as $name) {
//    echo $name ."<br>";
//    $aurl = "<img width='100' height='100' src='file:///".$www.$name."' alt = '".$name."'>";
//    $aurl = "<img width='100' height='100' src='file:///D:/PythonWorks/xx/0076BSS5ly1g9mtrgnjh7j30kp0s2dhe.jpg' alt = ''>";
//    echo $aurl . "<br/>";
//    echo $www.$name . "<br/>";
}