<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('portal_topic_content_1');
block_get('44,48');?><?php include template('common/header'); ?><div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="棣栭〉"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em> <?php echo $topic['title'];?>
</div>
</div>
<link id="style_css" rel="stylesheet" type="text/css" href="static/topic/t1/style.css">
<style id="diy_style" type="text/css">#portal_block_44 .dxb_bc {  margin-top:30px !important;margin-right:20px !important;margin-bottom:30px !important;margin-left:20px !important;}</style>
<div id="widgets">
</div>
<div class="wp">
<!--[diy=diypage]--><div id="diypage" class="area"><div id="frame1" class="frame move-span frame-1 cl"><div class="frame-title title"><span class="titletext">广西六万大山森林公园简介</span></div><div id="frame1_left" class="column frame-1-c"><div id="frame1_left_temp" class="move-span temp"></div><?php block_display('44');?><?php block_display('48');?></div></div></div><!--[/diy]-->
<?php if($topic['allowcomment']==1) { $data = &$topic;
$common_url = "portal.php?mod=comment&amp;id=$topicid&amp;idtype=topicid";
$form_url = "portal.php?mod=portalcp&amp;ac=comment";
$commentlist = portaltopicgetcomment($topicid);?><?php include template('portal/portal_comment'); } ?>
</div><?php include template('common/footer'); ?>