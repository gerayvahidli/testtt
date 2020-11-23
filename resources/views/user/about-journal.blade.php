@extends('layouts.app')


@section('content')

    <!-- Page Content -->
    <section class="py-md-5 col-md-9">
        <div class="ant-div-underlined bg-white">
            <h4 class="font-weight-medium" style="letter-spacing: 1.2px; font: normal normal bold 18px/28px Arial;">{!!(__('content.about_journal')) !!}</h4>
            <hr align="left" style="width: 5em;border-bottom: 1px solid black; margin-top: 0.5rem !important;">
            <div class="row">
                <div class="col-md-12">
                    <img class="leftimg img-fluid" src="img/journal.jpg" style="max-width: 13em;">
                    <p style="color: #555555;"><b>ISSN: </b>{!! $about_journal -> ISSN !!}</p>
                    <p style="color: #555555;"><b>{!! __('content.foundation_date')!!}: </b>{!! $about_journal -> founding_date !!}</p>
                    <p style="color: #555555;"><b>{!! __('content.founder')!!}: </b> {!! $about_journal -> founder !!}</p>
                    <p style="color: #555555;"><b>{!! __('content.profile')!!}: </b> {!! $about_journal -> profile !!}</p>
                    <p style="color: #555555;"><b>{!! __('content.publication_lang')!!}: </b> {!! $about_journal -> languages !!}</p>
                    <p style="color: #555555;"><b>{!! __('content.frequency')!!}: </b> {!! $about_journal -> periodicity !!}</p>
                    <p style="color: #555555;"><b>{!! __('content.format')!!}: </b> {!! $about_journal -> format !!}</p>
                    <p style="color: #555555;"><b>{!! __('content.volume')!!}: </b> {!! $about_journal -> volume !!}</p>
                    <p style="color: #555555;"><b>{!! __('content.circulation')!!}: </b>{!! $about_journal -> quantity !!}</p>
                    <p style="color: #555555;"><b>{!! __('content.printing_at')!!}: </b> {!! $about_journal -> typography !!}</p>
                    <p style="color: #555555;"><b>{!! __('content.reg_no')!!}: </b>{!! $about_journal -> registration_num !!}</p>
                   {!! $about_journal -> text_area !!}
                </div>
            </div>
        </div>

    </section>
@endsection
