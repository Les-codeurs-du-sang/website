@csrf
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Prénom</label>
    <input name="name" value="{{ old('name') ?? $user->name }}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    @error('name')
    <div class="alert alert-danger mt-2" role="alert">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nom</label>
    <input name="lastname" value="{{ old('lastname') ?? $user->lastname }}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    @error('lastname')
    <div class="alert alert-danger mt-2" role="alert">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Promotions</label>
    <select name="promotion" class="form-select">
        @foreach($promotions as $promotion)
            <option value="{{ $promotion->id }}">{{ $promotion->titre }}</option>
        @endforeach
    </select>
    @error('promotion')
    <div class="alert alert-danger mt-2" role="alert">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mail</label>
    <input name="mail" value="{{ old('mail') ?? $user->email }}" type="email" class="form-control" id="exampleInputPassword1" required>
    @error('mail')
    <div class="alert alert-danger mt-2" role="alert">
        {{ $message }}
    </div>
    @enderror
</div>
