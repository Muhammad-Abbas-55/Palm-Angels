<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Paradise Palm')</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .product-image-slider {
            position: relative;
            height: auto;
            overflow: hidden;
        }

        .product-image-slider .carousel-item {
            height: auto;
        }

        .product-image-slider img {
            object-fit: cover;
            height: 100%;
            width: 100%;
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 30px;
            height: 30px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 50%;
            top: 50%;
            transform: translateY(-50%);
            opacity: 0;
            transition: opacity 0.2s ease;
        }

        .product-card:hover .carousel-control-prev,
        .product-card:hover .carousel-control-next {
            opacity: 1;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            width: 15px;
            height: 15px;
            filter: invert(1) grayscale(100);
        }

        .carousel-indicators {
            margin-bottom: 0.5rem;
        }

        .carousel-indicators [data-bs-target] {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.5);
            border: none;
            margin: 0 3px;
        }

        .carousel-indicators .active {
            background-color: white;
        }

        .heart-icon {
            position: absolute;
            top: 1rem;
            right: 1rem;
            z-index: 10;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 50%;
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .heart-icon:hover {
            background-color: white;
        }

        .heart-icon.active i {
            color: #ef4444;
        }

        /* footer */
        input[type="checkbox"] {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
        }

        input[type="checkbox"]:checked {
            background-color: white;
            border-color: white;
        }

        input[type="checkbox"]:checked::before {
            content: '✓';
            display: block;
            text-align: center;
            color: black;
            font-size: 12px;
            line-height: 16px;
        }
    </style>
</head>

<body>

    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Page Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Initialize all carousels
        document.addEventListener('DOMContentLoaded', function() {
            var carousels = document.querySelectorAll('.carousel');
            carousels.forEach(function(carousel) {
                new bootstrap.Carousel(carousel, {
                    interval: false, // Don't auto-rotate
                    wrap: true // Allow wrapping from last to first slide
                });
            });
        });

        // Toggle favorite heart icon
        function toggleFavorite(element) {
            element.classList.toggle('active');
            var icon = element.querySelector('i');
            if (icon.classList.contains('bi-heart')) {
                icon.classList.remove('bi-heart');
                icon.classList.add('bi-heart-fill');
            } else {
                icon.classList.remove('bi-heart-fill');
                icon.classList.add('bi-heart');
            }
        }
    </script>
</body>
</html>