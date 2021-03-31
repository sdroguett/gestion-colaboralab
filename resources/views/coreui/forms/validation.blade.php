@extends('coreui.base')

@section('css')
   
@endsection

@section('content')

          <div class="container-fluid">
            <div class="fade-in">
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header"> Validation - jQuery Validation Plugin<a class="badge badge-danger" href="https://coreui.io/pro/">CoreUI Pro Component</a>
                      <div class="card-header-actions"><a class="card-header-action" href="https://github.com/jzaefferer/jquery-validation" target="_blank"><small class="text-muted">docs</small></a></div>
                    </div>
                    <div class="card-body">This jQuery plugin makes simple clientside form validation easy, whilst still offering plenty of customization options. It makes a good choice if you’re building something new from scratch, but also when you’re trying to integrate something into an existing application with lots of existing markup. The plugin comes bundled with a useful set of validation methods, including URL and email validation, while providing an API to write your own methods. All bundled methods come with default error messages in english and translations into 37 other languages.
                      <hr>
                      <div class="row">
                        <div class="col-md-6">
                          <h6>Simple Form</h6>
                          <form id="signupForm">
                            <div class="form-group">
                              <label class="col-form-label" for="firstname">First name</label>
                              <input class="form-control" id="firstname" type="text" name="firstname" placeholder="First name">
                            </div>
                            <div class="form-group">
                              <label class="col-form-label" for="lastname">Last name</label>
                              <input class="form-control" id="lastname" type="text" name="lastname" placeholder="Last name">
                            </div>
                            <div class="form-group">
                              <label class="col-form-label" for="username">Username</label>
                              <input class="form-control" id="username" type="text" name="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                              <label class="col-form-label" for="email">Email</label>
                              <input class="form-control" id="email" type="text" name="email" placeholder="Email">
                            </div>
                            <div class="row">
                              <div class="form-group col-md-6">
                                <label class="col-form-label" for="password">Password</label>
                                <input class="form-control" id="password" type="password" name="password" placeholder="Password">
                              </div>
                              <div class="form-group col-md-6">
                                <label class="col-form-label" for="confirm_password">Confirm password</label>
                                <input class="form-control" id="confirm_password" type="password" name="confirm_password" placeholder="Confirm password">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="checkbox">
                                <label>
                                  <input id="agree" type="checkbox" name="agree" value="agree"> Please agree to our policy
                                </label>
                              </div>
                            </div>
                            <div class="form-group">
                              <button class="btn btn-primary" type="submit" name="signup" value="Sign up">Sign up</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
              </div>
              <!-- /.row-->
            </div>
          </div>

@endsection

@section('javascript')
    <script src="{{ asset('js/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.js') }}"></script>
    <script src="{{ asset('js/validation.js') }}"></script>
@endsection
