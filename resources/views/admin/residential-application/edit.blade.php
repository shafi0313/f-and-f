@extends('admin.layouts.app')
@section('title', 'Residential Rental Application')
@section('content')
    @include('admin.layouts.includes.breadcrumb', [
        'title' => ['', 'Residential Rental Application', 'Index'],
    ])

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <h4 class="card-title">List of Residential Rental Applications</h4>
                    </div>
                    <form onsubmit="ajaxStore(event, this)" action="{{ route('residential-application.store') }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for="first_name" class="form-label">First Name *</label>
                                <input type="text" name="first_name" class="form-control" value="{{ $res->first_name }}">
                                @if ($errors->has('first_name'))
                                    <div class="alert alert-danger">{{ $errors->first('first_name') }}</div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="last_name" class="form-label">Last Name *</label>
                                <input type="text" name="last_name" class="form-control" value="{{ $res->last_name }}">
                                @if ($errors->has('last_name'))
                                    <div class="alert alert-danger">{{ $errors->first('last_name') }}</div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone Number *</label>
                                <input type="text" name="phone" class="form-control" value="{{ $res->phone }}">
                                @if ($errors->has('phone'))
                                    <div class="alert alert-danger">{{ $errors->first('phone') }}</div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email *</label>
                                <input type="email" name="email" class="form-control" value="{{ $res->email }}">
                                @if ($errors->has('email'))
                                    <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="d_of_b" class="form-label">Date of Birth *</label>
                                <input type="date" name="d_of_b" class="form-control" value="{{ $res->d_of_b }}">
                                @if ($errors->has('d_of_b'))
                                    <div class="alert alert-danger">{{ $errors->first('d_of_b') }}</div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="d_of_b" class="form-label">Do you have a Vehicle? *</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vehicle" value="Yes"
                                        id="vehicle1" {{ $res->vehicle == 'Yes' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="vehicle1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vehicle" value="No"
                                        id="vehicle2" {{ $res->vehicle == 'No' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="vehicle2">
                                        No
                                    </label>
                                </div>
                                @if ($errors->has('vehicle'))
                                    <div class="alert alert-danger">{{ $errors->first('vehicle') }}</div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="job_title" class="form-label">Occupation/Job Title? *</label>
                                <input type="text" name="job_title" class="form-control" value="{{ $res->job_title }}">
                                @if ($errors->has('job_title'))
                                    <div class="alert alert-danger">{{ $errors->first('job_title') }}</div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="company" class="form-label">Name of Company</label>
                                <input type="text" name="company" class="form-control" value="{{ $res->company }}">
                                @if ($errors->has('company'))
                                    <div class="alert alert-danger">{{ $errors->first('company') }}</div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="department" class="form-label">Department</label>
                                <input type="text" name="department" class="form-control"
                                    value="{{ $res->department }}">
                                @if ($errors->has('department'))
                                    <div class="alert alert-danger">{{ $errors->first('department') }}</div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="monthly_income" class="form-label">What is your monthly gross income?
                                    ($)</label>
                                <input type="number" name="monthly_income" class="form-control"
                                    value="{{ $res->monthly_income }}">
                                @if ($errors->has('monthly_income'))
                                    <div class="alert alert-danger">{{ $errors->first('monthly_income') }}</div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="annual_income" class="form-label">What is your annual gross income?
                                    ($)</label>
                                <input type="number" name="annual_income" class="form-control"
                                    value="{{ $res->annual_income }}">
                                @if ($errors->has('annual_income'))
                                    <div class="alert alert-danger">{{ $errors->first('annual_income') }}</div>
                                @endif
                            </div>
                            <div class="col-md-3 mt-3">
                                <img src="{{ imagePath('application', $res->income_cer) }}" alt=""
                                    width="100px">
                            </div>
                            <div class="col-md-3">
                                <label for="income_cer" class="form-label">Please upload Proof of Income within the last 6
                                    months/Certificate of Employment *</label>
                                <input type="file" name="income_cer" class="form-control">
                                @if ($errors->has('income_cer'))
                                    <div class="alert alert-danger">{{ $errors->first('income_cer') }}</div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="d_of_b" class="form-label">Do you have pets? *</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pets" value="Yes"
                                        id="pets1" {{ $res->pets == 'Yes' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="pets1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pets" value="No"
                                        id="pets2" {{ $res->pets == 'No' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="pets2">
                                        No
                                    </label>
                                </div>
                                @if ($errors->has('pets'))
                                    <div class="alert alert-danger">{{ $errors->first('pets') }}</div>
                                @endif
                            </div>
                            <hr>

                            <div class="col-md-12">
                                <label for="current_address" class="form-label">Current Address *</label>
                                <input type="text" name="current_address" class="form-control"
                                    value="{{ $res->current_address }}">
                                @if ($errors->has('current_address'))
                                    <div class="alert alert-danger">{{ $errors->first('current_address') }}</div>
                                @endif
                            </div>
                            <div class="col-md-12">
                                <label for="current_address2" class="form-label">Address Line 2</label>
                                <input type="text" name="current_address2" class="form-control"
                                    value="{{ $res->current_address2 }}">
                                @if ($errors->has('current_address2'))
                                    <div class="alert alert-danger">{{ $errors->first('current_address2') }}</div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="city" class="form-label">City</label>
                                <input type="text" name="city" class="form-control" value="{{ $res->city }}">
                                @if ($errors->has('city'))
                                    <div class="alert alert-danger">{{ $errors->first('city') }}</div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="state" class="form-label">State / Province</label>
                                <input type="text" name="state" class="form-control" value="{{ $res->state }}">
                                @if ($errors->has('state'))
                                    <div class="alert alert-danger">{{ $errors->first('state') }}</div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="post" class="form-label">Postal / Zip Code</label>
                                <input type="text" name="post" class="form-control" value="{{ $res->post }}">
                                @if ($errors->has('post'))
                                    <div class="alert alert-danger">{{ $errors->first('post') }}</div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="job_duration" class="form-label">Duration of Occupancy *</label>
                                <input type="text" name="job_duration" class="form-control"
                                    value="{{ $res->job_duration }}">
                                @if ($errors->has('job_duration'))
                                    <div class="alert alert-danger">{{ $errors->first('job_duration') }}</div>
                                @endif
                            </div>
                            <div class="col-md-12">
                                <label for="leaving" class="form-label">Reason(s) of leaving</label>
                                <textarea name="leaving" class="form-control" rows="6">{{ $res->leaving }}</textarea>
                                @if ($errors->has('leaving'))
                                    <div class="alert alert-danger">{{ $errors->first('leaving') }}</div>
                                @endif
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="post" class="form-label">Previous Landlord Name</label>
                            </div>
                            <div class="col-md-6">
                                <label for="f_landlord_name" class="form-label">First Name</label>
                                <input type="text" name="f_landlord_name" class="form-control"
                                    value="{{ $res->f_landlord_name }}">
                                @if ($errors->has('f_landlord_name'))
                                    <div class="alert alert-danger">{{ $errors->first('f_landlord_name') }}</div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="l_landlord_name" class="form-label">Last Name</label>
                                <input type="text" name="l_landlord_name" class="form-control"
                                    value="{{ $res->l_landlord_name }}">
                                @if ($errors->has('l_landlord_name'))
                                    <div class="alert alert-danger">{{ $errors->first('l_landlord_name') }}</div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="landlord_phone" class="form-label">Previous Landlord Phone Number</label>
                                <input type="text" name="landlord_phone" class="form-control"
                                    value="{{ $res->landlord_phone }}">
                                @if ($errors->has('landlord_phone'))
                                    <div class="alert alert-danger">{{ $errors->first('landlord_phone') }}</div>
                                @endif
                            </div>

                            <div class="col-md-6">
                                <label for="d_of_b" class="form-label">Have you been evicted before? *</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="evicted" value="Yes"
                                        id="evicted1"{{ $res->evicted == 'Yes' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="evicted1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="evicted" value="No"
                                        id="evicted2"{{ $res->pets == 'No' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="evicted2">
                                        No
                                    </label>
                                </div>
                                @if ($errors->has('evicted'))
                                    <div class="alert alert-danger">{{ $errors->first('evicted') }}</div>
                                @endif
                            </div>

                            <div class="col-md-6">
                                <label for="d_of_b" class="form-label">Have you been convicted of any crime before?
                                    *</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="crime" value="Yes"
                                        id="crime1"{{ $res->crime == 'Yes' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="crime1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="crime" value="No"
                                        id="crime2"{{ $res->crime == 'No' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="crime2">
                                        No
                                    </label>
                                </div>
                                @if ($errors->has('crime'))
                                    <div class="alert alert-danger">{{ $errors->first('crime') }}</div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="move_date" class="form-label">Move in date *</label>
                                <input type="date" name="move_date" class="form-control"
                                    value="{{ $res->move_date }}">
                                @if ($errors->has('move_date'))
                                    <div class="alert alert-danger">{{ $errors->first('move_date') }}</div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="security_date" class="form-label">Date to pay the security deposit *</label>
                                <input type="date" name="security_date" class="form-control"
                                    value="{{ $res->security_date }}">
                                @if ($errors->has('security_date'))
                                    <div class="alert alert-danger">{{ $errors->first('security_date') }}</div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="d_of_b" class="form-label">Payment Method *</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pay_method" value="Cash"
                                        id="pay_method1" {{ $res->pay_method == 'Cash' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="pay_method1">
                                        Cash
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pay_method" value="Credit Card"
                                        id="pay_method2" {{ $res->pay_method == 'Credit Card' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="pay_method2">
                                        Credit Card
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pay_method"
                                        value="Wire Transfer" id="pay_method3"
                                        {{ $res->pay_method == 'Wire Transfer' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="pay_method3">
                                        Wire Transfer
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pay_method" value="Check"
                                        id="pay_method4" {{ $res->pay_method == 'Check' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="pay_method4">
                                        Check
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pay_method"
                                        value="Bank Payment" id="pay_method5"
                                        {{ $res->pay_method == 'Bank Payment' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="pay_method5">
                                        Bank Payment
                                    </label>
                                </div>
                                @if ($errors->has('pay_method'))
                                    <div class="alert alert-danger">{{ $errors->first('pay_method') }}</div>
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
                                <input type="date" name="signature1_date" class="form-control"
                                    value="{{ $res->signature1_date }}">
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
                                <input type="date" name="signature2_date" class="form-control"
                                    value="{{ $res->signature2_date }}">
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
                                <input type="date" name="signature3_date" class="form-control"
                                    value="{{ $res->signature3_date }}">
                                @if ($errors->has('signature3_date'))
                                    <div class="alert alert-danger">{{ $errors->first('signature3_date') }}</div>
                                @endif
                            </div>
                            <div class="col-md-12 text-center">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->

    @push('scripts')
    @endpush
@endsection
