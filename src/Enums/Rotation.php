<?php

namespace Msmahon\QpdfPhpWrapper\Enums;

use InvalidArgumentException;

enum Rotation: string
{
    CASE Right = '+90';
    CASE Left = '-90';
    CASE Down = '+180';
    CASE Up = '-180';

    /**
     * @param int $value
     * @return self
     * @throws InvalidArgumentException
     */
    public static function fromInt(int $value): self
    {
        return match ($value) {
            90 => self::Right,
            -90 => self::Left,
            180 => self::Down,
            -180 => self::Up,
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
            'right' => self::Right,
            'left' => self::Left,
            'down' => self::Down,
            'up' => self::Up,
            default => throw new InvalidArgumentException("Invalid rotation value: $value"),
        };
    }
}
