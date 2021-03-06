<?php
App::uses('AppModel', 'Model');
/**
 * Vehiculo Model
 *
 * @property VehiculoTipo $VehiculoTipo
 * @property Bitacora $Bitacora
 */
class Vehiculo extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'vehiculo_tipo_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'VehiculoTipo' => array(
			'className' => 'VehiculoTipo',
			'foreignKey' => 'vehiculo_tipo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Bitacora' => array(
			'className' => 'Bitacora',
			'foreignKey' => 'vehiculo_id',
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
