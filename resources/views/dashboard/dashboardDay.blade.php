@extends('layout.menubar')
@extends('layout.header')
@extends('layout.hello')

<body>
    <div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <link href="{{asset('css/dashboard.css')}}" rel="stylesheet" />

        <div class="dashboardtheongy-container">
            <div class="container-all">
                <div class="dashboardtheongy-menubar">
                    <div class="dashboardtheongy-datepicker">
                        <iframe
                            src="https://calendar.google.com/calendar/embed?height=350&wkst=2&bgcolor=%23ffffff&ctz=Asia%2FHo_Chi_Minh&title=L%E1%BB%8Bch&showTitle=0&showNav=1&showDate=1&showPrint=0&showTabs=0&showTz=0&src=dmkudmlldG5hbWVzZSNob2xpZGF5QGdyb3VwLnYuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&color=%230B8043"
                            class="dashboardtheongy-frame624769" style="border-width:0" width="350" height="350"
                            frameborder="0" scrolling="no"></iframe>
                    </div>

                    <div class="dashboardtheongy-frame625202">
                        <div class="dashboardtheongy-frame625210">

                    <span class="dashboardtheongy-text081">
                    <?php
                    if ($dashboard->device_off + $dashboard->device_on !== 0) {
                        $t = 0 ? 0 : ($dashboard->device_on *100 / ($dashboard->device_off + $dashboard->device_on));
                        echo round($t)."%";
                    }
                    else{ echo "0%"; 
                    }
                        ?>
                    </span> 
                            <canvas id="myChart" style="width:100%;max-width:60px;height:100%;pointer-events: none;"></canvas>
                            <script type="text/javascript">
                                var xValues = ["Hoạt động", "Ngưng hoạt động"];
                                var yValues = [<?php echo $dashboard->device_on ?>, <?php echo $dashboard->device_off ?>]
                                var barColors = [
                                    "rgba(255, 117, 6, 1)",
                                    "#00aba9",
                                ];

                                new Chart("myChart", {
                                    type: "doughnut",
                                    data: {
                                        datasets: [{
                                            backgroundColor: barColors,
                                            data: yValues
                                        }]
                                    },
                                    
                                });
                            </script>
                    </div>
                    <div class="dashboardtheongy-group625205">
                        <div class="dashboardtheongy-group625201">
                            <div class="dashboardtheongy-group625198">
                                <span class="dashboardtheongy-text083">
                                    <span>{{$dashboard->device_on}}</span>
                                </span>
                                <span class="dashboardtheongy-text085">
                                    <span>Hoạt động</span>
                                </span>
                            </div>
                            <div class="dashboardtheongy-frame625214"></div>
                        </div>
                        <div class="dashboardtheongy-group625202">
                            <div class="dashboardtheongy-group625199">
                                <span class="dashboardtheongy-text087">
                                    <span>{{$dashboard->device_off}}</span>
                                </span>
                                <span class="dashboardtheongy-text089">
                                    <span>Ngưng hoạt động</span>
                                </span>
                            </div>
                            <div class="dashboardtheongy-frame625215"></div>
                        </div>
                    </div>
                    <div class="dashboardtheongy-group625204">
                        <div class="dashboardtheongy-group625210">
                            <span class="dashboardtheongy-text091">
                                <span>{{$dashboard->device_off + $dashboard->device_on}}</span>
                            </span>
                            <span class="dashboardtheongy-text093">
                                <span>Thiết bị</span>
                            </span>
                            <div class="dashboardtheongy-vuesaxlinearmonitor">
                                <div class="dashboardtheongy-vuesaxlinearmonitor1">
                                    <div class="dashboardtheongy-monitor">
                                        <img src="{{asset('playground_assets/vectori201-b19.svg')}}" alt="VectorI201"
                                            class="dashboardtheongy-vector" />
                                        <img src="{{asset('playground_assets/vectori201-l1q.svg')}}" alt="VectorI201"
                                            class="dashboardtheongy-vector01" />
                                        <img src="{{asset('playground_assets/vectori201-necp.svg')}}" alt="VectorI201"
                                            class="dashboardtheongy-vector02" />
                                        <img src="{{asset('playground_assets/vectori201-ztr.svg')}}" alt="VectorI201"
                                            class="dashboardtheongy-vector03" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dashboardtheongy-frame625203">
                    <div class="dashboardtheongy-frame625210">
                        <span class="dashboardtheongy-text081">
                        <?php
                        if ($dashboard->service_off + $dashboard->service_on == 0) {
                            echo "0%";
                        }
                        else{
                            $e = 0 ? 0 : ($dashboard->service_on *100 / ($dashboard->service_off + $dashboard->service_on));
                            echo round($e)."%";
                        }
                        ?>
                        </span>
                        <canvas id="myChart1" style="width:100%;max-width:60px;height:100%;pointer-events: none;"></canvas>

                        <script type="text/javascript">
                                var xValues = ["Đang hoạt động", "Ngưng hoạt động"];
                                var yValues = [<?php echo $dashboard->service_on ?>, <?php echo $dashboard->service_off ?>]
                                var barColors = [
                                    "rgba(65, 118, 255, 1)",
                                    "#00aba9",
                                ];
                                new Chart("myChart1", {
                                    type: "doughnut",
                                    data: {
                                        datasets: [{
                                            backgroundColor: barColors,
                                            data: yValues
                                        }]
                                    },
                                    
                                });
                            </script>
                    </div>
                    <div class="dashboardtheongy-group6252051">
                        <div class="dashboardtheongy-group6252011">
                            <div class="dashboardtheongy-group6251981">
                                <span class="dashboardtheongy-text097">
                                    <span>{{$dashboard->service_on}}</span>
                                </span>
                                <span class="dashboardtheongy-text099">
                                    <span>Đang hoạt động</span>
                                </span>
                            </div>
                            <div class="dashboardtheongy-frame6252141"></div>
                        </div>
                        <div class="dashboardtheongy-group6252021">
                            <div class="dashboardtheongy-group6251991">
                                <span class="dashboardtheongy-text101">
                                    <span>{{$dashboard->service_off}}</span>
                                </span>
                                <span class="dashboardtheongy-text103">
                                    <span>Ngưng hoạt động</span>
                                </span>
                            </div>
                            <div class="dashboardtheongy-frame6252151"></div>
                        </div>
                    </div>
                    <div class="dashboardtheongy-group625208">
                        <span class="dashboardtheongy-text105">{{$dashboard->service_off + $dashboard->service_on}}</span>
                        <span class="dashboardtheongy-text107">
                            <span>Dịch vụ</span>
                        </span>
                        <div class="dashboardtheongy-frame332">
                            <div class="dashboardtheongy-group305">
                                <img src="{{asset('playground_assets/ellipse72011-wknl-200h.png')}}" alt="Ellipse72011"
                                    class="dashboardtheongy-ellipse7" />
                                <img src="{{asset('playground_assets/ellipse82011-lsb-200h.png')}}" alt="Ellipse82011"
                                    class="dashboardtheongy-ellipse8" />
                                <img src="{{asset('playground_assets/ellipse92011-dlt-200h.png')}}" alt="Ellipse92011"
                                    class="dashboardtheongy-ellipse9" />
                            </div>
                            <img src="{{asset('playground_assets/frame2011-180i.svg')}}" alt="Frame2011"
                                class="dashboardtheongy-frame" />
                            <div class="dashboardtheongy-group304">
                                <img src="{{asset('playground_assets/vector2011-nps4.svg')}}" alt="Vector2011"
                                    class="dashboardtheongy-vector04" />
                                <img src="{{asset('playground_assets/vector2011-ebgc.svg')}}" alt="Vector2011"
                                    class="dashboardtheongy-vector05" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dashboardtheongy-frame625204">
                    <div class="dashboardtheongy-frame625210">                        
                    <canvas id="myChart3" style="width:100%;max-width:60px;height:100%;pointer-events: none;"></canvas>

