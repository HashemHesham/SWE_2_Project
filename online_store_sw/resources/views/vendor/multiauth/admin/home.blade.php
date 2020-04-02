@extends('multiauth::_includes.master')
@section('title')
    Home | Admin
@endsection
@section('content')
@php
  $usersCount = \App\User::count();
@endphp
<div class="content-page">
      <!-- Start content -->
      <div class="content">
        <div class="container-fluid">
          <div class="page-title-box">
            <div class="row align-items-center">
              <div class="col-sm-6">
                <h4 class="page-title">Dashboard</h4>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item active">Welcome to Our Online Store</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- end row -->
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card mini-stat bg-primary text-white">
                <div class="card-body">
                  <div class="mb-4">
                    <div class="float-left mini-stat-img mr-4">
                      <i class="ti-user"></i>
                    </div>
                    <h5 class="font-16 text-uppercase mt-0 text-white-50">Users</h5>
                    <h4 class="font-500">{{ $usersCount }} <i class="mdi mdi-arrow-up text-success ml-2"></i></h4>
                  </div>
                  <div class="pt-2">
                    <div class="float-right">
                      <a href="{{ route('admin.users.index') }}" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                    </div>
                    <p class="text-white-50 mb-0">See All Users</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- container-fluid -->
      </div>
      <!-- content -->
      @include('multiauth::_includes.footer')
    </div>
@endsection