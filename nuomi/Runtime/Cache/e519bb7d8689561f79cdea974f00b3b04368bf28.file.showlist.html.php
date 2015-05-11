<?php /* Smarty version Smarty-3.1.6, created on 2015-05-06 14:00:38
         compiled from "F:/20150303/lesson/nuomi/nuomi/Admin/View\Manager\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:237575548e23ac5fbd5-50020177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e519bb7d8689561f79cdea974f00b3b04368bf28' => 
    array (
      0 => 'F:/20150303/lesson/nuomi/nuomi/Admin/View\\Manager\\showlist.html',
      1 => 1430891997,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '237575548e23ac5fbd5-50020177',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5548e23acf766',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5548e23acf766')) {function content_5548e23acf766($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>管理员列表</title>

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
                <span style="float: left;">当前位置是：管理员管理-》管理员列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__CONTROLLER__;?>
/tianjia">【添加管理员】</a>
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
            <table class="table_a" border="1" width="100%">
                <tbody><tr style="font-weight: bold;">
                        <td>序号</td><td>管理员名称</td><td>密码</td>
                        <td>注册时间</td><td>角色id</td><td align="center">操作</td>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
?>
                    <tr id="product1">
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['mg_id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['mg_name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['mg_pwd'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['mg_time'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['mg_role_id'];?>
</td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/upd/mg_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['mg_id'];?>
">修改</a></td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/del/mg_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['mg_id'];?>
" onclick="del">删除</a></td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <td colspan="20" style="text-align: center;">
                            <?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html><?php }} ?>