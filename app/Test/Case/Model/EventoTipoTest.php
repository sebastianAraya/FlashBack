<?php
App::uses('EventoTipo', 'Model');

/**
 * EventoTipo Test Case
 *
 */
class EventoTipoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.evento_tipo',
		'app.evento',
		'app.recinto',
		'app.estado_evento',
		'app.cliente',
		'app.cliente_tipo',
		'app.solicitud_cotizacione',
		'app.bitacora',
		'app.vehiculo',
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
		'app.itinerario_participante',
		'app.empleado',
		'app.empleado_tipo',
		'app.empleados_evento',
		'app.actividade',
		'app.actividades_evento_tipo',
		'app.actividades_evento',
		'app.participante_tipo',
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
		$this->EventoTipo = ClassRegistry::init('EventoTipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EventoTipo);

		parent::tearDown();
	}

}
