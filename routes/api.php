<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('api_event_type_details', 'API\Api_event_type_detailAPIController@api_event_type_details');
Route::get('show_api_event_type_detail', 'API\Api_event_type_detailAPIController@show_api_event_type_detail');
Route::post('add_api_event_type_detail', 'API\Api_event_type_detailAPIController@add_api_event_type_detail');
Route::put('update_api_event_type_detail', 'API\Api_event_type_detailAPIController@update_api_event_type_detail');
Route::delete('delete_api_event_type_detail', 'API\Api_event_type_detailAPIController@delete_api_event_type_detail');
 
Route::get('api_event_types', 'API\Api_event_typeAPIController@api_event_types');
Route::get('show_api_event_type', 'API\Api_event_typeAPIController@show_api_event_type');
Route::post('add_api_event_type', 'API\Api_event_typeAPIController@add_api_event_type');
Route::put('update_api_event_type', 'API\Api_event_typeAPIController@update_api_event_type');
Route::delete('delete_api_event_type', 'API\Api_event_typeAPIController@delete_api_event_type');
 
Route::get('app_release_statuses', 'API\App_release_statusAPIController@app_release_statuses');
Route::get('show_app_release_status', 'API\App_release_statusAPIController@show_app_release_status');
Route::post('add_app_release_status', 'API\App_release_statusAPIController@add_app_release_status');
Route::put('update_app_release_status', 'API\App_release_statusAPIController@update_app_release_status');
Route::delete('delete_app_release_status', 'API\App_release_statusAPIController@delete_app_release_status');
 
Route::get('app_releases', 'API\App_releaseAPIController@app_releases');
Route::get('show_app_release', 'API\App_releaseAPIController@show_app_release');
Route::post('add_app_release', 'API\App_releaseAPIController@add_app_release');
Route::put('update_app_release', 'API\App_releaseAPIController@update_app_release');
Route::delete('delete_app_release', 'API\App_releaseAPIController@delete_app_release');
 
Route::get('application_football_teams', 'API\Application_football_teamAPIController@application_football_teams');
Route::get('show_application_football_team', 'API\Application_football_teamAPIController@show_application_football_team');
Route::post('add_application_football_team', 'API\Application_football_teamAPIController@add_application_football_team');
Route::put('update_application_football_team', 'API\Application_football_teamAPIController@update_application_football_team');
Route::delete('delete_application_football_team', 'API\Application_football_teamAPIController@delete_application_football_team');
 
Route::get('applications', 'API\ApplicationAPIController@applications');
Route::get('show_application', 'API\ApplicationAPIController@show_application');
Route::post('add_application', 'API\ApplicationAPIController@add_application');
Route::put('update_application', 'API\ApplicationAPIController@update_application');
Route::delete('delete_application', 'API\ApplicationAPIController@delete_application');
 
Route::get('cities', 'API\CityAPIController@cities');
Route::get('show_city', 'API\CityAPIController@show_city');
Route::post('add_city', 'API\CityAPIController@add_city');
Route::put('update_city', 'API\CityAPIController@update_city');
Route::delete('delete_city', 'API\CityAPIController@delete_city');
 
Route::get('clients', 'API\ClientAPIController@clients');
Route::get('show_client', 'API\ClientAPIController@show_client');
Route::post('add_client', 'API\ClientAPIController@add_client');
Route::put('update_client', 'API\ClientAPIController@update_client');
Route::delete('delete_client', 'API\ClientAPIController@delete_client');
 
Route::get('clubs', 'API\ClubAPIController@clubs');
Route::get('show_club', 'API\ClubAPIController@show_club');
Route::post('add_club', 'API\ClubAPIController@add_club');
Route::put('update_club', 'API\ClubAPIController@update_club');
Route::delete('delete_club', 'API\ClubAPIController@delete_club');
 
Route::get('contacts', 'API\ContactAPIController@contacts');
Route::get('show_contact', 'API\ContactAPIController@show_contact');
Route::post('add_contact', 'API\ContactAPIController@add_contact');
Route::put('update_contact', 'API\ContactAPIController@update_contact');
Route::delete('delete_contact', 'API\ContactAPIController@delete_contact');
 
Route::get('countries', 'API\CountryAPIController@countries');
Route::get('show_country', 'API\CountryAPIController@show_country');
Route::post('add_country', 'API\CountryAPIController@add_country');
Route::put('update_country', 'API\CountryAPIController@update_country');
Route::delete('delete_country', 'API\CountryAPIController@delete_country');
 
Route::get('delivery_methods', 'API\Delivery_methodAPIController@delivery_methods');
Route::get('show_delivery_method', 'API\Delivery_methodAPIController@show_delivery_method');
Route::post('add_delivery_method', 'API\Delivery_methodAPIController@add_delivery_method');
Route::put('update_delivery_method', 'API\Delivery_methodAPIController@update_delivery_method');
Route::delete('delete_delivery_method', 'API\Delivery_methodAPIController@delete_delivery_method');
 
Route::get('embedded_posts', 'API\Embedded_postAPIController@embedded_posts');
Route::get('show_embedded_post', 'API\Embedded_postAPIController@show_embedded_post');
Route::post('add_embedded_post', 'API\Embedded_postAPIController@add_embedded_post');
Route::put('update_embedded_post', 'API\Embedded_postAPIController@update_embedded_post');
Route::delete('delete_embedded_post', 'API\Embedded_postAPIController@delete_embedded_post');
 
Route::get('features', 'API\FeatureAPIController@features');
Route::get('show_feature', 'API\FeatureAPIController@show_feature');
Route::post('add_feature', 'API\FeatureAPIController@add_feature');
Route::put('update_feature', 'API\FeatureAPIController@update_feature');
Route::delete('delete_feature', 'API\FeatureAPIController@delete_feature');
 
Route::get('final_result_prediction_details', 'API\Final_result_prediction_detailAPIController@final_result_prediction_details');
Route::get('show_final_result_prediction_detail', 'API\Final_result_prediction_detailAPIController@show_final_result_prediction_detail');
Route::post('add_final_result_prediction_detail', 'API\Final_result_prediction_detailAPIController@add_final_result_prediction_detail');
Route::put('update_final_result_prediction_detail', 'API\Final_result_prediction_detailAPIController@update_final_result_prediction_detail');
Route::delete('delete_final_result_prediction_detail', 'API\Final_result_prediction_detailAPIController@delete_final_result_prediction_detail');
 
Route::get('final_result_predictions', 'API\Final_result_predictionAPIController@final_result_predictions');
Route::get('show_final_result_prediction', 'API\Final_result_predictionAPIController@show_final_result_prediction');
Route::post('add_final_result_prediction', 'API\Final_result_predictionAPIController@add_final_result_prediction');
Route::put('update_final_result_prediction', 'API\Final_result_predictionAPIController@update_final_result_prediction');
Route::delete('delete_final_result_prediction', 'API\Final_result_predictionAPIController@delete_final_result_prediction');
 
Route::get('final_result_user_predictions', 'API\Final_result_user_predictionAPIController@final_result_user_predictions');
Route::get('show_final_result_user_prediction', 'API\Final_result_user_predictionAPIController@show_final_result_user_prediction');
Route::post('add_final_result_user_prediction', 'API\Final_result_user_predictionAPIController@add_final_result_user_prediction');
Route::put('update_final_result_user_prediction', 'API\Final_result_user_predictionAPIController@update_final_result_user_prediction');
Route::delete('delete_final_result_user_prediction', 'API\Final_result_user_predictionAPIController@delete_final_result_user_prediction');
 
Route::get('first_goal_predictions', 'API\First_goal_predictionAPIController@first_goal_predictions');
Route::get('show_first_goal_prediction', 'API\First_goal_predictionAPIController@show_first_goal_prediction');
Route::post('add_first_goal_prediction', 'API\First_goal_predictionAPIController@add_first_goal_prediction');
Route::put('update_first_goal_prediction', 'API\First_goal_predictionAPIController@update_first_goal_prediction');
Route::delete('delete_first_goal_prediction', 'API\First_goal_predictionAPIController@delete_first_goal_prediction');
 
