<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Your awesome website built with Tailwind CSS.">
    <meta name="keywords" content="HTML, CSS, Tailwind, Web Development, Pakistan, Ali Samtia">
    <meta name="author" content="Ali Samtia">

    <!-- Social Media Icons -->
    <meta property="og:title" content="Ali Samtia — WordPress & Laravel PHP Developer">
    <meta property="og:description" content="Ali Samtia is a PHP developer building fast, responsive websites using WordPress, Laravel, and Tailwind CSS." />
    <meta property="og:image" content="/images/social_media.webp">
    <meta property="og:url" content="https://alisamtia.com/">
    <meta property="og:type" content="website">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="/images/twitter_img.webp">
    <meta name="twitter:title" content="Ali Samtia — WordPress & Laravel PHP Developer">
    <meta name="twitter:description" content="Ali Samtia is a PHP developer building fast, responsive websites using WordPress, Laravel, and Tailwind CSS." />
    <meta name="twitter:image" content="/images/twitter_img.webp">

    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">

    <title>Ali Samtia — WordPress & Laravel PHP Developer</title>

    <link rel="canonical" href="https://alisamtia.com/">

    <link rel="stylesheet" href="/build/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500&display=swap" rel="stylesheet">

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Person",
            "name": "Ali Samtia",
            "url": "https://alisamtia.com",
            "sameAs": [
                "https://github.com/alisamtia",
                "https://web.facebook.com/profile.php?id=100089726413534"
            ],
            "jobTitle": "WordPress & PHP Developer",
            "worksFor": {
                "@type": "Organization",
                "name": "Freelancer"
            },
            "knowsAbout": [
                "PHP",
                "Laravel",
                "WordPress",
                "Tailwind CSS",
                "Frontend Development"
            ],
            "address": {
                "@type": "PostalAddress",
                "addressCountry": "PK",
                "addressRegion": "Punjab",
                "addressLocality": "Layyah"
            }
        }
    </script>

    <script src="https://www.google.com/recaptcha/api.js?render=6Le0IWorAAAAADRWWVh9pbHcjlJHukGE_3wggQcQ"></script>
    <style>
        /* Optional CSS if not using Tailwind for the blinking cursor */
        @keyframes blink {

            0%,
            100% {
                opacity: 1
            }

            50% {
                opacity: 0
            }
        }

        .blink {
            animation: blink 1s step-start infinite;
        }

        .grecaptcha-badge {
            visibility: hidden;
        }

        html {
            scroll-behavior: smooth;
        }
    </style>

</head>

<body>

<!-- Header Start -->
<header id="header" class="transition-all lg:top-0 z-[1000] shadow bg-gray-50 w-[100%] py-4 sm:py-7 px-4 lg:flex justify-between sm:px-10 items-center border-b lg:border-b-0">
    <div class="w-full lg:w-36 flex justify-between items-center">
        <div class="w-36">
            <a href="/"><img id="logo" src="images/alisamtia-logo.webp" aria-label="Alisamtia Website Developer Website Logo"/></a>
        </div>

        <div class="flex lg:hidden">
            <button id="open-mobile-menu-btn" class="inline-flex items-center justify-center p-2 w-10 h-10 text-sm text-gray-500 hover:text-gray-700 rounded-lg hover:bg-gray-100" aria-controls="navbar-hamburger" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>

        </div>
    </div>

    <div aria-label="Primary navigation" class="hidden lg:block w-full" id="navbar-mobile">
        <ul class="flex flex-col font-medium rounded-lg bg-gray-50 font-heading mt-3 lg:mt-0 lg:flex-row lg:justify-end lg:flex lg:gap-7 lg:uppercase">
            <li>
                <a href="#" class="block py-2 px-3 text-white rounded-sm hover:bg-gray-100 lg:p-0 bg-black lg:bg-transparent lg:font-normal lg:text-black lg:hover:underline lg:underline-offset-4" aria-current="page">Home</a>
            </li>
            <li>
                <a href="#about-me" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 lg:p-0 lg:bg-transparent lg:font-normal lg:hover:underline lg:underline-offset-4">About</a>
            </li>
            <li>
                <a href="#my-mission" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 lg:p-0 lg:bg-transparent lg:font-normal lg:hover:underline lg:underline-offset-4">My Mission</a>
            </li>
            <li>
                <a href="#my-services" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 lg:p-0 lg:bg-transparent lg:font-normal lg:hover:underline lg:underline-offset-4">My Expertise</a>
            </li>
            <li>
                <a href="#my-projects" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 lg:p-0 lg:bg-transparent lg:font-normal lg:hover:underline lg:underline-offset-4">Portfolio</a>
            </li>
            <li>
                <a href="#contact-me" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 lg:p-0 lg:bg-transparent lg:font-normal lg:hover:underline lg:underline-offset-4">Contact</a>
            </li>
        </ul>
    </div>

</header>
<!-- Header End -->
<main>
    <section
            class="bg-gray-50 flex flex-col justify-center overflow-hidden sm:flex-row w-(100%) gap-10 px-4 py-10 pb-0 sm:px-24 md:px-16 lg:px-36 min-h-[800px] sm:min-h-[600px] md:min-h-[550px] lg:min-h-[650px] font-heading">


        <div class="flex z-10 flex-col gap-7 justify-center w-full md:1/2 py-6 sm:py-8 sm:gap-4 lg:gap-4 xl:gap-6 md:py-10">
            <h1 class="text-2xl">HELLO, <strong>I AM ALI SAMTIA</strong></h1>

            <h2 class="text-3xl sm:text-3xl flex gap-2 font-heading sm:text-xl md:text-3xl lg:text-3xl xl:text-5xl">
                <div class="font-light">I'm</div>
                <div class="flex items-end gap-2">
                    <span id="typewriter" class="font-extrabold uppercase"></span><span
                            class="border-black animate-pulse">|</span>
                </div>
            </h2>

            <p class="font-paragraph w-full md:w-[80%]">
                A Self-Taught <strong>WordPress & PHP Developer</strong> based in Pakistan 🇵🇰. I build clean, responsive
                websites that actually convert—no fluff, just results.
            </p>

            <div class="flex">

                <a href="#contact-me"
                   class="font-paragraph text-white bg-black hover:bg-transparent hover:text-black transition-colors delay-150 duration-300 border border-transparent hover:border-gray-200 font-medium rounded-md text-sm px-5 py-2.5 text-center inline-flex items-center me-2 mb-2">
                    Let’s Talk
                    <svg class="w-4 h-4 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                         viewBox="0 0 20 20">
                        <path d="M7 17L17 7M17 7H8M17 7V16" fill-rule="evenodd" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round" clip-rule="evenodd"/>
                    </svg>
                </a>

                <a href="https://github.com/alisamtia" target="_blank" rel="noopener noreferrer"
                   class="group font-paragraph text-black bg-transparent hover:bg-black hover:text-white transition-colors delay-150 duration-300 border border-gray-200 hover:border-black font-medium rounded-md text-sm px-5 py-2.5 text-center inline-flex items-center me-2 mb-2">
                    View on GitHub
                    <svg class="w-4 h-4 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                         viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                              d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                              clip-rule="evenodd"/>
                    </svg>
                </a>

            </div>


            <div class="flex items-center gap-3 mt-8 sm:mt-4 md:mt-8">
                <h4 class="text-4xl font-bold font-sans">60+</h4>
                <p class="text-md">WordPress Websites Created</p>
                <div class="border border-gray-200 h-6"></div>
                <div class="flex gap-1">
                    <a href="https://github.com/alisamtia" target="_blank" rel="noopener noreferrer">
                        <svg class="w-4 h-4 ms-2 fill-black hover:fill-gray-600 transition-colors duration-300"
                             aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                  d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </a>

                    <a href="https://web.facebook.com/profile.php?id=100089726413534" target="_blank" rel="noopener noreferrer">
                        <svg class="w-5 h-4 ms-2 fill-black hover:fill-gray-600 transition-colors duration-300" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2.03998C6.5 2.03998 2 6.52998 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.84998C10.44 7.33998 11.93 5.95998 14.22 5.95998C15.31 5.95998 16.45 6.14998 16.45 6.14998V8.61998H15.19C13.95 8.61998 13.56 9.38998 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96C15.9164 21.5878 18.0622 20.3855 19.6099 18.57C21.1576 16.7546 22.0054 14.4456 22 12.06C22 6.52998 17.5 2.03998 12 2.03998Z" fill-opacity="0.9"/>
                        </svg>
                    </a>
                </div>
            </div>

        </div>


        <div class="w-[100%] px-16 sm:px-0 flex justify-end items-end lg:w-[100%] xl:w-[50%]">
            <img src="images/ali-samtia-web-developer-pakistan.webp" alt="Ali Samtia - Web Developer from Pakistan"
                 style="width:auto;"/>
        </div>


    </section>

    <section id="about-me"
             class="py-[90px] sm:py-[100px] lg:py-[180px] px-4 sm:px-16 md:px-26 lg:px-36 w-[100%] flex flex-col gap-5 justify-center">

        <h2 class="text-2xl sm:text-3xl font-semibold font-heading tracking-widest">ABOUT ME</h2>
        <p class="text-gray-600 text-sm sm:text-md font-paragraph font-light leading-[24px] tracking-wider">
            I'm a 15-year-old web developer who’s been learning coding since I could spell "HTML." Based in Layyah,
            Pakistan, I specialize in crafting high-performance, beautiful websites using WordPress, PHP, and Tailwind
            CSS. I also dabble in Laravel and JS, and I'm always learning more. I don't just build sites—I build
            experiences.
        </p>

    </section>

    <section
            class="bg-black py-16 lg:py-24 px-4 sm:px-16 md:px-26 lg:px-36 flex flex-col gap-4 justify-center items-center">
        <h2 class="text-uppercase text-xl sm:text-4xl tracking-[10px] text-white font-heading font-thin tracking-wider sm:tracking-wider text-center">
            LOOKING FOR PHP & LARAVEL JOBS</h2>
        <a href="#contact-me"
           class="group font-paragraph text-white bg-transparent hover:bg-white hover:text-black transition-colors delay-150 duration-300 border border-gray-200 hover:border-black font-medium rounded-sm text-sm px-6 py-3 text-center inline-flex items-center">
            HIRE ME
        </a>
    </section>


    <section id="my-mission"
             class="pt-[60px] sm:pt-[100px] lg:pt-[180px] pb-[45px] sm:pb-[70px] lg:pb-[90px] px-4 sm:px-16 md:px-26 lg:px-36 w-[100%] flex flex-col-reverse sm:flex-row gap-10 justify-center items-center">

        <div class="flex flex-col gap-5 w-full sm:w-[70%]">
            <h2 class="text-2xl sm:text-3xl font-semibold font-heading tracking-widest">MY HISTORY</h2>
            <p class="text-gray-600 text-sm sm:text-md font-paragraph font-light leading-[24px] tracking-wider">
                I started building websites for local clients and friends, mostly WordPress stuff. Over time, I scaled
                up to full-stack PHP work, and now I’ve completed over 60+ websites from scratch in WordPress. Every
                project taught me something new—from debugging nightmares to finding elegant design solutions.
            </p>
        </div>

        <div class="w-full sm:w-[30%]">
            <img src="images/ali-samtia-php-wordpress-developer-journey.webp" loading="lazy"
                 alt="Ali Samtia sharing his journey as a PHP and WordPress developer"/>
        </div>

    </section>

    <section
            class="pb-[60px] sm:pb-[100px] lg:pb-[180px] pt-[45px] sm:pt-[70px] lg:pt-[90px] px-4 sm:px-16 md:px-26 lg:px-36 w-[100%] flex flex-col-reverse sm:flex-row-reverse gap-10 justify-center items-center">

        <div class="flex flex-col gap-5 w-full sm:w-[70%]">
            <h2 class="text-2xl sm:text-3xl font-semibold font-heading tracking-widest text-right">OUR MISSION</h2>
            <p class="text-gray-600 text-sm sm:text-md font-paragraph font-light leading-[24px] tracking-wider text-right">
                To help brands and creators build a strong online presence with minimal, effective, and
                performance-optimized websites. My mission is simple: fast, functional, and beautiful web experiences
                for everyone.
            </p>
        </div>

        <div class="w-full sm:w-[30%]">
            <img src="images/ali-samtia-committed-high-performance-minimal-websites.webp" loading="lazy"
                 alt="Ali Samtia — Committed to crafting high-performance, minimal websites"/>
        </div>

    </section>


    <section id="my-services"
             class="bg-gray-50 py-24 text-center flex flex-col gap-2 px-4 sm:px-16 md:px-26 lg:px-36 w-[100%]">
        <p class="text-md text-gray-500 uppercase">What I Offer</p>
        <h2 class="text-2xl sm:text-3xl font-semibold font-heading tracking-widest text-center">MY SERVICES</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 grid-rows-2 gap-7 mt-7">


            <article
                    class="bg-white py-12 px-12 border sm:border-none rounded-sm w-full shadow-sm flex flex-col gap-2 items-center">

                <svg width="50px" height="50px" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <style>
                            .a {
                                fill: none;
                                stroke: #000000;
                                stroke-linecap: round;
                                stroke-linejoin: round;
                            }
                        </style>
                    </defs>
                    <line class="a" x1="18.8239" y1="10.86" x2="30.2819" y2="10.86"/>
                    <line class="a" x1="5.5" y1="10.86" x2="15.2378" y2="10.86"/>
                    <line class="a" x1="21.3021" y1="10.86" x2="32.6467" y2="41.5132"/>
                    <line class="a" x1="27.0993" y1="10.86" x2="35.5453" y2="33.6813"/>
                    <line class="a" x1="6.5516" y1="10.86" x2="17.8441" y2="41.3725"/>
                    <line class="a" x1="12.3487" y1="10.86" x2="20.7427" y2="33.5405"/>
                    <line class="a" x1="25.2222" y1="21.437" x2="17.8441" y2="41.3725"/>
                    <line class="a" x1="40.3259" y1="20.7642" x2="32.6467" y2="41.5132"/>
                    <path class="a"
                          d="M40.3259,20.7642c.4373-1.5221,2.1741-3.8,2.1741-7.0761,0-5.1354-1.6632-7.2013-4.3746-7.2013-2.2158,0-3.0037,2.1283-3.0037,3.9067C35.1217,15.6706,40.3259,16.4,40.3259,20.7642Z"/>
                </svg>

                <h3 class="text-lg font-normal font-heading">WordPress Development</h3>
                <p class="text-gray-600 text-xs sm:text-sm font-paragraph font-light text-center mt-1">
                    From custom themes to full website builds, I develop powerful WordPress sites that are fast,
                    responsive, and easy to manage.
                </p>

            </article>


            <article
                    class="bg-white py-12 px-12 border sm:border-none rounded-sm w-full shadow-sm flex flex-col gap-2 items-center">

                <svg fill="#000000" width="50px" height="50px" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                    <g id="a"/>
                    <g id="b"/>
                    <g id="c"/>
                    <g id="d"/>
                    <g id="e"/>
                    <g id="f"/>
                    <g id="g"/>
                    <g id="h"/>
                    <g id="i"/>
                    <g id="j"/>
                    <g id="k"/>
                    <g id="l">
                        <path d="M55.07,26.51l-13.69-5.08-1.05-5.42c-.2-1.05-1.12-1.81-2.19-1.81H21.06c-1.03,0-1.95,.65-2.3,1.62l-2.94,8.29-1.93-1.86c-.66-.63-1.52-.98-2.44-.98h-3.19c-.95,0-1.86,.46-2.42,1.23l-1.37,1.89c-.61,.83-.62,1.96-.04,2.81l.66,.96c.3,.44,.75,.73,1.27,.83,.52,.1,1.05-.01,1.53-.35l1.8-1.31,3.07,4.21c.59,.81,1.57,1.22,2.57,1.06l8.53-1.38,1.04,.96v15.6c0,1.11,.9,2.02,2.01,2.02h4.69c.9,0,1.77-.33,2.44-.94l8.06-7.34,4.04,6.91c.5,.85,1.41,1.37,2.39,1.37h6.14c1.11,0,2.01-.9,2.01-2.02v-7.59l2.78-2.79c.71-.71,.71-1.88,0-2.59-.09-.09-.18-.17-.28-.23l-2.51-1.68v-4.09c0-1.02-.64-1.95-1.6-2.31Zm-28.47,4.53l-.98-.91,12.92-12.89,.99,5.12h0l1.54,7.97-9.96,4.89-4.5-4.17Zm-5.96-14.55c.06-.17,.23-.29,.41-.29h15.69l-13.04,13.02-8.03,1.3,4.97-14.03ZM6.73,27.03l-.66-.96c-.1-.15-.1-.35,0-.5l1.16-1.6,1.27,1.75-1.78,1.31Zm2.48-3.76h2.24c.39,0,.77,.15,1.05,.42l2.59,2.49-1.23,3.47-4.64-6.38Zm23.47,24.1c-.3,.27-.69,.42-1.09,.42l-4.7-.02v-13.74l3.36,3.11c.31,.29,.76,.34,1.12,.16l11.27-5.53c.41-.2,.63-.64,.54-1.09l-1.35-6.97,11.96,4.44-21.11,19.21Zm21.98,.42h-6.14c-.27,0-.53-.15-.66-.38l-4.25-7.28,11.07-10.08v17.74Zm3.23-11.66l-1.23,1.23v-2.05l1.23,.82Z"/>
                    </g>
                    <g id="m"/>
                    <g id="n"/>
                    <g id="o"/>
                    <g id="p"/>
                    <g id="q"/>
                    <g id="r"/>
                    <g id="s"/>
                    <g id="t"/>
                    <g id="u"/>
                    <g id="v"/>
                    <g id="w"/>
                    <g id="x"/>
                    <g id="y"/>
                    <g id="a`"/>
                    <g id="aa"/>
                    <g id="ab"/>
                    <g id="ac"/>
                    <g id="ad"/>
                    <g id="ae"/>
                    <g id="af"/>
                    <g id="ag"/>
                    <g id="ah"/>
                    <g id="ai"/>
                    <g id="aj"/>
                    <g id="ak"/>
                    <g id="al"/>
                    <g id="am"/>
                    <g id="an"/>
                    <g id="ao"/>
                    <g id="ap"/>
                    <g id="aq"/>
                    <g id="ar"/>
                    <g id="as"/>
                    <g id="at"/>
                    <g id="au"/>
                    <g id="av"/>
                    <g id="aw"/>
                    <g id="ax"/>
                </svg>

                <h3 class="text-lg font-normal font-heading">PHP Development</h3>
                <p class="text-gray-600 text-xs sm:text-sm font-paragraph font-light text-center mt-1">
                    Above all good design must primarily serve people.Various versions have evolved over the years,
                    sometimes by accident.
                </p>

            </article>


            <article
                    class="bg-white py-12 px-12 border sm:border-none rounded-sm w-full shadow-sm flex flex-col gap-2 items-center">

                <svg fill="#000000" width="50px" height="50px" viewBox="0 0 32 32" version="1.1"
                     xmlns="http://www.w3.org/2000/svg">
                    <title>laravel</title>
                    <path d="M13.143 23.585l10.46-5.97-4.752-2.736-10.453 6.019zM24.084 11.374l-4.757-2.736v5.417l4.758 2.737zM24.559 5.078l-4.756 2.736 4.756 2.736 4.755-2.737zM9.911 18.928l2.76-1.589v-11.934l-4.758 2.738v11.934zM7.437 1.846l-4.756 2.737 4.756 2.737 4.753-2.737zM2.204 5.406v18.452l10.464 6.022v-5.471l-5.472-3.096c-0.018-0.013-0.032-0.027-0.051-0.039-0.014-0.013-0.030-0.023-0.044-0.034l-0.001-0.003c-0.015-0.015-0.028-0.031-0.039-0.049l-0.001-0.001c-0.014-0.013-0.025-0.028-0.035-0.045l-0.001-0.001h-0.003c-0.008-0.015-0.016-0.035-0.024-0.055l-0.001-0.004c-0.007-0.015-0.015-0.032-0.022-0.051l-0.001-0.003c-0.004-0.020-0.008-0.045-0.010-0.070l-0-0.002c-0.003-0.015-0.006-0.033-0.008-0.051l-0-0.001v-12.759l-2.757-1.59zM24.085 23.857v-5.422l-10.464 5.974v5.47zM29.789 14.055v-5.417l-4.756 2.737v5.417zM30.725 7.69c0.011 0.038 0.018 0.081 0.018 0.126v0 6.513c-0 0.176-0.095 0.329-0.237 0.411l-0.002 0.001-5.468 3.149v6.241c-0 0.175-0.095 0.328-0.236 0.411l-0.002 0.001-11.416 6.57c-0.024 0.013-0.052 0.025-0.081 0.033l-0.003 0.001-0.030 0.013c-0.036 0.011-0.078 0.017-0.121 0.017s-0.085-0.006-0.125-0.018l0.003 0.001c-0.015-0.004-0.027-0.009-0.039-0.016l0.001 0.001c-0.031-0.011-0.057-0.021-0.082-0.033l0.004 0.002-11.413-6.57c-0.144-0.084-0.239-0.237-0.239-0.412v0-19.548c0-0.044 0.007-0.087 0.019-0.127l-0.001 0.003c0.004-0.015 0.013-0.025 0.018-0.040 0.009-0.029 0.019-0.053 0.030-0.076l-0.001 0.003c0.008-0.016 0.018-0.030 0.029-0.042l-0 0 0.042-0.057 0.047-0.034c0.018-0.015 0.034-0.030 0.052-0.043h0.001l5.708-3.285c0.068-0.040 0.15-0.064 0.237-0.064s0.169 0.024 0.239 0.065l-0.002-0.001 5.71 3.285c0.019 0.013 0.035 0.027 0.051 0.042l-0-0 0.048 0.034c0.016 0.018 0.025 0.038 0.042 0.057 0.012 0.012 0.022 0.026 0.031 0.041l0.001 0.001c0.010 0.020 0.020 0.044 0.029 0.069l0.001 0.004 0.016 0.040c0.011 0.035 0.018 0.076 0.018 0.118 0 0.002 0 0.004-0 0.006v-0 12.208l4.756-2.737v-6.241c0-0.001 0-0.002 0-0.002 0-0.043 0.006-0.085 0.017-0.125l-0.001 0.003c0.004-0.013 0.013-0.025 0.016-0.040 0.010-0.030 0.020-0.054 0.032-0.078l-0.002 0.004c0.009-0.015 0.023-0.025 0.032-0.042 0.015-0.019 0.027-0.038 0.042-0.054 0.014-0.013 0.029-0.025 0.045-0.035l0.001-0.001c0.018-0.013 0.033-0.029 0.052-0.040h0.001l5.708-3.286c0.068-0.040 0.15-0.064 0.237-0.064s0.169 0.024 0.239 0.065l-0.002-0.001 5.708 3.286c0.020 0.013 0.034 0.027 0.053 0.039 0.015 0.013 0.032 0.023 0.046 0.035 0.016 0.018 0.028 0.038 0.043 0.056 0.011 0.012 0.021 0.026 0.030 0.040l0.001 0.001c0.012 0.022 0.022 0.047 0.030 0.073l0.001 0.003c0.008 0.012 0.014 0.025 0.019 0.039l0 0.001z"></path>
                </svg>

                <h3 class="text-lg font-normal font-heading">Laravel Exploration</h3>
                <p class="text-gray-600 text-xs sm:text-sm font-paragraph font-light text-center mt-1">
                    Currently expanding into Laravel for backend development — learning MVC structure, routing,
                    authentication, and REST APIs. Open to internship opportunities.
                </p>

            </article>


            <article
                    class="bg-white py-12 px-12 border sm:border-none rounded-sm w-full shadow-sm flex flex-col gap-2 items-center">

                <svg width="50px" height="50px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21.73 10.456l.685-.742A2.454 2.454 0 0 1 23 11.433c0 2.744-3.938 5.032-7.947 5.941l1.396-1.434c3.007-1.002 5.55-2.746 5.55-4.507a1.595 1.595 0 0 0-.268-.977zm-19.53.25c0-3.745 5.101-6.434 9.664-6.505h.16c2.01 0 2.323.337 2.539.57a1.266 1.266 0 0 1 .331.918 2.856 2.856 0 0 1-.142.824 3.555 3.555 0 0 0-.17.991 1.863 1.863 0 0 0 1.632 1.882l.862-.84c-.873-.102-1.494-.342-1.494-1.042 0-.548.312-.997.312-1.815a2.27 2.27 0 0 0-.606-1.607c-.345-.372-.817-.88-3.264-.88h-.16C6.828 3.28 1.2 6.237 1.2 10.704c0 3.164 2.758 5.244 5.785 6.292a3.098 3.098 0 0 1 1.147-.683c-3.038-.84-5.932-2.76-5.932-5.609zM12 7.5A1.5 1.5 0 1 1 10.5 6 1.5 1.5 0 0 1 12 7.5zm-1 0a.5.5 0 1 0-.5.5.5.5 0 0 0 .5-.5zM6.5 11A1.5 1.5 0 1 1 8 9.5 1.5 1.5 0 0 1 6.5 11zM7 9.5a.5.5 0 1 0-.5.5.5.5 0 0 0 .5-.5zm3 4A1.5 1.5 0 1 1 8.5 12a1.5 1.5 0 0 1 1.5 1.5zm-1 0a.5.5 0 1 0-.5.5.5.5 0 0 0 .5-.5zm13.11-7.483L18.4 9.35l-7.45 7.25 1.4 1.4 7.25-7.449 3.383-3.661a.626.626 0 0 0-.873-.873zM9.368 17.619l1.439 1.738a2.94 2.94 0 0 1-1.63 2.234 3.92 3.92 0 0 1-1.626.359 3.598 3.598 0 0 1-1.733-.427s1.8-.968 1.809-2.464c.006-1.38 1.451-1.44 1.703-1.44zm.35 1.99l-.78-.94a.379.379 0 0 0-.311.395 3.191 3.191 0 0 1-.633 1.85 3.042 3.042 0 0 0 .772-.234 1.823 1.823 0 0 0 .952-1.07z"/>
                    <path fill="none" d="M0 0h24v24H0z"/>
                </svg>


                <h3 class="text-lg font-normal font-heading">Frontend Design</h3>
                <p class="text-gray-600 text-xs sm:text-sm font-paragraph font-light text-center mt-1">
                    HTML, CSS & Tailwind CSS I build clean, modern interfaces using semantic HTML, flexible layouts, and
                    utility-first Tailwind CSS for pixel-perfect responsiveness.
                </p>

            </article>


            <article
                    class="bg-white py-12 px-12 border sm:border-none rounded-sm w-full shadow-sm flex flex-col gap-2 items-center">

                <svg width="50px" height="50px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M23 3H3a1.001 1.001 0 0 0-1 1v2h1V4h20v13H9v1h2v1h-1v1h6v-1h-1v-1h8a1.001 1.001 0 0 0 1-1V4a1.001 1.001 0 0 0-1-1zm-9 16h-2v-1h2zM7.25 7H.75a.751.751 0 0 0-.75.75v13.5a.751.751 0 0 0 .75.75h6.5a.751.751 0 0 0 .75-.75V7.75A.751.751 0 0 0 7.25 7zM7 21H1V8h6zM6 10H2V9h4zm0 2H2v-1h4zm0 2H2v-1h4zm-1 1h1v1H5z"/>
                    <path fill="none" d="M0 0h24v24H0z"/>
                </svg>

                <h3 class="text-lg font-normal font-heading">Responsive Web Design</h3>
                <p class="text-gray-600 text-xs sm:text-sm font-paragraph font-light text-center mt-1">
                    I ensure that every site looks sharp and works seamlessly across all devices — mobile, tablet, or
                    desktop.
                </p>

            </article>


            <article
                    class="bg-white py-12 px-12 border sm:border-none rounded-sm w-full shadow-sm flex flex-col gap-2 items-center">

                <svg width="50px" height="50px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                    <title>ionicons-v5-c</title>
                    <polyline points="352 144 464 144 464 256"
                              style="fill:none;stroke:#000000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/>
                    <path d="M48,368,169.37,246.63a32,32,0,0,1,45.26,0l50.74,50.74a32,32,0,0,0,45.26,0L448,160"
                          style="fill:none;stroke:#000000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/>
                </svg>

                <h3 class="text-lg font-normal font-heading">Basic SEO Setup</h3>
                <p class="text-gray-600 text-xs sm:text-sm font-paragraph font-light text-center mt-1">
                    I follow SEO best practices like clean code, proper heading structure, meta tags, and speed
                    optimization for better search visibility.
                </p>

            </article>


        </div>
    </section>

    <section class="hidden" id="my-projects">
        <div class="py-28 px-4 lg:px-0 flex flex-col justify-center items-center gap-2">
            <p class="text-md text-gray-500 uppercase text-center">What I Offer</p>
            <h2 class="text-2xl sm:text-3xl font-semibold font-heading tracking-widest text-center">MY PROJECTS</h2>
            <p class="text-gray-400 text-center">
                I ensure that every site looks sharp and works seamlessly across all devices — mobile, tablet, or
                desktop.
            </p>
            <hr class="mt-4 w-24 border-black"/>
        </div>
        <!-- Include Font Awesome for GitHub Icon -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-0">

            <a href="https://github.com/yourusername/project1" target="_blank" class="group relative overflow-hidden">
                <img src="https://as2.ftcdn.net/jpg/02/87/55/79/1000_F_287557939_1nPdlpdptbTreAi24RW2kIgh8Ce4y8Aq.jpg"
                     loading="lazy" alt="Project 1"
                     class="w-full h-72 object-cover transition duration-300 group-hover:scale-105">
                <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 flex items-center justify-center transition duration-300">
                    <i class="fab fa-github text-white text-3xl"></i>
                </div>
            </a>

            <a href="https://github.com/yourusername/project2" target="_blank" class="group relative overflow-hidden">
                <img src="https://as1.ftcdn.net/jpg/02/00/09/66/1000_F_200096607_ddMpEWJW7MI9JL3JKLX0NZefAPat8a7b.jpg"
                     loading="lazy" alt="Project 2"
                     class="w-full h-72 object-cover transition duration-300 group-hover:scale-105">
                <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 flex items-center justify-center transition duration-300">
                    <i class="fab fa-github text-white text-3xl"></i>
                </div>
            </a>

            <a href="https://github.com/yourusername/project2" target="_blank" class="group relative overflow-hidden">
                <img src="https://as1.ftcdn.net/jpg/00/80/89/46/1000_F_80894643_fk1NShSuQNSaK6EBRBZGIsPDdyd3bbj6.jpg"
                     loading="lazy" alt="Project 2"
                     class="w-full h-72 object-cover transition duration-300 group-hover:scale-105">
                <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 flex items-center justify-center transition duration-300">
                    <i class="fab fa-github text-white text-3xl"></i>
                </div>
            </a>

            <a href="https://github.com/yourusername/project1" target="_blank" class="group relative overflow-hidden">
                <img src="https://as2.ftcdn.net/jpg/02/87/55/79/1000_F_287557939_1nPdlpdptbTreAi24RW2kIgh8Ce4y8Aq.jpg"
                     loading="lazy" alt="Project 1"
                     class="w-full h-72 object-cover transition duration-300 group-hover:scale-105">
                <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 flex items-center justify-center transition duration-300">
                    <i class="fab fa-github text-white text-3xl"></i>
                </div>
            </a>

            <a href="https://github.com/yourusername/project2" target="_blank" class="group relative overflow-hidden">
                <img src="https://as1.ftcdn.net/jpg/02/00/09/66/1000_F_200096607_ddMpEWJW7MI9JL3JKLX0NZefAPat8a7b.jpg"
                     loading="lazy" alt="Project 2"
                     class="w-full h-72 object-cover transition duration-300 group-hover:scale-105">
                <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 flex items-center justify-center transition duration-300">
                    <i class="fab fa-github text-white text-3xl"></i>
                </div>
            </a>

            <a href="https://github.com/yourusername/project2" target="_blank" class="group relative overflow-hidden">
                <img src="https://as1.ftcdn.net/jpg/00/80/89/46/1000_F_80894643_fk1NShSuQNSaK6EBRBZGIsPDdyd3bbj6.jpg"
                     loading="lazy" alt="Project 2"
                     class="w-full h-72 object-cover transition duration-300 group-hover:scale-105">
                <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 flex items-center justify-center transition duration-300">
                    <i class="fab fa-github text-white text-3xl"></i>
                </div>
            </a>

        </div>
    </section>

    <section id="contact-me" class="px-4 sm:px-16 md:px-26 lg:px-36 w-[100%] justify-self-center">
        <div class="flex flex-col sm:flex-row gap-10 justify-between py-24 sm:py-36">

            <div class="flex flex-col gap-2 items-center group">
                <svg class="fill-black" width="40px" height="40px" viewBox="0 -5 32 32"
                     xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid">
                    <path d="M29.000,22.000 L3.000,22.000 C1.346,22.000 -0.000,20.654 -0.000,19.000 L-0.000,3.000 C-0.000,1.346 1.346,-0.000 3.000,-0.000 L29.000,-0.000 C30.654,-0.000 32.000,1.346 32.000,3.000 L32.000,19.000 C32.000,20.654 30.654,22.000 29.000,22.000 ZM3.000,20.000 L29.000,20.000 C29.551,20.000 30.000,19.552 30.000,19.000 L30.000,3.317 L16.651,14.759 C16.463,14.920 16.232,15.000 16.000,15.000 C15.768,15.000 15.537,14.920 15.349,14.759 L2.000,3.317 L2.000,19.000 C2.000,19.552 2.449,20.000 3.000,20.000 ZM28.464,2.000 L3.536,2.000 L16.000,12.683 L28.464,2.000 Z"/>
                </svg>
                <h4 class="transition-all text-gray-600 group-hover:text-black text-2xl font-heading font-medium tracking-widest text-center">
                    EMAIL
                </h4>
                <a href="mailto:contact@alisamtia.com" title="Send Email"
                   class="text-center text-gray-400 group-hover:underline group-hover:text-gray-800 underline-offset-4">contact@alisamtia.com</a>
            </div>


            <div class="flex flex-col gap-2 items-center group">
                <svg class="stroke-black" width="40px" height="40px" viewBox="0 0 24 24" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 5.5C3 14.0604 9.93959 21 18.5 21C18.8862 21 19.2691 20.9859 19.6483 20.9581C20.0834 20.9262 20.3009 20.9103 20.499 20.7963C20.663 20.7019 20.8185 20.5345 20.9007 20.364C21 20.1582 21 19.9181 21 19.438V16.6207C21 16.2169 21 16.015 20.9335 15.842C20.8749 15.6891 20.7795 15.553 20.6559 15.4456C20.516 15.324 20.3262 15.255 19.9468 15.117L16.74 13.9509C16.2985 13.7904 16.0777 13.7101 15.8683 13.7237C15.6836 13.7357 15.5059 13.7988 15.3549 13.9058C15.1837 14.0271 15.0629 14.2285 14.8212 14.6314L14 16C11.3501 14.7999 9.2019 12.6489 8 10L9.36863 9.17882C9.77145 8.93713 9.97286 8.81628 10.0942 8.64506C10.2012 8.49408 10.2643 8.31637 10.2763 8.1317C10.2899 7.92227 10.2096 7.70153 10.0491 7.26005L8.88299 4.05321C8.745 3.67376 8.67601 3.48403 8.55442 3.3441C8.44701 3.22049 8.31089 3.12515 8.15802 3.06645C7.98496 3 7.78308 3 7.37932 3H4.56201C4.08188 3 3.84181 3 3.63598 3.09925C3.4655 3.18146 3.29814 3.33701 3.2037 3.50103C3.08968 3.69907 3.07375 3.91662 3.04189 4.35173C3.01413 4.73086 3 5.11378 3 5.5Z"
                          stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <h4 class="transition-all text-gray-600 group-hover:text-black text-2xl font-heading font-medium tracking-widest text-center">
                    PHONE
                </h4>
                <a href="http://wa.me/923081074466" title="Contact Now"
                   class="text-center text-gray-400 group-hover:underline group-hover:text-gray-800 underline-offset-4">+92-308-1074466</a>
            </div>

            <div class="flex flex-col gap-2 items-center group">
                <svg width="40px" height="40px" viewBox="0 0 1024 1024" fill="#000000" class="icon" version="1.1"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M512 1012.8c-253.6 0-511.2-54.4-511.2-158.4 0-92.8 198.4-131.2 283.2-143.2h3.2c12 0 22.4 8.8 24 20.8 0.8 6.4-0.8 12.8-4.8 17.6-4 4.8-9.6 8.8-16 9.6-176.8 25.6-242.4 72-242.4 96 0 44.8 180.8 110.4 463.2 110.4s463.2-65.6 463.2-110.4c0-24-66.4-70.4-244.8-96-6.4-0.8-12-4-16-9.6-4-4.8-5.6-11.2-4.8-17.6 1.6-12 12-20.8 24-20.8h3.2c85.6 12 285.6 50.4 285.6 143.2 0.8 103.2-256 158.4-509.6 158.4z m-16.8-169.6c-12-11.2-288.8-272.8-288.8-529.6 0-168 136.8-304.8 304.8-304.8S816 145.6 816 313.6c0 249.6-276.8 517.6-288.8 528.8l-16 16-16-15.2zM512 56.8c-141.6 0-256.8 115.2-256.8 256.8 0 200.8 196 416 256.8 477.6 61.6-63.2 257.6-282.4 257.6-477.6C768.8 172.8 653.6 56.8 512 56.8z m0 392.8c-80 0-144.8-64.8-144.8-144.8S432 160 512 160c80 0 144.8 64.8 144.8 144.8 0 80-64.8 144.8-144.8 144.8zM512 208c-53.6 0-96.8 43.2-96.8 96.8S458.4 401.6 512 401.6c53.6 0 96.8-43.2 96.8-96.8S564.8 208 512 208z"
                          fill=""/>
                </svg>
                <h4 class="transition-all text-gray-600 group-hover:text-black text-2xl font-heading font-medium tracking-widest text-center">
                    ADDRESS
                </h4>
                <span class="text-center text-gray-400 group-hover:underline group-hover:text-gray-800 underline-offset-4">Pakistan, Punjab</span>
            </div>


        </div>


        <form id="contact-form" class="mx-auto mb-16 sm:mb-36">


            <div class="flex flex-col sm:flex-row gap-10">

                <div class="relative z-0 w-full mb-5 group" id="main-name">
                    <input type="text" name="name" id="name"
                           class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-black peer"
                           required placeholder=" "/> <!-- required -->
                    <label for="name"
                           class="font-paragraph peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 z-[10]">Name</label>
                </div>

                <div class="relative z-0 w-full mb-5 group" id="main-email">
                    <input type="email" name="email" id="email"
                           class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-black peer"
                           required placeholder=" "/> <!-- required -->
                    <label for="email"
                           class="font-paragraph peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 z-[10]">Email
                        address</label>
                </div>

            </div>

            <div class="relative z-0 w-full mt-10 sm:mt-24 mb-5 group" id="main-message">
                <textarea rows="10" name="message" id="message"
                          class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-black peer"
                          required minlength="20" maxlength="1000" placeholder=" "></textarea> <!-- required -->
                <label for="message"
                       class="font-paragraph peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 z-[10]">
                    Message
                </label>
            </div>

            <div id="main-robot">
                <input type="hidden" name="g-recaptcha-response" id="recaptcha-token"/>
            </div>

            <div class="flex justify-end mt-10">
                <button id="form-submit" type="submit"
                        class="disabled:border-gray-400 disabled:hover:bg-gray-500 disabled:text-gray-400 disabled:cursor-not-allowed text-black uppercase font-paragraph font-normal border border-black text-sm w-full sm:w-auto px-6 py-4 text-center hover:bg-black hover:text-white transition-all">
                    Let’s Connect
                </button>
            </div>

        </form>

    </section>
