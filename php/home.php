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

		<div class="ellipse"> </div>

		
		<div class="post-content post-preview">
		        <?php echo $Post->content(false) ?>

		        <?php if($Post->readMore()) { ?>
		        <a class="read-more" href="<?php echo $Post->permalink() ?>"><?php $Language->p('Read more') ?></a>
			<?php } ?>

		</div>


		<div class="foot-post card-footer">
			<div class="col-xs-8">
				<div><?php echo $Post->date(); ?></div>
				<?php
					$links = array();
					$tags = $Post->tags(true);

					foreach($tags as $tagKey=>$tagName) {
						$links[] = '<a class="post-tag" href="'.HTML_PATH_ROOT.$Url->filters('tag').'/'.$tagKey.'">#'.$tagName.'</a>';
					}

					echo implode(', ', $links);
				?>
			</div>
			<div class="col-xs-4">
				<div class="pull-right">
					<a class="btn btn-sm btn-default" href="<?php echo $Post->permalink() ?>">Lire</a>
				</div>
			</div>
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