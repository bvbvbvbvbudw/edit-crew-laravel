<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\VideoEditingServicesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'index'])->name('page.index');
Route::get('/about-us', [PageController::class, 'about'])->name('page.about');
Route::get('/blog', [PageController::class, 'blog'])->name('page.blog');
Route::get('/pricing', [PageController::class, 'pricing'])->name('page.pricing');

Route::get('/case-studies', [PageController::class, 'case'])->name('page.case');
Route::get('/customer-stories', [PageController::class, 'stories'])->name('page.stories');

Route::get('/privacy-policy', [PageController::class, 'privacy'])->name('page.privacy');
Route::get('/terms-conditions', [PageController::class, 'terms'])->name('page.terms');
Route::get('/observed-holidays', [PageController::class, 'holidays'])->name('page.holidays');
Route::get('/action/booking-meetings', [PageController::class, 'booking'])->name('page.action.booking');
Route::get('/action/careers', [PageController::class, 'careers'])->name('page.action.careers');
Route::get('/our-work', [PageController::class, 'ourWork'])->name('page.our-work');
Route::get('/scope', [PageController::class, 'scope'])->name('page.scope');
Route::get('/video-editing-services', [PageController::class, 'videoEditingServices'])->name('page.video-editing-services');

Route::prefix('video-edition-services')->group(function () {
    Route::get('/advertisements', [VideoEditingServicesController::class, 'advertisements'])->name('video-edition-services.advertisements');
    Route::get('/advertising-agencies', [VideoEditingServicesController::class, 'advertisingAgencies'])->name('video-edition-services.advertising-agencies');
    Route::get('/automotive-car', [VideoEditingServicesController::class, 'automotiveCar'])->name('video-edition-services.automotive-car');
    Route::get('/branding', [VideoEditingServicesController::class, 'branding'])->name('video-edition-services.branding');
    Route::get('/content-creators', [VideoEditingServicesController::class, 'contentCreators'])->name('video-edition-services.content-creators');
    Route::get('/documentaries', [VideoEditingServicesController::class, 'documentaries'])->name('video-edition-services.documentaries');
    Route::get('/drone-footage', [VideoEditingServicesController::class, 'droneFootage'])->name('video-edition-services.drone-footage');
    Route::get('/e-commerce-businesses', [VideoEditingServicesController::class, 'eCommerceBusinesses'])->name('video-edition-services.e-commerce-businesses');
    Route::get('/educational-programs', [VideoEditingServicesController::class, 'educationalPrograms'])->name('video-edition-services.educational-programs');
    Route::get('/event-planners', [VideoEditingServicesController::class, 'eventPlanners'])->name('video-edition-services.event-planners');
    Route::get('/finance', [VideoEditingServicesController::class, 'finance'])->name('video-edition-services.finance');
    Route::get('/fitness-instructors', [VideoEditingServicesController::class, 'fitnessInstructors'])->name('video-edition-services.fitness-instructors');
    Route::get('/fort-worth', [VideoEditingServicesController::class, 'fortWorth'])->name('video-edition-services.fort-worth');
    Route::get('/fundraising-videos', [VideoEditingServicesController::class, 'fundraisingVideos'])->name('video-edition-services.fundraising-videos');
    Route::get('/healthcare', [VideoEditingServicesController::class, 'healthcare'])->name('video-edition-services.healthcare');
    Route::get('/hershey-pa', [VideoEditingServicesController::class, 'hersheyPa'])->name('video-edition-services.hershey-pa');
    Route::get('/hospitality', [VideoEditingServicesController::class, 'hospitality'])->name('video-edition-services.hospitality');
    Route::get('/independent-filmmakers', [VideoEditingServicesController::class, 'independentFilmmakers'])->name('video-edition-services.independent-filmmakers');
    Route::get('/indianapolis', [VideoEditingServicesController::class, 'indianapolis'])->name('video-edition-services.indianapolis');
    Route::get('/legal-firms', [VideoEditingServicesController::class, 'legalFirms'])->name('video-edition-services.legal-firms');
    Route::get('/manufacturing-engineering', [VideoEditingServicesController::class, 'manufacturingEngineering'])->name('video-edition-services.manufacturing-engineering');
    Route::get('/marketing-advertising-agencies', [VideoEditingServicesController::class, 'marketingAdvertisingAgencies'])->name('video-edition-services.marketing-advertising-agencies');
    Route::get('/media-companies', [VideoEditingServicesController::class, 'mediaCompanies'])->name('video-edition-services.media-companies');
    Route::get('/musicians', [VideoEditingServicesController::class, 'musicians'])->name('video-edition-services.musicians');
    Route::get('/nashville-tn', [VideoEditingServicesController::class, 'nashvilleTn'])->name('video-edition-services.nashville-tn');
    Route::get('/nonprofit-organizations', [VideoEditingServicesController::class, 'nonprofitOrganizations'])->name('video-edition-services.nonprofit-organizations');
    Route::get('/nyc', [VideoEditingServicesController::class, 'nyc'])->name('video-edition-services.nyc');
    Route::get('/online-blogs', [VideoEditingServicesController::class, 'onlineBlogs'])->name('video-edition-services.online-blogs');
    Route::get('/podcasters', [VideoEditingServicesController::class, 'podcasters'])->name('video-edition-services.podcasters');
    Route::get('/real-estate-agents', [VideoEditingServicesController::class, 'realEstateAgents'])->name('video-edition-services.real-estate-agents');
    Route::get('/review-companies', [VideoEditingServicesController::class, 'reviewCompanies'])->name('video-edition-services.review-companies');
    Route::get('/salt-lake-city', [VideoEditingServicesController::class, 'saltLakeCity'])->name('video-edition-services.salt-lake-city');
    Route::get('/san-francisco', [VideoEditingServicesController::class, 'sanFrancisco'])->name('video-edition-services.san-francisco');
    Route::get('/social-media-influencers', [VideoEditingServicesController::class, 'socialMediaInfluencers'])->name('video-edition-services.social-media-influencers');
    Route::get('/sports', [VideoEditingServicesController::class, 'sports'])->name('video-edition-services.sports');
    Route::get('/streamers', [VideoEditingServicesController::class, 'streamers'])->name('video-edition-services.streamers');
    Route::get('/tech-companies', [VideoEditingServicesController::class, 'techCompanies'])->name('video-edition-services.tech-companies');
    Route::get('/the-film-television-industry', [VideoEditingServicesController::class, 'theFilmTelevisionIndustry'])->name('video-edition-services.the-film-television-industry');
    Route::get('/toronto', [VideoEditingServicesController::class, 'toronto'])->name('video-edition-services.toronto');
    Route::get('/travel', [VideoEditingServicesController::class, 'travel'])->name('video-edition-services.travel');
    Route::get('/youtubers', [VideoEditingServicesController::class, 'youtubers'])->name('video-edition-services.youtubers');
});
