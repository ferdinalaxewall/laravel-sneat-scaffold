@extends('admin.layouts.master')
@section('title', 'Dashboard')

@section('content')

<div class="row" style="row-gap: 15px;">
    <div class="col-sm-6 col-md-3">
        <a href="#" class="card card-hover h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="card-info">
                        <p class="card-text mb-2">Administrator</p>
                        <div class="d-flex align-items-end mb-2">
                            <h4 class="card-title mb-0 me-2">99</h4>
                        </div>
                    </div>
                    <div class="card-icon align-self-center">
                        <span class="badge bg-label-primary rounded p-2">
                        <i class="bx bx-user-pin bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-sm-6 col-md-3">
        <a href="#" class="card card-hover h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="card-info">
                        <p class="card-text mb-2">Staff</p>
                        <div class="d-flex align-items-end mb-2">
                            <h4 class="card-title mb-0 me-2">150</h4>
                        </div>
                    </div>
                    <div class="card-icon align-self-center">
                        <span class="badge bg-label-primary rounded p-2">
                        <i class="bx bx-group bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-sm-6 col-md-3">
        <a href="#" class="card card-hover h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="card-info">
                        <p class="card-text mb-2">Destinasi</p>
                        <div class="d-flex align-items-end mb-2">
                            <h4 class="card-title mb-0 me-2">500</h4>
                        </div>
                    </div>
                    <div class="card-icon align-self-center">
                        <span class="badge bg-label-primary rounded p-2">
                        <i class="bx bx-map-pin bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-sm-6 col-md-3">
        <a href="#" class="card card-hover h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="card-info">
                        <p class="card-text mb-2">Tour</p>
                        <div class="d-flex align-items-end mb-2">
                            <h4 class="card-title mb-0 me-2">50</h4>
                        </div>
                    </div>
                    <div class="card-icon align-self-center">
                        <span class="badge bg-label-primary rounded p-2">
                        <i class="bx bx-trip bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-sm-6 col-md-4">
        <a href="#" class="card card-hover h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="card-info">
                        <p class="card-text mb-2">Total Booking Tour</p>
                        <div class="d-flex align-items-end mb-2">
                            <h4 class="card-title mb-0 me-2">200</h4>
                        </div>
                    </div>
                    <div class="card-icon align-self-center">
                        <span class="badge bg-label-primary rounded p-2">
                        <i class="bx bx-book-bookmark bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-sm-6 col-md-4">
        <a href="#" class="card card-hover h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="card-info">
                        <p class="card-text mb-2">Total Customer Feedback</p>
                        <div class="d-flex align-items-end mb-2">
                            <h4 class="card-title mb-0 me-2">123</h4>
                        </div>
                    </div>
                    <div class="card-icon align-self-center">
                        <span class="badge bg-label-primary rounded p-2">
                        <i class="bx bx-question-mark bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-sm-6 col-md-4">
        <div class="card h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="card-info">
                        <p class="card-text mb-2">Total Klik Whatsapp</p>
                        <div class="d-flex align-items-end mb-2">
                            <h4 class="card-title mb-0 me-2">1000</h4>
                        </div>
                    </div>
                    <div class="card-icon align-self-center">
                        <span class="badge bg-label-primary rounded p-2">
                        <i class="bx bxl-whatsapp bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    Grafik Pengunjung Destinasi
                </h5>
            </div>
            <div class="card-body">
                <div id="donutChart"></div>
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    Grafik Pengunjung Berdasarkan Tour
                </h5>
            </div>
            <div class="card-body">
                <div id="lineChart"></div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('script')
