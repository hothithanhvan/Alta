<!DOCTYPE html>

<html lang="english">
<head>
<link rel="icon" href="{{ url('playground_assets/Logo alta.svg') }}">
<link rel="icon" type="image/svg" href="C:\wamp64\www\alta\public\playground_assets\Logo alta.svg">
<!-- <link rel="stylesheet " type="text/css"
			href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="{{asset('css/thietbi.css');}}" rel="stylesheet" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> -->
  <script src="{{asset('js/alljs.js')}}"></script>
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
      /* line-height: 1.15; */
      margin: 0;
      padding-right: 10px;
      
    }
    /* option{
      -webkit-appearance: none;
   -moz-appearance: none;
   appearance: none; 
      background-color: white;
      padding: 16px 16px 16px 16px !important;
      height: 100px !important;
      white-space: unset;

    } */

    button,
    select {
      text-transform: none;
      background-color: unset;
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
      font-family: Nunito !important;
    }

    body {
      font-family: Nunito !important;
      font-size: 16px;
      font-style: normal;
      text-decoration: none;
      text-transform: none;
      letter-spacing: normal;
      line-height: 1.15;
      color: var(--dl-color-gray-black);
      background-color: var(--dl-color-gray-white);

    }
    tr:nth-child(even) {background-color: #f2f2f2;}
    a {
    color: #0d6efd;
    text-decoration: none !important;
}
    tr,
    table, 
    td {
      box-sizing: border-box;
      text-indent: initial;
      border-spacing: 2px;
      border-color: grey;
      flex-direction: row;
      align-items: flex-start;
      padding: 9px;
      border-collapse: collapse;
      border: 1px solid #ddd !important;
      border-width: 1px;
    }
    label {
    display: inline-block;
    padding: 1px 5px 1px 1px !important; 
}

  </style>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
    data-tag="font" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    data-tag="font" />
  <link rel="stylesheet" href="{{asset('css/style.css');}}" />

  

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
@yield('content')
</html>
