<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('guide');
0
|| checktplrefresh('./template/moke8_doormobile/touch/forum/guide.htm', './template/moke8_doormobile/touch/forum/guide_list_row.htm', 1588029617, '4', './data/template/4_4_touch_forum_guide.tpl.php', './template/moke8_doormobile', 'touch/forum/guide')
;
block_get('26');?><?php include template('common/header'); ?><!-- header start -->
<header class="header">
<?php if($_G['setting']['domain']['app']['mobile']) { $nav = 'http://'.$_G['setting']['domain']['app']['mobile'];?><?php } else { $nav = "forum.php";?><?php } ?>
<a class="topMenu fl" href="#mainNv">�˵�</a>
<h1>����</h1>
</header>
<!-- header end -->

<div class="container">
<script src="template/moke8_doormobile/touch/images/js/TouchSlide.1.1.js" type="text/javascript" type="text/javascript"></script>
<!--��������-->
<div class="nvBar">
<div class="subNv">
<ul>
<li><a href="forum.php?mod=forumdisplay&amp;fid=54&amp;mobile=2">��������</a></li>
<li><a href="forum.php?mod=forumdisplay&amp;fid=55&amp;mobile=2">��Ƶչʾ</a></li>
<li><a href="portal.php?mod=list&amp;catid=1&amp;mobile=2">������Ѷ</a></li>
<li><a href="#">�Զ�����</a></li>
<li><a href="forum.php?mod=guide&amp;view=hot&amp;mobile=2">�����Ƽ�</a></li>
<li><a href="#">������Ϣ</a></li>
<li><a href="#">ͬ�ǻ</a></li>
<li><a href="#">��ְ��Ƹ</a></li>
</ul>
</div>
</div>

<!--����ͼ-->
<div class="xrSlider" id="xrSlider"><?php block_display('26');?></div>
<script type="text/javascript">
TouchSlide({ 
slideCell:"#xrSlider",
titCell:".sliderNum li", //�����Զ���ҳ autoPage:true ����ʱ���� titCell Ϊ����Ԫ�ذ�����
mainCell:".sliderCon ul", 
effect:"leftLoop",
autoPlay:true //�Զ�����
});
</script>

<div class="forumListTab cfix">
<ul>
<li <?php echo $currentview['newthread'];?>><a href="forum.php?mod=guide&amp;view=newthread">最新发表</a></li>
<li <?php echo $currentview['hot'];?>><a href="forum.php?mod=guide&amp;view=hot">最新热门</a></li>
<li <?php echo $currentview['digest'];?>><a href="forum.php?mod=guide&amp;view=digest">最新精华</a></li>
<li <?php echo $currentview['new'];?>><a href="forum.php?mod=guide&amp;view=new">最新回复</a></li>
</ul>
</div>

<!-- main threadlist start -->
<div class="threadlist"><?php if(is_array($data)) foreach($data as $key => $list) { if($list['threadcount']) { ?>
<ul><?php if(is_array($list['threadlist'])) foreach($list['threadlist'] as $key => $thread) { ?><li>
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>&amp;fromguid=hot&amp;<?php if($_GET['archiveid']) { ?>archiveid=<?php echo $_GET['archiveid'];?>&amp;<?php } ?>extra=<?php echo $extra;?>">
<?php if(!$thread['forumstick'] && $thread['closed'] > 1 && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])) { $thread[tid]=$thread[closed];?><?php } ?>

<div class="threadListTit">
<div class="h_avatar"><?php echo avatar($thread[authorid],small);?></div>
<h4>
<div class="count y">
<span class="views icon"><?php if($thread['isgroup'] != 1) { ?><?php echo $thread['replies'];?><?php } else { ?><?php echo $groupnames[$thread['tid']]['replies'];?><?php } ?></span>
<span class="replies icon"><?php echo $thread['replies'];?></span>
</div>
<?php echo $thread['author'];?>
<!--
<?php if(in_array($thread['displayorder'], array(1, 2, 3, 4))) { ?>
<span class="icon_top"><img src="<?php echo STATICURL;?>image/mobile/images/icon_top.png"></span>
<?php } elseif($thread['digest'] > 0) { ?>
<span class="icon_top"><img src="<?php echo STATICURL;?>image/mobile/images/icon_digest.png"></span>
<?php } elseif($thread['attachment'] == 2 && $_G['setting']['mobile']['mobilesimpletype'] == 0) { ?>
<span class="icon_tu"><img src="<?php echo STATICURL;?>image/mobile/images/icon_tu.png"></span>
<?php } ?>
-->
</h4>
<p>������ <?php echo $thread['dateline'];?></p>
</div>
<h3 class="threadSubject">
<?php echo $thread['typehtml'];?> <?php echo $thread['sorthtml'];?> <?php echo $thread['subject'];?>
</h3>
</a>
</li>

<?php } ?>
</ul>
<?php } else { ?>
<p class="noData">暂时还没有帖子</p>
<?php } ?>


  
<?php } ?>
</div>
<!-- main threadlist end -->
<?php echo $multipage;?>
<div class="pullrefresh" style="display:none;"></div>
</div><?php include template('common/btfixed'); include template('common/footer'); ?>