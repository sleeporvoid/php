<?php
/**
 * @Author: Administrator
 * @Date:   2017-02-23 22:23:29
 * @Last Modified by:   Administrator
 * @Last Modified time: 2017-02-24 12:48:43
 */
 namespace Admin\Controller;
 use Tools\AdminController;
class AuthController extends AdminController{

	public function showlist(){
		//根据auth_path 获得authinfo;
		$authModel =new \Model\AuthModel();
		$authinfo =$authModel->order('auth_path')->select();

		$this->assign('authinfo',$authinfo);
		$this->display();
	}

	public function tianjia(){
		$authModel =new \Model\AuthModel();
		//显示，添加
		if(!empty($_POST)){
         $z= $authModel->saveAuth($_POST);
         if($z){
            //成功
            $this->redirect('showlist',array(),2,"添加成功");
         }else{
            $this->redirect('showlist',array(),2,"添加失败");
         }
		}else{
		//查找出所有的一级权限
		 $authinfo =$authModel->where('auth_level=0')->
		 field('auth_name,auth_id')->select();
         $this->assign('authinfo',$authinfo);
         $this->display();
		}
	}
}