Route::get('first_goal_user_predictions', 'API\First_goal_user_predictionAPIController@first_goal_user_predictions');
Route::get('show_first_goal_user_prediction', 'API\First_goal_user_predictionAPIController@show_first_goal_user_prediction');
Route::post('add_first_goal_user_prediction', 'API\First_goal_user_predictionAPIController@add_first_goal_user_prediction');
Route::put('update_first_goal_user_prediction', 'API\First_goal_user_predictionAPIController@update_first_goal_user_prediction');
Route::delete('delete_first_goal_user_prediction', 'API\First_goal_user_predictionAPIController@delete_first_goal_user_prediction');
 
Route::get('fixtures', 'API\FixtureAPIController@fixtures');
Route::get('show_fixture', 'API\FixtureAPIController@show_fixture');
Route::post('add_fixture', 'API\FixtureAPIController@add_fixture');
Route::put('update_fixture', 'API\FixtureAPIController@update_fixture');
Route::delete('delete_fixture', 'API\FixtureAPIController@delete_fixture');
 
Route::get('football_team_posts', 'API\Football_team_postAPIController@football_team_posts');
Route::get('show_football_team_post', 'API\Football_team_postAPIController@show_football_team_post');
Route::post('add_football_team_post', 'API\Football_team_postAPIController@add_football_team_post');
Route::put('update_football_team_post', 'API\Football_team_postAPIController@update_football_team_post');
Route::delete('delete_football_team_post', 'API\Football_team_postAPIController@delete_football_team_post');
 
Route::get('football_teams', 'API\Football_teamAPIController@football_teams');
Route::get('show_football_team', 'API\Football_teamAPIController@show_football_team');
Route::post('add_football_team', 'API\Football_teamAPIController@add_football_team');
Route::put('update_football_team', 'API\Football_teamAPIController@update_football_team');
Route::delete('delete_football_team', 'API\Football_teamAPIController@delete_football_team');
 
Route::get('genders', 'API\GenderAPIController@genders');
Route::get('show_gender', 'API\GenderAPIController@show_gender');
Route::post('add_gender', 'API\GenderAPIController@add_gender');
Route::put('update_gender', 'API\GenderAPIController@update_gender');
Route::delete('delete_gender', 'API\GenderAPIController@delete_gender');
 
Route::get('leaderboards', 'API\LeaderboardAPIController@leaderboards');
Route::get('show_leaderboard', 'API\LeaderboardAPIController@show_leaderboard');
Route::post('add_leaderboard', 'API\LeaderboardAPIController@add_leaderboard');
Route::put('update_leaderboard', 'API\LeaderboardAPIController@update_leaderboard');
Route::delete('delete_leaderboard', 'API\LeaderboardAPIController@delete_leaderboard');
 
Route::get('league_teams', 'API\League_teamAPIController@league_teams');
Route::get('show_league_team', 'API\League_teamAPIController@show_league_team');
Route::post('add_league_team', 'API\League_teamAPIController@add_league_team');
Route::put('update_league_team', 'API\League_teamAPIController@update_league_team');
Route::delete('delete_league_team', 'API\League_teamAPIController@delete_league_team');
 
Route::get('league_types', 'API\League_typeAPIController@league_types');
Route::get('show_league_type', 'API\League_typeAPIController@show_league_type');
Route::post('add_league_type', 'API\League_typeAPIController@add_league_type');
Route::put('update_league_type', 'API\League_typeAPIController@update_league_type');
Route::delete('delete_league_type', 'API\League_typeAPIController@delete_league_type');
 
Route::get('leagues', 'API\LeagueAPIController@leagues');
Route::get('show_league', 'API\LeagueAPIController@show_league');
Route::post('add_league', 'API\LeagueAPIController@add_league');
Route::put('update_league', 'API\LeagueAPIController@update_league');
Route::delete('delete_league', 'API\LeagueAPIController@delete_league');
 
Route::get('lineup_predictions', 'API\Lineup_predictionAPIController@lineup_predictions');
Route::get('show_lineup_prediction', 'API\Lineup_predictionAPIController@show_lineup_prediction');
Route::post('add_lineup_prediction', 'API\Lineup_predictionAPIController@add_lineup_prediction');
Route::put('update_lineup_prediction', 'API\Lineup_predictionAPIController@update_lineup_prediction');
Route::delete('delete_lineup_prediction', 'API\Lineup_predictionAPIController@delete_lineup_prediction');
 
