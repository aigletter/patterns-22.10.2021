<?php


namespace patterns\Builder;


class CarBuilder implements CarBuilderInterface
{
    protected $engine;

    protected $climatControll;

    protected $cruiseControll;

    protected $parktroninnic = false;

    protected $audio = false;

    /**
     * @param mixed $engine
     * @return CarBuilder
     */
    public function setEngine($engine)
    {
        $this->engine = $engine;
        return $this;
    }

    /**
     * @param mixed $climatControll
     * @return CarBuilder
     */
    public function setClimatControll($climatControll)
    {
        $this->climatControll = $climatControll;
        return $this;
    }

    /**
     * @param mixed $cruiseControll
     * @return CarBuilder
     */
    public function setCruiseControll($cruiseControll)
    {
        $this->cruiseControll = $cruiseControll;
        return $this;
    }

    /**
     * @param bool $parktroninnic
     * @return CarBuilder
     */
    public function setParktroninnic(bool $parktroninnic): CarBuilder
    {
        $this->parktroninnic = $parktroninnic;
        return $this;
    }

    /**
     * @param bool $audio
     * @return CarBuilder
     */
    public function setAudio(bool $audio): CarBuilder
    {
        $this->audio = $audio;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEngine()
    {
        return $this->engine;
    }

    /**
     * @return mixed
     */
    public function getClimatControll()
    {
        return $this->climatControll;
    }

    /**
     * @return mixed
     */
    public function getCruiseControll()
    {
        return $this->cruiseControll;
    }

    /**
     * @return bool
     */
    public function isParktroninnic(): bool
    {
        return $this->parktroninnic;
    }

    /**
     * @return bool
     */
    public function isAudio(): bool
    {
        return $this->audio;
    }

    public function build()
    {
        if (empty($this->engine)) {
            throw new \Exception('Engine is required');
        }

        //return new Car($this->engine, $this->climatControll, $this->cruiseControll, $this->parktroninnic, $this->audio);
        return new Car($this);
    }
}