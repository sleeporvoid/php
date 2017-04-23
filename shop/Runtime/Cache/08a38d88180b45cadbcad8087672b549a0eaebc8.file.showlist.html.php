<?php /* Smarty version Smarty-3.1.6, created on 2017-02-23 23:32:38
         compiled from "H:/web/shop/Admin/View\Auth\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:1494758aef34c8f3679-59195353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08a38d88180b45cadbcad8087672b549a0eaebc8' => 
    array (
      0 => 'H:/web/shop/Admin/View\\Auth\\showlist.html',
      1 => 1487863909,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1494758aef34c8f3679-59195353',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58aef34c958f8',
  'variables' => 
  array (
    'authinfo' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58aef34c958f8')) {function content_58aef34c958f8($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
    <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：角色管理-》角色列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <!--当前访问： /shop/index.php/Admin/Goods/showlist-->
                    <a style="text-decoration: none;" href="<?php echo @__CONTROLLER__;?>
/tianjia">【添加角色】</a>
                </span>
            </span>
        </div>
    	<table border="1" class="table_a" width="100%">
    	<tr style="font-weight bold;">
    		<th>序列号</th>
    		<th>名称</th>
    		<th>父序号</th>
    		<th>控制器</th>
    		<th>方法</th>
    		<th>全路径</th>
    		<th>级别</th>
    		<th colspan="2">操作</th>
    	</tr>
    	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['authinfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
    	<tr>
    	 <td style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_id'];?>
</td>
         <td><?php echo preg_replace('!^!m',str_repeat('--/',$_smarty_tpl->tpl_vars['v']->value['auth_level']),$_smarty_tpl->tpl_vars['v']->value['auth_name']);?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_pid'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_c'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_a'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_path'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_level'];?>
</td>
         <td style="text-align:center"><a href="#">修改</a></td>
         <td style="text-align:center"><a href="#">删除</a></td>
    	</tr>
    	<?php } ?>
    	</table>
    </body>
</html><?php }} ?>