@extends('layout.menubar')
@extends('layout.header')
@extends('layout.hello')
<title>Dashboard</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>      
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<body>
    <div> 
        <link href="{{asset('css/dashboard.css')}}" rel="stylesheet" />
        <div class="dashboard-container">
            <div  class="container-all">
                <div class="dashboard-menubar">     
                    <div id="datepicker" class="dashboard-datepicker">
    <script type="text/javascript">
      $(function() {
        
        $("#datepicker").datepicker({
          numberOfMonths:1,
        }); 
        
      });
    </script> 
        </div>
                <div class="dashboard-frame625202">
                    <div class="dashboard-frame625210">
                            <span class="dashboard-text081">
                                <?php
                                if ($dashboard->device_off + $dashboard->device_on !== 0) {
                                    $t = 0 ? 0 : ($dashboard->device_on *100 / ($dashboard->device_off + $dashboard->device_on));
                                    echo round($t)."%";
                                }
                                else{ echo "0%"; 
                                }
                                ?>
                            </span>
                            <canvas id="myChart"
                                style="width:100%;max-width:60px;height:100%;pointer-events: none;"></canvas>
                            <script type="text/javascript">
                                var xValues = ["Hoạt động", "Ngưng hoạt động"];
                                var yValues = [<?php echo $dashboard -> device_on ?>, <?php echo $dashboard -> device_off ?>]
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
                        <div class="dashboard-group625205">
                            <div class="dashboard-group625201">
                                <div class="dashboard-group625198">
                                    <span class="dashboard-text083">
                                        <span>{{$dashboard->device_on}}</span>
                                    </span>
                                    <span class="dashboard-text085">
                                        <span>Hoạt động</span>
                                    </span>
                                </div>
                                <div class="dashboard-frame625214"></div>
                            </div>
                            <div class="dashboard-group625202">
                                <div class="dashboard-group625199">
                                    <span class="dashboard-text087">
                                        <span>{{$dashboard->device_off}}</span>
                                    </span>
                                    <span class="dashboard-text089">
                                        <span>Ngưng hoạt động</span>
                                    </span>
                                </div>
                                <div class="dashboard-frame625215"></div>
                            </div>
                        </div>
                        <div class="dashboard-group625204">
                            <div class="dashboard-group625210">
                                <span class="dashboard-text091">
                                    <span>{{$dashboard->device_off + $dashboard->device_on}}</span>
                                </span>
                                <span class="dashboard-text093">
                                    <span>Thiết bị</span>
                                </span>
                                <div class="dashboard-vuesaxlinearmonitor">
                                    <div class="dashboard-vuesaxlinearmonitor1">
                                        <div class="dashboard-monitor">
                                            <img src="{{asset('playground_assets/vectori201-b19.svg')}}"
                                                alt="VectorI201" class="dashboard-vector" />
                                            <img src="{{asset('playground_assets/vectori201-l1q.svg')}}"
                                                alt="VectorI201" class="dashboard-vector01" />
                                            <img src="{{asset('playground_assets/vectori201-necp.svg')}}"
                                                alt="VectorI201" class="dashboard-vector02" />
                                            <img src="{{asset('playground_assets/vectori201-ztr.svg')}}"
                                                alt="VectorI201" class="dashboard-vector03" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard-frame625203">
                        <div class="dashboard-frame625210">
                            <span class="dashboard-text081">
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
                            <canvas id="myChart1"
                                style="width:100%;max-width:60px;height:100%;pointer-events: none;"></canvas>

                            <script type="text/javascript">
                                var xValues = ["Đang hoạt động", "Ngưng hoạt động"];
                                var yValues = [<?php echo $dashboard -> service_on ?>, <?php echo $dashboard -> service_off ?>]
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
                        <div class="dashboard-group6252051">
                            <div class="dashboard-group6252011">
                                <div class="dashboard-group6251981">
                                    <span class="dashboard-text097">
                                        <span>{{$dashboard->service_on}}</span>
                                    </span>
                                    <span class="dashboard-text099">
                                        <span>Đang hoạt động</span>
                                    </span>
                                </div>
                                <div class="dashboard-frame6252141"></div>
                            </div>
                            <div class="dashboard-group6252021">
                                <div class="dashboard-group6251991">
                                    <span class="dashboard-text101">
                                        <span>{{$dashboard->service_off}}</span>
                                    </span>
                                    <span class="dashboard-text103">
                                        <span>Ngưng hoạt động</span>
                                    </span>
                                </div>
                                <div class="dashboard-frame6252151"></div>
                            </div>
                        </div>
                        <div class="dashboard-group625208">
                            <span class="dashboard-text105">{{$dashboard->service_off +
                                $dashboard->service_on}}</span>
                            <span class="dashboard-text107">
                                <span>Dịch vụ</span>
                            </span>
                            <div class="dashboard-frame332">
                                <div class="dashboard-group305">
                                    <img src="{{asset('playground_assets/ellipse72011-wknl-200h.png')}}"
                                        alt="Ellipse72011" class="dashboard-ellipse7" />
                                    <img src="{{asset('playground_assets/ellipse82011-lsb-200h.png')}}"
                                        alt="Ellipse82011" class="dashboard-ellipse8" />
                                    <img src="{{asset('playground_assets/ellipse92011-dlt-200h.png')}}"
                                        alt="Ellipse92011" class="dashboard-ellipse9" />
                                </div>
                                <img src="{{asset('playground_assets/frame2011-180i.svg')}}" alt="Frame2011"
                                    class="dashboard-frame" />
                                <div class="dashboard-group304">
                                    <img src="{{asset('playground_assets/vector2011-nps4.svg')}}" alt="Vector2011"
                                        class="dashboard-vector04" />
                                    <img src="{{asset('playground_assets/vector2011-ebgc.svg')}}" alt="Vector2011"
                                        class="dashboard-vector05" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard-frame625204">
                        <div class="dashboard-frame625210">
                        <span class="dashboard-text081">
                                <?php
                                if ($dashboard->number_wait + $dashboard->number_used + $dashboard->number_pass !== 0) {
                                    $t = 0 ? 0 : ($dashboard->number_wait *100 / ($dashboard->number_wait + $dashboard->number_used + $dashboard->number_pass));
                                    echo round($t)."%";
                                }
                                else{ echo "0%"; 
                                }
                                ?>
                            </span>
                            <canvas id="myChart3"
                                style="width:100%;max-width:60px;height:100%;pointer-events: none;"></canvas>

                            <script type="text/javascript">
                                var xValues = ["Đang chờ", "Đã sử dụng", "Bỏ qua"];
                                var yValues = [<?php echo $dashboard -> number_wait ?>, 
                       <?php echo $dashboard -> number_used ?>,
                       <?php echo $dashboard -> number_pass ?>];

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
                        <div class="dashboard-group6252052">
                            <div class="dashboard-group6252012">
                                <div class="dashboard-group6251992">
                                    <span class="dashboard-text115">
                                        <span>{{$dashboard->number_wait}}</span>
                                    </span>
                                    <span class="dashboard-text117">
                                        <span>Đang chờ</span>
                                    </span>
                                </div>

                                <div class="dashboard-frame6252142"></div>
                            </div>
                            <div class="dashboard-group6252022">
                                <div class="dashboard-group6251982">
                                    <span class="dashboard-text111">
                                        <span>{{$dashboard->number_used}}</span>
                                    </span>
                                    <span class="dashboard-text113">
                                        <span>Đã sử dụng</span>
                                    </span>
                                </div>
                                <div class="dashboard-frame6252152"></div>
                            </div>
                            <div class="dashboard-group625203">
                                <div class="dashboard-group6251993">
                                    <span class="dashboard-text119">
                                        <span>{{$dashboard->number_pass}}</span>
                                    </span>
                                    <span class="dashboard-text121">
                                        <span>Bỏ qua</span>
                                    </span>
                                </div>
                                <div class="dashboard-frame6252153"></div>
                            </div>
                        </div>
                        <div class="dashboard-group625209">
                            <span class="dashboard-text123">
                                {{$dashboard->number_wait+$dashboard->number_used+$dashboard->number_pass}}</span>
                            <span class="dashboard-text125">
                                <span>Cấp số</span>
                            </span>
                            <div class="dashboard-icondasboard03">
                                <img src="{{asset('playground_assets/filayers2011-4pw.svg')}}" alt="filayers2011"
                                    class="dashboard-filayers" />
                            </div>
                        </div>
                    </div>

                    <span class="dashboard-text127">
                        <span>Tổng quan</span>
                    </span>
                </div>
                <div class="topbar-all">
                    <div class="breadcrumbs">
                        <div class="dashboard-button5">
                            <span class="dashboard-text129  ">
                                <span>Dashboard</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="dashboard-ngay">
                    <div class="ngay dashboard-group625154">
                         
                        <div class="dashboard-cardselevationwhiteflat">
                        <div class="dashboard-frame625193">
                                <span class="dashboard-text153  ">
                                    <span>Xem theo</span>
                                </span>
                                
                                    <select id="option" name="option" class="dashboard-dropdown dashboard-text155">
                                        <option selected="selected" value="0">Ngày</option>
                                        <option value="1">Tuần</option>
                                        <option value="2">Tháng</option>
                                    </select>   
                            </div>
                            <script>        
                    jQuery(document).ready(function () {
                        var select = 0;
                        var y = new Date();
                        var m = y.getMonth()+1;
                        $('#myChart4').hide(); 
                        jQuery('#option').on('change', function ()
                        {
                            select = jQuery('#option').val();
                            
                            if (select == 0) {
                                document.getElementById('soluong').innerHTML = "Số lượng/ Ngày";
                                document.getElementById('bangthongke').innerHTML = "Bảng thống kê theo ngày";
                                document.getElementById('ngaythang').innerHTML = "Tháng"+m+"/"+y.getFullYear();
                                $('#myChart2').show();
                                $('#myChart4').hide();
                            }
                            else if (select == 1) {
                                $('#myChart2').hide();
                                $('#myChart4').hide();
                            }

                            else if (select == 2) {
                                $('#myChart4').show();
                                
                                document.getElementById('soluong').innerHTML = "Số lượng/ Tháng";
                                document.getElementById('bangthongke').innerHTML = "Bảng thống kê theo tháng";
                                document.getElementById('ngaythang').innerHTML = "Năm "+y.getFullYear();
                                $('#myChart2').hide();
                            }          
                        });
                    });
                </script>
                            <div class="dashboard-graphsexamplehorizontalgraphsgraphic">
                                <div id="linechart" class="dashboard-frame625120">
                                    <script
                                        src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                                    <canvas id="myChart2" style="width:100%;max-width:600px"></canvas>

                                    <script>
                                        var xValues = [
                                        <?php 

                                        $i = 0;
                                        foreach($a as $a)
                                        {
                                            $x[$i] = $a -> day;
                                            $y[$i] = $a -> sl;
                                            echo $x[$i].","."";
                                            $i++;
                                        }
                                        ?>
                                        ];

                                        var yValues = [
                                        <?php 
                                        foreach($y as $y)
                                        {
                                            echo $y.","."";
                                        }
                                        ?>
                                        ];

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
                                                legend: { display: false },
                                            }
                                        });
                                    </script>
        <canvas id="myChart4" style="width:100%;max-width:600px"></canvas>
