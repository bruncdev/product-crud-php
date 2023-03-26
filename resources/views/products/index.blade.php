@extends('layouts.app')
@section('content')
    <main class="container">
        <section>
            <div class="titlebar">
                <h1>Produtos</h1>
                <a href={{ route('products.create') }} class="btn-link">Adicionar Produto</a>
            </div>
            @if ($message = Session::get('success'))
                <script type="text/javascript">
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })

                    Toast.fire({
                        icon: 'success',
                        title: 'Produto Adicionado com Sucesso'
                    })
                </script>
            @endif
            <div class="table">
                <div class="table-filter">
                    <div>
                        <ul class="table-filter-list">
                            <li>
                                <p class="table-filter-link link-active">Todos os protudos</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <form method="GET" action="{{ route('products.index') }}" accept-charset="UTF-8" role="search">
                    <div class="table-search">
                        <div>
                            <button class="search-select">
                                Procurar Produto
                            </button>
                            <span class="search-select-arrow">
                                <i class="fas fa-caret-down"></i>
                            </span>
                        </div>
                        <div class="relative">
                            <input class="search-input" type="text" name="search" placeholder="Procurar Produto..."
                                name="search" value="{{ request('search') }}" value="{{ request('search') }}">
                        </div>
                    </div>
                </form>
                <div class="table-product-head">
                    <p>Imagem</p>
                    <p>Nome</p>
                    <p>Categoria</p>
                    <p>Inventário</p>
                    <p>Ações</p>
                </div>
                <div class="table-product-body">
                    @if (count($products) > 0)
                        @foreach ($products as $product)
                            <img src="{{ asset('images/' . $product->image) }}" />
                            <p>{{ $product->name }}</p>
                            <p>{{ $product->category }}</p>
                            <p>{{ $product->quantity }}</p>
                            <div>
                                <button class="btn btn-success">
                                    <i class="fas fa-pencil-alt"></i>
                                </button>
                                <button class="btn btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                </button>

                            </div>
                        @endforeach
                    @else
                        <p>Produto não encontrado</p>
                    @endif
                </div>
                <div class="table-paginate">
                    {{ $products->links('layouts.pagination') }}


                </div>
            </div>
        </section>
    </main>
@endsection
