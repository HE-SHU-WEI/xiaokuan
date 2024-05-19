<!-- resources/views/student/shopping_cart.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>購物車</h2>

    @if(count($cartItems) > 0)
        <form action="{{ route('purchase') }}" method="post">
            @csrf
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
                            <td>
                                <input type="checkbox" name="selected_courses[]" value="{{ $item->classname }}">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">&nbsp;</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button type="submit" class="btn btn-success">購買所選課程</button>
        </form>
    @else
        <p>您的購物車是空的</p>
    @endif

    <a href="{{ route('student.index') }}" class="btn btn-primary">回前頁</a>
@endsection
