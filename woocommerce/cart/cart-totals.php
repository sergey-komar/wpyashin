<?php
// ПОДИТОГ


defined( 'ABSPATH' ) || exit;

?>
<div class="cart_totals <?php echo ( WC()->customer->has_calculated_shipping() ) ? 'calculated_shipping' : ''; ?>">

	<?php do_action( 'woocommerce_before_cart_totals' ); ?>

	<h2 class="cart-subtotal__title"><?php esc_html_e( 'Cart totals', 'woocommerce' ); ?></h2>

	<div cellspacing="0" class="shop_table shop_table_responsive">
		<div class="cart-subtotal cart-block__right-price">
			<p>Предварительная стоимость</p>
            <span data-title="<?php esc_attr_e( 'Subtotal', 'woocommerce' ); ?>">
			<?php wc_cart_totals_subtotal_html(); ?>
			</span>
		</div>
		
		<div class="cart-block__right-line"></div>
	

		<?php do_action( 'woocommerce_cart_totals_before_order_total' ); ?>

		<div class="order-total cart-block__right-price">
			<p><?php esc_html_e( 'Total', 'woocommerce' ); ?></p>
			<span data-title="<?php esc_attr_e( 'Total', 'woocommerce' ); ?>"><?php wc_cart_totals_order_total_html(); ?></span>
		</div>

		<?php do_action( 'woocommerce_cart_totals_after_order_total' ); ?>

	</div>

	<div class="wc-proceed-to-checkout">
		<?php do_action( 'woocommerce_proceed_to_checkout' ); ?>
	</div>

	<?php do_action( 'woocommerce_after_cart_totals' ); ?>

</div>
