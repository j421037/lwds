<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('portal_topic_content_2');
block_get('119,90,95,104,97,98,99,101');?><?php include template('common/header'); ?><style type="text/css">
<!--
.slideshow li{ list-style:none; float:left; width:196px;}
.slideshow_zq li{ text-align:right;}
.slideshow_239 li{ width:236px; margin:0 1px;}
.slideshow_196 li{ width:196px; margin:0 1px;}
div.jqZoomTitle
{
z-index:5000;
text-align:center;
font-size:11px;
font-family:Tahoma;
height:16px;
padding-top:2px;
position:absolute;
top: 0px;
left: 0px;
width: 100%;
color: #FFF;
background: #999;

}

.jqZoomPup img
{
border: 0px;
}

.preload{
-moz-opacity:0.8;
opacity: 0.8;
   filter: alpha(opacity = 80);
   background-image: url(../images/zoomloader.gif);
   background-repeat: no-repeat;
}
-->
</style>
<script type="text/javascript">
$(function() {
var options =
{
zoomWidth: 600, //
zoomHeight: 450,//
zoomType:'reverse'
};
$(".jqzoom").jqzoom(options);
});
</script>
<div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="棣栭〉"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em> <?php echo $topic['title'];?>
</div>
</div>
<link id="style_css" rel="stylesheet" type="text/css" href="static/topic/t1/style.css">
<style id="diy_style" type="text/css"></style>
<div id="widgets">
</div>
<div class="wp">
<!--[diy=diypage]--><div id="diypage" class="area"><div id="frame5uXTVO" class="frame move-span cl frame-1-2"><div class="frame-title title"><span class="titletext">酒店简介</span></div><div id="frame5uXTVO_left" class="column frame-1-2-l"><div id="frame5uXTVO_left_temp" class="move-span temp"></div><?php block_display('119');?></div><div id="frame5uXTVO_center" class="column frame-1-2-r"><div id="frame5uXTVO_center_temp" class="move-span temp"></div><?php block_display('90');?></div></div><div id="framepwb159" class="frame move-span cl frame-2-1"><div class="title frame-title"><span class="jqzoom">酒店外观</span></div><div id="framepwb159_left" class="column frame-2-1-l"><div id="framepwb159_left_temp" class="move-span temp"></div><?php block_display('95');?></div><div id="framepwb159_center" class="column frame-2-1-r"><div id="framepwb159_center_temp" class="move-span temp"></div><?php block_display('104');?></div></div><div id="frame2ke4Ln" class="frame move-span cl frame-1"><div class="title frame-title"><span class="titletext">酒店客房</span></div><div id="frame2ke4Ln_left" class="column frame-1-c"><div id="frame2ke4Ln_left_temp" class="move-span temp"></div><?php block_display('97');?></div></div><div id="frame5smCvH" class="frame move-span cl frame-1-2"><div class="title frame-title"><span class="jqzoom">酒店套房</span></div><div id="frame5smCvH_left" class="column frame-1-2-l"><div id="frame5smCvH_left_temp" class="move-span temp"></div><?php block_display('98');?></div><div id="frame5smCvH_center" class="column frame-1-2-r"><div id="frame5smCvH_center_temp" class="move-span temp"></div><?php block_display('99');?></div></div><div id="frame8nM6K6" class="frame move-span cl frame-1"><div class="title frame-title"><span class="jqzoom">酒店别墅区</span></div><div id="frame8nM6K6_left" class="column frame-1-c"><div id="frame8nM6K6_left_temp" class="move-span temp"></div><?php block_display('101');?></div></div></div><!--[/diy]-->
<?php if($topic['allowcomment']==1) { $data = &$topic;
$common_url = "portal.php?mod=comment&amp;id=$topicid&amp;idtype=topicid";
$form_url = "portal.php?mod=portalcp&amp;ac=comment";
$commentlist = portaltopicgetcomment($topicid);?><?php include template('portal/portal_comment'); } ?>
</div><?php include template('common/footer'); ?>