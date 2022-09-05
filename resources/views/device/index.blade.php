@extends('layout.menubar')
@extends('layout.header')
@section('content')
<body>
  <div>
    <link href="{{asset('css/thietbi.css');}}" rel="stylesheet" />

    <div class="qunlthitb-container">
      <div class="qunlthitb-qunlthitb">
        <span class="qunlthitb-text 2424Bold">
          <span>Danh sách thiết bị</span>
        </span>
        <table class="qunlthitb-frame624720 table qunlthitb-text002 1616Bold">
          <tr class="qunlthitb-frame624691">
            <td >Mã thiết bị</td>
            <td >Tên thiết bị</td>
            <td >Địa chỉ IP</td>
            <td >Trạng thái hoạt động</td>
            <td >Trạng thái kết nối</td>
            <td >Dịch vụ sử dụng</td>
            <td >          </td>
            <td >          </td>
          </tr>
          @foreach ($devices as $device)
          <tr>
            <td class = "qunlthitb-text159">{{ $device->mathietbi }}</td>
            <td class = "qunlthitb-text159">{{ $device->tenthietbi }}</td>
            <td class = "qunlthitb-text159">{{ $device->diachiIP }}</td>
            <td class = "qunlthitb-text159">
              @if ($device->trangthaihoatdong == 0)

              @else

              @endif
            </td>
            <td class = "qunlthitb-text159">{{ $device->trangthaiketnoi }}</td>
            <td class = "qunlthitb-text159">{{ $device->dichvusudung }}</td>
            <td class = "qunlthitb-text158">
                <form>
                <a href="{{ route('device.show',$device->id) }}">Chi tiet</a>
                </form>
            </td>
            <td class = "qunlthitb-text158">
                <div>
            <a href="{{ route('device.edit',$device->id) }}">Cap nhat</a>
                </div>
            </td>
          </tr>
          @endforeach
        </table>

      </div>
    </div>

    <div class="qunlthitb-group319">
    <span class="qunlthitb-text178 1616Semi">
        <span>Trạng thái hoạt động</span>
      </span>
      <div class="qunlthitb-dropdown">
          <select class="qunlthitb-text176 1616Reg" name="ketnoi" id="ketnoi">
          <option value="tatca">Tất cả</option>
          <option value="ngunghd">Ngưng hoạt động</option>
          <option value="hd">Hoạt động</option>
          </select>
      </div>
    </div>
    <div class="qunlthitb-group320">
    <span class="qunlthitb-text182 1616Semi">
        <span>Trạng thái kết nối</span>
      </span>
      <div class="qunlthitb-dropdown1">
        <select class="qunlthitb-text176 1616Reg" name="ketnoi" id="ketnoi">
          <option value="tatca">Tất cả</option>
          <option value="ketnoi">Kết nối</option>
          <option value="matkn">Mất kết nối</option>
          </select>
      </div>
      
    </div>
    
    <div class="qunlthitb-topbar">
      <div class="qunlthitb-breadcrumbs">
        <button class="qunlthitb-button">
          <span class="qunlthitb-text193 2020Bold">
            <span>Thiết bị</span>
          </span>
        </button>
        <img src="{{asset('playground_assets/uanglerighti252-2vcr.svg');}}" alt="uanglerightI252"
          class="qunlthitb-uangleright" />
        <button class="qunlthitb-button1">
          <span class="qunlthitb-text195 2020Bold">
            <span>Danh sách thiết bị</span>
          </span>
        </button>
      </div>
      <div class="qunlthitb-frame625226">
        <div class="qunlthitb-unsplash-fyl8s-m-c2j2q"></div>
        <div class="qunlthitb-group296">
          <span class="qunlthitb-text197 1212Reg">
            <span>Xin chào</span>
          </span>
          <span class="qunlthitb-text199 1616Bold">
            <span>Lê Quỳnh Ái Vân</span>
          </span>
        </div>
      </div>
      <div class="qunlthitb-frame271">
        <div class="qunlthitb-vuesaxboldnotification">
          <div class="qunlthitb-vuesaxboldnotification1">
            <div class="qunlthitb-notification">
              <img src="{{asset('playground_assets/vectori252-04yc.svg');}}" alt="VectorI252" class="qunlthitb-vector" />
              <img src="{{asset('playground_assets/vectori252-lvr.svg');}}" alt="VectorI252" class="qunlthitb-vector01" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="qunlthitb-component1">
      <div class="qunlthitb-vuesaxboldaddsquare">
        <div class="qunlthitb-vuesaxboldaddsquare1">
          <div class="qunlthitb-addsquare">
            <img src="{{asset('playground_assets/vectori305-229t.svg');}}" alt="VectorI305" class="qunlthitb-vector02" />
          </div>
        </div>
      </div>
        <a class="qunlthitb-text201" href="{{ route('device.create') }}"> Thêm thiết bị</a>
    </div>
    <div class="qunlthitb-group318">
      <div class="qunlthitb-input">
        <form action="" method="get" >
        <input type="text" class="qunlthitb-text220" id="key" 
        name = "key" placeholder ="Nhập từ khóa">
        <button type="submit">
         <!-- <img src="{{asset('playground_assets/fisearchi218-d31.svg');}}" alt="fisearchI218" class="qunlthitb-fisearch" /> -->
        </button>
        </form>
      </div>
      <span class="qunlthitb-text222 1616Semi"><span>Từ khoá</span></span>
      
    </div>        
  </div>
  </div>
  <div class="qunlthitb-frame105">
  {{ $devices->links() }}

        </div> 
  </div>
</body>
@endsection
