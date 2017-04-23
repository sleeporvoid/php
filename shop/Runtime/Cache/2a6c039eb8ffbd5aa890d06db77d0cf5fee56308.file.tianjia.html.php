<?php /* Smarty version Smarty-3.1.6, created on 2017-02-23 23:32:18
         compiled from "H:/web/shop/Admin/View\Auth\tianjia.html" */ ?>
<?php /*%%SmartyHeaderCode:1573958aefbb84545c9-45764252%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a6c039eb8ffbd5aa890d06db77d0cf5fee56308' => 
    array (
      0 => 'H:/web/shop/Admin/View\\Auth\\tianjia.html',
      1 => 1487863908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1573958aefbb84545c9-45764252',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58aefbb84e4e6',
  'variables' => 
  array (
    'smaty' => 0,
    'authinfo' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58aefbb84e4e6')) {function content_58aefbb84e4e6($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
           <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
    <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：角色管理-》添加角色</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <!--当前访问： /shop/index.php/Admin/Goods/showlist-->
                    <a style="text-decoration: none;" href="<?php echo @__CONTROLLER__;?>
/showlist">【返回列表】</a>
                </span>
            </span>
        </div>
    <form action="<?php echo $_smarty_tpl->tpl_vars['smaty']->value['const']['__SELF__'];?>
" method="post" >
    <table border="1" width="100%" class="table_a">
    	<tr>
    		<td>权限名称</td>
    		<td><input name="auth_name" type="text"></td>
       </tr>
       <tr>
       <td>上级</td>
       <td>
       	<select name="auth_pid">
       		<option value="0">--请选择</option>
       		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['authinfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
       		<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['auth_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_name'];?>
</option>
       		<?php } ?>
       	</select>
       </td>
       </tr>
       <tr>
       	<td>控制器</td>
       	<td><input type="text" name="auth_c"></td>
       </tr>
       <tr>
       	<td>方法</td>
       	<td><input type="text" name="auth_a"></td>
       </tr>
    </table>
    <br>
    <br>
    <input type="submit" value="提交">
    </form>
    </body>
</html><?php }} ?>