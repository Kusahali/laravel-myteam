
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 text-center">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('image/logo.png') }}" alt="Your Logo" class="img-fluid mb-4 logo">
                </a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <h1 class="display-5 mb-3 header-title"><a href="{{ url('/') }}">All personnel lists</a></h1>
                <p class="lead">Here you can find my personnel lists.</p>
            </div>
        </div>
        <!-- Other content here -->
    </div>
</section>

<style>
    .logo {
        max-width: 100px;
        transition: transform 0.2s;
    }
    .logo:hover {
        transform: scale(1.1);
    }
    .header-title a {
        font-size: 1.5rem;
        text-decoration: none;
        color: #333;
    }
    .header-title a:hover {
        text-decoration: underline;
        color: #555;
    }
    .lead {
        font-size: 1.25rem;
        color: #666;
    }
    @media (min-width: 768px) {
        .header-title a {
            font-size: 2rem;
        }
    }
</style>

