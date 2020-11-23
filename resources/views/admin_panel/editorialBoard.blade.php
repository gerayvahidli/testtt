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
									<i class="pe-7s-id icon-gradient bg-happy-itmeo">
									</i>
								</div>
								<div>Redaksiya heyəti
									<div class="page-title-subheading">
										Editorial board / Редакционная коллегия
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
											<div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="header-icon lnr-gift icon-gradient bg-love-kiss"></i>Redaksiya heyəti üzvü əlavə etmək</div>
											<ul class="nav">
												<li class="nav-item"><a data-toggle="tab" href="#tab-eg8-0" class="active nav-link">AZ</a></li>
												<li class="nav-item"><a data-toggle="tab" href="#tab-eg8-1" class="nav-link">RU</a></li>
												<li class="nav-item"><a data-toggle="tab" href="#tab-eg8-2" class="nav-link">EN</a></li>
											</ul>
										</div>
										<div class="card-body">
											<form method="post" action="{{ route('editorialBoard.store') }}" enctype="multipart/form-data">
												@csrf
												<div class="position-relative form-group"><label for="editor_photo" class="">Şəkil</label><input name="editor_photo" id="editor_photo" type="file" class="form-control-file"/>
													<small class="form-text text-muted">Redaksiya üzvü şəklini əlavə edin</small>
												</div>
												<div class="tab-content">
													<div class="tab-pane active" id="tab-eg8-0" role="tabpanel">
														<div class="position-relative form-group"><label for="nameAz" class="">Ad, soyad</label><input name="nameAz" id="nameAz" placeholder="İ.S.Quliyev" type="text" class="form-control" required=""></div>
														<div class="position-relative form-group"><label for="titleAz" class="">Vəzifə</label><input name="titleAz" id="titleAz" placeholder="Baş redaktor" type="text" class="form-control" required=""></div>
													</div>
													<div class="tab-pane" id="tab-eg8-1" role="tabpanel">
														<div class="position-relative form-group"><label for="nameRu" class="">Полное имя</label><input name="nameRu" id="nameRu" placeholder="И.С.Гулиев" type="text" class="form-control" required=""></div>
														<div class="position-relative form-group"><label for="titleRu" class="">Должность</label><input name="titleRu" id="titleRu" placeholder="Главный редактор" type="text" class="form-control" required=""></div>
													</div>
													<div class="tab-pane" id="tab-eg8-2" role="tabpanel">
														<div class="position-relative form-group"><label for="nameEn" class="">Name</label><input name="nameEn" id="nameEn" placeholder="I.S.Quliyev" type="text" class="form-control" required=""></div>
														<div class="position-relative form-group"><label for="titleEn" class="">Title</label><input name="titleEn" id="titleEn" placeholder="Editor-in-chief" type="text" class="form-control" required=""></div>
													</div>
												</div>
												<br>
												<button type="submit" class="mt-1 btn btn-primary">Əlavə etmək</button>
											</form>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="main-card mb-3 card">
										<div class="card-body table-responsive"><h5 class="card-title">Əlavə edilən redaksiya üzvləri</h5>
											<table class="mb-0 table table-hover">
												<thead>
													<tr>
														<th>#</th>
														<th>Ad, soyad</th>
														<th>Vəzifə</th>
														<th>Düzəliş etmək</th>
														<th>Silmək</th>
													</tr>
												</thead>
												<tbody>
													@foreach($editorialBoard as $editor)
													<tr>
														<th scope="row">{{$editor->id}}</th>
														<th scope="row">{{$editor->nameAz}}</th>
														<th scope="row">{{$editor->titleAz}}</th>
														<td><a href="{{ route('editorialBoard.edit',$editor->id)}}" class="btn btn-primary">Düzəliş</a></td>
														<td>
															<form action="{{ route('editorialBoard.destroy', $editor->id)}}" method="post">
																@csrf
																@method('DELETE')
																<button class="btn btn-danger" onclick= "return confirm('Bu üzvü silmək istəyirsiz?')" id="del_{{$editor->id}}" type="submit">Silmək</button>
															</form>
														</td>
													</tr>
													@endforeach
												</tbody>
											</table>
										</div>

									</div>


									<div class="d-flex justify-content-center">{{ $editorialBoard->links() }}</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<script>

				</script>

				@include('admin_panel.layouts.footer')
				</html>