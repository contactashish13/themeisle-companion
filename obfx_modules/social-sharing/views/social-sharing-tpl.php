<?php
/**
 * The Front End View for Social Sharing Module of Orbit Fox.
 *
 * @link       https://themeisle.com
 * @since      1.0.0
 *
 * @package    Orbit_Fox_Modules
 * @subpackage Orbit_Fox_Modules/stats/social-sharing
 * @codeCoverageIgnore
 */

if ( ! empty( $social_links_array ) ) { ?>
	<ul class="obfx-sharing
	<?php

	if ( ! empty( $desktop_class ) ) {
		echo esc_attr( $desktop_class );
	}
	if ( ! empty( $mobile_class ) ) {
		echo esc_attr( $mobile_class );
	}

	?>">
		<?php foreach ( $social_links_array as $network_data ) {
			$class = '';
		    if ( $network_data['show_desktop'] == '0' ) {
			    $class .= 'obfx-hide-desktop-socials ';
			}
			if ( $network_data['show_mobile'] == '0' ) {
		        $class .= 'obfx-hide-mobile-socials ';
			}
			?>
			<li class="<?php echo esc_attr( $class ); ?>">
				<a class = "<?php echo esc_attr( $network_data['icon'] ); ?>"
					<?php echo ( isset( $network_data['target'] ) && $network_data['target'] != '0' ) ? 'target="_blank"' : ''?>
				   href="<?php echo esc_url( $network_data['link'] ); ?>">
					<i class="socicon-<?php echo esc_attr( $network_data['icon'] ); ?>"></i>
					<?php if ( $show_name ) {
						echo '<span>' . esc_html( $network_data['nicename'] ) . '</span>';
} ?>
				</a>
			</li>
		<?php } ?>
	</ul>
<?php }
