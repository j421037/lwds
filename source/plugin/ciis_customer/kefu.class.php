<?php

if(!defined('IN_DISCUZ')) {
	exit('Access Deined');
}


class plugin_ciis_customer {
	//ȫ��
	function common() {
		global $_G;
		return;
	}
	
	//Ƕ��
	function global_footer() {
		global $_G;
		if($_G['cache']['plugin']['ciis_customer']['switch']){
			$var = $_G['cache']['plugin']['ciis_customer']['qqnumber'];
			$v = $this->_strToArr($var);
			include template('ciis_customer:kefu');
			return $return;
		}
	}
	
	//�ָ���
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