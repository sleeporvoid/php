<?php

//���ͷ�ļ���ȷ������
header('content-type:text/html;charset=utf-8');

  //���õ���ģʽ
define('APP_DEBUG',true);//������ģʽ 

 //����Դ�ļ�����ǰ̨·������
 define('CSS_URL','/shop/Home/Public/css/');
 define('IMAGE_URL','/shop/Home/Public/images/');
 define('JS_URL','/shop/Home/Public/js/');

//����Դ�ļ����ú�̨��·������
define('ADMIN_CSS_URL','/shop/Admin/Public/css/');
define('ADMIN_IMAGE_URL','/shop/Admin/Public/img/');

//��ϵͳ�ľ�̬��Դ�ļ�����·�����ó���
define('SITE_URL','http://www.web.com/shop/');

 //�����ܵĽӿ��ļ�
 include("../ThinkPHP/ThinkPHP.php");

?>