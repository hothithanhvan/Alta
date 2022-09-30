@extends('layout.menubar')
@extends('layout.header')
@section('title', 'Dịch vụ')
@extends('layout.hello')

<title>Dịch vụ
</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<body>
    <div>
        <link href="{{asset('css/dichvu.css');}}" rel="stylesheet" />

        <div class="danhschdchv-container">
            <div class="container-all">
                <div class="create-index">
                    <div class="danhschdchv-vuesaxboldaddsquare">
                        <div class="danhschdchv-vuesaxboldaddsquare1">
                            <div class="danhschdchv-addsquare">
                                <img src="{{asset('playground_assets/vectori281-58je.svg');}}" alt="VectorI281"
                                    class="danhschdchv-vector" />
                            </div>
                        </div>
                    </div>
                    <a class="danhschdchv-text" href="{{ route('service.create') }}">Thêm dịch vụ</a>
                </div>
                <div class="topbar-all">
                    <div class="breadcrumbs">
                    @include('service.breadscrum')
                    </div>
        </div>
        <div id="dropdown-service">
            <div class="danhschdchv-group318">
                <span class="danhschdchv-text133  ">Từ khoá</span>
                    <input type="text" class="quanlythietbi-text220 danhschdchv-input" id="search" name="search"
                            placeholder="Nhập từ khóa">
                            <button onclick="getValue()">
              <img src="{{asset('playground_assets/fisearchi218-d31.svg')}}" 
              alt="fisearchI218" class="quanlythietbi-fisearch" />
            </button>
            </div>
            <div class="danhschdchv-group319">
                <select id="hoatdong" name="hoatdong" class="danhschdchv-dropdown danhschdchv-text164  ">
                <option value="0">Tất cả</option>
                <option value="1">Hoạt động</option>
                <option value="2">Ngưng hoạt động</option>
                </select>
                <span class="danhschdchv-text166  ">Trạng thái hoạt động</span>
            </div>
            <div class="danhschdchv-group311">
                <span class="danhschdchv-text139  ">Chọn thời gian</span>
                <div class="danhschdchv-datepicker">
                <div class="danhschdchv-vuesaxboldarrowright">
                    <div class="danhschdchv-vuesaxboldarrowright1">
                        <div class="danhschdchv-arrowright">
                            <img src="{{asset('playground_assets/vectori284-2lnq.svg');}}" alt="VectorI284"
                                class="danhschdchv-vector23" />
                        </div>
                    </div>
                </div>
                <input id="from_date" name="from_date" type="date" data-date-inline-picker="true" 
                        class=" danhschdchv-datepicker1 danhschdchv-text137  " />
                <input id="to_date" name="to_date" type="date" data-date-inline-picker="true" 
                        class="danhschdchv-datepicker2 danhschdchv-text137  " />

                </div>
        </div>
                    <span class="list-index">
                        <span>Danh sách dịch vụ</span>
                    </span>
                    <table class="table-index224 ">
                        <tr class="danhschdchv-frame624691 danhschdchv-text015   ">
                            <td>Mã dịch vụ</td>
                            <td>Tên dịch vụ</td>
                            <td>Mô tả</td>
                            <td>Trạng thái hoạt động</td>
                            <td> </td>
                            <td> </td>
                        </tr>
                        @foreach ($services as $service)
                        <tr class=" alldata danhschdchv-text019   danhschdchv-frame624711">
                            <td>{{$service->madichvu}}</td>
                            <td>{{$service->tendichvu}}</td>
                            <td>{{$service->mota}}</td>
                            <td>
                                @if ($service->trangthaihoatdong == 1)
                                <span>Hoạt động</span>
                                @else
                                <span>Ngưng hoạt động</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('service.show',$service->id) }}">Chi tiết</a>
                            </td>
                            <td>
                                <a href="{{ route('service.edit',$service->id) }}">Cập nhật</a>
                            </td>
                        </tr>
                        @endforeach
                        <tbody class="searchdata" id="Content"></tbody>
                    </table>
           
        <div class="danhschdchv-frame105">
            {{ $services->links() }}
            <div class="danhschdchv-frame108">
                <img src="{{asset('playground_assets/fichevrondowni284-sz84.svg');}}" alt="fichevrondownI284"
                    class="danhschdchv-fichevrondown1" />
            </div>
        </div>

    </div>

</body>

</html>
