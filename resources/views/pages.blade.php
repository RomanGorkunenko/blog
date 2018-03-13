<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Styles -->
    <style>
        .content {
            max-width: 40%;
            padding: 30px 30px 6px 30px;
            border: 1px solid rgba(0, 0, 0, .2);
            border-radius: 5px;
            background-clip: padding-box;
            background: rgba(0, 0, 0, 0.2);
            box-shadow: 0 0 13px 3px rgba(0, 0, 0, .5);
            overflow: hidden;
        }

        h2 {
            margin: 0 auto;
        }

        img {
            float: left;
        }

        .txt {
            float: right;
            word-break: break-all;
            width: 60%;
        }

        ul {
            margin: 0;
        }

    </style>
</head>

<body>
    <div class="content">
        <img src="../uploads/{{$filename}}" />
        <div class='txt'>
            <h2>{{$fio}}</h2>
            <span>email: {{$email}}</span><br>
            <span>телефон: {{$phone}}</span><br>
            <span>номер банковской карты: {{$card}}</span><br>
            <span>комментарий: {{$commens}}</span><br>
            <span>любимые жанры фильмов:</span><br>
            <ul>
                @foreach ($genre as $item)
                <li>{{ $item }}</li>
                @endforeach
            </ul>
            <span>пол: {{$sex}}</span><br>
            <span>день недели: {{$days}}</span><br>
        </div>
    </div>
</body>

</html>
