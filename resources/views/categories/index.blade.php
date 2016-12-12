@extends('layouts.app')

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">


          <h1>
             Product Categories
            <small>Category management</small>
          </h1>
   
        </section>











      <section class="content">

          <div class="box">
                 <div class="box-header with-border">
              <h3 class="box-title">Deploy Truck</h3>
            </div><!-- /.box-header -->

                <hr/>

                <div class="box-body">
                  
    {!! Form::model($category = new \App\Category,  ['class' => 'form-horizontal',  'url' => 'categories'])!!}
    {!! csrf_field() !!}
                    
                     
                       <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label"> 
                        <button class="btn btn-primary" type="Submit">Submit</button>
                        </label>
                           <div class="col-md-4 input-group">
              
                        {!! Form::text('name', null,  ['class' => 'form-control']) !!}     

                        @if ($errors->has('name'))
                        <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                        </div>
                        </div>



{!! Form::close() !!}


<div class="row">

<table class="table table-responsive" width="100%">
  <thead>
  	<tr>
  		<td>Name</td>
  		<td>Action</td>
  	</tr>
  </thead>

  <tbody>
  @foreach($categories as $category)
  		<tr>
  			<td>
  				{{$category->name}}
  			</td>
  			<td>
  			<button class="btn btn-danger">
  			Delete
  			</button>
  			</td>
  		</tr>
  @endforeach
  </tbody>

</table>


</div>


                    
                </div><!-- /.box-body -->
                   <div class="box-footer">
          
            </div>
              </div><!-- /.box -->





</section>

          




@endsection