<?php

  class secretariaDAO{

     private $conexao;

    //função que recebe a canexão
     public function __construct($conexao){
                $this->conexao = $conexao;
            }

    //-------------MÉTODO DE ADICIONAR NO BANCO-----------------------
    public function Adicionar($secretaria){

        $sql = "insert into secretarias(nome,cpf,rg,endereco,telefone,sexo,usuario,senha) values
                (:nome, :cpf, :rg, :endereco, :telefone, :sexo, :usuario, :senha)";

                $query = $this->conexao->prepare($sql);

                $query->execute(["nome"=>$secretaria->getnome(),
                                 "cpf"=>$secretaria->getcpf(),
                                 "rg"=>$secretaria->getrg(),
                                 "endereco"=>$secretaria->getendereco(),
                                 "telefone"=>$secretaria->gettelefone(),
                                 "sexo"=>$secretaria->getsexo(),
                                 "usuario"=>$secretaria->getusuario(),
                                 "senha"=>$secretaria->getsenha()]);
      }

      
  //-----------------MÉTODO LISTAR------------------------------------------
  public function Listar(){
                
    $sql = "select*from secretarias";
    $resultado = $this->conexao->query($sql,PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'secretaria');
        $secretarias = [];
        foreach ($resultado as $secretaria) {
            $secretarias[]=$secretaria;
        }
        return $secretarias;
}

 //------------------MÉTODO DE EXCLUIR--------------------------------       
 public function Deletar($id){

    $sql = "delete from secretarias where id= :id";

    $query=$this->conexao->prepare($sql);
    $query->execute(["id"=>$id]);
}

//----------------------alterar---------------------------------------
public function Atualizar($secretarias){
    $sql = "update secretarias set nome=:nome, cpf=:cpf,
            rg=:rg, endereco=:endereco, telefone=:telefone, sexo=:sexo where id=:id";

            $query = $this->conexao->prepare($sql);

            $query->execute(["nome"=>$secretarias->getnome(),
                            "cpf"=>$secretarias->getcpf(),
                            "rg"=>$secretarias->getrg(),
                            "endereco"=>$secretarias->getendereco(),
                            "telefone"=>$secretarias->gettelefone(),
                            "sexo"=>$secretarias->getsexo(),
                            "id"=>$secretarias->getid()]);     
}

//---------------------------buscar por id----------------------------------
public function Buscar($id){
            
        $sql = "select * from secretarias where id=:id";

        $query = $this->conexao->prepare($sql);
        $query->execute(['id'=>$id]);

        $secretaria = $query->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'secretaria');
        $secretaria = $query->fetch();
        
        return $secretaria ;

        
    }

     //---------------------------buscar por senha----------------------------------
     public function ValidarSenha($senha){
        
        $sql = "select * from secretarias where senha=:senha";

        $query = $this->conexao->prepare($sql);
        $query->execute(['senha'=>$senha]);

        $secretaria = $query->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'secretaria');
        $secretaria = $query->fetch();
        
        return $secretaria;
   }

//----------------------alterar user---------------------------------------
public function AtualizarUser($secretaria){
    $sql = "update secretarias set usuario=:usuario, senha=:senha where id=:id";

            $query = $this->conexao->prepare($sql);

            $query->execute(["usuario"=>$secretaria->getusuario(),
                            "senha"=>$secretaria->getsenha(),
                            "id"=>$secretaria->getid()]);     
}
  }