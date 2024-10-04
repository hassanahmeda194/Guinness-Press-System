@extends('user.layouts.article-template')
@section('title', $article->title)
@php
    $keywords = $article->keywords->pluck('keyword')->implode(', ');
    $cleanAbstract = html_entity_decode(strip_tags($article->article_details->abstract));
@endphp
@section('description', $cleanAbstract)
@section('keywords', $keywords)
@section('journal_image', url($article->journal->image))
@section('citation_publication_date', $article->published_date)
@section('citation_year', \Carbon\Carbon::parse($article->published_date)->format('Y'))
@section('journal_title', $article->journal->name)
@section('articledoi', $article->dio)
@section('issn', $article->journal->issn_no)
@section('meta_tags')
    <meta name="citation_article_type" content="{{ $article->article_type }}">
    <meta name="citation_doi" content="{{ $article->dio }}" />
    <meta name="citation_journal_abbrev" content="{{ $article->journal->acronym }}">
    <meta name="citation_firstpage" content="{{ $article->first_page }}">
    <meta name="citation_lastpage" content="{{ $article->last_page }}">
    <meta name="citation_volume" content="{{ $article->volume->name }}">
    <meta name="citation_issue" content="{{ $article->issue->name }}">
    <meta name="citation_abstract" content="{{ $cleanAbstract }}">
    <meta name="copyright"
        content="Copyright: © 2024 (corresponding author) et al. This is an open access article distributed under the terms of the Creative Commons Attribution License (CC BY 4.0 License), which permits unrestricted use, distribution, and reproduction in any medium, provided the original author and publisher are credited.">
    <meta name="dc.title" content="{{ $article->title }}">
    @foreach ($article->article_details->authors as $author)
        <meta name="dc.creator" content="{{ $author['firstname'] }} {{ $author['lastname'] }}">
    @endforeach
    <meta name="dc.type" content="Article">
    <meta name="dc.source"
        content="{{ $article->journal->name }} {{ \Carbon\Carbon::parse($article->published_date)->format('Y') }} , Vol. {{ $article->volume->name }}, Page {{ $article->first_page }} - {{ $article->last_page }}">
    <meta name="dc.date" content="{{ $article->published_date }}">
    <meta name ="dc.identifier" content="{{ $article->dio }}">
    <meta name="dc.publisher" content="Guinness Press">
    <meta name="dc.rights" content="http://creativecommons.org/licenses/by/4.0/">
    <meta name="dc.format" content="application/pdf">
    <meta name="dc.language" content="en">
    <meta name="dc.description" content="{{ $cleanAbstract }}">
    @foreach ($article->keywords as $keyword)
        <meta name="dc.subject" content="{{ trim($keyword->keyword) }}">
    @endforeach
@endsection
@section('banner')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/3.0.1/js.cookie.min.js"></script>
    <script>
        $(document).ready(function() {
            var articleId = {{ $article->id }};
            var cookieName = 'article_viewed_' + articleId;
            if (!Cookies.get(cookieName)) {
                $.get("{{ route('article.incrementView', $article->id) }}", {
                    _token: '{{ csrf_token() }}'
                }).done(function(response) {
                    if (response.success) {
                        Cookies.set(cookieName, 'true', {
                            expires: 7,
                            path: '/'
                        });
                    }
                });
            }
        });
    </script>
  
    <section class="detail_bread_crumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="bread_crumb">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="journal_detail_section">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <img src="{{ asset($journal->image) }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-10">
                    <div class="details_content">
                        <h3 class="cocogoose_light text-uppercase">
                            {{ $journal->name }}
                        </h3>
                        <div class="access_type">
                            <div class="left_access">
                                <h5 class="text-uppercase">
                                    ISSN NO : {{ $journal->issn_no }}
                                </h5>
                            </div>
                            <div class="right_access">
                                <img src="https://www.guinnesspress.org/bkp/assets/img/open-access-logo.png"
                                    class="img-fluid" />
                            </div>
                        </div>
                        <p class="my-3">
                            {{ $journal->description }}
                        </p>
                    </div>
                    <div class="btn-group">
                        <a href="{{ route('submit.article') }}" class="btn btn-light btn-blue">Submit Your Article</a>
                        <a href="{{ url('/journal', ['journal_name' => $journal->acronym, 'journal_p' => 'editorial-board']) }}"
                            class="btn btn-light btn-blue">Editorial Board</a>
                        <button class="btn btn-light btn-blue" id="indexing-toggle">Indexing Bodies</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="my-5" id="indexing-section" style="display: none;">
        <section class="container">
            <div class="my-4">
                <h4>INDEXING BODIES</h4>
            </div>
            <div class="d-flex flex-wrap gap-4">
                @foreach ($indexing_bodies as $i)
                    <div class="item">
                        <a href="{{ $i->link }}">
                            <img src="{{ asset($i->image) }}" class="img-fluid"
                                style="height: 100px; width:100px; border-radius:50%; border:1px solid grey; ">
                        </a>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#indexing-toggle").click(function() {
                $("#indexing-section").slideToggle("slow");
            });
        });
    </script>
