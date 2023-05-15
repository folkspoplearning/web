<?php


$professional_video_vlogger_custom_css = '';

	/*---------------------------text-transform-------------------*/

	$professional_video_vlogger_text_transform = get_theme_mod( 'menu_text_transform_professional_video_vlogger','CAPITALISE');
    if($professional_video_vlogger_text_transform == 'CAPITALISE'){

		$professional_video_vlogger_custom_css .='#main-menu ul li a{';

			$professional_video_vlogger_custom_css .='text-transform: capitalize ; font-size: 14px;';

		$professional_video_vlogger_custom_css .='}';

	}else if($professional_video_vlogger_text_transform == 'UPPERCASE'){

		$professional_video_vlogger_custom_css .='#main-menu ul li a{';

			$professional_video_vlogger_custom_css .='text-transform: uppercase ; font-size: 14px;';

		$professional_video_vlogger_custom_css .='}';

	}else if($professional_video_vlogger_text_transform == 'LOWERCASE'){

		$professional_video_vlogger_custom_css .='#main-menu ul li a{';

			$professional_video_vlogger_custom_css .='text-transform: lowercase ; font-size: 14px;';

		$professional_video_vlogger_custom_css .='}';
	}

		/*---------------------------Container Width-------------------*/

	$professional_video_vlogger_container_width = get_theme_mod('professional_video_vlogger_container_width');

			$professional_video_vlogger_custom_css .='body{';

				$professional_video_vlogger_custom_css .='width: '.esc_attr($professional_video_vlogger_container_width).'%; margin: auto;';

			$professional_video_vlogger_custom_css .='}';

		/*---------------------------Copyright Text alignment-------------------*/

	$professional_video_vlogger_copyright_text_alignment = get_theme_mod( 'professional_video_vlogger_copyright_text_alignment','LEFT-ALIGN');

	 if($professional_video_vlogger_copyright_text_alignment == 'LEFT-ALIGN'){

			$professional_video_vlogger_custom_css .='.copy-text p{';

				$professional_video_vlogger_custom_css .='text-align:left;';

			$professional_video_vlogger_custom_css .='}';


		}else if($professional_video_vlogger_copyright_text_alignment == 'CENTER-ALIGN'){

			$professional_video_vlogger_custom_css .='.copy-text p{';

				$professional_video_vlogger_custom_css .='text-align:center;';

			$professional_video_vlogger_custom_css .='}';


		}else if($professional_video_vlogger_copyright_text_alignment == 'RIGHT-ALIGN'){

			$professional_video_vlogger_custom_css .='.copy-text p{';

				$professional_video_vlogger_custom_css .='text-align:right;';

			$professional_video_vlogger_custom_css .='}';

		}

