<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); 
0
|| checktplrefresh('./template/jeavi_moment/common/header.htm', './template/jeavi_moment/common/header_common.htm', 1587460386, '2', './data/template/2_2_common_header_forum_misc.tpl.php', './template/jeavi_moment', 'common/header_forum_misc')
|| checktplrefresh('./template/jeavi_moment/common/header.htm', './template/jeavi_moment/common/pubsearchform.htm', 1587460386, '2', './data/template/2_2_common_header_forum_misc.tpl.php', './template/jeavi_moment', 'common/header_forum_misc')
|| checktplrefresh('./template/jeavi_moment/common/header.htm', './template/default/common/header_qmenu.htm', 1587460386, '2', './data/template/2_2_common_header_forum_misc.tpl.php', './template/jeavi_moment', 'common/header_forum_misc')
;?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <script src="<?php echo $_G['style']['styleimgdir'];?>/js/jquery-1.3.2.min.js" type="text/javascript" type="text/javascript"></script>


    <script src="<?php echo $_G['style']['styleimgdir'];?>/js/jqzoom.pack.1.0.1.js" type="text/javascript" type="text/javascript"></script>
    <script type="text/javascript">var jq = jQuery.noConflict();</script>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET;?>" />
<?php if($_G['config']['output']['iecompatible']) { ?><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE<?php echo $_G['config']['output']['iecompatible'];?>" /><?php } ?>
<title><?php if(!empty($navtitle)) { ?><?php echo $navtitle;?> - <?php } if(empty($nobbname)) { ?> <?php echo $_G['setting']['bbname'];?> - <?php } ?></title>
<?php echo $_G['setting']['seohead'];?>
    <meta name="keywords" content="<?php if(''==strstr( $_G['setting']['seokeywords']['portal'])) { ?> <?php echo $_G['setting']['seokeywords']['portal'];?> <?php } ?>" />
    <meta name="description" content="<?php if(''==strstr($_G['setting']['seodescription']['portal'])) { ?> <?php echo $_G['setting']['seodescription']['portal'];?> <?php } ?>"/>
<meta name="generator" content=" <?php echo $_G['setting']['version'];?>" />
<meta name="author" content="www.gxlwdsslgy.com" />
<meta name="copyright" content="2016-2017 Comsenz Inc." />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<base href="<?php echo $_G['siteurl'];?>" /><link rel="stylesheet" type="text/css" href="data/cache/style_2_common.css?<?php echo VERHASH;?>" /><link rel="stylesheet" type="text/css" href="data/cache/style_2_forum_misc.css?<?php echo VERHASH;?>" /><?php if($_G['uid'] && isset($_G['cookie']['extstyle']) && strpos($_G['cookie']['extstyle'], TPLDIR) !== false) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['cookie']['extstyle'];?>/style.css" /><?php } elseif($_G['style']['defaultextstyle']) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['style']['defaultextstyle'];?>/style.css" /><?php } ?>    <script src="<?php echo $_G['style']['styleimgdir'];?>/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo $_G['style']['styleimgdir'];?>/js/jquery.SuperSlide.js" type="text/javascript"></script>
<script type="text/javascript">var STYLEID = '<?php echo STYLEID;?>', STATICURL = '<?php echo STATICURL;?>', IMGDIR = '<?php echo IMGDIR;?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', discuz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>', showusercard = '<?php echo $_G['setting']['showusercard'];?>', attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>', creditnotice = '<?php if($_G['setting']['creditnotice']) { ?><?php echo $_G['setting']['creditnames'];?><?php } ?>', defaultstyle = '<?php echo $_G['style']['defaultextstyle'];?>', REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>', CSSPATH = '<?php echo $_G['setting']['csspath'];?>', DYNAMICURL = '<?php echo $_G['dynamicurl'];?>';</script>
<script src="<?php echo $_G['setting']['jspath'];?>common.js?<?php echo VERHASH;?>" type="text/javascript"></script>
    
<?php if(empty($_GET['diy'])) { $_GET['diy'] = '';?><?php } if(!isset($topic)) { $topic = array();?><?php } ?>
    <!--[if IE 6]>
     <script language='javascript' type="text/javascript">   
    function ResumeError() {  
         return true;  
    }  
    window.onerror = ResumeError;   
    </script> 
    <![endif]-->
