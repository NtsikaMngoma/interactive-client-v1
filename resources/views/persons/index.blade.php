@include('layouts.header')
@include('layouts.navbar')

<!-- section persons -->
<section id="section-about" class="no-bg no-top no-bottom">
    <div class="overlay-bg t30">
        <div class="container relative">
            <a href="{{route('persons.create')}}">
                <button class="btn btn-success btn-lg pull-right create-button">Create a Person</button>
            </a>
            <div class="row">
                @include('layouts.search-form')
                <div class="col-md-12 text-center">
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Surname</th>
                        <th>Id Number</th>
                        <th>Profile</th>
                        <th>Remove User</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($listAllPersons as $persons)
                        <tr>
                            <td>{{$persons['name']}}</td>
                            <td>{{$persons['surname']}}</td>
                            <td>{{$persons['id_number']}}</td>
                            <td><button class="btn btn-warning btn-md">Edit</button></td>
                            <td><button class="btn btn-danger btn-md">Remove User</button></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <hr/>
                {{ $listAllPersons->links() }}
            </div>
        </div>
    </div>
</section>
<!-- section close -->

@include('layouts.footer')
