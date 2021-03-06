<?php
App::uses('ItinerarioParticipante', 'Model');

/**
 * ItinerarioParticipante Test Case
 *
 */
class ItinerarioParticipanteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.itinerario_participante',
		'app.participante',
		'app.participante_tipo',
		'app.participan',
		'app.solicitud_cotizacione',
		'app.evento_tipo',
		'app.evento',
		'app.recinto',
		'app.estado_evento',
		'app.cliente',
		'app.cliente_tipo',
		'app.bitacora',
		'app.vehiculo',
		'app.vehiculo_tipo',
		'app.recursos_por_evento',
		'app.recurso',
		'app.recurso_tipo',
		'app.proveedore',
		'app.proveedores_recurso_tipo',
		'app.propiedade',
		'app.propiedades_recurso_tipo',
		'app.medida',
		'app.medidas_propiedade',
		'app.propiedades_recurso',
		'app.empleado',
		'app.empleado_tipo',
		'app.empleados_evento',
		'app.actividade',
		'app.actividades_evento_tipo',
		'app.actividades_evento',
		'app.evento_tipos_participante_tipo',
		'app.recinto_tipo',
		'app.evento_tipos_recinto_tipo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ItinerarioParticipante = ClassRegistry::init('ItinerarioParticipante');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ItinerarioParticipante);

		parent::tearDown();
	}

}
