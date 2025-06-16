<div class="offcanvas offcanvas-end" tabindex="-1" id="cadastro" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Novo Produto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <form action="">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome"
                        class="form-control mb-3"
                        placeholder="Digite aqui">

                    <label for="preco">Preço</label>
                    <input type="number" id="preco"
                        step="0.01"
                        class="form-control mb-3"
                        placeholder="Digite aqui">

                    <label for="quantidade">Quantidade</label>
                    <input type="number" min="0" id="quantidade"
                        class="form-control mb-3"
                        placeholder="Digite aqui">

                    <label for="foto">URL da Foto</label>
                    <input type="url" id="foto"
                        class="form-control mb-3"
                        placeholder="Digite aqui">

                    <label for="descricao">Descrição</label>
                    <textarea id="descricao"
                        class="form-control mb-3"
                        placeholder="Digite aqui"></textarea>

                    <button class="btn btn-primary w-100">
                        PRONTO
                    </button>
                </form>
            </div>
        </div>