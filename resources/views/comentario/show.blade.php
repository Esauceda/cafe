@extends('layouts.app')

@section('template_title')
    {{ $comentario->name ?? 'Show Comentario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Comentario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('comentarios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $comentario->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $comentario->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $comentario->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $comentario->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Comentario:</strong>
                            {{ $comentario->comentario }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
