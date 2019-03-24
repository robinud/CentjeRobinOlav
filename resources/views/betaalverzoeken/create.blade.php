@extends('layouts.app')

@section('content')

    <div class="content">

        <form method="post" action="/nieuwverzoek">
            {{ csrf_field() }}
        <br><a>Naam verzoek:</a>
        <input type="text" name="name" placeholder="Naam verzoek">
        <br><a>Een omschrijving van het verzoek:</a>
        <input type="text" name="description" placeholder="Omschrijving verzoek">
        <br><a>Bedrag van het verzoek:</a>
        <input name="amount" type="number">
        <br><input type="submit" class="btn btn-primary" title="add betaalverzoek">
        </form>
    </div>

    @endsection