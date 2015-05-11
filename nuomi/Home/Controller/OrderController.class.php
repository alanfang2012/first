<?php
NameSpace Home\Controller;
// use Tool\HomeController;
use Think\Controller;
/**
 *商品订单的控制器 
 */
class OrderController extends Controller{
	/**
	 * 展示商品订单的方法
	 */
	public function index(){
		// $info = D('group')->where("goods_id in(29,113,114) ") ->select();
		$info = D('group')->where() ->select();

		// show_bug($info);
		// 
		// 商品优惠的价格
		$luck= 9.80;
		$this->assign('info',$info);
		$this->assign('luck',$luck);
		$this->display();
	}

	/**
	 *  添加订单入库和订单详细入库
	 */
	
	public function add($user_id,$goods_id){
		echo $user_id,$goods_id;
		//1.先通过goods_id 和 user_id 把商品写入到数据库订单表中去
		//1.1 通过 goods_id 获取商品的价格

		$prices = D('group')->field('market_price') ->find($goods_id);
		// show_bug($price);
		$price = $prices['goods_price'];
		$price = (float)($price);

		$order = D('order');
		//这里需要将 order的数据先写入库中 order的数组用 $data 写入
		//order_desc的 数据则用$data_desc 写入
		$data = array (
			'order_id' => null,
			'user_id'  =>$user_id,
			'order_time' =>time(),
		
		// 要进行是否 已经 支付的判断 然后再写入支付的时间值
			'pay_time' => 0,
			'is_paid'  => 0,
			'pay_amount' =>0,
			'paid_amount' =>0,  
			);
		$order ->add($data);
		
		
		show_bug($price);
		//1.2 将$data_desc的数据写入到 order_desc的数据表中去
		$order_desc = D('order_desc');
		$data_desc = array(
			'order_desc_id'=> null,
			'order_id' => 5,
			'goods_id' =>$goods_id,
			'shuliang' => 1,
			'price_a' => 0.00,
			'price_l' => 0.00,
			'price_z' => $price,
			);

		show_bug($data_desc);
		$info = $order_desc -> add($data_desc);
		show_bug($info);

		if($info){
			$this->redirect('desc','恭喜你！订单提交成功！',3);
		}

		//2.再通过查询的方式将刚才写入到订单表中的数据输出到模板中去
		
		//3.分配数据到订单表

	}

	/**
	 * 订单详情
	 * 显示提交的单个订单里的详细信息
	 */
	public function desc(){
                
        $order_desc = D('order_desc');
        $this->display();
	}


	/**
	 * 我的订单的控制器
	 * 可以显示我的订单下还在试用期内的订单(默认)
	 * 可以显示我的订单历史（需要点击后显示）
	 */
	public function myorder(){

		$this-> display();
	}

	/**
	 * 
	 */
	 public function pay(){
		$this->display();
	 }
	
}

