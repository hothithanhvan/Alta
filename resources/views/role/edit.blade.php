@extends('layout.menubar')
@extends('layout.header')
@extends('layout.hello')
@extends('layout.alert')
<title>Sửa vai trò</title>
<body>
  <div>
    <link href="{{asset('css/vaitro.css')}}" rel="stylesheet" />

    <div class="capnhatvaitro-container">
      <div class="container-all">
        <div class="topbar-all">
          <div class="breadcrumbs">
            @include('role.breadscrum')
            <img src="{{asset('playground_assets/uanglerighti287-38b.svg');}}" alt="uanglerightI287"
              class="capnhatvaitro-uangleright1" />
            <div class="capnhatvaitro-button2">
              <span class="capnhatvaitro-text04  ">
                <span>Cập nhật vai trò</span>
              </span>
</div>
          </div>

        </div>
        <form action="{{ route('role.update',$role->id) }}" method="POST">
            @csrf
            @method('PUT')
                    <div class="themvaitro-frame624738">
                        <span class="themvaitro-text10 tieude ">
                            <span>Thông tin vai trò</span>
                        </span>
                        @error('tenvaitro')
  <div class="alert1">{{$message}}

  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 

</div>
@enderror 
                        <div class="themvaitro-frame624731">
                            <div class="themvaitro-warningtext">
                            <span class="chitiettieude">
                                    <span>Tên vai trò</span>
                                </span>
                                <img src="{{asset('playground_assets/vectori287-la9.svg');}}" alt="VectorI287"
                                    class="themvaitro-vector02" />
                            </div>
                            <input type="text" name="tenvaitro" class="themvaitro-input" />
                        </div>
                        <div class="themvaitro-frame624733">
                            <div class="themvaitro-warningtext01">
                            <span class="chitiettieude">
                                    <span>Mô tả:</span>
                                </span>
                            </div>
                            <input type="text" name="mota" class="themvaitro-input1" />
                        </div>
                        <div class="themvaitro-frame624744">
                            <span class="themvaitro-text16  ">
                                <span>Là trường thông tin bắt buộc</span>
                            </span>
                            <img src="{{asset('playground_assets/vector2871-fvce.svg');}}" alt="Vector2871"
                                class="themvaitro-vector03" />
                        </div>
                        <div class="themvaitro-frame625231">
                            <div class="themvaitro-group343">
                                <div class="themvaitro-group337">
                                    <div class="themvaitro-warningtext02">
                                        <span class="themvaitro-text22  ">
                                            <span>Admin</span>
                                        </span>
                                    </div>
                                    <input type="checkbox" name="chucnang" value="0" class="container checkbox">
                                </div>
                            </div>
                            <div class="themvaitro-group344">
                                <div class="themvaitro-group337">
                                    <div class="themvaitro-warningtext04">
                                        <span class="themvaitro-text26  ">
                                            <span>User</span>
                                        </span>
                                    </div>
                                    <input type="checkbox" name="chucnang" value="1" class="container checkbox">
                                </div>
                            </div>
                            
                        </div>
                        <div class="themvaitro-warningtext10">
                            <span class="chitiettieude">
                                <span>Phân quyền chức năng</span>
                            </span>
                            <img src="{{asset('playground_assets/vectori287-nkdo.svg');}}" alt="VectorI287"
                                class="themvaitro-vector04" />
                        </div>
                    </div>
                    <div class="themvaitro-frame624737">
                        <button type="submit" class="themvaitro-button3 themvaitro-text40">
                            Thêm
                        </button>
                        <<a  href="{{route('role.index')}}" class="themvaitro-button4">
                            <span class="themvaitro-text42"><span>Hủy bỏ</span></span>
</a>
                    </div>
    <span class="list-index ">
      <span>Danh sách vai trò</span>
    </span>
        </form>
  </div>
  </div>
  </div>
</body>

</html>
