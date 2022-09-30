@extends('layout.menubar')
@extends('layout.header')
@extends('layout.hello')
<title>Vai trò</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
        <link href="{{asset('css/thietbi.css');}}" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <body>
    <div>
      <link href="{{asset('css/vaitro.css')}}" rel="stylesheet" />

      <div class="quanlyvaitro-container">
        <div class="container-all">
          <div class="topbar-all">
            <div class="breadcrumbs">
              @include('role.breadscrum')
            </div>

            
          </div>
          <table class="table-index192">
              <tr class=" quanlyvaitro-frame624691 quanlyvaitro-text08  ">
                <td>Tên vai trò</td>
                <td>Số người dùng</td>
                <td>Mô tả</td>
                <td>        </td>

</tr>
@foreach($roles as $role)
<tr class="alldata">
<td>{{$role->tenvaitro}}</td>
<td>{{$role->songuoidung}}</td>
<td>{{$role->mota}}</td>
<td>
<a href="{{ route('role.edit',$role->id) }}">Cập nhật</a>
</td>

</tr>
@endforeach
<tbody class="searchdata" id="Content"></tbody>
</table>
              
<div class="create-index">
            <div class="quanlyvaitro-vuesaxboldaddsquare">
              <div class="quanlyvaitro-vuesaxboldaddsquare1">
                <div class="quanlyvaitro-addsquare">
                  <img
                    src="{{asset('playground_assets/vectori285-oc8h.svg')}}"
                    alt="VectorI285"
                    class="quanlyvaitro-vector02"
                  />
                </div>
              </div>
            </div>
            
            <a class="quanlyvaitro-text56" href="{{ route('role.create') }}">Thêm vai trò</a>
            
          </div>
          <div class="quanlyvaitro-group318">
          <span class="quanlyvaitro-text77 chitiettieude"><span>Từ khoá</span></span>

            <input tyoe="text" id="search" class="quanlyvaitro-input quanlyvaitro-text75">
            <button onclick="getValue()">
            <img
                src="{{asset('playground_assets/fisearchi285-4rgo.svg');}}"
                alt="fisearchI285"
                class="quanlyvaitro-fisearch"
              />
            </button>
          
          </div>

                
          <span class="list-index">
            <span>Danh sách vai trò</span>
          </span>
        </div>
      </div>
    </div>
  </body>
</html>
