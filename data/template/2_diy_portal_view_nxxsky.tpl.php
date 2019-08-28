<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('view_nxxsky');
0
|| checktplrefresh('./template/jeavi_moment/portal/view_nxxsky.htm', './template/jeavi_moment/portal/portal_comment.htm', 1563935704, 'diy', './data/template/2_diy_portal_view_nxxsky.tpl.php', './template/jeavi_moment', 'portal/view_nxxsky')
|| checktplrefresh('./template/jeavi_moment/portal/view_nxxsky.htm', './template/default/common/seccheck.htm', 1563935704, 'diy', './data/template/2_diy_portal_view_nxxsky.tpl.php', './template/jeavi_moment', 'portal/view_nxxsky')
;?><?php include template('common/header'); ?><!--[name]Moment - ×ÊÑ¶ÄÚÒ³[/name]-->

<script src="<?php echo $_G['setting']['jspath'];?>forum_viewthread.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript">zoomstatus = parseInt(<?php echo $_G['setting']['zoomstatus'];?>), imagemaxwidth = '<?php echo $_G['setting']['imagemaxwidth'];?>', aimgcount = new Array();</script>

<div id="pt" class="bm cl">
  <div class="z"> <a href="./" class="nvhm" title="é¦–é¡µ"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em> <a href="<?php echo $_G['setting']['navs']['1']['filename'];?>"><?php echo $_G['setting']['navs']['1']['navname'];?></a> <em>&rsaquo;</em> 
    <?php if(is_array($cat['ups'])) foreach($cat['ups'] as $value) { ?> 
    <a href="<?php echo getportalcategoryurl($value['catid']); ?>"><?php echo $value['catname'];?></a><em>&rsaquo;</em> 
    <?php } ?> 
    <a href="<?php echo getportalcategoryurl($cat['catid']); ?>"><?php echo $cat['catname'];?></a> <em>&rsaquo;</em> æŸ¥çœ‹å†…å®¹ </div>
</div>

<?php if(!empty($_G['setting']['pluginhooks']['view_article_top'])) echo $_G['setting']['pluginhooks']['view_article_top'];?> <?php echo adshow("text/wp a_t");?><style id="diy_style" type="text/css">
</style>
<div class="wp"> 
  <!--[diy=diy1]-->
  <div id="diy1" class="area"></div>
  <!--[/diy]--> 
