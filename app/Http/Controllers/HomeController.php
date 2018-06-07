<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ButterCMS\ButterCMS;

class HomeController extends Controller
{
    private static $apiToken = '8bc79f9d7b7bf911bba9441970f7d149722d4bff';
    private $client;

    public function __construct() {
        $this->client = new ButterCMS(HomeController::$apiToken);
    }

    public function index() {
        $page = $this->client->fetchPage('*', 'homepage');
        //print_r($page->getField('customer_logos'));die;
        return view('homepage', [
            'seoTitle' => $page->getField('seo_title'),
            'headline' => $page->getField('headline'),
            'heroImage' => $page->getField('hero_image'),
            'callToAction' => $page->getField('call_to_action'),
            'customerLogos' => $page->getField('customer_logos'),
        ]);
    }
}
