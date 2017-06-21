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

			<?php 
			$tags = $Post->tags(true);

			if(array_key_exists('jeux', $tags)  || array_key_exists('code', $tags) || array_key_exists('musique', $tags))
			{

			?>
			<figure class="profile">
				<span class="profile-icon">

					<?php
						$tags = $Post->tags(true);

						
						if(array_key_exists('jeux', $tags)){
							echo '<a href="'.HTML_PATH_ROOT.$Url->filters('tag').'/jeux">';

							echo '<i class="fa fa-gamepad fa-2x" style="color:#2ecc71;"> </i>';
							echo '</a>';
						}
						elseif (array_key_exists('code', $tags)){
							echo '<a href="'.HTML_PATH_ROOT.$Url->filters('tag').'/code">';

							echo '<i class="fa fa-code fa-2x" style="color:#c0392b;"> </i>';
							echo '</a>';

						}
						elseif (array_key_exists('musique', $tags)){
							echo '<a href="'.HTML_PATH_ROOT.$Url->filters('tag').'/musique">';
							echo '<i class="fa fa-headphones fa-2x" style="color:#34495e;"> </i>';
							echo '</a>';
						}
						else{
							echo '<i class="fa fa-compass fa-2x" style="color:#34495e;"> </i>';
						}

					?>

           		</span>
            </figure>
        <?php } ?>
		<!-- Plugins Post Begin -->
		<?php Theme::plugins('postBegin') ?>

		<div class="card-content">

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