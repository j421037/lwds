<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('viewthread');
0
|| checktplrefresh('./template/moke8_doormobile/touch/forum/viewthread.htm', './template/moke8_doormobile/touch/forum/forumdisplay_fastpost.htm', 1562205514, 'diy', './data/template/4_diy_touch_forum_viewthread.tpl.php', './template/moke8_doormobile', 'touch/forum/viewthread')
|| checktplrefresh('./template/moke8_doormobile/touch/forum/viewthread.htm', './template/default/touch/common/seccheck.htm', 1562205514, 'diy', './data/template/4_diy_touch_forum_viewthread.tpl.php', './template/moke8_doormobile', 'touch/forum/viewthread')
;?>
<?php $threadsort = $threadsorts = null;?><?php include template('common/header'); ?><!-- header start -->
<header class="header">
<a class="topShare fr" href="#viewShare">����</a>
<a class="goBack fl" href="<?php if($_GET['fromguid'] == 'hot') { ?>forum.php?mod=guide&view=hot&page=<?php echo $_GET['page'];?><?php } else { ?>forum.php?mod=forumdisplay&fid=<?php echo $_G['fid'];?>&<?php echo rawurldecode($_GET[extra]);?><?php } ?>">����</a>
<h1><?php echo strip_tags($_G['forum']['name']) ? strip_tags($_G['forum']['name']) : $_G['forum']['name'];?></h1>
</header>
<!-- header end -->
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_top_mobile'])) echo $_G['setting']['pluginhooks']['viewthread_top_mobile'];?>
<div class="container">
<!-- main postlist start -->
<div class="postlist"><?php $postcount = 0;?><?php if(is_array($postlist)) foreach($postlist as $post) { $needhiddenreply = ($hiddenreplies && $_G['uid'] != $post['authorid'] && $_G['uid'] != $_G['forum_thread']['authorid'] && !$post['first'] && !$_G['forum']['ismoderator']);?><?php if($post['first']) { ?>
<div class="forumListHeader">
<h2>
        	<?php if($_G['forum_thread']['typeid'] && $_G['forum']['threadtypes']['types'][$_G['forum_thread']['typeid']]) { ?>
[<?php echo $_G['forum']['threadtypes']['types'][$_G['forum_thread']['typeid']];?>]
            <?php } ?>
            <?php if($threadsorts && $_G['forum_thread']['sortid']) { ?>
                [<?php echo $_G['forum']['threadsorts']['types'][$_G['forum_thread']['sortid']];?>]
<?php } ?>
<?php echo $_G['forum_thread']['subject'];?>
            <?php if($_G['forum_thread']['displayorder'] == -2) { ?> <span>(审核中)</span>
            <?php } elseif($_G['forum_thread']['displayorder'] == -3) { ?> <span>(已忽略)</span>
            <?php } elseif($_G['forum_thread']['displayorder'] == -4) { ?> <span>(草稿)</span>
<?php } ?>
</h2>
<div class="postUserAttr cfix">
<span class="h_avatar"><img src="<?php if(!$post['authorid'] || $post['anonymous']) { ?><?php echo avatar(0, small, true);?><?php } else { ?><?php echo avatar($post[authorid], small, true);?><?php } ?>" /></span>
<a class="fl" href="home.php?mod=space&amp;uid=<?php echo $_G['forum_thread']['authorid'];?>"><?php echo $_G['forum_thread']['author'];?></a>
<span class="fl"><?php echo $post['dateline'];?></span> 
</div>
</div>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_posttop_mobile'][$postcount])) echo $_G['setting']['pluginhooks']['viewthread_posttop_mobile'][$postcount];?>
       <div class="postListItem" href="#replybtn_<?php echo $post['pid'];?>" id="pid<?php echo $post['pid'];?>">
<?php if(!$post['first']) { ?>
<div class="postListTit">
<span class="h_avatar"><img src="<?php if(!$post['authorid'] || $post['anonymous']) { ?><?php echo avatar(0, small, true);?><?php } else { ?><?php echo avatar($post[authorid], small, true);?><?php } ?>" /></span>
<h4>
<em class="y">
<?php if(isset($post['isstick'])) { ?>
<img src ="<?php echo IMGDIR;?>/settop.png" title="置顶回复" class="vm" /> 来自 <?php echo $post['number'];?><?php echo $postnostick;?>
<?php } elseif($post['number'] == -1) { ?>
推荐
<?php } else { if(!empty($postno[$post['number']])) { ?><?php echo $postno[$post['number']];?><?php } else { ?><?php echo $post['number'];?><?php echo $postno['0'];?><?php } } ?>
</em>

<?php if($post['authorid'] && $post['username'] && !$post['anonymous']) { ?>
<a href="home.php?mod=space&amp;uid=<?php echo $post['authorid'];?>" class="blue"><?php echo $post['author'];?></a>
<?php } else { if(!$post['authorid']) { ?>
<a href="javascript:;">游客 <em><?php echo $post['useip'];?><?php if($post['port']) { ?>:<?php echo $post['port'];?><?php } ?></em></a>
<?php } elseif($post['authorid'] && $post['username'] && $post['anonymous']) { if($_G['forum']['ismoderator']) { ?><a href="home.php?mod=space&amp;uid=<?php echo $post['authorid'];?>" target="_blank">匿名</a><?php } else { ?>匿名<?php } } else { ?>
<?php echo $post['author'];?> <em>该用户已被删除</em>
<?php } } ?>
</h4>
<div class="postListAttr">
<?php if($_G['forum']['ismoderator']) { ?>
<!-- manage start -->
<?php if($post['first']) { ?>
<em><a href="#moption_<?php echo $post['pid'];?>" class="popup blue">管理</a></em>
<div id="moption_<?php echo $post['pid'];?>" popup="true" class="manage" style="display:none;">
<?php if(!$_G['forum_thread']['special']) { ?>
<input type="button" value="编辑" class="redirect button" href="forum.php?mod=post&amp;action=edit&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;pid=<?php echo $post['pid'];?><?php if($_G['forum_thread']['sortid']) { if($post['first']) { ?>&amp;sortid=<?php echo $_G['forum_thread']['sortid'];?><?php } } if(!empty($_GET['modthreadkey'])) { ?>&amp;modthreadkey=<?php echo $_GET['modthreadkey'];?><?php } ?>&amp;page=<?php echo $page;?>">
<?php } ?>
<input type="button" value="删除" class="dialog button" href="forum.php?mod=topicadmin&amp;action=moderate&amp;fid=<?php echo $_G['fid'];?>&amp;moderate[]=<?php echo $_G['tid'];?>&amp;operation=delete&amp;optgroup=3&amp;from=<?php echo $_G['tid'];?>">
<input type="button" value="关闭" class="dialog button" href="forum.php?mod=topicadmin&amp;action=moderate&amp;fid=<?php echo $_G['fid'];?>&amp;moderate[]=<?php echo $_G['tid'];?>&amp;from=<?php echo $_G['tid'];?>&amp;optgroup=4">
<input type="button" value="屏蔽" class="dialog button" href="forum.php?mod=topicadmin&amp;action=banpost&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;topiclist[]=<?php echo $_G['forum_firstpid'];?>">
<input type="button" value="警告" class="dialog button" href="forum.php?mod=topicadmin&amp;action=warn&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;topiclist[]=<?php echo $_G['forum_firstpid'];?>">
</div>
<?php } else { ?>
<em><a href="#moption_<?php echo $post['pid'];?>" class="popup blue">管理</a></em>
<div id="moption_<?php echo $post['pid'];?>" popup="true" class="manage" style="display:none;">
<input type="button" value="编辑" class="redirect button" href="forum.php?mod=post&amp;action=edit&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;pid=<?php echo $post['pid'];?><?php if(!empty($_GET['modthreadkey'])) { ?>&amp;modthreadkey=<?php echo $_GET['modthreadkey'];?><?php } ?>&amp;page=<?php echo $page;?>">
<?php if($_G['group']['allowdelpost']) { ?><input type="button" value="删除" class="dialog button" href="forum.php?mod=topicadmin&amp;action=delpost&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;operation=&amp;optgroup=&amp;page=&amp;topiclist[]=<?php echo $post['pid'];?>"><?php } if($_G['group']['allowbanpost']) { ?><input type="button" value="屏蔽" class="dialog button" href="forum.php?mod=topicadmin&amp;action=banpost&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;operation=&amp;optgroup=&amp;page=&amp;topiclist[]=<?php echo $post['pid'];?>"><?php } if($_G['group']['allowwarnpost']) { ?><input type="button" value="警告" class="dialog button" href="forum.php?mod=topicadmin&amp;action=warn&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;operation=&amp;optgroup=&amp;page=&amp;topiclist[]=<?php echo $post['pid'];?>"><?php } ?>
</div>
<?php } ?>
<!-- manage end -->
<?php } ?>
<?php echo $post['dateline'];?>
</div>
</div>
<?php } ?>
<div class="postListCon">
<?php if($post['warned']) { ?>
<span class="grey quote">受到警告</span>
<?php } if(!$post['first'] && !empty($post['subject'])) { ?>
<h2><strong><?php echo $post['subject'];?></strong></h2>
<?php } if($_G['adminid'] != 1 && $_G['setting']['bannedmessages'] & 1 && (($post['authorid'] && !$post['username']) || ($post['groupid'] == 4 || $post['groupid'] == 5) || $post['status'] == -1 || $post['memberstatus'])) { ?>
<div class="grey quote">提示: <em>作者被禁止或删除 内容自动屏蔽</em></div>
<?php } elseif($_G['adminid'] != 1 && $post['status'] & 1) { ?>
<div class="grey quote">提示: <em>该帖被管理员或版主屏蔽</em></div>
<?php } elseif($needhiddenreply) { ?>
<div class="grey quote">此帖仅作者可见</div>
<?php } elseif($post['first'] && $_G['forum_threadpay']) { include template('forum/viewthread_pay'); } else { if($_G['setting']['bannedmessages'] & 1 && (($post['authorid'] && !$post['username']) || ($post['groupid'] == 4 || $post['groupid'] == 5))) { ?>
<div class="grey quote">提示: <em>作者被禁止或删除 内容自动屏蔽，只有管理员或有管理权限的成员可见</em></div>
<?php } elseif($post['status'] & 1) { ?>
<div class="grey quote">提示: <em>该帖被管理员或版主屏蔽，只有管理员或有管理权限的成员可见</em></div>
<?php } if($_G['forum_thread']['price'] > 0 && $_G['forum_thread']['special'] == 0) { ?>
付费主题, 价格: <strong><?php echo $_G['forum_thread']['price'];?> <?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['unit'];?><?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['title'];?> </strong> <a href="forum.php?mod=misc&amp;action=viewpayments&amp;tid=<?php echo $_G['tid'];?>" >记录</a>
<?php } if($post['first'] && $threadsort && $threadsortshow) { if($threadsortshow['optionlist'] && !($post['status'] & 1) && !$_G['forum_threadpay']) { if($threadsortshow['optionlist'] == 'expire') { ?>
该信息已经过期
<?php } else { ?>
<div class="box_ex2 viewsort">
<h4><?php echo $_G['forum']['threadsorts']['types'][$_G['forum_thread']['sortid']];?></h4><?php if(is_array($threadsortshow['optionlist'])) foreach($threadsortshow['optionlist'] as $option) { if($option['type'] != 'info') { ?>
<?php echo $option['title'];?>: <?php if($option['value']) { ?><?php echo $option['value'];?> <?php echo $option['unit'];?><?php } else { ?><span class="grey">--</span><?php } ?><br />
<?php } } ?>
</div>
<?php } } } if($post['first']) { if(!$_G['forum_thread']['special']) { ?>
<?php echo $post['message'];?>
<?php } elseif($_G['forum_thread']['special'] == 1) { include template('forum/viewthread_poll'); ?> 
<?php } elseif($_G['forum_thread']['special'] == 2) { include template('forum/viewthread_trade'); } elseif($_G['forum_thread']['special'] == 3) { include template('forum/viewthread_reward'); } elseif($_G['forum_thread']['special'] == 4) { include template('forum/viewthread_activity'); } elseif($_G['forum_thread']['special'] == 5) { include template('forum/viewthread_debate'); } elseif($threadplughtml) { ?>
<?php echo $threadplughtml;?>
<?php echo $post['message'];?>
<?php } else { ?>
<?php echo $post['message'];?>
<?php } } else { ?>
<?php echo $post['message'];?>
<?php } } ?>

</div>

<?php if($_G['setting']['mobile']['mobilesimpletype'] == 0) { if($post['attachment']) { ?>
               <div class="grey warning quote">
               附件: <em><?php if($_G['uid']) { ?>您所在的用户组无法下载或查看附件<?php } else { ?>您需要<a href="member.php?mod=logging&amp;action=login">登录</a>才可以下载或查看附件。没有帐号？<a href="member.php?mod=<?php echo $_G['setting']['regname'];?>" title="注册帐号"><?php echo $_G['setting']['reglinkname'];?></a><?php } ?></em>
               </div>
            <?php } elseif($post['imagelist'] || $post['attachlist']) { ?>
               <?php if($post['imagelist']) { if(count($post['imagelist']) == 1) { ?>
<ul class="img_one"><?php echo showattach($post, 1); ?></ul>
<?php } else { ?>
<ul class="img_list cl vm"><?php echo showattach($post, 1); ?></ul>
<?php } } ?>
                <?php if($post['attachlist']) { ?>
<ul><?php echo showattach($post); ?></ul>
<?php } } } if($_G['uid'] && $allowpostreply && !$post['first']) { ?>
<div id="replybtn_<?php echo $post['pid'];?>" class="replybtn" display="true" style="display:none;position:absolute;right:0px;top:5px;">
<input type="button" class="redirect button" href="forum.php?mod=post&amp;action=reply&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;repquote=<?php echo $post['pid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;page=<?php echo $page;?>" value="回复">
</div>
<?php } ?>

<!--signature start-->	
<?php if($post['signature'] && ($_G['setting']['bannedmessages'] & 4 && ($post['memberstatus'] == '-1' || ($post['authorid'] && !$post['username']) || ($post['groupid'] == 4 || $post['groupid'] == 5) || ($post['status'] & 1)))) { ?>
<div class="sign">签名被屏蔽</div>
<?php } elseif($post['signature'] && !$post['anonymous'] && $showsignatures) { ?>
<div class="sign"><div style="max-height:<?php echo $_G['setting']['maxsigrows'];?>px;maxHeightIE:<?php echo $_G['setting']['maxsigrows'];?>px;overflow:hidden;"><?php echo $post['signature'];?></div><span></span></div>
<?php } elseif(!$post['anonymous'] && $showsignatures && $_G['setting']['globalsightml']) { ?>
<div class="sign"><?php echo $_G['setting']['globalsightml'];?></div>
<?php } ?>
<!--signature end-->
</div>
 <?php if($post['first']) { ?>
<h3 class="postListHd" id="reComments">�ظ�����</h3>
<?php } ?>
   <?php if(!empty($_G['setting']['pluginhooks']['viewthread_postbottom_mobile'][$postcount])) echo $_G['setting']['pluginhooks']['viewthread_postbottom_mobile'][$postcount];?>
   <?php $postcount++;?>   <?php } ?>
   <?php if($_G['forum_thread']['replies']<=0) { ?>
<div class="comShaFa">
�������ۣ��Ͻ���ɳ����
</div>
<?php } ?>
   <?php echo $multipage;?><div id="post_new"></div>
<div class="replyCom cfix">
<form method="post" autocomplete="off" id="fastpostform" action="forum.php?mod=post&amp;action=reply&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;replysubmit=yes&amp;mobile=2">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<ul class="fastpost">
<?php if($_G['forum_thread']['special'] == 5 && empty($firststand)) { ?>
<li class="cfix">
<select id="stand" name="stand" >
<option value="">选择观点</option>
<option value="0">中立</option>
<option value="1">正方</option>
<option value="2">反方</option>
</select>
</li>
<?php } ?>
<li class="cfix"><textarea class="textarea input" tabindex="3" id="fastpostmessage" name="message" autocomplete="off" cols="80" rows="2" placeholder="我也说一句" ></textarea></li>
<!--<li><input type="text" value="我也说一句" class="input" color="gray" name="message" id="fastpostmessage" fwin="reply"></li>-->
<li class="cfix" id="fastpostsubmitline">
<?php if($secqaacheck || $seccodecheck) { $sechash = 'S'.random(4);
$sectpl = !empty($sectpl) ? explode("<sec>", $sectpl) : array('<br />',': ','<br />','');	
$ran = random(5, 1);?><?php if($secqaacheck) { $message = '';
$question = make_secqaa();
$secqaa = lang('core', 'secqaa_tips').$question;?><?php } if($sectpl) { if($secqaacheck) { ?>
<p>
        验证问答: 
        <span class="xg2"><?php echo $secqaa;?></span>
<input name="secqaahash" type="hidden" value="<?php echo $sechash;?>" />
        <input name="secanswer" id="secqaaverify_<?php echo $sechash;?>" type="text" class="txt" />
        </p>
<?php } if($seccodecheck) { ?>
<div class="sec_code vm">
<input name="seccodehash" type="hidden" value="<?php echo $sechash;?>" />
<input type="text" class="txt px vm" style="ime-mode:disabled;width:115px;background:white;" autocomplete="off" value="" id="seccodeverify_<?php echo $sechash;?>" name="seccodeverify" placeholder="验证码" fwin="seccode">
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
<?php } ?>
</li>
<li class="faceBox cfix">
<ul>
<li><img src="static/image/smiley/grapeman/01.gif" width="30" height="30" onClick="addface('fastpostmessage', '{:3_41:}')" /></li>
<li><img src="static/image/smiley/grapeman/02.gif" width="30" height="30" onClick="addface('fastpostmessage', '{:3_42:}')" /></li>
<li><img src="static/image/smiley/grapeman/03.gif" width="30" height="30" onClick="addface('fastpostmessage', '{:3_43:}')" /></li>
<li><img src="static/image/smiley/grapeman/04.gif" width="30" height="30" onClick="addface('fastpostmessage', '{:3_44:}')" /></li>
<li><img src="static/image/smiley/grapeman/05.gif" width="30" height="30" onClick="addface('fastpostmessage', '{:3_45:}')" /></li>
<li><img src="static/image/smiley/grapeman/06.gif" width="30" height="30" onClick="addface('fastpostmessage', '{:3_46:}')" /></li>
<li><img src="static/image/smiley/grapeman/07.gif" width="30" height="30" onClick="addface('fastpostmessage', '{:3_47:}')" /></li>
<li><img src="static/image/smiley/grapeman/08.gif" width="30" height="30" onClick="addface('fastpostmessage', '{:3_48:}')" /></li>
<li><img src="static/image/smiley/grapeman/09.gif" width="30" height="30" onClick="addface('fastpostmessage', '{:3_49:}')" /></li>
<li><img src="static/image/smiley/grapeman/10.gif" width="30" height="30" onClick="addface('fastpostmessage', '{:3_50:}')" /></li>
<li><img src="static/image/smiley/grapeman/11.gif" width="30" height="30" onClick="addface('fastpostmessage', '{:3_51:}')" /></li>
<li><img src="static/image/smiley/grapeman/12.gif" width="30" height="30" onClick="addface('fastpostmessage', '{:3_52:}')" /></li>
<li><img src="static/image/smiley/grapeman/13.gif" width="30" height="30" onClick="addface('fastpostmessage', '{:3_53:}')" /></li>
<li><img src="static/image/smiley/grapeman/14.gif" width="30" height="30" onClick="addface('fastpostmessage', '{:3_54:}')" /></li>
<li><img src="static/image/smiley/grapeman/15.gif" width="30" height="30" onClick="addface('fastpostmessage', '{:3_55:}')" /></li>
<li><img src="static/image/smiley/grapeman/16.gif" width="30" height="30" onClick="addface('fastpostmessage', '{:3_56:}')" /></li>
<li><img src="static/image/smiley/grapeman/17.gif" width="30" height="30" onClick="addface('fastpostmessage', '{:3_57:}')" /></li>
<li><img src="static/image/smiley/grapeman/18.gif" width="30" height="30" onClick="addface('fastpostmessage', '{:3_58:}')" /></li>
<li><img src="static/image/smiley/grapeman/19.gif" width="30" height="30" onClick="addface('fastpostmessage', '{:3_59:}')" /></li>
<li><img src="static/image/smiley/grapeman/20.gif" width="30" height="30" onClick="addface('fastpostmessage', '{:3_60:}')" /></li>
<li><img src="static/image/smiley/grapeman/21.gif" width="30" height="30" onClick="addface('fastpostmessage', '{:3_61:}')" /></li>
<li><img src="static/image/smiley/grapeman/22.gif" width="30" height="30" onClick="addface('fastpostmessage', '{:3_62:}')" /></li>
<li><img src="static/image/smiley/grapeman/23.gif" width="30" height="30" onClick="addface('fastpostmessage', '{:3_63:}')" /></li>
<li><img src="static/image/smiley/grapeman/24.gif" width="30" height="30" onClick="addface('fastpostmessage', '{:3_64:}')" /></li>
</ul>
<script src="template/moke8_doormobile/touch/images/js/get_face.js" type="text/javascript"></script>
</li>
<li class="cfix">
<div class="rePostIcon z wp50">
<a class="faceBtn" href="javascript:void(0);"></a>
<a class="itBtn" href="forum.php?mod=post&amp;action=reply&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;reppost=<?php echo $_G['forum_firstpid'];?>&amp;page=<?php echo $page;?>">回复</a>
</div>
<input type="button" value="回复" class="btn1 y wp35" name="replysubmit" id="fastpostsubmit" />
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_fastpost_button_mobile'])) echo $_G['setting']['pluginhooks']['viewthread_fastpost_button_mobile'];?>
</li>
</ul>
    </form>
</div>
<div class="btViewpost">
<a class="viewBtn Jq_viewBtn" href="javascript:void(0);">��ҲҪ˵����</a>
<table>
<tr>
<td>
<div class="viewA vCom">
<span><?php if($thread['replies']>0) { ?><em><i><?php echo $thread['replies'];?></i></em><?php } ?></span>
����
</div>
</td>
<td>
<a href="home.php?mod=spacecp&amp;ac=favorite&amp;type=thread&amp;id=<?php echo $_G['tid'];?>" class="viewA vFav">
<span><?php if($_G['forum_thread']['favtimes']>0) { ?><em><i><?php echo $_G['forum_thread']['favtimes'];?></i></em><?php } ?></span>
收藏
</a>
</td>
<?php if(($_G['group']['allowrecommend'] || !$_G['uid']) && $_G['setting']['recommendthread']['status']) { if(!empty($_G['setting']['recommendthread']['addtext'])) { ?>
<td>
<a class="viewA vZan" id="recommend_add" href="forum.php?mod=misc&amp;action=recommend&amp;do=add&amp;tid=<?php echo $_G['tid'];?>&amp;hash=<?php echo FORMHASH;?>" <?php if($_G['uid']) { ?>onclick="ajaxmenu(this, 3000, 1, 0, '43', 'recommendupdate(<?php echo $_G['group']['allowrecommend'];?>)');return false;"<?php } else { ?> onclick="showWindow('login', this.href)"<?php } ?> onmouseover="this.title = $('recommendv_add').innerHTML + ' 人<?php echo $_G['setting']['recommendthread']['addtext'];?>'" title="顶一下">
<span><?php if($_G['forum_thread']['recommend_add']>0) { ?><em><i><?php echo $_G['forum_thread']['recommend_add'];?></i></em><?php } ?></span>
��
</a>					
</td>
<?php } } ?>
</tr>
</table>
</div>
<div class="btRepPost" style="display:none;">
<a href="forum.php?mod=post&amp;action=reply&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;reppost=<?php echo $_G['forum_firstpid'];?>&amp;page=<?php echo $page;?>">
<span class="inp z">��ҲҪ˵����</span>
<span class="btn1 y">�ظ�</span>
</a>
</div>
<script type="text/javascript">
(function() {
var form = $('#fastpostform');
<?php if(!$_G['uid'] || $_G['uid'] && !$allowpostreply) { ?>
$('#fastpostmessage').on('focus', function() {
<?php if(!$_G['uid']) { ?>
popup.open('您还未登录，立即登录?', 'confirm', 'member.php?mod=logging&action=login');
<?php } else { ?>
popup.open('您暂时没有权限发表', 'alert');
<?php } ?>
this.blur();
});
<?php } else { ?>
$('#fastpostmessage').on('focus', function() {
var obj = $(this);
if(obj.attr('color') == 'gray') {
obj.attr('value', '');
obj.removeClass('grey');
obj.attr('color', 'black');
$('#fastpostsubmitline').css('display', 'block');
}
})
.on('blur', function() {
var obj = $(this);
if(obj.attr('value') == '') {
obj.addClass('grey');
obj.attr('value', '我也说一句');
obj.attr('color', 'gray');
}
});
<?php } ?>
$('#fastpostsubmit').on('click', function() {
var msgobj = $('#fastpostmessage');
if(msgobj.val() == '我也说一句') {
msgobj.attr('value', '');
}
$.ajax({
type:'POST',
url:form.attr('action') + '&handlekey=fastpost&loc=1&inajax=1',
data:form.serialize(),
dataType:'xml'
})
.success(function(s) {
evalscript(s.lastChild.firstChild.nodeValue);
window.location.reload();
})
.error(function() {
window.location.href = obj.attr('href');
popup.close();
});
return false;
});

$('#replyid').on('click', function() {
$(document).scrollTop($(document).height());
$('#fastpostmessage')[0].focus();
});

})();

function succeedhandle_fastpost(locationhref, message, param) {
var pid = param['pid'];
var tid = param['tid'];
if(pid) {
$.ajax({
type:'POST',
url:'forum.php?mod=viewthread&tid=' + tid + '&viewpid=' + pid + '&mobile=2',
dataType:'xml'
})
.success(function(s) {
$('#post_new').append(s.lastChild.firstChild.nodeValue);
})
.error(function() {
window.location.href = 'forum.php?mod=viewthread&tid=' + tid;
popup.close();
});
} else {
if(!message) {
message = '本版回帖需要审核，您的帖子将在通过审核后显示';
}
popup.open(message, 'alert');
}
$('#fastpostmessage').attr('value', '');
if(param['sechash']) {
$('.seccodeimg').click();
}
}

function errorhandle_fastpost(message, param) {
popup.open(message, 'alert');
}
</script>
<script type="text/javascript">
$(".vCom").toggle(function(){
$("html,body").animate({scrollTop:$("#reComments").offset().top},500);},
function(){
$("html,body").animate({scrollTop:0},500);}
);
$(".Jq_viewBtn").click(function(){
$(".replyCom").slideDown("fast");
//$(".textarea")[0].focus();
return false;
});
$(".replyCom form").bind("click",function(){
$(".replyCom").css("display","block");
event.stopPropagation();
});
$(".replyCom").bind("click",function(){
$(this).slideUp("fast");
});
$(".faceBtn").toggle(function(){
$(".faceBox").show();},
//$(".fastpost .textarea")[0].focus();
function(){
$(".faceBox").hide();}
//$(".fastpost  .textarea")[0].focus();
);
</script>

  

</div>
<!-- main postlist end -->

<?php if(!empty($_G['setting']['pluginhooks']['viewthread_bottom_mobile'])) echo $_G['setting']['pluginhooks']['viewthread_bottom_mobile'];?>

<script type="text/javascript">
$('.favbtn').on('click', function() {
var obj = $(this);
$.ajax({
type:'POST',
url:obj.attr('href') + '&handlekey=favbtn&inajax=1',
data:{'favoritesubmit':'true', 'formhash':'<?php echo FORMHASH;?>'},
dataType:'xml',
})
.success(function(s) {
popup.open(s.lastChild.firstChild.nodeValue);
evalscript(s.lastChild.firstChild.nodeValue);
})
.error(function() {
window.location.href = obj.attr('href');
popup.close();
}); 
return false;
});
</script>
<a href="javascript:;" title="返回顶部" class="scrolltop bottom"></a>

</div>

<div id="viewShare" class="viewShare">
<div class="bdsharebuttonbox">
<div class="wxShare"><a class="jiathis_button_weixin" href="#">΢��</a></div>
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
</script><?php include template('common/footer'); ?>