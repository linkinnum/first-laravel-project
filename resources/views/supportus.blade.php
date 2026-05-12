<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- <h1>Please support US</h1> -->

    {{--sdlkjsdlksd
    rpofldk;sd
    cvxkls
    --}}

    <!-- Test kdfl;ksdh Comment -->

    @php
      echo "Htllo this is PHP";
    @endphp

    @for($i=0;$i<10;$i++)

    <p>{{$i}}</p>

    @if($i==3)

      <h1> This is {{$i}} </h1>
    @endif

    @endfor

    @foreach ($products as $product)
        <h1>{{$product}}</h1>
    @endforeach
</body>
</html>
