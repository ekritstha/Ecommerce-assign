@extends('backend.master')
@section('main-content')
@include('backend.partial.breadcrumb',['title1'=>'List '.ucwords($page)])
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered" id="dtable">
                            <thead>
                                <tr>
                                    <th>Products (Product Id - Quantity)</th>
                                    <th>Customer Name</th>
                                    <th>Contact</th>
                                    <th>Address</th>
                                    <th>Total</th>
                                    <th>Delivery Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $d)
                                <tr>
                                    <td>{{ $d->cart }}</td>
                                    <td>{{ $d->name }}</td>
                                    <td>{{ $d->contact }}</td>
                                    <td>{{ $d->address }}</td>
                                    <td>Rs. {{ $d->totalPrice }}</td>
                                    <td>
                                        @if($d->delivery_status == 0)
                                            <button class="btn btn-danger">Not Delivered</button>
                                            <a class="btn btn-primary" style="color: white" href="{{route('admin.order-delivered', $d->id)}}">Change</a>
                                        @else
                                            <button class="btn btn-success">Delivered</button>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card -->

            </div>
            <!-- /.col -->
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@stop