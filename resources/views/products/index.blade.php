@extends('layouts.app')
@section('content')
    <main class="container">
        <section>
            <div class="titlebar">
                <h1>Produtos</h1>
                <button>Adicionar Produto</button>
            </div>
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
                            value="{{ request('search') }}">
                    </div>
                </div>
                <div class="table-product-head">
                    <p>Imagem</p>
                    <p>Nome</p>
                    <p>Categoria</p>
                    <p>Inventário</p>
                    <p>Ações</p>
                </div>
                <div class="table-product-body">
                    <img src="1.jpg" />
                    <p>Nome do produto</p>
                    <p>Categoria</p>
                    <p>Inventário</p>
                    <div>
                        <button class="btn btn-success">
                            <i class="fas fa-pencil-alt"></i>
                        </button>
                        <button class="btn btn-danger">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </div>
                </div>
                <div class="table-paginate">
                    <div class="pagination">
                        <a href="#" disabled>&laquo;</a>
                        <a class="active-page">1</a>
                        <a>2</a>
                        <a>3</a>
                        <a href="#">&raquo;</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
