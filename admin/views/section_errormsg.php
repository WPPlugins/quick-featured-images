<h2><?php esc_html_e( 'Error', $this->page_slug );?></h2>
<div class="qfi_content_inside">
	<h3><?php esc_html_e( 'Reason', 'quick-featured-images' );?></h3>
	<p class="failure"><?php print esc_html( $msg ); ?></p>
	<h3><?php esc_html_e( 'Solution', 'quick-featured-images' );?></h3>
	<p class="success"><?php print esc_html( $solution ); ?></p>
</div>
<p><a class="button" href='<?php echo esc_url( admin_url( sprintf( 'admin.php?page=%s', $this->page_slug ) ) );?>'><?php esc_html_e( 'Start again', 'quick-featured-images' );?></a></p>
