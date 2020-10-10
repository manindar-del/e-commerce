
<div class="panel panel-default product_section">
    <div class="panel-heading">{{ isset($product) ? 'Products' : 'Products' }}</div>
        <div class="panel-body">



                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Product Name*</label>
                    <div class="col-md-5">
                        <input id="name"type="text" class="form-control" name="name" value="{{$product->name ?? old('name') }}" required />
                    </div>
                </div>
                
                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Product Description</label>
                    <div class="col-md-5">
                        <input id="description" type="text" class="form-control" name="description" value="{{$product->description ?? old('description') }}" required />
                    </div>
                </div>

                <div class="form-group{{ $errors->has('img') ? ' has-error' : '' }}">
                    <label for="value" class="col-md-4 control-label">Product iamge</label>
                    <div class="col-md-5">
                        <input id="image" type="file" class="form-control" name="photo" value="{{$product->img ?? old('img') }}">
                    </div>
                </div>

                <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Product Price</label>
                    <div class="col-md-5">
                        <input id="price" type="text" class="form-control" name="price" value="{{$product->price ?? old('price') }}" required />
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-md-5 col-md-offset-4">
                        <input class="btn btn-success" type="Submit" value="add">
                    </div>
                </div>



        </div>
    </div>
</div>


