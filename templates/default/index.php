<!DOCTYPE html>
<html lang="zh-ch" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<title><?php echo $site_setting['title']; ?></title>
	<meta name="generator" content="EverEdit" />
	<meta name="author" content="xiaoz<www.xiaoz.me>" />
	<meta name="keywords" content="<?php echo $site_setting['keywords']; ?>" />
	<meta name="description" content="<?php echo $site_setting['description']; ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='stylesheet' href='https://cdn.bootcdn.net/ajax/libs/mdui/1.0.1/css/mdui.min.css'>
	<link rel='stylesheet' href='https://cdn.bootcdn.net/ajax/libs/jquery-contextmenu/2.9.2/jquery.contextMenu.min.css'>
	<link rel="stylesheet" href="https://cdn.bootcdn.net/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="templates/<?php echo TEMPLATE; ?>/static/style.css?v=<?php echo $version; ?>">
	<script src = 'https://cdn.bootcdn.net/ajax/libs/mdui/1.0.1/js/mdui.min.js'></script>
    <script src = 'https://html2canvas.hertzen.com/dist/html2canvas.min.js'></script>
	<!-- <script src="https://cdn.jsdelivr.net/npm/hotkeys-js@3.7.3/dist/hotkeys.min.js"></script> -->
</head>
<body class = "mdui-drawer-body-left mdui-appbar-with-toolbar mdui-theme-primary-indigo mdui-theme-accent-pink mdui-loaded" id="hashclub">
	<!--导航工具-->
	<header class = "mdui-appbar mdui-appbar-fixed">
		<div class="mdui-toolbar mdui-color-theme">
		<!-- <button class="mdui-btn" mdui-drawer="{target: '#drawer'}"><i class="mdui-icon material-icons">home</i></button> -->
		<span class="mdui-btn mdui-btn-icon mdui-ripple mdui-ripple-white" mdui-drawer="{target: '#drawer', swipe: true}"><i class="mdui-icon material-icons">menu</i></span>
		  <!-- <a href="javascript:;" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">home</i></a> -->
		  <a href="/" class = "mdui-typo-headline" title = "<?php echo $site_setting['description'] ?>"  style="margin: unset; overflow: unset"><span class="mdui-typo-title "><?php echo $site_setting['logo']; ?></span></a>
		  <div class="mdui-toolbar-spacer"></div>
		  <!-- 搜索框 -->
		  <!-- <div class="mdui-col-lg-3">
			  <div class="mdui-textfield mdui-textfield-expandable mdui-float-right">
			<button class="mdui-textfield-icon mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">search</i></button>
			<input class="mdui-textfield-input search" type="text" placeholder="Search"/>
			<button class="mdui-textfield-close mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">close</i></button>
			</div>
		</div> -->
		  <!-- 搜索框END -->
		  <!-- 新版搜索框 -->
		  	<div class="mdui-col-md-4 mdui-col-xs-6">
				<div class="mdui-textfield mdui-textfield-floating-label">
					<!-- <label class="mdui-textfield-label">输入书签关键词进行搜索</label> -->
					<input class="mdui-textfield-input search" style = "color:#FFFFFF;" placeholder="输入关键词搜索" type="text" />
				</div>
			</div>
			<!-- 新版搜索框END -->
<!--            <a class = "mdui-hidden-xs" href="https://github.com/helloxz/onenav" rel = "nofollow" target="_blank" class="mdui-btn mdui-btn-icon mdui-ripple mdui-ripple-white" mdui-tooltip="{content: '查看 Github'}">-->
<!--                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36 36" enable-background="new 0 0 36 36" xml:space="preserve" class="mdui-icon" style="width: 24px;height:24px;">-->
<!--        <path fill-rule="evenodd" clip-rule="evenodd" fill="#ffffff" d="M18,1.4C9,1.4,1.7,8.7,1.7,17.7c0,7.2,4.7,13.3,11.1,15.5-->
<!--	c0.8,0.1,1.1-0.4,1.1-0.8c0-0.4,0-1.4,0-2.8c-4.5,1-5.5-2.2-5.5-2.2c-0.7-1.9-1.8-2.4-1.8-2.4c-1.5-1,0.1-1,0.1-1-->
<!--	c1.6,0.1,2.5,1.7,2.5,1.7c1.5,2.5,3.8,1.8,4.7,1.4c0.1-1.1,0.6-1.8,1-2.2c-3.6-0.4-7.4-1.8-7.4-8.1c0-1.8,0.6-3.2,1.7-4.4-->
<!--	c-0.2-0.4-0.7-2.1,0.2-4.3c0,0,1.4-0.4,4.5,1.7c1.3-0.4,2.7-0.5,4.1-0.5c1.4,0,2.8,0.2,4.1,0.5c3.1-2.1,4.5-1.7,4.5-1.7-->
<!--	c0.9,2.2,0.3,3.9,0.2,4.3c1,1.1,1.7,2.6,1.7,4.4c0,6.3-3.8,7.6-7.4,8c0.6,0.5,1.1,1.5,1.1,3c0,2.2,0,3.9,0,4.5-->
<!--	c0,0.4,0.3,0.9,1.1,0.8c6.5-2.2,11.1-8.3,11.1-15.5C34.3,8.7,27,1.4,18,1.4z"></path>-->
<!--	  </svg>-->
                <?php
                if( is_login() ) {
                    ?>
                    <a href="/index.php?c=admin" ></a>
                <?php }else{ ?>
                    <a href="/index.php?c=login" ></a>
                <?php } ?>
