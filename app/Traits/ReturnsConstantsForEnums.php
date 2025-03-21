<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait ReturnsConstantsForEnums
{
    /**
     * isDisabled - Checks if the enum is disabled.
     *
     * @param  string $value
     *
     * @return void
     */
    public static function isDisabled(string $value): bool
    {
        return $value !== null ? in_array($value, self::getDisabled()) : throw new \Exception('isDisabled(): Value is empty. Enum: ' . self::class);
    }

    /**
     * getDisabled - checks if the parent class has a method called "disabled" and returns the values.
     *
     * @return array
     */
    public static function getDisabled(): array
    {
        return method_exists(self::class, 'disabled') ? self::disabled() : [];
    }

    /**
     * values - returns the values of the enum.
     *
     * @param  bool $inverse
     *
     * @return array
     */
    public static function values(?bool $inverse = false): array
    {
        $reflection = new \ReflectionClass(self::class);
        $values = $reflection->getConstants();
        $enums = [];

        foreach ($values as $key => $value) {

            // This "disabled" check is disabled because it's buggy lol. - Leonard, 16 JULY 2023. "The Garuda Villa", Bali, Indonesia.

            // if (! $value && self::isDisabled($value)) {
            //     continue;
            // }
            //$key = Str::replace('_', ' ', $key); // If we have a key with an underscore, we replace it with a space.
            $key = $inverse === true ? $value : $key;
            $value = $inverse === true ? Str::ucfirst(Str::lower($key)) : $value;
            $enums[$key] = $value;
        }

        return $enums;
    }

    /**
     * value - Get the value of the constant.
     *
     * @param  const $const
     *
     * @return string
     */
    public static function value(string $const = null): string
    {
        $values = $const ? self::values() : throw new \Exception('value(): Constant is empty. Enum: ' . self::class);

        // This "disabled" check is disabled because it's buggy lol. - Leonard, 16 JULY 2023. "The Garuda Villa", Bali, Indonesia.
        // if (! array_key_exists($const, $values)) {
        //     throw new \Exception('value(): Could not retrieve constant. Enum is disabled. Enum: ' . self::class . ' Constant: ' . $const);
        // }

        return $values[$const];
    }

    /**
     * label - Get the label of the trait.
     *
     * @param  string $value
     *
     * @return string
     */
    public static function label(string $value = null, bool $raw = false): string
    {
        if (self::isDisabled($value)) {
            throw new \Exception('label(): Enum is disabled. Enum: ' . self::class . ' Constant: ' . $value);
        }

        $label = $value ? array_flip(self::values())[$value] : throw new \Exception('label(): Value is empty. Enum: ' . self::class);

        return $raw === true ? $label : Str::ucfirst(Str::lower($label));
    }

    /**
     * enums - Get the enum constants.
     *
     * @return object
     */
    public static function enums()
    {
        $reflection = new \ReflectionClass(self::class);
        $enums = collect();

        foreach ($reflection->getConstants() as $enum => $value) {
            if (! self::isDisabled($value)) {
                $enums[] = $enum;
            }
        }

        return $enums;
    }
}
