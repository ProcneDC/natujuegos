@extends('base_site')
@section('title', 'Natujuegos')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{ __('Perfil') }}</div>
				<div class="row">
					<div class="col-lg-12 mt-3">
						@if (Auth::user()->avatar == null)
                              <div class="avatar-2">
                                <img src="/default/default_avatar.png" alt="">
                              </div>
                          @else
                              <div class="avatar-2">
                                @if (Auth::user()->avatar)
                            
                                  <img src="storage/{{Auth::user()->avatar}}" alt="">
                                @else
                                  <img src="/default/default_avatar.png" alt="">
                                @endif
                              </div>
                          @endif
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 text-center">
                      <h3>{{ Auth::user()->name }}</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 text-center">
                      <h6>Nivel 6</h6>
					</div>
				</div>
				<div class="row pb-5 pt-5">
					<div class="col-lg-12">
						<div class="progress">
							<div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-4">
						<div class="list-group" id="list-tab" role="tablist">
							<a class="list-group-item d-flex justify-content-between align-items-center list-group-item d-flex justify-content-between align-items-center-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
							<a class="list-group-item d-flex justify-content-between align-items-center list-group-item d-flex justify-content-between align-items-center-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
							<a class="list-group-item d-flex justify-content-between align-items-center list-group-item d-flex justify-content-between align-items-center-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
							<a class="list-group-item d-flex justify-content-between align-items-center list-group-item d-flex justify-content-between align-items-center-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
						</div>
					</div>
					<div class="col-8">
						<div class="tab-content" id="nav-tabContent">
							<div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
								<ul class="list-group list-group-flush">
									<li class="list-group-item d-flex justify-content-between align-items-center">Cras justo odio
										<span class="badge badge-primary badge-pill">14</span>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center">Dapibus ac facilisis in
										<span class="badge badge-primary badge-pill">14</span>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center">Morbi leo risus
										<span class="badge badge-primary badge-pill">14</span>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center">Porta ac consectetur ac
										<span class="badge badge-primary badge-pill">14</span>
									</li>
								</ul>
							</div>
							<div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
								<ul class="list-group list-group-flush">
									<li class="list-group-item d-flex justify-content-between align-items-center">Cras justo odio
										<span class="badge badge-primary badge-pill">14</span>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center">Dapibus ac facilisis in
										<span class="badge badge-primary badge-pill">14</span>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center">Morbi leo risus
										<span class="badge badge-primary badge-pill">14</span>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center">Vestibulum at eros
										<span class="badge badge-primary badge-pill">14</span>
									</li>
								</ul>
							</div>
							<div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
								<ul class="list-group list-group-flush">
									<li class="list-group-item d-flex justify-content-between align-items-center">Cras justo odio
										<span class="badge badge-primary badge-pill">14</span>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center">Morbi leo risus
										<span class="badge badge-primary badge-pill">14</span>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center">Porta ac consectetur ac
										<span class="badge badge-primary badge-pill">14</span>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center">Vestibulum at eros
										<span class="badge badge-primary badge-pill">14</span>
									</li>
								</ul>
							</div>
							<div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
								<ul class="list-group list-group-flush">
									<li class="list-group-item d-flex justify-content-between align-items-center d-flex justify-content-between align-items-center">Cras justo odio
										<span class="badge badge-primary badge-pill">14</span>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center">Morbi leo risus
										<span class="badge badge-primary badge-pill">14</span>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center">Porta ac consectetur ac
										<span class="badge badge-primary badge-pill">14</span>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center">Vestibulum at eros
										<span class="badge badge-primary badge-pill">14</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection