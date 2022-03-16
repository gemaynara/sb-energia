<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Conta de Energia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="imagem/x-icon" href="/imagens/icone_ie.ico"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link href="{{asset('pdf/bootstrap.min.css')}}" id="bootstrap-stylesheet" rel="stylesheet" type="text/css"/>
    <link href="{{asset('pdf/icons.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('pdf/app.min.css')}}" id="app-stylesheet" rel="stylesheet" type="text/css"/>

    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

    <style>
        #chartdiv {
            width: 100%;
            height: 500px;
        }
    </style>
</head>
<body data-layout="horizontal" data-topbar="dark">
<div id="wrapper">
    <div class="content-page" style="padding: 20px 12px 0 12px">
        <div class="content" style="padding: 0px 15px 0px 15px">
            <table style="width: 100%;">
                <tr>
                    <td style="width: 20%;text-align: center;border: 1px solid blackk; background-color: #ccc">
                        Nº CLIENTE
                    </td>
                    <td style="width: 80%;padding-left: 150px">SB ENERGIA - CONSULTORIA, PROJETOS E INSTALACOES
                        ELETRICAS LTDA
                    </td>
                </tr>
                <tr>
                    <td style="width: 20%;text-align: center;border: 1px solid blackk; background-color: #ccc">
                        {{$invoice->user->id}}
                    </td>
                    <td style="width: 80%;padding-left: 150px">RUA AROAZES 801 SL101 - Jacarepagua, Rio de Janeiro/RJ
                    </td>
                </tr>
                <tr>
                    <td style="width: 20%;text-align: center;"></td>
                    <td style="width: 80%;padding-left: 150px">CNPJ 30.025.140/0001-85</td>
                </tr>
            </table>
            <br>
            <table style="width: 100%;">
                <tr style="background-color: #acd2f7;-webkit-print-color-adjust: exact;">
                    <td style="width: 70%;text-align: center;padding: 10px;"><strong>CONTA DE ENERGIA ELÉTRICA | GRUPO
                            B</strong></td>
                    <td style="width: 20%;text-align: center;"><strong>DATA VENCIMENTO</strong></td>
                    <td style="width: 10%;text-align: center;">
                        <strong>{{$invoice->due_date}}</strong></td>
                </tr>
            </table>
            <br>
            <p style="margin: 0px">Nome Cliente: {{$invoice->user->name}}</p>
            <p style="margin: 0px">Endereco: {{$invoice->client->address}}</p>
            <p style="margin: 0px">CPF/CNPJ: {{$invoice->client->cpf_cnpj}}</p>
            <table style="width: 100%;">
                <tr>
                    <td style="width: 70%;"></td>
                    <td colspan="2"
                        style="width: 30%;text-align: center;background-color: #acd2f7!important;border: solid 2px #acd2f7;-webkit-print-color-adjust: exact;">
                        <strong>HISTÓRICO<br>Ultimos 12 meses</strong></td>
                </tr>
                <tr>
                    <td style="width: 70%;"></td>
                    <td style="width: 15%;text-align: center;padding-left: 10px;border-left: solid 2px #acd2f7">Consumo
                        - kWh
                    </td>
                    <td style="width: 15%;text-align: center;padding-left: 10px;border-left: solid 2px #acd2f7;border-right: solid 2px #acd2f7">
                        Geração - kWh
                    </td>
                </tr>
                <tr>
                    <td style="width: 70%;"></td>
                    <td style="width: 15%;text-align: left;padding-left: 10px;border-left: solid 2px #acd2f7">
                        <table style="width: 100%;">
                            <td style="width: 70%;text-align: left;"> </td>
                            <td style="width: 30%;text-align: center;"></td>
                        </table>
                    </td>
                    <td style="width: 15%;text-align: left;padding-left: 10px;border-left: solid 2px #acd2f7;border-right: solid 2px #acd2f7">
                        <table style="width: 100%;">
                            <td style="width: 70%;text-align: left;">123456</td>
                            <td style="width: 30%;text-align: center;">100%</td>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td rowspan="2"
                        style="width: 70%;text-align: center;padding-left: 10px;background-color: #acd2f7;-webkit-print-color-adjust: exact;">
                        <strong>INFORMAÇÃO DE LEITURA</strong></td>
                    <td style="width: 15%;text-align: left;padding-left: 10px;border-left: solid 2px #acd2f7">
                        <table style="width: 100%;">
                            <td style="width: 70%;text-align: left;">Fev/2022</td>
                            <td style="width: 30%;text-align: center;">0</td>
                        </table>
                    </td>
                    <td style="width: 15%;text-align: left;padding-left: 10px;border-left: solid 2px #acd2f7;border-right: solid 2px #acd2f7">
                        <table style="width: 100%;">
                            <td style="width: 70%;text-align: left;">0</td>
                            <td style="width: 30%;text-align: center;">100%</td>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="width: 15%;text-align: left;padding-left: 10px;border-left: solid 2px #acd2f7">
                        <table style="width: 100%;">
                            <td style="width: 70%;text-align: left;">Jan/2022</td>
                            <td style="width: 30%;text-align: center;">0</td>
                        </table>
                    </td>
                    <td style="width: 15%;text-align: left;padding-left: 10px;border-left: solid 2px #acd2f7;border-right: solid 2px #acd2f7">
                        <table style="width: 100%;">
                            <td style="width: 70%;text-align: left;">0</td>
                            <td style="width: 30%;text-align: center;">100%</td>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="width: 70%;">
                        <table style="width: 100%;">
                            <td style="width: 33%;text-align: center;padding-left: 10px;">Mês Referencia</td>
                            <td style="width: 33%;text-align: center;padding-left: 10px;">Data Apresentação</td>
                            <td style="width: 33%;text-align: center;padding-left: 10px;">Prev. da próxima Leitura</td>
                        </table>
                    </td>
                    <td style="width: 15%;text-align: left;padding-left: 10px;border-left: solid 2px #acd2f7">
                        <table style="width: 100%;">
                            <td style="width: 70%;text-align: left;"> {{$invoice->invoice_month}}/{{ $invoice->invoice_year}} 7</td>
                            <td style="width: 30%;text-align: center;">0</td>
                        </table>
                    </td>
                    <td style="width: 15%;text-align: left;padding-left: 10px;border-left: solid 2px #acd2f7;border-right: solid 2px #acd2f7">
                        <table style="width: 100%;">
                            <td style="width: 70%;text-align: left;">0</td>
                            <td style="width: 30%;text-align: center;">100%</td>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="width: 70%;">
                        <table style="width: 100%;">
                            <td style="width: 33%;text-align: center;padding-left: 10px;">Mar/2022</td>
                            <td style="width: 33%;text-align: center;padding-left: 10px;">15/03/2022</td>
                            <td style="width: 33%;text-align: center;padding-left: 10px;">15/04/2022</td>
                        </table>
                    </td>
                    <td style="width: 15%;text-align: left;padding-left: 10px;border-left: solid 2px #acd2f7">
                        <table style="width: 100%;">
                            <td style="width: 70%;text-align: left;">Nov/2021</td>
                            <td style="width: 30%;text-align: center;">0</td>
                        </table>
                    </td>
                    <td style="width: 15%;text-align: left;padding-left: 10px;border-left: solid 2px #acd2f7;border-right: solid 2px #acd2f7">
                        <table style="width: 100%;">
                            <td style="width: 70%;text-align: left;">0</td>
                            <td style="width: 30%;text-align: center;">100%</td>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="width: 70%;">
                        <table style="width: 100%;">
                            <td style="width: 33%;text-align: center;padding-left: 10px;">Leitura Atual</td>
                            <td style="width: 33%;text-align: center;padding-left: 10px;">Leitura Anterior</td>
                            <td style="width: 33%;text-align: center;padding-left: 10px;">Consumo (kWh)</td>
                        </table>
                    </td>
                    <td style="width: 15%;text-align: left;padding-left: 10px;border-left: solid 2px #acd2f7">
                        <table style="width: 100%;">
                            <td style="width: 70%;text-align: left;">Out/2021</td>
                            <td style="width: 30%;text-align: center;">0</td>
                        </table>
                    </td>
                    <td style="width: 15%;text-align: left;padding-left: 10px;border-left: solid 2px #acd2f7;border-right: solid 2px #acd2f7">
                        <table style="width: 100%;">
                            <td style="width: 70%;text-align: left;">0</td>
                            <td style="width: 30%;text-align: center;">100%</td>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="width: 70%;">
                        <table style="width: 100%;">
                            <td style="width: 33%;text-align: center;padding-left: 10px;">123456</td>
                            <td style="width: 33%;text-align: center;padding-left: 10px;">0</td>
                            <td style="width: 33%;text-align: center;padding-left: 10px;">123456</td>
                        </table>
                    </td>
                    <td style="width: 15%;text-align: left;padding-left: 10px;border-left: solid 2px #acd2f7">
                        <table style="width: 100%;">
                            <td style="width: 70%;text-align: left;">Set/2021</td>
                            <td style="width: 30%;text-align: center;">0</td>
                        </table>
                    </td>
                    <td style="width: 15%;text-align: left;padding-left: 10px;border-left: solid 2px #acd2f7;border-right: solid 2px #acd2f7">
                        <table style="width: 100%;">
                            <td style="width: 70%;text-align: left;">0</td>
                            <td style="width: 30%;text-align: center;">100%</td>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td rowspan="2"
                        style="width: 70%;text-align: center;padding-left: 10px;background-color: #acd2f7;-webkit-print-color-adjust: exact;">
                        <strong>INFORMAÇÃO DE FATURAMENTO</strong></td>
                    <td style="width: 15%;text-align: left;padding-left: 10px;border-left: solid 2px #acd2f7">
                        <table style="width: 100%;">
                            <td style="width: 70%;text-align: left;">Ago/2021</td>
                            <td style="width: 30%;text-align: center;">0</td>
                        </table>
                    </td>
                    <td style="width: 15%;text-align: left;padding-left: 10px;border-left: solid 2px #acd2f7;border-right: solid 2px #acd2f7">
                        <table style="width: 100%;">
                            <td style="width: 70%;text-align: left;">0</td>
                            <td style="width: 30%;text-align: center;">100%</td>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="width: 15%;text-align: left;padding-left: 10px;border-left: solid 2px #acd2f7">
                        <table style="width: 100%;">
                            <td style="width: 70%;text-align: left;">Jul/2021</td>
                            <td style="width: 30%;text-align: center;">0</td>
                        </table>
                    </td>
                    <td style="width: 15%;text-align: left;padding-left: 10px;border-left: solid 2px #acd2f7;border-right: solid 2px #acd2f7">
                        <table style="width: 100%;">
                            <td style="width: 70%;text-align: left;">0</td>
                            <td style="width: 30%;text-align: center;">100%</td>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="width: 70%;">
                        <table style="width: 100%;">
                            <td style="width: 15%;text-align: right;padding-left: 10px;">Mês Ref.</td>
                            <td style="width: 15%;text-align: right;padding-left: 10px;">Consumido</td>
                            <td style="width: 20%;text-align: right;padding-left: 10px;">Saldo Total Crédito</td>
                            <td style="width: 20%;text-align: right;padding-left: 10px;">Compensado (kWh)</td>
                            <td style="width: 15%;text-align: right;padding-left: 10px;">Tarifa (R$/kWh)</td>
                            <td style="width: 15%;text-align: right;padding-left: 10px;padding-right: 5px;">Valor (R$)
                            </td>
                        </table>
                    </td>
                    <td style="width: 15%;text-align: left;padding-left: 10px;border-left: solid 2px #acd2f7">
                        <table style="width: 100%;">
                            <td style="width: 70%;text-align: left;">Jun/2021</td>
                            <td style="width: 30%;text-align: center;">0</td>
                        </table>
                    </td>
                    <td style="width: 15%;text-align: left;padding-left: 10px;border-left: solid 2px #acd2f7;border-right: solid 2px #acd2f7">
                        <table style="width: 100%;">
                            <td style="width: 70%;text-align: left;">0</td>
                            <td style="width: 30%;text-align: center;">100%</td>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="width: 70%;">
                        <table style="width: 100%;">
                            <td style="width: 15%;text-align: right;padding-left: 10px;">Mar/2022</td>
                            <td style="width: 15%;text-align: right;padding-left: 10px;">123456</td>
                            <td style="width: 20%;text-align: right;padding-left: 10px;">123456</td>
                            <td style="width: 20%;text-align: right;padding-left: 10px;">123456</td>
                            <td style="width: 15%;text-align: right;padding-left: 10px;">0.00785</td>
                            <td style="width: 15%;text-align: right;padding-left: 10px;padding-right: 5px;">969,13</td>
                        </table>
                    </td>
                    <td style="width: 15%;text-align: left;padding-left: 10px;border-left: solid 2px #acd2f7">
                        <table style="width: 100%;">
                            <td style="width: 70%;text-align: left;">Mai/2021</td>
                            <td style="width: 30%;text-align: center;">0</td>
                        </table>
                    </td>
                    <td style="width: 15%;text-align: left;padding-left: 10px;border-left: solid 2px #acd2f7;border-right: solid 2px #acd2f7">
                        <table style="width: 100%;">
                            <td style="width: 70%;text-align: left;">0</td>
                            <td style="width: 30%;text-align: center;">100%</td>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="width: 70%;">
                        <table style="width: 100%;">
                            <td style="width: 15%;text-align: right;padding-left: 10px;">Fev/2022</td>
                            <td style="width: 15%;text-align: right;padding-left: 10px;">0</td>
                            <td style="width: 20%;text-align: right;padding-left: 10px;">0</td>
                            <td style="width: 20%;text-align: right;padding-left: 10px;">0</td>
                            <td style="width: 15%;text-align: right;padding-left: 10px;">0</td>
                            <td style="width: 15%;text-align: right;padding-left: 10px;padding-right: 5px;">0,00</td>
                        </table>
                    </td>
                    <td style="width: 15%;text-align: left;padding-left: 10px;border-left: solid 2px #acd2f7">
                        <table style="width: 100%;">
                            <td style="width: 70%;text-align: left;">Abr/2021</td>
                            <td style="width: 30%;text-align: center;">-2732</td>
                        </table>
                    </td>
                    <td style="width: 15%;text-align: left;padding-left: 10px;border-left: solid 2px #acd2f7;border-right: solid 2px #acd2f7">
                        <table style="width: 100%;">
                            <td style="width: 70%;text-align: left;">-2732</td>
                            <td style="width: 30%;text-align: center;">100%</td>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="width: 70%;">
                        <table style="width: 100%;">
                            <td style="width: 15%;text-align: right;padding-left: 10px;">Jan/2022</td>
                            <td style="width: 15%;text-align: right;padding-left: 10px;">0</td>
                            <td style="width: 20%;text-align: right;padding-left: 10px;">0</td>
                            <td style="width: 20%;text-align: right;padding-left: 10px;">0</td>
                            <td style="width: 15%;text-align: right;padding-left: 10px;">0</td>
                            <td style="width: 15%;text-align: right;padding-left: 10px;padding-right: 5px;">0,00</td>
                        </table>
                    </td>
                    <td style="width: 15%;text-align: left;padding-left: 10px;border-left: solid 2px #acd2f7"></td>
                    <td style="width: 15%;text-align: left;padding-left: 10px;border-left: solid 2px #acd2f7;border-right: solid 2px #acd2f7"></td>
                </tr>
                <tr>
                    <td style="width: 70%;">
                        <table style="width: 100%;">
                            <td style="width: 15%;text-align: right;padding-left: 10px;">Dez/2021</td>
                            <td style="width: 15%;text-align: right;padding-left: 10px;">0</td>
                            <td style="width: 20%;text-align: right;padding-left: 10px;">0</td>
                            <td style="width: 20%;text-align: right;padding-left: 10px;">0</td>
                            <td style="width: 15%;text-align: right;padding-left: 10px;">0</td>
                            <td style="width: 15%;text-align: right;padding-left: 10px;padding-right: 5px;">0,00</td>
                        </table>
                    </td>
                    <td rowspan="2" colspan="2"
                        style="width: 30%;text-align: center;padding: 10px;background-color: #a1daa1;border-left: solid 2px #acd2f7;-webkit-print-color-adjust: exact;border-right: solid 2px #acd2f7">
                        <strong>LIGHT COIN - CREDITO (R$)</strong></td>
                </tr>
                <tr>
                    <td style="width: 70%;">
                        <table style="width: 100%;">
                            <td style="width: 15%;text-align: right;padding-left: 10px;">Nov/2021</td>
                            <td style="width: 15%;text-align: right;padding-left: 10px;">0</td>
                            <td style="width: 20%;text-align: right;padding-left: 10px;">0</td>
                            <td style="width: 20%;text-align: right;padding-left: 10px;">0</td>
                            <td style="width: 15%;text-align: right;padding-left: 10px;">0</td>
                            <td style="width: 15%;text-align: right;padding-left: 10px;padding-right: 5px;">0,00</td>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="width: 70%;">
                        <table style="width: 100%;">
                            <td style="width: 15%;text-align: right;padding-left: 10px;">Out/2021</td>
                            <td style="width: 15%;text-align: right;padding-left: 10px;">0</td>
                            <td style="width: 20%;text-align: right;padding-left: 10px;">0</td>
                            <td style="width: 20%;text-align: right;padding-left: 10px;">0</td>
                            <td style="width: 15%;text-align: right;padding-left: 10px;">0</td>
                            <td style="width: 15%;text-align: right;padding-left: 10px;padding-right: 5px;">0,00</td>
                        </table>
                    </td>
                    <td style="width: 15%;text-align: center;padding-left: 10px;border-left: solid 2px #acd2f7;border-right: solid 2px #acd2f7;">
                        Mensal
                    </td>
                    <td style="width: 15%;text-align: center;padding-left: 10px;border-right: solid 2px #acd2f7;">
                        Acumulado
                    </td>
                </tr>
                <tr>
                    <td style="width: 70%;">
                        <table style="width: 100%;">
                            <td style="width: 15%;text-align: right;padding-left: 10px;"></td>
                            <td style="width: 15%;text-align: right;padding-left: 10px;">625</td>
                            <td style="width: 20%;text-align: right;padding-left: 10px;">625</td>
                            <td style="width: 20%;text-align: right;padding-left: 10px;">625</td>
                            <td style="width: 15%;text-align: right;padding-left: 10px;">1,10217</td>
                            <td style="width: 15%;text-align: right;padding-left: 10px;padding-right: 5px;">688,86</td>
                        </table>
                    </td>
                    <td style="width: 15%;text-align: left;padding-left: 10px;border-left: solid 2px #acd2f7">
                        <table style="width: 100%;">
                            <td style="width: 70%;text-align: left;" Mar
                            /2022</td>
                            <td style="width: 30%;text-align: center;">123456</td>
                        </table>
                    </td>
                    <td style="width: 15%;text-align: left;padding-left: 10px;border-left: solid 2px #acd2f7;border-right: solid 2px #acd2f7">
                        <table style="width: 100%;">
                            <td style="width: 70%;text-align: left;">123456</td>
                            <td style="width: 30%;text-align: center;">100%</td>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="width: 70%;border: solid 2px #acd2f7;">
                        <table style="width: 100%">
                            <td style="width: 15%;text-align: right;padding-left: 10px;">Gerador FV</td>
                            <td style="width: 15%;text-align: right;padding-left: 10px;">625</td>
                            <td style="width: 20%;text-align: right;padding-left: 10px;">625</td>
                            <td style="width: 20%;text-align: right;padding-left: 10px;">625</td>
                            <td style="width: 15%;text-align: right;padding-left: 10px;">1,10217</td>
                            <td style="width: 15%;text-align: right;padding-left: 10px;padding-right: 5px;">688,86</td>
                        </table>
                    </td>
                    <td style="width: 15%;text-align: right;padding-left: 10px;border-left: solid 2px #acd2f7;border-right: solid 2px #acd2f7;"></td>
                    <td style="width: 15%;text-align: right;padding-left: 10px;border-right: solid 2px #acd2f7;"></td>
                </tr>
                <tr>
                    <td style="width: 70%;">
                        <table style="width: 100%;">
                            <td style="width: 15%;text-align: right;padding-left: 10px;"></td>
                            <td style="width: 15%;text-align: right;padding-left: 10px;"></td>
                            <td style="width: 20%;text-align: right;padding-left: 10px;"></td>
                            <td style="width: 20%;text-align: right;padding-left: 10px;"></td>
                            <td style="width: 15%;text-align: right;padding-left: 10px;">R$</td>
                            <td style="width: 15%;text-align: right;padding-left: 10px;padding-right: 5px;">R$</td>
                        </table>
                    </td>
                    <td rowspan="2" colspan="2"
                        style="width: 30%;text-align: center;padding: 10px;background-color: #ffdd7b;-webkit-print-color-adjust: exact;border-left: solid 2px #acd2f7;border-right: solid 2px #acd2f7">
                        <strong>MENSAGENS</strong></td>
                </tr>
                <tr>
                    <td style="width: 70%;">
                        <table style="width: 100%;">
                            <td colspan="3" style="width: 50%;text-align: left;padding-left: 10px;">Contr. Custeio Ilum
                                Publica
                            </td>
                            <td style="width: 20%;text-align: right;padding-left: 10px;">625</td>
                            <td style="width: 15%;text-align: right;padding-left: 10px;">1,10217</td>
                            <td style="width: 15%;text-align: right;padding-left: 10px;padding-right: 5px;">688,86</td>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="width: 70%;">
                        <table style="width: 100%;">
                            <td colspan="4" style="width: 70%;text-align: left;padding-left: 10px;">LightCoin, ref.
                                Mai21
                            </td>
                            <td style="width: 15%;text-align: right;padding-left: 10px;">(123,24)</td>
                            <td style="width: 15%;text-align: right;padding-left: 10px;"></td>
                        </table>
                    </td>
                    <td colspan="2"
                        style="width: 30%;text-align: left;border-left: solid 2px #acd2f7;border-right: solid 2px #acd2f7">
                        Informamos que a unidade consumidora não
                    </td>
                </tr>
                <tr>
                    <td style="width: 70%;">
                        <table style="width: 100%;">
                            <td colspan="4" style="width: 70%;text-align: left;padding-left: 10px;"></td>
                            <td style="width: 15%;text-align: right;padding-left: 10px;"></td>
                            <td style="width: 15%;text-align: right;padding-left: 10px;"></td>
                        </table>
                    </td>
                    <td colspan="2"
                        style="width: 30%;text-align: left;border-left: solid 2px #acd2f7;border-right: solid 2px #acd2f7">
                        possui débitos de meses anteriores.
                    </td>
                </tr>
                <tr>
                    <td style="width: 70%;">
                        <table style="width: 100%;">
                            <td colspan="4" style="width: 70%;text-align: left;padding-left: 10px;"></td>
                            <td style="width: 15%;text-align: right;padding-left: 10px;"></td>
                            <td style="width: 15%;text-align: right;padding-left: 10px;"></td>
                        </table>
                    </td>
                    <td colspan="2"
                        style="width: 30%;text-align: left;border-left: solid 2px #acd2f7;border-right: solid 2px #acd2f7"></td>
                </tr>
                <tr>
                    <td style="width: 70%;">
                        <table style="width: 100%;">
                            <td colspan="4" style="width: 70%;text-align: left;padding-left: 10px;">Dif. Custo Disponib.
                                Res. 482
                            </td>
                            <td style="width: 15%;text-align: right;padding-left: 10px;">-</td>
                            <td style="width: 15%;text-align: right;padding-left: 10px;padding-right: 5px;">112,00</td>
                        </table>
                    </td>
                    <td colspan="2"
                        style="width: 30%;text-align: left;border-left: solid 2px #acd2f7;border-right: solid 2px #acd2f7"></td>
                </tr>
                <tr>
                    <td style="width: 70%;">
                        <table style="width: 100%;">
                            <td colspan="4" style="width: 70%;text-align: left;padding-left: 10px;">Dif ICMS Tusd
                                (Injetado x Consumido)
                            </td>
                            <td style="width: 15%;text-align: right;padding-left: 10px;">-</td>
                            <td style="width: 15%;text-align: right;padding-left: 10px;padding-right: 5px;">256,05</td>
                        </table>
                    </td>
                    <td colspan="2"
                        style="width: 30%;text-align: left;border-left: solid 2px #acd2f7;border-right: solid 2px #acd2f7"></td>
                </tr>
                <tr>
                    <td style="width: 70%;">
                        <table style="width: 100%;">
                            <td colspan="4" style="width: 70%;text-align: left;padding-left: 10px;">Base de Calculo -
                                Desconto
                            </td>
                            <td style="width: 15%;text-align: right;padding-left: 10px;">-</td>
                            <td style="width: 15%;text-align: right;padding-left: 10px;padding-right: 5px;">1.232,43
                            </td>
                        </table>
                    </td>
                    <td colspan="2"
                        style="width: 30%;text-align: left;border-left: solid 2px #acd2f7;border-right: solid 2px #acd2f7"></td>
                </tr>
                <tr style="background-color: #acd2f7;border-right: solid 2px #acd2f7;-webkit-print-color-adjust: exact;">
                    <td style="width: 70%;text-align: center;padding: 10px;"><strong>VALOR A PAGAR</strong></td>
                    <td style="width: 15%;text-align: center;"><strong>R$</strong></td>
                    <td style="width: 15%;text-align: right;"><strong style="margin-right: 15px;">969,13</strong></td>
                </tr>

            </table>

            <div id="chartdiv"></div>

        </div> <!-- content -->
    </div>
