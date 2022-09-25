@extends('layout.menubar')
@extends('layout.header')
@extends('layout.hello')

<body>
    <div>
        <link href="{{asset('css/thietbi.css');}}" rel="stylesheet" />

        <div class="thmthitb-container">
            <div class="container-all">
                <span class="list-index">
                    <span>Quản lý thiết bị</span>
                </span>
                <div class="topbar-all">
                    <div class="breadcrumbs">
                    @include('device.breadscrum')
                        <img src="{{asset('playground_assets/uanglerighti333-i2bo.svg');}}" alt="uanglerightI333"
                            class="thmthitb-uangleright1" />

                            <span class="thmthitb-button2 thmthitb-text06  ">
                                <span>Thêm thiết bị</span>
                            </span>

                    </div>
 
                    <div class="thmthitb-frame271">
                        <div class="thmthitb-vuesaxboldnotification">
                            <div class="thmthitb-vuesaxboldnotification1">
                                <div class="thmthitb-notification">
                                    <img src="{{asset('playground_assets/vectori333-alb.svg');}}" alt="VectorI333"
                                        class="thmthitb-vector" />
                                    <img src="{{asset('playground_assets/vectori333-x2ll.svg');}}" alt="VectorI333"
                                        class="thmthitb-vector01" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <form action="{{ route('device.store') }}" method="POST">
                    @csrf
                    <div class="thmthitb-frame624726">
                        <span class="tieude">
                            <span>Thông tin thiết bị</span>
                        </span>
                        <div class="thmthitb-frame624731">
                            <div class="thmthitb-warningtext">
                                <span class="chitiettieude">
                                    <span>Mã thiết bị:</span>
                                </span>
                                <img src="{{asset('playground_assets/vectori333-9lkd.svg');}}" alt="VectorI333"
                                    class="thmthitb-vector02" />
                            </div>
                            <input type="text" name="mathietbi" placeholder="Nhập mã thiết bị" class="thmthitb-input" />
                        </div>
                        <div class="thmthitb-frame624732">
                            <div class="thmthitb-warningtext1">
                            <span class="chitiettieude">
                                    <span>Tên thiết bị:</span>
                                </span>
                                <img src="{{asset('playground_assets/vectori334-bb5l.svg');}}" alt="VectorI334"
                                    class="thmthitb-vector03" />
                            </div>
                            <input type="text" name="tenthietbi" placeholder="Nhập tên thiết bị"
                                class="thmthitb-input1" />
                        </div>
                        <div class="thmthitb-frame624733">
                            <div class="thmthitb-warningtext2">
                            <span class="chitiettieude">
                                    <span>Địa chỉ IP:</span>
                                </span>
                                <img src="{{asset('playground_assets/vectori334-gw4j.svg');}}" alt="VectorI334"
                                    class="thmthitb-vector04" />
                            </div>
                            <input type="text" name="diachiIP" placeholder="Nhập địa chỉ IP" class="thmthitb-input2" />
                        </div>
                        <div class="thmthitb-frame624734">
                            <div class="thmthitb-warningtext3">
                            <span class="chitiettieude">
                                    <span>Loại thiết bị:</span>
                                </span>
                                <img src="{{asset('playground_assets/vectori334-y6qk.svg');}}" alt="VectorI334"
                                    class="thmthitb-vector05" />
                            </div>
                                <select class="thmthitb-input3 thmthitb-text22  " >
                                <option value="1">1</option>
                                <option value="2">2</option>
                                </select>
                        </div>
                        <div class="thmthitb-frame624735">
                            <div class="thmthitb-warningtext4">
                            <span class="chitiettieude">
                                    <span>Tên đăng nhập:</span>
                                </span>
                                <img src="{{asset('playground_assets/vectori334-vjux.svg');}}" alt="VectorI334"
                                    class="thmthitb-vector06" />
                            </div>
                            <input type="text" placeholder="Nhập tài khoản" class="thmthitb-input3" />
                        </div>
                        <div class="thmthitb-frame624736">
                            <div class="thmthitb-warningtext5">
                            <span class="chitiettieude">
                                    <span>Mật khẩu:</span>
                                </span>
                                <img src="{{asset('playground_assets/vectori334-3kvm.svg');}}" alt="VectorI334"
                                    class="thmthitb-vector07" />
                            </div>
                            <input type="text" placeholder="Nhập mật khẩu" class="thmthitb-input4" />
                        </div>
                        <div class="thmthitb-frame6247331">
                            <div class="thmthitb-warningtext6">
                            <span class="chitiettieude">
                                    <span>Dịch vụ sử dụng:</span>
                                </span>
                                <img src="{{asset('playground_assets/vectori334-wl3c.svg');}}" alt="VectorI334"
                                    class="thmthitb-vector08" />
                            </div>
                            <div class="thmthitb-input5">
                            @foreach($services as $dvsd)
                            <input type="checkbox" name="id{{$dvsd->id}}" value="{{$dvsd->tendichvu}}"
                            placeholder="Nhập dịch vụ sử dụng"  />
                            <label for="{{$dvsd->id}}"> {{$dvsd->tendichvu}}</label>
                            <span></span>
                            @endforeach

                        </div>
                        </div>
                        <div class="thmthitb-frame624744">
                            <span class="thmthitb-text30  ">
                                <span>Là trường thông tin bắt buộc</span>
                            </span>
                            <img src="{{asset('playground_assets/vector3347-71h.svg');}}" alt="Vector3347"
                                class="thmthitb-vector09" />
                        </div>
                    </div>
                    <div class="thmthitb-frame624737 thmthitb-text46">
                        <button type="submit" class="thmthitb-button3">
                            Thêm thiết bị
                        </button>
                        <a  href="{{route('device.index')}}" class="thmthitb-button4">
                            <span class="thmthitb-text48"><span>Hủy bỏ</span></span>
</a>
                    </div>
            </div>

            </form>

        </div>
    </div>
</body>

</html>
