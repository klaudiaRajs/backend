<?php


namespace App\Exceptions;


class ApplicationException
{
    //100x user related errors
    const ERROR_CODE_USER_NOT_FOUND = 100404;
    //200x item related errors
    const ERROR_CODE_ITEM_NOT_FOUND = 200404;
    //300x service related errors
    const ERROR_CODE_TEMPORARY_SERVICE_EXCEPTION = 300500;

    const ERROR_MESSAGES = [
        self::ERROR_CODE_USER_NOT_FOUND => "User not found",
        self::ERROR_CODE_ITEM_NOT_FOUND => "Item not found",
        self::ERROR_CODE_TEMPORARY_SERVICE_EXCEPTION => "Service temporary not available"
    ];

    public static function UserNotFound()
    {
        return self::getErrorResponse(
            self::ERROR_MESSAGES[self::ERROR_CODE_USER_NOT_FOUND],
            self::ERROR_CODE_USER_NOT_FOUND
        );
    }

    public static function ItemBlueprintNotFound()
    {
        return self::getErrorResponse(
            self::ERROR_MESSAGES[self::ERROR_CODE_ITEM_NOT_FOUND],
            self::ERROR_CODE_ITEM_NOT_FOUND
        );
    }

    public static function TemporaryServiceError()
    {
        return self::getErrorResponse(
            self::ERROR_MESSAGES[self::ERROR_CODE_TEMPORARY_SERVICE_EXCEPTION],
            self::ERROR_CODE_TEMPORARY_SERVICE_EXCEPTION
        );
    }

    private static function getErrorResponse(string $message, int $code)
    {
        return [
            'ErrorMessage' => $message,
            'ErrorCode' => $code
        ];
    }
}
