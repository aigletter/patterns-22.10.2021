<?php

namespace patterns\Bridge;

/**
 * Class OrderReport
 * Abstraction
 */
class OrderReport implements ReportInterface
{
    /**
     * @var FormatSaverInterface
     * Implementation
     */
    protected $foramtSaver;

    public function __construct(FormatSaverInterface $formatSaver)
    {
        $this->foramtSaver = $formatSaver;
    }


    public function generate($id)
    {
        $this->foramtSaver->format($this);
    }
}