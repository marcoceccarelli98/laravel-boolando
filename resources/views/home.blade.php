
{{-- @dd($data) --}}

@extends('layouts.app')

@php
function calcDiscount($price, $discount) {
    if ($discount > 0) {
        $discountedPrice = $price - ($price * $discount / 100);
        // Arrotonda verso il basso e formatta il prezzo con due decimali
        $discountedPrice = number_format(floor($discountedPrice * 100) / 100, 2);
        return $discountedPrice;
    } else {
        return number_format($price, 2); // Se non c'è sconto, restituisci il prezzo originale formattato
    }
}
@endphp

@section('main')
<div class="container-big">
    <div class="mc-row">

    @foreach ($data['products'] as $product)
    @php
        $discount = $product['discount'] ?? 0;
    @endphp
    <div class="col-33">
        <div class="card-content">
            <!-- IMAGES -->
            <div class="img-content">
                <img class="main-pic" src="{{ Vite::asset('resources' . $product['image']) }}" alt="{{$product['image']}}" />
                <img class="hover-pic" src="{{ Vite::asset('resources' . $product['imageAlt']) }}" alt="{{$product['imageAlt']}}" />
                <!-- LABELS -->
                <div class="labels">
                    @if ($discount>0)
                        <span class="discount-label">
                            {{ '-'. $discount .'%' }}
                        </span>
                    @endif
                    @if ( $product['sustainability'])
                        <span class="sus-label"> Sostenibilità </span>
                    @endif
                </div>
                <div
                :class="[ 'liked'=> $product['like'] ]"
                class="hearts-label"
                @click="likeButton(like)">
                &hearts;
            </div>
        </div>
        <!-- TEXT -->
        <div class="text">
            <div class="brand">{{ $product['brand'] }}</div>
            <div class="item">{{ $product['name'] }}</div>
            <div class="price">
                {{ calcDiscount($product['price'], $discount) }} &euro;
                @if ($discount > 0)
                    <span class="discount-txt">{{ $product['price'] }} &euro;</span>
                @endif
            </div>
        </div>
    </div>
    </div>
    @endforeach
</div>
</div>

@endsection