<?php
    class DomDocumentParser{

        private $doc;

        public function __construct($url){

            ini_set('max_execution_time', '1000');
            
            $options = array('http'=>array('method'=>"GET",'header'=>"User-Agent: searchEngineBot/0.1\n"));

            $context = stream_context_create($options);

            $this->doc = new DOMDocument();
            @$this->doc->loadHTML(file_get_contents($url,false,$context));
        }

        public function getlinks(){
            return $this->doc->getElementsByTagName("a");
        }

        public function getTitleTags(){
            return $this->doc->getElementsByTagName("title");
        }

        public function getMetaTags(){
            return $this->doc->getElementsByTagName("meta");
        }

        public function getImages(){
            return $this->doc->getElementsByTagName("img");
        }

    }
?>