Route::get('lineup_result_prediction_players', 'API\Lineup_result_prediction_playerAPIController@lineup_result_prediction_players');
Route::get('show_lineup_result_prediction_player', 'API\Lineup_result_prediction_playerAPIController@show_lineup_result_prediction_player');
Route::post('add_lineup_result_prediction_player', 'API\Lineup_result_prediction_playerAPIController@add_lineup_result_prediction_player');
Route::put('update_lineup_result_prediction_player', 'API\Lineup_result_prediction_playerAPIController@update_lineup_result_prediction_player');
Route::delete('delete_lineup_result_prediction_player', 'API\Lineup_result_prediction_playerAPIController@delete_lineup_result_prediction_player');
 
Route::get('lineup_user_prediction_players', 'API\Lineup_user_prediction_playerAPIController@lineup_user_prediction_players');
Route::get('show_lineup_user_prediction_player', 'API\Lineup_user_prediction_playerAPIController@show_lineup_user_prediction_player');
Route::post('add_lineup_user_prediction_player', 'API\Lineup_user_prediction_playerAPIController@add_lineup_user_prediction_player');
Route::put('update_lineup_user_prediction_player', 'API\Lineup_user_prediction_playerAPIController@update_lineup_user_prediction_player');
Route::delete('delete_lineup_user_prediction_player', 'API\Lineup_user_prediction_playerAPIController@delete_lineup_user_prediction_player');
 
Route::get('lineup_user_predictions', 'API\Lineup_user_predictionAPIController@lineup_user_predictions');
Route::get('show_lineup_user_prediction', 'API\Lineup_user_predictionAPIController@show_lineup_user_prediction');
Route::post('add_lineup_user_prediction', 'API\Lineup_user_predictionAPIController@add_lineup_user_prediction');
Route::put('update_lineup_user_prediction', 'API\Lineup_user_predictionAPIController@update_lineup_user_prediction');
Route::delete('delete_lineup_user_prediction', 'API\Lineup_user_predictionAPIController@delete_lineup_user_prediction');
 
Route::get('modules', 'API\ModuleAPIController@modules');
Route::get('show_module', 'API\ModuleAPIController@show_module');
Route::post('add_module', 'API\ModuleAPIController@add_module');
Route::put('update_module', 'API\ModuleAPIController@update_module');
Route::delete('delete_module', 'API\ModuleAPIController@delete_module');
 
Route::get('notification_types', 'API\Notification_typeAPIController@notification_types');
Route::get('show_notification_type', 'API\Notification_typeAPIController@show_notification_type');
Route::post('add_notification_type', 'API\Notification_typeAPIController@add_notification_type');
Route::put('update_notification_type', 'API\Notification_typeAPIController@update_notification_type');
Route::delete('delete_notification_type', 'API\Notification_typeAPIController@delete_notification_type');
 
Route::get('notifications', 'API\NotificationAPIController@notifications');
Route::get('show_notification', 'API\NotificationAPIController@show_notification');
Route::post('add_notification', 'API\NotificationAPIController@add_notification');
Route::put('update_notification', 'API\NotificationAPIController@update_notification');
Route::delete('delete_notification', 'API\NotificationAPIController@delete_notification');
 
Route::get('package_features', 'API\Package_featureAPIController@package_features');
Route::get('show_package_feature', 'API\Package_featureAPIController@show_package_feature');
Route::post('add_package_feature', 'API\Package_featureAPIController@add_package_feature');
Route::put('update_package_feature', 'API\Package_featureAPIController@update_package_feature');
Route::delete('delete_package_feature', 'API\Package_featureAPIController@delete_package_feature');
 
Route::get('package_table_categories', 'API\Package_table_categoryAPIController@package_table_categories');
Route::get('show_package_table_category', 'API\Package_table_categoryAPIController@show_package_table_category');
Route::post('add_package_table_category', 'API\Package_table_categoryAPIController@add_package_table_category');
Route::put('update_package_table_category', 'API\Package_table_categoryAPIController@update_package_table_category');
Route::delete('delete_package_table_category', 'API\Package_table_categoryAPIController@delete_package_table_category');
 
