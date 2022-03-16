@extends('layouts.template')
@section('content')
    <!-- Title -->
    <div class="row heading-bg">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h5 class="txt-dark">Faturas do cliente: {{$client->name}}</h5>
        </div>

    </div>
    <!-- /Title -->

    <!-- Row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default border-panel card-view">
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="table-wrap">
                            <div class="table-responsive">
                                <table id="datable" class="table table-hover display  pb-30">
                                    <thead>
                                    <tr>
                                        <th>Referência</th>
                                        <th>Data de Vencimento</th>
                                        <th>Leitura Atual Medidor</th>
                                        <th>Valor da Tarifa Mensal</th>
                                        <th>Extra</th>
                                        <th>Status</th>
                                        <th>Ações</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($invoices as $invoice)
                                        <tr role="row">
                                            <td class="txt-dark">{{$invoice->invoice_month}}/ {{$invoice->invoice_year}}</td>
                                            <td class="txt-dark">{{$invoice->due_date}}</td>

                                            <td class="txt-dark">{{$invoice->consumption}}</td>
                                            <td>@money($invoice->fare_value)</td>
                                            <td>@money($invoice->extra_value)</td>
                                            <td>{{\App\Http\Helpers\Helper::getStatusInvoice($invoice->status)}}</td>

                                            <td>
                                                <a href="{{route('invoices.print', $invoice->id)}}" class="text-inverse pr-10 " title="Imprimir"
                                                   data-toggle="tooltip" data-original-title="Imprimir"><i
                                                        class="zmdi zmdi-print txt-info"></i></a><a
                                                    href="javascript:void(0)" class="text-inverse" title=""
                                                    data-toggle="tooltip" data-original-title="Delete"><i
                                                        class="zmdi zmdi-delete txt-grey"></i></a>
                                            </td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
