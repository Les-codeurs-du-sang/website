@extends('layouts.app')

@section('content')
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pb-6">

            <div class="container">
                <div class="row flex-center">
                    <div class="col-lg-6 col-md-5 order-md-1"><img class="img-fluid" src="assets/img/illustrations/1.svg" alt="" /></div>
                    <div class="col-md-7 col-lg-6 mt-5 text-center text-md-start">
                        <h1 class="fw-medium">Donnez votre <span class="fw-bold">sang!</span></h1>
                        <p class="mt-3 mb-4">Un don de sang est un processus par lequel un donneur de sang est volontaire pour se voir prélever du sang qui sera gardé dans une banque du sang avant de transfuser une personne malade lors d'une transfusion sanguine. Wikipédia</p>
                        <a class="btn btn-lg btn-danger hover-top btn-glow" href="{{ route('blood.create') }}">S'inscrire</a>
                    </div>
                </div>
            </div>
            <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-4">

            <div class="container">
                <div class="card py-5 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="border-end d-flex justify-content-md-center">
                                    <div class="mx-2 mx-md-0 me-md-5">
                                        <div class="badge badge-circle bg-soft-danger">
                                            <svg class="bi bi-person-fill ml-2 mt-2" width="24" height="24" fill="#F53838" viewBox="0 0 16 16">
                                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="fw-bolder text-1000 mb-0">1 562 086</p>
                                        <p class="mb-0">donneurs (2020)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="border-end d-flex justify-content-md-center">
                                    <div class="mx-2 mx-md-0 me-md-5">
                                        <div class="badge badge-circle bg-soft-danger">
                                            <svg class="bi bi-droplet-half ml-2 mt-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#F53838" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10c0 0 2.5 1.5 5 .5s5-.5 5-.5c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                                                <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="fw-bolder text-1000 mb-0">2 421 930</p>
                                        <p class="mb-0">poches de sang récoltées (2020)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-flex justify-content-md-center">
                                    <div class="mx-2 mx-md-0 me-md-5">
                                        <div class="badge badge-circle bg-soft-danger">
                                            <svg class="bi bi-hand-thumbs-up-fill ml-2 mt-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#F53838" viewBox="0 0 16 16">
                                                <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="fw-bolder text-1000 mb-0">Aucune</p>
                                        <p class="mb-0">poches n'a manqué à un patient (2020)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pt-4 pt-md-6">

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5 col-lg-7 p-8 text-lg-center"><img class="img-fluid mb-5 mb-md-0" src="{{ asset('assets/img/illustrations/hero.svg') }}" alt="" /></div>
                    <div class="col-md-7 col-lg-5 text-center text-md-start">
                        <h2>Pourquoi donner son sang ?</h2>
                        <p> Donner son sang, c'est sauver des vies.</p>
                        <div class="d-flex">
                            <svg class="bi bi-check-circle-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2FAB73" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                            </svg>
                            <p class="ms-2">Vos dons aident les personnes atteintes d’un cancer ou d’une maladie du sang !</p>
                        </div>
                        <div class="d-flex">
                            <svg class="bi bi-check-circle-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2FAB73" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                            </svg>
                            <p class="ms-2">Les dons de sangs permettent de soigner 1 million de personnes chaque année.</p>
                        </div>
                        <div class="d-flex">
                            <svg class="bi bi-check-circle-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2FAB73" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                            </svg>
                            <p class="ms-2">Donner son sang ne prend qu’1 heure, mais le service rendu est démultiplié.</p>
                        </div>
                        <div class="d-flex">
                            <svg class="bi bi-check-circle-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2FAB73" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                            </svg>
                            <p class="ms-2">Donner son sang réduit l’épaisseur du sang et l’aide ainsi à mieux circuler.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="bg-100 py-7 text-center">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-5">
                        <h2>Trouver un site de don du sang.</h2>
                        <p>Les sites de don du sang près de chez vous</p>
                    </div>
                    <iframe src="https://arcg.is/y5qze" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-7">

            <div class="container">
                <div class="row flex-center">
                    <div class="col-md-8 col-lg-5 text-center">
                        <h2>La réponse à vos questions</h2>
                        <p>Voici les réponses aux questions les plus posées</p>
                    </div>
                </div>
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                Question 1
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                Question 2
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                Question 3
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-5 z-index-1" style="margin-bottom: -10rem">

            <div class="container">
                <div class="card py-5 px-5 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="row flex-center">
                            <div class="col-12 col-lg-6 text-lg-start">
                                <h2>Je veux donner mon sang</h2>
                                <p class="mb-lg-0">Inscrivez-vous dès maintenant !</p>
                            </div>
                            <div class="col-12 col-lg-6 text-lg-end"><a class="btn btn-lg btn-danger hover-top btn-glow text-end" href="{{ route('blood.create') }}">S'inscrire</a></div>
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
