@extends('layouts.app')


@section('content')

    <!-- Page Content -->
    <section class="py-md-5 col-md-9">

        <div class="ant-div-underlined bg-white">

            <h4 class="font-weight-medium" style="letter-spacing: 1.2px; font: normal normal bold 18px/28px Arial;">{!! __('content.contact') !!}</h4>
            <hr align="left" style="width: 5em;border-bottom: 1px solid black; margin-top: 0.5rem !important;">
            <div class="row">
                <div class="col-lg-5">
                    <ul class="list-unstyled">
                        <li><i class="fa fa-map-marker pr-2"></i><strong>{!! __('content.address') !!}</strong><p class="text-muted pl-4">{!!  $contact -> address !!}</p></li>
                        <li><i class="fa fa-phone pr-2"></i><strong>{!! __('content.phone') !!}</strong><p class="text-muted pl-4">{!! $contact -> phones  !!}</p></li>
                        <li><i class="fa fa-envelope pr-2"></i><strong>{!! __('content.email') !!}</strong><p class="text-muted pl-4">{!! $contact -> email  !!}</p></li>
                    </ul>
                </div>
                <div class="col-lg-7">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3038.4833871666283!2d49.804265314894!3d40.39814106469468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDIzJzUzLjMiTiA0OcKwNDgnMjMuMiJF!5e0!3m2!1saz!2s!4v1600758610090!5m2!1saz!2s" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
            <h4 class="font-weight-medium mt-3" style="letter-spacing: 1.2px; font: normal normal bold 18px/28px Arial;">{!! __('content.contact_us') !!}</h4>
            <hr align="left" style="width: 5em;border-bottom: 1px solid black; margin-top: 0.5rem !important;">

            <form class="" method="POST" action="{{route('sendMessage','#message')}}"  enctype="multipart/form-data" id="message">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-lg-6 mb-2">
                        <div class="form-group has-placeholder">
                            <label for="name">{!! __('content.full_name') !!}</label>
                            <i class="fa fa-user"></i>
                            <input type="text"  size="30" value="{{old('full_name')}}" name="full_name" id="name" class="form-control  @error('full_name') is-invalid @enderror" placeholder="{!! __('content.full_name') !!}" >
                        </div>
                        @error('full_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-2">
                        <div class="form-group has-placeholder">
                            <label for="email">{!! __('content.email') !!}</label>
                            <i class="fa fa-envelope"></i>
                            <input type="email"  size="30" value="{{old('email')}}" name="email" id="email" class="form-control  @error('email') is-invalid @enderror" placeholder="{!! __('content.email') !!}" >
                        </div>
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-2">
                        <div class="form-group has-placeholder">
                            <label for="num">{!! __('content.number') !!}</label>
                            <i class="fa fa-phone"></i>
                            <input type="text"  maxlength="10" onkeypress="return onlyNumber(event)" value="{{old('phone')}}" name="phone" id="num" class="form-control @error('phone') is-invalid @enderror" placeholder="{!! __('content.number') !!}" >
                        </div>
                        @error('phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-2">
                        <div class="form-group has-placeholder">
                            <label for="subject">{!! __('content.subject') !!}</label>
                            <i class="fa fa-link"></i>
                            <input type="text"  size="30" value="{{old('subject')}}" name="subject" id="subject" class="form-control @error('subject') is-invalid @enderror" placeholder="{!! __('content.subject') !!}" >
                        </div>
                        @error('subject')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-12 mb-2">
                        <div class="form-group has-placeholder">
                            <label for="message">{!! __('content.message') !!}</label>
                            <i class="fa fa-edit"></i>
                            <textarea  rows="8" cols="45" name="message" id="message" class="form-control @error('message') is-invalid @enderror" placeholder="{!! __('content.message') !!}">{{old('message')}}</textarea>
                        </div>
                        @error('message')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input class="btn" type="submit" value="{!! __('content.send') !!}">
                        </div>
                    </div>
                </div>
            </form>

        </div>

    </section>
    <!-- Page Content -->
    @section('footer.scripts')
        <script !src="">
            function onlyNumber(evt) {
                var charCode = (evt.which) ? evt.which : event.keyCode
                if (charCode > 31 && (charCode < 48 || charCode > 57)){
                    return false;
                }
                return true;
            }

        </script>
        @endsection
@endsection
