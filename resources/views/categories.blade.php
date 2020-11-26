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

<div class="container">
    <div class="starter-template">
        <h1>Категории</h1>

        <div class="row">
            @foreach($categories as $category)
                <div class="thumbnail">
                    <img src= "{{ asset( $category->image )}}" alt="iPhone X 64GB">
                    <div class="caption">
                        <h3>{{ $category->name}}</h3>
                        <p>{{ $category->description}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
</body>
</html>