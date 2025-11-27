<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Login</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
    .cad-card { margin: 20px 0; }
    .site-header h1 { margin: 0; }
  </style>
</head>
<body>
  <main class="container center-page">
    <section class="cad-card">
      <div class="cad-top">login</div>
      <?php if (!empty($error)): ?><div class="alert"><?php echo $error; ?></div><?php endif; ?>
      <form method="post" class="cad-form">
        <div class="field"><label>e-mail</label><input type="email" name="email" required></div>
        <div class="field"><label>senha</label><input type="password" name="password" required></div>
        <div class="actions">
          <button class="btn primary" type="submit">ENTRAR</button>
        </div>
        <p class="muted small">Não possui uma conta? <a href="index.php?controller=auth&action=register">Criar conta</a></p>
      </form>
    </section>
  </main>

  <footer class="site-footer" style="position: fixed; bottom: 0; left: 0; width: 100%; background: #fff; border-top: 1px solid #e9e9e9;">Projeto MVC • Repository • PHP • MySQL</footer>
</body>
</html>
