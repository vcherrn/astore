<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<div class="container px-6 mx-auto ">

                <div class="flex justify-center my-6 ">
                    <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                      @if ($message = Session::get('success'))
                          <div class="p-4 mb-3 bg-green-400 rounded">
                              <p class="text-green-800">{{ $message }}</p>
                          </div>
                      @endif
                        <h3 class="text-3xl font-bold">Cart</h3>
                      <div class="flex-1">
                        <table class="w-full text-sm lg:text-base" cellspacing="0">
                          <thead>
                            <tr class=" h-12 uppercase">
                              <th class="p-3 hidden md:table-cell"></th>
                              <th class="p-3 text-left">Name</th>
                              <th class="p-3 pl-5 text-left lg:text-right lg:pl-0">
                                
                                <span class="p-3 hidden lg:inline">Quantity</span>
                              </th>
                              <th class="p-3 hidden text-right md:table-cell"> Price</th>
                              <th class="p-3 hidden text-right md:table-cell"> Remove </th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($products as $product)
                             
                            <tr>
                              <td class="hidden pb-4 md:table-cell">
                                <a href="#">
                                 
                                  <img src="{{ 'storage/'. $product->photo }}" class="w-20 rounded" style="max-width:300px;" alt="Thumbnail">
                                </a>
                              </td>
                              <td>
                                <a style=" text-decoration: none; color:black" href="#">
                                  <p class="mb-2 md:ml-4 text-purple-600 font-bold">{{ $product->name }}</p>
                                  
                                </a>
                              </td>
                              <td class="justify-center mt-6 md:justify-end md:flex">
                                <div class="h-10 w-28">
                                  <div class="relative flex flex-row w-full h-8">
                                    
                                    <form action="{{ route('cart.update') }}" method="POST">
                                      @csrf
                                      <input type="hidden" name="id" value="{{ $product->product_id}}" >
                                    <input type="text" name="quantity" value="{{ $product->count }}" 
                                    class="w-16 text-center h-6 text-gray-800 outline-none rounded border border-blue-600" />
                                    <button class="px-4 mt-1 py-1.5 text-sm rounded rounded shadow text-violet-100 bg-violet-500">Update</button>
                                    </form>
                                  </div>
                                </div>
                              </td>
                              <td class="hidden text-right md:table-cell">
                                <span class="text-sm font-medium lg:text-base">
                                    ${{ $product->price }}
                                </span>
                              </td>
                              <td class="hidden text-right md:table-cell">
                                <form action="{{ route('cart.remove') }}" method="POST">
                                  @csrf
                                  <input type="hidden" value="{{ $product->product_id }}" name="id">
                                  <button class="px-4 py-2  shadow rounded-full">x</button>
                              </form>
                                
                              </td>
                            </tr>
                            @endforeach
                             
                          </tbody>
                        </table>
                        <div>
                        
                        </div>
                        <div>
                          Total: {{ Apackage\Astore\Models\User_Product::getTotal() }}р
                        </div>
                        <div>
                          
                          
                          <form action="{{ route('order.show') }}" method="GET">
                            @csrf
                            <button class="px-6 py-2 text-sm  rounded shadow text-red-100 bg-red-500">Go to order</button>
                          </form>
                        </div>


                      </div>
                    </div>
                  </div>
            </div>

  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>