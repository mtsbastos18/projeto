<div class="container">
<h4>Cadastrar Produtos</h4>
    <div class="card-group ">
        <div class="card">
            <div class="card-body">
                <form method="post" action="user/create">
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" class="form-control" name="name" placeholder="Nome do usuário" required>
                </div>
                <div class="form-group">
                    <label>Login</label>
                    <input type="text" class="form-control"  name="username" placeholder="Login" required>
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="email" class="form-control"  name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label>Permissão</label>
                    <select class="js-example-basic-single" style="width: 100%" name="permission" required>
                        <option value="1">Administrador</option>
                        <option value="2">Operador</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" value="Enviar"  class="btn btn-success">
                </div>               
                </form>
            </div>
        </div>
    </div><br>
    <?php if ($this->input->get('msg') == 1): ?>
		<div class="alert alert-success" role="alert">
			Usuário Criado!
		</div>
    <?php elseif ($this->input->get('msg') == 2): ?>
        <div class="alert alert-danger" role="alert">
			Erro ao criar usuário
		</div>
	<?php endif ?>
</div>

