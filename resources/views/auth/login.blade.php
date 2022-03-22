@extends('layouts.app')
@section('content')
    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pb-6">

        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4"></h1>
                                </div>
                                <img class="img-center" src="assets/img/illustrations/a-3.png"/>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Log In</h1>
                                    </div>
                                    <x-jet-validation-errors class="mb-4" />

                                    @if (session('status'))
                                        <div class="mb-4 font-medium text-sm text-green-600">
                                            {{ session('status') }}
                                        </div>
                                    @endif

                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6 d-none d-lg-block text-center">
                                                <div class="form-group">
                                                    <x-jet-label for="email" value="{{ __('Email') }}" />
                                                    <br>
                                                    <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 d-none d-lg-block text-center">
                                                <div class="form-group">
                                                    <x-jet-label for="password" value="{{ __('Password') }}" />
                                                    <br>
                                                    <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <br>
                                                <hr>
                                                <x-jet-button class="btn btn-primary">
                                                    {{ __('Log in') }}
                                                </x-jet-button>
                                                <br>
                                                @if (Route::has('password.request'))
                                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                                        {{ __('Forgot your password?') }}
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->
@endsection
