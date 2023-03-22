@extends('layouts.app')
@section('content')
    <main class="container">
        <section>
            <div class="titlebar">
                <h1>Adicionar produto</h1>
                <button>Salvar</button>
            </div>
            <div class="card">
                <div>
                    <label>Nome</label>
                    <input type="text">
                    <label>Descrição (opcional)</label>
                    <textarea cols="10" rows="5"></textarea>
                    <label>Adicionar Imagem</label>
                    <img src="" alt="" class="img-product" />
                    <input type="file">
                </div>
                <div>
                    <label>Categoria</label>
                    <select name="" id="">
                        <option value="">??</option>
                    </select>
                    <hr>
                    <label>Inventário</label>
                    <input type="text" class="input">
                    <hr>
                    <label>Preço</label>
                    <input type="text" class="input">
                </div>
            </div>
            <div class="titlebar">
                <h1></h1>
                <button>Salvar</button>
            </div>
        </section>
    </main>
@endsection
