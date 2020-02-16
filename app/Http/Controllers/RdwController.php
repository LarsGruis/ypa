<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Carbon\Carbon;

class RdwController extends Controller
{
    /**
     * @var GuzzleHttp\Client $client
     */
    private $client;

    public function __construct(Request $request)
    {
        $this->client = new Client(['http_errors' => false]);
    }

    public function getAllCars()
    {
        $request = $this->client->get(env('RDW_API_URL'));
        $response = $request->getBody()->getContents();

        dd(json_decode($response,true));
    }

    public function getCarsDetail(string $id)
    {
        $request = $this->client->get(env('RDW_API_URL'));
        $response = $request->getBody()->getContents();
        $data = json_decode($response,true);

        $newId = $id - 2;

        Carbon::now()->format('DD-MM-YYYY');
    
        return view('table.detail', [
            'data' =>  $data[$newId]
        ]);
    }
    
    public function getCars(string $brand)
    {
        $request = $this->client->get(env('RDW_API_URL') . '?merk=' .  strtoupper($brand));
        $response = $request->getBody()->getContents();
        $output = json_decode($response, true);

        $output = array_slice($output, 0, 10);
        dd($output);

        return view('table.carsbrand', [
            'autos' => $output,
            'brand' => $brand
        ]);
    }
    
    public function getCarsByDate($date)
    {
        $request = $this->client->get(env('RDW_API_URL') . '?datum_tenaamstelling=' .  $date);
        $response = $request->getBody()->getContents();
        $output = json_decode($response, true);

        //$output = array_slice($output, 0, 10);
    
        return view('table.carsdate', [
            'autos' => $output,
            'datum' => $date
        ]);
    }

    public function getTenCars()
    {
        $allCars = $this->client->get(env('RDW_API_URL'));
        $response = $allCars->getBody()->getContents();
        $data = json_decode($response,true);
        $array = [];

        for ($i = 0; $i < 10; $i++) {
            $array[] = $data[$i];
        }

        return view('table.tencars', ['data' => $array]);
    }
}
