@extends('layouts.app')

@section('content')

        <!-- Content Header (Page header) -->
     



      <section class="content">

<div class="ui grid">



<div class="sixteen wide column">
<div class="ui segments">
  <div class="ui secondary segment">
    <p>Top</p>
  </div>
  <div class="ui  segment">


  {!! Form::model($product = new \App\Product, ['class' => 'ui form dropzone', 'id' => 'productPhoto', 'url' => 'missings',  'enctype' => 'multipart\form-data']) !!}
    {!! csrf_field() !!}

  <div class="field">
    <label>Product Name</label>
    <div class="sixteen wide field">
      <div class="field">
        <input type="text" name="shipping[first-name]" placeholder="Product Name">
      </div>
    </div>
  </div>
  <div class="field">
    <label>Description</label>
    <div class="fields">
      <div class="sixteen wide field">
      {{Form::textarea('description', null, ['placeholder' => 'Description'])}}
      </div>
    </div>
  </div>


  <div class="two fields">
    <div class="field">
    <label>Price</label>
    <div class="fields">
      <div class="sixteen wide field">
      {{Form::text('price', null, ['placeholder' => 'Price'])}}
      </div>
    </div>
  </div>



    <div class="field">
      <label>Availability</label>
      <div class="ui fluid search selection dropdown">
        <input type="hidden" name="country">
        <i class="dropdown icon"></i>
        <div class="default text">Select Country</div>
        <div class="menu">
    <div class="item" data-value="vn">On Stock</div>
    <div class="item" data-value="vn">Out of Stock</div>
  </div>
      </div>



    </div>
  </div>



  <h4 class="ui dividing header">Billing Information</h4>
  <div class="field">
    <label>Card Type</label>
    <div class="ui selection dropdown">
      <input type="hidden" name="card[type]">
      <div class="default text">Type</div>
      <i class="dropdown icon"></i>
      <div class="menu">
        <div class="item" data-value="visa">
          <i class="visa icon"></i>
          Visa
        </div>
        <div class="item" data-value="amex">
          <i class="amex icon"></i>
          American Express
        </div>
        <div class="item" data-value="discover">
          <i class="discover icon"></i>
          Discover
        </div>
      </div>
    </div>
  </div>
  <div class="fields">
    <div class="seven wide field">
      <label>Card Number</label>
      <input type="text" name="card[number]" maxlength="16" placeholder="Card #">
    </div>
    <div class="three wide field">
      <label>CVC</label>
      <input type="text" name="card[cvc]" maxlength="3" placeholder="CVC">
    </div>
    <div class="six wide field">
      <label>Expiration</label>
      <div class="two fields">
        <div class="field">
          <select class="ui fluid search dropdown" name="card[expire-month]">
            <option value="">Month</option>
            <option value="1">January</option>
            <option value="2">February</option>
            <option value="3">March</option>
            <option value="4">April</option>
            <option value="5">May</option>
            <option value="6">June</option>
            <option value="7">July</option>
            <option value="8">August</option>
            <option value="9">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
          </select>
        </div>
        <div class="field">
          <input type="text" name="card[expire-year]" maxlength="4" placeholder="Year">
        </div>
      </div>
    </div>
  </div>
   <h4 class="ui dividing header">Receipt</h4>
   <div class="field">
    <label>Send Receipt To:</label>
    <div class="ui fluid multiple search selection dropdown">
      <input type="hidden" name="receipt">
      <i class="dropdown icon"></i>
      <div class="default text">Saved Contacts</div>
      <div class="menu">
        <div class="item" data-value="jenny" data-text="Jenny">
          <img class="ui mini avatar image" src="/images/avatar/small/jenny.jpg">
          Jenny Hess
        </div>
        <div class="item" data-value="elliot" data-text="Elliot">
          <img class="ui mini avatar image" src="/images/avatar/small/elliot.jpg">
          Elliot Fu
        </div>
        <div class="item" data-value="stevie" data-text="Stevie">
          <img class="ui mini avatar image" src="/images/avatar/small/stevie.jpg">
          Stevie Feliciano
        </div>
        <div class="item" data-value="christian" data-text="Christian">
          <img class="ui mini avatar image" src="/images/avatar/small/christian.jpg">
          Christian
        </div>
        <div class="item" data-value="matt" data-text="Matt">
          <img class="ui mini avatar image" src="/images/avatar/small/matt.jpg">
          Matt
        </div>
        <div class="item" data-value="justen" data-text="Justen">
          <img class="ui mini avatar image" src="/images/avatar/small/justen.jpg">
          Justen Kitsune
        </div>
      </div>
    </div>
  </div>
   <div class="ui segment">
    <div class="field">
      <div class="ui toggle checkbox">
        <input type="checkbox" name="gift" tabindex="0" class="hidden">
        <label>Do not include a receipt in the package</label>
      </div>
    </div>
  </div>
  <div class="ui button" tabindex="0">Submit Order</div>
   {{Form::close()}}






    
  </div>
</div>



 
                      </div><!-- end sixteen column -->
                </div><!-- end grid -->



                    
               






</section>

          




@endsection