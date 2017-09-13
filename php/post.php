<!-- Post -->
<div class="post">

	<!-- Plugins Post Begin -->
	<?php Theme::plugins('postBegin') ?>

	<!-- Heading -->
	<a href="<?php echo $Post->permalink() ?>"><h1><?php echo $Post->title() ?></h1></a>

	<hr>
	<!-- Cover Image -->
	<?php
		if($Post->coverImage()) {
			echo '<a href="'.$Post->permalink().'"><img class="img-responsive" src="'.$Post->coverImage().'" alt="Cover Image"></a>';
		}
	?>
	<div class="col-md-12">
        <?php echo $Post->content() ?>

		<div class="col-md-12">

			    	<strong><?php $Language->p('Tags: ') ?></strong>
			    	<?php
			    	$links = array();
			    	$tags = $Post->tags(true);
			    	foreach($tags as $tagKey=>$tagName) {
			    		$links[] = '<a href="'.HTML_PATH_ROOT.$Url->filters('tag').'/'.$tagKey.'">#'.$tagName.'</a>';
			    	}
			    	echo implode(', ', $links);
			    	?>
		</div>

		<div class="col-md-12">
			<!-- Plugins Post End -->
			<?php Theme::plugins('postEnd') ?>

		</div>
	</div>
</div>
<!-- /post -->
