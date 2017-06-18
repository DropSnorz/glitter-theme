<!DOCTYPE html>
<html lang="<?php echo $Site->language() ?>">
<head>

<!-- Meta tags -->
<?php include(PATH_THEME_PHP.'head.php') ?>

</head>
<body>

	<!-- Plugins Site Body Begin -->
	<?php Theme::plugins('siteBodyBegin') ?>

	<!-- Navigation -->
	<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html" title="Dropsnorz | DrSico">
                  <img class="img-circle" style="max-height:35px; margin-top:-7px; display:inline-block;"
             		src="<?php echo HTML_PATH_THEME.'img/avatar.jpg' ?>">
             		Dropsnorz | DrSico

         		</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
		            <?php
		            echo '<li><a href="'.$Site->homeLink().'">'.$Language->get('Home').'</a></li>';
		            $parents = $pagesParents[NO_PARENT_CHAR];
		            foreach($parents as $Parent) {
		                if( $Parent->published() ) {
		                echo '<li><a href="'.$Parent->permalink().'">'.$Parent->title().'</a></li>';
		            }}
		            ?>
	           </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <header class="intro-header" style="background-image: url('<?php echo HTML_PATH_THEME.'img/head-bg.jpg' ?>')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>com.dropsnorz.thoughts</h1>
                        <hr class="small">
                        <!-- <span class="subheading"><?php echo ( Text::isNotEmpty($Site->slogan()) ) ? $Site->slogan() : 'Welcome to the machine'; ?></span> -->
                    	<div>
                    		<div class="tag-button">
                    			<i class="fa fa-gamepad fa-lg"></i>
                    		</div>
                    		<div class="tag-button">
                    			<i class="fa fa-code fa-lg"></i>
                    		</div>
                    		<div class="tag-button">
                    			<i class="fa fa-headphones fa-lg"></i>
                    		</div>
                    	</div>
                    </div>
                </div>
            </div>
        </div>
    </header>


	<!-- Content -->
	<div class="content">
		<div class="container">
	        <?php
	            if( ($Url->whereAmI()=='home') || ($Url->whereAmI()=='tag') )
	            {
	                include(PATH_THEME_PHP.'home.php');
	            }
	            elseif($Url->whereAmI()=='post')
	            {
	                include(PATH_THEME_PHP.'post.php');
	            }
	            elseif($Url->whereAmI()=='page')
	            {
	                include(PATH_THEME_PHP.'page.php');
	            }
	        ?>
		</div>
	</div>

	<footer>
		<div class="container">
		<p class="text-centered foot-cp"><?php echo $Site->footer() ?> | <a href="https://twitter.com/dropsnorz">Theme by @dropsnorz</a></p>
		</div>
	</footer>

	<!-- Javascript -->
	<?php
		Theme::jquery();
		Theme::javascript('bootstrap.min.js');
		Theme::javascript('glitter.js');

	?>

	<!-- Plugins Site Body Begin -->
	<?php Theme::plugins('siteBodyEnd') ?>

</body>
</html>
