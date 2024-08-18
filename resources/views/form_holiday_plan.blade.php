<div class="container-fluid color-label-auto">
    <div class="form-group row">
        <div class="col-sm-6">
            <label  for="title"><b>Title  <i class="fa-solid fa-file-lines"></i></b></label>
            <input type="text" class="form-control form-control-lg" placeholder="Enter the title of your holiday" name="title" value="{{ isset($ferias) ? $ferias->titulo : old('title') }}">
            {{-- @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror --}}
        </div>

        <div class="col-sm-6">
            <label for="location"><b>Location  <i class="fa-solid fa-map-location-dot"></i></b></label>
            <input type="text" placeholder="Enter the location of your vacation" class="form-control form-control-lg" name="location" value="{{ isset($ferias) ? $ferias->local_ferias : old('local_ferias') }}">
            {{-- @error('location')
                <div class="text-danger">{{ $message }}</div>
            @enderror --}}
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-3">
            <label for="date"><b>Date  <i class="fa-solid fa-plane-departure"></i></b></label>
            <input type="date" class="form-control form-control-lg" name="date" value="{{ isset($ferias) ? $ferias->date : old('date') }}">
            {{-- @error('date')
                <div class="text-danger">{{ $message }}</div>
            @enderror --}}
        </div>

        <div class="col-sm-9">
            <label for="participants"><b>Participants  <i class="fa-solid fa-map-location-dot"></i></b></label>
            <input type="text" placeholder="Enter the name of the participants (optional)" class="form-control form-control-lg" name="participants" value="{{ isset($ferias) ? $ferias->participants : old('participants') }}">
            {{-- @error('participants')
                <div class="text-danger">{{ $message }}</div>
            @enderror --}}
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-12">
            <label for="description"><b>Description <i class="fa-solid fa-comment-medical"></i></b></label>
            <textarea name="description" cols="30" rows="3" placeholder="Enter the holiday description" class="form-control form-control-lg" value="{{ isset($ferias) ? $ferias->description : old('description') }}"></textarea>
        </div>
    </div>

    <div class="form-group row button-save-cancel">
        <div class="col-sm-12" style="text-align: center">
            <button class="btn btn-lg " type="submit"><i class="fa-solid fa-check"></i> Save</button>
            <a href="{{ route('index') }}" class="btn btn-effect-ripple btn-lg"><i class="fa-solid fa-arrow-right"></i> Cancel</a>
        </div>
    </div>
</div>