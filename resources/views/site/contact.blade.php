@extends('site.base')

@section('content')
    <div class="gtco-section">
        <div class="gtco-container">
            <div class="row row-pb-md">
                <div class="col-md-6 animate-box">
                    <h3>Get In Touch</h3>
                    <form action="#">
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="sr-only" for="name">Name</label>
                                <input type="text" id="name" class="form-control" placeholder="Your firstname">
                            </div>

                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="sr-only" for="email">Email</label>
                                <input type="text" id="email" class="form-control" placeholder="Your email address">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="sr-only" for="subject">Subject</label>
                                <input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="sr-only" for="message">Message</label>
                                <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Write us something"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary btn-lg">
                        </div>

                    </form>
                </div>
                <div class="col-md-5 col-md-push-1 animate-box">

                    <div class="gtco-contact-info">
                        <h3>Contact Information</h3>
                        <ul>
                            <li class="address">198 West 21th Street, <br> Suite 721 New York NY 10016</li>
                            <li class="phone"><a href="tel://1234567920">+ 1235 2355 98</a></li>
                            <li class="email"><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
                            <li class="url"><a href="http://gettemplates.co">gettemplates.co</a></li>
                        </ul>
                    </div>


                </div>
            </div>
        </div>

    </div>
    </div>
@endsection
