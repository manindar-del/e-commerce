@extends('layouts.admin')

@section('content')
<div class="_page">
    <div class="container">
    <form
    action="{{ !empty($type) ? route('admin.Product.edit', [$Product->id]) : route('admin.Product.store') }}"
    method="post"
    enctype="multipart/form-data">
     @include('partials._info')
     @include('partials._errors')
     @include('admin.Product._form')
    </form>
    </div>
</div>
@endsection