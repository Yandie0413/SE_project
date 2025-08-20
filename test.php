<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Tableau de Bord</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      background: #f4fdfb;
      color: #004d40;
    }
    header {
      background: #00796b;
      color: white;
      padding: 20px;
      text-align: center;
      font-size: 28px;
    }
    .dashboard {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 20px;
      padding: 20px;
    }
    .card {
      background: #e0f2f1;
      border-radius: 8px;
      padding: 15px;
      box-shadow: 0 0 5px rgba(0,0,0,0.1);
    }
    .card h2 {
      margin: 0;
      font-size: 24px;
      color: #00695c;
    }
    .chart, .pie, .bars {
      background: #b2dfdb;
      height: 100px;
      border-radius: 5px;
      margin-top: 10px;
    }
    .highlight {
      font-size: 30px;
      font-weight: bold;
      color: #004d40;
    }
  </style>
</head>
<body>
  <header>Tableau de Bord</header>
  <div class="dashboard">
    <div class="card">
      <div class="highlight">Objectif</div>
      <p></p>
      <div class="chart"></div>
    </div>
    <div class="card">
      <div class="highlight">Mission</div>
      <p></p>
      <div class="chart"></div>
    </div>
    <div class="card">
      <h2>Utilisateurs actifs</h2>
      <div class="highlight">43 210</div>
    </div>
    <div class="card">
      <h2>Taux de rétention</h2>
      <div class="highlight">68%</div>
    </div>
    <div class="card">
      <h2>CA du mois</h2>
      <p><strong>43 210</strong></p>
      <p>Utilisateurs actifs : 8 320</p>
    </div>
    <div class="card">
      <h2>Évolution</h2>
      <p>+8,6% vs mois précédent</p>
      <div class="highlight">1 274</div>
    </div>
    <div class="card">
      <h2>Répartition</h2>
      <div class="pie"></div>
    </div>
    <div class="card">
      <h2>Activité mensuelle</h2>
      <div class="bars"></div>
    </div>
    <div class="card">
      <h2>Objectif atteint</h2>
      <p>32%</p>
      <div class="bars"></div>
    </div>
    <div class="card">
        <h2>Resultat annuelle</h2>
    </div>
    <div class="card">
        <h3>Activités Réalisées</h3>
            <div class="value">17/20</div>
                <span class="status warning">En cours</span>
            </div>
            <div class="card">
                <h3>Retards</h3>
                <div class="value">3</div>
                    <span class="status danger">Critique</span>
                </div>
                </div> 
            </div>
  </div>
</body>
</html>