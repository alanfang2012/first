<?php
/*
七大常用PHP算法
1、冒泡排序
2、归并排序
3、二分查找-递归
4、二分查找-非递归
5、快速排序
6、选择排序
7、插入排序
下面一一示例介绍
*/


//1、冒泡排序
function bubble_sort($arr) {
	$n=count($arr);
	for($i=0;$i<$n-1;$i++){
		for($j=$i+1;$j<$n;$j++) {
			if($arr[$j]<$arr[$i]) {
				$temp=$arr[$i];
				$arr[$i]=$arr[$j];
				$arr[$j]=$temp;
			}
		}
	}
	return $arr;
}

//2、归并排序
function Merge(&$arr, $left, $mid, $right) {
	$i = $left;
	$j = $mid + 1;
	$k = 0;
	$temp = array();
	while ($i <= $mid && $j <= $right)
	{
		if ($arr[$i] <= $arr[$j])
			$temp[$k++] = $arr[$i++];
		else
			$temp[$k++] = $arr[$j++];
	}
	while ($i <= $mid)
		$temp[$k++] = $arr[$i++];
	while ($j <= $right)
		$temp[$k++] = $arr[$j++];
	for ($i = $left, $j = 0; $i <= $right; $i++, $j++)
		$arr[$i] = $temp[$j];
}

function MergeSort(&$arr, $left, $right)
{
	if ($left < $right)
	{
		$mid = floor(($left + $right) / 2);
		MergeSort($arr, $left, $mid);
		MergeSort($arr, $mid + 1, $right);
		Merge($arr, $left, $mid, $right);
	}
}

//3、二分查找-递归
function bin_search($arr,$low,$high,$value) {
	if($low>$high)
		return false;
	else {
		$mid=floor(($low+$high)/2);
		if($value==$arr[$mid])
			return $mid;
		elseif($value<$arr[$mid])
			return bin_search($arr,$low,$mid-1,$value);
		else
			return bin_search($arr,$mid+1,$high,$value);
	}
}

//4、二分查找-非递归
function bin_search($arr,$low,$high,$value) {
	while($low<=$high) {
		$mid=floor(($low+$high)/2);
		if($value==$arr[$mid])
			return $mid;
		elseif($value<$arr[$mid])
			$high=$mid-1;
		else
			$low=$mid+1;
	}
	return false;
}


//递归版本
functionbin_sch($array,$low,$high,$k){
	if($low<=$high){
		$mid=intval(($low+$high)/2);

		if($array[$mid]==$k){
			return$mid;
		}elseif($k<$array[$mid]){
			returnbin_sch($array,$low,$mid-1,$k);
		}else{
			returnbin_sch($array,$mid+1,$high,$k);
		}
	}
	return-1;
}

//非递归版本
functionbinsearch($x,$a)
{
	$c=count($a);
	$lower=0;
	$high=$c-1;
	while($lower<=$high)
	{
		$middle=intval(($lower+$high)/2);
		if($a[$middle]>$x)
			$high=$middle-1;
		elseif($a[$middle]<$x)
			$lower=$middle+1;
		else
			return $middle;
	}
	return-1;
}





//5、快速排序
function quick_sort($arr) 
{
	$n=count($arr);
	if($n<=1)
		return $arr;
	$key=$arr[0];
	$left_arr=array();
	$right_arr=array();
	for($i=1;$i<$n;$i++) 
	{
		if($arr[$i]<=$key)
			$left_arr[]=$arr[$i];
		else
			$right_arr[]=$arr[$i];
	}
	$left_arr=quick_sort($left_arr);
	$right_arr=quick_sort($right_arr);
	return array_merge($left_arr,array($key),$right_arr);
}

//6、选择排序
function select_sort($arr) 
{
	$n=count($arr);
	for($i=0;$i<$n;$i++) 
	{
		$k=$i;
		for($j=$i+1;$j<$n;$j++) {
			if($arr[$j]<$arr[$k])
				$k=$j;
		}
		if($k!=$i) {
			$temp=$arr[$i];
			$arr[$i]=$arr[$k];
			$arr[$k]=$temp;
		}
	}
	return $arr;
}

//7、插入排序
function insertSort($arr) {
	$n=count($arr);
	for($i=1;$i<$n;$i++) {
		$tmp=$arr[$i];
		$j=$i-1;
		while($arr[$j]>$tmp) {
			$arr[$j+1]=$arr[$j];
			$arr[$j]=$tmp;
			$j--;
			if($j<0)
				break;
		}
	}
	return $arr;
}


/*
function maopao($arr)
{
	if (!empty($arr)) 
	{
		for ($i=0; $i <count($arr) ; $i++) 
		{ 

			if($arr[$i]>$arr[$j])
			{
				$temp = $arr[$i];
				$arr[$i] = $arr[$j];
				$arr[$j] = $temp;	
			}			

		}

	}

	return $arr;

}

*/

//$arr1 = array(1,3,5,2,7,4,9,8);

//$arr3 =  maopao($arr1);

//print_r($arr3);

?>