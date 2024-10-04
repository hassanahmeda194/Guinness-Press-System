<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\DoiGeneratorController;
use App\Http\Controllers\Admin\JournalBoardMemberController;
use App\Http\Controllers\Admin\JournalController;
use App\Http\Controllers\Admin\JournalVolumeController;
use App\Http\Controllers\Admin\SubmissionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VolumeIssueController;
use App\Http\Controllers\IndexBodyController;
use App\Models\Submission;
use App\Services\CustomService;
use App\Services\SubmissionService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MetaDataController;


Route::redirect('/admin', '/admin/login');

Route::prefix('admin')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('admin.login');
    Route::post('/submit-login', [AuthController::class, 'Submitlogin'])->name('admin.submit.login');
});

Route::prefix('admin')->group(function () {
    Route::middleware('check.dashboard.auth')->group(function () {

        Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/journals', [JournalController::class, 'index'])->name('admin.journal.index');
        Route::get('/create-journals', [JournalController::class, 'create'])->name('admin.journal.create');
        Route::post('/store-journal', [JournalController::class, 'store'])->name('admin.journal.store');
        Route::get('/edit-journal/{id}', [JournalController::class, 'edit'])->name('admin.journal.edit');
        Route::post('/update-journal/{id}', [JournalController::class, 'update'])->name('admin.journal.update');
        Route::get('/delete-journal/{id}', [JournalController::class, 'destroy'])->name('admin.journal.delete');

        //members
        Route::get('/editorial-member', [JournalBoardMemberController::class, 'index'])->name('editorial.member.index');
        Route::post('/store-editorial-member', [JournalBoardMemberController::class, 'store'])->name('editorial.member.store');
        Route::get('/edit-editorial-member', [JournalBoardMemberController::class, 'edit'])->name('editorial.member.edit');
        Route::post('/update-editorial-member/{id}', [JournalBoardMemberController::class, 'update'])->name('editorial.member.update');
        Route::get('/delete-editorial-member/{id}', [JournalBoardMemberController::class, 'destroy'])->name('editorial.member.delete');

        //volumes
        Route::get('/volume-index', [JournalVolumeController::class, 'index'])->name('admin.volume.index');
        Route::post('/store-volume', [JournalVolumeController::class, 'store'])->name('admin.volume.store');
        Route::get('/edit-volume', [JournalVolumeController::class, 'edit'])->name('admin.volume.edit');
        Route::post('/update-volume/{id}', [JournalVolumeController::class, 'update'])->name('admin.volume.update');
        Route::get('/delete-volume/{id}', [JournalVolumeController::class, 'destroy'])->name('admin.volume.destroy');

        //Issue
        Route::get('/issues', [VolumeIssueController::class, 'index'])->name('admin.issue.index');
        Route::post('/issues-store', [VolumeIssueController::class, 'store'])->name('admin.issue.store');
        Route::get('/issues-edit', [VolumeIssueController::class, 'edit'])->name('admin.issue.edit');
        Route::post('/issues-update/{id}', [VolumeIssueController::class, 'update'])->name('admin.issue.update');
        Route::get('/issues-delete/{id}', [VolumeIssueController::class, 'destroy'])->name('admin.issue.delete');

        //Articles
        Route::get('/articles', [ArticleController::class, 'index'])->name('admin.article.index');
        Route::get('/article-create', [ArticleController::class, 'create'])->name('admin.article.create');
        Route::post('/article-store', [ArticleController::class, 'store'])->name('admin.article.store');
        Route::get('/article-edit/{id}', [ArticleController::class, 'edit'])->name('admin.article.edit');
        Route::post('/article-update/{id}', [ArticleController::class, 'update'])->name('admin.article.update');
        Route::get('/article-delete/{id}', [ArticleController::class, 'destroy'])->name('admin.article.delete');
        Route::get('/article-show/{id}', [ArticleController::class, 'show'])->name('article.show');

        //Extra
        Route::get('/fetch-volumes', [CustomService::class, 'fetchVolumes'])->name('volumes.fetch');
        Route::get('/fetch-issue', [CustomService::class, 'fetchIssue'])->name('issue.fetch');

        //doi dependent select box
        Route::get('/fetch-volumes-dio', [CustomService::class, 'fetchVolumesdoi'])->name('volumes.fetch.dio');
        Route::get('/fetch-issue-dio', [CustomService::class, 'fetchIssuedoi'])->name('issue.fetch.dio');

        //DOI Generator
        Route::get('/DOI-Generator', [DoiGeneratorController::class, 'index'])->name('doi.index');
        Route::post('/DOI-Generator-Save', [DoiGeneratorController::class, 'store'])->name('doi.store');

        Route::post('/admin-approve-submission/{id}', [SubmissionController::class, 'approveSubmission'])->name('admin.approve.submission');
        Route::post('/admin-reject-submission/{id}', [SubmissionController::class, 'rejectSubmission'])->name('admin.reject.submission');

        Route::get('/submissions', [SubmissionController::class, 'index'])->name('admin.submission.index');
        Route::get('/submission-detail/{id}', [SubmissionController::class, 'show'])->name('submission.show');
        Route::post('update-submission-status/{id}', [SubmissionController::class, 'updateStatus'])->name('update.submission.status');
        Route::post('/submission-feedback', [CustomService::class, 'submitFeedback'])->name('submission.feedback');

        Route::post('/assign-peer-reviewed/{id}', [SubmissionService::class, 'assignPeerReviewed'])->name('assign.peer.reviewed');
        Route::post('/send-file-to-author/{id}', [SubmissionService::class, 'sendFileToAuthor'])->name('send.file.to.author');


        Route::get('/users', [UserController::class, 'index'])->name('admin.user.index');
        Route::post('/store-users', [UserController::class, 'store'])->name('admin.user.store');
        Route::get('/edit-users', [UserController::class, 'edit'])->name('admin.user.edit');
        Route::get('/delete-users/{id}', [UserController::class, 'destroy'])->name('admin.user.delete');
        Route::post('/Update-user/{id}', [UserController::class, 'update'])->name('admin.user.update');
        Route::get('/profile', [UserController::class, 'profile'])->name('admin.user.profile');


        Route::get('/index-bodies', [IndexBodyController::class, 'index'])->name('index.body.index');
        Route::post('/index-bodies-store', [IndexBodyController::class, 'store'])->name('index.body.store');
        Route::get('/index-bodies-edit', [IndexBodyController::class, 'edit'])->name('index.body.edit');
        Route::post('/index-bodies-update/{id}', [IndexBodyController::class, 'update'])->name('index.body.update');
        Route::get('/index-bodies-delete/{id}', [IndexBodyController::class, 'destroy'])->name('index.body.destroy');


        Route::view('/references-generator', 'admin.refrences.index')->name('reference.generator');

        Route::get('/blogs', [BlogController::class, 'index'])->name('admin.blog.index');
        Route::get('/add-blogs', [BlogController::class, 'create'])->name('admin.blog.create');
        Route::post('/store-blogs', [BlogController::class, 'store'])->name('admin.blog.store');
        Route::get('/edit-blogs/{id}', [BlogController::class, 'edit'])->name('admin.blog.edit');
        Route::post('/update-blogs/{id}', [BlogController::class, 'update'])->name('admin.blog.update');
        Route::get('/delete-blogs/{id}', [BlogController::class, 'destroy'])->name('admin.blog.delete');



        Route::view('/news-letter', 'admin.newsletter.index')->name('admin.news.letter');
        Route::view('/leads', 'admin.leads.index')->name('admin.leads');
        
        
        
        Route::get('/meta-data', [MetaDataController::class, 'index'])->name('admin.meta.data');
        Route::post('/post-meta-data', [MetaDataController::class, 'postMetaData'])->name('admin.post.meta.data');
        
        Route::get('/mark-converted/{id}', [CustomService::class, 'markAsConverted'])->name('mark.converted');
        
        
        Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');
    });
});
