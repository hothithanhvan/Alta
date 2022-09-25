@extends('layout.menubar')
@extends('layout.header')
@extends('layout.hello')

<body>

    <div>
        <link href="{{asset('css/thietbi.css')}}" rel="stylesheet" />

        <div class="cpnhtthitb-container">
            <div class="container-all">
                <span class="list-index">
                    <span>Quản lý thiết bị</span>
                </span>
                <div class="topbar-all">
                    <div class="breadcrumbs">
                    @include('device.breadscrum')
                        <img src="{{asset('playground_assets/uanglerighti334-z4uk.svg');}}" alt="uanglerightI334"
                            class="cpnhtthitb-uangleright1" />
                            <div  class="cpnhtthitb-button02">
                            <span class="cpnhtthitb-text06  ">
                                <span>Cập nhật thiết bị</span>
                            </span>
</div>
                    </div>

                    <div class="cpnhtthitb-frame271">
                        <div class="cpnhtthitb-vuesaxboldnotification">
                            <div class="cpnhtthitb-vuesaxboldnotification1">
                                <div class="cpnhtthitb-notification">
                                    <img src="{{asset('playground_assets/vectori334-2v4f.svg');}}" alt="VectorI334"
                                        class="cpnhtthitb-vector" />
                                    <img src="{{asset('playground_assets/vectori334-ahz.svg');}}" alt="VectorI334"
                                        class="cpnhtthitb-vector01" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="{{ route('device.update',$device->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="cpnhtthitb-frame624726">
                        <span class="tieude">
                            <span>Thông tin thiết bị</span>
                        </span>
                        <div class="cpnhtthitb-frame624731">
                            <div class="cpnhtthitb-warningtext">
                                <span class="chitiettieude">
                                    <span>Mã thiết bị:</span>
                                </span>
                                <img src="{{asset('playground_assets/vectori334-448c.svg');}}" alt="VectorI334"
                                    class="cpnhtthitb-vector02" />
                            </div>
                            <input type="text" name="mathietbi" value="{{$device->mathietbi}}"
                                class="cpnhtthitb-input" />
                        </div>
                        <div class="cpnhtthitb-frame624732">
                            <div class="cpnhtthitb-warningtext1">
                            <span class="chitiettieude">
                                    <span>Tên thiết bị:</span>
                                </span>
                                <img src="{{asset('playground_assets/vectori334-ghbp.svg');}}" alt="VectorI334"
                                    class="cpnhtthitb-vector03" />
                            </div>
                            <input type="text" name="tenthietbi" value="{{$device->tenthietbi}}"
                                class="cpnhtthitb-input1" />
                        </div>
                        <div class="cpnhtthitb-frame624733">
                            <div class="cpnhtthitb-warningtext2">
                            <span class="chitiettieude">
                                    <span>Địa chỉ IP:</span>
                                </span>
                                <img src="{{asset('playground_assets/vectori334-stg9.svg');}}" alt="VectorI334"
                                    class="cpnhtthitb-vector04" />
                            </div>
                            <input type="text" name="diachiIP" value="{{$device->diachiIP}}"
                                class="cpnhtthitb-input2" />
                        </div>
                        <div class="cpnhtthitb-frame624734">
                            <div class="cpnhtthitb-warningtext3">
                            <span class="chitiettieude">
                                    <span>Loại thiết bị:</span>
                                </span>
                                <img src="{{asset('playground_assets/vectori334-bil.svg');}}" alt="VectorI334"
                                    class="cpnhtthitb-vector05" />
                                    
                            </div>
                            <select class="thmthitb-input3 thmthitb-text22  " >
                                <option value="1">1</option>
                                <option value="2">2</option>
                                </select>
                        </div>
                        <div class="cpnhtthitb-frame624735">
                            <div class="cpnhtthitb-warningtext4">
                            <span class="chitiettieude">
                                    <span>Tên đăng nhập:</span>
                                </span>
                                <img src="{{asset('playground_assets/vectori334-ex7d.svg');}}" alt="VectorI334"
                                    class="cpnhtthitb-vector06" />
                            </div>
                            <input type="text" placeholder="" class="cpnhtthitb-input3" />
                        </div>
                        <div class="cpnhtthitb-frame624736">
                            <div class="cpnhtthitb-warningtext5">
                            <span class="chitiettieude">
                                    <span>Mật khẩu:</span>
                                </span>
                                <img src="{{asset('playground_assets/vectori334-12dm.svg');}}" alt="VectorI334"
                                    class="cpnhtthitb-vector07" />
                            </div>
                            <input type="text" placeholder="CMS" class="cpnhtthitb-input4" />
                        </div>
                        <div class="cpnhtthitb-frame6247331">
                            <div class="cpnhtthitb-warningtext6">
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
                            <div class="cpnhtthitb-frame624744">
                                <span class="cpnhtthitb-text42  ">
                                    <span>Là trường thông tin bắt buộc</span>
                                </span>
                                <img src="{{asset('playground_assets/vector3349-f56a.svg');}}" alt="Vector3349"
                                    class="cpnhtthitb-vector09" />
                            </div>
                        </div>
                    </div>
                            <div class="cpnhtthitb-frame624750">
                                <button type="submit" class="cpnhtthitb-button09 cpnhtthitb-text58">
                                    Cập nhật
                                </button>
                                <button class="cancel-button cpnhtthitb-text60">
                                    Hủy bỏ
                                </button>
                            </div>
                </form>
            </div>
        </div>
</body>

</html>
