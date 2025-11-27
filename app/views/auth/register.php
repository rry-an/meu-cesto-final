<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Cadastro</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
    .cad-card { margin: 20px 0; }
    .site-header h1 { margin: 0; }
    
    /* Popup Styles */
    .popup-overlay {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.5);
      z-index: 1000;
    }
    
    .popup-content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background: white;
      padding: 30px;
      border-radius: 8px;
      max-width: 400px;
      width: 90%;
      text-align: center;
    }
    
    .popup-content h3 {
      margin-bottom: 20px;
      color: #333;
    }
    
    .terms-links {
      margin: 20px 0;
    }
    
    .terms-links a {
      display: inline-block;
      margin: 5px 10px;
      padding: 8px 16px;
      background: #007bff;
      color: white;
      text-decoration: none;
      border-radius: 4px;
      font-size: 14px;
    }
    
    .terms-links a:hover {
      background: #0056b3;
    }
    
    .checkbox-container {
      margin: 20px 0;
      text-align: left;
    }
    
    .checkbox-container input[type="checkbox"] {
      margin-right: 8px;
    }
    
    .popup-actions {
      margin-top: 20px;
    }
    
    .popup-actions button {
      margin: 0 10px;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    
    .btn-confirm {
      background: #7d8a2f;
      color: white;
    }
    
    .btn-confirm:disabled {
      background: #ccc;
      cursor: not-allowed;
    }
    
    .btn-cancel {
      background: #6c757d;
      color: white;
    }
  </style>
</head>
<body>
  <main class="container center-page">
    <section class="cad-card">
      <div class="cad-top">cadastrar</div>
      <?php if (!empty($error)): ?><div class="alert"><?php echo $error; ?></div><?php endif; ?>
      <form method="post" class="cad-form">
        <div class="field"><label>nome</label><input type="text" name="name" required></div>
        <div class="field"><label>e-mail</label><input type="email" name="email" required></div>
        <div class="field"><label>senha</label><input type="password" name="password" required></div>
        <div class="actions">
          <button class="btn primary" type="button" onclick="showTermsPopup()">CRIAR CONTA</button>
        </div>
        <p class="muted small">Já possui uma conta? <a href="index.php?controller=auth&action=login">Faça login!</a></p>
      </form>
    </section>
  </main>

  <!-- Popup de Termos -->
  <div id="termsPopup" class="popup-overlay">
    <div class="popup-content">
      <h3>Termos e Condições</h3>
      <p>Para continuar, você deve ler e aceitar nossos termos:</p>
      
      <div class="terms-links">
        <a href="#" onclick="openTerms('uso')" target="_blank">Termos de Uso</a>
        <a href="#" onclick="openTerms('consentimento')" target="_blank">Termo de Consentimento</a>
      </div>
      
      <div class="checkbox-container">
        <label>
          <input type="checkbox" id="acceptTerms" onchange="toggleConfirmButton()">
          Li e aceito os termos
        </label>
      </div>
      
      <div class="popup-actions">
        <button class="btn-confirm" id="confirmBtn" disabled onclick="confirmRegistration()">Confirmar</button>
        <button class="btn-cancel" onclick="closeTermsPopup()">Cancelar</button>
      </div>
    </div>
  </div>

  <footer class="site-footer" style="position: fixed; bottom: 0; left: 0; width: 100%; background: #fff; border-top: 1px solid #e9e9e9;">Projeto MVC • Repository • PHP • MySQL</footer>

  <script>
    function showTermsPopup() {
      // Validar campos antes de mostrar popup
      const name = document.querySelector('input[name="name"]').value;
      const email = document.querySelector('input[name="email"]').value;
      const password = document.querySelector('input[name="password"]').value;
      
      if (!name || !email || !password) {
        alert('Por favor, preencha todos os campos antes de continuar.');
        return;
      }
      
      document.getElementById('termsPopup').style.display = 'block';
    }
    
    function closeTermsPopup() {
      document.getElementById('termsPopup').style.display = 'none';
      document.getElementById('acceptTerms').checked = false;
      toggleConfirmButton();
    }
    
    function toggleConfirmButton() {
      const checkbox = document.getElementById('acceptTerms');
      const confirmBtn = document.getElementById('confirmBtn');
      confirmBtn.disabled = !checkbox.checked;
    }
    
    function openTerms(type) {
      if (type === 'uso') {
        window.open('index.php?controller=home&action=termos_uso', '_blank');
      } else if (type === 'consentimento') {
        window.open('index.php?controller=home&action=termo_consentimento', '_blank');
      }
    }
    
    function confirmRegistration() {
      closeTermsPopup();
      document.querySelector('.cad-form').submit();
    }
    
    // Fechar popup ao clicar fora
    document.getElementById('termsPopup').addEventListener('click', function(e) {
      if (e.target === this) {
        closeTermsPopup();
      }
    });
  </script>
</body>
</html>
