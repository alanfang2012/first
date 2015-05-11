<?php
namespace Admin\Controller;
use Tool\AdminController;
class GroupController extends AdminController{
    //团购列表展示 
    function showlist(){
        $where = 'WHERE a.gro_id > 0';
        if(!empty($_POST)) {
            $cat_id = '';
            $city_id = '';
            $seller_id = '';
            if($_POST['category_id']!=0) {
                $cat_id = " AND a.category_id = {$_POST['category_id']}";
            }
            if($_POST['city_id']!=0) {
                $city_id = " AND a.city_id = {$_POST['city_id']}";
            }
            if($_POST['seller_id']!=0) {
                $seller_id = " AND a.seller_id = {$_POST['seller_id']}";
            }
            $where = $where . $cat_id . $city_id . $seller_id;
        }
        $total = D('group')->count();
        $per = 7;
        $page = new \Tool\Page($total,$per);
        $sql = "select a.*,b.city_name,c.category_name,d.seller_name from `nm_group` AS a LEFT JOIN `nm_city` AS b ON a.city_id = b.city_id LEFT JOIN `nm_category` AS c ON a.category_id = c.category_id LEFT JOIN `nm_seller` AS d ON a.seller_id = d.seller_id ". $where ." order by gro_id desc ".$page->limit;
        $info = D()->query($sql);
        $m_category = new \Model\CategoryModel();
        $category_info = $m_category->getCats();
        $pagelist = $page -> fpage(array(3,4,5,6,7,8));
        $m_city = new \Model\CityModel();
        $city_info = $m_city->getCity();
        $seller_info = D('seller')->select();      
        $this -> assign('pagelist',$pagelist);
        $this -> assign('info',$info);
        $this -> assign('city_info',$city_info);        
        $this -> assign('category_info',$category_info);
        $this -> assign('post',$_POST);
        $this -> assign('seller_info',$seller_info);
        $this -> display();
    }    
    //添加团购
    function tianjia(){
        $Group = D('group');
        if(!empty($_POST)){                 
            if($_FILES['ori_img']['error']<4){
                $cfg = array(
                    'rootPath'      =>  './Public/Group/',
                );
                $up = new \Think\Upload($cfg);
                $z = $up -> uploadOne($_FILES['ori_img']);                
                $pathname = $cfg['rootPath'].$z['savepath'].$z['savename'];
                $_POST['ori_img'] = $pathname;                
                $im = new \Think\Image();
                $im -> open($pathname);
                $im ->thumb(460, 280);
                $smallpathname = $cfg['rootPath'].$z['savepath']."thumb_".$z['savename'];
                $im -> save($smallpathname);
                $_POST['thumb_img'] = $smallpathname;
            }
            $m_deadline = new \Tool\TimeStamp();
            $_POST['deadline'] = $m_deadline->makeTimeStamp($_POST['deadlineYear'],$_POST['deadlineMonth'],$_POST['deadlineDay']);
            $info = $Group -> create();
            $z = $Group -> add();
            if($z){
                $this -> redirect('showlist',array(),3,'团购添加成功！');
            }
        }
        $m_city = new \Model\CityModel();
        $city_info = $m_city->getCity();
        $m_category = new \Model\CategoryModel();
        $category_info = $m_category->getCats();
        $seller_info = D('seller')->select();
        $this -> assign('city_info',$city_info);
        $this -> assign('category_info',$category_info);
        $this -> assign('seller_info',$seller_info);
        $this -> display();
    }
    //更新团购
    function upd($gro_id){
        $Group = D('group');
        if(!empty($_POST)){
            if($_FILES['ori_img']['error']<4){
                $cfg = array(
                    'rootPath'      =>  './Public/Group/',
                    //覆盖原图片
                    // 'savePath'      =>  '',
                    // 'saveName'      =>  array('uniqid', ''),
                );
                $up = new \Think\Upload($cfg);
                $up->
                $z = $up -> uploadOne($_FILES['ori_img']);                
                $pathname = $cfg['rootPath'].$z['savepath'].$z['savename'];
                $_POST['ori_img'] = $pathname;                
                $im = new \Think\Image();
                $im -> open($pathname);
                $im ->thumb(460, 280);
                $smallpathname = $cfg['rootPath'].$z['savepath']."thumb_".$z['savename'];
                $im -> save($smallpathname);
                $_POST['thumb_img'] = $smallpathname;
            }
            $m_deadline = new \Tool\TimeStamp();
            $_POST['deadline'] = $m_deadline->makeTimeStamp($_POST['deadlineYear'],$_POST['deadlineMonth'],$_POST['deadlineDay']);
            $info = $Group -> create();
            $z = $Group -> save();
            if($z){
                $this -> redirect('showlist',array('id'=>10,'name'=>'heimei'),2,'修改团购成功！');
            }
        }
        $info = $Group -> find($gro_id);        
        $m_city = new \Model\CityModel();
        $city_info = $m_city->getCity($city);
        $m_category = new \Model\CategoryModel();
        $category_info = $m_category->getCats();
        $seller_info = D('seller')->select();
        $this -> assign('info',$info);
        $this -> assign('city_info',$city_info);
        $this -> assign('category_info',$category_info);
        $this -> assign('seller_info',$seller_info);
        $this -> display();
    }
    //删除团购
    function del($gro_id){
        $z = D('Group')->delete($gro_id);
        if($z){
            $this -> redirect('showlist',array('id'=>10,'name'=>'heimei'),2,'删除团购成功！');
        }
    }
