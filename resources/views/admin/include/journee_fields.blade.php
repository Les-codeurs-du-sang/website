@csrf
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Date</label>
    <input name="date" type="date" class="form-control" aria-describedby="emailHelp" value="{{ old('date') ?? $journee->date }}" required>
    @error('date')
    <div class="alert alert-danger mt-2" role="alert">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Heure de début</label>
    <input type="time" name="heureDebut" class="form-control" value="{{ old('heureDebut') ?? $journee->heureDebut }}" required />
    @error('heureDebut')
    <div class="alert alert-danger mt-2" role="alert">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Heure de fin</label>
    <input type="time" name="heureFin" class="form-control" value="{{ old('heureFin') ?? $journee->heureFin }}" required />
    @error('heureFin')
    <div class="alert alert-danger mt-2" role="alert">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Type de don</label>
    <select name="typeDon" class="form-control" required>
        <option value="1">Sang</option>
        <option value="0">Mouelle osseuse</option>
    </select>
    @error('typeDon')
    <div class="alert alert-danger mt-2" role="alert">
        {{ $message }}
    </div>
    @enderror
</div>
