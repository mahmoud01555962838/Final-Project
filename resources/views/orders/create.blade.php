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
                                {{ $cart->qty }}
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
            <form action="{{ route('orders.store') }}" method="post">@csrf
                <select class="form-control" name="address_id" id="address">
                    @forelse ($user->addresses ?? [] as $address)
                        <option value="{{ $address->id }}">
                            {{ $address->street }} - {{ $address->area }} - {{ $address->building }} - {{ $address->city }}
                        </option>
                    @empty
                           <h1>7aga</h1> 
                    @endforelse
                </select>
                <button  class="btn btn-sm btn-info">طلب</button>
            </form>
        </div>
    </div>
</div>
@endsection
