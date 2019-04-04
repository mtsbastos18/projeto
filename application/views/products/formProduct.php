<div class="container">
<h4>Cadastrar Produtos</h4>
    <div class="card-group ">
        <div class="card">
            <div class="card-body">
                <form method="post" action="product/create">
                <div class="form-group">
                    <label for="productName">Nome do Produto</label>
                    <input type="text" class="form-control" id="productname" name="name" placeholder="Nome do produto" required>
                </div>
                <div class="form-group">
                    <label for="">Valor</label>
                    <input type="number" min="0.00" max="10000.00" step="0.01" name="price" id="" class="form-control" placeholder="Valor" required>

                </div>
                <div class="form-group">
                    <label>Categoria</label>
                    <select class="js-example-basic-single" style="width: 100%" name="category" required>
                        <?php foreach ($categories as $c): ?>
                            <option value="<?=$c['id']?>"><?=$c['name']?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Descrição do produto</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3" required></textarea>
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Imagem do produto</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Selecione um arquivo</label>
                    </div>
                </div><br>
                <div class="form-group">
                    <input type="submit" value="Enviar"  class="btn btn-success">
                </div>               
                </form>
            </div>
        </div>
    </div>
</div>

