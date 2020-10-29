@extends('layouts.admin')
@section('content')
<div class="main-body">
  <div class="page-wrapper">
    <div class="page-body">
      <div class="row">
        <div class="col-md-12">
          <div class="card table-card">
            <div class="card-header">
              <h5>Search</h5>
            </div>
            <div class="card-block">
               <form id="main" method="post" action="search" novalidate="">
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
                      <input type="text" class="form-control" name="email" id="email" placeholder="Text Input Validation">
                      <span class="messages"></span>
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-lg-6 col-sm-12">
                    <label class="col-sm-12 col-form-label">Role</label>
                  <div class="col-sm-12">
                    <select name="select" class="form-control form-control-inverse fill">
                      <option value="opt1">Select One Value Only</option>
                      <option value="opt2">Project Manager</option>
                      <option value="opt3">Project Leader</option>
                      <option value="opt4">Developer</option>
                      <option value="opt5">Tester</option>
                    </select>
                    <span class="messages"></span>
                  </div>
                  </div>
                  <div class="col-lg-6 col-sm-12">
                    <label class="col-sm-12 col-form-label">Permission</label>
                  <div class="col-sm-12">
                    <select name="select" class="form-control form-control-inverse fill">
                      <option value="opt1">Select One Value Only</option>
                      <option value="opt2">Read</option>
                      <option value="opt3">Comment</option>
                      <option value="opt4">Edit</option>
                    </select>
                    <span class="messages"></span>
                  </div>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-lg-6 col-sm-12">
                    <label class="col-sm-12 col-form-label">Sex</label>
                    <div class="col-sm-12">
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
                  <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary m-b-0">Search</button>
                  </div>
                </div>
               </form>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="card table-card">
            <div class="card-header">
              <h5>List User</h5>
              <div class="card-header-right">
                <ul class="list-unstyled card-option">
                  <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                  <li><i class="feather icon-maximize full-card"></i></li>
                  <li><i class="feather icon-minus minimize-card"></i></li>
                  <li><i class="feather icon-refresh-cw reload-card"></i></li>
                  <li><i class="feather icon-trash close-card"></i></li>
                  <li><i class="feather icon-chevron-left open-card-option"></i></li>
                </ul>
              </div>
            </div>
            <div class="card-block">
              <div class="table-responsive">
                <table class="table table-hover m-b-0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Sex</th>
                      <th>Role</th>
                      <th>Permission</th>
                      <th>Date of Birth</th>
                      <th>Tags</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-inline-block align-middle">
                          <img src="{{asset('assets/media/jpg/avatar-4.jpg')}}" alt="user image" class="img-radius img-40 align-top m-r-15">
                          <div class="d-inline-block">
                            <h6>Shirley Hoe</h6>
                            <p class="text-muted m-b-0">Sales executive , NY</p>
                          </div>
                        </div>
                      </td>
                      <td>something@gmail.com</td>
                      <td>Male</td>
                      <td>Project Leader</td>
                      <td>reader</td>
                      <td>19-11-2018</td>
                      <td>
                      <label class="badge badge-inverse-primary">Sketch</label>
                      <label class="badge badge-inverse-primary">Ui</label>
                    </td>
                    <td><a href="#!"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a><a href="#!"><i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-inline-block align-middle">
                        <img src="{{asset('assets/media/jpg/avatar-2.jpg')}}" alt="user image" class="img-radius img-40 align-top m-r-15">
                        <div class="d-inline-block">
                          <h6>James Alexander</h6>
                          <p class="text-muted m-b-0">Sales executive , EL</p>
                        </div>
                      </div>
                    </td>
                    <td>something@gmail.com</td>
                    <td>Male</td>
                    <td>Developer</td>
                    <td>edit</td>
                    <td>19-11-2018</td>
                    <td>
                      <label class="badge badge-inverse-primary">Ux</label>
                      <label class="badge badge-inverse-danger">Ui</label>
                      <label class="badge badge-inverse-danger">php</label>
                    </td>
                    <td><a href="#!"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a><a href="#!"><i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-inline-block align-middle">
                        <img src="{{asset('assets/media/jpg/avatar-4.jpg')}}" alt="user image" class="img-radius img-40 align-top m-r-15">
                        <div class="d-inline-block">
                          <h6>Shirley Hoe</h6>
                          <p class="text-muted m-b-0">Sales executive , NY</p>
                        </div>
                      </div>
                    </td>
                    <td>something@gmail.com</td>
                    <td>Male</td>
                    <td>Project Manager</td>
                    <td>comment</td>
                    <td>16-03-2018</td>
                    <td>
                      <label class="badge badge-inverse-danger">Sketch</label>
                      <label class="badge badge-inverse-primary">Ui</label>
                    </td>
                    <td><a href="#!"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a><a href="#!"><i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-inline-block align-middle">
                        <img src="{{asset('assets/media/jpg/avatar-4.jpg')}}" alt="user image" class="img-radius img-40 align-top m-r-15">
                        <div class="d-inline-block">
                          <h6>Shirley Hoe</h6>
                          <p class="text-muted m-b-0">Sales executive , NY</p>
                        </div>
                      </div>
                    </td>
                    <td>something@gmail.com</td>
                    <td>Male</td>
                    <td>Project Leader</td>
                    <td>reader</td>
                    <td>19-11-2018</td>
                    <td>
                      <label class="badge badge-inverse-primary">Ux</label>
                      <label class="badge badge-inverse-success">Ui</label>
                      <label class="badge badge-inverse-warning">php</label>
                    </td>
                    <td><a href="#!"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a><a href="#!"><i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a></td>
                  </tr>
                  <tr>
                    <td>
                     <div class="d-inline-block align-middle">
                      <img src="{{asset('assets/media/jpg/avatar-2.jpg')}}" alt="user image" class="img-radius img-40 align-top m-r-15">
                      <div class="d-inline-block">
                        <h6>James Alexander</h6>
                        <p class="text-muted m-b-0">Sales executive , EL</p>
                      </div>
                    </div>
                  </td>
                  <td>something@gmail.com</td>
                  <td>Male</td>
                  <td>Developer</td>
                  <td>comment</td>
                  <td>19-11-2018</td>
                  <td>
                    <label class="badge badge-inverse-primary">Sketch</label>
                    <label class="badge badge-inverse-primary">Ui</label>
                  </td>
                  <td><a href="#!"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a><a href="#!"><i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a></td>
                </tr>
                <tr>
                  <td>
                    <div class="d-inline-block align-middle">
                      <img src="{{asset('assets/media/jpg/avatar-4.jpg')}}" alt="user image" class="img-radius img-40 align-top m-r-15">
                      <div class="d-inline-block">
                        <h6>Shirley Hoe</h6>
                        <p class="text-muted m-b-0">Sales executive , NY</p>
                      </div>
                    </div>
                  </td>
                  <td>something@gmail.com</td>
                  <td>Male</td>
                  <td>Project Manager</td>
                  <td>reader</td>
                  <td>16-03-2018</td>
                  <td>
                    <label class="badge badge-inverse-danger">Sketch</label>
                    <label class="badge badge-inverse-primary">Ui</label>
                  </td>
                  <td><a href="#!"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a><a href="#!"><i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-block">
          <ul class="pagination justify-content-center">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
