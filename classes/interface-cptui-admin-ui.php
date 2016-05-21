<?php
/**
 * Custom Post Type UI Admin UI Interface.
 * @package    CPTUI
 * @subpackage AdminUIInterface
 * @author     WebDevStudios
 * @since      1.4.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Custom Post Type UI Admin UI Interface
 *
 * @since 1.4.0
 */
interface CPTUI_Admin_UI_Interface {

	/**
	 * Return a form <label> with for attribute.
	 *
	 * @since 1.4.0
	 *
	 * @param string $label_for  Form input to associate `<label>` with.
	 * @param string $label_text Text to display in the `<label>` tag.
	 */
	public function get_label( $label_for = '', $label_text = '' );

	/**
	 * Return an html attribute denoting a required field.
	 *
	 * @since 1.4.0
	 *
	 * @param bool $required Whether or not the field is required.
	 */
	public function get_required_attribute( $required = false );

	/**
	 * Return a populated `<select>` input.
	 *
	 * @since 1.4.0
	 *
	 * @param array $args Arguments to use with the `<select>` input.
	 */
	public function get_select_input( $args = array() );

	/**
	 * Return a text input.
	 *
	 * @since 1.4.0
	 *
	 * @param array $args Arguments to use with the text input.
	 */
	public function get_text_input( $args = array() );

	/**
	 * Return a `<textarea>` input.
	 *
	 * @since 1.4.0
	 *
	 * @param array $args Arguments to use with the textarea input.
	 */
	public function get_textarea_input( $args = array() );

	/**
	 * Return a checkbox `<input>`.
	 *
	 * @since 1.4.0
	 *
	 * @param array $args Arguments to use with the checkbox input.
	 */
	public function get_check_input( $args = array() );

}
