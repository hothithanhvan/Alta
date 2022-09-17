@extends('layout.menubar')
@extends('layout.header')
@extends('layout.hello')

  <body>
    <div>
      <link href="{{asset('css/vaitro.css')}}" rel="stylesheet" />

      <div class="qunlvaitr-container">
        <div class="qunlvaitr-qunlvaitr">
          <div class="qunlvaitr-topbar">
            <div class="qunlvaitr-breadcrumbs">
              <button class="qunlvaitr-button">
                <span class="qunlvaitr-text 2020Bold">
                  <span>Cài đặt hệ thống</span>
                </span>
              </button>
              <img
                src="{{asset('playground_assets/uanglerighti285-j3m9.svg');}}"
                alt="uanglerightI285"
                class="qunlvaitr-uangleright"
              />
              <button class="qunlvaitr-button1">
                <span class="qunlvaitr-text02 2020Bold">
                  <span>Quản lý vai trò</span>
                </span>
              </button>
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
          <table class="qunlvaitr-frame624721">
              <tr class="qunlvaitr-frame624691 qunlvaitr-text08 1616Bold">
                <td>Tên vai trò</td>
                <td>Số người dùng</td>
                <td>Mô tả</td>
                <td>        </td>
              <!-- <div class="qunlvaitr-frame624710">
                <span class="qunlvaitr-text10 1414Reg">
                  <span>Kế toán</span>
                </span> -->
</tr>
@foreach($roles as $role)
<?php $i=0; ?>
<tr>
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
</table>
              
<div class="qunlvaitr-component2">
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
          <form>
          <div class="qunlvaitr-group318">
          <span class="qunlvaitr-text77 1616Semi"><span>Từ khoá</span></span>
<div class ="qunlvaitr-input">
            <input tyoe="text" name="key" class=" qunlvaitr-text75">
              
            
            <button type="submit">
            <img
                src="{{asset('playground_assets/fisearchi285-4rgo.svg');}}"
                alt="fisearchI285"
                class="qunlvaitr-fisearch"
              />
            </button>
          </div>
          </div>
          </form>
          <span class="qunlvaitr-text79 2424Bold">
            <span>Danh sách vai trò</span>
          </span>
        </div>
      </div>
    </div>
  </body>
</html>