@endsection
@section('body')
    <style>
        .fs-7 {
            font-size: 14px !important;
        }
    </style>
    <section class="search-journal-filters journal-overview article-overview aos-init aos-animate" data-aos="zoom-in">
        <div class="container-fluid">
            <div class="container">
                <div class="row search-titles article-title">
                    <div class="col-md-11 col-xl-11 col-sm-12 m-xl-auto m-md-auto">
                        <div class="article-row">
                            <div class="journal-details">
                                <div class="row">
                                    <div class="col-md-2 col-xl-2 col-sm-12">
                                        <ul class="article-views">
                                            <li class="article-corres-author">
                                                <h6>{{ $article->views_count }}</h6>
                                                <span>Views</span>
                                            </li>
                                            <li class="article-corres-author">
                                                @php
                                                    $response = Http::get(
                                                        'https://api.crossref.org/works/' . $article->dio,
                                                    );
                                                    $jsonData = $response->json();
                                                    $crossref_citations = $jsonData
                                                        ? $jsonData['message']['is-referenced-by-count']
                                                        : '0';

                                                @endphp

                                                <h6>{{ $crossref_citations }}</h6>
                                                <span>CrossRef citations to date</span>
                                            </li>

                                        </ul>

                                        <span class="__dimensions_badge_embed__" data-doi="{{ $article->dio }}"
                                            data-style="small_circle" data-legend="hover-bottom"
                                            data-hide-zero-citations="false"></span>
                                        <script async src="https://badge.dimensions.ai/badge.js" charset="utf-8"></script>

                                        <script src="https://crossmark-cdn.crossref.org/widget/v2.0/widget.js" async></script>
                                        <div class="crossmark">
                                            <a data-target="crossmark"
                                                href="https://crossmark.crossref.org/dialog/?doi={{ $article->dio }}"
                                                target="blank">
                                                <img src="https://crossmark-cdn.crossref.org/widget/v2.0/logos/CROSSMARK_Color_square.svg"
                                                    width="70" loading="lazy" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-5 col-sm-12">
                                        <div class="article-sec1">
                                            @if (!empty($article->article_type))
                                                <h3 class="poppins_fonts">{{ $article->article_type }}</h3>
                                            @endif
                                            <h1>{{ $article->title }}</h1>
                                            @php
                                                $affiliationArray = [];
                                                $testingArray = [];
                                                foreach ($article->article_details->affiliations as $key => $value) {
                                                
                                                    $affiliationArray[] = [
                                                        'id' => $key + 1,
                                                        'affiliation' => $value['name'] . ',' . $value['country'],
                                                    ];
                                                    $testingArray[] = $value['name'];
                                                }
                                            @endphp
                                            <ul class="article-authors">
                                                @foreach ($article->article_details->authors as $index => $author)
                                                    <li class="article-corres-author">
                                                        <a href="@if (!empty($author['email'])) mailto:{{ $author['email'] }} @else javascript:; @endif"
                                                            class="author_name">
                                                            {{ $author['firstname'] }} {{ $author['middlename'] }}
                                                            {{ $author['lastname'] }}
                                                            <sup>{{ $loop->first ? '*' : '' }}
                                                                @foreach ($author['affiliation'] as $affiliation)
                                                                    @php
                                                                        $index = array_search(
                                                                            $affiliation,
                                                                            $testingArray,
                                                                        );
                                                                       
                                                                        
                                                                        
                                                                        if ($index !== false) {
                                                                            echo $index + 1;
                                                                        }
                                                                    @endphp
                                                                @endforeach
                                                                @if($author['orchid_id'])
                                                                    <a href="https://orcid.org/{{$author['orchid_id']}}" target="_blank">
                                                                        <img src="https://cdn.iconscout.com/icon/premium/png-256-thumb/orcid-2752107-2284924.png?f=webp&w=256" style="width:15px"  />
                                                                    </a>
                                                                @endif
                                                            </sup>
                                                        </a>
                                                        @if (!empty($author['orcid_id']))
                                                            <span class="orcid-link">
                                                                <a href="https://orcid.org/{{ $author['orcid_id'] }}"
                                                                    target="_blank">
                                                                    <img src="path_to_orcid_image" alt="ORCID iD">
                                                                </a>
                                                            </span>
                                                        @endif
                                                    </li>
                                                @endforeach
                                            </ul>
                                            <p class="author_bio fs-7">
                                                @foreach ($affiliationArray as $index => $author)
                                                    <sup>{{ $author['id'] }}</sup> {{ $author['affiliation'] }}
                                                    {!! $loop->remaining ? '&nbsp; | &nbsp;' : '' !!}
                                                @endforeach
                                            </p>
                                            <div class="article_vol">
                                                <p class="fs-7">Volume {{ $article->volume->name }}</p>
                                                <p class="fs-7">Issue {{ $article->issue->name }}</p>
                                                <p class="fs-7">Page: [{{ $article->first_page }} - {{ $article->last_page }}]</p>
                                            </div>
                                            <div class="published_date">
                                                <p class="fs-7">Published Online:
                                                    {{ \Carbon\Carbon::parse($article->published_date)->format('F j, Y') }}
                                                </p>
                                            </div>

                                            <ul class="article-informations">
                                                <li class="article-citation">
                                                    DOI: &nbsp;
                                                    <a class="doi-link fs-7" href="https://doi.org/{{ $article->dio }}"
                                                        style="-webkit-user-select: none;
                                                               -webkit-touch-callout: none;
                                                               -moz-user-select: none;
                                                               -ms-user-select: none;
                                                               user-select: none;"
                                                        oncontextmenu="return false;" id="copyDoiToClipboard">
                                                        {{ $article->dio }}
                                                    </a>
                                                    <button class="copy-btn" id="copyButton" onclick="copydoi()">
                                                        <i class="far fa-copy"></i>
                                                    </button>
                                                </li>

                                            </ul>
                                            <div id="copieddoi-success" class="copied">
                                                <span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xl-4 col-sm-12">
                                        <div class="article_filesbtn">
                                            <a id="download-btn" href="{{ asset($article->file_path) }}"
                                                data-id="{{ $article->id }}"
                                                download="{{ asset($article->file_name) }}">Download Full Article (<span
                                                    id="total_count"></span>)</a>
                                            @if (!empty($article->supplementary_file_name))
                                                <a href="{{ asset($article->supplementary_file_path) }}"
                                                    download="{{ asset($article->supplementary_file_name) }}">Supporting
                                                    Material</a>
                                            @endif
                                        </div>

                                        <div class="accessLogo">
                                            <i class="fa-solid fa-unlock"></i>
                                            <p id="logo-text">Open access</p>
                                        </div>
                                        <div class="creative_lisence">
                                            <a href="https://creativecommons.org/licenses/by/4.0/" target="_blank">
                                                <img src="https://mirrors.creativecommons.org/presskit/buttons/88x31/png/by.png"
                                                    alt="Creative Commons" width="100" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="article-sec2">
                                <div class="row">
                                    <div class="col-md-8 col-xl-8 col-sm-12 col_article_bordered">
                                        <ul class="nav nav-pills search-journal-nav-pills article-nav-pills">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="abstract-tab" data-bs-toggle="pill"
                                                    href="#full-article" role="tab"
                                                    aria-controls="pills-full-article" aria-selected="true">Abstract</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="references-tab" data-bs-toggle="pill"
                                                    href="#references" role="tab" aria-controls="pills-references"
                                                    aria-selected="true">References</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="citations-tab" data-bs-toggle="pill"
                                                    href="#citations" role="tab" aria-controls="pills-citations"
                                                    aria-selected="false">Citations</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="metrics-tab" data-bs-toggle="pill"
                                                    href="#metrics" role="tab" aria-controls="pills-metrics"
                                                    aria-selected="false">Metrics</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="permissions-tab" data-bs-toggle="pill"
                                                    href="#copyrights_permissions" role="tab"
                                                    aria-controls="pills-permissions" aria-selected="false">Copyright &
                                                    Permissions</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content mt-3 aos-init aos-animate" data-aos="zoom-in">
                                            <div class="tab-pane fade show active" id="full-article" role="tabpanel"
                                                aria-labelledby="metrics-tab">
                                                <ul class="search-results">
                                                    <li>
                                                        <div class="article-titles">
                                                            <h2>Abstract</h2>
                                                            <p style="font-size:14px">
                                                                {!! $article->article_details->abstract !!}
                                                            </p>
                                                            <div class="keywords_article">
                                                                <p style="font-size:14px"><b>Keywords:</b>
                                                                    @foreach ($article->keywords as $keyword)
                                                                        <span>{{ $keyword->keyword }}</span>
                                                                    @endforeach
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade" id="figures" role="tabpanel"
                                                aria-labelledby="aims-tab">
                                                <ul class="search-results">
                                                    <li>
                                                        <div class="article-titles">
                                                            <h2>Figures</h2>
                                                            <p>
                                                                <a href="">
                                                                    <img src="" alt="Figure Image" />
                                                                </a>
                                                            </p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade" id="references" role="tabpanel"
                                                aria-labelledby="editorial-tab">
                                                <ul class="search-results">
                                                    <li>
                                                        <div class="article-titles">
                                                            <h2>References</h2>
                                                            <ul class="reference-content">
                                                                    {!! $article->article_details->references !!}</li>
                                                                <!--<li id="referencesTextarea"-->
                                                                <!--    class="d-flex flex-wrap flex-column justifiy-content-start text-left align-items-start">-->
                                                                <!--</li>-->

                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade" id="citations" role="tabpanel"
                                                aria-labelledby="instructions-tab">
                                                <ul class="search-results">
                                                    <li>
                                                        <div class="article-titles">
                                                            <div class="d-flex align-items-center gap-4 mb-4">
                                                                <div>
                                                                    <h4>To cite this article</h4>
                                                                </div>
                                                                <div>
                                                                    <span> <a
                                                                            href="{{ route('articles.citation.bib', ['id' => $article->id]) }}">Download
                                                                            Bib</a></span>
                                                                    |
                                                                    <span> <a
                                                                            href="{{ route('articles.citation.ris', ['id' => $article->id]) }}">Download
                                                                            Ris</a></span>
                                                                    |
                                                                    <span><a
                                                                            href="{{ route('articles.citation.txt', ['article' => $article]) }}">Download
                                                                            TXT</a></span>
                                                                </div>
                                                            </div>
                                                            <p class="fs-7">
                                                                <span class="author_name">
                                                                    @foreach ($article->article_details->authors as $index => $author)
                                                                        {{ $author['lastname'] }},
                                                                        @if (!empty($author['firstname']))
                                                                            {{ strtoupper(substr($author['firstname'], 0, 1)) }}.
                                                                        @endif
                                                                        @if (!empty($author['middlename']))
                                                                            {{ strtoupper(substr($author['middlename'], 0, 1)) }}.
                                                                        @endif
                                                                        @if ($loop->remaining == 1)
                                                                            &
                                                                        @elseif($loop->remaining > 1)
                                                                            ,
                                                                        @endif
                                                                    @endforeach
                                                                </span>
                                                                ({{ \Carbon\Carbon::parse($article->published_date)->format('Y') }}).
                                                                <span class="" style="">{{ $article->title }}</span>.
                                                                <i class="">{{ $article->journal->name }}</i>,
                                                                <i>{{ $article->volume->name }}</i>({{ $article->issue->name }}),
                                                                {{ $article->first_page }}-{{ $article->last_page }}.
                                                                <a
                                                                    href="https://doi.org/{{ $article->dio }}">https://doi.org/{{ $article->dio }}</a>
                                                            </p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade" id="metrics" role="tabpanel"
                                                aria-labelledby="instructions-tab">
                                                <ul class="search-results">
                                                    <li>
                                                        <div class="article-titles">
                                                            <div class="content fullView">
                                                                <h2>Article Metrics</h2>
                                                                <div class="section views">
                                                                    <h3 class="title">Views</h3>
                                                                    <div class="circle">
                                                                        <span
                                                                            class="value">{{ $article->views_count }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade" id="copyrights_permissions" role="tabpanel"
                                                aria-labelledby="instructions-tab">
                                                <ul class="search-results">
                                                    <li>
                                                        <div class="article-titles">
                                                            <h2>Copyright and Permissions</h2>
                                                            <p class="fs-7">At Guinness Press, authors retain the copyright for all
                                                                articles published in our journals. These articles are
                                                                licensed under the open-access Creative Commons CC BY 4.0
                                                                license, granting free access for reading and download.
                                                                Additionally, the original published version must be
                                                                appropriately cited when reusing or quoting the article.
                                                                These terms ensure widespread accessibility while ensuring
                                                                proper attribution to the authors.</p>
                                                            <p class="fs-7">All content published by Guinness Press is safeguarded by
                                                                international copyright and intellectual property
                                                                regulations. We kindly request that you honor these
                                                                protections when utilizing our materials.</p>
                                                            <p class="fs-7">For further information, please contact us at
                                                                <span style="text-transform:lowercase;">info@guinnesspress.org</span>.</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        
                                        
                                        <!--<div class="my-5">-->
                                        <!--    <h4 class="my-4">This article is cited by</h4>-->
                                        <!--    <div id="papers-list" class="list-group">-->
                                               
                                        <!--    </div>-->
                                        <!--</div>-->
                                    </div>
                                    <div class="col-md-4 col-xl-4 col-sm-12">
                                        <div class="socialshare_links">
                                            <ul>
                                                <li>
                                                    <a class="share_facebook" rel="nofollow noopener" target="_blank"
                                                        href="http://www.facebook.com/sharer.php?u={{ url()->current() }}">
                                                        <i class="fa-brands fa-facebook" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="share_twitter" rel="nofollow noopener" target="_blank"
                                                        href="http://twitter.com/share?text={!! $article->title !!}&amp;url={{ url()->current() }}">
                                                        <i class="fa-brands fa-twitter" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="share_linkedin" rel="nofollow noopener" target="_blank"
                                                        href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{ url()->current() }}">
                                                        <i class="fa-brands fa-linkedin" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <ul class="nav nav-pills search-journal-nav-pills explore-pills">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="pill" href="#trending"
                                                    role="tab" aria-controls="pills-trending"
                                                    aria-selected="false">Recommended Articles</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content mt-3">
                                            <div class="tab-pane fade show active" id="trending" role="tabpanel"
                                                aria-labelledby="most-trending">
                                                <ul class="search-results explore-list">
                                                    <li>
                                                        <div class="article-titles">
                                                            <h2><a
                                                                    href="{{ url('') }}/publication/journal/ijerm/1024923">A
                                                                    THEORETICAL PERSPECTIVE ON HOW DIGITALIZATION HAS
                                                                    EVOLVED ORGANIZATIONAL CULTURE</a></h2>
                                                            <p>Author(s): Munzallin Munaf</p>
                                                            <div class="article-btn">
                                                                <p>Article | Published Online: 05 Oct 2023 | Pages [1 - 8]
                                                                </p>
                                                                <a href="{{ url('') }}/publication/journal/ijerm/1024923"
                                                                    class="btn1">Read More</a>
                                                            </div>
                                                        </div>
                                                        <div class="article-titles">
                                                            <h2><a
                                                                    href="{{ url('') }}/publication/journal/ijerm/1024922">IDENTIFICATION
                                                                    OF THE MAIN FACTORS THAT AFFECT THE PROFITABILITY OF
                                                                    COMPANIES IN THE TRADE SECTOR</a></h2>
                                                            <p>Author(s): Lidija Barjaktarović</p>
                                                            <div class="article-btn">
                                                                <p>Article | Published Online: 28 Sep 2023 | Pages [1 - 10]
                                                                </p>
                                                                <a href="{{ url('') }}/publication/journal/ijerm/1024922"
                                                                    class="btn1">Read More</a>
                                                            </div>
                                                        </div>
                                                        <div class="article-titles">
                                                            <h2><a
                                                                    href="{{ url('') }}/publication/journal/ijerm/1024918">TRADE
                                                                    SECTOR: ASSESSING PROFITABILITY FACTORS IN MODERN
                                                                    BUSINESS</a></h2>
                                                            <p>Author(s): Juan Munoz</p>
                                                            <div class="article-btn">
                                                                <p>Article | Published Online: 22 Sep 2023 | Pages [1 - 10]
                                                                </p>
                                                                <a href="{{ url('') }}/publication/journal/ijerm/1024918"
                                                                    class="btn1">Read More</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            getDownloadCount();
            $('#download-btn').click(increaseDownloadCount);
        });

        function increaseDownloadCount() {
            const id = $('#download-btn').data('id');
            $.ajax({
                type: "GET",
                url: "{{ route('increase.download.count') }}",
                data: {
                    id: id
                },
                success: function(response) {
                    console.log(response);
                    $('#total_count').text(response);
                }
            });
        }

        function getDownloadCount() {
            const id = $('#download-btn').data('id');
            $.ajax({
                type: "GET",
                url: "{{ route('get.download.count') }}",
                data: {
                    id: id
                },
                success: function(response) {
                    console.log(response);
                    $('#total_count').text(response);
                }
            });
        }
    </script>
    <script>
        $(document).ready(function() {
            let text = $('#reference-content').text();
            console.log(text);


            var references = text.split(/\[\d+\]/).filter(Boolean);
            var updatedReferences = [];
            var regex = /\d+\)\s*([^,]+),/;
            var doiRegex = /(https:\/\/doi\.org\/[^\s]+)/gi;

            references.forEach(function(reference, index) {
                var updatedReference = `[${index + 1}] ${reference.trim()}`;
                var links = '';
                var match = reference.match(regex);
                if (match) {
                    var extractedString = match[1].trim();
                    var formattedString = extractedString.replace(/[^\w\s]/gi, '').replace(/\s+/g, '+');
                    var googleScholarLink =
                        `<a class="btn btn-sm btn-primary my-1 text-white text-left" href="https://scholar.google.com/scholar_lookup?title=${formattedString}" target="_blank">Google Scholar</a>`;
                    links += googleScholarLink;
                }
                var doiMatch = reference.match(doiRegex);
                if (doiMatch) {
                    doiMatch.forEach(function(doi) {
                        var cleanedDoi = doi.replace(/\s+/g, '');
                        var clickableDoi =
                            `<a href="${cleanedDoi}" target="_blank" class="btn btn-sm btn-primary my-1 text-white">CrossRef</a>`;
                        links += ` ${clickableDoi}`;
                    });
                }
                if (links) {
                    links = `<div class="d-flex gap-2">${links}</div>`;
                }
                updatedReference += links ? `<br>${links}` : '<br>';
                updatedReferences.push(updatedReference);
            });

            var updatedText = updatedReferences.join('<br>');


            updatedText = updatedText.replace(/\[\d+\]/g, '');

            $('#referencesTextarea').html(updatedText);
        });
    </script>

    


@endsection
