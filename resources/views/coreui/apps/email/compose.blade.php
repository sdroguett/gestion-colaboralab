@extends('coreui.base')

@section('css')
   
@endsection

@section('content')

          <div class="container-fluid">
            <div class="c-fade-in">
              <div class="c-email-app border mb-4">
                <div class="c-body">
                  <div class="c-sidebar c-sidebar-light c-sidebar-show">
                    
                      <ul class="c-sidebar-nav">
                        <li class="c-sidebar-nav-item"><a class="btn btn-success d-flex m-3" href="#">
                            <svg class="c-sidebar-nav-icon mr-3">
                              <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-inbox"></use>
                            </svg>New email</a></li>
                        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="#">
                            <svg class="c-sidebar-nav-icon">
                              <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-inbox"></use>
                            </svg> Inbox<span class="badge badge-danger">4</span></a></li>
                        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="#">
                            <svg class="c-sidebar-nav-icon">
                              <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-star"></use>
                            </svg> Stared</a></li>
                        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="#">
                            <svg class="c-sidebar-nav-icon">
                              <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-paper-plane"></use>
                            </svg> Sent</a></li>
                        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="#">
                            <svg class="c-sidebar-nav-icon">
                              <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-trash"></use>
                            </svg> Trash</a></li>
                        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="#">
                            <svg class="c-sidebar-nav-icon">
                              <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-bookmark"></use>
                            </svg> Important<span class="badge badge-info">25</span></a></li>
                      </ul>
                    
                  </div>
                  <main class="c-main p-3">
                    <p class="text-center">New Message</p>
                    <form>
                      <div class="form-row mb-3">
                        <label class="col-2 col-sm-1 col-form-label" for="to">To:</label>
                        <div class="col-10 col-sm-11">
                          <input class="form-control" id="to" type="email" placeholder="Type email">
                        </div>
                      </div>
                      <div class="form-row mb-3">
                        <label class="col-2 col-sm-1 col-form-label" for="cc">CC:</label>
                        <div class="col-10 col-sm-11">
                          <input class="form-control" id="cc" type="email" placeholder="Type email">
                        </div>
                      </div>
                      <div class="form-row mb-3">
                        <label class="col-2 col-sm-1 col-form-label" for="bcc">BCC:</label>
                        <div class="col-10 col-sm-11">
                          <input class="form-control" id="bcc" type="email" placeholder="Type email">
                        </div>
                      </div>
                    </form>
                    <div class="row">
                      <div class="col-sm-11 ml-auto">
                        <div class="toolbar" role="toolbar">
                          <div class="btn-group">
                            <button class="btn btn-light" type="button">
                              <svg class="c-icon">
                                <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-bold"></use>
                              </svg>
                            </button>
                            <button class="btn btn-light" type="button">
                              <svg class="c-icon">
                                <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-italic"></use>
                              </svg>
                            </button>
                            <button class="btn btn-light" type="button">
                              <svg class="c-icon">
                                <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-underline"></use>
                              </svg>
                            </button>
                          </div>
                          <div class="btn-group">
                            <button class="btn btn-light" type="button">
                              <svg class="c-icon">
                                <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-align-left"></use>
                              </svg>
                            </button>
                            <button class="btn btn-light" type="button">
                              <svg class="c-icon">
                                <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-align-right"></use>
                              </svg>
                            </button>
                            <button class="btn btn-light" type="button">
                              <svg class="c-icon">
                                <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-align-center"></use>
                              </svg>
                            </button>
                            <button class="btn btn-light" type="button">
                              <svg class="c-icon">
                                <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-justify-center"></use>
                              </svg>
                            </button>
                          </div>
                          <div class="btn-group">
                            <button class="btn btn-light" type="button">
                              <svg class="c-icon">
                                <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-indent-increase"></use>
                              </svg>
                            </button>
                            <button class="btn btn-light" type="button">
                              <svg class="c-icon">
                                <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-indent-decrease"></use>
                              </svg>
                            </button>
                          </div>
                          <div class="btn-group">
                            <button class="btn btn-light" type="button">
                              <svg class="c-icon">
                                <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-list"></use>
                              </svg>
                            </button>
                            <button class="btn btn-light" type="button">
                              <svg class="c-icon">
                                <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-list-numbered"></use>
                              </svg>
                            </button>
                          </div>
                          <button class="btn btn-light" type="button">
                            <svg class="c-icon">
                              <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-trash"></use>
                            </svg>
                          </button>
                          <button class="btn btn-light" type="button">
                            <svg class="c-icon">
                              <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-paperclip"></use>
                            </svg>
                          </button>
                          <div class="btn-group">
                            <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown">
                              <svg class="c-icon">
                                <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-tags"></use>
                              </svg><span class="caret"></span>
                            </button>
                            <div class="dropdown-menu"><a class="dropdown-item" href="#">add label<span class="badge badge-danger"> Home</span></a><a class="dropdown-item" href="#">add label<span class="badge badge-info"> Job</span></a><a class="dropdown-item" href="#">add label<span class="badge badge-success"> Clients</span></a><a class="dropdown-item" href="#">add label<span class="badge badge-warning"> News</span></a></div>
                          </div>
                        </div>
                        <div class="form-group mt-4">
                          <textarea class="form-control" id="message" name="body" rows="12" placeholder="Click here to reply"></textarea>
                        </div>
                        <div class="form-group">
                          <button class="btn btn-success" type="submit">Send</button>
                          <button class="btn btn-light" type="submit">Draft</button>
                          <button class="btn btn-danger" type="submit">Discard</button>
                        </div>
                      </div>
                    </div>
                  </main>
                </div>
              </div>
            </div>
          </div>

@endsection

@section('javascript')

@endsection