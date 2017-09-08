<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class PictureDetailsType
{
	/**
	 * @var boolean
	 *
	 * @Serializer\Type("boolean")
	 */
	public $discardOld;

	/**
	 * @var string[]
	 *
	 * @Serializer\Type("array<string>")
	 */
	public $pictureURL;
}