<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Address $Address
 * @property Phone $Phone
 */
class User extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'born_date' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'password' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

   public function beforeSave($options = array()){
		$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
		return $this->data;
		
	}

  public function upload(Array $arquivo, $diretorio = null) {
		
	    if ((!$arquivo['error']) and ($arquivo['size'])){  
	          
			$diretorio_local=substr($diretorio, 0, -1);  

	        $diretorio_local=WWW_ROOT.str_replace(array('/'),DS,$diretorio);  
	        $diretorio_local = str_replace(array(DS.DS), DS, $diretorio_local);  
	              
	        if(!is_dir($diretorio_local)){  
	              
	            $folder = new Folder();  
	  
	            if($folder->create($diretorio_local)){  
	                $folder->chmod($diretorio_local, 0755, true);  
	            } else {  
	                throw new NotFoundException(__('Erro ao criar a pasta'));  
	            }  
	        }  
	          
	        $arquivo_tmp = new File($arquivo['tmp_name'],false);  
	          
	        $dados = $arquivo_tmp->read();  
	          
	        $arquivo_tmp->close();  
	          
	        $arquivo_nome = new File($diretorio_local.DS.$arquivo['name'],false,0644);  
	          
	        $arquivo_nome->create();  
	          
	        $arquivo_nome->write($dados);  
	          
	        $arquivo_nome->close();  
	          
	        return $arquivo['name'];  
	          
	    } else {  
	        //se deu erro no upload  
	        throw new NotFoundException(__('Erro ao enviar arquivo'));  
	    }  
	}


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Phone' => array(
			'className' => 'Phone',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
