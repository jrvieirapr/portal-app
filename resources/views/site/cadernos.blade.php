@extends('layout.site')
@section('conteudo')
    <div>
        <h2>Cadernos:</h2>
        <ul>
            @foreach($cadernosMenu as $caderno)
                <li class="">
                    <a class="" href="/site/noticias/categoria/{{ $caderno->id }}">
                        {{ $caderno->nome }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
