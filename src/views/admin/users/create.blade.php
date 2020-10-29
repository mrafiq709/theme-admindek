@extends('layouts.admin')
@section('styles_page')
  <link rel="stylesheet" href="{{ asset('assets/css/admin/user.css') }}" type="text/css" media="all">
@endsection
@section('scripts_page')
  <script src="{{ asset('assets/js/jquery.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/admin/user.js') }}" type="text/javascript"></script>
@endsection
@section('content')
<section class="create-user">
  <div class="col-sm-12">

    <div class="card">
      <div class="card-header">
        <h5>Form Create User</h5>
      </div>
      <div class="card-block">
        <form id="main" method="post" action="search" novalidate="">

          <div class="row">
            <div class="col-lg-4 col-sm-12">
              <div class="avatar-wrapper">
                <img class="profile-pic" src="" />
                <div class="upload-button">
                  <i class="fas fa-arrow-circle-up" aria-hidden="true"></i>
                </div>
                <input class="file-upload" type="file" accept="image/*"/>
              </div>
            </div>
            <div class="col-lg-8 col-sm-12">
              <div class="form-group row">
            <div class="col-lg-6 col-sm-12">
              <label class="col-sm-12 col-form-label">Name</label>
              <div class="col-sm-12">
                <input type="text" class="form-control" name="name" id="name" placeholder="Text Input Validation">
                <span class="messages"></span>
              </div>
            </div>
            <div class="col-lg-6 col-sm-12">
              <label class="col-sm-12 col-form-label">Email</label>
              <div class="col-sm-12">
                <input type="text" class="form-control" name="name" id="email" placeholder="Text Input Validation">
                <span class="messages"></span>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-lg-6 col-sm-12">
              <label class="col-sm-12 col-form-label">Sex</label>
              <div class="col-sm-10">
                <div class="form-check form-check-inline">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="sex" id="sex-1" value="option1"> Male
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="sex" id="sex-2" value="option2"> Female
                  </label>
                </div>
                <span class="messages"></span>
              </div>
            </div>

            <div class="col-lg-6 col-sm-12">
              <label class="col-sm-12 col-form-label">Date Of Birth</label>
              <div class="col-sm-12">
                <input class="form-control" type="date" name="date-of-birth">
                <span class="messages"></span>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-lg-6 col-sm-12">
              <label class="col-sm-2 col-form-label">Role</label>
              <div class="col-sm-12">
                <div class="form-check form-check-inline">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="role" id="role-1" value="option1"> Develop
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="role" id="role-2" value="option2"> Project Leader
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="role" id="role-3" value="option2"> Project Manager
                  </label>
                </div>
                <span class="messages"></span>
              </div>
            </div>

            <div class="col-lg-6 col-sm-12">
              <label class="col-sm-12 col-form-label">Permission</label>
              <div class="col-sm-10">
                <div class="checkbox-fade fade-in-primary">
                  <label>
                    <input type="checkbox" id="checkbox1" name="Permission" value="Reader" class="input-danger">
                    <span class="cr">
                      <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                    </span>
                    <span>Reader</span>
                  </label>
                </div>
                <div class="checkbox-fade fade-in-primary">
                  <label>
                    <input type="checkbox" id="checkbox2" name="Permission" value="Comment" class="input-danger">
                    <span class="cr">
                      <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                    </span>
                    <span>Comment</span>
                  </label>
                </div>
                <div class="checkbox-fade fade-in-primary">
                  <label>
                    <input type="checkbox" id="checkbox3" name="Permission" value="Edit" class="input-danger">
                    <span class="cr">
                      <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                    </span>
                    <span>Edit</span>
                  </label>
                </div>
                <span class="messages"></span>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-12 text-center">
              <button type="submit" class="btn btn-primary m-b-0">Create</button>
            </div>
          </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection
