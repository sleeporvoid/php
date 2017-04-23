<?php
/**
 * @Author: Administrator
 * @Date:   2017-02-19 11:07:21
 * @Last Modified by:   Administrator
 * @Last Modified time: 2017-02-24 12:48:36
 */
 namespace Admin\Controller;
 use Tools\AdminController;
class RoleController extends AdminController{
  public function showlist(){

  	$role =D('role');
  	$roleinfo=$role->select();

  	$this->assign('roleinfo',$roleinfo);
  	$this->display();
  }

  public function distrubute(){
  	//获得role_id
  	//根据role_id查找role_auth_ids
  	//把role_auth_ids 以每个id为单位变为数组 拥有的id
  	//查找一级权限
  	//查找二级权限
  	$role_id =$_GET['role_id'];

  	if(!empty($_POST)){
         $roleModel =new \Model\RoleModel();
       $z = $roleModel->saveAuth($role_id,$_POST['auth_id']);
    if($z){
           //成功
           $this->redirect('showlist',array(),2,"修改权限成功");
    }else{
        $this->redirect('showlist',array(),2,"修改权限失败");
    }
    
  	}else{
  	
  	$roleinfo=D('role')->find($role_id);

     $have_auth =explode(",", $roleinfo['role_auth_ids']);

  	 $authinfoA=D('auth')->where('auth_level = 0')->select();
  	 $authinfoB=D('auth')->where('auth_level = 1')->select();

  	 $this->assign('have_auth',$have_auth);
  	 $this->assign('authinfoA',$authinfoA);
  	 $this->assign('authinfoB',$authinfoB);
  	 $this->display();
  	 }
  }
}