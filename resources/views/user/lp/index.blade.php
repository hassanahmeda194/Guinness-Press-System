<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="https://guinnesspress.org/lp/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://guinnesspress.org/lp/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://guinnesspress.org/lp/favicon-16x16.png">
    <link rel="manifest" href="https://guinnesspress.org/lp/site.webmanifest">
    <link rel="mask-icon" href="https://guinnesspress.org/lp/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta name='robots' content="noindex, nofollow" />
    <title>Guinness Press Landing Page</title>

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

    <link rel="stylesheet" type="text/css" href="{{ asset('lp_assets/css/stackedCards.css') }}" />
    <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="{{ asset('lp_assets/owl-carousel/owl.carousel.css') }}">

    <!-- Default Theme -->
    <link rel="stylesheet" href="{{ asset('lp_assets/owl-carousel/owl.theme.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('lp_assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('lp_assets/css/responsive.css') }}">


    <!-- <script type="text/javascript">
    //     (function() {
    //         var options = {
    //             whatsapp: "+16026495530", // WhatsApp number
    //             call_to_action: "Message us", // Call to action
    //             position: "left", // Position may be 'right' or 'left'
    //         };
    //         var proto = document.location.protocol,
    //             host = "getbutton.io",
    //             url = proto + "//static." + host;
    //         var s = document.createElement('script');
    //         s.type = 'text/javascript';
    //         s.async = true;
    //         s.src = url + '/widget-send-button/js/init.js';
    //         s.onload = function() {
    //             WhWidgetSendButton.init(host, proto, options);
    //         };
    //         var x = document.getElementsByTagName('script')[0];
    //         x.parentNode.insertBefore(s, x);
    //     })();
    // </script>-->


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
        fbq('init', '1160206722000590');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1160206722000590&ev=PageView&noscript=1" /></noscript>
</head>

