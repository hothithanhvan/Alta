@extends('layout.menubar')
@extends('layout.header')
@extends('layout.hello')
@extends('layout.alert')
<title>Sửa thiết bị</title>
<body>

    <div>
        <link href="{{asset('css/thietbi.css')}}" rel="stylesheet" />

        <div class="capnhatthietbi-container">
            <div class="container-all">
                <span class="list-index">
                    <span>Quản lý thiết bị</span>
                </span>
                <div class="topbar-all">
                    <div class="breadcrumbs">
                    @include('device.breadscrum')
                        <img src="{{asset('playground_assets/uanglerighti334-z4uk.svg');}}" alt="uanglerightI334"
                            class="capnhatthietbi-uangleright1" />
                            <div  class="capnhatthietbi-button02">
                            <span class="capnhatthietbi-text06  ">
                                <span>Cập nhật thiết bị</span>
                            </span>
</div>
                    </div>

                   
                </div>
                <form action="{{ route('device.update',$device->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="capnhatthietbi-frame624726">
                        <span class="tieude">
                            <span>Thông tin thiết bị</span>
                        </span>
                        @error('mathietbi')
  <div class="alert1">{{$message}}

  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 

</div>
@enderror 
                        <div class="capnhatthietbi-frame624731">
                            <div class="capnhatthietbi-warningtext">
                                <span class="chitiettieude">
                                    <span>Mã thiết bị:</span>
                                </span>
                                <img src="{{asset('playground_assets/vectori334-448c.svg');}}" alt="VectorI334"
                                    class="capnhatthietbi-vector02" />
                            </div>
                            <input type="text" name="mathietbi" value="{{$device->mathietbi}}"
                                class="capnhatthietbi-input" />
                        </div>
                        <div class="capnhatthietbi-frame624732">
                            <div class="capnhatthietbi-warningtext1">
                            <span class="chitiettieude">
                                    <span>Tên thiết bị:</span>
                                </span>
                                <img src="{{asset('playground_assets/vectori334-ghbp.svg');}}" alt="VectorI334"
                                    class="capnhatthietbi-vector03" />
                            </div>
                            <input type="text" name="tenthietbi" value="{{$device->tenthietbi}}"
                                class="capnhatthietbi-input1" />
                        </div>
                        <div class="capnhatthietbi-frame624733">
                            <div class="capnhatthietbi-warningtext2">
                            <span class="chitiettieude">
                                    <span>Địa chỉ IP:</span>
                                </span>
                                <img src="{{asset('playground_assets/vectori334-stg9.svg');}}" alt="VectorI334"
                                    class="capnhatthietbi-vector04" />
                            </div>
                            <input type="text" name="diachiIP" value="{{$device->diachiIP}}"
                                class="capnhatthietbi-input2" />
                        </div>
                        <div class="capnhatthietbi-frame624734">
                            <div class="capnhatthietbi-warningtext3">
                            <span class="chitiettieude">
                                    <span>Loại thiết bị:</span>
                                </span>
                                <img src="{{asset('playground_assets/vectori334-bil.svg');}}" alt="VectorI334"
                                    class="capnhatthietbi-vector05" />
                                    
                            </div>
                            <select class="themthietbi-input3 themthietbi-text22" name="loaithietbi" >
                            <option value="Kiosk">Kiosk</option>
                                <option value="Display counter">Display counter</option>
                                </select>
                        </div>
                        <div class="capnhatthietbi-frame624735">
                            <div class="capnhatthietbi-warningtext4">
                            <span class="chitiettieude">
                                    <span>Tên đăng nhập:</span>
                                </span>
                                <img src="{{asset('playground_assets/vectori334-ex7d.svg');}}" alt="VectorI334"
                                    class="capnhatthietbi-vector06" />
                            </div>
                            <input type="text" name="tendn" value="{{$device->tendn}}" class="capnhatthietbi-input3" />
                        </div>
                        <div class="capnhatthietbi-frame624736">
                            <div class="capnhatthietbi-warningtext5">
                            <span class="chitiettieude">
                                    <span>Mật khẩu:</span>
                                </span>
                                <img src="{{asset('playground_assets/vectori334-12dm.svg');}}" alt="VectorI334"
                                    class="capnhatthietbi-vector07" />
                            </div>
                            <input type="text" name="matkhau" value="{{$device->matkhau}}" class="capnhatthietbi-input4" />
                        </div>
                        <div class="capnhatthietbi-frame6247331">
                            <div class="capnhatthietbi-warningtext6">
                            <span class="chitiettieude">
                                    <span>Dịch vụ sử dụng:</span>
                                </span>
                                @foreach($b as $dvsd)
                                <?php $i = 0; ?>
                                @foreach($a as $c)
                                @if ($c->tendichvu == $dvsd->tendichvu)
                                <input checked="checked" type="checkbox" name="id{{$dvsd->id}}"
                                    value="{{$dvsd->tendichvu}}" />
                                <label for="{{$dvsd->id}}"> {{$c->tendichvu}}</label>
                                <?php $i++; ?>
                                @endif
                                @endforeach
                                @if ($i == 0)
                                <input type="checkbox" name="id{{$dvsd->id}}" value="{{$dvsd->tendichvu}}" />
                                <label for="{{$dvsd->id}}"> {{$dvsd->tendichvu}}</label>
                                @endif
                                @endforeach

                            </div>
                            <div class="capnhatthietbi-frame624744">
                                <span class="capnhatthietbi-text42  ">
                                    <span>Là trường thông tin bắt buộc</span>
                                </span>
                                <img src="{{asset('playground_assets/vector3349-f56a.svg');}}" alt="Vector3349"
                                    class="capnhatthietbi-vector09" />
                            </div>
                        </div>
                    </div>
                            <div class="capnhatthietbi-frame624750">
                                <button type="submit" class="capnhatthietbi-button09 capnhatthietbi-text58">
                                    Cập nhật
                                </button>
                                <<a  href="{{route('device.index')}}" class="cancel-button capnhatthietbi-text60">
                                    Hủy bỏ
</a>
                            </div>
                </form>
            </div>
        </div>
</body>

</html>
