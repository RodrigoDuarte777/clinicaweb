<?php

class administradorDAO{
    
    private $conexao;
//função que recebe a canexão
        public function __construct($conexao){
            $this->conexao = $conexao;
        }

//-------------MÉTODO DE ADICIONAR NO BANCO-----------------------
public function Adicionar($administrador){

   $sql = "insert into administradores(nome,cnpj,endereco,telefone,usuario,senha) values
                    (:nome, :cnpj , :endereco, :telefone, :usuario, :senha)";

           $query = $this->conexao->prepare($sql);

          $query->execute(["nome"=>$administrador->getnome(),
                          "cnpj"=>$administrador->getcnpj(),
                     
                         "endereco"=>$administrador->getendereco(),
                         "telefone"=>$administrador->gettelefone(),
                         "usuario"=>$administrador->getusuario(),
                         "senha"=>$administrador->getsenha()]);
     }

//-----------------MÉTODO LISTAR------------------------------------------
 public function Listar(){
                
     $sql = "select*from administradores";
     $resultado = $this->conexao->query($sql,PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'administrador');
         $administradores = [];
           foreach ($resultado as $administrador) {
                  $administradores[]=$administrador;
                 }
         return $administradores;
    }

//------------------MÉTODO DE EXCLUIR--------------------------------       
 public function Deletar($id){

     $sql = "delete from administradores where id= :id";

           $query=$this->conexao->prepare($sql);
           $query->execute(["id"=>$id]);
   }

//----------------------alterar---------------------------------------
 public function Atualizar($administrador){

   $sql = "update administradores set nome=:nome, cnpj=:cnpj,
           endereco=:endereco, telefone=:telefone where id=:id";

          $query = $this->conexao->prepare($sql);

          $query->execute(["nome"=>$administrador->getnome(),
                        "cnpj"=>$administrador->getcnpj(),
                        
                        "endereco"=>$administrador->getendereco(),
                        "telefone"=>$administrador->gettelefone(),
                        "id"=>$administrador->getid()]);     
   }

       

 //---------------------------buscar por id----------------------------------
public function BuscarPorId($id){
        
    $sql = "select * from administradores where id=:id";
        
        $query = $this->conexao->prepare($sql);
        $query->execute(['id'=>$id]);

        $administrador = $query->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'administrador');
        $administrador = $query->fetch();
        
          return $administrador;         
         
    }

 //---------------------------buscar por senha----------------------------------
 public function ValidarSenha($senha){
        
        $sql = "select * from administradores where senha=:senha";

        $query = $this->conexao->prepare($sql);
        $query->execute(['senha'=>$senha]);

        $administrador = $query->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'administrador');
        $administrador = $query->fetch();
        
        return $administrador;
   }

  
//----------------------alterar user---------------------------------------
public function AtualizarUser($administrador){
        $sql = "update administradores set usuario=:usuario, senha=:senha where id=:id";
    
        $query = $this->conexao->prepare($sql);
    
         $query->execute(["usuario"=>$administrador->getusuario(),
                        "senha"=>$administrador->getsenha(),
                         "id"=>$administrador->getid()]);     
    }

 

   



}

