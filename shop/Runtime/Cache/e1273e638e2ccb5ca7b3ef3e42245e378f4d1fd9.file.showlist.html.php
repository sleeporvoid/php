<?php /* Smarty version Smarty-3.1.6, created on 2017-02-21 21:27:21
         compiled from "H:/web/shop/Admin/View\Role\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:286358a90ed3c8d226-04599973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1273e638e2ccb5ca7b3ef3e42245e378f4d1fd9' => 
    array (
      0 => 'H:/web/shop/Admin/View\\Role\\showlist.html',
      1 => 1487683636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '286358a90ed3c8d226-04599973',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a90ed3cfe6b',
  'variables' => 
  array (
    'roleinfo' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a90ed3cfe6b')) {function content_58a90ed3cfe6b($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
    <table border="1" width='100%' cellspacing="0">
    	<tr>
    		<th>id</th>
    		<th>角色名称</th>
    		<th>权限ids</th>
    		<th>权限控制器/控制方法</th>
    		<th align="center" colspan="3">操作</th>
    	</tr> 
    	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['roleinfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>	 
    	<tr>
    	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['role_id'];?>
</td>		
    	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['role_name'];?>
</td>		
    	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['role_auth_ids'];?>
</td>		
    	<td><?php echo $_smarty_tpl->tpl_vars['v']->value['role_auth_ac'];?>
</td>		
    	<td><a href="<?php echo @__CONTROLLER__;?>
/distrubute/role_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['role_id'];?>
">分配权限</a></td>		
    	<td><a href="#">修改</a></td>		
    	<td><a href="#">删除</a></td>		
    	</tr>
    	<?php } ?>

    </table>


    </body>
</html><?php }} ?>