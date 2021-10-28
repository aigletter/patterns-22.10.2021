<?php


namespace patterns\Builder;


interface CarBuilderInterface
{
    /**
     * @return mixed
     */
    public function getEngine();

    /**
     * @return mixed
     */
    public function getClimatControll();

    /**
     * @return mixed
     */
    public function getCruiseControll();

    /**
     * @return bool
     */
    public function isParktroninnic(): bool;

    /**
     * @return bool
     */
    public function isAudio(): bool;
}