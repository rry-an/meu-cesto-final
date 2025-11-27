<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Feiras Cadastradas</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
    .cad-card { margin: 0 !important; height: 350px !important; text-align: center !important; display: flex !important; flex-direction: column !important; justify-content: space-between !important; width: calc(33.33% - 40px) !important; }
    .site-header h1 { margin: 0; }
    .container { padding: 80px 20px !important; display: flex !important; flex-direction: column !important; align-items: center !important; }
    .cards-grid { display: flex !important; flex-direction: row !important; align-items: flex-start !important; justify-content: center !important; gap: 50px !important; flex-wrap: wrap !important; margin-bottom: 50px !important; }
    .voltar-btn { text-align: center !important; }
    .actions { margin: 15px 0 !important; }
    .btn { width: 200px !important; }
    .cad-form { display: flex !important; flex-direction: column !important; justify-content: space-between !important; height: 100% !important; }
    .cad-form p:first-child { margin-top: 30px !important; }
    .cad-form .actions { margin-top: auto !important; }
  </style>
</head>
<body>
  <main class="container center-page">
    <div class="cards-grid">
      <?php foreach($items as $i): ?>
      <section class="cad-card">
        <div class="cad-top"><?php echo htmlspecialchars($i['nome']); ?></div>
        <div class="cad-form">
          <div class="field"><label>endereço</label><span><?php echo htmlspecialchars($i['endereco']); ?></span></div>
          <div class="field"><label>bairro</label><span><?php echo htmlspecialchars($i['bairro']); ?></span></div>
          <div class="field"><label>horário</label><span><?php echo htmlspecialchars($i['horario']); ?></span></div>
          <div class="field"><label>dias</label><span><?php echo htmlspecialchars($i['dias_funciona']); ?></span></div>
        </div>
      </section>
      <?php endforeach; ?>
    </div>
    
    <div class="voltar-btn">
      <button class="btn primary" onclick="location.href='index.php?controller=feira&action=dashboard'">VOLTAR</button>
    </div>
  </main>

  <footer class="site-footer" style="position: fixed; bottom: 0; left: 0; width: 100%; background: #fff; border-top: 1px solid #e9e9e9;">Projeto MVC • Repository • PHP • MySQL</footer>
</body>
</html>
