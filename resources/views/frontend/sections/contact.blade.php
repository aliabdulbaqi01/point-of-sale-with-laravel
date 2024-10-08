<section class="homeContact">
    <div class="container">
        <div class="homeContact__wrap">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section__title">
                        <span class="sub-title">07 - Say hello</span>
                        <h2 class="title">Any questions? Feel free <br> to contact</h2>
                    </div>
                    <div class="homeContact__content">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        <h2 class="mail"><a href="mailto:{{$footerData->email}}">{{$footerData->email}}</a></h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="homeContact__form">
                        <form action="{{route('contact.store')}}" method="post">
                            @csrf
                            <input type="text" name="name" placeholder="Enter name*">
                            <input type="text" name="subject" placeholder="Enter Subject*">
                            <input type="email" name="email" placeholder="Enter mail*">
                            <input type="number" name="number" placeholder="Enter number*">
                            <textarea name="message" placeholder="Enter Massage*"></textarea>
                            <button type="submit">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
