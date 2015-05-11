<?php /* Smarty version Smarty-3.1.6, created on 2015-05-06 13:13:19
         compiled from "F:/20150303/lesson/nuomi/nuomi/Admin/View\Manager\upd.html" */ ?>
<?php /*%%SmartyHeaderCode:142475549a1b44c6dd0-23672697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc1ae7858fac659fe6d03aa51a52f105ab48632b' => 
    array (
      0 => 'F:/20150303/lesson/nuomi/nuomi/Admin/View\\Manager\\upd.html',
      1 => 1430889191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142475549a1b44c6dd0-23672697',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5549a1b4565b0',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5549a1b4565b0')) {function content_5549a1b4565b0($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>管理员修改</title>

        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
    
        <style>
            .tr_color{
                background-color: #9F88FF}
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：管理员管理-》管理员修改</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__CONTROLLER__;?>
/showlist">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>
        <div class="div_search">
            <span>
                <form action="#" method="get">
                    品牌<select name="s_product_mark" style="width: 100px;">
                        <option selected="selected" value="0">请选择</option>
                        <option value="1">苹果apple</option>
                    </select>
                    <input value="查询" type="submit" />
                </form>
            </span>
        </div>
        <div style="font-size: 13px; margin: 10px 5px;">
        <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
            <table class="table_a" border="1" width="100%">
                <tbody>
                    <tr>
                        <td>管理员名称</td>
                        <td><input type="text" name="mg_name" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['mg_name'];?>
" /></td>
                        </tr>
                    <tr>
                    <tr>
                        <td>密码</td>
                        <td><input type="password" name="mg_pwd" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['mg_pwd'];?>
" /></td>
                        </tr>
                    <tr>
                    <tr>
                        <td>角色id</td>
                        <td><input type="text" name="mg_role_id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['mg_role_id'];?>
" /></td>
                        </tr>
                    <tr>
                    <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="修改" />
                    </td>
                    </tr> 
                </tbody>
            </table>
        </form>
        </div>
    </body>
</html><?php }} ?>