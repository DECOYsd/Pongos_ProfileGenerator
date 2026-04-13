@php
    $data = is_array($profile ?? null) ? $profile : [];
    $name = $data['fullname'] ?? (auth()->user()->name ?? 'Guest User');
    $email = $data['email'] ?? (auth()->user()->email ?? 'guest@example.com');
    $imagePath = $data['profilepicture'] ?? null;
    $avatar = !empty($imagePath) ? asset($imagePath) : 'https://ui-avatars.com/api/?name=' . urlencode($name) . '&background=0d6efd&color=fff&size=256';
@endphp

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $name }} - Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
</head>

<body class="bg-body-tertiary d-flex flex-column min-vh-100">
    <header class="border-bottom bg-body">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand fw-semibold" href="{{ route('index') }}">Profile Generator</a>
                <div class="ms-auto d-flex gap-2">
                    <a href="{{ route('index') }}" class="btn btn-outline-light btn-sm">Home</a>
                    <a href="#" class="btn btn-primary btn-sm">My Profile</a>
                </div>
            </div>
        </nav>
    </header>

    <main class="container py-5 flex-grow-1 d-flex align-items-center justify-content-center">
        <section class="card border-0 shadow-sm rounded-4 p-4 p-md-5" style="max-width: 420px; width: 100%;">
            <div class="text-center">
                <img src="{{ $avatar }}" alt="{{ $name }} avatar" class="rounded-circle shadow-sm mb-3"
                    style="width: 120px; height: 120px; object-fit: cover;">
                <h1 class="h3 mb-1">{{ $name }}</h1>
                <p class="text-secondary mb-4">{{ $email }}</p>
            </div>

            <div class="d-grid gap-2">
                <a href="#" class="btn btn-primary">Edit Profile</a>
                <a href="#" class="btn btn-outline-danger">Logout</a>
            </div>
        </section>
    </main>

    <footer class="border-top py-3 text-center text-secondary bg-body">
        <small>&copy; {{ date('Y') }} Profile Generator</small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
</body>

</html>
