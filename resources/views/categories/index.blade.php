@extends('layouts.app')

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">


          <h1 class="page-title">
             Product Categories
          </h1>
   
        </section>


      <section class="content">

       
          
                <hr/>

                <div class="ui grid">

                      <div class="three wide column">
<div class="ui vertical menu">
  <div class="item">
    <div class="header">Products</div>
    <div class="menu">
      <a class="item">Enterprise</a>
      <a class="item">Consumer</a>
    </div>
  </div>
  <div class="item">
    <div class="header">CMS Solutions</div>
    <div class="menu">
      <a class="item">Rails</a>
      <a class="item">Python</a>
      <a class="item">PHP</a>
    </div>
  </div>
  <div class="item">
    <div class="header">Hosting</div>
    <div class="menu">
      <a class="item">Shared</a>
      <a class="item">Dedicated</a>
    </div>
  </div>
  <div class="item">
    <div class="header">Support</div>
    <div class="menu">
      <a class="item">E-mail Support</a>
      <a class="item">FAQs</a>
    </div>
  </div>
</div>
                      </div><!--end three column -->


                      <div class="thirteen wide column">

           {!! Form::model($category = new \App\Category,  ['class' => 'form-horizontal',  'url' => 'categories'])!!}
    {!! csrf_field() !!}
                    
  
  <div class="ui grid">




  <div class="thirteen wide column">

        <div class="ui form">
        <div class="field{{ $errors->has('name') ? ' error' : '' }}">
          {!! Form::text('name', null,  ['placeholder' => 'Product Category']) !!}     
       @if ($errors->has('name'))
        <span class="help-block">
        <label>{{ $errors->first('name') }}</label>
        </span>
        @endif
        </div>



      </div>

  </div>


    <div class="three wide column">
<button type="submit" class="fluid  ui primary right labeled icon button">
  <i class="save icon"></i>
  Submit
</button>
  </div>

</div><!-- end ui form -->



{!! Form::close() !!}


                              <table class="ui  striped celled table">
                                <thead>
                                    <tr> 
                                        <th>Category Name</th>
                                        <th width="20%">Action</th>
                                    </tr>
                                </thead> 
                                <tbody>
                                  @forelse($categories as $category)
                                    <tr>
                                        <td>{{$category->name}}</td>
                                        <td>
                                          <a  class="fluid ui button" href="#">
                                          <i class="trash icon"></i>
                                          Delete 
                                          </a>
                                          </td>
                                    </tr>
                                  @empty
                                    <tr>
                                        <td colspan="2">
                                        <h3 class="ui header">No product categories</h3>
                                        </td>
                                    </tr>
                                  @endforelse
                                </tbody>
                              </table>

                      </div><!-- end thriteen column -->
                </div><!-- end grid -->



                    
               






</section>

          




@endsection