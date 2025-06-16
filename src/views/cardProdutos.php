<section class="container-fluid d-lg-none">
    <div class="row">
        <?php
        $produtos = [
            [
                'img' => '../../img/ypioca.jpg',
                'nome' => 'ypioca',
                'descricao' => 'Prata, 960ml',
                'quantidade' => 10,
                'preco' => 'R$ 18.90'
            ],
            [
                'img' => '../../img/jurubeba.jpg',
                'nome' => 'jurubeba',
                'descricao' => 'Prata, 960ml',
                'quantidade' => 10,
                'preco' => 'R$ 18.90'
            ],
            [
                'img' => '../../img/slova.jpeg',
                'nome' => 'slova',
                'descricao' => 'Prata, 960ml',
                'quantidade' => 10,
                'preco' => 'R$ 18.90'
            ],
            [
                'img' => '../../img/sapupara.jpeg',
                'nome' => 'sapupara',
                'descricao' => 'Prata, 960ml',
                'quantidade' => 10,
                'preco' => 'R$ 18.90'
            ],
        ];

        foreach ($produtos as $produto): ?>
            <div class="col-12 col-sm-6  mb-3 p-0 p-sm-2">
                <div class="card d-flex flex-row gap-4  p-3  justify-content-center " style="width: 100%;">
                    <img src="<?= $produto['img'] ?>" class="mx-1 mt-1" style="width: 90px; height: 90px;" alt="...">
                    <div class="align-items-center">
                        <ul class="list-unstyled">
                            <li>Nome: <?= $produto['nome'] ?></li>
                            <li>Descrição: <?= $produto['descricao'] ?></li>
                            <li>Quantidade: <?= $produto['quantidade'] ?></li>
                            <li>Preço: <?= $produto['preco'] ?></li>
                        </ul>
                        <div class="d-flex gap-2">
                            <a class="btn btn-warning btn-sm w-50" href="">Editar</a>
                            <a class="btn btn-danger btn-sm w-50" href="">Excluir</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>