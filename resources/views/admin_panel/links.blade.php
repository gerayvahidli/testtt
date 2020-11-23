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
                                    <i class="pe-7s-link icon-gradient bg-happy-itmeo">
                                    </i>
                                </div>
                                <div>Linklər
                                    <div class="page-title-subheading">
                                        Links / Ссылки
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

                    <!-- AZERBAIJANI -->
                    <div class="tab-content">
                        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                            <div class="row">
                            <div class="col-md-6">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body">
                                            <h5 class="card-title">Link əlavə etmək</h5>
                                            <hr>
                                            <form method="post" action="{{ route('links.store') }}" enctype="multipart/form-data">
                                            @csrf
                                                <div class="position-relative form-group"><label for="link_url" class="">Link URL qeyd edin</label><input name="link_url" placeholder="məsələn: http://socar.az" id="link_url" type="text" class="form-control" required=""></div>
                                                <div class="position-relative form-group"><label for="image_url" class="">Şəkil</label><input name="image_url" id="image_url" type="file" class="form-control-file" required=""/>
                                                    <small class="form-text text-muted">Linkin üz şəklini dəyişmək</small>
                                                </div>
                                                <button type="submit" class="mt-1 btn btn-primary">Əlavə etmək</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body table-responsive"><h5 class="card-title">Əlavə edilən linklər</h5>
                                            <table class="mb-0 table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Link</th>
                                                        <th>Düzəliş etmək</th>
                                                        <th>Silmək</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($links as $link)
                                                    <tr>
                                                        <th scope="row">{{$link->id}}</th>
                                                        <td>{{$link->link_url}}</td>
                                                        <td><a href="{{ route('links.edit',$link->id)}}" class="btn btn-primary">Düzəliş</a></td>
                                                        <td>
                                                            <form action="{{ route('links.destroy', $link->id)}}" method="post">
                                                              @csrf
                                                              @method('DELETE')
                                                              <button class="btn btn-danger" id="del_{{$link->id}}" onclick= "return confirm('Bu linki silmək istəyirsiz?')" type="submit">Silmək</button>
                                                          </form>
                                                      </td>
                                                  </tr>
                                                  @endforeach
                                              </tbody>
                                          </table>
                                      </div>

                                  </div>
                                  <div class="d-flex justify-content-center">{{ $links->links() }}</div>
                                </div>
                          </div>
                      </div>
                  </div>
              </div>

              @include('admin_panel.layouts.footer')
              </html>