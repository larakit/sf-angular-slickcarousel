<?php
/**
 * Created by PhpStorm.
 * User: aberdnikov
 * Date: 04.07.2017
 * Time: 20:12
 */

\Larakit\StaticFiles\Manager::package('larakit/sf-angular-slickcarousel')
                            ->usePackage('larakit/sf-angular')
                            ->usePackage('larakit/sf-slickcarousel')
                            ->setSourceDir('public')
                            ->jsPackage('angular-slick.js')
;

\Larakit\NgAdminlte\LkNg::moduleRegister('slickCarousel');

\Larakit\StaticFiles\Manager::package('larakit')
                            ->usePackage('larakit/sf-angular-slickcarousel')
;