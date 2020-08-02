@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row"><h1>New Upload</h1></div>
                
                <!-- Image Registration Row -->
                <div class="form-group row">
                    <label for="image" class="col-md-4 col-form-label">{{ __("Post's Image") }}</label>
                    <input class="form-control-file" id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="image" autofocus>
    
                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <!-- Image Caption Registration Row -->
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">{{ __('Post Caption') }}</label>
                    <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" required autocomplete="caption" autofocus>

                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row">
                    <button class="btn btn-primary">Upload</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
