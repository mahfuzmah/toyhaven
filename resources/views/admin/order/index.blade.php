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
                <li class="breadcrumb-item active" aria-current="page">Manage Order</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">All Order Info</h3>
                </div>
                <div class="card-body">
                    <p class="text-success">{{session('message')}}</p>
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">SL NO</th>
                                <th class="wd-15p border-bottom-0">Order Id</th>
                                <th class="wd-15p border-bottom-0">Order Date</th>
                                <th class="wd-20p border-bottom-0">Customer Info</th>
                                <th class="wd-20p border-bottom-0">Order Status</th>
                                <th class="wd-20p border-bottom-0">Payment Status</th>
                                <th class="wd-15p border-bottom-0">Order Total</th>
                                <th class="wd-15p border-bottom-0">Payment Method</th>
                                <th class="wd-15p border-bottom-0">Courier Info</th>
                                <th class="wd-25p border-bottom-0">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>

                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$order->id}}</td>
                                    <td>{{$order->order_date}}</td>
                                    <td>{{$order->customer->name}} ( {{$order->customer->mobile}} )</td>
                                    <td>{{$order->order_status}}</td>
                                    <td>{{$order->payment_status}}</td>
                                    <td>{{$order->order_total}}</td>
                                    <td>{{$order->payment_method}}</td>
                                    <td>{{ $order->courier ? $order->courier->name : 'Not Assign' }}</td>
                                    <td class="d-flex">
                                        <a href="{{route('admin.order-detail', ['id' => $order->id])}}" class="btn btn-success btn-sm me-1">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{route('admin.order-edit', ['id' => $order->id])}}" class="btn btn-primary btn-sm me-1 {{$order->order_status == 'Complete' ? 'disabled' : ''}}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{route('admin.order-invoice', ['id' => $order->id])}}" class="btn btn-info btn-sm me-1">
                                            <i class="fa fa-download"></i>
                                        </a>
                                        <form action="{{route('admin.order-delete', ['id' => $order->id])}}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm {{$order->order_status == 'Cancel' ? '' : 'disabled'}}">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->
@endsection
