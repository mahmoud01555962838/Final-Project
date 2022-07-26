@extends('master')
@section("content")
<div class="container">
    <div class="card mt-3">
        <div class="card-body">
            @php($total = 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>اسم المنتج </th>
                        <th>الحجم</th>
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
                            <td>{{ $cart?->size }}</td>
                            <td>{{ $cart?->product?->price }}</td>
                            <td>
                                <form action="{{ route('add_to_cart',['id'=>$cart->product->id,'size'=>$cart->size]) }}" method="post" id="form-{{ $cart->id }}">@csrf
                                    <input class="cart-qty" value="{{ $cart->qty }}" type="number" name="qty" min="0" onchange="document.getElementById('form-{{ $cart->id }}').submit()" class="form-control" style="width:75px"/>
                                </form>
                            </td>
                            <td>{{ $total= + $cart->total() }}</td>
                        </tr>
                    @empty
                    <tr>
                        <td scope="row"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    @endforelse
                    <tr>
                        <td scope="row"></td>
                        <td scope="row"></td>
                        <td scope="row"></td>
                        <td scope="row"></td>
                        <td>{{ $carts->sum('qty') }}</td>
                        <td>{{ array_sum($carts->map->total()->toArray()) }}</td>
                    </tr>
                </tbody>
            </table>
            <a href="{{ route('order') }}" class="btn btn-sm btn-info">طلب </a>
        </div>
    </div>
</div>
@endsection
