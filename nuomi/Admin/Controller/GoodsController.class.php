<?php

//命名空间
//以下命名空间的信息与当前文件的上级、上两级目录一致
//本身命名空间的名字与目录没有联系，其实虚拟的空间
//tp框架这样做，是在autoload自动引入的时候把空间的信息转换为目录的名字
//进而找到对应的GoodsController.class.php类文件
namespace Admin\Controller;
//use Think\Controller;//空间类元素引入
use Tool\AdminController;//空间类元素引入

//后台"商品"控制器
class GoodsController extends AdminController{
    //商品列表展示
    function showlist1(){
        //通过model获得具体商品信息
        $goods = D('Goods');
        $info = $goods -> select(); //[全部记录、全部字段]父类Model的select方法,返回二维数组信息
        $info = $goods -> select(7); //主键id值等于7的记录
        $info = $goods -> select("10,11,13,14"); //主键id值在("10,11,13,14")范围内的记录信息
        
        $this -> assign('info', $info);
        $this -> display();
    }
    
    function showlist2(){
        //通过model获得具体商品信息
        $goods = D('Goods');
        //① field() 限制查询字段
        $goods -> field("goods_name,goods_price");
        $info = $goods -> select(); //[全部记录、全部字段]父类Model的select方法,返回二维数组信息
        
        //② where(参数：sql语句where的条件值)  给查询设置where条件
        $goods -> where("goods_id in ('10,11,13,14') and goods_price>1000");
        //$info = $goods -> select();
        $info = $goods -> select();
        
        //③ limit([偏移量,]长度)  limit  [偏移量,]长度
        //偏移量 = (page-1)*每页条数
        $goods -> limit(10,5);
        $info = $goods -> select();
        $info = $goods -> limit(10,5)->select();
        
        //④ order()排序查询
        $goods -> order('goods_price desc');
        $info = $goods -> select();
        $info = $goods -> order('goods_price desc')->select();
        
        //⑤ group() 分组查询 group by
        //【查询每个品牌下商品总数量】、每个品牌的商品最高价格、每个品牌的商品平均价格
        //select goods_brand_id,count(*) from sw_goods group by goods_brand_id
        $goods -> field('goods_brand_id,count(*)');
        $goods -> group('goods_brand_id');
        $info = $goods -> select();
        //var_dump($info);
        
        //⑥ having() 设置查询条件
        //使用情形：
        //group分组后就使用having【可以的】
        //要使用having必须设置分组【不是必须的】
        //类似where使用
        $info = $goods -> having('goods_price>1000')->select();
        
//        //各种方法可以连贯操作执行,各个方法之间没有顺序要求(select()在最后)
//        //连贯操作可以执行一个或多个方法
//        //各个方法内部都有return $this,所以可以连贯执行
//        $info = $goods -> field('goods_brand_id,count(*)')->group('goods_brand_id')->select();
        //连贯操作执行
        $info = $goods -> field('goods_id,goods_name,goods_price')->where('goods_price>1000')->limit(5)->select();
        //以上三个方法field/where/limit执行完毕都把对应的参数信息存储到$goods->options属性里边
        
        $this -> assign('info', $info);
        $this -> display();
    }
    
