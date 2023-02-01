<?php

    class medicoDAO{
        private $conexao;

        //função que recebe a canexão
         public function __construct($conexao){
                    $this->conexao = $conexao;
                }

//-------------MÉTODO DE ADICIONAR NO BANCO-----------------------
    public function Adicionar($medico){

        $sql = "insert into medicos(nome,cpf,rg,crm,endereco,telefone,sexo,usuario,senha) values
                (:nome, :cpf, :rg, :crm, :endereco, :telefone, :sexo, :usuario, :senha)";

                $query = $this->conexao->prepare($sql);

                $query->execute(["nome"=>$medico->getnome(),
                                 "cpf"=>$medico->getcpf(),
                                 "rg"=>$medico->getrg(),
                                 "crm"=>$medico->getcrm(),
                                 "endereco"=>$medico->getendereco(),
                                 "telefone"=>$medico->gettelefone(),
                                 "sexo"=>$medico->getsexo(),
                                 "usuario"=>$medico->getusuario(),
                                 "senha"=>$medico->getsenha()]);
      }  


//-----------------MÉTODO LISTAR------------------------------------------
  public function Listar(){
                
    $sql = "select*from medicos";
    $resultado = $this->conexao->query($sql,PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'medico');
        $medicos = [];
        foreach ($resultado as $medico) {
            $medicos[]=$medico;
        }
        return $medicos;
     }

     //------------------MÉTODO DE EXCLUIR--------------------------------       
 public function Deletar($id){

    $sql = "delete from medicos where id= :id";

    $query=$this->conexao->prepare($sql);
    $query->execute(["id"=>$id]);
   
   }
   

   
//----------------------alterar---------------------------------------
public function Atualizar($medico){
    $sql = "update medicos set nome=:nome, cpf=:cpf,
            rg=:rg, crm=:crm, endereco=:endereco, telefone=:telefone, sexo=:sexo
            where id=:id";

            $query = $this->conexao->prepare($sql);

            
            $query->execute(["nome"=>$medico->getnome(),
                            "cpf"=>$medico->getcpf(),
                            "rg"=>$medico->getrg(),
                            "crm"=>$medico->getcrm(),
                            "endereco"=>$medico->getendereco(),
                            "telefone"=>$medico->gettelefone(),
                            "sexo"=>$medico->getsexo(),
                            "id"=>$medico->getid()]);   
         }
      
      
    //---------------------------buscar por id----------------------------------
public function Buscar($id){
        
    $sql = "select * from medicos where id=:id";

    $query = $this->conexao->prepare($sql);
    $query->execute(['id'=>$id]);

    $medico = $query->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'medico');
    $medico = $query->fetch();
    return $medico;

      
}

 //---------------------------buscar por senha----------------------------------
 public function ValidarSenha($senha){
        
        $sql = "select * from medicos where senha=:senha";

        $query = $this->conexao->prepare($sql);
        $query->execute(['senha'=>$senha]);

        $administrador = $query->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'medico');
        $administrador = $query->fetch();
        
        return $administrador;
   }

//----------------------alterar user---------------------------------------
public function AtualizarUser($medico){
        $sql = "update medicos set usuario=:usuario, senha=:senha where id=:id";
    
        $query = $this->conexao->prepare($sql);
    
         $query->execute(["usuario"=>$medico->getusuario(),
                        "senha"=>$medico->getsenha(),
                         "id"=>$medico->getid()]);     
    }

    }