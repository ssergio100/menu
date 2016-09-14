<?php 

    /**
     * Classe que representa um item do menu
     *
     * @author Hugo Silva
     */
    class MenuItem {
    	/** @var int */
    	public $codmenu;
    	/** @var int */
    	public $codpai;
    	/** @var string */
    	public $nome;
    	/** @var int */
    	public $ordem;
    	/** @var array */
    	public $filhos = array();
    	
    	/**
    	 * Gera o HTML para o elemento.
    	 *
    	 * Também gera o html para cada filho, fazendo assim uma arvore
    	 * correta para representação em HTML.
    	 * @author Hugo Silva
    	 * @return string
    	 */
    	public function getHtml(){
    		$html = '<li><a href="#">' . $this->nome . '</a>';
    		if(!empty($this->filhos)){
    			$html .= '<ul>';
    			foreach($this->filhos as $filho){
    				$html .= $filho->getHtml();
    			}
    			$html .= '</ul>';
    		}
    		$html .= '</li>';
    		
    		return $html;
    	}
    }


