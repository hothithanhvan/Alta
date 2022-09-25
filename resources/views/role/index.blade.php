@extends('layout.menubar')
@extends('layout.header')
@extends('layout.hello')
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

      <div class="qunlvaitr-container">
        <div class="container-all">
          <div class="topbar-all">
            <div class="breadcrumbs">
              @include('role.breadscrum')
            </div>

            <div class="qunlvaitr-frame271">
              <div class="qunlvaitr-vuesaxboldnotification">
                <div class="qunlvaitr-vuesaxboldnotification1">
                  <div class="qunlvaitr-notification">
                    <img
                      src="{{asset('playground_assets/vectori285-l9n.svg');}}"
                      alt="VectorI285"
                      class="qunlvaitr-vector"
                    />
                    <img
                      src="{{asset('playground_assets/vectori285-011l.svg');}}"
                      alt="VectorI285"
                      class="qunlvaitr-vector01"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <table class="table-index192">
              <tr class=" qunlvaitr-frame624691 qunlvaitr-text08  ">
                <td>Tên vai trò</td>
                <td>Số người dùng</td>
                <td>Mô tả</td>
                <td>        </td>
              <!-- <div class="qunlvaitr-frame624710">
                <span class="qunlvaitr-text10  ">
                  <span>Kế toán</span>
                </span> -->
</tr>
@foreach($roles as $role)
<?php $i=0; ?>
<tr class="alldata">
<td>{{$role->tenvaitro}}</td>
@foreach($users as $user)
  @if($user->vaitro === $role->tenvaitro)
    <?php $i++; 
    ?>
    @endif
@endforeach
<td>{{$i}}</td>
<td>{{$role->mota}}</td>
<td>
<a href="{{ route('role.edit',$role->id) }}">Cập nhật</a>
</td>

</tr>
@endforeach
<tbody class="searchdata" id="Content"></tbody>
</table>
              
<div class="create-index">
            <div class="qunlvaitr-vuesaxboldaddsquare">
              <div class="qunlvaitr-vuesaxboldaddsquare1">
                <div class="qunlvaitr-addsquare">
                  <img
                    src="{{asset('playground_assets/vectori285-oc8h.svg')}}"
                    alt="VectorI285"
                    class="qunlvaitr-vector02"
                  />
                </div>
              </div>
            </div>
            
            <a class="qunlvaitr-text56" href="{{ route('role.create') }}">Thêm vai trò</a>
            
          </div>
          <div class="qunlvaitr-group318">
          <span class="qunlvaitr-text77 chitiettieude "><span>Từ khoá</span></span>

            <input tyoe="text" id="search" class="qunlvaitr-input qunlvaitr-text75">
            <button onclick="getValue()">
            <img
                src="{{asset('playground_assets/fisearchi285-4rgo.svg');}}"
                alt="fisearchI285"
                class="qunlvaitr-fisearch"
              />
            </button>
          
          </div>
          <script>
                    function getValue() {
                        var search = jQuery('#search').val();
            return search;
                    }
                    jQuery(document).ready(function () {
            
                        jQuery('#search').on('change', function () {

              var search =getValue();
                            if (search) {
                                $('.alldata').hide();
                                $('.searchdata').show();
                            }
                            else {
                $('.alldata').show();
                                $('.searchdata').hide();
                            }

                            jQuery.ajax({
                                url: 'role/search/search',
                                type: "GET",
                                data: { 'search': search },
                                success: function (data) {
                                    console.log(data);
                                    $('#Content').html(data);
                                }
                            });
                        });

                    });
                </script>
                
          <span class="list-index">
            <span>Danh sách vai trò</span>
          </span>
        </div>
      </div>
    </div>
  </body>
</html>
