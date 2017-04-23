<?php
/**
 * @Author: Administrator
 * @Date:   2017-02-08 20:27:55
 * @Last Modified by:   Administrator
 * @Last Modified time: 2017-02-24 12:55:55
 */
namespace Admin\Controller;
use Think\Controller;
class ManagerController extends Controller{

	public function login(){
		//echo $_POST['captcha'];
          if(!empty($_POST)){
              $ver =new \Think\Verify();
               if($ver->check($_POST['captcha'])){
                  $userpwd=array(
                    'mg_name'=>$_POST['admin_user'],
                    'mg_pwd'=>$_POST['admin_psd']
                    );
                  $info=D('manager')->where($userpwd)->find();

                  if($info){
                          //把数据存到session中，跳转到/Admin/Index
                          session('admin_name',$info['mg_name']);
                          session('admin_id',$info['mg_id']);
                          $this->redirect('Index/index');
                          echo '成功登陆';
                  }else{
                        //账号密码错误
                        echo '账号密码错误';
                  }
               }else{
                  echo '验证码错误';
               }
          }  
		$this->display();
	}

  
	 function verifyImg(){
		$cfg =array(
          'imageH'=>40,
          'imageW'=>110,
          'fontSize'=>15,
          'length'=>4,
          'fontttf'=>'4.ttf'
			);

		//实例化verify对象
		$ver =new  \Think\Verify($cfg);
		$ver->entry();
	}

  public function logout(){
  session(null);
  $this->redirect('Manager/login');
}

 public function showlist(){
   $manager =D('manager');
   $managerinfo=$manager->select();
    // id 姓名 角色 操作
   $role =D('role');
   
   $len =count($managerinfo);
   for($i=0;$i<$len;$i++){
   $managerinfo[$i]['mg_time']=date(
    "Y-m-d H:i:s",$managerinfo[$i]['mg_time']);

    $managerinfo[$i]['mg_role_name']=$role->where("role_id = ".
      $managerinfo[$i]['mg_role_id'])->field('role_name')
       ->find()['role_name'];
   }
   
  
   $this->assign('managerinfo',$managerinfo);
   $this->display();
 }
} 