<?php

namespace App\oop\CAE;

class Microwive
{
    private int  $temp;
    private string $program;
    private int $time;
    private bool $status;
    /**
     * @param int $temp
     * @param string $program
     * @param int $time
     */
    public function __construct($temp, $program, $time)
    {
        $this->temp = $temp;
        $this->program = $program;
        $this->time = $time;
    }
    public function turnOn(): bool
    {
        $this->status = true;
        return true;
    }
    public function turnOff(): bool
    {
        $this->status = false;
        return true;
    }
    public function getStatus(): string
    {
        if ($this->status == true) {
            return "the MicroWave is Turn On";
        }
        return "the MicroWave is Turn off";
    }
    public function deFreeze(): string
    {

        $this->turnOnMicroWaveSytem();
        $this->loadingDefreezingprograme();
        $this->setTime();
        return "i am de - freezing the food at Tempture {$this->temp}
             using the program {$this->program} in time {$this->time}";
    }
    private function turnOnMicroWaveSytem()
    {
        return " Starting a healthing system ";
    }
    private function loadingDefreezingprograme()
    {
        return " loading de freezing program {$this->program} ";
    }
    private function setTime()
    {
        return " the food time take {$this->time} seconds";
    }
}
