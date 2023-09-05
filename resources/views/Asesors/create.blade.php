@extends('layoust.app')
@section('titulo', 'Crear Asesor')
@section('cabecera', 'Crear Asesor')
@section('contenido') 
 <div class="flex justify-center">
 <div class="card w-96 shadow-2xl bg-base-100">
 <div class="card-body">
 <form action="{{route('asesors.store')}}" method="POST">
 @csrf
 <div class="form-control">
 <label class="label" for="nombre">
 <span class="label-text">Nombre</span>
 </label>
 <input type="text" name="nombre" placeholder="Nombre asesor" maxlength="45" 
class="input input-bordered" required />
 </div>
 <div class="form-control">
 <label class="label" for="apellido">
 <span class="label-text">apellido</span>
 </label>
 <input type="text" name="nombre" placeholder="Escriba el nombre" maxlength="255" class="input 
input-bordered" />
 </div>
 <div class="form-control mt-6">
 <button class="btn btn-primary">Crear Asesor</button>
 <a href="{{ route('asesors.index') }}" class="btn btn-outline btn-primary mt-4">Cancelar</a>
 </div>
 </form>
 </div>
 </div>
 </div>
@endsection