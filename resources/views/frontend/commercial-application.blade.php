@extends('frontend.layouts.app')
@section('content')
    <section class="latestPostsBlock container" style="margin-top: 40px">
        <!-- rowHead -->
        <header class="row rowHead">
            <div class="col-md-12">
                <h1 class="fontNeuron blockH text-uppercase">
                    <span class="bdrBottom">Residential Rental</span>
                    <span class="textSecondary">Application</span>
                </h1>
            </div>
        </header>
        <!-- isoContentHolder -->
        <form onsubmit="ajaxStore(event, this)" action="{{ route('residential-application.store') }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label for="d_of_b" class="form-label">Type of Property *</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="property_type" value="Industrial"
                            id="property_type1">
                        <label class="form-check-label" for="property_type1">
                            Industrial
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="property_type" value="Office Space"
                            id="property_type2">
                        <label class="form-check-label" for="property_type2">
                            Office Space
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="property_type" value="Warehouse"
                            id="property_type3">
                        <label class="form-check-label" for="property_type3">
                            Warehouse
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="property_type" value="Other"
                            id="property_type4">
                        <label class="form-check-label" for="property_type4">
                            Other
                        </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="property_type" value="Restaurant"
                            id="property_type5">
                        <label class="form-check-label" for="property_type5">
                            Restaurant
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="property_type" value="Building"
                            id="property_type6">
                        <label class="form-check-label" for="property_type6">
                            Building
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="property_type" value="Retail"
                            id="property_type7">
                        <label class="form-check-label" for="property_type7">
                            Retail
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label for="property_address" class="form-label">Property Address *</label>
                    <input type="text" name="property_address" class="form-control">
                    @if ($errors->has('property_address'))
                        <div class="alert alert-danger">{{ $errors->first('property_address') }}</div>
                    @endif
                </div>
                <div class="col-md-12">
                    <label for="property_address2" class="form-label">Property Address-2 (Optional)</label>
                    <input type="text" name="property_address2" class="form-control">
                    @if ($errors->has('property_address2'))
                        <div class="alert alert-danger">{{ $errors->first('property_address2') }}</div>
                    @endif
                </div>
                <div class="col-md-6">
                    <label for="city" class="form-label">City</label>
                    <input type="text" name="city" class="form-control">
                    @if ($errors->has('city'))
                        <div class="alert alert-danger">{{ $errors->first('city') }}</div>
                    @endif
                </div>
                <div class="col-md-6">
                    <label for="state" class="form-label">State / Province</label>
                    <input type="text" name="state" class="form-control">
                    @if ($errors->has('state'))
                        <div class="alert alert-danger">{{ $errors->first('state') }}</div>
                    @endif
                </div>
                <div class="col-md-12">
                    <label for="post" class="form-label">Postal / Zip Code</label>
                    <input type="text" name="post" class="form-control">
                    @if ($errors->has('post'))
                        <div class="alert alert-danger">{{ $errors->first('post') }}</div>
                    @endif
                </div>
                <div class="col-md-12">
                    <label for="d_of_b" class="form-label">Property Description *</label>
                    <textarea name="property_description" class="form-control" rows="5"></textarea>
                    @if ($errors->has('d_of_b'))
                        <div class="alert alert-danger">{{ $errors->first('d_of_b') }}</div>
                    @endif
                </div>
                <div class="col-md-6">
                    <label for="d_of_b" class="form-label">Does the property have a parking lot? *</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="vehicle" value="Yes" id="parking1">
                        <label class="form-check-label" for="parking1">
                            Yes
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="parking" value="No" id="parking2">
                        <label class="form-check-label" for="parking2">
                            No
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="parking" value="Other" id="parking3">
                        <label class="form-check-label" for="parking3">
                            Other
                        </label>
                    </div>
                    @if ($errors->has('parking'))
                        <div class="alert alert-danger">{{ $errors->first('parking') }}</div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h3>Commercial Lease Details</h3>
                    <hr>
                </div>
                <div class="col-md-6">
                    <label for="lease_start_date" class="form-label">When is the lease term start date? *</label>
                    <input type="date" name="lease_start_date" class="form-control">
                    @if ($errors->has('lease_start_date'))
                        <div class="alert alert-danger">{{ $errors->first('lease_start_date') }}</div>
                    @endif
                </div>
                <div class="col-md-6">
                    <label for="lease_end_date" class="form-label">When is the lease term end date? *</label>
                    <input type="date" name="lease_end_date" class="form-control">
                    @if ($errors->has('lease_end_date'))
                        <div class="alert alert-danger">{{ $errors->first('lease_end_date') }}</div>
                    @endif
                </div>
                <div class="col-md-6">
                    <label for="rental_amount" class="form-label">Rental amount ($) *</label>
                    <input type="number" name="rental_amount" class="form-control">
                    @if ($errors->has('rental_amount'))
                        <div class="alert alert-danger">{{ $errors->first('rental_amount') }}</div>
                    @endif
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Payment Term *</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment_term" value="Monthly"
                            id="payment_term1">
                        <label class="form-check-label" for="payment_term1">
                            Monthly
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment_term" value="Yearly"
                            id="payment_term2">
                        <label class="form-check-label" for="payment_term2">
                            Yearly
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment_term" value="Quarterly"
                            id="payment_term3">
                        <label class="form-check-label" for="payment_term3">
                            Quarterly
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment_term" value="Other"
                            id="payment_term4">
                        <label class="form-check-label" for="payment_term4">
                            Other
                        </label>
                    </div>
                    @if ($errors->has('payment_term'))
                        <div class="alert alert-danger">{{ $errors->first('payment_term') }}</div>
                    @endif
                </div>

                <div class="col-md-6">
                    <label for="d_of_b" class="form-label">Payment Method *</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pay_method" value="Cash"
                            id="pay_method1">
                        <label class="form-check-label" for="pay_method1">
                            Cash
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pay_method" value="Credit Card"
                            id="pay_method2">
                        <label class="form-check-label" for="pay_method2">
                            Credit Card
                        </label>
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="security_amount" class="form-label">Security amount ($) *</label>
                    <input type="text" name="security_amount" class="form-control">
                    @if ($errors->has('security_amount'))
                        <div class="alert alert-danger">{{ $errors->first('security_amount') }}</div>
                    @endif
                </div>

                <div class="col-md-6">
                    <label for="taxes" class="form-label">Who is responsible for paying the property taxes? *</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="taxes" value="Landlord" id="taxes1">
                        <label class="form-check-label" for="taxes1">
                            Landlord
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="taxes" value="Tenant" id="taxes2">
                        <label class="form-check-label" for="taxes2">
                            Tenant
                        </label>
                    </div>
                    @if ($errors->has('taxes'))
                        <div class="alert alert-danger">{{ $errors->first('taxes') }}</div>
                    @endif
                </div>

                <div class="col-md-6">
                    <label for="responsible" class="form-label">Who will be responsible for the maintenance and repair of
                        the
                        property? *</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="responsible" value="Landlord"
                            id="responsible1">
                        <label class="form-check-label" for="responsible1">
                            Landlord
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="responsible" value="Tenant"
                            id="responsible2">
                        <label class="form-check-label" for="responsible2">
                            Tenant
                        </label>
                    </div>
                    @if ($errors->has('responsible'))
                        <div class="alert alert-danger">{{ $errors->first('responsible') }}</div>
                    @endif
                </div>

                <div class="col-md-6">
                    <label for="utilities" class="form-label">Who will pay for the utilities? *</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="utilities" value="Landlord"
                            id="utilities1">
                        <label class="form-check-label" for="utilities1">
                            Landlord
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="utilities" value="Tenant" id="utilities2">
                        <label class="form-check-label" for="utilities2">
                            Tenant
                        </label>
                    </div>
                    @if ($errors->has('utilities'))
                        <div class="alert alert-danger">{{ $errors->first('utilities') }}</div>
                    @endif
                </div>

                <div class="col-md-6">
                    <label for="insurance" class="form-label">Who will pay for the property insurance? *</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="insurance" value="Landlord"
                            id="insurance1">
                        <label class="form-check-label" for="insurance1">
                            Landlord
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="insurance" value="Tenant" id="insurance2">
                        <label class="form-check-label" for="insurance2">
                            Tenant
                        </label>
                    </div>
                    @if ($errors->has('insurance'))
                        <div class="alert alert-danger">{{ $errors->first('insurance') }}</div>
                    @endif
                </div>

                <div class="col-md-12">
                    <label for="furniture" class="form-label">Are there utilities and furniture included in the property?
                        If yes, please list them below:</label>
                    <textarea name="furniture" class="form-control" rows="10"></textarea>
                    @if ($errors->has('furniture'))
                        <div class="alert alert-danger">{{ $errors->first('furniture') }}</div>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h3>Landlord Information</h3>
                    <hr>
                </div>

                <div class="col-md-6">
                    <label for="first_name" class="form-label">First Name *</label>
                    <input type="text" name="first_name" class="form-control">
                    @if ($errors->has('first_name'))
                        <div class="alert alert-danger">{{ $errors->first('first_name') }}</div>
                    @endif
                </div>
                <div class="col-md-6">
                    <label for="last_name" class="form-label">Last Name *</label>
                    <input type="text" name="last_name" class="form-control">
                    @if ($errors->has('last_name'))
                        <div class="alert alert-danger">{{ $errors->first('last_name') }}</div>
                    @endif
                </div>
                <div class="col-md-6">
                    <label for="phone" class="form-label">Phone *</label>
                    <input type="text" name="phone" class="form-control">
                    @if ($errors->has('phone'))
                        <div class="alert alert-danger">{{ $errors->first('phone') }}</div>
                    @endif
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email *</label>
                    <input type="email" name="email" class="form-control">
                    @if ($errors->has('email'))
                        <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                    @endif
                </div>

                <div class="col-md-12">
                    <label for="current_address" class="form-label">Current Address *</label>
                    <input type="text" name="current_address" class="form-control">
                    @if ($errors->has('current_address'))
                        <div class="alert alert-danger">{{ $errors->first('current_address') }}</div>
                    @endif
                </div>
                <div class="col-md-12">
                    <label for="current_address2" class="form-label">Address Line 2</label>
                    <input type="text" name="current_address2" class="form-control">
                    @if ($errors->has('current_address2'))
                        <div class="alert alert-danger">{{ $errors->first('current_address2') }}</div>
                    @endif
                </div>
                <div class="col-md-6">
                    <label for="city" class="form-label">City</label>
                    <input type="text" name="city" class="form-control">
                    @if ($errors->has('city'))
                        <div class="alert alert-danger">{{ $errors->first('city') }}</div>
                    @endif
                </div>
                <div class="col-md-6">
                    <label for="state" class="form-label">State / Province</label>
                    <input type="text" name="state" class="form-control">
                    @if ($errors->has('state'))
                        <div class="alert alert-danger">{{ $errors->first('state') }}</div>
                    @endif
                </div>
                <div class="col-md-6">
                    <label for="post" class="form-label">Postal / Zip Code</label>
                    <input type="text" name="post" class="form-control">
                    @if ($errors->has('post'))
                        <div class="alert alert-danger">{{ $errors->first('post') }}</div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h3>Tenant Information</h3>
                    <hr>
                </div>

                <div class="col-md-6">
                    <label for="tenant_first_name" class="form-label">First Name *</label>
                    <input type="text" name="tenant_first_name" class="form-control">
                    @if ($errors->has('tenant_first_name'))
                        <div class="alert alert-danger">{{ $errors->first('tenant_first_name') }}</div>
                    @endif
                </div>
                <div class="col-md-6">
                    <label for="tenant_last_name" class="form-label">Last Name *</label>
                    <input type="text" name="tenant_last_name" class="form-control">
                    @if ($errors->has('tenant_last_name'))
                        <div class="alert alert-danger">{{ $errors->first('tenant_last_name') }}</div>
                    @endif
                </div>
                <div class="col-md-6">
                    <label for="tenant_phone" class="form-label">Phone *</label>
                    <input type="text" name="tenant_phone" class="form-control">
                    @if ($errors->has('tenant_phone'))
                        <div class="alert alert-danger">{{ $errors->first('tenant_phone') }}</div>
                    @endif
                </div>
                <div class="col-md-6">
                    <label for="tenant_email" class="form-label">Email *</label>
                    <input type="email" name="tenant_email" class="form-control">
                    @if ($errors->has('tenant_email'))
                        <div class="alert alert-danger">{{ $errors->first('tenant_email') }}</div>
                    @endif
                </div>

                <div class="col-md-12">
                    <label for="tenant_address" class="form-label">Address *</label>
                    <input type="text" name="tenant_address" class="form-control">
                    @if ($errors->has('tenant_address'))
                        <div class="alert alert-danger">{{ $errors->first('tenant_address') }}</div>
                    @endif
                </div>
                <div class="col-md-12">
                    <label for="tenant_address2" class="form-label">Address Line 2</label>
                    <input type="text" name="tenant_address2" class="form-control">
                    @if ($errors->has('tenant_address2'))
                        <div class="alert alert-danger">{{ $errors->first('tenant_address2') }}</div>
                    @endif
                </div>
                <div class="col-md-6">
                    <label for="tenant_city" class="form-label">City</label>
                    <input type="text" name="tenant_city" class="form-control">
                    @if ($errors->has('tenant_city'))
                        <div class="alert alert-danger">{{ $errors->first('tenant_city') }}</div>
                    @endif
                </div>
                <div class="col-md-6">
                    <label for="tenant_state" class="form-label">State / Province</label>
                    <input type="text" name="tenant_state" class="form-control">
                    @if ($errors->has('tenant_state'))
                        <div class="alert alert-danger">{{ $errors->first('tenant_state') }}</div>
                    @endif
                </div>
                <div class="col-md-6">
                    <label for="tenant_post" class="form-label">Postal / Zip Code</label>
                    <input type="text" name="tenant_post" class="form-control">
                    @if ($errors->has('tenant_post'))
                        <div class="alert alert-danger">{{ $errors->first('tenant_post') }}</div>
                    @endif
                </div>
            </div>



            <div class="row">
                <div class="col-md-12">
                    <h3>Acknowledgment</h3>
                    <hr>
                </div>
                <div class="col-md-6">
                    <label for="agreement_date" class="form-label">Execution Date of this Agreement *</label>
                    <input type="date" name="agreement_date" class="form-control">
                    @if ($errors->has('agreement_date'))
                        <div class="alert alert-danger">{{ $errors->first('agreement_date') }}</div>
                    @endif
                </div>
                <div class="col-md-6">
                    <label for="guarantee_lease" class="form-label">Persons who will guarantee the lease *</label>
                    <input name="guarantee_lease" class="form-control" rows="6">
                    @if ($errors->has('guarantee_lease'))
                        <div class="alert alert-danger">{{ $errors->first('guarantee_lease') }}</div>
                    @endif
                </div>
                <div class="col-md-12">
                    <label for="guarantee_lease" class="form-label">Type a question *</label>
                    <textarea name="guarantee_lease" class="form-control" rows="6"></textarea>
                    @if ($errors->has('guarantee_lease'))
                        <div class="alert alert-danger">{{ $errors->first('guarantee_lease') }}</div>
                    @endif
                </div>

            </div>

            
            <div class="row">
                <div class="col-md-6">
                    <label for="signature1" class="form-label">Applicant's Sign 1 *</label>
                    <div id="signature1"></div>
                    <input type="hidden" name="signature1" id="signatureInput1">
                </div>
                <div class="col-md-6">
                    <label for="signature1_date" class="form-label">Date Signed *</label>
                    <input type="date" name="signature1_date" class="form-control">
                    @if ($errors->has('signature1_date'))
                        <div class="alert alert-danger">{{ $errors->first('signature1_date') }}</div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="security_date" class="form-label">Applicant's Sign 2 </label>
                    <div id="signature2"></div>
                    <input type="hidden" name="signature2" id="signatureInput2">
                </div>
                <div class="col-md-6">
                    <label for="signature2_date" class="form-label">Date Signed</label>
                    <input type="date" name="signature2_date" class="form-control">
                    @if ($errors->has('signature2_date'))
                        <div class="alert alert-danger">{{ $errors->first('signature2_date') }}</div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="security_date" class="form-label">Applicant's Sign 3</label>
                    <div id="signature3"></div>
                    <input type="hidden" name="signature3" id="signatureInput3">
                </div>
                <div class="col-md-6">
                    <label for="signature3_date" class="form-label">Date Signed </label>
                    <input type="date" name="signature3_date" class="form-control">
                    @if ($errors->has('signature3_date'))
                        <div class="alert alert-danger">{{ $errors->first('signature3_date') }}</div>
                    @endif
                </div>
                <div class="col-md-12 text-center">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </section>
    @push('scripts')
        <script src="{{ asset('common/plugins/jSignature/flashcanvas.js') }}"></script>
        <script src="{{ asset('common/plugins/jSignature/jSignature.min.js') }}"></script>
        <script>
            $(document).ready(function() {
                $("#signature1").jSignature()
                $("#signature2").jSignature()
                $("#signature3").jSignature()
                $('form').submit(function() {
                    var data = $('#signature1').jSignature('getData', 'image');
                    var data = $('#signature2').jSignature('getData', 'image');
                    var data = $('#signature3').jSignature('getData', 'image');
                    $('#signatureInput1').val(data);
                    $('#signatureInput2').val(data);
                    $('#signatureInput3').val(data);
                });
            })
        </script>
    @endpush
@endsection
