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
	 * @Serializer\Type("DateTime<'Y-m-d\TH:i:s.u\Z'>")
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
	 * @var ItemArrayType[]
	 *
	 * @Serializer\Type("array<Shoplo\BonanzaApi\Type\ItemArrayType>")
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
	 * @var string
	 *
	 * @Serializer\Type("DateTime<'Y-m-d\TH:i:s.u\Z'>")
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
	public $total;

	/**
	 * @var TransactionArrayType[]
	 *
	 * @Serializer\Type("array<Shoplo\BonanzaApi\Type\TransactionArrayType>")
	 */
	public $transactionArray;
}