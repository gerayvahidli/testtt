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
                                    <i class="pe-7s-monitor icon-gradient bg-happy-itmeo">
                                    </i>
                                </div>
                                <div>Sərgilər
                                    <div class="page-title-subheading">
                                        Exhibitions / Выставки
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
                                            <h5 class="card-title">Sərgi əlavə etmək</h5>
                                            <hr>
                                            <form method="post" action="{{ route('exhibitions.store') }}" enctype="multipart/form-data">
                                            @csrf
                                                <div class="position-relative form-group"><label for="exhibition_url" class="">Sərgi URL qeyd edin</label><input name="exhibition_url" placeholder="məsələn: http://socar.az" id="exhibition_url" type="text" class="form-control" required=""></div>
                                                <div class="position-relative form-group"><label for="image_url" class="">Şəkil</label><input name="image_url" id="image_url" type="file" class="form-control-file" required=""/>
                                                    <small class="form-text text-muted">Sərginin üz şəklini dəyişmək</small>
                                                </div>
                                                <button type="submit" class="mt-1 btn btn-primary">Əlavə etmək</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body table-responsive"><h5 class="card-title">Əlavə edilən sərgilər</h5>
                                            <table class="mb-0 table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Sərgi</th>
                                                        <th>Düzəliş etmək</th>
                                                        <th>Silmək</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($exhibitions as $exhibition)
                                                    <tr>
                                                        <th scope="row">{{$exhibition->id}}</th>
                                                        <td>{{$exhibition->exhibition_url}}</td>
                                                        <td><a href="{{ route('exhibitions.edit',$exhibition->id)}}" class="btn btn-primary">Düzəliş</a></td>
                                                        <td>
                                                            <form action="{{ route('exhibitions.destroy', $exhibition->id)}}" method="post">
                                                              @csrf
                                                              @method('DELETE')
                                                              <button class="btn btn-danger" id="del_{{$exhibition->id}}" onclick= "return confirm('Bu sərgini silmək istəyirsiz?')" type="submit">Silmək</button>
                                                          </form>
                                                      </td>
                                                  </tr>
                                                  @endforeach
                                              </tbody>
                                          </table>
                                      </div>

                                  </div>
                                  <div class="d-flex justify-content-center">{{ $exhibitions->links() }}</div>
                                </div>
                          </div>
                      </div>
                  </div>
              </div>

              @include('admin_panel.layouts.footer')
              </html>