<div class="container">
    <h4>Listar Produtos</h4>
    <div class="card-group ">
        <div class="card">
            <div class="card-body">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nome</th>
                <th>Valor</th>
                <th>Categoria</th>
                <th>Estoque</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $p): ?>
            <tr class='clickable-row' data-href="product/edit/<?=$p['id']?>">
                <td><?=$p['id']?></td>
                <td><?=$p['name']?></td>
                <td><?=$p['price']?></td>
                <td><?=$p['category']?></td>
                <td><?=$p['amount'] ?></td>
            </tr>
            <?php endforeach ?>
    </table>
            </div>
        </div>
    </div>
</div>
<style>
    .clickable-row{
        cursor:pointer;
    }
</style>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "language": {
                "lengthMenu": "Exibindo  por página _MENU_",
                "zeroRecords": "Resultado não encontrado",
                "info": "Exibindo página _PAGE_ de _PAGES_",
                "infoEmpty": "Sem Resultados encontrados",
                "infoFiltered": "(filtered from _MAX_ total records)",
                "search": "Pesquisar",
                "paginate": {
                    "first":      "Primeira",
                    "last":       "Última",
                    "next":       "Próximo",
                    "previous":   "Anterior"
                },
            }
        });
        $(".clickable-row").click(function() {
            window.location = $(this).data("href");
        });
    } );
</script>