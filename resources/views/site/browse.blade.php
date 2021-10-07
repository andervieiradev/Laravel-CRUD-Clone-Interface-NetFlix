@extends('site.includes.default')

@section('content')
<div class="p-0 containermaster" style="position: relative">
    <header id="div" class="navbar navbar-expand flex-column navbar-dark bd-navbar fixed-top p-0 m-0" style="background: none;">
        <div class="container-fluid" id="menu" >
            <a class="navbar-brand mr-4" href="{{ route('home') }}" aria-label="{{ config('app.name') }}">
                <img src="{{ asset('assets/imgs/logo-netflix.png') }}" alt="{{ config('app.name') }}"  class="img-fluid" width="50%">
            </a>

            <div class="navbar-nav-scroll d-none d-md-flex">
                <ul class="navbar-nav bd-navbar-nav flex-row">
                    <li class="nav-item">
                        <a class="nav-link  {{ (($active == 'browse') ? 'active' : '') }}" href="{{ route('home') }}">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Séries</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Filmes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Bombando</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Minha lista</a>
                    </li>
                </ul>
            </div>


            <ul class="navbar-nav flex-row ml-auto d-flex">
                <li class="nav-item dropdown">
                    <a class="nav-item nav-link dropdown-toggle" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded mr-1" src="https://occ-0-3272-185.1.nflxso.net/dnm/api/v6/K6hjPJd6cR6FpVELC5Pd6ovHRSk/AAAABbme8JMz4rEKFJhtzpOKWFJ_6qX-0y5wwWyYvBhWS0VKFLa289dZ5zvRBggmFVWVPL2AAYE8xevD4jjLZjWumNo.png?r=a41">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right " aria-labelledby="bd-versions">
                        <a class="dropdown-item" href="https://andervieira.dev" target="_blank">AnderVieira.dev</a>
                            <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Minha conta</a>
                        <a class="dropdown-item" href="#">Deslogar</a>
                    </div>
                </li>
            </ul>

        </div>
</header>


    @if(isset($hero))
        <div class="container-fluid p-0 billboard">
            <div class="billboard-sub">
                <div class="billboard-bg">
                    <div class="billboard-hero">
                        <img class="static-image" src="{{ asset($hero->urlBackground) }}"/>
                    </div>
                    <div class="hero-vinheta-left"></div>
                    <div class="hero-vinheta-buttom"></div>
                </div>
                <div class="billboard-content">
                    <div class="billboard-lateral">
                        @if ($hero->urlLogo)
                            <div class="title-logo">
                                <img class="static-image" src="{{ asset($hero->urlLogo) }}"/>
                            </div>
                        @endif
                        <div class="description">
                            @if ($hero->name)
                                <div class="title">
                                    {{ $hero->name }}
                                </div>
                            @endif
                            @if ($hero->sinopse)
                                <div class="sinopse ">
                                    {{ Str::words($hero->sinopse, 20,  '...') }}
                                </div>
                            @endif
                        </div>
                        <div class="action">
                            <a class="btn btn-light  btn-assistir  ">
                                <span class="fas fa-play"></span>
                                <b>Assistir</b>
                            </a>
                            <a class="btn btn-dark text-white btn-maisinfo">
                                <span class="fas fa-info-circle"></span>
                                <b>Mais Informações</b>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if (isset($newContent))
        <!-- Flickity HTML init -->
        <div class="container-fluid p-0 videos-row">
            <h2>{{ $newContent['title']}}</h2>
            <div class="carousel vertical">

                @foreach ($newContent['list'] as $content)
                    <div class="carousel-cell">
                        <a href="#">
                            <img src="{{ asset($content->urlThumbVertical) }}" />
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    @endif


    @if (isset($emAlta))
        <!-- Flickity HTML init -->
        <div class="container-fluid p-0 videos-row">
            <h2>{{ $emAlta['title']}}</h2>
            <div class="carousel vertical">

                @foreach ($emAlta['list'] as $content)
                    <div class="carousel-cell">
                        <a href="#">
                            <img src="{{ asset($content->urlThumbHorizontal) }}" />
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    @endif

    @if (isset($keepWatching))
        <!-- Flickity HTML init -->
        <div class="container-fluid p-0 videos-row">
            <h2>{{ $keepWatching['title']}}</h2>
            <div class="carousel vertical">

                @foreach ($keepWatching['list'] as $content)
                    <div class="carousel-cell">
                        <a href="#">
                            <img src="{{ asset($content->urlThumbHorizontal) }}" />
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    @endif


    <footer>
        <div class="container mb-5">
            <div class="row">
                <div class="col-3 text-left"><img src="{{ asset('assets/imgs/logo-netflix.png') }}" alt="{{ config('app.name') }}"  class="img-fluid"></div>
                <div class="col-4 text-center">
                    <ul>
                        <li><a href="#">Conteúdo</a></li>
                        <li><a href="#">Sobre</a></li>
                        <li><a href="#">Termos de Uso</a></li>
                    </ul>
                </div>
                <div class="col-5 text-right redesocial">
                    <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-facebook-square"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">© {{ date('Y') }} {{ config('app.name') }}. Todos os direitos reservados</div>
            </div>
        </div>
    </footer>

</div>
@endsection


@section('css')
    <link href="https://unpkg.com/flickity@2/dist/flickity.min.css" rel="stylesheet">
@endsection

@section('js')
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script>
        const carousels = document.querySelectorAll('.carousel');
        carousels.forEach(carousel => {
            new Flickity(carousel, {
                // options
                cellAlign: 'center',
                groupCells: true,
                wrapAround: false,
                freeScroll: false,
                groupCells: '100%'
            });
        });


        var distance = $('.containermaster').offset().top;
        $(window).on("load scroll", function() {
            if($(window).scrollTop() > distance+10) {
                $(".navbar").css({
                    backgroundColor: 'rgba(20, 20, 20, 1)',
                    position: 'fixed',
                    top: 0,
                    right: 0,
                    left: 0,
                    'z-index': 1030
                });
            } else {
                $(".navbar").css({
                    backgroundColor: 'rgba(0, 0, 0, 0)',
                    position: 'absolute',
                    top: 0,
                    right: 0,
                    left: 0,
                    'z-index': 1030
                });
            }
        });

    </script>
@endsection
