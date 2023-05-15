<?php
/**
 * Typography control class.
 *
 * @since  1.0.0
 * @access public
 */

class Video_Podcasting_Control_Typography extends WP_Customize_Control {

	/**
	 * The type of customize control being rendered.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $type = 'video-podcasting-typography';

	/**
	 * Array 
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $l10n = array();

	/**
	 * Set up our control.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @param  string  $id
	 * @param  array   $args
	 * @return void
	 */
	public function __construct( $manager, $id, $args = array() ) {

		// Let the parent class do its thing.
		parent::__construct( $manager, $id, $args );

		// Make sure we have labels.
		$this->l10n = wp_parse_args(
			$this->l10n,
			array(
				'color'       => esc_html__( 'Font Color', 'video-podcasting' ),
				'family'      => esc_html__( 'Font Family', 'video-podcasting' ),
				'size'        => esc_html__( 'Font Size',   'video-podcasting' ),
				'weight'      => esc_html__( 'Font Weight', 'video-podcasting' ),
				'style'       => esc_html__( 'Font Style',  'video-podcasting' ),
				'line_height' => esc_html__( 'Line Height', 'video-podcasting' ),
				'letter_spacing' => esc_html__( 'Letter Spacing', 'video-podcasting' ),
			)
		);
	}

	/**
	 * Enqueue scripts/styles.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue() {
		wp_enqueue_script( 'video-podcasting-ctypo-customize-controls' );
		wp_enqueue_style(  'video-podcasting-ctypo-customize-controls' );
	}

	/**
	 * Add custom parameters to pass to the JS via JSON.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function to_json() {
		parent::to_json();

		// Loop through each of the settings and set up the data for it.
		foreach ( $this->settings as $setting_key => $setting_id ) {

			$this->json[ $setting_key ] = array(
				'link'  => $this->get_link( $setting_key ),
				'value' => $this->value( $setting_key ),
				'label' => isset( $this->l10n[ $setting_key ] ) ? $this->l10n[ $setting_key ] : ''
			);

			if ( 'family' === $setting_key )
				$this->json[ $setting_key ]['choices'] = $this->get_font_families();

			elseif ( 'weight' === $setting_key )
				$this->json[ $setting_key ]['choices'] = $this->get_font_weight_choices();

			elseif ( 'style' === $setting_key )
				$this->json[ $setting_key ]['choices'] = $this->get_font_style_choices();
		}
	}

	/**
	 * Underscore JS template to handle the control's output.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function content_template() { ?>

		<# if ( data.label ) { #>
			<span class="customize-control-title">{{ data.label }}</span>
		<# } #>

		<# if ( data.description ) { #>
			<span class="description customize-control-description">{{{ data.description }}}</span>
		<# } #>

		<ul>

		<# if ( data.family && data.family.choices ) { #>

			<li class="typography-font-family">

				<# if ( data.family.label ) { #>
					<span class="customize-control-title">{{ data.family.label }}</span>
				<# } #>

				<select {{{ data.family.link }}}>

					<# _.each( data.family.choices, function( label, choice ) { #>
						<option value="{{ choice }}" <# if ( choice === data.family.value ) { #> selected="selected" <# } #>>{{ label }}</option>
					<# } ) #>

				</select>
			</li>
		<# } #>

		<# if ( data.weight && data.weight.choices ) { #>

			<li class="typography-font-weight">

				<# if ( data.weight.label ) { #>
					<span class="customize-control-title">{{ data.weight.label }}</span>
				<# } #>

				<select {{{ data.weight.link }}}>

					<# _.each( data.weight.choices, function( label, choice ) { #>

						<option value="{{ choice }}" <# if ( choice === data.weight.value ) { #> selected="selected" <# } #>>{{ label }}</option>

					<# } ) #>

				</select>
			</li>
		<# } #>

		<# if ( data.style && data.style.choices ) { #>

			<li class="typography-font-style">

				<# if ( data.style.label ) { #>
					<span class="customize-control-title">{{ data.style.label }}</span>
				<# } #>

				<select {{{ data.style.link }}}>

					<# _.each( data.style.choices, function( label, choice ) { #>

						<option value="{{ choice }}" <# if ( choice === data.style.value ) { #> selected="selected" <# } #>>{{ label }}</option>

					<# } ) #>

				</select>
			</li>
		<# } #>

		<# if ( data.size ) { #>

			<li class="typography-font-size">

				<# if ( data.size.label ) { #>
					<span class="customize-control-title">{{ data.size.label }} (px)</span>
				<# } #>

				<input type="number" min="1" {{{ data.size.link }}} value="{{ data.size.value }}" />

			</li>
		<# } #>

		<# if ( data.line_height ) { #>

			<li class="typography-line-height">

				<# if ( data.line_height.label ) { #>
					<span class="customize-control-title">{{ data.line_height.label }} (px)</span>
				<# } #>

				<input type="number" min="1" {{{ data.line_height.link }}} value="{{ data.line_height.value }}" />

			</li>
		<# } #>

		<# if ( data.letter_spacing ) { #>

			<li class="typography-letter-spacing">

				<# if ( data.letter_spacing.label ) { #>
					<span class="customize-control-title">{{ data.letter_spacing.label }} (px)</span>
				<# } #>

				<input type="number" min="1" {{{ data.letter_spacing.link }}} value="{{ data.letter_spacing.value }}" />

			</li>
		<# } #>

		</ul>
	<?php }

	/**
	 * Returns the available fonts.  Fonts should have available weights, styles, and subsets.
	 *
	 * @todo Integrate with Google fonts.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function get_fonts() { return array(); }

	/**
	 * Returns the available font families.
	 *
	 * @todo Pull families from `get_fonts()`.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	function get_font_families() {

		return array(
			'' => __( 'No Fonts', 'video-podcasting' ),
        'Abril Fatface' => __( 'Abril Fatface', 'video-podcasting' ),
        'Acme' => __( 'Acme', 'video-podcasting' ),
        'Anton' => __( 'Anton', 'video-podcasting' ),
        'Architects Daughter' => __( 'Architects Daughter', 'video-podcasting' ),
        'Arimo' => __( 'Arimo', 'video-podcasting' ),
        'Arsenal' => __( 'Arsenal', 'video-podcasting' ),
        'Arvo' => __( 'Arvo', 'video-podcasting' ),
        'Alegreya' => __( 'Alegreya', 'video-podcasting' ),
        'Alfa Slab One' => __( 'Alfa Slab One', 'video-podcasting' ),
        'Averia Serif Libre' => __( 'Averia Serif Libre', 'video-podcasting' ),
        'Bangers' => __( 'Bangers', 'video-podcasting' ),
        'Boogaloo' => __( 'Boogaloo', 'video-podcasting' ),
        'Bad Script' => __( 'Bad Script', 'video-podcasting' ),
        'Bitter' => __( 'Bitter', 'video-podcasting' ),
        'Bree Serif' => __( 'Bree Serif', 'video-podcasting' ),
        'BenchNine' => __( 'BenchNine', 'video-podcasting' ),
        'Cabin' => __( 'Cabin', 'video-podcasting' ),
        'Cardo' => __( 'Cardo', 'video-podcasting' ),
        'Courgette' => __( 'Courgette', 'video-podcasting' ),
        'Cherry Swash' => __( 'Cherry Swash', 'video-podcasting' ),
        'Cormorant Garamond' => __( 'Cormorant Garamond', 'video-podcasting' ),
        'Crimson Text' => __( 'Crimson Text', 'video-podcasting' ),
        'Cuprum' => __( 'Cuprum', 'video-podcasting' ),
        'Cookie' => __( 'Cookie', 'video-podcasting' ),
        'Chewy' => __( 'Chewy', 'video-podcasting' ),
        'Days One' => __( 'Days One', 'video-podcasting' ),
        'Dosis' => __( 'Dosis', 'video-podcasting' ),
        'Droid Sans' => __( 'Droid Sans', 'video-podcasting' ),
        'Economica' => __( 'Economica', 'video-podcasting' ),
        'Fredoka One' => __( 'Fredoka One', 'video-podcasting' ),
        'Fjalla One' => __( 'Fjalla One', 'video-podcasting' ),
        'Francois One' => __( 'Francois One', 'video-podcasting' ),
        'Frank Ruhl Libre' => __( 'Frank Ruhl Libre', 'video-podcasting' ),
        'Gloria Hallelujah' => __( 'Gloria Hallelujah', 'video-podcasting' ),
        'Great Vibes' => __( 'Great Vibes', 'video-podcasting' ),
        'Handlee' => __( 'Handlee', 'video-podcasting' ),
        'Hammersmith One' => __( 'Hammersmith One', 'video-podcasting' ),
        'Inconsolata' => __( 'Inconsolata', 'video-podcasting' ),
        'Indie Flower' => __( 'Indie Flower', 'video-podcasting' ),
        'IM Fell English SC' => __( 'IM Fell English SC', 'video-podcasting' ),
        'Julius Sans One' => __( 'Julius Sans One', 'video-podcasting' ),
        'Josefin Slab' => __( 'Josefin Slab', 'video-podcasting' ),
        'Josefin Sans' => __( 'Josefin Sans', 'video-podcasting' ),
        'Kanit' => __( 'Kanit', 'video-podcasting' ),
        'Lobster' => __( 'Lobster', 'video-podcasting' ),
        'Lato' => __( 'Lato', 'video-podcasting' ),
        'Lora' => __( 'Lora', 'video-podcasting' ),
        'Libre Baskerville' => __( 'Libre Baskerville', 'video-podcasting' ),
        'Lobster Two' => __( 'Lobster Two', 'video-podcasting' ),
        'Merriweather' => __( 'Merriweather', 'video-podcasting' ),
        'Monda' => __( 'Monda', 'video-podcasting' ),
        'Montserrat' => __( 'Montserrat', 'video-podcasting' ),
        'Muli' => __( 'Muli', 'video-podcasting' ),
        'Marck Script' => __( 'Marck Script', 'video-podcasting' ),
        'Noto Serif' => __( 'Noto Serif', 'video-podcasting' ),
        'Open Sans' => __( 'Open Sans', 'video-podcasting' ),
        'Overpass' => __( 'Overpass', 'video-podcasting' ),
        'Overpass Mono' => __( 'Overpass Mono', 'video-podcasting' ),
        'Oxygen' => __( 'Oxygen', 'video-podcasting' ),
        'Orbitron' => __( 'Orbitron', 'video-podcasting' ),
        'Patua One' => __( 'Patua One', 'video-podcasting' ),
        'Pacifico' => __( 'Pacifico', 'video-podcasting' ),
        'Padauk' => __( 'Padauk', 'video-podcasting' ),
        'Playball' => __( 'Playball', 'video-podcasting' ),
        'Playfair Display' => __( 'Playfair Display', 'video-podcasting' ),
        'PT Sans' => __( 'PT Sans', 'video-podcasting' ),
        'Philosopher' => __( 'Philosopher', 'video-podcasting' ),
        'Permanent Marker' => __( 'Permanent Marker', 'video-podcasting' ),
        'Poiret One' => __( 'Poiret One', 'video-podcasting' ),
        'Quicksand' => __( 'Quicksand', 'video-podcasting' ),
        'Quattrocento Sans' => __( 'Quattrocento Sans', 'video-podcasting' ),
        'Raleway' => __( 'Raleway', 'video-podcasting' ),
        'Rubik' => __( 'Rubik', 'video-podcasting' ),
        'Rokkitt' => __( 'Rokkitt', 'video-podcasting' ),
        'Russo One' => __( 'Russo One', 'video-podcasting' ),
        'Righteous' => __( 'Righteous', 'video-podcasting' ),
        'Slabo' => __( 'Slabo', 'video-podcasting' ),
        'Source Sans Pro' => __( 'Source Sans Pro', 'video-podcasting' ),
        'Shadows Into Light Two' => __( 'Shadows Into Light Two', 'video-podcasting'),
        'Shadows Into Light' => __( 'Shadows Into Light', 'video-podcasting' ),
        'Sacramento' => __( 'Sacramento', 'video-podcasting' ),
        'Shrikhand' => __( 'Shrikhand', 'video-podcasting' ),
        'Tangerine' => __( 'Tangerine', 'video-podcasting' ),
        'Ubuntu' => __( 'Ubuntu', 'video-podcasting' ),
        'VT323' => __( 'VT323', 'video-podcasting' ),
        'Varela Round' => __( 'Varela Round', 'video-podcasting' ),
        'Vampiro One' => __( 'Vampiro One', 'video-podcasting' ),
        'Vollkorn' => __( 'Vollkorn', 'video-podcasting' ),
        'Volkhov' => __( 'Volkhov', 'video-podcasting' ),
        'Yanone Kaffeesatz' => __( 'Yanone Kaffeesatz', 'video-podcasting' )
		);
	}

	/**
	 * Returns the available font weights.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function get_font_weight_choices() {

		return array(
			'' => esc_html__( 'No Fonts weight', 'video-podcasting' ),
			'100' => esc_html__( 'Thin',       'video-podcasting' ),
			'300' => esc_html__( 'Light',      'video-podcasting' ),
			'400' => esc_html__( 'Normal',     'video-podcasting' ),
			'500' => esc_html__( 'Medium',     'video-podcasting' ),
			'700' => esc_html__( 'Bold',       'video-podcasting' ),
			'900' => esc_html__( 'Ultra Bold', 'video-podcasting' ),
		);
	}

	/**
	 * Returns the available font styles.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function get_font_style_choices() {

		return array(
			'' => esc_html__( 'No Fonts Style', 'video-podcasting' ),
			'normal'  => esc_html__( 'Normal', 'video-podcasting' ),
			'italic'  => esc_html__( 'Italic', 'video-podcasting' ),
			'oblique' => esc_html__( 'Oblique', 'video-podcasting' )
		);
	}
}
