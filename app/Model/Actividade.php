<?php
App::uses('AppModel', 'Model');
/**
 * Actividade Model
 *
 * @property EventoTipo $EventoTipo
 * @property Evento $Evento
 */
class Actividade extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'EventoTipo' => array(
			'className' => 'EventoTipo',
			'joinTable' => 'actividades_evento_tipos',
			'foreignKey' => 'actividade_id',
			'associationForeignKey' => 'evento_tipo_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Evento' => array(
			'className' => 'Evento',
			'joinTable' => 'actividades_eventos',
			'foreignKey' => 'actividade_id',
			'associationForeignKey' => 'evento_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