Route::get('package_table_features', 'API\Package_table_featureAPIController@package_table_features');
Route::get('show_package_table_feature', 'API\Package_table_featureAPIController@show_package_table_feature');
Route::post('add_package_table_feature', 'API\Package_table_featureAPIController@add_package_table_feature');
Route::put('update_package_table_feature', 'API\Package_table_featureAPIController@update_package_table_feature');
Route::delete('delete_package_table_feature', 'API\Package_table_featureAPIController@delete_package_table_feature');
 
Route::get('packages', 'API\PackageAPIController@packages');
Route::get('show_package', 'API\PackageAPIController@show_package');
Route::post('add_package', 'API\PackageAPIController@add_package');
Route::put('update_package', 'API\PackageAPIController@update_package');
Route::delete('delete_package', 'API\PackageAPIController@delete_package');
 
Route::get('players', 'API\PlayerAPIController@players');
Route::get('show_player', 'API\PlayerAPIController@show_player');
Route::post('add_player', 'API\PlayerAPIController@add_player');
Route::put('update_player', 'API\PlayerAPIController@update_player');
Route::delete('delete_player', 'API\PlayerAPIController@delete_player');
 
Route::get('post_types', 'API\Post_typeAPIController@post_types');
Route::get('show_post_type', 'API\Post_typeAPIController@show_post_type');
Route::post('add_post_type', 'API\Post_typeAPIController@add_post_type');
Route::put('update_post_type', 'API\Post_typeAPIController@update_post_type');
Route::delete('delete_post_type', 'API\Post_typeAPIController@delete_post_type');
 
Route::get('posts', 'API\PostAPIController@posts');
Route::get('show_post', 'API\PostAPIController@show_post');
Route::post('add_post', 'API\PostAPIController@add_post');
Route::put('update_post', 'API\PostAPIController@update_post');
Route::delete('delete_post', 'API\PostAPIController@delete_post');
 
Route::get('prediction_types', 'API\Prediction_typeAPIController@prediction_types');
Route::get('show_prediction_type', 'API\Prediction_typeAPIController@show_prediction_type');
Route::post('add_prediction_type', 'API\Prediction_typeAPIController@add_prediction_type');
Route::put('update_prediction_type', 'API\Prediction_typeAPIController@update_prediction_type');
Route::delete('delete_prediction_type', 'API\Prediction_typeAPIController@delete_prediction_type');
 
Route::get('predictions', 'API\PredictionAPIController@predictions');
Route::get('show_prediction', 'API\PredictionAPIController@show_prediction');
Route::post('add_prediction', 'API\PredictionAPIController@add_prediction');
Route::put('update_prediction', 'API\PredictionAPIController@update_prediction');
Route::delete('delete_prediction', 'API\PredictionAPIController@delete_prediction');
 
Route::get('quizze_answers', 'API\Quizze_answerAPIController@quizze_answers');
Route::get('show_quizze_answer', 'API\Quizze_answerAPIController@show_quizze_answer');
Route::post('add_quizze_answer', 'API\Quizze_answerAPIController@add_quizze_answer');
Route::put('update_quizze_answer', 'API\Quizze_answerAPIController@update_quizze_answer');
Route::delete('delete_quizze_answer', 'API\Quizze_answerAPIController@delete_quizze_answer');
 
Route::get('quizze_options', 'API\Quizze_optionAPIController@quizze_options');
Route::get('show_quizze_option', 'API\Quizze_optionAPIController@show_quizze_option');
Route::post('add_quizze_option', 'API\Quizze_optionAPIController@add_quizze_option');
Route::put('update_quizze_option', 'API\Quizze_optionAPIController@update_quizze_option');
Route::delete('delete_quizze_option', 'API\Quizze_optionAPIController@delete_quizze_option');
 
