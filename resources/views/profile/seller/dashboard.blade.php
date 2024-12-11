<x-overlay>
    <x-slot:headerSlot>
        <x-dash-board-welcome/>
    </x-slot:headerSlot>

    <div class="p-4 min-h-full">
        <div class="grid grid-cols-2 gap-4">
            <div class="grid grid-cols-2 gap-4">
                <div class="flex flex-col justify-between bg-white p-4 rounded-lg shadow-md">
                    <div>
                        {{--                        {{ Auth::user()->getBranch()?->products()->count() ?? 0 }}--}}
                        <h2 class="text-3xl font-bold">12</h2>
                        <p class="text-gray-500 text-sm">Počet zasielok</p>
                    </div>
                    <p class="text-green-500 text-sm">↑ 0.2% viac ako minulý mesiac</p>
                </div>
                <div class="flex flex-col justify-between bg-white p-4 rounded-lg shadow-md">
                    <div>
                        <h2 class="text-3xl font-bold">4,550,350.00</h2>
                        <p class="text-gray-500 text-sm">Počet prijatých zasielok</p>
                    </div>
                    <p class="text-green-500 text-sm">↑ 0.1% viac ako minulý mesiac</p>
                </div>

                <div class="flex flex-col justify-between bg-white p-4 rounded-lg shadow-md">
                    <div>
                        <h2 class="text-3xl font-bold">6,550,350.00</h2>
                        <p class="text-gray-500 text-sm">Počet jednotlivo predaných produktov</p>
                    </div>
                    <p class="text-red-500 text-sm">↓ 2.1% menej ako minulý mesiac</p>
                </div>

                <div class="flex flex-col justify-between bg-white p-4 rounded-lg shadow-md">
                    <div>
                        <h2 class="text-3xl font-bold">150,350.00</h2>
                        <p class="text-gray-500 text-sm">Počet odoslaných zásielok</p>
                    </div>
                    <p class="text-red-500 text-sm">↓ 1.5% menej ako minulý mesiac</p>
                </div>
            </div>

            <div class="col-span-1 bg-white p-4 w-full bg-white rounded-lg shadow-md dark:bg-gray-800 p-4 md:p-6">
                <div class="flex justify-between pb-4 mb-4 border-b border-gray-200 dark:border-gray-700">
                    <h2 class="text-lg font-semibold">Ročný prehľad zásielok</h2>
                    <div class="flex items-center">
                        <div class="w-4 h-4 rounded-md bg-blue-500 mr-2"></div>
                        <span>Odoslaných</span>
                        <div class="w-4 h-4 rounded-md bg-orange-500 m-2"></div>
                        <span>Prijatých</span>
                    </div>
                    {{--                        <div class="flex items-center">--}}
                    {{--                            <div class="w-12 h-12 rounded-lg bg-gray-100 dark:bg-gray-700 flex items-center justify-center me-3">--}}
                    {{--                                <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 19">--}}
                    {{--                                    <path d="M14.5 0A3.987 3.987 0 0 0 11 2.1a4.977 4.977 0 0 1 3.9 5.858A3.989 3.989 0 0 0 14.5 0ZM9 13h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z"/>--}}
                    {{--                                    <path d="M5 19h10v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2ZM5 7a5.008 5.008 0 0 1 4-4.9 3.988 3.988 0 1 0-3.9 5.859A4.974 4.974 0 0 1 5 7Zm5 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm5-1h-.424a5.016 5.016 0 0 1-1.942 2.232A6.007 6.007 0 0 1 17 17h2a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5ZM5.424 9H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h2a6.007 6.007 0 0 1 4.366-5.768A5.016 5.016 0 0 1 5.424 9Z"/>--}}
                    {{--                                </svg>--}}
                    {{--                            </div>--}}
                    {{--                            <div>--}}
                    {{--                                <h5 class="leading-none text-2xl font-bold text-gray-900 dark:text-white pb-1">3.4k</h5>--}}
                    {{--                                <p class="text-sm font-normal text-gray-500 dark:text-gray-400">Leads generated per week</p>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                        <div>--}}
                    {{--                          <span class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-1 rounded-md dark:bg-green-900 dark:text-green-300">--}}
                    {{--                            <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">--}}
                    {{--                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4"/>--}}
                    {{--                            </svg>--}}
                    {{--                            42.5%--}}
                    {{--                          </span>--}}
                    {{--                        </div>--}}
                </div>

                <div class="grid grid-cols-2">
                    <dl class="flex items-center">
                        <dt class="text-gray-500 dark:text-gray-400 text-sm font-normal me-1">Money spent:</dt>
                        <dd class="text-gray-900 text-sm dark:text-white font-semibold">$3,232</dd>
                    </dl>
                    <dl class="flex items-center justify-end">
                        <dt class="text-gray-500 dark:text-gray-400 text-sm font-normal me-1">Money gained:</dt>
                        <dd class="text-gray-900 text-sm dark:text-white font-semibold">$3,800</dd>
                    </dl>
                </div>

                <div id="column-chart"></div>
            </div>
        </div>


        <div class="col-span-2 bg-white p-4 rounded-lg shadow-md">
            <h3 class="text-xl font-bold mb-4">Hlavní odoberatelia</h3>
            <table class="w-full border-collapse">
                <thead>
                <tr>
                    <th class="border border-gray-300 p-2">N</th>
                    <th class="border border-gray-300 p-2">Meno odberateľa</th>
                    <th class="border border-gray-300 p-2">ID odberateľa</th>
                    <th class="border border-gray-300 p-2">Odoslané zásielky</th>
                    <th class="border border-gray-300 p-2">Očakávané zásielky</th>
                    <th class="border border-gray-300 p-2">Stav</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="border border-gray-300 p-2">01</td>
                    <td class="border border-gray-300 p-2">Meno</td>
                    <td class="border border-gray-300 p-2">45656787</td>
                    <td class="border border-gray-300 p-2">50pcs</td>
                    <td class="border border-gray-300 p-2">40pcs</td>
                    <td class="border border-gray-300 p-2 bg-green-100 text-green-700">Aktívny</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>

        const options = {
            colors: ["#1A56DB", "#FDBA8C"],
            series: [
                {
                    name: "Organic",
                    color: "#1A56DB",
                    data: [
                        { x: "Jan", y: 231 },
                        { x: "Feb", y: 122 },
                        { x: "Mar", y: 63 },
                        { x: "Apr", y: 421 },
                        { x: "May", y: 122 },
                        { x: "Jun", y: 323 },
                        { x: "Jul", y: 111 },
                        { x: "Aug", y: 111 },
                        { x: "Sep", y: 111 },
                        { x: "Oct", y: 111 },
                        { x: "Nov", y: 111 },
                        { x: "Dec", y: 111 },
                    ],
                },
                {
                    name: "Social media",
                    color: "#FDBA8C",
                    data: [
                        { x: "Jan", y: 232 },
                        { x: "Feb", y: 113 },
                        { x: "Mar", y: 341 },
                        { x: "Apr", y: 224 },
                        { x: "May", y: 522 },
                        { x: "Jun", y: 411 },
                        { x: "Jul", y: 243 },
                        { x: "Aug", y: 243 },
                        { x: "Sep", y: 243 },
                        { x: "Oct", y: 243 },
                        { x: "Nov", y: 243 },
                        { x: "Dec", y: 243 },
                    ],
                },
            ],
            chart: {
                type: "bar",
                height: "320px",
                fontFamily: "Inter, sans-serif",
                toolbar: {
                    show: true,
                },
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: "70%",
                    borderRadiusApplication: "end",
                    borderRadius: 8,
                },
            },
            tooltip: {
                shared: true,
                intersect: false,
                style: {
                    fontFamily: "Inter, sans-serif",
                },
            },
            states: {
                hover: {
                    filter: {
                        type: "darken",
                        value: 1,
                    },
                },
            },
            stroke: {
                show: true,
                width: 0,
                colors: ["transparent"],
            },
            grid: {
                show: true,
                strokeDashArray: 4,
                padding: {
                    left: 2,
                    right: 2,
                    top: -14
                },
            },
            dataLabels: {
                enabled: false,
            },
            legend: {
                show: false,
            },
            xaxis: {
                floating: false,
                labels: {
                    show: true,
                    style: {
                        fontFamily: "Inter, sans-serif",
                        cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
                    }
                },
                axisBorder: {
                    show: false,
                },
                axisTicks: {
                    show: false,
                },
            },
            yaxis: {
                show: true,
                labels: {
                    show: true,
                    style: {
                        fontFamily: "Inter, sans-serif",
                        cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
                    },
                    formatter: (value) => {
                        return `$${value}k`;
                    }
                },
                axisBorder: {
                    show: false,
                },
                axisTicks: {
                    show: false,
                },
                lines: {
                    show: true,
                },
            },
            yaxis: {
                show: true,
            },
            fill: {
                opacity: 1,
            },
        }

        if(document.getElementById("column-chart") && typeof ApexCharts !== 'undefined') {
            const chart = new ApexCharts(document.getElementById("column-chart"), options);
            chart.render();
        }
    </script>
</x-overlay>
