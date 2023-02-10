<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Rip Book</title>
    <!-- Jquery Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .main {
            width: 100vw;
            height: 100vh;
            position: relative;
        }

        .primary {
            width: 60vw;
            height: 60vh;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        h3 {
            text-align: center;
        }

        .primary a {
            color: #ff0000;
            font-weight: 600;
            font-size: 24px;
            margin-top: 20px;
            display: flex;
            cursor: pointer;
            justify-content: center;
            align-items: center;
        }

        .primary a:hover {
            color: blue;
        }
    </style>
</head>

<body>
    <div class="main">
        <div class="primary">
            <h3>You are Sucessfully Logged in</h3>
            <form action="{{ route('logout') }}" style="display: none;" method="post" id="lgut">
                @csrf
                <input type="submit" id="logoutbtn">
            </form>
            <a type="button" onclick="$('#lgut').submit()">Logout</a>
        </div>
    </div>
</body>

</html>