Route::get('quizze_question_options', 'API\Quizze_question_optionAPIController@quizze_question_options');
Route::get('show_quizze_question_option', 'API\Quizze_question_optionAPIController@show_quizze_question_option');
Route::post('add_quizze_question_option', 'API\Quizze_question_optionAPIController@add_quizze_question_option');
Route::put('update_quizze_question_option', 'API\Quizze_question_optionAPIController@update_quizze_question_option');
Route::delete('delete_quizze_question_option', 'API\Quizze_question_optionAPIController@delete_quizze_question_option');
 
Route::get('quizze_questions', 'API\Quizze_questionAPIController@quizze_questions');
Route::get('show_quizze_question', 'API\Quizze_questionAPIController@show_quizze_question');
Route::post('add_quizze_question', 'API\Quizze_questionAPIController@add_quizze_question');
Route::put('update_quizze_question', 'API\Quizze_questionAPIController@update_quizze_question');
Route::delete('delete_quizze_question', 'API\Quizze_questionAPIController@delete_quizze_question');
 
Route::get('quizzes', 'API\QuizAPIController@quizzes');
Route::get('show_quiz', 'API\QuizAPIController@show_quiz');
Route::post('add_quiz', 'API\QuizAPIController@add_quiz');
Route::put('update_quiz', 'API\QuizAPIController@update_quiz');
Route::delete('delete_quiz', 'API\QuizAPIController@delete_quiz');
 
Route::get('representatives', 'API\RepresentativeAPIController@representatives');
Route::get('show_representative', 'API\RepresentativeAPIController@show_representative');
Route::post('add_representative', 'API\RepresentativeAPIController@add_representative');
Route::put('update_representative', 'API\RepresentativeAPIController@update_representative');
Route::delete('delete_representative', 'API\RepresentativeAPIController@delete_representative');
 
Route::get('settings', 'API\SettingAPIController@settings');
Route::get('show_setting', 'API\SettingAPIController@show_setting');
Route::post('add_setting', 'API\SettingAPIController@add_setting');
Route::put('update_setting', 'API\SettingAPIController@update_setting');
Route::delete('delete_setting', 'API\SettingAPIController@delete_setting');
 
Route::get('shop_categories', 'API\Shop_categoryAPIController@shop_categories');
Route::get('show_shop_category', 'API\Shop_categoryAPIController@show_shop_category');
Route::post('add_shop_category', 'API\Shop_categoryAPIController@add_shop_category');
Route::put('update_shop_category', 'API\Shop_categoryAPIController@update_shop_category');
Route::delete('delete_shop_category', 'API\Shop_categoryAPIController@delete_shop_category');
 
Route::get('shop_coupon_codes', 'API\Shop_coupon_codeAPIController@shop_coupon_codes');
Route::get('show_shop_coupon_code', 'API\Shop_coupon_codeAPIController@show_shop_coupon_code');
Route::post('add_shop_coupon_code', 'API\Shop_coupon_codeAPIController@add_shop_coupon_code');
Route::put('update_shop_coupon_code', 'API\Shop_coupon_codeAPIController@update_shop_coupon_code');
Route::delete('delete_shop_coupon_code', 'API\Shop_coupon_codeAPIController@delete_shop_coupon_code');
 
Route::get('shop_order_details', 'API\Shop_order_detailAPIController@shop_order_details');
Route::get('show_shop_order_detail', 'API\Shop_order_detailAPIController@show_shop_order_detail');
Route::post('add_shop_order_detail', 'API\Shop_order_detailAPIController@add_shop_order_detail');
Route::put('update_shop_order_detail', 'API\Shop_order_detailAPIController@update_shop_order_detail');
Route::delete('delete_shop_order_detail', 'API\Shop_order_detailAPIController@delete_shop_order_detail');
 
Route::get('shop_order_statuses', 'API\Shop_order_statusAPIController@shop_order_statuses');
Route::get('show_shop_order_status', 'API\Shop_order_statusAPIController@show_shop_order_status');
Route::post('add_shop_order_status', 'API\Shop_order_statusAPIController@add_shop_order_status');
Route::put('update_shop_order_status', 'API\Shop_order_statusAPIController@update_shop_order_status');
Route::delete('delete_shop_order_status', 'API\Shop_order_statusAPIController@delete_shop_order_status');
 
