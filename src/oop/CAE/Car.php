<?php

namespace App\oop\CAE;

abstract class Car
{
    /**
     * Current speed of the vehicle.
     *
     * Changes dynamically during runtime.
     *
     * @var int
     */
    protected int $speed;
    /**
     * Number of doors the vehicle has.
     *
     * @var int
     */
    protected int $NumberOfDours;
    /**
     * Gearbox system type.
     *
     * Examples: manual, automatic.
     *
     * @var string
     */
    protected string $genrBoxSystem;
    /**
     * Vehicle color.
     *
     * @var string
     */
    protected string $color;
    /**
     * Indicates whether the vehicle is turned on.
     *
     * True if the vehicle is running, false otherwise.
     *
     * @var bool
     */
    protected bool $turnOn = false;
    public function __construct(int $speed, int $NumberOfDours, string $color, string $genrBoxSystem)
    {
        $this->speed = $speed;
        $this->NumberOfDours = $NumberOfDours;
        $this->color = $color;
        $this->genrBoxSystem = $genrBoxSystem;
    }
    public abstract function move(): int;
    public abstract function turnOn(): bool;
    public abstract function turnOff(): bool;
    public abstract function accelarate(int $speed): bool;
    public abstract function park(): bool;
}
