<?php
/**
 *  WP EASY GRID Admin Options Page Functions
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Direct access not allowed.
}

/**
 * Register a custom menu page
 */
  function wp_grid_register_options_menu_page() {
      add_menu_page(
  			__( 'WP Easy Grid', 'wp_easy_grid' ),
  			__( 'WP Easy Grid', 'wp_easy_grid' ),
  			'manage_options',
  			'wp_easy_grid_options',
  			'wp_easy_grid_ui',
  			'dashicons-screenoptions',
  			99
      );
  }
  add_action( 'admin_menu', 'wp_grid_register_options_menu_page' );

  function wp_easy_grid_ui(){ ?>

    <div class="wrap">
    	<h1 class="wp-heading">
    		<?php esc_html_e( 'WP Easy Grid', 'wp_easy_grid' ); ?>
    	</h1>

			<div class="separator"></div>

			<div class="wrapper-grid">

				<div class="left-wrapper">

					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#gridAbout" aria-controls="gridAbout" role="tab" data-toggle="tab"><?php esc_html_e( 'How It Works', 'wp_easy_grid' ); ?> </a></li>
						<li role="presentation"><a href="#gridAlign" aria-controls="gridAlign" role="tab" data-toggle="tab"><?php esc_html_e( 'Cell Text Alignment', 'wp_easy_grid' ); ?></a></li>
						<li role="presentation"><a href="#gridBorder" aria-controls="gridBorder" role="tab" data-toggle="tab"><?php esc_html_e( 'Cell Borders', 'wp_easy_grid' ); ?></a></li>
						<li role="presentation"><a href="#gridPadding" aria-controls="gridPadding" role="tab" data-toggle="tab"><?php esc_html_e( 'Cell Padding', 'wp_easy_grid' ); ?></a></li>
						<li role="presentation"><a href="#gridGap" aria-controls="gridGap" role="tab" data-toggle="tab"><?php esc_html_e( 'Grid Gap', 'wp_easy_grid' ); ?></a></li>
					  <li role="presentation"><a href="#gridBg" aria-controls="gridBg" role="tab" data-toggle="tab"><?php esc_html_e( 'Cell Bg Colors', 'wp_easy_grid' ); ?></a></li>
						<li role="presentation"><a href="#gridExample" aria-controls="gridExample" role="tab" data-toggle="tab"><?php esc_html_e( 'Combined Properties', 'wp_easy_grid' ); ?></a></li>
						<li role="presentation"><a href="#gridOther" aria-controls="gridOther" role="tab" data-toggle="tab"><?php esc_html_e( 'Named Cells', 'wp_easy_grid' ); ?></a></li>
					</ul>

					<div class="tab-content wp-easy-grid-desc">

						<div role="tabpanel" class="tab-pane active" id="gridAbout">
							<p>WP Easy Grid let's you easily create grid layouts in your pages.<br/>
								A grid row created by this plugin is based on 12 parts, which means you can divide a container into 12 equal parts.<br/>
								One line of columns is called <code>easy_grid</code> and each column in it is called <code>cell</code>.</p>
							<p>To make a column of 2 equal cells, you'll need 2 parts that have 6 cells each. <code> 6 + 6 = 12 </code>
								<br/><code>[easy_grid] [cells_6] PART 1 [/cells_6] [cells_6] PART 2 [/cells_6] [/easy_grid]</code></p>

							<p>Similarly, to make a column of 3 equal cells, you'll need 3 parts that have 4 cells each. <code> 4 + 4 + 4 = 12 </code>
								<br/><code>[easy_grid] [cells_4] PART 1 [/cells_4] [cells_4] PART 2 [/cells_4] [cells_4] PART 4 [/cells_4] [/easy_grid]</code></p>

							<p>Or you could have 2 columns that aren't equal, say 1/3 and 2/3 <code> 4 + 8 = 12 </code>
								<br/><code>[easy_grid] [cells_4] PART 1 [/cells_4] [cells_8] PART 2 [/cells_8] [/easy_grid]</code></p>
						</div>

						<div role="tabpanel" class="tab-pane" id="gridGap">
							<p> 1. Grid cells, by default, have a gap of 10px. <br/><code> [easy_grid class=""]...[/easy_grid]</code></p>
							<p> 2. To have no gap between cells, add 'no-gap' to the grid shortcode class: <br/><code> [easy_grid class="no-gap"]...[/easy_grid]</code></p>
							<p> 3. To have a bigger gap (20px), add 'big-gap' to the grid shortcode class: <br/><code> [easy_grid class="big-gap"]...[/easy_grid]</code></p>
							<p> Examples: </p>
							<p> <img src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'img/wp-easy-grid-gap.png'; ?>" /> </p>
						</div>

						<div role="tabpanel" class="tab-pane" id="gridBorder">
							<p> 1. Grid cells, by default, have no borders. <br/><code> [easy_grid class=""]...[/easy_grid]</code></p>
							<p> 2. To have a border around grid cells, add 'bordered' to the grid shortcode class: <br/><code> [easy_grid class="bordered"]...[/easy_grid]</code></p>
							<p> Examples: </p>
							<p> <img src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'img/wp-easy-grid-bordered.png'; ?>" /> </p>
						</div>

						<div role="tabpanel" class="tab-pane" id="gridAlign">
							<p> 1. Grid cells, by default, are aligned to the left. <br/><code> [easy_grid class=""]...[/easy_grid]</code></p>
							<p> 2. To have them aligned to the center, add 'text-center' to the grid shortcode class: <br/><code> [easy_grid class="text-center"]...[/easy_grid]</code></p>
							<p> Examples: </p>
							<p> <img src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'img/wp-easy-grid-align.png'; ?>" /> </p>
						</div>

						<div role="tabpanel" class="tab-pane" id="gridBg">
							<p> 1. Grid cells, by default, have no background color. <br/><code> [easy_grid class=""]...[/easy_grid]</code></p>
							<p> 2. To have a background color for every other cell different, add 'alternate' to the grid shortcode class: <br/><code> [easy_grid class="alternate"]...[/easy_grid]</code></p>
							<p> Examples: </p>
							<p> <img src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'img/wp-easy-grid-alternate.png'; ?>" /> </p>
						</div>

						<div role="tabpanel" class="tab-pane" id="gridPadding">
							<p> 1. Grid cells, by default, have no padding. <br/><code> [easy_grid class=""]...[/easy_grid]</code></p>
							<p> 2. To add padding of 1em to grid cells, add 'has_padding' to the grid shortcode class: <br/><code> [easy_grid class="has_padding"]...[/easy_grid]</code></p>
							<p> Examples: </p>
							<p> <img src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'img/wp-easy-grid-padding.png'; ?>" /> </p>
						</div>

						<div role="tabpanel" class="tab-pane" id="gridExample">
							<p>You can use multiple classes together to get the grid you need. For example:</p>
							<p><code> [easy_grid class="text-center big-gap bordered"]...[/easy_grid]</code> <br/>
								This grid cells would have borders, the gap between them would be 20px and the content inside would be aligned to the center.
							</p>
							<p> Another example: </p>
							<p> <img src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'img/wp-easy-grid-combined.png'; ?>" /> </p>

							<div class="separator"></div>

							<p>You can assign your own classes to the grid element and define your own styles. You may also assign an ID to the grid element:</p>
							<p><code> [easy_grid class="text-center my_own_class_name another_class_name" id="my_super_grid"]...[/easy_grid]</code> </p>
							<p> For example, I made the cell backgrounds "red": </p>
							<p> <img src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'img/wp-easy-grid-class.png'; ?>" /> </p>
						</div>

						<div role="tabpanel" class="tab-pane" id="gridOther">
							<p> There are several ready made column names that you can use. For example:</p>
							<p> Insted of having <code>[cells_6]...[/cells_6]</code> you can have <code>[half_grid]...[/half_grid]</code>.</p>
							<p> The same way <code>[third_grid]...[/third_grid]</code>, <code>[fourth_grid]...[/fourth_grid]</code>, <code>[sixth_grid]...[/sixth_grid]</code><br/>
								instead of <code>[cells_4]...[/cells_4]</code>, <code>[cells_3]...[/cells_3]</code>, <code>[cells_2]...[/cells_2]</code>.
							</p>
							<p>This would become a grid with 2 half-sized cells:<br/>
								<code>[easy_grid] [half_grid] PART 1 [/half_grid] [half_grid] PART 2 [/half_grid] [/easy_grid]</code>
							</p>
							<p>
								Examples:<br/>
								<img src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'img/wp-easy-grid-examples.png'; ?>" />
							</p>
						</div>

					</div>

					<div class="separator"></div>

					<div class="wp-easy-grid-desc">
						<p>
							<button><span class="dashicons dashicons-screenoptions"></span> Easy Grid </button>
							<br/>
							There's a new button "Easy Grid" at the top of your WP Editor.
							<br/>
							To add grids and cells, you need to click the button and select from the options.
						</p>
					</div>

					<div class="wp-easy-grid-desc">
						<p>
							<span class="dashicons dashicons-sos"></span>
							You can define styles for the grid element by adding CSS rules to your style.css file or any custom CSS block provided by your theme.
							<br/>
							<code>.easy-grid { your styles here }</code> for grid element
							<br/>
							<code>.easy-grid-cell { your styles here }</code> for grid cells
							<br/>
						</p>
					</div>

					<div class="wp-easy-grid-desc">
						<p>
							<span class="dashicons dashicons-warning"></span>
							Please, pay attention not to have additional paragraphs (&lt;p&gt;) or other HTML tags between grid cells. It will break the grid layout:
							<br/>
							<span class="dashicons dashicons-no-alt"></span> <code>[easy_grid][cells_6]...[/cells_6]&lt;p&gt; &lt;/p&gt;[cells_6]...[cells_6][/easy-grid]</code>
							<br/>
							<span class="dashicons dashicons-no-alt"></span> <code>[easy_grid][cells_6]...[/cells_6][cells_6]...[cells_6]&lt;p&gt; &lt;/p&gt;[/easy-grid]</code>
							<br/>
							But you can have any element inside the cells:
							<br/>
							<span class="dashicons dashicons-yes"></span> <code>[easy_grid][cells_6]&lt;p&gt; a paragraph inside a grid cell &lt;/p&gt;[/cells_6][cells_6]&lt;div&gt; a div inside a grid cell &lt;/div&gt;[cells_6][/easy-grid]</code>
						</p>
					</div>

					<div class="wp-easy-grid-desc">
						<p>
							<span class="dashicons dashicons-info"></span>
							On screens smaller than 1300px wide, all grid cells become 100%.
							<br/>
							To change this value, you'll need to edit the file containg the CSS Styles:
							<a href="<?php echo plugins_url( 'wp-easy-grid/public/css/wp-easy-grid.css' ); ?>" target="_blank"> <?php echo plugins_url( 'wp-easy-grid/public/css/wp-easy-grid.css' ); ?> </a>
							<br/>
							and change the line <code> @media screen and (max-width: 1300px) { </code> by replacing '1300' with whatever value you need.
						</p>
					</div>

				</div>

				<div class="right-wrapper">
					<div class="banner-area">
						<h1> <?php _e( 'WP Easy Grid', 'wp_easy_grid' ); ?> </h1>
						<p> <?php _e( 'Developed by', 'wp_easy_grid' ); ?> <a href="https://drim.io" target="_blank"> Levon Avetyan </a> </p>
						<p> <?php printf( esc_html__( 'More examples %1$s', 'wp_easy_grid' ), '<a href="https://drim.io/wp-easy-grid" target="_blank">here</a>' ); ?> </p>
						<p> <?php printf( esc_html__( 'For any questions, please email me at %1$s', 'wp_easy_grid' ), '<a href="mailto:levon@drim.io">levon@drim.io</a>' ); ?> </p>
					</div>
				</div><!-- .right-wrapper -->

			</div><!-- .wrapper-grid -->

		</div><!-- .wrap -->

			<?php // bootstrap tabs.js ?>
			<script src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'js/tabs.js'; ?>"></script>

  <?php }
