

<div class="container ">
    <div class="card-group dashboard">
        <div class="card">
            <div class="card-body">
                <i class="far fa-star"></i>
                <span><?php echo $products;?></span>
                <p>Produtos</p>
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <i class="far fa-folder-open"></i>
                <span><?php echo $orders;?></span>
                <p>Pedidos</p>
                <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <i class="fas fa-list"></i>
                <span><?php echo $categories;?></span>
                <p>Categorias</p>
                <div class="progress">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <i class="fas fa-user-edit"></i>
                <span><?php echo $customers;?></span>
                <p>Clientes</p>
                <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 35%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
</div>
