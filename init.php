<?php
/**
 * Created by PhpStorm.
 * User: aberdnikov
 * Date: 04.07.2017
 * Time: 20:12
 */

\Larakit\StaticFiles\Manager::package('larakit/sf-angular-slickcarousel')
                            ->usePackage('larakit/sf-angular')
                            ->setSourceDir('public')
                            ->jsPackage('angular-slick.min.js')
;

\Larakit\NgAdminlte\LkNg::moduleRegister('slickCarousel');

\Larakit\StaticFiles\Manager::package('larakit')
                            ->usePackage('larakit/sf-angular-slickcarousel')
;