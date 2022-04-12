
@extends('layouts.app')

@section('content')
    <main class="main" id="top">


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pb-6">

            <div class="container">
                <div class="row flex-center">
                    <div class="col-lg-6 col-md-5 order-md-1 text-center text-md-end">
                        <div class="contentBoneMarrow">
                            <h2 class="fw-medium">Donnez votre moelle osseuse</h2>
                            <h2 class="fw-medium">Donnez votre moelle osseuse</h2>
                        </div>
                        <br><br>
                        <p class="mt-3 mb-4">Venez en aide à toutes ces personnes qui se doivent de souffrir dans l'attente que des gens comme vous leur viennent en aide.</p>
                        <a class="btn btn-lg btn-warning top btn-glow" href="#about">En savoir plus</a>
                    </div>
                    <div class="col-md-7 col-lg-6 mt-5 "><img class="img-fluid" src="{{ asset('assets/img/illustrations/3.svg') }}" alt="" /></div>
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
                                        <div class="badge badge-circle bg-soft-warning">
                                            <svg class="bi bi-person-fill ml-2 mt-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#F9A826" viewBox="0 0 16 16">
                                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="fw-bolder text-1000 mb-0">1 chance sur 1 000 000</p>
                                        <p class="mb-0">de trouver un donneur compatible </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="border-end d-flex justify-content-md-center">
                                    <div class="mx-2 mx-md-0 me-md-5">
                                        <div class="badge badge-circle bg-soft-warning">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#F9A826" class="bi bi-activity ml-2 mt-2" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M6 2a.5.5 0 0 1 .47.33L10 12.036l1.53-4.208A.5.5 0 0 1 12 7.5h3.5a.5.5 0 0 1 0 1h-3.15l-1.88 5.17a.5.5 0 0 1-.94 0L6 3.964 4.47 8.171A.5.5 0 0 1 4 8.5H.5a.5.5 0 0 1 0-1h3.15l1.88-5.17A.5.5 0 0 1 6 2Z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="fw-bolder text-1000 mb-0">2000 </p>
                                        <p class="mb-0">personnes en attente d'un don chaque année</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-flex justify-content-md-center">
                                    <div class="mx-2 mx-md-0 me-md-5">
                                        <div class="badge badge-circle bg-soft-warning">
                                            <svg class="bi bi-person-fill ml-2 mt-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#F9A826" viewBox="0 0 16 16">
                                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="fw-bolder text-1000 mb-0">17 103 </p>
                                        <p class="mb-0">nouveaux donneurs inscrits en 2019 </p>
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


        <!-- Pour qui ? -->
        <section id="about" class="pt-4 pt-md-6">

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5 col-lg-7 text-lg-center px-10">
                        <div data-aos="fade-right">
                            <img class="img-fluid mb-5 mb-md-0" width="450px" src="{{ asset('assets/img/illustrations/injured.svg') }}" alt="" />
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-5 text-center text-md-start">
                        <div data-aos="fade-left">
                            <h2>Qui à besoin d'un don ?</h2>
                        </div>
                        <div data-aos="fade-left">
                            <p>De nombreuses personnes qui ont une maladie grave du sang.</p>
                        </div>
                        <div class="d-flex">
                            <div data-aos="fade-left">
                                <p>Cela représente des milliers d’enfants et d’adultes, en France comme à l’étranger. De quelles maladies parle-t-on ? On pense aux leucémies bien sûr. Mais cela peut aussi soigner des aplasies médullaires, des maladies métaboliques ou génétiques (déficit immunitaire, adrénoleucodystrophie…). Et bien d’autres encore. Autant de maladies dont l’origine est un dysfonctionnement de la moelle osseuse.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-4 pt-md-6 bg-100">

            <div class="container">
                <div class="row align-items-center pt-5">
                    <div class="col-md-7 col-lg-5 text-right text-md-end">
                        <div data-aos="fade-right">
                            <h2>Le prélèvement de moelle osseuse, comment ça marche ?</h2>
                        </div>
                        <div data-aos="fade-right">
                            <p>Il existe 2 méthodes pour le prélèvement de moelle osseuse.</p>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div data-aos="fade-right">
                                <p class="mr-2">Soit on prélève dans le sang : on parle de cytaphérèse*</p>
                            </div>
                            <div data-aos="zoom-in">
                                <svg class="bi bi-check-circle-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2FAB73" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div data-aos="fade-right">
                                <p class="mr-2">Soit on prélève par ponction dans les os postérieurs du bassin</p>
                            </div>
                            <div data-aos="zoom-in">
                                <svg class="bi bi-check-circle-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2FAB73" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                </svg>
                            </div>
                        </div>
                        <div data-aos="fade-right">
                            <p>Dans 80% des cas, le don de cellules de la moelle osseuse se fait par prélèvement sanguin.</p>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-7 text-lg-center px-10">
                        <div data-aos="fade-left">
                             <img class="img-fluid my-5 mb-md-0" width="600px" src="{{ asset('assets/img/illustrations/medical_research.svg') }}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pt-4 pt-md-6">

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5 col-lg-7 text-lg-center">
                        <div data-aos="fade-right">
                            <img class="img-fluid mb-md-0 m-lg-auto" width="450px" src="{{ asset('assets/img/illustrations/diary.svg') }}" alt="" />
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-5 text-center text-md-start">
                        <div data-aos="fade-left">
                            <h2>Qui peut être donneur ?</h2>
                        </div>
                        <div data-aos="fade-left">
                            <p>Si vous cochez ces 3 cases, le registre national des donneurs de moelle osseuse vous attend !</p>
                        </div>
                        <div class="d-flex">
                            <div data-aos="zoom-in">
                                <svg class="bi bi-check-circle-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2FAB73" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                </svg>
                            </div>
                            <div data-aos="fade-left">
                                <p class="ms-2">Avoir entre 18 et 35 ans au moment de l’inscription</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div data-aos="zoom-in">
                                <svg class="bi bi-check-circle-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2FAB73" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                </svg>
                            </div>
                            <div data-aos="fade-left">
                                <p class="ms-2">Être en parfaite santé</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div data-aos="zoom-in">
                                <svg class="bi bi-check-circle-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2FAB73" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                </svg>
                            </div>
                            <div data-aos="fade-left">
                                <p class="ms-2">Répondre à un questionnaire de santé. </p>
                            </div>
                        </div>
                        <div data-aos="fade-left">
                            <p>Ensuite un prélèvement salivaire ou une prise de sang sera effectuer pour établir votre "carte d’identité biologique".</p>
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
        <!--
        <section class="bg-100 py-7 text-center">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-5">
                        <h2>⬇ le centre de don se fait ici ⬇</h2>
                        <br>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13847.56112997315!2d5.488406812144487!3d47.090545403283585!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x10455424f077465e!2sLycee%20Pasteur%20Mont%20Roland!5e0!3m2!1sfr!2sfr!4v1646744171774!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen loading="lazy"></iframe>
                </div>
            </div> -->
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
                                <h2>Je veux être donneur de moelle osseuse !</h2>
                                <p class="mb-lg-0">Inscrivez-vous dès maintenant !</p>
                            </div>
                            <div class="col-12 col-lg-6 text-lg-end"><a class="btn btn-lg btn-warning hover-top btn-glow text-end" href="#">S'inscrire</a></div>
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
