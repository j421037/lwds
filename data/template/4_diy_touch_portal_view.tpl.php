<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('view');
0
|| checktplrefresh('./template/moke8_doormobile/touch/portal/view.htm', './template/moke8_doormobile/touch/portal/portal_comment.htm', 1562205527, 'diy', './data/template/4_diy_touch_portal_view.tpl.php', 'data/diy/./template/jeavi_moment/', 'touch/portal/view')
|| checktplrefresh('./template/moke8_doormobile/touch/portal/view.htm', './template/default/touch/common/seccheck.htm', 1562205527, 'diy', './data/template/4_diy_touch_portal_view.tpl.php', 'data/diy/./template/jeavi_moment/', 'touch/portal/view')
;?><?php include template('touch/common/header'); ?><header class="header">
<a class="goBack fl" href="javascript:history.back()">·µ»Ø</a>
<a class="topShare fr" href="#viewShare">·ÖÏí</a>
<h1>×ÊÑ¶ÏêÇé</h1>
</header>

<div class="container">
<div id="pt">
<a href="<?php echo $_G['setting']['navs']['1']['filename'];?>"><?php echo $_G['setting']['navs']['1']['navname'];?></a> <em>&rsaquo;</em><?php if(is_array($cat['ups'])) foreach($cat['ups'] as $value) { ?><a href="<?php echo getportalcategoryurl($value['catid']); ?>"><?php echo $value['catname'];?></a><em>&rsaquo;</em>
<?php } ?>
<a href="<?php echo getportalcategoryurl($cat['catid']); ?>"><?php echo $cat['catname'];?></a> <em>&rsaquo;</em>
æŸ¥çœ‹å†…å®¹
</div>
<div class="article_view pb">
<div class="article_tit">
<h1><?php echo $article['title'];?> <?php if($article['status'] == 1) { ?>(å¾…å®¡æ ¸)<?php } elseif($article['status'] == 2) { ?>(å·²å¿½ç•¥)<?php } ?></h1>
<p>
<span class="fr"><?php echo $article['dateline'];?></span>
<a href="home.php?mod=space&amp;uid=<?php echo $article['uid'];?>"><?php echo $article['username'];?></a>
æŸ¥çœ‹£º<em id="_viewnum"><?php if($article['viewnum'] > 0) { ?><?php echo $article['viewnum'];?><?php } else { ?>0<?php } ?></em>
è¯„è®º£º<?php if($article['commentnum'] > 0) { ?><a href="<?php echo $common_url;?>" title="æŸ¥çœ‹å…¨éƒ¨è¯„è®º"><em id="_commentnum"><?php echo $article['commentnum'];?></em></a><?php } else { ?>0<?php } ?>
</p>
</div>
<div id="article_content" class="article_con"><?php echo $content['content'];?></div>
<?php if($multi) { ?><div class="ptw pbw cl"><?php echo $multi;?></div><?php } ?>
        <div align="center">
          <?php if($article['preaid'] || $article['nextaid']) { ?>
          <?php if($article['prearticle']) { ?>
         <!-- <a href="<?php echo $article['prearticle']['url'];?>"><img src="<?php echo IMGDIR;?>/h_post.png" /></a>-->
          <?php } ?>
          <?php } ?>
        </div>
</div>

<script src="<?php echo $_G['setting']['jspath'];?>home.js?<?php echo VERHASH;?>" type="text/javascript"></script>

