# Configuración de Stripe para Laravel Hotel Miranda

## 📋 Tabla de Contenidos

-   [Requisitos](#requisitos)
-   [Instalación](#instalación)
-   [Configuración](#configuración)
-   [Variables de Entorno](#variables-de-entorno)
-   [Webhooks](#webhooks)
-   [Uso](#uso)
-   [Testing](#testing)
-   [Troubleshooting](#troubleshooting)

## ✅ Requisitos

-   PHP >= 8.2
-   Composer
-   Laravel 11
-   Cuenta de Stripe (https://dashboard.stripe.com/register)

## 🚀 Instalación

El paquete de Stripe ya está instalado. Si necesitas reinstalarlo:

```bash
composer require stripe/stripe-php
```

## ⚙️ Configuración

### 1. Obtener las Claves de API de Stripe

1. Ve a tu [Dashboard de Stripe](https://dashboard.stripe.com/)
2. Navega a **Developers > API keys**
3. Copia tu **Publishable key** y **Secret key**

### 2. Configurar Variables de Entorno

Agrega las siguientes variables a tu archivo `.env`:

```env
# Stripe Configuration
STRIPE_PUBLIC_KEY=pk_test_XXXXXXXXXXXXXXXXXXXXXXXXXXXX
STRIPE_SECRET_KEY=sk_test_XXXXXXXXXXXXXXXXXXXXXXXXXXXX
STRIPE_WEBHOOK_SECRET=whsec_XXXXXXXXXXXXXXXXXXXXXXXXXXXX
STRIPE_CURRENCY=usd

# App URL (importante para Stripe redirects)
APP_URL=http://localhost:8000
```

⚠️ **IMPORTANTE**:

-   En **desarrollo**, usa las claves que comienzan con `pk_test_` y `sk_test_`
-   En **producción**, usa las claves que comienzan con `pk_live_` y `sk_live_`

### 3. Ejecutar Migraciones

```bash
php artisan migrate
```

Esto creará los campos necesarios en la tabla `bookings`:

-   `amount` - Monto de la reserva
-   `currency` - Moneda del pago (USD, EUR, etc.)
-   `stripe_payment_intent_id` - ID del intento de pago de Stripe
-   `stripe_session_id` - ID de la sesión de checkout
-   `payment_status` - Estado del pago (pending, processing, succeeded, failed, canceled)
-   `paid_at` - Fecha y hora del pago

## 🔗 Variables de Entorno

| Variable                | Descripción                              | Requerido     | Ejemplo                 |
| ----------------------- | ---------------------------------------- | ------------- | ----------------------- |
| `STRIPE_PUBLIC_KEY`     | Clave pública de Stripe para el frontend | ✅ Sí         | `pk_test_51abc...`      |
| `STRIPE_SECRET_KEY`     | Clave secreta de Stripe para el backend  | ✅ Sí         | `sk_test_51abc...`      |
| `STRIPE_WEBHOOK_SECRET` | Secret para verificar webhooks           | ⚠️ Producción | `whsec_abc...`          |
| `STRIPE_CURRENCY`       | Moneda por defecto                       | No            | `usd` (default)         |
| `APP_URL`               | URL base de la aplicación                | ✅ Sí         | `http://localhost:8000` |

## 🪝 Webhooks

Los webhooks permiten a Stripe notificar a tu aplicación sobre eventos importantes (pagos exitosos, fallos, etc.).

### Configuración Local (Desarrollo)

Para probar webhooks localmente, usa **Stripe CLI**:

1. **Instalar Stripe CLI:**

    - Windows: `scoop install stripe`
    - Mac: `brew install stripe/stripe-cli/stripe`
    - Linux: Ver [documentación oficial](https://stripe.com/docs/stripe-cli)

2. **Login en Stripe CLI:**

    ```bash
    stripe login
    ```

3. **Reenviar eventos a tu aplicación local:**

    ```bash
    stripe listen --forward-to localhost:8000/payment/webhook
    ```

4. **Copiar el webhook secret que se muestra:**

    ```
    Ready! Your webhook signing secret is 'whsec_xxxxxxxxxxxx'
    ```

5. **Actualizar `.env`:**
    ```env
    STRIPE_WEBHOOK_SECRET=whsec_xxxxxxxxxxxx
    ```

### Configuración en Producción

1. Ve a tu [Dashboard de Stripe](https://dashboard.stripe.com/)
2. Navega a **Developers > Webhooks**
3. Click en **Add endpoint**
4. Ingresa tu URL: `https://tu-dominio.com/payment/webhook`
5. Selecciona los eventos a escuchar:
    - `checkout.session.completed`
    - `payment_intent.succeeded`
    - `payment_intent.payment_failed`
6. Copia el **Signing secret** generado
7. Actualiza tu `.env` de producción con el secret

### Eventos Manejados

La aplicación maneja los siguientes eventos de Stripe:

| Evento                          | Descripción                   | Acción                            |
| ------------------------------- | ----------------------------- | --------------------------------- |
| `checkout.session.completed`    | Sesión de checkout completada | Actualiza el estado a "succeeded" |
| `payment_intent.succeeded`      | Pago exitoso                  | Marca la reserva como pagada      |
| `payment_intent.payment_failed` | Pago fallido                  | Marca el pago como "failed"       |

## 💻 Uso

### Flujo de Pago Completo

1. **Usuario hace una reserva:**

    ```php
    POST /rooms/{id}/book
    ```

2. **Sistema crea la reserva y calcula el monto:**

    ```php
    $booking = Booking::create([...]);
    $amount = $booking->calculateAmount();
    ```

3. **Usuario es redirigido a Stripe Checkout:**

    ```php
    GET /payment/checkout/{booking}
    ```

4. **Usuario completa el pago en Stripe**

5. **Stripe redirige según el resultado:**

    - ✅ Éxito: `/payment/success?session_id=xxx`
    - ❌ Cancelado: `/payment/cancel?booking_id=xxx`

6. **Webhook confirma el pago** (background process)

### Rutas Disponibles

| Ruta                          | Método | Descripción                       |
| ----------------------------- | ------ | --------------------------------- |
| `/payment/checkout/{booking}` | GET    | Crea sesión de Stripe y redirige  |
| `/payment/success`            | GET    | Página de confirmación de pago    |
| `/payment/cancel`             | GET    | Página de pago cancelado          |
| `/payment/status/{booking}`   | GET    | Ver estado de pago de una reserva |
| `/payment/webhook`            | POST   | Endpoint para webhooks de Stripe  |

### Métodos del Modelo Booking

```php
// Verificar si está pagado
$booking->isPaid(); // bool

// Marcar como pagado
$booking->markAsPaid();

// Calcular monto total
$amount = $booking->calculateAmount(); // float

// Estados de pago
$booking->payment_status; // 'pending', 'processing', 'succeeded', 'failed', 'canceled'
```

## 🧪 Testing

### Tarjetas de Prueba

Usa estas tarjetas de prueba en el entorno de desarrollo:

| Tarjeta            | Número                | Resultado                 |
| ------------------ | --------------------- | ------------------------- |
| Visa               | `4242 4242 4242 4242` | ✅ Pago exitoso           |
| Visa (3D Secure)   | `4000 0025 0000 3155` | ✅ Requiere autenticación |
| Mastercard         | `5555 5555 5555 4444` | ✅ Pago exitoso           |
| Decline            | `4000 0000 0000 0002` | ❌ Pago rechazado         |
| Insufficient Funds | `4000 0000 0000 9995` | ❌ Fondos insuficientes   |

**Datos de prueba:**

-   Fecha de expiración: Cualquier fecha futura (ej: `12/25`)
-   CVC: Cualquier 3 dígitos (ej: `123`)
-   ZIP: Cualquier código postal (ej: `12345`)

### Probar Webhooks

```bash
# Reenviar todos los eventos
stripe listen --forward-to localhost:8000/payment/webhook

# Simular un evento específico
stripe trigger payment_intent.succeeded
```

## 🔧 Troubleshooting

### Error: "No API key provided"

**Solución:**

```bash
# Verificar que las variables estén en .env
php artisan config:clear
php artisan cache:clear
```

### Error: "Invalid webhook signature"

**Solución:**

```bash
# Asegúrate de que STRIPE_WEBHOOK_SECRET esté configurado
# En desarrollo, usa Stripe CLI para obtener el secret correcto
stripe listen --forward-to localhost:8000/payment/webhook
```

### Error: "Amount must be at least..."

**Solución:**

-   Stripe requiere un monto mínimo (usualmente $0.50 USD)
-   Verifica que `Room::price` tenga un valor válido
-   Asegúrate de que el cálculo de noches sea correcto

### Pago exitoso pero booking no se actualiza

**Solución:**

1. Verifica que los webhooks estén configurados
2. Revisa los logs: `tail -f storage/logs/laravel.log`
3. Verifica en Stripe Dashboard > Webhooks si hay errores

### Redirección fallida después del pago

**Solución:**

```env
# Asegúrate de que APP_URL esté correctamente configurado
APP_URL=http://localhost:8000  # desarrollo
APP_URL=https://tu-dominio.com  # producción
```

## 📚 Recursos Adicionales

-   [Documentación oficial de Stripe](https://stripe.com/docs)
-   [Stripe PHP Library](https://github.com/stripe/stripe-php)
-   [Stripe Testing](https://stripe.com/docs/testing)
-   [Stripe Checkout](https://stripe.com/docs/payments/checkout)
-   [Webhooks Guide](https://stripe.com/docs/webhooks)

## 🔒 Seguridad

⚠️ **NUNCA** commits las claves de API al repositorio:

```bash
# Agrega .env al .gitignore (ya debería estar)
echo ".env" >> .gitignore
```

✅ **Mejores prácticas:**

-   Usa diferentes claves para desarrollo y producción
-   Rota las claves regularmente
-   Verifica las firmas de webhooks
-   Usa HTTPS en producción
-   Habilita 3D Secure para pagos mayores

## 📧 Soporte

Para problemas o preguntas:

-   Documentación de Stripe: https://stripe.com/docs
-   Soporte de Stripe: https://support.stripe.com/

---

**¡Listo!** 🎉 Tu integración con Stripe está completa y lista para procesar pagos de forma segura.
