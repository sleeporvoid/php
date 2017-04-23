<?php
/**
 * @Author: Administrator
 * @Date:   2017-02-24 12:32:07
 * @Last Modified by:   Administrator
 * @Last Modified time: 2017-02-24 20:03:49
 */
namespace Tools;
use Think\Controller;
class AdminController extends Controller{

  function  __construct(){

 	parent::__construct();

//当前请求的操作方法
  $nowac = CONTROLLER_NAME."-".ACTION_NAME;
  $admin_name=session('admin_name');
//如果没有登录，并且不是Manager-login,Manager-verifyImg
  $rangac="manager-login,Manager-verifyImg";
   if(empty($admin_name)&& strpos($rangac,$nowac)===false){
   
    $js=<<<eof
    <script type="text/javascript">
   window.top.location.href="/shop/index.php/Admin/Manager/login";
    </script>
eof;
 echo $js."========";
   }
//以下情况的都不符合,没有权限，跳转到登陆页面
 	//1.登录的权限不在当前角色中;
 	//2.登录的权限不在默认权限中
 	//3.登录的角色不是admin
 
     //admin_id->mg_role_id->role_auth_acs
      $admin_id=session('admin_id');

      $role_id=D('Manager')->
      field('mg_role_id')->select($admin_id)['mg_role_id'];

      $authac=D('Role')->
      field('role_auth_ac')->select($role_id)['role_auth_ac'];
    
     $allowac="Manager-login,Manager-logout,Manager-VerifyImg,
     Index-index,Index-left,Index-right,Index-head";

      if(strpos($allowac,$nowac)===false&&
        strpos($authac,$nowac)===false&&
        $admin_name!='admin'){
           exit('没有访问权限');
    }
 }
}