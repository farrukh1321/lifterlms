<?php
/**
 * Single Question featured image template
 * @since    [version]
 * @version  [version]
 *
 * @arg  $attempt  (obj)  LLMS_Quiz_Attempt instance
 * @arg  $question (obj)  LLMS_Question instance
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

if ( ! $question->has_image() ) {
	return;
}
?>

<div class="llms-question-image">
	<img alt="<?php echo esc_attr( $question->get( 'title' ) ); ?>" src="<?php echo esc_url( $question->get_image( 'size' ) ); ?>">
</div>
