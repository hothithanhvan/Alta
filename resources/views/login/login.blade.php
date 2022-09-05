<!DOCTYPE html>

<html lang="english">

<head>
  <title>Đăng nhập</title>
  <meta property="twitter:card" content="summary_large_image" />
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="utf-8" />
  <meta property="twitter:card" content="summary_large_image" />
  <style data-tag="reset-style-sheet">
    html {
      line-height: 1.15;
    }

    body {
      margin: 0;
    }

    * {
      box-sizing: border-box;
      border-width: 0;
      border-style: solid;
    }

    p,
    li,
    ul,
    pre,
    div,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      margin: 0;
      padding: 0;
    }

    button,
    input,
    optgroup,
    select,
    textarea {
      font-family: inherit;
      font-size: 100%;
      line-height: 1.15;
      margin: 0;
    }

    button,
    select {
      text-transform: none;
    }

    button,
    [type="button"],
    [type="reset"],
    [type="submit"] {
      -webkit-appearance: button;
    }

    button::-moz-focus-inner,
    [type="button"]::-moz-focus-inner,
    [type="reset"]::-moz-focus-inner,
    [type="submit"]::-moz-focus-inner {
      border-style: none;
      padding: 0;
    }

    button:-moz-focus,
    [type="button"]:-moz-focus,
    [type="reset"]:-moz-focus,
    [type="submit"]:-moz-focus {
      outline: 1px dotted ButtonText;
    }

    a {
      color: inherit;
      text-decoration: inherit;
    }

    input {
      padding: 2px 4px;
    }

    img {
      display: block;
    }

    html {
      scroll-behavior: smooth
    }
  </style>
  <style data-tag="default-style-sheet">
    html {
      font-family: Inter;
      font-size: 16px;
    }

    body {
      font-weight: 400;
      font-style: normal;
      text-decoration: none;
      text-transform: none;
      letter-spacing: normal;
      line-height: 1.15;
      color: var(--dl-color-gray-black);
      background-color: var(--dl-color-gray-white);

    }
  </style>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" data-tag="font" />
  <link rel="stylesheet" href="{{asset('css\style.css'); }}" />
</head>

<body>
  <div>
    <link href="{{asset('css\dangnhap.css'); }}" rel="stylesheet" />

    <div class="framengnhp-container">
      <div class="framengnhp-framengnhp">
       @include('login.rightLogin');
        <form action="#">
          <div class="framengnhp-frame624727">
            <span class="framengnhp-text 1818Reg">
              <span>Tên đăng nhập *</span>
            </span>
            <input type="text" placeholder="lequynhaivan01" class="framengnhp-input" />
          </div>
          <div class="framengnhp-frame624728">
            <span class="framengnhp-text02 1818Reg">
              <span>Mật khẩu *</span>
            </span>
            <input type="text" placeholder="123" class="framengnhp-input" alt="ueyeslashI311" src="{{asset('playground_assets\ueyeslashi311-pqjr.svg'); }}" class="framengnhp-ueyeslash" />


          </div>
          <button href=# class="framengnhp-text04 1414Reg">
            <span>Quên mật khẩu?</span>
          </button>
          <button href=# class="framengnhp-button">
            <span class="framengnhp-text06 1616Bold">
              <span>Đăng nhập</span>
            </span>
          </button>
        </form>
        <div class="framengnhp-logoalta">
          <div class="framengnhp-group">
            <div class="framengnhp-group001">
              <img alt="VectorI312" src="{{asset('playground_assets/vectori312-lj0h.svg');}}" class="framengnhp-vector" />
              <img alt="VectorI312" src="{{asset('playground_assets/vectori312-6hu5k.svg');}}" class="framengnhp-vector001" />
            </div>
            <div class="framengnhp-group002">
              <img alt="VectorI312" src="{{asset('playground_assets/vectori312-z78w.svg');}}" class="framengnhp-vector002" />
              <img alt="VectorI312" src="{{asset('playground_assets/vectori312-3io.svg');}}" class="framengnhp-vector003" />
              <img alt="VectorI312" src="{{asset('playground_assets/vectori312-cel.svg');}}" class="framengnhp-vector004" />
            </div>
            <div class="framengnhp-group003">
              <img alt="VectorI312" src="{{asset('playground_assets/vectori312-sbqj.svg');}}" class="framengnhp-vector005" />
              <img alt="VectorI312" src="{{asset('playground_assets/vectori312-xr9w.svg');}}" class="framengnhp-vector006" />
            </div>
            <img alt="VectorI312" src="{{asset('playground_assets/vectori312-h7jq.svg');}}" class="framengnhp-vector007" />
            <img alt="VectorI312" src="{{asset('playground_assets/vectori312-g97.svg');}}" class="framengnhp-vector008" />
          </div>
        </div>

        <span class="framengnhp-text08 3434Reg">
          <span>
            <span>Hệ thống</span>
            <br />
            <span></span>
          </span>
        </span>
        <span class="framengnhp-text13 3636Xbold">
          <span>QUẢN LÝ XẾP HÀNG</span>
        </span>
      </div>
    </div>
  </div>
</body>

</html>