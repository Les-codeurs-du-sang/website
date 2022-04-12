@extends('layouts.app')

@section('content')
    <main class="main" id="top">

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pb-6">
                <div class="container">
                    <div class="row flex-center">
                        <div class="col-lg-6 col-md-5 order-md-1 text-lg-right  pl-5"><img class="img-fluid text-lg-right"  style="float: right; width=400px; height : 500px;";
                             src="{{asset('assets/img/illustrations/connexion-reussi.svg')}}" alt="" /></div>

                        <div class="col-md-7 col-lg-6 mt-5 text-center text-md-start">
                            <div class="contentBlood">
                                <h2 class="fw-medium" >Bonjour <span class="fw-bold">{{Auth::user()->name}}</span></h2>
                                <h2 class="fw-medium" >Bonjour <span class="fw-bold">{{Auth::user()->name}}</span></h2>
                            </div>
                            <br><br>
                            <p class="mt-3 mb-4">Pour donner votre sang, vous devez être en <strong class="pulsate"><span>bonne santé</span></strong> et peser au <strong class="pulsate"><span>minimum 50 kg</span></strong>.
                                Vous pouvez être exclu du don de sang en cas de contre-indications médicales, mais vous ne pouvez pas en être exclu en raison de votre orientation sexuelle.
                                </p>
                            <a class="btn btn-lg btn-danger hover-top btn-glow"
                                href="#condition">&darr; Les conditions &darr;</a>
                        </div>
                    </div>
                </div>
            <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section id="condition" class="pt-4 pt-md-6">

            <div class="container">
                <div class="row align-items-center">
                        <div class="col-md-5 col-lg-7 p-8 text-lg-center">
                            <div data-aos="fade-right" data-aos-offset="200" data-aos-duration="200">
                                <img class="img-fluid mb-5 mb-md-0" src="{{asset('assets/img/illustrations/undraw_terms_re_6ak4.svg')}}" alt="" />
                            </div>
                        </div>
                    <div class="col-md-7 col-lg-5 text-center text-md-start">
                        <div data-aos="fade-left">
                            <h2>Les conditions</h2>
                        </div>
                        <div data-aos="fade-left" data-aos-offset="200" data-aos-duration="200">
                            <p>Toutefois, il ne vous sera pas possible de faire un don du sang notamment si vous êtes dans l'une des situations suivantes :</p>
                        </div>
                        <div class="d-flex">
                            <div data-aos="zoom-in">
                                <svg class="bi bi-check-circle-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2FAB73" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                </svg>
                            </div>
                            <div data-aos="fade-left" data-aos-offset="200" data-aos-duration="200">
                                <p class="ms-2">Vous avez subi une transfusion et/ou une greffe au moins une fois dans votre vie.</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div data-aos="zoom-in">
                                <svg class="bi bi-check-circle-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2FAB73" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                </svg>
                            </div>
                            <div data-aos="fade-left" data-aos-offset="200" data-aos-duration="200">
                                <p class="ms-2">Vous avez séjourné au Royaume-Uni au minimum 1 an entre 1980 et 1996.</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div data-aos="zoom-in">
                                <svg class="bi bi-check-circle-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2FAB73" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                </svg>
                            </div>
                            <div data-aos="fade-left" data-aos-offset="200" data-aos-duration="200">
                                <p class="ms-2">Vous êtes infecté par une bactérie, un virus ou un parasite pouvant entraîner des maladies graves et/ou bénignes.</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div data-aos="zoom-in">
                                <svg class="bi bi-check-circle-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2FAB73" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                </svg>
                            </div>
                            <div data-aos="fade-left" data-aos-offset="200" data-aos-duration="200">
                                <p class="ms-2">Vous êtes atteint d'une ou plusieurs IST.</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div data-aos="zoom-in">
                                <svg class="bi bi-check-circle-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2FAB73" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                </svg>
                            </div>
                            <div data-aos="fade-left" data-aos-offset="200" data-aos-duration="200">
                                <p class="ms-2">Vous êtes enceinte.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->
    </main>
@endsection
