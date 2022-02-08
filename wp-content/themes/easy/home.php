<?php
/**
 * Template for Home Page
 */
get_header();
?>
<!-- header -->
<div id="header" style="background: url('<?php echo get_stylesheet_directory_uri().'/images/1920x1080.jpg)';?>' no-repeat center; background-size: cover; background-position: center;">
		<!-- particles -->
		<div id="particles" class="particles"></div>

			<div class="container">
				<div class="row">

					<div class="header-wrapper">
						<div class="header-content">
							
							<div class="hmb-wrapper">
								<span>
									<span id="menu">
									  <a id="nav-open" class="nav-button">
									    <span class="nav-button-part nav-button-part-1"></span>
									    <span class="nav-button-part nav-button-part-2"></span>
									    <span class="nav-button-part nav-button-part-3"></span>
									  </a>
									</span>
								</span>
							</div>

							<div class="header-main">
                            <h1>Wide Test</h1>
								
								<div class="hello color-white"></div>

								<div class="header-text">Html header dynamic links only</div>

							</div>
							
							
							<a href="#gallery" id="action" class="scroll-sub"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- gallery -->
		<div class="gallery" id="gallery">
			<div class="container">
				<div class="row center-block">
				<!-- Home posts loop -->
				<?php get_template_part( 'template-parts/content', 'home' );; ?>

				</div>
			</div>
		</div>		
<?php
get_footer();

		
