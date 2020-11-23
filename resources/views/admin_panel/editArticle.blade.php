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
                                    <i class="pe-7s-news-paper icon-gradient bg-happy-itmeo">
                                    </i>
                                </div>
                                <script>
                                    function convertMonth(month){

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

                                        return month;
                                    }
                                </script>

                                <div>Məqalədə dəyişiklik - 

                                    <script>
                                        var journal_id = "{{ $article->journal_id }}"; 
                                    </script>
                                    @foreach($journals as $journal)

                                        <script>
                                            var month = "{{ $journal->month }}";
                                            var year = "{{ $journal->year }}";
                                            var id = "{{ $journal->id }}";

                                            month = convertMonth(month);

                                            if(id == journal_id){
                                                document.write(month + ", " + year);
                                            }
                                        </script>

                                    @endforeach


                                    <div class="page-title-subheading">
                                        Editing the article / Редактирование статьи
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

                    
                    <script>
                        // AZERBAIJANI
                        var newAuthorsCounterAz = 0;

                        $(document).on('click','.deleteAuthorAz', function() {
                            $(this).parent().remove();    
                            newAuthorsCounterAz--;
                        });
                        
                        function addNewAuthorAz(){
                            var newAuthorName = document.querySelector("#newAuthorNameAz").value;
                            var newAuthorDegreeId = document.querySelector("#newAuthorDegreeAz").value;
                            var newAuthorWorkplace = document.querySelector("#newAuthorWorkplaceAz").value;
                            var newAuthorEmail = document.querySelector("#newAuthorEmailAz").value;

                            var newAuthorDegree = "";

                            if(newAuthorDegreeId == "0"){
                                newAuthorDegree = "PhD";
                            }

                            if(newAuthorDegreeId == "1"){
                                newAuthorDegree = "MSc";
                            }

                            if(newAuthorDegreeId == "2"){
                                newAuthorDegree = "MPh";
                            }

                            if(newAuthorName == "") return 0; // if name is empty don't add
                            if(newAuthorsCounterAz >= 10) return 0; // limit to 10 authors

                            var addedAuthor = newAuthorName+ "(" + newAuthorDegree + "," + newAuthorWorkplace + "," + newAuthorEmail +")";
                            addedAuthor = addedAuthor.replace(",,",",");
                            addedAuthor = addedAuthor.replace(",)",")"); 
                            addedAuthor = addedAuthor.replace("(,","(");

                            $("#newAuthorsListAz").append("<li>"+ addedAuthor + "<span class='deleteAuthorAz btn btn-danger' style='float:right;'>silmək</span></li>");

                            newAuthorsCounterAz++;

                            document.querySelector("#newAuthorNameAz").value = "";
                            document.querySelector("#newAuthorDegreeAz").value = "";
                            document.querySelector("#newAuthorWorkplaceAz").value = "";
                            document.querySelector("#newAuthorEmailAz").value = "";
                        }

                        // RUSSIAN
                        var newAuthorsCounterRu = 0;

                        $(document).on('click','.deleteAuthorRu', function() {
                            $(this).parent().remove();    
                            newAuthorsCounterRu--;
                        });
                        
                        function addNewAuthorRu(){
                            var newAuthorName = document.querySelector("#newAuthorNameRu").value;
                            var newAuthorDegreeId = document.querySelector("#newAuthorDegreeRu").value;
                            var newAuthorWorkplace = document.querySelector("#newAuthorWorkplaceRu").value;
                            var newAuthorEmail = document.querySelector("#newAuthorEmailRu").value;

                            var newAuthorDegree = "";

                            if(newAuthorDegreeId == "0"){
                                newAuthorDegree = "PhD";
                            }

                            if(newAuthorDegreeId == "1"){
                                newAuthorDegree = "MSc";
                            }

                            if(newAuthorDegreeId == "2"){
                                newAuthorDegree = "MPh";
                            }

                            if(newAuthorName == "") return 0; // if name is empty don't add
                            if(newAuthorsCounterRu >= 10) return 0; // limit to 10 authors

                            var addedAuthor = newAuthorName+ "(" + newAuthorDegree + "," + newAuthorWorkplace + "," + newAuthorEmail +")";
                            addedAuthor = addedAuthor.replace(",,",",");
                            addedAuthor = addedAuthor.replace(",)",")"); 
                            addedAuthor = addedAuthor.replace("(,","(");

                            $("#newAuthorsListRu").append("<li>"+ addedAuthor + "<span class='deleteAuthorRu btn btn-danger' style='float:right;'>silmək</span></li>");

                            newAuthorsCounterRu++;

                            document.querySelector("#newAuthorNameRu").value = "";
                            document.querySelector("#newAuthorDegreeRu").value = "";
                            document.querySelector("#newAuthorWorkplaceRu").value = "";
                            document.querySelector("#newAuthorEmailRu").value = "";
                        }

                        // ENGLISH
                        var newAuthorsCounterEn = 0;

                        $(document).on('click','.deleteAuthorEn', function() {
                            $(this).parent().remove();    
                            newAuthorsCounterEn--;
                        });
                        
                        function addNewAuthorEn(){
                            var newAuthorName = document.querySelector("#newAuthorNameEn").value;
                            var newAuthorDegreeId = document.querySelector("#newAuthorDegreeEn").value;
                            var newAuthorWorkplace = document.querySelector("#newAuthorWorkplaceEn").value;
                            var newAuthorEmail = document.querySelector("#newAuthorEmailEn").value;

                            var newAuthorDegree = "";

                            if(newAuthorDegreeId == "0"){
                                newAuthorDegree = "PhD";
                            }

                            if(newAuthorDegreeId == "1"){
                                newAuthorDegree = "MSc";
                            }

                            if(newAuthorDegreeId == "2"){
                                newAuthorDegree = "MPh";
                            }

                            if(newAuthorName == "") return 0; // if name is empty don't add
                            if(newAuthorsCounterEn >= 10) return 0; // limit to 10 authors

                            var addedAuthor = newAuthorName+ "(" + newAuthorDegree + "," + newAuthorWorkplace + "," + newAuthorEmail +")";
                            addedAuthor = addedAuthor.replace(",,",",");
                            addedAuthor = addedAuthor.replace(",)",")"); 
                            addedAuthor = addedAuthor.replace("(,","(");

                            $("#newAuthorsListEn").append("<li>"+ addedAuthor + "<span class='deleteAuthorEn btn btn-danger' style='float:right;'>silmək</span></li>");
                            
                            newAuthorsCounterEn++;

                            document.querySelector("#newAuthorNameEn").value = "";
                            document.querySelector("#newAuthorDegreeEn").value = "";
                            document.querySelector("#newAuthorWorkplaceEn").value = "";
                            document.querySelector("#newAuthorEmailEn").value = "";
                        }
                    </script>

                <!-- ADD NEW INPUT -->
                <div class="tab-content">
                    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Məqalədə dəyişiklik etmək</h5><hr>
                                        <form method="post" action="{{ route('articles.update', $article->id) }}" enctype="multipart/form-data">
                                            @method('PATCH')
                                            @csrf

                                            <input type="hidden" name="abstractAz" value="{{ $article->abstractAz }}">
                                            <input type="hidden" name="abstractRu" value="{{ $article->abstractRu }}">
                                            <input type="hidden" name="abstractEn" value="{{ $article->abstractEn }}">
                                            <input type="hidden" name="referencesAz" value="{{ $article->referencesAz }}">
                                            <input type="hidden" name="referencesRu" value="{{ $article->referencesRu }}">
                                            <input type="hidden" name="referencesEn" value="{{ $article->referencesEn }}">

                                            <input type="hidden" id="authorsAz" name="authorsAz" value="{{ $article->authorsAz }}">
                                            <input type="hidden" id="authorsRu" name="authorsRu" value="{{ $article->authorsRu }}">
                                            <input type="hidden" id="authorsEn" name="authorsEn" value="{{ $article->authorsEn }}">

                                            <div class="position-relative form-group">
                                                <label for="journal_id" class="">Jurnalı seçin</label>
                                                <select type="select" id="journal_id" name="journal_id" class="custom-select">
                                                    <option value="">Seçilməyib</option>
                                                    <script>
                                                        var journal_id = "{{ $article->journal_id }}";
                                                        var category_id = "{{ $article->category_id }}";
                                                    </script>
                                                    @foreach($journals as $journal)

                                                        <script>
                                                            var month = "{{ $journal->month }}";
                                                            var year = "{{ $journal->year }}";
                                                            var id = "{{ $journal->id }}";

                                                            month = convertMonth(month);

                                                            if(id == journal_id){
                                                                document.write("<option value='"+id+"' selected>"+month + ", " + year +"</option>");
                                                            }else{
                                                                document.write("<option value='"+id+"'>"+month + ", " + year +"</option>");
                                                            }
                                                        </script>

                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="position-relative form-group"><label for="page_num" class="">Səhifələr</label><input name="page_num" id="page_num" placeholder="meselen: 57-59" type="text" class="form-control" required="" value="{{ $article->page_num }}"></div>
                                            <div class="position-relative form-group"><label for="UOT_code" class="">UOT Code</label><input name="UOT_code" id="UOT_code" placeholder="meselen: 12.34.567.890" type="text" class="form-control" required="" value="{{ $article->UOT_code }}"></div>
                                            <div class="position-relative form-group"><label for="DOI_code" class="">DOI Code</label><input name="DOI_code" id="DOI_code" placeholder="meselen: 10.24887/0028-2448-2020-7-16-20" type="text" class="form-control" required="" value="{{ $article->DOI_code }}"></div>
                                            <div class="position-relative form-group">
                                                <label for="category_id" class="">Kateqoriyanı seçin</label>
                                                <select type="select" id="category_id" name="category_id" class="custom-select">
                                                    <option value="">Seçilməyib</option>
                                                    @foreach($categories as $category)

                                                        <script>
                                                            var id = "{{ $category->id }}";

                                                            if(id == category_id){
                                                                document.write("<option value='"+id+"' selected>{{ $category->categoryAz }}</option>");
                                                            }else{
                                                                document.write("<option value='"+id+"'>{{ $category->categoryAz }}</option>");
                                                            }
                                                        </script>

                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="card-header-tab card-header-tab-animation card-header"> 
                                                <ul class="nav">
                                                    <li class="nav-item"><a data-toggle="tab" href="#tab-eg8-0" class="active nav-link">AZ</a></li>
                                                    <li class="nav-item"><a data-toggle="tab" href="#tab-eg8-1" class="nav-link">RU</a></li>
                                                    <li class="nav-item"><a data-toggle="tab" href="#tab-eg8-2" class="nav-link">EN</a></li>
                                                </ul>
                                            </div><br>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab-eg8-0" role="tabpanel">
                                                    <div class="position-relative form-group" style="font-size: 1.3em;">
                                                        <label>Müəlliflər</label>
                                                        <ul id="newAuthorsListAz" style="line-height: 2.3em; margin-bottom: 1rem;">
                                                            @if(isset($authorsAz))
                                                            @foreach($authorsAz as $author)
                                                            <li>{{ $author }}<span class='deleteAuthorAz btn btn-danger' style='float:right;'>silmək</span></li>
                                                            @endforeach
                                                            @endif
                                                        </ul>
                                                    </div>
                                                    <hr>
                                                    <div style="padding: 1em;background-color: wheat;">
                                                        <h4>Müəllif əlavə etmək</h4>
                                                        <div class="position-relative form-group"><label for="newAuthorNameAz" class="">Müəllifin adı</label>
                                                            <input id="newAuthorNameAz" type="text" class="form-control">
                                                        </div>
                                                        <div class="position-relative form-group">
                                                            <label for="newAuthorDegreeAz" class="">Elmi dərəcəni seçin</label>
                                                            <select type="select" id="newAuthorDegreeAz" class="custom-select">
                                                                <option value="">Seçilməyib</option>
                                                                <option value="0">Ph.D.</option>
                                                                <option value="1">M.Sc.</option>
                                                                <option value="2">M.Ph.</option>
                                                            </select>
                                                        </div>
                                                        <div class="position-relative form-group"><label for="newAuthorWorkplaceAz" class="">İş yeri</label>
                                                            <input id="newAuthorWorkplaceAz" type="text" class="form-control">
                                                        </div>
                                                        <div class="position-relative form-group"><label for="newAuthorEmailAz" class="">Email</label>
                                                            <input id="newAuthorEmailAz" type="text" class="form-control">
                                                        </div> 
                                                        <input type="button" value="Müəllif əlavə etmək" class="mt-1 btn btn-primary" onclick="addNewAuthorAz()">
                                                    </div>
                                                    <hr>

                                                    <div class="position-relative form-group"><label for="titleAz" class="">Məqalənin başlığı</label><input name="titleAz" id="titleAz" value="{{ $article->titleAz }}" type="text" class="form-control" required=""></div>
                                                    <div class="position-relative form-group"><label for="keywordsAz" class="">Açar sözlər</label><input name="keywordsAz" id="keywordsAz" placeholder="meselen: temperatur, hövzə, çöküntü örtüyü" value="{{ $article->keywordsAz }}" type="text" class="form-control" required=""></div>

                                                    <div class="position-relative form-group"><label for="title" class="">Qısa xülasə</label>
                                                        <div class="centered">
                                                            <div id="editor1"> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="position-relative form-group"><label for="title" class="">Ədəbiyyat siyahısı</label>
                                                        <div class="centered">
                                                            <div id="editor2">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane" id="tab-eg8-1" role="tabpanel">
                                                    <div class="position-relative form-group" style="font-size: 1.3em;">
                                                        <label>Авторы</label>
                                                        <ul id="newAuthorsListRu" style="line-height: 2.3em; margin-bottom: 1rem;">
                                                            @if(isset($authorsRu))
                                                            @foreach($authorsRu as $author)
                                                            <li>{{ $author }}<span class='deleteAuthorRu btn btn-danger' style='float:right;'>удалить</span></li>
                                                            @endforeach
                                                            @endif
                                                        </ul>
                                                    </div>
                                                    <hr>
                                                    <div style="padding: 1em;background-color: wheat;">
                                                        <h4>Добавить автора</h4>
                                                        <div class="position-relative form-group"><label for="newAuthorNameRu" class="">Имя автора</label>
                                                            <input id="newAuthorNameRu" type="text" class="form-control">
                                                        </div>
                                                        <div class="position-relative form-group">
                                                            <label for="newAuthorDegreeRu" class="">Выберите научную степень</label>
                                                            <select type="select" id="newAuthorDegreeRu" class="custom-select">
                                                                <option value="">Не выбрано</option>
                                                                <option value="0">Ph.D.</option>
                                                                <option value="1">M.Sc.</option>
                                                                <option value="2">M.Ph.</option>
                                                            </select>
                                                        </div>
                                                        <div class="position-relative form-group"><label for="newAuthorWorkplaceRu" class="">Место работы</label>
                                                            <input id="newAuthorWorkplaceRu" type="text" class="form-control">
                                                        </div>
                                                        <div class="position-relative form-group"><label for="newAuthorEmailRu" class="">Email</label>
                                                            <input id="newAuthorEmailRu" type="text" class="form-control">
                                                        </div> 
                                                        <input type="button" value="Добавить автора" class="mt-1 btn btn-primary" onclick="addNewAuthorRu()">
                                                    </div>
                                                    <hr>

                                                    <div class="position-relative form-group"><label for="titleRu" class="">Заголовок статьи</label><input name="titleRu" id="titleRu" value="{{ $article->titleRu }}" type="text" class="form-control" required=""></div>
                                                    <div class="position-relative form-group"><label for="keywordsRu" class="">Ключевые слова</label><input name="keywordsRu" id="keywordsRu" placeholder="например: а, б, в" value="{{ $article->keywordsRu }}" type="text" class="form-control" required=""></div>

                                                    <div class="position-relative form-group"><label for="title" class="">Краткое содержание</label>
                                                        <div class="centered">
                                                            <div id="editor3">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="position-relative form-group"><label for="title" class="">Список литературы</label>
                                                        <div class="centered">
                                                            <div id="editor4">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane" id="tab-eg8-2" role="tabpanel">
                                                    <div class="position-relative form-group" style="font-size: 1.3em;">
                                                        <label>Authors</label>
                                                        <ul id="newAuthorsListEn" style="line-height: 2.3em; margin-bottom: 1rem;">
                                                            @if(isset($authorsEn))
                                                            @foreach($authorsEn as $author)
                                                            <li>{{ $author }}<span class='deleteAuthorEn btn btn-danger' style='float:right;'>delete</span></li>
                                                            @endforeach
                                                            @endif
                                                        </ul>
                                                    </div>
                                                    <hr>
                                                    <div style="padding: 1em;background-color: wheat;">
                                                        <h4>Add an author</h4>
                                                        <div class="position-relative form-group"><label for="newAuthorNameEn" class="">Author's name</label>
                                                            <input id="newAuthorNameEn" type="text" class="form-control">
                                                        </div>
                                                        <div class="position-relative form-group">
                                                            <label for="newAuthorDegreeEn" class="">Select the degree</label>
                                                            <select type="select" id="newAuthorDegreeEn" class="custom-select">
                                                                <option value="">Not selected</option>
                                                                <option value="0">Ph.D.</option>
                                                                <option value="1">M.Sc.</option>
                                                                <option value="2">M.Ph.</option>
                                                            </select>
                                                        </div>
                                                        <div class="position-relative form-group"><label for="newAuthorWorkplaceEn" class="">Workplace</label>
                                                            <input id="newAuthorWorkplaceEn" type="text" class="form-control">
                                                        </div>
                                                        <div class="position-relative form-group"><label for="newAuthorEmailEn" class="">Email</label>
                                                            <input id="newAuthorEmailEn" type="text" class="form-control">
                                                        </div> 
                                                        <input type="button" value="Add an author" class="mt-1 btn btn-primary" onclick="addNewAuthorEn()">
                                                    </div>
                                                    <hr>

                                                    <div class="position-relative form-group"><label for="titleEn" class="">Article title</label><input name="titleEn" id="titleEn" value="{{ $article->titleEn }}" type="text" class="form-control" required=""></div>
                                                    <div class="position-relative form-group"><label for="keywordsEn" class="">Keywords</label><input name="keywordsEn" id="keywordsEn" placeholder="for example: a,b,c" value="{{ $article->keywordsEn }}" type="text" class="form-control" required=""></div>

                                                    <div class="position-relative form-group"><label for="title" class="">Abstract</label>
                                                        <div class="centered">
                                                            <div id="editor5">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="position-relative form-group"><label for="title" class="">References list</label>
                                                        <div class="centered">
                                                            <div id="editor6">

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div> 

                                            <script>

                                                    // AZERBAIJANI

                                                    var authorsArrayAz = new Array(); 

                                                    $('#newAuthorsListAz').bind('DOMSubtreeModified', function(){
                                                        var count = document.querySelector("#newAuthorsListAz").childElementCount;
                                                        authorsArrayAz = [];

                                                        for(var i = 0; i < count; i++){

                                                            var temp = document.querySelector("#newAuthorsListAz").children[i].innerHTML;
                                                            temp = temp.substring(0,temp.indexOf("<span"));
                                                            console.log(temp);
                                                            authorsArrayAz.push(temp)
                                                        }
                                                        $('input:hidden[id=authorsAz]').val(JSON.stringify(authorsArrayAz));
                                                    });
                                                    
                                                    // RUSSIAN
                                                    
                                                    var authorsArrayRu = new Array(); 

                                                    $('#newAuthorsListRu').bind('DOMSubtreeModified', function(){
                                                        var count = document.querySelector("#newAuthorsListRu").childElementCount;
                                                        authorsArrayRu = [];

                                                        for(var i = 0; i < count; i++){

                                                            var temp = document.querySelector("#newAuthorsListRu").children[i].innerHTML;
                                                            temp = temp.substring(0,temp.indexOf("<span"));
                                                            console.log(temp);
                                                            authorsArrayRu.push(temp)
                                                        }
                                                        $('input:hidden[id=authorsRu]').val(JSON.stringify(authorsArrayRu));
                                                    });

                                                    // ENGLISH
                                                    
                                                    var authorsArrayEn = new Array(); 

                                                    $('#newAuthorsListEn').bind('DOMSubtreeModified', function(){
                                                        var count = document.querySelector("#newAuthorsListEn").childElementCount;
                                                        authorsArrayEn = [];

                                                        for(var i = 0; i < count; i++){

                                                            var temp = document.querySelector("#newAuthorsListEn").children[i].innerHTML;
                                                            temp = temp.substring(0,temp.indexOf("<span"));
                                                            console.log(temp);
                                                            authorsArrayEn.push(temp)
                                                        }
                                                        $('input:hidden[id=authorsEn]').val(JSON.stringify(authorsArrayEn));
                                                    });

                                                </script>

                                                <script> 

                                                    function htmlDecode(input){
                                                      var e = document.createElement('textarea');
                                                      e.innerHTML = input;
                                                      // handle case of empty input
                                                      return e.childNodes.length === 0 ? "" : e.childNodes[0].nodeValue;
                                                    }
 

                                                    var abstractAz = CKEDITOR.replace('editor1', {
                                                            filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
                                                            filebrowserUploadMethod: 'form'
                                                        });

                                                    var abstractRu = CKEDITOR.replace('editor2', {
                                                            filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
                                                            filebrowserUploadMethod: 'form'
                                                        });

                                                    var abstractEn = CKEDITOR.replace('editor3', {
                                                            filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
                                                            filebrowserUploadMethod: 'form'
                                                        });

                                                    var referencesAz = CKEDITOR.replace('editor4', {
                                                            filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
                                                            filebrowserUploadMethod: 'form'
                                                        });

                                                    var referencesRu = CKEDITOR.replace('editor5', {
                                                            filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
                                                            filebrowserUploadMethod: 'form'
                                                        });

                                                    var referencesEn = CKEDITOR.replace('editor6', {
                                                            filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
                                                            filebrowserUploadMethod: 'form'
                                                        });

                                                    var temp = htmlDecode(`{{ $article->abstractAz }}`);

                                                    $( document ).ready(function() {
                                                        CKEDITOR.instances.editor1.setData(htmlDecode(`{{ $article->abstractAz }}`));
                                                        CKEDITOR.instances.editor2.setData(htmlDecode(`{{ $article->abstractRu }}`));
                                                        CKEDITOR.instances.editor3.setData(htmlDecode(`{{ $article->abstractEn }}`));
                                                        CKEDITOR.instances.editor4.setData(htmlDecode(`{{ $article->referencesAz }}`));
                                                        CKEDITOR.instances.editor5.setData(htmlDecode(`{{ $article->referencesRu }}`));
                                                        CKEDITOR.instances.editor6.setData(htmlDecode(`{{ $article->referencesEn }}`));
 
                                                    });



                                                    abstractAz.on( 'change', function( evt ) {
                                                        document.getElementsByName("abstractAz")[0].value = evt.editor.getData();
                                                    });

                                                    abstractRu.on( 'change', function( evt ) {
                                                        document.getElementsByName("abstractRu")[0].value = evt.editor.getData();
                                                    });

                                                    abstractEn.on( 'change', function( evt ) {
                                                        document.getElementsByName("abstractEn")[0].value = evt.editor.getData();
                                                    });

                                                    referencesAz.on( 'change', function( evt ) {
                                                        document.getElementsByName("referencesAz")[0].value = evt.editor.getData();
                                                    });

                                                    referencesRu.on( 'change', function( evt ) {
                                                        document.getElementsByName("referencesRu")[0].value = evt.editor.getData();
                                                    });

                                                    referencesEn.on( 'change', function( evt ) {
                                                        document.getElementsByName("referencesEn")[0].value = evt.editor.getData();
                                                    });
                                                    
                                                </script>

                                            <button class="mt-1 btn btn-primary">Yadda saxlamaq</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body table-responsive"><h5 class="card-title">Əlavə edilən məqalələr</h5>
                                            <table class="mb-0 table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Jurnal</th>
                                                        <th>Səhifələr</th>
                                                        <th>UOT code</th>
                                                        <th>Düzəliş etmək</th>
                                                        <th>Silmək</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($articles as $article)
                                                    <tr>
                                                        <th scope="row">{{$article->id}}</th>
                                                        <td>{{$article->journal_id}}</td> 
                                                        <td>{{$article->page_num}}</td> 
                                                        <td>{{$article->UOT_code}}</td> 
                                                        <td><a href="{{ route('articles.edit',$article->id)}}" class="btn btn-primary">Düzəliş</a></td>
                                                        <td>
                                                            <form action="{{ route('articles.destroy', $article->id)}}" method="post">
                                                              @csrf
                                                              @method('DELETE')
                                                              <button class="btn btn-danger" id="del_{{$article->id}}" type="submit">Silmək</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">{{ $articles->links() }}</div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>

            </script>

            @include('admin_panel.layouts.footer')
            </html>