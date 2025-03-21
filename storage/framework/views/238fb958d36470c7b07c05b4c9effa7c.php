<?php $__env->startSection('css'); ?>
<?php echo app('Illuminate\Foundation\Vite')([
    'node_modules/bootstrap/dist/css/bootstrap.min.css', 
    'node_modules/swiper/swiper-bundle.min.css',
]); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg fixed-top sticky" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(route('any', 'index-1')); ?>">
                <span class="logo-light-mode">
                    <img src="/images/logo-light.png" class="l-light" alt="">
                    <img src="/images/logo-dark.png" class="l-dark" alt="">
                </span>
                <img src="/images/logo-light.png" class="logo-dark-mode" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0" id="navbar-navlist">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#work">Work</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonial">Testimonial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Hero Start -->
    <section class="bg-half-170 d-table w-100" style="background: url('/images/13.jpg')center center;">
        <div class="bg-overlay bg-overlay-white"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <h4 class="typed-heading text-white">Portfolio Standard</h4>
                    <div class="page-next">
                        <nav aria-label="breadcrumb" class="d-inline-block">
                            <ul class="breadcrumb rounded mb-0 mt-3">
                                <li class="breadcrumb-item text-white"><a href="index.html" class="text-white">Home</a></li>
                                <span class="px-3 text-white">|</span>
                                <li class="breadcrumb-item text-primary" aria-current="page">Portfolio</li>
                            </ul>
                        </nav>
                    </div>
                    <!-- <div class="page-next-level">
                        
                    </div> -->
                </div>  <!--end col-->
            </div><!--end row-->
        </div> <!--end container-->
    </section><!--end section-->
    <!-- Hero End -->

    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- End Hero -->
    
    <section class="bg-half-100 work-section" id="work">
        <div class="container">

        <div class="row align-items-center">
            <div class="col-xxl-12"><!-- Start Col -->
                <div class="filters-group mb-5">
                    <ul class="container-filter list-inline filter-options text-center">
                        <li class="list-inline-item categories active" data-group="all">All</a></li>
                        <li class="list-inline-item categories" data-group="branding">Branding</a></li>
                        <li class="list-inline-item categories" data-group="designing">Designing</a></li>
                        <li class="list-inline-item categories" data-group="photography">Photography</a></li>
                        <li class="list-inline-item categories" data-group="development">Development</a></li>
                    </ul>
                </div>
            </div><!-- End col -->
        </div>
    
            <div id="gallery-wrapper" class="row projects-wrapper gy-4">
                <div class="col-lg-4 col-md-6 col-12 picture-item" data-groups='["branding"]'>
                    <div class="work-container position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <img src="/images/portfolio/01.jpg" class="img-fluid" alt="work-image">
                            <div class="overlay-work bg-dark"></div>
                            <div class="content">
                                <h5 class="mb-3"><a class='content-title' href='javascript:void(0)'>Mockup Collection</a></h5>
                                <h6 class="text-light tag mb-0">Mockup</h6>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 picture-item" data-groups='["designing"]'>
                    <div class="work-container position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <img src="/images/portfolio/02.jpg" class="img-fluid" alt="work-image">
                            <div class="overlay-work bg-dark"></div>
                            <div class="content">
                                <h5 class="mb-3"><a class='content-title' href='javascript:void(0)'>Mockup Collection</a></h5>
                                <h6 class="text-light tag mb-0">Mockup</h6>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 picture-item" data-groups='["photography"]'>
                    <div class="work-container position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <img src="/images/portfolio/03.jpg" class="img-fluid" alt="work-image">
                            <div class="overlay-work bg-dark"></div>
                            <div class="content">
                                <h5 class="mb-3"><a class='content-title' href='javascript:void(0)'>Mockup Collection</a></h5>
                                <h6 class="text-light tag mb-0">Mockup</h6>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 picture-item" data-groups='["development"]'>
                    <div class="work-container position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <img src="/images/portfolio/04.jpg" class="img-fluid" alt="work-image">
                            <div class="overlay-work bg-dark"></div>
                            <div class="content">
                                <h5 class="mb-3"><a class='content-title' href='javascript:void(0)'>Mockup Collection</a></h5>
                                <h6 class="text-light tag mb-0">Mockup</h6>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 picture-item" data-groups='["branding"]'>
                    <div class="work-container position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <img src="/images/portfolio/05.jpg" class="img-fluid" alt="work-image">
                            <div class="overlay-work bg-dark"></div>
                            <div class="content">
                                <h5 class="mb-3"><a class='content-title' href='javascript:void(0)'>Mockup Collection</a></h5>
                                <h6 class="text-light tag mb-0">Mockup</h6>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 picture-item" data-groups='["designing"]'>
                    <div class="work-container position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <img src="/images/portfolio/06.jpg" class="img-fluid" alt="work-image">
                            <div class="overlay-work bg-dark"></div>
                            <div class="content">
                                <h5 class="mb-3"><a class='content-title' href='javascript:void(0)'>Mockup Collection</a></h5>
                                <h6 class="text-light tag mb-0">Mockup</h6>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 picture-item" data-groups='["photography"]'>
                    <div class="work-container position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <img src="/images/portfolio/07.jpg" class="img-fluid" alt="work-image">
                            <div class="overlay-work bg-dark"></div>
                            <div class="content">
                                <h5 class="mb-3"><a class='content-title' href='javascript:void(0)'>Mockup Collection</a></h5>
                                <h6 class="text-light tag mb-0">Mockup</h6>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 picture-item" data-groups='["development"]'>
                    <div class="work-container position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <img src="/images/portfolio/08.jpg" class="img-fluid" alt="work-image">
                            <div class="overlay-work bg-dark"></div>
                            <div class="content">
                                <h5 class="mb-3"><a class='content-title' href='javascript:void(0)'>Mockup Collection</a></h5>
                                <h6 class="text-light tag mb-0">Mockup</h6>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 picture-item" data-groups='["branding"]'>
                    <div class="work-container position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <img src="/images/portfolio/09.jpg" class="img-fluid" alt="work-image">
                            <div class="overlay-work bg-dark"></div>
                            <div class="content">
                                <h5 class="mb-3"><a class='content-title' href='javascript:void(0)'>Mockup Collection</a></h5>
                                <h6 class="text-light tag mb-0">Mockup</h6>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
    
            <div class="col-12">
                <div class="text-center">
                    <a href="#!" class="btn btn-primary rounded-pill mt-5"> See more</a>
                </div>
            </div><!--end col-->
        </div><!-- End container -->
    </section>

    <!-- Footer Start -->
    <footer class="footer-section">
        <div class="container-footer">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="bg-half-100">
                            <div class="row">
                                <div class="col-lg-3 col-md-3">
                                    <div class="colum md-mb50">
                                        <div class="footer-title mb-20">
                                            <h6>Address</h6>
                                        </div>

                                        <div class="footer-subtitle footer-text-style">
                                            <p>Germany — 426 Eden Drive Richmond, VA 23219</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-3 offset-lg-1 offset-md-1">
                                    <div class="colum md-mb50">
                                        <div class="footer-title mb-20">
                                            <h6>Say Hello</h6>
                                        </div>
                                        <div class="footer-subtitle footer-text-style">
                                            <p class="mb-10 footer-text-style">
                                                <a href="#0" class="footer-text-style">hello@design.com</a>
                                            </p>
                                            <h5>
                                                <a href="#">+61 214 585 17 69</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-2 md-mb50">
                                    <div class="footer-title mb-20">
                                        <h6>Social</h6>
                                    </div>
                                    <ul class="social-text">
                                        <li class="mb-2"><a href="#">Facebook</a></li>
                                        <li class="mb-2"><a href="#">Twitter</a></li>
                                        <li class="mb-2"><a href="#">LinkedIn</a></li>
                                        <li class="mb-2"><a href="#">Instagram</a></li>
                                    </ul>
                                </div>

                                <div class="col-lg-3 col-md-3">
                                    <div class="footer-title mb-20">
                                        <h6>Newsletter</h6>
                                    </div>
                                    <div class="subscribe">
                                        <form>
                                            <div class="form-group">
                                                <div class="position-relative">
                                                    <input type="email" class="form-control" id="emailId" placeholder="Type Your Email">
                                                    <button type="submit" class="d-inline-flex align-items-center justify-content-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="lucide lucide-arrow-right">
                                                            <path d="M5 12h14" />
                                                            <path d="m12 5 7 7-7 7" />
                                                        </svg>
                                                    </button>
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

            <div class="footer-bar pt-30 pb-30">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="logo">
                                <a href="#"><img src="/images/logo-light.png" class="img-fluid"></a>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="copyright d-flex">
                                <div class="ms-auto">
                                    <p class="mb-0">©
                                        <script>document.write(new Date().getFullYear())</script> Natia. Design with <i
                                        class="mdi mdi-heart text-danger"></i> by <a href="https://zoyothemes.com/" target="_blank"
                                        class="text-reset">Zoyothemes</a>.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script-bottom'); ?>
<?php echo app('Illuminate\Foundation\Vite')([
    
    'resources/js/filter.js', 
]); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Herd\defadels.my.id\resources\views/portfolio.blade.php ENDPATH**/ ?>