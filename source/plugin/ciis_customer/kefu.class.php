<?php

if(!defined('IN_DISCUZ')) {
	exit('Access Deined');
}


class plugin_ciis_customer {
	//全局
	function common() {
		global $_G;
		return;
	}
	
	//嵌入
	function global_footer() {
		global $_G;
		if($_G['cache']['plugin']['ciis_customer']['switch']){
			$var = $_G['cache']['plugin']['ciis_customer']['qqnumber'];
			$v = $this->_strToArr($var);
			include template('ciis_customer:kefu');
			return $return;
		}
	}
	
	//分隔符
	function _strToArr($str){
		$arr = array();
		$arr = explode("\n", $str);
		$arrList = array();
		foreach ($arr as $key => $value){
			$arrList[$key] = explode("|", $value);
		}
		return $arrList;
	}
	
	
}


?>