@extends('layouts.sb')

@section('content')

    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h3>Novo condomínio</h3>
                        </div>

                        <form action="{{ route('condominios.store') }}" method="post">

                            @csrf
                            <div class="col-6 mt-4">
                                <label for="Condominio">Nome do condomínio</label>
                                <input type="text" name="condominium" class="form-control" id="Condominio">
                            </div>

                            <div class="col-4 mt-2">
                                <input type="button" class="btn btn-primary" value="Cadastrar" data-toggle="modal" data-target="#newCondominium">
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="newCondominium" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Atenção</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Deseja cadastrar este novo condomínio?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Voltar</button>
                                            <button type="submit" class="btn btn-success">Cadastrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h3>Condomínios cadastrados</h3>

                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#Id</th>
                            <th scope="col">Nome</th>
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
