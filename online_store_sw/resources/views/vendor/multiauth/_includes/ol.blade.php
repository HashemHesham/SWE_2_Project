<div class="page-title-box">
  <div class="row align-items-center">
    <div class="col-sm-6">
      <h4 class="page-title">All {{ $model }}</h4>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{ route('admin.home') }}">Home</a>
        </li>
        <li class="breadcrumb-item">
          <a href="{{ url('/adtraumiman/admin/manage/' .$model.'/index') }}">{{ $model }}</a>
        </li>
        <li class="breadcrumb-item active">{{ $method }}</li>
      </ol>
    </div>
    @if($method == 'create' || $method == 'profile' || $method== 'all users')
    <div class="col-sm-6">
      <div class="float-right d-none d-md-block">
        <div class="dropdown">
          <a href="{{ route('admin.'.$model.'.index') }}" class="btn btn-danger dropdown-toggle arrow-none waves-effect waves-light"><i class="mdi mdi-mdi mdi-arrow-right-bold-circle"></i> Back</a>
        </div>
      </div>
    </div>
    @else
    <div class="col-sm-6">
      <div class="float-right d-none d-md-block">
        <div class="dropdown">
          <a href="{{ route('admin.'.$model.'.create') }}" class="btn btn-success dropdown-toggle arrow-none waves-effect waves-light"><i class="mdi mdi-mdi mdi-plus"></i> Add new</a>
        </div>
      </div>

    </div>
    @endif
  </div>
</div>