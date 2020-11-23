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
                                    <i class="pe-7s-bookmarks icon-gradient bg-happy-itmeo">
                                    </i>
                                </div>
                                <div>Jurnallar
                                    <div class="page-title-subheading">
                                        Journals / Журналы
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
                                        <div class="card-body">
                                            <h5 class="card-title">Jurnal əlavə etmək</h5>
                                            <hr>
                                            <form method="post" action="{{ route('journals.store') }}" enctype="multipart/form-data">
                                            @csrf
                                                <div class="position-relative form-group"><label for="year" class="">Ili qeyd edin</label><input name="year" id="year" placeholder="meselen: 2020" type="number" class="form-control" min="2000" max="2100" required=""></div>
                                                <div class="position-relative form-group"><label for="month" class="">Ayları seçin (bir neçə ay seçmək üçün CTRL düyməsini sıxın)</label><select multiple="multiple" name="month[]" id="month" class="form-control">
                                                    <option value="1">Yanvar</option>
                                                    <option value="2">Fevral</option>
                                                    <option value="3">Mart</option>
                                                    <option value="4">Aprel</option>
                                                    <option value="5">May</option>
                                                    <option value="6">Iyun</option>
                                                    <option value="7">Iyul</option>
                                                    <option value="8">Avqust</option>
                                                    <option value="9">Sentyabr</option>
                                                    <option value="10">Oktyabr</option>
                                                    <option value="11">Noyabr</option>
                                                    <option value="12">Dekabr</option>
                                                </select></div>
                                                <div class="position-relative form-group"><label for="cover_photo" class="">Şəkil</label><input name="cover_photo" id="cover_photo" type="file" class="form-control-file"/>
                                                    <small class="form-text text-muted">Jurnalın üz şəklini dəyişmək</small>
                                                </div>
                                                <div class="position-relative form-group"><label for="pdf_file" class="">PDF fayl</label><input name="pdf_file" id="pdf_file" type="file" class="form-control-file"/>
                                                    <small class="form-text text-muted">PDF faylı əlavə edin</small>
                                                </div>
                                                <button type="submit" class="mt-1 btn btn-primary">Yadda saxlamaq</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body table-responsive"><h5 class="card-title">Əlavə edilən jurnallar</h5>
                                            <table class="mb-0 table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Ay, İl</th>
                                                        <th>Düzəliş etmək</th>
                                                        <th>Silmək</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($journals as $journal)
                                                    <tr>
                                                        <th scope="row">{{$journal->id}}</th>
                                                        
                                                        <script>
                                                            var month = "{{ $journal->month }}";
                                                            var year = "{{ $journal->year }}";

                                                            month = month.replaceAll("[","");
                                                            month = month.replaceAll("]","");

                                                            month = month.replace("&quot;1&quot;", "Yanvar");
                                                            month = month.replace("&quot;2&quot;", "Fevral");
                                                            month = month.replace("&quot;3&quot;", "Mart");
                                                            month = month.replace("&quot;4&quot;", "Aprel");
                                                            month = month.replace("&quot;5&quot;", "May");
                                                            month = month.replace("&quot;6&quot;", "Iyun");
                                                            month = month.replace("&quot;7&quot;", "Iyul");
                                                            month = month.replace("&quot;8&quot;", "Avqust");
                                                            month = month.replace("&quot;9&quot;", "Sentyabr");
                                                            month = month.replace("&quot;10&quot;", "Oktyabr");
                                                            month = month.replace("&quot;11&quot;", "Noyabr");
                                                            month = month.replace("&quot;12&quot;", "Dekabr");

                                                            month = month.replaceAll(",", "-");
 
                                                            document.write("<td>"+month + ", " + year +"</td>");
                                                        </script>

                                                        <td><a href="{{ route('journals.edit',$journal->id)}}" class="btn btn-primary">Düzəliş</a></td>
                                                        <td>
                                                            <form action="{{ route('journals.destroy', $journal->id)}}" method="post">
                                                              @csrf
                                                              @method('DELETE')
                                                              <button class="btn btn-danger" onclick= "return confirm('Bu jurnalı silmək istəyirsiz?')" id="del_{{$journal->id}}" type="submit">Silmək</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>


                                    <div class="d-flex justify-content-center">{{ $journals->links() }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    
                </script>

                @include('admin_panel.layouts.footer')
                </html>