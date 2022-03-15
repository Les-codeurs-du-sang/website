
@extends('layouts.app')

@section('content')


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pb-6">

            <div class="container">
                <div class="row flex-center">
                    <div class="col-lg-6 col-md-5 order-md-1 text-center text-md-end">
                        <h1 class="fw-medium">Faites don de votre moelle osseuse pour les plus démunies</h1>
                        <p class="mt-3 mb-4">Venez en aide à toutes ces personnes qui se doivent de souffrir dans l'attente que des gens comme vous leur viennent en aide.</p>
                        <a class="btn btn-lg btn-warning top btn-glow" href="#about">En savoir plus</a>
                    </div>
                    <div class="col-md-7 col-lg-6 mt-5 "><img class="img-fluid" src="assets/img/illustrations/3.svg" alt="" /></div>
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
                    <div class="col-md-5 col-lg-7 text-lg-center px-10"><img class="img-fluid mb-5 mb-md-0" width="450px" src="{{ asset('assets/img/illustrations/injured.svg') }}" alt="" /></div>
                    <div class="col-md-7 col-lg-5 text-center text-md-start">
                        <h2>Qui à besoin d'un don ?</h2>
                        <p>De nombreuses personnes qui ont une maladie grave du sang.</p>
                        <div class="d-flex">
                            <p>Cela représente des milliers d’enfants et d’adultes, en France comme à l’étranger. De quelles maladies parle-t-on ? On pense aux leucémies bien sûr. Mais cela peut aussi soigner des aplasies médullaires, des maladies métaboliques ou génétiques (déficit immunitaire, adrénoleucodystrophie…). Et bien d’autres encore. Autant de maladies dont l’origine est un dysfonctionnement de la moelle osseuse.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-4 pt-md-6 bg-100">

            <div class="container">
                <div class="row align-items-center pt-5">
                    <div class="col-md-7 col-lg-5 text-right text-md-end">
                        <h2>Le prélèvement de moelle osseuse, comment ça marche ?</h2>
                        <p>Il existe 2 méthodes pour le prélèvement de moelle osseuse.</p>
                        <div class="d-flex justify-content-end">
                            <p class="mr-2">Soit on prélève dans le sang : on parle de cytaphérèse*</p>
                            <svg class="bi bi-check-circle-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2FAB73" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                            </svg>
                        </div>
                        <div class="d-flex justify-content-end">
                            <p class="mr-2">Soit on prélève par ponction dans les os postérieurs du bassin</p>
                            <svg class="bi bi-check-circle-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2FAB73" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                            </svg>
                        </div>
                        <p>Dans 80% des cas, le don de cellules de la moelle osseuse se fait par prélèvement sanguin.</p>
                    </div>
                    <div class="col-md-5 col-lg-7 text-lg-center px-10"><img class="img-fluid my-5 mb-md-0" width="600px" src="{{ asset('assets/img/illustrations/medical_research.svg') }}" alt="" /></div>
                </div>
            </div>
        </section>

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pt-4 pt-md-6">

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5 col-lg-7 text-lg-center"><img class="img-fluid mb-md-0 m-lg-auto" width="450px" src="{{ asset('assets/img/illustrations/diary.svg') }}" alt="" /></div>
                    <div class="col-md-7 col-lg-5 text-center text-md-start">
                        <h2>Qui peut être donneur ?</h2>
                        <p>Si vous cochez ces 3 cases, le registre national des donneurs de moelle osseuse vous attend !</p>
                        <div class="d-flex">
                            <svg class="bi bi-check-circle-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2FAB73" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                            </svg>
                            <p class="ms-2">Avoir entre 18 et 35 ans au moment de l’inscription</p>
                        </div>
                        <div class="d-flex">
                            <svg class="bi bi-check-circle-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2FAB73" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                            </svg>
                            <p class="ms-2">Être en parfaite santé</p>
                        </div>
                        <div class="d-flex">
                            <svg class="bi bi-check-circle-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2FAB73" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                            </svg>
                            <p class="ms-2">Répondre à un questionnaire de santé. </p>
                        </div>
                        <p>Ensuite un prélèvement salivaire ou une prise de sang sera effectuer pour établir votre "carte d’identité biologique".</p>
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




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="bg-200 pt-9 pb-0">

            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-4 mb-3"><a href="#"><img class="d-inline-block align-middle" src="assets/img/icons/logo.png" alt="" width="30" /><span class="d-inline-block text-1000 fs-1 ms-2 fw-medium lh-base">Lasles<span class="fw-bold">VPN</span></span></a>
                        <p class="my-3"> <span class="fw-medium">LaslesVPN </span>is a private virtual network that<br />has unique features and has high security. </p>
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item"><a class="text-decoration-none" href="#!">
                                    <svg class="bi bi-facebook" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#F53838" viewBox="0 0 16 16">
                                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                                    </svg></a></li>
                            <li class="list-inline-item"><a href="#!">
                                    <svg class="bi bi-twitter" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#F53838" viewBox="0 0 16 16">
                                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                                    </svg></a></li>
                            <li class="list-inline-item"><a href="#!">
                                    <svg class="bi bi-instagram" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#F53838" viewBox="0 0 16 16">
                                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"> </path>
                                    </svg></a></li>
                        </ul>
                        <p class="text-400 my-3">&copy; 2020 Your Company</p>
                    </div>
                    <div class="col-6 col-sm-4 col-lg-3 mb-3">
                        <h5 class="lh-lg">product </h5>
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            <li class="lh-lg"><a class="text-900 text-decoration-none" href="#!">Download</a></li>
                            <li class="lh-lg"><a class="text-900 text-decoration-none" href="#!">Pricing</a></li>
                            <li class="lh-lg"><a class="text-900 text-decoration-none" href="#!">Locations</a></li>
                            <li class="lh-lg"><a class="text-900 text-decoration-none" href="#!">Server</a></li>
                            <li class="lh-lg"><a class="text-900 text-decoration-none" href="#!">Countries</a></li>
                            <li class="lh-lg"><a class="text-900 text-decoration-none" href="#!">Blog</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-sm-4 col-lg-3 mb-3">
                        <h5 class="lh-lg">Engage</h5>
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            <li class="lh-lg"><a class="text-900 text-decoration-none" href="#!">LaslesVPN ?</a></li>
                            <li class="lh-lg"><a class="text-900 text-decoration-none" href="#!">FAQ</a></li>
                            <li class="lh-lg"><a class="text-900 text-decoration-none" href="#!">Tutorials</a></li>
                            <li class="lh-lg"><a class="text-900 text-decoration-none" href="#!">About Us</a></li>
                            <li class="lh-lg"><a class="text-900 text-decoration-none" href="#!">Privacy Policy </a></li>
                            <li class="lh-lg"><a class="text-900 text-decoration-none" href="#!">Terms of Service</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-4 col-lg-2 mb-3 ps-xxl-7 ps-xl-5">
                        <h5 class="lh-lg">Earn Money </h5>
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            <li class="lh-lg"><a class="text-900 text-decoration-none" href="#!">Affiliate</a></li>
                            <li class="lh-lg"><a class="text-900 text-decoration-none" href="#!">Become Partner</a></li>
                        </ul>
                    </div>
                    <hr class="opacity-25" />
                    <div class="text-400 text-center">
                        <p>This template is made with&nbsp;
                            <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#F53838" viewBox="0 0 16 16">
                                <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
                            </svg>&nbsp;by&nbsp;<a class="text-900" href="https://themewagon.com/" target="_blank">ThemeWagon</a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


    </main>
@endsection
