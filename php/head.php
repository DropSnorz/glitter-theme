<title><?php echo $Site->title() ?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo $Site->description() ?>">

<?php

// <meta name="keywords" content="HTML,CSS,XML,JavaScript">
if( $Url->whereAmI()=='post' ) {
	Theme::keywords( $Post->tags() );
}
elseif( $Url->whereAmI()=='page' ) {
	Theme::keywords( $Page->tags() );
}

/*
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/font-awesome.min.css" />
<link rel="stylesheet" href="css/custom.css" />
*/
Theme::css(array(
	'bootstrap.min.css',
	'font-awesome.min.css',
	'glitter.css'
));

/*
<link href="http://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
*/
Theme::css(array(
	'https://fonts.googleapis.com/css?family=Lato:400,700',
	'https://fonts.googleapis.com/css?family=Open+Sans:400,700'
), false);

Theme::favicon();

// Plugins Site Head
Theme::plugins('siteHead');
