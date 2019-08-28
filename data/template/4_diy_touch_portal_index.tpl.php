<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('index');
block_get('37,41,39,40,38');?><?php include template('common/header'); ?><header class="header p_header">
    <a class="topMenu fl" href="#mainNv">菜单</a>
    <?php if(!$_G['uid'] && !$_G['connectguest']) { ?>
    <a class="topLogin fr" href="member.php?mod=logging&amp;action=login"></a>
    <?php } else { ?>
    <a class="topLogin fr" href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>&amp;do=profile&amp;mycenter=1"><?php echo avatar($_G[uid]);?></a>
    <?php } ?>
    <h1 class="logo"><img  src="template/moke8_doormobile/touch/images/img/logo.png"></h1>
</header>
<div class="container">
    <script src="template/moke8_doormobile/touch/images/js/TouchSlide.1.1.js" type="text/javascript" type="text/javascript"></script>
    <!--二级导航-->
    <div class="nvBar">
        <div class="subNv">
            <ul>
                <li><a href="portal.php?mod=list&amp;catid=1">景观景点</a></li>
                <li><a href="portal.php?mod=list&amp;catid=4">游览攻略</a></li>
                <li><a href="portal.php?mod=list&amp;catid=5">节庆活动</a></li>
                <li><a href="portal.php?mod=list&amp;catid=6">庙会活动</a></li>
                <li><a href="portal.php?mod=list&amp;catid=7">特色指南</a></li>
            </ul>
        </div>
    </div>

    <!--焦点图-->
    <div class="xrSlider" id="xrSlider">
        <?php block_display('37');?>    </div>
    <script type="text/javascript">
        TouchSlide({
            slideCell:"#xrSlider",
            titCell:".sliderNum li",
            mainCell:".sliderCon ul",
            effect:"leftLoop",
            autoPlay:true //自动播放
        });
    </script>

    <!--热帖推荐-->
    <div class="hotPosts cfix pb">
        <?php block_display('41');?>    </div>

    <!--图文精选-->
    <div class="pb">
        <div class="hdTit cfix">
            <h2>图文精选</h2>
        </div>
        <div class="ausPt cfix" id="ausPt">
            <?php block_display('39');?>        </div>
        <script type="text/javascript">
            TouchSlide({
                slideCell:"#ausPt",
                titCell:".ausPtNum li",
                mainCell:".ausPtCon",
                effect:"leftLoop"
            });
        </script>
    </div>


    <!--最新主题-->
    <div class="pb">
        <div class="hdTit cfix">
            <h2>最新主题</h2>
            <span><a href="forum.php?mod=guide&amp;view=newthread">更多&gt;&gt;</a></span>
        </div>
        <div class="newPosts">
            <?php block_display('40');?>        </div>
    </div>

    <!--版块导航-->
    <div class="pb">
        <div class="hdTit cfix">
            <h2>版块导航</h2>
            <span><a href="forum.php?forumlist=1&amp;mobile=2">更多&gt;&gt;</a></span>
        </div>
        <div class="coluNv cfix">
            <?php block_display('38');?>        </div>
    </div>

    <?php if(!$_G['uid'] && !$_G['connectguest']) { ?>
    <div class="pb indexLogin">
        <p>登录之后可以体验更多功能！</p>
        <a href="member.php?mod=logging&amp;action=login">立即登录</a>
    </div>
    <?php } ?>
</div><?php include template('common/btfixed'); include template('common/footer'); ?>