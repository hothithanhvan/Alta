<link href="{{asset('css/thietbi.css');}}" rel="stylesheet" />
<link href="{{asset('css/style.css');}}" rel="stylesheet" />
<div class="quanlythietbi-menubar">
      <div class=" quanlythietbi-frame264">
        <div class=" success quanlythietbi-frame259">
          <div class="quanlythietbi-vuesaxlinearelement4">
            <div class="quanlythietbi-vuesaxlinearelement41">
              <div class="quanlythietbi-element4">
                <img src="{{asset('playground_assets/vectori217-m4j9.svg');}}" alt="VectorI217" class="quanlythietbi-vector03" />
                <img src="{{asset('playground_assets/vectori217-kre1.svg');}}" alt="VectorI217" class="quanlythietbi-vector04" />
                <img src="{{asset('playground_assets/vectori217-sq4.svg');}}" alt="VectorI217" class="quanlythietbi-vector05" />
                <img src="{{asset('playground_assets/vectori217-jh24.svg');}}" alt="VectorI217" class="quanlythietbi-vector06" />
              </div>
            </div>
          </div>
          <a href="{{url('dashboard')}}" onclick="openCity(this, 'orange')" class="tablink quanlythietbi-text206  ">Dashboard</a>
        </div>
      </div>
      <div class="quanlythietbi-frame265">
        <div class="success quanlythietbi-frame260">
          <div class="quanlythietbi-vuesaxlinearmonitor">
            <div class="quanlythietbi-vuesaxlinearmonitor1">
              <div class="quanlythietbi-monitor">
                <img src="{{asset('playground_assets/vectori209-no6b.svg');}}" alt="VectorI217" class="quanlythietbi-vector07" />
              </div>
            </div>
          </div>
          <a href="{{url('device')}}" id="thietbi" class="quanlythietbi-text206">Thiết bị</a>
        </div>
      </div>
      <div class="quanlythietbi-frame266">
        <div class="success quanlythietbi-frame261">
          <div class="quanlythietbi-frame332">
            <div class="quanlythietbi-group305">
              <img src="{{asset('playground_assets/ellipse7i217-edz-200h.png');}}" alt="Ellipse7I217"
                class="quanlythietbi-ellipse7" />
              <img src="{{asset('playground_assets/ellipse8i217-w1j6-200w.png');}}" alt="Ellipse8I217"
                class="quanlythietbi-ellipse8" />
              <img src="{{asset('playground_assets/ellipse9i217-hw9q-200h.png');}}" alt="Ellipse9I217"
                class="quanlythietbi-ellipse9" />
            </div>
            <img src="{{asset('playground_assets/framei217-3buw.svg');}}" alt="FrameI217" class="quanlythietbi-frame" />
            <div class="quanlythietbi-group304">
              <img src="{{asset('playground_assets/vectori217-2hzd.svg');}}" alt="VectorI217" class="quanlythietbi-vector11" />
              <img src="{{asset('playground_assets/vectori217-5obp.svg');}}" alt="VectorI217" class="quanlythietbi-vector12" />
            </div>
          </div>
          <a href="{{url('service')}}" class="quanlythietbi-text206  ">Dịch vụ</a>
        </div>
      </div>
      <div class="quanlythietbi-frame267">
        <div class="success quanlythietbi-frame262">
          <div class="quanlythietbi-icondasboard03">
            <img src="{{asset('playground_assets/filayersi217-q0db.svg');}}" alt="filayersI217" class="quanlythietbi-filayers" />
          </div>
          <a href="{{url('number')}}" class="quanlythietbi-text206  ">Cấp số</a>
        </div>
      </div>
      <div class="quanlythietbi-frame270">
        <div class="success quanlythietbi-frame2621">
          <img src="{{asset('playground_assets/framei217-5a9.svg');}}" alt="FrameI217" class="quanlythietbi-frame1" />
          <a href="{{url('report')}}" class="quanlythietbi-text206  ">Báo cáo</a>
        </div>
      </div>
      <div class="quanlythietbi-frame268">
      
        <div class="quanlythietbi-frame263">
        <div class="success quanlythietbi-frame2633"></div>
          <div class="quanlythietbi-vuesaxoutlinesetting">
            <div class="quanlythietbi-vuesaxoutlinesetting1">
              <div class="quanlythietbi-setting">
                <img src="{{asset('playground_assets/vectori217-m7g.svg');}}" alt="VectorI217" class="quanlythietbi-vector13" />
                <img src="{{asset('playground_assets/vectori217-4ks.svg');}}" alt="VectorI217" class="quanlythietbi-vector14" />
              </div>
            </div>
          </div>
          <div class="dropdown">

  <button onclick="myFunction()" class="quanlythietbi-text206 dropbtn">Cài đặt hệ thống</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="{{url('role')}}">Quản lý vai trò</a>
    <a href="{{url('account')}}">Quản lý tài khoản</a>
    <a href="{{url('dairy')}}">Nhật ký người dùng</a>
  </div>
</div>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
          <!-- <a href="{{url('role')}}" class="quanlythietbi-text206  ">Cài đặt hệ thống</a> -->
          
          <!-- <img src="{{asset('playground_assets/fimoreverticali217-j25.svg');}}" alt="fimoreverticalI217"
            class="quanlythietbi-fimorevertical" /> -->
             
        </div>
        
      </div>
      <div class="quanlythietbi-frame269">
        <div class="quanlythietbi-frame2631">
          <img src="{{asset('playground_assets/filogouti217-x5et.svg');}}" alt="filogoutI217" class="quanlythietbi-filogout" />
          <a href="{{url('/logout')}}" class="quanlythietbi-text218" >Đăng xuất</a>
        </div>
      </div>
      <div class="quanlythietbi-logoalta">
        <div class="quanlythietbi-group">
          <div class="quanlythietbi-group1">
            <img src="{{asset('playground_assets/vectori217-zgdg.svg');}}" alt="VectorI217" class="quanlythietbi-vector15" />
            <img src="{{asset('playground_assets/vectori217-e0e.svg');}}" alt="VectorI217" class="quanlythietbi-vector16" />
          </div>
          <div class="quanlythietbi-group2">
            <img src="{{asset('playground_assets/vectori217-z638.svg');}}" alt="VectorI217" class="quanlythietbi-vector17" />
            <img src="{{asset('playground_assets/vectori217-g23s.svg');}}" alt="VectorI217" class="quanlythietbi-vector18" />
            <img src="{{asset('playground_assets/vectori217-pwxe.svg');}}" alt="VectorI217" class="quanlythietbi-vector19" />
          </div>
          <div class="quanlythietbi-group3">
            <img src="{{asset('playground_assets/vectori217-wfwv.svg');}}" alt="VectorI217" class="quanlythietbi-vector20" />
            <img src="{{asset('playground_assets/vectori217-mn5n.svg');}}" alt="VectorI217" class="quanlythietbi-vector21" />
          </div>
          <img src="{{asset('playground_assets/vectori217-bxgsv.svg');}}" alt="VectorI217" class="quanlythietbi-vector22" />
          <img src="{{asset('playground_assets/vectori217-iv0s.svg');}}" alt="VectorI217" class="quanlythietbi-vector23" />
        </div>
      </div>
</div>
