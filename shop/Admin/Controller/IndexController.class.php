<?php
/**
 * @Author: Administrator
 * @Date:   2017-02-08 20:45:54
 * @Last Modified by:   Administrator
 * @Last Modified time: 2017-02-24 12:47:44
 */
namespace Admin\Controller;
use Tools\AdminController;
class IndexController extends AdminController{

public 	function index(){
	$this->display();

}
public function head(){
	$this->display();
}
public function right(){
	$this->display();
}
public function left(){
  //根据用户id查找manager
  $admin_id =session('admin_id');
  $manager =D('Manager')->find($admin_id);
 
  //根据mg_role_id查找auth
   $role_id =$manager['mg_role_id'];
   $role =D('role')->find($role_id);
  //根据role_auth_ids 查找 auth_name;
   $auth =D('auth');
   $auth_ids=$role['role_auth_ids'];
   if(session('admin_name')=='admin'){
    $auth_infoA=$auth->where("auth_level=0")->select();
    $auth_infoB=$auth->where('auth_level=1')->select();
   }else{

    $auth_infoA =$auth->where(
  	"auth_level=0 and auth_id in ($auth_ids)")->select();
    $auth_infoB =$auth->where(
  	"auth_level=1 and auth_id in ($auth_ids)")->select();
   }
 
 
    $this->assign('auth_infoA',$auth_infoA);
    $this->assign('auth_infoB',$auth_infoB);
	$this->display();

}
public function logout(){
	session(null);
	$this->redirect('Manager/login');
}
}