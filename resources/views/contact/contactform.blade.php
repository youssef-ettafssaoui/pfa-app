@component('mail::message')
    <div class="row">
        <h1 class="text-dark">{{ $subject }}</h1>

        <h3>{{ $message }}</h3>

        <h4>You can reach us via mail or telephone : {{ $email }} or {{ $phone_number }}<br />
            Thanks
        </h4>
    </div>
@endcomponent
