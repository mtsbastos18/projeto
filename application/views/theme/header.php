<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Gerenciar Sistema</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</head>

<body>
       
<nav class="navbar navbar-light topo">
  <a class="navbar-brand logo" href="#">
    <img src="<?= base_url('assets/img/amazon.png')?>" alt="">
  </a>
  
  <div class="col-md-2 user-navbar">
    <i class="fas fa-user-circle"></i> 
    <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <?=$this->session->userdata("name")?>
    </a>
    <div class="dropdown-menu" >
          <a class="dropdown-item" href="<?=base_url('user/logout')?>">Sair</a>
    </div>
  </div>
  
</nav>

<nav class="navbar navbar-expand-lg navbar-light bg-light menu">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('home')?>"><i class="fas fa-home"></i> <p>Dashboard</p> </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="far fa-edit"></i> <p>Produtos</p> 
        </a>
        <div class="dropdown-menu" >
          <a class="dropdown-item" href="<?=base_url('novo-produto')?>">Cadastrar Novo</a>
          <a class="dropdown-item" href="<?=base_url('listar-produtos')?>">Listar todos</a>
        </div>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-list">
        </i> <p>Categorias</p>
      </a>
      <div class="dropdown-menu" >
          <a class="dropdown-item" href="#">Cadastrar Nova</a>
          <a class="dropdown-item" href="#">Listar todas</a>
      </div>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-folder-open"></i> 
        <p>Pedidos</p>
      </a>
      <div class="dropdown-menu" >
          <a class="dropdown-item" href="#">Pedidos em aberto</a>
          <a class="dropdown-item" href="#">Pedidos finalizados</a>
          <a class="dropdown-item" href="#">Pedidos pendentes</a>
      </div>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-edit"></i> 
        <p>Clientes</p>
      </a>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-chart-bar"></i>
        <p>Relatórios</p>
      </a>
      </li>
      
    </div>
  </div>
</nav>