<?php
namespace Home\Controller;
use Think\Controller;

/**
 * 首页index的控制器
 */
class IndexController extends Controller {
    /**
     * 首页index的方法
     */
    public function index(){
    	$name=$_SESSION['admin_name'];
    	$this->assign('name',$name);

        $this -> display();
    }

	/**
	* 首页精选品牌 导航页面
	* 暂时放在 index 控制器里面
	*/
	public function best(){
		$this->display();
	}
	/**
	* 首页电影 导航页面
	* 暂时放在 index 控制器里面
	*/
	public function film(){
		$this->display();
	}
	/**
	* 首页酒店  导航页面
	* 暂时放在 index 控制器里面
	*/
	public function hotel(){
		$this->display();
	}
	/**
	* 首页今日新单   导航页面
	* 暂时放在 index 控制器里面
	*/
	public function today(){
		$this->display();
	}

	/**
	* 首页购物   导航页面
	* 暂时放在 index 控制器里面
	*/
	public function buy(){
		$this->display();
	}
    
}
