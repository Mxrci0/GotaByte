<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Login</title>

<style>
  body {
    background: #f3f4f6;
    font-family: Arial, sans-serif;
  }
  .box {
    max-width: 400px;
    margin: 80px auto;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 10px 25px rgba(0,0,0,.1);
    overflow: hidden;
  }
  .box-header {
    background: #2563eb;
    color: #fff;
    padding: 20px;
    text-align: center;
  }
  .box-body {
    padding: 20px;
  }
  input {
    width: 100%;
    padding: 10px;
    margin-bottom: 12px;
    border: 1px solid #ccc;
    border-radius: 6px;
  }
  button {
    width: 100%;
    padding: 10px;
    background: #2563eb;
    color: #fff;
    border: none;
    border-radius: 6px;
    cursor: pointer;
  }
  button:hover {
    opacity: .9;
  }
  .link {
    text-align: center;
    margin-top: 15px;
  }
</style>
</head>

<body>

<div class="box">
  <div class="box-header">
    <h2>Bem-vindo</h2>
    <p>Faça login para continuar</p>
  </div>

  <div class="box-body">
    <form method="POST" action="/entrar/alterar">

      <input type="email" name="usu_email"value="<?= $this->getview()->entrar->__get('usu_email') ?>" placeholder="E-mail" required>

      <input type="password" name="usu_password" id="password" <?= $this->getview()->entrar->__get('usu_password') ?>placeholder="Senha" required>
      <input type="hidden" name="usu_id" value="<?= $this->getview()->entrar->__get('usu_id') ?>" >
      <input type="checkbox" onclick="toggleSenha()"> Mostrar Senha

      <br><br>

      <button type="submit">Entrar</button>
    </form>

    <div class="link">
      <p>Não tem conta? <a href="/">Cadastre-se</a></p>
    </div>
  </div>
</div>

<script>
function toggleSenha() {
  const input = document.getElementById('password');
  input.type = input.type === 'password' ? 'text' : 'password';
}
</script>

</body>
</html>
