<?php


class OrderPdfReport implements ReportInterface
{
    // From Order
    public function generate($id)
    {
        $order = new Order();
        //

    }

    // TO PDF
    protected function save(Order $order)
    {
        $pdf = 'Formating';
    }
}