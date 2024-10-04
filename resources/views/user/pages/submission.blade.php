@extends('user.layouts.template')
@section('body')
<style>
.form-label,
.form-control {
    font-family: Poppins !important;

}
</style>
<div class="container">
    {{-- @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ $error }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endforeach
@endif --}}
<div class="row justify-content-center mt-5">
    <div class="col-md-10">
        <div>
            <h3 class="mb-4 cocogoose_light">Submit a Manuscript to Publish</h3>
        </div>
        <div class="my-5">
            <form action="{{ route('submission.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-4 mb-4">
                        <label for="" class="form-label">Manuscript ID</label>
                        <input type="text" class="form-control bg-light " value="{{ $menuscript_id }}" readonly>
                        @error('title')
                        <div class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div class="col-8 mb-4">

                    </div>
                    <div class="col-12 mb-4">
                        <label for="" class="form-label">Title</label>
                        <input type="text" class="form-control  @error('title') is-invalid  @enderror" name="title"
                            value="{{ old('title') }}" placeholder="Enter your Title">
                        @error('title')
                        <div class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div class="col-12 mb-4">
                        <label for="" class="form-label">Abstract</label>
                        <textarea type="text" rows="2" class="form-control  @error('abstract') is-invalid  @enderror"
                            name="abstract"
                            placeholder="short background information about your research..">{{ old('abstract') ?? '' }}</textarea>
                        @error('abstract')
                        <div class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div class="col-8 mb-4">
                        <label for="" class="form-label">Keyword</label>
                        <input type="text" class="form-control" id="keywords" name="keywords"
                            placeholder="Type and press Enter to add keywords">
                        @error('keywords')
                        <div class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div class="col-4 mb-4">
                        <label for="" class="form-label">Journal</label>
                        <select class="form-control @error('journal') is-invalid @enderror" name="journal">
                            <option value="">Select Journal</option>
                            @foreach ($journals as $j)
                            <option value="{{ $j->id }}">{{ ucwords(strtolower($j->name)) }}</option>
                            @endforeach
                        </select>
                        @error('journal')
                        <div class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div class="col-6 mb-4">
                        <label for="" class="form-label">manuscript</label>
                        <input type="file" class="form-control  @error('manuscript') is-invalid  @enderror"
                            name="manuscript" value="{{ old('manuscript') }}">
                        @error('manuscript')
                        <div class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div class="col-6 mb-4">
                        <label for="" class="form-label">cover letter</label>
                        <input type="file" class="form-control  @error('cover_letter') is-invalid  @enderror"
                            name="cover_letter" value="{{ old('cover_letter') }}">
                        @error('cover_letter')
                        <div class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div class="col-12 mb-4">
                        <label for="" class="form-label">Message <small>(optional)</small> </label>
                        <textarea rows="5" class="form-control   @error('author_message') is-invalid  @enderror"
                            name="author_message">{{ old('author_message') ?? '' }} </textarea>
                        @error('author_message')
                        <div class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div class="col-12 mb-4">
                        <button class="btn btn-light btn-blue pe-4 ms-0" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/css/selectize.bootstrap4.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/js/standalone/selectize.min.js"></script>
<script>
$('#keywords').selectize({
    delimiter: ',',
    persist: false,
    create: function(input) {
        return {
            value: input,
            text: input
        };
    }
});
</script>
@endsection