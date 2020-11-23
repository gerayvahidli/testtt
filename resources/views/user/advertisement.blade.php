@extends('layouts.app')


@section('content')

    <!-- Page Content -->
    <section class="py-md-5 col-md-9">
        <div class="ant-div-underlined bg-white">
            <h4 class="font-weight-medium" style="letter-spacing: 1.2px; font: normal normal bold 18px/28px Arial;">{!! __('content.advertisement_in_journal') !!}</h4>
            <hr align="left" style="width: 5em;border-bottom: 1px solid black; margin-top: 0.5rem !important;">
            <div class="row">
                <div class="col-md-12">

                    {!! $advertisement -> adversitiment  !!}

                </div>
            </div>
        </div>

    </section>
@endsection
