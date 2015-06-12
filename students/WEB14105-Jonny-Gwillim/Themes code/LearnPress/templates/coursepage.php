<?php
/**
 * Template Name: Course Page
 *
 *	This is an example using Skeleton
 *
 */
?>

<?php get_header(); ?>

<div class="container">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

		<div class="row">	

			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				
				<div class="twelve columns">
					<h1><?php the_title(); ?></h1>
				</div>	

				<div class="twelve columns entry">
					<?php the_content(); ?>
				</div>
                
                <div>
                    <?php 
the_field ('course_description');
                    ?></div>
                
                <div><?php the_field ('course_content');?></div>
                
                <div><?php the_field ('course_structure');?></div>
                
                <div>
                    
                    <?php 

                    $tutors = get_field('meet_the_team');

                    if( $tutors ): ?>
                        <ul>
                        <?php foreach( $tutors as $tutor ): ?>
                            <li>
                                <?php the_field('name', $tutor->ID); ?> <?php the_field('surname', $tutor->ID); ?>
                            </li>
                        <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    
                    
                    
                    <?php the_field ('');?></div>

			</article>

		</div>

		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part('templates/404'); ?>

	<?php endif; ?>

</div>	

<?php get_footer(); ?>