@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row"><h1>Profile Edit</h1></div>
                
                <!-- Profile Title Edit Row -->
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">{{ __('Title') }}</label>
                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user->profile->title }}" required autocomplete="title" autofocus>

                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Profile Description Edit Row -->
                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label">{{ __('Description') }}</label>
                    <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $user->profile->description }}" required autocomplete="description" autofocus>

                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Profile URL Edit Row -->
                <div class="form-group row">
                    <label for="url" class="col-md-4 col-form-label">{{ __('URL') }}</label>
                    <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') ?? $user->profile->url }}" required autocomplete="url" autofocus>

                    @error('url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Profile Image Edit Row -->
                <div class="form-group row">
                    <label for="image" class="col-md-4 col-form-label">{{ __("Profile's Image") }}</label>
                    <input class="form-control-file" id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" autocomplete="image" autofocus>
    
                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row">
                    <button class="btn btn-primary">Edit</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
