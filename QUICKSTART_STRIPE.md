# 🚀 Quick Start - Stripe en 5 Minutos

## 1️⃣ Obtener Claves de Stripe (2 min)

1. Regístrate en [https://dashboard.stripe.com/register](https://dashboard.stripe.com/register)
2. Ve a **Developers → API keys**
3. Copia tus claves de **Test mode**

## 2️⃣ Configurar .env (1 min)

Agrega a tu archivo `.env`:

```env
STRIPE_PUBLIC_KEY=pk_test_TU_CLAVE_PUBLICA_AQUI
STRIPE_SECRET_KEY=sk_test_TU_CLAVE_SECRETA_AQUI
STRIPE_WEBHOOK_SECRET=  # Dejar vacío por ahora
STRIPE_CURRENCY=usd
APP_URL=http://localhost:8000
```

## 3️⃣ Limpiar Caché (30 seg)

```bash
php artisan config:clear
php artisan cache:clear
```

## 4️⃣ Probar! (1 min)

1. Inicia tu servidor: `php artisan serve`
2. Ve a la página de habitaciones
3. Haz una reserva
4. Usa esta tarjeta de prueba:
   - **Número:** `4242 4242 4242 4242`
   - **Fecha:** `12/25`
   - **CVC:** `123`
   - **ZIP:** `12345`

## ✅ ¡Listo!

Tu pago debería procesarse y ver la página de confirmación.

---

## 🔧 Webhooks (Opcional - Para Desarrollo Local)

Si quieres probar webhooks:

```bash
# Instalar Stripe CLI
# Windows: scoop install stripe
# Mac: brew install stripe/stripe-cli/stripe

# Login
stripe login

# Escuchar webhooks
stripe listen --forward-to localhost:8000/payment/webhook

# Copiar el "webhook signing secret" que aparece
# Agregarlo a .env como STRIPE_WEBHOOK_SECRET
```

---

## 📝 Tarjetas de Prueba

| Propósito | Número |
|-----------|--------|
| ✅ Éxito | `4242 4242 4242 4242` |
| ❌ Decline | `4000 0000 0000 0002` |
| 🔐 3D Secure | `4000 0025 0000 3155` |

**Todos los campos:**
- Fecha: Cualquier fecha futura
- CVC: Cualquier 3 dígitos
- ZIP: Cualquier código

---

## 🆘 ¿Problemas?

Ver **STRIPE_SETUP.md** para documentación completa o **STRIPE_IMPLEMENTATION_SUMMARY.md** para el resumen.

---

¡Disfruta procesando pagos con Stripe! 🎉

