<?php
/**
 * Home Widgets Template
 *
 *
 * @file           sidebar-home-widget-single.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2012 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/sidebar-home-widget-single.php
 * @link           http://codex.wordpress.org/Theme_Development#Widgets_.28sidebar.php.29
 * @since          available since Release 1.0
 */
?>
    <div id="widgets" class="home-widgets">
        <div class="grid col-940 fit">
        <?php responsive_widgets(); // above widgets hook ?>

            <?php if (!dynamic_sidebar('home-widget-single')) : ?>
            <div class="widget-wrapper">

                <div class="widget-title-home"><h3><?php _e('Home Widget Single', 'responsive'); ?></h3></div>
                <div class="textwidget"><?php _e('This is your single home widget box. To edit please go to Appearance > Widgets and choose the widget called Home Widget Single. Title is also manageable from widgets as well.','responsive'); ?></div>

			</div><!-- end of .widget-wrapper -->
			<?php endif; //end of home-widget-single ?>

        <?php responsive_widgets_end(); // responsive after widgets hook ?>
        </div><!-- end of .col-940 fit-->

     </div><!-- end of #widgets -->

