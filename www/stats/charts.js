$(function () {
    Highcharts.getJSON('bycountry.json', function (data) {
        $('#chart-players-country').highcharts('StockChart', {
            chart: {
                type: 'area',
                zoomType: 'x'
            },
            title: {
                text: 'Players on DDNet by Country'
            },
            xAxis: {
                type: 'datetime',
                title: {
                    text: 'Date'
                }
            },
            yAxis: {
                title: {
                    text: 'Players'
                },
                min: 0
            },
            rangeSelector: {
                buttons: [{
                    type: 'day',
                    count: 1,
                    text: '1d'
                }, {
                    type: 'week',
                    count: 1,
                    text: '1w'
                }, {
                    type: 'month',
                    count: 1,
                    text: '1m'
                }, {
                    type: 'month',
                    count: 3,
                    text: '3m'
                }, {
                    type: 'month',
                    count: 6,
                    text: '6m'
                }, {
                    type: 'ytd',
                    text: 'YTD'
                }, {
                    type: 'year',
                    count: 1,
                    text: '1y'
                }, {
                    type: 'all',
                    text: 'All'
                }],
                selected: 1
            },
            plotOptions: {
                area: {
                    stacking: 'normal'
                },
                line: {
                    marker: {
                        radius: 2
                    },
                    lineWidth: 1,
                    states: {
                        hover: {
                            lineWidth: 1
                        }
                    },
                    threshold: null
                },
                column: {
                    animation: false
                }
            },
            tooltip: {
                shared: true
            },
            series: data
        });
    });

    Highcharts.getJSON('bymod.json', function (data) {
        $('#chart-players-mod').highcharts('StockChart', {
            chart: {
                type: 'area',
                zoomType: 'x'
            },
            title: {
                text: 'Players on DDNet by Mod'
            },
            xAxis: {
                type: 'datetime',
                title: {
                    text: 'Date'
                }
            },
            yAxis: {
                title: {
                    text: 'Players'
                },
                min: 0
            },
            rangeSelector: {
                buttons: [{
                    type: 'day',
                    count: 1,
                    text: '1d'
                }, {
                    type: 'week',
                    count: 1,
                    text: '1w'
                }, {
                    type: 'month',
                    count: 1,
                    text: '1m'
                }, {
                    type: 'month',
                    count: 3,
                    text: '3m'
                }, {
                    type: 'month',
                    count: 6,
                    text: '6m'
                }, {
                    type: 'ytd',
                    text: 'YTD'
                }, {
                    type: 'year',
                    count: 1,
                    text: '1y'
                }, {
                    type: 'all',
                    text: 'All'
                }],
                selected: 1
            },
            plotOptions: {
                area: {
                    stacking: 'normal'
                },
                line: {
                    marker: {
                        radius: 2
                    },
                    lineWidth: 1,
                    states: {
                        hover: {
                            lineWidth: 1
                        }
                    },
                    threshold: null
                },
                column: {
                    animation: false
                }
            },
            tooltip: {
                shared: true
            },
            series: data
        });
    });

    Highcharts.getJSON('bycountryday.json', function (data) {
        $('#chart-playerhours-country').highcharts('StockChart', {
            chart: {
                type: 'area',
                zoomType: 'x'
            },
            title: {
                text: 'Player-hours per day on DDNet by Country'
            },
            xAxis: {
                type: 'datetime',
                title: {
                    text: 'Date'
                }
            },
            yAxis: {
                title: {
                    text: 'Player-hours'
                },
                min: 0
            },
            rangeSelector: {
                selected: 0
            },
            plotOptions: {
                area: {
                    stacking: 'normal'
                },
                line: {
                    marker: {
                        radius: 2
                    },
                    lineWidth: 1,
                    states: {
                        hover: {
                            lineWidth: 1
                        }
                    },
                    threshold: null
                },
                column: {
                    animation: false
                }
            },
            tooltip: {
                shared: true
            },
            series: data
        });
    });

    Highcharts.getJSON('bymodday.json', function (data) {
        $('#chart-playerhours-mod').highcharts('StockChart', {
            chart: {
                type: 'area',
                zoomType: 'x'
            },
            title: {
                text: 'Player-hours per day on DDNet by Mod'
            },
            xAxis: {
                type: 'datetime',
                title: {
                    text: 'Date'
                }
            },
            yAxis: {
                title: {
                    text: 'Player-hours'
                },
                min: 0
            },
            rangeSelector: {
                selected: 0
            },
            plotOptions: {
                area: {
                    stacking: 'normal'
                },
                line: {
                    marker: {
                        radius: 2
                    },
                    lineWidth: 1,
                    states: {
                        hover: {
                            lineWidth: 1
                        }
                    },
                    threshold: null
                },
                column: {
                    animation: false
                }
            },
            tooltip: {
                shared: true
            },
            series: data
        });
    });

    Highcharts.getJSON('finishes.json', function (data) {
        $('#chart-finishes').highcharts('StockChart', {
            chart: {
                type: 'area',
                zoomType: 'x'
            },
            title: {
                text: 'Finishes on DDNet per Day'
            },
            xAxis: {
                type: 'datetime',
                title: {
                    text: 'Date'
                }
            },
            yAxis: {
                title: {
                    text: 'Finishes'
                },
                min: 0
            },
            rangeSelector: {
                selected: 0
            },
            tooltip: {
                shared: true
            },
            plotOptions: {
                line: {
                    marker: {
                        radius: 2
                    },
                    lineWidth: 1,
                    states: {
                        hover: {
                            lineWidth: 1
                        }
                    },
                    threshold: null
                },
                column: {
                    animation: false
                }
            },
            series: [{
              name: 'Map finishes',
              pointInterval: 24 * 3600 * 1000,
              pointStart: Date.UTC(2013,6,18),
              data: data
            }]
        });
    });

    Highcharts.getJSON('pointscountry.json', function (data) {
        $('#chart-points-country').highcharts('StockChart', {
            chart: {
                type: 'area',
                zoomType: 'x'
            },
            title: {
                text: 'Points earned per Day by Country'
            },
            xAxis: {
                type: 'datetime',
                title: {
                    text: 'Date'
                }
            },
            yAxis: {
                title: {
                    text: 'Points'
                },
                min: 0
            },
            rangeSelector: {
                selected: 0
            },
            plotOptions: {
                area: {
                    stacking: 'normal'
                },
                line: {
                    marker: {
                        radius: 2
                    },
                    lineWidth: 1,
                    states: {
                        hover: {
                            lineWidth: 1
                        }
                    },
                    threshold: null
                },
                column: {
                    animation: false
                }
            },
            tooltip: {
                shared: true
            },
            series: data
        });
    });

    Highcharts.getJSON('pointsserver.json', function (data) {
        $('#chart-points-server').highcharts('StockChart', {
            chart: {
                type: 'area',
                zoomType: 'x'
            },
            title: {
                text: 'Points earned per Day by Server Type'
            },
            xAxis: {
                type: 'datetime',
                title: {
                    text: 'Date'
                }
            },
            yAxis: {
                title: {
                    text: 'Points'
                },
                min: 0
            },
            rangeSelector: {
                selected: 0
            },
            plotOptions: {
                area: {
                    stacking: 'normal'
                },
                line: {
                    marker: {
                        radius: 2
                    },
                    lineWidth: 1,
                    states: {
                        hover: {
                            lineWidth: 1
                        }
                    },
                    threshold: null
                },
                column: {
                    animation: false
                }
            },
            tooltip: {
                shared: true
            },
            series: data
        });
    });

    Highcharts.getJSON('mapreleases.json', function (data) {
        $('#chart-maps').highcharts('StockChart', {
            chart: {
                type: 'area',
                zoomType: 'x'
            },
            title: {
                text: 'Map Releases on DDNet by Server Type'
            },
            xAxis: {
                type: 'datetime',
                title: {
                    text: 'Date'
                }
            },
            yAxis: {
                title: {
                    text: 'Maps'
                },
                min: 0
            },
            rangeSelector: {
                buttons: [{
                    type: 'year',
                    count: 1,
                    text: '1y'
                }, {
                    type: 'year',
                    count: 3,
                    text: '3y'
                }, {
                    type: 'all',
                    text: 'All'
                }],
                selected: 0
            },
            plotOptions: {
                area: {
                    stacking: 'normal'
                },
                line: {
                    marker: {
                        radius: 2
                    },
                    lineWidth: 1,
                    states: {
                        hover: {
                            lineWidth: 1
                        }
                    },
                    threshold: null
                },
                column: {
                    animation: false
                }
            },
            tooltip: {
                shared: true
            },
            series: data
        });
    });
});
