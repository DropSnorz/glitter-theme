<?php foreach ($posts as $Post): ?>

<!-- Post -->
<div class="col-md-6">
	<div class="post card">

		<!-- Cover Image -->
		<?php
			if($Post->coverImage()) {
				echo '<a href="'.$Post->permalink().'" class="card-img-top"><img src="'.$Post->coverImage().'" alt="Cover Image"></a>';
			}
		?>

		<div class="card-block">
		<!-- Plugins Post Begin -->
		<?php Theme::plugins('postBegin') ?>

		<!-- Heading -->
		<a href="<?php echo $Post->permalink() ?>"><h3><?php echo $Post->title() ?></h3></a>

		<hr>
		
		<div class="post-content">
		        <?php echo $Post->content(false) ?>

		        <?php if($Post->readMore()) { ?>
		        <a class="read-more" href="<?php echo $Post->permalink() ?>"><?php $Language->p('Read more') ?></a>
			<?php } ?>
		</div>

		<div class="foot-post card-footer">
			<strong><?php $Language->p('Tags') ?></strong>
			<?php
				$links = array();
				$tags = $Post->tags(true);

				foreach($tags as $tagKey=>$tagName) {
					$links[] = '<a href="'.HTML_PATH_ROOT.$Url->filters('tag').'/'.$tagKey.'">'.$tagName.'</a>';
				}

				echo implode(', ', $links);
			?>
		</div>

		<!-- Plugins Post End -->
		<?php Theme::plugins('postEnd') ?>

	</div>

	</div>
</div>
<!-- /post -->

<?php endforeach; ?>

<!-- Paginator for posts -->
<?php echo Paginator::html() ?>