<?php /* Smarty version Smarty-3.1.6, created on 2015-05-06 16:39:48
         compiled from "D:/00/tp/nuomi3/nuomi/Home/View\Order\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:175515549d354e2c621-08435036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f9e16dfe511c867a1d857716412e8f7d29e4994' => 
    array (
      0 => 'D:/00/tp/nuomi3/nuomi/Home/View\\Order\\showlist.html',
      1 => 1430901559,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175515549d354e2c621-08435036',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5549d354f1057',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5549d354f1057')) {function content_5549d354f1057($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>会员列表</title>

        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <!--
        “{}”标记与 Smarty的标记有冲突的解决：
        ① 内容左右设置空格
        ② {literal}内部代码不被smarty解析{/literal}
        ③ 设置smarty的标记符号为其他内容
        ④ 标记内容不在同一行
        -->

        <?php echo @ADMIN_CSS_URL;?>
mine.css



        <style>
            .tr_color{
                background-color: #9F88FF}
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：商品管理-》商品列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__CONTROLLER__;?>
/tianjia">【添加商品】</a>
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
                        <td>序号</td><td>商品名称</td><td>库存</td>
                        <td>价格</td><td>图片</td><td>缩略图</td>
                        <td>品牌</td><td>创建时间</td><td align="center">操作</td>
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
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
</td>
                        <td><a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
</a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_number'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_price'];?>
</td>
                        <td><img src="<?php echo @SITE_URL;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_big_img'];?>
" height="60" width="60"></td>
                        <td><img src="<?php echo @SITE_URL;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_small_img'];?>
" height="40" width="40"></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_brand_id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_create_time'];?>
</td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/upd/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
">修改</a></td>
                        <td><a href="javascript:;" onclick="delete_product(1)">删除</a></td>
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