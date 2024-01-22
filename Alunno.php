<?php

class Alunno {
    protected $nome;
    protected $cognome;
    protected $eta;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCognome() {
        return $this->cognome;
    }

    public function setCognome($cognome) {
        $this->cognome = $cognome;
    }

    public function getEta() {
        return $this->eta;
    }

    public function setEta($eta) {
        $this->eta = $eta;
    }

    public function stampaAttributi() {
        echo "Nome: {$this->nome}, Cognome: {$this->cognome}, Età: {$this->eta}\n";
    }
}
?>
