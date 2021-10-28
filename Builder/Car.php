<?php


namespace patterns\Builder;


class Car
{
    protected $engine;

    protected $climatControll;

    protected $cruiseControll;

    protected $parktroninnic;

    protected $audio;

    /*public function __construct(
        string $engine,
        $climatControll = null,
        $cruiseControll = null,
        $parktronnic = false,
        $audio = false
    ) {
        $this->engine = $engine;
        $this->climatControll = $climatControll;
        $this->cruiseControll = $cruiseControll;
        $this->parktroninnic = $parktronnic;
        $this->audio = $audio;
    }*/

    public function __construct(CarBuilderInterface $builder)
    {
        $this->engine = $builder->getEngine();
        $this->climatControll = $builder->getClimatControll();
        $this->cruiseControll = $builder->getClimatControll();
        $this->parktroninnic = $builder->isParktroninnic();
        $this->audio = $builder->isAudio();
    }

    public function move()
    {
        return 'Brrrrrrrrrr' . PHP_EOL;
    }
}