</div>
<div id="ct" class="ct2 wp cl">
  <div class="mn">
    <div class="bm vw">
      <div class="h hm">
        <h1 id='title' class="ph"><?php echo $article['title'];?> <?php if($article['status'] == 1) { ?>(å¾…å®¡æ ¸)<?php } elseif($article['status'] == 2) { ?>(å·²å¿½ç•¥)<?php } ?></h1>
        <p class="xg1"> <?php echo $article['dateline'];?><span class="pipe">|</span> <a href="home.php?mod=space&amp;uid=<?php echo $article['uid'];?>">å‘å¸ƒè€…<!--<?php echo $article['username'];?>--></a><span class="pipe">|</span> æŸ¥çœ‹: <em id="_viewnum"><?php if($article['viewnum'] > 0) { ?><?php echo $article['viewnum'];?><?php } else { ?>0<?php } ?></em><span class="pipe">|</span> è¯„è®º: <?php if($article['commentnum'] > 0) { ?><em id="_commentnum"><?php echo $article['commentnum'];?></em><?php } else { ?>0<?php } ?> 
          <?php if($article['author']) { ?><span class="pipe">|</span>åŸä½œè€…: <?php echo $article['author'];?><?php } ?> 
          <?php if($article['from']) { ?><span class="pipe">|</span>æ¥è‡ª: <?php if($article['fromurl']) { ?><a href="<?php echo $article['fromurl'];?>" target="_blank"><?php echo $article['from'];?></a><?php } else { ?><?php echo $article['from'];?><?php } } ?> 
          
          <?php if($_G['group']['allowmanagearticle'] || ($_G['group']['allowpostarticle'] && $article['uid'] == $_G['uid'] && (empty($_G['group']['allowpostarticlemod']) || $_G['group']['allowpostarticlemod'] && $article['status'] == 1)) || $categoryperm[$value['catid']]['allowmanage']) { ?> 
          <span class="pipe">|</span><a href="portal.php?mod=portalcp&amp;ac=article&amp;op=edit&amp;aid=<?php echo $article['aid'];?>">ç¼–è¾‘</a> 
          <?php if($article['status']>0 && ($_G['group']['allowmanagearticle'] || $categoryperm[$value['catid']]['allowmanage'])) { ?> 
          <span class="pipe">|</span><a href="portal.php?mod=portalcp&amp;ac=article&amp;op=verify&amp;aid=<?php echo $article['aid'];?>" id="article_verify_<?php echo $article['aid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">å®¡æ ¸</a> 
          <?php } else { ?> 
          <span class="pipe">|</span><a href="portal.php?mod=portalcp&amp;ac=article&amp;op=delete&amp;aid=<?php echo $article['aid'];?>" id="article_delete_<?php echo $article['aid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">åˆ é™¤</a><span class="pipe">|</span> 
          <?php } ?> 
          
          <a  id="related_article" href="portal.php?mod=portalcp&amp;ac=related&amp;aid=<?php echo $article['aid'];?>&amp;catid=<?php echo $article['catid'];?>&amp;update=1" onclick="showWindow(this.id, this.href, 'get', 0);return false;">æ·»åŠ ç›¸å…³æ–‡ç« </a><span class="pipe">|</span> 
          
          <?php } ?> 
          
          <?php if($article['status']==0 && ($_G['group']['allowdiy']  || getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 5) || getstatus($_G['member']['allowadmincp'], 6))) { ?> 
          <a href="portal.php?mod=portalcp&amp;ac=portalblock&amp;op=recommend&amp;idtype=aid&amp;id=<?php echo $article['aid'];?>" onclick="showWindow('recommend', this.href, 'get', 0)">æ¨¡å—æ¨é€</a> 
          <?php } ?> 
          
          <?php if(!empty($_G['setting']['pluginhooks']['view_article_subtitle'])) echo $_G['setting']['pluginhooks']['view_article_subtitle'];?> 
        </p>
      </div>
      
      <!--[diy=diysummarytop]-->
      <div id="diysummarytop" class="area"></div>
      <!--[/diy]--> 
      
      <?php if($article['summary'] && empty($cat['notshowarticlesummay'])) { ?>
      <div class="s">
        <div><strong>¼ò½é£º</strong><?php echo $article['summary'];?></div>
        <?php if(!empty($_G['setting']['pluginhooks']['view_article_summary'])) echo $_G['setting']['pluginhooks']['view_article_summary'];?></div>
      <?php } ?> 
      
      <!--[diy=diysummarybottom]-->
      <div id="diysummarybottom" class="area"></div>
      <!--[/diy]-->
      
      <div class="d"> 
        
        <!--[diy=diycontenttop]-->
        <div id="diycontenttop" class="area"></div>
        <!--[/diy]-->
        
        <table cellpadding="0" cellspacing="0" class="vwtb">
          <tr>
            <td id="article_content"><?php echo adshow("article/a_af/1");?> 
              <?php if($content['title']) { ?>
              
              <div class="vm_pagetitle xw1"><?php echo $content['title'];?></div>
              
              <?php } ?> 
              <div id='article_content'><?php echo $content['content'];?></div> </td>
          </tr>
        </table>
<!-- ¿ªÊ¼·­ÒëÎÄÕÂÄÚÈİ-->
<script type='texg/javascript'>
target=document.getElementById('article_content');
alert(target.innerHTML);

