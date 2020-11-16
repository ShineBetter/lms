@ECHO OFF

doskey pa=php artisan $*
doskey pas=php artisan serve $*
doskey cda=composer dump-autoload $*
doskey mmodel=php artisan make:model $*
doskey mcon=php artisan make:Controller $*
doskey mmigrate=php artisan make:migration $*
doskey caclear=php artisan cache:clear $*
doskey confclear=php artisan config:clear $*
doskey vclear=php artisan view:clear $*
doskey rlist=php artisan route:list $*
doskey pam=php artisan module $*
doskey co=composer $*
doskey cou=composer update $*
doskey gb=git branch $*
doskey gc=git checkout $*
doskey gs=git status $*
doskey ga=git add $*
doskey gcm=git commit $*
doskey gp=git push $*
doskey gpl=git pull $*
doskey gf=git fetch $*
doskey gl=git log $*