<script>
    var xValues = [
    <?php 
    $j = 0;
    foreach($b as $b)
    {
        $c[$j] = $b -> month;
        $d[$j] = $b -> sl;
        echo $c[$j].","."";
        $j++;
    }
    ?>
    ];

    var yValues = [
    <?php 
    foreach($d as $z)
    {
        echo $z.","."";
    }
    ?>];
    new Chart("myChart4", {
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
            legend: { display: false },
        }
    });
</script>

                                    <div class="dashboard-group625172">
                                        <span id="soluong" class="dashboard-text152 1414light"> Số lượng/ Ngày </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="dashboard-text167 chitiettieude " id="bangthongke">
                            <span>Bảng thống kê theo ngày</span>
                        </span>
                        <span class="dashboard-text169" id="ngaythang">
                            <span>Tháng {{$month}}/{{$year}}</span>
                        </span>
                    </div>
                </div>
        
                <span class="dashboard-text171">
                    <span>Biểu đồ cấp số</span>
                </span>
                <div class="dashboard-frame625221">
                    <div class="dashboard-frame625222">
                        <img src="{{asset('playground_assets/rectangle34631172091-1crn-200h.png')}}"
                            alt="Rectangle34631172091" class="dashboard-rectangle3463117" />
                        <span class="dashboard-text173  ">
                            <span>
                                
                            {{$nb->dangcho + $nb->dasudung + $nb->boqua}}                    
                        
                        </span>
                        </span>
                        <div class="dashboard-group625207">
                            <div class="dashboard-frame624758">
                                <img src="{{asset('playground_assets/ellipse10i209-nbfl-200h.png')}}"
                                    alt="Ellipse10I209" class="dashboard-ellipse10" />
                                <div class="dashboard-icondasboard031">
                                    <div class="dashboard-group">
                                        <img src="{{asset('playground_assets/vectori209-jsoa.svg')}}" alt="VectorI209"
                                            class="dashboard-vector10" />
                                    </div>
                                </div>
                            </div>
                            <span class="dashboard-text175 chitiettieude ">
                                <span>
                                    <span>Số thứ tự đã cấp</span>
                                </span>
                            </span>
                        </div>
                        <div class="dashboard-group625213">
                            <div class="dashboard-group625211">
                                <div class="dashboard-group625212">
                                    <div class="dashboard-biarrowdownshort">
                                        <div class="dashboard-group01">
                                            <img src="{{asset('playground_assets/vector2091-5593q.svg')}}"
                                                alt="Vector2091" class="dashboard-vector11" />
                                        </div>
                                    </div>
                                    <span class="dashboard-text180">
                                        <span>32,41%</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard-frame625223">
                        <img src="{{asset('playground_assets/rectangle34631172091-qf-200h.png')}}"
                            alt="Rectangle34631172091" class="dashboard-rectangle34631171" />
                        <span class="dashboard-text182  ">
                        {{ $nb->dasudung }}  
                        </span>
                        <div class="dashboard-group6252071">
                            <div class="dashboard-frame624759">
                                <img src="{{asset('playground_assets/ellipse10i209-5bsm-200h.png')}}"
                                    alt="Ellipse10I209" class="dashboard-ellipse101" />
                                <div class="dashboard-icondasboard02">
                                    <div class="dashboard-group02">
                                        <img src="{{asset('playground_assets/vectori209-4lyi.svg')}}" alt="VectorI209"
                                            class="dashboard-vector12" />
                                        <img src="{{asset('playground_assets/vectori209-yo.svg')}}" alt="VectorI209"
                                            class="dashboard-vector13" />
                                    </div>
                                </div>
                            </div>
                            <span class="dashboard-text175 chitiettieude ">
                                <span>
                                    <span>Số thứ tự đã sử dụng</span>
                                </span>
                            </span>
                        </div>
                        <div class="dashboard-group6252131">
                            <div class="dashboard-group6252111">
                                <div class="dashboard-group6252121">
                                    <div class="dashboard-biarrowdownshort1">
                                        <div class="dashboard-group03">
                                            <img src="{{asset('playground_assets/vector2091-cvj9.svg')}}"
                                                alt="Vector2091" class="dashboard-vector14" />
                                        </div>
                                    </div>
                                    <span class="dashboard-text189">
                                        <span>32,41%</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard-frame625224">
                        <img src="{{asset('playground_assets/rectangle34631172091-w5p-200h.png')}}"
                            alt="Rectangle34631172091" class="dashboard-rectangle34631172" />
                        <span class="dashboard-text191  ">
                            <span>{{ $nb->dangcho }}  </span>
                        </span>
                        <div class="dashboard-group6252072">
                            <div class="dashboard-frame6247591">
                                <img src="{{asset('playground_assets/ellipse10i209-h2kfb-200h.png')}}"
                                    alt="Ellipse10I209" class="dashboard-ellipse102" />
                                <img src="{{asset('playground_assets/icondasboard05i209-u2t.svg')}}"
                                    alt="icondasboard05I209" class="dashboard-icondasboard05" />
                            </div>
                            <span class="dashboard-text175 chitiettieude ">
                                <span>
                                    <span>Số thứ tự đang chờ</span>
                                </span>
                            </span>
                        </div>
                        <div class="dashboard-group625214">
                            <div class="dashboard-group6252112">
                                <div class="dashboard-group6252122">
                                    <div class="dashboard-biarrowdownshort2">
                                        <div class="dashboard-group04">
                                            <img src="{{asset('playground_assets/vector2091-l908.svg')}}"
                                                alt="Vector2091" class="dashboard-vector15" />
                                        </div>
                                    </div>
                                    <span class="dashboard-text198">
                                        <span>56,41%</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard-frame625225">
                        <img src="{{asset('playground_assets/rectangle34631172091-6cua-200h.png')}}"
                            alt="Rectangle34631172091" class="dashboard-rectangle34631173" />
                        <span class="dashboard-text200  ">
                            <span>{{ $nb->boqua }}  </span>
                        </span>
                        <div class="dashboard-group6252073">
                            <div class="dashboard-frame6247592">
                                <img src="{{asset('playground_assets/ellipse10i209-uzt-200h.png')}}" alt="Ellipse10I209"
                                    class="dashboard-ellipse103" />
                                <div class="dashboard-icondasboard07">
                                    <div class="dashboard-group05">
                                        <img src="{{asset('playground_assets/vectori209-yxp9.svg')}}" alt="VectorI209"
                                            class="dashboard-vector16" />
                                        <img src="{{asset('playground_assets/vectori209-zlya.svg')}}" alt="VectorI209"
                                            class="dashboard-vector17" />
                                    </div>
                                </div>
                            </div>
                            <span class="dashboard-text175 chitiettieude ">
                                <span>
                                    <span>Số thứ tự đã bỏ qua</span>
                                </span>
                            </span>
                        </div>
                        <div class="dashboard-group6252132">
                            <div class="dashboard-group6252113">
                                <div class="dashboard-group6252123">
                                    <div class="dashboard-biarrowdownshort3">
                                        <div class="dashboard-group06">
                                            <img src="{{asset('playground_assets/vector2091-jx38.svg')}}"
                                                alt="Vector2091" class="dashboard-vector18" />
                                        </div>
                                    </div>
                                    <span class="dashboard-text207">
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
