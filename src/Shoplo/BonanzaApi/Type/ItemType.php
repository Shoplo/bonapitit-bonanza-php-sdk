<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class ItemType
{
	/**
	 * @var boolean
	 *
	 * @Serializer\Type("boolean")
	 */
	public $bestOfferEnabled;

	/**
	 * @var double
	 *
	 * @Serializer\Type("double")
	 */
	public $buyItNowPrice;

	/**
	 * @var double
	 *
	 * @Serializer\Type("double")
	 */
	public $convertedBuyItNowPrice;

	/**
	 * @var double
	 *
	 * @Serializer\Type("double")
	 */
	public $convertedCurrentPrice;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $country;

	/**
	 * @var double
	 *
	 * @Serializer\Type("double")
	 */
	public $currentPrice;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $description;

	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $ebayId;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $galleryURL;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $itemID;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $parentItemID;

	/**
	 * @var string
	 *
	 * SKU in other words, returned in getOrders call
	 *
	 * @Serializer\Type("string")
	 */
	public $sellerInventoryID;

	/**
	 * @var ItemSpecificsType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\ItemSpecificsType")
	 */
	public $itemSpecifics;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $listingStatus;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $location;

	/**
	 * @var string[]
	 *
	 * Allowed values in \Shoplo\BonanzaApi\Enums\PaymentMethodsType
	 *
	 * @Serializer\Type("array<string>")
	 */
	public $paymentMethods;

	/**
	 * @var string[]
	 *
	 * @Serializer\Type("array<string>")
	 */
	public $pictureURL;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $postalCode;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $primaryCategoryID;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $primaryCategoryName;

	/**
	 * @var array
	 *
	 * Provides the upc/mpn/isbn value in the form: ["upc/mpn/isbn", "value"]
	 *
	 * @Serializer\Type("array")
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
	 * @var SellerType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\SellerType")
	 */
	public $seller;

	/**
	 * @var ShippingCostSummaryType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\ShippingCostSummaryType")
	 */
	public $shippingCostSummary;

	/**
	 * @var ShipToLocationsType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\ShipToLocationsType")
	 */
	public $shipToLocations;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $sku;

	/**
	 * @var \DateTime
	 *
	 * @Serializer\Type("DateTime<'Y-m-d\TH:i:s.u\Z'>")
	 */
	public $startTime;

	/**
	 * @var StoreInfoType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\StoreInfoType")
	 */
	public $storeInfo;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $title;

	/**
	 * @var VariationsType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\VariationsType")
	 */
	public $variations;

}