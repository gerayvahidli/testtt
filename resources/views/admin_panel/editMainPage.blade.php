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
                                    <i class="pe-7s-drawer icon-gradient bg-happy-itmeo">
                                    </i>
                                </div>
                                <div>Əsas səhifənin bölməsində dəyişiklik etmək
                                    <div class="page-title-subheading">
                                        Editing the block on main page / Редактировать отдел на основной странице
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
 

                    <!-- ADD NEW INPUT -->
                    <div class="tab-content">
                        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="main-card mb-3 card">
                                        <div class="card-header-tab card-header-tab-animation card-header"> 
                                            <h5 class="card-title mt-3">Bölmədə dəyişiklik etmək</h5>
                                            <ul class="nav">
                                                <li class="nav-item"><a data-toggle="tab" href="#tab-eg8-0" class="active nav-link">AZ</a></li>
                                                <li class="nav-item"><a data-toggle="tab" href="#tab-eg8-1" class="nav-link">RU</a></li>
                                                <li class="nav-item"><a data-toggle="tab" href="#tab-eg8-2" class="nav-link">EN</a></li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <form method="post" action="{{ route('mainPage.update', $mainPageBlock->id) }}" enctype="multipart/form-data">
                                                @method('PATCH')
                                                @csrf

                                                <input type="hidden" name="contentAz" value="{{ $mainPageBlock->contentAz }}">
                                                <input type="hidden" name="contentRu" value="{{ $mainPageBlock->contentRu }}">
                                                <input type="hidden" name="contentEn" value="{{ $mainPageBlock->contentEn }}">

                                                <div class="tab-content">
                                                    <!-- AZERBAIJANI -->
                                                    <div class="tab-pane active" id="tab-eg8-0" role="tabpanel">
                                                        <div class="position-relative form-group"><label for="titleAz" class="">Bölmənin başlığı</label><input name="titleAz" id="titleAz" placeholder="" type="text" class="form-control" required=""  value="{{ $mainPageBlock->titleAz }}"></div>
                                                        <div class="position-relative form-group"><label for="editor1" class="">Məzmun</label>
                                                            <div class="centered">
                                                                <div id="editor1">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- RUSSIAN -->

                                                    <div class="tab-pane" id="tab-eg8-1" role="tabpanel">
                                                        <div class="position-relative form-group"><label for="titleRu" class="">Заголовок</label><input name="titleRu" id="titleRu" placeholder="" type="text" class="form-control" required=""  value="{{ $mainPageBlock->titleRu }}"></div>
                                                        <div class="position-relative form-group"><label for="editor2" class="">Содержание</label>
                                                            <div class="centered">
                                                                <div id="editor2">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- ENGLISH -->

                                                    <div class="tab-pane" id="tab-eg8-2" role="tabpanel">
                                                        <div class="position-relative form-group"><label for="titleEn" class="">Title</label><input name="titleEn" id="titleEn" placeholder="" type="text" class="form-control" required=""  value="{{ $mainPageBlock->titleEn }}"></div>
                                                        <div class="position-relative form-group"><label for="editor3" class="">Content</label>
                                                            <div class="centered">
                                                                <div id="editor3">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <script> 

                                                    function htmlDecode(input){
                                                      var e = document.createElement('textarea');
                                                      e.innerHTML = input;
                                                      // handle case of empty input
                                                      return e.childNodes.length === 0 ? "" : e.childNodes[0].nodeValue;
                                                    }

                                                    var contentAz = CKEDITOR.replace('editor1', {
                                                        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
                                                        filebrowserUploadMethod: 'form'
                                                    });

                                                    var contentRu = CKEDITOR.replace('editor2', {
                                                        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
                                                        filebrowserUploadMethod: 'form'
                                                    });

                                                    var contentEn = CKEDITOR.replace('editor3', {
                                                        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
                                                        filebrowserUploadMethod: 'form'
                                                    });

                                                    $( document ).ready(function() {
                                                        CKEDITOR.instances.editor1.setData(htmlDecode(`{{ $mainPageBlock->contentAz }}`));
                                                        CKEDITOR.instances.editor2.setData(htmlDecode(`{{ $mainPageBlock->contentRu }}`));
                                                        CKEDITOR.instances.editor3.setData(htmlDecode(`{{ $mainPageBlock->contentEn }}`));
 
                                                    });

                                                    contentAz.on( 'change', function( evt ) {
                                                        document.getElementsByName("contentAz")[0].value = evt.editor.getData();
                                                    });

                                                    contentRu.on( 'change', function( evt ) {
                                                        document.getElementsByName("contentRu")[0].value = evt.editor.getData();
                                                    });

                                                    contentEn.on( 'change', function( evt ) {
                                                        document.getElementsByName("contentEn")[0].value = evt.editor.getData();
                                                    });
                                                    
                                                </script>

                                                <button onclick="return confirm('Yadda saxlamaq istəyirsiz?');" type="submit" class="mt-1 btn btn-primary">Yadda saxlamaq</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body table-responsive"><h5 class="card-title">Əlavə edilən bölmələr</h5>
                                            <table class="mb-0 table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Başlıq</th>
                                                        <th>Düzəliş etmək</th>
                                                        <th>Silmək</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($mainPage as $mainPageBlock)
                                                    <tr>
                                                        <th scope="row">{{$mainPageBlock->id}}</th>
                                                        <td>{{$mainPageBlock->titleAz}}</td> 
                                                        <td><a href="{{ route('mainPage.edit',$mainPageBlock->id)}}" class="btn btn-primary">Düzəliş</a></td>
                                                        <td>
                                                            <form action="{{ route('mainPage.destroy', $mainPageBlock->id)}}" method="post">
                                                              @csrf
                                                              @method('DELETE')
                                                              <button class="btn btn-danger" id="del_{{$mainPageBlock->id}}" onclick= "return confirm('Bu bölməni silmək istəyirsiz?')" type="submit">Silmək</button>
                                                          </form>
                                                      </td>
                                                  </tr>
                                                  @endforeach
                                              </tbody>
                                          </table>
                                      </div>
                                  </div>
                                  <div class="d-flex justify-content-center">{{ $mainPage->links() }}</div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <script>

              </script>

              @include('admin_panel.layouts.footer')
              </html>