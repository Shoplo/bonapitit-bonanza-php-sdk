<?php


namespace Shoplo\BonanzaApi\Enums;


class ErrorType
{
	const  ACCOUNT_NOT_ACTIVE                         = 'AccountNotActive';
	const  ACCOUNT_NOT_FOUND                          = 'AccountNotFound';
	const  ACCOUNT_CANNOT_BE_VALIDATED                = 'AccountCannotBeValidated';
	const  BOOTH_IS_FULL                              = 'BoothIsFull';
	const  BOOTH_NOT_ONLINE                           = 'BoothNotOnline';
	const  BOOTH_NOT_ACTIVATED                        = 'BoothNotActivated';
	const  BOOTH_CANNOT_BE_UPDATED                    = 'BoothCannotBeUpdated';
	const  CANNOT_FIND_BOOTH                          = 'CannotFindBooth';
	const  CANNOT_FIND_CATEGORY                       = 'CannotFindCategory';
	const  CANNOT_FIND_REQUEST                        = 'CannotFindRequest';
	const  CANNOT_DETERMINE_ASINGLE_REQUEST_TYPE      = 'CannotDetermineASingleRequestType';
	const  CANNOT_FIND_ITEM                           = 'CannotFindItem';
	const  CANNOT_FIND_MESSAGE                        = 'CannotFindMessage';
	const  CANNOT_FIND_OFFER                          = 'CannotFindOffer';
	const  CANNOT_MESSAGE_USER                        = 'CannotMessageUser';
	const  CANNOT_MODIFY_MESSAGE                      = 'CannotModifyMessage';
	const  CANT_FIND_USER                             = 'CantFindUser';
	const  CANT_FIND_NOTIFICATION                     = 'CantFindNotification';
	const  DATABASE_MAINTENANCE_TRY_AGAIN_LATER       = 'DatabaseMaintenanceTryAgainLater';
	const  ERROR_IN_RESPONSE                          = 'ErrorInResponse';
	const  INTERNAL_ERROR                             = 'InternalError';
	const  INVALID_AUTH_TOKEN                         = 'InvalidAuthToken';
	const  INVALID_REQUEST_FORMAT                     = 'InvalidRequestFormat';
	const  INVALID_PAGE                               = 'InvalidPage';
	const  ITEM_NOT_FOR_SALE                          = 'ItemNotForSale';
	const  ITEM_NOT_AVAILABLE_FOR_EDIT                = 'ItemNotAvailableForEdit';
	const  ITEM_NOT_EDITABLE_BY_USER                  = 'ItemNotEditableByUser';
	const  MISSING_AUTH_TOKEN                         = 'MissingAuthToken';
	const  MISSING_AUTH_TOKEN_FOR_BOOTH               = 'MissingAuthTokenForBooth';
	const  MISSING_BOOTH_ID                           = 'MissingBoothId';
	const  MISSING_CATEGORY_PARENT_INPUT              = 'MissingCategoryParentInput';
	const  MISSING_CERT_ID                            = 'MissingCertId';
	const  MISSING_CREDENTIALS                        = 'MissingCredentials';
	const  MISSING_MESSAGE_ID                         = 'MissingMessageId';
	const  MISSING_OFFER_ID                           = 'MissingOfferId';
	const  MISSING_PARAMS                             = 'MissingParams';
	const  MISSING_TRANSACTION_ID                     = 'MissingTransactionId';
	const  MUST_PROVIDE_CREDENTIALS                   = 'MustProvideCredentials';
	const  MUST_PROVIDE_EMAIL                         = 'MustProvideEmail';
	const  MAX_TOKENS_REACHED                         = 'MaxTokensReached';
	const  NO_CATEGORIES_FOUND                        = 'NoCategoriesFound';
	const  NO_ITEMS_TO_ADD_TO_CART                    = 'NoItemsToAddToCart';
	const  NO_USER_ID_PROVIDED                        = 'NoUserIdProvided';
	const  OFFER_ACCEPT_FAILED                        = 'OfferAcceptFailed';
	const  OFFER_CANT_BE_ACCEPTED                     = 'OfferCantBeAccepted';
	const  OFFER_CANT_BE_DENIED                       = 'OfferCantBeDenied';
	const  OFFER_CANT_BE_EDITED                       = 'OfferCantBeEdited';
	const  OFFER_DENY_FAILED                          = 'OfferDenyFailed';
	const  PRIVATE_API                                = 'PrivateAPI';
	const  REQUEST_CANT_USE_SSL                       = 'RequestCantUseSSL';
	const  REQUEST_MUST_USE_SSL                       = 'RequestMustUseSSL';
	const  TOO_MANY_ERRORS                            = 'TooManyErrors';
	const  TOO_MANY_REQUESTS                          = 'TooManyRequests';
	const  TOKEN_CREATION_ERROR                       = 'TokenCreationError';
	const  TOKEN_NOT_VERIFIED                         = 'TokenNotVerified';
	const  UNKNOWN_ITEM_STATUS                        = 'UnknownItemStatus';
	const  UNKNOWN_PARAMETER_GIVEN                    = 'UnknownParameterGiven';
	const  USER_DOESNT_HAVE_BOOTH                     = 'UserDoesntHaveBooth';
	const  USER_INFORMATION_IS_HIDDEN_BY_USER_REQUEST = 'UserInformationIsHiddenByUserRequest';
	const  USER_ISNT_ACTIVE                           = 'UserIsntActive';
}