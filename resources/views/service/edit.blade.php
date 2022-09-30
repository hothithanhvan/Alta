@extends('layout.menubar')
@extends('layout.header')
@extends('layout.hello')
@extends('layout.alert')
<title>Sửa dịch vụ</title>
  <body>
    <div>
      <link href="{{asset('css/dichvu.css');}}" rel="stylesheet" />

      <div class="capnhatdichvu-container">
        <div class="container-all">
          <div class="topbar-all">
            <div class="breadcrumbs">
              @include('service.breadscrum')
              <img
                src="{{asset('playground_assets/uanglerighti281-qggi.svg');}}"
                alt="uanglerightI281"
                class="capnhatdichvu-uangleright2"
              />
              <div class="capnhatdichvu-button3">
                <span class="capnhatdichvu-text06  "><span>Cập nhật</span></span>
</div>
            </div>

           
          </div>
          <span class="capnhatdichvu-text12 list-index ">
            <span>Quản lý dịch vụ</span>
          </span>
          <form action="{{ route('service.update',$service->id) }}" method="POST">
            @csrf
            @method('PUT')
          <div class="capnhatdichvu-frame624738">
            <span class="capnhatdichvu-text14 tieude ">
              <span>Thông tin dịch vụ</span>
            </span>
            @error('tendichvu')
  <div class="alert1">{{$message}}

  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 

</div>
@enderror 
            <span class="capnhatdichvu-text16  ">
              <span>Quy tắc cấp số</span>
            </span>
            <div class="capnhatdichvu-frame624731">
              <div class="capnhatdichvu-warningtext">
                <span class="capnhatdichvu-text18 chitiettieude ">
                  <span>Mã dịch vụ:</span>
                </span>
                <img
                  src="{{asset('playground_assets/vectori238-qhim.svg');}}"
                  alt="VectorI238"
                  class="capnhatdichvu-vector02"
                />
              </div>
              <input type="text" name="madichvu" value="{{$service->madichvu}}" class="capnhatdichvu-input" />
            </div>
            <div class="capnhatdichvu-frame624732">
              <div class="capnhatdichvu-warningtext1">
                <span class="capnhatdichvu-text20 chitiettieude ">
                  <span>Tên dịch vụ :</span>
                </span>
                <img
                  src="{{asset('playground_assets/vectori238-eer.svg');}}"
                  alt="VectorI238"
                  class="capnhatdichvu-vector03"
                />
              </div>
              <input
                type="text" name="tendichvu"
                value="{{$service->tendichvu}}"
                class="capnhatdichvu-input1"
              />
            </div>
            <div class="capnhatdichvu-frame624733">
              <div class="capnhatdichvu-warningtext2">
                <span class="capnhatdichvu-text22 chitiettieude "><span>Mô tả:</span></span>
              </div>
              <input
                type="text" value="{{$service->mota}}" name="mota"
                placeholder="Mô tả dịch vụ"
                class="capnhatdichvu-input2"
              />
            </div>
            <div class="capnhatdichvu-group337">
              <div class="capnhatdichvu-group333">
                <input type="text" name="batdau" value="{{$service->batdau}}" class="capnhatdichvu-input3" />
                <input type="text" name="ketthuc" value="{{$service->ketthuc}}" placeholder="9999" class="capnhatdichvu-input4" />
                <span class="capnhatdichvu-text24 chitiettieude "><span>đến</span></span>
              </div>
              <div class="capnhatdichvu-group334">
                <div class="capnhatdichvu-warningtext3">
                  <span class="capnhatdichvu-text26 chitiettieude ">
                    <span>Tăng tự động từ:</span>
                  </span>
                </div>
                <div class="capnhatdichvu-checkbox"></div>
              </div>
            </div>
            <div class="capnhatdichvu-group338">
              <input type="text" name="prefix" value="{{$service->prefix}}" class="capnhatdichvu-input5" />
              <div class="capnhatdichvu-group335">
                <div class="capnhatdichvu-warningtext4">
                  <span class="capnhatdichvu-text28 chitiettieude ">
                    <span>Prefix:</span>
                  </span>
                </div>
                <div class="capnhatdichvu-checkbox1"></div>
              </div>
            </div>
            <div class="capnhatdichvu-group339">
              <input type="text" name="surfix" value="{{$service->surfix}}" class="capnhatdichvu-input6" />
              <div class="capnhatdichvu-group336">
                <div class="capnhatdichvu-warningtext5">
                  <span class="capnhatdichvu-text30 chitiettieude ">
                    <span>Surfix:</span>
                  </span>
                </div>
                <div class="capnhatdichvu-checkbox2"></div>
              </div>
            </div>
            <div class="capnhatdichvu-frame624744">
              <span class="capnhatdichvu-text32  ">
                <span>Là trường thông tin bắt buộc</span>
              </span>
              <img
                src="{{asset('playground_assets/vector2389-zsy.svg');}}"
                alt="Vector2389"
                class="capnhatdichvu-vector04"
              />
            </div>
            <div class="capnhatdichvu-group343">
              <div class="capnhatdichvu-group3371">
                <div class="capnhatdichvu-warningtext6">
                  <span class="capnhatdichvu-text34 chitiettieude ">
                    <span>Reset mỗi ngày</span>
                  </span>
                </div>
                <div class="capnhatdichvu-checkbox3"></div>
              </div>
            </div>
          </div>
          
          <div class="capnhatdichvu-frame624737">
            <button type="submit" class="capnhatdichvu-button4 capnhatdichvu-text50">Cập nhật</button>
            <<a  href="{{route('service.index')}}" class="capnhatdichvu-button5">
              <span class="capnhatdichvu-text52"><span>Hủy bỏ</span></span>
</a>
          </div>
        </div>
        </form>
      </div>

    </div>
  </body>
</html>
