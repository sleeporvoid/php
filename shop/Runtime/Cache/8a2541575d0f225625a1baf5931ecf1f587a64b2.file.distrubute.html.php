<?php /* Smarty version Smarty-3.1.6, created on 2017-02-21 22:09:06
         compiled from "H:/web/shop/Admin/View\Role\distrubute.html" */ ?>
<?php /*%%SmartyHeaderCode:1470658ac461609d970-92486284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a2541575d0f225625a1baf5931ecf1f587a64b2' => 
    array (
      0 => 'H:/web/shop/Admin/View\\Role\\distrubute.html',
      1 => 1487686139,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1470658ac461609d970-92486284',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58ac4616112c9',
  'variables' => 
  array (
    'authinfoA' => 0,
    'v' => 0,
    'have_auth' => 0,
    'authinfoB' => 0,
    'vv' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ac4616112c9')) {function content_58ac4616112c9($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
    <form action="<?php echo @__SELF__;?>
" method="post">
    	<table width="100%" border="1" cellspacing="0">
      	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['authinfoA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
      	<tr width="18%">
      	<td>
      		<input type="checkbox" name="auth_id[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['auth_id'];?>
" 
           <?php if (in_array($_smarty_tpl->tpl_vars['v']->value['auth_id'],$_smarty_tpl->tpl_vars['have_auth']->value)){?>checked='checked'<?php }?>
      		><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_name'];?>

      	</td>
      	  <td>	
        <?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['authinfoB']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['vv']->value['auth_pid']==$_smarty_tpl->tpl_vars['v']->value['auth_id']){?>
            <div style="width:200px;float:left;">
        	<input type="checkbox" name="auth_id[]" value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['auth_id'];?>
" 
         <?php if (in_array($_smarty_tpl->tpl_vars['vv']->value['auth_id'],$_smarty_tpl->tpl_vars['have_auth']->value)){?>checked='checked'<?php }?>
      		><?php echo $_smarty_tpl->tpl_vars['vv']->value['auth_name'];?>

       
        <?php }?>
    </div>
        <?php } ?>
         </td>
        </tr>
        <?php } ?>
    	</table>
    	<br>
    	<input type="submit" value="修改权限">
    	</form>
    </body>
</html><?php }} ?>