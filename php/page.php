<!-- Page -->
<div class="post">

	<!-- Plugins Page Begin -->
	<?php Theme::plugins('pageBegin') ?>

	<!-- Heading -->
	<a href="<?php echo $Page->permalink() ?>"><h1><?php echo $Page->title() ?></h1></a>

	<hr>
	<!-- Cover Image -->
	<?php
		if($Page->coverImage()) {
			echo '<a href="'.$Page->permalink().'"><img class="img-responsive" src="'.$Page->coverImage().'" alt="Cover Image"></a>';
		}
	?>
	
	<div class="col-md-12">
        <?php echo $Page->content() ?>

	<!-- Plugins Page End -->
	<?php Theme::plugins('pageEnd') ?>

</div>
<!-- /Page -->