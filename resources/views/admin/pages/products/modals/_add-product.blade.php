<div class="modal fade" id="add-product">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add New Product</h4>
      </div>
      <form action="{{ route('product.store')}} " method="POST" enctype="multipart/form-data">
        @csrf
      <div class="modal-body">

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="category_id">Categories</label>
                  <select type="combobox" name="category_id" id="category_id" class="form-control">
                    <option value="{{ isset($product) ? $product->category_id : '' }}"> {{ isset($product) ? $product->category->name : 'Select Category' }} </option>
                    @include('partials.categories.department-categories')
                  </select>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="department_id">Department</label>
                  <select type="combobox" name="department_id" id="department_id" class="form-control">
                    @if(isset($product))
                      <option value="{{ $product->department_id }}">{{ $product->department->name }}</option>
                    @endif
                  </select>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                  <label for="name">Product Name</label>
                  <input type="text" name="name" id="name" class="form-control" placeholder="Enter Product Name">
                </div>
              </div>
              
              <div class="col-md-12">
                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea type="text" name="description" id="description" class="form-control" placeholder="Enter Product Description">{{ isset($product) ? $product->product_description : old('description')  }}</textarea>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="price">Price</label>
                  <input type="text" name="price" id="price" value="{{ isset($product) ? $product->price : old('price') }}" class="form-control" placeholder="Product price">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="quantity">Quantity</label>
                  <input type="number" name="quantity" id="quantity" value="{{ isset($product) ? $product->quantity : 1 }}" class="form-control" min="1" value="1">
                </div>
            </div>

              <div class="col-md-4">
                <div class="form-group">
                    <label for="image">Upload Image</label>
                    <input type="file" name="image" id="image">
                </div>
              </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left btn-flat
        " data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-flat">Add</button> 
      </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->