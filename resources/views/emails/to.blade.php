@component('mail::message')

<b>İsmarıc:</b> {{ $data['content'] }}
<br>
<hr>
{{--<b>İstifadəçi:</b> {{ $data['full_name'] }}<hr>--}}
<b>E-mail:</b> {{ $data['email'] }}<hr>
<b>Əlaqə telefonu:</b> {{ $data['phone'] }}<hr>
<b>Tarix:</b> {{ date('d-m-Y H:i:s') }}<hr>

<br><br><br>

<br>

{{--@component('mail::table')--}}
    {{--| Laravel       | Table         | Example  |--}}
    {{--| ------------- |:-------------:| --------:|--}}
    {{--| Col 2 is      | Centered      | $10      |--}}
    {{--| Col 3 is      | Right-Aligned | $20      |--}}
{{--@endcomponent--}}


@endcomponent
