<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Dashboard</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
    .cad-card { margin: 0 !important; height: 300px !important; text-align: center !important; display: flex !important; flex-direction: column !important; justify-content: space-between !important; }
    .site-header h1 { margin: 0; }
    .container { padding: 80px 20px !important; display: flex !important; flex-direction: row !important; align-items: center !important; justify-content: center !important; gap: 50px !important; }
    .actions { margin: 15px 0 !important; }
    .btn { width: 200px !important; }
    .cad-form { display: flex !important; flex-direction: column !important; justify-content: flex-start !important; height: 100% !important; position: relative !important; }
    .cad-form p:first-child { margin-top: 30px !important; }
    .cad-card:nth-child(1) .cad-form .actions, .cad-card:nth-child(2) .cad-form .actions { position: absolute !important; bottom: 10px !important; left: 50% !important; transform: translateX(-50%) !important; }
    .cad-card:nth-child(3) .cad-form .actions { position: static !important; margin: 15px 0 !important; }
  </style>
</head>
<body>
  <main class="container center-page">
    <section class="cad-card">
      <div class="cad-top">minha feira</div>
      <div class="cad-form">
        <?php if($feira): ?>
          <p><strong><?php echo htmlspecialchars($feira['nome']); ?></strong></p>
          <p class="muted small"><?php echo htmlspecialchars($feira['endereco']); ?> — <?php echo htmlspecialchars($feira['bairro']); ?></p>
          <p class="muted small">Horário: <?php echo htmlspecialchars($feira['horario']); ?> | Dias: <?php echo htmlspecialchars($feira['dias_funciona']); ?></p>
          <div class="actions">
            <button class="btn primary" onclick="location.href='index.php?controller=feira&action=form'">EDITAR</button>
          </div>
        <?php else: ?>
          <p class="muted small">Você ainda não cadastrou sua feira.</p>
          <div class="actions">
            <button class="btn primary" onclick="location.href='index.php?controller=feira&action=form'">CADASTRAR FEIRA</button>
          </div>
        <?php endif; ?>
      </div>
    </section>

    <section class="cad-card">
      <div class="cad-top">minha loja</div>
      <div class="cad-form">
        <?php if($loja): ?>
          <p><strong><?php echo htmlspecialchars($loja['nome']); ?></strong></p>
          <p class="muted small"><?php echo htmlspecialchars($loja['email']); ?> — <?php echo htmlspecialchars($loja['telefone']); ?></p>
          <div class="actions">
            <button class="btn primary" onclick="location.href='index.php?controller=loja&action=form'">EDITAR</button>
          </div>
        <?php else: ?>
          <p class="muted small">Você ainda não cadastrou sua loja.</p>
          <div class="actions">
            <button class="btn primary" onclick="location.href='index.php?controller=loja&action=form'">CADASTRAR LOJA</button>
          </div>
        <?php endif; ?>
      </div>
    </section>

    <section class="cad-card">
      <div class="cad-top">navegação</div>
      <div class="cad-form">
        <div class="actions">
          <button class="btn primary" onclick="location.href='index.php?controller=feira&action=list'">VER TODAS AS FEIRAS</button>
        </div>
        <div class="actions">
          <button class="btn primary" onclick="location.href='index.php?controller=loja&action=list'">VER TODAS AS LOJAS</button>
        </div>
        <p class="muted small"><a href="index.php?controller=auth&action=logout">Sair</a></p>
      </div>
    </section>
  </main>

  <footer class="site-footer" style="position: fixed; bottom: 0; left: 0; width: 100%; background: #fff; border-top: 1px solid #e9e9e9;">Projeto MVC • Repository • PHP • MySQL</footer>
</body>
</html>
