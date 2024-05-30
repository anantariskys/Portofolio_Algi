<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        .active  {
            background-color: #FFFFFF;
           
        }
    </style>
</head>

<body class="bg-neutral-50 scroll-smooth">
    <!-- Navbar Start -->
    <nav class="w-full fixed top-0 bg-blue-700 z-50">
        <main class="container  mx-auto lg:px-24 text-neutral-50 md:px-10 px-4 flex items-center py-5 justify-between">
            <h3 class="text-xl font-semibold">Muhammad Algifari</h3>
            <div class="lg:flex gap-10 hidden text-lg font-semibold">
                <a class="relative group nav-link" href="#home" data-section="home">
                    Home
                    <div class="nav-item w-full h-0.5 duration-100 group-hover:bg-neutral-50 absolute bottom-0"></div>
                </a>
                <a class="relative group nav-link" href="#about" data-section="about">
                    About
                    <div class="nav-item w-full h-0.5 duration-100 group-hover:bg-neutral-50 absolute bottom-0"></div>
                </a>
                <a class="relative group nav-link" href="#skills" data-section="skills">
                    Skills
                    <div class="nav-item w-full h-0.5 duration-100 group-hover:bg-neutral-50 absolute bottom-0"></div>
                </a>
                <a class="relative group nav-link" href="#work" data-section="work">
                    Work
                    <div class="nav-item w-full h-0.5 duration-100 group-hover:bg-neutral-50 absolute bottom-0"></div>
                </a>
            </div>
        </main>
    </nav>
    <!-- Navbar End -->

    <!-- Hero Start -->
    <section id="home" class="h-screen">
        <div class="container py-5 mx-auto flex justify-center items-start gap-10 flex-col  lg:px-24 md:px-10 px-4 h-full">
            <div data-aos="fade-right">
                <h3 class="text-6xl font-bold">Hi, I'm <span class="text-blue-700">Algi.</span></h3>
                <h3 class="text-6xl font-bold">I’m an undergraduate </h3>
                <h3 class="text-6xl font-bold">information technology education at</h3>
                <h3 class="text-6xl font-bold">Brawijaya University</h3>
            </div>
            <button data-aos="fade-up" class="px-10 font-bold py-2 rounded-md text-lg bg-blue-700 text-neutral-50">Check out my
                CV!</button>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="h-screen overflow-hidden ">
        <div data-aos="fade-left" class="flex justify-center">
            <h1 class="text-4xl inline-block py-2  font-semibold text-blue-700 border-b-2 border-blue-700">About</h1>
        </div>
        <div class="container py-5 flex justify-evenly items-center  gap-10 lg:px-24 md:px-10 px-4 h-full">
            <img data-aos="fade-right" src="{{ asset('images/foto.jpg')}}" class="w-2/5 rounded-md shadow ms-auto" alt="">
          
            <div class="">
                <h3 data-aos="fade-left" class="text-2xl font-bold">I'm Algi</h3>
                <p class="text-base" data-aos="fade-left"> Hi, my name is Faqih Muhammad Al-Ghifari. I am from Sukabumi. I study at Brawijaya University, my student identification number is 225150600111006. I like to listening a lot of music genre, and i think i have a good taste on it. I am a student of Information Technology Education at Brawijaya University. I have an interest in graphic design, creating content, and also brainstorm in a team. Thank you for visiting my page</p>

            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="skills" class="h-screen overflow-hidden">
        <div data-aos="fade-right" class="flex justify-center">
            <h1 class="text-4xl inline-block py-2  font-semibold text-blue-700 border-b-2 border-blue-700">Skills</h1>
        </div>
        <div class="container py-5 flex flex-row-reverse justify-evenly items-center  gap-10 lg:px-24 md:px-10 px-4 h-full">
            <img src="{{ asset('images/skill.jpg')}}"  data-aos="fade-left" class="w-2/5 rounded-md shadow ms-auto" alt="">
          
            <div class="w-1/2">
                <h3 data-aos="fade-right" class="text-2xl font-bold">Profesional Skills</h3>
                <p data-aos="fade-right" class="text-base">I'm a professional with skills in web development (HTML, CSS, JavaScript) and graphic design (Adobe Illustrator). I can create attractive and responsive website designs, as well as produce professional graphic designs. With my combined skills, I'm ready to provide creative and functional solutions for your projects.</p>
                <div class="flex flex-col gap-4 mt-5 text-xl font-semibold items-center">
                    <div data-aos="fade-right" class="relative flex shadow-lg px-5 py-2 justify-between w-full bg-white rounded-md">
                        <div>
                            <h3 class="">HTML</h3>
                        </div>
                        <p>95%</p>

                        <div class="w-full absolute bottom-0 left-0 bg-gray-200 rounded-full h-1.5 dark:bg-gray-700">
                            <div class="bg-blue-700 h-full rounded-full" style="width: 95%"></div>
                        </div>
                    </div>
                    <div data-aos="fade-right" class="relative flex shadow-lg px-5 py-2 justify-between w-full bg-white rounded-md">
                        <div>
                            <h3 class="">CSS</h3>
                        </div>
                        <p>85%</p>

                        <div class="w-full absolute bottom-0 left-0 bg-gray-200 rounded-full h-1.5 dark:bg-gray-700">
                            <div class="bg-blue-700 h-full rounded-full" style="width: 85%"></div>
                        </div>
                    </div>
                    <div data-aos="fade-right" class="relative flex shadow-lg px-5 py-2 justify-between w-full bg-white rounded-md">
                        <div>
                            <h3 class="">JavaScript</h3>
                        </div>
                        <p>65%</p>

                        <div class="w-full absolute bottom-0 left-0 bg-gray-200 rounded-full h-1.5 dark:bg-gray-700">
                            <div class="bg-blue-700 h-full rounded-full" style="width: 65%"></div>
                        </div>
                    </div>
                    <div data-aos="fade-right" class="relative flex shadow-lg px-5 py-2 justify-between w-full bg-white rounded-md">
                        <div>
                            <h3 class="">UX/UI</h3>
                        </div>
                        <p>85%</p>
    
                        <div class="w-full absolute bottom-0 left-0 bg-gray-200 rounded-full h-1.5 dark:bg-gray-700">
                            <div class="bg-blue-700 h-full rounded-full" style="width: 85%"></div>
                        </div>
                    </div>
                    <div data-aos="fade-right" class="relative flex shadow-lg px-5 py-2 justify-between w-full bg-white rounded-md">
                        <div>
                            <h3 class="">Adobe Illustrator </h3>
                        </div>
                        <p>95%</p>
    
                        <div class="w-full absolute bottom-0 left-0 bg-gray-200 rounded-full h-1.5 dark:bg-gray-700">
                            <div class="bg-blue-700 h-full rounded-full" style="width: 95%"></div>
                        </div>
                    </div>
                    

                </div>
    
            </div>
        </div>
      
    </section>

    <!-- Contact Section -->
    <section id="work" class="overflow-hidden" >
        <div data-aos="fade-up" class="flex justify-center">
            <h1 class="text-4xl inline-block py-2  font-semibold text-blue-700 border-b-2 border-blue-700">Work</h1>
        </div>
        <div class="container mx-auto py-5 grid grid-cols-3 grid-rows-1  gap-10 lg:px-24 md:px-10 px-4 h-full">
            @foreach ($works as $work )
            <div data-aos="fade-up" class="w-full aspect-[12/19] bg-white rounded-md overflow-hidden shadow relative group">
                <img src="/images/{{ $work->image }}" class="w-full h-full object-contain" alt="">
                <div class="absolute top-0 text-neutral-50 left-0 size-full opacity-0 bg-black bg-opacity-40 backdrop-blur-sm group-hover:opacity-100 duration-500 ease-in-out p-5">
                    <h3 class="text-3xl font-semibold">{{ $work->title}}</h3>
                    <p class="h-3/5 overflow-auto mt-5 text-sm">{{ $work->description}}</p>

                </div>

            </div>
                
            @endforeach
         
          
        
        </div>
    </section>

    <!-- Footer -->
   
    <footer data-aos="fade-up" class="bg-blue-700 text-neutral-50 ">
        <div class="container  lg:px-24 md:px-10 px-4 mx-auto flex flex-col gap-6 py-16">
            <h3 class="text-3xl text-center font-bold">Algi's Portfolio</h3>
            <div class="flex gap-5 justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0,0,256,256">
                    <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(10.66667,10.66667)"><path d="M12,2c-5.523,0 -10,4.477 -10,10c0,5.013 3.693,9.153 8.505,9.876v-7.226h-2.474v-2.629h2.474v-1.749c0,-2.896 1.411,-4.167 3.818,-4.167c1.153,0 1.762,0.085 2.051,0.124v2.294h-1.642c-1.022,0 -1.379,0.969 -1.379,2.061v1.437h2.995l-0.406,2.629h-2.588v7.247c4.881,-0.661 8.646,-4.835 8.646,-9.897c0,-5.523 -4.477,-10 -10,-10z"></path></g></g>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0,0,256,256">
                        <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(10.66667,10.66667)"><path d="M8,3c-2.761,0 -5,2.239 -5,5v8c0,2.761 2.239,5 5,5h8c2.761,0 5,-2.239 5,-5v-8c0,-2.761 -2.239,-5 -5,-5zM18,5c0.552,0 1,0.448 1,1c0,0.552 -0.448,1 -1,1c-0.552,0 -1,-0.448 -1,-1c0,-0.552 0.448,-1 1,-1zM12,7c2.761,0 5,2.239 5,5c0,2.761 -2.239,5 -5,5c-2.761,0 -5,-2.239 -5,-5c0,-2.761 2.239,-5 5,-5zM12,9c-1.65685,0 -3,1.34315 -3,3c0,1.65685 1.34315,3 3,3c1.65685,0 3,-1.34315 3,-3c0,-1.65685 -1.34315,-3 -3,-3z"></path></g></g>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0,0,256,256">
                            <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M34.21875,5.46875c-5.98047,0 -10.84375,4.86328 -10.84375,10.84375c0,0.35938 0.08984,0.71094 0.125,1.0625c-7.39453,-0.70703 -13.93359,-4.26953 -18.375,-9.71875c-0.20703,-0.26172 -0.52734,-0.40234 -0.86328,-0.37891c-0.33203,0.02344 -0.62891,0.21484 -0.79297,0.50391c-0.93359,1.60547 -1.46875,3.45313 -1.46875,5.4375c0,2.40234 0.85938,4.60156 2.1875,6.40625c-0.25781,-0.11328 -0.53906,-0.17578 -0.78125,-0.3125c-0.30859,-0.16406 -0.67969,-0.15625 -0.98047,0.02344c-0.30078,0.17969 -0.48438,0.50391 -0.48828,0.85156v0.125c0,3.68359 1.90625,6.88281 4.71875,8.84375c-0.03125,-0.00391 -0.0625,0.00781 -0.09375,0c-0.34375,-0.05859 -0.69141,0.0625 -0.92187,0.32422c-0.23047,0.26172 -0.30469,0.625 -0.20312,0.95703c1.11719,3.47266 3.96875,6.125 7.5,7.09375c-2.8125,1.67188 -6.07422,2.65625 -9.59375,2.65625c-0.76172,0 -1.49219,-0.03906 -2.21875,-0.125c-0.46875,-0.0625 -0.91797,0.21094 -1.07422,0.65625c-0.16016,0.44531 0.01563,0.94141 0.41797,1.1875c4.51172,2.89453 9.86719,4.59375 15.625,4.59375c9.33203,0 16.65234,-3.89844 21.5625,-9.46875c4.91016,-5.57031 7.46875,-12.80469 7.46875,-19.5625c0,-0.28516 -0.02344,-0.5625 -0.03125,-0.84375c1.83203,-1.40234 3.46875,-3.04687 4.75,-4.96875c0.25391,-0.37109 0.22656,-0.86719 -0.06641,-1.21094c-0.28906,-0.34375 -0.77734,-0.44922 -1.18359,-0.25781c-0.51562,0.23047 -1.11719,0.25391 -1.65625,0.4375c0.71094,-0.94922 1.32031,-1.97266 1.6875,-3.125c0.125,-0.39453 -0.01172,-0.82812 -0.33594,-1.08594c-0.32422,-0.25391 -0.77734,-0.28516 -1.13281,-0.07031c-1.70703,1.01172 -3.59766,1.72266 -5.59375,2.15625c-1.9375,-1.8125 -4.48828,-3.03125 -7.34375,-3.03125zM34.21875,7.46875c2.55078,0 4.85547,1.08984 6.46875,2.8125c0.24219,0.25 0.59766,0.35547 0.9375,0.28125c1.30469,-0.25781 2.54297,-0.63672 3.75,-1.125c-0.69531,0.9375 -1.55469,1.73828 -2.5625,2.34375c-0.45703,0.22266 -0.67187,0.75 -0.50391,1.23047c0.16406,0.47656 0.66406,0.75391 1.16016,0.64453c1,-0.12109 1.89063,-0.52734 2.84375,-0.78125c-0.85547,0.92578 -1.79297,1.76172 -2.8125,2.5c-0.27734,0.20313 -0.42969,0.53125 -0.40625,0.875c0.01563,0.40625 0.03125,0.80859 0.03125,1.21875c0,6.25 -2.39844,13.03516 -6.96875,18.21875c-4.57031,5.18359 -11.28125,8.8125 -20.0625,8.8125c-3.98828,0 -7.75391,-0.88281 -11.15625,-2.4375c4.21875,-0.32422 8.10938,-1.81641 11.25,-4.28125c0.32813,-0.26172 0.45703,-0.69922 0.32422,-1.09766c-0.13281,-0.39844 -0.5,-0.67187 -0.91797,-0.68359c-3.29687,-0.05859 -6.05859,-1.97656 -7.53125,-4.6875c0.05469,0 0.10156,0 0.15625,0c0.98828,0 1.96484,-0.125 2.875,-0.375c0.4375,-0.12891 0.73828,-0.53516 0.72266,-0.99219c-0.01562,-0.45703 -0.33984,-0.84766 -0.78516,-0.94531c-3.55859,-0.71875 -6.22656,-3.61719 -6.84375,-7.21875c1.00781,0.34766 2.03906,0.62109 3.15625,0.65625c0.45703,0.02734 0.87109,-0.25781 1.01172,-0.69141c0.14063,-0.43359 -0.03125,-0.91016 -0.41797,-1.15234c-2.375,-1.58984 -3.9375,-4.29687 -3.9375,-7.375c0,-1.14062 0.29688,-2.1875 0.6875,-3.1875c5,5.48828 12,9.13281 19.90625,9.53125c0.3125,0.01563 0.61719,-0.11328 0.82031,-0.35156c0.20313,-0.24219 0.28125,-0.5625 0.21094,-0.86719c-0.15234,-0.64844 -0.25,-1.33594 -0.25,-2.03125c0,-4.89844 3.94531,-8.84375 8.84375,-8.84375z"></path></g></g>
                            </svg>

            </div>
            
        </div>
    </footer>
    

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const links = document.querySelectorAll('a[href^="#"]');
            links.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href').substring(1);
                    const targetElement = document.getElementById(targetId);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop,
                            behavior: 'smooth'
                        });
                    }
                });
            });

            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.nav-link');

            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.5
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const sectionId = entry.target.id;
                        navLinks.forEach(link => {
                            const divInsideLink = link.querySelector('div');
                            if (link.getAttribute('data-section') === sectionId) {
                        
                                if (divInsideLink) {
                                    divInsideLink.classList.add('active');
                                }
                                
                            } else {
                             
                                if (divInsideLink) {
                                    divInsideLink.classList.remove('active');
                                }
                            
                            }
                        });
                    }
                });
            }, observerOptions);

            sections.forEach(section => {
                observer.observe(section);
            });
        });
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>
</body>

</html>
