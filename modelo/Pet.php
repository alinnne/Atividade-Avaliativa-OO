<?php 


class Pet{
    protected $nome;
    protected $Raca;
    protected $peso;
    protected $pelagem;
    protected $porte;
    protected int $idade;

     public function __construct($nome,$Raca,$peso,$pelagem,$porte,$idade) {
        $this->nome = $nome;
        $this->Raca = $Raca;
        $this->peso = $peso;
        $this->pelagem = $pelagem;
        $this->porte = $porte;
        $this->idade = $idade;
    }

    public function __toString() {
        return "Nome: $this->nome | Raça: $this->Raca\n";
    }
    
    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of Raca
     */
    public function getRaca()
    {
        return $this->Raca;
    }

    /**
     * Set the value of Raca
     */
    public function setRaca($Raca): self
    {
        $this->Raca = $Raca;

        return $this;
    }

    /**
     * Get the value of peso
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set the value of peso
     */
    public function setPeso($peso): self
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get the value of pelagem
     */
    public function getPelagem()
    {
        return $this->pelagem;
    }

    /**
     * Set the value of pelagem
     */
    public function setPelagem($pelagem): self
    {
        $this->pelagem = $pelagem;

        return $this;
    }

    /**
     * Get the value of porte
     */
    public function getPorte()
    {
        return $this->porte;
    }

    /**
     * Set the value of porte
     */
    public function setPorte($porte): self
    {
        $this->porte = $porte;

        return $this;
    }

    /**
     * Get the value of idade
     */
    public function getIdade(): int
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     */
    public function setIdade(int $idade): self
    {
        $this->idade = $idade;

        return $this;
    }
}
