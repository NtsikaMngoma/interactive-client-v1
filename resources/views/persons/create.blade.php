@include('layouts.header')
@include('layouts.navbar')

<br/>
<section id="section-about" class="no-bg no-bottom">
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Create Person</h3>
                </div>

                <div class="col-md-8 col-md-offset-2 wow fadeInUp">
                    <div class="row">
                        <form name="contactForm" id='contact_form' method="post" action={{route('person.request')}}>
                            @csrf
                            <div class="col-md-12">
                                <div class="field-set">
                                    <input type='text' name='id_number' id='id_number' class="form-control" placeholder="Enter Id Number">
                                    <div class="line-fx"></div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="field-set">
                                    <input type='text' name='name' id='name' class="form-control" placeholder="Enter First Name">
                                    <div class="line-fx"></div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="field-set">
                                    <input type='text' name='surname' id='surname' class="form-control" placeholder="Enter Surname">
                                    <div class="line-fx"></div>
                                </div>
                            </div>

                            <div class="spacer-single"></div>

                            <div class="col-md-12 text-center">
                                <div id='submit'>
                                    <input style="font-family: 'Nunito'" type='submit' id='send_message' value='Register Person' class="btn btn-custom color-2">
                                </div>
                                <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                                <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>
                            </div>
                        </form>
                    </div>

                    <div class="spacer-double"></div>

                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.footer')
