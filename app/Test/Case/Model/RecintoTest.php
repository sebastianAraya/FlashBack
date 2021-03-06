<?php
App::uses('Recinto', 'Model');

/**
 * Recinto Test Case
 *
 */
class RecintoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.recinto',
		'app.recinto_tipo',
		'app.solicitud_cotizacione',
		'app.estado',
		'app.evento_tipo',
		'app.evento',
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
		'app.itinerario_participante',
		'app.participante',
		'app.participante_tipo',
		'app.participan',
		'app.evento_tipos_participante_tipo',
		'app.empleado',
		'app.empleado_tipo',
		'app.empleados_evento',
		'app.actividade',
		'app.actividades_evento_tipo',
		'app.actividades_evento',
		'app.evento_tipos_recinto_tipo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Recinto = ClassRegistry::init('Recinto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Recinto);

		parent::tearDown();
	}

}
