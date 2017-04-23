<?php
/**
 * @Author: Administrator
 * @Date:   2017-02-23 21:00:29
 * @Last Modified by:   Administrator
 * @Last Modified time: 2017-02-23 21:47:39
 */
 namespace Model;
 use Think\Model;
class RoleModel extends Model {
 
 public function saveAuth($role_id,$auth_id){
  //1.将auth_id数组转化为字符串
   $auth_id=implode(",", $auth_id);
   //根据$auth_id查找到auth数组
   $authinfo =D("auth")->select($auth_id);
   //循环拥有的权限，
   $ac="";
     foreach ($authinfo as $k => $v) {
     	//如果当前的id的level是一的话添加role_auth_ac
     	if(!empty($v['auth_a'])&&!empty($v['auth_c'])){
          $ac.=$v['auth_c']."-".$v['auth_a'].",";
     	}
     }
    $ac=rtrim($ac,",");
    
    $sql ="UPDATE sw_role SET role_auth_ids='$auth_id',
    role_auth_ac='$ac' WHERE role_id=$role_id;";
   
   $z= $this->execute($sql);
   return $z;
 }
}