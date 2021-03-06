<?php 
    $settings->title_color = UABB_Helper::uabb_colorpicker( $settings, 'color' );
    $settings->desc_color = UABB_Helper::uabb_colorpicker( $settings, 'desc_color' );

    $settings->heading_margin_top = ( trim($settings->heading_margin_top) !== '' ) ? $settings->heading_margin_top : '0';
    $settings->heading_margin_bottom = ( trim($settings->heading_margin_bottom) !== '' ) ? $settings->heading_margin_bottom : '15';
    $settings->desc_margin_top = ( trim($settings->desc_margin_top) !== '' ) ? $settings->desc_margin_top : '15';
    $settings->desc_margin_bottom = ( trim($settings->desc_margin_bottom) !== '' ) ? $settings->desc_margin_bottom : '0';
    $settings->img_size = ( trim($settings->img_size) !== '' ) ? $settings->img_size : '50';
    $settings->separator_line_color = UABB_Helper::uabb_colorpicker( $settings, 'separator_line_color' );
    $settings->separator_text_color = UABB_Helper::uabb_colorpicker( $settings, 'separator_text_color' );
    $settings->color = UABB_Helper::uabb_colorpicker( $settings, 'color' );
    $settings->img_size = ( trim( $settings->img_size ) !== '' ) ? $settings->img_size : '50';       
    $settings->separator_line_height = ( trim( $settings->separator_line_height ) !== '' ) ? $settings->separator_line_height : '1';
    $settings->separator_line_width = ( trim( $settings->separator_line_width ) !== '' ) ? $settings->separator_line_width : '30';

    if( $settings->separator_style != 'none' ) {
    	
    	$position = '0';
		if( $settings->alignment == 'center' ) {
			$position = '50';
		} elseif( $settings->alignment == 'right' ) {
			$position = '100';
		}
	}
?>
.fl-node-<?php echo $id; ?> .uabb-heading {
	margin-top: <?php echo $settings->heading_margin_top; ?>px;
	margin-bottom: <?php echo $settings->heading_margin_bottom; ?>px;
}

.fl-node-<?php echo $id; ?> .uabb-subheading {
	margin-top: <?php echo $settings->desc_margin_top; ?>px;
	margin-bottom: <?php echo $settings->desc_margin_bottom; ?>px;
}

.fl-node-<?php echo $id; ?> .fl-module-content.fl-node-content .uabb-heading,
.fl-node-<?php echo $id; ?> .fl-module-content.fl-node-content .uabb-heading .uabb-heading-text,
.fl-node-<?php echo $id; ?> .fl-module-content.fl-node-content .uabb-heading * {
	<?php if(!empty($settings->title_color)) : ?>
		color: <?php echo $settings->title_color; ?>;
	<?php endif; ?>
}

.fl-node-<?php echo $id; ?> .uabb-heading,
.fl-node-<?php echo $id; ?> .uabb-heading * {
	
	<?php if( !empty($settings->font) && $settings->font['family'] != 'Default' ) : ?>
		<?php UABB_Helper::uabb_font_css( $settings->font ); ?>
	<?php endif; ?>

	<?php if( $settings->new_font_size['desktop'] != '' ) : ?>
		font-size: <?php echo $settings->new_font_size['desktop']; ?>px;
	<?php elseif( isset( $settings->font_size ) && isset( $settings->custom_font_size ) && $settings->font_size == 'custom' && $settings->custom_font_size != '' ) : ?>
		font-size: <?php echo $settings->custom_font_size; ?>px;
	<?php endif; ?>

	<?php if( $settings->line_height['desktop'] != '' ) : ?>
		line-height: <?php echo $settings->line_height['desktop']; ?>px;
	<?php endif; ?>
}

<?php /* Heading's Description Color */ ?>
.fl-node-<?php echo $id; ?> .fl-module-content.fl-node-content .uabb-module-content .uabb-text-editor {
	color: <?php echo uabb_theme_text_color( $settings->desc_color ); ?>;
}

