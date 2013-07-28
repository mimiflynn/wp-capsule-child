<?php if ( comments_open() ) comments_template(); ?>

    <?php if ( comments_open() ) : ?>
			<?php if ( $show_sep ) : ?>
			  <span class="sep"> | </span>
			<?php endif; // End if $show_sep ?>
	    <span class="comments-link"><?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'capsule_child' ) . '</span>', __( '<b>1</b> Reply', 'capsule_child' ), __( '<b>%</b> Replies', 'capsule_child' ) ); ?></span>
		<?php endif; // End if comments_open() ?>
