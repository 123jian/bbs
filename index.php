<?php
header("content-type:text/html;charset=utf-8");

// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

//
//define('BIND_MODULE','Admin');

// 定义应用目录
define('APP_PATH','./Application/');

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单

//PV统计
$time = date("Y-m-d",time());
//echo $time;die;
$model=M('pv');
$data=$model->where(['pv_time' => $time])->select();
//var_dump($data);//die;
if($data){
    $model=M('pv');
    $id=$data[0]['pid'];
    //echo $id;die;
    //$info['pv_count'] = $data["pv_count"]+1;
    $pv_content=$data[0]["pv_count"]+1;
    //echo $pv_content;die;
    $model->where('pid='.$id)->setField('pv_count',$pv_content);
    //echo $model->getLastSql();die;

}  else {
    $model=M('pv');
    $info['pv_time'] = date("Y-m-d",time());
    $info['pv_count'] = 1;
    $a=$model->add($info);
    //echo $a;
}

//session存memcache
ini_set("session.save_handler","memcache");
ini_set("session.save_path",'tcp://192.168.1.2:11211');
session_start();
