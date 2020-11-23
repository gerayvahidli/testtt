@extends('layouts.app')


@section('content')

    <!-- Page Content -->
    <section class="py-md-5 col-md-9">
        <div class="ant-div-underlined bg-white">
            <h4 class="font-weight-medium" style="letter-spacing: 1.2px; font: normal normal bold 18px/28px Arial;">
                {!! __('content.archive') !!}</h4>
            <hr align="left" style="width: 5em;border-bottom: 1px solid black; margin-top: 0.5rem !important;">
            <div class="row">
                <div class="dropdown" style="margin-left: 1rem!important;">
                    <label for="dropdownMenuButton"><b>{!! __('content.date') !!}</b></label>
                    <br>
                    <button class="btn btn-secondary dropdown-toggle dropdown-toggle-journals" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: white;width: 11em;text-align: left;color: black;">
                        {!! Request::segment(3) ? : __('content.choose') !!}
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{route('journal.archive')}}">Seçin</a>
                        @foreach(\App\Models\Journals::all() -> unique('year') -> sortBy('year') as $journal)
                            <a  class="dropdown-item {{Request::segment(3) == $journal -> year ? 'active' : '' }}" href="{{route('journal.archive',$journal -> year)}}">{{$journal -> year}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach($journals  as $journal)

                    <div class="col-lg-4">
                        <div class="card flex-row flex-wrap p-2">
                            <div class="border-0">
                                <img src="{{asset($journal -> cover_photo)}}" class="img-fluid" alt="" width="100">
                            </div>
                            <div class="card-block p-2">
                                <h4 class="card-title" style="font-size:11px">
                                    <h4 class="card-title" style="font-size:14px">{!! \App\Helpers\Helper::getMonths($journal -> month)." ".$journal -> year!!}</h4>
                                </h4>

                                @if(!empty($journal -> pdf_file))
                                    <a target="_blank" href="{!! asset($journal -> pdf_file) !!}" style="color: #E4002B;"><i class="fa fa-file-pdf-o"></i> PDF</a>
                                @endif
                                <a href="{!! route('journal.number',$journal -> id)!!}" class="button-journal"><i class="fa fa-angle-right" style=""></i>
                                </a>
                            </div>
                        </div>
                    </div>


                @endforeach
            </div>

            <div class="row justify-content-center mt-4">
                {{ $journals -> links("pagination::bootstrap-4") }}
            </div>

        </div>

        @section('footer.scripts')

        @endsection

    </section>
@endsection


