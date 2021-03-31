@extends('coreui.base')

@section('css')
    <link href="{{ asset('css/daterangepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/select2-coreui.css') }}" rel="stylesheet">
@endsection

@section('content')

          <div class="container-fluid">
            <div class="fade-in">
              <div class="row">
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header"> Masked Input Plugin for jQuery<a class="badge badge-danger" href="/https://coreui.io/pro/">CoreUI Pro Component</a>
                      <div class="card-header-actions"><a class="card-header-action" href="/https://github.com/digitalBush/jquery.maskedinput" target="_blank"><small class="text-muted">docs</small></a></div>
                    </div>
                    <div class="card-body">
                      <form>
                        <fieldset class="form-group">
                          <label>Date input</label>
                          <div class="input-group"><span class="input-group-prepend"><span class="input-group-text">
                                <svg class="c-icon">
                                  <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-calendar"></use>
                                </svg></span></span>
                            <input class="form-control" id="date" type="text">
                          </div><small class="text-muted">ex. 99/99/9999</small>
                        </fieldset>
                        <fieldset class="form-group">
                          <label>Phone input</label>
                          <div class="input-group"><span class="input-group-prepend"><span class="input-group-text">
                                <svg class="c-icon">
                                  <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-phone"></use>
                                </svg></span></span>
                            <input class="form-control" id="phone" type="text">
                          </div><small class="text-muted">ex. (999) 999-9999</small>
                        </fieldset>
                        <fieldset class="form-group">
                          <label>Taxpayer Identification Numbers</label>
                          <div class="input-group"><span class="input-group-prepend"><span class="input-group-text">
                                <svg class="c-icon">
                                  <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-dollar"></use>
                                </svg></span></span>
                            <input class="form-control" id="tin" type="text">
                          </div><small class="text-muted">ex. 99-9999999</small>
                        </fieldset>
                        <fieldset class="form-group">
                          <label>Social Security Number</label>
                          <div class="input-group"><span class="input-group-prepend"><span class="input-group-text">
                                <svg class="c-icon">
                                  <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-user"></use>
                                </svg></span></span>
                            <input class="form-control" id="ssn" type="text">
                          </div><small class="text-muted">ex. 999-99-9999</small>
                        </fieldset>
                        <fieldset class="form-group">
                          <label>Eye Script</label>
                          <div class="input-group"><span class="input-group-prepend"><span class="input-group-text">
                                <svg class="c-icon">
                                  <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-asterisk"></use>
                                </svg></span></span>
                            <input class="form-control" id="eyescript" type="text">
                          </div><small class="text-muted">ex. ~9.99 ~9.99 999</small>
                        </fieldset>
                        <fieldset class="form-group">
                          <label>Credit Card Number</label>
                          <div class="input-group"><span class="input-group-prepend"><span class="input-group-text">
                                <svg class="c-icon">
                                  <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-credit-card"></use>
                                </svg></span></span>
                            <input class="form-control" id="ccn" type="text" placeholder="0000 0000 0000 0000">
                          </div><small class="text-muted">ex. 9999 9999 9999 9999</small>
                        </fieldset>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header"> Select2<a class="badge badge-danger" href="/https://coreui.io/pro/">CoreUI Pro Component</a>
                      <div class="card-header-actions"><a class="card-header-action" href="/https://select2.github.io" target="_blank"><small class="text-muted">docs</small></a></div>
                    </div>
                    <div class="card-body">
                      <fieldset class="form-group">
                        <label>Modern Select</label>
                        <select class="form-control select2-single" id="select2-1">
                          <option>Option 1</option>
                          <option>Option 2</option>
                          <option>Option 3</option>
                          <option>Option 4</option>
                          <option>Option 5</option>
                        </select>
                      </fieldset>
                      <fieldset class="form-group">
                        <label>Multiple Select / Tags</label>
                        <select class="form-control select2-multiple" id="select2-2" multiple="">
                          <option>Option 1</option>
                          <option selected="">Option 2</option>
                          <option>Option 3</option>
                          <option>Option 4</option>
                          <option>Option 5</option>
                        </select>
                      </fieldset>
                      <fieldset class="form-group">
                        <label>Group Select</label>
                        <select class="form-control" id="select2-3" data-placeholder="Your Favorite Football Team">
                          <option value=""></option>
                          <optgroup label="NFC EAST">
                            <option>Dallas Cowboys</option>
                            <option>New York Giants</option>
                            <option>Philadelphia Eagles</option>
                            <option>Washington Redskins</option>
                          </optgroup>
                          <optgroup label="NFC NORTH">
                            <option>Chicago Bears</option>
                            <option>Detroit Lions</option>
                            <option>Green Bay Packers</option>
                            <option>Minnesota Vikings</option>
                          </optgroup>
                          <optgroup label="NFC SOUTH">
                            <option>Atlanta Falcons</option>
                            <option>Carolina Panthers</option>
                            <option>New Orleans Saints</option>
                            <option>Tampa Bay Buccaneers</option>
                          </optgroup>
                          <optgroup label="NFC WEST">
                            <option>Arizona Cardinals</option>
                            <option>St. Louis Rams</option>
                            <option>San Francisco 49ers</option>
                            <option>Seattle Seahawks</option>
                          </optgroup>
                          <optgroup label="AFC EAST">
                            <option>Buffalo Bills</option>
                            <option>Miami Dolphins</option>
                            <option>New England Patriots</option>
                            <option>New York Jets</option>
                          </optgroup>
                          <optgroup label="AFC NORTH">
                            <option>Baltimore Ravens</option>
                            <option>Cincinnati Bengals</option>
                            <option>Cleveland Browns</option>
                            <option>Pittsburgh Steelers</option>
                          </optgroup>
                          <optgroup label="AFC SOUTH">
                            <option>Houston Texans</option>
                            <option>Indianapolis Colts</option>
                            <option>Jacksonville Jaguars</option>
                            <option>Tennessee Titans</option>
                          </optgroup>
                          <optgroup label="AFC WEST">
                            <option>Denver Broncos</option>
                            <option>Kansas City Chiefs</option>
                            <option>Oakland Raiders</option>
                            <option>San Diego Chargers</option>
                          </optgroup>
                        </select>
                      </fieldset>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header"> DateRangePicker<a class="badge badge-danger" href="/https://coreui.io/pro/">CoreUI Pro Component</a>
                      <div class="card-header-actions"><a class="card-header-action" href="/http://www.daterangepicker.com" target="_blank"><small class="text-muted">docs</small></a></div>
                    </div>
                    <div class="card-body">
                      <fieldset class="form-group">
                        <label>DateRangePicker</label>
                        <div class="input-group"><span class="input-group-prepend"><span class="input-group-text">
                              <svg class="c-icon">
                                <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-calendar"></use>
                              </svg></span></span>
                          <input class="form-control" name="daterange" type="text">
                        </div>
                      </fieldset>
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
    <script src="{{ asset('js/jquery.maskedinput.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="{{ asset('js/daterangepicker.js') }}"></script>
    <script src="{{ asset('js/advanced-forms.js') }}"></script>
@endsection
