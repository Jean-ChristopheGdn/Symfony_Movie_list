<?php

namespace App\Controller;

error_reporting(E_ALL);
ini_set('display_errors', true);
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpClient\HttpClient;

class SearchController extends AbstractController
{
    /**
     * @Route("/search", name="search")
     */
    public function index()
    {

      $titles = [];

      $client = HttpClient::create();

      $response = $client->request('GET', 'https://api.themoviedb.org/3/search/movie?api_key=279e70c73121b427dcf04bc30ac9382f&language=en-US&page=1&include_adult=false&query=' . $_POST["keyword"]);

      $content = $response->toArray();

      $movies = $content['results'];
      foreach($movies as $movie) {
        array_push($titles, $movie['title']);
      }

      return $this->render('search/index.html.twig', [
          'controller_name' => 'SearchController',
          'titles' => $titles
      ]);
    }
}
