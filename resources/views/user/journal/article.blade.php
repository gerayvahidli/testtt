@extends('layouts.app')


@section('content')

    <!-- Page Content -->
    <section class="py-md-5 col-md-9">
        <div class="ant-div-underlined bg-white">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        {!! Helper::getMonths($article -> journal -> month)." ".$article -> journal -> year.", ".__('content.page').". ".$article -> page_num!!}
                    </p>
                    <p><b>{!! __('content.section') !!}: </b>{!!$article -> category -> name!!}</p>
                    <p><b>UOT: </b> {!!$article -> UOT_code!!}</p>
                    <p><b>DOI: </b>{!!$article -> DOI_code!!}</p>
{{--                    <a href="#" style="color: #E4002B;" style="float: left;"><i class="fa fa-file-pdf-o"></i> PDF</a>--}}
                    <p>{!!$article -> title!!}</p>
                    <p>{!! Helper::getAuthors($article -> authors)!!}</p>
                    <p><b>{!! __('content.keywords') !!}:</b>
                        @foreach($keywords as $keyword)
                            &emsp;<i class="fa fa-circle" aria-hidden="true"></i>&nbsp;<span>{!!  $keyword !!}</span>
                        @endforeach
                    </p>
                    <p>{!!$article -> abstract!!}</p>
                    <p style="font-size:18px !important;"><b>{!! __('content.references') !!}:</b>
                    <p>
                        {!!$article -> references!!}
                    </p>

                </div>
            </div>
        </div>

    </section>
@endsection
