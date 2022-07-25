@extends('master')
@section("content")



<div class="container">
    <div class="card mt-3">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>اسم المنتج </th>
                        <th>اللون </th>
                        <th>السعر </th>
                        <th>الكمية</th>
                        <th>الاجمالي</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($carts as $cart)
                        <tr>
                            <td scope="row">{{ $loop->index + 1 }}</td>
                            <td>{{ $cart?->product?->name }}</td>
                            <td>{{ $cart?->color }}</td>
                            <td>{{ $cart?->product?->price }}</td>
                            <td>{{ $cart?->qty  }}</td>
                            <td>{{ $cart?->product?->price * $cart?->qty }}</td>
                        </tr>
                    @empty
                    <tr>
                        <td scope="row"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            <a href="{{ route('order') }}" class="btn btn-sm btn-info">طلب </a>
        </div>
    </div>
</div>
@endsection
