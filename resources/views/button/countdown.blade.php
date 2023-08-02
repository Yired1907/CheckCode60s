<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lấy Mã Captcha</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        .btn-grad {
            background-image: linear-gradient(to right, #b91313 0%, #d30d0db7 100%);
            margin: 10px;
            padding: 10px 10px;
            text-align: center;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
            display: block;
            cursor: pointer;
            float: left;
            border: none;
        }

        .btn-error {
            background-image: linear-gradient(to right, rgba(207, 11, 11, 1) 0%, rgba(185, 180, 4, 1) 100%);
        }

        .btn-grad:hover {
            background-position: right center;
            color: #fff;
            text-decoration: none;
        }
    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

</head>

<body>

    <form method="POST" action="{{ asset('/post-code') }}">
        @csrf
        <div id="lay-ma">
            <button type="button" id="save-keycode" style="font-weight: bold;" class="btn-grad">Lấy Mã Captcha</button>
        </div>
    </form>

    <script>
        window.appUrl = "{{ env('APP_URL') }}";
    </script>
    <!-- ... -->
    <script src={{ asset('/js/main.js') }}></script>
</body>

</html>
