
<div id="header-container">
	<div id="header">
		<div id="logo"><a href="/"><?php echo $site_name; ?></a></div>
		<div id="slogan"><?php echo $site_slogan; ?></div>
	</div>
</div>

<div id="main-container">
	<div class="main">
		<?php print render($page['content']); ?>
	</div>
</div>

<div id="footer-container">
	<footer>
		<div class="inner">
			<div class="footer-main"><?php print render($page['footer_main']); ?></div>
			
			<div class="footer-right">
				<div class="tri"><img src="/sites/all/themes/base/images/tri.png" alt=""></div>
				<div id="logo-big"><img src="/sites/all/themes/base/images/logo-big.png" alt=""></div>
				
				<div class="info">
					<div class="title">Writing & Editing Solutions, LLC</div>
					<div class="email"><a href="mailto:info@mdwesolutions.com">info@mdwesolutions.com</a></div>
					<div class="phone">(703) 520-2783</div>
					<div class="social-icons">
						<a href="http://www.linkedin.com/profile/view?id=339881891" class="icon-linkedin" target="_blank"></a>
						<a href="https://twitter.com/mdwesolultions" class="icon-twitter" target="_blank"></a>
					</div>
				</div>
			</div>

			<div class="footer-left">
				<div class="slogan">Words matter.</div>
			</div>
		</div>
		
	</footer>
</div>