</div>
<!-- END wrapper -->

<!-- Vendor js -->
<script src="assets/js/vendor.min.js"></script>

<!-- knob plugin -->
<script src="assets/libs/jquery-knob/jquery.knob.min.js"></script>

<!-- App js -->
<script src="assets/js/app.min.js"></script>

</body>
</html>

<!-- Chart code -->
<script>

    am4core.ready(function () {

// Themes begin
        am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
        var chart = am4core.create("chartdiv", am4charts.XYChart);
        chart.scrollbarX = new am4core.Scrollbar();

// Add data
        chart.data = [{"country": "Mar/2022", "visits": 123456}, {
            "country": "Fev/2022",
            "visits": 0
        }, {"country": "Jan/2022", "visits": 0}, {"country": "Dez/2021", "visits": 0}, {
            "country": "Nov/2021",
            "visits": 0
        }, {"country": "Out/2021", "visits": 0}, {"country": "Set/2021", "visits": 0}, {
            "country": "Ago/2021",
            "visits": 0
        }, {"country": "Jul/2021", "visits": 0}, {"country": "Jun/2021", "visits": 0}, {
            "country": "Mai/2021",
            "visits": 0
        }, {"country": "Abr/2021", "visits": -2732},];

        prepareParetoData();

        function prepareParetoData() {
            for (var i = 0; i < chart.data.length; i++) {
                chart.data[i].pareto = chart.data[i].visits;
            }
        }

// Create axes
        var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
        categoryAxis.dataFields.category = "country";
        categoryAxis.renderer.grid.template.location = 0;
        categoryAxis.renderer.minGridDistance = 60;
        categoryAxis.tooltip.disabled = true;

        var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
        valueAxis.renderer.minWidth = 50;
        valueAxis.min = 0;
        valueAxis.cursorTooltipEnabled = false;

// Create series
        var series = chart.series.push(new am4charts.ColumnSeries());
        series.sequencedInterpolation = true;
        series.dataFields.valueY = "visits";
        series.dataFields.categoryX = "country";
        series.tooltipText = "Consumo - kWh: [{categoryX}: bold]{valueY}[/]";
        series.columns.template.strokeWidth = 0;

        series.tooltip.pointerOrientation = "vertical";

        series.columns.template.column.cornerRadiusTopLeft = 10;
        series.columns.template.column.cornerRadiusTopRight = 10;
        series.columns.template.column.fillOpacity = 0.8;

        var labelBullet = series.bullets.push(new am4charts.LabelBullet());
        labelBullet.label.verticalCenter = "top";
        labelBullet.label.dy = 20;
        labelBullet.label.text = "{values.valueY.workingValue.formatNumber('#.')}";

// on hover, make corner radiuses bigger
        var hoverState = series.columns.template.column.states.create("hover");
        hoverState.properties.cornerRadiusTopLeft = 0;
        hoverState.properties.cornerRadiusTopRight = 0;
        hoverState.properties.fillOpacity = 1;

        var paretoValueAxis = chart.yAxes.push(new am4charts.ValueAxis());
        paretoValueAxis.renderer.opposite = true;
        paretoValueAxis.min = 0;
        paretoValueAxis.strictMinMax = true;
        paretoValueAxis.renderer.grid.template.disabled = true;
        paretoValueAxis.cursorTooltipEnabled = false;

        var paretoSeries = chart.series.push(new am4charts.LineSeries())
        paretoSeries.dataFields.valueY = "pareto";
        paretoSeries.dataFields.categoryX = "country";
        paretoSeries.yAxis = paretoValueAxis;
        paretoSeries.tooltipText = "Geração - kWh: {valueY}";
        paretoSeries.bullets.push(new am4charts.CircleBullet());
        paretoSeries.strokeWidth = 2;
        paretoSeries.stroke = new am4core.InterfaceColorSet().getFor("alternativeBackground");
        paretoSeries.strokeOpacity = 0.5;

// Cursor
        chart.cursor = new am4charts.XYCursor();
        chart.cursor.behavior = "panX";

    });

    // setTimeout(
    //     function () {
    //         window.print();
    //     }, 3000);

</script>
