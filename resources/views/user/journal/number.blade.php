@extends('layouts.app')


@section('content')

    <!-- Page Content -->
    <!-- Page Content -->
    <section class="py-md-5 col-md-9">
        <div class="ant-div-underlined bg-white">

            <div class="row">
                <div class="col-lg-2">
                    <img class="img-fluid" src="{{asset($journal -> cover_photo)}}">
                </div>
                <div class="col-lg-10">
                    <h4 class="mt-3 mt-lg-0">{!! __('content.journal_name') !!} -
                        {!! \App\Helpers\Helper::getMonths($journal -> month)." ".$journal -> year!!}
                    </h4>
{{--                    <p style="color: #555555;"><strong>Son nömrə</strong></p>--}}
                   @if(!empty($journal -> pdf_file)) <a target="_blank" href="{{asset($journal -> pdf_file)}}" style="color: #E4002B;"><i class="fa fa-file-pdf-o"></i> PDF</a>@endif
                </div>
            </div>
            <h4 class="font-weight-medium mt-4" style="letter-spacing: 1.2px; font: normal normal bold 18px/28px Arial;">{!! __('content.this_number') !!}: </h4>
            <hr align="left" style="width: 5em;border-bottom: 1px solid black; margin-top: 0.5rem !important;">
            @foreach($articles  as $article)
            <div class="row" id="articles">
                <div class="col-lg-12">
                    <p><strong>UOT:</strong> {!! $article -> UOT_code !!}</p>
                    <p><strong>DOI:</strong> {!! $article -> DOI_code !!}</p>
                    <p><a href="{{route('journal.number.article',$article -> id)}}" class="article-link article_name">{{$article -> title}}</a></p>
                    <p class="article-link authors">{!! \App\Helpers\Helper::getAuthors($article -> authors)!!}</p>
                    <a href="{{route('journal.number.article',$article -> id)}}" class="article-link" style="float: right;">{!! __('content.read_more') !!}</a>
                    <br>
                    <div class="mt-4">
{{--                        <a href="#" style="color: #E4002B;" style="float: left;"><i class="fa fa-file-pdf-o"></i> PDF</a>--}}
                    </div>
                    <hr>
                </div>
            </div>
                @endforeach
            <div class="row justify-content-center mt-4">
                {{ $articles -> links("pagination::bootstrap-4") }}
            </div>
        </div>
    </section>
    <!-- Page Content -->
@endsection
