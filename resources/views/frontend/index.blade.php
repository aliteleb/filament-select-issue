@extends('frontend.layout.master')

@section('content')

    <div id="primary" class="content-area">
        <main id="main" class="site-main">


            <div data-elementor-type="wp-page" data-elementor-id="2889" class="elementor elementor-2889">

                <!-- Slider -->
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-2de93d81 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                    data-id="2de93d81" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7e5f4db0" data-id="7e5f4db0"
                             data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-22f86568 travo-slider elementor-widget elementor-widget-bdt-slideshow" data-id="22f86568"
                                     data-element_type="widget" data-widget_type="bdt-slideshow.default">
                                    <div class="elementor-widget-container">
                                        <div
                                            data-bdt-slideshow="{&quot;animation&quot;:&quot;slide&quot;,&quot;ratio&quot;:&quot;100%:450&quot;,&quot;min-height&quot;:750,&quot;autoplay&quot;:true,&quot;autoplay-interval&quot;:7000,&quot;pause-on-hover&quot;:false,&quot;velocity&quot;:1}"
                                            class="bdt-arrows-align-center">
                                            <div class="bdt-position-relative bdt-visible-toggle">


                                                <ul class="bdt-slideshow-items">

                                                    @for($i = 0; $i < 0; $i++)
                                                        <li class="bdt-slideshow-item elementor-repeater-item-a1d1af5">


                                                            <video class="object-cover" loop style="width: 100% !important; height: 100% !important; display: block;" autoplay muted
                                                                   preload="undefined" width="100%" height="100%">
                                                                <source src="{{ asset('assets/videos/sample-video.mp4') }}" type="video/mp4">
                                                            </video>

                                                            <div class="bdt-overlay-default bdt-position-cover bdt-blend-multiply"></div>

                                                            <div class="bdt-slideshow-content-wrapper bdt-position-z-index bdt-position-center bdt-position-large bdt-text-left">

                                                                <div>
                                                                    <h1 class="bdt-slideshow-title bdt-display-inline-block text-5xl font-semibold"
                                                                        bdt-slideshow-parallax="{&quot;x&quot;:&quot;300, -300&quot;,&quot;y&quot;:&quot;0, 0&quot;}">Look &amp;
                                                                        Feel the World
                                                                    </h1>
                                                                </div>

                                                                {{--
                                                                <div class="bdt-slideshow-text"
                                                                     bdt-slideshow-parallax="{&quot;x&quot;:&quot;500, -500&quot;,&quot;y&quot;:&quot;0, 0&quot;}">Phasellus
                                                                    sagittis sem eget sapien consequat, vitae porttitor felis feugiat. Nullam suscipit condimentum hendrerit.
                                                                </div>
                                                                --}}

                                                                <div>
                                                                    <a href="#" target="_self" rel="noreferrer"
                                                                       class="bdt-slideshow-button bdt-display-inline-block drop-shadow-2xl bg-[#21bdbc] text-white px-6 py-3 pb-2 text-xl font-bold"
                                                                       bdt-slideshow-parallax="{&quot;x&quot;:&quot;-150, 150&quot;,&quot;y&quot;:&quot;0, 0&quot;}">
                                                                        RESERVE NOW
                                                                    </a>
                                                                </div>

                                                            </div>

                                                        </li>
                                                    @endfor

                                                    @for($i = 0; $i <= 0; $i++)
                                                        <li class="bdt-slideshow-item elementor-repeater-item-a1d1af5">

                                                            <img decoding="async"
                                                                 src="{{ asset('assets/images/mainbanner.jpg') }}"
                                                                 alt="Home" class="bdt-cover" data-bdt-cover="">

                                                            <div class="bdt-overlay-default bdt-position-cover bdt-blend-multiply"></div>

                                                            <div class="bdt-slideshow-content-wrapper bdt-position-z-index bdt-position-center bdt-position-large bdt-text-left">

                                                                <div>
                                                                    <h1 class="bdt-slideshow-title bdt-display-inline-block text-5xl font-semibold"
                                                                        bdt-slideshow-parallax="{&quot;x&quot;:&quot;300, -300&quot;,&quot;y&quot;:&quot;0, 0&quot;}">Look &amp;
                                                                        Feel the World
                                                                    </h1>
                                                                </div>

                                                                {{--
                                                                <div class="bdt-slideshow-text"
                                                                     bdt-slideshow-parallax="{&quot;x&quot;:&quot;500, -500&quot;,&quot;y&quot;:&quot;0, 0&quot;}">Phasellus
                                                                    sagittis sem eget sapien consequat, vitae porttitor felis feugiat. Nullam suscipit condimentum hendrerit.
                                                                </div>
                                                                --}}

                                                                <div>
                                                                    <a href="#" target="_self" rel="noreferrer"
                                                                       class="bdt-slideshow-button bdt-display-inline-block drop-shadow-2xl bg-[#21bdbc] text-white px-6 py-3 pb-2 text-xl font-bold"
                                                                       bdt-slideshow-parallax="{&quot;x&quot;:&quot;-150, 150&quot;,&quot;y&quot;:&quot;0, 0&quot;}">
                                                                        RESERVE NOW
                                                                    </a>
                                                                </div>

                                                            </div>

                                                        </li>
                                                    @endfor

                                                </ul>

                                                <div class="bdt-position-z-index bdt-position-center bdt-visible@m">
                                                    <div class="bdt-arrows-container bdt-slidenav-container">
                                                        <a href="" class="bdt-navigation-prev bdt-slidenav-previous bdt-icon bdt-slidenav"
                                                           data-bdt-slideshow-item="previous">
                                                            <i class="ep-icon-arrow-left-0" aria-hidden="true"></i>
                                                        </a>
                                                        <a href="" class="bdt-navigation-next bdt-slidenav-next bdt-icon bdt-slidenav" data-bdt-slideshow-item="next">
                                                            <i class="ep-icon-arrow-right-0" aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Slider -->

                <!-- Packages -->
                <section class="my-24 max-w-screen-2xl mx-auto">

                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="w-full">
                            <h2 class="text-center w-full text-3xl font-bold uppercase text-[--primary-blue]">Our Packages</h2>
                            <img class="block mx-auto my-2 w-14 h-5" src="{{ asset('assets/icons/under_title.svg') }}" alt="-">
                        </div>
                        <div class="flex flex-row flex-wrap justify-center justify-items-center gap-x-[5rem] w-full pt-10 gap-y-10">
                            @for($i = 0; $i < 6; $i++)
                                <div class="border shadow-lg flex flex-col justify-between w-[25rem] bg-white overflow-hidden">
                                    <a class="group h-[18rem] overflow-hidden relative hover:after:bg-black/30 after:size-full after:block hover:after:backdrop-blur-[.1rem] after:absolute after:top-0 after:transition after:duration-300">
                                        <img class="size-[25rem] object-cover group-hover:scale-110 transition duration-500"
                                             src="https://wordpressthemes.live/WP01/WP001/wp-content/uploads/2022/04/trip-01.jpg" alt="package">
                                        <button
                                            class="absolute transition opacity-0 border-0 rounded-none group-hover:opacity-90 duration-500 top-1/2 left-1/2 z-10 -translate-x-1/2 -translate-y-1/2 px-5 py-3 text-sm font-semibold text-white bg-[--secondary-cyan] hover:bg-[--secondary-blue]">
                                            View Details
                                        </button>
                                    </a>
                                    <div class="p-3 space-y-3">
                                        <div class="text-xl font-bold text-[#132249]">
                                            Greece Tour
                                        </div>
                                        <div class="text-lg">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet at dolorum ducimus earum fugit id minus molestiae mollitia nam numquam
                                            obcaecati, quae quod, veniam. Doloremque et excepturi molestiae nulla vel.
                                        </div>
                                        <div class="h-2"></div>
                                        <a href="#_" class="block relative w-[8rem] px-5 py-2 font-medium text-white group">
                                            <span
                                                class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform translate-x-0 -skew-x-12 bg-[--secondary-blue] group-hover:bg-[--primary-blue] group-hover:skew-x-12"></span>
                                            <span
                                                class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform skew-x-12 bg-[--primary-blue] group-hover:bg-[--secondary-blue] group-hover:-skew-x-12"></span>
                                            <span
                                                class="absolute bottom-0 left-0 hidden w-10 h-20 transition-all duration-100 ease-out transform -translate-x-8 translate-y-10 bg-[--secondary-blue] -rotate-12"></span>
                                            <span
                                                class="absolute bottom-0 right-0 hidden w-10 h-20 transition-all duration-100 ease-out transform translate-x-10 translate-y-8 bg-[--primary-blue] -rotate-12"></span>
                                            <span class="relative">
                                                        More
                                                        <i class="fas fa-angle-double-right mx-1"></i>
                                                    </span>
                                        </a>


                                    </div>


                                </div>
                            @endfor
                        </div>
                    </div>
                </section>

                {{--
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-636b2e46 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="636b2e46" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-673ed566" data-id="673ed566"
                             data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-274c21eb elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="274c21eb" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6fb58b4" data-id="6fb58b4"
                                             data-element_type="column">
                                            <div class="elementor-widget-wrap">
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-15dfc3a2"
                                             data-id="15dfc3a2"
                                             data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-77e2a12d elementor-widget elementor-widget-heading" data-id="77e2a12d"
                                                     data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">Go & Discover</h2></div>
                                                </div>
                                                <div class="elementor-element elementor-element-4cf3e067 elementor-widget elementor-widget-heading" data-id="4cf3e067"
                                                     data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">Breathtaking Cities</h2></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5891aae2"
                                             data-id="5891aae2"
                                             data-element_type="column">
                                            <div class="elementor-widget-wrap">
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-798c0a8e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="798c0a8e" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7af32e34"
                                             data-id="7af32e34"
                                             data-element_type="column">
                                            <div class="elementor-widget-wrap">
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1c7b71d8"
                                             data-id="1c7b71d8"
                                             data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-217c381c elementor-widget elementor-widget-video" data-id="217c381c"
                                                     data-element_type="widget"
                                                     data-settings="{&quot;youtube_url&quot;:&quot;https:\/\/www.youtube.com\/watch?v=XHOmBV4js_E&quot;,&quot;show_image_overlay&quot;:&quot;yes&quot;,&quot;image_overlay&quot;:{&quot;url&quot;:&quot;https:\/\/travo.iamabdus.com\/v1.1\/wp-content\/uploads\/2021\/04\/matthew-t-rader-Nd4U48Krc6E-unsplash-1.jpg&quot;,&quot;id&quot;:2682,&quot;size&quot;:&quot;&quot;},&quot;video_type&quot;:&quot;youtube&quot;,&quot;controls&quot;:&quot;yes&quot;}"
                                                     data-widget_type="video.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-wrapper elementor-open-inline">
                                                            <div class="elementor-video"></div>
                                                            <div class="elementor-custom-embed-image-overlay"
                                                                 style="background-image: url(https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/matthew-t-rader-Nd4U48Krc6E-unsplash-1.jpg.webp);">
                                                                <div class="elementor-custom-embed-play" role="button" aria-label="Play Video" tabindex="0">
                                                                    <i aria-hidden="true" class="eicon-play"></i> <span class="elementor-screen-only">Play Video</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-9290bc7" data-id="9290bc7"
                                             data-element_type="column">
                                            <div class="elementor-widget-wrap">
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </section>
                --}}

                {{--
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-f9dd200 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="f9dd200" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-545282c" data-id="545282c"
                             data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-0b60794 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="0b60794" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-d2f6771" data-id="d2f6771"
                                             data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div
                                                    class="elementor-element elementor-element-ebdc286 elementor-position-left elementor-vertical-align-middle bdt-title-link-yes icon-box-style1 bdt-icon-type-icon bdt-icon-effect-none elementor-widget elementor-widget-bdt-advanced-icon-box"
                                                    data-id="ebdc286" data-element_type="widget" data-widget_type="bdt-advanced-icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="bdt-ep-advanced-icon-box">


                                                            <div class="bdt-ep-advanced-icon-box-icon">
				<span class="bdt-ep-advanced-icon-box-icon-wrap">



						<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none"><path
                                d="M32.5 33.2812C32.0687 33.2812 31.7188 33.6313 31.7188 34.0625C31.7188 34.4938 32.0687 34.8438 32.5 34.8438C32.9312 34.8438 33.2812 34.4938 33.2812 34.0625C33.2812 33.6313 32.9312 33.2812 32.5 33.2812Z"
                                fill="#2E2E2E"></path><path
                                d="M34.8437 3.70563V2.34375C34.8437 1.05141 33.7923 0 32.5 0H7.5C6.20768 0 5.15625 1.05141 5.15625 2.34375V3.70563C0.0603907 13.1169 0.000234375 12.8374 0 13.2804C0 13.2807 0 13.281 0 13.2812V14.8437C0 16.1979 0.782971 17.4573 2.03125 18.1734V39.2188C2.03125 39.6501 2.38109 40 2.8125 40H37.1875C37.6189 40 37.9687 39.6501 37.9687 39.2188V18.1734C39.2044 17.4579 40 16.1837 40 14.8437V13.2812C40 13.281 40 13.2807 40 13.2804C39.9998 12.8326 39.8899 13.0251 34.8437 3.70563ZM37.8975 12.5H33.0631L30.459 4.6875H33.6006L37.8975 12.5ZM27.0313 14.0625H31.7188V14.8437C31.7188 16.1361 30.6674 17.1875 29.375 17.1875C28.0827 17.1875 27.0313 16.1361 27.0313 14.8437V14.0625ZM26.9118 12.5L25.6098 4.6875H28.8119L31.416 12.5H26.9118ZM6.71877 2.34375C6.71877 1.91297 7.06923 1.5625 7.5 1.5625H32.5C32.9308 1.5625 33.2812 1.91297 33.2812 2.34375V3.125C32.5373 3.125 7.46843 3.125 6.71877 3.125V2.34375ZM25.4687 14.0625V14.8437C25.4687 16.1361 24.4173 17.1875 23.125 17.1875C21.8326 17.1875 20.7812 16.1361 20.7812 14.8437V14.0625H25.4687ZM20.7812 12.5V4.6875H24.0257L25.3278 12.5H20.7812ZM14.6723 12.5L15.9744 4.6875H19.2188V12.5H14.6723ZM19.2188 14.0625V14.8437C19.2188 16.1361 18.1674 17.1875 16.875 17.1875C15.5827 17.1875 14.5313 16.1361 14.5313 14.8437V14.0625H19.2188ZM8.58389 12.5L11.1881 4.6875H14.3902L13.0881 12.5H8.58389ZM12.9687 14.0625V14.8437C12.9687 16.1361 11.9173 17.1875 10.625 17.1875C9.33264 17.1875 8.28123 16.1361 8.28123 14.8437V14.0625H12.9687ZM6.39936 4.6875H9.54101L6.93685 12.5H2.1025L6.39936 4.6875ZM1.5625 14.8437V14.0625H6.71877V14.8437C6.71877 16.0704 5.48992 17.1875 4.14062 17.1875C3.80047 17.1875 3.44797 17.1137 3.11985 16.9733C2.18836 16.5771 1.5625 15.7212 1.5625 14.8437ZM16.0938 38.4375H8.28123V31.7188H16.0938V38.4375ZM16.0938 30.1563H8.28123V23.4375H16.0938V30.1563ZM36.4062 38.4375H17.6563V22.6563C17.6563 22.2249 17.3064 21.875 16.875 21.875H7.5C7.06859 21.875 6.71877 22.2249 6.71877 22.6563V38.4375H3.59375V18.7118C3.77484 18.7364 3.95726 18.75 4.14062 18.75C5.16883 18.75 6.20821 18.3427 6.99205 17.6323C7.16539 17.4753 7.32149 17.3074 7.46155 17.1313C8.17205 18.1111 9.32501 18.75 10.625 18.75C11.9015 18.75 13.0367 18.1345 13.75 17.1847C14.4633 18.1345 15.5985 18.75 16.875 18.75C18.1515 18.75 19.2867 18.1345 20 17.1847C20.7133 18.1345 21.8485 18.75 23.125 18.75C24.4015 18.75 25.5367 18.1345 26.25 17.1847C26.9633 18.1345 28.0985 18.75 29.375 18.75C30.675 18.75 31.8279 18.1111 32.5385 17.1313C32.6785 17.3074 32.8346 17.4753 33.0079 17.6323C33.7918 18.3427 34.8311 18.75 35.8594 18.75C36.0423 18.75 36.2248 18.7369 36.4062 18.7121V38.4375ZM38.4375 14.8437C38.4375 15.7459 37.7884 16.6116 36.8223 16.998C36.5064 17.1238 36.1825 17.1875 35.8594 17.1875C34.5101 17.1875 33.2812 16.0704 33.2812 14.8437V14.0625H38.4375V14.8437Z"
                                fill="#2E2E2E"></path><path
                                d="M34.0625 30.1563H33.2812V22.6563C33.2812 22.2249 32.9314 21.875 32.5 21.875H23.125C22.6936 21.875 22.3438 22.2249 22.3438 22.6563V30.1563H21.5625C21.1311 30.1563 20.7812 30.5061 20.7812 30.9375C20.7812 31.3689 21.1311 31.7188 21.5625 31.7188H34.0625C34.4939 31.7188 34.8438 31.3689 34.8438 30.9375C34.8438 30.5061 34.4939 30.1563 34.0625 30.1563ZM31.7188 30.1563H23.9063V23.4375H31.7188V30.1563Z"
                                fill="#2E2E2E"></path><path
                                d="M29.375 33.2812H23.125C22.6936 33.2812 22.3438 33.6311 22.3438 34.0625C22.3438 34.4939 22.6936 34.8438 23.125 34.8438H29.375C29.8064 34.8438 30.1563 34.4939 30.1563 34.0625C30.1563 33.6311 29.8064 33.2812 29.375 33.2812Z"
                                fill="#2E2E2E"></path></svg>

									</span>
                                                            </div>


                                                            <div class="bdt-ep-advanced-icon-box-content">


                                                                <h3 class="bdt-ep-advanced-icon-box-title"
                                                                    onclick="window.open(&#039;https://travo.iamabdus.com/v1.1/tour-details/&#039;, &#039;_self&#039;)">
				<span>
					Shops &amp; Boutiques				</span>
                                                                </h3>


                                                                <div class="bdt-ep-advanced-icon-box-description">
                                                                    <p>Vivamus semper ultricies leo. eget vulputate.</p></div>

                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-adee9b2" data-id="adee9b2"
                                             data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div
                                                    class="elementor-element elementor-element-34ec8ee elementor-position-left elementor-vertical-align-middle bdt-title-link-yes icon-box-style1 bdt-icon-type-icon bdt-icon-effect-none elementor-widget elementor-widget-bdt-advanced-icon-box"
                                                    data-id="34ec8ee" data-element_type="widget" data-widget_type="bdt-advanced-icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="bdt-ep-advanced-icon-box">


                                                            <div class="bdt-ep-advanced-icon-box-icon">
				<span class="bdt-ep-advanced-icon-box-icon-wrap">



						<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none"><path
                                d="M20 0C12.2459 0 5.9375 6.30843 5.9375 14.0625C5.9375 16.6823 6.66321 19.239 8.03665 21.4572L19.1995 39.446C19.4133 39.7906 19.7901 40 20.1953 40C20.1984 40 20.2014 40 20.2045 40C20.6132 39.9968 20.9907 39.781 21.2006 39.4303L32.079 21.2672C33.3766 19.0959 34.0625 16.6046 34.0625 14.0625C34.0625 6.30843 27.7541 0 20 0ZM30.0677 20.0639L20.1775 36.577L10.0287 20.2223C8.8855 18.3761 8.26561 16.2461 8.26561 14.0625C8.26561 7.6008 13.5383 2.32812 20 2.32812C26.4617 2.32812 31.7266 7.6008 31.7266 14.0625C31.7266 16.1813 31.1476 18.2569 30.0677 20.0639Z"
                                fill="#2E2E2E"></path><path
                                d="M20 7.03125C16.123 7.03125 12.9688 10.1855 12.9688 14.0625C12.9688 17.9148 16.0716 21.0938 20 21.0938C23.9768 21.0938 27.0313 17.8724 27.0313 14.0625C27.0313 10.1855 23.877 7.03125 20 7.03125ZM20 18.7656C17.4018 18.7656 15.2969 16.6536 15.2969 14.0625C15.2969 11.4778 17.4153 9.35936 20 9.35936C22.5847 9.35936 24.6953 11.4778 24.6953 14.0625C24.6953 16.6158 22.6394 18.7656 20 18.7656Z"
                                fill="#2E2E2E"></path></svg>

									</span>
                                                            </div>


                                                            <div class="bdt-ep-advanced-icon-box-content">


                                                                <h3 class="bdt-ep-advanced-icon-box-title"
                                                                    onclick="window.open(&#039;https://travo.iamabdus.com/v1.1/tour-details/&#039;, &#039;_self&#039;)">
				<span>
					Sightseeing				</span>
                                                                </h3>


                                                                <div class="bdt-ep-advanced-icon-box-description">
                                                                    <p>Nullam nibh purus, pretium ac dapibus in.</p></div>

                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-e2e15ef" data-id="e2e15ef"
                                             data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div
                                                    class="elementor-element elementor-element-ba3b02d elementor-position-left elementor-vertical-align-middle bdt-title-link-yes icon-box-style1 bdt-icon-type-icon bdt-icon-effect-none elementor-widget elementor-widget-bdt-advanced-icon-box"
                                                    data-id="ba3b02d" data-element_type="widget" data-widget_type="bdt-advanced-icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="bdt-ep-advanced-icon-box">


                                                            <div class="bdt-ep-advanced-icon-box-icon">
				<span class="bdt-ep-advanced-icon-box-icon-wrap">



						<svg xmlns="http://www.w3.org/2000/svg" width="40" height="41" viewBox="0 0 40 41" fill="none"><path
                                d="M24.8443 16.571C23.5307 16.571 22.2548 16.826 21.0523 17.3286C20.6542 17.495 20.4663 17.9529 20.6325 18.3512C20.7989 18.7497 21.2565 18.9375 21.6546 18.7713C22.6654 18.3487 23.7385 18.1345 24.8443 18.1345C29.4106 18.1345 33.1256 21.8519 33.1256 26.421C33.1256 30.99 29.4106 34.7073 24.8443 34.7073C20.278 34.7073 16.563 30.99 16.563 26.421C16.563 25.3162 16.7765 24.2438 17.1975 23.2338C17.3636 22.8353 17.1753 22.3776 16.7772 22.2113C16.3792 22.0454 15.9214 22.2335 15.7553 22.6319C15.2545 23.8337 15.0005 25.1085 15.0005 26.421C15.0005 31.8522 19.4164 36.2708 24.8443 36.2708C30.2722 36.2708 34.688 31.8522 34.688 26.421C34.688 20.9897 30.2722 16.571 24.8443 16.571Z"
                                fill="#2E2E2E"></path><path
                                d="M24.8443 32.8312C28.3767 32.8312 31.2505 29.9556 31.2505 26.421C31.2505 22.8863 28.3767 20.0107 24.8443 20.0107C21.3118 20.0107 18.438 22.8863 18.438 26.421C18.438 29.9556 21.3119 32.8312 24.8443 32.8312ZM24.8443 21.5742C27.5151 21.5742 29.688 23.7485 29.688 26.421C29.688 29.0934 27.5151 31.2677 24.8443 31.2677C22.1734 31.2677 20.0005 29.0935 20.0005 26.421C20.0005 23.7484 22.1734 21.5742 24.8443 21.5742Z"
                                fill="#2E2E2E"></path><path
                                d="M36.0379 12.8189H33.6613L30.9335 8.19987C30.793 7.96181 30.5372 7.8158 30.261 7.8158H19.4276C19.1513 7.8158 18.8955 7.96181 18.755 8.19987L16.0273 12.8189H11.5625V11.8808C11.5625 10.329 10.3009 9.06655 8.74998 9.06655C7.19916 9.06655 5.9375 10.329 5.9375 11.8808V12.8189H3.96219C1.77743 12.8189 0 14.5974 0 16.7836V36.0586C0 38.2448 1.77743 40.0233 3.96219 40.0233H36.0378C38.2226 40.0233 40 38.2448 40 36.0586V16.7836C40.0001 14.5974 38.2226 12.8189 36.0379 12.8189ZM19.8734 9.37927H29.8151L31.8464 12.8189H17.8422L19.8734 9.37927ZM7.50001 11.8808C7.50001 11.1912 8.06081 10.63 8.74998 10.63C9.43921 10.63 10 11.1912 10 11.8808V12.8189H7.50001V11.8808ZM38.4375 36.0586C38.4375 37.3827 37.3611 38.4598 36.0379 38.4598H3.96219C2.63899 38.4598 1.5625 37.3826 1.5625 36.0586V16.7836C1.5625 15.4595 2.63899 14.3824 3.96219 14.3824H36.0378C37.361 14.3824 38.4375 15.4595 38.4375 16.7836V36.0586H38.4375Z"
                                fill="#2E2E2E"></path><path
                                d="M24.8442 24.8966C25.6843 24.8966 26.3677 25.5805 26.3677 26.421C26.3677 26.8528 26.7175 27.2027 27.1489 27.2027C27.5804 27.2027 27.9302 26.8528 27.9302 26.421C27.9302 24.7184 26.5458 23.3331 24.8442 23.3331C24.4128 23.3331 24.063 23.6832 24.063 24.1149C24.063 24.5466 24.4128 24.8966 24.8442 24.8966Z"
                                fill="#2E2E2E"></path><path
                                d="M24.8442 5.75903C25.2757 5.75903 25.6255 5.40894 25.6255 4.97729V0.804931C25.6255 0.373254 25.2757 0.0231934 24.8442 0.0231934C24.4128 0.0231934 24.063 0.373176 24.063 0.804931V4.97729C24.063 5.40905 24.4128 5.75903 24.8442 5.75903Z"
                                fill="#2E2E2E"></path><path
                                d="M28.5618 5.75898C28.7617 5.75898 28.9617 5.68262 29.1143 5.53004L31.9807 2.66177C32.2858 2.3565 32.2858 1.86151 31.9807 1.55616C31.6756 1.25097 31.1809 1.25097 30.8758 1.55616L28.0094 4.42451C27.7043 4.72977 27.7043 5.22477 28.0094 5.5301C28.162 5.68272 28.3619 5.75898 28.5618 5.75898Z"
                                fill="#2E2E2E"></path><path
                                d="M20.5743 5.53002C20.7268 5.6826 20.9268 5.75896 21.1267 5.75896C21.3266 5.75896 21.5266 5.6826 21.6791 5.53002C21.9842 5.22474 21.9843 4.72975 21.6792 4.4244L18.8127 1.55613C18.5076 1.25102 18.0129 1.25095 17.7079 1.55613C17.4028 1.8614 17.4027 2.3564 17.7078 2.66174L20.5743 5.53002Z"
                                fill="#2E2E2E"></path><path
                                d="M10.7812 19.2289H6.71878C6.28726 19.2289 5.9375 19.579 5.9375 20.0106C5.9375 20.4424 6.28726 20.7924 6.71878 20.7924H10.7812C11.2128 20.7924 11.5625 20.4424 11.5625 20.0106C11.5625 19.5789 11.2128 19.2289 10.7812 19.2289Z"
                                fill="#2E2E2E"></path><path
                                d="M18.4344 20.7924C18.6399 20.7924 18.8414 20.7087 18.9867 20.5633C19.1321 20.4179 19.2156 20.2169 19.2156 20.0106C19.2156 19.805 19.1321 19.6034 18.9867 19.4579C18.8414 19.3126 18.6399 19.2289 18.4344 19.2289C18.2289 19.2289 18.0274 19.3125 17.882 19.4579C17.736 19.6034 17.6531 19.8051 17.6531 20.0106C17.6531 20.2162 17.736 20.4179 17.882 20.5633C18.0274 20.7087 18.2281 20.7924 18.4344 20.7924Z"
                                fill="#2E2E2E"></path></svg>

									</span>
                                                            </div>


                                                            <div class="bdt-ep-advanced-icon-box-content">


                                                                <h3 class="bdt-ep-advanced-icon-box-title"
                                                                    onclick="window.open(&#039;https://travo.iamabdus.com/v1.1/tour-details/&#039;, &#039;_self&#039;)">
				<span>
					Restaurants				</span>
                                                                </h3>


                                                                <div class="bdt-ep-advanced-icon-box-description">
                                                                    <p>Proin porttitor posuere diam, a iaculis dolor.</p></div>

                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </section>
                --}}

                <!-- Featured Courses -->
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-85a1b30 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="85a1b30" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-90ce3bc" data-id="90ce3bc"
                             data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">

                                <div class="w-full">
                                    <h2 class="text-center w-full text-3xl font-bold uppercase text-[--primary-blue]">Featured Courses</h2>
                                </div>
                                <div
                                    class="elementor-element elementor-element-302fc98f skin--default skin--tablet-default skin--mobile-default elementor-widget elementor-widget-bdt-image-accordion"
                                    data-id="302fc98f" data-element_type="widget" data-widget_type="bdt-image-accordion.default">
                                    <div class="elementor-widget-container">

                                        <div id="bdt-ep-image-accordion-302fc98f" class="bdt-ep-image-accordion"
                                             data-settings="{&quot;tabs_id&quot;:&quot;bdt-ep-image-accordion-302fc98f&quot;,&quot;mouse_event&quot;:&quot;mouseover&quot;}">

                                            <div class="bdt-ep-image-accordion-item"
                                                 style="background-image: url('https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/03/swiss-village-beautiful-mountains-austria-1.jpg.webp');">
                                                <div class="bdt-ep-image-accordion-content">
                                                    <div class="bdt-ep-image-accordion-sub-title">
                                                        $850
                                                    </div>

                                                    <a href="https://travo.iamabdus.com/v1.1/tour-details/">
                                                        <h2 class="bdt-ep-image-accordion-title">
                                                            Skiing In Alps </h2>
                                                    </a>

                                                    <div class="bdt-ep-image-accordion-text">
                                                        <p>Phasellus nec magna convallis, tempor dolor ut, iaculis orci. Vestibulum eleifend ligula tincidunt pharetra
                                                            euismod.
                                                            Duis interdum ut arcu sit amet tempus.</p></div>

                                                    <div class="bdt-ep-image-accordion-button">
                                                        <a href="https://travo.iamabdus.com/v1.1/tour-details/">
                                                            Book Now </a>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="bdt-ep-image-accordion-item"
                                                 style="background-image: url('https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/03/tour-featured-img-17.jpg');">
                                                <div class="bdt-ep-image-accordion-content">
                                                    <div class="bdt-ep-image-accordion-sub-title">
                                                        $3500
                                                    </div>

                                                    <a href="https://travo.iamabdus.com/v1.1/tour-details/">
                                                        <h2 class="bdt-ep-image-accordion-title">
                                                            Active Winter </h2>
                                                    </a>

                                                    <div class="bdt-ep-image-accordion-text">
                                                        <p>Phasellus nec magna convallis, tempor dolor ut, iaculis orci. Vestibulum eleifend ligula tincidunt pharetra
                                                            euismod.
                                                            Duis interdum ut arcu sit amet tempus.</p></div>

                                                    <div class="bdt-ep-image-accordion-button">
                                                        <a href="https://travo.iamabdus.com/v1.1/tour-details/">
                                                            Book Now </a>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="bdt-ep-image-accordion-item"
                                                 style="background-image: url('https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/03/dawn-view-toledo-1.jpg');">
                                                <div class="bdt-ep-image-accordion-content">
                                                    <div class="bdt-ep-image-accordion-sub-title">
                                                        $1050
                                                    </div>

                                                    <a href="https://travo.iamabdus.com/v1.1/tour-details/">
                                                        <h2 class="bdt-ep-image-accordion-title">
                                                            Vatican City </h2>
                                                    </a>

                                                    <div class="bdt-ep-image-accordion-text">
                                                        <p>Phasellus nec magna convallis, tempor dolor ut, iaculis orci. Vestibulum eleifend ligula tincidunt pharetra
                                                            euismod.
                                                            Duis interdum ut arcu sit amet tempus.</p></div>

                                                    <div class="bdt-ep-image-accordion-button">
                                                        <a href="https://travo.iamabdus.com/v1.1/tour-details/">
                                                            Book Now </a>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="bdt-ep-image-accordion-item"
                                                 style="background-image: url('https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/miriam-eh-RpbeFhCGwrM-unsplash-1.jpg');">
                                                <div class="bdt-ep-image-accordion-content">
                                                    <div class="bdt-ep-image-accordion-sub-title">
                                                        $1950
                                                    </div>

                                                    <a href="https://travo.iamabdus.com/v1.1/tour-details/">
                                                        <h2 class="bdt-ep-image-accordion-title">
                                                            Seville </h2>
                                                    </a>

                                                    <div class="bdt-ep-image-accordion-text">
                                                        <p>Phasellus nec magna convallis, tempor dolor ut, iaculis orci. Vestibulum eleifend ligula tincidunt pharetra
                                                            euismod.
                                                            Duis interdum ut arcu sit amet tempus.</p></div>

                                                    <div class="bdt-ep-image-accordion-button">
                                                        <a href="https://travo.iamabdus.com/v1.1/tour-details/">
                                                            Book Now </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Featured Courses -->

                <!-- Trips -->
                <section class="my-24 max-w-screen-2xl px-8 xl:px-16 mx-auto">

                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="w-full">
                            <h2 class="text-center w-full text-3xl font-bold uppercase text-[--primary-blue]">Our Trips</h2>
                            <img class="block mx-auto my-2 w-14 h-5" src="{{ asset('assets/icons/under_title.svg') }}" alt="-">
                        </div>
                        <div class="grid lg:grid-cols-[1fr_1fr] justify-items-center lg:gap-x-[2rem] xl:gap-x-[5rem] w-full pt-10 gap-y-10">
                            @for($i = 0; $i < 4; $i++)
                                <div
                                    class="group h-[23rem] w-full border shadow-lg overflow-hidden rounded relative hover:after:bg-black/40 after:size-full after:block after:absolute after:top-0 after:transition after:duration-300">
                                    <img class="size-full object-cover group-hover:scale-[1.15] transition ease-in-out duration-1000"
                                         src="https://wordpressthemes.live/WP01/WP001/wp-content/uploads/2022/04/activity-05.jpg" alt="package">
                                    <a href="#"
                                       class="absolute transition border-0 rounded-none group-hover:opacity-90 duration-500 top-1/2 left-1/2 z-10 -translate-x-1/2 -translate-y-1/2 px-5 py-3 text-3xl font-semibold text-white uppercase">Climbing</a>
                                </div>
                            @endfor
                        </div>
                    </div>
                </section>
                <!-- Trips -->

                <!-- Reviews -->
                <section style="background-image: url('{{ asset('assets/images/bg_testimonials.jpg') }}')"
                    class="my-24  elementor-section elementor-top-section elementor-element elementor-element-5f058ed3 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="5f058ed3" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-background-overlay"></div>
                    <div class="mx-auto elementor-column-gap-default max-w-screen-2xl">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3a94b4b6" data-id="3a94b4b6"
                             data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated e-swiper-container">
                                <div class="w-full">
                                    <h2 class="text-center w-full text-5xl font-bold uppercase text-white">CLIENTS REVIEW</h2>
                                    <img class="block mx-auto my-2 w-14 h-5" src="{{ asset('assets/icons/title_white.svg') }}" alt="-">
                                </div>
                                <div
                                    class="elementor-element elementor-element-bba6aa4 bdt-navigation-type-arrows bdt-carousel-style-carousel elementor-widget elementor-widget-bdt-testimonial-carousel e-widget-swiper"
                                    data-id="bba6aa4" data-element_type="widget"
                                    data-settings="{&quot;columns&quot;:&quot;2&quot;,&quot;columns_tablet&quot;:&quot;2&quot;,&quot;columns_mobile&quot;:&quot;1&quot;}"
                                    data-widget_type="bdt-testimonial-carousel.default">
                                    <div class="elementor-widget-container">
                                        <div id="bdt-testimonial-carousel-bba6aa4"
                                             class="bdt-arrows-align-bottom-right bdt-testimonial-carousel bdt-testimonials-twyla- skin-default"
                                             data-settings="{&quot;autoplay&quot;:{&quot;delay&quot;:5000},&quot;loop&quot;:true,&quot;speed&quot;:500,&quot;slidesPerView&quot;:1,&quot;slidesPerGroup&quot;:1,&quot;spaceBetween&quot;:30,&quot;effect&quot;:&quot;carousel&quot;,&quot;breakpoints&quot;:{&quot;767&quot;:{&quot;slidesPerView&quot;:2,&quot;spaceBetween&quot;:35,&quot;slidesPerGroup&quot;:1},&quot;1023&quot;:{&quot;slidesPerView&quot;:2,&quot;spaceBetween&quot;:400,&quot;slidesPerGroup&quot;:1}},&quot;navigation&quot;:{&quot;nextEl&quot;:&quot;#bdt-testimonial-carousel-bba6aa4 .bdt-navigation-next&quot;,&quot;prevEl&quot;:&quot;#bdt-testimonial-carousel-bba6aa4 .bdt-navigation-prev&quot;},&quot;pagination&quot;:{&quot;el&quot;:&quot;#bdt-testimonial-carousel-bba6aa4 .swiper-pagination&quot;,&quot;type&quot;:&quot;&quot;,&quot;clickable&quot;:&quot;true&quot;,&quot;dynamicBullets&quot;:false},&quot;scrollbar&quot;:{&quot;el&quot;:&quot;#bdt-testimonial-carousel-bba6aa4 .swiper-scrollbar&quot;,&quot;hide&quot;:&quot;true&quot;},&quot;coverflowEffect&quot;:{&quot;rotate&quot;:50,&quot;stretch&quot;:0,&quot;depth&quot;:100,&quot;modifier&quot;:1,&quot;slideShadows&quot;:true}}"
                                             data-bdt-height-match="target: > div > div > div > div > .bdt-testimonial-carousel-text">

                                            <div class="swiper-carousel swiper-container swiper-container-initialized swiper-container-horizontal">
                                                <div class="swiper-wrapper " style="transition-duration: 0ms; transform: translate3d(-3037.5px, 0px, 0px);">
                                                    <div class="swiper-slide bdt-testimonial-carousel-item bdt-review- swiper-slide-duplicate swiper-slide-duplicate-active"
                                                         itemprop="review" itemscope="" itemtype="http://schema.org/Review" data-swiper-slide-index="3"
                                                         style="width: 572.5px; margin-right: 35px;">
                                                        <div class="bdt-testimonial-carousel-item-wrapper">
                                                            <div class="testimonial-item-header">
                                                                <div class="bdt-grid bdt-grid-small bdt-flex-middle" data-bdt-grid="">

                                                                    <div class="bdt-width-auto bdt-flex bdt-position-relative bdt-first-column">
                                                                        <div
                                                                            class="bdt-testimonial-carousel-img-wrapper bdt-overflow-hidden bdt-border-circle bdt-background-cover">
                                                                            <img data-lazyloaded="1" src="data:image/svg+xml;base64," width="100" height="100" decoding="async"
                                                                                 data-src="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/03/gardener-testimonial-img-new-4.jpg.webp"
                                                                                 alt="Carl Moore">
                                                                            <noscript><img width="100" height="100" decoding="async"
                                                                                           src="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/03/gardener-testimonial-img-new-4.jpg.webp"
                                                                                           alt="Carl Moore"/></noscript>
                                                                        </div>
                                                                    </div>
                                                                    <div class="bdt-width-expand">
                                                                        <div class="bdt-testimonial-meta ">
                                                                            <h4 class="bdt-testimonial-carousel-title bdt-margin-remove-bottom" itemprop="name">Carl Moore</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="bdt-testimonial-carousel-text" itemprop="description" style="">
                                                                <p>Praesent vestibulum viverra libero in sollicitudin. Nulla ut nisl tellus. Fusce et arcu ante. Donec tincidunt,
                                                                    metus quis lacinia viverra, turpis justo tincidunt ipsum, blandit sollicitudin lorem metus nec neque. Proin
                                                                    pretium lectus at tellus imperdiet gravida. Suspendisse eget odio</p>
                                                            </div>

                                                            <div class="bdt-testimonial-carousel-rating">
                                                                <meta itemprop="datePublished" content="March 12, 2021">
                                                                <ul class="bdt-rating bdt-rating-4 bdt-grid bdt-grid-collapse" data-bdt-grid="" itemprop="reviewRating" itemscope=""
                                                                    itemtype="http://schema.org/Rating">
                                                                    <li class="bdt-rating-item bdt-first-column"><i class="ep-icon-star-full" aria-hidden="true"></i></li>
                                                                    <li class="bdt-rating-item"><i class="ep-icon-star-full" aria-hidden="true"></i></li>
                                                                    <li class="bdt-rating-item"><i class="ep-icon-star-full" aria-hidden="true"></i></li>
                                                                    <li class="bdt-rating-item"><i class="ep-icon-star-full" aria-hidden="true"></i></li>
                                                                    <li class="bdt-rating-item"><i class="ep-icon-star-full" aria-hidden="true"></i></li>
                                                                </ul>
                                                                <meta itemprop="worstRating" content="1">
                                                                <meta itemprop="ratingValue" content="4">
                                                                <meta itemprop="bestRating" content="5">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide bdt-testimonial-carousel-item bdt-review- swiper-slide-duplicate swiper-slide-duplicate-next"
                                                         itemprop="review" itemscope="" itemtype="http://schema.org/Review" data-swiper-slide-index="4"
                                                         style="width: 572.5px; margin-right: 35px;">
                                                        <div class="bdt-testimonial-carousel-item-wrapper">
                                                            <div class="testimonial-item-header">
                                                                <div class="bdt-grid bdt-grid-small bdt-flex-middle" data-bdt-grid="">

                                                                    <div class="bdt-width-auto bdt-flex bdt-position-relative bdt-first-column">
                                                                        <div
                                                                            class="bdt-testimonial-carousel-img-wrapper bdt-overflow-hidden bdt-border-circle bdt-background-cover">
                                                                            <img data-lazyloaded="1" src="data:image/svg+xml;base64," width="100" height="100" decoding="async"
                                                                                 data-src="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/03/gardener-testimonial-img-new-1.jpg.webp"
                                                                                 alt="Carol Silva">
                                                                            <noscript><img width="100" height="100" decoding="async"
                                                                                           src="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/03/gardener-testimonial-img-new-1.jpg.webp"
                                                                                           alt="Carol Silva"/></noscript>
                                                                        </div>
                                                                    </div>
                                                                    <div class="bdt-width-expand">
                                                                        <div class="bdt-testimonial-meta ">
                                                                            <h4 class="bdt-testimonial-carousel-title bdt-margin-remove-bottom" itemprop="name">Carol Silva</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="bdt-testimonial-carousel-text" itemprop="description">
                                                                <p>Nullam mattis blandit lacus, sed sagittis ipsum commodo vel. Donec interdum libero in velit placerat lobortis.
                                                                    Sed ullamcorper congue venenatis. Vivamus finibus egestas tellus, vehicula consequat metus ultricies eu. In
                                                                    aliquam felis sit amet elementum rutrum. Quisque blandit mollis ex</p>
                                                            </div>

                                                            <div class="bdt-testimonial-carousel-rating">
                                                                <meta itemprop="datePublished" content="March 12, 2021">
                                                                <ul class="bdt-rating bdt-rating-2 bdt-grid bdt-grid-collapse" data-bdt-grid="" itemprop="reviewRating" itemscope=""
                                                                    itemtype="http://schema.org/Rating">
                                                                    <li class="bdt-rating-item bdt-first-column"><i class="ep-icon-star-full" aria-hidden="true"></i></li>
                                                                    <li class="bdt-rating-item"><i class="ep-icon-star-full" aria-hidden="true"></i></li>
                                                                    <li class="bdt-rating-item"><i class="ep-icon-star-full" aria-hidden="true"></i></li>
                                                                    <li class="bdt-rating-item"><i class="ep-icon-star-full" aria-hidden="true"></i></li>
                                                                    <li class="bdt-rating-item"><i class="ep-icon-star-full" aria-hidden="true"></i></li>
                                                                </ul>
                                                                <meta itemprop="worstRating" content="1">
                                                                <meta itemprop="ratingValue" content="2">
                                                                <meta itemprop="bestRating" content="5">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    @for($i = 0; $i < 5; $i++)
                                                        <div class="swiper-slide bdt-testimonial-carousel-item bdt-review " itemprop="review" itemscope=""
                                                             itemtype="http://schema.org/Review" data-swiper-slide-index="0" >
                                                            <div class="bdt-testimonial-carousel-item-wrapper shadow-lg">
                                                                <div class="testimonial-item-header !flex flex-row justify-end" >
                                                                    <img class="block my-2 h-10" src="{{ asset('assets/icons/quotes.svg') }}" alt="-">
                                                                </div>

                                                                <div class="bdt-testimonial-carousel-text pe-12" itemprop="description" style="">
                                                                    <p class="line-clamp-5">Sed lectus risus, dignissim non eros at, tincidunt tempor leo. Phasellus interdum nunc in mauris efficitur, et
                                                                        venenatis nulla venenatis. Sed consectetur ultricies lorem, non consequat nulla vestibulum eu. Nulla fringilla
                                                                        purus et tellus sagittis mollis. Aenean eget faucibus mi.</p>
                                                                </div>

                                                            </div>
                                                            <div class="bdt-testimonial-carousel-rating flex flex-col px-8 text-white/90">
                                                                <b>ALAA HASSAN</b>
                                                                <div>Germany</div>
                                                            </div>
                                                        </div>
                                                    @endfor

                                                </div>
                                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                            </div>

                                            <div class="bdt-position-z-index bdt-position-bottom-right bdt-visible@m">
                                                <div class="bdt-arrows-container bdt-slidenav-container">
                                                    <a href="" class="bdt-navigation-prev bdt-slidenav-previous bdt-icon bdt-slidenav" tabindex="0" role="button"
                                                       aria-label="Previous slide">
                                                        <i class="ep-icon-arrow-left-3" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="" class="bdt-navigation-next bdt-slidenav-next bdt-icon bdt-slidenav" tabindex="0" role="button"
                                                       aria-label="Next slide">
                                                        <i class="ep-icon-arrow-right-3" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Reviews -->

                <!-- Certificates -->
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-64eaf492 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="64eaf492" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b74ce1d" data-id="b74ce1d"
                             data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-17bb64d4 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="17bb64d4" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-8653c87" data-id="8653c87"
                                             data-element_type="column">
                                            <div class="elementor-widget-wrap">
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6c4d7c90"
                                             data-id="6c4d7c90"
                                             data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="w-full">
                                                    <h2 class="text-center w-full text-3xl font-bold uppercase text-[--primary-blue]">CERTIFICATES</h2>
                                                    <img class="block mx-auto my-2 w-14 h-5" src="{{ asset('assets/icons/under_title.svg') }}" alt="-">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-8303177" data-id="8303177"
                                             data-element_type="column">
                                            <div class="elementor-widget-wrap">
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <div class="elementor-element elementor-element-1db2087e elementor-widget elementor-widget-image-carousel" data-id="1db2087e"
                                     data-element_type="widget"
                                     data-settings="{&quot;slides_to_show&quot;:&quot;5&quot;,&quot;slides_to_scroll&quot;:&quot;1&quot;,&quot;navigation&quot;:&quot;none&quot;,&quot;slides_to_show_tablet&quot;:&quot;3&quot;,&quot;slides_to_show_mobile&quot;:&quot;2&quot;,&quot;slides_to_scroll_tablet&quot;:&quot;1&quot;,&quot;slides_to_scroll_mobile&quot;:&quot;1&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;infinite&quot;:&quot;yes&quot;,&quot;speed&quot;:500}"
                                     data-widget_type="image-carousel.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-image-carousel-wrapper swiper-container" dir="ltr">
                                            <div class="elementor-image-carousel swiper-wrapper" aria-live="off">
                                                <div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="1 of 5">
                                                    <figure class="swiper-slide-inner"><img data-lazyloaded="1" src="data:image/svg+xml;base64," width="119" height="28"
                                                                                            decoding="async" class="swiper-slide-image"
                                                                                            data-src="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/03/client-logo-1.png.webp"
                                                                                            alt="client-logo-1"/>
                                                        <noscript><img width="119" height="28" decoding="async" class="swiper-slide-image"
                                                                       src="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/03/client-logo-1.png.webp"
                                                                       alt="client-logo-1"/></noscript>
                                                    </figure>
                                                </div>
                                                <div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="2 of 5">
                                                    <figure class="swiper-slide-inner"><img data-lazyloaded="1" src="data:image/svg+xml;base64," width="136" height="27"
                                                                                            decoding="async" class="swiper-slide-image"
                                                                                            data-src="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/03/client-logo-4.png.webp"
                                                                                            alt="client-logo-4"/>
                                                        <noscript><img width="136" height="27" decoding="async" class="swiper-slide-image"
                                                                       src="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/03/client-logo-4.png.webp"
                                                                       alt="client-logo-4"/></noscript>
                                                    </figure>
                                                </div>
                                                <div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="3 of 5">
                                                    <figure class="swiper-slide-inner"><img data-lazyloaded="1" src="data:image/svg+xml;base64," width="150" height="41"
                                                                                            decoding="async" class="swiper-slide-image"
                                                                                            data-src="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/03/client-logo-5-150x41.png.webp"
                                                                                            alt="client-logo-5"/>
                                                        <noscript><img width="150" height="41" decoding="async" class="swiper-slide-image"
                                                                       src="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/03/client-logo-5-150x41.png.webp"
                                                                       alt="client-logo-5"/></noscript>
                                                    </figure>
                                                </div>
                                                <div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="4 of 5">
                                                    <figure class="swiper-slide-inner"><img data-lazyloaded="1" src="data:image/svg+xml;base64," width="114" height="26"
                                                                                            decoding="async" class="swiper-slide-image"
                                                                                            data-src="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/03/client-logo-3.png"
                                                                                            alt="client-logo-3"/>
                                                        <noscript><img width="114" height="26" decoding="async" class="swiper-slide-image"
                                                                       src="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/03/client-logo-3.png"
                                                                       alt="client-logo-3"/>
                                                        </noscript>
                                                    </figure>
                                                </div>
                                                <div class="swiper-slide" role="group" aria-roledescription="slide" aria-label="5 of 5">
                                                    <figure class="swiper-slide-inner"><img data-lazyloaded="1" src="data:image/svg+xml;base64," width="130" height="30"
                                                                                            decoding="async" class="swiper-slide-image"
                                                                                            data-src="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/03/client-logo-2.png.webp"
                                                                                            alt="client-logo-2"/>
                                                        <noscript><img width="130" height="30" decoding="async" class="swiper-slide-image"
                                                                       src="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/03/client-logo-2.png.webp"
                                                                       alt="client-logo-2"/></noscript>
                                                    </figure>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Certificates -->


                {{--
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-4c3e82e4 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="4c3e82e4" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6b100c27" data-id="6b100c27"
                             data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-3c984fd4 elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="3c984fd4" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3e71ccfe"
                                             data-id="3e71ccfe"
                                             data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-7b1d40f9 elementor-widget elementor-widget-spacer" data-id="7b1d40f9"
                                                     data-element_type="widget" data-widget_type="spacer.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4e79999f"
                                             data-id="4e79999f"
                                             data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-20b0c0c5 elementor-widget elementor-widget-heading" data-id="20b0c0c5"
                                                     data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">a few words</h2></div>
                                                </div>
                                                <div class="elementor-element elementor-element-51fb3e1e elementor-widget elementor-widget-heading" data-id="51fb3e1e"
                                                     data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">About Us</h2></div>
                                                </div>
                                                <div class="elementor-element elementor-element-5a1c9080 elementor-widget elementor-widget-text-editor" data-id="5a1c9080"
                                                     data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <p>Aliquam erat volutpat. Donec lobortis risus ut nunc ultrices, ut bibendum nibh auctor. Fusce dolor purus,
                                                            fringilla a
                                                            felis sed, gravida pellentesque sem. Etiam faucibus massa in fringilla eleifend. In hac habitasse platea
                                                            dictumst.
                                                            Duis varius, metus quis sodales mattis, massa dolor consequat urna, quis varius quam mauris id ante. Vestibulum
                                                            at
                                                            dictum quam, nec elementum tortor. Duis gravida feugiat ornare. Maecenas a urna in lacus pretium tristique.</p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="elementor-element elementor-element-30199faa elementor-align-left btn_2 elementor-widget elementor-widget-bdt-advanced-button"
                                                    data-id="30199faa" data-element_type="widget" data-widget_type="bdt-advanced-button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="bdt-ep-button-wrapper">
                                                            <a href="https://travo.iamabdus.com/v1.1/about-us/"
                                                               class="bdt-ep-button bdt-ep-button-effect-a bdt-ep-button-size-md">
                                                                <div class="bdt-ep-button-content-wrapper bdt-flex bdt-flex-middle bdt-flex-center  " data-text="Read MOre">
                                                                    <div class="bdt-ep-button-icon bdt-flex-center bdt-flex-align-right">
                                                                        <div class="bdt-ep-button-icon-inner">

                                                                            <i aria-hidden="true" class="fa-fw fas fa-arrow-right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="bdt-ep-button-text">

                                                                        <span class="avdbtn-text">Read MOre</span>

                                                                    </div>


                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </section>
                --}}

                {{--
                                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-3776386c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="3776386c" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1be6c1db" data-id="1be6c1db"
                             data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-47fd6dad elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="47fd6dad" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-699f8b4d"
                                             data-id="699f8b4d"
                                             data-element_type="column">
                                            <div class="elementor-widget-wrap">
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-8549127" data-id="8549127"
                                             data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-907553 elementor-widget elementor-widget-heading" data-id="907553"
                                                     data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">Our trending</h2></div>
                                                </div>
                                                <div class="elementor-element elementor-element-67dbd247 elementor-widget elementor-widget-heading" data-id="67dbd247"
                                                     data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">Best Offers</h2></div>
                                                </div>
                                                <div class="elementor-element elementor-element-6c80300 elementor-widget elementor-widget-text-editor" data-id="6c80300"
                                                     data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <p>In hac habitasse platea dictumst. Duis varius, metus quis sodales mattis, massa dolor consequat urna, quis varius
                                                            quam mauris id ante. Vestibulum at dictum quam, nec elementum tortor. Duis gravida feugiat ornare. Maecenas a
                                                            urna
                                                            in lacus pretium tristique.</p></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-59bd86be"
                                             data-id="59bd86be"
                                             data-element_type="column">
                                            <div class="elementor-widget-wrap">
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-68939c1e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="68939c1e" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2492e610"
                                             data-id="2492e610"
                                             data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-31e5f85d elementor-widget elementor-widget-image" data-id="31e5f85d"
                                                     data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <a href="https://travo.iamabdus.com/v1.1/tour-details/">
                                                            <img data-lazyloaded="1" src="data:image/svg+xml;base64," decoding="async" width="800" height="533"
                                                                 data-src="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/lyle-hastie-BQQQFytwXGU-unsplash-1.jpg"
                                                                 class="attachment-full size-full wp-image-2571" alt="image 50"
                                                                 data-srcset="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/lyle-hastie-BQQQFytwXGU-unsplash-1.jpg 800w, https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/lyle-hastie-BQQQFytwXGU-unsplash-1-300x200.jpg.webp 300w, https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/lyle-hastie-BQQQFytwXGU-unsplash-1-768x512.jpg.webp 768w"
                                                                 data-sizes="(max-width: 800px) 100vw, 800px"/>
                                                            <noscript><img decoding="async" width="800" height="533"
                                                                           src="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/lyle-hastie-BQQQFytwXGU-unsplash-1.jpg"
                                                                           class="attachment-full size-full wp-image-2571" alt="image 50"
                                                                           srcset="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/lyle-hastie-BQQQFytwXGU-unsplash-1.jpg 800w, https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/lyle-hastie-BQQQFytwXGU-unsplash-1-300x200.jpg.webp 300w, https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/lyle-hastie-BQQQFytwXGU-unsplash-1-768x512.jpg.webp 768w"
                                                                           sizes="(max-width: 800px) 100vw, 800px"/></noscript>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="elementor-element elementor-element-169f0b9d bdt-icon-type-image bdt-title-link-yes elementor-vertical-align-middle tour_btn bdt-icon-effect-none elementor-widget elementor-widget-bdt-advanced-icon-box"
                                                    data-id="169f0b9d" data-element_type="widget" data-widget_type="bdt-advanced-icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="bdt-ep-advanced-icon-box">


                                                            <div class="bdt-ep-advanced-icon-box-content">


                                                                <h3 class="bdt-ep-advanced-icon-box-title"
                                                                    onclick="window.open(&#039;https://travo.iamabdus.com/v1.1/tour-details/&#039;, &#039;_self&#039;)">
				<span>
					Eiffel Tower,France				</span>
                                                                </h3>


                                                                <div class="bdt-ep-advanced-icon-box-description">
                                                                    <p>Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                                                </div>

                                                                <a class="bdt-ep-advanced-icon-box-readmore bdt-display-inline-block"
                                                                   href="https://travo.iamabdus.com/v1.1/tour-details/">
                                                                    Book Now
                                                                </a>
                                                            </div>
                                                        </div>


                                                        <div class="bdt-ep-advanced-icon-box-badge bdt-position-bottom-right">
                                                            <span class="bdt-badge bdt-padding-small">$1270.00</span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2a77c772"
                                             data-id="2a77c772"
                                             data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-62934623 elementor-widget elementor-widget-image" data-id="62934623"
                                                     data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <a href="https://travo.iamabdus.com/v1.1/tour-details/">
                                                            <img data-lazyloaded="1" src="data:image/svg+xml;base64," decoding="async" width="800" height="533"
                                                                 data-src="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/leila-azevedo-o6UVPje41Lg-unsplash-2.jpg"
                                                                 class="attachment-full size-full wp-image-2580" alt="image 48"
                                                                 data-srcset="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/leila-azevedo-o6UVPje41Lg-unsplash-2.jpg 800w, https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/leila-azevedo-o6UVPje41Lg-unsplash-2-300x200.jpg 300w, https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/leila-azevedo-o6UVPje41Lg-unsplash-2-768x512.jpg 768w"
                                                                 data-sizes="(max-width: 800px) 100vw, 800px"/>
                                                            <noscript><img decoding="async" width="800" height="533"
                                                                           src="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/leila-azevedo-o6UVPje41Lg-unsplash-2.jpg"
                                                                           class="attachment-full size-full wp-image-2580" alt="image 48"
                                                                           srcset="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/leila-azevedo-o6UVPje41Lg-unsplash-2.jpg 800w, https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/leila-azevedo-o6UVPje41Lg-unsplash-2-300x200.jpg 300w, https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/leila-azevedo-o6UVPje41Lg-unsplash-2-768x512.jpg 768w"
                                                                           sizes="(max-width: 800px) 100vw, 800px"/></noscript>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="elementor-element elementor-element-29ead22d bdt-icon-type-image bdt-title-link-yes elementor-vertical-align-middle tour_btn bdt-icon-effect-none elementor-widget elementor-widget-bdt-advanced-icon-box"
                                                    data-id="29ead22d" data-element_type="widget" data-widget_type="bdt-advanced-icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="bdt-ep-advanced-icon-box">


                                                            <div class="bdt-ep-advanced-icon-box-content">


                                                                <h3 class="bdt-ep-advanced-icon-box-title"
                                                                    onclick="window.open(&#039;https://travo.iamabdus.com/v1.1/tour-details/&#039;, &#039;_self&#039;)">
				<span>
					Swiss Alps,Switzerland				</span>
                                                                </h3>


                                                                <div class="bdt-ep-advanced-icon-box-description">
                                                                    <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p></div>

                                                                <a class="bdt-ep-advanced-icon-box-readmore bdt-display-inline-block"
                                                                   href="https://travo.iamabdus.com/v1.1/tour-details/">
                                                                    Book Now
                                                                </a>
                                                            </div>
                                                        </div>


                                                        <div class="bdt-ep-advanced-icon-box-badge bdt-position-bottom-right">
                                                            <span class="bdt-badge bdt-padding-small">$1600.00</span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-12469675"
                                             data-id="12469675"
                                             data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-5c7eb472 elementor-widget elementor-widget-image" data-id="5c7eb472"
                                                     data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <a href="https://travo.iamabdus.com/v1.1/tour-details/">
                                                            <img data-lazyloaded="1" src="data:image/svg+xml;base64," decoding="async" width="1200" height="800"
                                                                 data-src="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/joshua-earle-87JyMb9ZfU-unsplash-1.jpg.webp"
                                                                 class="attachment-full size-full wp-image-2554" alt="image 52"
                                                                 data-srcset="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/joshua-earle-87JyMb9ZfU-unsplash-1.jpg.webp 1200w, https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/joshua-earle-87JyMb9ZfU-unsplash-1-300x200.jpg.webp 300w, https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/joshua-earle-87JyMb9ZfU-unsplash-1-1024x683.jpg.webp 1024w, https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/joshua-earle-87JyMb9ZfU-unsplash-1-768x512.jpg.webp 768w"
                                                                 data-sizes="(max-width: 1200px) 100vw, 1200px"/>
                                                            <noscript><img decoding="async" width="1200" height="800"
                                                                           src="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/joshua-earle-87JyMb9ZfU-unsplash-1.jpg.webp"
                                                                           class="attachment-full size-full wp-image-2554" alt="image 52"
                                                                           srcset="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/joshua-earle-87JyMb9ZfU-unsplash-1.jpg.webp 1200w, https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/joshua-earle-87JyMb9ZfU-unsplash-1-300x200.jpg.webp 300w, https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/joshua-earle-87JyMb9ZfU-unsplash-1-1024x683.jpg.webp 1024w, https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/joshua-earle-87JyMb9ZfU-unsplash-1-768x512.jpg.webp 768w"
                                                                           sizes="(max-width: 1200px) 100vw, 1200px"/></noscript>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="elementor-element elementor-element-4ad44d9b bdt-icon-type-image bdt-title-link-yes elementor-vertical-align-middle tour_btn bdt-icon-effect-none elementor-widget elementor-widget-bdt-advanced-icon-box"
                                                    data-id="4ad44d9b" data-element_type="widget" data-widget_type="bdt-advanced-icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="bdt-ep-advanced-icon-box">


                                                            <div class="bdt-ep-advanced-icon-box-content">


                                                                <h3 class="bdt-ep-advanced-icon-box-title"
                                                                    onclick="window.open(&#039;https://travo.iamabdus.com/v1.1/tour-details/&#039;, &#039;_self&#039;)">
				<span>
					Rio de Janeiro,Brazil				</span>
                                                                </h3>


                                                                <div class="bdt-ep-advanced-icon-box-description">
                                                                    <p>In mollis euismod risus, non tincidunt tortor accumsan et.Phasellus interdum nunc in mauris
                                                                        efficitur.</p></div>

                                                                <a class="bdt-ep-advanced-icon-box-readmore bdt-display-inline-block"
                                                                   href="https://travo.iamabdus.com/v1.1/tour-details/">
                                                                    Book Now
                                                                </a>
                                                            </div>
                                                        </div>


                                                        <div class="bdt-ep-advanced-icon-box-badge bdt-position-bottom-right">
                                                            <span class="bdt-badge bdt-padding-small">$1650.00</span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-4ed8ae0e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="4ed8ae0e" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-744412d1"
                                             data-id="744412d1"
                                             data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-6f94281f elementor-widget elementor-widget-image" data-id="6f94281f"
                                                     data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <a href="https://travo.iamabdus.com/v1.1/tour-details/">
                                                            <img data-lazyloaded="1" src="data:image/svg+xml;base64," decoding="async" width="800" height="533"
                                                                 data-src="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/daniel-corneschi-N6HTCyN50p0-unsplash-1.jpg.webp"
                                                                 class="attachment-full size-full wp-image-2576" alt="image 49"
                                                                 data-srcset="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/daniel-corneschi-N6HTCyN50p0-unsplash-1.jpg.webp 800w, https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/daniel-corneschi-N6HTCyN50p0-unsplash-1-300x200.jpg.webp 300w, https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/daniel-corneschi-N6HTCyN50p0-unsplash-1-768x512.jpg.webp 768w"
                                                                 data-sizes="(max-width: 800px) 100vw, 800px"/>
                                                            <noscript><img decoding="async" width="800" height="533"
                                                                           src="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/daniel-corneschi-N6HTCyN50p0-unsplash-1.jpg.webp"
                                                                           class="attachment-full size-full wp-image-2576" alt="image 49"
                                                                           srcset="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/daniel-corneschi-N6HTCyN50p0-unsplash-1.jpg.webp 800w, https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/daniel-corneschi-N6HTCyN50p0-unsplash-1-300x200.jpg.webp 300w, https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/daniel-corneschi-N6HTCyN50p0-unsplash-1-768x512.jpg.webp 768w"
                                                                           sizes="(max-width: 800px) 100vw, 800px"/></noscript>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="elementor-element elementor-element-1134df27 bdt-icon-type-image bdt-title-link-yes elementor-vertical-align-middle tour_btn bdt-icon-effect-none elementor-widget elementor-widget-bdt-advanced-icon-box"
                                                    data-id="1134df27" data-element_type="widget" data-widget_type="bdt-advanced-icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="bdt-ep-advanced-icon-box">


                                                            <div class="bdt-ep-advanced-icon-box-content">


                                                                <h3 class="bdt-ep-advanced-icon-box-title"
                                                                    onclick="window.open(&#039;https://travo.iamabdus.com/v1.1/tour-details/&#039;, &#039;_self&#039;)">
				<span>
					Valencia,Spain				</span>
                                                                </h3>


                                                                <div class="bdt-ep-advanced-icon-box-description">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Click edit button to change this text. </p>
                                                                </div>

                                                                <a class="bdt-ep-advanced-icon-box-readmore bdt-display-inline-block"
                                                                   href="https://travo.iamabdus.com/v1.1/tour-details/">
                                                                    Book Now
                                                                </a>
                                                            </div>
                                                        </div>


                                                        <div class="bdt-ep-advanced-icon-box-badge bdt-position-bottom-right">
                                                            <span class="bdt-badge bdt-padding-small">$1800.00</span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-522ce663"
                                             data-id="522ce663"
                                             data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-6def895e elementor-widget elementor-widget-image" data-id="6def895e"
                                                     data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <a href="https://travo.iamabdus.com/v1.1/tour-details/">
                                                            <img data-lazyloaded="1" src="data:image/svg+xml;base64," decoding="async" width="711" height="481"
                                                                 data-src="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/jeremy-bishop-Q5ZjqF6Wd3k-unsplash-1-1.png.webp"
                                                                 class="attachment-full size-full wp-image-3026" alt="image 28"
                                                                 data-srcset="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/jeremy-bishop-Q5ZjqF6Wd3k-unsplash-1-1.png.webp 711w, https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/jeremy-bishop-Q5ZjqF6Wd3k-unsplash-1-1-300x203.png.webp 300w"
                                                                 data-sizes="(max-width: 711px) 100vw, 711px"/>
                                                            <noscript><img decoding="async" width="711" height="481"
                                                                           src="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/jeremy-bishop-Q5ZjqF6Wd3k-unsplash-1-1.png.webp"
                                                                           class="attachment-full size-full wp-image-3026" alt="image 28"
                                                                           srcset="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/jeremy-bishop-Q5ZjqF6Wd3k-unsplash-1-1.png.webp 711w, https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/jeremy-bishop-Q5ZjqF6Wd3k-unsplash-1-1-300x203.png.webp 300w"
                                                                           sizes="(max-width: 711px) 100vw, 711px"/></noscript>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="elementor-element elementor-element-3eb18101 bdt-icon-type-image bdt-title-link-yes elementor-vertical-align-middle tour_btn bdt-icon-effect-none elementor-widget elementor-widget-bdt-advanced-icon-box"
                                                    data-id="3eb18101" data-element_type="widget" data-widget_type="bdt-advanced-icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="bdt-ep-advanced-icon-box">


                                                            <div class="bdt-ep-advanced-icon-box-content">


                                                                <h3 class="bdt-ep-advanced-icon-box-title"
                                                                    onclick="window.open(&#039;https://travo.iamabdus.com/v1.1/tour-details/&#039;, &#039;_self&#039;)">
				<span>
					Varadero,USA				</span>
                                                                </h3>


                                                                <div class="bdt-ep-advanced-icon-box-description">
                                                                    <p>Duis sit amet eros id justo fringilla maximus. Sed vehicula eleifend posuere. Aliquam erat volutpat.
                                                                        Duis
                                                                        ante nisi.</p></div>

                                                                <a class="bdt-ep-advanced-icon-box-readmore bdt-display-inline-block"
                                                                   href="https://travo.iamabdus.com/v1.1/tour-details/">
                                                                    Book Now
                                                                </a>
                                                            </div>
                                                        </div>


                                                        <div class="bdt-ep-advanced-icon-box-badge bdt-position-bottom-right">
                                                            <span class="bdt-badge bdt-padding-small">$1570.00</span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-21696717"
                                             data-id="21696717"
                                             data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-38916468 elementor-widget elementor-widget-image" data-id="38916468"
                                                     data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <a href="https://travo.iamabdus.com/v1.1/tour-details/">
                                                            <img data-lazyloaded="1" src="data:image/svg+xml;base64," decoding="async" width="800" height="536"
                                                                 data-src="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/dan-novac-1naE8177_bI-unsplash-1.jpg"
                                                                 class="attachment-full size-full wp-image-2589" alt="image 46"
                                                                 data-srcset="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/dan-novac-1naE8177_bI-unsplash-1.jpg 800w, https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/dan-novac-1naE8177_bI-unsplash-1-300x201.jpg.webp 300w, https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/dan-novac-1naE8177_bI-unsplash-1-768x515.jpg 768w"
                                                                 data-sizes="(max-width: 800px) 100vw, 800px"/>
                                                            <noscript><img decoding="async" width="800" height="536"
                                                                           src="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/dan-novac-1naE8177_bI-unsplash-1.jpg"
                                                                           class="attachment-full size-full wp-image-2589" alt="image 46"
                                                                           srcset="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/dan-novac-1naE8177_bI-unsplash-1.jpg 800w, https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/dan-novac-1naE8177_bI-unsplash-1-300x201.jpg.webp 300w, https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/dan-novac-1naE8177_bI-unsplash-1-768x515.jpg 768w"
                                                                           sizes="(max-width: 800px) 100vw, 800px"/></noscript>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="elementor-element elementor-element-43b09013 bdt-icon-type-image bdt-title-link-yes elementor-vertical-align-middle tour_btn bdt-icon-effect-none elementor-widget elementor-widget-bdt-advanced-icon-box"
                                                    data-id="43b09013" data-element_type="widget" data-widget_type="bdt-advanced-icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="bdt-ep-advanced-icon-box">


                                                            <div class="bdt-ep-advanced-icon-box-content">


                                                                <h3 class="bdt-ep-advanced-icon-box-title"
                                                                    onclick="window.open(&#039;https://travo.iamabdus.com/v1.1/tour-details/&#039;, &#039;_self&#039;)">
				<span>
					italy				</span>
                                                                </h3>


                                                                <div class="bdt-ep-advanced-icon-box-description">
                                                                    <p>In mollis euismod risus, non tincidunt tortor accumsan et.Phasellus interdum nunc in mauris
                                                                        efficitur</p>
                                                                </div>

                                                                <a class="bdt-ep-advanced-icon-box-readmore bdt-display-inline-block"
                                                                   href="https://travo.iamabdus.com/v1.1/tour-details/">
                                                                    Book Now
                                                                </a>
                                                            </div>
                                                        </div>


                                                        <div class="bdt-ep-advanced-icon-box-badge bdt-position-bottom-right">
                                                            <span class="bdt-badge bdt-padding-small">$1900.00</span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </section>
                --}}

                {{--
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-2ca7499f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="2ca7499f" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2320dd8f" data-id="2320dd8f"
                             data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-2865d9b7 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="2865d9b7" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-6a1bb3ed"
                                             data-id="6a1bb3ed"
                                             data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-3e31f6db elementor-widget elementor-widget-heading" data-id="3e31f6db"
                                                     data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">We are Best</h2></div>
                                                </div>
                                                <div class="elementor-element elementor-element-24babc5f elementor-widget elementor-widget-heading" data-id="24babc5f"
                                                     data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">Why Booking With Us?</h2></div>
                                                </div>
                                                <div class="elementor-element elementor-element-253fb80c elementor-widget elementor-widget-text-editor" data-id="253fb80c"
                                                     data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <p>Aenean vel quam elementum, ultricies ex sed, bibendum arcu. Donec a tortor ac dolor commodo commodo vel non
                                                            lectus.
                                                            Nullam tincidunt massa tincidunt libero mattis ornare.</p></div>
                                                </div>
                                                <div
                                                    class="elementor-element elementor-element-57972e69 elementor-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                    data-id="57972e69" data-element_type="widget" data-widget_type="icon-list.default">
                                                    <div class="elementor-widget-container">
                                                        <ul class="elementor-icon-list-items">
                                                            <li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="far fa-thumbs-up"></i>						</span>
                                                                <span class="elementor-icon-list-text">All placges and activiates are carefully picked by us.</span>
                                                            </li>
                                                            <li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-dollar-sign"></i>						</span>
                                                                <span class="elementor-icon-list-text">Best price guaranteee & Hassle free!</span>
                                                            </li>
                                                            <li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="far fa-star"></i>						</span>
                                                                <span class="elementor-icon-list-text">We are an award winning agency</span>
                                                            </li>
                                                            <li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="far fa-heart"></i>						</span>
                                                                <span class="elementor-icon-list-text">Trusted by more than 80,000 customers</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div
                                                    class="elementor-element elementor-element-35b35e53 elementor-align-left btn_2 elementor-widget elementor-widget-bdt-advanced-button"
                                                    data-id="35b35e53" data-element_type="widget" data-widget_type="bdt-advanced-button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="bdt-ep-button-wrapper">
                                                            <a href="https://travo.iamabdus.com/v1.1/about-us/"
                                                               class="bdt-ep-button bdt-ep-button-effect-a bdt-ep-button-size-md">
                                                                <div class="bdt-ep-button-content-wrapper bdt-flex bdt-flex-middle bdt-flex-center  " data-text="Read MOre">
                                                                    <div class="bdt-ep-button-icon bdt-flex-center bdt-flex-align-right">
                                                                        <div class="bdt-ep-button-icon-inner">

                                                                            <i aria-hidden="true" class="fa-fw fas fa-arrow-right"></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="bdt-ep-button-text">

                                                                        <span class="avdbtn-text">Read MOre</span>

                                                                    </div>


                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3cabfd89"
                                             data-id="3cabfd89"
                                             data-element_type="column">
                                            <div class="elementor-widget-wrap">
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </section>
                --}}

                {{--
<section
                    class="elementor-section elementor-top-section elementor-element elementor-element-4c694c5c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="4c694c5c" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-102f5310" data-id="102f5310"
                             data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-54d3c0d6 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="54d3c0d6" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1dd1aad" data-id="1dd1aad"
                                             data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-302f5c01 elementor-widget elementor-widget-heading" data-id="302f5c01"
                                                     data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">Our Most</h2></div>
                                                </div>
                                                <div class="elementor-element elementor-element-1ef8fbb elementor-widget elementor-widget-heading" data-id="1ef8fbb"
                                                     data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">Pop Tours</h2></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7325335d"
                                             data-id="7325335d"
                                             data-element_type="column">
                                            <div class="elementor-widget-wrap">
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-57a07203 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="57a07203" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-7629d362 destination_img"
                                             data-id="7629d362" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-616ea8ec elementor-position-top elementor-widget elementor-widget-image-box"
                                                     data-id="616ea8ec" data-element_type="widget" data-widget_type="image-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image-box-wrapper">
                                                            <figure class="elementor-image-box-img"><a href="https://travo.iamabdus.com/v1.1/destination-details/"
                                                                                                       tabindex="-1"><img data-lazyloaded="1"
                                                                                                                          src="data:image/svg+xml;base64,"
                                                                                                                          width="300" height="300" decoding="async"
                                                                                                                          data-src="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/03/maldives_island-1-300x300.jpg.webp"
                                                                                                                          title="maldives_island (1)" alt="image 91"
                                                                                                                          loading="lazy"/>
                                                                    <noscript><img width="300" height="300" decoding="async"
                                                                                   src="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/03/maldives_island-1-300x300.jpg.webp"
                                                                                   title="maldives_island (1)" alt="image 91" loading="lazy"/></noscript>
                                                                </a></figure>
                                                            <div class="elementor-image-box-content"><h3 class="elementor-image-box-title"><a
                                                                        href="https://travo.iamabdus.com/v1.1/destination-details/"> Maldives</a></h3></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-546401e4 destination_img"
                                             data-id="546401e4" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-7b8c57f0 elementor-position-top elementor-widget elementor-widget-image-box"
                                                     data-id="7b8c57f0" data-element_type="widget" data-widget_type="image-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image-box-wrapper">
                                                            <figure class="elementor-image-box-img"><a href="https://travo.iamabdus.com/v1.1/destination-details/"
                                                                                                       tabindex="-1"><img data-lazyloaded="1"
                                                                                                                          src="data:image/svg+xml;base64,"
                                                                                                                          width="800" height="533" decoding="async"
                                                                                                                          data-src="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/mostafa-meraji-xDrL7V9vA-0-unsplash-1.jpg"
                                                                                                                          title="mostafa-meraji-xDrL7V9vA-0-unsplash (1)"
                                                                                                                          alt="image 43" loading="lazy"/>
                                                                    <noscript><img width="800" height="533" decoding="async"
                                                                                   src="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/mostafa-meraji-xDrL7V9vA-0-unsplash-1.jpg"
                                                                                   title="mostafa-meraji-xDrL7V9vA-0-unsplash (1)" alt="image 43" loading="lazy"/>
                                                                    </noscript>
                                                                </a></figure>
                                                            <div class="elementor-image-box-content"><h3 class="elementor-image-box-title"><a
                                                                        href="https://travo.iamabdus.com/v1.1/destination-details/">England</a></h3></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-66187725 destination_img"
                                             data-id="66187725" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-46a26837 elementor-position-top elementor-widget elementor-widget-image-box"
                                                     data-id="46a26837" data-element_type="widget" data-widget_type="image-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image-box-wrapper">
                                                            <figure class="elementor-image-box-img"><a href="https://travo.iamabdus.com/v1.1/destination-details/"
                                                                                                       tabindex="-1"><img data-lazyloaded="1"
                                                                                                                          src="data:image/svg+xml;base64,"
                                                                                                                          width="800" height="525" decoding="async"
                                                                                                                          data-src="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/howard-chin-LB-f-vZqC0g-unsplash-1.jpg.webp"
                                                                                                                          title="howard-chin-LB-f-vZqC0g-unsplash (1)"
                                                                                                                          alt="image 44" loading="lazy"/>
                                                                    <noscript><img width="800" height="525" decoding="async"
                                                                                   src="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/howard-chin-LB-f-vZqC0g-unsplash-1.jpg.webp"
                                                                                   title="howard-chin-LB-f-vZqC0g-unsplash (1)" alt="image 44" loading="lazy"/></noscript>
                                                                </a></figure>
                                                            <div class="elementor-image-box-content"><h3 class="elementor-image-box-title"><a
                                                                        href="https://travo.iamabdus.com/v1.1/destination-details/">Italy</a></h3></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-328abba8 destination_img"
                                             data-id="328abba8" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-18cafc67 elementor-position-top elementor-widget elementor-widget-image-box"
                                                     data-id="18cafc67" data-element_type="widget" data-widget_type="image-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image-box-wrapper">
                                                            <figure class="elementor-image-box-img"><a href="https://travo.iamabdus.com/v1.1/destination-details/"
                                                                                                       tabindex="-1"><img data-lazyloaded="1"
                                                                                                                          src="data:image/svg+xml;base64,"
                                                                                                                          width="600" height="400" decoding="async"
                                                                                                                          data-src="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/darren-lee-0kEvX-9hJyQ-unsplash-1.jpg.webp"
                                                                                                                          title="darren-lee-0kEvX-9hJyQ-unsplash (1)"
                                                                                                                          alt="image 31" loading="lazy"/>
                                                                    <noscript><img width="600" height="400" decoding="async"
                                                                                   src="https://travo.iamabdus.com/v1.1/wp-content/uploads/2021/04/darren-lee-0kEvX-9hJyQ-unsplash-1.jpg.webp"
                                                                                   title="darren-lee-0kEvX-9hJyQ-unsplash (1)" alt="image 31" loading="lazy"/></noscript>
                                                                </a></figure>
                                                            <div class="elementor-image-box-content"><h3 class="elementor-image-box-title"><a
                                                                        href="https://travo.iamabdus.com/v1.1/destination-details/"> Turkey</a></h3></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <div class="elementor-element elementor-element-484567bd elementor-align-center btn_2 elementor-widget elementor-widget-bdt-advanced-button"
                                     data-id="484567bd" data-element_type="widget" data-widget_type="bdt-advanced-button.default">
                                    <div class="elementor-widget-container">
                                        <div class="bdt-ep-button-wrapper">
                                            <a href="https://travo.iamabdus.com/v1.1/destination-list/" class="bdt-ep-button bdt-ep-button-effect-a bdt-ep-button-size-md">
                                                <div class="bdt-ep-button-content-wrapper bdt-flex bdt-flex-middle bdt-flex-center  " data-text="View All Tour">
                                                    <div class="bdt-ep-button-icon bdt-flex-center bdt-flex-align-right">
                                                        <div class="bdt-ep-button-icon-inner">

                                                            <i aria-hidden="true" class="fa-fw fas fa-arrow-right"></i>
                                                        </div>
                                                    </div>

                                                    <div class="bdt-ep-button-text">

                                                        <span class="avdbtn-text">View All Tour</span>

                                                    </div>


                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                --}}

                {{--
<section
                    class="elementor-section elementor-top-section elementor-element elementor-element-5c32ff0e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="5c32ff0e" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4e0fc8c9" data-id="4e0fc8c9"
                             data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-66523e07 elementor-widget elementor-widget-heading" data-id="66523e07"
                                     data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Straight to Your Inbox</h2></div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2520b619" data-id="2520b619"
                             data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-195d571d elementor-widget elementor-widget-bdt-contact-form-7" data-id="195d571d"
                                     data-element_type="widget" data-widget_type="bdt-contact-form-7.default">
                                    <div class="elementor-widget-container">

                                        <div class="wpcf7 no-js" id="wpcf7-f664-p2889-o1" lang="en-US" dir="ltr">
                                            <div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p>
                                                <ul></ul>
                                            </div>
                                            <form action="/v1.1/#wpcf7-f664-p2889-o1" method="post" class="wpcf7-form init" aria-label="Contact form"
                                                  novalidate="novalidate"
                                                  data-status="init">
                                                <div style="display: none;">
                                                    <input type="hidden" name="_wpcf7" value="664"/>
                                                    <input type="hidden" name="_wpcf7_version" value="5.8"/>
                                                    <input type="hidden" name="_wpcf7_locale" value="en_US"/>
                                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f664-p2889-o1"/>
                                                    <input type="hidden" name="_wpcf7_container_post" value="2889"/>
                                                    <input type="hidden" name="_wpcf7_posted_data_hash" value=""/>
                                                </div>
                                                <div class="contact-us-2">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <div class="input-name">
                                                                <p><span class="wpcf7-form-control-wrap" data-name="text-197"><input size="40"
                                                                                                                                     class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                                                                     aria-required="true"
                                                                                                                                     aria-invalid="false"
                                                                                                                                     placeholder="Name" value="" type="text"
                                                                                                                                     name="text-197"/></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="input-2">
                                                                <p><span class="wpcf7-form-control-wrap" data-name="email-449"><input size="40"
                                                                                                                                      class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email"
                                                                                                                                      aria-required="true"
                                                                                                                                      aria-invalid="false"
                                                                                                                                      placeholder="Email" value=""
                                                                                                                                      type="email"
                                                                                                                                      name="email-449"/></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 text-center">
                                                            <p><input class="wpcf7-form-control wpcf7-submit has-spinner" id="submit-2" type="submit" value="Submit"/>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wpcf7-response-output" aria-hidden="true"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                --}}

                {{--
<section>
                    <div class="elementor-section elementor-top-section elementor-element elementor-element-ba9f93e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ba9f93e" data-element_type="section" id="trip-video">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c77a452" data-id="c77a452" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-d212c7a elementor-aspect-ratio-169 elementor-widget elementor-widget-video" data-id="d212c7a" data-element_type="widget" data-settings="{&quot;youtube_url&quot;:&quot;https:\/\/www.youtube.com\/watch?v=XHOmBV4js_E&quot;,&quot;mute&quot;:&quot;yes&quot;,&quot;loop&quot;:&quot;yes&quot;,&quot;show_image_overlay&quot;:&quot;yes&quot;,&quot;image_overlay&quot;:{&quot;url&quot;:&quot;https:\/\/wordpressthemes.live\/WP01\/WP001\/wp-content\/uploads\/2022\/04\/video.jpg&quot;,&quot;id&quot;:7764,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;lightbox&quot;:&quot;yes&quot;,&quot;video_type&quot;:&quot;youtube&quot;,&quot;controls&quot;:&quot;yes&quot;,&quot;aspect_ratio&quot;:&quot;169&quot;}" data-widget_type="video.default">
                                        <div class="elementor-widget-container">
                                            <style>/*! elementor - v3.9.2 - 21-12-2022 */
                                                .elementor-widget-video .elementor-widget-container{overflow:hidden;transform:translateZ(0)}.elementor-widget-video .elementor-open-inline .elementor-custom-embed-image-overlay{position:absolute;top:0;left:0;width:100%;height:100%;background-size:cover;background-position:50%}.elementor-widget-video .elementor-custom-embed-image-overlay{cursor:pointer;text-align:center}.elementor-widget-video .elementor-custom-embed-image-overlay:hover .elementor-custom-embed-play i{opacity:1}.elementor-widget-video .elementor-custom-embed-image-overlay img{display:block;width:100%}.elementor-widget-video .e-hosted-video .elementor-video{-o-object-fit:cover;object-fit:cover}.e-con-inner>.elementor-widget-video,.e-con>.elementor-widget-video{width:var(--container-widget-width);--flex-grow:var(--container-widget-flex-grow)}</style>		<div class="elementor-wrapper elementor-open-lightbox">
                                                <div class="elementor-custom-embed-image-overlay" data-elementor-open-lightbox="yes" data-elementor-lightbox="{&quot;type&quot;:&quot;video&quot;,&quot;videoType&quot;:&quot;youtube&quot;,&quot;url&quot;:&quot;https:\/\/www.youtube.com\/embed\/XHOmBV4js_E?feature=oembed&amp;playlist=XHOmBV4js_E&amp;start&amp;end&amp;wmode=opaque&amp;loop=1&amp;controls=1&amp;mute=1&amp;rel=0&amp;modestbranding=0&quot;,&quot;modalOptions&quot;:{&quot;id&quot;:&quot;elementor-lightbox-d212c7a&quot;,&quot;entranceAnimation&quot;:&quot;&quot;,&quot;entranceAnimation_tablet&quot;:&quot;&quot;,&quot;entranceAnimation_mobile&quot;:&quot;&quot;,&quot;videoAspectRatio&quot;:&quot;169&quot;}}" e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJ0eXBlIjoidmlkZW8iLCJ2aWRlb1R5cGUiOiJ5b3V0dWJlIiwidXJsIjoiaHR0cHM6XC9cL3d3dy55b3V0dWJlLmNvbVwvZW1iZWRcL1hIT21CVjRqc19FP2ZlYXR1cmU9b2VtYmVkJnBsYXlsaXN0PVhIT21CVjRqc19FJnN0YXJ0JmVuZCZ3bW9kZT1vcGFxdWUmbG9vcD0xJmNvbnRyb2xzPTEmbXV0ZT0xJnJlbD0wJm1vZGVzdGJyYW5kaW5nPTAiLCJtb2RhbE9wdGlvbnMiOnsiaWQiOiJlbGVtZW50b3ItbGlnaHRib3gtZDIxMmM3YSIsImVudHJhbmNlQW5pbWF0aW9uIjoiIiwiZW50cmFuY2VBbmltYXRpb25fdGFibGV0IjoiIiwiZW50cmFuY2VBbmltYXRpb25fbW9iaWxlIjoiIiwidmlkZW9Bc3BlY3RSYXRpbyI6IjE2OSJ9fQ%3D%3D">
                                                    <img decoding="async" width="1400" height="683" src="https://wordpressthemes.live/WP01/WP001/wp-content/uploads/2022/04/video.jpg" class="attachment-full size-full wp-image-7764" alt="" loading="lazy" srcset="https://wordpressthemes.live/WP01/WP001/wp-content/uploads/2022/04/video.jpg 1400w, https://wordpressthemes.live/WP01/WP001/wp-content/uploads/2022/04/video-300x146.jpg 300w, https://wordpressthemes.live/WP01/WP001/wp-content/uploads/2022/04/video-1024x500.jpg 1024w, https://wordpressthemes.live/WP01/WP001/wp-content/uploads/2022/04/video-768x375.jpg 768w" sizes="(max-width: 1400px) 100vw, 1400px">																<div class="elementor-custom-embed-play" role="button" aria-label="Play Video" tabindex="0">
                                                        <i aria-hidden="true" class="eicon-play"></i>							<span class="elementor-screen-only">Play Video</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                --}}


            </div>


        </main><!-- #main -->
    </div><!-- #primary -->
@stop
