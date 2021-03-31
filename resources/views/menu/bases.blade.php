@extends('coreui.base')

@section('content')

<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header"><strong>Carga de Base</strong></div>
                    <div class="card-body">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="text-input">Seleccionar Archivo</label>
                                <div class="col-md-4">
                                    <input class="form-control" type="file" id="fileBase"  name="fileBase">
                                </div>
                            </div>




                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="selectUser">Seleccionar Usuario</label>
                                <div class="col-md-4">
                                    <select class="form-control" id="selectUser" name="selectUser">
                                        <option value="0">Seleccionar</option>
                                        @foreach($users as $user)
                                        <option value="1">{{$user->name.' '.$user->apellido_paterno}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>






                        </form>












                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-10">
            <button class="btn btn-sm btn-primary" id="btnGuardar" type="submit">Subir Base</button>
            <a class="btn btn-sm btn-danger" href="{{ url()->previous() }}">Volver</a>
        </div>
    </div>


</div>

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
