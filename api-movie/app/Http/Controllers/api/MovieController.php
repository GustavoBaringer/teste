<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class MovieController extends Controller
{

    private string $url = 'https://api.themoviedb.org/3';
    private string $api_key = '?api_key=1f54bd990f1cdfb230adb312546d765d';

    /**
     * Return a listing of upcoming movies as page param is given.
     *
     * @param Int $page
     * @return \Illuminate\Http\Response
     */
    public function upcoming(int $page = 1)
    {
        $client = new Client();
        $res = $client->request('GET', $this->url . '/movie/upcoming' . $this->api_key . "&page=$page", ['http_errors' => false]);

        if ($res->getStatusCode() == 404) {
            return response('Not Found', 404);
        } elseif ($res->getStatusCode() !== 200) {
            return response('We had an internal problem', 500);
        }

        $data = $this->decode($res->getBody()->getContents());
        return response($data, 200);
    }

    /**
     * Return a listing of top rated movies as page param is given.
     *
     * @param Int $page
     * @return \Illuminate\Http\Response
     */
    public function top_rated(int $page = 1)
    {
        $client = new Client();
        $res = $client->request('GET', $this->url . '/movie/top_rated' . $this->api_key . "&page=$page", ['http_errors' => false]);

        if ($res->getStatusCode() == 404) {
            return response('Not Found', 404);
        } elseif ($res->getStatusCode() !== 200) {
            return response('We had an internal problem', 500);
        }

        $data = $this->decode($res->getBody()->getContents());
        return response($data, 200);
    }

    /**
     * Return a specif movie with related videos as ID param is given.
     *
     * @param Int $id
     * @return \Illuminate\Http\Response
     */
    public function single(int $id)
    {
        if (!$id) {
            return response('The param ID is missing', 422);
        }

        // first request 
        $client = new Client();
        $res = $client->request('GET', $this->url . "/movie/$id" . $this->api_key, ['http_errors' => false]);

        if ($res->getStatusCode() == 404) {
            return response('Not Found', 404);
        } elseif ($res->getStatusCode() !== 200) {
            return response('We had an internal problem', 500);
        }

        $data = $this->decode($res->getBody()->getContents());

        // second request
        $client_related = new Client();
        $res_related = $client_related->request('GET', $this->url . "/movie/$id/videos" . $this->api_key, ['http_errors' => false]);

        if ($res_related->getStatusCode() == 404) {
            return response('Not Found', 404);
        } elseif ($res_related->getStatusCode() !== 200) {
            return response('We had an internal problem', 500);
        }

        $data_related = $this->decode($res_related->getBody()->getContents());

        // collapse both responses 
        $response = array_merge($data, $data_related);
        return $response;
    }

    /**
     * Decode Guzzle/Client reponse.
     * @param int $id
     * @return JSON
     */
    public function Genres(int $id = null)
    {
        $client = new Client();
        $res = $client->request('GET', $this->url . '/genre/movie/list' . $this->api_key, ['http_errors' => false]);

        if ($res->getStatusCode() == 404) {
            return response('Not Found', 404);
        } elseif ($res->getStatusCode() !== 200) {
            return response('We had an internal problem', 500);
        }

        $data = $this->decode($res->getBody()->getContents());

        if ($id) {
            foreach ($data['genres'] as $d) {
                if ($d['id'] === $id) {
                    $data = $d;
                    break;
                } else {
                    $data = 'Not found';
                    break;
                }
            }
        }

        return response($data, 200);
    }

    /**
     * Decode Guzzle/Client reponse.
     *
     * @return JSON
     */
    private function decode($data)
    {
        return json_decode($data, true);
    }
}
