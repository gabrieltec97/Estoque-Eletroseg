@extends('layouts.sb')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3>Condomínios cadastrados</h3>

                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#Id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Ações</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($condominiums as $condominium)
                            <tr>
                                <th scope="row">{{ $condominium->id }}</th>
                                <td>{{ $condominium->name }}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
