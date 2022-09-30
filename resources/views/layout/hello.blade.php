<link href="{{asset('css/dangnhap.css');}}" rel="stylesheet" />
<link href="{{asset('css/style.css');}}" rel="stylesheet" />

<div class="taikhoancanhan-frame271">
                        <div class="taikhoancanhan-vuesaxboldnotification">
                            <div class="taikhoancanhan-vuesaxboldnotification1">
                            <button onclick="notifi()">
                                <img src="{{asset('playground_assets/notification.svg');}}" 
                                alt=" VectorI194" class="taikhoancanhan-vector" />                           
</button>

<script>
    function notifi()
    {
        alert("Chức năng đang cập nhật");
    }
    </script>
                                </div>
                            </div>
                        </div>
                    </div>


<div class="taikhoancanhan-frame625226">
                        <img src="http://localhost:8000/images/{{Auth::user()->image}}" class="taikhoancanhan-unsplash-fyl8s-m-c2j2q"/>

                        <div class="taikhoancanhan-group296">
                            <span class="taikhoancanhan-text02">
                                <span>Xin chào</span>
                            </span>
                            <a class="taikhoancanhan-text04" href="{{ route('user',Auth::user()->id )}}">
{{Auth::user()->hoten}}
                            </a>
                        </div>
                    </div>
                    
                    <!-- {{Auth::user()->image}} -->
