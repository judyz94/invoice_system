<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="name" class="required">{{ __('Name') }}</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="{{ __('Type a name') }}"
                   value="{{ old('name', $permission->name) }}" required>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="slug" class="required">{{ __('Slug') }}</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" placeholder="{{ __('Type a slug') }}"
                   value="{{ old('slug', $permission->slug) }}" required>
            @error('slug')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="description">{{ __('Description') }}</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="{{ __('Type a description') }}"
                   value="{{ old('description', $permission->description) }}">
            @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>
