<?php
return array(
	//'配置项'=>'配置值'
	
	//在页面底部设置显示跟踪信息
	SHOW_PAGE_TRACE => true,

	//设置请求的默认分组
	DEFAULT_MODULE => 'Home',
	MODULE_ALLOW_LIST => array('Home','Admin'),

	'TMPL_ENGINE_TYPE' =>'Smarty',
	'TMPL_ENGINE_CONFIG' =>array(
	'caching'=>false,
	//'template_dir'=>TMPL_PATH,
	//'compile_dir'=>CACHE_PATH,
	//'cache_dir'=>TEMP_PATH	
),
	//配置链接数据库
	DB_TYPE  =>  'mysql',
	DB_HOST =>'localhost',
	DB_PORT =>'3306',
	DB_NAME=>'shop0811',
	DB_USER=>'root',
	DB_PWD =>'root',
	DB_PREFIX =>'sw_', //前缀
    DB_PARAMS =>array(),
    DB_DEBUG=>true,
    DB_FIELDS_CACHE=>true,
    DB_CHARSET=>'utf8',
);