<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        form {
            max-width: 30%;
            padding: 30px 30px 6px 30px;
            border: 1px solid rgba(0, 0, 0, .2);
            border-radius: 5px;
            background-clip: padding-box;
            background: rgba(0, 0, 0, 0.2);
            box-shadow: 0 0 13px 3px rgba(0, 0, 0, .5);
            overflow: hidden;
        }

        input,
        textarea {
            border: 1px solid rgba(255, 255, 255, .4);
            border-radius: 4px;
            font-family: 'Open Sans', sans-serif;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 70%;
        }

        input[type=submit] {
            cursor: pointer;
        }


        .btn {
            width: 138px;
            height: 44px;
            border-radius: 4px;
            float: right;
            border: 1px solid #253737;
            background: rgba(0, 0, 0, .2);
            padding: 10.5px 21px;
            border-radius: 6px;
            color: #e1e1e1;
        }

        .btn:hover {
            border: 1px solid #253737;
            text-shadow: #333333 0 1px 0;
            background: rgba(0, 0, 0, .2);
            color: #fff;
        }

        .btn:active {
            margin-top: 1px;
            text-shadow: #333333 0 -1px 0;
            border: 1px solid #333333;
            background: #ffCC00;
            outline: none;
        }

    </style>
</head>

<body>
    <div class="content">

        <form method="POST" action="{{route('profile')}}" enctype="multipart/form-data">
            @if ($errors->any())
            <div class="danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif фио:
            <br> <input type='text' name='fio' /><br> email:
            <br> <input type='email' name='email' /><br> телефон:
            <br><input type='text' name='phone' /><br> номер банковской карты:<br><input type='text' name='card' /><br> комментарий:
            <br><textarea name='commens'></textarea><br> жанры фильмов:<br>
            <input type="checkbox" name="genre[]" id="comedy" value="комедия">
            <label for="comedy">комедия</label>
            <input type="checkbox" name="genre[]" id="action" value="триллер">
            <label for="action">триллер</label>
            <input type="checkbox" name="genre[]" id="horror" value="ужасы">
            <label for="horror">ужасы</label>
            <input type="checkbox" name="genre[]" id="adventure" value="приключения">
            <label for="adventure">приключения</label><br> Пол:
            <br>
            <input type="radio" name="sex" id="man" value="мужчина">
            <label for="man">мужчина</label>
            <input type="radio" name="sex" id="woman" value="женщина">
            <label for="woman">женщина</label><br> дни недели:<br> <select name="days">
		        <option value="понедельник">понедельник</option>
		        <option value="вторник">вторник</option>
		        <option value="среда">среда</option>
		        <option value="четверг">четверг</option>
		        <option value="пятница">пятница</option>
		        <option value="суббота">суббота</option>
		        <option value="воскресенье">воскресенье</option>
            </select><br> Загрузка картинки:<br> <input name="image" id="image" type="file"><br>
            <button type="submit" name='add' class='btn'>add</button>
        </form>

    </div>
    </div>
</body>

</html>
