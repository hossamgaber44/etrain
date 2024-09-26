<div class="footer">
    <div class="container">
        <div class="footer-content d-flex">
            <div class="footer-box">
                <div class="footer-logo">
                    <a href="{{route('front.homePage')}}">
                    <img src="{{asset('image/home_img').'/'.$setting->logo }}">
                    </a>
                </div>
                <div class="footer-logo-discription">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea nisi deserunt, illum culpa ?
                    </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                </div>
            </div>
            <div class="footer-box">
                <h2 class="newsletter">newsletter</h2>
                <p class="newsletter-discreption">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Corrupti, quae!</p>
                <form action={{ route('front.message.newsletter') }} method="POST" class="footer-input">
                    @csrf
                    <input name="email" type="email" placeholder="enter email adress">
                    <button type="submit" > <i class="fa-solid fa-greater-than"></i></button>
                </form>
                <div class="social-icon">
                    <a href="{{$setting->facebook}}" > <i class="facebook fab fa-facebook-f"></i></a>
                    <a href="{{$setting->twitter}}" > <i class="twitter fab fa-twitter"></i></a>
                    <a href="{{$setting->instgrame}}" > <i class="instagram fab fa-instagram"></i> </a>
                </div>
            </div>
            <div class="footer-box">
                <h2 class="contact-title"> contact us</h2>
                <h5>
                    <span> address: </span> {{$setting->address .','.$setting->city}}
                </h5>
                <h5>
                    <span> phone: </span>{{$setting->phone}}
                </h5>
                <h5>
                    <span> email: </span> {{$setting->email}}
                </h5>
            </div>
        </div>
    </div>
</div>