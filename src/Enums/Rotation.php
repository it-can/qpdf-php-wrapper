<?php

namespace Msmahon\QpdfPhpWrapper\Enums;

use InvalidArgumentException;

enum Rotation: string
{
    CASE RIGHT = '+90';
    CASE LEFT = '-90';
    CASE DOWN = '+180';
    CASE UP = '-180';

    /**
     * @param int $value
     * @return self
     * @throws InvalidArgumentException
     */
    public static function fromInt(int $value): self
    {
        return match ($value) {
            90 => self::RIGHT,
            -90 => self::LEFT,
            180 => self::DOWN,
            -180 => self::UP,
            default => throw new InvalidArgumentException("Invalid rotation value: $value"),
        };
    }

    /**
     * @param string $value
     * @return self
     * @throws InvalidArgumentException
     */
    public static function fromCardinal(string $value): self
    {
        return match ($value) {
            'right' => self::RIGHT,
            'left' => self::LEFT,
            'down' => self::DOWN,
            'up' => self::UP,
            default => throw new InvalidArgumentException("Invalid rotation value: $value"),
        };
    }
}
