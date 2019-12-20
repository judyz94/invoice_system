<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label for="name">Full name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Type a full name" value="{{ old('name', $seller->name) }}">
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="document">ID</label>
            <input type="text" class="form-control" id="document" name="document" placeholder="Type a ID" value="{{ old('document', $seller->document) }}">
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="name@example.com" value="{{ old('email',  $seller->email) }}">
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Type a phone" value="{{ old('phone', $seller->phone) }}">
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="city_id">City</label>
            <select class="form-control" id="city_id" name="city_id">
                <option value="">Select a city</option>
                @foreach($cities as $city)
                    <option value="{{ $city->id }}" {{ old('city_id', $seller->city_id) == $city->id ? 'selected' : ''}}>{{ $city->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Type a address" value="{{ old('address', $seller->address) }}">
        </div>
    </div>
</div>
