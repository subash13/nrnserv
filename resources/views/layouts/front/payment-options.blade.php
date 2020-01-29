@if(isset($payment['name']))
    @if($payment['name'] == config('stripe.name'))
        @include('front1.payments.stripe')
    @elseif($payment['name'] == config('paypal.name'))
        @include('front1.payments.paypal')
    @elseif($payment['name'] == config('bank-transfer.name'))
        @include('front1.payments.bank-transfer')
    @endif
@endif