<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class OrderType
{

	/**
	 * @var double
	 *
	 * @Serializer\Type("double")
	 */
	public $amountPaid;

	/**
	 * @var double
	 *
	 * @Serializer\Type("double")
	 */
	public $amountSaved;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $buyerCheckoutMessage;

	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $buyerUserID;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $buyerUserName;

	/**
	 * @var CheckoutStatusType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\CheckoutStatusType")
	 */
	public $checkoutStatus;

	/**
	 * @var \DateTime
	 *
	 * @Serializer\Type("DateTime<'Y-m-d\TH:i:s\Z'>")
	 */
	public $createdTime;

	/**
	 * @var string
	 *
	 * Allowed values in \Shoplo\BonanzaApi\Enums\UserRole
	 *
	 * @Serializer\Type("string")
	 */
	public $creatingUserRole;

	/**
	 * @var OrderItemArrayType[]
	 *
	 * @Serializer\Type("array<Shoplo\BonanzaApi\Type\OrderItemArrayType>")
	 */
	public $itemArray;

	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $orderID;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $orderStatus;

	/**
	 * @var \DateTime
	 *
	 * @Serializer\Type("DateTime<'Y-m-d\TH:i:s\Z'>")
	 */
	public $paidTime;

	/**
	 * @var AddressType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\AddressType")
	 */
	public $shippingAddress;

	/**
	 * @var ShippingDetailsType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\ShippingDetailsType")
	 */
	public $shippingDetails;

	/**
	 * @var \DateTime
	 *
	 * @Serializer\Type("DateTime<'Y-m-d\TH:i:s.u\Z'>")
	 */
	public $shippedTime;

	/**
	 * @var double
	 *
	 * @Serializer\Type("double")
	 */
	public $subtotal;

	/**
	 * @var double
	 *
	 * @Serializer\Type("double")
	 */
	public $taxAmount;

	/**
	 * @var double
	 *
	 * @Serializer\Type("double")
	 */
	public $total;

	/**
	 * @var TransactionArrayType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\TransactionArrayType")
	 */
	public $transactionArray;
}