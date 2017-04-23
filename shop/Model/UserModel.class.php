<?php
/**
 * @Author: Administrator
 * @Date:   2017-02-14 11:47:49
 * @Last Modified by:   Administrator
 * @Last Modified time: 2017-02-14 16:51:10
 */
 namespace Model;
 use Think\Model;
class UserModel extends Model{
	//批量验证，返回的错误信息是一个数组
protected $patchValidate =true;

protected $_validate =array(
      array('username','require','用户名必须存在'),
      array('password','require','密码必须存在'),
      array('password','number','用户名必须是数字'),
      array('password2','password','两次输入密码必须一样',0,'confirm'),
      array('password','4,11','密码必须是4到12个数字',3,'length'),
      array('user_email','email','邮箱输入错误'),
      array('user_qq','6,12','QQ号码必须是6到12位',3,'length'),
      array('user_tel','11','手机必须是11位',3,'length'),
      array('user_xueli',array(2,3,4,5),'请选择学历',3,'in'),
      array('user_hobby','check_hobby','爱好至少选择两个以上',1,'callback')

	);

 public function check_hobby($arg){
 	  if(count($arg)<2){
          return false;
 	  }else{
         return true;
 	  }
 }
}