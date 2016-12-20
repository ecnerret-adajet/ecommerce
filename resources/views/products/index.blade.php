@extends('layouts.app')

@section('content')

        <!-- Content Header (Page header) -->
     



      <section class="content">

       
  

                <div class="ui grid">

            


                      <div class="sixteen wide column">

					  <table class="ui five column   table">
					  <thead>
					    <tr><th>Name</th>
					    <th>Product Name</th>
					    <th>Description</th>
              <th>Price</th>
					    <th>Availability</th>
					  </tr></thead>
					  <tbody>
					  @forelse($products as $product)
					    <tr>
					      <td>
					      	<div class="ui small image">
							  <img src="">
							</div>
					      </td>
					      <td>{{$product->title}}</td>
					      <td>{{nl2br($product->description)}}</td>
					      <td>{{$product->price}}</td>
					      <td>
                  <div class="ui toggle checkbox">
                      <input type="checkbox" name="public">
                      <label>Subscribe to weekly newsletter</label>
                  </div>                
              </td>
					    </tr>
            @empty
            <tr>
              <td colspan="5">
                  <h2 class="page-title text-center">
                      No Product
                  </h2>
              </td>
            </tr>


						@endforelse
					  </tbody>
					  <tfoot>
  					    <tr>
                  <th>
                    <a href="{{url('products/create')}}" class="ui compact labeled primary icon button">
                    <i class="plus icon"></i>
                    New product
                  </a>
                  </th>
    					    <th>2 Approved</th>
    					    <th>3 People</th>
    					    <th></th>
                  <th></th>
  					  </tr>
            </tfoot>
					</table>



                      </div><!-- end thriteen column -->
                </div><!-- end grid -->



                    
               






</section>

          




@endsection