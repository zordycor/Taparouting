@extends('templates.master')

@section('main')
<div class="cont">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Has iniciado sesión!
                    <div class="logonBtn">
                        <label>
                            <a href="">
                                Volver a inicio
                            </a>
                        </label>

                        <label>
                            <a href="/config">
                                Mi configuración
                            </a>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
