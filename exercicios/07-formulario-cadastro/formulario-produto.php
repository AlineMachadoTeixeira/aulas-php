<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Formulário HTML para simulação do cadastro </title>
   <link rel="stylesheet" href="../07-formulario-cadastro/estilo.css">
</head>

<body>
   <h1>Formulário para simulação do cadastro de produtos </h1>
   


   <!-- FORMULÁRIO -->
   <form action="processamento.php" method="post">
      <fieldset>
         <legend><b>Cadastro de Produto</b></legend>
         <!--  Produto -->
         <p class="campo">
            <label for="produto">Produto</label>
            <input required placeholder="Digite o produto" type="text" name="produto" id="produto">
         </p>


         <!-- Fornecedores -->
         <p class="campo">
            <label for="fornecedor">Fornecedor</label>
            <select required name="fornecedores" id="fornecedores">
               <option value=""></option>

               <?php
               $fornecedores = ["Samsung", "LG", "Philips", "Philco"];

               foreach ($fornecedores as $fornecedor) {
               ?>
                  <option value="<?= $fornecedor ?>"><?= $fornecedor ?></option >

               <?php
               }
               ?>
            </select>
         </p>

         <!-- Preço -->
        
            <p class="campo">
               <label for="preco">Preço</label>
               <input required placeholder="Digite o valor" type="number" name="preco" id="preco" min="100" max="10000" step=".01">
            </p>       



         <!-- Disponibilidade -->
         <p>Disponibilidade? <br>

            <input type="radio" name="disponibilidade" id="sim" value="Sim">
            <label for="sim">Sim</label>

            <input type="radio" name="disponibilidade" id="nao" value="Não">
            <label for="nao">Não</label>
         </p>


         <!-- Descrição -->
         <p class="campo">
            <label for="descricao ">Descrição</label> <br>
            <textarea  name="descricao" id="descricao" cols="35" rows="6"></textarea>
         </p>
         

         <!-- Botão -->
         <p>
            <button type="submit">Enviar</button>
         </p>

      </fieldset>
   </form>

</body>

</html>
