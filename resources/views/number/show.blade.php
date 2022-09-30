@extends('layout.menubar')
@extends('layout.header')
@extends('layout.hello')
<title>Chi tiết dịch vụ</title>
    <div>
      <link href="{{asset('css/capso.css');}}" rel="stylesheet" />

      <div class="chitietcapso-container">
        <div class="container-all">
          <span class="list-index">
            <span>Quản lý cấp số</span>
          </span>
          <div class="topbar-all">
            <div class="breadcrumbs">
            @include('number.breadscrum')
              <img
                alt="uanglerightI844"
                src="{{asset('playground_assets/uanglerighti844-5wqb.svg');}}"
                class="chitietcapso-uangleright1"
              />
              <div class="chitietcapso-button2">
                <span class="chitietcapso-text06  ">
                  <span>Chi tiết</span>
                </span>
</div>
            </div>

            
          </div>
          <div class="chitietcapso-frame624726">
            <span class="tieude">
              <span>Thông tin cấp số</span>
            </span>
            <div class="chitietcapso-group625226">
              <div class="chitietcapso-group625219">
                <span class="chitiettieude">
                  <span>Tên dịch vụ:</span>
                </span>
                <span class="chitietcapso-text16  ">
                  <span>{{$number->tendichvu}}</span>
                </span>
              </div>
              <div class="chitietcapso-group625221">
              <span class="chitiettieude">
                  <span>Thời gian cấp:</span>
                </span>
                <span class="chitietcapso-text20  ">
                  <span>{{$number->thoigiancap}}</span>
                </span>
              </div>
              <div class="chitietcapso-group625215">
              <span class="chitiettieude">
                  <span>Hạn sử dụng:</span>
                </span>
                <span class="chitietcapso-text24  ">
                  <span>{{$number->hansd}}</span>
                </span>
              </div>
              <div class="chitietcapso-group625218">
              <span class="chitiettieude">
                  <span>Họ tên:</span>
                </span>
                <span class="chitietcapso-text28  ">
                  <span>{{$number->hoten}}</span>
                </span>
              </div>
              <div class="chitietcapso-group625220">
               <span class="chitiettieude">
                  <span>Số thứ tự:</span>
                </span>
                <span class="chitietcapso-text32  ">
                  <span>{{$number->stt}}</span>
                </span>
              </div>
              <div class="chitietcapso-group625224">
              <span class="chitiettieude">
                  <span>Số điện thoại:</span>
                </span>
                <span class="chitietcapso-text36  ">
                  <span>{{$number->sdt}}</span>
                </span>
              </div>
              <div class="chitietcapso-group625225">
              <span class="chitiettieude">
                  <span>Địa chỉ Email:</span>
                </span>
                <span class="chitietcapso-text40  ">
                  <span>{{$number->email}}</span>
                </span>
              </div>
              <div class="chitietcapso-group625222">
              <span class="chitiettieude">
                <span >Nguồn cấp
                </span>
                <span class="chitietcapso-text44  ">
                  <span>{{$number->nguoncap}}</span>
                </span>
              </div>
              <div class="chitietcapso-group625223">
              <span class="chitiettieude">
                  <span>Trạng thái:</span>
                </span>
                <div class="chitietcapso-statusdate">
                  
                      @if ($number->trangthai == 0)
                      <img
                    alt="Ellipse1I844"
                    src="{{asset('playground_assets/chấm xanh dương.svg');}}"
                    class="chitietcapso-ellipse1"
                  />
                  <span class="chitietcapso-text48  ">Đang chờ<span>
                      
                      @elseif ($number->trangthai == 1)
                      <img
                    alt="Ellipse1I844"
                    src="{{asset('playground_assets/chấm xám.svg');}}"
                    class="chitietcapso-ellipse1"
                  />
                  <span class="chitietcapso-text48  ">Đã sử dụng<span>
                      @else ($number->trangthai == 2)
                      <img
                    alt="Ellipse1I844"
                    src="{{asset('playground_assets/chấm đỏ.svg');}}"
                    class="chitietcapso-ellipse1"
                  />
                  <span class="chitietcapso-text48  ">Bỏ qua <span>
                      @endif
                    </span>
                  </span>
                </div>
              </div>
            </div>
          </div>
 
          <div class="chitietcapso-component1">
            <div class="chitietcapso-vuesaxboldbacksquare">
              <div class="chitietcapso-vuesaxboldbacksquare1">
                <div class="chitietcapso-backsquare">
                  <img
                    alt="VectorI844"
                    src="{{asset('playground_assets/vectori844-kb09.svg');}}"
                    class="chitietcapso-vector23"
                  />
                </div>
              </div>
            </div>
            <a href="{{route('number.index')}}" class="chitietcapso-text64">Quay lại</a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
