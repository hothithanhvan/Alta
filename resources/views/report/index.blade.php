@extends('layout.menubar')
@extends('layout.header')
@extends('layout.hello')
<!DOCTYPE html>
  <body>
    <div>
      <link href="{{asset('css/baocao.css')}}" rel="stylesheet" />

      <div class="qunlboco-container">
        <div class="qunlboco-qunlboco">
          <div class="qunlboco-topbar">
            <div class="qunlboco-breadcrumbs">
              <button class="qunlboco-button">
                <span class="qunlboco-text 2020Bold"><span>Báo cáo</span></span>
              </button>
              <img
                src="{{asset('playground_assets/uanglerighti213-43f.svg');}}"
                alt="uanglerightI213"
                class="qunlboco-uangleright"
              />
              <button class="qunlboco-button1">
                <span class="qunlboco-text002 2020Bold">
                  <span>Lập báo cáo</span>
                </span>
              </button>
            </div>

            <div class="qunlboco-frame271">
              <div class="qunlboco-vuesaxboldnotification">
                <div class="qunlboco-vuesaxboldnotification1">
                  <div class="qunlboco-notification">
                    <img
                      src="{{asset('playground_assets/vectori213-epmp.svg');}}"
                      alt="VectorI213"
                      class="qunlboco-vector"
                    />
                    <img
                      src="{{asset('playground_assets/vectori213-5xu6.svg');}}"
                      alt="VectorI213"
                      class="qunlboco-vector01"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="qunlboco-group311">
            <div class="qunlboco-datepicker">
              <div class="qunlboco-datepicker1">
              <input type="date" data-date-inline-picker="true" class="qunlboco-text008 1616Reg" />
                
              </div>
              <div class="qunlboco-datepicker2">
              <input type="date" data-date-inline-picker="true" class="qunlboco-text010 1616Reg" />

            
              </div>
              <div class="qunlboco-vuesaxboldarrowright">
                <div class="qunlboco-vuesaxboldarrowright01">
                  <div class="qunlboco-arrowright">
                    <img
                      src="{{asset('playground_assets/vectori215-7mis.svg');}}"
                      alt="VectorI215"
                      class="qunlboco-vector22"
                    />
                  </div>
                </div>
              </div>
            </div>
            <span class="qunlboco-text012 1616Semi">
              <span>Chọn thời gian</span>
            </span>
          </div>
          <table class="qunlboco-frame624720">
              <tr class="qunlboco-frame624691 qunlboco-text014 1616Bold">
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
              <div class="qunlboco-frame624710">
                <span class="qunlboco-text016 1414Reg">
                  <span>2010001</span>
                </span>
              </div>
              
        </div>
      </div>
    </div>
  </body>
</html>