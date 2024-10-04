<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>@yield('title')</title>
    <meta name="title" content="@yield('title')" />
    <meta name="description" content="@yield('description')" />
    <meta name="keywords" content="@yield('keywords')" />
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="robots" content="index,follow">
    <meta name="google-site-verification" content="GEDfJNdAWrE28DNjaW_qM8nEv8aqs8wth6M8h-TBn3Y" />
    <link rel="apple-touch-icon" sizes="180x180" href="https://guinnesspress.org/lp/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://guinnesspress.org/lp/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://guinnesspress.org/lp/favicon-16x16.png">
    <link rel="manifest" href="https://guinnesspress.org/lp/site.webmanifest">
    <link rel="mask-icon" href="https://guinnesspress.org/lp/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css"
        integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.6.1/css/iziModal.min.css"
        integrity="sha512-3c5WiuZUnVWCQGwVBf8XFg/4BKx48Xthd9nXi62YK0xnf39Oc2FV43lIEIdK50W+tfnw2lcVThJKmEAOoQG84Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/owl-carousel/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '362843969490645');
        fbq('track', 'PageView');
        fbq('track', 'Purchase', {
            value: 1,
            currency: 'USD'
        });
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=362843969490645&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->

</head>

<body>
    @include('user.layouts.navbar')
    @yield('banner')
    @yield('body')
    <footer>
        <div class="footer_navbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="footer_bar">
                            <!--<ul>-->
                            <!--	<li>Accessibility</li>-->
                            <!--	<li>Privacy Center</li> -->
                            <!--	<li>Cookies</li> -->
                            <!--	<li>Contact</li>-->
                            <!--	<li>Terms & Conditions</li>-->
                            <!--</ul>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="disclaimer">
            <div class="container">
                <div class="row main-footer-row-one">
                    <div class="col col-lg-3 col-md-3 fcol2">
                        <a href="https://www.guinnesspress.org">
                            <img src="{{ asset('assets/images/logo-dark.png') }}" title="Guinness Press"
                                alt="Guinness Press" loading="lazy">
                        </a>
                        <!--<p>Guinness Press is The Largest Online Library for Researchers where they can publish their research, Journals, magazines, and books to sell them.</p>-->
                        <!--<form action="" method="POST">-->
                        <!--     <input type="text" name="email" placeholder="Email Address">-->
                        <!--     <input type="submit" name="subscribe-newsletter">-->
                        <!--     <input type="hidden" class="client_ip" name="ip_address" value=""/>-->
                        <!--     <input type="hidden" class="client_country" name="country" value=""/>-->
                        <!--     <input type="hidden" class="pageurl" name="pageurl" value=""/>-->
                        <!--</form>-->
                        <!--<p>Lorem Ipsum is simply dummy text of </p>-->
                        <ul class="social_icons">
                            <li><a href="https://www.facebook.com/guinnesspressofficial" aria-label="Facebook"
                                    target="_blank">
                                    <i class="fab fa-facebook"></i></a>
                            </li>
                            <li><a href="https://www.pinterest.co.uk/guinness_press/" aria-label="Pinterest"
                                    target="_blank">
                                    <i class="fab fa-pinterest"></i>
                                </a></li>
                            <!--<li><a href="https://www.instagram.com/" aria-label="Instagram" target="_blank" >-->
                            <!--    <i class="fab fa-instagram"></i>-->
                            <!--</a></li>-->
                            <li><a href="https://www.linkedin.com/company/guinnesspress/" target="_blank"
                                    aria-label="Linkedin">
                                    <i class="fab fa-linkedin"></i>
                                </a></li>
                            <!--<li><a href="https://www.linkedin.com/company/guinnesspress/ " aria-label="Linkedin" >-->
                            <!--    <i class="fab fa-rocket-launch"></i>-->
                            <!--</a></li>-->
                            <!--<li><a href="https://www.sitejabber.com/reviews/guinnesspress.org " aria-label="Linkedin" >-->
                            <!--    <img src="assets/img/social-icons/sitejabber.png"/>-->
                            <!--</a></li>-->
                            <!--<li><a href="https://www.trustpilot.com/review/guinnesspress.com" aria-label="Linkedin" >-->
                            <!--    <img src="assets/img/social-icons/trustpilot.png"/>-->
                            <!--</a></li>-->
                            <!--<li><a href="https://www.goodfirms.co/company/guinness-press" aria-label="Linkedin" >-->
                            <!--    <img src="assets/img/social-icons/good-firms.webp"/>-->
                            <!--</a></li>-->
                        </ul>
                        <ul class="contactinfo">
                            <li>
                                <a href="tel:+1 (602) 649-5530">
                                    <i class="fa fa-phone"></i><span>+1 (602) 649-5530</span>
                                </a>
                            </li>
                            <li>
                                <a href="mailto: info@guinnesspress.org">
                                    <i class="fa fa-envelope"></i><span>info@guinnesspress.org</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://maps.app.goo.gl/Fm3HJTDZVVXiwCLE9">
                                    <i class="fa fa-location"></i><span>16192 Coastal Highway Lewes, DE 19958,
                                        USA</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col col-12 col-xl-3 fcol2">
                        <h6>Browse</h6>
                        <ul>
                            <!--<li>-->
                            <!--    <a href="/book-publishing-services"><i class="fa fa-check"></i><span>Books</span></a>-->
                            <!--</li>-->
                            <li>
                                <a href="{{ url('/journals') }}"><i class="fa fa-check"></i><span>Journals</span></a>
                            </li>

                        </ul>
                    </div>
                    <div class="col col-12 col-xl-3 fcol2">
                        <h6>Resources</h6>
                        <ul>
                            <!--<li>-->
                            <!--    <a href="/instructors"><i class="fa fa-check"></i><span>Instructors Book Authors/Editors</span></a>-->
                            <!--</li>-->
                            <!--<li>-->
                            <!--    <a href="/book-authors"><i class="fa fa-check"></i><span>Journal Authors/Editors/Reviewers</span></a>-->
                            <!--</li>-->
                            <!--<li>-->
                            <!--    <a href="/journal-authors"><i class="fa fa-check"></i><span>Chinese Journal Authors </span></a>-->
                            <!--</li>-->
                            <!--<li>-->
                            <!--    <a href="/students"><i class="fa fa-check"></i><span>Students</span></a>-->
                            <!--</li>-->
                            <!--<li>-->
                            <!--    <a href="/researches"><i class="fa fa-check"></i><span>Researchers</span></a>-->
                            <!--</li>-->
                            <li>
                                <a href="{{ url('/librarian-resource-center') }}"><i
                                        class="fa fa-check"></i><span>Librarians</span></a>
                            </li>
                            <!--<li>-->
                            <!--    <a href="/booksellers"><i class="fa fa-check"></i><span>Booksellers</span></a>-->
                            <!--</li>-->
                            <!--<li>-->
                            <!--    <a href="/advertisers"><i class="fa fa-check"></i><span>Advertisers</span></a>-->
                            <!--</li>-->
                            <li>
                                <a href="{{ url('/reviewer-guidelines') }}"><i
                                        class="fa fa-check"></i><span>Reviewers</span></a>
                            </li>
                            <li>
                                <a href="{{ url('/authors-guidelines') }}"><i class="fa fa-check"></i><span>Author's
                                        Guidelines</span></a>
                            </li>
                            <li>
                                <a href="{{ url('/crossmark-policy') }}"><i class="fa fa-check"></i><span>Crossmark
                                        Policy</span></a>
                            </li>
                            <li>
                                <a href="{{ url('/article-correction') }}"><i class="fa fa-check"></i><span>Article
                                        Correction</span></a>
                            </li>
                            <li>
                                <a href="{{ url('/article-retraction') }}"><i class="fa fa-check"></i><span>Article
                                        Retraction</span></a>
                            </li>
                            <li>
                                <a href="{{ url('/publication-procedure') }}"><i
                                        class="fa fa-check"></i><span>Publication Procedure</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col col-12 col-xl-3 fcol2">
                        <h6>About</h6>
                        <ul>
                            <li>
                                <a href="{{ url('/about-us') }}"><i class="fa fa-check"></i><span>About
                                        Guinness</span></a>
                            </li>
                            <li>
                                <a href="{{ url('/contact-us') }}"><i class="fa fa-check"></i><span>Contact
                                        Us</span></a>
                            </li>
                            <!--<li>-->
                            <!--    <a href="blog"><i class="fa fa-check"></i><span>News</span></a>-->
                            <!--</li>-->
                            <!--<li>-->
                            <!--    <a href="/accessibility"><i class="fa fa-check"></i><span>Accessibility</span></a>-->
                            <!--</li>-->
                            <!--<li>-->
                            <!--    <a href="/modern-slavery-statement"><i class="fa fa-check"></i><span>Modern Slavery Statement</span></a>-->
                            <!--</li>-->
                            <li>
                                <a href="{{ url('/policies-and-statements') }}"><i
                                        class="fa fa-check"></i><span>Policies and Statements</span></a>
                            </li>
                            <li>
                                <a href="{{ url('/peer-review-process') }}"><i class="fa fa-check"></i><span>Peer
                                        Review Process</span></a>
                            </li>
                            <li>
                                <a href="{{ url('/copyright-agreement') }}"><i
                                        class="fa fa-check"></i><span>Copyright Agreement</span></a>
                            </li>
                            <li>
                                <a href="{{ url('/archival-practices') }}"><i class="fa fa-check"></i><span>Archival
                                        Practices</span></a>
                            </li>
                            <li>
                                <a href="{{ url('/publication-fees') }}"><i class="fa fa-check"></i><span>Publication
                                        Fees</span></a>
                            </li>
                            <li>
                                <a href="{{ url('/repository-policy') }}"><i class="fa fa-check"></i><span>Repository
                                        Policy</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--<div class="row">-->
                <!--    <div class="col-md-6">-->
                <!--        <div class="footer_logo">-->
                <!--            <img class="img-fluid" src="{{ asset('assets/images/logo-dark.png') }}" alt="">-->
                <!--        </div>-->
                <!--        <ul class="address">-->
                <!--            <li>-->
                <!--               <a>-->
                <!--               <i class="fa fa-phone"></i>-->
                <!--               +1 (346) 980 4345-->
                <!--               </a>-->
                <!--            </li>-->
                <!--            <li>-->
                <!--               <a>-->
                <!--               <i class="fa fa-envelope"></i>-->
                <!--               info@guinnesspress.org-->
                <!--               </a>-->
                <!--            </li>-->
                <!--            <li>-->
                <!--               <a>-->
                <!--               <i class="fa fa-location"></i>-->
                <!--               16192 Coastal Highway Lewes, DE 19958, USA-->
                <!--               </a>-->
                <!--            </li>-->
                <!--        </ul>-->
                <!--    </div>-->
                <!--    <div class="col-md-7">-->
                <!--        <h3>-->
                <!--            COPYRIGHT 2024. Guinness Press, ALL RIGHTS RESERVED.-->
                <!--        </h3>-->
                <!--<p>-->
                <!--	We not only let you explore but also offer helpful resources so that you can learn from them-->
                <!--</p>-->
                <!--    </div>-->
                <!--    <div class="col-md-5">-->
                <!--<div class="footer_logo">-->
                <!--	<img class="img-fluid" src="{{ asset('assets/images/logo-dark.png') }}" alt="">-->
                <!--</div>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"
        integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/TextPlugin.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.6.1/js/iziModal.min.js"
        integrity="sha512-lR/2z/m/AunQdfBTSR8gp9bwkrjwMq1cP0BYRIZu8zd4ycLcpRYJopB+WsBGPDjlkJUwC6VHCmuAXwwPHlacww=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Include js plugin -->
    <script src="{{ asset('assets/owl-carousel/owl.carousel.js') }}"></script>
    <script>
        $("#slider_1").owlCarousel({
            items: 10,
            itemsDesktop: [1500, 6],
            itemsDesktopSmall: [1200, 6],
            itemsTablet: [1000, 6],
            itemsTablet: [768, 5],
            itemsMobile: [425, 5],
            loop: true,
            autoPlay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause: true
        });
        $("#slider_2").owlCarousel({
            items: 5,
            itemsDesktop: [1500, 3],
            itemsDesktopSmall: [1200, 4],
            itemsTablet: [1000, 2],
            itemsTablet: [768, 3],
            itemsMobile: [425, 2],
            loop: true,
            autoPlay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause: true
        });
        $("#slider_3").owlCarousel({
            items: 6,
            itemsDesktop: [1500, 6],
            itemsDesktopSmall: [1200, 4],
            itemsTablet: [1000, 3],
            itemsTablet: [768, 3],
            loop: true,
            autoPlay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause: true
        });
        /*Megamenu DropDown*/
        jQuery(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu-single', this).addClass("show-mega");
                    $('.dropdown-show-mega').removeClass("show-mega-main");
                },
                function() {
                    $('.dropdown-menu-single', this).removeClass("show-mega");
                    $('.dropdown-menu-double').removeClass("show-mega");
                });
            $(".dropdown-nested").hover(

                function() {
                    $('.dropdown-menu-double').addClass("show-mega");
                }

            );
            $(".dropdown-main-mega").hover(
                function() {
                    $('.dropdown-show-mega').addClass("show-mega-main");
                }

            );
            $(".banner").hover(
                function() {
                    $('.dropdown-show-mega').removeClass("show-mega-main");
                }

            );
        });
    </script>
    <script>
        function copydoi() {
            let copyText = document.getElementById("copyDoiToClipboard");
            let copySuccess = document.getElementById("copieddoi-success");
            let text = copyText.getAttribute("href");
            //copyText.setSelectionRange(0, 99999); 
            navigator.clipboard.writeText(text);

            copySuccess.style.opacity = "1";
            setTimeout(function() {
                copySuccess.style.opacity = "0"
            }, 500);
        }
        $(document).ready(function() {
            $('#search').on('keyup', function() {
                var query = $(this).val();
                $.ajax({
                    url: "{{ route('search') }}",
                    type: "GET",
                    data: {
                        'query': query
                    },
                    success: function(data) {
                        if (data == '') {
                            $('#search_result_list').html('');
                            $('#search_result_list').append(
                                '<li><a href="">No Data Found</a></li>');
                            $(".search_result").css({
                                "display": "block"
                            });
                        } else {
                            $('#search_result_list').html('');
                            $.each(data, function(index, post) {

                                console.log(post.setting_value);
                                $('#search_result_list').append(
                                    '<li><a href="journal-details/' + post.path +
                                    '">' + post.setting_value + '</a></li>');
                                $(".search_result").css({
                                    "display": "block"
                                });
                            });
                        }

                    }
                })
            });
        });
    </script>
    <div style="display: none;" class="popupform submitArticlePopup" id="submitArticlePopup">
        <div class="alert alert-success success-signup" role="alert" style="display:none">
            Sent Successfully
        </div>
        <h2>Submit Your Article</h2>
        <!--<p>Fill the below fields</p>-->
        <form action="{{ route('send.articlemail') }}" method="POST" class="cmxform web-package-form"
            id="articleSub_form" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col">
                    <h4 class="fcol_head">Article Detail:</h4>
                    <div class="row">
                        <div class="col">
                            <ul>
                                <li>
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <input type="text" required placeholder="Manuscript Title *" id ="wnm"
                                        name="manuscript_title">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <ul>
                                <li>
                                    <!--<i class="fa fa-envelope" aria-hidden="true"></i>-->
                                    <select name="journal" required placeholder="Journal *" id="sa_journal">
                                        <option value="none" selected disabled hidden>Journal</option>
                                        <option value="International Journal Of Empirical Research Methods">
                                            International Journal Of Empirical Research Methods</option>
                                        <option value="Journal Of Business Leadership And Management">Journal Of
                                            Business Leadership And Management</option>
                                        <option value="Cultural Landscape Insights">Cultural Landscape Insights
                                        </option>
                                        <option value="Current Integrative Engineering">Current Integrative Engineering
                                        </option>
                                        <option value="Sustainable Energy And Environment Review">Sustainable Energy
                                            And Environment Review</option>
                                        <option value="Recent Educational Research">Recent Educational Research
                                        </option>
                                        <option value="Pharmaceutical Breakthroughs">Pharmaceutical Breakthroughs
                                        </option>
                                        <option value="Medical Spectrum Review">Medical Spectrum Review</option>
                                        <option value="Strategic Financial Review">Strategic Financial Review</option>
                                        <option value="Advanced Chemistry Insights">Advanced Chemistry Insights
                                        </option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <ul>
                                <li>
                                    <!--<i class="fa fa-phone" aria-hidden="true"></i>-->
                                    <!--<input type="file" id="inputArticle-files" hidden="hidden" multiple/>-->
                                    <!--  <button type="button" id="articlesub-button">CHOOSE FILES</button>-->
                                    <!--  <span id="articlesub-text">No file Selected.</span>-->
                                    <label for="article_fileattachment">
                                        <a class="btn btn-primary text-light articlesub-button" role="button"
                                            id="articlesub-button" aria-disabled="false">Choose Files</a>
                                    </label>
                                    <input type="file" required name="article_fileattachment[]"
                                        accept=".png,.docx,jpeg,.pdf,.xlsx" id="article_fileattachment"
                                        style="opacity: 0;" multiple max-size="2048" />
                                    <div id="files-area">
                                        <span id="filesList">
                                            <span id="files-names"></span>
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h4 class="fcol_head">Corresponding Authors Detail:</h4>
                    <div class="row">
                        <div class="col">
                            <ul>
                                <li>
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <input type="text" required placeholder="Full Name *" id ="wnm"
                                        name="author_name">
                                </li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <input type="number" required minlength="10" required placeholder="Phone No. *"
                                        id="wpn" name="author_number">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <ul>
                                <li>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <input type="email" required placeholder="Email Address *" id="wem"
                                        name="author_email">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <ul>
                                <li>
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <input type="text" required placeholder="Country *" id ="wnm"
                                        name="author_country">
                                </li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li>
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <input type="text" required placeholder="Affiliation *" id ="wnm"
                                        name="affiliation">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="submit_button">
                <ul>
                    <li>
                        <input type="submit" value="Submit" id="your-article-submit" name="your-article-submit"
                            placeholder="Submit Your Article" required>
                    </li>
                </ul>
            </div>
        </form>
    </div>

    <script>
        const dt = new DataTransfer(); // Permet de manipuler les fichiers de l'input file

        jQuery("#article_fileattachment").on('change', function(e) {
            const maxFileSizeInMB = 2;
            const maxFileSizeInKB = 1024 * 1024 * maxFileSizeInMB;

            // this.files.forEach(
            //     function(singlefile){
            //       if (singlefile.size > maxFileSizeInKB) {
            //           alert("Maximum of 2 MB File is allowed");
            //       }
            //     }
            //     );

            if (parseInt(this.files.length) > 3) {
                alert("You can only upload a maximum of 3 files");
            } else {
                for (var i = 0; i < this.files.length; i++) {
                    let fileBloc = $('<span/>', {
                            class: 'file-block'
                        }),
                        fileName = $('<span/>', {
                            class: 'name',
                            text: this.files.item(i).name
                        });
                    fileBloc.append('<span class="file-delete"><span>+</span></span>')
                        .append(fileName);
                    $("#filesList > #files-names").append(fileBloc);
                };
                // Ajout des fichiers dans l'objet DataTransfer
                for (let file of this.files) {
                    dt.items.add(file);
                }
                // Mise à jour des fichiers de l'input file après ajout
                this.files = dt.files;
            }
            // EventListener pour le bouton de suppression créé
            jQuery('span.file-delete').click(function() {
                let name = $(this).next('span.name').text();
                // Supprimer l'affichage du nom de fichier
                jQuery(this).parent().remove();
                for (let i = 0; i < dt.items.length; i++) {
                    // Correspondance du fichier et du nom
                    if (name === dt.items[i].getAsFile().name) {
                        // Suppression du fichier dans l'objet DataTransfer
                        dt.items.remove(i);
                        continue;
                    }
                }
                // Mise à jour des fichiers de l'input file après suppression
                document.getElementById('article_fileattachment').files = dt.files;
            });
        });
    </script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/6581a87c07843602b803a7c1/1hi17ka3q';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <script>
        $('form').each(function() {
            $(this).on('submit', function() {
                var button = $(this).find('button[type="submit"]');
                button.prop('disabled', true).html(`
                <span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>
            `);
                return true;
            });
        });
    </script>
    
    
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16632897206"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-16632897206');
</script>
<script>
  gtag('event', 'conversion', {'send_to': 'AW-16632897206/JaguCMDEgcQZELa9l_s9'});
</script>
</body>

</html>
