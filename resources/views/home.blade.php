
{{-- @dd($data['products']) --}}

@extends('layouts.app')

@section('main')

<div class="mc-row">

    @foreach ($data['products'] as $product)
    <div class="col-33">
        <div class="card-content">
            <!-- IMAGES -->
            <div class="img-content">
                <img class="main-pic" src="{{ Vite::asset('resources' . $product['image']) }}" alt="{{$product['image']}}" />
                <img class="hover-pic" :src="imageAlt" alt="{{$product['imageAlt']}}" />
                <!-- LABELS -->
                <div class="labels">
                    <span class="discount-label" v-show="discount">
                        {{-- {{ `-${discount}%` }} --}}
                        {{-- {{ $product['discount'] }} --}}
                    </span>
                    <span class="sus-label" v-show="sustainability"> Sostenibilità </span>
                </div>
                <div
                :class="{ liked: this.like }"
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
                {{-- {{ calcDiscount($product['price'], $product['discount']) }} &euro; --}}
                <span class="discount-txt" v-show="discount">{{ $product['price'] }} &euro;</span>
            </div>
        </div>
    </div>
    </div>
    @endforeach
</div>

@endsection