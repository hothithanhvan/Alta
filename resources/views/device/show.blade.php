@extends('layout.menubar')
@extends('layout.header')
@extends('layout.hello')
<link href="{{asset('css/thietbi.css')}}" rel="stylesheet" />

      <div class="thngtinchitit-container">
        <div class="container-all">
          <span class="list-index">
            <span>Quản lý thiết bị</span>
          </span>
          <div class="topbar-all">
            <div class="breadcrumbs">
            @include('device.breadscrum')
            <img
                src="{{asset('playground_assets/uanglerighti334-4knm.svg');}}"
                alt="uanglerightI334"
                class="thngtinchitit-uangleright1">
                <div class="thngtinchitit-button2">
                <span class="thngtinchitit-text06  ">
                  <span>Chi tiết thiết bị</span>
                </span>
</div>
            </div>

            <div class="thngtinchitit-frame271">
              <div class="thngtinchitit-vuesaxboldnotification">
                <div class="thngtinchitit-vuesaxboldnotification1">
                  <div class="thngtinchitit-notification">
                    <img
                      src="{{asset('playground_assets/vectori334-weql.svg');}}"
                      alt="VectorI334"
                      class="thngtinchitit-vector"
                    />
                    <img
                      src="{{asset('playground_assets/vectori334-444f.svg');}}"
                      alt="VectorI334"
                      class="thngtinchitit-vector01"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="thngtinchitit-frame624726">
            <span class="tieude">
              <span>Thông tin thiết bị</span>
            </span>
            <div class="thngtinchitit-group625230">
                <div class="thngtinchitit-warningtext">
                  <span class="chitiettieude">
                    <span>Mã thiết bị:</span>
                  </span>
                </div>
              <span class="thngtinchitit-text16  ">
                <span>{{$device->mathietbi}}</span>
              </span>
            </div>
            <div class="thngtinchitit-group625231">
                <div class="thngtinchitit-warningtext1">
                <span class="chitiettieude">
                    <span>Loại thiết bị:</span>
                  </span>
                </div>
              <span class="thngtinchitit-text20  ">
                <span>?</span>
              </span>
            </div>
            <div class="thngtinchitit-group625229">
            <span class="chitiettieude">
                <span>Tên thiết bị:</span>
              </span>
              <span class="thngtinchitit-text24  ">
                <span>{{$device->tenthietbi}}</span>
              </span>
            </div>
            <div class="thngtinchitit-group625232">
            <span class="chitiettieude">
                <span>Tên đăng nhập:</span>
              </span>
              <span class="thngtinchitit-text28  ">
                <span>{{$device->tendn}}</span>
              </span>
            </div>
            <div class="thngtinchitit-group625228">
            <span class="chitiettieude">
                <span>Địa chỉ IP:</span>
              </span>
              <span class="thngtinchitit-text32  ">
                <span>{{$device->diachiIP}}</span>
              </span>
            </div>
            <div class="thngtinchitit-group625234">
            <span class="chitiettieude">
                <span>Dịch vụ sử dụng:</span>
              </span>
              <span class="thngtinchitit-text36  ">
                <span>
                @foreach($b as $dvsd)
                                @foreach($a as $c)
                                @if ($c->tendichvu == $dvsd->tendichvu)                
                                    {{$dvsd->tendichvu}},
                                @endif
                                @endforeach
                      
                                @endforeach
                </span>
              </span>
            </div>
            <div class="thngtinchitit-group625233">
            <span class="chitiettieude">
                <span>Mật khẩu:</span>
              </span>
              <span class="thngtinchitit-text40">{{$device->password}}</span>
            </div>
          </div>

            
          <div class="thngtinchitit-component1">
            <div class="thngtinchitit-iconly-bold-edit-square">
              <div class="thngtinchitit-edit-square">
                <img
                  src="{{asset('playground_assets/editsquarei301-gsqr.svg');}}"
                  alt="EditSquareI301"
                  class="thngtinchitit-edit-square1"
                />
              </div>
            </div>
            <a href="{{ route('device.edit',$device->id) }}" class="thngtinchitit-text56">Cập nhật thiết bị</a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
