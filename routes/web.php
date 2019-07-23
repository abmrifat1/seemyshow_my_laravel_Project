<?php

Route::get('/api/ticket', function() {
    // If the Content-Type and Accept headers are set to 'application/json',
    // this will return a JSON structure. This will be cleaned up later.
    return App\Ticket::all();
});

Route::get('/', 'WelcomeController@index');
Route::get('/category', 'WelcomeController@category');
Route::get('/movie-category/{id}', 'WelcomeController@movieCategory');
Route::get('/movie-category-all/{id}', 'WelcomeController@cenemaCategory');
Route::get('/all-category', 'WelcomeController@allCategory');
Route::get('/single-movie/{id}', 'WelcomeController@singleMovie');
Route::get('/contact-us', 'WelcomeController@contactUs');

Route::get('/all-sports', 'WelcomeController@allSports');
Route::get('/sports-category/{id}', 'WelcomeController@sportsCategory');
Route::get('/single-sports/{id}', 'WelcomeController@singleSports');


Route::get('/all-offer', 'WelcomeController@allOffer');

Route::post('/search', 'WelcomeController@search');

Route::post('/comment','WelcomeController@customerComment');







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/add-category', 'CategoryController@addCategory');
Route::post('/new-category', 'CategoryController@saveCategoryInfo');
Route::get('/manage-category', 'CategoryController@manageCategoryInfo');
Route::get('/unpublished-category/{id}', 'CategoryController@unpublishedCategoryInfo');
Route::get('/published-category/{id}', 'CategoryController@publishedCategoryInfo');
Route::get('/edit-category/{id}', 'CategoryController@editCategoryInfo');
Route::post('/update-category', 'CategoryController@updateCategoryInfo');
Route::get('/delete-category/{id}', 'CategoryController@deleteCategoryInfo');

Route::get('/add-shift', 'TicketShiftController@addShift');
Route::post('/new-shift', 'TicketShiftController@saveShift');
Route::get('/manage-shift', 'TicketShiftController@manageShiftInfo');
Route::get('/unpublished-shift/{id}', 'TicketShiftController@unpublishedShiftInfo');
Route::get('/published-shift/{id}', 'TicketShiftController@publishedShiftInfo');
Route::get('/edit-shift/{id}', 'TicketShiftController@editShiftInfo');
Route::post('/update-shift', 'TicketShiftController@updateShiftInfo');
Route::get('/delete-shift/{id}', 'TicketShiftController@deleteShiftInfo');


Route::get('/add-seat', 'TicketStatusController@addSeat');
Route::post('/new-seat', 'TicketStatusController@saveSeat');
Route::get('/manage-seat', 'TicketStatusController@manageSeatInfo');
Route::get('/unpublished-seat/{id}', 'TicketStatusController@unpublishedSeatInfo');
Route::get('/published-seat/{id}', 'TicketStatusController@publishedSeatInfo');
Route::get('/delete-seat/{id}', 'TicketStatusController@deleteSeatInfo');




Route::get('/add-showing', 'ShowingController@addShowing');
Route::post('/new-showing', 'ShowingController@saveShowingInfo');
Route::get('/manage-showing', 'ShowingController@manageShowingInfo');
Route::get('/unpublished-showing/{id}', 'ShowingController@unpublishedShowingInfo');
Route::get('/published-showing/{id}', 'ShowingController@publishedShowingInfo');
Route::get('/edit-category/{id}', 'CategoryController@editCategoryInfo');
Route::post('/update-category', 'CategoryController@updateCategoryInfo');
Route::get('/delete-category/{id}', 'CategoryController@deleteCategoryInfo');


Route::get('/add-faq', 'FaqController@addFaq');
Route::post('/new-faq', 'FaqController@saveFaqInfo');
Route::get('/manage-faq', 'FaqController@manageFaqInfo');
Route::get('/unpublished-faq/{id}', 'FaqController@unpublishedFaqInfo');
Route::get('/published-faq/{id}', 'FaqController@publishedFaqInfo');
Route::get('/edit-faq/{id}', 'FaqController@editFaqInfo');
Route::post('/update-faq', 'FaqController@updateFaqInfo');
Route::get('/delete-faq/{id}', 'FaqController@deleteFaqInfo');



Route::post('/customer-sms', 'ContactController@saveCustomerSms');
Route::get('/manage-message', 'ContactController@manageCustomerSms');
Route::get('/edit-sms-info/{id}', 'ContactController@editCustomerSms');
Route::post('/update-sms', 'ContactController@updateCustomerSms');
Route::get('/delete-sms-info/{id}', 'ContactController@deleteCustomerSms');

Route::get('/show-customer', 'CustomerController@showCustomerInfo');
Route::get('/delete-customer/{id}', 'CustomerController@deleteCustomerInfo');



Route::get('/add-movie-hall', 'MovieHallController@addMovieHall');
Route::post('/new-movie-hall', 'MovieHallController@saveMovieHallInfo');
Route::get('/manage-movie-hall', 'MovieHallController@manageMovieHallInfo');
Route::get('/unpublished-place/{id}', 'MovieHallController@unpublishMovieHallInfo');
Route::get('/published-place/{id}', 'MovieHallController@publishedMovieHallInfo');
Route::get('/edit-place/{id}', 'MovieHallController@editPlaceInfo');
Route::post('/update-place', 'MovieHallController@updatePlaceInfo');
Route::get('/delete-place/{id}', 'MovieHallController@deletePlaceInfo');




Route::get('/add-movie', 'MovieController@addMovie');
Route::post('/new-movie', 'MovieController@saveMovieInfo');
Route::get('/manage-movie', 'MovieController@manageMovieInfo');
Route::get('/unpublished-show/{id}', 'MovieController@unpublishMovieInfo');
Route::get('/published-show/{id}', 'MovieController@publishedMovieInfo');
Route::get('/edit-show/{id}', 'MovieController@editShowInfo');
Route::post('/update-movie', 'MovieController@updateShowInfo');
Route::get('/delete-show/{id}', 'MovieController@deleteShowInfo');






Route::get('/add-news', 'NewsController@addNews');
Route::post('/new-news', 'NewsController@saveNewsInfo');
Route::get('/manage-news', 'NewsController@manageNewsInfo');
Route::get('/unpublished-news/{id}', 'NewsController@unpublishNewsInfo');
Route::get('/published-news/{id}', 'NewsController@publishedNewsInfo');
Route::get('/edit-news/{id}', 'NewsController@editNewsInfo');
Route::post('/update-news', 'NewsController@updateNewsInfo');
Route::get('/delete-news/{id}', 'NewsController@deleteNewsInfo');



Route::get('/add-offer', 'OfferController@addOffer');
Route::post('/new-offer', 'OfferController@saveOfferInfo');
Route::get('/manage-offer', 'OfferController@manageOfferInfo');
Route::get('/unpublished-offer/{id}', 'OfferController@unpublishedOfferInfo');
Route::get('/published-offer/{id}', 'OfferController@publishedOfferInfo');
Route::get('/edit-offer/{id}', 'OfferController@editOfferInfo');
Route::post('/update-offer', 'OfferController@updateOfferInfo');
Route::get('/delete-offer/{id}', 'OfferController@deleteOfferInfo');


Route::get('/add-sport', 'SportsController@addSports');
Route::post('/new-sports', 'SportsController@saveSports');
Route::get('/manage-sport', 'SportsController@manageSports');
Route::get('/unpublished-sport/{id}', 'SportsController@unpublishedsportInfo');
Route::get('/published-sport/{id}', 'SportsController@publishedsportInfo');
Route::get('/edit-sport/{id}', 'SportsController@editsportInfo');
Route::post('/update-sport', 'SportsController@updatesportInfo');
Route::get('/delete-sport/{id}', 'SportsController@deletesportInfo');


Route::get('/add-stadium', 'StadiumController@addStadium');
Route::post('/new-stadium', 'StadiumController@saveStadium');
Route::get('/single-stadium/{id}', 'StadiumController@singleStadium');





Route::get('/add-match', 'MatchController@addmatch');
Route::post('/new-match', 'MatchController@saveMatchInfo');

Route::get('/single-concert', 'MatchController@singleConcert');

Route::get('/all-hall', 'MovieHallController@allHall');
Route::get('/single-hall/{id}', 'MovieHallController@singleHall');

Route::get('/all-news', 'NewsController@allNews');
Route::get('/single-news/{id}', 'NewsController@News_details');


Route::get('/manage-ticket/{id}', 'TicketController@manageTicket');

Route::get('/add-ticket/{id}', 'TicketController@addTicket');
Route::post('/new-ticket', 'TicketController@saveTicketInfo');
Route::get('/edit-ticket/{id}', 'TicketController@editTicketInfo');
Route::post('/update-ticket', 'TicketController@updateTicketInfo');
Route::get('/delete-ticket/{id}', 'TicketController@deleteTicketInfo');

Route::get('/book-ticket1/{id}', 'TicketController@bookTicket1');

Route::post('/hall-ticket', 'CartController@hallTicketInfo');
Route::post('/date-ticket', 'CartController@dateTicketInfo');
Route::post('/slote-ticket', 'CartController@sloteTicketInfo');
Route::post('/seat-ticket', 'CartController@seatTicketInfo');
Route::post('/final-ticket', 'CartController@finalTicketInfo');
Route::get('/sit', 'CartController@sitInfo');

Route::post('/final-ticket-foo', 'CartController@finalTicketInfoFoo');


//Route::get('/show-cart', 'CartController@showCart');
Route::post('/update-cart-product', 'CartController@updateCart');
Route::get('/delete-cart-product/{id}', 'CartController@deleteCart');

Route::get('/checkout', 'CheckoutController@index');


Route::post('/new-customer', 'CheckoutController@saveCustomerInfo');
Route::post('/customer-login', 'CheckoutController@CustomerLogin');
Route::get('/customer_logout', 'CheckoutController@CustomerLogout');

Route::get('/home-new-customer', 'CheckoutController@homeNewCustomer');
Route::post('/home-customer-login', 'CheckoutController@homeCustomerLogin');
Route::post('/home-new-customer', 'CheckoutController@saveHomeCustomerInfo');


Route::get('/gallery_page', 'WelcomeController@ShowGallery');


Route::get('/shipping-info', 'CheckoutController@showShippingInfo');
Route::post('/new-shipping', 'CheckoutController@saveShippingInfo');
Route::get('/payment-info', 'CheckoutController@showPaymentInfo');
Route::get('/cancel-ticket', 'CheckoutController@cancelTicket');

Route::get('/verify_customer', 'CheckoutController@verifyCustomerInfo');

Route::post('/customer-seat', 'CheckoutController@ticketNumber');

Route::get('/cash-in-delivery', 'CheckoutController@saveCaskOrderInfo');
Route::get('/bkash', 'CheckoutController@saveBkashOrderInfo');
Route::post('/bkash-id', 'CheckoutController@saveBkashId');
Route::get('/view-bkash', 'BkashController@viewBkash');
Route::get('/delete-bkash/{id}', 'BkashController@deleteBkash');

Route::get('/order_info', 'OrderController@showOrderInfo');
Route::get('/view-order-details/{id}', 'OrderController@viewOrderDetails');
Route::get('/view-order-invoice/{id}', 'OrderController@viewOrderInvoice');
Route::get('/edit-order/{id}', 'OrderController@editOrderDetails');
Route::post('/update-order', 'OrderController@updateOrderDetails');
Route::get('/delete-order/{id}', 'OrderController@deleteOrdedetails');
Route::get('/download-invoice/{id}', 'OrderController@downloadOrderInvoice');
Route::get('/pdf', 'OrderController@myPdf');

Route::get('/customer_profile','CustomerController@profile');
Route::get('/email/verify/{verification_code}','CustomerController@verify');
Route::get('/email/verify-new/{verification_code}','CustomerController@verifyNew');

Route::get('/verify','CustomerController@verifyMessage');

Route::get('{path}',"WelcomeController@error")->where( 'path', '([A-z\d-\/_.]+)?' );













