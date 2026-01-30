@extends('admin.master')

@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Order Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Order</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Order</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Update Order Info</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.order-update', $order->id)}}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-md-3">Customer Info</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{$order->customer->name}} ({{$order->customer->mobile}})" readonly/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Total Payable</label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" value="{{$order->order_total}}" readonly/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Payment Amount</label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" name="payment_amount" value="{{$order->order_total}}" min="0"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Delivery Address</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="delivery_address">{{$order->delivery_address}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Order Status</label>
                            <div class="col-md-9">
                                <select class="form-control" name="order_status">
                                    <option value="" disabled> -- Select Order Status -- </option>
                                    <option value="Pending" @selected($order->order_status == 'Pending')>Pending</option>
                                    <option value="Processing" @selected($order->order_status == 'Processing')>Processing</option>
                                    <option value="Complete" @selected($order->order_status == 'Complete')>Complete</option>
                                    <option value="Cancel" @selected($order->order_status == 'Cancel')>Cancel</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Courier Info</label>
                            <div class="col-md-9">
                                <select class="form-control" name="courier_id">
                                    <option value="" disabled> -- Select Courier Info -- </option>
                                    @foreach($couriers as $courier)
                                        <option value="{{ $courier->id }}" {{ $order->courier_id == $courier->id ? 'selected' : '' }}>
                                            {{ $courier->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="Update Order Info"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->
@endsection
