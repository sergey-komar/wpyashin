<?php
//СТРАНИЦА МОЕГО АККАУНТА

defined( 'ABSPATH' ) || exit;
?>
<div class="my__account">
	<div class="my__account-left">
		<?php
		/**
		 * My Account navigation.
		 *
		 * @since 2.6.0
		 */
		do_action( 'woocommerce_account_navigation' ); ?>
	</div>

	
	<div class="woocommerce-MyAccount-content">
	<?php
		/**
		 * My Account content.
		 *
		 * @since 2.6.0
		 */
		do_action( 'woocommerce_account_content' );
	?>
	</div>
</div>