<meta name="application-name" content="<?php echo $_G['setting']['bbname'];?>" />
<meta name="msapplication-tooltip" content="<?php echo $_G['setting']['bbname'];?>" />
<?php if($_G['setting']['portalstatus']) { ?>
<meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['1']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['portal']) ? 'http://'.$_G['setting']['domain']['app']['portal'] : $_G['siteurl'].'portal.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/portal.ico" />
<?php } ?>
<meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['2']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['forum']) ? 'http://'.$_G['setting']['domain']['app']['forum'] : $_G['siteurl'].'forum.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/bbs.ico" />
<?php if($_G['setting']['groupstatus']) { ?>
<meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['3']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['group']) ? 'http://'.$_G['setting']['domain']['app']['group'] : $_G['siteurl'].'group.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/group.ico" />
<?php } if(helper_access::check_module('feed')) { ?>
<meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['4']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['home']) ? 'http://'.$_G['setting']['domain']['app']['home'] : $_G['siteurl'].'home.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/home.ico" />
<?php } if($_G['basescript'] == 'forum' && $_G['setting']['archiver']) { ?>
<link rel="archives" title="<?php echo $_G['setting']['bbname'];?>" href="<?php echo $_G['siteurl'];?>archiver/" />
<?php } if(!empty($rsshead)) { ?>
<?php echo $rsshead;?><?php } if(widthauto()) { ?>

<link rel="stylesheet" id="css_widthauto" type="text/css" href="data/cache/style_<?php echo STYLEID;?>_widthauto.css?<?php echo VERHASH;?>" />
<script type="text/javascript">HTMLNODE.className += ' widthauto'</script>
<?php } if($_G['basescript'] == 'forum' || $_G['basescript'] == 'group') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>forum.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } elseif($_G['basescript'] == 'home' || $_G['basescript'] == 'userapp') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>home.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } elseif($_G['basescript'] == 'portal') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>portal.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($_G['basescript'] != 'portal' && $_GET['diy'] == 'yes' && check_diy_perm($topic)) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>portal.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($_GET['diy'] == 'yes' && check_diy_perm($topic)) { ?>
<link rel="stylesheet" type="text/css" id="diy_common" href="data/cache/style_<?php echo STYLEID;?>_css_diy.css?<?php echo VERHASH;?>" />
<?php } ?>

<style>
    .z button {
        background: transparent;
        border: 0px;
        cursor: pointer;
        transition: all 0.3s;
        border-radius: 3px;
        overflow: hidden;
        outline: none;
    }
    .z button:hover {
        background: #8c9ba6;
    }
    #headnav.header_fixed {
        box-shadow: 0px 0px 0px !important;
    }
