<div class="teaser sample">
	<div class="type"><?php echo $type; ?></div>
	<h2 class="title"><?php echo $title; ?></h2>
	<?php if(isset($sub_title)): ?>
		<h3 class="sub-title"><?php echo $sub_title; ?></h3>
	<?php endif; ?>
	<div class="pub"><span class="label">Publication:</span><?php echo $pub; ?></div>
	<div class="body"><span class="label">Excerpt:</span><?php echo $excerpt; ?></div>
	<div class="more"><a href="<?php echo $path; ?>">read more</a></div>
</div>
