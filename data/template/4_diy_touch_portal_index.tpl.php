<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('index');
block_get('37,41,39,40,38');?><?php include template('common/header'); ?><header class="header p_header">
<a class="topMenu fl" href="#mainNv">�˵�</a>
<?php if(!$_G['uid'] && !$_G['connectguest']) { ?>
<a class="topLogin fr" href="member.php?mod=logging&amp;action=login"></a>
<?php } else { ?>
<a class="topLogin fr" href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>&amp;do=profile&amp;mycenter=1"><?php echo avatar($_G[uid]);?></a>
<?php } ?>
<h1 class="logo"><img  src="template/moke8_doormobile/touch/images/img/logo.png"></h1>
</header>
<div class="container">
<script src="template/moke8_doormobile/touch/images/js/TouchSlide.1.1.js" type="text/javascript" type="text/javascript"></script>
<!--��������-->
<div class="nvBar">
<div class="subNv">
<ul>
<li><a href="portal.php?mod=list&amp;catid=1">���۾���</a></li>
<li><a href="portal.php?mod=list&amp;catid=4">��������</a></li>
<li><a href="portal.php?mod=list&amp;catid=5">����</a></li>
<li><a href="portal.php?mod=list&amp;catid=6">���</a></li>
                <li><a href="portal.php?mod=list&amp;catid=7">��ɫָ��</a></li>
</ul>
</div>
</div>

<!--����ͼ-->
<div class="xrSlider" id="xrSlider"><?php block_display('37');?></div>
<script type="text/javascript">
TouchSlide({ 
slideCell:"#xrSlider",
titCell:".sliderNum li",
mainCell:".sliderCon ul", 
effect:"leftLoop",
autoPlay:true //�Զ�����
});
</script>

<!--�����Ƽ�-->
<div class="hotPosts cfix pb"><?php block_display('41');?></div>

<!--ͼ�ľ�ѡ-->
<div class="pb">
<div class="hdTit cfix">
<h2>ͼ�ľ�ѡ</h2>
</div>
<div class="ausPt cfix" id="ausPt"><?php block_display('39');?></div>
<script type="text/javascript">
TouchSlide({ 
slideCell:"#ausPt",
titCell:".ausPtNum li",
mainCell:".ausPtCon", 
effect:"leftLoop"
});
</script>
</div>


<!--��������-->
<div class="pb">
<div class="hdTit cfix">
<h2>��������</h2>
<span><a href="forum.php?mod=guide&amp;view=newthread">����&gt;&gt;</a></span>
</div>
<div class="newPosts"><?php block_display('40');?></div>
</div>

<!--��鵼��-->
<div class="pb">
<div class="hdTit cfix">
<h2>��鵼��</h2>
<span><a href="forum.php?forumlist=1&amp;mobile=2">����&gt;&gt;</a></span>
</div>
<div class="coluNv cfix"><?php block_display('38');?></div>
</div>

<?php if(!$_G['uid'] && !$_G['connectguest']) { ?>
<div class="pb indexLogin">
<p>��¼֮�����������๦�ܣ�</p>
<a href="member.php?mod=logging&amp;action=login">������¼</a>
</div>
<?php } ?>
</div><?php include template('common/btfixed'); include template('common/footer'); ?>