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
                                <div>Mesajlar
                                    <div class="page-title-subheading">
                                        Messages / Сообщения
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
                                    <div class="card-body">
                                        <h5 class="card-title"><i>Mesaj:{{ $message->id }} - {{ $message->subject }}</i></h5> 
                                        <hr>
                                        <form method="post" action="{{ route('contact.update', 0) }}" enctype="multipart/form-data">
                                            @method('PATCH')
                                            @csrf
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab-eg8-0" role="tabpanel">
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-4 col-form-label"><b>Ad, soyad</b></label>
                                                        <div class="col-sm-12">{{ $message->full_name }}</div>
                                                    </div>
                                                    <hr>
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-4 col-form-label"><b>Movzu</b></label>
                                                        <div class="col-sm-12">{{ $message->subject }}</div>
                                                    </div>
                                                    <hr>
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-4 col-form-label"><b>Email</b></label>
                                                        <div class="col-sm-12">{{ $message->email }}</div>
                                                    </div>
                                                    <hr>
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-4 col-form-label"><b>Telefon</b></label>
                                                        <div class="col-sm-12">{{ $message->phone }}</div>
                                                    </div>
                                                    <hr>
                                                    <div class="position-relative row form-group">
                                                        <label class="col-sm-4 col-form-label"><b>Mesaj</b></label>
                                                        <div class="col-sm-12">{{ $message->content }}</div>
                                                    </div>
                                                </div>
                                            </div>
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