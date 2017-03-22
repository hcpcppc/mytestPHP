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
/**
 * 第二个参数
 * LOCK_SH  读操作锁定，则意味着文件可以共享，其他人可以读该文件
 * LOCK_EX  写操作锁定，这是互斥的，该文件不能被共享
 * LOCK_UN  释放已有的锁定
 * LOCK_NB  放置在请求加锁时发生堵塞
 *
 */

flock($fp,LOCK_EX);

/**
 * 读取文件，可以读取网络资源
 *  参数	描述
 *  path	必需。规定要读取的文件，或者url。
 *  include_path	可选。如果您还想在 include_path（在 php.ini 中）中搜索文件的话，请设置该参数为 '1'。
 *  context	可选。规定文件句柄的环境。context 是一套可以修改流的行为的选项。若使用 NULL，则忽略。
 *  start	可选。规定在文件中开始读取的位置。该参数是 PHP 5.1 中新增的。
 *  max_length	可选。规定读取的字节数。该参数是 PHP 5.1 中新增的。
 */
file_get_contents(path,include_path,context,start,max_length);



/**
 * 写入文件
 *   参数	描述
 *   file	必需。规定要写入数据的文件。如果文件不存在，则创建一个新文件。
 *   data	必需。规定要写入文件的数据。可以是字符串、数组或数据流。
 *   mode	可选。规定如何打开/写入文件。可能的值：
 *           FILE_USE_INCLUDE_PATH
 *           FILE_APPEND
 *           LOCK_EX
 *   context	可选。规定文件句柄的环境。context 是一套可以修改流的行为的选项。
 */
file_put_contents(file,data,mode,context);

