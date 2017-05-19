@extends('layouts.master')

@section('main')


    <section class="image-square left">
        <div class="col-md-6 image">
            <div class="background-image-holder">
                <img alt="image" class="background-image" src="img/small2.jpg" />
            </div>
        </div>
        <div class="col-md-6 col-md-offset-1 content">
            <h4 class="uppercase">Get In Touch</h4>
            <p>
                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,
            </p>
            <hr>
            <p>
                438 Marine Parade
                <br /> Elwood, Victoria
                <br /> P.O Box 3184
            </p>
            <p>
                <strong>E:</strong> hello@foundry.net
                <br />
                <strong>P:</strong> +614 3948 2726
                <br />
            </p>
        </div>
    </section>

    <section class="image-square right">
        <div class="col-md-6 p0 image">
            <div class="map-holder background-image-holder">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3149.4086040735224!2d144.976411!3d-37.87412599999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad66889faebddf1%3A0xcc68084b44a30620!2sRiva+St+Kilda!5e0!3m2!1sen!2sau!4v1427779902899"></iframe>
            </div>
        </div>
        <div class="col-md-6 content wow animate flip">
            <form class="form-email" data-success="Thanks for your submission, we will be in touch shortly." data-error="Please fill all fields correctly.">
                <h6 class="uppercase text-center">Send A Message</h6>
                <input type="text" class="validate-required" name="name" placeholder="Your Name" />
                <input type="text" class="validate-required validate-email" name="email" placeholder="Email Address" />
                <textarea class="validate-required" name="message" rows="4" placeholder="Message"></textarea>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </section>





@endsection