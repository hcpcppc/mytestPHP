<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/22
 * Time: 19:55
 */
//获取该文件的根目录
$root_document = $_SERVER['DOCUMENT_ROOT'];

//获取文件some.txt ,并且以写文件的形式打开
$fp = fopen($root_document.'/some.txt','w');

//写入数据   第三个参数是写入的字符数
fwrite($fp,'hahahahha',10);

//关闭文件
fclose($fp);

//读取整个文件
readfile($root_document.'/some.txt');

//判断文件是否存在
if(file_exists($root_document.'/some.txt')){
    echo "文件存在！";
}

//输出文件大小
echo "文件大小".filesize($root_document.'/some.txt');

//删除文件
unlink($root_document.'/some.txt');

//文件锁定 返回值为true/false
flock($fp);

