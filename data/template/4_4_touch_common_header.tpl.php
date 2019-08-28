<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<meta http-equiv="Cache-control" content="<?php if($_G['setting']['mobile']['mobilecachetime'] > 0) { ?><?php echo $_G['setting']['mobile']['mobilecachetime'];?><?php } else { ?>no-cache<?php } ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no" />
<meta name="keywords" content="<?php if(!empty($metakeywords)) { echo dhtmlspecialchars($metakeywords); } ?>" />
<meta name="description" content="<?php if(!empty($metadescription)) { echo dhtmlspecialchars($metadescription); ?> <?php } ?>,<?php echo $_G['setting']['bbname'];?>" />
<title><?php if(!empty($navtitle)) { ?><?php echo $navtitle;?> - <?php } if(empty($nobbname)) { ?> <?php echo $_G['setting']['bbname'];?> - <?php } ?> 鎵嬫満鐗� - Powered by Discuz!</title><?php require_once(DISCUZ_ROOT.'/template/moke8_doormobile/touch/php/config.php');?><?php require_once(DISCUZ_ROOT.'/template/moke8_doormobile/touch/php/func.php');?><script src="<?php echo STATICURL;?>js/mobile/jquery.min.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript">var STYLEID = '<?php echo STYLEID;?>', STATICURL = '<?php echo STATICURL;?>', IMGDIR = '<?php echo IMGDIR;?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', discuz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>', showusercard = '<?php echo $_G['setting']['showusercard'];?>', attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>', creditnotice = '<?php if($_G['setting']['creditnotice']) { ?><?php echo $_G['setting']['creditnames'];?><?php } ?>', defaultstyle = '<?php echo $_G['style']['defaultextstyle'];?>', REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>';</script>
<script src="<?php echo STATICURL;?>js/mobile/common.js?<?php echo VERHASH;?>" type="text/javascript" charset="<?php echo CHARSET;?>"></script>
<link rel="stylesheet" href="/template/moke8_doormobile/touch/images/media50px.css" type="text/css">
<link rel="stylesheet" href="./template/moke8_doormobile/touch/images/style.css?t=11231103" type="text/css">
<!---手动修改配色(橙色t1，粉色t2，浅绿色t3，蓝色t4，黄色t5，紫色t6，黑色t7)
<link rel="stylesheet" href="./template/moke8_doormobile/touch/style/t7/style.css" type="text/css">--->
<!--jquery.mmenu -->
<link rel="stylesheet" href="/template/moke8_doormobile/touch/images/mmenu/jquery.mmenu.all.css" type="text/css">
<script src="/template/moke8_doormobile/touch/images/mmenu/jquery.mmenu.min.all.js" type="text/javascript" charset="<?php echo CHARSET;?>"></script>
<script type="text/javascript">
$(function() {
$('nav#mainNv').mmenu({
extensions : [ "theme-dark", "effect-listitems-slide" ],
iconPanels: {
add 	: true,
visible	: 1
},
navbar	: {
add : false
}
});
});
</script>
<!--jquery.mmenu -->
</head>
<body class="bg">
<div id="page">	


