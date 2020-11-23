<!doctype html>
<html lang="en">
@include('admin_panel.layouts.head')
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        @include('admin_panel.layouts.header')
        <div class="app-main">
            @include('admin_panel.layouts.sidebar')
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-display1 icon-gradient bg-happy-itmeo">
                                    </i>
                                </div>
                                <div>Jurnalda reklam
                                    <div class="page-title-subheading">
                                        Advertisement in Journal / Реклама в журнале
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 


                 @if(session()->get('success'))
                    <div class="alert alert-success">
                      {{ session()->get('success') }}  
                  </div>
                  @endif
                  @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
                @endif

                    <div class="card-header-tab card-header-tab-animation card-header">
                        <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="header-icon lnr-gift icon-gradient bg-love-kiss"> </i>Jurnalda reklam səhifəsində məlumatlar</div>
                        <ul class="nav">
                            <li class="nav-item"><a data-toggle="tab" href="#tab-eg8-0" class="active nav-link">AZ</a></li>
                            <li class="nav-item"><a data-toggle="tab" href="#tab-eg8-1" class="nav-link">RU</a></li>
                            <li class="nav-item"><a data-toggle="tab" href="#tab-eg8-2" class="nav-link">EN</a></li>
                        </ul>
                    </div><br>

                    <!-- AZERBAIJANI -->
                    <div class="tab-content">
                        <form method="post" action="{{ route('journalAdvertisement.update', 0) }}" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf

                            <input type="hidden" name="advertisementAz" value="{{ $advertisementAz }}">
                            <input type="hidden" name="advertisementRu" value="{{ $advertisementRu }}">
                            <input type="hidden" name="advertisementEn" value="{{ $advertisementEn }}"> 
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab-eg8-0" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="centered">
                                                <div id="editor1">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- RUSSIAN -->
                                <div class="tab-pane" id="tab-eg8-1" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="centered">
                                                <div id="editor2">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- ENGLISH -->
                                <div class="tab-pane" id="tab-eg8-2" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="centered">
                                                <div id="editor3">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <br>
                        <button onclick="return confirm('Yadda saxlamaq istəyirsiz?');" type="submit" class="mt-1 btn btn-primary">Yadda saxlamaq</button>
                        <br><br><br><br>
                    </form>
                </div>
            </div>

            @include('admin_panel.layouts.footer')



            <script> 
                function htmlDecode(input){
                    var e = document.createElement('textarea');
                    e.innerHTML = input;
                    // handle case of empty input
                    return e.childNodes.length === 0 ? "" : e.childNodes[0].nodeValue;
                }

                var advertisementAz = CKEDITOR.replace('editor1', {
                    filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
                    filebrowserUploadMethod: 'form'
                });

                var advertisementRu = CKEDITOR.replace('editor2', {
                    filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
                    filebrowserUploadMethod: 'form'
                });

                var advertisementEn = CKEDITOR.replace('editor3', {
                    filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
                    filebrowserUploadMethod: 'form'
                });


                $( document ).ready(function() {
                    CKEDITOR.instances.editor1.setData(htmlDecode(`{{ $advertisementAz }}`));
                    CKEDITOR.instances.editor2.setData(htmlDecode(`{{ $advertisementRu }}`));
                    CKEDITOR.instances.editor3.setData(htmlDecode(`{{ $advertisementEn }}`));

                });

                advertisementAz.on( 'change', function( evt ) {
                    document.getElementsByName("advertisementAz")[0].value = evt.editor.getData();
                });

                advertisementRu.on( 'change', function( evt ) {
                    document.getElementsByName("advertisementRu")[0].value = evt.editor.getData();
                });

                advertisementEn.on( 'change', function( evt ) {
                    document.getElementsByName("advertisementEn")[0].value = evt.editor.getData();
                });
            </script>

            </html>