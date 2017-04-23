<?php
/**
 * @Author: Administrator
 * @Date:   2017-02-08 11:24:53
 * @Last Modified by:   Administrator
 * @Last Modified time: 2017-02-14 16:59:11
 */
  namespace Home\Controller;
  use Think\Controller; 
class UserController extends Controller{

	public function login(){
        $this->display();
	}

	public function register(){
		$user =new \Model\UserModel();

		if(!empty($_POST)){
			
              $data = $user->create();
              if($data){
              	$data['user_hobby'] =implode(",", $data['user_hobby']);
              	echo 'success';
              	$user->add($data);
              }else{
              	$error =$user->getError();
              	$this->assign('error',$error);
              	$this->display();
              }
		}else{
			$this->display();
		}
       
	}
}