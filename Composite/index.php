<?php

use patterns\Composite\ElementInterface;

include __DIR__ . '/../../vendor/autoload.php';

function drawBreadcrambs(ElementInterface $element)
{
    // TODO
    echo $element->render();
}

$div = new \patterns\Composite\Div();
$span1 = new \patterns\Composite\Span('I am span 1');
$sapn2 = new \patterns\Composite\Span('I am span 2');
$span1->addChild($sapn2);
$div->addChild($span1);

drawBreadcrambs($div);