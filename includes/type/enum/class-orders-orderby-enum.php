<?php
/**
 * WPEnum Type - OrdersOrderbyEnum
 *
 * @package \WPGraphQL\WooCommerce\Type\WPEnum
 * @since   0.2.2
 */

namespace WPGraphQL\WooCommerce\Type\WPEnum;

/**
 * Class Orders_Orderby_Enum
 */
class Orders_Orderby_Enum extends Post_Type_Orderby_Enum {
	/**
	 * Holds ordering enumeration base name.
	 *
	 * @var string
	 */
	protected static $name = 'Orders';

	/**
	 * Define enumeration values related to the "shop_order" post-type ordering fields.
	 *
	 * @return array
	 */
	protected static function values() {
		return array_merge(
			self::post_type_values(),
			array(
				'ORDER_KEY'      => array(
					'value'       => '_order_key',
					'description' => __( 'Order by order key', 'wp-graphql-woocommerce' ),
				),
				'DISCOUNT'       => array(
					'value'       => '_cart_discount',
					'description' => __( 'Order by order discount amount', 'wp-graphql-woocommerce' ),
				),
				'TOTAL'          => array(
					'value'       => '_order_total',
					'description' => __( 'Order by order total', 'wp-graphql-woocommerce' ),
				),
				'TAX'            => array(
					'value'       => '_order_tax',
					'description' => __( 'Order by order total', 'wp-graphql-woocommerce' ),
				),
				'DATE_PAID'      => array(
					'value'       => '_date_paid',
					'description' => __( 'Order by date the order was paid', 'wp-graphql-woocommerce' ),
				),
				'DATE_COMPLETED' => array(
					'value'       => '_date_completed',
					'description' => __( 'Order by date the order was completed', 'wp-graphql-woocommerce' ),
				),
			)
		);
	}
}