Route::get('shop_orders', 'API\Shop_orderAPIController@shop_orders');
Route::get('show_shop_order', 'API\Shop_orderAPIController@show_shop_order');
Route::post('add_shop_order', 'API\Shop_orderAPIController@add_shop_order');
Route::put('update_shop_order', 'API\Shop_orderAPIController@update_shop_order');
Route::delete('delete_shop_order', 'API\Shop_orderAPIController@delete_shop_order');
 
Route::get('shop_product_images', 'API\Shop_product_imageAPIController@shop_product_images');
Route::get('show_shop_product_image', 'API\Shop_product_imageAPIController@show_shop_product_image');
Route::post('add_shop_product_image', 'API\Shop_product_imageAPIController@add_shop_product_image');
Route::put('update_shop_product_image', 'API\Shop_product_imageAPIController@update_shop_product_image');
Route::delete('delete_shop_product_image', 'API\Shop_product_imageAPIController@delete_shop_product_image');
 
Route::get('shop_products', 'API\Shop_productAPIController@shop_products');
Route::get('show_shop_product', 'API\Shop_productAPIController@show_shop_product');
Route::post('add_shop_product', 'API\Shop_productAPIController@add_shop_product');
Route::put('update_shop_product', 'API\Shop_productAPIController@update_shop_product');
Route::delete('delete_shop_product', 'API\Shop_productAPIController@delete_shop_product');
 
Route::get('social_media', 'API\Social_mediaAPIController@social_media');
Route::get('show_social_media', 'API\Social_mediaAPIController@show_social_media');
Route::post('add_social_media', 'API\Social_mediaAPIController@add_social_media');
Route::put('update_social_media', 'API\Social_mediaAPIController@update_social_media');
Route::delete('delete_social_media', 'API\Social_mediaAPIController@delete_social_media');
 
Route::get('social_media_links', 'API\Social_media_linkAPIController@social_media_links');
Route::get('show_social_media_link', 'API\Social_media_linkAPIController@show_social_media_link');
Route::post('add_social_media_link', 'API\Social_media_linkAPIController@add_social_media_link');
Route::put('update_social_media_link', 'API\Social_media_linkAPIController@update_social_media_link');
Route::delete('delete_social_media_link', 'API\Social_media_linkAPIController@delete_social_media_link');
 
Route::get('sponsor_types', 'API\Sponsor_typeAPIController@sponsor_types');
Route::get('show_sponsor_type', 'API\Sponsor_typeAPIController@show_sponsor_type');
Route::post('add_sponsor_type', 'API\Sponsor_typeAPIController@add_sponsor_type');
Route::put('update_sponsor_type', 'API\Sponsor_typeAPIController@update_sponsor_type');
Route::delete('delete_sponsor_type', 'API\Sponsor_typeAPIController@delete_sponsor_type');
 
Route::get('sponsors', 'API\SponsorAPIController@sponsors');
Route::get('show_sponsor', 'API\SponsorAPIController@show_sponsor');
Route::post('add_sponsor', 'API\SponsorAPIController@add_sponsor');
Route::put('update_sponsor', 'API\SponsorAPIController@update_sponsor');
Route::delete('delete_sponsor', 'API\SponsorAPIController@delete_sponsor');
 
Route::get('subdomains', 'API\SubdomainAPIController@subdomains');
Route::get('show_subdomain', 'API\SubdomainAPIController@show_subdomain');
Route::post('add_subdomain', 'API\SubdomainAPIController@add_subdomain');
Route::put('update_subdomain', 'API\SubdomainAPIController@update_subdomain');
Route::delete('delete_subdomain', 'API\SubdomainAPIController@delete_subdomain');
 
Route::get('tables', 'API\TableAPIController@tables');
Route::get('show_table', 'API\TableAPIController@show_table');
Route::post('add_table', 'API\TableAPIController@add_table');
Route::put('update_table', 'API\TableAPIController@update_table');
Route::delete('delete_table', 'API\TableAPIController@delete_table');
 
