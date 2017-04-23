<?php
/**
 * @Author: Administrator
 * @Date:   2017-02-23 22:25:29
 * @Last Modified by:   Administrator
 * @Last Modified time: 2017-02-23 23:35:13
 */
namespace Model;
use Think\Model;
class AuthModel extends Model{
	public function saveAuth($authinfo){
         $newid=$this->add($authinfo);
         //制造新的路径
         $path="";
         if($authinfo['pid']==0){
         	$path=$newid;
         }else{
         	$path=$authinfo['pid']."-".$newid;
         }
         //制作新的级别 算法 -的是数量
         $level=substr_count($path, "-");

         $sql="UPDATE sw_auth SET auth_path='$path'
         ,auth_level='$level' WHERE auth_id='$newid'";

         $z= $this->execute($sql);

       return $z;
	}
}