<?php /* Heading's Description Typography */ ?>
.fl-node-<?php echo $id; ?> .uabb-text-editor {
	
	<?php if( !empty($settings->desc_font_family) && $settings->desc_font_family['family'] != 'Default' ) : ?>
		<?php UABB_Helper::uabb_font_css( $settings->desc_font_family ); ?>
	<?php endif; ?>

	<?php if( $settings->desc_font_size['desktop'] != '' ) : ?>
		font-size: <?php echo $settings->desc_font_size['desktop']; ?>px;
	<?php endif; ?>
	<?php if( $settings->desc_line_height['desktop'] != '' ) : ?>
	line-height: <?php echo $settings->desc_line_height['desktop']; ?>px;
	<?php endif; ?>
}

<?php /* Global Setting If started */ ?>
<?php if($global_settings->responsive_enabled) { ?> 
    
        <?php /* Medium Breakpoint media query */  ?>
        @media ( max-width: <?php echo $global_settings->medium_breakpoint .'px'; ?> ) {

        	<?php /* For Medium Device */ ?>
			.fl-node-<?php echo $id; ?> .uabb-responsive-medsmall .uabb-side-left,
			.fl-node-<?php echo $id; ?> .uabb-responsive-medsmall .uabb-side-right {
			    width: 20%;
			}

			.fl-node-<?php echo $id; ?> .uabb-responsive-medsmall .uabb-divider-content <?php echo $settings->separator_text_tag_selection; ?> {
			    white-space: normal;
			}

            .fl-node-<?php echo $id; ?> .uabb-heading,
            .fl-node-<?php echo $id; ?> .uabb-heading * { 
				<?php if( $settings->new_font_size['medium'] != '' ) : ?>
					font-size: <?php echo $settings->new_font_size['medium']; ?>px;
				<?php endif; ?>
				<?php if( $settings->line_height['medium'] != '' ) : ?>
					line-height: <?php echo $settings->line_height['medium']; ?>px;
				<?php endif; ?>
			}
			.fl-node-<?php echo $id; ?> .uabb-text-editor {
				<?php if( $settings->desc_font_size['medium'] != '' ) : ?>
					font-size: <?php echo $settings->desc_font_size['medium']; ?>px;
				<?php endif; ?>
				<?php if( $settings->desc_line_height['medium'] != '' ) : ?>
					line-height: <?php echo $settings->desc_line_height['medium']; ?>px;
				<?php endif; ?>
			}
        }
    
        <?php /* Small Breakpoint media query */ ?>
        @media ( max-width: <?php echo $global_settings->responsive_breakpoint .'px'; ?> ) {

        	<?php /* For Small Device */ ?>
			.fl-node-<?php echo $id; ?> .uabb-responsive-mobile .uabb-side-left,
			.fl-node-<?php echo $id; ?> .uabb-responsive-mobile .uabb-side-right,
			.fl-node-<?php echo $id; ?> .uabb-responsive-medsmall .uabb-side-left,
			.fl-node-<?php echo $id; ?> .uabb-responsive-medsmall .uabb-side-right {
			    width: 10%;
			}

			.fl-node-<?php echo $id; ?> .uabb-responsive-mobile .uabb-divider-content <?php echo $settings->separator_text_tag_selection; ?> {
			    white-space: normal;
			}
        	
            .fl-node-<?php echo $id; ?> .uabb-heading,
            .fl-node-<?php echo $id; ?> .uabb-heading * { 
				<?php if( $settings->new_font_size['small'] != '' ) : ?>
					font-size: <?php echo $settings->new_font_size['small']; ?>px;
				<?php elseif( isset( $settings->r_font_size ) && isset( $settings->r_custom_font_size ) && $settings->r_font_size == 'custom' && $settings->r_custom_font_size != '' ) : ?>
					font-size: <?php echo $settings->r_custom_font_size; ?>px;
					line-height: <?php echo ( $settings->line_height['small'] != '' ) ? $settings->line_height['small'] : $settings->r_custom_font_size + 2; ?>px;
				<?php endif; ?>
				<?php if( $settings->line_height['small'] != '' ) : ?>
					line-height: <?php echo $settings->line_height['small']; ?>px;
				<?php endif; ?>
			}

			.fl-node-<?php echo $id; ?> .uabb-text-editor {
				<?php if( $settings->desc_font_size['small'] != '' ) : ?>
					font-size: <?php echo $settings->desc_font_size['small']; ?>px;
				<?php endif; ?>
				<?php if( $settings->desc_line_height['small'] != '' ) : ?>
					line-height: <?php echo $settings->desc_line_height['small']; ?>px;
				<?php endif; ?>
			}

			.fl-node-<?php echo $id; ?> .uabb-heading,
			.fl-node-<?php echo $id; ?> .uabb-subheading,
			.fl-node-<?php echo $id; ?> .uabb-subheading * {
				text-align: <?php echo $settings->r_custom_alignment; ?>;
			}

			<?php if( ( $settings->r_custom_alignment != $settings->alignment ) && $settings->separator_style != 'none' ) :
				$r_position = '0';
				if( $settings->r_custom_alignment == 'center' ) {
					$r_position = '50'; ?>
				
					.fl-node-<?php echo $id; ?> .uabb-separator-wrap.uabb-separator-<?php echo $settings->alignment; ?> {
						margin-left: auto;
						margin-right: auto;
					}

				<?php } elseif( $settings->r_custom_alignment == 'right' ) {
					$r_position = '100'; ?>
					
					.fl-node-<?php echo $id; ?> .uabb-separator-wrap.uabb-separator-<?php echo $settings->alignment; ?> {
						margin-left: auto;
						margin-right: 0;
					}

				<?php } else { ?>
					
					.fl-node-<?php echo $id; ?> .uabb-separator-wrap.uabb-separator-<?php echo $settings->alignment; ?> {
						margin-left: 0;
						margin-right: auto;
					}
				<?php } ?>

			.fl-node-<?php echo $id; ?> .uabb-separator-parent {
				text-align: <?php echo $settings->r_custom_alignment ?>;
			}
			.fl-node-<?php echo $id; ?> .uabb-side-left {
				width: <?php echo $r_position; ?>%;
			}
			.fl-node-<?php echo $id; ?> .uabb-side-right {
				width: <?php echo 100 - $r_position; ?>%;
			}
			<?php endif; ?>
        }
    <?php
} ?>

