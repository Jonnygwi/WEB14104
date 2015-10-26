<!doctype html>
<html class="no-js" lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<?php // wp_head(); // wordpress head functions ?>

		<link href="<?php theHTML5BoilerplateDirectory(); ?>css/normalize.css" rel="stylesheet">
		<link href="<?php theSkeletonDirectory(); ?>css/skeleton.css" rel="stylesheet">
		<link href="<?php theActiveThemeDirectory(); ?>css/main.css" rel="stylesheet">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
		<script src="<?php theHTML5BoilerplateDirectory(); ?>js/vendor/modernizr-2.8.3.min.js"></script>
	</head>

	<body <?php body_class(); ?>>
		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
<div id="headcontainer">
                    <section id="nav">
<!--
                        <div id="logo">
                            <a href="/hongik"></a>
                        </div>
-->
                        <div>
                            <h3 id="title"><a href="/hongik">Hongik University</a></h3><a href="/hongik"><img id="logoimg" src="<?php echo get_site_url(); ?> /wp-content/uploads/2015/06/hong.jpg"></a>
                        </div>
                        <nav>
                            <ul>
                                <li class="menubuttons"><a id="coursesearchtoggle">Courses</a></li>
                                <li id="studying" class="menubuttons"><a href="studyinghere.html">Study@</a></li>
                                <li id="living" class="menubuttons"><a href="living.html">Living</a></li>
                                <li id="research" class="menubuttons"><a href="research.html">Research</a></li>
                                <li id="about" class="menubuttons"><a href="about.html">About</a></li>
                            </ul>
                        </nav>
                    </section>
                <section class="coursesearchsection">
                    <form>
                        <input id="coursesearch" type="text" placeholder="Search courses..."><?php get_search_form( $echo );?>
                        <a id="fulllist" href="/hongik/courses/">or view full course list</a>
                    </form>
                </section>
</div>
        