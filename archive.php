<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package sparklin
 */

get_header(); ?>

	<section id="primary" class="content-area busca-curso-page">
		<main id="main" class="site-main busca-curso-placement" role="main">
		<?php
		if ( have_posts() ) :
			//custom_breadcrumbs(); ?>

			<header class="page-header grid-curso">
				<h1 class="page-title">
					<?php
						if ( is_category() ) :
							//single_cat_title();

						elseif ( is_tag() ) :
							single_tag_title();

						elseif ( is_author() ) :
							printf( esc_html__( 'Author: %s', 'sparkling' ), '<span class="vcard">' . get_the_author() . '</span>' );

						elseif ( is_day() ) :
							printf( esc_html__( 'Day: %s', 'sparkling' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( esc_html__( 'Month: %s', 'sparkling' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'sparkling' ) ) . '</span>' );

						elseif ( is_year() ) :
							printf( esc_html__( 'Year: %s', 'sparkling' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'sparkling' ) ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							esc_html_e( 'Asides', 'sparkling' );

						elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
							esc_html_e( 'Galleries', 'sparkling');

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							esc_html_e( 'Images', 'sparkling');

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							esc_html_e( 'Videos', 'sparkling' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							esc_html_e( 'Quotes', 'sparkling' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							esc_html_e( 'Links', 'sparkling' );

						elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
							esc_html_e( 'Statuses', 'sparkling' );

						elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
							esc_html_e( 'Audios', 'sparkling' );

						elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
							esc_html_e( 'Chats', 'sparkling' );

						else :
							esc_html_e( 'Archives', 'sparkling' );

						endif;
					?>
				</h1>
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<div class="grid-curso curso-config">
				<div class="grid-md full-search-course">
					<h1> Ache seu curso. </h1>
					<div id="descr-select">
						<p>Porque estamos pedindo UF e cidade? <br/>O curso é realizado totalmente a distância e você conta com apoio de tutores para auxiliarem durante o percurso de seu curso. Além disso, as avaliações são realizadas no Polo de Educação a distância. Por isto é importante sabermos qual região procura.</p>
					</div>
					<div class="search-form">
						<form method="GET" action="" class="meeting_search_form" id="meeting_search_form" data-ajaxurl="<?php echo home_url(); ?>/wp-admin/admin-ajax.php">
							<fieldset>
								<div class="select-area">
										<?php parent_locations_select(); ?>
								</div>
								<div class="select-area">
									<select name="cidade" id="cidade" disabled="disabled">
										<option value="selecione">Selecione uma cidade ...</option>
									</select>
								</div>
								<div>
									<select name="curso" id="curso" disabled="disabled">
										<option>Selecione um curso ...</option>
									</select>
								</div>
								<div class="submit-area">
									<a href="javascript:void" id="search" class="btn btn-default">Buscar</a>
								</div>
							</fieldset>
						</form>
						<?php //echo do_shortcode('[searchandfilter fields="taxonomy" hierarchical="1" show_count="1" submit_label="Buscar"]'); ?>
					</div>
					<div id="page-home" class="btn-path-go go-up"></div>
				</div>
			</div>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif;


		?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
