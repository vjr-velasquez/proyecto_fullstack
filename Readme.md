# Sistema de Parqueo Automatizado

Sistema de gestión y control automatizado para estacionamientos desarrollado en Pascal.

## Descripción

Este sistema permite la administración completa de un parqueo mediante la automatización de procesos de entrada, salida, cobro y control de espacios disponibles.

## Características Principales

- 🚗 **Control de entrada y salida** de vehículos
- 🎫 **Generación automática de tickets** con fecha/hora
- 💰 **Cálculo automático de tarifas** por tiempo de estancia
- 📊 **Monitoreo de espacios** disponibles/ocupados
- 📋 **Registro de historial** de vehículos
- 🔍 **Búsqueda de vehículos** por placa o ticket
- 💳 **Múltiples métodos de pago**

## Funcionalidades

### Gestión de Vehículos
- Registro de entrada con placa y tipo de vehículo
- Asignación automática de espacio de parqueo
- Control de salida con cálculo de tiempo y tarifa
- Validación de tickets y placas

### Control de Espacios
- Monitoreo en tiempo real de espacios disponibles
- Clasificación por tipo de vehículo (auto, moto, camión)
- Reserva de espacios especiales (discapacitados, VIP)

### Sistema de Tarifas
- Tarifas diferenciadas por tipo de vehículo
- Cálculo por horas, fracciones o día completo
- Descuentos para clientes frecuentes
- Tarifas especiales (nocturnas, fines de semana)

## Instalación

1. **Requisitos del sistema:**
   - Free Pascal Compiler 3.0+
   - Sistema operativo: Windows/Linux/macOS
   - Memoria RAM: 512 MB mínimo

2. **Compilación:**
   ```bash
   fpc parqueo.pas
   ```

3. **Ejecución:**
   ```bash
   ./parqueo
   ```

## Configuración

### Archivo de configuración (`config.txt`)
```
ESPACIOS_TOTAL=100
ESPACIOS_MOTOS=20
ESPACIOS_AUTOS=70
ESPACIOS_CAMIONES=10
TARIFA_HORA_AUTO=5.00
TARIFA_HORA_MOTO=2.50
TARIFA_HORA_CAMION=8.00
```

### Base de datos
El sistema utiliza archivos de texto para almacenar:
- `vehiculos.dat` - Registro de vehículos
- `tickets