@extends('admin.includes.default')


@section('content')
    {{-- barra topo --}}

    <nav class="navbar navbar-dark sticky-top p-0" style="background: #292727;">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 p-3 text-center" href="{{ route('admin.dashboard') }}"  style="background: #201e1e;">
            <img src="{{ asset('assets/imgs/logo-netflix.png') }}" height="32px">
        </a>
    </nav>

    {{-- corpo abaixo da barra --}}
    <div class="container-fluid">
        <div class="row">

            @include('admin.includes.menu')

            <div class="col-md-9 col-lg-10 ml-sm-auto m-0 pt-3 px-4">
                <h1>Content <small class="h5 text-muted">Listar Conteúdos</small></h1>

                <div class="container-fluid ">
                    <div class="row">

                        @foreach ($contents as $content)
                            <div class="col-sm-6 col-md-4 col-lg-3 p-1">
                                <div class="card border-info">
                                    <img class="card-img-top" src="{{ asset($content->urlThumbHorizontal) }}" alt="{{ $content->name }}">
                                    <div class="card-body p-3">
                                        <h5 class="card-title">{{ $content->name }}</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">{{ $content->year }} - <span class="badge badge-pill badge-secondary">{{ $content->maturityRating }}</span></h6>
                                        <p class="card-text">{{ Str::words($content->sinopse, 10) }}</p>
                                        <div class="text-right">
                                            <form id="delete-form" method="POST" action="{{ route('admin.content.destroy', $content->id) }}">
                                                @csrf
                                                @method('DELETE')

                                                <a href="{{ route('admin.content.edit', $content->id) }}" class="btn btn-success">Editar</a>
                                                <button type="submit" class="btn btn-danger" >Deletar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>


            </div>

        </div>

    </div>


@endsection


@section('css')
@endsection

@section('js')
@endsection