</style>
</head>
<body id="nv_<?php echo $_G['basescript'];?>" class="pg_<?php echo CURMODULE;?><?php if($_G['basescript'] === 'portal' && CURMODULE === 'list' && !empty($cat)) { ?> <?php echo $cat['bodycss'];?><?php } ?>" onkeydown="if(event.keyCode==27) return false;">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<?php if($_GET['diy'] == 'yes' && check_diy_perm($topic)) { ?> <?php include template('common/header_diy'); ?> 
<?php } ?> 
<?php if(check_diy_perm($topic)) { ?> <?php include template('common/header_diynav'); ?> 
<?php } ?> 
<?php if(CURMODULE == 'topic' && $topic && empty($topic['useheader']) && check_diy_perm($topic)) { ?> 
<?php echo $diynav;?> 
<?php } ?> 
<?php if(empty($topic) || $topic['useheader']) { ?> 
<?php if($_G['setting']['mobile']['allowmobile'] && (!$_G['setting']['cacheindexlife'] && !$_G['setting']['cachethreadon'] || $_G['uid']) && ($_GET['diy'] != 'yes' || !$_GET['inajax']) && ($_G['mobile'] != '' && $_G['cookie']['mobile'] == '' && $_GET['mobile'] != 'no')) { ?>
<div class="xi1 bm bm_c"> 请选择 <a href="<?php echo $_G['siteurl'];?>forum.php?mobile=yes">进入手机版</a> <span class="xg1">|</span> <a href="<?php echo $_G['setting']['mobile']['nomobileurl'];?>">继续访问电脑版</a> </div>
<?php } ?> 
<?php if($_G['setting']['shortcut'] && $_G['member']['credits'] >= $_G['setting']['shortcut']) { ?>
<div id="shortcut"> <span><a href="javascript:;" id="shortcutcloseid" title="关闭">关闭</a></span> 您经常访问 <?php echo $_G['setting']['bbname'];?>，试试添加到桌面，访问更方便！ <a href="javascript:;" id="shortcuttip">添加 <?php echo $_G['setting']['bbname'];?> 到桌面</a> </div>
<script type="text/javascript">setTimeout(setShortcut, 2000);</script> 
<?php } ?>

<script src="<?php echo $_G['config']['wx']['domain'];?>\template\jeavi_moment\common\js\jquery.js" type="text/javascript" type="text/javascript"></script>
<script src="<?php echo $_G['config']['wx']['domain'];?>\template\jeavi_moment\common\js\jquery.cookie.js" type="text/javascript" type="text/javascript"></script>
<script type="text/javascript">

function setCookie(name,value) 
{ 
var Days = 1; 
var exp = new Date(); 
exp.setTime(exp.getTime() + Days*24*60*60*1000); 
document.cookie = name + "="+ escape (value) + ";expires=" + exp.toGMTString(); 
} 

function getCookie(name) 
{ 
var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
 
if(arr=document.cookie.match(reg))
 
return unescape(arr[2]); 
else 
return null; 
} 
function delCookie(name)
{
var exp = new Date();
exp.setTime(exp.getTime() - 1);
var cval=getCookie(name);
if(cval!=null)
document.cookie= name + "="+cval+";expires="+exp.toGMTString();
}

$(function(){
var lan=getCookie('language');
});

function set_China(){
setCookie('wx_language','zh');
location.reload();
}

function set_English(){
setCookie('wx_language','en');
location.reload();
}

function set_Japan(){
setCookie('wx_language','jp');
location.reload();
}

function set_Korea(){
setCookie('wx_language','kor');

    location.reload();
}

function set_Vietnum(){
setCookie('language','Vietnum');
location.reload();
}

</script>	




<div id="headnav" <?php if($_GET['diy'] == 'yes' && check_diy_perm($topic)) { ?>class="hide"<?php } ?>>
<div id="toptb" class="cl">
<?php if(!empty($_G['setting']['pluginhooks']['global_cpnav_top'])) echo $_G['setting']['pluginhooks']['global_cpnav_top'];?>
<div class="wp">
<div class="z">
                <?php if($_G['setting']['search']) { $slist = array();?><?php if($_G['fid'] && $_G['forum']['status'] != 3 && $mod != 'group') { ?><?php
$slist[forumfid] = <<<EOF
<li><a href="javascript:;" rel="curforum" fid="{$_G['fid']}" >本版</a></li>
EOF;
?><?php } if($_G['setting']['portalstatus'] && $_G['setting']['search']['portal']['status'] && ($_G['group']['allowsearch'] & 1 || $_G['adminid'] == 1)) { ?><?php
$slist[portal] = <<<EOF
<li><a href="javascript:;" rel="article">文章</a></li>
EOF;
?><?php } if($_G['setting']['search']['forum']['status'] && ($_G['group']['allowsearch'] & 2 || $_G['adminid'] == 1)) { ?><?php
$slist[forum] = <<<EOF
<li><a href="javascript:;" rel="forum" class="curtype">帖子</a></li>
EOF;
?><?php } if(helper_access::check_module('blog') && $_G['setting']['search']['blog']['status'] && ($_G['group']['allowsearch'] & 4 || $_G['adminid'] == 1)) { ?><?php
$slist[blog] = <<<EOF
<li><a href="javascript:;" rel="blog">日志</a></li>
EOF;
?><?php } if(helper_access::check_module('album') && $_G['setting']['search']['album']['status'] && ($_G['group']['allowsearch'] & 8 || $_G['adminid'] == 1)) { ?><?php
$slist[album] = <<<EOF
<li><a href="javascript:;" rel="album">相册</a></li>
EOF;
?><?php } if($_G['setting']['groupstatus'] && $_G['setting']['search']['group']['status'] && ($_G['group']['allowsearch'] & 16 || $_G['adminid'] == 1)) { ?><?php
$slist[group] = <<<EOF
<li><a href="javascript:;" rel="group">{$_G['setting']['navs']['3']['navname']}</a></li>
EOF;
?><?php } ?><?php
$slist[user] = <<<EOF
<li><a href="javascript:;" rel="user">用户</a></li>
EOF;
?>
<?php } if($_G['setting']['search'] && $slist) { ?>
<div id="scbar" class="<?php if($_G['setting']['srchhotkeywords'] && count($_G['setting']['srchhotkeywords']) > 5) { ?>scbar_narrow <?php } ?>cl">
<form id="scbar_form" method="<?php if($_G['fid'] && !empty($searchparams['url'])) { ?>get<?php } else { ?>post<?php } ?>" autocomplete="off" onsubmit="searchFocus($('scbar_txt'))" action="<?php if($_G['fid'] && !empty($searchparams['url'])) { ?><?php echo $searchparams['url'];?><?php } else { ?>search.php?searchsubmit=yes<?php } ?>" target="_blank">
<input type="hidden" name="mod" id="scbar_mod" value="search" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="srchtype" value="title" />
<input type="hidden" name="srhfid" value="<?php echo $_G['fid'];?>" />
<input type="hidden" name="srhlocality" value="<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>" />
<?php if(!empty($searchparams['params'])) { if(is_array($searchparams['params'])) foreach($searchparams['params'] as $key => $value) { $srchotquery .= '&' . $key . '=' . rawurlencode($value);?><input type="hidden" name="<?php echo $key;?>" value="<?php echo $value;?>" />
<?php } ?>
<input type="hidden" name="source" value="discuz" />
<input type="hidden" name="fId" id="srchFId" value="<?php echo $_G['fid'];?>" />
<input type="hidden" name="q" id="cloudsearchquery" value="" />

<style>
#scbar { overflow: visible; position: relative; }
#sg{ background: #FFF; width:456px; border: 1px solid #B2C7DA; }
.scbar_narrow #sg { width: 316px; }
#sg li { padding:0 8px; line-height:30px; font-size:14px; }
#sg li span { color:#999; }
.sml { background:#FFF; cursor:default; }
.smo { background:#E5EDF2; cursor:default; }
            </style>
            <div style="display: none; position: absolute; top:37px; left:44px;" id="sg">
                <div id="st_box" cellpadding="2" cellspacing="0"></div>
            </div>
<?php } ?>
<table cellspacing="0" cellpadding="0">
<tr>
<td class="scbar_txt_td"><input type="text" name="srchtxt" id="scbar_txt" value="<?php echo $MY_LANGUAGE['placeholder'];?>" autocomplete="off" speech /></td>
<td class="scbar_type_td"><a href="javascript:;" id="scbar_type" class="xg1" onclick="showMenu(this.id)" hidefocus="true"><?php echo $MY_LANGUAGE['search'];?></a></td>
<td class="scbar_btn_td"><button type="submit" name="searchsubmit" id="scbar_btn" sc="1" value="true"><strong class="xi2">搜索</strong></button></td>
</tr>
</table>
</form>
</div>
<script type="text/javascript">
initSearchmenu('scbar', '<?php echo $searchparams['url'];?>');
</script>
<script type="text/javascript">
    jQuery(function(){
jQuery("#scbar #scbar_txt").focus(function(){
  jQuery("#scbar").addClass("bgchange");
}).blur(function(){
  jQuery("#scbar").removeClass("bgchange");
});
    })
</script>
<?php } if(is_array($_G['setting']['topnavs']['0'])) foreach($_G['setting']['topnavs']['0'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?><?php echo $nav['code'];?><?php } } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_cpnav_extra1'])) echo $_G['setting']['pluginhooks']['global_cpnav_extra1'];?>
</div>
</div>
<!--����ѡ��-->

<div class="z">
<button onclick="set_China()" style="magin-left:20px;width:60px;height:30px;">简体中文</button>
</div>
<div class="z">
<button onclick="set_English()" style="magin-left:20px;width:60px;height:30px;">English</button>
</div>
<div class="z">
<button onclick="set_Japan()" style="magin-left:20px;width:60px;height:30px;">日本語</button>
</div>
<div class="z">
<button onClick="set_Korea()" style="magin-left:20px;width:60px;height:30px;">한국어</button>
</div>
<!--				<div class="z">-->
<!--					<button onClick="set_Vietnum()" style="magin-left:20px;width:60px;height:30px;">!L_Vietnum!</button>-->
<!--				</div>-->
<div class="y">
<a id="switchblind" href="javascript:;" onClick="toggleBlind(this)" title="开启辅助访问" class="switchblind">开启辅助访问</a>
<?php if(!empty($_G['setting']['pluginhooks']['global_cpnav_extra2'])) echo $_G['setting']['pluginhooks']['global_cpnav_extra2'];?><?php if(is_array($_G['setting']['topnavs']['1'])) foreach($_G['setting']['topnavs']['1'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?><?php echo $nav['code'];?><?php } } if(empty($_G['disabledwidthauto']) && $_G['setting']['switchwidthauto']) { ?>
<a href="javascript:;" id="switchwidth" onClick="widthauto(this)" title="<?php if(widthauto()) { ?>切换到窄版<?php } else { ?>切换到宽版<?php } ?>" class="switchwidth"><?php if(widthauto()) { ?>切换到窄版<?php } else { ?>切换到宽版<?php } ?></a>
<?php } if($_G['uid'] && !empty($_G['style']['extstyle'])) { ?><a id="sslct" href="javascript:;" onMouseOver="delayShow(this, function() {showMenu({'ctrlid':'sslct','pos':'34!'})});">切换风格</a><?php } if(check_diy_perm($topic)) { ?>
<?php echo $diynav;?>
<?php } ?>
</div>
</div>
</div>
<div class="header"> 
  <?php if(!empty($_G['setting']['pluginhooks']['global_cpnav_top'])) echo $_G['setting']['pluginhooks']['global_cpnav_top'];?>
  <div class="wp cl"> 
    
    <!-- վ��LOGO -->
    
    <div class="hd_logo"> 
      <?php $mnid = getcurrentnav();?>      <h2><?php if(!isset($_G['setting']['navlogos'][$mnid])) { ?><a href="<?php if($_G['setting']['domain']['app']['default']) { ?>http://<?php echo $_G['setting']['domain']['app']['default'];?>/<?php } else { ?>./<?php } ?>" title="<?php echo $_G['setting']['bbname'];?>"><?php echo $_G['style']['boardlogo'];?></a><?php } else { ?><?php echo $_G['setting']['navlogos'][$mnid];?><?php } ?></h2>
    </div>
     
    <!--  -->
    <div class="nav"><?php session_start();$_SESSION['num']=0;?>      <ul>
        <?php if(is_array($_G['setting']['navs'])) foreach($_G['setting']['navs'] as $nav) { ?>        <?php if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { $_SESSION['num']=$_SESSION['num']+1;?><li id="mn_<?php echo $_SESSION['num'];?>" <?php if($mnid == $nav['navid']) { ?>class="a" <?php } ?>
        <?php if(!empty($subnavs)) { ?>class="b" <?php } ?>
        <?php echo $nav['nav'];?>></li>
        <?php } ?>
        <?php } ?>
<!--        <li class="a" id="mn_item_1"><a href="">首页</a></li>-->
<!--          <li class="a" id="mn_portal"><a href="">首页</a></li>-->
          <li id="mn_item_0" class="a"><a href="http://gxlwdsslgy.com/portal.php">首页</a></li>
          <?php if(is_array($_G["config"]["wx"]["navs"])) foreach($_G["config"]["wx"]["navs"] as $nav) { ?>          <?php $_SESSION['num']=$_SESSION['num']+1;?>          <li id="mn_<?php echo $_SESSION['num'];?>" class="a"><a href="http://gxlwdsslgy.com/portal.php?mod=list&amp;catid=<?php echo $nav['catid'];?>"><?php echo $nav["catname"];?></a></li>
          <?php } ?>
          <li id="mn_item_0" class="a"><a href="http://gxlwdsslgy.com/ticket.php">门票预定</a></li>
      </ul>
      </ul>
      <?php if(!empty($_G['setting']['pluginhooks']['global_nav_extra'])) echo $_G['setting']['pluginhooks']['global_nav_extra'];?> 
    </div>
 
 <!-- �������� --> 
<div class="sub_nav"> <?php echo $_G['setting']['menunavs'];?> </div>

<!--<script src="http://www.gxlwdsslgy.comcsoft.com/md5/md5.js" type="text/javascript"></script> -->
<script type='text/javascript'>
for(i=1;i<10;i++){
$('#mn_'+i).children('a').attr('id','mn_item_'+i);
$('#mn_item_'+i).children('span').attr('id','English_'+i);
}

for(i=1;i<10;i++){
//trans_English(i);
}

function trans_English(i){
var id_mn='mn_item_'+i;
var id_span='English_'+i;
var target_Enlish=document.getElementById(id_span);
var mn_en=target_Enlish.innerHTML;
if(getCookie('language')!='China'){document.getElementById(id_mn).innerHTML=mn_en+'<span>'+mn_en+'<span>';}
}

</script>
 
    <!-- �û���Ϣ -->
    <div class="userbox"> 
      <?php if($_G['uid']) { ?>
      <ul class="usernav">
      <li class="user_list" style="">
      <a href="home.php?mod=follow&amp;do=follower"class="user_link flo">
     <i></i><?php if($_G['member']['newprompt_num']['follower']) { ?> <span class="unread_num png"><?php echo $_G['member']['newprompt_num']['follower'];?></span><?php } ?></a>
      </li>
        <li class="user_list"><a id="nte_menu" href="home.php?mod=space&amp;do=notice" class="user_link notification"><i></i><?php if($_G['member']['newprompt']) { ?><span class="unread_num png"><?php echo $_G['member']['newprompt'];?></span><?php } ?></a> </li>
        <li class="user_list msg"> <a id="msg_menu" href="home.php?mod=space&amp;do=pm" class="user_link msg"><i></i><?php if($_G['member']['newpm']) { ?><span class="unread_num png"><?php echo $_G['member']['newpm'];?></span><?php } ?></a> </li>
      </ul>
      <a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>&amp;do=profile" title="<?php echo $_G['member']['username'];?>" class="userinfo" id="m" onMouseOver="showMenu({'ctrlid':'m','pos':'34!','ctrlclass':'hover','duration':2});"> <span class="user_avt"><?php echo avatar($_G[uid],small);?></span></a> 
      <?php } elseif(!empty($_G['cookie']['loginuser'])) { ?>
      <ul class="usernav user_part">
        <li class="user_list"><a id="loginuser" class="user_link"><?php echo dhtmlspecialchars($_G['cookie']['loginuser']); ?></a></li>
        <li class="user_list"><a class="user_link" href="member.php?mod=logging&amp;action=login" onClick="showWindow('login', this.href)">激活</a></li>
        <li class="user_list"><a class="user_link" href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">退出</a></li>
      </ul>
      <?php } elseif(!$_G['connectguest']) { ?>
      <ul class="usernav user_part">
       <a href="javascript:;" class="user_login" id="l" onMouseOver="showMenu({'ctrlid':'l','ctrlclass':'hover','duration':2});" onClick="javascript:lsSubmit();"><?php echo $MY_LANGUAGE["login"];?></a>
      <a href="member.php?mod=<?php echo $_G['setting']['regname'];?>" class="user_login"><?php echo $MY_LANGUAGE["register"];?></a>
        
      </ul>
      <div style="display:none"><?php include template('member/login_simple'); ?></div>
      <?php } else { ?>
      <ul class="usernav user_part">
        <li class="user_list"><a href="home.php?mod=spacecp&amp;ac=usergroup" class="user_link"><?php echo $_G['member']['username'];?></a></li>
        <li class="user_list"><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>" class="user_link">退出</a></li>
      </ul>
      <?php } ?> 
    </div>
    
  </div>
</div>
</div>
<!--<div class="header_fake"></div>-->
<div id="toptb" class="cl" style="display:none;">
  <div class="wp">
    <div class="z"> 
      <?php if(is_array($_G['setting']['topnavs']['0'])) foreach($_G['setting']['topnavs']['0'] as $nav) { ?> 
      <?php if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?><?php echo $nav['code'];?><?php } ?> 
      <?php } ?> 
      <?php if(!empty($_G['setting']['pluginhooks']['global_cpnav_extra1'])) echo $_G['setting']['pluginhooks']['global_cpnav_extra1'];?>
    </div>
    <div class="y"> <a id="switchblind" href="javascript:;" onClick="toggleBlind(this)" title="开启辅助访问" class="switchblind">开启辅助访问</a> 
      <?php if(!empty($_G['setting']['pluginhooks']['global_cpnav_extra2'])) echo $_G['setting']['pluginhooks']['global_cpnav_extra2'];?> 
      <?php if(is_array($_G['setting']['topnavs']['1'])) foreach($_G['setting']['topnavs']['1'] as $nav) { ?> 
      <?php if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?><?php echo $nav['code'];?><?php } ?> 
      <?php } ?> 
      <?php if(empty($_G['disabledwidthauto']) && $_G['setting']['switchwidthauto']) { ?> 
      <a href="javascript:;" id="switchwidth" onClick="widthauto(this)" title="<?php if(widthauto()) { ?>切换到窄版<?php } else { ?>切换到宽版<?php } ?>" class="switchwidth"><?php if(widthauto()) { ?>切换到窄版<?php } else { ?>切换到宽版<?php } ?></a> 
      <?php } ?> 
      <?php if($_G['uid'] && !empty($_G['style']['extstyle'])) { ?><a id="sslct" href="javascript:;" onMouseOver="delayShow(this, function() {showMenu({'ctrlid':'sslct','pos':'34!'})});">切换风格</a><?php } ?> 
      <?php if(check_diy_perm($topic)) { ?> 
      <?php echo $diynav;?> 
      <?php } ?> 
    </div>
  </div>
</div>

<?php if(!IS_ROBOT) { ?> 
<?php if($_G['uid']) { ?>
<ul id="myprompt_menu" class="p_pop" style="display: none;">
  <li><a href="home.php?mod=space&amp;do=pm" id="pm_ntc" style="background-repeat: no-repeat; background-position: 0 50%;"><em class="prompt_news<?php if(empty($_G['member']['newpm'])) { ?>_0<?php } ?>"></em>消息</a></li>
  <li><a href="home.php?mod=follow&amp;do=follower"><em class="prompt_follower<?php if(empty($_G['member']['newprompt_num']['follower'])) { ?>_0<?php } ?>"></em>新听众<?php if($_G['member']['newprompt_num']['follower']) { ?>(<?php echo $_G['member']['newprompt_num']['follower'];?>)<?php } ?></a></li>
  
  <?php if($_G['member']['newprompt'] && $_G['member']['newprompt_num']['follow']) { ?>
  <li><a href="home.php?mod=follow"><em class="prompt_concern"></em>我关注的(<?php echo $_G['member']['newprompt_num']['follow'];?>)</a></li>
  <?php } ?> 
  <?php if($_G['member']['newprompt']) { ?> 
  <?php if(is_array($_G['member']['category_num'])) foreach($_G['member']['category_num'] as $key => $val) { ?>  <li><a href="home.php?mod=space&amp;do=notice&amp;view=<?php echo $key;?>"><em class="notice_<?php echo $key;?>"></em><?php echo lang('template', 'notice_'.$key); ?>(<span class="rq"><?php echo $val;?></span>)</a></li>
  <?php } ?> 
  <?php } ?> 
  <?php if(empty($_G['cookie']['ignore_notice'])) { ?>
  <li class="ignore_noticeli"><a href="javascript:;" onClick="setcookie('ignore_notice', 1);hideMenu('myprompt_menu')" title="暂不提醒"><em class="ignore_notice"></em></a></li>
  <?php } ?>
</ul>
<?php } ?> 
<?php if($_G['uid'] && !empty($_G['style']['extstyle'])) { ?>
<div id="sslct_menu" class="cl p_pop" style="display: none;"> 
  <?php if(!$_G['style']['defaultextstyle']) { ?><span class="sslct_btn" onClick="extstyle('')" title="默认"><i></i></span><?php } ?> 
  <?php if(is_array($_G['style']['extstyle'])) foreach($_G['style']['extstyle'] as $extstyle) { ?> 
  <span class="sslct_btn" onClick="extstyle('<?php echo $extstyle['0'];?>')" title="<?php echo $extstyle['1'];?>"><i style='background:<?php echo $extstyle['2'];?>'></i></span> 
  <?php } ?> 
</div>
<?php } ?> <div id="qmenu_menu" class="p_pop <?php if(!$_G['uid']) { ?>blk<?php } ?>" style="display: none;">
<?php if(!empty($_G['setting']['pluginhooks']['global_qmenu_top'])) echo $_G['setting']['pluginhooks']['global_qmenu_top'];?>
<?php if($_G['uid']) { ?>
<ul class="cl nav"><?php if(is_array($_G['setting']['mynavs'])) foreach($_G['setting']['mynavs'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?>
<li><?php echo $nav['code'];?></li>
<?php } } ?>
</ul>
<?php } elseif($_G['connectguest']) { ?>
<div class="ptm pbw hm">
请先<br /><a class="xi2" href="member.php?mod=connect"><strong>完善帐号信息</strong></a> 或 <a href="member.php?mod=connect&amp;ac=bind" class="xi2 xw1"><strong>绑定已有帐号</strong></a><br />后使用快捷导航
</div>
<?php } else { ?>
<div class="ptm pbw hm">
请 <a href="javascript:;" class="xi2" onclick="lsSubmit()"><strong>登录</strong></a> 后使用快捷导航<br />没有帐号？<a href="member.php?mod=<?php echo $_G['setting']['regname'];?>" class="xi2 xw1"><?php echo $_G['setting']['reglinkname'];?></a>
</div>
<?php } if($_G['setting']['showfjump']) { ?><div id="fjump_menu" class="btda"></div><?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_qmenu_bottom'])) echo $_G['setting']['pluginhooks']['global_qmenu_bottom'];?>
</div> 
<?php } ?> 


<?php if(!empty($_G['setting']['plugins']['jsmenu'])) { ?>
<ul class="p_pop h_pop" id="plugin_menu" style="display: none">
  <?php if(is_array($_G['setting']['plugins']['jsmenu'])) foreach($_G['setting']['plugins']['jsmenu'] as $module) { ?> 
  <?php if(!$module['adminid'] || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])) { ?>
  <li><?php echo $module['url'];?></li>
  <?php } ?> 
  <?php } ?>
</ul>
<?php } if($_G['setting']['search']) { ?>
<!-- ����ɸѡ --> 
<ul id="scbar_type_menu" class="p_pop" style="display: none;"><li><a href="javascript:;" rel="article">����</a></li></ul>
<script type="text/javascript">
initSearchmenu('scbar', '<?php echo $searchparams['url'];?>');
</script>
<?php } ?> 




