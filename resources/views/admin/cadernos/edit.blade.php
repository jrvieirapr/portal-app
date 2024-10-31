@extends('layout.app')
@section('title','Criar Noticia')
<!-- content -->
@section('conteudo')
<div class="row mx-auto">
    <div class="mt-3 mb-3 col-6">
        <h3>Criando Nova Noticia</h3>
        <!-- form ilustrativo -->
        <form action="/admin/cadernos/{{$caderno->id}}" method="POST"
            enctype="multipart/form-data">
            <!-- Token -->
            @csrf
            @method('PUT')
            <!-- 'data' -->
            <div class="form-group mb-2">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome"
                    value="{{old('nome',$caderno->nome)}}"
                    class="form-control @error('nome') is-invalid @enderror">
                @if($errors->has('nome'))
                <div class="text-danger">
                    {{$errors->first('nome')}}
                </div>
                @endif
            </div>
            
            <button type="submit" class="btn btn-success">
                Salvar</button>
        </form>
    </div>
</div>
@endsection