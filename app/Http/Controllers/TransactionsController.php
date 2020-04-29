<?php

namespace App\Http\Controllers;

use App\Helpers\TransactionsConf;
use App\Models\TransactionsModel;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Http;

class TransactionsController extends Controller
{
    public $transactions;
    protected $siteConfigUrl;

    public function __construct(TransactionsConf $transactionsConf)
    {
        $this->transactions = $transactionsConf;
        $this->siteConfigUrl = config('services.interactive.path');
    }

    public function index(Request $request){

        $listAllTransactions = Http::get($this->siteConfigUrl . $this->transactions->getEndpoint())->json();

        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        $transactionCollection = collect($listAllTransactions);

        $perPage = 6;

        $currentPageItems = $transactionCollection->slice(($currentPage * $perPage) - $perPage, $perPage)->all();

        $paginatedItems = new LengthAwarePaginator($currentPageItems, count($transactionCollection), $perPage);

        $paginatedItems->setPath($request->url());

        return view('transactions.index', [
            'listAllTransactions' => $paginatedItems
        ]);
    }

    public function createTransaction(TransactionsModel $transactionsModel, Request $request) {

        $create = Http::post($this->siteConfigUrl, [
            $transactionsModel->amount => $request->input('amount'),
            $transactionsModel->description => $request->input('description')
        ]);
        return view('transactions.create', ['create' => $create]);
    }

    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function requestPerson(Request $request){
        $clientRequest = Http::post($this->siteConfigUrl . $this->transactions->getEndpoint(), [
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'id_number' => $request->input('id_number')
        ]);
        return view('transactions.success', [ 'clientRequest' => $clientRequest ]);
    }
}
