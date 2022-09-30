@extends('layout.menubar')
@extends('layout.header')
@extends('layout.hello')
@extends('layout.alert')
<title>Thêm thiết bị</title>
<body>
    <div>
        <link href="{{asset('css/thietbi.css');}}" rel="stylesheet" />

        <div class="themthietbi-container">
            <div class="container-all">
            
                <span class="list-index">
                    <span>Quản lý thiết bị</span>
                </span>
                <div class="topbar-all">
                    <div class="breadcrumbs">
                    @include('device.breadscrum')
                        <img src="{{asset('playground_assets/uanglerighti333-i2bo.svg');}}" alt="uanglerightI333"
                            class="themthietbi-uangleright1" />

                            <span class="themthietbi-button2 themthietbi-text06  ">
                                <span>Thêm thiết bị</span>
                            </span>

                    </div>
 
                    
                </div>


                <form action="{{ route('device.store') }}" method="POST">
                    @csrf
                    <div class="themthietbi-frame624726">
                        <span class="tieude">
                            <span>Thông tin thiết bị</span>
                            
  @error('mathietbi')
  <div class="alert1">{{$message}}

  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 

</div>
@enderror 

                        </span>
                        <div class="themthietbi-frame624731">
                            <div class="themthietbi-warningtext">
                                <span class="chitiettieude">
                                    <span>Mã thiết bị:</span>
                                </span>
                                <img src="{{asset('playground_assets/vectori333-9lkd.svg');}}" alt="VectorI333"
                                    class="themthietbi-vector02" />
                                </div>
                                
                                <input type="text" name="mathietbi" placeholder="Nhập mã thiết bị" class="themthietbi-input" />
                               
                        </div>
                        <div class="themthietbi-frame624732">
                            <div class="themthietbi-warningtext1">
                            <span class="chitiettieude">
                                    <span>Tên thiết bị:</span>
                                </span>
                                <img src="{{asset('playground_assets/vectori334-bb5l.svg');}}" alt="VectorI334"
                                    class="themthietbi-vector03" />
                            </div>
                            <input type="text" name="tenthietbi" placeholder="Nhập tên thiết bị"
                                class="themthietbi-input1" />
                        </div>
                        <div class="themthietbi-frame624733">
                            <div class="themthietbi-warningtext2">
                            <span class="chitiettieude">
                                    <span>Địa chỉ IP:</span>
                                </span>
                                <img src="{{asset('playground_assets/vectori334-gw4j.svg');}}" alt="VectorI334"
                                    class="themthietbi-vector04" />
                            </div>
                            <input type="text" name="diachiIP" placeholder="Nhập địa chỉ IP" class="themthietbi-input2" />
                        </div>
                        <div class="themthietbi-frame624734">
                            <div class="themthietbi-warningtext3">
                            <span class="chitiettieude">
                                    <span>Loại thiết bị:</span>
                                </span>
                                <img src="{{asset('playground_assets/vectori334-y6qk.svg');}}" alt="VectorI334"
                                    class="themthietbi-vector05" />
                            </div>
                                <select name ="loaithietbi" class="themthietbi-input3 themthietbi-text22  " >
                                <option value="Kiosk">Kiosk</option>
                                <option value="Display counter">Display counter</option>
                                </select>
                        </div>
                        <div class="themthietbi-frame624735">
                            <div class="themthietbi-warningtext4">
                            <span class="chitiettieude">
                                    <span>Tên đăng nhập:</span>
                                </span>
                                <img src="{{asset('playground_assets/vectori334-vjux.svg');}}" alt="VectorI334"
                                    class="themthietbi-vector06" />
                            </div>
                            <input type="text" name="tendn" placeholder="Nhập tài khoản" class="themthietbi-input3" />
                        </div>
                        <div class="themthietbi-frame624736">
                            <div class="themthietbi-warningtext5">
                            <span class="chitiettieude">
                                    <span>Mật khẩu:</span>
                                </span>
                                <img src="{{asset('playground_assets/vectori334-3kvm.svg');}}" alt="VectorI334"
                                    class="themthietbi-vector07" />
                            </div>
                            <input type="text" name="matkhau" placeholder="Nhập mật khẩu" class="themthietbi-input4" />
                        </div>
                        <div class="themthietbi-frame6247331">
                            <div class="themthietbi-warningtext6">
                            <span class="chitiettieude">
                                    <span>Dịch vụ sử dụng:</span>
                                </span>
                                <img src="{{asset('playground_assets/vectori334-wl3c.svg');}}" alt="VectorI334"
                                    class="themthietbi-vector08" />
                            </div>
                            <div class="themthietbi-input5">
                            @foreach($services as $dvsd)
                            <input type="checkbox" name="id{{$dvsd->id}}" value="{{$dvsd->tendichvu}}"
                            placeholder="Nhập dịch vụ sử dụng"  />
                            <label for="{{$dvsd->id}}"> {{$dvsd->tendichvu}}</label>
                            <span></span>
                            @endforeach

                        </div>
                        </div>
                        <div class="themthietbi-frame624744">
                            <span class="themthietbi-text30  ">
                                <span>Là trường thông tin bắt buộc</span>
                            </span>
                            <img src="{{asset('playground_assets/vector3347-71h.svg');}}" alt="Vector3347"
                                class="themthietbi-vector09" />
                        </div>
                    </div>
                    <div class="themthietbi-frame624737 themthietbi-text46">
                        <button type="submit" class="themthietbi-button3">
                            Thêm thiết bị
                        </button>
                        <a  href="{{route('device.index')}}" class="themthietbi-button4">
                            <span class="themthietbi-text48"><span>Hủy bỏ</span></span>
</a>
                    </div>
            </div>

            </form>

        </div>
    </div>
</body>

</html>
