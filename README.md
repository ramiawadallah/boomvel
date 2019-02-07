# boomvel
Laravel CMS

- **Laravel**: 5.6/5.7
- **Author**: Ramiawadallah
- **Author Homepage**: https://ramiawadallah.com

```bash
composer require ramiawadallah/boomvel
```

publish vendor 

```bash
         php artisan vendor:publish --force
```

Add this trait on this following path ../vendor/laravel/framework/src/Illuminate/Database/Eloquent/Model.php

```bash

if (trait_exists('App\Relation\RelationMethods')) { 
    trait call_relation_helpers {
        use \App\Relation\RelationMethods; 
        } 
    }else{ 
        trait call_relation_helpers{} 
}


abstract class Model implements ArrayAccess, Arrayable, Jsonable, JsonSerializable, QueueableEntity, UrlRoutable
{
    use call_relation_helpers,
    ......... atc
```

config\app.php  --> providers array

```bash
        Baum\Providers\BaumServiceProvider::class,
        Collective\Html\HtmlServiceProvider::class,
        UxWeb\SweetAlert\SweetAlertServiceProvider::class,
```

  config\app.php  --> aliases array

```bash
        'Up' => App\Http\Controllers\Upload::class,

        'Btn' => App\helpers\Src\Btn::class,
        'bsForm' => App\helpers\Src\bsForm::class,
        'langForm' => App\helpers\Src\langForm::class,
        'MyRoute' => App\helpers\Src\Routes\MyRoute::class,
        'Files' => App\helpers\Src\Files\Files::class,
        'Control' => App\helpers\Src\Control::class,

        'Alert' => UxWeb\SweetAlert\SweetAlert::class,

```

Add Composer autoload 

```bash
		"files":[
            "app/Helpers/HelperValidatesRequest.php",
            "app/Helpers/helpers.php",
            "app/Helpers/routesMethods.php",
            "app/Helpers/functions.php",
            "app/Helpers/Src/bsForm.php",
            "app/Helpers/Src/Btn.php",
            "app/Helpers/Src/Control.php",
            "app/Helpers/Src/langForm.php",
            "app/Relation/RelationMethods.php"
        ],
```


Run migrate

```bash
		php artisan migrate
```

## First Admin

Obviously, first time you need at least one super admin to login with and then create other admins.

```
		php artisan multiauth:seed --role=super
```


Now you can login your admin side by going to https://localhost:8000/admin with creadential of **email = super@admin.com** and **password = secret**
Obviously you can later change these things.

## Register new Admin

To register new use you need to go to https://localhost:8000/admin/register.

Keep in mind that only a Super Admin can create new Admin.

**Changing admin views**

You can Publish package views files and overrides with yours so that you can have views which suits your project design.

```bash
		php artisan vendor:publish --tag="multiauth:views"
```

**Validations**

Yes you can write validation rules to your new columns or change existing validation rules by publishing config file.

```bash
		php artisan vendor:publish --tag="multiauth:config"
```

## Change Prefix

You can change the prefix in your config file you have just published.
With prefix we mean what you want to call your admin side, we call it admin you can call it whatever you want.
Suppose you have changed prefix to 'master' now everywhere instead of 'admin' word, that changed to 'master'

```bash
	<? php
	 /*
	    |--------------------------------------------------------------------------
	    | Prefix
	    |--------------------------------------------------------------------------
	    |
	    | Use prefix to before the routes of multiauth package.
	    | This way you can keep your admin page secure.
	    | Default : admin
	    */
	    'prefix' => 'admin', // can change it to, lets say 'prefix' => 'master'
```

## Create Roles

To create a new role you have two options:

1. Using artisan command

```bash
	php artisan multiauth:role rolename
```

2. Using Interface
   Just go to https://localhost:8000/admin/role.

Now you can click on 'Add Role' button to create new role.

**Edit or Delete Role can also be done with same interface**

## Publish Routes file

```bash
	php artisan vendor:publish --tag="multiauth:routes"
```

## Access Level

**With Middleware**

1. You can use 'role' middleware to allow various admin for accessing certain section according to their role.

```bash
	Route::get('admin/check',function(){
	    return "This route can only be accessed by admin with role of Editor"
	})->middleware('role:editor');
```

Here it does't matter if you give role as uppercase or lowercase or mixed, this package take care of all these.

2. If you want a section to be accessed by only super user then use role:super middleware
   A super admin can access all lower role sections.

```bash
	Route::get('admin/check',function(){
	    return "This route can only be accessed by super admin"
	})->middleware('role:super');
```

**With Blade Syntax**

You can simply use blade syntax for showing or hiding any section for admin with perticular role.
For example, If you want to show a button for admin with role of editor then write.

```bash
	@admin('editor')
	    <button>Only For Editor</button>
	@endadmin
```

If you want to add multiple role, you can do like this

```bash
	@admin('editor,publisher,any_role')
	    <button> This is visible to admin with all these role</button>
	@endadmin
```

## Another Auth

**Apart from Admin section, you can make a another auth**

```bash
	php artisan multiauth:make {guard}
```


**You can rollback this auth also if you want.**

```bash
	php artisan multiauth:rollback {guard}
```


