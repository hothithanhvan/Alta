<link href="{{asset('css/thietbi.css');}}" rel="stylesheet" />
<link href="{{asset('css/style.css');}}" rel="stylesheet" />
<div class="qunlthitb-menubar">
      <div class=" qunlthitb-frame264">
        <div class=" success qunlthitb-frame259">
          <div class="qunlthitb-vuesaxlinearelement4">
            <div class="qunlthitb-vuesaxlinearelement41">
              <div class="qunlthitb-element4">
                <img src="{{asset('playground_assets/vectori217-m4j9.svg');}}" alt="VectorI217" class="qunlthitb-vector03" />
                <img src="{{asset('playground_assets/vectori217-kre1.svg');}}" alt="VectorI217" class="qunlthitb-vector04" />
                <img src="{{asset('playground_assets/vectori217-sq4.svg');}}" alt="VectorI217" class="qunlthitb-vector05" />
                <img src="{{asset('playground_assets/vectori217-jh24.svg');}}" alt="VectorI217" class="qunlthitb-vector06" />
              </div>
            </div>
          </div>
          <a href="" class=" qunlthitb-text206 1616Semi">Dashboard</a>
        </div>
      </div>
      <div class="qunlthitb-frame265">
        <div class="qunlthitb-frame260">
          <div class="qunlthitb-vuesaxlinearmonitor">
            <div class="qunlthitb-vuesaxlinearmonitor1">
              <div class="qunlthitb-monitor">
                <img src="{{asset('playground_assets/vectori209-no6b.svg');}}" alt="VectorI217" class="qunlthitb-vector07" />
              </div>
            </div>
          </div>
          <a href="{{url('device')}}" class="qunlthitb-text206 1616Semi">Thiết bị</a>
        </div>
      </div>
      <div class="qunlthitb-frame266">
        <div class="qunlthitb-frame261">
          <div class="qunlthitb-frame332">
            <div class="qunlthitb-group305">
              <img src="{{asset('playground_assets/ellipse7i217-edz-200h.png');}}" alt="Ellipse7I217"
                class="qunlthitb-ellipse7" />
              <img src="{{asset('playground_assets/ellipse8i217-w1j6-200w.png');}}" alt="Ellipse8I217"
                class="qunlthitb-ellipse8" />
              <img src="{{asset('playground_assets/ellipse9i217-hw9q-200h.png');}}" alt="Ellipse9I217"
                class="qunlthitb-ellipse9" />
            </div>
            <img src="{{asset('playground_assets/framei217-3buw.svg');}}" alt="FrameI217" class="qunlthitb-frame" />
            <div class="qunlthitb-group304">
              <img src="{{asset('playground_assets/vectori217-2hzd.svg');}}" alt="VectorI217" class="qunlthitb-vector11" />
              <img src="{{asset('playground_assets/vectori217-5obp.svg');}}" alt="VectorI217" class="qunlthitb-vector12" />
            </div>
          </div>
          <a href="{{url('service')}}" class="qunlthitb-text206 1616Semi">Dịch vụ</a>
        </div>
      </div>
      <div class="qunlthitb-frame267">
        <div class="qunlthitb-frame262">
          <div class="qunlthitb-icondasboard03">
            <img src="{{asset('playground_assets/filayersi217-q0db.svg');}}" alt="filayersI217" class="qunlthitb-filayers" />
          </div>
          <a href="{{url('number')}}" class="qunlthitb-text206 1616Semi">Cấp số</a>
        </div>
      </div>
      <div class="qunlthitb-frame270">
        <div class="qunlthitb-frame2621">
          <img src="{{asset('playground_assets/framei217-5a9.svg');}}" alt="FrameI217" class="qunlthitb-frame1" />
          <a href="{{url('report')}}" class="qunlthitb-text206 1616Semi">Báo cáo</a>
        </div>
      </div>
      <div class="qunlthitb-frame268">
        <div class="qunlthitb-frame263">
          <div class="qunlthitb-vuesaxoutlinesetting">
            <div class="qunlthitb-vuesaxoutlinesetting1">
              <div class="qunlthitb-setting">
                <img src="{{asset('playground_assets/vectori217-m7g.svg');}}" alt="VectorI217" class="qunlthitb-vector13" />
                <img src="{{asset('playground_assets/vectori217-4ks.svg');}}" alt="VectorI217" class="qunlthitb-vector14" />
              </div>
            </div>
          </div>
          <div class="dropdown">
  <button onclick="myFunction()" class=" qunlthitb-text206 1616Semi dropbtn">Cài đặt hệ thống</button>
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
          <!-- <a href="{{url('role')}}" class="qunlthitb-text206 1616Semi">Cài đặt hệ thống</a> -->
          
          <!-- <img src="{{asset('playground_assets/fimoreverticali217-j25.svg');}}" alt="fimoreverticalI217"
            class="qunlthitb-fimorevertical" /> -->
             
        </div>
        
      </div>
      <div class="qunlthitb-frame269">
        <div class="qunlthitb-frame2631">
          <img src="{{asset('playground_assets/filogouti217-x5et.svg');}}" alt="filogoutI217" class="qunlthitb-filogout" />
          <span class="qunlthitb-text218"><span>Đăng xuất</span></span>
        </div>
      </div>
      <div class="qunlthitb-logoalta">
        <div class="qunlthitb-group">
          <div class="qunlthitb-group1">
            <img src="{{asset('playground_assets/vectori217-zgdg.svg');}}" alt="VectorI217" class="qunlthitb-vector15" />
            <img src="{{asset('playground_assets/vectori217-e0e.svg');}}" alt="VectorI217" class="qunlthitb-vector16" />
          </div>
          <div class="qunlthitb-group2">
            <img src="{{asset('playground_assets/vectori217-z638.svg');}}" alt="VectorI217" class="qunlthitb-vector17" />
            <img src="{{asset('playground_assets/vectori217-g23s.svg');}}" alt="VectorI217" class="qunlthitb-vector18" />
            <img src="{{asset('playground_assets/vectori217-pwxe.svg');}}" alt="VectorI217" class="qunlthitb-vector19" />
          </div>
          <div class="qunlthitb-group3">
            <img src="{{asset('playground_assets/vectori217-wfwv.svg');}}" alt="VectorI217" class="qunlthitb-vector20" />
            <img src="{{asset('playground_assets/vectori217-mn5n.svg');}}" alt="VectorI217" class="qunlthitb-vector21" />
          </div>
          <img src="{{asset('playground_assets/vectori217-bxgsv.svg');}}" alt="VectorI217" class="qunlthitb-vector22" />
          <img src="{{asset('playground_assets/vectori217-iv0s.svg');}}" alt="VectorI217" class="qunlthitb-vector23" />
        </div>
      </div>
</div>