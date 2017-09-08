<?php


namespace Shoplo\BonanzaApi\Enums;

/**
 * Class ShippingServiceType
 * @package Shoplo\BonanzaApi\Enums
 *
 * @link https://api.bonanza.com/docs/types/shipping_service_type
 */
class ShippingServiceType
{
	const ECONOMY_SHIPPING                       = 'EconomyShipping';
	const USPSPARCEL                             = 'USPSParcel';
	const USPSMEDIA                              = 'USPSMedia';
	const STANDARD_SHIPPING                      = 'StandardShipping';
	const UPSGROUND                              = 'UPSGround';
	const EXPEDITED_SHIPPING                     = 'ExpeditedShipping';
	const USPSPRIORITY                           = 'USPSPriority';
	const USPSFIRST_CLASS                        = 'USPSFirstClass';
	const UPS3_DAY_SELECT                        = 'UPS3DaySelect';
	const UPS2_DAY_AIR_AM                        = 'UPS2DayAirAM';
	const USPSEXPRESS                            = 'USPSExpress';
	const UPSNEXT_DAY                            = 'UPSNextDay';
	const USPSPRIORITY_MAIL_SMALL_FLAT_RATE_BOX  = 'USPSPriorityMailSmallFlatRateBox';
	const USPSPRIORITY_MAIL_MEDIUM_FLAT_RATE_BOX = 'USPSPriorityMailMediumFlatRateBox';
	const USPSPRIORITY_MAIL_LARGE_FLAT_RATE_BOX  = 'USPSPriorityMailLargeFlatRateBox';
	const USPSPRIORITY_MAIL_FLAT_RATE_ENVELOPE   = 'USPSPriorityMailFlatRateEnvelope';
	const UPSEXPRESS                             = 'UPSExpress';
	const FED_EX_GROUND                          = 'FedExGround';
	const FED_EX_EXPRESS_SAVER                   = 'FedExExpressSaver';
	const FED_EX2_DAY                            = 'FedEx2Day';
	const FED_EX_PRIORITY_OVERNIGHT              = 'FedExPriorityOvernight';
	const INTERNATIONAL2_TO3_WEEKS               = 'International2to3weeks';
	const INTERNATIONAL3_TO4_WEEKS               = 'International3to4weeks';
	const INTERNATIONAL4_TO5_WEEKS               = 'International4to5weeks';
}