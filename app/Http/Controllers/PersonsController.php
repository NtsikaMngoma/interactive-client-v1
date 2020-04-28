<?php

namespace App\Http\Controllers;

use App\Helpers\PersonsConf;
use App\Models\PersonsModel;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class PersonsController extends Controller
{
    public $persons;
    protected $siteConfigUrl;

    public function __construct(PersonsConf $personsConf)
    {
        $this->persons = $personsConf;
        $this->siteConfigUrl = config('services.interactive.path');
    }

    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function index(Request $request){

        $listAllPersons = Http::get($this->siteConfigUrl . $this->persons->getEndpoint())->json();

        $currentPage= LengthAwarePaginator::resolveCurrentPage();
        $personCollection = collect($listAllPersons);
        $perPage = 8;
        $currentPageItems = $personCollection->slice(($currentPage * $perPage) - $perPage, $perPage)->all();
        $paginatedPersonItems = new LengthAwarePaginator($currentPageItems, count($personCollection), $perPage);
        $paginatedPersonItems->setPath($request->url());

        /**
         *
         * Get Person By their id_number @PathVariable
         * .e.g: endpoint: server_url/persons/id_number
         *
         */
        $listPersonByIdNumber = Http::get($this->siteConfigUrl . '')->json();


        /**
         * Get Person by their account_number @Param from endpoint
         * using search and filter,
         * e.g. endpoint: server_url/persons/acc_key?account_number=account_number
         *
         */

        $searchPersonByAccountNumber = Http::get($this->siteConfigUrl . '')->json();

        /**
         * Get Person by their account_number @Param from endpoint
         * using search and filter,
         * e.g. endpoint: server_url/persons/name?name=search_name
         *
         */

        $searchPersonByFirstName = Http::get($this->siteConfigUrl . '')->json();

        /**
         * Get Person by their account_number @Param from endpoint
         * using search and filter,
         * e.g. endpoint: server_url/persons/s_name?name=search_surname
         *
         */

        $searchPersonBySurname = Http::get($this->siteConfigUrl . '')->json();

        return view('persons.index', ['listAllPersons' => $paginatedPersonItems]);
    }

    /**
     * @param PersonsModel $personsModel
     * @param Request $request
     * @return Application|Factory|View
     */
    public function createPerson(PersonsModel $personsModel, Request $request){
        $createPerson = Http::post($this->siteConfigUrl, [
            $personsModel->firstName => $request->input('first_name'),
            $personsModel->surname => $request->input('surname'),
            $personsModel->idNumber => $request->input('id_number')
        ]);

//        dd($createPerson);
        return view('persons.create', ['createPerson' => $createPerson]);
    }

//    public function removePerson(Request $request){
//        $removePerson = Http::delete($this->siteConfigUrl . $this->persons);
//    }
}
