<?php

//添加头文件，确定编码
header('content-type:text/html;charset=utf-8');

  //设置调试模式
define('APP_DEBUG',true);//开发者模式 

 //给资源文件设置前台路径常量
 define('CSS_URL','/shop/Home/Public/css/');
 define('IMAGE_URL','/shop/Home/Public/images/');
 define('JS_URL','/shop/Home/Public/js/');

//给资源文件设置后台的路径常量
define('ADMIN_CSS_URL','/shop/Admin/Public/css/');
define('ADMIN_IMAGE_URL','/shop/Admin/Public/img/');

//给系统的静态资源文件请求路径设置常量
define('SITE_URL','http://www.web.com/shop/');

 //引入框架的接口文件
 include("../ThinkPHP/ThinkPHP.php");

?>