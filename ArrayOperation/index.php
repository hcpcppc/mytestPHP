<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/22
 * Time: 21:29
 */

//var_dump('12'>'2');die;

$a = array('a'=>'haha','c'=>'xixi','b'=>'gge');
//var_dump(each($a));die;

function test(&$val,$key,$factor){
    $val = $val.'-'.$key.'-'.$factor;
}
array_walk($a,'test','aaa');

var_dump($a);

var_dump(array_count_values($a));die;