<script>
    const lineChartEl = document.querySelector('#lineChart'),
    lineChartConfig = {
        chart: {
        height: 400,
        type: 'line',
        parentHeightOffset: 0,
        zoom: {
            enabled: false
        },
        toolbar: {
            show: false
        }
        },
        series: [
        {
            data: [280, 200, 220, 180, 270, 250, 70, 90, 200, 150, 160, 100, 150, 100, 50]
        }
        ],
        markers: {
        strokeWidth: 7,
        strokeOpacity: 1,
        strokeColors: [config.colors.white],
        colors: [config.colors.warning]
        },
        dataLabels: {
        enabled: false
        },
        stroke: {
        curve: 'straight'
        },
        colors: [config.colors.warning],
        grid: {
        borderColor: config.colors.textMuted,
        xaxis: {
            lines: {
            show: true
            }
        },
        padding: {
            top: -20
        }
        },
        tooltip: {
        custom: function ({ series, seriesIndex, dataPointIndex, w }) {
            return '<div class="px-3 py-2">' + '<span>' + series[seriesIndex][dataPointIndex] + '%</span>' + '</div>';
        }
        },
        xaxis: {
        categories: [
            '7/12',
            '8/12',
            '9/12',
            '10/12',
            '11/12',
            '12/12',
            '13/12',
            '14/12',
            '15/12',
            '16/12',
            '17/12',
            '18/12',
            '19/12',
            '20/12',
            '21/12'
        ],
        axisBorder: {
            show: false
        },
        axisTicks: {
            show: false
        },
        labels: {
            style: {
            colors: config.colors.textMuted,
            fontSize: '13px'
            }
        }
        },
        yaxis: {
        labels: {
            style: {
            colors: config.colors.textMuted,
            fontSize: '13px'
            }
        }
        }
    };
    if (typeof lineChartEl !== undefined && lineChartEl !== null) {
    const lineChart = new ApexCharts(lineChartEl, lineChartConfig);
    lineChart.render();
    }
</script>

<script>
    const donutChartEl = document.querySelector('#donutChart'),
    donutChartConfig = {
        chart: {
        height: 390,
        type: 'donut'
        },
        labels: ['Operational', 'Networking', 'Hiring', 'R&D'],
        series: [85, 15, 50, 50],
        colors: [
        chartColors.donut.series1,
        chartColors.donut.series4,
        chartColors.donut.series3,
        chartColors.donut.series2
        ],
        stroke: {
        show: false,
        curve: 'straight'
        },
        dataLabels: {
        enabled: true,
        formatter: function (val, opt) {
            return parseInt(val, 10) + '%';
        }
        },
        legend: {
        show: true,
        position: 'bottom',
        markers: { offsetX: -3 },
        itemMargin: {
            vertical: 3,
            horizontal: 10
        },
        labels: {
            colors: legendColor,
            useSeriesColors: false
        }
        },
        plotOptions: {
        pie: {
            donut: {
            labels: {
                show: true,
                name: {
                fontSize: '2rem',
                fontFamily: 'Open Sans'
                },
                value: {
                fontSize: '1.2rem',
                color: legendColor,
                fontFamily: 'Open Sans',
                formatter: function (val) {
                    return parseInt(val, 10) + '%';
                }
                },
                total: {
                show: true,
                fontSize: '1.5rem',
                color: headingColor,
                label: 'Operational',
                formatter: function (w) {
                    return '31%';
                }
                }
            }
            }
        }
        },
        responsive: [
        {
            breakpoint: 992,
            options: {
            chart: {
                height: 380
            },
            legend: {
                position: 'bottom',
                labels: {
                colors: legendColor,
                useSeriesColors: false
                }
            }
            }
        },
        {
            breakpoint: 576,
            options: {
            chart: {
                height: 320
            },
            plotOptions: {
                pie: {
                donut: {
                    labels: {
                    show: true,
                    name: {
                        fontSize: '1.5rem'
                    },
                    value: {
                        fontSize: '1rem'
                    },
                    total: {
                        fontSize: '1.5rem'
                    }
                    }
                }
                }
            },
            legend: {
                position: 'bottom',
                labels: {
                colors: legendColor,
                useSeriesColors: false
                }
            }
            }
        },
        {
            breakpoint: 420,
            options: {
            chart: {
                height: 280
            },
            legend: {
                show: false
            }
            }
        },
        {
            breakpoint: 360,
            options: {
            chart: {
                height: 250
            },
            legend: {
                show: false
            }
            }
        }
        ]
    };
    if (typeof donutChartEl !== undefined && donutChartEl !== null) {
    const donutChart = new ApexCharts(donutChartEl, donutChartConfig);
    donutChart.render();
    }
</script>
@endpush