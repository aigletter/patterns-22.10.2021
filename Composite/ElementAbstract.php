<?php


namespace patterns\Composite;


abstract class ElementAbstract implements ElementInterface
{
    /**
     * @var ElementInterface[]
     */
    protected $children = [];

    protected $text;

    public function __construct($text = null)
    {
        $this->text = $text;
    }

    public function addChild(ElementInterface $element)
    {
        $this->children[] = $element;
    }

    protected function renderChildren()
    {
        $output = '';
        foreach ($this->children as $child) {
            $output .= $child->render();
        }

        return $output;
    }

}