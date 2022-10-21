@extends('layouts.app')

@section('content')
          <main class="my-8 mb-5 p-3 ml-4 ">
            <div class="container px-6 mx-auto">
                <div class="flex justify-center my-1 mx-3 p-0">
                    <div class="flex flex-col w-full p-2  text-gray-800 bg-gray shadow-sm pin-r pin-y md:w-4/5 lg:w-4/5">
                      @if ($message = Session::get('success'))
                          <div class="p-4 mb-3 bg-green-400 rounded">
                              <p class="text-green-800">{{ $message }}</p>
                          </div>
                      @endif
                        <h3 class="text-3xl text-bold p-3">Cart List</h3>
                        <a class="p-3" href="/our-products">Go Back</a>
                      <div class="flex-1">
                        <table class="w-full text-sm lg:text-base" cellspacing="0">
                          <thead>
                            <tr class="h-12 uppercase ">
                              <th class="hidden md:table-cell"></th>
                              <th class="text-left p-3">Name</th>
                              <th class="pl-5 text-left lg:text-right lg:pl-0">
                                <span class="lg:hidden p-3" title="Quantity"></span>
                                <span class="hidden lg:inline">Quantity</span>
                              </th>
                              <th class="hidden text-right md:table-cell p-3"> price</th>
                              <th class="hidden text-right md:table-cell"> Remove </th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($cartItems as $item)
                            <tr>
                              <td class="hidden pb-4 md:table-cell">
                               
                              <!-- <img src="{{ $item->attributes->image }}" class="w-20 rounded" alt="Thumbnail"> -->
                                  <!-- <img src="{{URL::asset('/images/guitarimg8.jpg')}}" class="w-20 rounded" alt="product" height="100" width="100"> -->
                             
                              </td>
                              <td>
                              
                                  <p class="mb-2 md:ml-4 p-3">{{ $item->name }}</p>
                                  
                        
                              </td>
                              <td class="justify-center mt-6 md:justify-end md:flex p-3 ">
                                <div class="h-10 w-28">
                                  <div class="relative flex flex-row w-full h-8 ">
                                    
                                    <form action="{{ route('cart.update') }}" method="POST">
                                      @csrf
                                      <input class="btn" type="hidden" name="id" value="{{ $item->id}}" >
                                    <input type="number" name="quantity" value="{{ $item->quantity }}" 
                                    class="w-6 text-center bg-gray-300" />
                                    <button type="submit" class="px-2 pb-2 ml-2 btn btn-success bg-blue-500">update</button>
                                    </form>
                                  </div>
                                </div>
                              </td>
                              <td class="hidden text-right md:table-cell p-3">
                                <span class="text-sm font-medium lg:text-base">
                                ugx
                {{number_format($item['price'])}}
                                </span>
                              </td>
                              <td class="hidden text-right md:table-cell">
                                <form action="{{ route('cart.remove') }}" method="POST">
                                  @csrf
                                  <input type="hidden"  value="{{ $item->id }}" name="id">
                                  <button class="px-4 py-2  btn btn-danger">x</button>
                              </form>
                                
                              </td>
                            </tr>
                            @endforeach
                             
                          </tbody>
                        </table>
                        <div class="p-3">
                        Total: ugx
                {{number_format (Cart::getTotal())}}
                         
                        </div>
                        <div>
                          <form action="{{ route('cart.clear') }}" method="POST">
                            @csrf
                            <button class="px-6 py-2 text-red-800 btn btn-danger mb-4 mt-4">Remove All Cart</button>
                          </form>
                        </div>


                      </div>
                    </div>
                  </div>
            </div>
        </main>
    @endsection