<style>
.btm_footer {
    padding-right: 200px;
}
@media screen and (max-width: 767px) {
    .btm_footer {
        padding-right: 15px;
    }
    footer p {
        font-size: 14px;
        line-height: 20px;
    }
}
</style>
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-6">
                <h6 class="ftlink_title">Quick links</h6>
                <ul class="ftmenu_list">
                    <li>
                        <a href="#home">Home</a>
                    </li>
                    <!-- <li>
                        <a href="#review">Reviews</a>
                    </li> -->
                    <li>
                        <a href="#chooseus">Why choose us</a>
                    </li>
                    <li>
                        <a href="{{route('transporter.home')}}">Transporters</a>
                    </li>
                    <li>
                        @if(Auth::guard('transporter')->user())
                            <a href="{{route('front.dashboard')}}">
                                Account</a>
                        @else
                            <a href="{{route('front.login')}}">Account</a>
                        @endif
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-6">
                <h6 class="ftlink_title">Support</h6>
                <ul class="ftmenu_list">
                    <li>
                        <a href="{{route('front.faq')}}">FAQs</a>
                    </li>
                    <!-- <li>
                        <a href="{{route('front.contact')}}">Contact us</a>
                    </li> -->
                    <li>
                        <a href="{{route('front.privacy_policy')}}">Privacy policy</a>
                    </li>
                    <li>
                        <a href="{{route('front.term_condition')}}">Terms & conditions</a>
                    </li>
                    <li>
                        <a href="{{route('front.contact')}}">Contact us</a>
                    </li>
                </ul>
            </div>
            <!-- <div class="col-lg-4 col-md-4">
                <h6 class="ftlink_title">Talk to us</h6>
                <ul class="ftmenu_list">
                    <li>
                        <a href="mailto:info@transportanycar.com">
                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.5278 0.75C15.757 0.75 16.9395 1.23583 17.8094 2.10758C18.6803 2.9775 19.167 4.15083 19.167 5.37917V12.6208C19.167 15.1783 17.0862 17.25 14.5278 17.25H5.47201C2.9136 17.25 0.833679 15.1783 0.833679 12.6208V5.37917C0.833679 2.82167 2.90443 0.75 5.47201 0.75H14.5278ZM15.9862 6.745L16.0595 6.67167C16.2786 6.40583 16.2786 6.02083 16.0494 5.755C15.922 5.61842 15.7469 5.535 15.5645 5.51667C15.372 5.50658 15.1887 5.57167 15.0503 5.7L10.917 9C10.3853 9.44092 9.6236 9.44092 9.08368 9L4.95868 5.7C4.6736 5.48917 4.27943 5.51667 4.04201 5.76417C3.79451 6.01167 3.76701 6.40583 3.97693 6.68083L4.09701 6.8L8.26785 10.0542C8.78118 10.4575 9.4036 10.6775 10.0553 10.6775C10.7053 10.6775 11.3387 10.4575 11.8511 10.0542L15.9862 6.745Z" fill="white" />
                            </svg>
                            <p>info@transportanycar.com</p>
                        </a>
                    </li>
                    <li>
                        <a href="tel:0800 689 4934">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.57078 9.43298C12.2274 13.0886 13.057 8.85945 15.3852 11.186C17.6298 13.43 18.9198 13.8796 16.076 16.7226C15.7198 17.0089 13.4565 20.453 5.50257 12.5013C-2.45233 4.54863 0.989806 2.28303 1.27616 1.92691C4.1269 -0.924016 4.56873 0.37356 6.8133 2.61751C9.14152 4.94508 4.91412 5.77734 8.57078 9.43298Z" fill="white" />
                            </svg>
                            <p>0808 155 7979</p>
                        </a>
                    </li>
                </ul>
            </div> -->
            <div class="col-12 btm_footer text-center text-md-left mt-3">
                <p class="mb-0">Transport Any Car <span>&copy; All rights reserved. {{date('Y')}}</span>. TransportAnyCar.com is a limited company registered in England and Wales. Registered address: 128 City Road, London, EC1V 2NX.</p>
                {{-- <p class="mb-0">Transport Any Car. <span>© All rights reserved. {{date('Y')}}</span></p> --}}
                <div class="foot_img">
                    <img src="{{asset('assets/web/images/footer_logo.png')}}" alt="brand_logo" class="footer_logo" />
                </div>
                
            </div>
        </div>
        
    </div>
</footer>
