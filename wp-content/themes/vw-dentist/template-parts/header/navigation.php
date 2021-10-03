<?php
/**
 * The template part for header
 *
 * @package VW Dentist 
 * @subpackage vw_dentist
 * @since VW Dentist 1.0
 */
?>

<?php
	$vw_dentist_search_hide_show = get_theme_mod( 'vw_dentist_search_hide_show' );
	if ( 'Disable' == $vw_dentist_search_hide_show ) {
		$colmd = 'col-lg-12 col-md-12';
	} else { 
		$colmd = 'col-lg-11 col-md-10 col-6';
	}
?>
<div id="header" class="menubar">
	<div class="header-menu <?php if( get_theme_mod( 'vw_dentist_sticky_header', false) != '' || get_theme_mod( 'vw_dentist_stickyheader_hide_show', false) != '') { ?> header-sticky"<?php } else { ?>close-sticky <?php } ?>">
		<div class="row m-0">
			<div class="<?php echo esc_html( $colmd ); ?> align-self-center">
				<?php if(has_nav_menu('primary')){ ?>
					<div class="toggle-nav mobile-menu">
		    			<button role="tab" onclick="vw_dentist_menu_open_nav()" class="responsivetoggle"><i class="<?php echo esc_attr(get_theme_mod('vw_dentist_res_open_menu_icon','fas fa-bars')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Open Button','vw-dentist'); ?></span></button>
					</div>
				<?php } ?>
				<div id="mySidenav" class="nav sidenav">
		          	<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'vw-dentist' ); ?>">
						<?php 
							if(has_nav_menu('primary')){
								wp_nav_menu( array( 
									'theme_location' => 'primary',
									'container_class' => 'main-menu clearfix' ,
									'menu_class' => 'clearfix',
									'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
									'fallback_cb' => 'wp_page_menu',
								) ); 
							} 
						?>
			            <a href="javascript:void(0)" class="closebtn mobile-menu" onclick="vw_dentist_menu_close_nav()"><i class="<?php echo esc_attr(get_theme_mod('vw_dentist_res_close_menus_icon','fas fa-times')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Close Button','vw-dentist'); ?></span></a>
		          	</nav>
	        	</div>
			</div>
			<?php if ( 'Disable' != $vw_dentist_search_hide_show ) {?>
				<div class="col-lg-1 col-md-2 col-6 align-self-center">
					<div class="search-box">
		              <span><a href="#"><i class="<?php echo esc_attr(get_theme_mod('vw_dentist_search_icon','fas fa-search')); ?>"></i></a></span>
		            </div>
				</div>
			<?php } ?>
		</div>
	</div>
	<div class="serach_outer">
	    <div class="closepop"><a href="#maincontent"><i class="<?php echo esc_attr(get_theme_mod('vw_dentist_search_close_icon','fa fa-window-close')); ?>"></i></a></div>
	    <div class="serach_inner">
	      <?php get_search_form(); ?>
	    </div>
	</div>
</div>