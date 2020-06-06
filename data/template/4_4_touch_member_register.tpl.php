<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('register');
0
|| checktplrefresh('./template/moke8_doormobile/touch/member/register.htm', './template/default/touch/common/seccheck.htm', 1588152184, '4', './data/template/4_4_touch_member_register.tpl.php', './template/moke8_doormobile', 'touch/member/register')
;?><?php include template('common/header'); ?><!-- header start -->
<header class="header">
<a href="javascript:;" onclick="history.go(-1)" class="goBack z">����</a>
<h1>注册</h1>
</header>
<!-- header end -->
<!-- registerbox start -->
<div class="loginbox registerbox">
<div class="login_from">
<form method="post" autocomplete="off" name="register" id="registerform" action="member.php?mod=<?php echo $_G['setting']['regname'];?>&amp;mobile=2">
<input type="hidden" name="regsubmit" value="yes" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" /><?php $dreferer = str_replace('&amp;', '&', dreferer());?><input type="hidden" name="referer" value="<?php echo $dreferer;?>" />
<input type="hidden" name="activationauth" value="<?php if($_GET['action'] == 'activation') { ?><?php echo $activationauth;?><?php } ?>" />
<input type="hidden" name="agreebbrule" value="<?php echo $bbrulehash;?>" id="agreebbrule" checked="checked" />
<ul>
<li><input type="text" tabindex="1" class="inp" autocomplete="off" value="" name="<?php echo $_G['setting']['reginput']['username'];?>" placeholder="用户名：3-15位" fwin="login"></li>
<li><input type="password" tabindex="2" class="inp" value="" name="<?php echo $_G['setting']['reginput']['password'];?>" placeholder="密码" fwin="login"></li>
<li><input type="password" tabindex="3" class="inp" value="" name="<?php echo $_G['setting']['reginput']['password2'];?>" placeholder="确认密码" fwin="login"></li>
<li class="bl_none"><input type="email" tabindex="4" class="inp" autocomplete="off" value="" name="<?php echo $_G['setting']['reginput']['email'];?>" placeholder="邮箱" fwin="login"></li>
<?php if(empty($invite) && ($_G['setting']['regstatus'] == 2 || $_G['setting']['regstatus'] == 3)) { ?>
<li><input type="text" name="invitecode" autocomplete="off" tabindex="5" class="inp" value="邀请码" placeholder="邀请码" fwin="login"></li>
<?php } if($_G['setting']['regverify'] == 2) { ?>
<li><input type="text" name="regmessage" autocomplete="off" tabindex="6" class="inp" value="注册原因" placeholder="注册原因" fwin="login"></li>
<?php } if($secqaacheck || $seccodecheck) { ?>
<li><?php $sechash = 'S'.random(4);
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
</li>
<?php } ?>
<li><button tabindex="7" value="true" name="regsubmit" type="submit" class="formdialog btn1">立即注册</button></li>
</ul>
</div>
</form>
</div>
<!-- registerbox end --><?php updatesession();?><?php include template('common/footer'); ?>