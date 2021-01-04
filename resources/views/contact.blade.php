@extends('layout.layout')

@section('content')
<!--/contact -->
<section class="ab-info-main py-md-5 py-5">
    <div class="container">
        <div class="inner-sec-w3pvt py-lg-5">
            <h3 class="tittle text-center mb-lg-5 mb-3 inner-tittle"> Contact Us</h3>
            <div class="contact-form mt-md-5">
                <div class="contact-form-inner mx-auto text-left">
                    <form name="contactform " id="contactform" method="post" action="#">
                        <div class="row">
                            <div class="col-lg-12 con-gd">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter Name"
                                        name="name">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" id="name" placeholder="Enter Email"
                                        name="email">
                                </div>
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input type="text" class="form-control" id="name" placeholder="Subject"
                                        name="subject">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>How can we help?</label>
                            <textarea name="issues" class="form-control" id="iq"
                                placeholder="Enter Your Message Here"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//contact -->
@endsection