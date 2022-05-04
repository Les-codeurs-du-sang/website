@extends('layouts.app')

@section('content')
    <main class="main" id="top">
        <section class="pb-6">
            <div class="container">
                <form method="POST" action="{{ route("registerBlood") }}">
                    @csrf
                    <div class="mb-3 row">
                        <label for="journeeChoisie" class="col-sm-2 col-form-label">Journée choisie</label>
                        <select class="form-select" id="journeeChoisie" name="journeeChoisie" style="width: 350px" aria-label="Choississez une journée">
                            @foreach ($lesJournees as $journee)
                                <option value="{{ $journee->id }}">Journée du
                                    {{ \Carbon\Carbon::parse($journee->date)->format('d-m-Y') }} de
                                    {{ \Carbon\Carbon::parse($journee->heureDebut)->format('H:i') }} à
                                    {{ \Carbon\Carbon::parse($journee->heureFin)->format('H:i') }}</option>
                            @endforeach
                        </select>
                    </div>
                    <input id="idUser" name="idUser" type="hidden" value="{{ Auth::user()->id }}">
                    <button type="submit" class="btn btn-primary">S'inscrire !</button>
                </form>
            </div>
        </section>
    @endsection
