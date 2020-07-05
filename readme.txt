php artisan tinker

- use this command to generate the dummy data you set 
factory(App\User::class, 5)->create()

factory(App\Post::class, 100)->create()


-then exit 


to generate data using seed use this command
php artisan db:seed --class=CategoriesTableSeeder

php artisan tinker 

factory(CategoryPost::class, 5)->create()



STEPS:
1. 00:00:07 Project installation
2. 00:00:57 Authentication
3. 00:02:16 Create all tables
4. 00:12:32 Make relationship within all model
5. 00:16:34 Factory and seeder to insert dummy data
6. 00:26:40 Create different routes (Admin and website)
7. 00:30:46 Blade template
8. 00:38:24 Show post data on home page
9. 00:45:52 Post details
10. 00:50:45 Category details 
11. 00:54:41 Admin panel
12. 01:03:07 Category CRUD
13. 01:24:49 Post CRUD
14. 01:41:29 Gallery CRUD
15. 01:53:32 Show page on home page
16. 02:01:00 Contact page



***ROUTES
 1. Create some routes for admin with auth middleware
 2. Some routes for visitors (without auth middleware)

	 // Routes for Website
	Route::get('/',  'WebsiteController@index')->name('index');
	Route::get('category/{slug}',  'WebsiteController@category')->name('category');
	Route::get('post/{slug}',  'WebsiteController@post')->name('post');
	Route::get('page/{slug}',  'WebsiteController@page')->name('page');
	Route::get('contact',  'WebsiteController@showContactForm')->name('contact.show');
	Route::post('contact',  'WebsiteController@submitContactForm')->name('contact.submit');

	// Routes for CMS
	Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
		Route::resource('categories', 'CategoryController');
		Route::resource('posts', 'PostController');
		Route::resource('pages', 'PagesController');
		Route::resource('galleries', 'GalleryController');
	});


** Blog template
 1. Download blog template form: https://startbootstrap.com/themes/clean-blog
 2. copy  css, img, js and vendor directory  to laravel-blog/public/website


 **Blade template of website
 	1. open index.html
 	2. copy all code and paste in  resources/views/website/template/master.blade.php
 	3. change all the links and edit some code
 	4. cut page header and main content and create @yield('content');
 	5. paste in website/index.blade.php in @section('content');
 	6. change background image url 
 	7. add index method  in websiteController 
 	8. time to visit website