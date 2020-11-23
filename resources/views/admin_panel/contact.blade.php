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
                                    <i class="pe-7s-call icon-gradient bg-happy-itmeo">
                                    </i>
                                </div>
                                <div>Əlaqə
                                    <div class="page-title-subheading">
                                        Contact / Контакты
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
                                    <div class="mb-3 card">
                                        <div class="card-header-tab card-header-tab-animation card-header">
                                            <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="header-icon lnr-gift icon-gradient bg-love-kiss"></i>Əlaqə</div>
                                            <ul class="nav">
                                                <li class="nav-item"><a data-toggle="tab" href="#tab-eg8-0" class="active nav-link">AZ</a></li>
                                                <li class="nav-item"><a data-toggle="tab" href="#tab-eg8-1" class="nav-link">RU</a></li>
                                                <li class="nav-item"><a data-toggle="tab" href="#tab-eg8-2" class="nav-link">EN</a></li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <form method="post" action="{{ route('contact.update', 0) }}" enctype="multipart/form-data">
                                                @method('PATCH')
                                                @csrf
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab-eg8-0" role="tabpanel">
                                                        <div class="position-relative row form-group"><label for="addressAz" class="col-sm-2 col-form-label">Ünvan</label>
                                                            <div class="col-sm-10"><textarea name="addressAz" id="addressAz" class="form-control">{{ $contacts->addressAz }}</textarea></div>
                                                        </div>
                                                        <div class="position-relative row form-group"><label for="phonesAz" class="col-sm-2 col-form-label">Telefon</label>
                                                            <div class="col-sm-10"><textarea name="phonesAz" id="phonesAz" class="form-control">{{ $contacts->phonesAz }}</textarea></div>
                                                        </div>
                                                        <div class="position-relative row form-group"><label for="emailAz" class="col-sm-2 col-form-label">E-mail</label>
                                                            <div class="col-sm-10"><textarea name="emailAz" id="emailAz" class="form-control">{{ $contacts->emailAz }}</textarea></div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="tab-eg8-1" role="tabpanel">
                                                        <div class="position-relative row form-group"><label for="addressRu" class="col-sm-2 col-form-label">Адрес</label>
                                                            <div class="col-sm-10"><textarea name="addressRu" id="addressRu" class="form-control">{{ $contacts->addressRu }}</textarea></div>
                                                        </div>
                                                        <div class="position-relative row form-group"><label for="phonesRu" class="col-sm-2 col-form-label">Телефон</label>
                                                            <div class="col-sm-10"><textarea name="phonesRu" id="phonesRu" class="form-control">{{ $contacts->phonesRu }}</textarea></div>
                                                        </div>
                                                        <div class="position-relative row form-group"><label for="emailRu" class="col-sm-2 col-form-label">Э-мейл</label>
                                                            <div class="col-sm-10"><textarea name="emailRu" id="emailRu" class="form-control">{{ $contacts->emailRu }}</textarea></div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="tab-eg8-2" role="tabpanel">
                                                        <div class="position-relative row form-group"><label for="addressEn" class="col-sm-2 col-form-label">Address</label>
                                                            <div class="col-sm-10"><textarea name="addressEn" id="addressEn" class="form-control">{{ $contacts->addressEn }}</textarea></div>
                                                        </div>
                                                        <div class="position-relative row form-group"><label for="phonesEn" class="col-sm-2 col-form-label">Phone</label>
                                                            <div class="col-sm-10"><textarea name="phonesEn" id="phonesEn" class="form-control">{{ $contacts->phonesEn }}</textarea></div>
                                                        </div>
                                                        <div class="position-relative row form-group"><label for="emailEn" class="col-sm-2 col-form-label">E-mail</label>
                                                            <div class="col-sm-10"><textarea name="emailEn" id="emailEn" class="form-control">{{ $contacts->emailEn }}</textarea></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <button onclick="return confirm('Dəyişiklikləri yadda saxlamaq istəyirsiz?');" type="submit" class="mt-1 btn btn-primary">Yadda saxlamaq</button>
                                            </form>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body table-responsive"><h5 class="card-title">Yeni mesajlar</h5>
                                            <table class="mb-0 table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Ad, soyad</th>
                                                        <th>Mövzu</th>
                                                        <th>Email</th>
                                                        <th>Telefon</th>
                                                        <th>Məzmun</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($messages as $message)
                                                        <tr>
                                                            <th scope="row">{{$message->id}}</th>
                                                            <td>{{$message->full_name}}</td>
                                                            <td>{{$message->subject}}</td>
                                                            <td>{{$message->email}}</td>
                                                            <td>{{$message->phone}}</td>
                                                            <td><a href="{{ route('contact.show',$message->id)}}" class="btn btn-primary">Oxumaq</a></td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">{{ $messages->links() }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @include('admin_panel.layouts.footer')
                </html>