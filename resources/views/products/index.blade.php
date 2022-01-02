@extends('layouts.app')

@section('title', 'Products')

@section('styling')
    <link rel="stylesheet" href="{{ asset('css/product.index.css') }}">
@endsection

@section('content')
    <div class="banners">
        <div class="banner">
            <div class="bannerName">Blanka bőrkabát boltja</div>
            <a class="linkBlanka" href="https://hungirl.proj.vts.su.ac.rs"><img class="Blanka" src="https://hungirl.proj.vts.su.ac.rs/assets/img/intr.jpg"></a>
        </div>
        <div class="banner">
            <div class="bannerName">2</div>
        </div>
        <div class="banner">
            <div class="bannerName">3</div>
        </div>
    </div>

   <br><br>
    <p style="color:white;text-align:center;font-size:20px">This is a school project</p>
    <div class="cat">
        <h1 class="product-title">{{ __('Product Catalog') }}</h1>
    </div>
    <div class="custom-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="inner-col">
                        {{ __('Showing all :count results',['count' => $saladCount]) }}
                    </div>
                </div>
                <!-- Sorting by <div class="row"> -->
                <div class="saladContainer row mt-5">
                    @forelse ($salads as $salad)
                        <div class="col-sm-3 col-md-6 col-lg-4 mt-2">
                            <div class="card">
                                <div class="card-body text-center">
                                    <img src="{{ asset('images/' . $salad->image_path) }}" alt="{{ $salad->name }}"
                                        class="product-images">
                                    <h5 class="card-title"><b>{{ $salad->name }}</b></h5>
                                    <p class="card-text small">{{ $salad->description }}</p>
                                    <p class="product-price" class="tags">€{{ $salad->price }}</p>
                                    <p class="date">Added: {{ $salad->created_at->format('Y.m.d') }}</p>
                                    @auth
                                        @can('posts.update', $salad)
                                            <a class="modBtn btn btn-warning btn-lg "
                                                href="{{ route('products.edit', ['product' => $salad->salad_id]) }}">Edit</a>
                                        @endcan
                                    @endauth
                                </div>
                            </div>
                        </div>
                    @empty
                        <h2 style="color:white;text-align:center;width: 100%;">{{ __('No data found!') }}</h2>
                    @endforelse
                </div>
                <!-- Sorting by <div class="row"> -->
            </div>

        </div>
    </div>
    {{ $salads->links() }}
@endsection
