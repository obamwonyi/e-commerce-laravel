@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="{{ asset('/img/'.$viewData["product"]->getImage() ) }}" class="img-fluid rounded-start">
        </div>
        <div class="col-md-8">
                <div class="card-body">
                <h5 class="card-title">
                    {{ $viewData["product"]->getName() }} (${{ $viewData["product"]->getPrice() }})
                </h5>
                <p class="card-text">{{ $viewData["product"]->getDescription() }}</p>
                
                <p class="cart-text">
                    <form action="{{ route('cart.add',['id' => $viewData['product']->getId()]) }}" method="POST">
                        <div class="row">
                            @csrf
                            <div class="col-auto">
                                <div class="input-group col-auto">
                                    <div class="input-group-text">
                                        Quantity
                                        <input type="number" min="1" max="10" class="form-control quantity-input" value="1">
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <button class="btn bg-primary text-white" type="submit">Add to cart</button>
                            </div>
                        </div>
                    </form>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
