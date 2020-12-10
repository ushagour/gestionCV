@extends('layout.page_master')

@section('content')
<div class="container">
    <div class="row ">
<div  class=" bg-1">
        <center>
            <h1><strong>{{__('home.welcome_pg')}}</strong></h1>
        </center>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="{{asset('assets/img/cv4.png')}}">

                </div>

                <div class="item">
                    <img src="{{asset('assets/img/cv2.jpg')}}">

                </div>

                <div class="item">
                    <img src="{{asset('assets/img/cv3.jpg')}}">

                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>



    </div>
    </div>


</div>
<!-- Container (The Band Section) -->
<div id="band" class="container text-center">
    <h3>{{__('home.the_band')}}</h3>
    <p><em>Rédigez votre CV en 3 simples étapes.!</em></p>

    <p>Créez votre CV moderne et professionnel avec E-CV. Notre générateur de curriculum vitae est l’outil de référence
        N 1 pour la création de CV créatifs, professionnels et multilingues via Dolibarr. Choisissez votre modèle
        préféré parmi notre sélection moderne et entièrement personnalisable et générez votre</p>
    <br>
    <div class="row">
        <div class="col-sm-4">
            <p class="text-center"><strong>1. Introduire vos données personnelles
                </strong></p><br>
            <p>Introduisez d'abord vos données personnelles et vos données de contact additionnelles éventuelles que
                vous souhaitez communiquer. Vous pouvez également ajouter une photo ou des données complémentaires, par
                exemple votre état civil, votre permis de conduire et vos profils sur les réseaux sociaux et tout ça
                dans l'interface de gestion des utilisateurs de Dolibarr.</p>

            <a href="#demo" data-toggle="collapse">
                lire plus ...
            </a>
            <div id="demo" class="collapse">
                <p>Guitarist and Lead Vocalist</p>
                <p>Loves long walks on the beach</p>
                <p>Member since 1988</p>
            </div>
        </div>
        <div class="col-sm-4">
            <p class="text-center"><strong>2. Introduire vos expériences.</strong></p><br>
            <p>Ensuite, poursuivez la rédaction de votre CV en introduisant vos études, votre expérience
                professionnelle, vos compétences, vos Certificats, vos Principales Qualifications et votre connaissance
                des langues, les Formations professionnelles suivis, les stages effectués, votre profil personnel ainsi
                que d'autres expériences que vous souhaitez faire figurer sur votre CV.</p>
            <a href="#demo2" data-toggle="collapse">
                lire plus ...
            </a>
            <div id="demo2" class="collapse">
                <p>Drummer</p>
                <p>Loves drummin'</p>
                <p>Member since 1988</p>
            </div>
        </div>
        <div class="col-sm-4">
            <p class="text-center"><strong>3. Sélectionner un modèle & Télécharger le CV.</strong></p><br>
            <p>Pour terminer votre CV, sélectionnez une mise en page appropriée parmi un éventail de modèles
                professionnels de CV conçus. Vous avez le choix entre plus de 3 modèles différents de CV et de couleurs.
                Ensuite, vous pouvez télécharger votre CV dans le modèle sélectionné, au format pdf. Rien de plus
                simple!</p>
            <a href="#demo3" data-toggle="collapse">
                lire plus ...
            </a>
            <div id="demo3" class="collapse">
                <p>Bass player</p>
                <p>Loves math</p>
                <p>Member since 2005</p>
            </div>
        </div>
    </div>
</div>

@endsection
