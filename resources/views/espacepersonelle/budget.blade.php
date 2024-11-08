@extends('layouts.appch')
@section('content')
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gérer le Budget</title>
    <!-- Font Awesome Icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    <!-- Google Fonts --> 
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('cssfile/budget.css')}}" />
  </head>
  <body>
    <div class="wrapper">
      <div class="container">
        <div class="sub-container">
          <!-- Budget -->
          <div class="total-amount-container">
            <h3>Budget</h3>
            <p class="hide error" id="budget-error">
            La valeur ne peut pas être vide ou négative
                      </p>
            <input
              type="number"
              id="total-amount"
              placeholder="Entrez le montant total."
            />
            <button class="submit" id="total-amount-button">Entrez un Budget.</button>
          </div>

          <!-- Expenditure -->
          <div class="user-amount-container">
            <h3>Les Dépenses</h3>
            <p class="hide error" id="product-title-error">
            La valeur ne peut pas être vide ou négative
            </p>
            <input
              type="text"
              class="product-title"
              id="product-title"
              placeholder="Entrez le titre du produit."
            />
            <input
              type="number"
              id="user-amount"
              placeholder="Entrez le coût du produit."
            />
            <button class="submit" id="check-amount">Vérifier le montant.</button>
          </div>
        </div>
        <!-- Output -->
        <div class="output-container flex-space">
          <div>
            <p>Budget total.</p>
            <span id="amount">0</span>
          </div>
          <div>
            <p>Les Dépenses</p>
            <span id="expenditure-value">0</span>
          </div>
          <div>
            <p>Solde restant</p>
            <span id="balance-amount">0</span>
          </div>
        </div>
      </div>
      <!-- List -->
      <div class="list">
        <h3>Liste de dépenses.</h3>
        <div class="list-container" id="list"></div>
      </div>
    </div>
    <!-- Script -->
    <script src="{{asset('js/budget.js')}}"></script>
  </body>
</html>
@endsection