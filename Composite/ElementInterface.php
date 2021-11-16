<?php

namespace patterns\Composite;

interface ElementInterface
{
    public function render(): string;

    public function addChild(ElementInterface $element);
}