<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<div class="c-wrapper">
    <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
        <button class="c-header-toggler c-class-toggler d-lg-none mr-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show"><span class="c-header-toggler-icon"></span></button><a class="c-header-brand d-sm-none" href="/#"><img class="c-header-brand-full c-d-dark-none" src="{{asset('images/vertical_on_transparent_420x260px_by_logaster2.png')}}" width="118" height="46" alt="Colaboralab Logo"><img class="c-header-brand-minimized c-d-dark-none" src="{{asset('images/vertical_on_transparent_420x260px_by_logaster2.png')}}" width="46" height="46" alt="Colaboralab Logo"><img class="c-header-brand-full c-d-light-none" src="{{asset('images/vertical_on_transparent_420x260px_by_logaster2.png')}}" width="118" height="46" alt="Colaboralab Logo"><img class="c-header-brand-minimized c-d-light-none" src="{{asset('images/vertical_on_transparent_420x260px_by_logaster2.png')}}" width="46" height="46" alt="Colaboralab Logo"></a>
        <button class="c-header-toggler c-class-toggler ml-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true"><span class="c-header-toggler-icon"></span></button>
        <ul class="c-header-nav d-md-down-none">
            <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="{{route('inicio')}}">Inicio</a></li>


        </ul>
        <ul class="c-header-nav ml-auto">
            <li class="c-header-nav-item d-md-down-none mx-2">
                <a href="/locale/en" class="c-header-nav-link">
                    <i class="flag-icon cif-us h1"></i>
                </a>
            </li>
            <li class="c-header-nav-item d-md-down-none mx-2">
                <a href="/locale/pl" class="c-header-nav-link">
                    <i class="flag-icon cif-pl h1"></i>
                </a>
            </li>





            <li class="c-header-nav-item px-3">
                <button class="c-class-toggler c-header-nav-btn" type="button" id="header-tooltip" data-target="body" data-class="c-dark-theme" data-toggle="c-tooltip" data-placement="bottom" title="Toggle Light/Dark Mode">
                    <svg class="c-icon c-d-dark-none">
                        <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-moon"></use>
                    </svg>
                    <svg class="c-icon c-d-light-none">
                        <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-sun"></use>
                    </svg>
                </button>
            </li>
        </ul>
        <ul class="c-header-nav">

            <!-- <li class="c-header-nav-item dropdown d-md-down-none mx-2">
                <a class="c-header-nav-link" data-toggle="dropdown" href="/#" role="button" aria-haspopup="true" aria-expanded="false">
                    <svg class="c-icon">
                        <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-envelope-open"></use>
                    </svg><span class="badge badge-pill badge-info">7</span></a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg pt-0">
                    <div class="dropdown-header bg-light"><strong>You have 4 messages</strong></div><a class="dropdown-item" href="/#">
                        <div class="message">
                            <div class="py-3 mr-3 float-left">
                                <div class="c-avatar"><img class="c-avatar-img" src="{{asset('img/logo_equipo.png')}}" alt="user@email.com"><span class="c-avatar-status bg-success"></span></div>
                            </div>
                            <div><small class="text-muted">John Doe</small><small class="text-muted float-right mt-1">Just now</small></div>
                            <div class="text-truncate font-weight-bold"><span class="text-danger">!</span> Important message</div>
                            <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                        </div>
                    </a>

                    <a class="dropdown-item" href="/#">
                        <div class="message">
                            <div class="py-3 mr-3 float-left">
                                <div class="c-avatar"><img class="c-avatar-img" src="{{asset('img/logo_equipo.png')}}" alt="user@email.com"><span class="c-avatar-status bg-warning"></span></div>
                            </div>
                            <div><small class="text-muted">John Doe</small><small class="text-muted float-right mt-1">5 minutes ago</small></div>
                            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                            <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                        </div>
                    </a><a class="dropdown-item" href="/#">
                        <div class="message">
                            <div class="py-3 mr-3 float-left">
                                <div class="c-avatar"><img class="c-avatar-img" src="{{asset('img/logo_equipo.png')}}" alt="user@email.com"><span class="c-avatar-status bg-danger"></span></div>
                            </div>
                            <div><small class="text-muted">John Doe</small><small class="text-muted float-right mt-1">1:52 PM</small></div>
                            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                            <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                        </div>
                    </a><a class="dropdown-item" href="/#">
                        <div class="message">
                            <div class="py-3 mr-3 float-left">
                                <div class="c-avatar"><img class="c-avatar-img" src="{{asset('img/logo_equipo.png')}}" alt="user@email.com"><span class="c-avatar-status bg-info"></span></div>
                            </div>
                            <div><small class="text-muted">John Doe</small><small class="text-muted float-right mt-1">4:03 PM</small></div>
                            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                            <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                        </div>
                    </a><a class="dropdown-item text-center border-top" href="/#"><strong>View all messages</strong></a>
                </div>
            </li> -->


            <li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown" href="/#" role="button" aria-haspopup="true" aria-expanded="false">
                    <div class="c-avatar"><img class="c-avatar-img" src="{{asset('img/logo_equipo.png')}}" alt="user@email.com"></div>
                </a>
                <div class="dropdown-menu dropdown-menu-right pt-0">
                    <div class="dropdown-header bg-light py-2"><strong>Cuenta</strong></div>


                    <a class="dropdown-item" href="">
                        <svg class="c-icon mr-2">
                            <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-settings">
                            </use>
                        </svg> Configuración
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/#">
                        <svg class="c-icon mr-2">
                            <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-account-logout"></use>
                        </svg>
                        <form action="/logout" method="POST"> @csrf <button type="submit" class="btn btn-ghost-dark btn-block">Cerrar Sesión</button></form>
                    </a>
                </div>
            </li>
        </ul>


        <div class="c-subheader px-3">
            <!-- Breadcrumb-->
            <ol class="breadcrumb border-0 m-0">
                <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                <?php $segments = ''; ?>
                @for($i = 1; $i <= count(Request::segments()); $i++) <?php $segments .= '/' . Request::segment($i); ?> @if($i < count(Request::segments())) <li class="breadcrumb-item">{{ Request::segment($i) }}</li>
                    @else
                    <li class="breadcrumb-item active">{{ Request::segment($i) }}</li>
                    @endif
                    @endfor
                    <!-- Breadcrumb Menu-->
            </ol>




    </header>


    <!--
      <script type="text/javascript">
      $('#search').on('keyup',function(){
          var value= $(this).val();

          $.ajax({
              type:'get',
              url:"{{route('users.search')}}",
              data:{
                  search:value,
              },
              success:function(data){
                  //$('#initial_table').hide();
                  $('#ajax').append(data);
              },
              error:function(jqXHR, textStatus, errorThrown){
                  console.log("AJAX error:"+textStatus+':'+errorThrown);
              },
          });
      });
      </script>-->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js"></script>



    @section('javascript')

    <script src="{{ asset('js/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/datatables.js') }}"></script>
    <script src="{{ asset('js/buscador.js') }}"></script>
    @endsection