.fl-node-<?php echo $id; ?> .uabb-separator-parent {
	line-height: 0;
	text-align: <?php echo ( $settings->separator_line_width != 100 ) ? $settings->alignment : 'center'; ?>;
}

.fl-node-<?php echo $id; ?> .uabb-image-outter-wrap {
	width: <?php echo (int)$settings->img_size; ?>px;
}

<?php if( $settings->separator_style == 'line' || $settings->separator_style == 'line_text' ) { ?> 
	.fl-node-<?php echo $id; ?> .uabb-separator {
		border-top:<?php echo $settings->separator_line_height; ?>px <?php echo $settings->separator_line_style; ?> <?php echo uabb_theme_base_color( $settings->separator_line_color ); ?>;
		width: <?php echo $settings->separator_line_width; ?>%;
		display: inline-block;
	}
<?php } ?>

<?php if( $settings->separator_style == 'line_icon' ||  $settings->separator_style == 'line_image' || $settings->separator_style == 'line_text') { ?>

	<?php if( $settings->separator_style == 'line_image' || $settings->separator_style == 'line_icon' ){

		$imageicon_array = array(

			'image_type' => ( $settings->separator_style == 'line_image' ) ? 'photo' : ( ( $settings->separator_style == 'line_icon' ) ? 'icon' : '' ),
			/* Icon Basics */
			'icon' => $settings->icon,
			'icon_size' => $settings->icon_size,
			'icon_align' => 'center',

			/* Image Basics */
			'photo_source' => $settings->photo_source,
			'photo' => $settings->photo,
			'photo_url' => $settings->photo_url,
			'img_size' => $settings->img_size,
	      	'responsive_img_size' => $settings->responsive_img_size,
			'img_align' => 'center',//$settings->img_align,
			'photo_src' => ( isset( $settings->photo_src ) ) ? $settings->photo_src : '' ,

            /* Icon color */
			'icon_color' => $settings->separator_icon_color,
		);
		 
		/* CSS Render Function */ 
		FLBuilder::render_module_css( 'image-icon', $id, $imageicon_array );

	?>
	<?php } ?>

	<?php if( $settings->separator_style == 'line_icon') {?>
		.fl-node-<?php echo $id; ?> .uabb-imgicon-wrap .uabb-icon i,
		.fl-node-<?php echo $id; ?> .uabb-imgicon-wrap .uabb-icon i:before {
			width: 1.3em;
			height: 1.3em;
			line-height: 1.3em;
		}
	<?php } ?>

	<?php if( $settings->separator_style == 'line_text'  ){ ?>
		.fl-node-<?php echo $id; ?> <?php echo $settings->separator_text_tag_selection; ?>.uabb-divider-text{
			white-space: nowrap;
			margin: 0;
			<?php echo (!empty( $settings->separator_text_color) ) ? 'color: '.$settings->separator_text_color.';' : ''; ?>
			<?php if( $settings->separator_text_font_family['family'] != 'Default' ) { ?>
				<?php UABB_Helper::uabb_font_css( $settings->separator_text_font_family ); ?>
			 <?php } ?>
			<?php echo ( $settings->separator_text_font_size['desktop'] != '' ) ? 'font-size: ' . $settings->separator_text_font_size['desktop'] . 'px;' : ''; ?>
			<?php echo ( $settings->separator_text_line_height['desktop'] != '' ) ? 'line-height: ' . $settings->separator_text_line_height['desktop'] . 'px;' : ''; ?>
		}
	<?php } ?>

	.fl-node-<?php echo $id; ?> .uabb-separator-wrap {
		width: <?php echo $settings->separator_line_width; ?>%;
		display: table;
	}

	<?php if( $settings->alignment == 'center' ) { ?>
	.fl-node-<?php echo $id; ?> .uabb-separator-wrap.uabb-separator-center {
		margin-left: auto;
	    margin-right: auto;
	}
	<?php } ?>

	<?php if( $settings->alignment == 'left' ) { ?>
	.fl-node-<?php echo $id; ?> .uabb-separator-wrap.uabb-separator-left {
		margin-left: 0;
	    margin-right: auto;
	}
	<?php } ?>

	<?php if( $settings->alignment == 'right' ) { ?>
	.fl-node-<?php echo $id; ?> .uabb-separator-wrap.uabb-separator-right {
		margin-left: auto;
	    margin-right: 0;
	}
	<?php } ?>

	.fl-node-<?php echo $id; ?> .uabb-separator-line {
		display: table-cell;
		vertical-align:middle;
	}

	.fl-node-<?php echo $id; ?> .uabb-separator-line > span {
		border-top:<?php echo $settings->separator_line_height; ?>px <?php echo $settings->separator_line_style; ?> <?php echo uabb_theme_base_color( $settings->separator_line_color ); ?>;
		display: block;
	    margin-top: 0 !important;
	}

	.fl-node-<?php echo $id; ?> .uabb-divider-content{
		padding-left: 5px;
		padding-right: 5px;
	}

	.fl-node-<?php echo $id; ?> .uabb-side-left{
		width: <?php echo $position; ?>%;
	}
	.fl-node-<?php echo $id; ?> .uabb-side-right{
		width: <?php echo ( 100 - $position ); ?>%;
	}

	.fl-node-<?php echo $id; ?> .uabb-divider-content {
		display: table-cell;
	}
	.fl-node-<?php echo $id; ?> .uabb-divider-content .uabb-icon-wrap{
		display: block;
	}

<?php }

