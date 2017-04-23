<?php /* Smarty version Smarty-3.1.6, created on 2017-02-21 21:19:40
         compiled from "H:/web/shop/Admin/View\Manager\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:1138758ac3d8c2c9140-28800731%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7f9672acf0a02cbb41da2742cb20fcba0d029f5' => 
    array (
      0 => 'H:/web/shop/Admin/View\\Manager\\showlist.html',
      1 => 1487683175,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1138758ac3d8c2c9140-28800731',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58ac3d8c499f3',
  'variables' => 
  array (
    'managerinfo' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ac3d8c499f3')) {function content_58ac3d8c499f3($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
    <table border="1" cellspacing="0" width="100%">
    	<tr>
    	<th>序列号</th>
    	<th>姓名</th>
    	<th>角色</th>
    	<th colspan="3">操作</th>
    	</tr>
    	<?php  $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['k']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['managerinfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['k']->key => $_smarty_tpl->tpl_vars['k']->value){
$_smarty_tpl->tpl_vars['k']->_loop = true;
?>
    	<tr align="center">
    		<td><?php echo $_smarty_tpl->tpl_vars['k']->value['mg_id'];?>
</td>
    		<td><?php echo $_smarty_tpl->tpl_vars['k']->value['mg_name'];?>
</td>
    		<?php if ($_smarty_tpl->tpl_vars['k']->value['mg_name']==="admin"){?>
    		<td>超级管理员</td>
    		<?php }else{ ?>
    		<td><?php echo $_smarty_tpl->tpl_vars['k']->value['mg_role_name'];?>
</td>
    		<?php }?>
    		<td><a href="#">分配权限</a></td>		
    	   <td><a href="#">修改</a></td>		
    	  <td><a href="#">删除</a></td>	
    	</tr>
    	<?php } ?>
    </table>
    </body>
</html><?php }} ?>