<?php
namespace Src\Modelos;

class Fotos{
    private string $foto;
    private string $autor;
    private string $likes;

    //constructor vacio
    //setter y getter
    

    /**
     * Get the value of foto
     */ 
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set the value of foto
     *
     * @return  self
     */ 
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get the value of autor
     */ 
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     *
     * @return  self
     */ 
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get the value of likes
     */ 
    public function getLikes()
    {
        return $this->likes;
    }

    /**
     * Set the value of likes
     *
     * @return  self
     */ 
    public function setLikes($likes)
    {
        $this->likes = $likes;

        return $this;
    }
    
}