@extends('coreui.base')

@section('css')
    <link href="{{ asset('css/dataTables.bootstrap4.css') }}" rel="stylesheet">
@endsection

@section('content')

        <div class="container-fluid">
            <div class="fade-in">
              <div class="card">
                <div class="card-header"> Base
                                  <div class="card-header-actions"><a class="card-header-action" href="https://datatables.net" target="_blank"><small class="text-muted">docs</small></a></div>

                </div>

                <div class="card-body">
                  <table class="table table-striped table-bordered datatable">
                    <thead>
                      <tr>

                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Paterno</th>
                        <th>Materno</th>
                        <th>Sexo</th>
                        <th>Base</th>
                        <th>Estado</th>
                        <th>Usuario</th>
                        <th>Ver</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($contactos as $contacto)
                      <tr>
                      <td>{{$contacto->cont_id}}</td>
                        <td>{{$contacto->nombre}}</td>
                        <td>{{$contacto->paterno}}</td>
                        <td>{{$contacto->materno}}</td>
                        <td>{{$contacto->sexo}}</td>
                        <td>{{$contacto->base}}</td>
                        <td>{{$contacto->descripcion}}</td>
                        <td>{{$contacto->name.''.$contacto->apellido_paterno}}</td>
                        <td style="text-align:center">
                        <a class="btn btn-success" href="{{ route('contacto.modificar',[$contacto])}}">
                         <svg class="c-icon">
                              <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-magnifying-glass"></use>
                            </svg>
                            </a></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>


<div class="modal fade" id="eliminarModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Eliminar Proyecto</h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">??</span></button>
                  </div>
                  <div class="modal-body">
                    <p>Esta seguro que desea eliminar?</p>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>

                    <a class="btn btn-primary" type="submit" href="#">Eliminar</a>

                  </div>
                </div>
                <!-- /.modal-content-->
              </div>
              <!-- /.modal-dialog-->
            </div>








@endsection

@section('javascript')
<script src="{{ asset('js/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/datatables.js') }}"></script>
@endsection



