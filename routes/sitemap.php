<?php
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;

Route::get('generate-sitemap',function(){

Sitemap::create()
    ->add(
        Url::create('https://surkhetsoft.com/')
            ->setLastModificationDate(Carbon::yesterday())
            ->setPriority(1.0)
    )
    ->add(
        Url::create('https://surkhetsoft.com/collaboration')
            ->setLastModificationDate(Carbon::now())
            ->setPriority(1.0)
    )
     ->add(
        Url::create('https://https://surkhetsoft.com/our-team')
            ->setLastModificationDate(Carbon::now())
            ->setPriority(0.8)
    )
     ->add(
        Url::create('https://surkhetsoft.com/strategy')
            ->setLastModificationDate(Carbon::now())
            ->setPriority(0.8)
    )
     ->add(
        Url::create('https://surkhetsoft.com/brands-development')
            ->setLastModificationDate(Carbon::now())
            ->setPriority(0.8)
    )
     ->add(
        Url::create('https://surkhetsoft.com/print-design')
            ->setLastModificationDate(Carbon::now())
            ->setPriority(0.8)
    )
     ->add(
        Url::create('https://surkhetsoft.com/content-production')
            ->setLastModificationDate(Carbon::now())
            ->setPriority(0.8)
    )
     ->add(
        Url::create('https://surkhetsoft.com/marketing')
            ->setLastModificationDate(Carbon::now())
            ->setPriority(0.8)
    )
     ->add(
        Url::create('https://surkhetsoft.com/development')
            ->setLastModificationDate(Carbon::now())
            ->setPriority(0.8)
    )
     ->add(
        Url::create('https://surkhetsoft.com/ai-automation')
            ->setLastModificationDate(Carbon::now())
            ->setPriority(0.8)
    )
    ->writeToFile(public_path('sitemap.xml'));
});