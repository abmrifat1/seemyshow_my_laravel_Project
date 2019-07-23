@extends('front.master')
@section('title')
    Contact us
@endsection

@section('content')

    <style>
        .regi_form{
            margin-bottom: 0px;
            width: 250px;
            height: 30px;
            border-radius: 10px
        }
    </style>



    <div class="clearfix" style="padding-bottom: 55px"></div>
    <!-- Search bar -->


    <!-- Main content -->
    <section class="container">
        <h2 class="page-heading heading--outcontainer">Contact</h2>
        <div class="contact">
            <p class="contact__title">You have any questions or need help, <br><span class="contact__describe">don’t be shy and contact us</span></p>
            <span class="contact__mail">Rifatabm1@gmaul.com</span>
            <span class="contact__tel">01772515721</span>
        </div>
    </section>

    <div class="contact-form-wrapper">
        <div class="container">
            <div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2" style="text-align: center">

                            @if(Session::get('message'))
                                <h2 style="text-align: center;color: blue;font-weight: 700;">{{Session::get('message')}}</h2>
                                <hr/>
                             @endif
             @if($customer)

                <form class="form-horizontal" action="{{url('/customer-sms')}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="control-label col-md-3">Your Name</label>
                        <div class="col-md-9" >
                            <input type="text" required name="user_name" value="{{$customer->first_name.' '.$customer->last_name}}" class="form-control regi_form"/>
                            <p class="field_error">{{$errors->has('user_name') ? $errors->first('user_name'):' '}}</p>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-md-3">Your Email</label>
                        <div class="col-md-9" >
                            <input type="email" required name="user_email" value="{{$customer->email}}"  class="form-control regi_form"/>
                            <p class="field_error">{{$errors->has('user_email') ? $errors->first('user_email'):' '}}</p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Message</label>
                        <div class="col-md-9" >
                            <textarea name="message" required class="form-control regi_form" style="resize: vertical;height: 100px"></textarea>
                            <p class="field_error">{{$errors->has('message') ? $errors->first('message'):' '}}</p>
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-md-9 col-md-offset-3">
                            <input type="submit" name="btn" class="btn btn-success  regi_form" value="Send A Message"/>
                        </div>
                    </div>
                </form>
                   @else

                        <form class="form-horizontal" action="{{url('/customer-sms')}}" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label class="control-label col-md-3">Your Name</label>
                                <div class="col-md-9" >
                                    <input type="text" required name="user_name"  class="form-control regi_form"/>
                                    <p class="field_error">{{$errors->has('user_name') ? $errors->first('user_name'):' '}}</p>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-md-3">Your Email</label>
                                <div class="col-md-9" >
                                    <input type="email" required name="user_email"   class="form-control regi_form"/>
                                    <p class="field_error">{{$errors->has('user_email') ? $errors->first('user_email'):' '}}</p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">Message</label>
                                <div class="col-md-9" >
                                    <textarea name="message" required class="form-control regi_form" style="resize: vertical;height: 100px"></textarea>
                                    <p class="field_error">{{$errors->has('message') ? $errors->first('message'):' '}}</p>
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-md-9 col-md-offset-3">
                                    <input type="submit" name="btn" class="btn btn-success  regi_form" value="Send A Message"/>
                                </div>
                            </div>
                        </form>

           @endif
            </div>
        </div>
    </div>



    <div class="clearfix"></div>
@endsection