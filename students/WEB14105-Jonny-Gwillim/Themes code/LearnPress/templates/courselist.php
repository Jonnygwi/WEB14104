<?php
/**
 * Template Name: Course List
 *
 *	This is an example using Skeleton
 *
 */
?>

<?php get_header(); ?>

<div class="container" id="courselistpage">

   	<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>
    
    <div class="row coursestitle">
        <div class="three columns"><p> </p></div>
        <div class="one column"><p> </p></div>
        <div class="eight columns coursestitle">
            <h2>Courses</h2>
        </div>
    </div>
    
    <div class="row">	
        <div class="three columns filterbox">
            <section class="filters">
                <div class="controls">
                    <ul>
                        <li><p class="filter filtertitle">Course Level</p></li>
                        <li><input type="checkbox" name="Course Level" value="BA" class="filter" id="BA"><label for="BA"><span>BA</span></label></li>
                        <li><input type="checkbox" name="Course Level" value="BSc" class="filter" id="BSc"><label for="BSc"><span>BSc</span></label></li>
                        <li><input type="checkbox" name="Course Level" value="MA" class="filter" id="MA"><label for="MA"><span>MA</span></label></li>
                        <li><input type="checkbox" name="Course Level" value="ME" class="filter" id="ME"><label for="ME"><span>ME</span></label></li>
                        <li><input type="checkbox" name="Course Level" value="MEd" class="filter" id="MEd"><label for="MEd"><span>MEd</span></label></li>
                        <li><input type="checkbox" name="Course Level" value="MFA" class="filter" id="MFA"><label for="MFA"><span>MFA</span></label></li>
                        <li><input type="checkbox" name="Course Level" value="MRD" class="filter" id="MRD"><label for="MRD"><span>MRD</span></label></li>
                        <li><input type="checkbox" name="Course Level" value="MSc" class="filter" id="MSc"><label for="MSc"><span>MSc</span></label></li>
                        <li><input type="checkbox" name="Course Level" value="MS" class="filter" id="MS"><label for="MS"><span>MS</span></label></li>
                        <li><input type="checkbox" name="Course Level" value="PhD" class="filter" id="PhD"><label for="PhD"><span>PhD</span></label></li>
                        <li><input type="checkbox" name="Course Level" value="PSM" class="filter" id="PSM"><label for="PSM"><span>PSM</span></label></li>
                    </ul>
                </div>
            </section>
           </div>
    <div class="one column">
        <p></p>
    </div>
        <div class="eight columns">
            <div id="container">
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				
				<h1><?php the_title(); ?></h1>
                
                
                
                <?php 

                $posts = get_field('course');

                if( $posts ): ?>
                
                    <script> var courses = []; // empty array </script>
                    <ul id="courses">
                    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                        <?php setup_postdata($post); ?>
                        <li class="<?php the_field('level'); ?>">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <script> courses.push("<?php the_title(); ?>") </script>
                            <span><?php the_field('level'); ?></span>
                            
                            
                            <?php 

                                $team = get_field('meet_the_team'); 
//                                consoleLog($team, 'log');
                            
                            ?>
                            
                            
                        </li>
                    <?php endforeach; ?>
                    </ul>
                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                    <?php endif; ?>

                </article>
            </div>
        </div>    
    </div>

		</div>

		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part('templates/404'); ?>

	<?php endif; ?>

</div>	

<?php get_footer(); ?>