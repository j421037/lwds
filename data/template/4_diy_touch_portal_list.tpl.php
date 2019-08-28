<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('list');?><?php include template('common/header'); $list = array();?><?php $wheresql = category_get_wheresql($cat);?><?php $list = category_get_list($cat, $wheresql, $page);?><header class="header">
<a class="goBack fl" href="javascript:history.back()">∑µªÿ</a>
<?php if($cat['others']) { ?><a class="topSort fr" href="#subMenu">∑÷¿‡</a><?php } ?>
<h1><?php echo $navtitle;?></h1>
</header>
<div class="container"><?php $list = category_get_list($cat, $wheresql, $page);?><?php if($cat['subs']) { ?>
<!--œ¬º∂∑÷¿‡-->
<div class="nvBar">
<div class="subNv">
<ul><?php $i = 1;?><?php if(is_array($cat['subs'])) foreach($cat['subs'] as $value) { if($i != 1) { } ?><li><a href="<?php echo $portalcategory[$value['catid']]['caturl'];?>"><?php echo $value['catname'];?></a></li><?php $i--;?><?php } ?>
</ul>
</div>
</div>
<?php } if($cat['others']) { ?>
<div id="subMenu" class="subMenu">
<div class="subMenuBox">
<h3>œ‡πÿ∑÷¿‡</h3>
<ul><?php if(is_array($cat['others'])) foreach($cat['others'] as $value) { ?><li><a href="<?php echo $portalcategory[$value['catid']]['caturl'];?>"><?php echo $value['catname'];?></a></li>
<?php } ?>
</ul>
</div>
</div>
<script type="text/javascript">
$(function() {
$('#subMenu').mmenu({
autoHeight	: true,
navbar		: {
title 	: false
},
offCanvas	: {
position	: "right",
zposition	: "front",
modal		: true
}
});
});
</script>
<?php } ?>

<div class="xr_article_list">
<ul><?php if(is_array($list['list'])) foreach($list['list'] as $value) { $highlight = article_title_style($value);?><?php $article_url = fetch_article_url($value);?><li <?php if(!$value['pic']) { ?>class="noPic"<?php } ?>>
<a href="<?php echo $article_url;?>" <?php echo $highlight;?>>
<h3><?php echo $value['title'];?><?php if($value['status'] == 1) { ?>(ÂæÖÂÆ°Ê†∏)<?php } ?></h3>
<div class="article_info">
<?php if($value['pic']) { ?>
<div class="artPic">
<img src="<?php echo $value['pic'];?>" alt="<?php echo $value['title'];?>" class="tn" />
</div>
<?php } ?>
<p><?php echo $value['summary'];?></p>
<div class="article_attr">
<span class="fr"> <?php echo $value['dateline'];?></span>
<?php if($value['catname'] && $cat['subs']) { ?><label><?php echo $value['catname'];?></label><?php } ?>
</div>
</div>
</a>
</li>
<?php } ?>
</ul>
</div>
<?php if($list['multi']) { ?><div class="pgs cl"><?php echo $list['multi'];?></div><?php } ?>

</div><?php include template('common/btfixed'); include template('common/footer'); ?>