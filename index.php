<?php

get_header();

?>
 <section id="header">
<?php get_sidebar( 'primary' ); ?>
</section>
		<!-- Wrapper -->
			<div id="wrapper">
					<div id="main">
						<!-- One -->
							<section id="one">
							<div class="image main" data-position="center">
				  <img src="<?php bloginfo('template_directory');?>/images/banner.jpg" alt="" />
				 </div>
				 
				 <div class="container">
				 <header class="major">
				
									
									<?php if( have_rows('read_only') ): 
								  while( have_rows('read_only') ): the_row(); ?>
								 <h2><?php echo the_sub_field('heading') ?></h2>
								 <p><?php echo the_sub_field('description') ?></p>
								 </header>
								 <p><?php echo the_sub_field('content') ?></p>
                                         	<?php endwhile;
                                            else :
                                       endif;
                                      ?>
								</div>
							</section>

						<!-- Two -->
							<section id="two">
								<div class="container">
								<?php if( have_rows('read_only') ): 
								  while( have_rows('read_only') ): the_row(); ?>
									<h3><?php echo the_sub_field('heading2') ?></h3>
								 <p><?php echo the_sub_field('description2') ?></p>
								 <?php endwhile;
                                            else :
                                       endif;
                                      ?>
									<ul class="feature-icons">
									<?php if( have_rows('icons') ): 
								  while( have_rows('icons') ): the_row(); ?>
								  <li class="icon solid <?php echo the_sub_field('icon') ?>">	
									<?php echo the_sub_field('name') ?> </li>
                                         	<?php endwhile;
                                            else :
                                       endif;
                                      ?>
									</ul>
								</div>
							</section>

						<!-- Three -->
							<section id="three">
								<div class="container">
								<?php if( have_rows('read_only') ): 
								  while( have_rows('read_only') ): the_row(); ?>
									<h3><?php echo the_sub_field('heading3') ?></h3>
								 <p><?php echo the_sub_field('description3') ?></p>
								 <?php endwhile;
                                            else :
                                       endif;
                                      ?>
									<div class="features">

										<?php if( have_rows('slides') ): 
								  while( have_rows('slides') ): the_row(); ?>
				<article>
									  
			 <a href="#" class="image"><img src="<?php echo get_sub_field('image')['url']; ?>" alt="<?php get_sub_field('image')['alt'] ?>" /></a>
			 <div class="inner">
		     <h4><?php echo the_sub_field('description') ?></h4>
			 <p><?php echo the_sub_field('content') ?></p>
										</div>
										</article>
									   <?php endwhile;
									   else :
                                    endif;
                                   ?>
									</div>
								</div>
							</section>

						<!-- Four -->
							<section id="four">
								<div class="container">
								<?php if( have_rows('read_only') ): 
								  while( have_rows('read_only') ): the_row(); ?>
									<h3><?php echo the_sub_field('heading4') ?></h3>
								 <p><?php echo the_sub_field('description3') ?></p>
								
									<form method="post" action="#">
										
									<?php echo the_sub_field('form') ?> 
										
									</form>
									<?php endwhile;
                                            else :
                                       endif;
                                      ?>
								</div>
							</section>
								</div>
						
								<section id="footer">
						<div class="container">
							<ul class="copyright">
								<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</section>
					</div>