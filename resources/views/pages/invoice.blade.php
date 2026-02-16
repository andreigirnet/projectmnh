@extends('layouts.vertical', ['title' => 'Invoice', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    @include('layouts.shared/page-title', ['sub_title' => 'Pages', 'page_title' => 'Invoice'])

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="clearfix">
                        <div class="float-start mb-3">
                            <img src="/images/logo/logomain.png" alt="Ireland Safety Course" height="45">
                        </div>
                        <div class="float-end">
                            <h4 class="m-0 d-print-none">Invoice</h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mt-3">
                                <p><b>Hello, {{ $user->name ?? 'Customer' }}</b></p>
                                <p class="text-muted fs-13">Please find below the cost-breakdown for your safety training services. Access to your certification and course materials is available immediately upon confirmed payment.</p>
                            </div>
                        </div><div class="col-sm-4 offset-sm-2">
                            <div class="mt-3 float-sm-end">
                                <p class="fs-13"><strong>Order Date: </strong> &nbsp;&nbsp;&nbsp; {{ now()->format('M d, Y') }}</p>
                                <p class="fs-13"><strong>Order Status: </strong> <span class="badge bg-success float-end">Paid</span></p>
                                <p class="fs-13"><strong>Order ID: </strong> <span class="float-end">#ISC-{{ rand(100000, 999999) }}</span></p>
                            </div>
                        </div></div>
                    <div class="row mt-4">
                        <div class="col-6">
                            <h6 class="fs-14">Billing Address</h6>
                            <address>
                                {{ $user->name ?? 'Student Name' }}<br>
                                {{ $user->address ?? 'Customer Address' }}<br>
                                Dublin, Ireland
                            </address>
                        </div> <div class="col-6">
                            <h6 class="fs-14">Training Provider</h6>
                            <address>
                                <b>Ireland Safety Course</b><br>
                                22 Grand Canal Dock<br>
                                Dublin 2, D02 H210<br>
                                Email: info@irelandsafetycourse.ie
                            </address>
                        </div> </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-sm table-centered table-hover table-borderless mb-0 mt-3">
                                    <thead class="border-top border-bottom bg-light-subtle border-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Course / Service</th>
                                        <th>Quantity</th>
                                        <th>Unit Cost</th>
                                        <th class="text-end">Total</th>
                                    </tr></thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <b>Manual Handling Training</b> <br/>
                                            Full Theory & Practical Online Session
                                        </td>
                                        <td>1</td>
                                        <td>€25.55</td>
                                        <td class="text-end">€25.55</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div> </div> </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="clearfix pt-3">
                                <h6 class="text-muted fs-14">Notes:</h6>
                                <small>
                                    Thank you for choosing <b>Ireland Safety Course</b>.
                                    Digital certificates are issued instantly upon successful completion of the course.
                                    You have 3 years of free access to your course content and digital credentials.
                                </small>
                            </div>
                        </div> <div class="col-sm-6">
                            <div class="float-end mt-3 mt-sm-0">
                                <p><b>Sub-total:</b> <span class="float-end">€25.55</span></p>
                                <p><b>VAT (13.5%):</b> <span class="float-end">€3.45</span></p>
                                <h3>€29.00 EUR</h3>
                            </div>
                            <div class="clearfix"></div>
                        </div> </div>
                    <div class="d-print-none mt-4">
                        <div class="text-center">
                            <a href="javascript:window.print()" class="btn btn-primary"><i class="ri-printer-line"></i> Print</a>
                            <a href="{{ route('frontHome') }}" class="btn btn-info">Return to Dashboard</a>
                        </div>
                    </div>
                </div> </div> </div> </div>
@endsection
