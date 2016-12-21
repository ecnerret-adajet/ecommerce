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

  </div><!-- two fields ends -->



<div class="field">
      <div  id="addPhotosForm"  class="dz-default dz-message sixteen wide field drop-style">
        <span>Drop files here to upload</span>
      </div>
</div>

  
