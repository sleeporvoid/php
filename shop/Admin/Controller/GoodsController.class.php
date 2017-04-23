<?php
/**
 * @Author: Administrator
 * @Date:   2017-02-08 21:17:41
 * @Last Modified by:   Administrator
 * @Last Modified time: 2017-02-24 12:48:42
 */
namespace Admin\Controller;
use Tools\AdminController;
use Tools\Page;
class GoodsController extends AdminController{

	public function showlist(){
      
		 $goods=D('Goods');
    //实现分页效果，拼接sql语句，制作页码列表
     $cnt =$goods->count();
     $per = 7;
     $page_obj =new Page($cnt,$per);

     $sql ='SELECT * FROM sw_goods ORDER BY goods_id desc '.$page_obj->limit;

		 
		 $info =$goods->query($sql);

     $pageList =$page_obj->fpage(array(0,1,2,3,4,5,6,7,8));
     
     $this->assign('pageList',$pageList);
		 $this->assign('info',$info);
		 $this->display();
	}

	public function tianjia(){
    
     if($_POST){
      
     	$goods=D('goods');
         //上转图片
         //如果图片上传成功
         //设置根目录路径
         //实例化UpLoad对象
         //上传对象uploadOne
         //拼接上转的路径
         //在$_POST[]数组中添加对象
         if($_FILES['goods_pic']['error']===0){
          $cfg=array(
             'rootPath'=>'./Public/Upload/',
            );
           $up = new \Think\Upload($cfg);
           $z = $up->uploadOne($_FILES['goods_pic']);
           $bigPicName =$up->rootPath.$z['savepath'].$z['savename'];
           $_POST['goods_big_img'] =substr($bigPicName,2);
           //缩略图的制作
           //初始化对象,打开图像，缩小图像。拼接路径,保存 到函数中
           $img =new \Think\Image();

           $img->open($bigPicName);
           $img->thumb(125,125);

           $smallPicName=$up->rootPath.$z['savepath'].'small_'.$z['savename'];
           $img->save($smallPicName);
           $_POST['goods_small_img']=substr($smallPicName,2);
         }
         //exit;
     	 $z=$goods->add($_POST);
   
          if($z){
          	//$this->direct(地址分组\控制器操作方法，参数，间隔时间，提示信息);
          	$this->redirect('showlist',array(),2,'添加数据成功');
          }else{
          	$this->redirect('tianjia',array(),2,'添加数据失败');
          }

     }else{
     	 $this->display();
     }

     
	}
	
	public function upd($goods_id){
		//可以使用find查找一条数据
		$goods=D('goods');
		if(!empty($_POST)){
         //如果表单传来数据,保存数据,验证保存结果
         
          $z = $goods->save($_POST);    
          if($z){
            $this->redirect('showlist',array(),2,'添加数据成功');
          }else{
            $this->redirect('upd',array(goods_id=>$goods_id),2,'添加数据失败');
          }
		}else{
           //如果表单没有传来数据,根据goods_id查找数据，并显示
           $info =$goods->find($goods_id);
           $this->assign('info',$info);
           $this->display();
		}
     
	}

	public function delete($goods_id){
	   $goods =D('goods');
	 $z =  $goods->delete($goods_id);
	 if($z){
 
       $this->redirect('showlist',array(),2,"删除数据成功");  
	 }else{
      $this->redirect('showlist',array(),2,"删除数据失败");  
	 }
	}
}