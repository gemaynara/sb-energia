<?php

namespace App\Http\Helpers;

class Helper
{
    public static function getStatusInvoice($status)
    {
        switch ($status) {
            case 'pending':
                echo ' <span class="label label-warning font-weight-100">Pendente</span>';
                break;
            case 'paid':
                echo ' <span class="label label-success font-weight-100">Pago</span>';
                break;
            case 'canceled':
                echo ' <span class="label label-danger font-weight-100">Cancelado</span>';
                break;
            case 'suspended':
                echo ' <span class="label label-warning font-weight-100">Suspensa</span>';
                break;
            default:
                return ' <span class="label label-default font-weight-100">Falha</span>';
        }
    }


}
