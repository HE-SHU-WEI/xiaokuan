<!-- student/shopping_cart.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Shopping Cart</h2>

    @if(count($cartItems) > 0)
        <table class="table">
            <tbody>
                @foreach($cartItems as $index => $item)
                    <tr>
                        <td><img src="{{ asset('storage/' .$cartDetails[$index]['photo']) }}" style="max-width: 100px;"></td>
                        <td>
                            <strong>課程名稱:</strong> {{ $item->classname }}<br>
                            <strong>課程對象:</strong> {{ $cartDetails[$index]['forwho'] }}<br>
                            <strong>價格:</strong> {{ $cartDetails[$index]['money'] }}
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">&nbsp;</td> <!-- 空行 -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Your shopping cart is empty.</p>
    @endif

    <a href="{{ route('student.index') }}" class="btn btn-primary">Back to Dashboard</a>
@endsection
