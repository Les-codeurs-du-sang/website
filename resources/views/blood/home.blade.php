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
                                            <svg class="bi bi-person-fill" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#F53838" viewBox="0 0 16 16">
                                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="fw-bolder text-1000 mb-0">90+ </p>
                                        <p class="mb-0">Users </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="border-end d-flex justify-content-md-center">
                                    <div class="mx-2 mx-md-0 me-md-5">
                                        <div class="badge badge-circle bg-soft-danger">
                                            <svg class="bi bi-geo-alt-fill" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#F53838" viewBox="0 0 16 16">
                                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="fw-bolder text-1000 mb-0">30+ </p>
                                        <p class="mb-0">Users </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-flex justify-content-md-center">
                                    <div class="mx-2 mx-md-0 me-md-5">
                                        <div class="badge badge-circle bg-soft-danger">
                                            <svg class="bi bi-hdd-stack-fill" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#F53838" viewBox="0 0 16 16">
                                                <path d="M2 9a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1a2 2 0 0 0-2-2H2zm.5 3a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm2 0a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zM2 2a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm.5 3a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm2 0a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="fw-bolder text-1000 mb-0">50+ </p>
                                        <p class="mb-0">Users </p>
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
                    <div class="col-md-5 col-lg-7 text-lg-center"><img class="img-fluid mb-5 mb-md-0" src="assets/img/illustrations/2.png" alt="" /></div>
                    <div class="col-md-7 col-lg-5 text-center text-md-start">
                        <h2>We Provide Many <br />Features You Can Use</h2>
                        <p> You can explore the features that we provide with fun and have their own functions each feature.</p>
                        <div class="d-flex">
                            <svg class="bi bi-check-circle-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2FAB73" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                            </svg>
                            <p class="ms-2">Powerfull online protection.</p>
                        </div>
                        <div class="d-flex">
                            <svg class="bi bi-check-circle-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2FAB73" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                            </svg>
                            <p class="ms-2">Internet without borders.</p>
                        </div>
                        <div class="d-flex">
                            <svg class="bi bi-check-circle-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2FAB73" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                            </svg>
                            <p class="ms-2">Supercharged VPN.</p>
                        </div>
                        <div class="d-flex">
                            <svg class="bi bi-check-circle-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2FAB73" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                            </svg>
                            <p class="ms-2">Internet without borders.</p>
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
                        <h2>Trusted by Thousands of<br />Happy Customer</h2>
                        <p>These are the stories of our customers who have joined us with great pleasure when using this crazy feature.</p>
                    </div>
                </div>
                <div class="carousel slide pt-6" id="carouselExampleDark" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <div class="row h-100">
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center"><img class="img-fluid" src="assets/img/gallery/user-1.png" alt="" />
                                                    <div class="flex-1 ms-3">
                                                        <h6 class="mb-0 fs--1 text-1000 fw-medium">Viezh Robert</h6>
                                                        <p class="fs--2 fw-normal mb-0">arsaw, Poland</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center"><span class="text-900 me-3">4.5</span>
                                                    <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FEA250" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"> </path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <p class="card-text pt-3">“Wow...I am very happy to use this VPN, it turned out to be more than my expectations and so far there have been no problems. LaslesVPN always the best”.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center"><img class="img-fluid" src="assets/img/gallery/user-2.png" alt="" />
                                                    <div class="flex-1 ms-3">
                                                        <h6 class="mb-0 fs--1 text-1000 fw-medium">Kim Young Jou</h6>
                                                        <p class="fs--2 fw-normal mb-0">Seoul, South Korea</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center"><span class="text-900 me-3">5</span>
                                                    <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FEA250" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"> </path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <p class="card-text pt-3">“I like it because I like to travel far and still can connect with high speed.”</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center"><img class="img-fluid" src="assets/img/gallery/user-3.png" alt="" />
                                                    <div class="flex-1 ms-3">
                                                        <h6 class="mb-0 fs--1 text-1000 fw-medium">Viezh Robert</h6>
                                                        <p class="fs--2 fw-normal mb-0">Shanxi, China</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center"><span class="text-900 me-3">4.8</span>
                                                    <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FEA250" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"> </path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <p class="card-text pt-3">like it because I like to travel far and still can connect with high speed”.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <div class="row h-100">
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center"><img class="img-fluid" src="assets/img/gallery/user-1.png" alt="" />
                                                    <div class="flex-1 ms-3">
                                                        <h6 class="mb-0 fs--1 text-1000 fw-medium">Viezh Robert</h6>
                                                        <p class="fs--2 fw-normal mb-0">arsaw, Poland</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center"><span class="text-900 me-3">4.5</span>
                                                    <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FEA250" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"> </path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <p class="card-text pt-3">“Wow...I am very happy to use this VPN, it turned out to be more than my expectations and so far there have been no problems. LaslesVPN always the best”.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center"><img class="img-fluid" src="assets/img/gallery/user-2.png" alt="" />
                                                    <div class="flex-1 ms-3">
                                                        <h6 class="mb-0 fs--1 text-1000 fw-medium">Kim Young Jou</h6>
                                                        <p class="fs--2 fw-normal mb-0">Seoul, South Korea</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center"><span class="text-900 me-3">5</span>
                                                    <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FEA250" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"> </path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <p class="card-text pt-3">“I like it because I like to travel far and still can connect with high speed.”</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center"><img class="img-fluid" src="{{ asset('assets/img/gallery/user-3.png') }}" alt="" />
                                                    <div class="flex-1 ms-3">
                                                        <h6 class="mb-0 fs--1 text-1000 fw-medium">Viezh Robert</h6>
                                                        <p class="fs--2 fw-normal mb-0">Shanxi, China</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center"><span class="text-900 me-3">4.8</span>
                                                    <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FEA250" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"> </path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <p class="card-text pt-3">like it because I like to travel far and still can connect with high speed”.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row h-100">
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center"><img class="img-fluid" src="assets/img/gallery/user-1.png" alt="" />
                                                    <div class="flex-1 ms-3">
                                                        <h6 class="mb-0 fs--1 text-1000 fw-medium">Viezh Robert</h6>
                                                        <p class="fs--2 fw-normal mb-0">arsaw, Poland</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center"><span class="text-900 me-3">4.5</span>
                                                    <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FEA250" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"> </path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <p class="card-text pt-3">“Wow...I am very happy to use this VPN, it turned out to be more than my expectations and so far there have been no problems. LaslesVPN always the best”.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center"><img class="img-fluid" src="assets/img/gallery/user-2.png" alt="" />
                                                    <div class="flex-1 ms-3">
                                                        <h6 class="mb-0 fs--1 text-1000 fw-medium">Kim Young Jou</h6>
                                                        <p class="fs--2 fw-normal mb-0">Seoul, South Korea</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center"><span class="text-900 me-3">5</span>
                                                    <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FEA250" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"> </path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <p class="card-text pt-3">“I like it because I like to travel far and still can connect with high speed.”</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center"><img class="img-fluid" src="assets/img/gallery/user-3.png" alt="" />
                                                    <div class="flex-1 ms-3">
                                                        <h6 class="mb-0 fs--1 text-1000 fw-medium">Viezh Robert</h6>
                                                        <p class="fs--2 fw-normal mb-0">Shanxi, China</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center"><span class="text-900 me-3">4.8</span>
                                                    <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FEA250" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"> </path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <p class="card-text pt-3">like it because I like to travel far and still can connect with high speed”.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row px-3 px-md-0 mt-4">
                        <div class="col-6 position-relative">
                            <ol class="carousel-indicators">
                                <li class="active" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"></li>
                                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
                                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
                            </ol>
                        </div>
                        <div class="col-6 position-relative"><a class="carousel-control-prev carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></a></div>
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
