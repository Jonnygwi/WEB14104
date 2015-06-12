<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 */
?>

<?php get_header(); ?>

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

            <div class="content">
                <div class="row">
                    <div class="twelve columns">
                        <div id="slider">
                        <figure>
                            <img src="<?php echo get_site_url(); ?> /wp-content/uploads/2015/06/slide1.jpg">
                            <img src="<?php echo get_site_url(); ?> /wp-content/uploads/2015/06/slide2.jpg">
                            <img src="<?php echo get_site_url(); ?> /wp-content/uploads/2015/06/slide-3.jpg">
                            <img src="<?php echo get_site_url(); ?> /wp-content/uploads/2015/06/slide4.jpg">
                            <img src="<?php echo get_site_url(); ?> /wp-content/uploads/2015/06/slide-3.jpg">
                        </figure>
                        </div>
                    </div>
                </div>
                <div class="row panelspacer"></div>
                <section class="welcome">
                    <div class="row panel">
                        <div class="six columns">
                                <div class="half">
                                    <a href="/hongik/courses/"><h4 class="hp-titles">Looking to start in September? <br> Browse our courses here!</h4></a>
                                <img src="<?php echo get_site_url(); ?> /wp-content/uploads/2015/06/student.jpg">
                                <p>Design not only plays a leading role in the creation of products and systems that affect people’s lives and society as a whole
but, is also a critical element in creating a better world for all those who live in it.<a href="/hongik/courses/" id="fulllist" style="color:black !important">Course list</a></p>
                                </div>
                        </div>
                        <div class="six columns">
                            <div class="half">
                                <h4 class="hp-titles">Interesting in coming to an openday? <br> Reserve your slot!</h4>
                                <img src="<?php echo get_site_url(); ?> /wp-content/uploads/2015/06/52-e1409618818519.jpg">
                                <p>Our open days are designed to help you find out more about our courses and how we can help you reach your creative potential.</p>
                            </div>
                        </div>                       

                    </div>
                </section>
                <row><div class="panelspacer"></div></row>
                <section class="news">
                    <div class="row panel">
                        <div class="three columns">
                            <div class="quater">
                                <h4 class="hp-titles">Register your interest</h4>
                                <img src="<?php echo get_site_url(); ?> /wp-content/uploads/2015/06/thumb3.jpg">
                            </div>
                        </div>
                        <div class="three columns">
                            <div class="quater">
                                <h4 class="hp-titles">Open house</h4>
                                <img src="<?php echo get_site_url(); ?> /wp-content/uploads/2015/06/thumb1.jpg">
                            </div>   
                        </div>
                        <div class="three columns">
                            <div class="quater">
                                <h5 class="hp-titles">Design-thinking-forward</h5>
                                <img src="<?php echo get_site_url(); ?> /wp-content/uploads/2015/06/thumb4.jpg">
                            </div>
                        </div>
                        <div class="three columns">
                            <div class="quater">
                                <h5 class="hp-titles">Exhibition design at DDP</h5>
                                <img src="<?php echo get_site_url(); ?> /wp-content/uploads/2015/06/thumb2.jpg">
                            </div>
                        </div>
                    </div>
                </section>
                <row><div class="panelspacer"></div></row>
                <section class="events">
                    <div class="row panel">
                        <div class="four columns">
                            <div class="quater">
                                <h4 class="hp-titles">BK21 Plus</h4>
                                <img src="<?php echo get_site_url(); ?> /wp-content/uploads/2015/06/image3.png">
                            </div>
                        </div>
                        <div class="four columns">
                            <div class="quater">
                                <h4 class="hp-titles">New growth engine</h4>
                                <img src="<?php echo get_site_url(); ?> /wp-content/uploads/2015/06/image1.jpg">
                            </div>
                        </div>
                        <div class="four columns">
                            <div class="quater">
                                <h4 class="hp-titles">2015 Haknyeondo</h4>
                                <img src="<?php echo get_site_url(); ?> /wp-content/uploads/2015/06/image2.png">
                            </div>
                        </div>
                    </div>
                </section>
                <div class="row panelspacer"></div>
            </div>

		</article>

		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part('templates/404'); ?>

	<?php endif; ?>

<?php get_footer(); ?>
