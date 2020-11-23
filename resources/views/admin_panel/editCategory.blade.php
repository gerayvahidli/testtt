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
                                    <i class="pe-7s-albums icon-gradient bg-happy-itmeo">
                                    </i>
                                </div>
                                <div>Kateqoriyada dəyişiklik etmək 
                                    <div class="page-title-subheading">
                                        Editing the category / Редактировать категорию
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

                                    <div class="mb-3 card">
                                        <div class="card-header-tab card-header-tab-animation card-header"> 
                                            <h5 class="card-title mt-3">Kateqoriyada dəyişiklik etmək</h5>
                                            <ul class="nav">
                                                <li class="nav-item"><a data-toggle="tab" href="#tab-eg8-0" class="active nav-link">AZ</a></li>
                                                <li class="nav-item"><a data-toggle="tab" href="#tab-eg8-1" class="nav-link">RU</a></li>
                                                <li class="nav-item"><a data-toggle="tab" href="#tab-eg8-2" class="nav-link">EN</a></li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <form method="post" action="{{ route('categories.update', $category->id) }}" enctype="multipart/form-data">
                                                @method('PATCH') 
                                                @csrf
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab-eg8-0" role="tabpanel"><textarea name="category_az" id="category_az" class="form-control">{{ $category->categoryAz }}</textarea></div>
                                                    <div class="tab-pane" id="tab-eg8-1" role="tabpanel"><textarea name="category_ru" id="category_ru" class="form-control">{{ $category->categoryRu }}</textarea></div>
                                                    <div class="tab-pane" id="tab-eg8-2" role="tabpanel"><textarea name="category_en" id="category_en" class="form-control">{{ $category->categoryEn }}</textarea></div>
                                                </div>
                                                <br>
                                                <button type="submit" class="mt-1 btn btn-primary">Yadda saxlamaq</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body"><h5 class="card-title">Əlavə edilən kateqoriyalar</h5>
                                            <table class="mb-0 table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Kateqoriya</th>
                                                        <th>Düzəliş etmək</th>
                                                        <th>Silmək</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($categories as $category)
                                                    <tr>
                                                        <th scope="row">{{$category->id}}</th>
                                                        <td>{{$category->categoryAz}}</td>
                                                        <td><a href="{{ route('categories.edit',$category->id)}}" class="btn btn-primary">Düzəliş</a></td>
                                                        <td>
                                                            <form action="{{ route('categories.destroy', $category->id)}}" method="post">
                                                              @csrf
                                                              @method('DELETE')
                                                              <button class="btn btn-danger" id="del_{{$category->id}}" onclick= "return confirm('Bu kateqoriyanı silmək istəyirsiz?')" type="submit">Silmək</button>
                                                          </form>
                                                      </td>
                                                  </tr>
                                                  @endforeach
                                              </tbody>
                                          </table>
                                      </div>

                                  </div>
                                  <div class="d-flex justify-content-center">{{ $categories->links() }}</div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <script>
                
              </script>

              @include('admin_panel.layouts.footer')
              </html>