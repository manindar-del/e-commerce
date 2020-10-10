@extends('layouts.admin')

@section('content')
<div class="_page">
    <div class="container">
    <form
    action="{{ !empty($type) ? route('admin.Product.edit', [$product->id]) : route('admin.Product.store') }}"
    method="post"
    enctype="multipart/form-data">
     @include('partials._info')
     @include('partials._errors')
     @include('admin.Product._form')
     {{ method_field('post') }}
    </form>
    </div>
</div>
@endsection