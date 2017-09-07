<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class ItemSpecificsType
{
	/**
	 * @var NameValueListType[]
	 *
	 * @Serializer\Type("array<Shoplo\BonanzaApi\Type\NameValueListType>")
	 */
	public $nameValueList;
}