<?php

namespace patterns\Composite;

class Div extends ElementAbstract
{
    public function render(): string
    {
        $output = '<div>';
        $output .= $this->text;
        $output .= $this->renderChildren();
        $output .= '</div>';

        return $output;
    }
}