<?php

namespace MsgPhp\User\Infrastructure\Doctrine\Types;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;
use MsgPhp\User\ScalarUserId;

class UserId extends Type
{
    const USERID_TYPE = 'msgphp_user_id';

    public function getSQLDeclaration(array $column, AbstractPlatform $platform)
    {
        return $platform->getIntegerTypeDeclarationSQL($column);
    }

    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        return $value === null ? null : ScalarUserId::fromValue($value);
    }

    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        return (string) $value ?: null;
    }

    public function getName()
    {
        return self::USERID_TYPE;
    }
}