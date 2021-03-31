@extends('coreui.base')

@section('css')
    <link href="{{ asset('css/dataTables.bootstrap4.css') }}" rel="stylesheet">
@endsection

@section('content')

        <div class="container-fluid">
            <div class="fade-in">
              <div class="card">
                <div class="card-header"> Lista de orguntarios
                  <div class="card-header-actions"><a class="card-header-action" href="https://datatables.net" target="_blank"><small class="text-muted">docs</small></a></div>
                </div>
                <div class="card-body">
                  <table class="table table-striped table-bordered datatable">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Teléfono</th>
                        <th>Direccion</th>
                        <th>Comuna</th>
                        <th>Ver</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>

                      </tr>
                    </thead>
                    <tbody>
                    @foreach($organizaciones as $organizacion)
                      <tr>
                        <td>{{$organizacion->org_id}}</td>
                        <td>{{$organizacion->org_nombre}}</td>
                        <td>{{$organizacion->org_email}}</td>
                        <td>{{$organizacion->org_telefono}}</td>
                        <td>{{$organizacion->org_direccion}}</td>
                        <td>{{$organizacion->org_comuna}}</td>
                        <td style="text-align:center;">
                        <a class="btn btn-success" href="#">
                            <svg class="c-icon">
                              <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-magnifying-glass">
                              </use>
                            </svg>
                            </a>
                         </td>
                         <td style="text-align:center;">
                            <a class="btn btn-info" href="#">
                            <svg class="c-icon">
                              <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-description"></use>
                            </svg>
                            </a>
                        </td>
                        <td style="text-align:center;">
                            <a class="btn btn-danger" href="#">
                            <svg class="c-icon">
                              <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-trash"></use>
                            </svg>
                            </a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

@endsection

@section('javascript')
    <script src="{{ asset('js/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/datatables.js') }}"></script>
@endsection
