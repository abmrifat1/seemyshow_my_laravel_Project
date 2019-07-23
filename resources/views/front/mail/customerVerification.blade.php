<h2>Hello, {{$customer->first_name}}</h2>
<p>Yo're just tring to signup in <a href="{{url('/')}}">SEE MY SHOW</a> online ticket buying site</p>
@if(Session::get('grandTotal'))
    <h3>Please Click here for verify your account shipping : <a href="{{url('/email/verify/'.$customer->verification_code)}}" style="text-decoration:none;background-color: green;color:#ffffff;border:1px solid #fff;paddding:10px 20px;">Verify Account</a></h3>

    @else

<h3>Please Click here for verify your account new : <a href="{{url('/email/verify-new/'.$customer->verification_code)}}" style="text-decoration:none;background-color: green;color:#ffffff;border:1px solid #fff;paddding:10px 20px;">Verify Account</a></h3>

    @endif