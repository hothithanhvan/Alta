@extends('layout.menubar')
@extends('layout.header')
@extends('layout.hello')
<title>Chi tiết thiết bị</title>
<link href="{{asset('css/thietbi.css')}}" rel="stylesheet" />

      <div class="chitietthietbi-container">
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
                class="chitietthietbi-uangleright1">
                <div class="chitietthietbi-button2">
                <span class="chitietthietbi-text06  ">
                  <span>Chi tiết thiết bị</span>
                </span>
</div>
            </div>

            
          </div>
          <div class="chitietthietbi-frame624726">
            <span class="tieude">
              <span>Thông tin thiết bị</span>
            </span>
            <div class="chitietthietbi-group625230">
                <div class="chitietthietbi-warningtext">
                  <span class="chitiettieude">
                    <span>Mã thiết bị:</span>
                  </span>
                </div>
              <span class="chitietthietbi-text16  ">
                <span>{{$device->mathietbi}}</span>
              </span>
            </div>
            <div class="chitietthietbi-group625231">
                <div class="chitietthietbi-warningtext1">
                <span class="chitiettieude">
                    <span>Loại thiết bị:</span>
                  </span>
                </div>
              <span class="chitietthietbi-text20  ">
                <span>{{$device->loaithietbi}}</span>
              </span>
            </div>
            <div class="chitietthietbi-group625229">
            <span class="chitiettieude">
                <span>Tên thiết bị:</span>
              </span>
              <span class="chitietthietbi-text24  ">
                <span>{{$device->tenthietbi}}</span>
              </span>
            </div>
            <div class="chitietthietbi-group625232">
            <span class="chitiettieude">
                <span>Tên đăng nhập:</span>
              </span>
              <span class="chitietthietbi-text28  ">
                <span>{{$device->tendn}}</span>
              </span>
            </div>
            <div class="chitietthietbi-group625228">
            <span class="chitiettieude">
                <span>Địa chỉ IP:</span>
              </span>
              <span class="chitietthietbi-text32  ">
                <span>{{$device->diachiIP}}</span>
              </span>
            </div>
            <div class="chitietthietbi-group625234">
            <span class="chitiettieude">
                <span>Dịch vụ sử dụng:</span>
              </span>
              <span class="chitietthietbi-text36  ">
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
            <div class="chitietthietbi-group625233">
            <span class="chitiettieude">
                <span>Mật khẩu:</span>
              </span>
              <span class="chitietthietbi-text40">{{$device->matkhau}}</span>
            </div>
          </div>

            
          <div class="chitietthietbi-component1">
            <div class="chitietthietbi-iconly-bold-edit-square">
              <div class="chitietthietbi-edit-square">
                <img
                  src="{{asset('playground_assets/editsquarei301-gsqr.svg');}}"
                  alt="EditSquareI301"
                  class="chitietthietbi-edit-square1"
                />
              </div>
            </div>
            <a href="{{ route('device.edit',$device->id) }}" class="chitietthietbi-text56">Cập nhật thiết bị</a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
