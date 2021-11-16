<?php

namespace patterns\Bridge;

class CsvFormatter implements FormatSaverInterface
{

    public function format($entity)
    {
        echo 'Saving report ' . get_class($entity) . ' to csv format';
    }
}