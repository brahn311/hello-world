# modelo entidad relacion

#### Tablas
- edificio
  - edificio_id
  - nombre
  - pisos
  - condominio_id
- pisos
  - piso_id
  - numero
  - edificio_id
- inmuebles
  - inmueble_id
  - inmueble_type_id
  - name
  - piso_id
- inmuebles_types
  - inmueble_type_id
  - name
- alicuotas
  - alicuota_id
  - inmueble_type_id
  - porcentaje
- propietarios
  - propietario_id
  - name
  - lastname
- emails
  - email_id
  - email
  - propietario_id
- codigos_areas
  - area_id
  - codigo_area
- telefonos
  - telefono_id
  - codigo_area_id
  - numero
  - propietario_id
- condominio
  - condominio_id
  - nombre
  - rif
  - direccion
- condominio_juntas
  - junta_id
  - propietario_id
  - funcion_id
- condominio_funciones
  - funcion_id
  - name

#### Pendiente por definir

Movimientos (extraer de proyecto_gastos)

- cuentas =

- movimientos_types
  - movimiento_type_id
  - name
  - description

- varios tipos de cuenta: efectivo, bancaria, wallet

#### Procesos varios
- movimientos
  - entrada (cobros) > recibos de pago
  - salida (pagos) > periodo > proforma > recibos de cobro

- los recibos de pago poseen
  - intereses de mora
  - gastos (pagos)

- registrar variaciones del dolar

- registrar moneda

- periodos
  - periodo_id
  - name
  - inicio
  - fin

- gastos fijos

- gastos periodo

- gastos: (comunes, eventuales, especiales)

- gastos
  - comun (cobrado segun porcentaje de alicuota)
  - fijos (cobrar mismo porcentaje para todos)
  - especial (aplica a solo un apartamento)
  - a fondo

  - gasto_type_id

condominio > edificio > piso > inmueble > propietario
