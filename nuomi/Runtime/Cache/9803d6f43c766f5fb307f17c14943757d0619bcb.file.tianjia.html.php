<?php /* Smarty version Smarty-3.1.6, created on 2015-05-06 22:47:07
         compiled from "F:/20150303/lesson/nuomi/nuomi/Admin/View\Role\tianjia.html" */ ?>
<?php /*%%SmartyHeaderCode:292845548dcc6c59435-84631723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9803d6f43c766f5fb307f17c14943757d0619bcb' => 
    array (
      0 => 'F:/20150303/lesson/nuomi/nuomi/Admin/View\\Role\\tianjia.html',
      1 => 1430923431,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '292845548dcc6c59435-84631723',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5548dcc6ccd52',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5548dcc6ccd52')) {function content_5548dcc6ccd52($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>添加角色</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：角色管理-》添加角色信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/showlist">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>角色名称</td>
                    <td><input type="text" name="role_name" /></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="添加" />
                    </td>
                </tr>  
            </table>
            </form>
        </div>
    </body>
</html><?php }} ?>