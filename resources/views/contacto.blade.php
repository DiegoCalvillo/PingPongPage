@extends('layouts.principal')

@section('content_ingles')
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Contact Us</h2>
                <h3 class="section-subheading text-muted">Fill the following boxes.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    {!!Form::open(['route'=> 'mail.store','method'=>'POST'])!!}
                    <div class="col-md-6">
                        <div class="form-group">
                            {!!Form::text('name',null,['placeholder' => 'Your Name *', 'class' => 'form-control' , 'required'])!!}
                            <!--<input class="form-control" placeholder="Your Name *" id="name" required="" data-validation-required-message="Please enter your name." type="text">-->
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            {!!Form::email('email', null, ['class' => 'form-control', 'required' , 'placeholder' => 'Your Email *'])!!}
                            <!--<input class="form-control" placeholder="Your Email *" id="email" required="" data-validation-required-message="Please enter your email address." type="email">-->
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            {!!Form::text('phone',null,['placeholder' => 'Your Phone ', 'class' => 'form-control'])!!}
                            <!--<input class="form-control" placeholder="Your Phone *" id="phone" required="" data-validation-required-message="Please enter your phone number." type="tel">-->
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {!!Form::textarea('mensaje',null,['placeholder' => 'Your Message *', 'class' => 'form-control', 'required'])!!}
                            <!--<textarea class="form-control" placeholder="Your Message *" id="message" required="" data-validation-required-message="Please enter a message."></textarea>-->
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-12 text-center">
                        <div id="success"></div>
                        {!!Form::submit('SEND MESSAGE', array('class' => 'btn btn-xl'))!!}
                        {!!Form::close()!!}
                        <!--<button type="submit" class="btn btn-xl">Send Message</button>--> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-xs-12">
            <center>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.1222777748017!2d-100.28220174901276!3d25.661091839227513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662bfe9e782eb51%3A0x1cc2cc3db926fcb7!2sTacubaya+1846+1726%2C+Jard%C3%ADn+Espa%C3%B1ol%2C+64820+Monterrey%2C+N.L.!5e0!3m2!1ses!2smx!4v1487612365713" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
            </center>
            <br />
            <small>
                <a href="http://maps.google.com/maps?q=Tacubaya+1846+1726,+Jardín+Español,+64820+Monterrey,+N.L./@25.6612067,-100.2841055,17z/data=!3m1!4b1!4m5!3m4!1s0x8662bfe9e782eb51:0x1cc2cc3db926fcb7!8m2!3d25.6612067!4d-100.2819168"></a>
            </small>
        </div>
    </div>
</section>

@stop