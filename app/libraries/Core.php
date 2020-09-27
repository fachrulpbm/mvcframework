<?php

    class Core{

        protected $currentController = 'Pages';
        protected $currentmethod = 'index';
        protected $params = [];

        public function __construct(){
            print_r( $this->getUrl() );
        }

        public function getUrl(){
            if (isset($_GET['url'])) {
                $url = rtrim( $_GET['url'], '/' );

                /* Memungkinkan untuk menyeleksi variable sebagai string/number */
                $url = filter_var($url, FILTER_SANITIZE_URL);

                /* Memotong menjadi suatu array */
                $url = explode('/', $url);

                return $url;
            }
        }


    }

?>