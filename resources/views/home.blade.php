<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Интернет Магазин</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="http://laravel-diplom-1.rdavydov.ru">Интернет Магазин</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-center">
                @foreach($categories as $category)
                    <li><a href="{{route('categ', $category->code )}}">{{$category->name}}</a></li>
                @endforeach
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{route('basket')}}">Корзина</a></li>
            </ul>
        </div>
    </div>
</nav>


<div class="container">
    <div class="starter-template">
    <div class="form-group row">
            <label for="email" class="col-sm-4 col-form-label text-md-right">E-Mail</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control"
                       name="email" value="" required autofocus>

            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">Пароль</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control"
                       name="password" required>

            </div>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Войти
                </button>
            </div>
        </div>
    </div>
</div>
</body>
</html>