<!-- �û��˵� --> 
<ul class="sub_menu" id="m_menu" style="display: none;">
  <?php if(check_diy_perm($topic)) { ?>
  <li><a href="javascript:openDiy();" title="打开 DIY 面板">��DIY</a></li>
  <?php } ?>
  <?php if(is_array($_G['setting']['mynavs'])) foreach($_G['setting']['mynavs'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?>
<li><?php echo $nav['code'];?></li>
<?php } ?>
  <?php } ?>
  <?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra3'])) echo $_G['setting']['pluginhooks']['global_usernav_extra3'];?>
  <li><a href="home.php?mod=spacecp">设置</a></li>
  <?php if(($_G['group']['allowmanagearticle'] || $_G['group']['allowpostarticle'] || $_G['group']['allowdiy'] || getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 6) || getstatus($_G['member']['allowadmincp'], 2) || getstatus($_G['member']['allowadmincp'], 3))) { ?>
  <li><a href="portal.php?mod=portalcp"><?php if($_G['setting']['portalstatus'] ) { ?>门户管理<?php } else { ?>模块管理<?php } ?></a></li>
  <?php } ?> 
  <?php if($_G['uid'] && $_G['group']['radminid'] > 1) { ?>
  <li><a href="forum.php?mod=modcp&amp;fid=<?php echo $_G['fid'];?>" target="_blank"><?php echo $_G['setting']['navs']['2']['navname'];?>管理</a></li>
  <?php } ?> 
  <?php if($_G['uid'] && $_G['adminid'] == 1 && $_G['setting']['cloud_status']) { ?>
  <li><a href="admin.php?frames=yes&amp;action=cloud&amp;operation=applist" target="_blank">云平台</a></li>
  <?php } ?> 
  <?php if($_G['uid'] && getstatus($_G['member']['allowadmincp'], 1)) { ?>
  <li><a href="admin.php" target="_blank">管理中心</a></li>
  <?php } ?> 
  <li><?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra1'])) echo $_G['setting']['pluginhooks']['global_usernav_extra1'];?></li>
  <li><?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra2'])) echo $_G['setting']['pluginhooks']['global_usernav_extra2'];?></li>
  <li><?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra3'])) echo $_G['setting']['pluginhooks']['global_usernav_extra3'];?></li>
  <li><?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra4'])) echo $_G['setting']['pluginhooks']['global_usernav_extra4'];?></li>
  
  <li><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">退出</a></li>
</ul>


<ul class="sub_menu" id="l_menu" style="display: none;">

<!-- ��������¼ -->
<li class="user_list app_login"><a href="connect.php?mod=login&amp;op=init&amp;referer=forum.php&amp;statfrom=login"><i class="i_qq"></i>QQ登陆</a></li>
<li class="user_list app_login"><a href="plugin.php?id=wechat:login"><i class="i_wb"></i>微信登陆</a></li>
</ul>



<div class="wp" style="display:none;"> 
  <!-- ���ص���ADλ�� -->
  <?php echo adshow("headerbanner/wp a_h");?> 
  <?php echo adshow("subnavbanner/a_mu");?> 
</div>

<?php if(!empty($_G['setting']['pluginhooks']['global_header'])) echo $_G['setting']['pluginhooks']['global_header'];?> 
<?php } ?>


<script>
    console.log("fuckdiscuz166661");
</script>

<div id="wp" class="wp j_wp">
