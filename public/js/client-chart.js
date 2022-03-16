/*Chartjs Init*/

$(document).ready(function () {
    "use strict";

    $.get('/dashboardClient', function (resultado) {
        let array_consumption = []
        let array_months = []

        var consumption = resultado.consumption;
        consumption.forEach((data) => {
            array_consumption.push(data.consumption)
            array_months.push(data.invoice_month)
        })

        if ($('#month_consumption').length > 0) {
            var ctx1 = document.getElementById("month_consumption").getContext("2d");
            var data1 = {
                labels: array_months,
                datasets: [
                    {
                        label: "Consumo Mensal",
                        backgroundColor: "#8bb2ea",
                        borderColor: "#8bb2ea",
                        pointBorderColor: "#8bb2ea",
                        pointHighlightStroke: "#8bb2ea",
                        data: array_consumption
                    },
                ]
            };

            var areaChart = new Chart(ctx1, {
                type: "bar",
                data: data1,

                options: {
                    tooltips: {
                        mode: "label"
                    },
                    elements: {
                        point: {
                            hitRadius: 90
                        }
                    },

                    scales: {
                        yAxes: [{
                            stacked: true,
                            gridLines: {
                                color: "rgba(33,33,33,0)",
                            },
                            ticks: {
                                fontFamily: "Roboto",
                                fontColor: "#878787"
                            }
                        }],
                        xAxes: [{
                            stacked: true,
                            gridLines: {
                                color: "rgba(33,33,33,0)",
                            },
                            ticks: {
                                fontFamily: "Roboto",
                                fontColor: "#878787"
                            }
                        }]
                    },
                    animation: {
                        duration: 3000
                    },
                    responsive: true,
                    legend: {
                        display: false,
                    },
                    tooltip: {
                        backgroundColor: 'rgba(33,33,33,1)',
                        cornerRadius: 0,
                        footerFontFamily: "'Roboto'"
                    }

                }
            });
        }
    })


});
