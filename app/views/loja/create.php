<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Cadastrar Loja</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
    .cad-card { margin: 20px 0; }
    .site-header h1 { margin: 0; }
  </style>
</head>
<body>
  <main class="container center-page">
    <section class="cad-card">
      <div class="cad-top">informações da loja</div>
      <form method="post" action="index.php?controller=loja&action=save" class="cad-form">
        <div class="field"><label>nome</label><input type="text" name="nome" value="<?php echo $loja['nome'] ?? ''; ?>" required></div>
        <div class="field"><label>e-mail</label><input type="email" name="email" value="<?php echo $loja['email'] ?? ''; ?>" required></div>
        <div class="field"><label>número telefônico</label><input type="text" name="telefone" value="<?php echo $loja['telefone'] ?? ''; ?>" required></div>
        <div class="actions">
          <button class="btn primary" type="submit">SALVAR</button>
        </div>
        <p class="muted small"><a href="index.php?controller=feira&action=dashboard">Cancelar</a></p>
      </form>
    </section>
  </main>

  <footer class="site-footer" style="position: fixed; bottom: 0; left: 0; width: 100%; background: #fff; border-top: 1px solid #e9e9e9;">Projeto MVC • Repository • PHP • MySQL</footer>
</body>
</html>
