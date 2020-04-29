<?php

namespace App\Http\Controllers;

use App\Helpers\AccountsConf;
use App\Models\AccountsModel;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class AccountsController extends Controller
{
    public $accounts;
    protected $siteConfigUrl;

    /**
     * AccountsController constructor.
     * @param AccountsConf $accountsConf
     */
    public function __construct(AccountsConf $accountsConf)
    {
        $this->accounts = $accountsConf;
        $this->siteConfigUrl = config('services.interactive.path');
    }

    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function Index(Request $request){
        $listAllAccounts = Http::get($this->siteConfigUrl . $this->accounts->getEndpoint())->json();

        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        $accountCollection = collect($listAllAccounts);

        $perPage = 9;

        $currentPageItems = $accountCollection->slice(($currentPage * $perPage) - $perPage, $perPage)->all();

        $paginatedItems = new LengthAwarePaginator($currentPageItems, count($accountCollection), $perPage);

        $paginatedItems->setPath($request->url());

        /**
         * Search Account by Id Number by @Param("value")
         *
         *
         */

        $searchAccountsByIdNumber = Http::get( $this->siteConfigUrl . $this->accounts->getIdKey())->json();

        $listAccountsByAccountNumber = Http::get($this->siteConfigUrl)->json();

        return view('accounts.index', [
            'listAllAccounts' => $paginatedItems,
            'listAccountsByIdNumber' => $searchAccountsByIdNumber,
            'listAccountsByAccountNumber' => $listAccountsByAccountNumber
        ]);
    }

    public function createAccount() {
        return view('accounts.create');
    }

    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function storeAccount(Request $request) {
        $clientRequest = Http::post($this->siteConfigUrl . $this->accounts->getEndpoint(), [
            'amount' => $request->input('amount'),
            'outstanding_balance' => $request->input('outstanding_balance')
        ]);

        return view('accounts.success', [ 'clientRequest' => $clientRequest ]);
    }

}
