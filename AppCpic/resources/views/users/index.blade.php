@extends('layouts.app')
@section('title','Lista  de Usuarios')
@section('content')

@yield('content')
<div class="row">
	<div class="col-2 bg-custom barra-izq">
		<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">
			<!-- Divider -->
			<br>
			<div class="enlace">
				<a class="dropdown-item" href="mi-perfil.php">
					<span class="text-light"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400 text-light"></i>Mi Perfil</span>
				</a>
				
			</div>
			<span class="dropdown-divider"></span>
			<div class="enlace">
				<a class="dropdown-item" href="users">
					<span class="text-light mt-1 active"><i class="fa fa-users fa-sm fa-fw mr-2 text-gray-400 text-light"></i>Usuarios</span>
				</a>
			</div>
			<hr class="dropdown-divider">

			<div class="enlace">
				<a class="dropdown-item" href="trimestres.php">
					<span class="text-light mt-1 active"><i class="fa fa-align-left fa-sm fa-fw mr-2 text-gray-400 text-light"></i>Trimestre</span>
				</a>
			</div>
			<hr class="dropdown-divider">

			<div class="enlace">
				<a class="dropdown-item" href="ofertas.php">
					<span class="text-light mt-1"><i class="fa fa-envelope-open-text fa-sm fa-fw mr-2 text-gray-400 text-light"></i>Ofertas</span>
				</a>
			</div>
			<hr class="dropdown-divider">

			<div class="enlace">
				<a class="dropdown-item" href="municipios.php">
					<span class="text-light mt-1"><i class="fas fa-map-marked-alt fa-sm fa-fw mr-2 text-gray-400 text-light"></i>Municipios</span>
				</a>	
			</div>
			<hr class="dropdown-divider">

			<div class="enlace">
				<a class="dropdown-item" href="n-formacion.php">
					<span class="text-light mt-1"><i class="fa fa-graduation-cap fa-sm fa-fw mr-2 text-gray-400 text-light"></i>Nivel-Formación</span>
				</a>
			</div>
			<hr class="dropdown-divider">

			<div class="enlace">
				<a class="dropdown-item" href="programas.php">
					<span class="text-light mt-1"><i class="fa fa-braille fa-sm fa-fw mr-2 text-gray-400 text-light"></i>Programas</span>
				</a>
			</div>
			<hr class="dropdown-divider">
			<div class="enlace">
				<a class="dropdown-item" href="eventos.php">
					<span class="text-light mt-1"><i class="far fa-calendar-alt fa-sm fa-fw mr-2 text-gray-400 text-light"></i>Eventos</span>
				</a>
			</div>



			<!-- Divider -->
			<hr class="sidebar-divider d-none d-md-block">

			<!-- Sidebar Toggler (Sidebar) -->
		      <div class="text-center d-none d-md-inline">
		        <button class="rounded-circle border-0" id="sidebarToggle"></button>
		    </div>

		</ul>
	</div>

	<div class="col-8 lista-index">

		<h1>
			<i class="fa fa-users"></i> Lista de Usuarios</h1>
			<hr>
			<a href="{{ url('users/create') }}" class="btn btn-custom">
				<i class="fa fa-plus"></i>
				Adicionar Usuario
			</a>
			{{-- <a href="{{ url('generate/pdf/users') }}" class="btn btn-custom">
				<i class="fa fa-file-pdf"></i>
				Reporte PDF
			</a>
			<a href="{{ url('generate/excel/users') }}" class="btn btn-custom">
				<i class="fa fa-file-excel"></i>
				Reporte EXCEL
			</a> --}}
			@csrf
			<input type="search"  class="form-search"  id="qsearch" placeholder="Buscar" autocomplete="off">
			<br>
			<div class="loader d-none text-center">
				<img src="{{asset('imgs/loader.gif')}}" width="60px">
			</div>
			<br>
			<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>Nombre Completo</th>
							<th class="d-none d-sm-table-cell">Correo Electrónico</th>
							<th>Teléfono</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody id="content">	
						@foreach ($users as $user)
							<tr>
								<td>{{ $user->fullname }}</td>
								<td class="d-none d-sm-table-cell">{{ $user->email }}</td>
								<td>{{ $user->phone }}</td>
								<td>
									<a href="{{ url('users/'.$user->id) }}" class="btn btn-sm btn-custom">
										<i class="fa fa-search"></i>
									</a>
									<a href="{{ url('users/'.$user->id.'/edit/') }}" class="btn btn-sm btn-custom">
										<i class="fa fa-pen"></i>
									</a>

									<form action="{{ url('users/'.$user->id)}}" method="POST" style="display:inline-block;">
										@csrf
										@method('delete')
										<button type="button" class="btn btn-sm btn-danger btn-delete">
											<i class=" fa fa-trash"></i>
										</button>
									</form>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>

			{{$users->links()}}
		</div>

	</div>
</div>

@endsection