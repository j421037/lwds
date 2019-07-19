<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('view_10');
0
|| checktplrefresh('data/diy/./template/jeavi_moment//portal/view_10.htm', './template/jeavi_moment/portal/portal_comment.htm', 1562243866, 'diy', './data/template/2_diy_portal_view_10.tpl.php', 'data/diy/./template/jeavi_moment/', 'portal/view_10')
|| checktplrefresh('data/diy/./template/jeavi_moment//portal/view_10.htm', './template/default/common/seccheck.htm', 1562243866, 'diy', './data/template/2_diy_portal_view_10.tpl.php', 'data/diy/./template/jeavi_moment/', 'portal/view_10')
;?><?php include template('common/header'); ?><script src="<?php echo $_G['setting']['jspath'];?>forum_viewthread.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript">zoomstatus = parseInt(<?php echo $_G['setting']['zoomstatus'];?>), imagemaxwidth = '<?php echo $_G['setting']['imagemaxwidth'];?>', aimgcount = new Array();</script>
<div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="首页"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em>
<a href="<?php echo $_G['setting']['navs']['1']['filename'];?>"><?php echo $_G['setting']['navs']['1']['navname'];?></a> <em>&rsaquo;</em><?php if(is_array($cat['ups'])) foreach($cat['ups'] as $value) { ?><a href="<?php echo getportalcategoryurl($value['catid']); ?>"><?php echo $value['catname'];?></a><em>&rsaquo;</em>
<?php } ?>
<a href="<?php echo getportalcategoryurl($cat['catid']); ?>"><?php echo $cat['catname'];?></a> <em>&rsaquo;</em>
查看内容
</div>
</div>

<?php if(!empty($_G['setting']['pluginhooks']['view_article_top'])) echo $_G['setting']['pluginhooks']['view_article_top'];?><?php echo adshow("text/wp a_t");?><style id="diy_style" type="text/css"></style>
<div class="wp">
<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
</div>
<div id="ct" class="ct2 wp cl">
<div class="mn">
<div class="bm vw">
<div class="h hm">
<h1 class="ph"><?php echo $article['title'];?> <?php if($article['status'] == 1) { ?>(待审核)<?php } elseif($article['status'] == 2) { ?>(已忽略)<?php } ?></h1>
<p class="xg1">
<?php echo $article['dateline'];?><span class="pipe">|</span>
发布者: <a href="home.php?mod=space&amp;uid=<?php echo $article['uid'];?>"><?php echo $article['username'];?></a><span class="pipe">|</span>
查看: <em id="_viewnum"><?php if($article['viewnum'] > 0) { ?><?php echo $article['viewnum'];?><?php } else { ?>0<?php } ?></em><span class="pipe">|</span>
评论: <?php if($article['commentnum'] > 0) { ?><a href="<?php echo $common_url;?>" title="查看全部评论"><em id="_commentnum"><?php echo $article['commentnum'];?></em></a><?php } else { ?>0<?php } if($article['author']) { ?><span class="pipe">|</span>原作者: <?php echo $article['author'];?><?php } if($article['from']) { ?><span class="pipe">|</span>来自: <?php if($article['fromurl']) { ?><a href="<?php echo $article['fromurl'];?>" target="_blank"><?php echo $article['from'];?></a><?php } else { ?><?php echo $article['from'];?><?php } } if($_G['group']['allowmanagearticle'] || ($_G['group']['allowpostarticle'] && $article['uid'] == $_G['uid'] && (empty($_G['group']['allowpostarticlemod']) || $_G['group']['allowpostarticlemod'] && $article['status'] == 1)) || $categoryperm[$value['catid']]['allowmanage']) { ?>
<span class="pipe">|</span><a href="portal.php?mod=portalcp&amp;ac=article&amp;op=edit&amp;aid=<?php echo $article['aid'];?>">编辑</a>
<?php if($article['status']>0 && ($_G['group']['allowmanagearticle'] || $categoryperm[$value['catid']]['allowmanage'])) { ?>
<span class="pipe">|</span><a href="portal.php?mod=portalcp&amp;ac=article&amp;op=verify&amp;aid=<?php echo $article['aid'];?>" id="article_verify_<?php echo $article['aid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">审核</a>
<?php } else { ?>
<span class="pipe">|</span><a href="portal.php?mod=portalcp&amp;ac=article&amp;op=delete&amp;aid=<?php echo $article['aid'];?>" id="article_delete_<?php echo $article['aid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">删除</a>
<?php } } ?>
<?php if(!empty($_G['setting']['pluginhooks']['view_article_subtitle'])) echo $_G['setting']['pluginhooks']['view_article_subtitle'];?>
</p>
</div>

