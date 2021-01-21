<?php
/**
 * The Header for our theme.
 * @package Multipurpose Portfolio
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php if ( function_exists( 'wp_body_open' ) ) {
	    wp_body_open();
	} else {
	    do_action( 'wp_body_open' );
	}?>
	
	<?php if(get_theme_mod('multipurpose_portfolio_preloader',true)){ ?>
	    <?php if(get_theme_mod( 'multipurpose_portfolio_preloader_type','Square') == 'Square'){ ?>
	        <div id="overlayer"></div>
	        <span class="tg-loader">
	        	<span class="tg-loader-inner"></span>
	        </span>
	    <?php }else if(get_theme_mod( 'multipurpose_portfolio_preloader_type') == 'Circle') {?>    
	        <div class="preloader">
		        <div class="preloader-container">
		            <span class="animated-preloader"></span>
		        </div>
	        </div>
	    <?php }?>
	<?php }?>
	<header role="banner">
		<a class="screen-reader-text skip-link" href="#maincontent"><?php esc_html_e( 'Skip to content', 'multipurpose-portfolio' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Skip to content', 'multipurpose-portfolio' ); ?></span></a>
		<?php if (has_nav_menu('primary')){ ?>
			<div class="toggle-menu responsive-menu">
	            <button role="tab" class="mobiletoggle"><i class="fas fa-bars"></i><?php esc_html_e('Menu','multipurpose-portfolio'); ?><span class="screen-reader-text"><?php esc_html_e('Menu','multipurpose-portfolio'); ?></span></button>
	        </div>
	    <?php }?>
		<div id="header">
			<div class="container">
				<?php if(get_theme_mod('multipurpose_portfolio_top_header',true)){ ?>
					<div class="top-bar">
					    <div class="row">
					    	<div class="offset-lg-3 col-lg-9">
					    		<div class="row">
							      	<div class="col-lg-3 col-md-3">
							          	<?php if ( get_theme_mod('multipurpose_portfolio_call','') != "" ) {?>
								        	<div class="call">
								            	<p><a href="tel:<?php echo esc_attr(get_theme_mod('multipurpose_portfolio_call','')); ?>"><i class="fas fa-phone-volume"></i><?php echo esc_html(get_theme_mod('multipurpose_portfolio_call','')); ?><span class="screen-reader-text"><?php esc_html_e('Phone Number', 'multipurpose-portfolio') ?></span></a></p>
								        	</div>
							          	<?php }?>
							      	</div>
							      	<div class="col-lg-4 col-md-4">
							      		<?php if ( get_theme_mod('multipurpose_portfolio_email','') != "" ) {?>
								        	<div class="mail">
								            	<p><a href="mailto:<?php echo esc_attr(get_theme_mod('multipurpose_portfolio_email','')); ?>"><i class="fas fa-envelope"></i><?php echo esc_html(get_theme_mod('multipurpose_portfolio_email','')); ?><span class="screen-reader-text"><?php esc_html_e('Email', 'multipurpose-portfolio') ?></span></a></p>
								        	</div>
							          	<?php }?>
							      	</div>
							    </div>
						    </div>
					    </div>
					</div>
				<?php }?>
				<div class="row m-0">
					<div class="col-lg-3 col-md-4 pr-0">
						<div class="logo">
				          	<?php if ( has_custom_logo() ) : ?>
				            	<div class="site-logo"><?php the_custom_logo(); ?></div>
				            <?php endif; ?>
			                <?php $blog_info = get_bloginfo( 'name' ); ?>
			                <?php if ( ! empty( $blog_info ) ) : ?>
				                <?php if ( is_front_page() && is_home() ) : ?>
				                	<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				                <?php else : ?>
				                  <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				                <?php endif; ?>
				            <?php endif; ?>
			                <?php
			                $description = get_bloginfo( 'description', 'display' );
			                if ( $description || is_customize_preview() ) :
			                ?>
			                	<p class="site-description">
			                    <?php echo esc_html($description); ?>
			                	</p>
			                <?php endif; ?>
				        </div>
					</div>
					<div class="col-lg-9 col-md-8 pl-0">
						<div class="after-logo <?php if( get_theme_mod( 'multipurpose_portfolio_sticky_header') != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
							<div class="row">
						    	<div class="<?php if(get_theme_mod('multipurpose_portfolio_show_search',true)) { ?>col-lg-11 col-md-10" <?php } else { ?>col-lg-12 col-md-11 <?php } ?>">
						            <div id="sidelong-menu" class="nav side-nav">
						                <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'multipurpose-portfolio' ); ?>">
						                  	<?php if (has_nav_menu('primary')){
							                    wp_nav_menu( array( 
							                      'theme_location' => 'primary',
							                      'container_class' => 'main-menu-navigation clearfix' ,
							                      'menu_class' => 'clearfix',
							                      'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
							                      'fallback_cb' => 'wp_page_menu',
							                    ) ); 
						                  	}?>
						                    <a href="javascript:void(0)" class="closebtn responsive-menu"><?php esc_html_e('Close Menu','multipurpose-portfolio'); ?><i class="fas fa-times-circle"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','multipurpose-portfolio'); ?></span></a>
						                </nav>
						            </div>
						    	</div>
						    	<?php if(get_theme_mod('multipurpose_portfolio_show_search',true) != false ){ ?>
							    	<div class="search-box col-lg-1 col-md-2 pl-0">
							           <div class="wrap"><?php get_search_form(); ?></div>
							        </div>
							    <?php }?>
						    </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<?php if(get_theme_mod('multipurpose_portfolio_post_featured_image') == 'banner' ){
	    if( is_singular() ) {?>
	      	<div id="page-site-header">
		        <div class='page-header'> 
		          	<?php the_title( '<h1>', '</h1>' ); ?>
		        </div>
	      	</div>
	    <?php }
	}?>