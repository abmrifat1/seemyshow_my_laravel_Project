@extends('front.master')
@section('title')
    Customer Login
@endsection

@section('content')
    <!-- Search bar -->
    <style>

        .regi_form{
            margin-bottom: 0px;
            width: 200px;
            border-radius: 10px
        }
        .field_error{
            color: red;
        }
        .requiredDesign{
            color:red;
        }

    </style>




    <div class="container">



        <!-- Main content -->

        <section class="container">
            <div class="order-container">
                <div class="order">
                    <img class="order__images" alt='' style="width: 200px;height: 80px;margin-top: 10px;" src="{{asset('/front/')}}/images/banners/main_logo.png">
                   <br/>
                    <p class="order__title">Sing In Form <br><span class="order__descript" style="color:red;">If you are not registered then you registration first</span></p>

                </div>
            </div>





            <div class="col-sm-12">
                <div class="well">


                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="text-center text-danger" style="font-size: 25px;color: red; border: 1px solid #1c2d3f">
                                        @if($message=Session::get('message'))
                                            {{$message}}
                                        @endif
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="text-center text-success">Sign In Form</h3>
                                <br/>
                                <div class="panel-body">
                                    <br/>
                                    <form class="form-horizontal" action="{{url('/home-customer-login')}}" method="POST">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Email Address</label>
                                            <div class="col-md-9" >
                                                <input type="email" name="user_email"  required  class="form-control regi_form" value="{{old('user_email')}}"/>
                                                <p class="field_error">{{$errors->has('user_email') ? $errors->first('user_email'):' '}}</p>
                                            </div>
                                        </div>


                                        <br/>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Password</label>
                                            <div class="col-md-9" >
                                                <input type="password" name="user_password" required class="form-control regi_form" value="{{old('user_password')}}"/>
                                                <p class="field_error">{{$errors->has('user_password') ? $errors->first('user_password'):' '}}<p/>
                                            </div>
                                        </div>
                                        <div class="form-group">

                                            <div class="col-md-9 col-md-offset-3">
                                                <input type="submit" name="btn" class="btn btn-success regi_form" value="Login"/>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="panel-body well">
                                    <h3 class="text-center text-success">Registration Form</h3>
                                    <br/>
                                    <form class="form-horizontal" action="{{url('/home-new-customer')}}" method="POST">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label class="control-label col-md-3">First Name<span class="requiredDesign">*</span></label>
                                            <div class="col-md-9" >
                                                <input type="text" name="first_name"  required class="form-control regi_form" value="{{old('first_name')}}"/>
                                                <p class="field_error">{{$errors->has('first_name') ? $errors->first('first_name'):' '}}</p>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="control-label col-md-3">Last Name</label>
                                            <div class="col-md-9" >
                                                <input type="text" name="last_name"  class="form-control regi_form" value="{{old('last_name')}}"/>
                                                <p class="field_error">{{$errors->has('last_name') ? $errors->first('last_name'):' '}}</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Email<span class="requiredDesign">*</span></label>
                                            <div class="col-md-9" >
                                                <input type="email" name="email" required class="form-control regi_form" value="{{old('email')}}"/>
                                                <p class="field_error">{{$errors->has('email') ? $errors->first('email'):' '}}</p>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3">Password<span class="requiredDesign">*</span></label>
                                            <div class="col-md-9" >
                                                <input type="password" name="password" required class="form-control regi_form" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  value="{{old('password')}}"/>
                                                <p class="field_error">{{$errors->has('password') ? $errors->first('password'):' '}}</p>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3">Confirm Password<span class="requiredDesign">*</span></label>
                                            <div class="col-md-9" >
                                                <input type="password" name="password_confirmation" required class="form-control regi_form" value="{{old('password_confirmation')}}"/>
                                                <p class="field_error">{{$errors->has('password_confirmatiom') ? $errors->first('password_confirmation'):' '}}</p>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="control-label col-md-3">Phone Number<span class="requiredDesign">*</span></label>
                                            <div class="col-md-9" >
                                                <input type="text" name="phone_number" required class="form-control regi_form" value="{{old('phone_number')}}"/>
                                                <p class="field_error">{{$errors->has('phone_number') ? $errors->first('phone_number'):' '}}</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Address</label>
                                            <div class="col-md-9" >
                                                <textarea name="address"  class="form-control regi_form" style="resize: vertical">{{old('address')}}</textarea>
                                                {{$errors->has('address') ? $errors->first('address'):' '}}
                                            </div>
                                        </div>

                                        <div class="form-group">

                                            <div class="col-md-9 col-md-offset-3">
                                                <input type="submit" name="btn" class="btn btn-success  regi_form" value="Registation"/>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            <div class="clearfix"></div>



        </section>


        <div class="clearfix"></div>






        <div class="clearfix"></div>





        <script>
            var myInput = document.getElementById("psw");
            var letter = document.getElementById("letter");
            var capital = document.getElementById("capital");
            var number = document.getElementById("number");
            var length = document.getElementById("length");

            // When the user clicks on the password field, show the message box
            myInput.onfocus = function() {
                document.getElementById("message").style.display = "block";
            }

            // When the user clicks outside of the password field, hide the message box
            myInput.onblur = function() {
                document.getElementById("message").style.display = "none";
            }

            // When the user starts to type something inside the password field
            myInput.onkeyup = function() {
                // Validate lowercase letters
                var lowerCaseLetters = /[a-z]/g;
                if(myInput.value.match(lowerCaseLetters)) {
                    letter.classList.remove("invalid");
                    letter.classList.add("valid");
                } else {
                    letter.classList.remove("valid");
                    letter.classList.add("invalid");
                }

                // Validate capital letters
                var upperCaseLetters = /[A-Z]/g;
                if(myInput.value.match(upperCaseLetters)) {
                    capital.classList.remove("invalid");
                    capital.classList.add("valid");
                } else {
                    capital.classList.remove("valid");
                    capital.classList.add("invalid");
                }

                // Validate numbers
                var numbers = /[0-9]/g;
                if(myInput.value.match(numbers)) {
                    number.classList.remove("invalid");
                    number.classList.add("valid");
                } else {
                    number.classList.remove("valid");
                    number.classList.add("invalid");
                }

                // Validate length
                if(myInput.value.length >=8 ){
                    length.classList.remove("invalid");
                    length.classList.add("valid");
                } else {
                    length.classList.remove("valid");
                    length.classList.add("invalid");
                }
            }
        </script>
@endsection