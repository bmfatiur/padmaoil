@extends('frontend.layouts.master')

@section('frontendtitle') Customer Dashboard Page @endsection

@section('frontend_content')
   @include('frontend.layouts.inc.breadcrumb', ['pagename' => 'Customer Dashboard'])
   <div class="col-lg-12 col-md-12 m-auto" >
    <div class="card">
        <div class="card-header tx-white bg-teal">
            <h4 class="card-title tx-white">Customer Name : {{ $user->name }}</h4>
            <div>
                <br>
                <h3>Acoount Balance: <b>@if (Session::has('user') && array_key_exists('balance', Session::get('user')))<strong>{{ Session::get('user')['balance'] }}</strong>
                    @else
                        <!-- Handle the case where 'user' or 'balance' is not set in the session -->
                        <p>not set</p>
                    @endif</b> </h3>
                    {{-- <h3>Acoount Balance: <b>@if (Session::has('user') && array_key_exists('email', Session::get('user')))<strong>{{ Session::get('user')['email'] }}</strong>
                        @else
                            <!-- Handle the case where 'user' or 'balance' is not set in the session -->
                            <p>not set</p>
                        @endif</b> </h3> --}}
            </div>
            <div class="m-5">
                <p>Enter Your Token Code if You Have One</p>
                <div class="cupon-wrap">
                    <form action="{{ route('customer.tokenapply') }}" method="post">
                        @csrf
                        <input type="text" name="token_name" placeholder="Token Code" class="form-control">
                        <button type="submit" class="btn btn-danger">Recharge</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="card-body ">

        </div>
    </div>
</div>
@endsection
