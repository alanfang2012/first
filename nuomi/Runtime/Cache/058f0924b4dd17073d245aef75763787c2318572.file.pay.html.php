<?php /* Smarty version Smarty-3.1.6, created on 2015-05-09 19:27:53
         compiled from "D:/00/tp/nuomi_one/nuomi/Home/View\Order\pay.html" */ ?>
<?php /*%%SmartyHeaderCode:31001554def39b11df9-23652998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '058f0924b4dd17073d245aef75763787c2318572' => 
    array (
      0 => 'D:/00/tp/nuomi_one/nuomi/Home/View\\Order\\pay.html',
      1 => 1431170776,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31001554def39b11df9-23652998',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_554def39d600f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554def39d600f')) {function content_554def39d600f($_smarty_tpl) {?>
<!DOCTYPE html>
<!-- saved from url=(0730)https://zhifu.baidu.com/proxy/req/newcashier?customerId=4&service=cashier&returnUrl=http%3A%2F%2Ft10sc.nuomi.com%2Fpc%2Forder%2Fpayresult&notifyUrl=http%3A%2F%2Fserv.sc.int.nuomi.com%2Ftradecenter%2Fmain%2FpayNotify&defaultResPage=0&sdk=0&tpl=1&orderId=50000040481&orderCreateTime=1430921306&payAmount=42500&originalAmount=42500&deviceType=3&passuid=efcaca1dfe138dd06ef5403b3&title=%E8%80%81%E5%B9%BF%E9%85%92%E6%A5%BC500%E5%85%83%E5%82%A8%E5%80%BC%E5%8D%A1&url=&mobile=18510006023&itemInfo=%5B%7B%22id%22%3A%223098238%22%2C%22price%22%3A%2242500%22%2C%22number%22%3A%221%22%2C%22name%22%3A%22%5Cu8001%5Cu5e7f%5Cu9152%5Cu697c500%5Cu5143%5Cu50a8%5Cu503c%5Cu5361%22%7D%5D&tn=&extData=1254732458&sign=d7cdc6a5612228c7b771ff93870e29e7 -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>支付收银台</title>

<link rel="icon" href="https://zhifu.baidu.com/static/image/favicon.ico" mce_href="/static/image/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="https://zhifu.baidu.com/static/image/favicon.ico" mce_href="/static/image/favicon.ico" type="image/x-icon">


<link rel="stylesheet" href="<?php echo @CSS_URL;?>
cashier_68ca4c7.css">

</head>
<body>
<div class="header">
<div class="inner-header">
<div class="logo">
<h1>
<a href="https://www.baifubao.com/" target="_blank">百度钱包</a></h1>
</div>
</div>
</div>

<div class="pay_main">
<div class="w-order-nav">
<a class="logo" target="_blank" href="http://www.nuomi.com/"></a>
<div class="nav-wrap ">
<ul class="clearfix">
<li class="first">
<span class="no">1</span>
确认订单
<div class="arrow-top"></div>
<div class="arrow-bottom"></div>
</li>
<li class="second current">
<span class="no">2</span>
选择支付方式
<div class="arrow-top"></div>
<div class="arrow-bottom"></div>
</li>
<li>
<span class="no">3</span>
购买成功
</li>
</ul>
</div>
</div>
<div class="order_infor_module">
<div class="order_details">
<table width="100%">
<tbody>
<tr class="clearfix">
<td class="fl_left ">
<ul class="order-list">
<li>
<span class="order-list-no">订单1:</span>
<span class="order-list-name">老广酒楼500元储值卡</span>
<span class="order-list-number">1份</span>
</li>
</ul>
</td>
<td class="fl_right">
<dl class="clearfix">
<dt>应付金额：</dt>
<dd class="money">
<span>425元</span></dd>
</dl>
</td>
</tr>
</tbody></table>
</div></div></div>
<div class="pay_module">
<div id="fancybox-wrap">
<div class="fancybox-skin">
<div class="fancybox-inner" style="overflow: hidden;width:628px; height: 280px;">
<iframe src="" frameborder="0" id="alipayQrIframe" style="width:628px;height:280px;overflow:hidden;display:none"></iframe>
</div>
<a title="Close" class="fancybox-close" id="fancybox-close" href="javascript:"></a>
</div>
</div>
<form action="https://zhifu.baidu.com/proxy/req/pay" method="post" target="_blank" id="detailForm">
</form>
<div class="payment_way" id="pay">

<div class="baidulbspay--box " id="baidulbspay_box" data-data="customerId=4&amp;service=cashier&amp;returnUrl=http%3A%2F%2Ft10sc.nuomi.com%2Fpc%2Forder%2Fpayresult&amp;notifyUrl=http%3A%2F%2Fserv.sc.int.nuomi.com%2Ftradecenter%2Fmain%2FpayNotify&amp;defaultResPage=0&amp;sdk=0&amp;tpl=1&amp;orderId=50000040481&amp;orderCreateTime=1430921306&amp;payAmount=42500&amp;originalAmount=42500&amp;deviceType=3&amp;passuid=efcaca1dfe138dd06ef5403b3&amp;title=%E8%80%81%E5%B9%BF%E9%85%92%E6%A5%BC500%E5%85%83%E5%82%A8%E5%80%BC%E5%8D%A1&amp;url=&amp;mobile=18510006023&amp;itemInfo=%5B%7B%22id%22%3A%223098238%22%2C%22price%22%3A%2242500%22%2C%22number%22%3A%221%22%2C%22name%22%3A%22%5Cu8001%5Cu5e7f%5Cu9152%5Cu697c500%5Cu5143%5Cu50a8%5Cu503c%5Cu5361%22%7D%5D&amp;tn=&amp;extData=1254732458&amp;sign=d7cdc6a5612228c7b771ff93870e29e7" data-last-channel="" data-token="0" data-orderamount="42500" data-totalamount="42500" style="zoom: 1;">
<div class="payschoice" style="zoom: 1;">
<h1 class="title">
选择支付方式</h1>
<ul class="pays-list">
<li>
<a id="baidulbspay_tab_pingtai" href="javascript: void(0);" class="view-switcher selected">
<h1 class="pays-name">第三方账户支付</h1>
<span class="tip">推荐百度钱包等第三方支付平台使用</span>
</a>
<div id="baidulbspay_view_pingtai" class="pay-view">
<div id="baidulbspay_form_pingtai" class="form">
<div class="pays">
<div class="paylist">
<div class="line" id="baidulbspay_pingtai_recent">
<div class="pay " style="width:auto;margin-right:57px;position:relative">
<img src="<?php echo @IMG_URL;?>
lijian.png" class="activity">
<input type="radio" id="baidulbspay1" value="BAIDU-PLATFORM-BAIFUBAO" name="baidulbspay_pay_name" class="radio" checked="checked" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img selected" for="baidulbspay1" id="baidulbspay1_label" style="width:auto;">
<div class="logo" style="background-position: 0px -2025px;"></div>
<div style="margin-right:10px;height:30px;line-height:30px;font-weight: 700;font-size:12px;">快捷支付立返积分</div>
<div class="kuaijie"></div>
</label>
</div>
<div class="pay " style="position:relative">
<input type="radio" id="baidulbspay2" value="BAIDU-PLATFORM-ALIPAY" name="baidulbspay_pay_name" class="radio" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img " for="baidulbspay2" id="baidulbspay2_label">
<div class="logo" style="background-position: 0px -2079px;"></div>
<div class="kuaijie"></div></label>
</div>
<div class="pay " style="position:relative">
<input type="radio" id="baidulbspay3" value="BAIDU-PLATFORM-ALIPAY-QR" name="baidulbspay_pay_name" class="radio" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img " for="baidulbspay3" id="baidulbspay3_label">
<div class="logo" style="background-position: 0px -2107px;"></div>
<div class="kuaijie"></div></label>
</div>
</div>
<div class="main nodis" id="baidulbspay_pays_other_pingtai">
<div class="line">
<div class="pay " style="width:auto;margin-right:57px;position:relative">
<img src="<?php echo @IMG_URL;?>
lijian.png" class="activity">
<input type="radio" value="BAIDU-PLATFORM-BAIFUBAO" id="baidulbspay4" name="baidulbspay_pay_name" class="radio" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img" for="baidulbspay4" id="baidulbspay4_label" style="width:auto;">
<div class="logo" style="background-position: 0px -2025px;"></div>
<div style="margin-right:10px;height:30px;line-height:30px;font-weight: 700;font-size:12px;">快捷支付立返积分</div>
<div class="kuaijie"></div>
</label>
</div>
<div class="pay " style="position:relative">
<input type="radio" value="BAIDU-PLATFORM-ALIPAY" id="baidulbspay5" name="baidulbspay_pay_name" class="radio" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img" for="baidulbspay5" id="baidulbspay5_label">
<div class="logo" style="background-position: 0px -2079px;"></div>
<div class="kuaijie"></div></label>
</div>
<div class="pay " style="position:relative">
<input type="radio" value="BAIDU-PLATFORM-ALIPAY-QR" id="baidulbspay6" name="baidulbspay_pay_name" class="radio" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img" for="baidulbspay6" id="baidulbspay6_label">
<div class="logo" style="background-position: 0px -2107px;"></div>
<div class="kuaijie"></div></label>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</li>
<li>
<a id="baidulbspay_tab_wangyin" href="javascript: void(0);" class="view-switcher selected">
<div class="state-arrow"></div>
<h1 class="pays-name">银行网银支付
<span class="detail">(储蓄卡或者信用卡)</span></h1>
<span class="tip">推荐开通网上银行的用户使用</span>
</a>

<div id="baidulbspay_view_wangyin" class="pay-view">
<div id="baidulbspay_form_wangyin" class="form">
<div class="pays">
<div class="paylist">
<div class="main " id="baidulbspay_pays_other_wangyin">
<div class="line">
<div class="pay " style="position:relative">
<input type="radio" value="BAIDU-ICBC" id="baidulbspay8" name="baidulbspay_pay_name" class="radio" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img" for="baidulbspay8" id="baidulbspay8_label">
<div class="logo" style="background-position: 0px -999px;"></div>
<div class="kuaijie"></div></label>
</div>
<div class="pay " style="position:relative">
<input type="radio" value="BAIDU-CCB" id="baidulbspay9" name="baidulbspay_pay_name" class="radio" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img" for="baidulbspay9" id="baidulbspay9_label">
<div class="logo" style="background-position: 0px -1755px;"></div>
<div class="kuaijie"></div></label>
</div>
<div class="pay " style="position:relative">
<input type="radio" value="BAIDU-ABC" id="baidulbspay10" name="baidulbspay_pay_name" class="radio" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img" for="baidulbspay10" id="baidulbspay10_label">
<div class="logo" style="background-position: 0px 0px;"></div>
<div class="kuaijie"></div></label>
</div>
<div class="pay " style="position:relative">
<input type="radio" value="BAIDU-PSBC" id="baidulbspay11" name="baidulbspay_pay_name" class="radio" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img" for="baidulbspay11" id="baidulbspay11_label">
<div class="logo" style="background-position: 0px -621px;"></div>
<div class="kuaijie"></div></label>
</div>
</div>
<div class="line">
<div class="pay " style="position:relative">
<input type="radio" value="BAIDU-BOCM" id="baidulbspay12" name="baidulbspay_pay_name" class="radio" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img" for="baidulbspay12" id="baidulbspay12_label">
<div class="logo" style="background-position: 0px -54px;"></div>
<div class="kuaijie"></div></label>
</div>
<div class="pay " style="position:relative">
<input type="radio" value="BAIDU-CMB" id="baidulbspay13" name="baidulbspay_pay_name" class="radio" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img" for="baidulbspay13" id="baidulbspay13_label">
<div class="logo" style="background-position: 0px -1593px;"></div>
<div class="kuaijie"></div></label>
</div>
<div class="pay " style="position:relative">
<input type="radio" value="BAIDU-BOC" id="baidulbspay14" name="baidulbspay_pay_name" class="radio" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img" for="baidulbspay14" id="baidulbspay14_label">
<div class="logo" style="background-position: 0px -1863px;"></div>
<div class="kuaijie"></div></label>
</div>
<div class="pay " style="position:relative">
<input type="radio" value="BAIDU-CEB" id="baidulbspay15" name="baidulbspay_pay_name" class="radio" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img" for="baidulbspay15" id="baidulbspay15_label">
<div class="logo" style="background-position: 0px -1674px;"></div>
<div class="kuaijie"></div></label>
</div>
</div>
<div class="line">
<div class="pay " style="position:relative">
<input type="radio" value="BAIDU-ECITIC" id="baidulbspay16" name="baidulbspay_pay_name" class="radio" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img" for="baidulbspay16" id="baidulbspay16_label">
<div class="logo" style="background-position: 0px -1620px;"></div>
<div class="kuaijie"></div></label>
</div>
<div class="pay " style="position:relative">
<input type="radio" value="BAIDU-SPDB" id="baidulbspay17" name="baidulbspay_pay_name" class="radio" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img" for="baidulbspay17" id="baidulbspay17_label">
<div class="logo" style="background-position: 0px -675px;"></div>
<div class="kuaijie"></div></label>
</div>
<div class="pay " style="position:relative">
<input type="radio" value="BAIDU-CMBC" id="baidulbspay18" name="baidulbspay_pay_name" class="radio" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img" for="baidulbspay18" id="baidulbspay18_label">
<div class="logo" style="background-position: 0px -1566px;"></div>
<div class="kuaijie"></div></label>
</div>
<div class="pay " style="position:relative">
<input type="radio" value="BAIDU-CIB" id="baidulbspay19" name="baidulbspay_pay_name" class="radio" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img" for="baidulbspay19" id="baidulbspay19_label">
<div class="logo" style="background-position: 0px -1647px;"></div>
<div class="kuaijie"></div></label>
</div>
</div>
<div class="line">
<div class="pay " style="position:relative">
<input type="radio" value="BAIDU-PAB" id="baidulbspay20" name="baidulbspay_pay_name" class="radio" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img" for="baidulbspay20" id="baidulbspay20_label">
<div class="logo" style="background-position: 0px -702px;"></div>
<div class="kuaijie"></div></label>
</div>
<div class="pay " style="position:relative">
<input type="radio" value="BAIDU-GDB" id="baidulbspay21" name="baidulbspay_pay_name" class="radio" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img" for="baidulbspay21" id="baidulbspay21_label">
<div class="logo" style="background-position: 0px -1296px;"></div>
<div class="kuaijie"></div></label>
</div>
<div class="pay " style="position:relative">
<input type="radio" value="BAIDU-HXB" id="baidulbspay22" name="baidulbspay_pay_name" class="radio" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img" for="baidulbspay22" id="baidulbspay22_label">
<div class="logo" style="background-position: 0px -1053px;"></div>
<div class="kuaijie"></div></label>
</div>
<div class="pay " style="position:relative">
<input type="radio" value="BAIDU-BCCB" id="baidulbspay23" name="baidulbspay_pay_name" class="radio" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img" for="baidulbspay23" id="baidulbspay23_label">
<div class="logo" style="background-position: 0px -1890px;"></div>
<div class="kuaijie"></div></label>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</li>
<li>
<a id="baidulbspay_tab_kuaijie" href="javascript: void(0);" class="view-switcher">
<div class="state-arrow"></div>
<h1 class="pays-name">银行卡直接支付</h1>
<span class="tip">无需开通网上银行，支持快捷付款</span>
</a>
<div id="baidulbspay_view_kuaijie" style="display: none;" class="pay-view">
<div id="baidulbspay_form_kuaijie" class="form">
<div class="pays">
<div class="tab-box">
<ul class="tab-list">
<li class="tab selected" id="baidulbspay_subview_tab_kuaijiexinyongka_li">
<a href="javascript: void(0);" id="baidulbspay_subview_tab_kuaijiexinyongka" onclick="window.BaiduLBSCashier._$.switchSubView(this);">信用卡</a>
</li>
<li class="tab " id="baidulbspay_subview_tab_kuaijiechuxuka_li">
<a href="javascript: void(0);" id="baidulbspay_subview_tab_kuaijiechuxuka" onclick="window.BaiduLBSCashier._$.switchSubView(this);">储蓄卡</a>
</li>
</ul>
</div>
<div class="all-pays">
<div class="sub-pays open" id="baidulbspay_subview_kuaijiexinyongka">
<div class="paylist">
<div class="main " id="baidulbspay_pays_other_kuaijiexinyongka">
<div class="line">
<div class="pay kuaijie" style="position:relative">
<input type="radio" value="BAIDU-EPC-ICBC" id="baidulbspay24" name="baidulbspay_pay_name" class="radio" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img" for="baidulbspay24" id="baidulbspay24_label">
<div class="logo" style="background-position: 0px -999px;"></div>
<div class="kuaijie"></div></label>
</div>
<div class="pay kuaijie" style="position:relative">
<input type="radio" value="BAIDU-EPC-CCB" id="baidulbspay25" name="baidulbspay_pay_name" class="radio" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img" for="baidulbspay25" id="baidulbspay25_label">
<div class="logo" style="background-position: 0px -1755px;"></div>
<div class="kuaijie"></div></label>
</div>
<div class="pay kuaijie" style="position:relative">
<input type="radio" value="BAIDU-EPC-ABC" id="baidulbspay26" name="baidulbspay_pay_name" class="radio" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img" for="baidulbspay26" id="baidulbspay26_label">
<div class="logo" style="background-position: 0px 0px;"></div>
<div class="kuaijie"></div></label>
</div>
<div class="pay kuaijie" style="position:relative">
<input type="radio" value="BAIDU-EPC-PSBC" id="baidulbspay27" name="baidulbspay_pay_name" class="radio" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img" for="baidulbspay27" id="baidulbspay27_label">
<div class="logo" style="background-position: 0px -621px;"></div>
<div class="kuaijie"></div></label>
</div>
</div>
<div class="line">
<div class="pay kuaijie" style="position:relative">
<input type="radio" value="BAIDU-EPC-CMB" id="baidulbspay28" name="baidulbspay_pay_name" class="radio" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img" for="baidulbspay28" id="baidulbspay28_label">
<div class="logo" style="background-position: 0px -1593px;"></div>
<div class="kuaijie"></div></label>
</div>
<div class="pay kuaijie" style="position:relative">
<input type="radio" value="BAIDU-EPC-BOC" id="baidulbspay29" name="baidulbspay_pay_name" class="radio" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img" for="baidulbspay29" id="baidulbspay29_label">
<div class="logo" style="background-position: 0px -1863px;"></div>
<div class="kuaijie"></div></label>
</div>
<div class="pay kuaijie" style="position:relative">
<input type="radio" value="BAIDU-EPC-CEB" id="baidulbspay30" name="baidulbspay_pay_name" class="radio" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img" for="baidulbspay30" id="baidulbspay30_label">
<div class="logo" style="background-position: 0px -1674px;"></div>
<div class="kuaijie"></div></label>
</div>
<div class="pay kuaijie" style="position:relative">
<input type="radio" value="BAIDU-EPC-ECITIC" id="baidulbspay31" name="baidulbspay_pay_name" class="radio" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img" for="baidulbspay31" id="baidulbspay31_label">
<div class="logo" style="background-position: 0px -1620px;"></div>
<div class="kuaijie"></div></label>
</div>
</div>
<div class="line">
<div class="pay kuaijie" style="position:relative">
<input type="radio" value="BAIDU-EPC-SPDB" id="baidulbspay32" name="baidulbspay_pay_name" class="radio" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img" for="baidulbspay32" id="baidulbspay32_label">
<div class="logo" style="background-position: 0px -675px;"></div>
<div class="kuaijie"></div></label>
</div>
<div class="pay kuaijie" style="position:relative">
<input type="radio" value="BAIDU-EPC-CMBC" id="baidulbspay33" name="baidulbspay_pay_name" class="radio" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img" for="baidulbspay33" id="baidulbspay33_label">
<div class="logo" style="background-position: 0px -1566px;"></div>
<div class="kuaijie"></div></label>
</div>
<div class="pay kuaijie" style="position:relative">
<input type="radio" value="BAIDU-EPC-CIB" id="baidulbspay34" name="baidulbspay_pay_name" class="radio" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img" for="baidulbspay34" id="baidulbspay34_label">
<div class="logo" style="background-position: 0px -1647px;"></div>
<div class="kuaijie"></div></label>
</div>
<div class="pay kuaijie" style="position:relative">
<input type="radio" value="BAIDU-EPC-PAB" id="baidulbspay35" name="baidulbspay_pay_name" class="radio" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img" for="baidulbspay35" id="baidulbspay35_label">
<div class="logo" style="background-position: 0px -702px;"></div>
<div class="kuaijie"></div></label>
</div>
</div>
<div class="line">
<div class="pay kuaijie" style="position:relative">
<input type="radio" value="BAIDU-EPC-GDB" id="baidulbspay36" name="baidulbspay_pay_name" class="radio" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img" for="baidulbspay36" id="baidulbspay36_label">
<div class="logo" style="background-position: 0px -1296px;"></div>
<div class="kuaijie"></div></label>
</div>
<div class="pay kuaijie" style="position:relative">
<input type="radio" value="BAIDU-EPC-HXB" id="baidulbspay37" name="baidulbspay_pay_name" class="radio" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img" for="baidulbspay37" id="baidulbspay37_label">
<div class="logo" style="background-position: 0px -1053px;"></div>
<div class="kuaijie"></div></label>
</div>
<div class="pay kuaijie" style="position:relative">
<input type="radio" value="BAIDU-EPC-BCCB" id="baidulbspay38" name="baidulbspay_pay_name" class="radio" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img" for="baidulbspay38" id="baidulbspay38_label">
<div class="logo" style="background-position: 0px -1890px;"></div>
<div class="kuaijie"></div></label>
</div>
</div>
</div>
</div>
</div>
<div class="sub-pays close" id="baidulbspay_subview_kuaijiechuxuka">
<div class="paylist">
<div class="main " id="baidulbspay_pays_other_kuaijiechuxuka">
<div class="line">
<div class="pay kuaijie" style="position:relative">
<input type="radio" value="BAIDU-EPD-ICBC" id="baidulbspay39" name="baidulbspay_pay_name" class="radio" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img" for="baidulbspay39" id="baidulbspay39_label">
<div class="logo" style="background-position: 0px -999px;"></div>
<div class="kuaijie"></div></label>
</div>
<div class="pay kuaijie" style="position:relative">
<input type="radio" value="BAIDU-EPD-CCB" id="baidulbspay40" name="baidulbspay_pay_name" class="radio" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img" for="baidulbspay40" id="baidulbspay40_label">
<div class="logo" style="background-position: 0px -1755px;"></div>
<div class="kuaijie"></div></label>
</div>
<div class="pay kuaijie" style="position:relative">
<input type="radio" value="BAIDU-EPD-ABC" id="baidulbspay41" name="baidulbspay_pay_name" class="radio" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img" for="baidulbspay41" id="baidulbspay41_label">
<div class="logo" style="background-position: 0px 0px;"></div>
<div class="kuaijie"></div></label>
</div>
<div class="pay kuaijie" style="position:relative">
<input type="radio" value="BAIDU-EPD-CMB" id="baidulbspay42" name="baidulbspay_pay_name" class="radio" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img" for="baidulbspay42" id="baidulbspay42_label">
<div class="logo" style="background-position: 0px -1593px;"></div>
<div class="kuaijie"></div></label>
</div>
</div>
<div class="line">
<div class="pay kuaijie" style="position:relative">
<input type="radio" value="BAIDU-EPD-BOC" id="baidulbspay43" name="baidulbspay_pay_name" class="radio" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img" for="baidulbspay43" id="baidulbspay43_label">
<div class="logo" style="background-position: 0px -1863px;"></div>
<div class="kuaijie"></div></label>
</div>
<div class="pay kuaijie" style="position:relative">
<input type="radio" value="BAIDU-EPD-CEB" id="baidulbspay44" name="baidulbspay_pay_name" class="radio" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img" for="baidulbspay44" id="baidulbspay44_label">
<div class="logo" style="background-position: 0px -1674px;"></div>
<div class="kuaijie"></div></label>
</div>
<div class="pay kuaijie" style="position:relative">
<input type="radio" value="BAIDU-EPD-CMBC" id="baidulbspay45" name="baidulbspay_pay_name" class="radio" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img" for="baidulbspay45" id="baidulbspay45_label">
<div class="logo" style="background-position: 0px -1566px;"></div>
<div class="kuaijie"></div></label>
</div>
<div class="pay kuaijie" style="position:relative">
<input type="radio" value="BAIDU-EPD-CIB" id="baidulbspay46" name="baidulbspay_pay_name" class="radio" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img" for="baidulbspay46" id="baidulbspay46_label">
<div class="logo" style="background-position: 0px -1647px;"></div>
<div class="kuaijie"></div></label>
</div>
</div>
<div class="line">
<div class="pay kuaijie" style="position:relative">
<input type="radio" value="BAIDU-EPD-GDB" id="baidulbspay47" name="baidulbspay_pay_name" class="radio" onfocus="window.BaiduLBSCashier._$.selectPay(this);" onclick="window.BaiduLBSCashier._$.selectPay(this);">
<label class="img" for="baidulbspay47" id="baidulbspay47_label">
<div class="logo" style="background-position: 0px -1296px;"></div>
<div class="kuaijie"></div></label>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</li>
</ul>
</div>
</div></div>
<div class="payment_btn clearfix">
<input class="bg_btn " id="submitPay" type="submit" value="立即支付">
</div>
</div>

<div class="footer">
<p>使用百度钱包前必读&nbsp;
<a target="_blank" href="http://co.baifubao.com/content/payhelp/introduction/serviceagreement/2013-10-17/1385373751.html">百度钱包用户协议</a></p>
<p>客服邮箱：wallet-cs@baidu.com &nbsp;官方贴吧：
<a target="_blank" href="http://tieba.baidu.com/f?kw=%B0%D9%B6%C8%C7%AE%B0%FC">百度钱包吧</a></p>
</div>

<script type="text/javascript" src="./立即支付_files/jquery-1.7.1.min_229476e.js"></script>
<script type="text/javascript" src="./立即支付_files/base.min_e880ef3.js"></script>
<script type="text/javascript">
        BaiduLBSCashier.getInstance({
            submitElement: document.getElementById("submitPay"),
            doCheckPay: function (cashier) {
                var Ajax = cashier.Ajax;
                Ajax.request("/proxy/query/return",{
                    data : "customerId=4&orderId=50000040481&service=querypay&version=1.0&signType=1&sign=28268fff982f92181641129452b9e698",
                    success: function (xhr) {
                         var res =(new Function("","return "+xhr.responseText))();
                         if(res.err_no==0&&res.data&&res.data.status=="PAY_SUCCESS"&&res.data.returnUrl!=""){
                             window.location.replace(res.data.returnUrl);
                         }
                    }
                });
            },
            doFAQ: function () {
                window.open("/proxy/return/faq");
            },
            doSubmit: function (pay) {
                var channel = pay.getPayChannel(),
                    payData = pay.getPayData(),
                    overlay = pay.overlay,
                    Ajax = pay.Ajax,
                    parseJSON = pay.parseJSON,
                    paySubmit = function(){
                        if(channel=="BAIDU-PLATFORM-ALIPAY-QR"){
                            Ajax.request("/proxy/req/getpay",{
                                data : payData.data,
                                success: function (xhr) {
                                    var res = parseJSON(xhr.responseText);
                                    if(res&&res.err_no==0&&res.data&&res.data.payurl){
                                         document.getElementById("alipayQrIframe").style.display = "block";
                                         document.getElementById("alipayQrIframe").src = res.data.payurl;
                                         setTimeout(function () {
                                             overlay.show();
                                             document.getElementById("fancybox-wrap").style.display="block";
                                         },500);
                                    }else{
                                       location.href="/pay/static/error";
                                    }
                                },
                                failure:function(){
                                    location.href = "/pay/static/error";
                                }
                            });
                        }else{
                            document.getElementById("detailForm").action = "/proxy/req/pay?"+payData.data;
                            document.getElementById("detailForm").submit();
                        }
                    };
                    Ajax.request("/proxy/query/return",{
                        data : "customerId=4&orderId=50000040481&service=querypay&version=1.0&signType=1&sign=28268fff982f92181641129452b9e698",
                        async: false,
                        success: function (xhr) {
                            var res = parseJSON(xhr.responseText);
                            if(res&&res.err_no==0&&res.data&&res.data.status=="PAY_SUCCESS"&&res.data.returnUrl){
                                window.location.replace(res.data.returnUrl);
                            } else {
                                paySubmit();
                            }
                        },
                        failure: function() {
                            paySubmit();
                        }
                    });
            },
            listeners: {
                beforeSubmit: function (message) {
                    var payobj = message.src;
                    var paychannel = payobj.getPayChannel();
                    if(paychannel==null){
                        alert("请选择支付渠道");
                        return false;
                    }
                    return true;
                },
                complete: function (message){
                    $('.order-list-morebtn').click(function(){
                        if ($('.order-list-more').hasClass('order-hide')) {
                            $('.order-morebtn-des').html('收起部分订单');
                            $('.order-list-more').removeClass('order-hide');
                        }
                        else {
                            $('.order-morebtn-des').html('显示全部订单');
                            $('.order-list-more').addClass('order-hide');
                        }
                    });
                    //window.pay = message.src;
                }
            }
        });
    </script>



</body></html><?php }} ?>