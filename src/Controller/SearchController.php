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
      $client = HttpClient::create();

      $response = $client->request('GET', 'https://api.themoviedb.org/3/search/movie?api_key=279e70c73121b427dcf04bc30ac9382f&language=en-US&page=1&include_adult=false&query=weed');
      // var_dump($response);
      $statusCode = $response->getStatusCode();

      $contentType = $response->getHeaders()['content-type'][0];
      // var_dump($contentType);
      $content = $response->getContent();

      $content = $response->toArray();
      // var_dump($content);

      $movies = $content['results'];
      $titles = [];
      foreach($movies as $movie) {
        array_push($titles, $movie['title']);
      }
      // var_dump($titles);
        return $this->render('search/index.html.twig', [
            'controller_name' => 'SearchController',
            'titles' => $titles
        ]);
    }
}