<script type="text/javascript">
        var xValues = ["Đang chờ", "Đã sử dụng", "Bỏ qua"];
        var yValues = [<?php echo $dashboard->number_wait ?>, 
                       <?php echo $dashboard->number_used ?>,
                       <?php echo $dashboard->number_pass ?>];

        var barColors = [
            "rgba(65, 118, 255, 1)",
            "#00aba9",
            "#20c997"
        ];
        new Chart("myChart3", {
            type: "doughnut",
            data: {
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            
        });
    </script>
                    </div>
                    <div class="dashboardtheongy-group6252052">
                        <div class="dashboardtheongy-group6252012">
                        <div class="dashboardtheongy-group6251992">
                                <span class="dashboardtheongy-text115">
                                    <span>{{$dashboard->number_wait}}</span>
                                </span>
                                <span class="dashboardtheongy-text117">
                                    <span>Đang chờ</span>
                                </span>
                            </div>
                            
                            <div class="dashboardtheongy-frame6252142"></div>
                        </div>
                        <div class="dashboardtheongy-group6252022">
                        <div class="dashboardtheongy-group6251982">
                                <span class="dashboardtheongy-text111">
                                    <span>{{$dashboard->number_used}}</span>
                                </span>
                                <span class="dashboardtheongy-text113">
                                    <span>Đã sử dụng</span>
                                </span>
                            </div>
                            <div class="dashboardtheongy-frame6252152"></div>
                        </div>
                        <div class="dashboardtheongy-group625203">
                            <div class="dashboardtheongy-group6251993">
                                <span class="dashboardtheongy-text119">
                                    <span>{{$dashboard->number_pass}}</span>
                                </span>
                                <span class="dashboardtheongy-text121">
                                    <span>Bỏ qua</span>
                                </span>
                            </div>
                            <div class="dashboardtheongy-frame6252153"></div>
                        </div>
                    </div>
                    <div class="dashboardtheongy-group625209">
                        <span class="dashboardtheongy-text123">
                            {{$dashboard->number_wait+$dashboard->number_used+$dashboard->number_pass}}</span>
                        <span class="dashboardtheongy-text125">
                            <span>Cấp số</span>
                        </span>
                        <div class="dashboardtheongy-icondasboard03">
                            <img src="{{asset('playground_assets/filayers2011-4pw.svg')}}" alt="filayers2011"
                                class="dashboardtheongy-filayers" />
                        </div>
                    </div>
                </div>

                <span class="dashboardtheongy-text127  ">
                    <span>Tổng quan</span>
                </span>
            </div>
            <div class="topbar-all">
                <div class="breadcrumbs">
                    <button class="dashboardtheongy-button5">
                        <span class="dashboardtheongy-text129  ">
                            <span>Dashboard</span>
                        </span>
                    </button>
                </div>

                <div class="dashboardtheongy-frame271">
                    <div class="dashboardtheongy-vuesaxboldnotification">
                        <div class="dashboardtheongy-vuesaxboldnotification1">
                            <div class="dashboardtheongy-notification">
                                <img src="{{asset('playground_assets/vectori209-xvzr.svg')}}" alt="VectorI209"
                                    class="dashboardtheongy-vector06" />
                                <img src="{{asset('playground_assets/vectori209-6ral.svg')}}" alt="VectorI209"
                                    class="dashboardtheongy-vector07" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dashboardtheongy-ngay">
                <div class="dashboardtheongy-group625154">
                    <div class="dashboardtheongy-cardselevationwhiteflat">
                        <img src="{{asset('playground_assets/cardselevationflati209-xuap-500h.png')}}"
                            alt="cardselevationflatI209" class="dashboardtheongy-cardselevationflat" />
                        <div class="dashboardtheongy-graphsexamplehorizontalgraphsgraphic">
                            <!-- <div class="dashboardtheongy-graphselementshorizontallines48px">
                  <div class="dashboardtheongy-lines"> -->
                            <div class="dashboardtheongy-frame625120">
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<canvas id="myChart2" style="width:100%;max-width:600px"></canvas>

<script>
var xValues = [
    
    19
    ,20
    ,21
    ,22
    ,23
];
var yValues = [0,0,0,0,30];

new Chart("myChart2", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "rgba(0,0,255,0.1)",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    // scales: {
    //   yAxes: [{ticks: {min: 6, max:16}}],
    // }
  }
});
</script>

                            </div>
                        </div>
                        <div class="dashboardtheongy-group625172">

                            <span class="dashboardtheongy-text152"> ? </span>
                        </div>
                        <div class="dashboardtheongy-frame625193">
                            <span class="dashboardtheongy-text153  ">
                                <span>Xem theo</span>
                            </span>
                            <div class="dashboardtheongy-dropdown">
                                <select class="dashboardtheongy-text155  ">
                                    <option value="0">Ngày</option>
                                    <option value="1">Tuần</option>
                                    <option value="2">Tháng</option>
                                </select>

                            </div>
                        </div>
                    </div>

                    <span class="dashboardtheongy-text167  ">
                        <span>Bảng thống kê theo ngày</span>
                    </span>
                    <span class="dashboardtheongy-text169  ">
                        <span>Tháng 11/2021</span>
                    </span>
                </div>
            </div>
            <span class="dashboardtheongy-text171  ">
                <span>Biểu đồ cấp số</span>
            </span>
            <div class="dashboardtheongy-frame625221">
                <div class="dashboardtheongy-frame625222">
                    <img src="{{asset('playground_assets/rectangle34631172091-1crn-200h.png')}}"
                        alt="Rectangle34631172091" class="dashboardtheongy-rectangle3463117" />
                    <span class="dashboardtheongy-text173  ">
                        <span>4.221</span>
                    </span>
                    <div class="dashboardtheongy-group625207">
                        <div class="dashboardtheongy-frame624758">
                            <img src="{{asset('playground_assets/ellipse10i209-nbfl-200h.png')}}" alt="Ellipse10I209"
                                class="dashboardtheongy-ellipse10" />
                            <div class="dashboardtheongy-icondasboard031">
                                <div class="dashboardtheongy-group">
                                    <img src="{{asset('playground_assets/vectori209-jsoa.svg')}}" alt="VectorI209"
                                        class="dashboardtheongy-vector10" />
                                </div>
                            </div>
                        </div>
                        <span class="dashboardtheongy-text175  ">
                            <span>
                                <span>Số thứ tự đã cấp</span>
                            </span>
                        </span>
                    </div>
                    <div class="dashboardtheongy-group625213">
                        <div class="dashboardtheongy-group625211">
                            <div class="dashboardtheongy-group625212">
                                <div class="dashboardtheongy-biarrowdownshort">
                                    <div class="dashboardtheongy-group01">
                                        <img src="{{asset('playground_assets/vector2091-5593q.svg')}}" alt="Vector2091"
                                            class="dashboardtheongy-vector11" />
                                    </div>
                                </div>
                                <span class="dashboardtheongy-text180">
                                    <span>32,41%</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dashboardtheongy-frame625223">
                    <img src="{{asset('playground_assets/rectangle34631172091-qf-200h.png')}}"
                        alt="Rectangle34631172091" class="dashboardtheongy-rectangle34631171" />
                    <span class="dashboardtheongy-text182  ">
                        <span>3.721</span>
                    </span>
                    <div class="dashboardtheongy-group6252071">
                        <div class="dashboardtheongy-frame624759">
                            <img src="{{asset('playground_assets/ellipse10i209-5bsm-200h.png')}}" alt="Ellipse10I209"
                                class="dashboardtheongy-ellipse101" />
                            <div class="dashboardtheongy-icondasboard02">
                                <div class="dashboardtheongy-group02">
                                    <img src="{{asset('playground_assets/vectori209-4lyi.svg')}}" alt="VectorI209"
                                        class="dashboardtheongy-vector12" />
                                    <img src="{{asset('playground_assets/vectori209-yo.svg')}}" alt="VectorI209"
                                        class="dashboardtheongy-vector13" />
                                </div>
                            </div>
                        </div>
                        <span class="dashboardtheongy-text184  ">
                            <span>
                                <span>Số thứ tự đã sử dụng</span>
                            </span>
                        </span>
                    </div>
                    <div class="dashboardtheongy-group6252131">
                        <div class="dashboardtheongy-group6252111">
                            <div class="dashboardtheongy-group6252121">
                                <div class="dashboardtheongy-biarrowdownshort1">
                                    <div class="dashboardtheongy-group03">
                                        <img src="{{asset('playground_assets/vector2091-cvj9.svg')}}" alt="Vector2091"
                                            class="dashboardtheongy-vector14" />
                                    </div>
                                </div>
                                <span class="dashboardtheongy-text189">
                                    <span>32,41%</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dashboardtheongy-frame625224">
                    <img src="{{asset('playground_assets/rectangle34631172091-w5p-200h.png')}}"
                        alt="Rectangle34631172091" class="dashboardtheongy-rectangle34631172" />
                    <span class="dashboardtheongy-text191  ">
                        <span>468</span>
                    </span>
                    <div class="dashboardtheongy-group6252072">
                        <div class="dashboardtheongy-frame6247591">
                            <img src="{{asset('playground_assets/ellipse10i209-h2kfb-200h.png')}}" alt="Ellipse10I209"
                                class="dashboardtheongy-ellipse102" />
                            <img src="{{asset('playground_assets/icondasboard05i209-u2t.svg')}}"
                                alt="icondasboard05I209" class="dashboardtheongy-icondasboard05" />
                        </div>
                        <span class="dashboardtheongy-text193  ">
                            <span>
                                <span>Số thứ tự đang chờ</span>
                            </span>
                        </span>
                    </div>
                    <div class="dashboardtheongy-group625214">
                        <div class="dashboardtheongy-group6252112">
                            <div class="dashboardtheongy-group6252122">
                                <div class="dashboardtheongy-biarrowdownshort2">
                                    <div class="dashboardtheongy-group04">
                                        <img src="{{asset('playground_assets/vector2091-l908.svg')}}" alt="Vector2091"
                                            class="dashboardtheongy-vector15" />
                                    </div>
                                </div>
                                <span class="dashboardtheongy-text198">
                                    <span>56,41%</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dashboardtheongy-frame625225">
                    <img src="{{asset('playground_assets/rectangle34631172091-6cua-200h.png')}}"
                        alt="Rectangle34631172091" class="dashboardtheongy-rectangle34631173" />
                    <span class="dashboardtheongy-text200  ">
                        <span>32</span>
                    </span>
                    <div class="dashboardtheongy-group6252073">
                        <div class="dashboardtheongy-frame6247592">
                            <img src="{{asset('playground_assets/ellipse10i209-uzt-200h.png')}}" alt="Ellipse10I209"
                                class="dashboardtheongy-ellipse103" />
                            <div class="dashboardtheongy-icondasboard07">
                                <div class="dashboardtheongy-group05">
                                    <img src="{{asset('playground_assets/vectori209-yxp9.svg')}}" alt="VectorI209"
                                        class="dashboardtheongy-vector16" />
                                    <img src="{{asset('playground_assets/vectori209-zlya.svg')}}" alt="VectorI209"
                                        class="dashboardtheongy-vector17" />
                                </div>
                            </div>
                        </div>
                        <span class="dashboardtheongy-text202  ">
                            <span>
                                <span>Số thứ tự đã bỏ qua</span>
                            </span>
                        </span>
                    </div>
                    <div class="dashboardtheongy-group6252132">
                        <div class="dashboardtheongy-group6252113">
                            <div class="dashboardtheongy-group6252123">
                                <div class="dashboardtheongy-biarrowdownshort3">
                                    <div class="dashboardtheongy-group06">
                                        <img src="{{asset('playground_assets/vector2091-jx38.svg')}}" alt="Vector2091"
                                            class="dashboardtheongy-vector18" />
                                    </div>
                                </div>
                                <span class="dashboardtheongy-text207">
                                    <span>22,41%</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

</body>

</html>
