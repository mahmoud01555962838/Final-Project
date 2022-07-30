@extends('master')
@section("content")
<div class="container">
    <div class="card mt-3">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($orders as $order)
                    <tr>
                        <td scope="row">{{ $loop->index + 1 }}</td>
                        <td>{{ $order->status }}</td>
                        <td>{{ $order->time_delivery }}</td>
                        <td>{{ $order->notes }}</td>
                        <td>{{ $order->photo }}</td>
                        <td>{{ $order->address_id }}</td>
                        <td> X </td>
                    </tr>
                    @empty
                    <tr>
                        <td scope="row">لا يوجد اي طلبات</td>
                        <td></td>
                        <td></td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection
