<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Additional CSS Files -->

    <link rel="stylesheet"href="{{ asset('https://unpkg.com/swiper@7/swiper-bundle.min.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/css/welcome.css') }}">

    <link rel="shortcut icon" href="{{ asset('assets/images/Logo/logo_main.ico') }}" type="image/x-icon">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>


    <div id="slider-container">

        <img id="logo" src="{{ asset('assets/images/Logo/logo.svg') }}" alt="">

        <div id="slider">
            <!-- Replace the image URLs with your actual image URLs -->
            <div class="slide"><img src="{{ asset('assets/images/images-slider/image1.png') }}" alt="Image 1"></div>
            <div class="slide"><img src="{{ asset('assets/images/images-slider/2.jpg') }}" alt="Image 2"></div>
            <div class="slide"><img src="{{ asset('assets/images/images-slider/3.jpg') }}" alt="Image 3"></div>
            <div class="slide"><img src="{{ asset('assets/images/images-slider/4.jpg') }}" alt="Image 4"></div>
            <div class="slide"><img src="{{ asset('assets/images/images-slider/6.jpg') }}" alt="Image 5"></div>
            <div class="slide"><img src="{{ asset('assets/images/images-slider/7.jpg') }}" alt="Image 6"></div>
            <div class="slide"><img src="{{ asset('assets/images/images-slider/8.jpg') }}" alt="Image 7"></div>
        </div>

        <button id="prevBtn" onclick="prevSlide()">&#10094;</button>
        <button id="nextBtn" onclick="nextSlide()">&#10095;</button>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>

    <script>
        let currentIndex = 0;
        const totalSlides = document.querySelectorAll('.slide').length;

        function showSlide(index) {
            const slider = document.getElementById('slider');
            if (index >= 6) {
                // Redirect to another page when reaching the 7th image

                window.location.href = '{{ route('home') }}'

                return;
            }

            currentIndex = index;
            const position = -index * 100 + '%';
            slider.style.transform = 'translateX(' + position + ')';
        }

        function nextSlide() {
            if (currentIndex < totalSlides - 1) {
                currentIndex++;
            } else {
                currentIndex = 0;
            }
            showSlide(currentIndex);
        }

        function prevSlide() {
            if (currentIndex > 0) {
                currentIndex--;
            } else {
                currentIndex = totalSlides - 1;
            }
            showSlide(currentIndex);
        }

        // Auto slide every 3 seconds (adjust as needed)
        setInterval(nextSlide, 3000);
    </script>

</body>

</html>