<!--            </a>-->
		</div>
	</header>
	<!--导航工具END-->
	<!-- 添加按钮 -->
	<?php
		if( is_login() ) {
	?>	
	<div class="right-button mdui-hidden-xs" style="position: fixed;right:10px;bottom:80px;z-index:99;">
		<div>
		<button title = "快速添加链接" id = "add" class="mdui-fab mdui-color-theme-accent mdui-ripple mdui-fab-mini"><i class="mdui-icon material-icons">add</i></button>
		</div>
	</div>
	<?php } ?>
	<!-- 添加按钮END -->
	<!-- 返回顶部按钮 -->
	<div id="top"></div>
	<div class="top mdui-shadow-10">
        <button title = "分享" class="mdui-fab mdui-ripple mdui-fab-mini" onclick="gotop()"><i class="mdui-icon mdui-icon-left material-icons">share</i></button>
	</div>
	</div>
	<!-- 返回顶部END -->
		<!--左侧抽屉导航-->
	<!-- 默认抽屉栏在左侧 -->
	<div class="mdui-drawer" id="drawer">
	  <ul class="mdui-list">
	  	<?php
			//遍历分类目录并显示
			foreach ($categorys as $category) {
			//var_dump($category);
			
		?>
		<a href="#category-<?php echo $category['id']; ?>">
			<li class="mdui-list-item mdui-ripple">
				<div class="mdui-list-item-content category-name"><?php echo $category['name']; ?></div>
			</li>
		</a>
	    
		<?php } ?>
		<a href="http://www.hashclub.co/" target="_blank" title="HashClub">
			<li class="mdui-list-item mdui-ripple">
			    <div class="mdui-list-item-content category-name"><i class="fa fa-skyatlas" aria-hidden="true"></i>官方网站</div>
			</li>
		</a>
	  </ul>
	</div>
	<!--左侧抽屉导航END-->

	<!--正文内容部分-->
	<div class="mdui-container">
		<!-- 搜索框 -->
		<!-- <div class="mdui-row">
			<div class="mdui-col-xs-12">
				<div class="mdui-textfield mdui-textfield-floating-label">
					<label class="mdui-textfield-label">输入书签关键词进行搜索</label>
					<input class="mdui-textfield-input search" type="text" />
				</div>
			</div>
		</div> -->
		<!-- 搜索框END -->
		<div class="mdui-row">
			<!-- 遍历分类目录 -->
            <?php foreach ( $categorys as $category ) {
                $fid = $category['id'];
                $links = get_links($fid);
                //如果分类是私有的
                if( $category['property'] == 1 ) {
                    $property = '<i class="fa fa-expeditedssl" style = "color:#5FB878"></i>';
                }
                else {
                    $property = '';
                }
            ?>
			<div id = "category-<?php echo $category['id']; ?>" class = "mdui-col-xs-12 mdui-typo-title cat-title" style = "margin-top:1.5em;">
				<?php echo $category['name']; ?> <?php echo $property; ?>
				<span class = "mdui-typo-caption"><?php echo $category['description']; ?></span>
			</div>
			<!-- 遍历链接 -->
			<?php
				foreach ($links as $link) {
					//默认描述
					$link['description'] = empty($link['description']) ? '七妹很懒，没有填写描述。' : $link['description'];
					
				//var_dump($link);
			?>
			<div class="mdui-col-lg-3 mdui-col-md-4 mdui-col-xs-12 link-space" id = "id_<?php echo $link['id']; ?>" link-title = "<?php echo $link['title']; ?>" link-url = "<?php echo $link['url']; ?>">
				<!--定义一个卡片-->
				<div class="mdui-card link-line mdui-hoverable">
						<!-- 如果是私有链接，则显示角标 -->
						<?php if($link['property'] == 1 ) { ?>
						<div class="angle">
							<span> </span>
						</div>
						<?php } ?>
						<!-- 角标END -->
						<a href="/index.php?c=click&id=<?php echo $link['id']; ?>" target="_blank" title = "<?php echo $link['description']; ?>">

                            <div class="mdui-card-primary" style = "padding-top:16px;">
                                <div style="display: flex; justify-content: space-between;align-items: center">
                                    <div><img src="https://favicon.rss.ink/v1/<?php echo base64($link['url']); ?>" alt="HUAN" width="16" height="16"><span class="link_title"><?php echo $link['title']; ?></span></div>
                                    <?php if(!empty($link['ido_time']))  {   ?>
                                        <div  style="font-size: 0.45em;font-weight: normal;">IDO时间：<span><?php echo $link['ido_time'] ?></span></div>
                                    <?php } ?>
                                </div>
                                <div class="mdui-card-primary-title link-title">
                                    <?php if(!empty($link['url']))  {   ?>
                                        <div  style="font-size: 0.9em; font-weight: normal; margin-top: 0.8em ;overflow: hidden;
  text-overflow: ellipsis;">官网：<a href="/index.php?c=click&id=<?php echo $link['id']; ?>" target="_blank" title = "<?php echo $link['description']; ?>"><span><?php echo $link['url'] ?></span></a></div>
                                    <?php } ?>
<!--                                        --><?php //if(!empty($link['ido_time']))  {   ?>
<!--                                            <div  style="font-size: 0.9em;font-weight: normal; margin-top: 0.8em">IDO时间：<span>--><?php //echo $link['ido_time'] ?><!--</span></div>-->
<!--                                        --><?php //} ?>
                                    <?php if(!empty($link['ido_url']))  {   ?>
                                        <div style="font-size: 0.9em; font-weight: normal; margin-top: 0.8em">IDO地址：<a href="/index.php?c=click&id=<?php echo $link['id']; ?>" target="_blank" title = "<?php echo $link['description']; ?>"> <span ><?php echo $link['ido_url'] ?></span></a></div>
                                    <?php } ?>
									</div>
							</div>
<!--						</a>-->
						
					
					<!-- 卡片的内容end -->
					<div class="mdui-card-content mdui-text-color-black-disabled" style="margin-top: -16px"<span class="link-content"><?php echo $link['description']; ?></span></div>
				</div>
				<!--卡片END-->
			</div>
			<?php } ?>
			<!-- 遍历链接END -->
			<?php } ?>
		</div>
		<!-- row end -->


	</div>
	<div class="mdui-divider" style = "margin-top:2em;"></div>
	<!--正文内容部分END-->
	<!-- footer部分 -->
	<footer>
        <div style="margin: 0 2em;opacity: 0.8;display: flex; flex-direction: column;justify-content: center;">
            <p style="font-weight: bold; font-size: 1.45em">关于我们</p>
            <div style="text-align: justify;display: flex; flex-direction: column;align-items: center;">
                <p>HashClub创始团队来自头部区块链技术开发团队和投研资本，是一支专注于区块链一级市场金融项目投资孵化的队伍。并与区块链多个币圈头部资本和顶级项目达成战略合作。</p>
                <p>HashClub致力于发现、投资并孵化更多具有潜力价值的项目，从而推动赋能行业进步和应用落地，进一步建立投资生态，全面联合各个领域的资源，帮助项目更好地发展。</p>
                <p>更多优质一级项目额度欢迎加入电报，微信社区讨论。</p>
            </div>
            <div style="display: flex; justify-content: center">
                <img src="templates/default/static/hashclub.jpg" alt="微信公众号" style="width: 10em;height:10em ;">
                <a href="https://t.me/hashclub_co" >
                    <img src="templates/default/static/telegram.png" alt="telegram" style="width: 10em;height: 10em">
                </a>
            </div>
            <span>© 2021 The author is <a href="http://www.hashclub.co/" target="_blank" title = "哈希社区">HashClub</a></span>
        </div>
	</footer>
	<!-- footerend -->
</body>
<script src = 'https://cdn.bootcdn.net/ajax/libs/jquery/2.2.4/jquery.min.js'></script>
<script src="/static//layer/layer.js"></script>
<script src = 'https://cdn.bootcdn.net/ajax/libs/jquery-contextmenu/2.9.2/jquery.contextMenu.min.js'></script>
<script src = 'https://cdn.bootcdn.net/ajax/libs/clipboard.js/2.0.8/clipboard.min.js'></script>

<script src = "templates/<?php echo TEMPLATE; ?>/static/holmes.js"></script>
<script src="templates/<?php echo TEMPLATE; ?>/static/embed.js?v=<?php echo $version; ?>"></script>
<script>
<?php echo $onenav['right_menu']; ?>
</script>
<?php echo $onenav['extend']; ?>
</html>