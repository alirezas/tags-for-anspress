
<div id="ap-lists" class="clearfix">
	<div class="ap-taxo-detail">
		<h2 class="entry-title"><?php printf(__('Question tag: %s','ap'), $question_tag->name); ?> <span class="ap-tax-item-count"><?php printf( _n('1 Question', '%s Questions', $question_tag->count, 'ap'),  $question_tag->count); ?></span></h2>
		<?php if($question_tag->description !=''): ?>
			<p class="ap-taxo-description"><?php echo $question_tag->description; ?></p>
		<?php endif; ?>

	</div>

	<?php if ( $questions->have_posts() ) : ?>
		<?php ap_questions_tab(get_term_link( $question_tag, 'question_tag' )); ?>
		<div class="questions-list">
			<?php				
				/* Start the Loop */
				while ( $questions->have_posts() ) : $questions->the_post();
					include(ap_get_theme_location('content-list.php'));
				endwhile;
			?>
		</div>
		<?php ap_pagination(); ?>
	<?php
		else : 
			include(ap_get_theme_location('content-none.php'));
		endif; 
	?>	
</div>