    function showlist(){
        //实现数据分页效果
        //① 获得数据总条数
        $total = D('Goods')->count();  //获得记录总条数  sum()  avg()
        $per = 7;
        
        //② 实例化分页类对象
        $page = new \Tool\Page($total,$per);
        
        //③ 制作sql语句，获得每页的数据信息
        //   $page->limit 是分页类根据当前页面给制作的"limit 偏移量，长度"的字符串信息
        $sql = "select * from sw_goods order by goods_id desc ".$page->limit;
        $info = D()->query($sql);  //返回二维数组信息结果
        
        //④ 获取页码列表
        $pagelist = $page -> fpage(array(3,4,5,6,7,8));
        
        $this -> assign('pagelist',$pagelist);
        $this -> assign('info',$info);
        $this -> display();
    }
    //添加商品
    function tianjia1(){
        $goods = D('Goods');
        //① 数组方式添加数据
        $arr = array(
            'goods_name' => 'iphone7',
            'goods_ice' => '6700',
            'goods_weight' => '107',
            'goods_number' => '17',
        );
        $z = $goods -> add($arr);
        echo $z;
        
        //② AR方式添加数据
        $goods -> goods_name = "samsung6";  //调用父类的魔术方法__set($k,$v)
        $goods -> goods_price = 6500;
        $goods -> goods_number = 15;
        $goods -> goods_weht = 115;
        $z = $goods -> add();
        echo $z;
        
        $this -> display();
    }
    //修改商品
    function upd1(){
        //AR方式实现数据修改
        $goods = new \Model\GoodsModel();
        //$goods -> goods_id = 165;
        $goods -> goods_name = "nokia327";
        $goods -> goods_price = "1300";
        $goods -> goods_weight = 87;
        
        $z = $goods-> where('goods_id >= 167')-> save();
        var_dump($z); //3 返回受影响记录条数
        
        $this -> display();
    }
    
    //添加商品
    function tianjia(){
        //限制
        $goods = D('Goods');
        //两个逻辑：表单展示、收集表单
        if(!empty($_POST)){
            //收集表单信息、存储到数据库、页面跳转
            
            if($_FILES['goods_pic']['error']<4){//做图片上传处理
                //① 上传图片
                $cfg = array(
                    'rootPath'      =>  './Public/goods/', //保存根路径
                );
                $up = new \Think\Upload($cfg);
                //uploadOne()可以返回附件存储在服务器的"名字"和"目录"等相关信息
                $z = $up -> uploadOne($_FILES['goods_pic']);
                
                //获得附件在服务器的路径名信息
                $pathname = $cfg['rootPath'].$z['savepath'].$z['savename'];
                //把附件的路径名保存到数据库里边
                $_POST['goods_big_img'] = $pathname;
                
                //② 对上传的图片设置缩略图
                $im = new \Think\Image();//A 实例化对象
                $im -> open($pathname);   //B 打开源图片
                $im ->thumb(140, 140); //C 制作略图图(宽度、高度有等比例设置效果)
                //./Public/goods/2015-04-25/553b3f4373d4d.jpg
                //./Public/goods/2015-04-25/small_553b3f4373d4d.jpg
                $smallpathname = $cfg['rootPath'].$z['savepath']."small_".$z['savename'];
                $im -> save($smallpathname);   //D 保存缩略图
                
                //保存缩略图到数据库中
                $_POST['goods_small_img'] = $smallpathname;
            }

            
            //通过create方法实现数据收集
            //除此该方法还有 表单验证、自动完成、非法字段过滤的作用
            $info = $goods -> create();
            $z = $goods -> add();
            if($z){
                //$this ->redirect($url地址, $params参数, $delay延迟时间, $msg提示信息)
                $this -> redirect('showlist',array(),3,'商品添加成功！'); //同控制器不同方法跳转
                //$this -> redirect('Manager/login'); //跳到其他控制器的指定方法
            }
        }
        
        $this -> display();
    }
    
    //修改商品
    //http://网址/index.php/Admin/Goods/upd/goods_id/171/goods_name/htc
    //形参：$goods_id和$goods_name是接收的pathinfo的参数信息
    //      该参数在没有默认值的情况下，每次请求必须传递
    //以下upd(形参，形参)通过形参接收get参数信息是大部分框架的使用方式
    //function upd($goods_id,$goods_name){
    function upd($goods_id){
        //通过 $goods_id 获得被修改商品的相关信息
        $goods = D('Goods');
        if(!empty($_POST)){
            //收集表单
            $info = $goods -> create();
            $z = $goods -> save();
            if($z){
                $this -> redirect('showlist',array('id'=>10,'name'=>'heimei'),2,'修改商品成功！');
            }
        }
        //$info = $goods -> select($goods_id);
        $info = $goods -> find($goods_id);//通过一维数组返回一条记录信息
        $this -> assign('info',$info);
        $this -> display();
    }
}

