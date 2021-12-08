@extends('admin.styles')

@section('content')

  <ol class="breadcrumb">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item active">Users</li>
  </ol>

  @include('flash::message')

  <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <h4 class="card-title mb-0">All the Users</h4>
                  </div>
                  <div class="col-md-6" align="right">
                     <a href="{{ route('admin.users.create') }}" class="btn btn-success">
                        <i class="fa fa-plus"></i> New
                      </a>
                  </div>
                  <div class="col-md-12">
                    <br>
                    <table id="table-users" class="display">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>User</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($users as $user)
                            <tr align="center">
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                <ul class="list-inline" style="margin: 0px;">
                                  <li class="list-inline-item">
                                    <a class="btn btn-success btn-sm" href="{{ route('admin.users.edit', $user->id) }}" title="{{ trans('Edit User Information') }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i>
                                    </a>
                                  </li>
                                   <li class="list-inline-item">
                                    <a style="color:white;" class="btn btn-info btn-sm" href="{{ route('admin.transaction.create', $user->id) }}" title="{{ trans('Create Transaction') }}"><i class="fa fa-plus"></i>
                                    </a>
                                  </li>
                                  <li class="list-inline-item">
                                    {!! Form::open([
                                        'class'=>'delete',
                                        'url'  => route('admin.users.destroy', $user->id),
                                        'method' => 'DELETE',
                                        ])
                                    !!}
                                        <button class="btn btn-danger btn-sm" title="{{ trans('Eliminar') }}"><i class="fa fa-trash-o"></i></button>
                                    {!! Form::close() !!}
                                  </li>
                                </ul>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@push('script')

<script>
   @if(App::isLocale('es'))
        $('#table-users').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
             },
             "responsive": true,
             "bSort": false
        });
    @else
       $('#table-users').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/English.json"
             },
             "responsive": true,
             "bSort": false
       });
    @endif
</script>

@endpush

@endsection