<body>
    <header class="">
        <div class="bg-dark text-center">
            <p class="text-white text-center fw-bold py-1">In case you have any difficulty submitting your article,
                please contact us at submission@guinnesspress.org</p>
        </div>
        <div class="container">
            <div class="head_bar">
                <div class="left_col">
                    <div class="logo_bar">
                        <img src="{{ asset('lp_assets/images/light-logo.png') }}" class="img-fluid">
                    </div>
                </div>
                <div class="right_bar">
                    <div class="cta_btn">
                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="javascript:void(0)"
                            class="btn btn-info cta_btn cta_btn_blue">submit manuscript</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner_left_col">
                        <h3>Guinness Press</h3>
                        <h1>PUBLISH AN ARTICLE WITH GUINNESS PRESS</h1>
                        <p>Looking For A Trusted Peer-Reviewed Journal to Publish Research Paper. Look No Further Than
                            Guinness Press.</p>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 text-center text-lg-start text-md-start text-sm-start">
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="javascript:void(0)" class="btn btn-info cta_btn cta_btn_blue">submit manuscript</a>
                        </div>
                    </div>

                        <div class="t_pilot">
                            <a href="https://www.trustpilot.com/review/guinnesspress.org">
                                <img src="{{ asset('lp_assets/images/image-6.png') }}" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner_right_col">
                        <div class="form_area">
                            <div class="form_header">
                                <h3>SUBMIT ARTICLE TO PUBLISH IN OUR JOURNAL</h3>
                            </div>
                            <div class="form_body">
                                <form enctype="multipart/form-data" method="POST" action="{{ route('submit.lp') }}">
    @csrf
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" class="form-control banner_txt_box @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required>
                @error('first_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label>Phone Number</label>
                <input type="number" class="form-control banner_txt_box @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required>
                @error('phone_number')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" class="form-control banner_txt_box @error('email_address') is-invalid @enderror" name="email_address" value="{{ old('email_address') }}" required>
                @error('email_address')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label for="country">Country</label>
                <select name="country" id="country" class="form-control banner_txt_box @error('country') is-invalid @enderror" required>
                    <option value="" disabled selected>Select Country</option>
                    @foreach ($countries as $country)
                        <option value="{{ $country['name'] }}" {{ old('country') == $country['name'] ? 'selected' : '' }}>{{ $country['name'] }}</option>
                    @endforeach
                </select>
                @error('country')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <input type="hidden" name="url" value="{{ request()->fullUrl() }}">

        <div class="col-lg-12">
            <div class="form-group">
                <label>Select Journals</label>
                <select class="form-control banner_txt_box @error('journal') is-invalid @enderror" name="journal" required>
                    <option value="" disabled selected>Select journal</option>
                    @foreach ($journals as $j)
                        <option value="{{ $j->id }}">{{ $j->name }}</option>
                    @endforeach
                </select>
                @error('journal')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group">
                <label>Upload Manuscript</label>
                <input type="file" class="form-control banner_txt_box @error('attachement') is-invalid @enderror" name="attachement" required>
                @error('attachement')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="col-lg-12">
            <button type="submit" class="btn btn-info cta_btn submit_btn">Submit Manuscript</button>
        </div>
    </div>
</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec_1">
        <div class="container">
            <div class="sec_1_header mb-4">
                <h3>Indexing bodies</h3>
            </div>
            <div class="sec_1_body">
                <div class="my-5">
                      <div class="d-flex flex-wrap gap-4 justify-content-center">
                        @foreach ($indexing_bodies as $i)
                            <div class="item">
                                <a href="{{ $i->link }}">
                                    <img src="{{ asset($i->image) }}" class="img-fluid"
                                        style="height: 100px; width:100px; border-radius:50%; border:1px solid grey; ">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="sec_1_footer">
                <div class="btn-group">
                    <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="javascript:void(0)"
                        class="btn btn-info cta_btn cta_btn_blue ">submit manuscript</a>

                </div>
            </div>
        </div>
    </section>
    <section class="sec_2">
        <div class="container">
            <div class="sec_2_header">
                <h3>Guinness press</h3>
                <h2>Open Access Peer Reviewed Journals List</h2>
                <div class="sec_2_label">
                    <a href="" class="btn btn-info cta_btn cta_btn_white">Trending Journals</a>
                </div>
            </div>
            <div class="sec_2_body">
                <div class="sec_2_body_data">
                    <div class="row justify-content-center">
                        @foreach ($journals as $j)
                            <div class="col-6">
                                <div class="sec_2_box_item d-flex justify-content-center align-items-center">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-5 col-sm-5">
                                            <div class="journal_img">
                                                <img src="{{ asset($j->image) }}" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-7 col-sm-7">
                                            <div class="sec_2_box_item_content">
                                                <a href="https://www.guinnesspress.org/publication/journal/ijerm"
                                                    target="_blank">
                                                    <h3>
                                                        {{ $j->name }}
                                                    </h3>
                                                </a>
                                                <div class="sec_2_box_item_content_footer">
                                                    <div class="left_footer_box">
                                                        <p class="issn">
                                                            <span>ISSN : </span>{{ $j->issn_no }}
                                                        </p>
                                                        <p class="issn">
                                                            <span>Abbreviation : </span>{{ $j->acronym }}
                                                        </p>
                                                        <p class="issn">
                                                            <span>DOI Prefix : </span>{{ $j->dio }}
                                                        </p>
                                                        <p class="issn">
                                                            <span>Publication Type :
                                                            </span>{{ $j->journal_matrix->publication_type }}
                                                        </p>
                                                        <p class="issn">
                                                            <span>Publishing Model :
                                                            </span>{{ $j->journal_matrix->publishing_model }}
                                                        </p>
                                                        <p class="issn">
                                                            <span>Journal Category :
                                                            </span>{{ $j->journal_matrix->journal_category }}
                                                        </p>
                                                    </div>

                                                    <div class="right_footer_box">
                                                        <div class="btn-group">
                                                            <a data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                                href="javascript:void(0)"
                                                                class="btn btn-info py-2 px-2 cta_btn cta_btn_blue">Submit
                                                                Manuscript</a>
                                                        </div>
                                                        <div class="btn-group">
                                                            <a href="https://www.guinnesspress.org/publication/journal/ijerm"
                                                                class="btn btn-info py-2 px-2 cta_btn cta_btn_blue  text-white fw-bold">View
                                                                Journals</a>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="sec_2_body_data_2">
                    <div class="owl-carousel" id="journals">
                        @foreach ($journals as $j)
                            <div class="item">
                                <div class="sec_2_box_item">
                                    <div class="row">
                                        <div class="col-12 col-lg-5 col-md-4 col-sm-6 mb-4">
                                             <div class="journal_img">
                                                <img src="{{ asset($j->image) }}" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-7 col-md-8 col-sm-6 mb-4">
                                            <div class="sec_2_box_item_content">
                                                <a href="https://www.guinnesspress.org/publication/journal/ijerm"
                                                    target="_blank">
                                                    <h3>
                                                        {{ $j->name }}
                                                    </h3>
                                                </a>

                                                <div class="sec_2_box_item_content_footer">
                                                    <div class="left_footer_box">
                                                        <p class="issn">
                                                            <span>ISSN : </span>{{ $j->issn_no }}
                                                        </p>
                                                        <p class="issn">
                                                            <span>Abbreviation : </span>{{ $j->acronym }}
                                                        </p>
                                                        <p class="issn">
                                                            <span>DOI Prefix : </span>{{ $j->dio }}
                                                        </p>
                                                        <p class="issn">
                                                            <span>Publication Type :
                                                            </span>{{ $j->journal_matrix->publication_type }}
                                                        </p>
                                                        <p class="issn">
                                                            <span>Publishing Model :
                                                            </span>{{ $j->journal_matrix->publishing_model }}
                                                        </p>
                                                        <p class="issn">
                                                            <span>Journal Category :
                                                            </span>{{ $j->journal_matrix->journal_category }}
                                                        </p>
                                                    </div>
                                                    <div class="">
                                                        <div class="btn-group w-100">
                                                            <a data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                                href="javascript:void(0)"
                                                                class="btn btn-info py-2 px-2 cta_btn cta_btn_blue">Submit
                                                                Manuscript</a>
                                                        </div>
                                                        <div class="btn-group w-100">
                                                            <a href="https://www.guinnesspress.org/publication/journal/ijerm"
                                                                class="btn btn-info py-2 px-2 cta_btn cta_btn_blue text-white fw-bold">View
                                                                Journals</a>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec_3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sec_3_content pe-3">
                        <h2>Publish Your Research Paper with Ease</h2>
                        <p>
                            Guinness Press is a premier platform to publish research paper, dedicated to providing a
                            seamless and efficient journal publication experience. Our peer-reviewed journals ensure
                            rapid publication, allowing your research to reach the forefront quickly. We offer
                            comprehensive services for publishing research papers, scientific papers, and academic
                            papers across a wide range of disciplines.
                        </p>
                        <div class="btn-group">
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="javascript:void(0)"
                                class="btn btn-info cta_btn cta_btn_blue">submit manuscript</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sec_3_img_sec">
                        <img src="{{ asset('lp_assets/images/cta_img.png') }}" class="img-fluid">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="sec_4">
        <div class="container">
            <div class="sec_4_header mb-4">
                <h3>ARTICLES</h3>
                <h2>OUR RECENT PUBLISHED ARTICLES</h2>
            </div>
            <div class="sec_4_body">
                <div class="sec_4_slider">
                    <div class="owl-carousel" id="articles">
                        <div class="item">
                            <a href="https://www.guinnesspress.org/publication/journal/cie/5230403">
                                <div class="article_box">
                                    <div class="article_body">
                                        <h3>Calories Burnt Prediction Using Machine Learning Approach</h3>
                                        <div class="article_content">
                                            <div class="article_content_left">
                                                <p>
                                                    Author(s): Mohammad Tarek Aziz , Taohidur Rahman 2 Renzon Daniel
                                                    Cosme Pecho , Nayeem Uddin Ahmed Khan , Akba Ull Hasna Era , MD.
                                                    Abir Chowdhury
                                                </p>
                                                <p>
                                                    Article | Published Online: 31 Oct 2023 | Pages [29 - 36]
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="https://www.guinnesspress.org/publication/journal/rer/5244305">
                                <div class="article_box">
                                    <div class="article_body">
                                        <h3>Level of Writing Apprehension and Factors Affecting the Writing Performance:
                                            Perspectives of the English Major Students</h3>
                                        <div class="article_content">
                                            <div class="article_content_left">
                                                <p>
                                                    Author(s): Roland A. Niez
                                                </p>
                                                <p>
                                                    Article | Published Online: 17 Nov 2023 | Pages [31 - 45]
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="https://www.guinnesspress.org/publication/journal/jblm/5245003">
                                <div class="article_box">
                                    <div class="article_body">
                                        <h3>The Role of Incoterms and Relational Resources on Competitive Advantage: A
                                            Study of Freight Forwarders Company in Indonesia</h3>
                                        <div class="article_content">
                                            <div class="article_content_left">
                                                <p>
                                                    Author(s): Ahmad Sugiono , Agus Rahayu , Lili Adi Wibowo , Ratih
                                                    Hurriyati
                                                </p>
                                                <p>
                                                    Article | Published Online: 25 Dec 2023 | Pages [88 - 95]
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="https://www.guinnesspress.org/publication/journal/cie/5230402">
                                <div class="article_box">
                                    <div class="article_body">
                                        <h3>Artificial Intelligence And Machine Learning For Supply Chain Resilience
                                        </h3>
                                        <div class="article_content">
                                            <div class="article_content_left">
                                                <p>
                                                    Author(s): Ghada Elkady , Ahmed Hesham Sedky
                                                </p>
                                                <p>
                                                    Article | Published Online: 31 Oct 2023 | Pages [23 - 28]
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="https://www.guinnesspress.org/publication/journal/jblm/5246305">
                                <div class="article_box">
                                    <div class="article_body">
                                        <h3>Unveiling the Augmented Realm: Exploring the Dynamic Relationship between
                                            Augmented Reality Technology and Consumer Engagement for Enhanced Purchase
                                            Behavior</h3>
                                        <div class="article_content">
                                            <div class="article_content_left">
                                                <p>
                                                    Author(s): Nguyen Ngoc Bao Tran
                                                </p>
                                                <p>
                                                    Article | Published Online: 05 Feb 2024 | Pages [48 - 58]
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="https://www.guinnesspress.org/publication/journal/ijerm/1122141">
                                <div class="article_box">
                                    <div class="article_body">
                                        <h3>Deployment of Lean Six Sigma in Transportation Sector</h3>
                                        <div class="article_content">
                                            <div class="article_content_left">
                                                <p>
                                                    Author(s): Noor Azam Bin MD Saad
                                                </p>
                                                <p>
                                                    Article | Published Online: 05 Dec 2023 | Pages [74 - 80]
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="https://www.guinnesspress.org/publication/journal/seer/5243102">
                                <div class="article_box">
                                    <div class="article_body">
                                        <h3>Climate Change Impact On Upper Layang Reservoir Operation</h3>
                                        <div class="article_content">
                                            <div class="article_content_left">
                                                <p>
                                                    Author(s): Nur Nabilah Farhana Mohammad Fathilah , Aminu Sa’ad Sa’id
                                                    , Ponselvi Jeevaragagam , Kamarul Azlan Mohd Nasir
                                                </p>
                                                <p>
                                                    Article | Published Online: 03 Nov 2023 | Pages [16 - 26]
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="https://www.guinnesspress.org/publication/journal/rer/5244304">
                                <div class="article_box">
                                    <div class="article_body">
                                        <h3>Analyzing Science Communication Discourses in a Global Society: A Case Study
                                            of a Graduate School Classroom</h3>
                                        <div class="article_content">
                                            <div class="article_content_left">
                                                <p>
                                                    Author(s): Louis Placido F. Lachica , Giselle D. Arintoc
                                                </p>
                                                <p>
                                                    Article | Published Online: 17 Nov 2023 | Pages [19 - 30]
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="https://www.guinnesspress.org/publication/journal/jblm/5243018">
                                <div class="article_box">
                                    <div class="article_body">
                                        <h3>Economic Inequality And Its Effects On The Decision-Making Of Entrepreneurs
                                            In Emerging Economies</h3>
                                        <div class="article_content">
                                            <div class="article_content_left">
                                                <p>
                                                    Author(s): Mercy Tony
                                                </p>
                                                <p>
                                                    Article | Published Online: 09 Oct 2023 | Pages [67 - 73]
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="https://www.guinnesspress.org/publication/journal/ijerm/1024925">
                                <div class="article_box">
                                    <div class="article_body">
                                        <h3>Adaptation Of Socrative Application As Online Teaching Platform During The
                                            Covid-19 Pandemic</h3>
                                        <div class="article_content">
                                            <div class="article_content_left">
                                                <p>
                                                    Author(s): Mark Treve
                                                </p>
                                                <p>
                                                    Article | Published Online: 05 Oct 2023 | Pages [17 - 26]
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec_5">
        <div class="container">
            <div class="sec_5_header">
                <h3>WHAT OUR CLIENT SAY’S</h3>
                <h2>TESTIMONIALS</h2>
            </div>
            <div class="sec_5_body">
                <div class="testimonial">
                    <div class="owl-carousel" id="testimonials">
                        <div class="item">
                            <div class="testimonials_box">
                                <div class="testimonials_box_header">
                                    <div class="testimonials_box_header_img">
                                        <div class="testimonials_box_header_left">
                                            <img src="{{ asset('lp_assets/images/client_5.png') }}"
                                                class="img-fluid">
                                        </div>
                                        <div class="testimonials_box_header_right">
                                            <img src="{{ asset('lp_assets/images/stars.png') }}" class="img-fluid">
                                        </div>
                                    </div>
                                    <h3>Lisa</h3>
                                </div>
                                <div class="testimonials_box_body">
                                    <p>
                                        Guinness Press has played a pivotal role in shaping my academic journey. Their
                                        journals offer a robust platform for disseminating research findings and
                                        engaging in scholarly discussions. I am truly grateful for the invaluable
                                        opportunities they provide.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials_box">
                                <div class="testimonials_box_header">
                                    <div class="testimonials_box_header_img">
                                        <div class="testimonials_box_header_left">
                                            <img src="{{ asset('lp_assets/images/client_2.png') }}"
                                                class="img-fluid">
                                        </div>
                                        <div class="testimonials_box_header_right">
                                            <img src="{{ asset('lp_assets/images/stars.png') }}" class="img-fluid">
                                        </div>
                                    </div>
                                    <h3>Marian</h3>
                                </div>
                                <div class="testimonials_box_body">
                                    <p>
                                        As a researcher, I rely on Guinness Press for their unwavering commitment to
                                        academic excellence. Their journals not only showcase the latest advancements in
                                        various fields but also foster a global community of scholars. I highly
                                        recommend their publications to anyone passionate about expanding their
                                        knowledge horizons.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials_box">
                                <div class="testimonials_box_header">
                                    <div class="testimonials_box_header_img">
                                        <div class="testimonials_box_header_left">
                                            <img src="{{ asset('lp_assets/images/client_9.png') }}"
                                                class="img-fluid">
                                        </div>
                                        <div class="testimonials_box_header_right">
                                            <img src="{{ asset('lp_assets/images/stars.png') }}" class="img-fluid">
                                        </div>
                                    </div>
                                    <h3>Ahmed</h3>
                                </div>
                                <div class="testimonials_box_body">
                                    <p>
                                        Guinness Press stands out for its dedication to promoting the dissemination of
                                        knowledge. Working with them has been a seamless experience, thanks to their
                                        meticulous peer-review process and strong editorial support. I trust Guinness
                                        Press to uphold the highest standards of scholarship in every publication.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials_box">
                                <div class="testimonials_box_header">
                                    <div class="testimonials_box_header_img">
                                        <div class="testimonials_box_header_left">
                                            <img src="{{ asset('lp_assets/images/client_1.png') }}"
                                                class="img-fluid">
                                        </div>
                                        <div class="testimonials_box_header_right">
                                            <img src="{{ asset('lp_assets/images/stars.png') }}" class="img-fluid">
                                        </div>
                                    </div>
                                    <h3>Zain</h3>
                                </div>
                                <div class="testimonials_box_body">
                                    <p>
                                        Having had the privilege of publishing with Guinness Press, I am thoroughly
                                        impressed with the outcome. Their diverse range of journals covers a wide
                                        spectrum of topics, ensuring there's something for everyone. The editorial
                                        team's professionalism and support have made the publication process a rewarding
                                        journey.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials_box">
                                <div class="testimonials_box_header">
                                    <div class="testimonials_box_header_img">
                                        <div class="testimonials_box_header_left">
                                            <img src="{{ asset('lp_assets/images/client_12.png') }}"
                                                class="img-fluid">
                                        </div>
                                        <div class="testimonials_box_header_right">
                                            <img src="{{ asset('lp_assets/images/stars.png') }}" class="img-fluid">
                                        </div>
                                    </div>
                                    <h3>Robinson</h3>
                                </div>
                                <div class="testimonials_box_body">
                                    <p>
                                        Guinness Press has consistently been my preferred choice for academic research
                                        publishing. Their commitment to open access ensures that scholarly knowledge
                                        remains accessible to all. I highly recommend them to everyone.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="top_footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="footer_disclaimer">
                            <div class="footer_logo">
                                <a href="">
                                    <img src="{{ asset('lp_assets/images/white-logo.png') }}" class="img-fluid">
                                </a>
                            </div>
                            <p>
                                We not only let you explore but also offer helpful resources so that you can learn from
                                them.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="quick_links">
                                    <h3>Browse</h3>
                                    <ul>
                                        <li>
                                            <a href="https://guinnesspress.org/journal">Journals</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="quick_links">
                                    <h3>Resources</h3>
                                    <ul>
                                        <li>
                                            <a
                                                href="https://guinnesspress.org/librarian-resource-center"><span>Librarians</span></a>
                                        </li>
                                        <!--<li>-->
                                        <!--    <a href="/booksellers"><i class="fa fa-check"></i><span>Booksellers</span></a>-->
                                        <!--</li>-->
                                        <!--<li>-->
                                        <!--    <a href="/advertisers"><i class="fa fa-check"></i><span>Advertisers</span></a>-->
                                        <!--</li>-->
                                        <li>
                                            <a
                                                href="https://guinnesspress.org/reviewer-guidelines"><span>Reviewers</span></a>
                                        </li>
                                        <li>
                                            <a href="https://guinnesspress.org/authors-guidelines"><span>Author's
                                                    Guidelines</span></a>
                                        </li>
                                        <li>
                                            <a href="https://guinnesspress.org/crossmark-policy"><span>Crossmark
                                                    Policy</span></a>
                                        </li>
                                        <li>
                                            <a href="https://guinnesspress.org/article-correction"><span>Article
                                                    Correction</span></a>
                                        </li>
                                        <li>
                                            <a href="https://guinnesspress.org/article-retraction"><span>Article
                                                    Retraction</span></a>
                                        </li>
                                        <li>
                                            <a href="https://guinnesspress.org/publication-procedure"><span>Publication
                                                    Procedure</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="quick_links">
                                    <h3>About</h3>
                                    <ul>
                                        <li>
                                            <a href="https://guinnesspress.org/about-us"><span>About
                                                    Guinness</span></a>
                                        </li>
                                        <li>
                                            <a href="https://guinnesspress.org/contact-us"><span>Contact Us</span></a>
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
                                            <a href="https://guinnesspress.org/policies-and-statements"><span>Policies
                                                    and Statements</span></a>
                                        </li>
                                        <li>
                                            <a href="https://guinnesspress.org/peer-review-process"><span>Peer Review
                                                    Process</span></a>
                                        </li>
                                        <li>
                                            <a href="https://guinnesspress.org/copyright-agreement"><span>Copyright
                                                    Agreement</span></a>
                                        </li>
                                        <li>
                                            <a href="https://guinnesspress.org/archival-practices"><span>Archival
                                                    Practices</span></a>
                                        </li>
                                        <li>
                                            <a href="https://guinnesspress.org/publication-fees"><span>Publication
                                                    Fees</span></a>
                                        </li>
                                        <li>
                                            <a href="https://guinnesspress.org/repository-policy"><span>Repository
                                                    Policy</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom_footer">
            <div class="container">
                <div class="bottom_footer_content">
                    <p>Copyright © 2024 <span>Guinness press</span>. All Rights Reserved</p>
                </div>
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

    <script src="./assets/js/script.js"></script>

    <script src="./assets/js/stackedCards.js"></script>
    <script src="./assets/css/stackedCards.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.6.1/js/iziModal.min.js"
        integrity="sha512-lR/2z/m/AunQdfBTSR8gp9bwkrjwMq1cP0BYRIZu8zd4ycLcpRYJopB+WsBGPDjlkJUwC6VHCmuAXwwPHlacww=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://bookpublishingandmarketing.org/lp/assets/js/lp-script.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


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
        $(window).ready(function() {

            var owl = $('#indexing2').owlCarousel({
                loop: true,
                responsiveClass: true,
                nav: false,
                margin: 4,
                autoplayTimeout: 4000,
                autoplay: true,
                smartSpeed: 400,
                center: false,
                navText: ['&#8592;', '&#8594;'],
                responsive: {
                    0: {
                        items: 4,
                    },
                    600: {
                        items: 4
                    },
                    1200: {
                        items: 4
                    }
                }
            });
            var owl = $('#indexing').owlCarousel({
                loop: true,
                responsiveClass: true,
                nav: false,
                margin: 4,
                autoplayTimeout: 4000,
                autoplay: true,
                smartSpeed: 400,
                center: false,
                navText: ['&#8592;', '&#8594;'],
                responsive: {
                    0: {
                        items: 4,
                    },
                    600: {
                        items: 4
                    },
                    1200: {
                        items: 4
                    }
                }
            });
            var owl = $('#journals').owlCarousel({
                loop: true,
                responsiveClass: true,
                nav: false,
                margin: 4,
                autoplayTimeout: 4000,
                autoplay: true,
                smartSpeed: 400,
                center: false,
                navText: ['&#8592;', '&#8594;'],
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 2
                    },
                    1200: {
                        items: 2
                    }
                }
            });
            var owl = $('#articles').owlCarousel({
                loop: true,
                responsiveClass: true,
                nav: true,
                margin: 0,
                autoplayTimeout: 4000,
                smartSpeed: 400,
                center: false,
                navText: ['&#8592;', '&#8594;'],
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 1
                    },
                    1200: {
                        items: 1
                    }
                }
            });
            var owl = $('#testimonials').owlCarousel({
                loop: true,
                responsiveClass: true,
                nav: false,
                margin: 0,
                autoplayTimeout: 4000,
                smartSpeed: 400,
                center: true,
                navText: ['&#8592;', '&#8594;'],
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 3
                    },
                    1200: {
                        items: 3
                    }
                }
            });
        });
    </script>
    <!-- Include js plugin -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="banner_right_col">
                        <div class="form_area">
                            <div class="form_header">
                                <h3>SUBMIT ARTICLE TO PUBLISH IN OUR JOURNAL</h3>
                            </div>
                            <div class="form_body">
                                <form enctype="multipart/form-data" method="POST" action="{{ route('submit.lp') }}">
    @csrf
    <div class="row">
        <!-- Full Name Field -->
        <div class="col-lg-6">
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" class="form-control banner_txt_box @error('first_name') is-invalid @enderror" 
                    name="first_name" value="{{ old('first_name') }}" required>
                @error('first_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Phone Number Field -->
        <div class="col-lg-6">
            <div class="form-group">
                <label>Phone Number</label>
                <input type="number" class="form-control banner_txt_box @error('phone_number') is-invalid @enderror" 
                    name="phone_number" value="{{ old('phone_number') }}" required>
                @error('phone_number')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Email Address Field -->
        <div class="col-lg-6">
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" class="form-control banner_txt_box @error('email_address') is-invalid @enderror" 
                    name="email_address" value="{{ old('email_address') }}" required>
                @error('email_address')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Country Field -->
        <div class="col-lg-6">
            <div class="form-group">
                <label for="country">Country</label>
                <select name="country" id="country" class="form-control banner_txt_box @error('country') is-invalid @enderror" 
                    required>
                    <option value="" disabled selected>Select Country</option>
                    @foreach ($countries as $country)
                        <option value="{{ $country['name'] }}" {{ old('country') == $country['name'] ? 'selected' : '' }}>
                            {{ $country['name'] }}
                        </option>
                    @endforeach
                </select>
                @error('country')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <input type="hidden" name="url" value="{{ request()->fullUrl() }}">

        <!-- Select Journals Field -->
        <div class="col-lg-12">
            <div class="form-group">
                <label>Select Journals</label>
                <select class="form-control banner_txt_box @error('journal') is-invalid @enderror" 
                    name="journal" required>
                    <option value="" disabled selected>Select Journal</option>
                    @foreach ($journals as $j)
                        <option value="{{ $j->id }}">
                            {{ $j->name }}
                        </option>
                    @endforeach
                </select>
                @error('journal')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Upload Manuscript Field -->
        <div class="col-lg-12">
            <div class="form-group">
                <label>Upload Manuscript</label>
                <input type="file" class="form-control banner_txt_box @error('attachement') is-invalid @enderror" 
                    name="attachement" required>
                @error('attachement')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Submit Button -->
        <div class="col-lg-12">
            <button type="submit" name="submit" class="btn btn-info cta_btn submit_btn">Submit Manuscript</button>
        </div>
    </div>
</form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
    
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16632897206"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-16632897206');
</script>
</body>

</html>
