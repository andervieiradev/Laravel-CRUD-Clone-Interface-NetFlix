<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>

     <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            <div class="col-md-6">
                <div class="card mb-4 box-shadow">
                    <a href="{{ route('admin.content.index') }}"  target="_blank">
                        <img class="card-img-top" style="width: 100%; display: block;" src="{{ asset('assets/imgs/bg-admin.jpg') }}">
                    </a>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a type="button" href="{{ route('admin.content.index') }}" class="btn btn-sm btn-outline-secondary" target="_blank">Acessar Admin</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card mb-4 box-shadow">
                    <a href="{{ route('browse') }}"  target="_blank">
                        <img class="card-img-top" style="width: 100%; display: block;" src="{{ asset('assets/imgs/bg-browse.jpg') }}">
                    </a>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a type="button" href="{{ route('browse') }}" class="btn btn-sm btn-outline-secondary"  target="_blank">Acessar Browse</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


          </div>
        </div>
      </div>


<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
