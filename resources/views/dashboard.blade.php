@extends('layouts.app')



@section('content')
<div class="row">
    <div class="col-12 col-xl-12 stretch-card">
        <div class="row flex-grow">
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <h6 class="card-title mb-0">New Customers</h6>
                            <div class="dropdown mb-2">
                                <button class="btn p-0" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-more-horizontal icon-lg text-muted pb-3px">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="19" cy="12" r="1"></circle>
                                        <circle cx="5" cy="12" r="1"></circle>
                                    </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-eye icon-sm mr-2">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg> <span class="">View</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-edit-2 icon-sm mr-2">
                                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                        </svg> <span class="">Edit</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-trash icon-sm mr-2">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                            </path>
                                        </svg> <span class="">Delete</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-printer icon-sm mr-2">
                                            <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                            <path
                                                d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2">
                                            </path>
                                            <rect x="6" y="14" width="12" height="8"></rect>
                                        </svg> <span class="">Print</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-download icon-sm mr-2">
                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                            <polyline points="7 10 12 15 17 10"></polyline>
                                            <line x1="12" y1="15" x2="12" y2="3"></line>
                                        </svg> <span class="">Download</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-12 col-xl-5">
                                <h3 class="mb-2">3,897</h3>
                                <div class="d-flex align-items-baseline">
                                    <p class="text-success">
                                        <span>+3.3%</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-arrow-up icon-sm mb-1">
                                            <line x1="12" y1="19" x2="12" y2="5"></line>
                                            <polyline points="5 12 12 5 19 12"></polyline>
                                        </svg>
                                    </p>
                                </div>
                            </div>
                            <div class="col-6 col-md-12 col-xl-7">
                                <div id="apexChart1" class="mt-md-3 mt-xl-0" style="min-height: 60px;">
                                    <div id="apexcharts56bcb9"
                                        class="apexcharts-canvas apexcharts56bcb9 apexcharts-theme-light"
                                        style="width: 190px; height: 60px;"><svg id="SvgjsSvg1127" width="190"
                                            height="60" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                            xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <g id="SvgjsG1129" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 0)">
                                                <defs id="SvgjsDefs1128">
                                                    <clipPath id="gridRectMask56bcb9">
                                                        <rect id="SvgjsRect1134" width="196" height="62" x="-3" y="-1"
                                                            rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0"></rect>
                                                    </clipPath>
                                                    <clipPath id="gridRectMarkerMask56bcb9">
                                                        <rect id="SvgjsRect1135" width="194" height="64" x="-2" y="-2"
                                                            rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0"></rect>
                                                    </clipPath>
                                                </defs>
                                                <line id="SvgjsLine1133" x1="94.5" y1="0" x2="94.5" y2="60"
                                                    stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs"
                                                    x="94.5" y="0" width="1" height="60" fill="#b1b9c4" filter="none"
                                                    fill-opacity="0.9" stroke-width="1"></line>
                                                <g id="SvgjsG1142" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG1143" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG1145" class="apexcharts-grid">
                                                    <g id="SvgjsG1146" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine1148" x1="0" y1="0" x2="190" y2="0"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1149" x1="0" y1="10" x2="190" y2="10"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1150" x1="0" y1="20" x2="190" y2="20"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1151" x1="0" y1="30" x2="190" y2="30"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1152" x1="0" y1="40" x2="190" y2="40"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1153" x1="0" y1="50" x2="190" y2="50"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1154" x1="0" y1="60" x2="190" y2="60"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1147" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine1156" x1="0" y1="60" x2="190" y2="60"
                                                        stroke="transparent" stroke-dasharray="0"></line>
                                                    <line id="SvgjsLine1155" x1="0" y1="1" x2="0" y2="60"
                                                        stroke="transparent" stroke-dasharray="0"></line>
                                                </g>
                                                <g id="SvgjsG1137"
                                                    class="apexcharts-line-series apexcharts-plot-series">
                                                    <g id="SvgjsG1138" class="apexcharts-series" seriesName="seriesx1"
                                                        data:longestSeries="true" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1141"
                                                            d="M 0 26C 6.6499999999999995 26 12.350000000000001 15 19 15C 25.65 15 31.35 29 38 29C 44.65 29 50.35 3 57 3C 63.65 3 69.35 48 76 48C 82.65 48 88.35 27 95 27C 101.65 27 107.35 49 114 49C 120.65 49 126.35 29 133 29C 139.65 29 145.35 14 152 14C 158.65 14 164.35 43 171 43C 177.65 43 183.35 27 190 27"
                                                            fill="none" fill-opacity="1" stroke="rgba(114,124,245,0.85)"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                            stroke-dasharray="0" class="apexcharts-line" index="0"
                                                            clip-path="url(#gridRectMask56bcb9)"
                                                            pathTo="M 0 26C 6.6499999999999995 26 12.350000000000001 15 19 15C 25.65 15 31.35 29 38 29C 44.65 29 50.35 3 57 3C 63.65 3 69.35 48 76 48C 82.65 48 88.35 27 95 27C 101.65 27 107.35 49 114 49C 120.65 49 126.35 29 133 29C 139.65 29 145.35 14 152 14C 158.65 14 164.35 43 171 43C 177.65 43 183.35 27 190 27"
                                                            pathFrom="M -1 3870L -1 3870L 19 3870L 38 3870L 57 3870L 76 3870L 95 3870L 114 3870L 133 3870L 152 3870L 171 3870L 190 3870">
                                                        </path>
                                                        <g id="SvgjsG1139" class="apexcharts-series-markers-wrap">
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle1162" r="0" cx="95" cy="27"
                                                                    class="apexcharts-marker w7l8yv6p3 no-pointer-events"
                                                                    stroke="#ffffff" fill="#727cf5" fill-opacity="1"
                                                                    stroke-width="2" stroke-opacity="0.9"
                                                                    default-marker-size="0"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1140" class="apexcharts-datalabels" data:realIndex="0">
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine1157" x1="0" y1="0" x2="190" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1158" x1="0" y1="0" x2="190" y2="0"
                                                    stroke-dasharray="0" stroke-width="0"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1159" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG1160" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG1161" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <rect id="SvgjsRect1132" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                fill="#fefefe" opacity="1" stroke-width="0" stroke="none"
                                                stroke-dasharray="0"></rect>
                                            <g id="SvgjsG1144" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG1130" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light"
                                            style="left: 31.3px; top: 30px;">
                                            <div class="apexcharts-tooltip-series-group apexcharts-active"
                                                style="display: flex;"><span class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(114, 124, 245); display: none;"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-label"></span><span
                                                            class="apexcharts-tooltip-text-value">3843</span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 215px; height: 66px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <h6 class="card-title mb-0">New Orders</h6>
                            <div class="dropdown mb-2">
                                <button class="btn p-0" type="button" id="dropdownMenuButton1" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-more-horizontal icon-lg text-muted pb-3px">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="19" cy="12" r="1"></circle>
                                        <circle cx="5" cy="12" r="1"></circle>
                                    </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1">
                                    <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-eye icon-sm mr-2">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg> <span class="">View</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-edit-2 icon-sm mr-2">
                                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                        </svg> <span class="">Edit</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-trash icon-sm mr-2">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                            </path>
                                        </svg> <span class="">Delete</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-printer icon-sm mr-2">
                                            <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                            <path
                                                d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2">
                                            </path>
                                            <rect x="6" y="14" width="12" height="8"></rect>
                                        </svg> <span class="">Print</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-download icon-sm mr-2">
                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                            <polyline points="7 10 12 15 17 10"></polyline>
                                            <line x1="12" y1="15" x2="12" y2="3"></line>
                                        </svg> <span class="">Download</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-12 col-xl-5">
                                <h3 class="mb-2">35,084</h3>
                                <div class="d-flex align-items-baseline">
                                    <p class="text-danger">
                                        <span>-2.8%</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-arrow-down icon-sm mb-1">
                                            <line x1="12" y1="5" x2="12" y2="19"></line>
                                            <polyline points="19 12 12 19 5 12"></polyline>
                                        </svg>
                                    </p>
                                </div>
                            </div>
                            <div class="col-6 col-md-12 col-xl-7">
                                <div id="apexChart2" class="mt-md-3 mt-xl-0" style="min-height: 60px;">
                                    <div id="apexcharts56bce1"
                                        class="apexcharts-canvas apexcharts56bce1 apexcharts-theme-light"
                                        style="width: 190px; height: 60px;"><svg id="SvgjsSvg1163" width="190"
                                            height="60" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                            xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <g id="SvgjsG1165" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 0)">
                                                <defs id="SvgjsDefs1164">
                                                    <linearGradient id="SvgjsLinearGradient1168" x1="0" y1="0" x2="0"
                                                        y2="1">
                                                        <stop id="SvgjsStop1169" stop-opacity="0.4"
                                                            stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                        <stop id="SvgjsStop1170" stop-opacity="0.5"
                                                            stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                        <stop id="SvgjsStop1171" stop-opacity="0.5"
                                                            stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                    </linearGradient>
                                                    <clipPath id="gridRectMask56bce1">
                                                        <rect id="SvgjsRect1174" width="194" height="60" x="-2" y="0"
                                                            rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0"></rect>
                                                    </clipPath>
                                                    <clipPath id="gridRectMarkerMask56bce1">
                                                        <rect id="SvgjsRect1175" width="194" height="64" x="-2" y="-2"
                                                            rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0"></rect>
                                                    </clipPath>
                                                </defs>
                                                <line id="SvgjsLine1173" x1="0" y1="0" x2="0" y2="60"
                                                    stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0"
                                                    width="1" height="60" fill="url(#SvgjsLinearGradient1168)"
                                                    filter="none" fill-opacity="0.9" stroke-width="0"></line>
                                                <g id="SvgjsG1191" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG1192" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG1194" class="apexcharts-grid">
                                                    <g id="SvgjsG1195" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine1197" x1="0" y1="0" x2="190" y2="0"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1198" x1="0" y1="12" x2="190" y2="12"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1199" x1="0" y1="24" x2="190" y2="24"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1200" x1="0" y1="36" x2="190" y2="36"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1201" x1="0" y1="48" x2="190" y2="48"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1202" x1="0" y1="60" x2="190" y2="60"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1196" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine1204" x1="0" y1="60" x2="190" y2="60"
                                                        stroke="transparent" stroke-dasharray="0"></line>
                                                    <line id="SvgjsLine1203" x1="0" y1="1" x2="0" y2="60"
                                                        stroke="transparent" stroke-dasharray="0"></line>
                                                </g>
                                                <g id="SvgjsG1177" class="apexcharts-bar-series apexcharts-plot-series">
                                                    <g id="SvgjsG1178" class="apexcharts-series" rel="1"
                                                        seriesName="seriesx1" data:realIndex="0">
                                                        <path id="SvgjsPath1180"
                                                            d="M 3.454545454545454 60L 3.454545454545454 38.400000000000006L 13.81818181818182 38.400000000000006L 13.81818181818182 60L 3.454545454545454 60"
                                                            fill="rgba(114,124,245,0.85)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask56bce1)"
                                                            pathTo="M 3.454545454545454 60L 3.454545454545454 38.400000000000006L 13.81818181818182 38.400000000000006L 13.81818181818182 60L 3.454545454545454 60"
                                                            pathFrom="M 3.454545454545454 60L 3.454545454545454 60L 13.81818181818182 60L 13.81818181818182 60L 3.454545454545454 60"
                                                            cy="38.400000000000006" cx="20.727272727272727" j="0"
                                                            val="36" barHeight="21.599999999999998"
                                                            barWidth="10.363636363636365"></path>
                                                        <path id="SvgjsPath1181"
                                                            d="M 20.727272727272727 60L 20.727272727272727 13.800000000000004L 31.090909090909093 13.800000000000004L 31.090909090909093 60L 20.727272727272727 60"
                                                            fill="rgba(114,124,245,0.85)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask56bce1)"
                                                            pathTo="M 20.727272727272727 60L 20.727272727272727 13.800000000000004L 31.090909090909093 13.800000000000004L 31.090909090909093 60L 20.727272727272727 60"
                                                            pathFrom="M 20.727272727272727 60L 20.727272727272727 60L 31.090909090909093 60L 31.090909090909093 60L 20.727272727272727 60"
                                                            cy="13.800000000000004" cx="38" j="1" val="77"
                                                            barHeight="46.199999999999996"
                                                            barWidth="10.363636363636365"></path>
                                                        <path id="SvgjsPath1182"
                                                            d="M 38 60L 38 28.8L 48.36363636363637 28.8L 48.36363636363637 60L 38 60"
                                                            fill="rgba(114,124,245,0.85)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask56bce1)"
                                                            pathTo="M 38 60L 38 28.8L 48.36363636363637 28.8L 48.36363636363637 60L 38 60"
                                                            pathFrom="M 38 60L 38 60L 48.36363636363637 60L 48.36363636363637 60L 38 60"
                                                            cy="28.8" cx="55.27272727272727" j="2" val="52"
                                                            barHeight="31.2" barWidth="10.363636363636365"></path>
                                                        <path id="SvgjsPath1183"
                                                            d="M 55.27272727272727 60L 55.27272727272727 6L 65.63636363636364 6L 65.63636363636364 60L 55.27272727272727 60"
                                                            fill="rgba(114,124,245,0.85)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask56bce1)"
                                                            pathTo="M 55.27272727272727 60L 55.27272727272727 6L 65.63636363636364 6L 65.63636363636364 60L 55.27272727272727 60"
                                                            pathFrom="M 55.27272727272727 60L 55.27272727272727 60L 65.63636363636364 60L 65.63636363636364 60L 55.27272727272727 60"
                                                            cy="6" cx="72.54545454545455" j="3" val="90" barHeight="54"
                                                            barWidth="10.363636363636365"></path>
                                                        <path id="SvgjsPath1184"
                                                            d="M 72.54545454545455 60L 72.54545454545455 15.600000000000001L 82.9090909090909 15.600000000000001L 82.9090909090909 60L 72.54545454545455 60"
                                                            fill="rgba(114,124,245,0.85)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask56bce1)"
                                                            pathTo="M 72.54545454545455 60L 72.54545454545455 15.600000000000001L 82.9090909090909 15.600000000000001L 82.9090909090909 60L 72.54545454545455 60"
                                                            pathFrom="M 72.54545454545455 60L 72.54545454545455 60L 82.9090909090909 60L 82.9090909090909 60L 72.54545454545455 60"
                                                            cy="15.600000000000001" cx="89.81818181818181" j="4"
                                                            val="74" barHeight="44.4" barWidth="10.363636363636365">
                                                        </path>
                                                        <path id="SvgjsPath1185"
                                                            d="M 89.81818181818181 60L 89.81818181818181 39L 100.18181818181817 39L 100.18181818181817 60L 89.81818181818181 60"
                                                            fill="rgba(114,124,245,0.85)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask56bce1)"
                                                            pathTo="M 89.81818181818181 60L 89.81818181818181 39L 100.18181818181817 39L 100.18181818181817 60L 89.81818181818181 60"
                                                            pathFrom="M 89.81818181818181 60L 89.81818181818181 60L 100.18181818181817 60L 100.18181818181817 60L 89.81818181818181 60"
                                                            cy="39" cx="107.0909090909091" j="5" val="35" barHeight="21"
                                                            barWidth="10.363636363636365"></path>
                                                        <path id="SvgjsPath1186"
                                                            d="M 107.0909090909091 60L 107.0909090909091 27L 117.45454545454545 27L 117.45454545454545 60L 107.0909090909091 60"
                                                            fill="rgba(114,124,245,0.85)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask56bce1)"
                                                            pathTo="M 107.0909090909091 60L 107.0909090909091 27L 117.45454545454545 27L 117.45454545454545 60L 107.0909090909091 60"
                                                            pathFrom="M 107.0909090909091 60L 107.0909090909091 60L 117.45454545454545 60L 117.45454545454545 60L 107.0909090909091 60"
                                                            cy="27" cx="124.36363636363637" j="6" val="55"
                                                            barHeight="33" barWidth="10.363636363636365"></path>
                                                        <path id="SvgjsPath1187"
                                                            d="M 124.36363636363637 60L 124.36363636363637 46.2L 134.72727272727275 46.2L 134.72727272727275 60L 124.36363636363637 60"
                                                            fill="rgba(114,124,245,0.85)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask56bce1)"
                                                            pathTo="M 124.36363636363637 60L 124.36363636363637 46.2L 134.72727272727275 46.2L 134.72727272727275 60L 124.36363636363637 60"
                                                            pathFrom="M 124.36363636363637 60L 124.36363636363637 60L 134.72727272727275 60L 134.72727272727275 60L 124.36363636363637 60"
                                                            cy="46.2" cx="141.63636363636365" j="7" val="23"
                                                            barHeight="13.799999999999999"
                                                            barWidth="10.363636363636365"></path>
                                                        <path id="SvgjsPath1188"
                                                            d="M 141.63636363636365 60L 141.63636363636365 31.8L 152.00000000000003 31.8L 152.00000000000003 60L 141.63636363636365 60"
                                                            fill="rgba(114,124,245,0.85)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask56bce1)"
                                                            pathTo="M 141.63636363636365 60L 141.63636363636365 31.8L 152.00000000000003 31.8L 152.00000000000003 60L 141.63636363636365 60"
                                                            pathFrom="M 141.63636363636365 60L 141.63636363636365 60L 152.00000000000003 60L 152.00000000000003 60L 141.63636363636365 60"
                                                            cy="31.8" cx="158.90909090909093" j="8" val="47"
                                                            barHeight="28.2" barWidth="10.363636363636365"></path>
                                                        <path id="SvgjsPath1189"
                                                            d="M 158.90909090909093 60L 158.90909090909093 54L 169.2727272727273 54L 169.2727272727273 60L 158.90909090909093 60"
                                                            fill="rgba(114,124,245,0.85)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask56bce1)"
                                                            pathTo="M 158.90909090909093 60L 158.90909090909093 54L 169.2727272727273 54L 169.2727272727273 60L 158.90909090909093 60"
                                                            pathFrom="M 158.90909090909093 60L 158.90909090909093 60L 169.2727272727273 60L 169.2727272727273 60L 158.90909090909093 60"
                                                            cy="54" cx="176.18181818181822" j="9" val="10" barHeight="6"
                                                            barWidth="10.363636363636365"></path>
                                                        <path id="SvgjsPath1190"
                                                            d="M 176.18181818181822 60L 176.18181818181822 22.200000000000003L 186.5454545454546 22.200000000000003L 186.5454545454546 60L 176.18181818181822 60"
                                                            fill="rgba(114,124,245,0.85)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask56bce1)"
                                                            pathTo="M 176.18181818181822 60L 176.18181818181822 22.200000000000003L 186.5454545454546 22.200000000000003L 186.5454545454546 60L 176.18181818181822 60"
                                                            pathFrom="M 176.18181818181822 60L 176.18181818181822 60L 186.5454545454546 60L 186.5454545454546 60L 176.18181818181822 60"
                                                            cy="22.200000000000003" cx="193.4545454545455" j="10"
                                                            val="63" barHeight="37.8" barWidth="10.363636363636365">
                                                        </path>
                                                    </g>
                                                    <g id="SvgjsG1179" class="apexcharts-datalabels" data:realIndex="0">
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine1205" x1="0" y1="0" x2="190" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1206" x1="0" y1="0" x2="190" y2="0"
                                                    stroke-dasharray="0" stroke-width="0"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1207" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG1208" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG1209" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <rect id="SvgjsRect1172" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                fill="#fefefe" opacity="1" stroke-width="0" stroke="none"
                                                stroke-dasharray="0"></rect>
                                            <g id="SvgjsG1193" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG1166" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-series-group"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(114, 124, 245);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-label"></span><span
                                                            class="apexcharts-tooltip-text-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 215px; height: 66px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <h6 class="card-title mb-0">Growth</h6>
                            <div class="dropdown mb-2">
                                <button class="btn p-0" type="button" id="dropdownMenuButton2" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-more-horizontal icon-lg text-muted pb-3px">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="19" cy="12" r="1"></circle>
                                        <circle cx="5" cy="12" r="1"></circle>
                                    </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2">
                                    <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-eye icon-sm mr-2">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg> <span class="">View</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-edit-2 icon-sm mr-2">
                                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                        </svg> <span class="">Edit</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-trash icon-sm mr-2">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                            </path>
                                        </svg> <span class="">Delete</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-printer icon-sm mr-2">
                                            <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                            <path
                                                d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2">
                                            </path>
                                            <rect x="6" y="14" width="12" height="8"></rect>
                                        </svg> <span class="">Print</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-download icon-sm mr-2">
                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                            <polyline points="7 10 12 15 17 10"></polyline>
                                            <line x1="12" y1="15" x2="12" y2="3"></line>
                                        </svg> <span class="">Download</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-12 col-xl-5">
                                <h3 class="mb-2">89.87%</h3>
                                <div class="d-flex align-items-baseline">
                                    <p class="text-success">
                                        <span>+2.8%</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-arrow-up icon-sm mb-1">
                                            <line x1="12" y1="19" x2="12" y2="5"></line>
                                            <polyline points="5 12 12 5 19 12"></polyline>
                                        </svg>
                                    </p>
                                </div>
                            </div>
                            <div class="col-6 col-md-12 col-xl-7">
                                <div id="apexChart3" class="mt-md-3 mt-xl-0" style="min-height: 60px;">
                                    <div id="apexcharts56bcf3"
                                        class="apexcharts-canvas apexcharts56bcf3 apexcharts-theme-light"
                                        style="width: 190px; height: 60px;"><svg id="SvgjsSvg1211" width="190"
                                            height="60" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                            xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <g id="SvgjsG1213" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 0)">
                                                <defs id="SvgjsDefs1212">
                                                    <clipPath id="gridRectMask56bcf3">
                                                        <rect id="SvgjsRect1218" width="196" height="62" x="-3" y="-1"
                                                            rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0"></rect>
                                                    </clipPath>
                                                    <clipPath id="gridRectMarkerMask56bcf3">
                                                        <rect id="SvgjsRect1219" width="194" height="64" x="-2" y="-2"
                                                            rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0"></rect>
                                                    </clipPath>
                                                </defs>
                                                <line id="SvgjsLine1217" x1="0" y1="0" x2="0" y2="60" stroke="#b6b6b6"
                                                    stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0"
                                                    width="1" height="60" fill="#b1b9c4" filter="none"
                                                    fill-opacity="0.9" stroke-width="1"></line>
                                                <g id="SvgjsG1226" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG1227" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG1229" class="apexcharts-grid">
                                                    <g id="SvgjsG1230" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine1232" x1="0" y1="0" x2="190" y2="0"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1233" x1="0" y1="8.571428571428571" x2="190"
                                                            y2="8.571428571428571" stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1234" x1="0" y1="17.142857142857142" x2="190"
                                                            y2="17.142857142857142" stroke="#e0e0e0"
                                                            stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1235" x1="0" y1="25.714285714285715" x2="190"
                                                            y2="25.714285714285715" stroke="#e0e0e0"
                                                            stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1236" x1="0" y1="34.285714285714285" x2="190"
                                                            y2="34.285714285714285" stroke="#e0e0e0"
                                                            stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1237" x1="0" y1="42.857142857142854" x2="190"
                                                            y2="42.857142857142854" stroke="#e0e0e0"
                                                            stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1238" x1="0" y1="51.42857142857142" x2="190"
                                                            y2="51.42857142857142" stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1239" x1="0" y1="59.99999999999999" x2="190"
                                                            y2="59.99999999999999" stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1231" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine1241" x1="0" y1="60" x2="190" y2="60"
                                                        stroke="transparent" stroke-dasharray="0"></line>
                                                    <line id="SvgjsLine1240" x1="0" y1="1" x2="0" y2="60"
                                                        stroke="transparent" stroke-dasharray="0"></line>
                                                </g>
                                                <g id="SvgjsG1221"
                                                    class="apexcharts-line-series apexcharts-plot-series">
                                                    <g id="SvgjsG1222" class="apexcharts-series" seriesName="seriesx1"
                                                        data:longestSeries="true" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1225"
                                                            d="M 0 50.57142857142857C 6.6499999999999995 50.57142857142857 12.350000000000001 47.14285714285714 19 47.14285714285714C 25.65 47.14285714285714 31.35 47.99999999999999 38 47.99999999999999C 44.65 47.99999999999999 50.35 46.285714285714285 57 46.285714285714285C 63.65 46.285714285714285 69.35 41.14285714285714 76 41.14285714285714C 82.65 41.14285714285714 88.35 39.42857142857142 95 39.42857142857142C 101.65 39.42857142857142 107.35 48.857142857142854 114 48.857142857142854C 120.65 48.857142857142854 126.35 22.285714285714285 133 22.285714285714285C 139.65 22.285714285714285 145.35 15.42857142857143 152 15.42857142857143C 158.65 15.42857142857143 164.35 15.42857142857143 171 15.42857142857143C 177.65 15.42857142857143 183.35 9.42857142857143 190 9.42857142857143"
                                                            fill="none" fill-opacity="1" stroke="rgba(114,124,245,0.85)"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                            stroke-dasharray="0" class="apexcharts-line" index="0"
                                                            clip-path="url(#gridRectMask56bcf3)"
                                                            pathTo="M 0 50.57142857142857C 6.6499999999999995 50.57142857142857 12.350000000000001 47.14285714285714 19 47.14285714285714C 25.65 47.14285714285714 31.35 47.99999999999999 38 47.99999999999999C 44.65 47.99999999999999 50.35 46.285714285714285 57 46.285714285714285C 63.65 46.285714285714285 69.35 41.14285714285714 76 41.14285714285714C 82.65 41.14285714285714 88.35 39.42857142857142 95 39.42857142857142C 101.65 39.42857142857142 107.35 48.857142857142854 114 48.857142857142854C 120.65 48.857142857142854 126.35 22.285714285714285 133 22.285714285714285C 139.65 22.285714285714285 145.35 15.42857142857143 152 15.42857142857143C 158.65 15.42857142857143 164.35 15.42857142857143 171 15.42857142857143C 177.65 15.42857142857143 183.35 9.42857142857143 190 9.42857142857143"
                                                            pathFrom="M -1 85.71428571428571L -1 85.71428571428571L 19 85.71428571428571L 38 85.71428571428571L 57 85.71428571428571L 76 85.71428571428571L 95 85.71428571428571L 114 85.71428571428571L 133 85.71428571428571L 152 85.71428571428571L 171 85.71428571428571L 190 85.71428571428571">
                                                        </path>
                                                        <g id="SvgjsG1223" class="apexcharts-series-markers-wrap">
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle1247" r="0" cx="0" cy="0"
                                                                    class="apexcharts-marker w8irzsw6g no-pointer-events"
                                                                    stroke="#ffffff" fill="#727cf5" fill-opacity="1"
                                                                    stroke-width="2" stroke-opacity="0.9"
                                                                    default-marker-size="0"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1224" class="apexcharts-datalabels" data:realIndex="0">
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine1242" x1="0" y1="0" x2="190" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1243" x1="0" y1="0" x2="190" y2="0"
                                                    stroke-dasharray="0" stroke-width="0"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1244" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG1245" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG1246" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <rect id="SvgjsRect1216" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                fill="#fefefe" opacity="1" stroke-width="0" stroke="none"
                                                stroke-dasharray="0"></rect>
                                            <g id="SvgjsG1228" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG1214" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-series-group"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(114, 124, 245);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-label"></span><span
                                                            class="apexcharts-tooltip-text-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 215px; height: 66px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@push('js')
<!-- custom js for this page -->
<script src="{{asset('/')}}/assets/js/dashboard.js"></script>
<script src="{{asset('/')}}/assets/js/datepicker.js"></script>
<script src="{{asset('/')}}/assets/vendors/chartjs/Chart.min.js"></script>
<script src="{{asset('/')}}/assets/vendors/jquery.flot/jquery.flot.js"></script>
<script src="{{asset('/')}}/assets/vendors/jquery.flot/jquery.flot.resize.js"></script>
<script src="{{asset('/')}}/assets/vendors/apexcharts/apexcharts.min.js"></script>
<!-- end custom js for this page -->
@endpush