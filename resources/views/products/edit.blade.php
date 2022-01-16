@extends('layouts.app')

@section('title', 'Update')
@section('languages')
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item"
            href="{{ route(Route::currentRouteName(), ['locale' => 'en', 'product' => "$salad->salad_id"]) }}">EN</a>
        <a class="dropdown-item"
            href="{{ route(Route::currentRouteName(), ['locale' => 'hu', 'product' => "$salad->salad_id"]) }}">HU</a>
    </div>
@endsection

@section('styling')
    <link rel="stylesheet" href="{{ asset('css/product.create.css') }}">
@endsection

@section('content')
    <div class="col-md-6 mb-4 mx-auto">
        <div class="card">
            <div class="card-body">
                <!-- Form register -->
                <form enctype="multipart/form-data" method="POST"
                    action="{{ route('products.update', ['product' => $salad->salad_id]) }}" multiple>
                    {{ csrf_field() }}
                    @method('PUT')
                    <div class="form-input"> <i class="ic fas fa-salad"></i> <input
                            value="{{ old('name', $salad->name ? $salad->name : null) }}" name="name" type="text"
                            class="form-control" placeholder="Name"> </div>
                    <div class="form-input">
                        <textarea name="description" id="description" placeholder="Description..." class="form-control"
                            cols="30"
                            rows="10">{{ old('description', $salad->description ? $salad->description : null) }}</textarea>
                    </div>

                    <div class="form-input"> <i class="ic far fa-money-bill-alt"></i> <input
                            value="{{ old('price', $salad->price ? $salad->price : null) }}" name="price" type="text"
                            class="form-control" placeholder="Price"> </div>


                    <div class="form-input"> <i class="ic fas fa-images"></i> <input type="file" name="image" id="image"
                            class="form-control"> </div>

                    <div class="text-center py-4">
                        <button type="submit" name="submit" class="updBtn btn btn-primary btn-lg"><i class="fas fa-edit"></i>
                            Update</button>

                    </div>
                    @if ($errors->any())
                        <div>
                            <ul>
                                <li class="errorLi">{{ $errors->all()[0] }}</li>
                            </ul>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
@endsection
