<link href="{{url('css/welcome.css')}}" rel="stylesheet">
@extends('templateWel')
@section('titre','Location de Voitures')

@section('content')

    <section id="home" class="home">
        <div class="home-content">
            <h1>Location de Voitures Simplifiée</h1>
            <p>Trouvez la voiture parfaite pour vos besoins, rapidement et facilement.</p>
            <button class="cta-button">Réservez Maintenant</button>
        </div>
    </section>

    <section id="services" class="services">
        <h2>Nos Services</h2>
        <div class="service-cards">
            <div class="card">
                <h3> Choix Varié</h3>
                <center><img  class="mt-2" src="https://cdn-icons-png.flaticon.com/512/1042/1042025.png" width="50px" alt=""></center>
                <p class="mt-2">Une large sélection de véhicules pour tous les budgets.</p>
            </div>
            <div class="card">
                <h3>Support 24/7</h3>
                <center><img  class="mt-2" src="https://cdn-icons-png.flaticon.com/512/943/943941.png" width="50px" alt=""></center>
                <p class="mt-2">Notre équipe est disponible pour vous aider à tout moment.</p>
            </div>
            <div class="card">
                <h3>Tarifs Compétitifs</h3>
                <center><img  class="mt-2" src="https://png.pngtree.com/png-clipart/20230418/original/pngtree-best-price-line-icon-png-image_9065488.png" width="60px" alt=""></center>
                <p class="mt-2">Des prix attractifs sans compromis sur la qualité.</p>
            </div>
        </div>
    </section>

    <section id="fleet" class="fleet">
        <h2>Notre Flotte</h2>
        <div class="fleet-cards">
            <div class="car-card">
                <img src="https://www.cargo.fr/Content/images/cars/citadine.png" alt="Voiture économique">
                <h3>Voiture Économique</h3>
                <p>Idéal pour les petits budgets et les trajets courts.</p>
            </div>
            <div class="car-card">
                <img src="https://jlr-staging.s3.ap-south-1.amazonaws.com/user-documents/1701107667Template_Car_Stock_Images_(7).png" alt="SUV">
                <h3>SUV</h3>
                <p>Confort et espace pour toute la famille.</p>
            </div>
            <div class="car-card">
                <img src="https://mercedes-benz-kemoimpexauto.rs/wp-content/uploads/2024/08/Mercedes-Maybach-S-580-1.png" alt="Voiture de luxe">
                <h3>Voiture de Luxe</h3>
                <p>Pour des occasions spéciales ou un confort exceptionnel.</p>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <h2>Contactez-Nous</h2>
        <p>Appelez-nous au <strong>+212 600000000</strong> ou envoyez-nous un message via le formulaire ci-dessous :</p>
        <form>
            <input type="text" placeholder="Votre nom" required>
            <input type="email" placeholder="Votre email" required>
            <textarea placeholder="Votre message" required></textarea>
            <button type="submit">Envoyer</button>
        </form>
    </section>


@endsection
<script src="{{url('js/welcome.js')}}"></script>