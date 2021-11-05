@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <h1 class="product-title">Product catalog:</h1>
    <div class="custom-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col">
                        Showing all {{ $saladCount }} results
                    </div>
                </div>
                <!-- Sorting by <div class="row"> -->
                <div class="row mt-5">
                    @forelse ($salads as $salad)
                        <div class="col-sm-3 col-md-6 col-lg-4 mt-2">
                            <div class="card">
                                <div class="card-body text-center">
                                    <img src="{{ asset('images/' . $salad->image_path) }}" alt="{{ $salad->name }}" class="product-images">
                                    <h5 class="card-title"><b>{{ $salad->name }}</b></h5>
                                    <p class="card-text small">{{ $salad->description }}</p>
                                    <p class="product-price" class="tags">€{{ $salad->price }}</p>
                                    <p style="text-align: left;">Added: {{ $salad->created_at->format('Y.m.d') }}</p>
                                    @auth
                                    <a class="btn btn-warning btn-lg" href="{{ route('products.edit',['product' => $salad->salad_id]) }}">Edit</a>

                                    @endauth
                                </div>
                            </div>
                        </div>
                    @empty
                        <h2>No data found!</h2>
                    @endforelse
                </div>
                <!-- Sorting by <div class="row"> -->
            </div>

        </div>
    </div>
    {{ $salads->links() }}
@endsection
