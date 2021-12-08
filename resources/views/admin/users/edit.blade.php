@extends('admin.styles')

@section('content')

  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ URL('/admin') }}">Home</a></li>
    @if(Auth::user()->hasRole('admin'))
      <li class="breadcrumb-item"><a href="{{ URL('admin/users') }}">Users</a></li>
      <li class="breadcrumb-item active">Edit</li>
    @else
      <li class="breadcrumb-item active">Change Password</li>
    @endif
  </ol>

   {!! Form::model($user, [
        'action' => ['UsersController@update', $user->id],
        'method' => 'put',
        'files' => true
      ])
    !!}

    @include('admin.users.form')

    <div class="card-footer" align="right">
      <button class="btn btn-sm btn-success" type="submit">
        <i class="fa fa-check"></i> Save</button>
      <button class="btn btn-sm btn-danger" type="reset">
        <i class="fa fa-times"></i> Delete</button>
      <a href="{{ URL::previous() }}" class="btn btn-sm btn-danger">
        <i class="fa fa-ban"></i> Cancel</a>
    </div>


  {!! Form::close() !!}

@push('script')

<script>
    $('.datepicker').datepicker({
        format: "dd/mm/yyyy",
        language: "es",
        autoclose: true
    });
</script>
@endpush

@endsection
