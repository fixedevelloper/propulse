<?php


namespace App\Services;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class FootballAPIService
{

    /**
     * @throws GuzzleException
     */
    static function getLeagues(){
        $options=[
            'x-rapidapi-host' => 'api-football-v1.p.rapidapi.com',
            'x-rapidapi-key' => env("APIFOOT_KEY")
        ];
        $client = new Client(['headers' => $options]);
        $res = $client->request('GET', env("APIFOOT_KEY_URL").'/leagues');
        return json_decode($res->getBody());
    }

    /**
     * @param $league
     * @param $season
     * @return mixed
     * @throws GuzzleException
     */
    static function getTeams($league,$season){
        $options=[
            'x-rapidapi-host' => 'api-football-v1.p.rapidapi.com',
            'x-rapidapi-key' => env("APIFOOT_KEY")
        ];
        $client = new Client(['headers' => $options]);
        $res = $client->request('GET', env("APIFOOT_KEY_URL").'/teams',
            ['query' => [ 'league' => $league,'season'=>$season]]);
        return json_decode($res->getBody());
    }
    /**
     * @throws GuzzleException
     */
    static function getCountries(){
        $options=[
            'x-rapidapi-host' => 'api-football-v1.p.rapidapi.com',
            'x-rapidapi-key' => env("APIFOOT_KEY")
        ];
        $client = new Client(['headers' => $options]);
        $res = $client->request('GET', env("APIFOOT_KEY_URL").'/countries');
        return json_decode($res->getBody());
    }

    /**
     * @param $from
     * @param $to
     * @return mixed
     * @throws GuzzleException
     */
    static function getAllFixturesBetweenDate($from,$to){
        $options=[
            'x-rapidapi-host' => 'api-football-v1.p.rapidapi.com',
            'x-rapidapi-key' => env("APIFOOT_KEY")
        ];
        $client = new Client(['headers' => $options]);
        $res = $client->request('GET', env("APIFOOT_KEY_URL").'/fixtures',
            ['query' => ['season' => '2023', "from"=> $from,'to' => $to]]);
        return json_decode($res->getBody());
    }
    static function getAllFixturesBetweenDateWithLeague($league,$from,$to){
        $options=[
            'x-rapidapi-host' => 'api-football-v1.p.rapidapi.com',
            'x-rapidapi-key' => env("APIFOOT_KEY")
        ];
        $client = new Client(['headers' => $options]);
        $res = $client->request('GET', env("APIFOOT_KEY_URL").'/fixtures',
            ['query' => [ "league"=> $league,'season' => '2023', "from"=> $from,'to' => $to]]);
        return json_decode($res->getBody());
    }

    /**
     * @param $fixture
     * @return mixed
     * @throws GuzzleException
     */
    static function getAllBetOddvalue1xbet($fixture){
        $options=[
            'x-rapidapi-host' => 'api-football-v1.p.rapidapi.com',
            'x-rapidapi-key' => env("APIFOOT_KEY")
        ];
        $client = new Client(['headers' => $options]);
        $res = $client->request('GET', env("APIFOOT_KEY_URL").'/odds',
            ['query' => [ 'fixture' => $fixture,'bookmaker'=>11,'bet'=>1]]);
        return json_decode($res->getBody());
    }
    static function getAllBetOddvalue1xbetAll($fixture){
        $options=[
            'x-rapidapi-host' => 'api-football-v1.p.rapidapi.com',
            'x-rapidapi-key' => env("APIFOOT_KEY")
        ];
        $client = new Client(['headers' => $options]);
        $res = $client->request('GET', env("APIFOOT_KEY_URL").'/odds',
            ['query' => [ 'fixture' => $fixture,'bookmaker'=>11]]);
        return json_decode($res->getBody());
    }
    static function getAllBetOddvalue1xbetAllByleague($league,$season,$date){
        $options=[
            'x-rapidapi-host' => 'api-football-v1.p.rapidapi.com',
            'x-rapidapi-key' => env("APIFOOT_KEY")
        ];
        $client = new Client(['headers' => $options]);
        $res = $client->request('GET', env("APIFOOT_KEY_URL").'/odds',
            ['query' => [ 'league' => $league,'bookmaker'=>11,'season'=>$season,'date'=>$date]]);
        return json_decode($res->getBody());
    }
    /**
     * @throws GuzzleException
     */
    static function getAllFixtureLivescoreleague($league){
        $options=[
            'x-rapidapi-host' => 'api-football-v1.p.rapidapi.com',
            'x-rapidapi-key' => env("APIFOOT_KEY")
        ];
        $client = new Client(['headers' => $options]);
        $res = $client->request('GET', env("APIFOOT_KEY_URL").'/fixtures',
            ['query' => [ 'live' => 'all','league'=>$league]]);
        return json_decode($res->getBody());
    }
    /**
     * @throws GuzzleException
     */
    static function getAllFixtureLivescore(){
        $options=[
            'x-rapidapi-host' => 'api-football-v1.p.rapidapi.com',
            'x-rapidapi-key' => env("APIFOOT_KEY")
        ];
        $client = new Client(['headers' => $options]);
        $res = $client->request('GET', env("APIFOOT_KEY_URL").'/fixtures',
            ['query' => [ 'live' => 'all','timezone'=>'Europe/London']]);
        return json_decode($res->getBody());
    }
    static function getStatdings($league_id,$season){
        $options=[
            'x-rapidapi-host' => 'api-football-v1.p.rapidapi.com',
            'x-rapidapi-key' => env("APIFOOT_KEY")
        ];
        $client = new Client(['headers' => $options]);
        $res = $client->request('GET', env("APIFOOT_KEY_URL").'/standings',
            ['query' => [ 'league' => $league_id,'season'=>$season]]);
        return json_decode($res->getBody());
    }

}
