<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('discuz');?>
<?php if($_G['setting']['mobile']['mobilehotthread'] && $_GET['forumlist'] != 1) { dheader('Location:portal.php?mod=index&mobile=2');exit;?><?php } include template('common/header'); ?><script type="text/javascript">
function getvisitclienthref() {
var visitclienthref = '';
if(ios) {
visitclienthref = 'https://itunes.apple.com/cn/app/zhang-shang-lun-tan/id489399408?mt=8';
} else if(andriod) {
visitclienthref = 'http://www.discuz.net/mobile.php?platform=android';
}
return visitclienthref;
}
</script>

<?php if($_GET['visitclient']) { ?>

<header class="header">
    <div class="nav">
<span>温馨提示</span>
    </div>
</header>
<div class="cl">
<div class="clew_con">
<h2 class="tit">掌上论坛手机客户端</h2>
<p>随时随地上论坛<input class="redirect button" id="visitclientid" type="button" value="点击下载" href="" /></p>
<h2 class="tit">iPhone,Andriod等智能手机</h2>
<p>直接登录手机版，阅读体验更佳<input class="redirect button" type="button" value="访问手机版" href="<?php echo $_GET['visitclient'];?>" /></p>
</div>
</div>
<script type="text/javascript">
var visitclienthref = getvisitclienthref();
if(visitclienthref) {
$('#visitclientid').attr('href', visitclienthref);
} else {
window.location.href = '<?php echo $_GET['visitclient'];?>';
}
</script>

<?php } else { ?>

<!-- header start -->
<?php if($showvisitclient) { ?>

<div class="visitclienttip vm" style="display:block;">
<a href="javascript:;" id="visitclientid" class="btn_download">立即下载</a>	
<p>
下载新版掌上论坛客户端，尊享多项看帖特权!
</p>
</div>
<script type="text/javascript">
var visitclienthref = getvisitclienthref();
if(visitclienthref) {
$('#visitclientid').attr('href', visitclienthref);
$('.visitclienttip').css('display', 'block');
}
</script>

<?php } ?>
<header class="header p_header">
<a class="topMenu fl" href="#mainNv">�˵�</a>
<?php if(!$_G['uid'] && !$_G['connectguest']) { ?>
<a class="topLogin fr" href="member.php?mod=logging&amp;action=login"></a>
<?php } else { ?>
<a class="topLogin fr" href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>&amp;do=profile&amp;mycenter=1"><?php echo avatar($_G[uid]);?></a>
<?php } ?>
<h1 class="logo"><img src="template/moke8_doormobile/touch/images/img/logo.png"></h1>
</header>
<!-- header end -->

<div class="container cfix">
<!-- main forumlist start --><?php if(is_array($catlist)) foreach($catlist as $key => $cat) { ?><div class="catlist">
<div class="subforumshow cfix" href="#sub_forum_<?php echo $cat['fid'];?>">
<span class="o y">
<img src="template/moke8_doormobile/touch/images/img/collapsed_<?php if(!$_G['setting']['mobile']['mobileforumview']) { ?>yes<?php } else { ?>no<?php } ?>.png?t">
</span>
<h2><?php echo $cat['name'];?></h2>
</div>
<div id="sub_forum_<?php echo $cat['fid'];?>" class="sub_forum">
<ul><?php if(is_array($cat['forums'])) foreach($cat['forums'] as $forumid) { $forum=$forumlist[$forumid];?><li class="cfix">
<div class="f_icon">
<?php if($forum['icon']) { ?>
<?php echo $forum['icon'];?>
<?php } else { ?>
<img src="<?php echo IMGDIR;?>/forum<?php if($forum['folder']) { ?>_new<?php } ?>.gif" alt="<?php echo $forum['name'];?>" />
<?php } ?>
</div>
<a class="forum_a" href="forum.php?mod=forumdisplay&amp;fid=<?php echo $forum['fid'];?>">
<h3>
<span class="y f_count"><?php echo dnumber($forum['threads']); ?> / <?php echo dnumber($forum['posts']); ?></span>
<?php echo $forum['name'];?>
<?php if($forum['todayposts'] > 0) { ?>
<em class="num">(<?php echo $forum['todayposts'];?>)</em>
<?php } ?>
</h3>
<p><?php echo $forum['description'];?></p>
</a>
</li>
<?php } ?>
</ul>
</div>
</div>
<?php } ?>

<!-- main forumlist end -->
<?php if(!empty($_G['setting']['pluginhooks']['index_middle_mobile'])) echo $_G['setting']['pluginhooks']['index_middle_mobile'];?>
<script type="text/javascript">
(function() {
<?php if(!$_G['setting']['mobile']['mobileforumview']) { ?>
$('.sub_forum').css('display', 'block');
<?php } else { ?>
$('.sub_forum').css('display', 'none');
<?php } ?>
$('.subforumshow').on('click', function() {
var obj = $(this);
var subobj = $(obj.attr('href'));
if(subobj.css('display') == 'none') {
subobj.css('display', 'block');
obj.find('img').attr('src', 'template/moke8_doormobile/touch/images/img/collapsed_yes.png');
} else {
subobj.css('display', 'none');
obj.find('img').attr('src', 'template/moke8_doormobile/touch/images/img/collapsed_no.png');
}
});
 })();
</script>
<?php } ?>
</div><?php include template('common/btfixed'); include template('common/footer'); ?>