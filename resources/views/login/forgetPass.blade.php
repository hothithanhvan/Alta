@extends('layout.header')
<title>Quên mật khẩu</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<body>
    <div>
        <link href="{{asset('css\dangnhap.css'); }}" rel="stylesheet" />

        <div class="qunmtkhu-container">
            <form method="post" action="{{url('enterMail')}}">
                @csrf
               
            <div class="qunmtkhu-qunmtkhu">
                @include('login.rightForget');
                <span class="qunmtkhu-text 2222Bold">
                    <span>Đặt lại mật khẩu</span>
                </span>
                <div class="qunmtkhu-group322">
                    <input type="text" id="email" placeholder="" class="qunmtkhu-input" />
                    <span class="qunmtkhu-text2 1818Reg">
                        <span>Vui lòng nhập email để đặt lại mật khẩu của bạn *</span>
                    </span>
                </div>
                <button class="qunmtkhu-button">
                    <span class="qunmtkhu-text4  "><span>Hủy</span></span>
                </button>
                <button onclick="getValue()" type="button" class="qunmtkhu-button1 qunmtkhu-text6  ">Tiếp tục</button>
</form>
<script>
					function getValue() {
						var email = jQuery('#email').val();
            return email;
					}
					jQuery(document).ready(function () {
            
						jQuery('#email').on('change', function () {

              var email =getValue();
							jQuery.ajax({
								url: 'enterMail/email',
								type: "get",
								data: { 'email': email },
								success : function (data) {
                                    alert('Vui lòng check mail');
                                }
							});
                            
						});

					});
				</script>
				
                <div class="qunmtkhu-logoalta">
                    <div class="qunmtkhu-group">
                        <div class="qunmtkhu-group1">
                            <img src="{{asset('playground_assets/vectori317-rrr8.svg');}}" alt="VectorI317" class="qunmtkhu-vector" />
                            <img src="{{asset('playground_assets/vectori317-xw6c.svg');}}" alt="VectorI317" class="qunmtkhu-vector1" />
                        </div>
                        <div class="qunmtkhu-group2">
                            <img src="{{asset('playground_assets/vectori317-rlc.svg');}}" alt="VectorI317" class="qunmtkhu-vector2" />
                            <img src="{{asset('playground_assets/vectori317-4f6d.svg');}}" alt="VectorI317" class="qunmtkhu-vector3" />
                            <img src="{{asset('playground_assets/vectori317-li4.svg');}}" alt="VectorI317" class="qunmtkhu-vector4" />
                        </div>
                        <div class="qunmtkhu-group3">
                            <img src="{{asset('playground_assets/vectori317-niw.svg');}}" alt="VectorI317" class="qunmtkhu-vector5" />
                            <img src="{{asset('playground_assets/vectori317-wfn8.svg');}}" alt="VectorI317" class="qunmtkhu-vector6" />
                        </div>
                        <img src="{{asset('playground_assets/vectori317-rnuc.svg');}}" alt="VectorI317" class="qunmtkhu-vector7" />
                        <img src="{{asset('playground_assets/vectori317-yizf.svg');}}" alt="VectorI317" class="qunmtkhu-vector8" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
