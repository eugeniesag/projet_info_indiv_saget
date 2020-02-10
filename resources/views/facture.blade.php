<!--<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Les factures</title>
</head>
<body>
	<p>C'est la facture n° {{ $numero }}</p>
</body>
</html>
-->

@extends('template')

@section('titre')
    Les factures
@endsection

@section('contenu')
    <p>C'est la facture n° {{ $numero }}</p>
@endsection