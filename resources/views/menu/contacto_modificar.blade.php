@extends('coreui.base')

@section('content')

<div class="container-fluid">
            <div class="fade-in">
            <div class="row">
                <div class="col-md-10">
                  <div class="card">
                    <div class="card-header"><strong>Cliente</strong></div>
                    <div class="card-body">
                      <form class="form-horizontal" method="post" action="{{route('contacto.gestionado')}}"  >
                      @csrf
                            @method('PATCH')
                      <div class="form-group row">
                        <input class="form-control" id="contactoId" type="hidden" name="contactoId" value="{{$contacto->id}}">
                        </div>
                        <div class="form-group row">
                          <label class="col-md-2 col-form-label" for="text-input">Nombre</label>
                          <div class="col-md-3">
                            <input class="form-control" id="nombre" type="text" name="nombre" value="{{$contacto->nombre}}" >
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-2 col-form-label" for="text-input">Apellido Paterno</label>
                          <div class="col-md-3">
                            <input class="form-control" id="paterno" type="text" name="paterno" value="{{$contacto->apellido_paterno}}" >
                          </div>
                          <label class="col-md-2 col-form-label" for="text-input">Apellido Materno</label>
                          <div class="col-md-3">
                            <input class="form-control" id="materno" type="text" name="materno" value="{{$contacto->apellido_materno}}">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-2 col-form-label" for="text-input">Género</label>
                          <div class="col-md-3">
                            <input class="form-control" id="sexo" type="text" name="sexo" value="{{$contacto->sexo}}">
                          </div>
                          <label class="col-md-2 col-form-label" for="text-input">Fecha Nacimiento</label>
                          <div class="col-md-3">
                            <input class="form-control" id="fec_nacimiento" type="date" name="fec_nacimiento" value="{{$contacto->fec_nacimiento}}">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-2 col-form-label" for="date-input">Comuna</label>
                          <div class="col-md-3">
                            <input class="form-control" id="comuna" type="text" name="comuna" value="{{$contacto->comuna}}">
                          </div>
                          <label class="col-md-2 col-form-label" for="date-input">Región</label>
                          <div class="col-md-3">
                            <input class="form-control" id="region" type="text" name="region" value="{{$contacto->region}}">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-2 col-form-label" for="date-input">Teléfono</label>
                          <div class="col-md-3">
                            <input class="form-control" id="telefono1" type="tel" name="telefono1" value="{{$contacto->telefono1}}" >
                          </div>
                          <label class="col-md-2 col-form-label" for="date-input">Email</label>
                          <div class="col-md-3">
                            <input class="form-control" id="email" type="text" name="email"  value="{{$contacto->email}}" >
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-2 col-form-label" for="date-input">Teléfono 2</label>
                          <div class="col-md-3">
                            <input class="form-control" id="telefono1" type="tel" name="telefono1" value="{{$contacto->telefono2}}" >
                          </div>
                        </div>


                        </div>
                        </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-md-10">
                        <div class="card">
                            <div class="card-header"><strong>Preguntas</strong></div>
                            <div class="card-body">


                        <div class="form-group row">
                        <label class="col-md-2 col-form-label" for="date-input">Cliente contesta?</label>
                          <div class="col-md-3">
                          <select class="form-control" id="contesta" name="contesta">
                          @if($tipificacion->contesta=='')
                          <option value="0" selected="selected" >Seleccionar</option>
                          @endif
                          @if($tipificacion->contesta==1)
                          <option value="1" selected="selected">Sí</option>
                          @else
                          <option value="1">Sí</option>
                          @endif
                          @if($tipificacion->contesta==2)
                          <option value="2" selected="selected">No</option>
                          @else
                          <option value="2">No</option>
                          @endif
                          </select>
                          </div>
                          <label class="col-md-2 col-form-label" for="select-input">Devolver Llamado?</label>
                          <div class="col-md-3">
                          <select class="form-control" id="devolver_llamado" name="devolver_llamado" required="">
                          @if($tipificacion->devolver_llamado=='')
                          <option value="0" selected="selected" >Seleccionar</option>
                          @endif
                          @if($tipificacion->devolver_llamado==1)
                          <option value="1" selected="selected">Sí</option>
                          @else
                          <option value="1">Sí</option>
                          @endif
                          @if($tipificacion->devolver_llamado==2)
                          <option value="2" selected="selected">No</option>
                          @else
                          <option value="2">No</option>
                          @endif
                          </select>
                          </div>
                          </div>
                          <div class="form-group row">
                          <label class="col-md-2 col-form-label" for="date-input">Conoce la Fundación</label>
                          <div class="col-md-3">
                          <select class="form-control" id="conoce" name="conoce">
                          @if($tipificacion->conoce=='')
                          <option value="0" selected="selected" >Seleccionar</option>
                          @endif
                          @if($tipificacion->conoce==1)
                          <option value="1" selected="selected">Sí</option>
                          @else
                          <option value="1">Sí</option>
                          @endif
                          @if($tipificacion->conoce==2)
                          <option value="2" selected="selected">No</option>
                          @else
                          <option value="2">No</option>
                          @endif
                          </select>

                          </select>
                          </div>
                          </div>

                          <div class="form-group row">
                          <label class="col-md-2 col-form-label" for="date-input">Interes por la causa?</label>
                          <div class="col-md-3">
                          <select class="form-control" id="interes" name="interes">
                          @if($tipificacion->interes=='')
                          <option value="0" selected="selected" >Seleccionar</option>
                          @endif
                          @if($tipificacion->interes==1)
                          <option value="1" selected="selected">Sí</option>
                          @else
                          <option value="1">Sí</option>
                          @endif
                          @if($tipificacion->interes==2)
                          <option value="2" selected="selected">No</option>
                          @else
                          <option value="2">No</option>
                          @endif
                          </select>
                          </div>
                          </div>
                          <div class="form-group row">
                          <label class="col-md-2 col-form-label" for="date-input">Donó?</label>
                          <div class="col-md-3">
                          <select class="form-control" id="dono" name="dono">
                          @if($tipificacion->dono=='')
                          <option value="0" selected="selected" >Seleccionar</option>
                          @endif
                          @if($tipificacion->dono==1)
                          <option value="1" selected="selected">Sí</option>
                          @else
                          <option value="1">Sí</option>
                          @endif
                          @if($tipificacion->dono==2)
                          <option value="2" selected="selected">No</option>
                          @else
                          <option value="2">No</option>
                          @endif
                          </select>
                          </div>
                          <label class="col-md-2 col-form-label" for="text-input" id="lblPregunta5">Si la respuesta es No, por que?</label>
                          <div class="col-md-3" id="pregunta5">
                          <select class="form-control" id="motivo_no" name="motivo_no">
                          <option value="0" selected="selected" >Seleccionar</option>
                          <option value="No la conozco<">No la conozco</option>
                          <option value="No es mi causa">No es mi causa</option>
                          <option value="No es buen momento">No es buen momento</option>
                          <option value="Aporto a otra Fundacion">Aporto a otra Fundacion</option>
                          <option value="No confio en ella">No confio en ella</option>
                          <option value="Otra">Otra</option>
                          </select>
                          </div>
                          </div>

                          <div class="form-group row">
                          <label class="col-md-2 col-form-label" for="text-input">Cantidad</label>
                          <div class="col-md-3">
                          <input class="form-control" id="cantidad" type="text" name="cantidad" value="{{$tipificacion->cantidad}}" >
                          </div>
                          <label class="col-md-2 col-form-label" for="text-input">Si la respuesta es sí, por que? </label>
                          <div class="col-md-3">
                          <select class="form-control" id="motivo_si" name="motivo_si">
                          <option value="0" selected="selected" >Seleccionar</option>
                          <option value="La conozco">La conozco</option>
                          <option value="Es mi causa">Es mi causa</option>
                          <option value="Confío en ella">Confío en ella</option>
                          <option value="Otra">Otra</option>
                          </select>

                          </div>
                        </div>



                          <div class="form-group row">
                          <label class="col-md-2 col-form-label" for="text-input">Duración Llamada</label>
                          <div class="col-md-3">
                            <input class="form-control" id="dur_llamada" type="text" name="dur_llamada" value="{{$tipificacion->duracion_llamada}}"  required="" >
                          </div>

                          <label class="col-md-1 col-form-label" for="text-input">Comentarios</label>
                          <div class="col-md-6">
                             <textarea class="form-control" id="comentarios" type="text" name="comentarios"  value="" col="10" >{{$tipificacion->comentarios}}</textarea>
                          </div>
                        </div>


                            </div>
                            </div>
                            </div>
                            </div>

                      <div class="col-md-10">
                        <button class="btn btn-sm btn-primary" id="btnGuardar" type="submit">Guardar</button>
                        <a class="btn btn-sm btn-danger" href="{{ url()->previous() }}">Volver</a>
                      </form>
                      </div>
                  </div>

                <!-- /.col-->

              </div>
              </div>



              @endsection

@section('javascript')

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="{{ asset('js/daterangepicker.js') }}"></script>
    <script src="{{ asset('js/advanced-forms.js') }}"></script>

@endsection
