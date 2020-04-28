@include('layouts.header')

@include('layouts.navbar')

<!-- section persons -->
<section id="section-about" class="no-bg no-top no-bottom">
    <div class="overlay-bg t30">
        <div class="container">
            <a href="{{route('transact')}}">
                <button class="btn btn-success btn-lg pull-right create-button">Transact</button>
            </a>
            @include('layouts.search-form')
            <div class="text-center">
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Id Number</th>
                    <th>Account Number</th>
                    <th>Amount</th>
                    <th>Outstanding Balance</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($listAllTransactions as $transactions)
                    <tr>
                        <td>{{$transactions['account']['persons']['name']}}  {{$transactions['account']['persons']['surname']}}</td>
                        <td>{{$transactions['account']['persons']['id_number']}}</td>
                        <td>{{$transactions['account']['account_number']}}</td>
                        <td>{{$transactions['description']}}</td>
                        <td>R {{number_format($transactions['account']['outstanding_balance'], 2)}}</td>
                        <td><button class="btn btn-primary btn-md">Transaction Details</button></td>
                        <td><button class="btn btn-default btn-md"> Action</button> </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <hr/>
            {{ $listAllTransactions->links() }}
        </div>
    </div>
</section>
<!-- section close -->
@include('layouts.footer')
