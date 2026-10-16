# 🎮 IndieDex API — Public & Open-Source Indie Games REST API

> Una API RESTful pública y gratuita para consultar información estructurada sobre videojuegos independientes, sus personajes, estudios de desarrollo, motores gráficos y plataformas. Diseñada como una herramienta de práctica y pruebas para estudiantes y desarrolladores frontend (al estilo de PokéAPI o The Rick and Morty API).

---

## 🚀 Características Principales

* **Base de Datos Normalizada (3NF):** Relaciones complejas (1:N y N:M) bien estructuradas para representar de forma realista el ecosistema indie.
* **Formato Estandarizado:** Respuestas JSON limpias construidas con *API Resources* de Laravel.
* **Paginación Nativa:** Respuestas paginadas por defecto (`?page=1`) que incluyen metadatos (`meta` y `links`) para facilitar la maquetación de componentes de paginación en el frontend.
* **Filtros y Búsqueda:** Parámetros por URL para filtrar juegos por título (`?search=`), motor gráfico (`?engine=`), etc.
* **Rendimiento Optimizado:** Consultas optimizadas con *Eager Loading* para prevenir el problema de rendimiento $N+1$.

---

## 🗺️ Próximas Mejoras y Hoja de Ruta (Roadmap)

Este proyecto está en constante evolución. Las siguientes fases de desarrollo incluyen:

- [ ] **Enriquecimiento y Concisión de Datos:** Refinar las descripciones de los juegos y personajes para hacerlas más técnicas, concisas y detalladas.
- [ ] **Servidor de Recursos Multimedia (Imágenes):** Alojar y enlazar carátulas oficiales, bocetos y *sprites* de personajes en alta resolución a través de un CDN o almacenamiento público.
- [ ] **Página Web de Documentación Integrada:** Crear una interfaz visual interactiva en la raíz del proyecto (`/`) dentro de la misma aplicación de Laravel (estilo PokéAPI), donde los usuarios puedan probar las peticiones directamente desde el navegador, ver ejemplos en tiempo real y copiar fragmentos de código en JavaScript (`fetch`/`axios`).
- [ ] **Ampliación del Catálogo:** Expandir la base de datos para incluir más de 50 juegos indies icónicos.

---

## 📚 Documentación de la API (Endpoints)

**URL Base Local:** `http://127.0.0.1:8000/api`

### Resumen de Rutas

| Método | Endpoint | Descripción | Parámetros de Consulta |
| :--- | :--- | :--- | :--- |
| `GET` | `/games` | Lista paginada de videojuegos indies | `?search=`, `?engine=`, `?page=` |
| `GET` | `/games/{id}` | Información detallada de un juego | Ninguno |
| `GET` | `/characters` | Lista paginada de personajes | `?search=`, `?page=` |
| `GET` | `/characters/{id}` | Detalle de un personaje y sus juegos | Ninguno |
| `GET` | `/developers` | Lista de estudios de desarrollo | Ninguno |
| `GET` | `/developers/{id}` | Detalle del estudio y sus juegos | Ninguno |
| `GET` | `/engines` | Lista de motores gráficos | Ninguno |
| `GET` | `/platforms` | Lista de plataformas soportadas | Ninguno |
| `GET` | `/genres` | Lista de géneros de videojuegos | Ninguno |

---

## 💡 Ejemplos de Petición y Respuesta

### 1. Obtener lista de juegos (`GET /api/games?page=1`)

**Ejemplo de Respuesta JSON:**

```json
{
  "data": [
    {
      "id": 1,
      "title": "Hollow Knight",
      "description": "Una aventura épica de acción en 2D a través de un vasto reino de insectos en ruinas...",
      "release_date": "2017-02-24",
      "cover_image": "https://tu-dominio.com/img/hollow-knight.jpg",
      "developer": {
        "id": 1,
        "name": "Team Cherry",
        "country": "Australia",
        "website": "teamcherry.com.au"
      },
      "engine": {
        "id": 2,
        "name": "Unity"
      },
      "genres": [
        { "id": 1, "name": "Metroidvania" },
        { "id": 2, "name": "Acción" }
      ],
      "platforms": [
        { "id": 1, "name": "PC (Windows)" },
        { "id": 4, "name": "Nintendo Switch" }
      ]
    }
  ],
  "links": {
    "first": "http://127.0.0.1:8000/api/games?page=1",
    "last": "http://127.0.0.1:8000/api/games?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "per_page": 10,
    "to": 10,
    "total": 10
  }
}
```

### 2. Obtener un juego por ID con sus personajes (`GET /api/games/1`)

**Ejemplo de Respuesta JSON:**

```json
{
  "data": {
    "id": 1,
    "title": "Hollow Knight",
    "description": "Una aventura épica de acción en 2D...",
    "release_date": "2017-02-24",
    "cover_image": "https://tu-dominio.com/img/hollow-knight.jpg",
    "developer": {
      "id": 1,
      "name": "Team Cherry"
    },
    "engine": {
      "id": 2,
      "name": "Unity"
    },
    "genres": [...],
    "platforms": [...],
    "characters": [
      {
        "id": 1,
        "name": "The Knight",
        "description": "Un ser silencioso, de pequeña estatura...",
        "image_url": "https://tu-dominio.com/img/knight.jpg",
        "role": "Protagonista"
      },
      {
        "id": 2,
        "name": "Hornet",
        "description": "La protectora de las ruinas de Hallownest...",
        "image_url": "https://tu-dominio.com/img/hornet.jpg",
        "role": "Jefe / Aliada"
      }
    ]
  }
}
```

---

## 🛠️ Instalación y Configuración Local

Si deseas clonar este proyecto y ejecutarlo en tu máquina local:

1. **Clonar el repositorio:**
   ```bash
   git clone https://github.com/tu-usuario/indiedex-api.git
   cd indiedex-api
   ```

2. **Instalar dependencias de PHP:**
   ```bash
   composer install
   ```

3. **Configurar el archivo de entorno:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Configurar SQLite (o la base de datos de tu preferencia):**
   Crea el archivo de SQLite dentro de la carpeta `database`:
   ```bash
   touch database/database.sqlite
   ```
   En tu archivo `.env`, asegúrate de tener:
   ```env
   DB_CONNECTION=sqlite
   ```

5. **Ejecutar migraciones y poblar la base de datos:**
   ```bash
   php artisan migrate:fresh --seed --seeder=IndieGamesSeeder
   ```

6. **Iniciar el servidor local:**
   ```bash
   php artisan serve
   ```
   Accede a la API en `http://127.0.0.1:8000/api/games`.

