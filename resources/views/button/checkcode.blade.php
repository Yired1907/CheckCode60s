<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        .btn-copy {
            padding: 5px 10px;
            border: none;
            background-color: #f2f2f2;
            color: #333;
            cursor: pointer;
        }

        .btn-copy i {
            margin-right: 5px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="POST" action="{{ asset('/sub-code') }}">
                    @csrf
                    <input class="form-control mt-3" type="text" id="code" name="code" placeholder="Nhập mã"
                        required />
                    <button type="submit" class="btn btn-success mt-3 text-center">Click vào đây để tiếp tục</button>
                    <br><a target="blank" href="{{ asset('/count-down') }}">Nhấp vào đây để lấy mã</a>
                    @if (Session::has('error'))
                        <div class="alert alert-danger mt-3">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</body>

</html>
