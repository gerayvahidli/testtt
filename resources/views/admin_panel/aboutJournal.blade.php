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
                    <div class="tab-content">
                        <form method="post" action="{{ route('aboutJournal.update', 0) }}" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf

                            <input type="hidden" name="textAreaAz" value="{{ $textAreaAz }}">
                            <input type="hidden" name="textAreaRu" value="{{ $textAreaRu }}">
                            <input type="hidden" name="textAreaEn" value="{{ $textAreaEn }}">

                            <div class="app-page-title">
                                <div class="page-title-wrapper">
                                    <div class="page-title-heading">
                                        <div class="page-title-icon">
                                            <i class="pe-7s-info icon-gradient bg-happy-itmeo">
                                            </i>
                                        </div>
                                        <div>Jurnal Haqqında
                                            <div class="page-title-subheading">
                                                About Journal / О Журнале
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

                        <div class="row">
                            <div class="col-md-6">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <div class="position-relative form-group"><label for="cover_photo" class="">Şəkil</label><input name="cover_photo" id="cover_photo" type="file" class="form-control-file"/>
                                            <small class="form-text text-muted">Jurnalin üz şəklini dəyişmək</small>
                                            <br>
                                            <img width="200px" src="/{{ $aboutJournal->cover_photo }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <div class="position-relative row form-group"><label for="ISSN" class="col-sm-2 col-form-label">ISSN</label>
                                            <div class="col-sm-10"><textarea name="ISSN" id="ISSN" class="form-control">{{ $aboutJournal->ISSN }}</textarea></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> 
                        <div class="card-header-tab card-header-tab-animation card-header">
                            <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="header-icon lnr-gift icon-gradient bg-love-kiss"> </i>Jurnal Haqqında səhifəsində məlumatlar</div>
                            <ul class="nav">
                                <li class="nav-item"><a data-toggle="tab" href="#tab-content-0" class="active nav-link">AZ</a></li>
                                <li class="nav-item"><a data-toggle="tab" href="#tab-content-1" class="nav-link">RU</a></li>
                                <li class="nav-item"><a data-toggle="tab" href="#tab-content-2" class="nav-link">EN</a></li>
                            </ul>
                        </div><br>

                        <!-- AZERBAIJANI -->
                        <div class="tab-content">

                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Məlumatlar</h5>
                                                <div class="position-relative row form-group"><label for="foundingDateAz" class="col-sm-2 col-form-label">Təsis edilmə tarixi</label>
                                                    <div class="col-sm-10"><textarea name="foundingDateAz" id="foundingDateAz" class="form-control">{{ $aboutJournal->foundingDateAz }}</textarea></div>
                                                </div>
                                                <div class="position-relative row form-group"><label for="founderAz" class="col-sm-2 col-form-label">Təsisçi</label>
                                                    <div class="col-sm-10"><textarea name="founderAz" id="founderAz" class="form-control">{{ $aboutJournal->founderAz }}</textarea></div>
                                                </div>
                                                <div class="position-relative row form-group"><label for="profileAz" class="col-sm-2 col-form-label">Profil</label>
                                                    <div class="col-sm-10"><textarea name="profileAz" id="profileAz" class="form-control">{{ $aboutJournal->profileAz }}</textarea></div>
                                                </div>
                                                <div class="position-relative row form-group"><label for="languagesAz" class="col-sm-2 col-form-label">Nəşrin dili</label>
                                                    <div class="col-sm-10"><textarea name="languagesAz" id="languagesAz" class="form-control">{{ $aboutJournal->languagesAz }}</textarea></div>
                                                </div>
                                                <div class="position-relative row form-group"><label for="periodicityAz" class="col-sm-2 col-form-label">Dövriliyi</label>
                                                    <div class="col-sm-10"><textarea name="periodicityAz" id="periodicityAz" class="form-control">{{ $aboutJournal->periodicityAz }}</textarea></div>
                                                </div>
                                                <div class="position-relative row form-group"><label for="formatAz" class="col-sm-2 col-form-label">Formatı</label>
                                                    <div class="col-sm-10"><textarea name="formatAz" id="formatAz" class="form-control">{{ $aboutJournal->formatAz }}</textarea></div>
                                                </div>
                                                <div class="position-relative row form-group"><label for="volumeAz" class="col-sm-2 col-form-label">Həcmi</label>
                                                    <div class="col-sm-10"><textarea name="volumeAz" id="volumeAz" class="form-control">{{ $aboutJournal->volumeAz }}</textarea></div>
                                                </div>
                                                <div class="position-relative row form-group"><label for="quantityAz" class="col-sm-2 col-form-label">Tirajı</label>
                                                    <div class="col-sm-10"><textarea name="quantityAz" id="quantityAz" class="form-control">{{ $aboutJournal->quantityAz }}</textarea></div>
                                                </div>
                                                <div class="position-relative row form-group"><label for="typographyAz" class="col-sm-2 col-form-label">Çap olunur</label>
                                                    <div class="col-sm-10"><textarea name="typographyAz" id="typographyAz" class="form-control">{{ $aboutJournal->typographyAz }}</textarea></div>
                                                </div>
                                                <div class="position-relative row form-group"><label for="registrationNumAz" class="col-sm-2 col-form-label">Qeydiyyat №si</label>
                                                    <div class="col-sm-10"><textarea name="registrationNumAz" id="registrationNumAz" class="form-control">{{ $aboutJournal->registrationNumAz }}</textarea></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="centered">
                                            <div id="editor1">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- RUSSIAN -->
                            <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Информация</h5>
                                                <div class="position-relative row form-group"><label for="foundingDateRu" class="col-sm-2 col-form-label">Дата учреждения</label>
                                                    <div class="col-sm-10"><textarea name="foundingDateRu" id="foundingDateRu" class="form-control">{{ $aboutJournal->foundingDateRu }}</textarea></div>
                                                </div>
                                                <div class="position-relative row form-group"><label for="founderRu" class="col-sm-2 col-form-label">Учредитель</label>
                                                    <div class="col-sm-10"><textarea name="founderRu" id="founderRu" class="form-control">{{ $aboutJournal->founderRu }}</textarea></div>
                                                </div>
                                                <div class="position-relative row form-group"><label for="profileRu" class="col-sm-2 col-form-label">Профиль</label>
                                                    <div class="col-sm-10"><textarea name="profileRu" id="profileRu" class="form-control">{{ $aboutJournal->profileRu }}</textarea></div>
                                                </div>
                                                <div class="position-relative row form-group"><label for="languagesRu" class="col-sm-2 col-form-label">Язык издания</label>
                                                    <div class="col-sm-10"><textarea name="languagesRu" id="languagesRu" class="form-control">{{ $aboutJournal->languagesRu }}</textarea></div>
                                                </div>
                                                <div class="position-relative row form-group"><label for="periodicityRu" class="col-sm-2 col-form-label">Периодичность</label>
                                                    <div class="col-sm-10"><textarea name="periodicityRu" id="periodicityRu" class="form-control">{{ $aboutJournal->periodicityRu }}</textarea></div>
                                                </div>
                                                <div class="position-relative row form-group"><label for="formatRu" class="col-sm-2 col-form-label">Формат</label>
                                                    <div class="col-sm-10"><textarea name="formatRu" id="formatRu" class="form-control">{{ $aboutJournal->formatRu }}</textarea></div>
                                                </div>
                                                <div class="position-relative row form-group"><label for="volumeRu" class="col-sm-2 col-form-label">Объём</label>
                                                    <div class="col-sm-10"><textarea name="volumeRu" id="volumeRu" class="form-control">{{ $aboutJournal->volumeRu }}</textarea></div>
                                                </div>
                                                <div class="position-relative row form-group"><label for="quantityRu" class="col-sm-2 col-form-label">Тираж</label>
                                                    <div class="col-sm-10"><textarea name="quantityRu" id="quantityRu" class="form-control">{{ $aboutJournal->quantityRu }}</textarea></div>
                                                </div>
                                                <div class="position-relative row form-group"><label for="typographyRu" class="col-sm-2 col-form-label">Печатается</label>
                                                    <div class="col-sm-10"><textarea name="typographyRu" id="typographyRu" class="form-control">{{ $aboutJournal->typographyRu }}</textarea></div>
                                                </div>
                                                <div class="position-relative row form-group"><label for="registrationNumRu" class="col-sm-2 col-form-label">Номер регистрации</label>
                                                    <div class="col-sm-10"><textarea name="registrationNumRu" id="registrationNumRu" class="form-control">{{ $aboutJournal->registrationNumRu }}</textarea></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="centered">
                                            <div id="editor2">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- ENGLISH -->
                            <div class="tab-pane tabs-animation fade" id="tab-content-2" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Information</h5>
                                                <div class="position-relative row form-group"><label for="foundingDateEn" class="col-sm-2 col-form-label">Foundation date</label>
                                                    <div class="col-sm-10"><textarea name="foundingDateEn" id="foundingDateEn" class="form-control">{{ $aboutJournal->foundingDateEn }}</textarea></div>
                                                </div>
                                                <div class="position-relative row form-group"><label for="founderEn" class="col-sm-2 col-form-label">Founder</label>
                                                    <div class="col-sm-10"><textarea name="founderEn" id="founderEn" class="form-control">{{ $aboutJournal->founderEn }}</textarea></div>
                                                </div>
                                                <div class="position-relative row form-group"><label for="profileEn" class="col-sm-2 col-form-label">Profile</label>
                                                    <div class="col-sm-10"><textarea name="profileEn" id="profileEn" class="form-control">{{ $aboutJournal->profileEn }}</textarea></div>
                                                </div>
                                                <div class="position-relative row form-group"><label for="languagesEn" class="col-sm-2 col-form-label">Publication languages</label>
                                                    <div class="col-sm-10"><textarea name="languagesEn" id="languagesEn" class="form-control">{{ $aboutJournal->languagesEn }}</textarea></div>
                                                </div>
                                                <div class="position-relative row form-group"><label for="periodicityEn" class="col-sm-2 col-form-label">Frequency</label>
                                                    <div class="col-sm-10"><textarea name="periodicityEn" id="periodicityEn" class="form-control">{{ $aboutJournal->periodicityEn }}</textarea></div>
                                                </div>
                                                <div class="position-relative row form-group"><label for="formatEn" class="col-sm-2 col-form-label">Format</label>
                                                    <div class="col-sm-10"><textarea name="formatEn" id="formatEn" class="form-control">{{ $aboutJournal->formatEn }}</textarea></div>
                                                </div>
                                                <div class="position-relative row form-group"><label for="volumeEn" class="col-sm-2 col-form-label">Volume</label>
                                                    <div class="col-sm-10"><textarea name="volumeEn" id="volumeEn" class="form-control">{{ $aboutJournal->volumeEn }}</textarea></div>
                                                </div>
                                                <div class="position-relative row form-group"><label for="quantityEn" class="col-sm-2 col-form-label">Circulation</label>
                                                    <div class="col-sm-10"><textarea name="quantityEn" id="quantityEn" class="form-control">{{ $aboutJournal->quantityEn }}</textarea></div>
                                                </div>
                                                <div class="position-relative row form-group"><label for="typographyEn" class="col-sm-2 col-form-label">Printing at</label>
                                                    <div class="col-sm-10"><textarea name="typographyEn" id="typographyEn" class="form-control">{{ $aboutJournal->typographyEn }}</textarea></div>
                                                </div>
                                                <div class="position-relative row form-group"><label for="registrationNumEn" class="col-sm-2 col-form-label">Registration number</label>
                                                    <div class="col-sm-10"><textarea name="registrationNumEn" id="registrationNumEn" class="form-control">{{ $aboutJournal->registrationNumEn }}</textarea></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="centered">
                                            <div id="editor3">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-header-tab card-header-tab-animation card-header">
                            <button onclick="return confirm('Dəyişiklikləri yadda saxlamaq istəyirsiz?');" type="submit" class="mt-1 btn btn-primary">Yadda saxlamaq</button>
                        </div><br>
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

                var textAreaAz = CKEDITOR.replace('editor1', {
                    filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
                    filebrowserUploadMethod: 'form'
                });

                var textAreaRu = CKEDITOR.replace('editor2', {
                    filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
                    filebrowserUploadMethod: 'form'
                });

                var textAreaEn = CKEDITOR.replace('editor3', {
                    filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
                    filebrowserUploadMethod: 'form'
                });


                $( document ).ready(function() {
                    CKEDITOR.instances.editor1.setData(htmlDecode(`{{ $textAreaAz }}`));
                    CKEDITOR.instances.editor2.setData(htmlDecode(`{{ $textAreaRu }}`));
                    CKEDITOR.instances.editor3.setData(htmlDecode(`{{ $textAreaEn }}`));
                });


                textAreaAz.on( 'change', function( evt ) {
                    document.getElementsByName("textAreaAz")[0].value = evt.editor.getData();
                });

                textAreaRu.on( 'change', function( evt ) {
                    document.getElementsByName("textAreaRu")[0].value = evt.editor.getData();
                });

                textAreaEn.on( 'change', function( evt ) {
                    document.getElementsByName("textAreaEn")[0].value = evt.editor.getData();
                });
            </script>
            </html>