</script>

        <?php if(!empty($_G['setting']['pluginhooks']['view_article_content'])) echo $_G['setting']['pluginhooks']['view_article_content'];?> 
        <?php if($multi) { ?>
        <div class="ptw pbw cl"><?php echo $multi;?></div>
        <?php } ?>
        
        <div class="o cl ptm pbm"> 
        
        
        <div class="z">
        <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="·ÖÏíµ½QQ¿Õ¼ä"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="·ÖÏíµ½ĞÂÀËÎ¢²©"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="·ÖÏíµ½ÌÚÑ¶Î¢²©"></a><a href="#" class="bds_renren" data-cmd="renren" title="·ÖÏíµ½ÈËÈËÍø"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="·ÖÏíµ½Î¢ĞÅ"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"24"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"·ÖÏíµ½£º","viewSize":"24"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
        
        </div>
        
          <?php if(!empty($_G['setting']['pluginhooks']['view_article_op_extra'])) echo $_G['setting']['pluginhooks']['view_article_op_extra'];?> 
          <a href="home.php?mod=spacecp&amp;ac=favorite&amp;type=article&amp;id=<?php echo $article['aid'];?>&amp;handlekey=favoritearticlehk_<?php echo $article['aid'];?>" id="a_favorite" onclick="showWindow(this.id, this.href, 'get', 0);" class="oshr ofav">æ”¶è—</a> 
          <?php if(helper_access::check_module('share')) { ?> 
          <a href="home.php?mod=spacecp&amp;ac=share&amp;type=article&amp;id=<?php echo $article['aid'];?>&amp;handlekey=sharearticlehk_<?php echo $article['aid'];?>" id="a_share" onclick="showWindow(this.id, this.href, 'get', 0);" class="oshr">åˆ†äº«</a> 
          <?php } ?> 
          <a href="misc.php?mod=invite&amp;action=article&amp;id=<?php echo $article['aid'];?>" id="a_invite" onclick="showWindow('invite', this.href, 'get', 0);" class="oshr oivt">é‚€è¯·</a> </div>
        
        <!--[diy=diycontentbottom]-->
        <div id="diycontentbottom" class="area"></div>
        <!--[/diy]--> 
        
        <script src="<?php echo $_G['setting']['jspath'];?>home.js?<?php echo VERHASH;?>" type="text/javascript"></script>
        <div id="click_div"> 
          <?php include template('home/space_click'); ?> 
        </div>
        
        <?php if(!empty($contents)) { ?>
        <div id="inner_nav" class="ptn xs1">
          <h3>æœ¬æ–‡å¯¼èˆª</h3>
          <ul class="xl xl2 cl">
            <?php if(is_array($contents)) foreach($contents as $key => $value) { ?> 
            <?php $curpage = $key+1;?> 
            <?php $inner_view_url = helper_page::mpurl($viewurl, 'page=', $curpage);?>            <li>&bull; <a href="<?php echo $inner_view_url;?>"<?php if($key === $start) { ?> class="xi1"<?php } ?>>ç¬¬ <?php echo $curpage;?> é¡µ <?php echo $value['title'];?></a></li>
            <?php } ?>
          </ul>
        </div>
        <?php } ?> 
        
        <!--[diy=diycontentclickbottom]-->
        <div id="diycontentclickbottom" class="area"></div>
        <!--[/diy]--> 
        
      </div>
      <?php if(!empty($aimgs[$content['pid']])) { ?> 
      <script type="text/javascript" reload="1">aimgcount[<?php echo $content['pid'];?>] = [<?php echo implode(',', $aimgs[$content['pid']]);; ?>];attachimgshow(<?php echo $content['pid'];?>);</script> 
      <?php } ?> 
      
      <?php if(!empty($_G['setting']['pluginhooks']['view_share_method'])) { ?>
      <div class="tshare cl"> <strong>!viewthread_share_to!:</strong> 
        <?php if(!empty($_G['setting']['pluginhooks']['view_share_method'])) echo $_G['setting']['pluginhooks']['view_share_method'];?> 
      </div>
      <?php } ?> 
      
      <?php if($article['preaid'] || $article['nextaid']) { ?>
      <div class="pren pbm cl"> 
        <?php if($article['prearticle']) { ?><em class="z">ä¸Šä¸€ç¯‡ï¼š<a href="<?php echo $article['prearticle']['url'];?>"><?php echo $article['prearticle']['title'];?></a></em><?php } ?> 
        <?php if($article['nextarticle']) { ?><em class="y">ä¸‹ä¸€ç¯‡ï¼š<a href="<?php echo $article['nextarticle']['url'];?>"><?php echo $article['nextarticle']['title'];?></a></em><?php } ?> 
      </div>
      <?php } ?> 
    </div>
    
    <!--[diy=diycontentrelatetop]-->
    <div id="diycontentrelatetop" class="area"></div>
    <!--[/diy]--> 
    
    <?php echo adshow("article/mbm hm/2");?><?php echo adshow("article/mbm hm/3");?> 
    
    <?php if($article['related']) { ?>
    <div id="related_article" class="bm">
      <div class="portal_tit cl">
        <h3>ç›¸å…³é˜…è¯»</h3>
      </div>
      <div class="bm_c">
        <ul class="xl xl2 cl" id="raid_div">
          <?php if(is_array($article['related'])) foreach($article['related'] as $raid => $rvalue) { ?>          <input type="hidden" value="<?php echo $raid;?>" />
          <li>&bull; <a href="<?php echo $rvalue['uri'];?>"><?php echo $rvalue['title'];?></a></li>
          <?php } ?>
        </ul>
      </div>
    </div>
    <?php } ?> 
    
    <!--[diy=diycontentrelate]-->
    <div id="diycontentrelate" class="area"></div>
    <!--[/diy]--> 
    <?php if($article['allowcomment']==1) { ?> 
    <?php $data = &$article?> 
    <div id="comment" class="bm">
  <div class="portal_tit cl"> 
    <em>ÒÑÓĞ <?php echo $data['commentnum'];?> ÈË²ÎÓë</em>
    
    <h3>»áÔ±ÆÀÂÛ</h3>
  </div>
  <div id="comment_ul"> 
    
    <?php if(!empty($pricount)) { ?>
    <p class="mtn mbn y">æç¤ºï¼šæœ¬é¡µæœ‰ <?php echo $pricount;?> ä¸ªè¯„è®ºå› æœªé€šè¿‡å®¡æ ¸è€Œè¢«éšè—</p>
    <?php } ?> 
    
    <?php if(!$data['htmlmade']) { ?>
    
    
    
    <form id="cform" name="cform" action="<?php echo $form_url;?>" method="post" autocomplete="off">
<div class="tedt" id="tedt">
<div class="area">
<textarea name="message" rows="3" class="pt" id="message"  <?php if(!$_G['uid']) { ?> placeholder="µÇÂ¼ºó²ÅÄÜ·¢±íÄÚÈİ¼°²ÎÓë»¥¶¯"<?php } ?> onkeydown="ctrlEnter(event, 'commentsubmit_btn');"></textarea>
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
<p class="pt10 cl y"><button type="submit" name="commentsubmit_btn" id="commentsubmit_btn" value="true" class="pn y"><strong>è¯„è®º</strong></button></p>
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
        <?php if($data['commentnum']) { ?><a href="<?php echo $common_url;?>" class="xi2">²é¿´È«²¿ÆÀÂÛ>></a><?php } ?>
      </p>
  </div>
</div>
 
    <?php } ?>     
    <!--[diy=diycontentcomment]-->
    <div id="diycontentcomment" class="area"></div>
    <!--[/diy]--> 
    
  </div>
  <div class="sd pph"> 
    
    <?php if(!empty($_G['setting']['pluginhooks']['view_article_side_top'])) echo $_G['setting']['pluginhooks']['view_article_side_top'];?>
    
    <div class="drag"> 
      <!--[diy=diyrighttop]-->
      <div id="diyrighttop" class="area"></div>
      <!--[/diy]--> 
    </div>
    
    <!-- ·ÖÀà -->
    <div class="list_box cl"> 
      <?php if($cat['subs']) { ?>
      
      <div class="portal_tit cl">
        <h2>ä¸‹çº§åˆ†ç±»</h2>
      </div>
      <div class="portal_sort">
        <ul><?php if(is_array($cat['subs'])) foreach($cat['subs'] as $value) { ?><li><a href="<?php echo getportalcategoryurl($value['catid']); ?>"><?php echo $value['catname'];?></a></li>
<?php } ?>
        </ul>
      </div>
      <?php } elseif($cat['others']) { ?>
      <div class="portal_tit cl">
        <h2>ç›¸å…³åˆ†ç±»</h2>
      </div>
      <div class="portal_sort">
        <ul>
          <?php if(is_array($cat['others'])) foreach($cat['others'] as $value) { ?><li><a href="<?php echo getportalcategoryurl($value['catid']); ?>"><?php echo $value['catname'];?></a></li>
<?php } ?>
        </ul>
      </div>
      
      <?php } ?> 
    </div>
    <div class="list_box">
      <div class="list_focuss cl">
          <!--[diy=jeavi_list_focuss]-->
          <div id="jeavi_list_focuss" class="area"></div>
          <!--[/diy]--> 
      </div>
       <script type="text/javascript">jQuery(".list_focuss").slide({titCell:".hd ul",mainCell:".bd ul", effect:"left", delayTime:800,vis:1,scroll:1,easing:"easeOutCubic",autoPage:true,autoPlay:true  });</script>
    </div>
    
   <!-- ÍÆ¼öÔÄ¶Á -->
    <div class="sbody cl"> 
      <!--[diy=sbody]-->
      <div id="sbody" class="area"></div>
      <!--[/diy]--> 
    </div>
    

  <!-- ÎÄÕÂÅÅĞĞ -->
    <div class="hbody mb30 cl">
      <div class="portal_tit hd cl"> 
        
        <!--[diy=hbodytit]-->
        <div id="hbodytit" class="area"></div>
        <!--[/diy]--> 
      </div>
      <div class=" bd">
        <ul>
          <!--[diy=hbody]-->
          <div id="hbody" class="area"></div>
          <!--[/diy]-->
        </ul>
        <ul>
          <!--[diy=hbody1]-->
          <div id="hbody1" class="area"></div>
          <!--[/diy]-->
        </ul>
      </div>
    </div>
    <script type="text/javascript">jQuery(".hbody").slide({ titCell:".hd li", mainCell:".bd",delayTime:0 });</script> 
    
    <div class="list_box cl" id="r_ad"> 
      
      <!--[diy=list_ad]-->
      <div id="list_ad" class="area"></div>
      <!--[/diy]--> 
      
    </div>
    <div class="drag"> 
      <!--[diy=diy2]-->
      <div id="diy2" class="area"></div>
      <!--[/diy]--> 
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
  <!--[diy=diy3]-->
  <div id="diy3" class="area"></div>
  <!--[/diy]--> 
</div>
<input type="hidden" id="portalview" value="1">
<script type="text/javascript">

jQuery(function() { 
    var elm = jQuery('#r_ad'); 
    var startPos = jQuery(elm).offset().top; 
    jQuery.event.add(window, "scroll", function() { 
        var p = jQuery(window).scrollTop(); 
        jQuery(elm).css('position',((p) > startPos) ? 'fixed' : 'static'); 
        jQuery(elm).css('top',((p) > startPos) ? '60px' : ''); 
    }); 
}); 
</script> <?php include template('common/footer'); ?>