<!--[diy=diysummarytop]--><div id="diysummarytop" class="area"></div><!--[/diy]-->

<?php if($article['summary'] && empty($cat['notshowarticlesummay'])) { ?><div class="s"><div><strong>摘要</strong>: <?php echo $article['summary'];?></div><?php if(!empty($_G['setting']['pluginhooks']['view_article_summary'])) echo $_G['setting']['pluginhooks']['view_article_summary'];?></div><?php } ?>

<!--[diy=diysummarybottom]--><div id="diysummarybottom" class="area"></div><!--[/diy]-->

<div class="d">

<!--[diy=diycontenttop]--><div id="diycontenttop" class="area"></div><!--[/diy]-->

<table cellpadding="0" cellspacing="0" class="vwtb"><tr><td id="article_content"><?php echo adshow("article/a_af/1");?><?php if($content['title']) { ?>
<div class="vm_pagetitle xw1"><?php echo $content['title'];?></div>
<?php } ?>
<?php echo $content['content'];?>
</td></tr></table>
<?php if(!empty($_G['setting']['pluginhooks']['view_article_content'])) echo $_G['setting']['pluginhooks']['view_article_content'];?>
<?php if($multi) { ?><div class="ptw pbw cl"><?php echo $multi;?></div><?php } ?>

<!--[diy=diycontentbottom]--><div id="diycontentbottom" class="area"></div><!--[/diy]-->

<script src="<?php echo $_G['setting']['jspath'];?>home.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<div id="click_div"><?php include template('home/space_click'); ?></div>

<?php if(!empty($contents)) { ?>
<div id="inner_nav" class="ptn xs1">
<h3>本文导航</h3>
<ul class="xl xl2 cl"><?php if(is_array($contents)) foreach($contents as $key => $value) { $curpage = $key+1;?><?php $inner_view_url = helper_page::mpurl($viewurl, '&page=', $curpage);?><li>&bull; <a href="<?php echo $inner_view_url;?>"<?php if($key === $start) { ?> class="xi1"<?php } ?>>第 <?php echo $curpage;?> 页 <?php echo $value['title'];?></a></li>
<?php } ?>
</ul>
</div>
<?php } ?>

<!--[diy=diycontentclickbottom]--><div id="diycontentclickbottom" class="area"></div><!--[/diy]-->

</div>
<?php if(!empty($aimgs[$content['pid']])) { ?>
<script type="text/javascript" reload="1">aimgcount[<?php echo $content['pid'];?>] = [<?php echo implode(',', $aimgs[$content['pid']]);; ?>];attachimgshow(<?php echo $content['pid'];?>);</script>
<?php } if(!empty($_G['setting']['pluginhooks']['view_share_method'])) { ?>
<div class="tshare cl">
<strong>!viewthread_share_to!:</strong>
<?php if(!empty($_G['setting']['pluginhooks']['view_share_method'])) echo $_G['setting']['pluginhooks']['view_share_method'];?>
</div>
<?php } ?>