<?php if($article['allowcomment']==1) { $data = &$article?><div id="comment">
<div class="comment_tit">
<span class="y">ÒÑÓĞ <strong id="_commentnum"><?php echo $data['commentnum'];?></strong> ÈË²ÎÓëÆÀÂÛ</span>
<h3>æœ€æ–°è¯„è®º</h3>
</div>
<div id="comment_ul" class="pb">
<?php if($article['commentnum']) { ?>
<ul><?php if(is_array($commentlist)) foreach($commentlist as $comment) { include template('portal/comment_li'); if(!empty($aimgs[$comment['cid']])) { ?>
<script type="text/javascript" reload="1">aimgcount[<?php echo $comment['cid'];?>] = [<?php echo implode(',', $aimgs[$comment['cid']]);; ?>];attachimgshow(<?php echo $comment['cid'];?>);</script>
<?php } } ?>
</ul>
<?php } else { ?>
<div class="comShaFa">
ÔİÎŞÆÀÂÛ£¬¸Ï½ôÇÀÉ³·¢°É
</div>
<?php } ?>		

<?php if(!$data['htmlmade']) { ?>
<form id="cform" name="cform" action="<?php echo $form_url;?>" method="post" autocomplete="off">

<textarea name="message" rows="3" class="textarea" id="message" onkeydown="ctrlEnter(event, 'commentsubmit_btn');" placeholder="·¢±íÄÚÈİ£¬²ÎÓë»¥¶¯"></textarea>

<?php if($secqaacheck || $seccodecheck) { ?><?php
$sectpl = <<<EOF
<sec> <span id="sec<hash>" onclick="showMenu(this.id);"><sec></span><div id="sec<hash>_menu" class="p_pop p_opt" style="display:none"><sec></div>
EOF;
?><?php $sechash = 'S'.random(4);
$sectpl = !empty($sectpl) ? explode("<sec>", $sectpl) : array('<br />',': ','<br />','');	
$ran = random(5, 1);?><?php if($secqaacheck) { $message = '';
$question = make_secqaa();
$secqaa = lang('core', 'secqaa_tips').$question;?><?php } if($sectpl) { if($secqaacheck) { ?>
<p>
        éªŒè¯é—®ç­”: 
        <span class="xg2"><?php echo $secqaa;?></span>
<input name="secqaahash" type="hidden" value="<?php echo $sechash;?>" />
        <input name="secanswer" id="secqaaverify_<?php echo $sechash;?>" type="text" class="txt" />
        </p>
<?php } if($seccodecheck) { ?>
<div class="sec_code vm">
<input name="seccodehash" type="hidden" value="<?php echo $sechash;?>" />
<input type="text" class="txt px vm" style="ime-mode:disabled;width:115px;background:white;" autocomplete="off" value="" id="seccodeverify_<?php echo $sechash;?>" name="seccodeverify" placeholder="éªŒè¯ç " fwin="seccode">
        <img src="misc.php?mod=seccode&amp;update=<?php echo $ran;?>&amp;idhash=<?php echo $sechash;?>&amp;mobile=2" class="seccodeimg"/>
</div>
<?php } } ?>
<script type="text/javascript">
(function() {
$('.seccodeimg').on('click', function() {
$('#seccodeverify_<?php echo $sechash;?>').attr('value', '');
var tmprandom = 'S' + Math.floor(Math.random() * 1000);
$('.sechash').attr('value', tmprandom);
$(this).attr('src', 'misc.php?mod=seccode&update=<?php echo $ran;?>&idhash='+ tmprandom +'&mobile=2');
});
})();
</script>
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
<button type="submit" name="commentsubmit_btn" id="commentsubmit_btn" value="true" class="btn1 mt20">è¯„è®º</button>
</form>
<?php } ?>
</div>
</div>

  
<?php } ?> 

</div>

<div id="viewShare" class="viewShare">
<div class="bdsharebuttonbox">
<div class="wxShare"><a class="jiathis_button_weixin" href="#">Î¢ĞÅ</a></div>
<!-- JiaThis Button BEGIN -->		
<div class="jiathis_style_m"></div>
<script src="http://v3.jiathis.com/code/jiathis_m.js" type="text/javascript" charset=gbk></script>
<!-- JiaThis Button END -->
</div>
</div>
<div class="popMask">
<img src="template/moke8_doormobile/touch/images/img/share.png" />
</div>

<script type="text/javascript">
$(function() {
$('#viewShare').mmenu({
autoHeight	: true,
navbar		: {
title 	: false
},
offCanvas	: {
position	: "bottom",
zposition	: "front",
modal		: true
}
});
});
$(function() {
$("#mm-blocker").click(function(){
$("html").removeClass();
$(".viewShare").attr("class","viewShare mm-menu mm-offcanvas mm-bottom mm-front mm-autoheight");
});
$('.jiathis_button_weixin').click(function(){
$(".popMask").show();
$("#mm-blocker").trigger("click");
return false;
});
$('.popMask').click(function(){
$(this).hide();
window.location.reload();
})
});
</script><?php include template('common/btfixed'); include template('touch/common/footer'); ?> 

