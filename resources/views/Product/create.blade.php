@extends('template')

@section('content')
    <div class="card">

        @if($errors->any)
            <div class="alert alert-danger">

                <ul>

                    @foreach($errors->all() as $error)

                        <li> {{$error}}</li>
                    @endforeach
                </ul>
            </div>

        @endif
        <header class="card-header">
            <p class="card-header-title">Création d'un produit</p>
        </header>
        <div class="card-content">
            <div class="content">
                <form action="{{ route('product.store') }}" method="POST">
                    @csrf
                    <div class="field">
                        <label class="label">Nom</label>
                        <div class="control">
                            <input type="text" name="name">
                        </div>

                    </div>

                    <div class="field">
                        <label class="label">Description</label>
                        <div class="control">
                            <textarea class="textarea" name="description"> </textarea>
                        </div>

                    </div>
                    <div class="field">
                        <label class="label">Prix</label>
                        <div class="control">
                            <input type="number" name="price">
                        </div>

                    </div>


                    <div class="field">
                        <label class="label">Stock</label>
                        <div class="control">
                            <input type="number" name="stock">
                        </div>

                    </div>

                    <div>

                        <label> Categories</label>
                        <div class="select">
                            <select name="category_id">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">
                                        {{$category->name}}
                                    </option>
                                @endforeach

                            </select>
                        </div>

                        <div class="select is-multiple">
                            <select name="cats[]" multiple>
                                @foreach($catalogues as $catalogue)
                                    <option value="{{$catalogue->id}}">
                                        {{$catalogue->name}}

                                    </option>
                                @endforeach


                            </select>
                        </div>
                    </div>


                    <div class="field">
                        <div class="control">
                            <button class="button is-link">Ajouter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
