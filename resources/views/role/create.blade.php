@extends('layout.menubar')
@extends('layout.header')
@extends('layout.hello')
<style>
    div.thmvaitr-frame625231 {
    overflow: scroll;
    overflow-x:hidden;
    top: 90px;
    left: 608px;
    width: 560px;
    height: 400px;
    display: flex;
    position: absolute;
    box-sizing: border-box;
    align-items: flex-start;
    flex-shrink: 0;
    border-color: transparent;
    margin-right: 0;
    border-radius: 8px;
    margin-bottom: 0;
    background-color: var(--dl-color-orange-orange50);
  }
    </style>
<body>
    <div>
        <link href="{{asset('css/vaitro.css')}}" rel="stylesheet" />

        <div class="thmvaitr-container">
            <div class="thmvaitr-thmvaitr">
                <div class="thmvaitr-topbar">
                    <div class="thmvaitr-breadcrumbs">
                        <button class="thmvaitr-button">
                            <span class="thmvaitr-text 2020Bold">
                                <span>Cài đặt hệ thống</span>
                            </span>
                        </button>
                        <img src="{{asset('playground_assets/uanglerighti287-0pc3.svg');}}" alt="uanglerightI287"
                            class="thmvaitr-uangleright" />
                        <button class="thmvaitr-button1">
                            <span class="thmvaitr-text02 2020Bold">
                                <span>Quản lý vai trò</span>
                            </span>
                        </button>
                        <img src="{{asset('playground_assets/uanglerighti287-rqd.svg');}}" alt="uanglerightI287"
                            class="thmvaitr-uangleright1" />
                        <button class="thmvaitr-button2">
                            @cannot('show')
                            <span class="thmvaitr-text04 2020Bold">
                                <span>Thêm vai trò</span>
                            </span>
                            @endcannot
                        </button>
                    </div>

                    <div class="thmvaitr-frame271">
                        <div class="thmvaitr-vuesaxboldnotification">
                            <div class="thmvaitr-vuesaxboldnotification1">
                                <div class="thmvaitr-notification">
                                    <img src="{{asset('playground_assets/vectori287-pa1j.svg');}}" alt="VectorI287"
                                        class="thmvaitr-vector" />
                                    <img src="{{asset('playground_assets/vectori287-6qg9.svg');}}" alt="VectorI287"
                                        class="thmvaitr-vector01" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="{{ route('role.store') }}" method="POST">
            @csrf
                    <div class="thmvaitr-frame624738">
                        <span class="thmvaitr-text10 2020Bold">
                            <span>Thông tin vai trò</span>
                        </span>
                        <div class="thmvaitr-frame624731">
                            <div class="thmvaitr-warningtext">
                                <span class="thmvaitr-text12 1616Semi">
                                    <span>Tên vai trò</span>
                                </span>
                                <img src="{{asset('playground_assets/vectori287-la9.svg');}}" alt="VectorI287"
                                    class="thmvaitr-vector02" />
                            </div>
                            <input type="text" name="tenvaitro" class="thmvaitr-input" />
                        </div>
                        <div class="thmvaitr-frame624733">
                            <div class="thmvaitr-warningtext01">
                                <span class="thmvaitr-text14 1616Semi">
                                    <span>Mô tả:</span>
                                </span>
                            </div>
                            <input type="text" name="mota" class="thmvaitr-input1" />
                        </div>
                        <div class="thmvaitr-frame624744">
                            <span class="thmvaitr-text16 1414Reg">
                                <span>Là trường thông tin bắt buộc</span>
                            </span>
                            <img src="{{asset('playground_assets/vector2871-fvce.svg');}}" alt="Vector2871"
                                class="thmvaitr-vector03" />
                        </div>
                        <div class="thmvaitr-frame625231">
                            <!-- <span class="thmvaitr-text18 2020Bold">
                                <span>Admin</span>
                            </span> -->
                            <div class="thmvaitr-group343">
                                <div class="thmvaitr-group337">
                                    <div class="thmvaitr-warningtext02">
                                        <span class="thmvaitr-text22 1616Semi">
                                            <span>Admin</span>
                                        </span>
                                    </div>
                                    <input type="checkbox" name="chucnang" value="0" class="container checkbox">
                                </div>
                            </div>
                            <div class="thmvaitr-group344">
                                <div class="thmvaitr-group337">
                                    <div class="thmvaitr-warningtext04">
                                        <span class="thmvaitr-text26 1616Semi">
                                            <span>User</span>
                                        </span>
                                    </div>
                                    <input type="checkbox" name="chucnang" value="1" class="container checkbox">
                                </div>
                            </div>
                            <!-- <div class="thmvaitr-group345">
                                <div class="thmvaitr-group337">
                                    <div class="thmvaitr-warningtext06">
                                        <span class="thmvaitr-text30 1616Semi">
                                            <span>Chức năng y</span>
                                        </span>
                                    </div>
                                    <input type="checkbox" class="container checkbox">
                                </div>
                            </div>
                            <div class="thmvaitr-group346">
                                <div class="thmvaitr-group337">
                                    <div class="thmvaitr-warningtext08">
                                        <span class="thmvaitr-text34 1616Semi">
                                            <span>Chức năng z</span>
                                        </span>
                                    </div>
                                    <input type="checkbox" class="container checkbox">
                                </div>
                            </div>
                            <span class="thmvaitr-text20 2020Bold">
                                <span>Nhóm chức năng B</span>
                            </span>
                            
                            <div class="thmvaitr-group347">
                                <div class="thmvaitr-group337">
                                    <div class="thmvaitr-warningtext03">
                                        <span class="thmvaitr-text24 1616Semi">
                                            <span>Tất cả</span>
                                        </span>
                                    </div>
                                    <input type="checkbox" class="container checkbox">
                                </div>
                            </div>
                           
                            <div class="thmvaitr-group348">
                                <div class="thmvaitr-group337">
                                    <div class="thmvaitr-warningtext05">
                                        <span class="thmvaitr-text28 1616Semi">
                                            <span>Chức năng x</span>
                                        </span>
                                    </div>
                                    <input type="checkbox" class="container checkbox">
                                </div>
                            </div>
                            
                            <div class="thmvaitr-group349">
                                <div class="thmvaitr-group337">
                                    <div class="thmvaitr-warningtext07">
                                        <span class="thmvaitr-text32 1616Semi">
                                            <span>Chức năng y</span>
                                        </span>
                                    </div>
                                    <input type="checkbox" class="container checkbox">
                                </div>
                            </div>
                           
                            <div class="thmvaitr-group350">
                                <div class="thmvaitr-group337">
                                    <div class="thmvaitr-warningtext09">
                                        <span class="thmvaitr-text36 1616Semi">
                                            <span>Chức năng z</span>
                                        </span>
                                    </div>
                                    <input type="checkbox" class="container checkbox">
                                </div> -->
                            <!-- </div> -->
                        </div>
                        <div class="thmvaitr-warningtext10">
                            <span class="thmvaitr-text38 1616Semi">
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
                <span class="thmvaitr-text44 2424Bold">
                    <span>Danh sách vai trò</span>
                </span>
            </div>
            </div>
            </div>
        </div>
</body>

</html>