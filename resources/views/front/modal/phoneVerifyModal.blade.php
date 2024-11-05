<!-- Modal HTML Structure with Bootstrap -->
<div id="otpModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <!-- Cross (close) button -->
            {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button> --}}
            
            <!-- Modal Header -->
            <div class="modal-header border-0">
                <h4 class="modal-title w-100">Confirm your mobile number</h4>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <p>Please enter the code we just sent to <strong id="mobile-number">07932834195</strong>.</p>
                
                <!-- OTP Input Fields -->
                <form id="otpForm">
                    <div class="otp-input d-flex justify-content-center">
                        <input type="text" id="otp1" maxlength="1" required autocomplete="off" autofocus>
                        <input type="text" id="otp2" maxlength="1" required autocomplete="off">
                        <input type="text" id="otp3" maxlength="1" required autocomplete="off">
                        <input type="text" id="otp4" maxlength="1" required autocomplete="off">
                    </div>

                    <!-- Resend/Change Number Links -->
                    <p class="mt-3">
                        Didn't receive a code? <a href="#" id="resendOtp">Resend</a> or <a href="#" class="" data-dismiss="modal" aria-label="Close" id="changeNumber">Change number</a>.
                    </p>

                    <!-- Confirm Button -->
                    <button type="submit" id="confirmOtp" class="btn btn-success btn-block mt-4">Confirm</button>
                </form>
            </div>
        </div>
    </div>
</div>