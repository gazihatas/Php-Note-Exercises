<?php

class Magic{

    // Magic Literals
    public $dosya;
    public $satir;
    public $verisyon;
    public $sistem;
    public $dizin;
    public $dosyaDizini;
    public $varsayilanDizin;




    public function __construct() {
        echo "<b>".__CLASS__." class is running</b>";
        print "<br>\n";
        print "<br>\n";
        
    }


    public function getMacigLiterals() {
        
        $this->dosya = __FILE__;
        echo "<b>File: </b>".$this->dosya;
        print "<br>\n";
        
        $this->satir = __LINE__;
        echo "<b>Line: </b>".$this->satir;
        print "<br>\n";
        
        $this->versiyon = PHP_VERSION;
        echo "<b>Php v.</b>".$this->versiyon;
        print "<br>\n";
        
        $this->sistem = PHP_OS;
        echo "<b>OS: </b>".$this->sistem;
        print "<br>\n";
        
        $this->dizin = __DIR__;
        echo "<b>Path: </b>".$this->dizin;
        print "<br>\n";
        
        $this->dosyaDizini = realpath(__FILE__);
        echo "<b>Realpath: </b>".$this->dosyaDizini;
        print "<br>\n";

        $this->varsayilanDizin = DEFAULT_INCLUDE_PATH;
        echo "<b>Default Include Path: </b>".$this->varsayilanDizin;

        /*
        Aynen __DIR__
        echo dirname(__FILE__);
        print "<br>\n";
        */     

    }

    public function getMagicLiteralsTable() {
    echo '<table class="table table-dark">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Literals Variable</th>
                <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <th scope="row">1</th>
                    <td>'.$this->documentRoot.'</td>
                    <td>Sunucunun dosya yolu bilgisini verir.</td>
                </tr>

                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                </tr>
            
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                </tr>

            </tbody>
        </table>';
    }

    public function getServerInfo() {
       echo "<b>SERVER INFO | Sunucu Bilgileri</b><br>";
       
       $documentRoot  = $_SERVER['DOCUMENT_ROOT'];
       echo "$documentRoot <br>";
       
       $httpReferer   = $_SERVER['HTTP_REFERER'];
       echo "$httpReferer <br>";
       
       $httpUserAgent = $_SERVER['HTTP_USER_AGENT'];
       echo "$httpUserAgent <br>";
       
       $https         = $_SERVER['HTTPS'];
       echo "$https <br>";
       
       $pathInfo      = $_SERVER['PATH_INFO'];
       echo "$pathInfo <br>";
       
       $queryString   = $_SERVER['QUERY_STRING'];
       echo "$queryString <br>";
       
       $remoteAddr    = $_SERVER['REMOTE_ADDR'];
       echo "$remoteAddr <br>";
       
       $requestMethod = $_SERVER['REQUEST_METHOD'];
       echo "$requestMethod <br>";
       
       $requestUrl    = $_SERVER['REQUEST_URL'];
       echo "$requestUrl <br>";
       
       $scriptName    = $_SERVER['SCRIPT_NAME'];
       echo "$scriptName <br>";
       
       $serverName    = $_SERVER['SERVER_NAME'];
       echo "$serverName <br>";
       
       $serverRoot    = $_SERVER['SERVER_ROOT'];
       echo "$serverRoot <br>";


    }
}

?>