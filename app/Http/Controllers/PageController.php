<?php

namespace App\Http\Controllers;
use Artesaos\SEOTools\Facades\SEOTools as SEO;

use Illuminate\Http\Request;

class PageController extends Controller
{
   public function about()
{
    SEO::setTitle("À Propos de Castells Inc | Constructeurs de Maisons de Luxe à Montréal");
    SEO::setDescription("Découvrez Castells Inc, une entreprise familiale spécialisée en construction de luxe et rénovation haut de gamme à Montréal.");

    SEO::metatags()->addKeyword([
        'constructeurs Montréal',
        'rénovation maison luxe',
        'entrepreneur général Montréal',
        'entreprise familiale construction',
        'castells inc',
        'bâtiment résidentiel',
    ]);

    SEO::opengraph()->setUrl(url()->current());
    SEO::opengraph()->addImage(asset('img/feature.jpg'));
    SEO::twitter()->setSite('@CastellsInc');
    SEO::jsonLd()->addImage(asset('img/feature.jpg'));

    return view('pages.about');
}

public function services()
{
    SEO::setTitle('Services de Design et Construction de Luxe | Castells Inc. Montréal');
    SEO::setDescription("Découvrez nos services haut de gamme en design d'intérieur, construction et rénovation. Castells Inc. crée des espaces uniques, élégants et sur mesure à Montréal.");
    SEO::opengraph()->setUrl(route('service'));
    SEO::opengraph()->addProperty('type', 'website');
    SEO::opengraph()->addImage(asset('img/feature.jpg'));
    SEO::twitter()->setSite('@castells_inc');
    SEO::twitter()->addImage(asset('img/feature.jpg'));

    return view('pages.service');
}
}
