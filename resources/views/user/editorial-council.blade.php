@extends('layouts.app')


@section('content')

    <!-- Page Content -->
    <section class="py-md-5 col-md-9">
        <div class="ant-div-underlined bg-white">
            <h4 class="font-weight-medium" style="letter-spacing: 1.2px; font: normal normal bold 18px/28px Arial;">
                {!! __('content.editorial_council') !!}</h4>
            <hr align="left" style="width: 5em;border-bottom: 1px solid black; margin-top: 0.5rem !important;">

            <div class="row">
                @foreach($editors as $editor)
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="card">
                            <img class="card-img-top" src="{{$editor -> image_url ? $editor -> image_url : asset('/img/unnamed.png')}}" alt="Card image cap" style="height: 121px">
                            <div class="card-body">
                                <h5 class="card-title">{!! $editor -> name !!}</h5>
                                <p class="card-text text-muted" style="font-size: 14px;">{!! $editor -> title !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

    </section>
@endsection
