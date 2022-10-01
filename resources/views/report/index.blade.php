@extends('layout.menubar')
@extends('layout.header')
@extends('layout.hello')
<title>Báo cáo</title>
<!DOCTYPE html>
  <body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div>
      <link href="{{asset('css/baocao.css')}}" rel="stylesheet" />

      <div class="">
      
        <div class="container-all">
        
          <div class="topbar-all">
            <div class="breadcrumbs">
              <div class="baocao-button">
                <span class="baocao-text  ">Báo cáo</span>
</div>
              <img
                src="{{asset('playground_assets/uanglerighti213-43f.svg');}}"
                alt="uanglerightI213"
                class="baocao-uangleright"
              />
              <a class="baocao-button1">
                <span class="baocao-text002  ">
                  <span>Lập báo cáo</span>
                </span>
</a>
            </div>
          </div>
          <div class="baocao-group311">
            <div class="baocao-datepicker">
              <div class="baocao-datepicker1">
              <input id="from_date"  type="date" data-date-inline-picker="true" class="baocao-text008  " />
                
              </div>
              <div class="baocao-datepicker2">
              <input id="to_date" type="date" data-date-inline-picker="true" class="baocao-text010  " />

            
              </div>
              <div class="baocao-vuesaxboldarrowright">
                <div class="baocao-vuesaxboldarrowright01">
                  <div class="baocao-arrowright">
                    <img
                      src="{{asset('playground_assets/vectori215-7mis.svg');}}"
                      alt="VectorI215"
                      class="baocao-vector22"
                    />
                  </div>
                </div>
              </div>
            </div>
            <span class="baocao-text012 chitiettieude ">
              <span>Chọn thời gian</span>
            </span>
          </div>

          <table class="table-index192">
              <tr class="baocao-frame624691 baocao-text014  ">
                <td>STT
                </td>
                <td>
                Tên dịch vụ
                </td>
                <td>
                Thời gian cấp
                </td>
                <td>Tình trạng
                </td>
                <td>
                Nguồn cấp
                </td>
                
</tr>
@foreach ($reports as $report)
<tr class="alldata">
<td>{{$report->stt}}</td>
<td>{{$report->tendichvu}}</td>
<td>{{$report->thoigiancap}}</td>
<td>
  @if ($report->trangthai == 0) 
  Đang chờ
  @elseif ($report->trangthai == 1)
  Đã sử dụng
  @else
  Bỏ qua
  @endif

</td>
<td>{{$report->nguoncap}}</td>
</tr>
@endforeach
<tbody class="searchdata" id="Content"></tbody  
</table>
              <div class="baocao-frame624710">
                <span class="baocao-text016  ">
                  <span>2010001</span>
                </span>
              </div>
              <div class="baocao-component1">
            <div class="baocao-vuesaxbolddocumentdownload">
              <div class="baocao-vuesaxbolddocumentdownload1">
                <div class="baocao-documentdownload">
                  <img src="{{asset('playground_assets/vectori215-3asj.svg')}}" alt="VectorI215" class="baocao-vector33">
                  <img src="{{asset('playground_assets/vectori215-copc.svg')}}" alt="VectorI215" class="baocao-vector34">
                </div>
              </div>
            </div>
            <a href="{{url('/report-export')}}" class="baocao-text124">Tải về</a>
          </div>
              <div class="pagination-all">
  {{$reports->links()}}
            </div>
        </div>
      </div>
    </div>
  </body>
</html>
