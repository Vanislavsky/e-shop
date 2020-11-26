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
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{route('basket')}}">Корзина</a></li>
            </ul>
        </div>
    </div>
</nav>


<div class="container">
    <div class="starter-template">
        <h1>{{$category->name}}</h1>

        <div class="row">
            @foreach($products as $product)
                <div class="thumbnail">
                    <img src= "{{ asset( $product->image )}}" alt="iPhone X 64GB">
                    <div class="caption">
                        <h3>{{ $product->name}}</h3>
                        <p>{{ $product->price}}</p>
                        <p>
                            <a href="#" class="btn btn-primary" role="button">В корзину</a>
                            <a href="#" class="btn btn-default" role="button">Подробнее</a>
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
</body>
</html>