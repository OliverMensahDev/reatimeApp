# This is a real time single page forum app.

#Tools
 We are going to use Laravel, Pusher, Vuejs,veutify,JWT and markdown

# What we are going to build
We are going to have a forum which will have a question, reply, category,likes for reply. 
 We will need a user. Which means we need a model migration for these.But laravel has a model for uses which we can take advantage of. 

# Creating models
We can put all our models in  a model folder but leave the user model at it default directory. We can use the command: php artisan make:model Model/Question; which reads create a model with a name called Question in a Model directory.  We can do more fun stuff with the artisan command toolkit. Adding flag to the command can make use create a migration, controllers, resource controllers(controller with crud functionality(index, show, edit, destroy)). To get these flags u can use  php artisan help make:model to get the various options. 

# Question Migration
We have created models, so can create tables for them in our migration files                                                                                                                                                                          