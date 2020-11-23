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
                    <p style="color: #555555;"><b>İSSN: </b>{!! $about_journal -> ISSN !!}</p>
                    <p style="color: #555555;"><b>Təsis edilmə tarixi: </b>{!! $about_journal -> founding_date !!}</p>
                    <p style="color: #555555;"><b>Təsisçi: </b> {!! $about_journal -> founder !!}</p>
                    <p style="color: #555555;"><b>Profil: </b> {!! $about_journal -> profile !!}</p>
                    <p style="color: #555555;"><b>Nəşrin dili: </b> {!! $about_journal -> languages !!}</p>
                    <p style="color: #555555;"><b>Dövriliyi: </b> {!! $about_journal -> periodicity !!}</p>
                    <p style="color: #555555;"><b>Formatı: </b> {!! $about_journal -> format !!}</p>
                    <p style="color: #555555;"><b>Həcmi: </b> {!! $about_journal -> volume !!}</p>
                    <p style="color: #555555;"><b>Tirajı: </b>{!! $about_journal -> quantity !!}</p>
                    <p style="color: #555555;"><b>Çap olunur: </b> {!! $about_journal -> typography !!}</p>
                    <p style="color: #555555;"><b>Qeydiyyat №si: </b>{!! $about_journal -> registration_num !!}</p>
                   {!! $about_journal -> text_area !!}
                </div>
            </div>
        </div>

    </section>
@endsection
