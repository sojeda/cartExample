@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <ul>
                    @foreach ($products as $product)
                        <li>{{ $product->name }}
                            <form action="{{ route('produtcs.addCart') }}" method="post">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="stock" name="stock">
                                <input type="submit" name="submit" value="Agregar al Carrito">
                            </form>                            
                        </li>
                    @endforeach
                    </ul>
                    {!! $products->links() !!}
                            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
