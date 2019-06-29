<div class="form-group {{ $classes ?? '' }}">
    <label class="form-control-label" for="input-{{ $name }}">
        {{ $label ?? '' }}
        @if(isset($isRequired) && $isRequired)
            <small class="text-danger">*</small>
        @endif
    </label>
    <input type="password" id="input-{{ $name }}" name="{{ $name }}" {{ isset($isRequired) && $isRequired ? 'required' : '' }}
        class="form-control form-control-alternative" placeholder="{{ $placeholder ?? '' }}">
    @error($name)
        <small class="form-text text-danger">{{ $message }}</small>
    @enderror                                        
</div>