Route::get('testimonials', 'API\TestimonialAPIController@testimonials');
Route::get('show_testimonial', 'API\TestimonialAPIController@show_testimonial');
Route::post('add_testimonial', 'API\TestimonialAPIController@add_testimonial');
Route::put('update_testimonial', 'API\TestimonialAPIController@update_testimonial');
Route::delete('delete_testimonial', 'API\TestimonialAPIController@delete_testimonial');
 
Route::get('tickets', 'API\TicketAPIController@tickets');
Route::get('show_ticket', 'API\TicketAPIController@show_ticket');
Route::post('add_ticket', 'API\TicketAPIController@add_ticket');
Route::put('update_ticket', 'API\TicketAPIController@update_ticket');
Route::delete('delete_ticket', 'API\TicketAPIController@delete_ticket');
 
Route::get('user_types', 'API\User_typeAPIController@user_types');
Route::get('show_user_type', 'API\User_typeAPIController@show_user_type');
Route::post('add_user_type', 'API\User_typeAPIController@add_user_type');
Route::put('update_user_type', 'API\User_typeAPIController@update_user_type');
Route::delete('delete_user_type', 'API\User_typeAPIController@delete_user_type');
 
Route::get('users', 'API\UserAPIController@users');
Route::get('show_user', 'API\UserAPIController@show_user');
Route::post('add_user', 'API\UserAPIController@add_user');
Route::put('update_user', 'API\UserAPIController@update_user');
Route::delete('delete_user', 'API\UserAPIController@delete_user');
 
Route::get('send_otp', 'API\UserAPIController@send_otp');
Route::get('check_otp', 'API\UserAPIController@check_otp');

Route::get('vote_answers', 'API\Vote_answerAPIController@vote_answers');
Route::get('show_vote_answer', 'API\Vote_answerAPIController@show_vote_answer');
Route::post('add_vote_answer', 'API\Vote_answerAPIController@add_vote_answer');
Route::put('update_vote_answer', 'API\Vote_answerAPIController@update_vote_answer');
Route::delete('delete_vote_answer', 'API\Vote_answerAPIController@delete_vote_answer');
 
Route::get('vote_options', 'API\Vote_optionAPIController@vote_options');
Route::get('show_vote_option', 'API\Vote_optionAPIController@show_vote_option');
Route::post('add_vote_option', 'API\Vote_optionAPIController@add_vote_option');
Route::put('update_vote_option', 'API\Vote_optionAPIController@update_vote_option');
Route::delete('delete_vote_option', 'API\Vote_optionAPIController@delete_vote_option');
 
Route::get('vote_question_options', 'API\Vote_question_optionAPIController@vote_question_options');
Route::get('show_vote_question_option', 'API\Vote_question_optionAPIController@show_vote_question_option');
Route::post('add_vote_question_option', 'API\Vote_question_optionAPIController@add_vote_question_option');
Route::put('update_vote_question_option', 'API\Vote_question_optionAPIController@update_vote_question_option');
Route::delete('delete_vote_question_option', 'API\Vote_question_optionAPIController@delete_vote_question_option');
 
Route::get('vote_questions', 'API\Vote_questionAPIController@vote_questions');
Route::get('show_vote_question', 'API\Vote_questionAPIController@show_vote_question');
Route::post('add_vote_question', 'API\Vote_questionAPIController@add_vote_question');
Route::put('update_vote_question', 'API\Vote_questionAPIController@update_vote_question');
Route::delete('delete_vote_question', 'API\Vote_questionAPIController@delete_vote_question');
 
Route::get('vote_statuses', 'API\Vote_statusAPIController@vote_statuses');
Route::get('show_vote_status', 'API\Vote_statusAPIController@show_vote_status');
Route::post('add_vote_status', 'API\Vote_statusAPIController@add_vote_status');
Route::put('update_vote_status', 'API\Vote_statusAPIController@update_vote_status');
Route::delete('delete_vote_status', 'API\Vote_statusAPIController@delete_vote_status');
 
Route::get('votes', 'API\VoteAPIController@votes');
Route::get('show_vote', 'API\VoteAPIController@show_vote');
Route::post('add_vote', 'API\VoteAPIController@add_vote');
Route::put('update_vote', 'API\VoteAPIController@update_vote');
Route::delete('delete_vote', 'API\VoteAPIController@delete_vote');
 