</main>

<footer class="px-4 sm:px-16 md:px-26 lg:px-36 py-4 flex flex-col lg:flex-row justify-between bg-gray-50">
    <p class="text-md font-light tracking-wider text-gray-200 text-center lg:text-left text-neutral-600 text-xs font-paragraph">
        Coded with ❤️ by Ali Samtia | &copy; 2025 All rights reserved</p>
    <span class="text-center lg:text-right text-neutral-600 text-xs font-paragraph">
      This site is protected by reCAPTCHA and the Google
      <a href="https://www.google.com/policies/privacy/" target="_blank" class="underline hover:text-black">Privacy Policy</a>
      and
      <a href="https://www.google.com/policies/terms/" target="_blank" class="underline hover:text-black">Terms of Service</a> apply.
    </span>
</footer>

<button id="scroll-btn" onclick="window.scrollTo({top: 0, behavior: 'smooth'})"
        class="group transition-all duration-500 ease-in-out fixed bottom-[-40px] right-5 bg-white border px-3 py-3 rounded-full shadow-sm hover:bg-black hover:border-black transition">
    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
         class="stroke-black group-hover:stroke-white">
        <path d="M12 5V19M12 5L6 11M12 5L18 11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
</button>

</body>

<script src="https://unpkg.com/lenis@1.3.4/dist/lenis.min.js"></script>
<script src="/build/script.min.js"></script>

</html>