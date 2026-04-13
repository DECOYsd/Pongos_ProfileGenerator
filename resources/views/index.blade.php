<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <style>
        .hero {
            padding: 6rem 0 4rem;
        }

        .feature-icon {
            width: 2.75rem;
            height: 2.75rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: .75rem;
            font-weight: 700;
            background: rgba(13, 110, 253, .15);
            color: #9ec5fe;
        }
    </style>
</head>

<body class="bg-body-tertiary">
    <header class="border-bottom bg-body">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand fw-semibold" href="{{ route('index') }}">Profile Generator</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
                    aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mainNav">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" href="{{ route('index') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/profile') }}">Profile</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Register</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero text-center">
            <div class="container">
                <h1 class="display-5 fw-bold mb-3">Create and manage profiles with ease.</h1>
                <p class="lead text-secondary mb-4">A simple and organized way to build beautiful personal profile pages.
                </p>
                <a href="{{ url('/profile') }}" class="btn btn-primary btn-lg px-4">Get Started</a>
            </div>
        </section>

        <section class="pb-5">
            <div class="container">
                <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
                    <div class="col">
                        <article class="card h-100 border-0 shadow-sm">
                            <div class="card-body">
                                <h2 class="h5">Quick Setup</h2>
                                <p class="text-secondary mb-3">Start creating your profile in minutes with a clean and guided flow.</p>
                                <a href="#" class="btn btn-sm btn-outline-light">Learn More</a>
                            </div>
                        </article>
                    </div>
                    <div class="col">
                        <article class="card h-100 border-0 shadow-sm">
                            <div class="card-body">
                                <h2 class="h5">Responsive Design</h2>
                                <p class="text-secondary mb-3">Enjoy a seamless experience across desktop, tablet, and mobile devices.</p>
                                <a href="#" class="btn btn-sm btn-outline-light">Learn More</a>
                            </div>
                        </article>
                    </div>
                    <div class="col">
                        <article class="card h-100 border-0 shadow-sm">
                            <div class="card-body">
                                <h2 class="h5">Simple Management</h2>
                                <p class="text-secondary mb-3">Update details anytime with an interface focused on clarity and speed.</p>
                                <a href="#" class="btn btn-sm btn-outline-light">Learn More</a>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="pb-5">
            <div class="container">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4 p-lg-5">
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-6">
                                <h2 class="h3 mb-3">Built for students and professionals</h2>
                                <p class="text-secondary mb-0">Whether you are showcasing your academic profile or building a polished online identity, this app helps you stay organized with a modern, distraction-free experience.</p>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex flex-column gap-3">
                                    <div class="d-flex gap-3 align-items-start">
                                        <span class="feature-icon">1</span>
                                        <div>
                                            <h3 class="h6 mb-1">Clean Interface</h3>
                                            <p class="text-secondary mb-0">Minimal layout focused on what matters most.</p>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-3 align-items-start">
                                        <span class="feature-icon">2</span>
                                        <div>
                                            <h3 class="h6 mb-1">Easy Editing</h3>
                                            <p class="text-secondary mb-0">Make updates quickly without unnecessary steps.</p>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-3 align-items-start">
                                        <span class="feature-icon">3</span>
                                        <div>
                                            <h3 class="h6 mb-1">Modern Look</h3>
                                            <p class="text-secondary mb-0">Professional presentation with Bootstrap 5 styling.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="border-top py-4 text-center text-secondary bg-body">
        <div class="container">
            <small>&copy; {{ date('Y') }} Profile Generator. All rights reserved.</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
</body>

</html>
