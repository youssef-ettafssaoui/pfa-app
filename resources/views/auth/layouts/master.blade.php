@include('auth.layouts.header')
<div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('front/img/reservation.png');"></div>
    <div class="contents order-2 order-md-1">
        @yield('content')
    </div>
</div>
@include('auth.layouts.footer')
