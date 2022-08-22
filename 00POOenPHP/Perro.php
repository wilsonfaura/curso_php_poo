<?php
class Perro{
    /*
    Modificadores de acceso:
    public: Acceso desde cualquier metodo de la clase u objeto que lo invoque
    private: Acceso solo desde los metodos de la clase, los objetos no los pueden invocar
    protected: Acceso solo desde los metodos de la clase y subclases que la hereden, los objetos no los pueden invocar
    */
    //Atributos
    public $nombre;
    public $raza;
    public $edad;
    public $sexo;
    public $adiestrado;
    public $foto;
    public $comida;
    private $pulgas;
    public static $mejor_amigo = 'Hombre';
    const MEJOR_CUALIDAD = 'Fidelidad';

    //Metodos
    
    //Metodos magicos
    //CONSTRUCTOR: Metodo que se ejecuta automaticamente al inicio de instanciar una clase.
    public function __construct($n, $r, $e, $s, $a, $f, $p){
        $this->nombre = $n;
        $this->raza = $r;
        $this->edad = $e . ' años';
        $this->sexo = ($s) ? 'Macho': 'Hembra';
        $this->adiestrado = ($a) ? 'Adiestrado': 'No Adiestrado';
        $this->foto = $f;
        $this->pulgas = $p;
        echo '<p><mark>Hola soy el constructor de la clase</mark></p>';
    }
    //DESTRUCTOR: Metodo que se ejecuta automaticamente al final de instanciar una clase.
    public function __destruct(){
        echo '<p><mark>Hola soy el destructor de la clase</mark></p>';
    }
    public function ladrar(){
        echo '<p><mark>GUAUU GUAUU!!!</mark></p>';
    }
    public function comer($c){
        $this->comida = $c;
        echo '<p>' . $this->nombre . ' come ' . $this->comida . '</p>';
    }
    public function aparecer(){
        echo '<img src="' . $this->foto . '">';
    }
    public function tiene_pulgas(){
        echo ($this->pulgas) ? '<p>Tiene pulgas</p>' : '<p>No tiene pulgas</p>';
    }
    public function mas_info(){
        self::ladrar();
        Perro::comer('huesos');
        echo '<p>El mejor amigo del perro es el ' . Perro::$mejor_amigo . '</p>';
        echo '<p>La mejor cualidad del perro es ' . self::MEJOR_CUALIDAD . '</p>';

    }
}

//Instanciar un objeto de la clase
$kenai = new Perro('KeNai', 'Firefox', 3, true, true, 'http://jonmircha.github.io/slides-poo-js/img/kenai.jpg', false);

//echo $kenai;
//var_dump($kenai);
 echo '<h1>' . $kenai->nombre . '</h1>';
 echo '<h2>' . $kenai->raza . '</h2>';
 echo '<h3>' . $kenai->edad . '</h3>';
 echo '<h4>' . $kenai->sexo . '</h4>';
 echo '<h5>' . $kenai->adiestrado . '</h5>';
 echo '<h6>' . $kenai->foto . '</h6>';
 //echo '<h6>' . $kenai->pulgas . '</h6>';
 
 $kenai->ladrar();
 $kenai->comer('croquetas');
 $kenai->comer('tacos');
 $kenai->aparecer();
 $kenai->tiene_pulgas();
 $kenai->mas_info();
?>