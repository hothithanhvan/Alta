<!DOCTYPE html>

<html lang="english">

<head>
    <title>Quên mật khẩu</title>

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
            font-family: 'Nunito';
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" data-tag="font" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" data-tag="font" />
    <link rel="stylesheet" href="{{asset('css\dangnhap\style.css'); }}" />
</head>

<body>
    <div>
        <link href="{{asset('css\dangnhap\quenmk.css'); }}" rel="stylesheet" />

        <div class="qunmtkhu-container">
            <div class="qunmtkhu-qunmtkhu">
                @include('login.rightForget');
                <span class="qunmtkhu-text 2222Bold">
                    <span>Đặt lại mật khẩu</span>
                </span>
                <div class="qunmtkhu-group322">
                    <input type="text" placeholder="" class="qunmtkhu-input" />
                    <span class="qunmtkhu-text2 1818Reg">
                        <span>Vui lòng nhập email để đặt lại mật khẩu của bạn *</span>
                    </span>
                </div>
                <button class="qunmtkhu-button">
                    <span class="qunmtkhu-text4 1616Bold"><span>Hủy</span></span>
                </button>
                <button class="qunmtkhu-button1">
                    <span class="qunmtkhu-text6 1616Bold"><span>Tiếp tục</span></span>
                </button>
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