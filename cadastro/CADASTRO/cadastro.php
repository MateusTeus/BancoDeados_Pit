<?php 

    class Cadastro
    {
        private $nome_completo = " ";
        private $cpf = " ";
        private $email = " ";
        private $senha = " ";

        public function __construct($nome_completo,$cpf,$email,$senha){
            $this->nome_completo =strtoupper($nome_completo);
            $this->cpf = $cpf;
            $this->email = $email;
            $this->senha = $senha;

        }

        
        public function salvar(){
        $conexao = pg_connect("host=localhost dbname=cadastro_family_care user=postgres password=123");

        if ($conexao) {
            echo "Conexão estabelecida corretamente!";
            $query = "INSERT INTO usuarios (nome_completo, cpf, email, senha) VALUES ($1, $2, $3, $4)";
            
            // Executar a consulta
            $resultado = pg_query_params($conexao, $query, array($this->nome_completo, $this->cpf, $this->email, $this->senha));
            

            

            if ($resultado) {
                echo "Dados inseridos com sucesso!";
            } else {
                echo "Falha ao inserir dados: " . pg_last_error($conexao);
            }

            // Fechar a conexão
            pg_close($conexao);
        } else {
            echo "Falha na conexão com o banco de dados.";
        }
    }

        public function get_nome_completo(){
            return $this->nome_completo;
        }

        public function get_cpf(){
            return $this->cpf;
        }

        public function get_email(){
            return $this->email;
        }
        public function get_senha(){
            return $this->senha;
        }
    }



?>