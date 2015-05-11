<?php
namespace Model;
use Think\Model;
class CityModel extends Model{

    public function __construct() {
        parent::__construct('City');
    }
    /**
     * 获取城市名称属性数组
     * @return array
     */
    public function getCity() {
        $city_info = $this->select();
        return $this->tree($city_info);
    }
    /**
     * 树形数组
     * @param  array   $arr
     * @param  integer $pid
     * @param  integer $level
     * @return array   $tree
     */
    public function tree($arr,$pid=0,$level=0) {
        static $tree = array();
        foreach($arr as $value) {
            if($value['parent_id'] == $pid) {
                $value['level'] = $level;                
                $tree[] = $value;
            $this->tree($arr,$value['city_id'],$level+1);
            } 
        }
        return $tree;
    }
    // public function childList($arr,$pid=0) {
    //     static $list = array();
    //     foreach ($arr as $v) {
    //         if($v['parent_pid']==$pid) {                
    //             $v['child'] = $this->childList($arr,$v['City_id']);
    //             $list[] = $v;
    //         }
    //     }
    //     return $list;
    // }
}