<div class="container">
    <div class="col-md-8 me-auto">

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" value="{{ $courier->name ?? old('name') }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" value="{{ $courier->email ?? old('email') }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Mobile</label>
            <input type="text" name="mobile" value="{{ $courier->mobile ?? old('mobile') }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Address</label>
            <textarea name="address" class="form-control" required>{{ $courier->address ?? old('address') }}</textarea>
        </div>

        <div class="mb-3">
            <label>Tracking URL</label>
            <input type="url" name="tracking_url" value="{{ $courier->tracking_url ?? old('tracking_url') }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Logo</label><br>
            @if(!empty($courier->logo))
                <img src="{{ asset($courier->logo) }}" width="80" class="mb-2"><br>
            @endif
            <input type="file" name="logo" class="form-control">
        </div>


    </div>
</div>
