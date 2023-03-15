@extends('backend.auth.layouts.master')


@section('main_content')
    <div class="card  rounded-4 overflow-hidden mb-0 custom-login-card height-card-login">
        <div class="card-body p-5 custom-login-card row align-items-center align-items-md-center">

            <form class="form-body pt-3" onsubmit="loginFormSubmit(this)" action="{{route('admin.auth.login')}}" method="post">
                @csrf
                <div class="row g-3 login-wrap">
                    <div class="col-12 mt-0">
                        <div class="logo-box text-center pb-4">
                            <img src="{{ asset('assets/backend') }}/images/brand-logo-2.png" alt="" class="d-block d-md-block">
                        </div>
                        <div class="login-heading-box tex-center pb-4">
                            <h5 class="card-title log-i text-center">Login Account</h5>
                            <p>Discover your social & try login</p>
                            @if(Session::has('error'))
                                <p class="text-danger">{{Session::get('error')}}</p>
                                @endif
                            <p class="text-danger errortxt" style="display: none;"></p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="ms-auto position-relative email-field-login">
                            <div class="position-absolute top-50 translate-middle-y search-icon px-1 left"><i class="fadeIn animated bx bx-phone"></i></div>
                            <input type="number" class="form-control radius-30 ps-5 r-number phone" name="phone"  placeholder="Mobile Number">
                        </div>
                    </div>
                    <div class="col-12 mt-2">
                        <div class="ms-auto position-relative password-field-login">
                            <div class="position-absolute top-50 translate-middle-y search-icon px-1 z-index-5 left"><i class="lni lni-lock"></i></div>
                            <input type="password" class="form-control radius-30 ps-5 position-relative password" name="password" id="inputChoosePassword" placeholder="Enter Password" id="password">
                            <i class="fadeIn animated bx bx-hide" id="eye"></i>
                        </div>
                    </div>
                    <div class="col-6 mt-2">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="remember_me" id="flexSwitchCheckChecked" checked="">
                            <label class="form-check-label remember-field-login" for="flexSwitchCheckChecked">Remember Me</label>
                        </div>
                    </div>
                    <div class="col-6 mt-2 text-end">
                        <a href="{{ route('admin.auth.forgot-password') }}" class="forgot-pass">Forgot Password ?</a>
                    </div>
                    <div class="col-12 pt-3">
                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn radius-30 auth-btn login-continue-btn">Continue</button>
                        </div>
                    </div>
                </div>

                <div class="row g-3 otp-wrap" style="display:none;">
                    <div class="col-12 ">
                        <div class="logo-box text-center pb-4">
                            <img src="{{ asset('assets/backend') }}/images/icons/otp.png" alt="">
                        </div>
                        <div class="login-heading-box tex-center pb-4">
                            <h5 class="card-title log-i text-center">Enter OTP Number</h5>
                            <p>Enter the code we just send on your mobile phone <span style="font-size:13px;font-weight:700;color:#222">+880174394553</span></p>
                        </div>
                        <div class="row g-3 g-md-0">
                            <div class="col-2">
                                <div class="ms-auto position-relative ">
                                    <input type="number"  name="otpCode[]" class="form-control radius-1 ps-4 otp-number" data-sl="1">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="ms-auto position-relative ">
                                    <input type="number" name="otpCode[]" class="form-control radius-1 ps-4 otp-number" data-sl="2" readonly>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="ms-auto position-relative ">
                                    <input type="number" name="otpCode[]" class="form-control radius-1 ps-4 otp-number" data-sl="3" readonly>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="ms-auto position-relative ">
                                    <input type="number" name="otpCode[]" class="form-control radius-1 ps-4 otp-number" data-sl="4" readonly>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="ms-auto position-relative">
                                    <input type="number" name="otpCode[]" class="form-control radius-1 ps-4 otp-number" data-sl="5" readonly>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="ms-auto position-relative">
                                    <input type="number" name="otpCode[]"  class="form-control radius-1 ps-4 otp-number" data-sl="6" readonly>
                                </div>
                            </div>
                            <div class="col-12 pt-4">
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn radius-30 auth-btn otp-submit-btn d-none">Login</button>
                                </div>
                            </div>
                            <div class="col-12 pt-3">
                                <div class="d-flex justify-content-center flex-column text-center resend-otp-wrap">
                                    <p class="pb-0 mb-0">Don't receive the code?</p>
                                    <a class="resend-otp-btn">Resend</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function() {
            $(".otp-number").on('input', function(e) {
                let data_sl = $(this).attr("data-sl");
                data_sl = parseInt(data_sl);

                let current_input_value = $(".otp-number[data-sl=" + data_sl + "]").val();
                if(current_input_value >= 10) {
                    current_input_value = current_input_value % 10;
                }
                $(".otp-number[data-sl=" + data_sl + "]").val(current_input_value);

                if ($(".otp-number[data-sl=" + data_sl + "]").val() == '') {
                    let prev_data_sl = data_sl - 1;
                    if (data_sl != 1) {
                        $(".otp-number[data-sl=" + prev_data_sl + "]").removeAttr('readonly').focus();
                    } else {

                    }
                } else {
                    if (data_sl != 6) {
                        let next_data_sl = data_sl + 1;
                        $(".otp-number[data-sl=" + next_data_sl + "]").removeAttr('readonly').focus();
                    } else {
                        //show submit button
                        $(".otp-submit-btn").removeClass('d-none');
                    }
                }

            });

            $(".otp-number").on('focus', function() {
                $(this).select();
            });
            $(".login-continue-btn").click(function () {
                var phone=$('.phone').val();
                var password=$('.password').val();

                if((phone=="") || (password=="")){
                    $('.errortxt').html(' Phone or Password Can Not be Empty');
                    $('.errortxt').show(100);
                    return false;
                }


                $.ajax({
                    url: "{{route('admin.phone.otp.send')}}",
                    type: "get",
                    data: {
                        phone:phone,
                        password:password,
                    },
                    success: function(response) {
                        console.log(response);

                        if(response==1){
                            $(".login-wrap").slideUp();
                            $(".otp-wrap").slideDown();
                            $(".otp-number[data-sl=1]").removeAttr('readonly').focus();
                        }else{
                            $('.errortxt').html('Your Phone or Password is Invalid');
                            $('.errortxt').show(100);
                            return false;
                        }
                    },
                    error: function(xhr) {
                        //Do Something to handle error
                    }});


            });
        });

       function loginFormSubmit(data){



           var album_text = [];

           $('input[name="otpCode[]"]').each(function() {
               var value = $(this).val();
               if (value) {
                   album_text.push(value);
               }
           });
           if (album_text.length === 0) {
               event.preventDefault();
               $(".login-continue-btn").click();
               return false;
           }

           else if(album_text.length === 6) {
                return true;
           }

        }
    </script>
@endsection
