<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package sparkling
 */
?>
		</div> <!--</div> close .*-inner (main-content or sidebar, depending if sidebar is used) -->
	</div> <!--</div> close .row -->
</div> <!--</div> close .container -->
<div id="form-sidebar" >
	<div id="secondary" class="widget-area col-sm-12 col-md-4" role="complementary">
		<div class="well">
			<?php do_action( 'before_sidebar' ); ?>
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

				<aside id="search" class="widget widget_search">
					<?php get_search_form(); ?>
				</aside>

				<aside id="archives" class="widget">
					<h3 class="widget-title"><?php esc_html_e( 'Archives', 'sparkling' ); ?></h3>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>

				<aside id="meta" class="widget">
					<h3 class="widget-title"><?php esc_html_e( 'Meta', 'sparkling' ); ?></h3>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</aside>

			<?php endif; // end sidebar widget area ?>
            <button type="button" class="voltar-form" onclick="Mudarestado('form-sidebar')">Voltar</button>
		</div>
	</div><!-- #secondary -->	
</div>

<script>function Mudarestado(el) {
    var display = document.getElementById(el).style.top;
    if(display == "")
        document.getElementById(el).style.top = '64px';
    else
        document.getElementById(el).style.top = '';
}</script>