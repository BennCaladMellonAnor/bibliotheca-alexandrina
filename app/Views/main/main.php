<?= $this->extend('layout/main') ?>

<?= $this->Section('title') ?>
Bibliotheca Alexandrina
<?= $this->endSection('title') ?>
<?= $this->Section('head') ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<style>
    body {
        padding: 20px;
    }
</style>
<?= $this->endSection('head') ?>

<?= $this->Section('content') ?>

<!-- Filtros por Categoria/Tag -->
<div>
    <label for="categoryFilter">Filtrar por Categoria:</label>
    <select id="categoryFilter">
        <option value="all">Todas as Categorias</option>
        <option value="comida">Comida</option>
        <option value="sobrevivencia">Sobrevivência</option>
        <option value="arquitetura">Arquitetura</option>
        <option value="quimica">Química</option>
    </select>
</div>

<div>
    <label for="tagFilter">Filtrar por Tag:</label>
    <select id="tagFilter">
        <option value="all">Todas as Tags</option>
        <option value="sal">Sal</option>
        <option value="coxaDeFrango">Coxa de Frango</option>
        <option value="acampamento">Acampamento</option>
        <option value="polvora">Polvora</option>
    </select>
</div>

<!-- Lista de Receitas -->
<div id="recipeList">
    <!-- As receitas serão exibidas aqui -->
</div>
<div class="card">
    <div class="card-head p-3">
        <h1>Lasanha de Carne Moída</h1>

    </div>


    <!-- Mind Map - Organização dos Tópicos -->
    <div class="card-body">
        <h2>Receita Detalhada</h2>
        <ul>
            <li>
                <strong>Ingredientes:</strong>
                <ul>
                    <li><span class="btn btn-dark btn-sm px-2 my-1">Massa de lasanha</span></li>
                    <li><span class="btn btn-dark btn-sm px-2 my-1">Carne moída</span></li>
                    <li><span class="btn btn-dark btn-sm px-2 my-1">Molho de tomate</span></li>
                    <li><span class="btn btn-dark btn-sm px-2 my-1">Queijo ralado</span></li>
                    <li><span class="btn btn-dark btn-sm px-2 my-1">Creme de leite</span></li>
                </ul>
            </li>
            <li>
                <strong>Modo de Preparo:</strong>
                <ol>
                    <li>Cozinhe a massa de lasanha de acordo com as instruções do pacote.</li>
                    <li>Em uma panela, doure a carne moída.</li>
                    <li>Adicione o molho de tomate à carne moída e deixe cozinhando por alguns minutos.</li>
                    <li>Monte a lasanha em camadas alternadas de massa, carne, queijo e creme de leite.</li>
                    <li>Asse no forno pré-aquecido a 180°C por 30 minutos.</li>
                    <li>... (outros passos)</li>
                </ol>
            </li>
            <li>
                <strong>Tags:</strong>
                <ul>
                    <li class="btn btn-success btn-sm px-3">Comida</li>
                    <li class="btn btn-success btn-sm px-3">Lasanha</li>
                    <li class="btn btn-success btn-sm px-3">Carne Moída</li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="card-footer p-3 m-0">
        <!-- Informações Gerais -->
        <div>
            <p><strong>Publicado por:</strong> Nome do Usuário</p>
            <p><strong>Avaliação da Receita:</strong> ★★★★☆</p>
            <p><strong>Atualizações:</strong> Última atualização em DD/MM/AAAA</p>
            <p><strong>Comentários:</strong></p>
            <ul>
                <li>Comentário 1</li>
                <li>Comentário 2</li>
                <!-- Adicione mais comentários conforme necessário -->
            </ul>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Se necessário, adicione código JavaScript para interatividade na página.
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Seu código JavaScript para manipulação da lista de receitas e filtros pode ser colocado aqui.
</script>
<?= $this->endSection('content') ?>