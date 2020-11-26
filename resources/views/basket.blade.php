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
            <a class="navbar-brand" href="{{route('main' )}}">Интернет Магазин</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-center">
                @foreach($categories as $category)
                    <li><a href="{{route('categ', $category->code )}}">{{$category->name}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>

<div class="starter-template">
    <h1>Корзина</h1>
    <p>Оформление заказа</p>
    <div class="panel">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Название</th>
                <th>Кол-во</th>
                <th>Цена</th>
                <th>Стоимость</th>
            </tr>
            </thead>
            <tbody>
            @foreach($order->products as $product)
            <tr>
                <td>
                    <a href="http://laravel-diplom-1.rdavydov.ru/mobiles/iphone_x_64">
                        <img height="56px" src= "{{ asset( $product->image )}}">
                        {{ $product->name}}
                    </a>
                </td>
                <td><span class="badge">{{ $product->pivot->count}}</span>
                    <div class="btn-group">
                        <form action="{{route('basket_remove', $product)}}" method="POST">
                            <button type="submit" class="btn btn-danger" href=""><span
                                class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                            @csrf
                        </form>

                        <form action="{{route('basket_add', $product)}}" method="POST">
                            <button type="submit" class="btn btn-success" href=""><span
                                class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                            @csrf
                        </form>
                    </div>
                </td>
                <td>{{ $product->price}} руб</td>
                <td>{{ $product->getPrice($product->pivot->count)}} руб</td>
            </tr>
            @endforeach
            
            <tr>
                <td colspan="3">Общая стоимость:</td>
                <td>{{$order->calculate()}} руб.</td>
            </tr>
            </tbody>
        </table>
        <br>
        <div class="btn-group pull-right" role="group">
            <a type="button" class="btn btn-success" href="http://127.0.0.1:8000/basket/place">Оформить заказ</a>
        </div>
    </div>
</div>

</body>
</html>
