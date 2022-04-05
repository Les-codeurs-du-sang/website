@csrf
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Question</label>
    <input name="question" value="{{ old('question') ?? $question->question }}" type="text" class="form-control" aria-describedby="emailHelp" required>
    @error('question')
    <div class="alert alert-danger mt-2" role="alert">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Réponse</label>
    <textarea name="reponse" class="form-control" required>{{ old('question') ?? $question->reponse }}</textarea>
    @error('reponse')
    <div class="alert alert-danger mt-2" role="alert">
        {{ $message }}
    </div>
    @enderror
</div>
