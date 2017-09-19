<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class GetOrdersReponseType extends BaseResponseType
{

	/**
	 * @var boolean
	 *
	 * @Serializer\Type("boolean")
	 */
	public $hasMoreOrders;

	/**
	 * @var PaginationResultType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\PaginationResultType")
	 */
	public $paginationResult;

	/**
	 * @var OrderArrayType[]
	 *
	 * @Serializer\Type("array<Shoplo\BonanzaApi\Type\OrderArrayType>")
	 */
	public $orderArray;
}