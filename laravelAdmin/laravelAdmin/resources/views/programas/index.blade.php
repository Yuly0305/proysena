

@extends('layouts.app')
@section('title','Lista  de Usuarios')
@section('content')

@yield('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 offset-md-2">

			<h1>
				<i class="fa fa-users"></i>Lista de Pogramas</h1>
			<hr>
			<a href="{{ url('programas/create') }}" class="btn btn-custom">
				<i class="fa fa-plus"></i>
				Adicionar Programa
			</a>
			<a href="{{ url('generate/pdf/programas') }}" class="btn btn-custom">
				<i class="fa fa-file-pdf"></i>
			  Reporte PDF
			</a>
			<a href="{{ url('generate/excel/programas') }}" class="btn btn-custom">
				<i class="fa fa-file-excel"></i>
				Reporte EXCEL
			</a>


			@csrf

				<input type="search"  class="form-search"  id="qsearch" placeholder="Buscar" autocomplete="off">
			{{-- <div class="input-group">
				<div class="input-group-prepend" >
					<span class="input-group-text" id="inputGroupPrepend"><i class="fa fa-search"></i>
					</span>
				</div>


			</div> --}}
			{{-- @if (session('message'))
			<div class="alert alert-success" role="alert">
				{{ session('message') }}
			</div>
			@endif --}}
			<br>
			<div class="loader d-none text-center">
					<img src="{{asset('imgs/loader.gif')}}" width="60px">
			</div>
			<br>
			<div>
				<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2 bg bg-danger">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                CPIC
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li>
      </ul>
  </nav>
</div>
</aside>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<br>
						<th>Nombre Completo</th>
						<th class="d-none d-sm-table-cell">Correo Electrónico</th>
						<th>Teléfono</th>
						<th>Acciones</th>
					</tr>
				</thead>

				<tbody id="users-content">
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
									<form action=" {{ url('users/'.$user->id) }}" method="post" style="display: inline-block;">
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
