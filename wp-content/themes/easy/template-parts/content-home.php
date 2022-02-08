<?php
/**
 *  Templayte for displat home loop
 */
?>


<div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-12">
						<h2>Recent Posts</h2>
						<p class="title-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br> Iste ratione molestias magni.</p>
						<p class="text-spacing">It’s not a job, It’s a life.</p>
					</div>
					<div class="gallery-wrapper	col-sm-12 col-xs-12">
                            <!-- portfolio-row-1 -->
						<div class="portfolio-block">
                        <ul class="work-list">
                       <?php
                                    $args = array(
                                        'post_type' => 'post',
                                        'posts_per_page'	=> 6,
                                        'order'		=> 'DESC'
                                          );
                                   $the_query = new WP_Query( $args ); ?>
              
                        <?php if ( $the_query->have_posts() ) : ?>
                        
                            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <?php $author_name = get_the_author_meta( 'nicename') ?>
                            <?php $post_link = get_permalink(); ?>
								<li>

                                    <a  href="<?php echo  $post_link; ?>">
									<h2 id="post-title"><?php the_title(); ?></h2>	
								</a>
                            
                                <div class="project-client">by <?php echo $author_name;?></div>
                                <p class="post_read_more"><a  href="<?php echo  $post_link; ?>">Read More</a></p>
                            </li>
						
						
                              <?php endwhile; ?>
                                <!-- end of the loop -->
                        <?php wp_reset_postdata(); ?>
 
                        <?php else : ?>
                            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                        <?php endif; ?>
                        	</ul>
                        </div>
					</div>

					<div class="col-sm-12">
						<a href="#" class="see-more">See more <i class="fa fa-long-arrow-right"></i></a>
					</div>