<div class="o cl ptm pbm">
<?php if(!empty($_G['setting']['pluginhooks']['view_article_op_extra'])) echo $_G['setting']['pluginhooks']['view_article_op_extra'];?>
<a href="home.php?mod=spacecp&amp;ac=favorite&amp;type=article&amp;id=<?php echo $article['aid'];?>&amp;handlekey=favoritearticlehk_<?php echo $article['aid'];?>" id="a_favorite" onclick="showWindow(this.id, this.href, 'get', 0);" class="oshr ofav">收藏</a>
<?php if(helper_access::check_module('share')) { ?>
<a href="home.php?mod=spacecp&amp;ac=share&amp;type=article&amp;id=<?php echo $article['aid'];?>&amp;handlekey=sharearticlehk_<?php echo $article['aid'];?>" id="a_share" onclick="showWindow(this.id, this.href, 'get', 0);" class="oshr">分享</a>
<?php } ?>
<a href="misc.php?mod=invite&amp;action=article&amp;id=<?php echo $article['aid'];?>" id="a_invite" onclick="showWindow('invite', this.href, 'get', 0);" class="oshr oivt">邀请</a>
<?php if($_G['group']['allowmanagearticle'] || ($_G['group']['allowpostarticle'] && $article['uid'] == $_G['uid'] && (empty($_G['group']['allowpostarticlemod']) || $_G['group']['allowpostarticlemod'] && $article['status'] == 1)) || $categoryperm[$value['catid']]['allowmanage']) { ?>
<a href="portal.php?mod=portalcp&amp;ac=article&amp;op=edit&amp;aid=<?php echo $article['aid'];?>">编辑</a><span class="pipe">|</span>
<a  id="related_article" href="portal.php?mod=portalcp&amp;ac=related&amp;aid=<?php echo $article['aid'];?>&amp;catid=<?php echo $article['catid'];?>&amp;update=1" onclick="showWindow(this.id, this.href, 'get', 0);return false;">添加相关文章</a><span class="pipe">|</span>
<?php if($article['status']>0 && ($_G['group']['allowmanagearticle'] || $categoryperm[$value['catid']]['allowmanage'])) { ?>
<a href="portal.php?mod=portalcp&amp;ac=article&amp;op=verify&amp;aid=<?php echo $article['aid'];?>" id="article_verify_<?php echo $article['aid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">审核</a>
<?php } else { ?>
<a href="portal.php?mod=portalcp&amp;ac=article&amp;op=delete&amp;aid=<?php echo $article['aid'];?>" id="article_delete_<?php echo $article['aid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">删除</a>
<?php } ?>
<span class="pipe">|</span>
<?php } if($article['status']==0 && ($_G['group']['allowdiy']  || getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 5) || getstatus($_G['member']['allowadmincp'], 6))) { ?>
<a href="portal.php?mod=portalcp&amp;ac=portalblock&amp;op=recommend&amp;idtype=aid&amp;id=<?php echo $article['aid'];?>" onclick="showWindow('recommend', this.href, 'get', 0)">模块推送</a><span class="pipe">|</span>
<?php } ?>
</div>
<?php if($article['preaid'] || $article['nextaid']) { ?>
<div class="pren pbm cl">
<?php if($article['prearticle']) { ?><em>上一篇：<a href="<?php echo $article['prearticle']['url'];?>"><?php echo $article['prearticle']['title'];?></a></em><?php } if($article['nextarticle']) { ?><em>下一篇：<a href="<?php echo $article['nextarticle']['url'];?>"><?php echo $article['nextarticle']['title'];?></a></em><?php } ?>
</div>
<?php } ?>
</div>

<!--[diy=diycontentrelatetop]--><div id="diycontentrelatetop" class="area"></div><!--[/diy]--><?php echo adshow("article/mbm hm/2");?><?php echo adshow("article/mbm hm/3");?><?php if($article['related']) { ?>
<div id="related_article" class="bm">
<div class="bm_h cl">
<h3>相关阅读</h3>
</div>
<div class="bm_c">
<ul class="xl xl2 cl" id="raid_div"><?php if(is_array($article['related'])) foreach($article['related'] as $raid => $rvalue) { ?><input type="hidden" value="<?php echo $raid;?>" />
<li>&bull; <a href="<?php echo $rvalue['uri'];?>"><?php echo $rvalue['title'];?></a></li>
<?php } ?>
</ul>
</div>
</div>
<?php } ?>

<!--[diy=diycontentrelate]--><div id="diycontentrelate" class="area"></div><!--[/diy]-->

