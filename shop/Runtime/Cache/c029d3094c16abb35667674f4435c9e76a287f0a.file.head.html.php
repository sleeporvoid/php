<?php /* Smarty version Smarty-3.1.6, created on 2017-02-19 08:37:48
         compiled from "H:/web/shop/Admin/View\Index\head.html" */ ?>
<?php /*%%SmartyHeaderCode:32319589c68eb345ca5-02362556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c029d3094c16abb35667674f4435c9e76a287f0a' => 
    array (
      0 => 'H:/web/shop/Admin/View\\Index\\head.html',
      1 => 1487464665,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32319589c68eb345ca5-02362556',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_589c68eb3a38b',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589c68eb3a38b')) {function content_589c68eb3a38b($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <link href="<?php echo @ADMIN_CSS_URL;?>
admin.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <table cellspacing=0 cellpadding=0 width="100%" 
               background="<?php echo @ADMIN_CSS_URL;?>
header_bg.jpg" border=0>
            <tr height=56>
                <td width=260><img height=56 src="<?php echo @ADMIN_IMAGE_URL;?>
header_left.jpg" 
                                   width=260></td>
                <td style="font-weight: bold; color: #929292; padding-top: 20px" 
                    align=middle>当前用户：<?php echo $_SESSION['admin_name'];?>
 &nbsp;&nbsp; <a style="color:  #929292" 
                                                        href="" 
                                                        target=main>修改口令</a> &nbsp;&nbsp; <a style="color:  #929292" 
                                                        onclick="if (confirm('确定要退出吗？')) return true; else return false;" 
                                                        href="" target=_top>退出系统</a> 
                </td>
                <td align=right width=268><img height=56 
                                               src="<?php echo @ADMIN_IMAGE_URL;?>
header_right.jpg" width=268></td></tr></table>
        <table cellspacing=0 cellpadding=0 width="100%" border=0>
            <tr bgcolor=#1c5db6 height=4>
                <td></td>
            </tr>
        </table>
    </body>
</html><?php }} ?>