<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('preview');?><?php include template('common/header'); ?><div id="ct" class="wp cl ptw pbw">
<div class="z" style="width: 370px; height: 550px; background: url(<?php echo STATICURL;?>image/mobile/preview.png) no-repeat 0 0;">
<iframe id="ifm0" frameborder="0" width="240" height="360" style="margin: 102px 0 0 70px;" src="misc.php?mod=mobile&amp;view=true"></iframe>
</div>
<div class="z" style="margin-top: 60px; width: 530px;">
<div class="mtw bm bw0" style="background-color: #dfeaf4;">
<div class="bm_c">
<h1 class="xw1 xs2 mbn">现在就登录 - <?php echo $_G['setting']['bbname'];?> 手机版</h1>
<p class="mbw xg2">立即使用手机访问，获得极速移动体验</p>
<p class="hm mbw" style="font-size: 18px; color: #F60;">
<?php if($_G['setting']['domain']['app']['mobile']) { ?>
http://<?php echo $_G['setting']['domain']['app']['mobile'];?>
<?php } else { ?>
<?php echo $_G['siteurl'];?>forum.php
<?php } ?>
</p>
</div>
</div>
<div class="bm bw0">
<dl class="xld bbda">
<dt class="xs2">快速收藏</dt>
<dd>您可以通过手机快速访问论坛版块及管理收藏夹，随时随地访问自己最爱的内容</dd>
</dl>
<dl class="xld bbda">
<dt class="xs2">看帖及回帖更快速</dt>
<dd>通过手机版，可以快速的访问您需要阅读的主题，并可以快速的发布新帖及回复</dd>
</dl>
<dl class="xld">
<dt class="xs2">站内短信实时收发，与短信另一端的朋友进行单人或多人聊天</dt>
<dd>节省流量与获得优质手机体验并存</dd>
</dl>
</div>
</div>
</div><?php include template('common/footer'); ?>