<?php if($article['allowcomment']==1) { $data = &$article?><div id="comment" class="bm">
  <div class="portal_tit cl"> 
    <em>���� <?php echo $data['commentnum'];?> �˲���</em>
    
    <h3>��Ա����</h3>
  </div>
  <div id="comment_ul"> 
    
    <?php if(!empty($pricount)) { ?>
    <p class="mtn mbn y">提示：本页有 <?php echo $pricount;?> 个评论因未通过审核而被隐藏</p>
    <?php } ?> 
    
    <?php if(!$data['htmlmade']) { ?>
    
    
    
    <form id="cform" name="cform" action="<?php echo $form_url;?>" method="post" autocomplete="off">
<div class="tedt" id="tedt">
<div class="area">
<textarea name="message" rows="3" class="pt" id="message"  <?php if(!$_G['uid']) { ?> placeholder="��¼����ܷ������ݼ����뻥��"<?php } ?> onkeydown="ctrlEnter(event, 'commentsubmit_btn');"></textarea>
</div>
</div>
                <div class="mb15 cl">


<?php if($secqaacheck || $seccodecheck) { ?><?php
$sectpl = <<<EOF
<sec> <span id="sec<hash>" onclick="showMenu(this.id);"><sec></span><div id="sec<hash>_menu" class="p_pop p_opt" style="display:none"><sec></div>
EOF;
?>
<div class="mtm z"><?php $sechash = !isset($sechash) ? 'S'.($_G['inajax'] ? 'A' : '').$_G['sid'] : $sechash.random(3);
$sectpl = str_replace("'", "\'", $sectpl);?><?php if($secqaacheck) { ?>
<span id="secqaa_q<?php echo $sechash;?>"></span>		
<script type="text/javascript" reload="1">updatesecqaa('q<?php echo $sechash;?>', '<?php echo $sectpl;?>', '<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>');</script>
<?php } if($seccodecheck) { ?>
<span id="seccode_c<?php echo $sechash;?>"></span>		
<script type="text/javascript" reload="1">updateseccode('c<?php echo $sechash;?>', '<?php echo $sectpl;?>', '<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>');</script>
<?php } ?></div>
<?php } if(!empty($topicid) ) { ?>
<input type="hidden" name="referer" value="<?php echo $topicurl;?>#comment" />
<input type="hidden" name="topicid" value="<?php echo $topicid;?>">
<?php } else { ?>
<input type="hidden" name="portal_referer" value="<?php echo $viewurl;?>#comment">
<input type="hidden" name="referer" value="<?php echo $viewurl;?>#comment" />
<input type="hidden" name="id" value="<?php echo $data['id'];?>" />
<input type="hidden" name="idtype" value="<?php echo $data['idtype'];?>" />
<input type="hidden" name="aid" value="<?php echo $aid;?>">
<?php } ?>
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
<input type="hidden" name="replysubmit" value="true">
<input type="hidden" name="commentsubmit" value="true" />
<p class="pt10 cl y"><button type="submit" name="commentsubmit_btn" id="commentsubmit_btn" value="true" class="pn y"><strong>评论</strong></button></p>
                </div>
</form>
    
    
    

   
    
        <script type="text/javascript">
    jQuery(function(){
jQuery("#tedt .pt").focus(function(){
  jQuery(this).addClass("bgchange");
}).blur(function(){
  jQuery(this).removeClass("bgchange");
});
    });
    </script> 

    
    <?php } ?> 
    <ul>
    <?php if(is_array($commentlist)) foreach($commentlist as $comment) { ?> 
    <?php include template('portal/comment_li'); ?> 
    <?php if(!empty($aimgs[$comment['cid']])) { ?> 
    <script type="text/javascript" reload="1">aimgcount[<?php echo $comment['cid'];?>] = [<?php echo implode(',', $aimgs[$comment['cid']]);; ?>];attachimgshow(<?php echo $comment['cid'];?>);</script> 
    <?php } ?> 
    <?php } ?>
    </ul>
    <p class="ptn cl" style=" text-align:center">
        <?php if($data['commentnum']) { ?><a href="<?php echo $common_url;?>" class="xi2">�鿴ȫ������>></a><?php } ?>
      </p>
  </div>
</div>
<?php } ?>

<!--[diy=diycontentcomment]--><div id="diycontentcomment" class="area"></div><!--[/diy]-->


</div>
<div class="sd pph">

<?php if(!empty($_G['setting']['pluginhooks']['view_article_side_top'])) echo $_G['setting']['pluginhooks']['view_article_side_top'];?>

<div class="drag">
<!--[diy=diyrighttop]--><div id="diyrighttop" class="area"></div><!--[/diy]-->
</div>

<?php if($cat['others']) { ?>
<div class="bm">
<div class="bm_h cl">
<h2>相关分类</h2>
</div>
<div class="bm_c">
<ul class="xl xl2 cl"><?php if(is_array($cat['others'])) foreach($cat['others'] as $value) { ?><li><a href="<?php echo getportalcategoryurl($value['catid']); ?>"><?php echo $value['catname'];?></a></li>
<?php } ?>
</ul>
</div>
</div>
<?php } if($cat['subs']) { ?>
<div class="bm">
<div class="bm_h cl">
<h2>下级分类</h2>
</div>
<div class="bm_c">
<ul class="xl xl2 cl"><?php if(is_array($cat['subs'])) foreach($cat['subs'] as $value) { ?><li><a href="<?php echo getportalcategoryurl($value['catid']); ?>"><?php echo $value['catname'];?></a></li>
<?php } ?>
</ul>
</div>
</div>
<?php } ?>

<div class="drag">
<!--[diy=diy2]--><div id="diy2" class="area"></div><!--[/diy]-->
</div>

<?php if(!empty($_G['setting']['pluginhooks']['view_article_side_bottom'])) echo $_G['setting']['pluginhooks']['view_article_side_bottom'];?>

</div>
</div>

<?php if($_G['relatedlinks']) { ?>
<script type="text/javascript">
var relatedlink = [];<?php if(is_array($_G['relatedlinks'])) foreach($_G['relatedlinks'] as $key => $link) { ?>relatedlink[<?php echo $key;?>] = {'sname':'<?php echo $link['name'];?>', 'surl':'<?php echo $link['url'];?>'};
<?php } ?>
relatedlinks('article_content');
</script>
<?php } ?>

<div class="wp mtn">
<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
</div>
<input type="hidden" id="portalview" value="1"><?php include template('common/footer'); ?>