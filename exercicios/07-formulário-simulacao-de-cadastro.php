<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Formulário HTML para simulação do cadastro </title>
</head>

<body>

   <h1>Formulário para simulação do cadastro de produtos </h1>

   <form action="" method="post">
      <!--  Produto -->
      <p>
         <label for="nome">Produto</label>
         <input required placeholder="Digite o produto" type="text" name="nome" id="nome">
      </p>


      <!-- Fornecedores -->
      <p>
         <label for="fornecedor">Fornecedores</label>
         <select required name="fornecedores" id="fornecedores">
         <option value=""></option>

      <?php
           $fornecedores = ["Samsung", "LG", "Philips", "Philco"];       
           
           foreach ($fornecedores as $fornecedor){
      ?>               
            <option value="<?=$fornecedor?>"><?=$fornecedor?></option>             

      <?php
      }
      ?>
      </select>
      </p>

      <!-- Preço -->
      <?php
      if( isset($_POST["preco"]) ){ ?>
      
         
      <?php  
      }else{    
      ?>
      <p>
         <label for="preco">Preço</label>
         <input required placeholder="Digite o valor" type="number" name="preco" id="preco" min="100" max="10000">
      </p>
      <?php  
      }
      ?>

      <?=number_format($_POST ["preco"],2,',','.') ?>
      


      <!-- Disponibilidade -->
      <p>Disponibilidade? <br>

         <input type="radio" name="disponibilidade" id="sim">
         <label for="sim">Sim</label>

         <input type="radio" name="disponibilidade" id="nao">
         <label for="nao">Não</label>
      </p>


      <!-- Descrição -->
      <p>
         <label for="descricao ">Descrição (mínimo de 5 e máximo de 50)</label> <br>
         <textarea required minlength="5" maxlength="50" name="descricao" id="descricao" cols="35" rows="6"></textarea>
      </p>



      <!-- Botão -->
      <p>
         <button type="submit">Enviar</button>

      </p>




   </form>

</body>

</html>