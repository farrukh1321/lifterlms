<?php
/**
 * Choice Question Template
 * @since    [version]
 * @version  [version]
 *
 * @arg  $attempt  (obj)  LLMS_Quiz_Attempt instance
 * @arg  $question (obj)  LLMS_Question instance
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }
$input_type = ( 'yes' === $question->get( 'multi_choices' ) ) ? 'checkbox' : 'radio';
?>

<ol class="llms-question-choices">
	<?php foreach ( $question->get_choices() as $choice ) : ?>

		<li class="llms-choice type--text" id="choice-wrapper-<?php echo $choice->get( 'id' ); ?>">
			<label for="choice-<?php echo $choice->get( 'id' ); ?>">
				<input id="choice-<?php echo $choice->get( 'id' ); ?>" name="question_<?php echo $question->get( 'id' ); ?>[]" type="<?php echo $input_type; ?>" value="<?php echo $choice->get( 'id' ); ?>">
				<span class="llms-marker type--<?php echo $input_type; ?>">
					<span class="iterator"><?php echo $choice->get( 'marker' ); ?></span>
					<i class="fa fa-check"></i>
				</span>
				<p class="llms-choice-text"><?php echo $choice->get( 'choice' ); ?></p>
			</label>
		</li>

	<?php endforeach; ?>
</ol>
