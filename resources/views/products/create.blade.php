@extends('layouts.app')

@section('content')

        <!-- Content Header (Page header) -->
     



      <section class="content">

<div class="ui grid">



<div class="sixteen wide column">
<div class="ui segments">
  <div class="ui secondary segment">
    <p>Add Product Form</p>
  </div>
  <div class="ui  segment"> 
  {!! Form::model($product = new \App\Product, ['class' => 'ui form dropzone',  'url' => 'products',  'enctype' => 'multipart\form-data']) !!}
    {!! csrf_field() !!}
    @include('products.form')


  </div>

   <div class="ui secondary segment">
      <button class="ui primary button" type="submit">Submit form</button>
   </div>
  {{Form::close()}}
</div>





                      </div><!-- end sixteen column -->
                </div><!-- end grid -->
</section>
@stop

@section('scripts.footer')

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>

<script>
  Dropzone.options.addPhotosForm = {
    paramName: 'photo',
    maxFilesize: 4,
    acceptedFiles: '.jpg, .jpeg, .png, .bmp'
  };
</script>


@stop