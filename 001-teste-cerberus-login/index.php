<?php
// ============================================================
// Cerberus - Formulário de Contato / Cadastro
// ============================================================

$erro = "";
$sucesso = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Captura os campos enviados
    $nome_completo    = trim($_POST['nome_completo'] ?? '');
    $cpf              = trim($_POST['cpf'] ?? '');
    $telefone         = trim($_POST['telefone'] ?? '');
    $email            = trim($_POST['email'] ?? '');
    $senha            = trim($_POST['senha'] ?? '');
    $confirmar_senha  = trim($_POST['confirmar_senha'] ?? '');
    $plano            = trim($_POST['plano'] ?? '');
    $assunto          = trim($_POST['assunto'] ?? '');
    $mensagem         = trim($_POST['mensagem'] ?? '');

    // 1) Verifica se algum campo está vazio
    if (
        empty($nome_completo) || empty($cpf) || empty($telefone) ||
        empty($email) || empty($senha) || empty($confirmar_senha) ||
        empty($plano) || empty($assunto) || empty($mensagem)
    ) {
        $erro = "Todos os campos devem ser preenchidos.";
    }
    // 2) Verifica se as senhas coincidem
    elseif ($senha !== $confirmar_senha) {
        $erro = "As senhas não coincidem.";
    }
    // 3) Verifica formato de e-mail
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erro = "O campo de e-mail está incorreto.";
    }
    else {
        // ------------------------------------------------------
        // Conexão com o banco de dados
        // Ajuste host, usuário, senha e nome do banco conforme
        // o seu ambiente.
        // ------------------------------------------------------
        $host   = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "cerberus";

        try {
            $conn = new mysqli($host, $dbuser, $dbpass, $dbname);

            if ($conn->connect_error) {
                throw new Exception("Falha na conexão com o banco de dados.");
            }

            $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

            $stmt = $conn->prepare(
                "INSERT INTO contatos
                (nome_completo, cpf, telefone, email, senha, plano, assunto, mensagem)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)"
            );

            if (!$stmt) {
                throw new Exception("Erro ao preparar a consulta no banco de dados.");
            }

            $stmt->bind_param(
                "ssssssss",
                $nome_completo,
                $cpf,
                $telefone,
                $email,
                $senha_hash,
                $plano,
                $assunto,
                $mensagem
            );

            if (!$stmt->execute()) {
                throw new Exception("Erro ao salvar os dados. Verifique os campos e tente novamente.");
            }

            $sucesso = "Cadastro realizado com sucesso!";
            $stmt->close();
            $conn->close();

        } catch (Exception $e) {
            // Mensagem de erro relacionada a algum campo / banco de dados
            $erro = "Erro em algum dos campos: " . $e->getMessage();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cerberus</title>
<style>
    :root {
        --preto: #0a0a0a;
        --preto-suave: #141414;
        --laranja: #ff6600;
        --laranja-escuro: #cc5200;
        --cinza: #8a8a8a;
        --branco: #f5f5f5;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Segoe UI', Arial, sans-serif;
        background: radial-gradient(circle at top, #1a1a1a 0%, #0a0a0a 60%);
        color: var(--branco);
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 40px 20px;
    }

    header {
        text-align: center;
        margin-bottom: 40px;
    }

    header h1 {
        font-size: 3.2rem;
        letter-spacing: 6px;
        text-transform: uppercase;
        color: var(--laranja);
        text-shadow: 0 0 18px rgba(255, 102, 0, 0.45);
        font-weight: 800;
    }

    header p {
        color: var(--cinza);
        margin-top: 8px;
        letter-spacing: 2px;
        font-size: 0.85rem;
        text-transform: uppercase;
    }

    .container {
        background: linear-gradient(160deg, var(--preto-suave), #101010);
        border: 1px solid rgba(255, 102, 0, 0.25);
        border-radius: 14px;
        padding: 40px;
        width: 100%;
        max-width: 640px;
        box-shadow: 0 0 40px rgba(255, 102, 0, 0.08),
                    inset 0 0 60px rgba(255, 102, 0, 0.03);
    }

    .container h2 {
        color: var(--branco);
        font-size: 1.3rem;
        margin-bottom: 25px;
        border-left: 4px solid var(--laranja);
        padding-left: 12px;
        letter-spacing: 1px;
    }

    form {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 18px;
    }

    .full {
        grid-column: 1 / -1;
    }

    label {
        display: block;
        font-size: 0.78rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: var(--laranja);
        margin-bottom: 6px;
    }

    input, select, textarea {
        width: 100%;
        background: #1c1c1c;
        border: 1px solid #333;
        border-radius: 8px;
        padding: 12px 14px;
        color: var(--branco);
        font-size: 0.95rem;
        transition: border-color 0.25s, box-shadow 0.25s;
    }

    input:focus, select:focus, textarea:focus {
        outline: none;
        border-color: var(--laranja);
        box-shadow: 0 0 0 3px rgba(255, 102, 0, 0.15);
    }

    textarea {
        resize: vertical;
        min-height: 110px;
    }

    select {
        appearance: none;
        background-image: linear-gradient(45deg, transparent 50%, var(--laranja) 50%),
                           linear-gradient(135deg, var(--laranja) 50%, transparent 50%);
        background-position: calc(100% - 20px) calc(1em + 4px),
                              calc(100% - 15px) calc(1em + 4px);
        background-size: 5px 5px, 5px 5px;
        background-repeat: no-repeat;
    }

    button {
        grid-column: 1 / -1;
        margin-top: 10px;
        background: linear-gradient(135deg, var(--laranja), var(--laranja-escuro));
        color: #0a0a0a;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        border: none;
        border-radius: 8px;
        padding: 14px;
        cursor: pointer;
        transition: filter 0.2s, transform 0.2s;
    }

    button:hover {
        filter: brightness(1.1);
        transform: translateY(-1px);
    }

    .msg {
        grid-column: 1 / -1;
        padding: 12px 16px;
        border-radius: 8px;
        font-size: 0.9rem;
        margin-bottom: 5px;
    }

    .erro {
        background: rgba(255, 60, 60, 0.1);
        border: 1px solid rgba(255, 60, 60, 0.4);
        color: #ff6b6b;
    }

    .sucesso {
        background: rgba(255, 102, 0, 0.1);
        border: 1px solid var(--laranja);
        color: var(--laranja);
    }

    footer {
        margin-top: 30px;
        color: var(--cinza);
        font-size: 0.75rem;
        letter-spacing: 1px;
    }

    @media (max-width: 600px) {
        form {
            grid-template-columns: 1fr;
        }
        header h1 {
            font-size: 2.2rem;
        }
    }
</style>
</head>
<body>

    <header>
        <h1>Cerberus</h1>
        <p>Controle de acesso &amp; integração</p>
    </header>

    <div class="container">
        <h2>Cadastro / Contato</h2>

        <form action="index.php" method="POST" novalidate>

            <?php if (!empty($erro)): ?>
                <div class="msg erro full"><?php echo htmlspecialchars($erro); ?></div>
            <?php endif; ?>

            <?php if (!empty($sucesso)): ?>
                <div class="msg sucesso full"><?php echo htmlspecialchars($sucesso); ?></div>
            <?php endif; ?>

            <div class="full">
                <label for="nome_completo">Nome completo</label>
                <input type="text" id="nome_completo" name="nome_completo"
                       value="<?php echo htmlspecialchars($_POST['nome_completo'] ?? ''); ?>">
            </div>

            <div>
                <label for="cpf">CPF</label>
                <input type="text" id="cpf" name="cpf" maxlength="14" placeholder="000.000.000-00"
                       value="<?php echo htmlspecialchars($_POST['cpf'] ?? ''); ?>">
            </div>

            <div>
                <label for="telefone">Telefone</label>
                <input type="text" id="telefone" name="telefone" placeholder="(00) 00000-0000"
                       value="<?php echo htmlspecialchars($_POST['telefone'] ?? ''); ?>">
            </div>

            <div class="full">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email"
                       value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
            </div>

            <div>
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha">
            </div>

            <div>
                <label for="confirmar_senha">Confirmar senha</label>
                <input type="password" id="confirmar_senha" name="confirmar_senha">
            </div>

            <div class="full">
                <label for="plano">Plano utilizado</label>
                <select id="plano" name="plano">
                    <option value="">Selecione um plano</option>
                    <option value="basico"      <?php echo (($_POST['plano'] ?? '') === 'basico') ? 'selected' : ''; ?>>Básico</option>
                    <option value="intermediario" <?php echo (($_POST['plano'] ?? '') === 'intermediario') ? 'selected' : ''; ?>>Intermediário</option>
                    <option value="premium"     <?php echo (($_POST['plano'] ?? '') === 'premium') ? 'selected' : ''; ?>>Premium</option>
                    <option value="corporativo" <?php echo (($_POST['plano'] ?? '') === 'corporativo') ? 'selected' : ''; ?>>Corporativo</option>
                </select>
            </div>

            <div class="full">
                <label for="assunto">Assunto</label>
                <input type="text" id="assunto" name="assunto"
                       value="<?php echo htmlspecialchars($_POST['assunto'] ?? ''); ?>">
            </div>

            <div class="full">
                <label for="mensagem">Mensagem</label>
                <textarea id="mensagem" name="mensagem"><?php echo htmlspecialchars($_POST['mensagem'] ?? ''); ?></textarea>
            </div>

            <button type="submit">Enviar</button>

        </form>
    </div>

    <footer>&copy; <?php echo date("Y"); ?> Cerberus. Todos os direitos reservados.</footer>

</body>
</html>