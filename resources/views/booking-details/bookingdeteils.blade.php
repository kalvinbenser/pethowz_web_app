@extends('layouts.main')
@section('content')
    <div class="myaccount-content">
        <h3 class="title">Booking Details</h3>
        <div class="account-details-form">
            <form action="#" mehod="post">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="single-input-item m-b-15">
                            <label for="name" class="required m-b-10">First Name</label>
                            <input type="text" id="first-name" placeholder="First Name" />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="single-input-item m-b-15">
                            <label for="contact" class="required m-b-10">Contact Number</label>
                            <input type="number" id="contact" placeholder="Number" />
                        </div>
                    </div>
               
                <div class="col-lg-3">
                <div class="single-input-item m-b-15">
                    <label for="pet-name" class="required m-b-10">Pet Name</label>
                    <input type="text" id="pet-name" placeholder="Pet Name" />
                </div>
                </div>
                <div class="col-lg-3">
                <div class="single-input-item m-b-15">
                    <label for="count" class="required m-b-5">Pets Count</label>
                    <input type="number" id="count" placeholder="Pets count" />
                </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-input-item m-b-15">
                        <label for="days" class="required m-b-5">No.of.Days</label>
                        <input type="number" id="days" placeholder="days" />
                    </div>
                    </div>
                    <div class="col-lg-3">
                      
                        <div class="single-input-item m-b-15">
                          <label for="sel1" class="form-label">Select Service</label>
                            <select class="form-select" id="sel1" name="sellist1">
                            <option>Select</option>
                            <option>Sitting</option>
                            <option>Grooming</option>
                            <option>Walking</option>
                            <option>Breading</option>
                            <option>Training</option>
                            <option>Photography</option>
                            </select>
                        </div>
                      
                     </div>
                    <div class="col-lg-3">
                         
                                <label for="service type" class="required m-b-5">service Type</label>
                                <div class="row">
                                    <div class="col-sm-6">
                                   <div class="form-check">
                                    <input class="form-check-input" type="radio" name="day" id="day" value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                With in a Days
                                    </label>
                                </div>
                                    </div>
                                    <div class="col-sm-6">
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="day" id="day" value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                With in a Weeks
                                    </label>
                                  </div>
                                    </div>
                                    <div class="col-sm-6">
                                   <div class="form-check">
                                    <input class="form-check-input" type="radio" name="day" id="day" value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                With in a Month
                                    </label>
                                  </div>
                                    </div>
                            </div>
                        </div>
                
                        <div class="col-lg-2">
                        <div class="single-input-item single-item-button m-t-30">
                        <button class="btn btn btn-primary btn-hover-dark rounded-0">Submit</button>
                        </div>
                        </div>
                </div>
            </form>
        </div>
    </div>


@endsection