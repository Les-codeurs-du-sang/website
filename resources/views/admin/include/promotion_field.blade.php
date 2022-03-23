@csrf
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Titre</label>
    <input name="titre" value="{{ old('titre') ?? $promotion->titre }}" type="text" class="form-control" aria-describedby="emailHelp" required>
    @error('titre')
    <div class="alert alert-danger mt-2" role="alert">
        {{ $message }}
    </div>
    @enderror
</div>
