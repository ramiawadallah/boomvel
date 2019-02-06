# boomvel
Laravel CMS

- **Laravel**: 5.6/5.7
- **Author**: Ramiawadallah
- **Author Homepage**: https://ramiawadallah.com



Add this trait on this following path ../vendor/laravel/framework/src/Illuminate/Database/Eloquent/Model.php

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