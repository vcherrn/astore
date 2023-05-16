<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
  
<div class="container px-12 py-8 mx-auto">
        

        <div class="row ">
            @foreach ($products as $product)
            <div class=" col  text-center">
                <img src="{{ 'storage/'. $product->photo }}" style="max-width:300px; max-height:200px;" alt="" class="w-full max-h-60">
                <div class="px-5 py-3 ">
                    <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                    <h5 class="mt-2 text-gray-500">{{ $product->price }}р</h5>
                      <button class="btn btn-outline-danger add-to-cart">
                            <a style="text-decoration: none; color:black" href ="{{ URL::to('cart/'.$product->id) }}"> Add to cart</a>      
                      </button>
                </div>
                
            </div>
            @endforeach
        </div>

    </div>
    <style>

    </style>
       
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>