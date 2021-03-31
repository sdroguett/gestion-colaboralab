<div class="c-sidebar-brand"><img class="c-sidebar-brand-full" src="{{asset('images\vertical_on_transparent_420x260px_by_logaster2.png')}}" width="180" height="120" alt="CoreUI Logo"><img class="c-sidebar-brand-minimized" src="/assets/brand/coreui-signet-white.svg" width="118" height="46" alt="CoreUI Logo"></div>
      <ul class="c-sidebar-nav" data-drodpown-accordion="true">

     @if(@Auth::user()->hasPermissionTo('ver_todo'))
        <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle">
          <svg class="c-sidebar-nav-icon">
              <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-equalizer"></use>
            </svg> Administración</a>
          <ul class="c-sidebar-nav-dropdown-items">

            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('users')}}"><span class="c-sidebar-nav-icon"></span> Usuarios</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('contactos_administrador')}}"><span class="c-sidebar-nav-icon"></span> Contactos</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/bases"><span class="c-sidebar-nav-icon"></span>Bases</a></li>
          </ul>
        </li>

        @endif


        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('inicio')}}"><span class="c-sidebar-nav-icon"></span>Inicio<a></li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('contacto.contactados')}}"><span class="c-sidebar-nav-icon"></span>Contactados<a></li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('contacto.no_contactados')}}"><span class="c-sidebar-nav-icon"></span>No Contactados<a></li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('contacto.devolver_llamado')}}"><span class="c-sidebar-nav-icon"></span>Devolver Llamado<a></li>
      </ul>

    </div>





