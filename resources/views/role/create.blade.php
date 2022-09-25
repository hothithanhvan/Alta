@extends('layout.menubar')
@extends('layout.header')
@extends('layout.hello')

<body>
    <div>
        <link href="{{asset('css/vaitro.css')}}" rel="stylesheet" />

        <div class="thmvaitr-container">
            <div class="container-all">
                <div class="topbar-all">
                    <div class="breadcrumbs">
                        @include('role.breadscrum')
                        <img src="{{asset('playground_assets/uanglerighti287-rqd.svg');}}" alt="uanglerightI287"
                            class="thmvaitr-uangleright1" />
                        <div class="thmvaitr-button2">
                            <span class="thmvaitr-text04  ">
                                <span>Thêm vai trò</span>
                            </span>
</div>
                    </div>

                </div>
                <form action="{{ route('role.store') }}" method="POST">
                    @csrf
                    <div class="thmvaitr-frame624738">
                        <span class="thmvaitr-text10 tieude ">
                            <span>Thông tin vai trò</span>
                        </span>
                        <div class="thmvaitr-frame624731">
                            <div class="thmvaitr-warningtext">
                                <span class="chitiettieude">
                                    <span>Tên vai trò</span>
                                </span>
                                <img src="{{asset('playground_assets/vectori287-la9.svg');}}" alt="VectorI287"
                                    class="thmvaitr-vector02" />
                            </div>
                            <input type="text" name="tenvaitro" class="thmvaitr-input" />
                        </div>
                        <div class="thmvaitr-frame624733">
                            <div class="thmvaitr-warningtext01">
                            <span class="chitiettieude">
                                    <span>Mô tả</span>
                                </span>
                            </div>
                            <input type="text" name="mota" class="thmvaitr-input1" />
                        </div>
                        <div class="thmvaitr-frame624744">
                            <span class="thmvaitr-text16  ">
                                <span>Là trường thông tin bắt buộc</span>
                            </span>
                            <img src="{{asset('playground_assets/vector2871-fvce.svg');}}" alt="Vector2871"
                                class="thmvaitr-vector03" />
                        </div>
                        <div class="thmvaitr-frame625231">
                            <div class="thmvaitr-group343">
                                <div class="thmvaitr-group337">
                                    <div class="thmvaitr-warningtext02">
                                        <span class="thmvaitr-text22  ">
                                            <span>Admin</span>
                                        </span>
                                    </div>
                                    <input type="checkbox" name="chucnang" value="0" class="container checkbox">
                                </div>
                            </div>
                            <div class="thmvaitr-group344">
                                <div class="thmvaitr-group337">
                                    <div class="thmvaitr-warningtext04">
                                        <span class="thmvaitr-text26  ">
                                            <span>User</span>
                                        </span>
                                    </div>
                                    <input type="checkbox" name="chucnang" value="1" class="container checkbox">
                                </div>
                            </div>
                            
                        </div>
                        <div class="thmvaitr-warningtext10">
                        <span class="chitiettieude">
                                <span>Phân quyền chức năng</span>
                            </span>
                            <img src="{{asset('playground_assets/vectori287-nkdo.svg');}}" alt="VectorI287"
                                class="thmvaitr-vector04" />
                        </div>
                    </div>
                    <div class="thmvaitr-frame624737">
                        <button type="submit" class="thmvaitr-button3 thmvaitr-text40">
                            Thêm
                        </button>
                        <button class="thmvaitr-button4">
                            <span class="thmvaitr-text42"><span>Hủy bỏ</span></span>
                        </button>
                    </div>
                </form>
                <span class="list-index ">
                    <span>Danh sách vai trò</span>
                </span>
            </div>
            </div>
            </div>
        </div>
</body>

</html>
