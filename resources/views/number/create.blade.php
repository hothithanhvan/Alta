@extends('layout.menubar')
@extends('layout.header')
@extends('layout.alert')
@extends('layout.hello')
<title>Thêm dịch vụ</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
	integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
	crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
	integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
	crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
	integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
	crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<body>
	<div>
		<link href="{{asset('css/capso.css');}}" rel="stylesheet" />

		<div class="capsomoi-container">
			<div class="container-all">
				<div class="topbar-all">
					<div class="breadcrumbs">
					@include('number.breadscrum')
						<img src="{{asset('playground_assets/uanglerighti339-svs4.svg');}}" alt="uanglerightI339"
							class="capsomoi-uangleright1" />
						<button class="capsomoi-button2">
							<span class="capsomoi-text04  ">
								<span>Cấp số mới</span>
							</span>
						</button>
					</div>
					
				</div>
				<span class="capsomoi-text10 list-index "><span>Quản lý cấp số</span></span>

				<div class="capsomoi-frame624726">
					<span class="capsomoi-text26 "><span>CẤP SỐ MỚI</span></span>
					<span class="capsomoi-text28 chitiettieude ">
						<span>Dịch vụ khách hàng lựa chọn</span>
					</span>
					<form action="{{ route('number.store') }}" method="post">
              @csrf
              <select id="select" name="tendichvu" class="capsomoi-text30 capsomoi-dropdown  ">
                @foreach($services as $service)
                <option id="option" value="{{ $service->madichvu}}">{{ $service->tendichvu }}</option>
                
				@endforeach
        </select>
              
        
              <div class="capsomoi-frame624757">
                <div class="capsomoi-frame624750">
                  <button onclick="getValue()" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    class="capsomoi-button3 capsomoi-text32">In số</button>
                  
                    <a href="{{route('number.index')}}" class="capsomoi-button4">
                    <span class="capsomoi-text34"><span>Hủy bỏ</span></span>
</a>

</form>

                </div>
              </div>
              
           
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="popupins-popupins">
        <button type="button" class="popupins-fix btn-close" data-bs-dismiss="modal" aria-label="Close">
        </button>
          <div class="popupins-frame624776">
            <div class="popupins-frame624778">
             
              <span class="popupins-text 2222Bold">
                <span>Thời gian cấp:</span>
              </span>
              <span id="thoigiancap" class="popupins-text02 2222Bold">
              </span>
            </div>
            <div class="popupins-frame624779">
              <span class="popupins-text04 2222Bold">
                <span>Hạn sử dụng:</span>
              </span>
              <span id="hansd" class="popupins-text06 2222Bold">
              </span>
            </div>
          </div>
          <div class="popupins-group625227">
            <span class="popupins-text08 ">
              <span>Số thứ tự được cấp</span>
            </span>
            <span id="stt" class="popupins-text10"></span>
            <span class="popupins-text12">
			DV:
			 <span id="tendichvu" class="popupins-text13"></span>

              <span>(tại quầy số 1)</span>
            </span>
          </div> 
 
    </div>
    <!-- <button class="btn btn-primary" type="submit">Tạo số</button> -->
    </div>
   
  </div>
  </form>
  <script>
var i =0;
function getValue() {
	i++;
	jQuery(document).ready(function () 
	{
		
			var tendichvu = jQuery( "#select option:selected" ).text();
			var madichvu = jQuery('#select').val();
			var x = new Date();
			var thoigiancap = x.toLocaleDateString() + ' ' + x.toLocaleTimeString();
			var hansd = x.toLocaleDateString() + ' 17:30:00 ';
			var y = String(i).padStart(4, '0'); 
			var stt = madichvu + y;
			
			
			document.getElementById("tendichvu").innerHTML = tendichvu;
			document.getElementById("thoigiancap").innerHTML = thoigiancap;
			document.getElementById("hansd").innerHTML = hansd;
			document.getElementById("stt").innerHTML = stt;
			jQuery.ajax({
				url: '/tendichvu/thoigiancap/hansd/stt',
				type: "GET",
				data: { 'tendichvu': tendichvu,'thoigiancap': thoigiancap,
				'hansd': hansd,'stt':stt},
			});
		
	});

}

</script>
				</div>
       
      </div>
  </div>
</body>

</html>
