@extends('layouts.admin')

@section('content')
<div class="section_Product">
  <div class="_page">
     <div class="container-fluid">

          @include('partials._info')
           @include('partials._errors')

            <table class="table table-stripped" id="Product">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th class="table__actions">Actions</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td><img src="{{ $product->photo }}" width="500" height="300"></td>
                            <td> <h4>{{ $product->name }}</h4></td>
                            <td><p><strong>Price: </strong> {{ $product->price }}$</p></td>
                            <td class="table__actions" style="width: 260px;">
                                <a href="{{ route('admin.Product.edit', [$product->id]) }}" class="btn btn-sm btn-info">
                                    Edit
                                </a>
                                <a href="#" onClick="event.preventDefault(); confirm() && form{{ $product->id }}.submit()" class="btn btn-sm btn-danger">
                                        {{-- <i class="fa fa-trash"></i>  --}}
                                        Delete
                                    </a>
                                    <form action="{{ route('admin.Product.destroy', [$product->id]) }}" method="post" id="form{{ $product->id }}">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                </form>
                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('footer-bottom')
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('js/nouislider.min.js') }}"></script>
<script>
    jQuery('#Product').dataTable({
        sort: [],
        responsive: true
    }).show();
</script>
@endpush


