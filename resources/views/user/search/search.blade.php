@extends('layouts.app')


@section('content')

    <!-- Page Content -->
    <section class="py-md-5 col-md-9">
        <div class="ant-div-underlined bg-white">
            <p style="color: #222222;">{!! __('content.search_result') !!}: </p>
            @php $category_name = '' @endphp

            @forelse($articles as $article)
                @if($article -> journal)
{{--                show category one time--}}
                @if($article -> category && strcmp($category_name,$article -> category -> name) != 0)
                    <h4 class="font-weight-medium mt-4"
                        style="letter-spacing: 1.2px; font: normal normal bold 18px/28px Arial;">{{$article -> category -> name}}</h4>
                    <hr align="left" style="width: 5em;border-bottom: 1px solid black; margin-top: 0.5rem !important;">
                @endif
                <div class="row" id="articles">
                    <div class="col-lg-12">
                        <p><a href="{{route('journal.number.article',$article -> id)}}" class="article-link article_name">{{$article -> title}}</a></p>
                        <p class="article-link authors">{!! \App\Helpers\Helper::getAuthors($article -> authors)!!}</p>
                        <a href="{{route('journal.number.article',$article -> id)}}" class="article-link" style="float: right;">{!! __('content.read_more') !!}</a>

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a class="article-link" href="{{route('journal.archive')}}">{!! __('content.archive') !!}</a></li>
                                <li class="breadcrumb-item">
                                    @foreach(json_decode($article -> journal -> month) as $month)
                                        <a class="article-link" href="{{route('journal.archiveByMonth',$month)}}">
                                            {!!__('month.'.sprintf("%02d", $month))!!}{!! $loop->last ? "" : "&nbsp-&nbsp" !!}
                                        </a>
                                    @endforeach
                                </li>
                                <li class="breadcrumb-item active" aria-current="page"><a class="article-link"  href="{{route('journal.archive',   $article -> journal -> year)}}">{{$article -> journal -> year}}</a></li>
                            </ol>

                        </nav>
{{--                        <a href="#" style="color: #E4002B;" style="float: left;"><i class="fa fa-file-pdf-o"></i>--}}
{{--                            PDF</a>--}}
                        <hr>
                    </div>

                </div>
                @php $category_name = $article -> category -> name  @endphp

                @endif
            @empty
                    <h5 class="font-weight-medium mt-4" style="color: #E4002B"><b>{!! __('content.no_result') !!}</b></h5>
            @endforelse
            <div class="row justify-content-center mt-4">
                {{ $articles->links("pagination::bootstrap-4") }}
            </div>

        </div>
    </section>
    <!-- Page Content -->
@endsection
