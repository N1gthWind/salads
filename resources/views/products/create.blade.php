@extends('layouts.app')

@section('title', 'Create')
@section('styling')
    <link rel="stylesheet" href="{{ asset('css/product.create.css') }}">
@endsection
@section('content')
    <div class="col-md-6 mb-4 mx-auto">
        <div class="card">
            <div class="card-body">
                <!-- Form register -->
                <form enctype="multipart/form-data" method="POST" action="{{ route('products.store') }}" multiple>
                    {{ csrf_field() }}
                    <div class="form1 form-input"> <i class="fas fa-salad"></i> <input value="{{ old('name') }}" name="name"
                            type="text" class="form-control" placeholder="Name"> </div>
                    <div class="form1 form-input">
                        <textarea name="description" id="description" placeholder="Description..." class="form-control"
                            cols="30" rows="10">{{ old('description') }}</textarea>
                    </div>

                    <div class="form1 form-input"> <i class="far fa-money-bill-alt"></i> <input value="{{ old('price') }}"
                            name="price" type="text" class="form-control" placeholder="Price"> </div>


                    <div class="form1 form-input"> <i class="fas fa-images"></i> <input type="file" name="image" id="image"
                            class="form-control"> </div>

                    <div class="text-center py-4">
                        <button type="submit" name="submit" class="Create btn btn-primary btn-lg"><i class="fas fa-plus"></i>
                            Create</button>

                    </div>
                    @if ($errors->any())
                        <div class="div2">
                            <ul class="ul1">
                                <li class="err1">{{ $errors->all()[0] }}</li>
                            </ul>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
@endsection
