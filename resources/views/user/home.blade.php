@extends('layouts.app')


@section('content')

    <section class="py-md-5 col-md-9">
        <div class="ant-div-underlined bg-white">
            <h4 class="font-weight-medium" style="letter-spacing: 1.2px; font: normal normal bold 18px/28px Arial;">{{ucfirst(strtolower(__('content.last_number')))}}</h4>
            <hr align="left" style="width: 5em;border-bottom: 1px solid black; margin-top: 0.5rem !important;">
            <div class="row">
                <div class="col-md-3">
                    <img class="img-fluid" src="{{$last_number -> cover_photo}}">
                </div>
                <div class="col-md-9">
                    <h5 class="mt-3 mt-md-0">

                       <b>{!! __('content.journal_name') !!} - {!! Helper::getMonths($last_number -> month)."  ".$last_number -> year!!}</b>

                    </h5>
                    <p style="color: #555555;"><b>{!! __('content.founder')!!}:</b> <span>{!!  $about_journal -> founder !!}</span>
                    </p>
                    <p style="color: #555555;">{!! __('content.editor-in-chief')!!}: <span>{!! __('content.editor-in-chief_name')!!}</span></p>
                    <p><a  href="{{route('editorialStaff')}}"> {!! __('content.editorial_staff') !!}</a></p>

                    <p>
                        {!! __('content.main_note') !!}
                    </p>

                    <a href="{{route('journal.number',$last_number -> id)}}" class="button-journal"><i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
        @foreach($main_page as $value)
        <div class="ant-div-underlined bg-white">
            <h4 class="font-weight-medium" style="font: normal normal bold 18px/28px Arial;">{!! $value -> title !!}</h4>
            <hr align="left" style="width: 5em;border-bottom: 1px solid black; margin-top: 0.5rem !important;">
            {!! $value -> content !!}
        </div>
        @endforeach

    </section>
@endsection
