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
                <h1>Content <small class="h5 text-muted">Criar Conteúdo</small></h1>
                <hr/>
                <div class="row">
                    <div class="col-12">


                        <form action="{{ route('admin.content.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="name">Nome do Conteúdo</label>
                                <input type="text" class="form-control form-control-lg" id="name" placeholder="Titulo do Conteudo" name="name" value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="sinopse">Sinopse</label>
                                <textarea class="form-control form-control-lg" id="sinopse" rows="3" name="sinopse" placeholder="Digite a Sinopse do Conteúdo">{{ old('sinopse') }}</textarea>
                                @error('sinopse')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="year">Ano de Lançamento</label>
                                    <input type="number" class="form-control form-control-lg" id="year" placeholder="Ano de Lançamento" name="year" value="{{ old('year') }}">
                                    @error('year')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-8">
                                    <label for="maturityRating">Faixa Etária</label>

                                    <select class="form-control form-control-lg form-select form-select-lg mb-3" name="maturityRating">
                                        <option>Selecione a Faixa Etária</option>
                                        <option value="L" {{ ((old('maturityRating') == "L") ? 'selected' : '') }}>Livre</option>
                                        <option value="10" {{ ((old('maturityRating') == "10") ? 'selected' : '') }}>10 anos</option>
                                        <option value="12" {{ ((old('maturityRating') == "12") ? 'selected' : '') }}>12 anos</option>
                                        <option value="14" {{ ((old('maturityRating') == "14") ? 'selected' : '') }}>14 anos</option>
                                        <option value="16" {{ ((old('maturityRating') == "16") ? 'selected' : '') }}>16 anos</option>
                                        <option value="18" {{ ((old('maturityRating') == "18") ? 'selected' : '') }}>18 anos</option>
                                    </select>

                                    @error('maturityRating')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="urlTrailer">Url Trailer (embed)</label>
                                <input type="text" class="form-control form-control-lg" id="urlTrailer" placeholder="Url Embeb do Trailer" name="urlTrailer" value="{{ old('urlTrailer') }}">
                                @error('urlTrailer')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group border rounded p-2 mb-2">
                                <label for="logo" class="form-label">Logo em .PNG</label>
                                <input type="file" class="form-control-file" id="logo" name="logo">
                                @error('logo')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group border rounded p-2 mb-2">
                                <label for="background" class="form-label">Background em .JPG, .PNG ou .WebP</label>
                                <input type="file" class="form-control-file" id="background" name="background">
                                @error('background')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group border rounded p-2 mb-2">
                                <label for="thumbVertical" class="form-label">Thumb Vertical em .PNG</label>
                                <input type="file" class="form-control-file" id="thumbVertical" name="thumbVertical">
                                @error('thumbVertical')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group border rounded p-2 mb-2">
                                <label for="thumbHorizontal" class="form-label">Thumb Horizontal em .PNG</label>
                                <input type="file" class="form-control-file" id="thumbHorizontal" name="thumbHorizontal">
                                @error('thumbHorizontal')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-success">Cadastrar</button>
                        </form>




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
