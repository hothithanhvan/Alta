@extends('layout.menubar')
@extends('layout.header')
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
            <div class="qunlboco-frame625226">
              <div class="qunlboco-unsplash-fyl8s-m-c2j2q"></div>
              <div class="qunlboco-group296">
                <span class="qunlboco-text004 1212Reg">
                  <span>Xin chào</span>
                </span>
                <span class="qunlboco-text006 1616Bold">
                  <span>Lê Quỳnh Ái Vân</span>
                </span>
              </div>
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
                <td>STT</td>
                <td>Tên dịch vụ</td>
                <td>Thời gian cấp</td>
                <td>Tình trạng</td>
                <td>Nguồn cấp</td>
                
</tr>
@foreach ($reports as $report)
<tr>
<td>{{$report->stt}}</td>
<td>{{$report->tendichvu}}</td>
<td>{{$report->thoigiancap}}</td>
<td>{{$report->trangthai}}</td>
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
