@extends('layouts.agent')
@section('content')



<section class="booking">
    <div class="container">
    <div class="row">
       @foreach($products as $product)
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="thumbnail">
                    <td>{{ $product->id }}</td>
                        <img src="{{ $product->photo }}" width="500" height="300">
                        <div class="caption">
                            <h4>{{ $product->name }}</h4>
                            <p>{{ Str::limit($product->description, 50) }}</p>
                            <p><strong>Price: </strong> {{ $product->price }}$</p>
                            <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                        </div>
                    </div>
                </div>
            @endforeach
          
</div><!-- End row -->

</div>       

</section>

<div class="_loader" id="loader" style="background-image: url({{ asset('images/loader.jpg') }})">
    <img class="_loader__img" src="{{ asset('images/loader.gif') }}" alt="" />
</div>

@endsection

@push('footer-bottom')
    <script src="{{ asset('assets/js/moment.js') }}"></script>

    


@endpush