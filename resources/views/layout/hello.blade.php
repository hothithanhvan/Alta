<link href="{{asset('css/dangnhap.css');}}" rel="stylesheet" />
<link href="{{asset('css/style.css');}}" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<div class="taikhoancanhan-frame271">
  <a  href="#" onclick="showNotify()" role="button" data-bs-toggle="dropdown" aria-expanded="false">
  <img src="{{asset('playground_assets/notification.svg');}}" 
                                alt=" VectorI194" class="taikhoancanhan-vector" />  
</a>

  <ul id="Content1" class="dropdown-menu">
    <!-- <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li> -->
  </ul>
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
               

