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
            <div class="col-3">
              <div class="card">
                <div class="card-body">
                  <div class="col-12" style="margin-bottom: 2%;">
                    <center>
                      <p style="font-size: 18px;">{{ $user->fname. ' '.$user->lname }}</p>
                      <p style="font-size: 11px;">{{ $user->email }}</p>
                      <p style="font-size: 16px;">registeration date: {{ $user->created_at }}</p>
                    </center>
                  </div>
                  <form method="post" action="{{ route('admin.users.update') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                  <div class="clearfix"></div>
                  <div class="col-sm-12">
                    <center>
                     @if($user->email_verified_at == null)
                        <a href="{{ route('admin.users.changeStatus',$user->id) }}" class="btn btn-outline-danger waves-effect waves-light">
                            Inactive
                        </a>
                        @elseif($user->email_verified_at != null)
                        <a href="{{ route('admin.users.changeStatus',$user->id) }}" class="btn btn-outline-success waves-effect waves-light">
                            active
                        </a>
                      @endif
                    </center>
                  </div>
                </div>
              </div>
            </div>
            <!-- end col -->

            <div class="col-9">
              <div class="card">
                <div class="card-body">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <a href="#editprofile" class="nav-link active" data-toggle="tab" role="tab" aria-selected="true">
                        <span class="d-none d-sm-block"><i class="mdi mdi-square-edit-outline mr-2"></i>Edit</span>
                      </a>
                    </li> 
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane p-3 active" role="tabpanel" id="editprofile">
                      <div class="form-group row">
                        <div class="col-sm-4">
                          <label>First Name</label>
                          <div>
                            <input class="form-control" type="text" name="fname" placeholder="first name" required value="{{ $user->fname }}">
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <label>Last Name</label>
                          <div>
                            <input class="form-control" type="text" name="lname" placeholder="last name" required value="{{ $user->lname }}">
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-12">
                          <label>Email</label>
                          <div>
                            <input class="form-control" type="text" name="email" placeholder="email" required value="{{ $user->email }}">
                          </div>
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="col-sm-12">
                          <button type="submit" class="btn btn-success btn-lg">Update</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
              <div class="card">
                <div class="card-body">
                  <h4>Change Password</h4>
                  <form action="{{ route('admin.users.changePassword') }}" method="post">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                    <div class="form-group row">
                      <div class="col-sm-4">
                        <div>
                          <input class="form-control" type="password" name="password" placeholder="type a new password" required>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <button class="btn btn-success" type="submit">Change Password</button>
                      </div>
                    </div>
                  </form>
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
