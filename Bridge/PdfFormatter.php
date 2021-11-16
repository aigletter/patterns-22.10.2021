<?php

namespace patterns\Bridge;

class PdfFormatter implements FormatSaverInterface
{

    public function format($entity)
    {
        echo 'Saving report ' . get_class($entity) . ' to pdf format';
    }
}