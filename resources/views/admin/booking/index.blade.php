@extends('layouts.admin')

@section('content')
<div class="_page">

<div class="container-fluid">

        @include('partials._info')
        @include('partials._errors')
            <table class="table table-stripped" id="booking">
                <thead>
                    <th>ID</th>
                    <th>Order Number</th>
                    <th>user Id</th>
                    <th> Status</th>
                    <th>Grand total</th>
                    <th>Payment Status</th>
                    <th>Payment Method</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>City</th>
                    <th>Country</th>
                    <th>Post code</th>
                    <th>Phone Number</th>
                    <th>Notes</th>
                    
                </thead>

                <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{($order->id)}}</td>
                            <td>{{($order->order_number)}}</td>
                            <td>{{($order->user_id)}}</td>
                             <td>{{($order->status)}}</td>
                             <td>{{($order->grand_total)}}</td>
                             <td>{{($order->payment_status)}}</td>
                             <td>{{($order->payment_method)}}</td>
                             <td>{{($order->first_name)}}</td> 
                             <td>{{($order->last_name)}}</td> 
                             <td>{{($order->city)}}</td>
                             <td>{{($order->country)}}</td>
                             <td>{{($order->post_code)}}</td>
                             <td>{{($order->phone_number)}}</td>
                             <td>{{($order->notes)}}</td>                   
                        </tr>

                    @endforeach
                </tbody>
            </table>
    </div>
</div>
@endsection

