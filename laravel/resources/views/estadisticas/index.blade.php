@extends('layouts.app')
@section('content')
    <div class="grid gap-4 px-4 py-2 xl:grid-cols-2 2xl:grid-cols-3">
        <!-- Main widget -->
        <div
            class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <div class="flex items-center justify-between mb-4">
                <div class="flex-shrink-0">
                    <span class="text-xl font-bold leading-none text-gray-900 sm:text-2xl dark:text-white">Total de este mes:
                        {{ $totalPrecioPedidos }}€</span>
                    <h3 class="text-base font-light text-gray-500 dark:text-gray-400">Ventas este mes</h3>
                </div>
                <div class="flex items-center justify-end flex-1 text-base font-medium text-green-500 dark:text-green-400">
                    12.5%
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
            </div>
            <div id="main-chart" style="min-height: 435px;">
                <div id="apexchartsv83loncz" class="apexcharts-canvas apexchartsv83loncz apexcharts-theme-light"
                    style="width: 808px; height: 420px;"><svg id="SvgjsSvg1837" width="808" height="420"
                        xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                        xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                        transform="translate(0, 0)" style="background: transparent;">
                        <foreignObject x="0" y="0" width="808" height="420">
                            <div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom"
                                xmlns="http://www.w3.org/1999/xhtml"
                                style="inset: auto 0px 1px; position: absolute; max-height: 210px;">
                                <div class="apexcharts-legend-series" rel="1" seriesname="Revenue"
                                    data:collapsed="false" style="margin: 2px 10px;"><span class="apexcharts-legend-marker"
                                        rel="1" data:collapsed="false"
                                        style="background: rgb(26, 86, 219); color: rgb(26, 86, 219); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                        class="apexcharts-legend-text" rel="1" i="0" data:default-text="Revenue"
                                        data:collapsed="false"
                                        style="color: rgb(156, 163, 175); font-size: 14px; font-weight: 500; font-family: Inter, sans-serif;">Recaudado</span>
                                </div>
                            </div>
                            <style type="text/css">
                                .apexcharts-legend {
                                    display: flex;
                                    overflow: auto;
                                    padding: 0 10px;
                                }

                                .apexcharts-legend.apx-legend-position-bottom,
                                .apexcharts-legend.apx-legend-position-top {
                                    flex-wrap: wrap
                                }

                                .apexcharts-legend.apx-legend-position-right,
                                .apexcharts-legend.apx-legend-position-left {
                                    flex-direction: column;
                                    bottom: 0;
                                }

                                .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                .apexcharts-legend.apx-legend-position-right,
                                .apexcharts-legend.apx-legend-position-left {
                                    justify-content: flex-start;
                                }

                                .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                    justify-content: center;
                                }

                                .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                    justify-content: flex-end;
                                }

                                .apexcharts-legend-series {
                                    cursor: pointer;
                                    line-height: normal;
                                }

                                .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                                .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                    display: flex;
                                    align-items: center;
                                }

                                .apexcharts-legend-text {
                                    position: relative;
                                    font-size: 14px;
                                }

                                .apexcharts-legend-text *,
                                .apexcharts-legend-marker * {
                                    pointer-events: none;
                                }

                                .apexcharts-legend-marker {
                                    position: relative;
                                    display: inline-block;
                                    cursor: pointer;
                                    margin-right: 3px;
                                    border-style: solid;
                                }

                                .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                    display: inline-block;
                                }

                                .apexcharts-legend-series.apexcharts-no-click {
                                    cursor: auto;
                                }

                                .apexcharts-legend .apexcharts-hidden-zero-series,
                                .apexcharts-legend .apexcharts-hidden-null-series {
                                    display: none !important;
                                }

                                .apexcharts-inactive-legend {
                                    opacity: 0.45;
                                }
                            </style>
                        </foreignObject gnObject>
                        <g id="SvgjsG1839" class="apexcharts-inner apexcharts-graphical"
                            transform="translate(93.796875, 30)">
                            <defs id="SvgjsDefs1838">
                                <clipPath id="gridRectMaskv83loncz">
                                    <rect id="SvgjsRect1845" width="688.75" height="315.494" x="-4" y="-2" rx="0"
                                        ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                        fill="#fff"></rect>
                                </clipPath>
                                <clipPath id="forecastMaskv83loncz"></clipPath>
                                <clipPath id="nonForecastMaskv83loncz"></clipPath>
                                <clipPath id="gridRectMarkerMaskv83loncz">
                                    <rect id="SvgjsRect1846" width="704.75" height="335.494" x="-12" y="-12" rx="0"
                                        ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                        fill="#fff"></rect>
                                </clipPath>
                                <linearGradient id="SvgjsLinearGradient1864" x1="0" y1="0" x2="0"
                                    y2="1">
                                    <stop id="SvgjsStop1865" stop-opacity="0" stop-color="rgba(26,86,219,0)" offset="0">
                                    </stop>
                                    <stop id="SvgjsStop1866" stop-opacity="0.15" stop-color="rgba(141,171,237,0.15)"
                                        offset="1"></stop>
                                    <stop id="SvgjsStop1867" stop-opacity="0.15" stop-color="rgba(141,171,237,0.15)"
                                        offset="1"></stop>
                                </linearGradient>
                                <linearGradient id="SvgjsLinearGradient1886" x1="0" y1="0"
                                    x2="0" y2="1">
                                    <stop id="SvgjsStop1887" stop-opacity="0" stop-color="rgba(253,186,140,0)"
                                        offset="0"></stop>
                                    <stop id="SvgjsStop1888" stop-opacity="0.15" stop-color="rgba(254,221,198,0.15)"
                                        offset="1"></stop>
                                    <stop id="SvgjsStop1889" stop-opacity="0.15" stop-color="rgba(254,221,198,0.15)"
                                        offset="1"></stop>
                                </linearGradient>
                            </defs>
                            <line id="SvgjsLine1844" x1="0" y1="0" x2="0" y2="311.494"
                                stroke="#374151" stroke-dasharray="10" stroke-linecap="butt"
                                class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="311.494"
                                fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                            <g id="SvgjsG1892" class="apexcharts-xaxis" transform="translate(0, 0)">
                                <g id="SvgjsG1893" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text
                                        id="SvgjsText1895" font-family="Inter, sans-serif" x="0" y="340.494"
                                        text-anchor="middle" dominant-baseline="auto" font-size="14px" font-weight="500"
                                        fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label "
                                        style="font-family: Inter, sans-serif;">
                                        <tspan id="SvgjsTspan1896">01 Feb</tspan>
                                        <title>01 Feb</title>
                                    </text><text id="SvgjsText1898" font-family="Inter, sans-serif" x="113.45833333333334"
                                        y="340.494" text-anchor="middle" dominant-baseline="auto" font-size="14px"
                                        font-weight="500" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label "
                                        style="font-family: Inter, sans-serif;">
                                        <tspan id="SvgjsTspan1899">02 Feb</tspan>
                                        <title>02 Feb</title>
                                    </text><text id="SvgjsText1901" font-family="Inter, sans-serif" x="226.91666666666666"
                                        y="340.494" text-anchor="middle" dominant-baseline="auto" font-size="14px"
                                        font-weight="500" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label "
                                        style="font-family: Inter, sans-serif;">
                                        <tspan id="SvgjsTspan1902">03 Feb</tspan>
                                        <title>03 Feb</title>
                                    </text><text id="SvgjsText1904" font-family="Inter, sans-serif" x="340.37499999999994"
                                        y="340.494" text-anchor="middle" dominant-baseline="auto" font-size="14px"
                                        font-weight="500" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label "
                                        style="font-family: Inter, sans-serif;">
                                        <tspan id="SvgjsTspan1905">04 Feb</tspan>
                                        <title>04 Feb</title>
                                    </text><text id="SvgjsText1907" font-family="Inter, sans-serif" x="453.83333333333326"
                                        y="340.494" text-anchor="middle" dominant-baseline="auto" font-size="14px"
                                        font-weight="500" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label "
                                        style="font-family: Inter, sans-serif;">
                                        <tspan id="SvgjsTspan1908">05 Feb</tspan>
                                        <title>05 Feb</title>
                                    </text><text id="SvgjsText1910" font-family="Inter, sans-serif" x="567.2916666666666"
                                        y="340.494" text-anchor="middle" dominant-baseline="auto" font-size="14px"
                                        font-weight="500" fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label "
                                        style="font-family: Inter, sans-serif;">
                                        <tspan id="SvgjsTspan1911">06 Feb</tspan>
                                        <title>06 Feb</title>
                                    </text><text id="SvgjsText1913" font-family="Inter, sans-serif" x="680.75" y="340.494"
                                        text-anchor="middle" dominant-baseline="auto" font-size="14px" font-weight="500"
                                        fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label "
                                        style="font-family: Inter, sans-serif;">
                                        <tspan id="SvgjsTspan1914">07 Feb</tspan>
                                        <title>07 Feb</title>
                                    </text></g>
                                <line id="SvgjsLine1915" x1="0" y1="312.494" x2="680.75" y2="312.494"
                                    stroke="#374151" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"></line>
                            </g>
                            <g id="SvgjsG1928" class="apexcharts-grid">
                                <g id="SvgjsG1929" class="apexcharts-gridlines-horizontal">
                                    <line id="SvgjsLine1938" x1="0" y1="0" x2="680.75"
                                        y2="0" stroke="#374151" stroke-dasharray="1" stroke-linecap="butt"
                                        class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1939" x1="0" y1="77.8735" x2="680.75"
                                        y2="77.8735" stroke="#374151" stroke-dasharray="1" stroke-linecap="butt"
                                        class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1940" x1="0" y1="155.747" x2="680.75"
                                        y2="155.747" stroke="#374151" stroke-dasharray="1" stroke-linecap="butt"
                                        class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1941" x1="0" y1="233.62050000000002" x2="680.75"
                                        y2="233.62050000000002" stroke="#374151" stroke-dasharray="1"
                                        stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1942" x1="0" y1="311.494" x2="680.75"
                                        y2="311.494" stroke="#374151" stroke-dasharray="1" stroke-linecap="butt"
                                        class="apexcharts-gridline"></line>
                                </g>
                                <g id="SvgjsG1930" class="apexcharts-gridlines-vertical"></g>
                                <line id="SvgjsLine1931" x1="0" y1="312.494" x2="0" y2="318.494"
                                    stroke="#374151" stroke-dasharray="0" stroke-linecap="butt"
                                    class="apexcharts-xaxis-tick"></line>
                                <line id="SvgjsLine1932" x1="113.45833333333333" y1="312.494" x2="113.45833333333333"
                                    y2="318.494" stroke="#374151" stroke-dasharray="0" stroke-linecap="butt"
                                    class="apexcharts-xaxis-tick"></line>
                                <line id="SvgjsLine1933" x1="226.91666666666666" y1="312.494" x2="226.91666666666666"
                                    y2="318.494" stroke="#374151" stroke-dasharray="0" stroke-linecap="butt"
                                    class="apexcharts-xaxis-tick"></line>
                                <line id="SvgjsLine1934" x1="340.375" y1="312.494" x2="340.375" y2="318.494"
                                    stroke="#374151" stroke-dasharray="0" stroke-linecap="butt"
                                    class="apexcharts-xaxis-tick"></line>
                                <line id="SvgjsLine1935" x1="453.8333333333333" y1="312.494" x2="453.8333333333333"
                                    y2="318.494" stroke="#374151" stroke-dasharray="0" stroke-linecap="butt"
                                    class="apexcharts-xaxis-tick"></line>
                                <line id="SvgjsLine1936" x1="567.2916666666666" y1="312.494" x2="567.2916666666666"
                                    y2="318.494" stroke="#374151" stroke-dasharray="0" stroke-linecap="butt"
                                    class="apexcharts-xaxis-tick"></line>
                                <line id="SvgjsLine1937" x1="680.75" y1="312.494" x2="680.75" y2="318.494"
                                    stroke="#374151" stroke-dasharray="0" stroke-linecap="butt"
                                    class="apexcharts-xaxis-tick"></line>
                                <line id="SvgjsLine1944" x1="0" y1="311.494" x2="680.75" y2="311.494"
                                    stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                <line id="SvgjsLine1943" x1="0" y1="1" x2="0" y2="311.494"
                                    stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                            </g>
                            <g id="SvgjsG1847" class="apexcharts-area-series apexcharts-plot-series">
                                <g id="SvgjsG1848" class="apexcharts-series" seriesName="Revenue"
                                    data:longestSeries="true" rel="1" data:realIndex="0">
                                    <path id="SvgjsPath1868"
                                        d="M 0 311.494L 0 172.87917000000016C 39.71041666666666 172.87917000000016 73.74791666666667 226.61188500000026 113.45833333333333 226.61188500000026C 153.16875 226.61188500000026 187.20625 250.75266999999985 226.91666666666666 250.75266999999985C 266.6270833333333 250.75266999999985 300.6645833333333 106.68669499999987 340.37499999999994 106.68669499999987C 380.0854166666666 106.68669499999987 414.12291666666664 172.87917000000016 453.8333333333333 172.87917000000016C 493.54375 172.87917000000016 527.58125 211.81592 567.2916666666666 211.81592C 607.0020833333333 211.81592 641.0395833333332 289.68942000000015 680.7499999999999 289.68942000000015C 680.7499999999999 289.68942000000015 680.7499999999999 289.68942000000015 680.7499999999999 311.494M 680.7499999999999 289.68942000000015z"
                                        fill="url(#SvgjsLinearGradient1864)" fill-opacity="1" stroke-opacity="1"
                                        stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                        class="apexcharts-area" index="0" clip-path="url(#gridRectMaskv83loncz)"
                                        pathTo="M 0 311.494L 0 172.87917000000016C 39.71041666666666 172.87917000000016 73.74791666666667 226.61188500000026 113.45833333333333 226.61188500000026C 153.16875 226.61188500000026 187.20625 250.75266999999985 226.91666666666666 250.75266999999985C 266.6270833333333 250.75266999999985 300.6645833333333 106.68669499999987 340.37499999999994 106.68669499999987C 380.0854166666666 106.68669499999987 414.12291666666664 172.87917000000016 453.8333333333333 172.87917000000016C 493.54375 172.87917000000016 527.58125 211.81592 567.2916666666666 211.81592C 607.0020833333333 211.81592 641.0395833333332 289.68942000000015 680.7499999999999 289.68942000000015C 680.7499999999999 289.68942000000015 680.7499999999999 289.68942000000015 680.7499999999999 311.494M 680.7499999999999 289.68942000000015z"
                                        pathFrom="M -1 2647.699L -1 2647.699L 113.45833333333333 2647.699L 226.91666666666666 2647.699L 340.37499999999994 2647.699L 453.8333333333333 2647.699L 567.2916666666666 2647.699L 680.7499999999999 2647.699">
                                    </path>
                                    <path id="SvgjsPath1869"
                                        d="M 0 172.87917000000016C 39.71041666666666 172.87917000000016 73.74791666666667 226.61188500000026 113.45833333333333 226.61188500000026C 153.16875 226.61188500000026 187.20625 250.75266999999985 226.91666666666666 250.75266999999985C 266.6270833333333 250.75266999999985 300.6645833333333 106.68669499999987 340.37499999999994 106.68669499999987C 380.0854166666666 106.68669499999987 414.12291666666664 172.87917000000016 453.8333333333333 172.87917000000016C 493.54375 172.87917000000016 527.58125 211.81592 567.2916666666666 211.81592C 607.0020833333333 211.81592 641.0395833333332 289.68942000000015 680.7499999999999 289.68942000000015"
                                        fill="none" fill-opacity="1" stroke="#1a56db" stroke-opacity="1"
                                        stroke-linecap="butt" stroke-width="4" stroke-dasharray="0"
                                        class="apexcharts-area" index="0" clip-path="url(#gridRectMaskv83loncz)"
                                        pathTo="M 0 172.87917000000016C 39.71041666666666 172.87917000000016 73.74791666666667 226.61188500000026 113.45833333333333 226.61188500000026C 153.16875 226.61188500000026 187.20625 250.75266999999985 226.91666666666666 250.75266999999985C 266.6270833333333 250.75266999999985 300.6645833333333 106.68669499999987 340.37499999999994 106.68669499999987C 380.0854166666666 106.68669499999987 414.12291666666664 172.87917000000016 453.8333333333333 172.87917000000016C 493.54375 172.87917000000016 527.58125 211.81592 567.2916666666666 211.81592C 607.0020833333333 211.81592 641.0395833333332 289.68942000000015 680.7499999999999 289.68942000000015"
                                        pathFrom="M -1 2647.699L -1 2647.699L 113.45833333333333 2647.699L 226.91666666666666 2647.699L 340.37499999999994 2647.699L 453.8333333333333 2647.699L 567.2916666666666 2647.699L 680.7499999999999 2647.699">
                                    </path>
                                    <g id="SvgjsG1849" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                        <g id="SvgjsG1851" class="apexcharts-series-markers"
                                            clip-path="url(#gridRectMarkerMaskv83loncz)">
                                            <circle id="SvgjsCircle1852" r="5" cx="0" cy="172.87917000000016"
                                                class="apexcharts-marker no-pointer-events whtck1xq2j" stroke="#ffffff"
                                                fill="#1a56db" fill-opacity="1" stroke-width="2" stroke-opacity="0.9"
                                                rel="0" j="0" index="0" default-marker-size="5"></circle>
                                            <circle id="SvgjsCircle1853" r="5" cx="113.45833333333333"
                                                cy="226.61188500000026"
                                                class="apexcharts-marker no-pointer-events wpao67wzth" stroke="#ffffff"
                                                fill="#1a56db" fill-opacity="1" stroke-width="2" stroke-opacity="0.9"
                                                rel="1" j="1" index="0" default-marker-size="5"></circle>
                                        </g>
                                        <g id="SvgjsG1854" class="apexcharts-series-markers"
                                            clip-path="url(#gridRectMarkerMaskv83loncz)">
                                            <circle id="SvgjsCircle1855" r="5" cx="226.91666666666666"
                                                cy="250.75266999999985"
                                                class="apexcharts-marker no-pointer-events wk5oenndl" stroke="#ffffff"
                                                fill="#1a56db" fill-opacity="1" stroke-width="2" stroke-opacity="0.9"
                                                rel="2" j="2" index="0" default-marker-size="5"></circle>
                                        </g>
                                        <g id="SvgjsG1856" class="apexcharts-series-markers"
                                            clip-path="url(#gridRectMarkerMaskv83loncz)">
                                            <circle id="SvgjsCircle1857" r="5" cx="340.37499999999994"
                                                cy="106.68669499999987"
                                                class="apexcharts-marker no-pointer-events w88df2swq" stroke="#ffffff"
                                                fill="#1a56db" fill-opacity="1" stroke-width="2" stroke-opacity="0.9"
                                                rel="3" j="3" index="0" default-marker-size="5"></circle>
                                        </g>
                                        <g id="SvgjsG1858" class="apexcharts-series-markers"
                                            clip-path="url(#gridRectMarkerMaskv83loncz)">
                                            <circle id="SvgjsCircle1859" r="5" cx="453.8333333333333"
                                                cy="172.87917000000016"
                                                class="apexcharts-marker no-pointer-events wj0ddyq9u" stroke="#ffffff"
                                                fill="#1a56db" fill-opacity="1" stroke-width="2" stroke-opacity="0.9"
                                                rel="4" j="4" index="0" default-marker-size="5"></circle>
                                        </g>
                                        <g id="SvgjsG1860" class="apexcharts-series-markers"
                                            clip-path="url(#gridRectMarkerMaskv83loncz)">
                                            <circle id="SvgjsCircle1861" r="5" cx="567.2916666666666" cy="211.81592"
                                                class="apexcharts-marker no-pointer-events whswpzf3xg" stroke="#ffffff"
                                                fill="#1a56db" fill-opacity="1" stroke-width="2" stroke-opacity="0.9"
                                                rel="5" j="5" index="0" default-marker-size="5"></circle>
                                        </g>
                                        <g id="SvgjsG1862" class="apexcharts-series-markers"
                                            clip-path="url(#gridRectMarkerMaskv83loncz)">
                                            <circle id="SvgjsCircle1863" r="5" cx="680.7499999999999"
                                                cy="289.68942000000015"
                                                class="apexcharts-marker no-pointer-events wztjo9ps" stroke="#ffffff"
                                                fill="#1a56db" fill-opacity="1" stroke-width="2" stroke-opacity="0.9"
                                                rel="6" j="6" index="0" default-marker-size="5"></circle>
                                        </g>
                                    </g>
                                </g>
                                <g id="SvgjsG1870" class="apexcharts-series" seriesName="Revenuexxpreviousxperiodx"
                                    data:longestSeries="true" rel="2" data:realIndex="1">
                                    <path id="SvgjsPath1890"
                                        d="M 0 311.494L 0 95.00567000000001C 39.71041666666666 95.00567000000001 73.74791666666667 29.202562500000113 113.45833333333333 29.202562500000113C 153.16875 29.202562500000113 187.20625 146.40218000000004 226.91666666666666 146.40218000000004C 266.6270833333333 146.40218000000004 300.6645833333333 172.87917000000016 340.37499999999994 172.87917000000016C 380.0854166666666 172.87917000000016 414.12291666666664 83.32464500000015 453.8333333333333 83.32464500000015C 493.54375 83.32464500000015 527.58125 17.13216999999986 567.2916666666666 17.13216999999986C 607.0020833333333 17.13216999999986 641.0395833333332 71.64361999999983 680.7499999999999 71.64361999999983C 680.7499999999999 71.64361999999983 680.7499999999999 71.64361999999983 680.7499999999999 311.494M 680.7499999999999 71.64361999999983z"
                                        fill="url(#SvgjsLinearGradient1886)" fill-opacity="1" stroke-opacity="1"
                                        stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                        class="apexcharts-area" index="1" clip-path="url(#gridRectMaskv83loncz)"
                                        pathTo="M 0 311.494L 0 95.00567000000001C 39.71041666666666 95.00567000000001 73.74791666666667 29.202562500000113 113.45833333333333 29.202562500000113C 153.16875 29.202562500000113 187.20625 146.40218000000004 226.91666666666666 146.40218000000004C 266.6270833333333 146.40218000000004 300.6645833333333 172.87917000000016 340.37499999999994 172.87917000000016C 380.0854166666666 172.87917000000016 414.12291666666664 83.32464500000015 453.8333333333333 83.32464500000015C 493.54375 83.32464500000015 527.58125 17.13216999999986 567.2916666666666 17.13216999999986C 607.0020833333333 17.13216999999986 641.0395833333332 71.64361999999983 680.7499999999999 71.64361999999983C 680.7499999999999 71.64361999999983 680.7499999999999 71.64361999999983 680.7499999999999 311.494M 680.7499999999999 71.64361999999983z"
                                        pathFrom="M -1 2647.699L -1 2647.699L 113.45833333333333 2647.699L 226.91666666666666 2647.699L 340.37499999999994 2647.699L 453.8333333333333 2647.699L 567.2916666666666 2647.699L 680.7499999999999 2647.699">
                                    </path>
                                </g>
                                <g id="SvgjsG1850" class="apexcharts-datalabels" data:realIndex="0"></g>
                                <g id="SvgjsG1872" class="apexcharts-datalabels" data:realIndex="1"></g>
                            </g>
                            <line id="SvgjsLine1945" x1="0" y1="0" x2="680.75" y2="0"
                                stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                class="apexcharts-ycrosshairs"></line>
                            <line id="SvgjsLine1946" x1="0" y1="0" x2="680.75" y2="0"
                                stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                class="apexcharts-ycrosshairs-hidden"></line>
                            <g id="SvgjsG1947" class="apexcharts-yaxis-annotations"></g>
                            <g id="SvgjsG1948" class="apexcharts-xaxis-annotations"></g>
                            <g id="SvgjsG1949" class="apexcharts-point-annotations"></g>
                            <rect id="SvgjsRect1950" width="0" height="0" x="0" y="0" rx="0"
                                ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                            <rect id="SvgjsRect1951" width="0" height="0" x="0" y="0" rx="0"
                                ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                fill="#fefefe" class="apexcharts-selection-rect"></rect>
                        </g>
                        <rect id="SvgjsRect1843" width="0" height="0" x="0" y="0" rx="0"
                            ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                            fill="#fefefe"></rect>
                        <g id="SvgjsG1916" class="apexcharts-yaxis" rel="0" transform="translate(40.796875, 0)">
                            <g id="SvgjsG1917" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1918"
                                    font-family="Inter, sans-serif" x="45" y="31.4" text-anchor="end"
                                    dominant-baseline="auto" font-size="14px" font-weight="500" fill="#9ca3af"
                                    class="apexcharts-text apexcharts-yaxis-label "
                                    style="font-family: Inter, sans-serif;">
                                    <tspan id="SvgjsTspan1919">100.000.000€</tspan>
                                    <title>100.000.000€</title>
                                </text><text id="SvgjsText1920" font-family="Inter, sans-serif" x="20"
                                    y="109.27350000000001" text-anchor="end" dominant-baseline="auto" font-size="14px"
                                    font-weight="500" fill="#9ca3af" class="apexcharts-text apexcharts-yaxis-label "
                                    style="font-family: Inter, sans-serif;">
                                    <tspan id="SvgjsTspan1921"></tspan>
                                    <title></title>
                                </text><text id="SvgjsText1922" font-family="Inter, sans-serif" x="20"
                                    y="187.14700000000002" text-anchor="end" dominant-baseline="auto" font-size="14px"
                                    font-weight="500" fill="#9ca3af" class="apexcharts-text apexcharts-yaxis-label "
                                    style="font-family: Inter, sans-serif;">
                                    <tspan id="SvgjsTspan1923"></tspan>
                                    <title></title>
                                </text><text id="SvgjsText1924" font-family="Inter, sans-serif" x="20"
                                    y="265.02049999999997" text-anchor="end" dominant-baseline="auto" font-size="14px"
                                    font-weight="500" fill="#9ca3af" class="apexcharts-text apexcharts-yaxis-label "
                                    style="font-family: Inter, sans-serif;">
                                    <tspan id="SvgjsTspan1925"></tspan>
                                    <title></title>
                                </text><text id="SvgjsText1926" font-family="Inter, sans-serif" x="20" y="342.894"
                                    text-anchor="end" dominant-baseline="auto" font-size="14px" font-weight="500"
                                    fill="#9ca3af" class="apexcharts-text apexcharts-yaxis-label "
                                    style="font-family: Inter, sans-serif;">
                                    <tspan id="SvgjsTspan1927"></tspan>
                                    <title></title>
                                </text></g>
                        </g>
                        <g id="SvgjsG1840" class="apexcharts-annotations"></g>
                    </svg>
                    <div class="apexcharts-tooltip apexcharts-theme-light">
                        <div class="apexcharts-tooltip-title" style="font-family: Inter, sans-serif; font-size: 14px;">
                        </div>
                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                class="apexcharts-tooltip-marker" style="background-color: rgb(26, 86, 219);"></span>
                            <div class="apexcharts-tooltip-text" style="font-family: Inter, sans-serif; font-size: 14px;">
                                <div class="apexcharts-tooltip-y-group"><span
                                        class="apexcharts-tooltip-text-y-label"></span><span
                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                <div class="apexcharts-tooltip-goals-group"><span
                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                <div class="apexcharts-tooltip-z-group"><span
                                        class="apexcharts-tooltip-text-z-label"></span><span
                                        class="apexcharts-tooltip-text-z-value"></span></div>
                            </div>
                        </div>
                        <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                class="apexcharts-tooltip-marker" style="background-color: rgb(253, 186, 140);"></span>
                            <div class="apexcharts-tooltip-text" style="font-family: Inter, sans-serif; font-size: 14px;">
                                <div class="apexcharts-tooltip-y-group"><span
                                        class="apexcharts-tooltip-text-y-label"></span><span
                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                <div class="apexcharts-tooltip-goals-group"><span
                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                <div class="apexcharts-tooltip-z-group"><span
                                        class="apexcharts-tooltip-text-z-label"></span><span
                                        class="apexcharts-tooltip-text-z-value"></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                        <div class="apexcharts-xaxistooltip-text"
                            style="font-family: Inter, sans-serif; font-size: 12px;"></div>
                    </div>
                    <div
                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                        <div class="apexcharts-yaxistooltip-text"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--Tabs widget -->
        <div
            class="p-4 bg-white border  border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <h3 class="flex items-center mb-4 text-lg font-semibold text-gray-900 dark:text-white">Estadisticas de este mes
                <button data-popover-target="popover-description" data-popover-placement="bottom-end" type="button"><svg
                        class="w-4 h-4 ml-2 text-gray-400 hover:text-gray-500" aria-hidden="true" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                            clip-rule="evenodd"></path>
                    </svg><span class="sr-only">Show information</span></button>
            </h3>
            <div data-popover="" id="popover-description" role="tooltip"
                class="absolute z-10 invisible inline-block text-sm font-light text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400"
                style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(-208px, 81px, 0px);"
                data-popper-placement="bottom-end">
                <div class="p-3 space-y-2">
                    <h3 class="font-semibold text-gray-900 dark:text-white">Estadisticas</h3>
                    <p>La estadística es una rama de las matemáticas aplicadas que implica la recopilación, descripción,
                        análisis
                        e inferencia de conclusiones a partir de datos cuantitativos.</p>
                </div>
                <div data-popper-arrow="" style="position: absolute; left: 0px; transform: translate3d(271px, 0px, 0px);">
                </div>
            </div>
            <div class="sm:hidden">
                <label for="tabs" class="sr-only">Select tab</label>
                <select id="tabs"
                    class="bg-gray-50 border-0 border-b border-gray-200 text-gray-900 text-sm rounded-t-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option>Statistics</option>
                    <option>Services</option>
                    <option>FAQ</option>
                </select>
            </div>
            <ul class="hidden text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg sm:flex dark:divide-gray-600 dark:text-gray-400"
                id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
                <li class="w-full">
                    <button id="faq-tab" data-tabs-target="#faq" type="button" role="tab" aria-controls="faq"
                        aria-selected="true"
                        class="inline-block w-full p-4 rounded-tl-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 dark:border-blue-500">Más
                        vendidos</button>
                </li>
                <li class="w-full">
                    <button id="about-tab" data-tabs-target="#about" type="button" role="tab"
                        aria-controls="about" aria-selected="false"
                        class="inline-block w-full p-4 rounded-tr-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300">Mejores
                        clientes</button>
                </li>
            </ul>
            <div id="fullWidthTabContent" class="border-t  border-gray-200 dark:border-gray-600">
                <div class="pt-4" id="faq" role="tabpanel" aria-labelledby="faq-tab">
                    <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                        @foreach ($pedidos as $pedido)
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center min-w-0">
                                        <img class="flex-shrink-0 w-20 h-20" src="{{ $pedido->producto->foto }}"
                                            alt="imac image">
                                        <div class="ml-3">
                                            <p class="font-medium text-gray-900 truncate dark:text-white">
                                                {{ $pedido->producto->nombre }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="pt-4 hidden" id="about" role="tabpanel" aria-labelledby="about-tab">
                    <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                        @foreach ($clientes as $cliente)
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-1 min-w-0">
                                        <p class="font-medium text-gray-900 truncate dark:text-white">
                                            {{ $cliente->nombre }}
                                        </p>
                                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                            Telefono: {{ $cliente->telefono }}
                                        </p>
                                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                            Correo: {{ $cliente->correo }}
                                        </p>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="grid gap-4 px-4">
        <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <div class="flex items-center justify-between pb-4 mb-4 border-b border-gray-200 dark:border-gray-700">
                <div>
                    <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Trafico por dispositivo</h3>
                </div>
            </div>
            <!-- Card Footer -->
            <div class="flex items-center justify-between pt-4 lg:justify-evenly sm:pt-6">
                <div>
                    <svg class="w-8 h-8 mb-1 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M2 4.25A2.25 2.25 0 014.25 2h11.5A2.25 2.25 0 0118 4.25v8.5A2.25 2.25 0 0115.75 15h-3.105a3.501 3.501 0 001.1 1.677A.75.75 0 0113.26 18H6.74a.75.75 0 01-.484-1.323A3.501 3.501 0 007.355 15H4.25A2.25 2.25 0 012 12.75v-8.5zm1.5 0a.75.75 0 01.75-.75h11.5a.75.75 0 01.75.75v7.5a.75.75 0 01-.75.75H4.25a.75.75 0 01-.75-.75v-7.5z">
                        </path>
                    </svg>
                    <h3 class="text-gray-500 dark:text-gray-400">Escritorio</h3>
                    <h4 class="text-xl font-bold dark:text-white">
                        1000
                    </h4>
                    <p class="flex items-center justify-center text-sm text-gray-500 dark:text-gray-400">
                        <span class="flex items-center mr-1.5 text-sm text-green-500 dark:text-green-400">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z">
                                </path>
                            </svg>
                            4%
                        </span>
                        vs ultimo mes
                    </p>
                </div>
                <div>
                    <svg class="w-8 h-8 mb-1 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M8 16.25a.75.75 0 01.75-.75h2.5a.75.75 0 010 1.5h-2.5a.75.75 0 01-.75-.75z"></path>
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M4 4a3 3 0 013-3h6a3 3 0 013 3v12a3 3 0 01-3 3H7a3 3 0 01-3-3V4zm4-1.5v.75c0 .414.336.75.75.75h2.5a.75.75 0 00.75-.75V2.5h1A1.5 1.5 0 0114.5 4v12a1.5 1.5 0 01-1.5 1.5H7A1.5 1.5 0 015.5 16V4A1.5 1.5 0 017 2.5h1z">
                        </path>
                    </svg>
                    <h3 class="text-gray-500 dark:text-gray-400">Phone</h3>
                    <h4 class="text-xl font-bold dark:text-white">
                        100
                    </h4>
                    <p class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                        <span class="flex items-center mr-1.5 text-sm text-red-600 dark:text-red-500">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M10 3a.75.75 0 01.75.75v10.638l3.96-4.158a.75.75 0 111.08 1.04l-5.25 5.5a.75.75 0 01-1.08 0l-5.25-5.5a.75.75 0 111.08-1.04l3.96 4.158V3.75A.75.75 0 0110 3z">
                                </path>
                            </svg>
                            1%
                        </span>
                        vs ultimo mes
                    </p>
                </div>
                <div>
                    <svg class="w-8 h-8 mb-1 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M5 1a3 3 0 00-3 3v12a3 3 0 003 3h10a3 3 0 003-3V4a3 3 0 00-3-3H5zM3.5 4A1.5 1.5 0 015 2.5h10A1.5 1.5 0 0116.5 4v12a1.5 1.5 0 01-1.5 1.5H5A1.5 1.5 0 013.5 16V4zm5.25 11.5a.75.75 0 000 1.5h2.5a.75.75 0 000-1.5h-2.5z">
                        </path>
                    </svg>
                    <h3 class="text-gray-500 dark:text-gray-400">Tablet</h3>
                    <h4 class="text-xl font-bold dark:text-white">
                        20
                    </h4>
                    <p class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                        <span class="flex items-center mr-1.5 text-sm text-red-600 dark:text-red-500">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M10 3a.75.75 0 01.75.75v10.638l3.96-4.158a.75.75 0 111.08 1.04l-5.25 5.5a.75.75 0 01-1.08 0l-5.25-5.5a.75.75 0 111.08-1.04l3.96 4.158V3.75A.75.75 0 0110 3z">
                                </path>
                            </svg>
                            0,6%
                        </span>
                        vs ultimo mes
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
