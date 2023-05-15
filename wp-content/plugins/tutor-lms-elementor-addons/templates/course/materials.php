<?php do_action( 'tutor_course/single/before/material_includes' ); ?>
<?php $materials = tutor_course_material_includes(); ?>

<div class="etlms-course-widget etlms-course-materials">
	<h3 class="etlms-course-widget-title tutor-fs-5 tutor-color-black tutor-fw-bold tutor-mb-16">
		<?php echo esc_html( $settings['section_title_text'], 'tutor-lms-elementor-addons' ); ?>
	</h3>
	<ul class="etlms-course-widget-list-items tutor-fs-6 tutor-color-black">
		<?php if ( is_array( $materials ) && count( $materials ) ) : ?>
		<?php foreach ($materials as $material): ?>
			<li class="etlms-course-widget-list-item">
				<span class="tutor-mr-12 tutor-list-icon tutor-color-primary"><?php Elementor\Icons_Manager::render_icon( $settings['course_materials_list_icon'], array( 'aria-hidden' => 'true' ) ); ?></span>
				<span class="tutor-list-label"><?php echo esc_html( $material ); ?></span>
			</li>
		<?php endforeach; ?>
		<?php endif; ?>
	</ul>
</div>

<?php do_action( 'tutor_course/single/after/material_includes' ); ?>
