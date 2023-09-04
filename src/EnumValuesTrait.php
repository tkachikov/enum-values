<?php

declare(strict_types=1);

namespace Tkachikov\EnumValues;

trait EnumValuesTrait
{
    /**
     * @return array
     */
    public static function getValues(): array
    {
        return self::getList('value');
    }

    /**
     * @return array
     */
    public static function getKeys(): array
    {
        return self::getList('name');
    }

    /**
     * @return array
     */
    public static function getByKey(): array
    {
        return array_combine(self::getKeys(), self::getValues());
    }

    /**
     * @return array
     */
    public static function getByValue(): array
    {
        return array_combine(self::getValues(), self::getKeys());
    }

    /**
     * @param string $property
     *
     * @return array
     */
    private static function getList(string $property): array
    {
        return array_map(fn ($enum) => $enum->$property ?? $enum->name, self::cases());
    }
}
