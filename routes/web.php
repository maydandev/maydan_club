<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->get('/myprofile', function () {
    return view('dashboard');
})->name('myprofile');

use  App\Http\Controllers\MAYDAN\Api_event_type_detailController;
use  App\Http\Controllers\Test;


Route::resource('api_event_type_details', Api_event_type_detailController::class);
Route::get('/remote/api_event_type_details_data', [Api_event_type_detailController::class ,'all_data' ]);
Route::get('/getlocal', [ Test::class ,'getlocal' ]);




use  App\Http\Controllers\MAYDAN\Api_event_typeController;

Route::resource('api_event_types', Api_event_typeController::class);
Route::get('/remote/api_event_types_data', [Api_event_typeController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\App_release_statusController;

Route::resource('app_release_statuses', App_release_statusController::class);
Route::get('/remote/app_release_statuses_data', [App_release_statusController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\App_releaseController;

Route::resource('app_releases', App_releaseController::class);
Route::get('/remote/app_releases_data', [App_releaseController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\Application_football_teamController;

Route::resource('application_football_teams', Application_football_teamController::class);
Route::get('/remote/application_football_teams_data', [Application_football_teamController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\ApplicationController;

Route::resource('applications', ApplicationController::class);
Route::get('/remote/applications_data', [ApplicationController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\CityController;

Route::resource('cities', CityController::class);
Route::get('/remote/cities_data', [CityController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\ClientController;

Route::resource('clients', ClientController::class);
Route::get('/remote/clients_data', [ClientController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\ClubController;

Route::resource('clubs', ClubController::class);
Route::get('/remote/clubs_data', [ClubController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\ContactController;

Route::resource('contacts', ContactController::class);
Route::get('/remote/contacts_data', [ContactController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\CountryController;

Route::resource('countries', CountryController::class);
Route::get('/remote/countries_data', [CountryController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\Delivery_methodController;

Route::resource('delivery_methods', Delivery_methodController::class);
Route::get('/remote/delivery_methods_data', [Delivery_methodController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\Embedded_postController;

Route::resource('embedded_posts', Embedded_postController::class);
Route::get('/remote/embedded_posts_data', [Embedded_postController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\FeatureController;

Route::resource('features', FeatureController::class);
Route::get('/remote/features_data', [FeatureController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\Final_result_prediction_detailController;

Route::resource('final_result_prediction_details', Final_result_prediction_detailController::class);
Route::get('/remote/final_result_prediction_details_data', [Final_result_prediction_detailController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\Final_result_predictionController;

Route::resource('final_result_predictions', Final_result_predictionController::class);
Route::get('/remote/final_result_predictions_data', [Final_result_predictionController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\Final_result_user_predictionController;

Route::resource('final_result_user_predictions', Final_result_user_predictionController::class);
Route::get('/remote/final_result_user_predictions_data', [Final_result_user_predictionController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\First_goal_predictionController;

Route::resource('first_goal_predictions', First_goal_predictionController::class);
Route::get('/remote/first_goal_predictions_data', [First_goal_predictionController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\First_goal_user_predictionController;

Route::resource('first_goal_user_predictions', First_goal_user_predictionController::class);
Route::get('/remote/first_goal_user_predictions_data', [First_goal_user_predictionController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\FixtureController;

Route::resource('fixtures', FixtureController::class);
Route::get('/remote/fixtures_data', [FixtureController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\Football_team_postController;

Route::resource('football_team_posts', Football_team_postController::class);
Route::get('/remote/football_team_posts_data', [Football_team_postController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\Football_teamController;

Route::resource('football_teams', Football_teamController::class);
Route::get('/remote/football_teams_data', [Football_teamController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\GenderController;

Route::resource('genders', GenderController::class);
Route::get('/remote/genders_data', [GenderController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\LeaderboardController;

Route::resource('leaderboards', LeaderboardController::class);
Route::get('/remote/leaderboards_data', [LeaderboardController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\League_teamController;

Route::resource('league_teams', League_teamController::class);
Route::get('/remote/league_teams_data', [League_teamController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\League_typeController;

Route::resource('league_types', League_typeController::class);
Route::get('/remote/league_types_data', [League_typeController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\LeagueController;

Route::resource('leagues', LeagueController::class);
Route::get('/remote/leagues_data', [LeagueController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\Lineup_predictionController;

Route::resource('lineup_predictions', Lineup_predictionController::class);
Route::get('/remote/lineup_predictions_data', [Lineup_predictionController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\Lineup_result_prediction_playerController;

Route::resource('lineup_result_prediction_players', Lineup_result_prediction_playerController::class);
Route::get('/remote/lineup_result_prediction_players_data', [Lineup_result_prediction_playerController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\Lineup_user_prediction_playerController;

Route::resource('lineup_user_prediction_players', Lineup_user_prediction_playerController::class);
Route::get('/remote/lineup_user_prediction_players_data', [Lineup_user_prediction_playerController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\Lineup_user_predictionController;

Route::resource('lineup_user_predictions', Lineup_user_predictionController::class);
Route::get('/remote/lineup_user_predictions_data', [Lineup_user_predictionController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\ModuleController;

Route::resource('modules', ModuleController::class);
Route::get('/remote/modules_data', [ModuleController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\Notification_typeController;

Route::resource('notification_types', Notification_typeController::class);
Route::get('/remote/notification_types_data', [Notification_typeController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\NotificationController;

Route::resource('notifications', NotificationController::class);
Route::get('/remote/notifications_data', [NotificationController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\Package_featureController;

Route::resource('package_features', Package_featureController::class);
Route::get('/remote/package_features_data', [Package_featureController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\Package_table_categoryController;

Route::resource('package_table_categories', Package_table_categoryController::class);
Route::get('/remote/package_table_categories_data', [Package_table_categoryController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\Package_table_featureController;

Route::resource('package_table_features', Package_table_featureController::class);
Route::get('/remote/package_table_features_data', [Package_table_featureController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\PackageController;

Route::resource('packages', PackageController::class);
Route::get('/remote/packages_data', [PackageController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\PlayerController;

Route::resource('players', PlayerController::class);
Route::get('/remote/players_data', [PlayerController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\Post_typeController;

Route::resource('post_types', Post_typeController::class);
Route::get('/remote/post_types_data', [Post_typeController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\PostController;

Route::resource('posts', PostController::class);
Route::get('/remote/posts_data', [PostController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\Prediction_typeController;

Route::resource('prediction_types', Prediction_typeController::class);
Route::get('/remote/prediction_types_data', [Prediction_typeController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\PredictionController;

Route::resource('predictions', PredictionController::class);
Route::get('/remote/predictions_data', [PredictionController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\Quizze_answerController;

Route::resource('quizze_answers', Quizze_answerController::class);
Route::get('/remote/quizze_answers_data', [Quizze_answerController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\Quizze_optionController;

Route::resource('quizze_options', Quizze_optionController::class);
Route::get('/remote/quizze_options_data', [Quizze_optionController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\Quizze_question_optionController;

Route::resource('quizze_question_options', Quizze_question_optionController::class);
Route::get('/remote/quizze_question_options_data', [Quizze_question_optionController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\Quizze_questionController;

Route::resource('quizze_questions', Quizze_questionController::class);
Route::get('/remote/quizze_questions_data', [Quizze_questionController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\QuizController;

Route::resource('quizzes', QuizController::class);
Route::get('/remote/quizzes_data', [QuizController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\RepresentativeController;

Route::resource('representatives', RepresentativeController::class);
Route::get('/remote/representatives_data', [RepresentativeController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\SettingController;

Route::resource('settings', SettingController::class);
Route::get('/remote/settings_data', [SettingController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\Shop_categoryController;

Route::resource('shop_categories', Shop_categoryController::class);
Route::get('/remote/shop_categories_data', [Shop_categoryController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\Shop_coupon_codeController;

Route::resource('shop_coupon_codes', Shop_coupon_codeController::class);
Route::get('/remote/shop_coupon_codes_data', [Shop_coupon_codeController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\Shop_order_detailController;

Route::resource('shop_order_details', Shop_order_detailController::class);
Route::get('/remote/shop_order_details_data', [Shop_order_detailController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\Shop_order_statusController;

Route::resource('shop_order_statuses', Shop_order_statusController::class);
Route::get('/remote/shop_order_statuses_data', [Shop_order_statusController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\Shop_orderController;

Route::resource('shop_orders', Shop_orderController::class);
Route::get('/remote/shop_orders_data', [Shop_orderController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\Shop_product_imageController;

Route::resource('shop_product_images', Shop_product_imageController::class);
Route::get('/remote/shop_product_images_data', [Shop_product_imageController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\Shop_productController;

Route::resource('shop_products', Shop_productController::class);
Route::get('/remote/shop_products_data', [Shop_productController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\Social_mediaController;

Route::resource('social_media', Social_mediaController::class);
Route::get('/remote/social_media_data', [Social_mediaController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\Social_media_linkController;

Route::resource('social_media_links', Social_media_linkController::class);
Route::get('/remote/social_media_links_data', [Social_media_linkController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\Sponsor_typeController;

Route::resource('sponsor_types', Sponsor_typeController::class);
Route::get('/remote/sponsor_types_data', [Sponsor_typeController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\SponsorController;

Route::resource('sponsors', SponsorController::class);
Route::get('/remote/sponsors_data', [SponsorController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\SubdomainController;

Route::resource('subdomains', SubdomainController::class);
Route::get('/remote/subdomains_data', [SubdomainController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\TableController;

Route::resource('tables', TableController::class);
Route::get('/remote/tables_data', [TableController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\TestimonialController;

Route::resource('testimonials', TestimonialController::class);
Route::get('/remote/testimonials_data', [TestimonialController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\TicketController;

Route::resource('tickets', TicketController::class);
Route::get('/remote/tickets_data', [TicketController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\User_typeController;

Route::resource('user_types', User_typeController::class);
Route::get('/remote/user_types_data', [User_typeController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\UserController;

Route::resource('users', UserController::class);
Route::get('/remote/users_data', [UserController::class ,'all_data' ]);
Route::get('/my_profile', 'MAYDAN\UserController@my_profile');
use  App\Http\Controllers\MAYDAN\Vote_answerController;

Route::resource('vote_answers', Vote_answerController::class);
Route::get('/remote/vote_answers_data', [Vote_answerController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\Vote_optionController;

Route::resource('vote_options', Vote_optionController::class);
Route::get('/remote/vote_options_data', [Vote_optionController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\Vote_question_optionController;

Route::resource('vote_question_options', Vote_question_optionController::class);
Route::get('/remote/vote_question_options_data', [Vote_question_optionController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\Vote_questionController;

Route::resource('vote_questions', Vote_questionController::class);
Route::get('/remote/vote_questions_data', [Vote_questionController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\Vote_statusController;

Route::resource('vote_statuses', Vote_statusController::class);
Route::get('/remote/vote_statuses_data', [Vote_statusController::class ,'all_data' ]);
use  App\Http\Controllers\MAYDAN\VoteController;

Route::resource('votes', VoteController::class);
Route::get('/remote/votes_data', [VoteController::class ,'all_data' ]);
Route::get('/votes/{id}/vote_answers', [VoteController::class , 'vote_answers' ]);