if( $settings->separator_style == 'line_text' || $settings->separator_style == 'line_image' ) {

	if( $global_settings->responsive_enabled ) { // Global Setting If started ?>
	    @media ( max-width: <?php echo $global_settings->medium_breakpoint; ?>px ) {
	    	
	    	<?php
	    	if( $settings->separator_text_font_size['medium'] != '' || $settings->separator_text_line_height['medium'] != '' ) {
	    	?>
	     	.fl-node-<?php echo $id; ?> <?php echo $settings->separator_text_tag_selection; ?>.uabb-divider-text {
	     		<?php echo ( $settings->separator_text_font_size['medium'] != '' ) ? 'font-size: ' . $settings->separator_text_font_size['medium'] . 'px;' : ''; ?>
				<?php echo ( $settings->separator_text_line_height['medium'] != '' ) ? 'line-height: ' . $settings->separator_text_line_height['medium'] . 'px;' : ''; ?>
	     	}
			<?php
			}
			?>

			<?php /* For Medium Device */ ?>
			.fl-node-<?php echo $id; ?> .uabb-responsive-medsmall .uabb-side-left {
				  width: <?php echo ( $position * 40 /100 ); ?>%; 
			}
			.fl-node-<?php echo $id; ?> .uabb-responsive-medsmall .uabb-side-right {
				 width: <?php echo 40 - ( $position * 40 /100 ); ?>%; 
			}

			.fl-node-<?php echo $id; ?> .uabb-responsive-medsmall .uabb-divider-content <?php echo $settings->separator_text_tag_selection; ?> {
			    white-space: normal;
			}
	    }
	 
	     @media ( max-width: <?php echo $global_settings->responsive_breakpoint; ?>px ) {

	     	<?php
	    	if( $settings->separator_text_font_size['small'] != '' || $settings->separator_text_line_height['small'] != '' ) {
	    	?>
	     	.fl-node-<?php echo $id; ?> <?php echo $settings->separator_text_tag_selection; ?>.uabb-divider-text {
	     		<?php echo ( $settings->separator_text_font_size['small'] != '' ) ? 'font-size: ' . $settings->separator_text_font_size['small'] . 'px;' : ''; ?>
				<?php echo ( $settings->separator_text_line_height['small'] != '' ) ? 'line-height: ' . $settings->separator_text_line_height['small'] . 'px;' : ''; ?>
	     	}
			<?php
			}
			?>

			<?php if ( $settings->responsive_img_size != '' ) { ?>
			.fl-node-<?php echo $id; ?> .uabb-image-outter-wrap {
				width: <?php echo ( 2 * ( $settings->img_border_width ) ) + ( 2 * ( $settings->img_size ) ) + ( $settings->responsive_img_size ); ?>px;
			}
			<?php } ?>

			<?php /* For Small Device */ ?>
			.fl-node-<?php echo $id; ?> .uabb-responsive-mobile .uabb-side-left,
			.fl-node-<?php echo $id; ?> .uabb-responsive-medsmall .uabb-side-left {
				width: <?php echo ( $position * 20 /100 ); ?>%; 
			}
			.fl-node-<?php echo $id; ?> .uabb-responsive-mobile .uabb-side-right,
			.fl-node-<?php echo $id; ?> .uabb-responsive-medsmall .uabb-side-right {
				width: <?php echo 20 - ( $position * 20 /100 ); ?>%; 
			}

			.fl-node-<?php echo $id; ?> .uabb-responsive-mobile .uabb-divider-content <?php echo $settings->separator_text_tag_selection; ?> {
			    white-space: normal;
			}
	    }
<?php
	}
}
?>
