//  let currentIndex = 0;
//         const totalSlides = document.querySelectorAll('.slide').length;

//         function showSlide(index) {
//             const slider = document.getElementById('slider');
//             if (index >= 6) {
//                 // Redirect to another page when reaching the 7th image


//                 // window.location.href = '{{ route('home') }}'
//                 console.log(index, totalSlides);
//                 return;
//             }

//             currentIndex = index;
//             const position = -index * 100 + '%';
//             slider.style.transform = 'translateX(' + position + ')';
//         }

//         function nextSlide() {
//             if (currentIndex < totalSlides - 1) {
//                 currentIndex++;
//             } else {
//                 currentIndex = 0;
//             }
//             showSlide(currentIndex);
//         }

//         function prevSlide() {
//             if (currentIndex > 0) {
//                 currentIndex--;
//             } else {
//                 currentIndex = totalSlides - 1;
//             }
//             showSlide(currentIndex);
//         }

//         // Auto slide every 3 seconds (adjust as needed)
//         setInterval(nextSlide, 3000);



const nav = document.querySelector('#neubar');
let lastScrollPosition = window.scrollY;

window.addEventListener('scroll', () => {
    const currentScrollPosition = window.scrollY;

    if (currentScrollPosition > lastScrollPosition) {
        nav.classList.add('nav-hidden');
    } else {
        nav.classList.remove('nav-hidden');
    }

    lastScrollPosition = currentScrollPosition;
});

