<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class FeedbackHistoryType
{
	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $uniqueNegativeFeedbackCount;

	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $uniqueNeutralFeedbackCount;

	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $uniquePositiveFeedbackCount;
}