@extends('layout.menubar')
@extends('layout.header')
@extends('layout.hello')
<!DOCTYPE html>
  <body>
    <div>
      <link href="{{asset('css/baocao.css')}}" rel="stylesheet" />

      <div class="baocao-container">
        <div class="baocao-baocao">
          <div class="baocao-topbar">
            <div class="baocao-breadcrumbs">
              <button class="baocao-button">
                <span class="baocao-text 2020Bold"><span>Báo cáo</span></span>
              </button>
              <img
                src="{{asset('playground_assets/uanglerighti213-43f.svg');}}"
                alt="uanglerightI213"
                class="baocao-uangleright"
              />
              <button class="baocao-button1">
                <span class="baocao-text002 2020Bold">
                  <span>Lập báo cáo</span>
                </span>
              </button>
            </div>

            <div class="baocao-frame271">
              <div class="baocao-vuesaxboldnotification">
                <div class="baocao-vuesaxboldnotification1">
                  <div class="baocao-notification">
                    <img
                      src="{{asset('playground_assets/vectori213-epmp.svg');}}"
                      alt="VectorI213"
                      class="baocao-vector"
                    />
                    <img
                      src="{{asset('playground_assets/vectori213-5xu6.svg');}}"
                      alt="VectorI213"
                      class="baocao-vector01"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="baocao-group311">
            <div class="baocao-datepicker">
              <div class="baocao-datepicker1">
              <input type="date" data-date-inline-picker="true" class="baocao-text008 1616Reg" />
                
              </div>
              <div class="baocao-datepicker2">
              <input type="date" data-date-inline-picker="true" class="baocao-text010 1616Reg" />

            
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
            <span class="baocao-text012 1616Semi">
              <span>Chọn thời gian</span>
            </span>
          </div>
          <table class="baocao-frame624720">
              <tr class="baocao-frame624691 baocao-text014 1616Bold">
                <td>
                  <select >
                  <option selected="selected" disabled="disabled" value="0">STT</option>
                    @foreach ($reports as $report)
                    <option value="{{$report->stt}}">{{$report->stt}}</option>
                    @endforeach
                  </select>
                </td>
                <td>
                <select >
                <option selected="selected" disabled="disabled" value="0">Tên dịch vụ</option>
                    @foreach ($reports as $report)
                    <option value="{{$report->tendichvu}}">{{$report->tendichvu}}</option>
                    @endforeach
                  </select>
                </td>
                <td>
                <select >
                <option selected="selected" disabled="disabled" value="0">Thời gian cấp</option>
                    @foreach ($reports as $report)
                    <option value="{{$report->thoigiancap}}">{{$report->thoigiancap}}</option>
                    @endforeach
                  </select>
                </td>
                <td>
                <select >
                <option selected="selected" disabled="disabled">Tình trạng</option>
                    <option value="0">Đang chờ</option>
                    <option value="1">Đã sử dụng</option>
                    <option value="2">Bỏ qua</option>
                  </select>
                </td>
                <td>
                <select >
                <option selected="selected" disabled="disabled" value="0">Nguồn cấp</option>
                    @foreach ($reports as $report)
                    <option value="{{$report->nguoncap}}">{{$report->nguoncap}}</option>
                    @endforeach
                  </select>
                </td>
                
</tr>
@foreach ($reports as $report)
<tr>
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
</table>
              <div class="baocao-frame624710">
                <span class="baocao-text016 1414Reg">
                  <span>2010001</span>
                </span>
              </div>
              
        </div>
      </div>
    </div>
  </body>
</html>