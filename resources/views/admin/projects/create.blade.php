@extends('admin.layouts.master')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Ajouter Projet</h5>
            <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Nom de projet</label>
                            <input type="text" name="name" class="form-control" placeholder="saisir le nom">
                            @if ($errors->has('name'))
                                <div class="form-text text-danger">
                                    Saisir un nom valide. <i class="fa-regular fa-circle-exclamation"
                                        style="color: #e63205;"></i>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Client</label>
                            <input type="text" name="client" class="form-control" placeholder="saisir le client">
                            @if ($errors->has('client'))
                                <div class="form-text text-danger">
                                    Saisir le client . <i class="fa-regular fa-circle-exclamation"
                                        style="color: #e63205;"></i>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Localisation</label>
                            <input type="text" name="localisation" class="form-control"
                                placeholder="entrer la localisation">
                            @if ($errors->has('localisation'))
                                <div class="form-text text-danger">
                                    Enter la localisation . <i class="fa-regular fa-circle-exclamation"
                                        style="color: #e63205;"></i>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Budget</label>
                            <input type="text" name="budget" class="form-control" placeholder="saisir le budget">
                            @if ($errors->has('budget'))
                                <div class="form-text text-danger">
                                    Saisir le budget . <i class="fa-regular fa-circle-exclamation"
                                        style="color: #e63205;"></i>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Année de réalisation</label>
                            <input type="text" name="date_realisation" class="form-control" placeholder="saisir l'année">
                            @if ($errors->has('date_realisation'))
                                <div class="form-text text-danger">
                                    Saisir l'anneé de réalisation . <i class="fa-regular fa-circle-exclamation"
                                        style="color: #e63205;"></i>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Capacité </label>
                            <input type="text" name="capacite" class="form-control" placeholder="saisir la capacité">
                            @if ($errors->has('capacite'))
                                <div class="form-text text-danger">
                                    Entrer la Capacité. <i class="fa-regular fa-circle-exclamation"
                                        style="color: #e63205;"></i>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Entrer le choix du site </label>
                            <input type="text" name="choix_site" class="form-control"
                                placeholder="saisir le choix du site">
                            @if ($errors->has('choix_site'))
                                <div class="form-text text-danger">
                                    Entrer le choix du site. <i class="fa-regular fa-circle-exclamation"
                                        style="color: #e63205;"></i>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Entrer l'ordre de service </label>
                            <input type="text" name="order_service" class="form-control"
                                placeholder="saisir le'ordre de service">
                            @if ($errors->has('order_service'))
                                <div class="form-text text-danger">
                                    Entrer l'ordre de service. <i class="fa-regular fa-circle-exclamation"
                                        style="color: #e63205;"></i>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Fabrication et montage </label>
                            <input type="text" name="fabrication_montage" class="form-control"
                                placeholder="saisir fabrication et montage">
                            @if ($errors->has('fabrication_montage'))
                                <div class="form-text text-danger">
                                    Fabrication et montage. <i class="fa-regular fa-circle-exclamation"
                                        style="color: #e63205;"></i>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Entrer le travaux sur site </label>
                            <input type="text" name="travaux_site" class="form-control"
                                placeholder="saisir le travaux sur site">
                            @if ($errors->has('travaux_site'))
                                <div class="form-text text-danger">
                                    Entrer le travaux sur site. <i class="fa-regular fa-circle-exclamation"
                                        style="color: #e63205;"></i>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Entrer le mise en place de la station</label>
                            <input type="text" name="mise_place" class="form-control"
                                placeholder="saisir le mise en place de la station">
                            @if ($errors->has('mise_place'))
                                <div class="form-text text-danger">
                                    Entrer le mise en place de la station. <i class="fa-regular fa-circle-exclamation"
                                        style="color: #e63205;"></i>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Entrer le Démarrage et mise en service</label>
                            <input type="text" name="demarrage_mise_service" class="form-control"
                                placeholder="saisir Démarrage et mise en service">
                            @if ($errors->has('demarrage_mise_service'))
                                <div class="form-text text-danger">
                                    Entrer Démarrage et mise en service. <i class="fa-regular fa-circle-exclamation"
                                        style="color: #e63205;"></i>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label class="form-label">Saisir la description de projet </label>
                            <textarea name="description" id="description" class="form-control" placeholder="saisir la description"
                                cols="30" rows="5"></textarea>
                            @if ($errors->has('debit'))
                                <div class="form-text text-danger">
                                    Entrer la description. <i class="fa-regular fa-circle-exclamation"
                                        style="color: #e63205;"></i>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Choisir l'image</label>
                                <input class="form-control" accept="image/*" type="file" name="image"
                                    id="img-file">
                                @if ($errors->has('image'))
                                    <div class="form-text text-danger">
                                        Entrer une image valide (taille max : 2mb) . <i
                                            class="fa-regular fa-circle-exclamation" style="color: #e63205;"></i>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Choisir miniature (facultatif)</label>
                                <input class="form-control" accept="image/*" type="file" name="miniature"
                                    id="img-file-miniature">
                                @if ($errors->has('miniature'))
                                    <div class="form-text text-danger">
                                        Entrer une image valide (taille max : 2mb) . <i
                                            class="fa-regular fa-circle-exclamation" style="color: #e63205;"></i>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>Image principale</label>
                        <div class="mb-3">
                            <img src="" class="new-img-insert" alt="" style="width: 200px;display:none">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>Miniature du projet</label>
                        <div class="mb-3">
                            <img src="" class="new-img-insert-miniature" alt=""
                                style="width: 200px;display:none">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary"><i class="fa-regular fa-badge-check"></i> Ajouter</button>
            </form>
        </div>
    </div>
@endsection
@section('js')
    <script>
        const input = document.getElementById('img-file');
        const input_miniature = document.getElementById('img-file-miniature');
        input.addEventListener('change', function(e) {
            const reader = new FileReader()
            reader.onload = function() {
                var src = reader.result
                $('.new-img-insert').attr("src", src);
                $('.new-img-insert').show();
            }
            reader.readAsDataURL(input.files[0])
        }, false);
        input_miniature.addEventListener('change', function(e) {
            const reader = new FileReader()
            reader.onload = function() {
                var src = reader.result
                $('.new-img-insert-miniature').attr("src", src);
                $('.new-img-insert-miniature').show();
            }
            reader.readAsDataURL(input_miniature.files[0])
        }, false);
    </script>
@endsection
