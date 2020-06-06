<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('list_pictextmomentsky');?><?php include template('common/header'); ?><!--[name]Moment - 图文列表[/name]--><?php $list = array();?><?php $wheresql = category_get_wheresql($cat);?><?php $list = category_get_list($cat, $wheresql, $page);?><div id="pt" class="bm cl">
  <div class="z"> <a href="./" class="nvhm" title="棣栭〉"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em> <a href="<?php echo $_G['setting']['navs']['1']['filename'];?>"><?php echo $_G['setting']['navs']['1']['navname'];?></a> <em>&rsaquo;</em> 
    <?php if(is_array($cat['ups'])) foreach($cat['ups'] as $value) { ?> <a href="<?php echo $portalcategory[$value['catid']]['caturl'];?>"><?php echo $value['catname'];?></a><em>&rsaquo;</em><?php } ?> 
    <?php echo $cat['catname'];?> </div>
</div><?php echo adshow("text/wp a_t");?><style id="diy_style" type="text/css">
</style>
<div class="wp"> 
  <!--[diy=diy1]-->
  <div id="diy1" class="area"></div>
  <!--[/diy]--> 
</div>
<div id="ct" class="ct2 wp cl">
  <div class="mn"> 
    <?php echo adshow("articlelist/mbm hm/1");?><?php echo adshow("articlelist/mbm hm/2");?> 
    <!--[diy=listcontenttop]-->
    <div id="listcontenttop" class="area"></div>
    <!--[/diy]-->
    <div class="bm">
      <div class="portal_tit cl">
        <h1><?php echo $cat['catname'];?></h1>
        <?php if($_G['setting']['rssstatus'] && !$_GET['archiveid']) { ?><a href="portal.php?mod=rss&amp;catid=<?php echo $cat['catid'];?>" class="y rss" target="_blank" title="RSS">璁㈤槄</a><?php } ?> 
        <?php if(($_G['group']['allowpostarticle'] || $_G['group']['allowmanagearticle'] || $categoryperm[$catid]['allowmanage'] || $categoryperm[$catid]['allowpublish']) && empty($cat['disallowpublish'])) { ?> 
        <a href="portal.php?mod=portalcp&amp;ac=article&amp;catid=<?php echo $cat['catid'];?>" class="y add">投稿</a> 
        <?php } ?> 
      </div>
      
      <!-- 文章列表 begin -->
      
      <div class="columns cl">
        <ul>
          <?php if(is_array($list['list'])) foreach($list['list'] as $value) { ?> 
          <?php $highlight = article_title_style($value);?> 
          <?php $article_url = fetch_article_url($value);?>          
          <li>
            <div class="photo-pic">
              <div class="bubba"><?php if($value['pic']) { ?><img src="<?php echo $value['pic'];?>" alt="<?php echo $value['title'];?>"/><?php } ?>
                <dov class="bubba-con">
                <h2>View more</h2>
                <a class="link" href="<?php echo $article_url;?>" target="_blank">View more</a> </div>
            </div>
            <h3><a href="<?php echo $article_url;?>" target="_blank"><?php echo $value['title'];?></a></h3>
            <div class="meta"><?php if($value['catname'] && $cat['subs']) { ?><span class="meta-class"><a href="<?php echo $portalcategory[$value['catid']]['caturl'];?>"><?php echo $value['catname'];?></a></span><?php } ?><span class="meta-date"><?php echo $value['dateline'];?></span> 
                  <?php if($_G['group']['allowmanagearticle'] || ($_G['group']['allowpostarticle'] && $value['uid'] == $_G['uid'] && (empty($_G['group']['allowpostarticlemod']) || $_G['group']['allowpostarticlemod'] && $value['status'] == 1)) || $categoryperm[$value['catid']]['allowmanage']) { ?> 
                  <span><a href="portal.php?mod=portalcp&amp;ac=article&amp;op=edit&amp;aid=<?php echo $value['aid'];?>">缂栬緫</a></span> <span><a href="portal.php?mod=portalcp&amp;ac=article&amp;op=delete&amp;aid=<?php echo $value['aid'];?>" id="article_delete_<?php echo $value['aid'];?>" onClick="showWindow(this.id, this.href, 'get', 0);">鍒犻櫎</a></span> 
                  <?php } ?></div>
            <p class="mt10"><?php echo $value['summary'];?>...</p>
          </li>

          
          <?php } ?>
        </ul>
      </div>
      <!-- 文章列表 end --> 
      <!--[diy=listloopbottom]-->
      <div id="listloopbottom" class="area"></div>
      <!--[/diy]--> 
    </div>
    <?php echo adshow("articlelist/mbm hm/3");?><?php echo adshow("articlelist/mbm hm/4");?> 
    <?php if($list['multi']) { ?>
    <div class="pgs cl"><?php echo $list['multi'];?></div>
    <?php } ?> 
    
    <!--[diy=diycontentbottom]-->
    <div id="diycontentbottom" class="area"></div>
    <!--[/diy]--> 
    
  </div>
  <div class="sd pph">
    <div class="drag"> 
      <!--[diy=diyrighttop]-->
      <div id="diyrighttop" class="area"></div>
      <!--[/diy]--> 
    </div>
    
    <!-- 分类 -->
    <div class="list_box cl"> 
      <?php if($cat['subs']) { ?>
      
      <div class="portal_tit cl">
        <h2>涓嬬骇鍒嗙被</h2>
      </div>
      <div class="portal_sort">
        <ul>
          <?php if(is_array($cat['subs'])) foreach($cat['subs'] as $value) { ?>          <li><a href="<?php echo $portalcategory[$value['catid']]['caturl'];?>"><?php echo $value['catname'];?></a></li>
          <?php } ?>
        </ul>
      </div>
      <?php } elseif($cat['others']) { ?>
      <div class="portal_tit cl">
        <h2>鐩稿叧鍒嗙被</h2>
      </div>
      <div class="portal_sort">
        <ul>
          <?php if(is_array($cat['others'])) foreach($cat['others'] as $value) { ?>          <li><a href="<?php echo $portalcategory[$value['catid']]['caturl'];?>"><?php echo $value['catname'];?></a></li>
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
    
    <!-- 推荐阅读 -->
    <div class="sbody cl"> 
      <!--[diy=sbody]-->
      <div id="sbody" class="area"></div>
      <!--[/diy]--> 
    </div>
    
    <!-- 文章排行 -->
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
  </div>
</div>
<div class="wp mtn"> 
  <!--[diy=diy3]-->
  <div id="diy3" class="area"></div>
  <!--[/diy]--> 
</div>
<script type="text/javascript">

jQuery(function() { 
    var elm = jQuery('#r_ad'); 
    var startPos = jQuery(elm).offset().top; 
    jQuery.event.add(window, "scroll", function() { 
        var p = jQuery(window).scrollTop(); 
        jQuery(elm).css('position',((p) > startPos) ? 'fixed' : 'static'); 
        jQuery(elm).css('top',((p) > startPos) ? '80px' : ''); 
    }); 
}); 
</script> <?php include template('common/footer'); ?>