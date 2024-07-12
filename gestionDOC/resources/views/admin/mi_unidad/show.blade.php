@extends('layouts.admin')

@section('content')
<div class="row mb-2">
    <div class="col-sm-6">
    <h1 class="m-0">{{$carpeta->nombre}}</h1>
    </div>
    <div class="col-sm-6">
    <ol class="float-sm-right">
        <a href="{{url('admin/mi_unidad')}}" class="btn btn-secondary">Volver <i class="bi bi-arrow-return-left"></i></a>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
            <i class="bi bi-folder-plus"></i> Crear subcarpeta
        </button>
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
            <i class="bi bi-folder-plus"></i> Subir archivo
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nombre de carpeta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form action="{{url('/admin/mi_unidad/carpeta')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" value="{{$carpeta->id}}" name="carpeta_padre_id" hidden>
                                    <input type="text" class="form-control" name="nombre" required>
                                </div>
                            </div>
                        </div>
                    
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Crear</button>
                </div>
                </form>
            </div>
            </div>
        </div>
    </ol>
    </div>
</div>
<hr>
<h3>CArpetas y archivos</h3>
<div class="row">
    @foreach ( $subcarpetas as $subcarpeta)
    <div class="col-md-3">
        <div class="divcontent">
            <div class="row" style="padding: 10px">
                <div class="col-2" style="text-align: center">
                    <i class="bi bi-folder" style="font-size: 20pt"></i>
                </div>
                <div class="col-8" style="margin-top: 5px">
                    <a href="{{url('/admin/mi_unidad/carpeta',$subcarpeta->id)}}" style="color: black">{{$subcarpeta->nombre}}</a>
                </div>
                <div class="col-2" style="margin-top: 5px; text-align:right">
                    <div class="btn-group" role="group">
                        <button class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">prueba1</a>
                            <a class="dropdown-item" href="#">prueba2</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    
</div>

@endsection
