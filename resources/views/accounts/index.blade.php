@include('layouts.header')

@include('layouts.navbar')
<section id="section-about" class="no-bg no-top no-bottom">
    <div class="overlay-bg t30">
        <div class="container relative">
            <a href="{{route('account.create')}}">
                <button class="btn btn-success btn-lg pull-right create-button">Create an Account</button>
            </a>
            @include('layouts.search-form')
            <table class="table">
                <thead>
                <tr>
                    <th>Account Number</th>
                    <th>ID Number</th>
                    <th>Full Name</th>
                    <th>Outstanding Balance</th>
                    <th>Account Status</th>
                    <th>Edit Account</th>
                    <th>Close Account</th>
                </tr>
                </thead>

                <tbody>
                @foreach($listAllAccounts as $accounts)
                    <tr>
                        <td>{{$accounts['account_number']}}</td>
                        <td>{{$accounts['persons']['id_number']}}</td>
                        <td>{{$accounts['persons']['name']}}  {{$accounts['persons']['surname']}}</td>
                        <td>R {{number_format($accounts['outstanding_balance'], 2)}}</td>
                        <td>@if($accounts['outstanding_balance'] == 0)
                                <b style="color: green">
                                    <i>
                                        Account Paid
                                    </i>
                                </b>
                            @else
                                <b style="color: #a94442">
                                    <i>
                                        Account Owing
                                    </i>
                                </b>
                            @endif
                        </td>
                        <td class="text-center">
                            <button class="btn btn-warning btn-md">Edit</button>
                        </td>
                        <td class="text-center">
                            <button class="btn btn-danger btn-md">Close</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <hr/>
            {{ $listAllAccounts->links() }}

        </div>
    </div>
</section>

@include('layouts.footer')
