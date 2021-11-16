<?php


namespace patterns\Bridge;


class UserReport implements ReportInterface
{
    protected $formatter;

    public function __construct(FormatSaverInterface $formatSaver)
    {
        $this->formatter = $formatSaver;
    }

    public function generate($id)
    {
        $this->formatter->format($this);
    }
}