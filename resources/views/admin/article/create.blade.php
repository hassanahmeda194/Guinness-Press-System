@extends('admin.Layout.master')
@section('main_section')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $error }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endforeach
    @endif
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title  mb-3">Add New Article</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.article.store') }}" method="POST" enctype="multipart/form-data"
                        id="myForm">
                        @csrf
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Journals <x-important /></label>
                                    <select id="journal" class="form-select custom-select select2 select2-show-search "
                                        name="journal_id" required>
                                        <option selected disabled>Choose Journal</option>
                                        @foreach ($journals as $j)
                                            <option value="{{ $j->id }}" @selected(old('journal_id') == $j->id)>
                                                {{ ucwords(strtolower($j->name)) }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="mb-3">
                                    <label for="volume" class="form-label">Volume <x-important /></label>
                                    <select id="volume" class="form-select custom-select select2" name="volume_id"
                                        required>
                                        @if (old('volume_id'))
                                            @foreach (session()->get('fetch_volume', []) as $volume)
                                                <option value="{{ $volume->id }}"
                                                    {{ old('volume_id') == $volume->id ? 'selected' : '' }}>
                                                    {{ $volume->name }}
                                                </option>
                                            @endforeach
                                        @else
                                            <option selected disabled>Choose Volume</option>
                                        @endif

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Issue <x-important /></label>
                                    <select id="issue" class="form-select custom-select select2" name="issue_id"
                                        required>
                                        @if (old('issue_id'))
                                            @foreach (session()->get('fetch_issue', []) as $issue)
                                                <option value="{{ $issue->id }}"
                                                    {{ old('issue_id') == $issue->id ? 'selected' : '' }}>
                                                    {{ $issue->name }}
                                                </option>
                                            @endforeach
                                        @else
                                            <option selected disabled>Choose Issue</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-3 mb-3 pt-4">
                                <div class="form-group pt-4">
                                    <label class="custom-switch">
                                        <input type="checkbox" class="custom-switch-input" name="is_active" value="1"
                                            checked="">
                                        <span class="custom-switch-indicator custom-switch-indicator-lg"></span>
                                        <span class="custom-switch-description me-2">Is Active</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Article Number <x-important /></label>
                                    <input type="number" class="form-control " name="article_number"
                                        placeholder="Enter Article Number" value="{{ old('article_number') }}" required>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="mb-3">
                                    <label for="form-email-input" class="form-label">Title <x-important /></label>
                                    <input type="text" class="form-control" name="title" value="{{ old('title') }}"
                                        placeholder="Enter Article Title" required>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">First Page <x-important /></label>
                                    <input type="number" class="form-control" name="first_page"
                                        value="{{ old('first_page') }}" placeholder="Enter First Page Number" required>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Last Page <x-important /></label>
                                    <input type="number" class="form-control" name="last_page"
                                        value="{{ old('last_page') }}" placeholder="Enter Last Page Number" required>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">DOI <x-important /></label>
                                    <input type="text" class="form-control" placeholder="Enter DIO" name="dio"
                                        value="{{ old('dio') }}" required>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Recived Date</label>
                                    <input type="date" class="form-control" placeholder="" name="recived_date"
                                        value="{{ old('recived_date') }}">
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Revised Date</label>
                                    <input type="date" class="form-control" placeholder="" name="revised_date"
                                        value="{{ old('revised_date') }}">
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Accepted Date</label>
                                    <input type="date" class="form-control" placeholder="" name="accepted_date"
                                        value="{{ old('accepted_date') }}">
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">published Date</label>
                                    <input type="date" class="form-control" placeholder="" name="published_date"
                                        value="{{ old('published_date') }}">
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Keywords Comma Seprated
                                        <x-important /></label>
                                    <input type="text" class="form-control" placeholder="Enter Keywords"
                                        name="keywords" value="{{ old('keywords') }}" required>
                                    <small>Enter comma seperated keywords</small>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Articles Type</label>
                                    <select class="form-select custom-select select2 select2-show-search"
                                        name="article_type">
                                        <option selected disabled>Choose Article Type</option>
                                        <option value="Research Articles" @selected(old('article_type') == 'Research Articles')>Research Articles
                                        </option>
                                        <option value="Review Articles" @selected(old('article_type') == 'Review Articles')>Review Articles
                                        </option>
                                        <option value="Systematic Reviews" @selected(old('article_type') == 'Systematic Reviews')>Systematic Reviews
                                        </option>
                                        <option value="Meta-Analyses" @selected(old('article_type') == 'Meta-Analyses')>Meta-Analyses</option>
                                        <option value="Short Communications" @selected(old('article_type') == 'Short Communications')>Short
                                            Communications</option>
                                        <option value="Case Studies" @selected(old('article_type') == 'Case Studies')>Case Studies</option>
                                        <option value="Technical Notes" @selected(old('article_type') == 'Technical Notes')>Technical Notes
                                        </option>
                                        <option value="Editorials" @selected(old('article_type') == 'Editorials')>Editorials</option>
                                        <option value="Perspectives" @selected(old('article_type') == 'Perspectives')>Perspectives</option>
                                        <option value="Commentaries" @selected(old('article_type') == 'Commentaries')>Commentaries</option>
                                        <option value="Literature Reviews" @selected(old('article_type') == 'Literature Reviews')>Literature Reviews
                                        </option>
                                        <option value="Survey Articles" @selected(old('article_type') == 'Survey Articles')>Survey Articles
                                        </option>
                                        <option value="Conference Reports" @selected(old('article_type') == 'Conference Reports')>Conference Reports
                                        </option>
                                        <option value="Letters to the Editor" @selected(old('article_type') == 'Letters to the Editor')>Letters to the
                                            Editor</option>
                                        <option value="Errata/Corrections" @selected(old('article_type') == 'Errata/Corrections')>Errata/Corrections
                                        </option>
                                    </select>
                                    @error('article_type')
                                        <div>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">File <x-important /></label>
                                    <input type="file" class="form-control" name="file"
                                        value="{{ old('file') }}" required>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Supplementary file</label>
                                    <input type="file" class="form-control " name="supplementary_file"
                                        value="{{ old('supplementary_file') }}">
                                </div>
                            </div>

                            <div class="col-12">
                                <h5 class="my-3">affiliation Details</h5>
                                <hr>
                            </div>
                            <div class="col-12">
                                <div id="affiliation-container">
                                    <div class="row affiliation-entry">
                                        <div class="col-10 row" id="one_box">
                                            <div class="col-7">
                                                <div class="mb-3">
                                                    <label for="author_name" class="form-label">affiliation
                                                        <x-important /></label>
                                                    <input type="text" class="form-control"
                                                        name="affiliation[first_affiliation][name]"
                                                        placeholder="Enter affiliation"
                                                        value="{{ old('affiliation.first_affiliation.name') }}" required>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="" class="form-label">Country<x-important /></label>
                                                <select class="form-select custom-select select2 select2-show-search"
                                                    name="affiliation[first_affiliation][country]">
                                                    <option selected disabled>Choose Country</option>
                                                    @foreach ($countries as $c)
                                                        <option value="{{ $c['name'] }}" @selected(old('affiliation.first_affiliation.country') == $c['name'])>
                                                            {{ $c['name'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-10 row" id="two_box">
                                            <div class="col-7">
                                                <div class="mb-3">
                                                    <label for="author_name" class="form-label">affiliation</label>
                                                    <input type="text" class="form-control"
                                                        name="affiliation[second_affiliation][name]"
                                                        placeholder="Enter Affiliation"
                                                        value="{{ old('affiliation.second_affiliation.name') }}">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="" class="form-label">Country</label>
                                                <select class="form-select custom-select select2 select2-show-search"
                                                    name="affiliation[second_affiliation][country]">
                                                    <option selected disabled>Choose Country</option>
                                                    @foreach ($countries as $c)
                                                        <option value="{{ $c['name'] }}" @selected(old('affiliation.second_affiliation.country') == $c['name'])>
                                                            {{ $c['name'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-2">
                                                <button class="btn btn-light btn-blue mt-5 remove-btn">remove</button>
                                            </div>
                                        </div>
                                        <div class="col-10 row" id="three_box">
                                            <div class="col-7">
                                                <div class="mb-3">
                                                    <label for="author_name" class="form-label">affiliation</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ old('affiliation.third_affiliation.name') }}"
                                                        name="affiliation[third_affiliation][name]"
                                                        placeholder="Enter affiliation">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="" class="form-label">Country</label>
                                                <select class="form-select custom-select select2 select2-show-search"
                                                    name="affiliation[third_affiliation][country]">
                                                    <option selected disabled>Choose Country</option>
                                                    @foreach ($countries as $c)
                                                        <option value="{{ $c['name'] }}" @selected(old('affiliation.third_affiliation.country') == $c['name'])>
                                                            {{ $c['name'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-2">
                                                <button class="btn btn-light btn-blue mt-5 remove-btn">remove</button>
                                            </div>
                                        </div>
                                        <div class="col-10 row" id="four_box">
                                            <div class="col-7">
                                                <div class="mb-3">
                                                    <label for="author_name" class="form-label">affiliation</label>
                                                    <input type="text" class="form-control"
                                                        name="affiliation[fourth_affiliation][name]"
                                                        placeholder="Enter affiliation"
                                                        value="{{ old('affiliation.fourth_affiliation.name') }}">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="" class="form-label">Country</label>
                                                <select class="form-select custom-select select2 select2-show-search"
                                                    name="affiliation[fourth_affiliation][country]">
                                                    <option selected disabled>Choose Country</option>
                                                    @foreach ($countries as $c)
                                                        <option value="{{ $c['name'] }}" @selected(old('affiliation.fourth_affiliation.country') == $c['name'])>
                                                            {{ $c['name'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-2">
                                                <button class="btn btn-light btn-blue mt-5 remove-btn">remove</button>
                                            </div>
                                        </div>
                                        <div class="col-10 row" id="five_box">
                                            <div class="col-7">
                                                <div class="mb-3">
                                                    <label for="author_name" class="form-label">affiliation</label>
                                                    <input type="text" class="form-control"
                                                        name="affiliation[fifth_affiliation][name]"
                                                        placeholder="Enter affiliation"
                                                        value="{{ old('affiliation.fourth_affiliation.name') }}">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="" class="form-label">Country</label>
                                                <select class="form-select custom-select select2 select2-show-search"
                                                    name="affiliation[fifth_affiliation][country]">
                                                    <option selected disabled>Choose Country</option>
                                                    @foreach ($countries as $c)
                                                        <option value="{{ $c['name'] }}" @selected(old('affiliation.fifth_affiliation.country') == $c['name'])>
                                                            {{ $c['name'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-2">
                                                <button class="btn btn-light btn-blue mt-5 remove-btn">remove</button>
                                            </div>
                                        </div>
                                        <div class="col-10 row" id="six_box">
                                            <div class="col-7">
                                                <div class="mb-3">
                                                    <label for="author_name" class="form-label">affiliation</label>
                                                    <input type="text" class="form-control"
                                                        name="affiliation[sixth_affiliation][name]"
                                                        placeholder="Enter affiliation"
                                                        value="{{ old('affiliation.sixth_affiliation.name') }}">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="" class="form-label">Country</label>
                                                <select class="form-select custom-select select2 select2-show-search"
                                                    name="affiliation[sixth_affiliation][country]">
                                                    <option selected disabled>Choose Country</option>
                                                    @foreach ($countries as $c)
                                                        <option value="{{ $c['name'] }}" @selected(old('affiliation.sixth_affiliation.country') == $c['name'])>
                                                            {{ $c['name'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-2">
                                                <button class="btn btn-light btn-blue mt-5 remove-btn">remove</button>
                                            </div>
                                        </div>
                                        <div class="col-10 row" id="seven_box">
                                            <div class="col-7">
                                                <div class="mb-3">
                                                    <label for="author_name" class="form-label">affiliation</label>
                                                    <input type="text" class="form-control"
                                                        name="affiliation[seventh_affiliation][name]"
                                                        placeholder="Enter affiliation"
                                                        value="{{ old('affiliation.seventh_affiliation.name') }}">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="" class="form-label">Country</label>
                                                <select class="form-select custom-select select2 select2-show-search"
                                                    name="affiliation[seventh_affiliation][country]">
                                                    <option selected disabled>Choose Country</option>
                                                    @foreach ($countries as $c)
                                                        <option value="{{ $c['name'] }}" @selected(old('affiliation.seventh_affiliation.country') == $c['name'])>
                                                            {{ $c['name'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-2">
                                                <button class="btn btn-light btn-blue mt-5 remove-btn">remove</button>
                                            </div>
                                        </div>
                                        <div class="col-10 row" id="eight_box">
                                            <div class="col-7">
                                                <div class="mb-3">
                                                    <label for="author_name" class="form-label">affiliation</label>
                                                    <input type="text" class="form-control"
                                                        name="affiliation[eight_affiliation][name]"
                                                        placeholder="Enter affiliation"
                                                        value="{{ old('affiliation.eight_affiliation.name') }}">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="" class="form-label">Country</label>
                                                <select class="form-select custom-select select2 select2-show-search"
                                                    name="affiliation[eight_affiliation][country]">
                                                    <option selected disabled>Choose Country</option>
                                                    @foreach ($countries as $c)
                                                        <option value="{{ $c['name'] }}" @selected(old('affiliation.eigth_affiliation.country') == $c['name'])>
                                                            {{ $c['name'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-2">
                                                <button class="btn btn-light btn-blue mt-5 remove-btn">remove</button>
                                            </div>
                                        </div>
                                        <div class="col-10 row" id="nine_box">
                                            <div class="col-7">
                                                <div class="mb-3">
                                                    <label for="author_name" class="form-label">affiliation</label>
                                                    <input type="text" class="form-control"
                                                        name="affiliation[nine_affiliation][name]"
                                                        placeholder="Enter affiliation"
                                                        value="{{ old('affiliation.nine_affiliation.name') }}">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="" class="form-label">Country</label>
                                                <select class="form-select custom-select select2 select2-show-search"
                                                    name="affiliation[nine_affiliation][country]">
                                                    <option selected disabled>Choose Country</option>
                                                    @foreach ($countries as $c)
                                                        <option value="{{ $c['name'] }}" @selected(old('affiliation.nine_affiliation.country') == $c['name'])>
                                                            {{ $c['name'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-2">
                                                <button class="btn btn-light btn-blue mt-5 remove-btn">remove</button>
                                            </div>
                                        </div>
                                        <div class="col-10 row" id="ten_box">
                                            <div class="col-7">
                                                <div class="mb-3">
                                                    <label for="author_name" class="form-label">affiliation</label>
                                                    <input type="text" class="form-control"
                                                        name="affiliation[ten_affiliation][name]"
                                                        placeholder="Enter affiliation"
                                                        value="{{ old('affiliation.ten_affiliation.name') }}">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="" class="form-label">Country</label>
                                                <select class="form-select custom-select select2 select2-show-search"
                                                    name="affiliation[ten_affiliation][country]">
                                                    <option selected disabled>Choose Country</option>
                                                    @foreach ($countries as $c)
                                                        <option value="{{ $c['name'] }}" @selected(old('affiliation.ten_affiliation.country') == $c['name'])>
                                                            {{ $c['name'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-2">
                                                <button class="btn btn-light btn-blue mt-5 remove-btn">remove</button>
                                            </div>
                                        </div>
                                        <div class="col-2 mt-5">
                                            <button type="button" class="btn btn-primary add-affiliation"
                                                id="showNextBox">Add Affiliation</button>
                                            <button type="button" class="btn btn-success save-affiliation">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <h5 class="my-3">Author Details</h5>
                                <hr>
                            </div>
                            <div class="col-12">
                                <div id="author-box" class="row">
                                    <div class="col-10" id="first_author_box">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_firstname" class="form-label">Author's First
                                                        Name <x-important /></label>
                                                    <input type="text" class="form-control"
                                                        name="authors[first_author][firstname]"
                                                        placeholder="Enter First Author" required
                                                        value="{{ old('authors.first_author.firstname') }}">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_middlename" class="form-label">Author's Middle
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[first_author][middlename]"
                                                        value="{{ old('authors.first_author.middlename') }}"
                                                        placeholder="Enter Middle Name">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_lastname" class="form-label">Author's Last
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[first_author][lastname]"
                                                        value="{{ old('authors.first_author.lastname') }}"
                                                        placeholder="Enter Last Name">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="affiliation_dropdown" class="form-label">Affiliation <x-important /></label>
                                                <select class="form-select select2 affiliation_select"
                                                    name="authors[first_author][affiliation][]" multiple>

                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_email" class="form-label">Author's Email <x-important /></label>
                                                    <input type="text" class="form-control"
                                                        name="authors[first_author][email]" placeholder="Enter Email"
                                                        value="{{ old('authors.first_author.email') }}" required>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_orcid" class="form-label">Author's ORCID ID</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[first_author][orchid_id]"
                                                        value="{{ old('authors.first_author.orchid_id') }}"
                                                        placeholder="Enter Author's ORCID ID">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-10 author-box" id="second_author_box">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_firstname" class="form-label">Author's First
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[second_author][firstname]"
                                                        value="{{ old('authors.second_author.firstname') }}"
                                                        placeholder="Enter First Author">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_middlename" class="form-label">Author's Middle
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[second_author][middlename]"
                                                        value="{{ old('authors.second_author.middlename') }}"
                                                        placeholder="Enter Middle Name">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_lastname" class="form-label">Author's Last
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[second_author][lastname]"
                                                        value="{{ old('authors.second_author.lastname') }}"
                                                        placeholder="Enter Last Name">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="affiliation_dropdown" class="form-label">Affiliation</label>
                                                <select class="form-select select2 affiliation_select"
                                                    name="authors[second_author][affiliation][]" multiple>

                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_email" class="form-label">Author's Email</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[second_author][email]" placeholder="Enter Email"
                                                        value="{{ old('authors.second_author.email') }}">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_orcid" class="form-label">Author's ORCID ID</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[second_author][orchid_id]"
                                                        value="{{ old('authors.second_author.orchid_id') }}"
                                                        placeholder="Enter Author's ORCID ID">
                                                </div>
                                            </div>
                                            <div class="col-3 mt-4">
                                                <button class="btn btn-light btn-blue remove-author">remove</button>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-10 author-box" id="third_author_box">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_firstname" class="form-label">Author's First
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[third_author][firstname]"
                                                        value="{{ old('authors.third_author.firstname') }}"
                                                        placeholder="Enter First Author">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_middlename" class="form-label">Author's Middle
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[third_author][middlename]"
                                                        value="{{ old('authors.third_author.middlename') }}"
                                                        placeholder="Enter Middle Name">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_lastname" class="form-label">Author's Last
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[third_author][lastname]"
                                                        value="{{ old('authors.third_author.lastname') }}"
                                                        placeholder="Enter Last Name">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="affiliation_dropdown" class="form-label">Affiliation</label>
                                                <select class="form-select select2 affiliation_select"
                                                    name="authors[third_author][affiliation][]" multiple>

                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_email" class="form-label">Author's Email</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[third_author][email]" placeholder="Enter Email"
                                                        value="{{ old('authors.third_author.email') }}">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_orcid" class="form-label">Author's ORCID ID</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[third_author][orchid_id]"
                                                        placeholder="Enter Author's ORCID ID"
                                                        value="{{ old('authors.third_author.orchid_id') }}">
                                                </div>
                                            </div>
                                            <div class="col-3 mt-4">
                                                <button class="btn btn-light btn-blue remove-author">remove</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-10 author-box" id="fourth_author_box">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_firstname" class="form-label">Author's First
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[fourth_author][firstname]"
                                                        value="{{ old('authors.fourth_author.firstname') }}"
                                                        placeholder="Enter First Author">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_middlename" class="form-label">Author's Middle
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[fourth_author][middlename]"
                                                        value="{{ old('authors.fourth_author.middlename') }}"
                                                        placeholder="Enter Middle Name">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_lastname" class="form-label">Author's Last
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[fourth_author][lastname]"
                                                        value="{{ old('authors.fourth_author.lastname') }}"
                                                        placeholder="Enter Last Name">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="affiliation_dropdown" class="form-label">Affiliation</label>
                                                <select class="form-select select2 affiliation_select"
                                                    name="authors[fourth_author][affiliation][]" multiple>

                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_email" class="form-label">Author's Email</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[fourth_author][email]" placeholder="Enter Email"
                                                        value="{{ old('authors.fourth_author.email') }}">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_orcid" class="form-label">Author's ORCID ID</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[fourth_author][orchid_id]"
                                                        value="{{ old('authors.fourth_author.orchid_id') }}"
                                                        placeholder="Enter Author's ORCID ID">
                                                </div>
                                            </div>
                                            <div class="col-3 mt-4">
                                                <button class="btn btn-light btn-blue remove-author">remove</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-10 author-box" id="fifth_author_box">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_firstname" class="form-label">Author's First
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[fifth_author][firstname]"
                                                        value="{{ old('authors.fifth_author.firstname') }}"
                                                        placeholder="Enter First Author">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_middlename" class="form-label">Author's Middle
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[fifth_author][middlename]"
                                                        value="{{ old('authors.fifth_author.middlename') }}"
                                                        placeholder="Enter Middle Name">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_lastname" class="form-label">Author's Last
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[fifth_author][lastname]"
                                                        value="{{ old('authors.fifth_author.lastname') }}"
                                                        placeholder="Enter Last Name">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="affiliation_dropdown" class="form-label">Affiliation</label>
                                                <select class="form-select select2 affiliation_select"
                                                    name="authors[fifth_author][affiliation][]" multiple>

                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_email" class="form-label">Author's Email</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[fifth_author][email]" placeholder="Enter Email"
                                                        value="{{ old('authors.fifth_author.email') }}">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_orcid" class="form-label">Author's ORCID ID</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[fifth_author][orchid_id]"
                                                        value="{{ old('authors.fifth_author.orchid_id') }}"
                                                        placeholder="Enter Author's ORCID ID">
                                                </div>
                                            </div>
                                            <div class="col-3 mt-4">
                                                <button class="btn btn-light btn-blue remove-author">remove</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-10 author-box" id="sixth_author_box">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_firstname" class="form-label">Author's First
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[sixth_author][firstname]"
                                                        value="{{ old('authors.sixth_author.firstname') }}"
                                                        placeholder="Enter First Author">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_middlename" class="form-label">Author's Middle
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[sixth_author][middlename]"
                                                        value="{{ old('authors.sixth_author.middlename') }}"
                                                        placeholder="Enter Middle Name">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_lastname" class="form-label">Author's Last
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[sixth_author][lastname]"
                                                        value="{{ old('authors.sixth_author.lastname') }}"
                                                        placeholder="Enter Last Name">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="affiliation_dropdown" class="form-label">Affiliation</label>
                                                <select class="form-select select2 affiliation_select"
                                                    name="authors[sixth_author][affiliation][]" multiple>

                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_email" class="form-label">Author's Email</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[sixth_author][email]" placeholder="Enter Email"
                                                        value="{{ old('authors.sixth_author.email') }}">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_orcid" class="form-label">Author's ORCID ID</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[sixth_author][orchid_id]"
                                                        placeholder="Enter Author's ORCID ID"
                                                        value="{{ old('authors.sixth_author.orchid_id') }}">
                                                </div>
                                            </div>
                                            <div class="col-3 mt-4">
                                                <button class="btn btn-light btn-blue remove-author">remove</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-10 author-box" id="seventh_author_box">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_firstname" class="form-label">Author's First
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[seventh_author][firstname]"
                                                        value="{{ old('authors.seventh_author.firstname') }}"
                                                        placeholder="Enter First Author">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_middlename" class="form-label">Author's Middle
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[seventh_author][middlename]"
                                                        value="{{ old('authors.seventh_author.middlename') }}"
                                                        placeholder="Enter Middle Name">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_lastname" class="form-label">Author's Last
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[seventh_author][lastname]"
                                                        value="{{ old('authors.seventh_author.lastname') }}"
                                                        placeholder="Enter Last Name">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="affiliation_dropdown" class="form-label">Affiliation</label>
                                                <select class="form-select select2 affiliation_select"
                                                    name="authors[seventh_author][affiliation][]" multiple>

                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_email" class="form-label">Author's Email</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[seventh_author][email]" placeholder="Enter Email"
                                                        value="{{ old('authors.seventh_author.email') }}">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_orcid" class="form-label">Author's ORCID ID</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[seventh_author][orchid_id]"
                                                        placeholder="Enter Author's ORCID ID"
                                                        value="{{ old('authors.seventh_author.orchid_id') }}">
                                                </div>
                                            </div>
                                            <div class="col-3 mt-4">
                                                <button class="btn btn-light btn-blue remove-author">remove</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-10 author-box" id="eight_author_box">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_firstname" class="form-label">Author's First
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[eight_author][firstname]"
                                                        placeholder="Enter First Author"
                                                        value="{{ old('authors.eight_author.firstname') }}">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_middlename" class="form-label">Author's Middle
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[eight_author][middlename]"
                                                        placeholder="Enter Middle Name"
                                                        value="{{ old('authors.eight_author.middlename') }}">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_lastname" class="form-label">Author's Last
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[eight_author][lastname]"
                                                        value="{{ old('authors.eight_author.lastname') }}"
                                                        placeholder="Enter Last Name">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="affiliation_dropdown" class="form-label">Affiliation</label>
                                                <select class="form-select select2 affiliation_select"
                                                    name="authors[eight_author][affiliation][]" multiple>

                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_email" class="form-label">Author's Email</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ old('authors.eight_author.email') }}"
                                                        name="authors[eight_author][email]" placeholder="Enter Email">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_orcid" class="form-label">Author's ORCID ID</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[eight_author][orchid_id]"
                                                        value="{{ old('authors.eight_author.orchid_id') }}"
                                                        placeholder="Enter Author's ORCID ID">
                                                </div>
                                            </div>
                                            <div class="col-3 mt-4">
                                                <button class="btn btn-light btn-blue remove-author">remove</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-10 author-box" id="nine_author_box">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_firstname" class="form-label">Author's First
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[nine_author][firstname]"
                                                        value="{{ old('authors.nine_author.firstname') }}"
                                                        placeholder="Enter First Author">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_middlename" class="form-label">Author's Middle
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[nine_author][middlename]"
                                                        value="{{ old('authors.nine_author.middlename') }}"
                                                        placeholder="Enter Middle Name">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_lastname" class="form-label">Author's Last
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[nine_author][lastname]"
                                                        value="{{ old('authors.nine_author.lastname') }}"
                                                        placeholder="Enter Last Name">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="affiliation_dropdown" class="form-label">Affiliation</label>
                                                <select class="form-select select2 affiliation_select"
                                                    name="authors[nine_author][affiliation][]" multiple>

                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_email" class="form-label">Author's Email</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[nine_author][email]" placeholder="Enter Email"
                                                        value="{{ old('authors.nine_author.email') }}">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_orcid" class="form-label">Author's ORCID ID</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[nine_author][orchid_id]"
                                                        placeholder="Enter Author's ORCID ID"
                                                        value="{{ old('authors.nine_author.orchid_id') }}">
                                                </div>
                                            </div>
                                            <div class="col-3 mt-4">
                                                <button class="btn btn-light btn-blue remove-author">remove</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-10 author-box" id="ten_author_box">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_firstname" class="form-label">Author's First
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[ten_author][firstname]"
                                                        placeholder="Enter First Author"
                                                        value="{{ old('authors.ten_author.firstname') }}">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_middlename" class="form-label">Author's Middle
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[ten_author][middlename]"
                                                        value="{{ old('authors.ten_author.middlename') }}"
                                                        placeholder="Enter Middle Name">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_lastname" class="form-label">Author's Last
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[ten_author][lastname]"
                                                        value="{{ old('authors.ten_author.lastname') }}"
                                                        placeholder="Enter Last Name">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="affiliation_dropdown" class="form-label">Affiliation</label>
                                                <select class="form-select select2 affiliation_select"
                                                    name="authors[ten_author][affiliation][]" multiple>

                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_email" class="form-label">Author's Email</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ old('authors.ten_author.email') }}"
                                                        name="authors[ten_author][email]" placeholder="Enter Email">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="author_orcid" class="form-label">Author's ORCID ID</label>
                                                    <input type="text" class="form-control"
                                                        name="authors[ten_author][orchid_id]"
                                                        value="{{ old('authors.ten_author.orchid_id') }}"
                                                        placeholder="Enter Author's ORCID ID">
                                                </div>
                                            </div>
                                            <div class="col-3 mt-4">
                                                <button class="btn btn-light btn-blue remove-author">remove</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2 mt-5">
                                        <button type="button" class="btn btn-primary add-author">Add Author</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 row">
                                <div class="col-12">
                                    <h5 class="my-3">Article Details <x-important /></h5>
                                    <hr>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Abstract</label>
                                        <textarea rows="4" class="form-control content" name="abstract" placeholder="Enter Abstract..">{{ old('abstract') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <div class="mb-3">
                                        <label for="" class="form-label">References <x-important /></label>
                                        <textarea rows="4" class="form-control content" name="references" placeholder="Enter references..">{{ old('references') }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <button type="submit" class="btn btn-primary">Add New Articles</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @if ($errors->any())
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                @if (old('abstract'))
                    $('textarea[name="abstract"]').val(`{!! old('abstract') !!}`);
                @endif
                @if (old('references'))
                    $('textarea[name="references"]').val(`{!! old('references') !!}`);
                @endif
            });
        </script>
    @endif

    <script>
        $(document).ready(function() {
            $('#journal').change(function() {
                let journalId = $(this).val();
                let url = "{{ route('volumes.fetch') }}";
                if (journalId) {
                    $.ajax({
                        url: url,
                        type: 'GET',
                        data: {
                            journal_id: journalId
                        },
                        success: function(data) {
                            $('#volume').html(data);
                        }
                    });
                } else {
                    $('#volume').empty().append('<option selected disabled>Choose Volume</option>');
                }
            });

            $('#volume').change(function(e) {

                e.preventDefault();
                let volumeID = $(this).val();
                let url = "{{ route('issue.fetch') }}"
                $.ajax({
                    type: "GET",
                    url: url,
                    data: {
                        volume_id: volumeID
                    },
                    success: function(response) {
                        $('#issue').html(response);
                    }
                });
            });

        });

        $(document).ready(function() {
            $('#two_box').hide();
            $('#three_box').hide();
            $('#four_box').hide();
            $('#five_box').hide();
            $('#six_box').hide();
            $('#seven_box').hide();
            $('#eight_box').hide();
            $('#nine_box').hide();
            $('#ten_box').hide();
            let currentBoxIndex = 1;
            $('#showNextBox').click(function(e) {
                e.preventDefault();
                currentBoxIndex++;
                if (currentBoxIndex <= 10) {
                    $(`#${numberToWord(currentBoxIndex)}_box`).show();
                }
            });
            $(document).on('click', '.remove-btn', function(e) {
                e.preventDefault();
                let parentDiv = $(this).closest('.col-10.row');
                parentDiv.find('input').val('');
                parentDiv.find('select').val('');
                parentDiv.hide();
            });
            $(document).ready(function() {
                let affiliations = [];
                $(document).on('click', '.save-affiliation', function() {
                    affiliations = [];
                    $('.col-10.row').each(function() {
                        let affiliationName = $(this).find('input[name$="[name]"]').val();
                        let affiliationCountry = $(this).find('select[name$="[country]"]')
                            .val();
                        if (affiliationName && affiliationCountry) {
                            affiliations.push({
                                name: affiliationName,
                                country: affiliationCountry
                            });
                        }
                    });

                    $('.affiliation_select').each(function() {
                        $(this).empty().append(
                            '');

                        affiliations.forEach(function(affiliation) {
                            $(this).append(
                                `<option value="${affiliation.name},${affiliation.country}">${affiliation.name}, ${affiliation.country}</option>`
                            );
                        }.bind(this));
                    });
                });
            });

        });

        function numberToWord(number) {
            const words = ['one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten'];
            return words[number - 1];
        }

        $(document).ready(function() {
            $('#second_author_box').hide();
            $('#third_author_box').hide();
            $('#fourth_author_box').hide();
            $('#fifth_author_box').hide();
            $('#sixth_author_box').hide();
            $('#seventh_author_box').hide();
            $('#eight_author_box').hide();
            $('#nine_author_box').hide();
            $('#ten_author_box').hide();

            let i = 2;
            $('.add-author').click(function(e) {
                e.preventDefault();
                if (i <= 10) {
                    $('#' + ordinal(i) + '_author_box').show();
                    i++;
                }
            });
            $(document).on('click', '.remove-author', function(e) {
                e.preventDefault();
                let authorBox = $(this).closest('.author-box');
                authorBox.find('input, select').val('');
                authorBox.hide();
                i--;
            });

            function ordinal(number) {
                const
                    ordinals = ['first', 'second', 'third', 'fourth', 'fifth', 'sixth', 'seventh', 'eighth',
                        'ninth', 'tenth'
                    ];
                return ordinals[number - 1];
            }
        });

        $(document).ready(function() {
            $('#myForm').find('input, select').each(function() {
                var name = $(this).attr('name');
                $(this).val({{ old('name') }});
            });
        });
    </script>
@endsection
