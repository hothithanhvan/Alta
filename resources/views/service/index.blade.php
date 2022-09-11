@extends('layout.menubar')
@extends('layout.header')
@section('title', 'Dịch vụ')
<title><?php echo 'Dịch vụ' ?></title>
  <body>
    <div>
      <link href="{{asset('css/dichvu.css');}}" rel="stylesheet" />

      <div class="danhschdchv-container">
        <div class="danhschdchv-danhschdchv">
          <div class="danhschdchv-component2">
            <div class="danhschdchv-vuesaxboldaddsquare">
              <div class="danhschdchv-vuesaxboldaddsquare1">
                <div class="danhschdchv-addsquare">
                  <img
                    src="{{asset('playground_assets/vectori281-58je.svg');}}"
                    alt="VectorI281"
                    class="danhschdchv-vector"
                  />
                </div>
              </div>
            </div>
            <a class="danhschdchv-text" href="{{ route('service.create') }}">Thêm dịch vụ</a>
          </div>
          <div class="danhschdchv-topbar">
            <div class="danhschdchv-breadcrumbs">
              <button class="danhschdchv-button">
                <span class="danhschdchv-text005 2020Bold">
                  <span>Dịch vụ</span>
                </span>
              </button>
              <img
                src="{{asset('playground_assets/uanglerighti283-mbzb.svg');}}"
                alt="uanglerightI283"
                class="danhschdchv-uangleright"
              />
              <button class="danhschdchv-button1">
                <span class="danhschdchv-text007 2020Bold">
                  <span>Danh sách dịch vụ</span>
                </span>
              </button>
            </div>
            <div class="danhschdchv-frame625226">
              <div class="danhschdchv-unsplash-fyl8s-m-c2j2q"></div>
              <div class="danhschdchv-group296">
                <span class="danhschdchv-text009 1212Reg">
                  <span>Xin chào</span>
                </span>
                <span class="danhschdchv-text011 1616Bold">
                  <span>Lê Quỳnh Ái Vân</span>
                </span>
              </div>
            </div>
            <div class="danhschdchv-frame271">
              <div class="danhschdchv-vuesaxboldnotification">
                <div class="danhschdchv-vuesaxboldnotification1">
                  <div class="danhschdchv-notification">
                    <img
                      src="{{asset('playground_assets/vectori283-a7so.svg');}}"
                      alt="VectorI283"
                      class="danhschdchv-vector01"
                    />
                    <img
                      src="{{asset('playground_assets/vectori283-5mg.svg');}}"
                      alt="VectorI283"
                      class="danhschdchv-vector02"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <span class="danhschdchv-text013 2424Bold">
            <span>Quản lý dịch vụ</span>
          </span>
              <table class="danhschdchv-frame624720 ">
                <tr class=" danhschdchv-frame624691 danhschdchv-text015 1616Bold ">
                  <td>Mã dịch vụ</td>
                  <td>Tên dịch vụ</td>
                  <td>Mô tả</td>
                  <td>Trạng thái hoạt động</td>
                  <td>             </td>
                  <td>             </td>
                </tr> 
                @foreach ($services as $service)
                <tr class="danhschdchv-text019 1414Reg danhschdchv-frame624711">
                  <td>{{$service->madichvu}}</td>
                  <td>{{$service->tendichvu}}</td>
                  <td></td>
                  <td></td>
                  <td>
                <a href="{{ route('service.show',$service->id) }}">Chi tiết</a>
            </td>
            <td>
            <a href="{{ route('service.edit',$service->id) }}">Cập nhật</a>
            </td>
                </tr>
                @endforeach
              </table>
              <div class="danhschdchv-group318">
            <span class="danhschdchv-text133 1616Semi">
              <span>Từ khoá</span>
            </span>
            <form action="" method="get" >
            <input type="text" class="qunlthitb-text220 danhschdchv-input" id="key" 
            name = "key" placeholder ="Nhập từ khóa">
            <button type="submit"></button>
            </form>
            </div>
          </div>
          <div class="danhschdchv-group311">
            <div class="danhschdchv-datepicker">
              <div class="danhschdchv-datepicker1">
                
                <div class="danhschdchv-frame136">
                <input type="date" data-date-inline-picker="true" class="danhschdchv-text137 1616Reg" />
                </div>
              </div>
              <div class="danhschdchv-datepicker2">
                
                <div class="danhschdchv-frame1361">
                <input type="date" data-date-inline-picker="true" class="danhschdchv-text137 1616Reg" />
                  
                </div>
              </div>

              <div class="danhschdchv-vuesaxboldarrowright">
                <div class="danhschdchv-vuesaxboldarrowright1">
                  <div class="danhschdchv-arrowright">
                    <img
                      src="{{asset('playground_assets/vectori284-2lnq.svg');}}"
                      alt="VectorI284"
                      class="danhschdchv-vector23"
                    />
                  </div>
                </div>
              </div>
            </div>
            <span class="danhschdchv-text139 1616Semi">
              <span>Chọn thời gian</span>
            </span>
          </div>
          <div class="danhschdchv-frame105">

             
            {{ $services->links() }}
            <div class="danhschdchv-frame108">
              <img
                src="{{asset('playground_assets/fichevrondowni284-sz84.svg');}}"
                alt="fichevrondownI284"
                class="danhschdchv-fichevrondown1"
              />
            </div>
          </div>
          </div>
            
          <div class="danhschdchv-group319">
            <div class="danhschdchv-dropdown">
              <select class="danhschdchv-text164 1616Reg">
              <option value="tatca">Tất cả</option>
          <option value="ngunghd">Ngưng hoạt động</option>
          <option value="hd">Hoạt động</option>
              </select>
            </div>
            <span class="danhschdchv-text166 1616Semi">
              <span>Trạng thái hoạt động</span>
            </span>
          </div>

        </div>
      </div>
    </div>
  </body>
</html>
