@extends('coreui.base')

@section('css')
   
@endsection

@section('content')

          <div class="container-fluid">
            <div class="card">
              <div class="card-header">Invoice<strong>#90-98792</strong><a class="btn btn-sm btn-secondary float-right mr-1 d-print-none" href="#" onclick="javascript:window.print();">
                  <svg class="c-icon">
                    <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-print"></use>
                  </svg> Print</a><a class="btn btn-sm btn-info float-right mr-1 d-print-none" href="#">
                  <svg class="c-icon">
                    <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-save"></use>
                  </svg> Save</a></div>
              <div class="card-body">
                <div class="row mb-4">
                  <div class="col-sm-4">
                    <h6 class="mb-3">From:</h6>
                    <div><strong>Your Great Company Inc.</strong></div>
                    <div>724 John Ave.</div>
                    <div>Cupertino, CA 95014</div>
                    <div>Email: email@your-great-company.com</div>
                    <div>Phone: +1 123-456-7890</div>
                  </div>
                  <!-- /.col-->
                  <div class="col-sm-4">
                    <h6 class="mb-3">To:</h6>
                    <div><strong>Acme Inc.</strong></div>
                    <div>159 Manor Station Road</div>
                    <div>San Diego, CA 92154</div>
                    <div>Email: email@acme.com</div>
                    <div>Phone: +1 123-456-7890</div>
                  </div>
                  <!-- /.col-->
                  <div class="col-sm-4">
                    <h6 class="mb-3">Details:</h6>
                    <div>Invoice<strong>#90-98792</strong></div>
                    <div>March 30, 2020</div>
                    <div>VAT: EU9877281777</div>
                    <div>Account Name: ACME</div>
                    <div><strong>SWIFT code: 99 8888 7777 6666 5555</strong></div>
                  </div>
                  <!-- /.col-->
                </div>
                <!-- /.row-->
                <div class="table-responsive-sm">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th class="center">#</th>
                        <th>Item</th>
                        <th>Description</th>
                        <th class="center">Quantity</th>
                        <th class="right">Unit Cost</th>
                        <th class="right">Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="center">1</td>
                        <td class="left">Origin License</td>
                        <td class="left">Extended License</td>
                        <td class="center">1</td>
                        <td class="right">$999,00</td>
                        <td class="right">$999,00</td>
                      </tr>
                      <tr>
                        <td class="center">2</td>
                        <td class="left">Custom Services</td>
                        <td class="left">Instalation and Customization (cost per hour)</td>
                        <td class="center">20</td>
                        <td class="right">$150,00</td>
                        <td class="right">$3.000,00</td>
                      </tr>
                      <tr>
                        <td class="center">3</td>
                        <td class="left">Hosting</td>
                        <td class="left">1 year subcription</td>
                        <td class="center">1</td>
                        <td class="right">$499,00</td>
                        <td class="right">$499,00</td>
                      </tr>
                      <tr>
                        <td class="center">4</td>
                        <td class="left">Platinum Support</td>
                        <td class="left">1 year subcription 24/7</td>
                        <td class="center">1</td>
                        <td class="right">$3.999,00</td>
                        <td class="right">$3.999,00</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="row">
                  <div class="col-lg-4 col-sm-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                  <div class="col-lg-4 col-sm-5 ml-auto">
                    <table class="table table-clear">
                      <tbody>
                        <tr>
                          <td class="left"><strong>Subtotal</strong></td>
                          <td class="right">$8.497,00</td>
                        </tr>
                        <tr>
                          <td class="left"><strong>Discount (20%)</strong></td>
                          <td class="right">$1,699,40</td>
                        </tr>
                        <tr>
                          <td class="left"><strong>VAT (10%)</strong></td>
                          <td class="right">$679,76</td>
                        </tr>
                        <tr>
                          <td class="left"><strong>Total</strong></td>
                          <td class="right"><strong>$7.477,36</strong></td>
                        </tr>
                      </tbody>
                    </table><a class="btn btn-success" href="#">
                      <svg class="c-icon">
                        <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-dollar"></use>
                      </svg> Proceed to Payment</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>

@endsection

@section('javascript')

@endsection
