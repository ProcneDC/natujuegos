@extends('base_site')

@section('content')
      <script type="text/javascript">
        function submit() {
          document.getElementById('profile').submit();
        }
      </script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edición de perfil') }}</div>

                <div class="card-body">
                  <form method="POST" action="{{ route('profile') }}" enctype="multipart/form-data">
                        @csrf

                    <input type="number" name="user_id" value="{{$user->id}}" hidden>
                    <div class="form-group row">
                      <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                   
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif


                    <input id="name" class="form-input-text" type="text" name="name" value="{{old('name', $user->name)}}">
                    </div>

                    <div class="form-group row">
                      <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                   
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif

        
                    <input id="email" class="form-input-text" type="text" name="email" value="{{old('email', $user->email)}}">
                    </div>

                    <div class="form-group row">
                        <label for="avatar" class="col-md-4 col-form-label text-md-right">{{ __('avatar') }}</label>
                        @if (Auth::user()->avatar == null)
                              <div class="avatar">
                                <img src="/default/default_avatar.png" alt="">
                              </div>
                          @else
                              <div class="avatar">
                                @if (Auth::user()->avatar)
                            
                                  <img src="storage/{{Auth::user()->avatar}}" alt="">
                                @else
                                  <img src="/default/default_avatar.png" alt="">
                                @endif
                              </div>
                          @endif
                        <input form="profile" type="file" name="avatar" id="avatar" accept="image/*" onchange='submit()'>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Guardar') }}
                            </button>
                        </div>
                    </div>
                  </form>
                </div>
              </div>
          </div>
        </div>
      </div>
@endsection
