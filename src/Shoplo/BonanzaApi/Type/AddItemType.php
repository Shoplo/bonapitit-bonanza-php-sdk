<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class AddItemType
{
	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $description;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $externalProductId;

	/**
	 * @var boolean
	 *
	 * @Serializer\Type("boolean")
	 */
	public $obo;

	/**
	 * @var AddItemSpecificsType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\AddItemSpecificsType")
	 */
	public $itemSpecifics;

	/**
	 * @var PictureDetailsType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\PictureDetailsType")
	 */
	public $pictureDetails;

	/**
	 * @var double
	 *
	 * @Serializer\Type("double")
	 */
	public $price;

	/**
	 * @var PrimaryCategoryType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\PrimaryCategoryType")
	 */
	public $primaryCategory;

	/**
	 * @var ProductListingDetailsType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\ProductListingDetailsType")
	 */
	public $productListingDetails;

	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $quantity;

	/**
	 * @var ReturnPolicyType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\ReturnPolicyType")
	 */
	public $returnPolicy;

	/**
	 * @var ShippingDetailsType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\ShippingDetailsType")
	 */
	public $shippingDetails;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $sku;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $title;

	/**
	 * @var VariationType[]
	 *
	 * @Serializer\Type("array<Shoplo\BonanzaApi\Type\VariationType>")
	 */
	public $variations;
}