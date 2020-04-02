@extends('multiauth::_includes.master')
@section('title')
    {{ $method }} {{ $model }} | Admin
@endsection
@section('content')
<div class="content-page">
      <!-- Start content -->
      <div class="content">
        <div class="container-fluid">
         
          @include('multiauth::_includes.ol')
          @include('multiauth::message')
          <!-- end row -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap dataTable no-footer dtr-inline">
                      <thead>
                        <tr>
                          <th>id</th>
                          <th>Full Name</th>
                          <th>Email</th>
                          <th>Mobile</th>
                          <th>Status</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($users as $user)
                        <tr>
                          <th>{{ $user->id }}</th>
                          <th>{{ $user->fname .' '. $user->sname .' '. $user->lname }}</th>
                          <th>{{ $user->email }}</th>
                          <th>{{ $user->mobile_num }}</th>
                          <td>
                            @if($user->email_verified_at == null)
                              <a href="{{ route('admin.users.changeStatus',$user->id) }}" class="btn btn-outline-danger waves-effect waves-light">
                                  Inactive
                              </a>
                              @elseif($user->email_verified_at != null)
                              <a href="{{ route('admin.users.changeStatus',$user->id) }}" class="btn btn-outline-success waves-effect waves-light">
                                  active
                              </a>
                            @endif
                          </td>
                          <td>
                          <a href="{{ route('admin.users.showProfile',$user->id) }}" class="btn btn-info"  type="submit"><i class="mdi mdi-account-multiple-outline mr-2"></i>Profile</a>
                          <a href="{{ route('admin.users.delete',$user->id) }}" class="btn btn-danger"  type="submit"><i class="mdi mdi-delete-sweep-outline mr-2"></i>Delete</a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                      {{ $users->links() }}
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- end col -->
          </div>
          <!-- end row -->
        </div>
        <!-- container-fluid -->
      </div>
    </div>
@endsection
