<footer class="footer pt-3  ">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="copyright text-center text-sm text-muted text-lg-start">
                    © <script>
                        document.write(new Date().getFullYear())
                    </script>,
                   Template conçue par
                    <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                    .
                </div>
            </div>
            <div class="col-lg-6">
                <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                    <li class="nav-item">
                        <a href="{{ route('admin.users.index') }}" class="nav-link text-muted" target="_blank">Utilisateurs</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.promotion.index') }}" class="nav-link text-muted" target="_blank">Promotions</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.question.index') }}" class="nav-link text-muted" target="_blank">Questions</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.journee.index') }}" class="nav-link pe-0 text-muted" target="_blank">Journées</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</footer>
